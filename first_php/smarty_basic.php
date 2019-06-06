<?php
require_once './vender/autoload.php';
$s = new Smarty();
$s->template_dir = './templates/';
$s->compile_dir = './templates_c/';
$s->assign('message', 'Hello, World (--)b'); 
$s->display('smary_basic.tpl');