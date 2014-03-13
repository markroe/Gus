<?php

namespace Roelab\GusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Roelab\GusBundle\Utility;
use Roelab\GusBundle\Entity\Ipaddress;
use Roelab\GusBundle\Entity\Client;
use Roelab\GusBundle\Entity\Can;
use Roelab\GusBundle\Entity\Webcan;
use Roelab\GusBundle\Entity\Emailcan;
use Roelab\GusBundle\Entity\Dlpcan;
use Roelab\GusBundle\Entity\Job;
use Roelab\GusBundle\Entity\Jobcan;
use Roelab\GusBundle\Form\ClientType;
use Roelab\GusBundle\Form\CanType;
use Roelab\GusBundle\Form\WebcanType;
use Roelab\GusBundle\Form\EmailcanType;
use Roelab\GusBundle\Form\DlpcanType;
use Roelab\GusBundle\Form\JobType;
use Doctrine\ORM\EntityRepository;

class DefaultController extends Controller
{
	public function welcomeAction() {
		return $this->render('RoelabGusBundle:Default:index.html.twig');
	}

	public function webAction() {
		return $this->render('RoelabGusBundle:Default:web.html.twig');
	}

	public function webjobsAction(Request $request) {
		$jobs = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Job')
			->findByType(1);
        $form = $this->createForm(new JobType())
            ->add('cans', 'entity',array(
                'class' => 'RoelabGusBundle:Can',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.type = 1')
                        ->orderBy('u.name', 'ASC');
                },
                'property' => 'name',
                'multiple' => 'true',
                'expanded' => true,)
            );
		$form->handleRequest($request);

