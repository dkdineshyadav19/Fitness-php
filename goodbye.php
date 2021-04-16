<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    require('login_tools.php');
    load();
}
$page_title = 'Goodbye';
$_SESSION = array();
session_destroy();/*End the session of the user*/
?>
<?php

header("Location: index.php");/*it will redirect to index.php after logout*/
exit();
?>

