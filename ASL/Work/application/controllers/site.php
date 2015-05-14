<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Name: Emily Van Vlerah
 * Assignment: Week 2 - Project Version 1 (Minimum 2 Features)
 * Date: May 13th, 2015
 * */
class Site extends CI_Controller {

    public function index()
    {
        $this->homepage();
    }

    public function homepage()
    {
        $this->load->view('view_header');
        $this->load->view('view_nav_homepage');
        $this->load->view('view_body_homepage');
        $this->load->view('view_footer');
    }

    public function login_or_create()
    {
        $this->load->view('view_header');
        $this->load->view('view_nav_homepage');
        $this->load->view('view_login_create');
        $this->load->view('view_footer');
    }

    public function user_profile()
    {
        $this->load->view('view_header');
        $this->load->view('view_nav_homepage');
        $this->load->view('view_user_profile');
        $this->load->view('view_footer');
    }
/*
    public function community_posts()
    {
        $this->load->view('');
    }

    public function past_hacks()
    {
        $this->load->view('');
    }

    public function user_bookmarks()
    {
        $this->load->view('');
    }

    public function user_follow()
    {
        $this->load->view('');
    }

*/
}