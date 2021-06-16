<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\BlockModel;
use App\Models\DistrictModel;
use App\Models\ReportsModel;

class PageLoader extends BaseController
{

	private function page_loader($viewName,$data){
		echo  view("templates/header",$data);
		echo  view("pages/".$viewName,$data);
		echo  view("templates/footer",$data);
	}

	public function report_to_cm($success="",$error=""){
		$session = session();
		
		if($session->role!="minister"){
			return redirect()->to(site_url("login"));
		}else {
			$data = array("title"=>"Report To CM","success"=>$success,"error"=>$error);
			$this->page_loader("report_to_cm",$data);
		}
	}

	public function reports_by_ministers($success="",$error=""){
		$session = session();
		
		if($session->role!="cm"){
			return redirect()->to(site_url("login"));
		}else {

			$reportsModel = new ReportsModel();

			$allReports = $reportsModel->findAll();

			$data = array("title"=>"Reports from Ministers","success"=>$success,"error"=>$error,"reports"=>$allReports);
			$this->page_loader("reports_from_ministers",$data);
		}
	}

	public function thank_you(){

		$data = array("title"=>"Thank You");

        echo view("pages/thank_you",$data);
	}

	public function dashboard(){
		
		$session = session();
		
		if(!$session->logged_in){
			return redirect()->to(site_url("login"));
		}else {
			$data = array("title"=>"Dashboard");
			$this->page_loader("dashboard",$data);
		}

	}

	public function login($error=""){

		$session = session();
		
		if($session->logged_in){
			return redirect()->to(site_url("dashboard"));
		}else {
			$data = array("title"=>"Login","error"=>$error);

			$this->page_loader("login",$data);
		}
		
		

	}

	public function users(){
		
		$session = session();
		
		if(!$session->logged_in){
			return redirect()->to(site_url("login"));
		}else {

			$authModel = new AuthModel();

			$allUsers = $authModel->findAll();
				
			$data = array("title"=>"Users","users"=>$allUsers);
			$this->page_loader("users",$data);
		}

	}

	public function add_user($success="",$error=""){
		
		$session = session();
		
		if(!$session->logged_in){
			return redirect()->to(site_url("login"));
		}else {
							
			$data = array("title"=>"Add User","success"=>$success,"error"=>$error);
			$this->page_loader("add_user",$data);

		}

	}

	public function blocks($success="",$error=""){

		$session = session();
		
		if(!$session->logged_in){
			
			return redirect()->to(site_url("login"));

		}else {

			$blockModel = new BlockModel();

			$allBlocks = $blockModel->findAll();
							
			$data = array("title"=>"Blocks","success"=>$success,"error"=>$error,"blocks"=>$allBlocks);
			$this->page_loader("blocks",$data);

		}


	}

	public function add_block($success="",$error=""){

		$session = session();
		
		if(!$session->logged_in){
			
			return redirect()->to(site_url("login"));

		}else {

			$authModel = new AuthModel();

			$allUsers = $authModel->findAll();
							
			$data = array("title"=>"Add Block","success"=>$success,"error"=>$error,"users"=>$allUsers);
			$this->page_loader("add_block",$data);

		}

	}

	public function districts(){

		$session = session();
		
		if(!$session->logged_in){
			
			return redirect()->to(site_url("login"));

		}else {

			$districtModel = new DistrictModel();
							
			$data = array("title"=>"Districts","success"=>$success,"error"=>$error);
			$this->page_loader("districts",$data);

		}


	}



}
