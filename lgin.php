<?php
//echo "Hello!";
?>
<?php
$realm = 'Restricted area';
//echo "<pre>";print_r($_POST);echo "</pre>";
/*
$auth_users = array(
    'admin' => password_hash('Sf852969', PASSWORD_DEFAULT), //
    'user' => password_hash('96252995', PASSWORD_DEFAULT), //   
);     
*/
$auth_users = array(
    'admin' => 'Pro1016-2006', //
    'user' => 'fanhomefan666', //   
);     


//echo "<pre>";print_r($auth_users);echo "</pre>";

$hash = $_POST['userpwd'];

//echo $auth_users['user'] .",<BR>". $hash ."<BR>";

switch ($hash) {
  case $auth_users['admin']:
    $target_page = "https://ssur.cc/adminp";
    break;
  case $auth_users['user']:
    $target_page = "https://ssur.cc/userp";
    break;
  default:
    $target_page = "http://login8080.nat123.cc";
}

//echo  $target_page;
header("Location: ". $target_page, TRUE, 301);
exit();

?>
