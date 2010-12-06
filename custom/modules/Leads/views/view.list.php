<?php 

// custom/modules/Leads/views/view.list.php

require_once('include/MVC/View/views/view.list.php');
require_once('custom/modules/Leads/LeadsListViewSmarty.php');

class LeadsViewList extends ViewList {
	
	function LeadsViewList(){
		parent::ViewList();
	}
	
	function preDisplay(){
		$this->lv = new LeadsListViewSmarty();
	}
}

?>