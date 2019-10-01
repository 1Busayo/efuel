 <?php

$LABEL="busayo123";
$PASSPHRASE="secr1a5df8380e0e30";

$ch = curl_init();
//api/v2/tltc/wallet/generate
curl_setopt($ch, CURLOPT_URL, "http://45.63.83.101:3080/api/v2/tltc/wallet/generate");
//curl_setopt($ch, CURLOPT_URL, 'https://bitgo.com/api/v2/tltc/wallet/generate');
curl_setopt($ch, CURLOPT_PORT, 3080);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"label\": \"$LABEL\", \"passphrase\": \"$PASSPHRASE\" }");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


//$headers = array();
//$headers[] = "Content-Type: application/json";
//$headers[] = "Authorization: _ENV['Bearer v2x5ab597061fc072dc35f6f20b52ef484e4c82994b9df1bd13777f2d31673102fe']";
//curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
curl_setopt($ch, CURLOPT_HTTPHEADER,array(
    'Authorization: Bearer v2x2b0b1efc2516cf8891441f1143b4b76ed84dd41931892f0159ac0700ab6f6f0c',
    'Content-Type: application/json'
    ));

echo $result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);




