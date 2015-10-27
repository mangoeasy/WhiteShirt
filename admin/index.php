<?php
require ('../includes/include.inc.php');
if ((isset($_SESSION['user']))) {
    unset($_SESSION['user']);
}
$smarty->display('admin/login.html');
