<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
// 		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->model('process');
		$query = $this->process->index();
		$this->load->view('index', array('query'=>$query->result())); 
	}
	
	public function view_car($id)
	{
		$this->load->model('process');
		$query = $this->process->view_car($id);
		$this->load->view('view_car', array('data'=>$query->result())); 
	}
	
	public function allcars($id = 1)
	{
		$this->load->model('process');
		$data["total_rows"] = $this->process->record_count(); 
        if ($id == 2){
			 $data["results"] = $this->process->allcars_oldest();
		}
		else{
			 $data["results"] = $this->process->allcars_newest();
			 
		}
		
		$this->load->view('allcars', $data); 
	}
	
	public function login()
	{
		$this->load->view('login'); 
	}
	
	public function logout()
	{
		$this->load->model('process');
		$this->process->logout();
		header("Location: index");
	}
	
	public function admin()
	{
		$this->load->model('process');
		$query = $this->process->admin();
		$this->load->view('admin', $query);
	}
	
	public function delete_car($id)
	{
		$this->load->model('process');
		$query = $this->process->delete_car($id);
		header("Location: /main/allcars");
	}
	
	public function add_new()
	{
		$thepost = $this->input->post();
		$this->load->model('process');
		$this->process->add_new($thepost);
		header("Location: admin");
// 		$this->load->view('admin', $query);
	}
	
	public function profile()
	{
		$this->load->model('process');
		$query = $this->process->profile_favourites();
		$this->load->view('profile', array('query'=>$query->result()));
	}
	
	public function process_login()
    {
	    $thepost = $this->input->post();
	    $this->load->model('process');
	    $query = $this->process->register($thepost);
        if ($query == 1){
	        header("Location: profile");
        }
        else{
	        header("Location: login");
        }
		
    }
    
    public function add_to_favourites($id){
	    $this->load->model('process');
	    $this->process->add_to_favourites($id);
	    header("Location: /main/profile");
    }
    
    public function process_sign_up()
    {
	    $thepost = $this->input->post();
	    $this->load->model('process');
	    $query = $this->process->signup($thepost);
        if ($query == 1){
	        header("Location: index");
        }
        else{
	        header("Location: login");
        }
		
    }
    
    public function vehicle($id)
    {
	    $this->load->model('process');
	    if ($id == 1){
		    $query = $this->process->bus();
	    }
	    else if ($id == 2){
		    $query = $this->process->sudan();
	    }
	    else if ($id == 3){
		    $query = $this->process->minivan();
	    }
	    else if ($id == 4){
		    $query = $this->process->suv();
	    }
	    else if ($id == 5){
		    $query = $this->process->coupe();
	    }
	    else if ($id == 6){
		    $query = $this->process->hatchback();
	    }
		$this->load->view('vehicle', array('query'=>$query->result()));
    }
    public function delete_favourite($id)
	{
		$this->load->model('process');
		$query = $this->process->delete_favourite($id);
		header("Location: /main/profile");
		
	}
    
    public function results()
	{
		
		$thepost = $this->input->post();
		if ($thepost == false){
			header("Location: index");
		}
		else{
			$this->load->model('process');
// 			$this->load->library('pagination');
			/*
$config['base_url'] = '/main/results';
			$config['total_rows'] = $this->process->get_specific_cars_count($thepost);
			$config['per_page'] = 2;
			$config['num_links'] = 3;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			var_dump($this->uri->segment(3));
*/
			$query = $this->process->get_specific_cars($thepost);
			$this->load->view('results', array('query'=>$query->result()));
			/*
$this->load->model('process');
			$query = $this->process->get_specific_cars($thepost);
			$this->load->view('results', array('query'=>$query));
*/
		}
	}
	
	
}

//end of main controller