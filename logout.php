<?php
session_start();
?>
<?php
//We are checking to make sure the user is logged in before a logout to avoid session reset tricks on excess logins
session_unset();
session_destroy();
header('Location: index.php');

?>
