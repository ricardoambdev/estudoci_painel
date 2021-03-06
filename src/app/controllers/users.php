<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('system');
        initAdmin();
    }
    
	public function index()
	{
		$this->load->view('users');
	}

    public function login()
    {
        $this->form_validation->set_rules('email','E-mail','required|valid_email');
        $this->form_validation->set_rules('senha','Senha','required');
        if($this->form_validation->run())
        {
            $email = $this->input->post('email', true);
            $senha = md5($this->input->post('senha', true));
            if($this->users_model->login($email, $senha)){
                $query = $this->users_model->getUser($email)->row();
                $userData = array(
                    'id'        => $query->id,
                    'nome'      => $query->nome,
                    'email'     => $email,
                    'admin'     => $query->admin,
                    'logged'    => true
                );
                $this->session->set_userdata($userData);
                redirect('painel');
            }else{
                echo '<span id="fail" data-fail="login"></span>';
            }
        }
        setTheme('title','Login');
        setTheme('content', loadModule('user','login'));
        setTheme('initPlugins', loadJavascript(array('scripts/user-pages')), false);
        setTheme('bodyClass','login bg-login printable');
        loadTemplate();
    }

    public function logoff()
    {
        $this->session->unset_userdata(array(
            'id'        => '',
            'nome'      => '',
            'email'     => '',
            'admin'     => '',
            'logged'    => false
        ));
        $this->session->sess_destroy();
        setMessage('logoff','Você saiu do sistema!',"Você realizou o logoff com sucesso. \n Esperamos você em breve!");
        redirect('users/login/?msg=logoff');
    }

}

/* End of file users.php */
/* Location ./src/app/controllers/users.php */