<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Name: Emily Van Vlerah
 * Assignment: Week 2 - Project Version 1 (Minimum 2 Features)
 * Date: May 13th, 2015
 * */
class Site extends CI_Controller {

    public function index()//homepage
    {
        $this->homepage();
    }

    public function homepage()//homepage
    {
        $this->load->view('view_homepage');
    }

    public function login()//login page
    {
        $this->load->view('view_login');
    }

    public function register()//sign up page
    {
        $this->load->view('view_register');
    }

    public function user_profile()//user profile
    {
        if($this->session->userdata('is_logged_in')){
            $this->load->view('view_user_profile');
        }else{
            redirect('index.php/site/restricted');
        }
    }

    public function restricted(){//login restriction
        $this->load->view('view_restricted');
    }

    public function login_validation(){//login validation function

        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials');

        $this->form_validation->set_rules('password', 'Password', 'required|md5');

        if($this->form_valdation->run()){

            $data = array(
                'email' => $this->input->post('email'),
                'is_logged_in' => 1
            );


            $this->session->set_userdata($data);

            redirect('index.php/site/user_profile');
        }else{
            $this->load->view('view_login');
        }
    }

    public function signup_validation(){

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');

        $this->form_validation->set_message('is_unique[users.username]', 'That email address already exists.');

        $this->form_validation->set_message('is_unique[users.email]', 'That email address already exists.');

        if ($this->form_validation->run()){

            //generate a random key
            $key = md5(uniqid());

            //load library for email
            $this->load->library('email', array('mailtype'=>'html'));

            //load model for adding users to DB
            $this->load->model('model_function');

            //write the email
            $this->email->from('confirm@hackinlife.com', "Hackin' Life");
            $this->email->to($this->input->post('email'));
            $this->email->subject("Confirm your account.");
            $message = "<p>Thank you for signing up for Hackin' Life. We are glad to have you as a member. Please click the link below to confirm your Account.</p>";
            $message .= "<p><a href='".base_url()."index.php/site/register_user/$key'>Confirm here!</a></p>";

            $this->email->message($message);

            //send an email to the user
            if ($this->model_function->add_temp_users($key)) {
                if ($this->email->send()) {
                    echo "The email has been sent.";
                } else echo "Could not send the email.";
            } else echo "Problem adding to database";



        } else {
            $this->load->view('view_register');
        }
    }

    public function validate_credentials(){//validate credentials function
        $this->load->model('model_function');

        if($this->model_function->can_log_in()){
            return true;
        }else{
            $this->form_validation->set_message('validate_credentials', 'Incorrect username/password.');
            return false;
        }
    }

    public function logout(){//logout button funtion
        $this->session->sess_destroy();
        redirect('index.php/site/login');
    }

    public function register_user($key)
    {
        $this->load->model('model_function');

        if ($this->model_function->is_key_valid($key)) {
            if ($newemail = $this->model_function->add_user($key)) {

                $data = array(
                    'email' => $newemail,
                    'is_logged_in' => 1
                );

                $this->session->set_userdata($data);
                redirect('index.php/site/user_profile');

            } else echo "failed to add user, please try again.";
        } else echo "invalid key";

    }

    public function about_us()//about page
    {
        $this->load->view('view_about');
    }

    public function contact_us()//contact info page
    {
        $this->load->view('view_contact');
    }

    public function all_hacks()
    {
        /*$data['entries'] = $this->model_function->get_posts(40, 0);*/

        $data['query'] = $this->db->get('entries');

        $this->db->where('entry_id', $this->uri->segment(3));

        $this->load->view('view_community', $data);
    }

    public function hack_insert(){

        $this->db->insert('entries', $_POST);

        /*$post_title = $this->input->post('title');
        $post_body = $this->input->post('body');
        $this->model_function->save_post($post_title, $post_body);*/


    }


}