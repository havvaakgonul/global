<?php

$top_nav=array(
    'sv'=>array( 'Om GHPF','Projekt','Aktiviteter','partnerorganisationer','Kontakta Oss'),
    'en'=>array( 'About GHPF','Project','Activities','partner organizations','Contact Us')

);








/*include('language.php');
$en_select='';
$sv_select='';
if((isset($_GET['language']) && $_GET['language']=='en')|| !isset($_GET['language'])){
    $en_select='selected';
    $language='en';
}
else{
    $sv_select='selected';
    $language='sv';
}
$con=new mysqli('localhost','root','');
$sql="select page_content where language_type='$language'";
$con->set_charset('utf8');
$result=$con->query($sql);
$row=$result->fetch_all(MYSQLI_ASSOC);
print_r($row);
*/
?>