		if ($form->isValid()) {
            $data = $form->getData();
		    $job = new Job();
			$job->setType('1');
            $job->setSchedule($data['schedule']);
            $job->setName($data['name']);
			$em = $this->getDoctrine()->getManager();
			$em->persist($job);
			$em->flush();
            foreach ($data['cans'] as $can) {
                $jobcan = new Jobcan();
                $jobcan->setJobId($job->getId());
                $jobcan->setCan($can);
			    $em->persist($jobcan);
            }
			$em->flush();
		    $cmd = $job->getSchedule()." /usr/bin/php /var/www/src/Roelab/GusBundle/Resources/scripts/web.php ".$job->getId()." 2>&1\n";
            $ut = new Utility();
		    $ut->addToCron($cmd);
			return $this->redirect($this->generateUrl('webjobs'));
		}
        $job = new Job();
		return $this->render('RoelabGusBundle:Default:webjobs.html.twig', array('form' => $form->createView(), 'jobs' => $jobs));
	}

	public function editwebjobAction($id, Request $request) {
		$em = $this->getDoctrine()->getManager();
		$job = $em->getRepository('RoelabGusBundle:Job')->find($id);

		if (!$job) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
		    $form = $this->createForm(new JobType(), $job);
			$form->handleRequest($request);
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($job);
				$em->flush();
				return $this->redirect($this->generateUrl('webjobs'));
			}
		}
		$jobs = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Job')
			->findByType(1);
		return $this->render('RoelabGusBundle:Default:webjobs.html.twig', array('form' => $form->createView(), 'jobs' => $jobs));
	}

	public function deletewebjobAction($id) {
		$em = $this->getDoctrine()->getManager();
		$job = $em->getRepository('RoelabGusBundle:Job')->find($id);

		if (!$job) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
		    $pattern = "/(web.php ".$job->getId().")/im";
			$em->remove($job);
			$em->flush();
            $ut = new Utility();
            $ut->deleteFromCron($pattern);
		}
		return $this->redirect($this->generateUrl('webjobs'));
	}

	public function webcansAction(Request $request) {
		$cans = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Can')
			->findByType(1);
		$form = $this->createForm(new WebcanType());
		$form->handleRequest($request);

		if ($form->isValid()) {
			$data = $form->getData();
			$can = new Can();
			$can->setName($data['name']);
			$can->setType('1');
			$em = $this->getDoctrine()->getManager();
			$em->persist($can);
			$em->flush();
			foreach (explode("\n",$data['url']) as $url) {
				$webcan = new Webcan();
				$webcan->setUrl($url);
				$webcan->setCan($can);
				$em2 = $this->getDoctrine()->getManager();
				$em2->persist($webcan);
			}
			$em2->flush();
		 
			return $this->redirect($this->generateUrl('webcans'));
		}
        $webcans = new Webcan();
		return $this->render('RoelabGusBundle:Default:webcans.html.twig', array('form' => $form->createView(), 'cans' => $cans, 'webcans' => $webcans));
	}

	public function editwebcanAction($id, Request $request) {
		$em = $this->getDoctrine()->getManager();
		$can = $em->getRepository('RoelabGusBundle:Can')->find($id);

		if (!$can) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
			$form = $this->createFormBuilder($can)
				->add('name','text')
				->add('type','hidden',array('data' => '1'))
				->add('save','submit')
				->getForm();
            $webcans = $can->getWebcans();
			$form->handleRequest($request);
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($can);
				$em->flush();
				return $this->redirect($this->generateUrl('webcans'));
			}
		}
		$cans = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Can')
			->findByType('2');
		return $this->render('RoelabGusBundle:Default:webcans.html.twig', array('form' => $form->createView(), 'cans' => $cans, 'webcans' => $webcans));
	}

	public function deletewebcanAction($id) {
		$em = $this->getDoctrine()->getManager();
		$can = $em->getRepository('RoelabGusBundle:Can')->find($id);

		if (!$can) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
			$em->remove($can);
			$em->flush();
		}
		return $this->redirect($this->generateUrl('webcans'));
	}

	public function emailAction() {
		return $this->render('RoelabGusBundle:Default:email.html.twig');
	}

	public function emailjobsAction(Request $request) {
		$jobs = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Job')
			->findByType(2);
        $form = $this->createForm(new JobType())
            ->add('cans', 'entity',array(
                'class' => 'RoelabGusBundle:Can',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.type = 2')
                        ->orderBy('u.name', 'ASC');
                },
                'property' => 'name',
                'multiple' => 'true',
                'expanded' => true,)
            );
		$form->handleRequest($request);

		if ($form->isValid()) {
            $data = $form->getData();
		    $job = new Job();
			$job->setType('2');
            $job->setSchedule($data['schedule']);
            $job->setName($data['name']);
			$em = $this->getDoctrine()->getManager();
			$em->persist($job);
			$em->flush();
            foreach ($data['cans'] as $can) {
                $jobcan = new Jobcan();
                $jobcan->setJobId($job->getId());
                $jobcan->setCan($can);
			    $em->persist($jobcan);
            }
			$em->flush();
		    $cmd = $job->getSchedule()." /usr/bin/php /var/www/src/Roelab/GusBundle/Resources/scripts/email.php ".$job->getId()." 2>&1\n";
            $ut = new Utility();
		    $ut->addToCron($cmd);
			return $this->redirect($this->generateUrl('emailjobs'));
		}
        $job = new Job();
		return $this->render('RoelabGusBundle:Default:emailjobs.html.twig', array('form' => $form->createView(), 'jobs' => $jobs));
	}

	public function editemailjobAction($id, Request $request) {
		$em = $this->getDoctrine()->getManager();
		$job = $em->getRepository('RoelabGusBundle:Job')->find($id);

		if (!$job) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
		    $form = $this->createForm(new JobType(), $job);
			$form->handleRequest($request);
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($job);
				$em->flush();
				return $this->redirect($this->generateUrl('emailjobs'));
			}
		}
		$jobs = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Job')
			->findByType(2);
		return $this->render('RoelabGusBundle:Default:emailjobs.html.twig', array('form' => $form->createView(), 'jobs' => $jobs));
	}

	public function deleteemailjobAction($id) {
		$em = $this->getDoctrine()->getManager();
		$job = $em->getRepository('RoelabGusBundle:Job')->find($id);

		if (!$job) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
		    $pattern = "/(email.php ".$job->getId().")/im";
			$em->remove($job);
			$em->flush();
            $ut = new Utility();
            $ut->deleteFromCron($pattern);
		}
		return $this->redirect($this->generateUrl('emailjobs'));
	}

	public function emailcansAction(Request $request) {
		$cans = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Can')
			->findByType(2);
		$form = $this->createForm(new EmailcanType());
		$form->handleRequest($request);

		if ($form->isValid()) {
			$data = $form->getData();
			$can = new Can();
			$can->setName($data['name']);
			$can->setType('2');
			$em = $this->getDoctrine()->getManager();
			$em->persist($can);
			$em->flush();
			foreach (explode("\n",$data['url']) as $url) {
				$emailcan = new Emailcan();
				$emailcan->setUrl($url);
				$emailcan->setCan($can);
				$em2 = $this->getDoctrine()->getManager();
				$em2->persist($emailcan);
			}
			$em2->flush();
		 
			return $this->redirect($this->generateUrl('emailcans'));
		}
        $emailcans = new Emailcan();
		return $this->render('RoelabGusBundle:Default:emailcans.html.twig', array('form' => $form->createView(), 'cans' => $cans, 'emailcans' => $emailcans));
	}

	public function editemailcanAction($id, Request $request) {
		$em = $this->getDoctrine()->getManager();
		$can = $em->getRepository('RoelabGusBundle:Can')->find($id);

		if (!$can) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
			$form = $this->createFormBuilder($can)
				->add('name','text')
				->add('type','hidden',array('data' => '2'))
				->add('save','submit')
				->getForm();
            $emailcans = $can->getEmailcans();
			$form->handleRequest($request);
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($can);
				$em->flush();
				return $this->redirect($this->generateUrl('emailcans'));
			}
		}
		$cans = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Can')
			->findAll();
		return $this->render('RoelabGusBundle:Default:emailcans.html.twig', array('form' => $form->createView(), 'cans' => $cans, 'emailcans' => $emailcans));
	}

	public function deleteemailcanAction($id) {
		$em = $this->getDoctrine()->getManager();
		$can = $em->getRepository('RoelabGusBundle:Can')->find($id);

		if (!$can) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
			$em->remove($can);
			$em->flush();
		}
		return $this->redirect($this->generateUrl('emailcans'));
	}

	public function dataAction() {
		return $this->render('RoelabGusBundle:Default:data.html.twig');
	}

	public function dlpjobsAction(Request $request) {
		$jobs = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Job')
			->findByType(3);
        $form = $this->createForm(new JobType())
            ->add('cans', 'entity',array(
                'class' => 'RoelabGusBundle:Can',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.type = 3')
                        ->orderBy('u.name', 'ASC');
                },
                'property' => 'name',
                'multiple' => 'true',
                'expanded' => true,)
            );
		$form->handleRequest($request);

		if ($form->isValid()) {
            $data = $form->getData();
		    $job = new Job();
			$job->setType('3');
            $job->setSchedule($data['schedule']);
            $job->setName($data['name']);
			$em = $this->getDoctrine()->getManager();
			$em->persist($job);
			$em->flush();
            foreach ($data['cans'] as $can) {
                $jobcan = new Jobcan();
                $jobcan->setJobId($job->getId());
                $jobcan->setCan($can);
			    $em->persist($jobcan);
            }
			$em->flush();
		    $cmd = $job->getSchedule()." /usr/bin/php /var/www/src/Roelab/GusBundle/Resources/scripts/dlp.php ".$job->getId()." 2>&1\n";
            $ut = new Utility();
		    $ut->addToCron($cmd);
			return $this->redirect($this->generateUrl('dlpjobs'));
		}
        $job = new Job();
		return $this->render('RoelabGusBundle:Default:dlpjobs.html.twig', array('form' => $form->createView(), 'jobs' => $jobs));
	}

	public function editdlpjobAction($id, Request $request) {
		$em = $this->getDoctrine()->getManager();
		$job = $em->getRepository('RoelabGusBundle:Job')->find($id);

		if (!$job) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
		    $form = $this->createForm(new JobType(), $job);
			$form->handleRequest($request);
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($job);
				$em->flush();
				return $this->redirect($this->generateUrl('dlpjobs'));
			}
		}
		$jobs = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Job')
			->findByType(3);
		return $this->render('RoelabGusBundle:Default:dlpjobs.html.twig', array('form' => $form->createView(), 'jobs' => $jobs));
	}

	public function deletedlpjobAction($id) {
		$em = $this->getDoctrine()->getManager();
		$job = $em->getRepository('RoelabGusBundle:Job')->find($id);

		if (!$job) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
		    $pattern = "/(dlp.php ".$job->getId().")/im";
			$em->remove($job);
			$em->flush();
            $ut = new Utility();
            $ut->deleteFromCron($pattern);
		}
		return $this->redirect($this->generateUrl('dlpjobs'));
	}

	public function dlpcansAction(Request $request) {
		$cans = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Can')
			->findByType(3);
		$form = $this->createForm(new DlpcanType());
		$form->handleRequest($request);

		if ($form->isValid()) {
			$data = $form->getData();
			$can = new Can();
			$can->setName($data['name']);
			$can->setType('3');
			$em = $this->getDoctrine()->getManager();
			$em->persist($can);
			$em->flush();
            $dlpcan = new Dlpcan();
            $dlpcan->setCan($can);
            $dlpcan->setData($data['data']);
			$em2 = $this->getDoctrine()->getManager();
			$em2->persist($dlpcan);
			$em2->flush();
		 
			return $this->redirect($this->generateUrl('dlpcans'));
		}
        $dlpcans = new Dlpcan();
		return $this->render('RoelabGusBundle:Default:dlpcans.html.twig', array('form' => $form->createView(), 'cans' => $cans, 'dlpcans' => $dlpcans));
	}

	public function editdlpcanAction($id, Request $request) {
		$em = $this->getDoctrine()->getManager();
		$can = $em->getRepository('RoelabGusBundle:Can')->find($id);

		if (!$can) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
			$form = $this->createFormBuilder($can)
				->add('name','text')
				->add('type','hidden',array('data' => '3'))
				->add('save','submit')
				->getForm();
            $dlpcans = $can->getDlpcans();
			$form->handleRequest($request);
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($can);
				$em->flush();
				return $this->redirect($this->generateUrl('dlpcans'));
			}
		}
		$cans = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Can')
			->findByType('3');
		return $this->render('RoelabGusBundle:Default:dlpcans.html.twig', array('form' => $form->createView(), 'cans' => $cans, 'dlpcans' => $dlpcans));
	}

	public function deletedlpcanAction($id) {
		$em = $this->getDoctrine()->getManager();
		$can = $em->getRepository('RoelabGusBundle:Can')->find($id);

		if (!$can) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
			$em->remove($can);
			$em->flush();
		}
		return $this->redirect($this->generateUrl('dlpcans'));
	}

	public function scheduleAction() {
		return $this->render('RoelabGusBundle:Default:schedule.html.twig');
	}

	public function settingsAction() {
		return $this->render('RoelabGusBundle:Default:settings.html.twig');
	}

	public function generalAction(Request $request) {
		$settings = $this->getDoctrine()
			->getRepository('RoelabGusBundle:General')
			->findAll();
		$form = $this->createFormBuilder($settings)
			->getForm();
		return $this->render('RoelabGusBundle:Default:general.html.twig', array('form' => $form->createView(), 'table' => $settings));
	}

	public function editgeneralAction($id, Request $request) {
		$em = $this->getDoctrine()->getManager();
		$general = $em->getRepository('RoelabGusBundle:General')->find($id);

		if (!$general) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
			$form = $this->createFormBuilder($general)
				->add('value','text',['label'=>$general->getDescription()])
				->add('save','submit')
				->getForm();
			$form->handleRequest($request);
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($general);
				$em->flush();
                $ut = new Utility();
                if ($general->getName() == "alexadownload" and $general->getValue() > 0) {
                    $cmd = "0 23 * * * /usr/bin/php /var/www/src/Roelab/GusBundle/Resources/scripts/alexa.php 2>&1\n";
                    $ut->addToCron($cmd);
                } else {
                    $pattern = '/(alexa.php)/im';
                    $ut->deleteFromCron($pattern);
                }
				return $this->redirect($this->generateUrl('general'));
			}
		}
		$table = $this->getDoctrine()
			->getRepository('RoelabGusBundle:General')
			->findAll();
		return $this->render('RoelabGusBundle:Default:general.html.twig', array('form' => $form->createView(), 'table' => $table));
	}

	public function ipaddressesAction(Request $request) {
		/*
		$message = \Swift_Message::newInstance()
		->setSubject('Hello Email')
		->setFrom('postmaster@sandbox49525.mailgun.org')
		->setTo('mroe@roelab.com')
		->setBody(
			$this->renderView(
				'RoelabGusBundle:Default:email.txt.twig',
				array('name' => 'Mark')
			)
		) ;
		$this->get('mailer')->send($message);
		*/
		$interfaces = array();
		exec('/sbin/ifconfig | cut -d " " -f1 | awk \'NF==1{print $1}\' | awk \'!/:/ {print $1}\'', $interfaces);
		foreach ($interfaces as $interface) {
			$choices[$interface] = $interface;
		}
		$ipaddress = new Ipaddress();
		$form = $this->createFormBuilder($ipaddress)
			->add('interface','choice',array('choices' => $choices, 'required' => true))
			->add('address','text')
			->add('netmask','text')
			->add('broadcast','text')
			->add('save','submit')
			->getForm();
		$form->handleRequest($request);

		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($ipaddress);
			$em->flush();
			$ifconfig = 'sudo /sbin/ifconfig ' . $ipaddress->getInterface() . ':' . $ipaddress->getId() . ' ' . $ipaddress->getAddress() . ' netmask ' . $ipaddress->getNetmask() . ' broadcast ' . $ipaddress->getBroadcast();
			system($ifconfig);
			return $this->redirect($this->generateUrl('ipaddresses'));
		}
		$table = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Ipaddress')
			->findAll();
	
		return $this->render('RoelabGusBundle:Default:ipaddresses.html.twig', array('form' => $form->createView(), 'table' => $table));
	}

	public function editipAction($id, Request $request) {
		$interfaces = array();
		exec('/sbin/ifconfig | cut -d " " -f1 | awk \'NF==1{print $1}\' | awk \'!/:/ {print $1}\'', $interfaces);
		foreach ($interfaces as $interface) {
			$choices[$interface] = $interface;
		}
		$em = $this->getDoctrine()->getManager();
		$ipaddress = $em->getRepository('RoelabGusBundle:Ipaddress')->find($id);

		if (!$ipaddress) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
			$form = $this->createFormBuilder($ipaddress)
				->add('interface','choice',array('choices' => $choices, 'required' => true))
				->add('address','text')
				->add('netmask','text')
				->add('broadcast','text')
				->add('save','submit')
				->getForm();
			$form->handleRequest($request);
			if ($form->isValid()) {
				$ifconfig = 'sudo /sbin/ifconfig ' . $ipaddress->getInterface() . ':' . $ipaddress->getId() . ' down';
				system($ifconfig);
				$em = $this->getDoctrine()->getManager();
				$em->persist($ipaddress);
				$em->flush();
				$ifconfig = 'sudo /sbin/ifconfig ' . $ipaddress->getInterface() . ':' . $ipaddress->getId() . ' ' . $ipaddress->getAddress() . ' netmask ' . $ipaddress->getNetmask() . ' broadcast ' . $ipaddress->getBroadcast();
				system($ifconfig);
				return $this->redirect($this->generateUrl('ipaddresses'));
			}
		}
		$table = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Ipaddress')
			->findAll();
		return $this->render('RoelabGusBundle:Default:ipaddresses.html.twig', array('form' => $form->createView(), 'table' => $table));
	}

	public function deleteipAction($id) {
		$em = $this->getDoctrine()->getManager();
		$ipaddress = $em->getRepository('RoelabGusBundle:Ipaddress')->find($id);

		if (!$ipaddress) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
			$ifconfig = 'sudo /sbin/ifconfig ' . $ipaddress->getInterface() . ':' . $ipaddress->getId() . ' down';
			system($ifconfig);
			$em->remove($ipaddress);
			$em->flush();
		}
		return $this->redirect($this->generateUrl('ipaddresses'));
	}

	public function clientsAction(Request $request) {
		$client = new Client();
        $form = $this->createForm(new ClientType(), $client);
        /*
		$form = $this->createFormBuilder($client)
			->add('username','text')
			->add('domain','text')
			->add('password','text')
			->add('save','submit')
			->getForm();
         */
		$form->handleRequest($request);

		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($client);
			$em->flush();
			return $this->redirect($this->generateUrl('clients'));
		}
		$table = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Client')
			->findAll();
	
		return $this->render('RoelabGusBundle:Default:clients.html.twig', array('form' => $form->createView(), 'table' => $table));
	}

	public function editclientAction($id, Request $request) {
		$em = $this->getDoctrine()->getManager();
		$client = $em->getRepository('RoelabGusBundle:Client')->find($id);

		if (!$client) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
		    $form = $this->createForm(new ClientType(), $client);
            /*
			$form = $this->createFormBuilder($client)
				->add('username','text')
				->add('domain','text')
				->add('password','text')
				->add('save','submit')
				->getForm();
             */
			$form->handleRequest($request);
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($client);
				$em->flush();
				return $this->redirect($this->generateUrl('clients'));
			}
		}
		$table = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Client')
			->findAll();
		return $this->render('RoelabGusBundle:Default:clients.html.twig', array('form' => $form->createView(), 'table' => $table));
	}

	public function deleteclientAction($id) {
		$em = $this->getDoctrine()->getManager();
		$client = $em->getRepository('RoelabGusBundle:Client')->find($id);

		if (!$client) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
			$em->remove($client);
			$em->flush();
		}
		return $this->redirect($this->generateUrl('clients'));
	}

	public function helloAction($name) {
		return $this->render('RoelabGusBundle:Default:hello.html.twig', array('name' => $name));
	}

}
