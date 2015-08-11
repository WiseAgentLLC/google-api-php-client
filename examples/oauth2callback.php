<?php
/**
 * Created by PhpStorm.
 * User: dintorf
 * Date: 8/11/15
 * Time: 9:41 AM
 */

//print_r($_REQUEST);

//$redirect = 'http://' . $_SERVER['HTTP_HOST'] . '/user-example.php?code=' . $_REQUEST["code"];
$redirect = 'http://' . $_SERVER['HTTP_HOST'] . '/contacts-test.php?code=' . $_REQUEST["code"];
header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));