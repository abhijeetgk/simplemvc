<?php
class HomeController extends BaseController{

	public function __construct($action, $urlValues) {
	 	parent::__construct($action, $urlValues);
	}
	public function index(){
		$this->view->set_data("content1","Content 1 data");
		$this->view->set_data("content2","Content 2 data");
		$this->view->render("home");
	}
}