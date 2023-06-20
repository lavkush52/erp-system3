<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function __construct()
 	{
  		parent::__construct();
  		$this->load->model('auth_model');
  		$this->load->model('admin_model');
 	}

	public function index()
	{
		$data['title'] = "Dashboard";
		$this->loadView('index', $data);
	}

	public function addAdmin()
	{
		$data['title'] = "Add Admin";
		$data['menu'] = "admins";
		$data['smenu'] = "add-admin";
		$this->loadView('admins/add-admin', $data);
	}

	public function viewAdmins()
	{
		$data['title'] = "View Admin";
		$data['menu'] = "admins";
		$data['smenu'] = "view-admin";
		$this->loadView('admins/view-admin', $data);
	}
	public function addFaculty()
	{
		$data['title'] = "Add Faculty";
		$data['menu'] = "faculty";
		$data['smenu'] = "add-faculty";
		$this->loadView('faculty/add-faculty', $data);
	}
	public function viewFaculty()
	{
		$data['title'] = "View Faculty";
		$data['menu'] = "faculty";
		$data['smenu'] = "view-faculty";
		$this->loadView('faculty/view-faculty', $data);
	}
	public function addStudent()
	{
		$data['title'] = "Add Student";
		$data['menu'] = "student";
		$data['smenu'] = "add-student";
		$this->loadView('students/add-student', $data);
	}
	public function viewStudents()
	{
		$data['title'] = "View Student";
		$data['menu'] = "student";
		$data['smenu'] = "view-student";
		$this->loadView('students/view-student', $data);
	}
	public function deletedStudents()
	{
		$data['title'] = "Deleted Student";
		$data['menu'] = "student";
		$data['smenu'] = "deleted-student";
		$this->loadView('students/deleted-student', $data);
	}
	public function deletedFaculty()
	{
		$data['title'] = "Deleted Faculty";
		$data['menu'] = "faculty";
		$data['smenu'] = "deleted-faculty";
		$this->loadView('faculty/deleted-faculty', $data);
	}
	public function addRecruiter()
	{
		$data['title'] = "Add Recruiter";
		$data['menu'] = "recruiter";
		$data['smenu'] = "add-recruiter";
		$this->loadView('recruiter/add-recruiter', $data);
	}
	public function viewRecruiter()
	{
		$data['title'] = "View Recruiter";
		$data['menu'] = "recruiter";
		$data['smenu'] = "deleted-recruiter";
		$this->loadView('recruiter/deleted-recruiter', $data);
	}
	public function deletedRecruiter()
	{
		$data['title'] = "Deleted Recruiter";
		$data['menu'] = "recruiter";
		$data['smenu'] = "deleted-recruiter";
		$this->loadView('recruiter/deleted-recruiter', $data);
	}
	public function profile()
	{
		$data['title'] = "Home";
		$this->loadView('index', $data);
	}

	public function settings()
	{
		$gt=$this->db->get('tbl_config')->row();
		$data['id'] =$gt->id;
		$data['name'] =$gt->site_name;
        $data['address'] =$gt->site_address;
        $data['mobile'] =$gt->contact;
		$data['status'] =$gt->site_status;
        $data['scontact'] =$gt->support_contact;
		$data['email'] =$gt->email;
        $data['semail'] =$gt->support_mail;
        $data['copyright'] =$gt->copyright;
		$data['logo'] =$gt->logo;
		$data['fav'] =$gt->favicon;
        // $data['slug'] =$gt->slug;

		$data['title'] = "Settings";
		$this->loadView('auth/settings', $data);
	}

	public function updateSetting()
	{
		if (!file_exists('uploads/admin')) {
            mkdir('uploads/admin', 0777, true);
        }
		if(!empty($_FILES['logo']['tmp_name'])){
            $config['upload_path']   = './uploads/admin/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name']     = $this->security->xss_clean($_FILES['logo']['name']);
            $config['remove_spaces'] = TRUE;
            $config['encrypt_name']  = TRUE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            /*-------------Unlink Image----------*/
            $file  = 'uploads/admin/'.post('old-logo');
            if(is_file($file) && @unlink($file)){
            }
            /*-------------Unlink Image----------*/
            if($this->upload->do_upload('logo')){
                $uploadData                 = $this->upload->data();
                $img                        = $uploadData['file_name'];
                $config['image_library']    = 'gd2';
                $config['source_image']     = './uploads/admin/'.$img;            
                $config['new_image']        = './uploads/admin/';
                $config['maintain_ratio']   = TRUE;
                $config['quality']          = '100%'; 
                $this->load->library('image_lib', $config);
                $this->image_lib->resize(); 
            }  
        }
        if(!empty($_FILES['favicon']['tmp_name'])){
            $config['upload_path']   = './uploads/admin/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name']     = $this->security->xss_clean($_FILES['favicon']['name']);
            $config['remove_spaces'] = TRUE;
            $config['encrypt_name']  = TRUE;
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            /*-------------Unlink Image----------*/
            $file1  = 'uploads/admin/'.post('old-favicon');
            if(is_file($file1) && @unlink($file1)){
            }
            /*-------------Unlink Image----------*/
            if($this->upload->do_upload('favicon')){
                $uploadData                 = $this->upload->data();
                $img1                        = $uploadData['file_name'];
                $config['image_library']    = 'gd2';
                $config['source_image']     = './uploads/admin/'.$img1;            
                $config['new_image']        = './uploads/admin/';
                $config['maintain_ratio']   = TRUE;
                $config['quality']          = '100%'; 
                $this->load->library('image_lib', $config);
                $this->image_lib->resize(); 
            }  
        }
		$data=array(
			'site_name' => clean_post('site-name'),
			'site_status' => clean_post('site-status'),
			'copyright' => clean_post('copyright'),
			'email' => clean_post('email'),
			'logo' => !empty($img) ? trim($img) : clean_post('old-logo'),
			'favicon' => !empty($img1) ? trim($img1) : clean_post('old-favicon'),
			'support_mail' => clean_post('support-mail'),
			'contact' => clean_post('mobile'),
			'support_contact' => clean_post('support-mobile'),
			'site_address' => clean_post('address'),
		);
		$res = $this->admin_model->updateConfigInfo(clean_post('id'), $data);
		echo json_encode($res);
		exit;
	}

    public function login()
	{
		$rem = rememberMe();
		if(!empty($rem)):
		    $data['box'] = 1;
		    $data['mail'] = base64_decode($rem['mail']);
		    $data['pass'] = base64_decode($rem['pass']);
		    $data['checked'] = 'checked';
		else:
		    $data['checked'] = '';
		    $data['box'] = 0;
		    $data['mail'] = '';
		    $data['pass'] = '';
		endif;
		$adminID = $this->session->userdata('admin_id');
		if(!empty($adminID)):
		    redirect(base_url('admin/dashboard'));
		endif;
        $data['title'] = "Admin Login";
        $this->load->view('admin/auth/login', $data);
	}

	public function forgot_password()
	{
		$data['title'] = "Forgot Passowrd";
		$this->load->view('admin/auth/forgot-password');
	}

	public function loadView($file, $data = array())
	{
		$adminID = $this->session->userdata('admin_id');
		if(empty($adminID)):
		    redirect(base_url('admin/login'));
		endif;
		$admin = adminSession($adminID);
		if(!empty($admin->image)):
		    $avtar = base_url('uploads/admin/'.$admin->image);
		else:
		    $avtar = createAvtar($admin->name);
		endif;
		$data['admin'] = $admin;
		$data['avtar'] = $avtar;
		$this->load->view('admin/components/app', $data);
		$this->load->view('admin/'.$file, $data);
		$this->load->view('admin/components/footer', $data);
	}

	public function auth_login()
	{
		$this->form_validation->set_error_delimiters('<span class="small text-danger">', '</span>');
  		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
  		$this->form_validation->set_rules('password', 'password', 'required');
  		if($this->form_validation->run()):
   			$result = $this->auth_model->admin_login();
   			if($result == ''):
    			redirect(historyURL);
   			else:
    			set_alert('message',$result);
    			$this->login();
   			endif;
  		else:
   			$this->login();
  		endif;
	}

	// public function readJson()
	// {
	// 	$json = file_get_contents(base_url('pagetitle.json'));
	// 	$obj  = json_decode($json);
	// 	// $key = "description";
	// 	// $firstName = $obj->$key;
	// 	echo '<pre>' . print_r($obj) . '</pre>';
	// }
}
