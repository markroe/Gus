<?php
    require_once('funcs.php');
    /*
    class Browser extends Thread {
        public function run() {
        }
    }
    $browser = new Browser();
    var_dump($browser->start());
    */
    $jobid = $argv[1];
	$link = dbConnect();
    $proxy = getProxy($link);
    $clients = getClients($link);
    $urls = getUrls($link, $jobid);
    $ips = getIps($link);
    mysqli_close($link);

    $userAgent = "IE 7 - Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30)";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_REFERER, "http://www.roelab.com");
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,20); 
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $clientcount = count($clients);
    $ipcount = count($ips);
    foreach ($urls as $url) {
        $randclient = rand(0, $clientcount - 1);
        $randip = rand(0, $ipcount - 1);
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $clients[$randclient]['username'] . ":" . $clients[$randclient]['password']);
        curl_setopt($ch, CURLOPT_INTERFACE, $ips[$randip]);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_exec($ch);
    }
    curl_close($ch);

?>
