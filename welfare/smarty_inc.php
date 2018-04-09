<?php
include_once("smarty_inc/Smarty.class.php");
$smarty = new Smarty();
$smarty->config_dir = "Smarty/Config_File.class.php";
$smarty->caching = false;
$smarty->template_dir = "./templates";
$smarty->compile_dir = "./templates_c";
$smarty->cache_dir = "./smarty_cache";
$smarty->left_delimiter = "{";
$smarty->right_delimiter = "}";