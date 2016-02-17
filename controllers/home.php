<?php
class HomeController extends BaseController{

	public function __construct($action, $urlValues) {
	 	parent::__construct($action, $urlValues);
	}
	public function index(){
		$this->view->set_data("content1","Content 1 data (data set in controller)");
		$this->view->set_data("content2","Content 2 data (this is also data set in controller)");
		$this->view->set_data('content3',$this->view->render_return('common/header'));
		$this->view->render("home");
	}
	public function dbconnect(){
		$this->database=$this->load->library('DB');
		$this->emp_model=$this->load->model('Emp');
		$emp_data=$this->emp_model->get_emp_data(array("")); // todo to add input parameters if required.
		$this->view->set_data('emp_data',$emp_data);
		$this->view->render('db/index');
	}
}