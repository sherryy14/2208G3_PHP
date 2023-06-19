<?php 

$pass ='admin';

// md5 algo

$md = md5($pass);
echo "Original Pass: $pass Encrypted MD: $md<br><br>";
if($md == '21232f297a57a5a743894a0e4a801fc3'){
    echo "MD Matched";
}else{
    echo "MD Not Matched";

}
echo "<br>";

// sha1 algo
$sha = sha1($pass);
echo "Original Pass: $pass Encrypted Sha: $sha<br><br>";

if($sha == 'd033e22ae348aeb5660fc2140aec35850c4da997'){
    echo "Sha Matched";
}else{
    echo "Sha Not Matched";
}
echo "<br><br>";
// BLOWFISH 

$encrypted = password_hash($pass, CRYPT_BLOWFISH);
echo "Original Pass: $pass Encrypted Blowfish: $encrypted<br><br>";

if(password_verify($pass, $encrypted)){
    echo "Encypted Matched";
}else{
    echo "Encypted Not Matched";

}





?>