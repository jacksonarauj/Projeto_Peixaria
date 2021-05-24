<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//MAIL
/*
$config['protocol']='email';
$config['charset']='utf-8';
$config['mailtype']='html';
$config['wordwrap']=TRUE;
*/
//SMTP
$config['protocol']='smtp';
$config['charset']='utf-8';
$config['mailtype']='html';
$config['wordwrap']=TRUE;
$config['smtp_host']='ssl://smtp.google.com';
$config['smtp_port']=465;
$config['smtp_user']='jackson.1301821@fapi-pinhais.edu.br';
$config['smtp_pass']='************';
$config['newline']="\r\n";


?>