<?php
/**
 * Created by PhpStorm.
 * User: ÓliJón
 * Date: 25/03/2017
 * Time: 19:58
 */
$session_user = $_SESSION['username'];
if(isset($session_user))
{
    echo "<script>alert('hello')</script>";
}