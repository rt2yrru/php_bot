<?php
 
set_time_limit(0);
 
//File to save the contents to
$fp = fopen ('files2.tar', 'w+');
 
$url = "http://get.videolan.org/vlc/2.2.4/vlc-2.2.4.tar.xz";
 
//Here is the file we are downloading, replace spaces with %20
$ch = curl_init(str_replace(" ","%20",$url));
 
curl_setopt($ch, CURLOPT_TIMEOUT, 50);
 
//give curl the file pointer so that it can write to it
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
 
$data = curl_exec($ch);//get curl response
 
//done
curl_close($ch);
