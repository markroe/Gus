<?php

namespace Roelab\GusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Roelab\GusBundle\Entity\Ipaddress;
use Roelab\GusBundle\Entity\Client;
use Roelab\GusBundle\Entity\Can;
use Roelab\GusBundle\Entity\Webcan;
use Roelab\GusBundle\Entity\Emailcan;
use Roelab\GusBundle\Entity\Dlpcan;
use Roelab\GusBundle\Entity\Job;
use Roelab\GusBundle\Entity\Jobcan;
use Roelab\GusBundle\Form\CanType;
use Roelab\GusBundle\Form\WebcanType;
use Roelab\GusBundle\Form\JobType;


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
		$job = new Job();
        /*
        $cans = $this->getDoctrine()
			->getRepository('RoelabGusBundle:Can')
			->findByType(1);
         */
        $form = $this->createForm(new JobType(), $job);
		$form->handleRequest($request);

		if ($form->isValid()) {
			$job->setType('1');
			$em = $this->getDoctrine()->getManager();
			$em->persist($job);
			$em->flush();
		 
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
			$em->remove($job);
			$em->flush();
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
			->findAll();
		return $this->render('RoelabGusBundle:Default:webcans.html.twig', array('form' => $form->createView(), 'cans' => $cans, 'webcans' => $webcans));
	}

	public function deletewebcanAction($id) {
		$em = $this->getDoctrine()->getManager();
		$can = $em->getRepository('RoelabGusBundle:Can')->find($id);

		if (!$can) {
			throw $this->createNotFoundException('Nothing found for id '.$id);
		} else {
            //$em2 = $this->getDoctrine()->getManager();
            //$webcan = new Webcan();
            //$webcan->setCan($can);
            //$em2->remove($webcan);
            //$em2->flush();
			$em->remove($can);
			$em->flush();
		}
		return $this->redirect($this->generateUrl('webcans'));
	}

	public function emailAction() {
		return $this->render('RoelabGusBundle:Default:email.html.twig');
	}

	public function dataAction() {
		return $this->render('RoelabGusBundle:Default:data.html.twig');
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
                $output = shell_exec('crontab -l');
                $lines = explode("\n", $output);
                $pattern = '/(alexa.php)/im';
                $rows = array();
                //foreach ($lines as $key => $value) {
                foreach ($lines as &$value) {
                    if (!preg_match($pattern,$value)) {
                        $rows[] = $value;
                    }
                }
                array_pop($rows);
                if ($general->getName() == "alexadownload" and $general->getValue() > 0) {
                    $rows[] = "0 23 * * * /usr/bin/php /var/www/src/Roelab/GusBundle/Resources/scripts/alexa.php 2>&1\n";
                } else {
                    $rows[] = "#0 23 * * * /usr/bin/php /var/www/src/Roelab/GusBundle/Resources/scripts/alexa.php 2>&1\n";
                }
                file_put_contents('/tmp/crontab.txt',implode("\n", $rows));
                exec('crontab /tmp/crontab.txt');
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
		$form = $this->createFormBuilder($client)
			->add('username','text')
			->add('domain','text')
			->add('password','text')
			->add('save','submit')
			->getForm();
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
			$form = $this->createFormBuilder($client)
				->add('username','text')
				->add('domain','text')
				->add('password','text')
				->add('save','submit')
				->getForm();
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
