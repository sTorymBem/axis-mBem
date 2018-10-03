<?php
function axis($user, $pass){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://satriawibawa.jagoanssh.com/index.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"user=".$user."&pass=".$pass."&_aptget_id=&anuID=1&submit=");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'http://satriawibawa.jagoanssh.com/index.php');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        flush();
}
print "TEMBAK AXIS JAGOANSSH PEOPLE\n";

echo "\nNomor: ";
$user = trim(fgets(STDIN));
echo "\nPassword: ";
$pass= trim(fgets(STDIN));
$execute = axis($user, $pass);
$hasil = json_decode($execute, 1);
print $hasil;
?>
