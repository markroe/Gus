<?php
	$link = mysqli_connect("127.0.0.1","gus","BUjLq6ADzxQ7Nwea","gus");
    file_put_contents("/tmp/alexa.zip", fopen("http://s3.amazonaws.com/alexa-static/top-1m.csv.zip", 'r'));
    system('unzip -d /tmp /tmp/alexa.zip',$retval);
    $handle = fopen("/tmp/top-1m.csv", "r");
	$sql = "delete from Webcan where can_id = '1'";
	$result = $link->query($sql);
	$sql = "select value from General where name = 'alexatopn'";
	$result = $link->query($sql);
	$row = mysqli_fetch_array($result);
    if ($handle) {
        $data = array();
        for ($i=1; $i <= $row['value']; $i++) {
            $line = fgets($handle);
            list($rank,$url) = split(',',$line);
            $url = preg_replace('/\s+/', '', $url);
            $data[] = '("1","'.$url.'")';
        }
    }
    $sql = "insert into Webcan (can_id,url) values " . implode(',',$data);
    echo $sql;
    $result = $link->query($sql);
    mysqli_close($link);
    system('rm -f /tmp/alexa.zip',$retval);
    system('rm -f /tmp/top-1m.csv',$retval);
?>
