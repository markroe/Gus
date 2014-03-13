<?php
	$link = mysqli_connect("127.0.0.1","gus","BUjLq6ADzxQ7Nwea","gus");
	$sql = "select * from Ipaddress";
	$result = $link->query($sql);
	while ($row = mysqli_fetch_array($result)) {
		$ifconfig = "/sbin/ifconfig " . $row["interface"] . ':' . $row["id"] . " " . $row["address"] . " netmask " . $row["netmask"] . " broadcast " . $row["broadcast"];
		system($ifconfig);
	}
?>
