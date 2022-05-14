<?php  

use \Hcode\PageAdmin;

$app->get('/', function() {
    		
	$page = new PageAdmin();

	$page->setTpl("index");

});

?>