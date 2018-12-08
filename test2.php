<?php
// Created by: Fico Pangestu
// Not For Sale
function yd($code, $key, $tk, $token, $uuid, $jumlah, $wait){
    $x = 0; 
    while($x < $jumlah) {
		
		$body = 'sgbcode='.$code.'&sgbsecret='.$key.'&tk='.$tk.'&token='.$token.'&uuid='.$uuid.'';
				
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api-ficopang.c9users.io/ydnews.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
print "
\e[1;32m######################################################
	   ███████╗██╗ ██████╗ ██████╗  
	   ██╔════╝██║██╔════╝██╔═══██╗ 
	   █████╗  ██║██║     ██║   ██║
	   ██╔══╝  ██║██║     ██║   ██║
	   ██║     ██║╚██████╗╚██████╔╝
	   ╚═╝     ╚═╝ ╚═════╝ ╚═════╝ 
	██████╗  █████╗ ███╗   ██╗ ██████╗
	██╔══██╗██╔══██╗████╗  ██║██╔════╝
	██████╔╝███████║██╔██╗ ██║██║  ███╗
	██╔═══╝ ██╔══██║██║╚██╗██║██║   ██║
	██║     ██║  ██║██║ ╚████║╚██████╔╝
	╚═╝     ╚═╝  ╚═╝╚═╝  ╚═══╝ ╚═════╝ \033[0m
		Tuyul coin YDNews
	Created By : Fico Pangestu
	\033[31mYoutube: Youtube.com/ficopang\033[0m
	\033[36mInstagram: @ficopang\033[0m
\e[1;32m######################################################\033[0m
	";
echo "\n\nSGB CODE: ";
$code = trim(fgets(STDIN));
echo "SGB SECRET KEY: ";
$key = trim(fgets(STDIN));
echo "tk: ";
$tk = trim(fgets(STDIN));
echo "Token: ";
$token = trim(fgets(STDIN));
echo "UUID: ";
$uuid = trim(fgets(STDIN));
echo "Jumlah: ";
$jumlah = trim(fgets(STDIN));
echo "Jeda? 0-9999999999 (ex:60): ";
$wait = trim(fgets(STDIN));
$execute = yd($code, $key, $tk, $token, $uuid, $jumlah, $wait);
print $execute;
print "DONE\n";
?>