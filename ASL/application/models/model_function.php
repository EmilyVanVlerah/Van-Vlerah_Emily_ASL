<!--
 * Name: Emily Van Vlerah
 * Assignment: Week 4 - Project Version 3 (2 Additional Features)
 * Date: May 25th, 2015
-->

<?php
    class Model_function extends CI_Model{

        public function can_log_in(){

            $this->db->where('email', $this->input->post('email'));
            $this->db->where('password', md5($this->input->post('password')));

            $query = $this->db->get('users');

            if($query->num_rows() == 1){
                return true;
            } else {
                return false;
            }
        }


        public function add_temp_users($key)
        {

            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'key' => $key

            );

            $query = $this->db->insert('temp_user', $data);
            if ($query) {
                return true;
            } else {
                return false;
            }
        }

        public function is_key_valid($key){
            $this->db->where('key', $key);
            $query = $this->db->get('temp_user');

            if ($query->num_rows() == 1){
                return true;
            } else {
                return false;
            }

        }

        public function add_user($key){

            $this->db->where('key', $key);
            $temp_user = $this->db->get('temp_user');

            if ($temp_user){
                $row = $temp_user->row();

                $data = array(
                    'username' => $row->username,
                    'email' => $row->email,
                    'password' => $row->password
                );

                $did_add_user = $this->db->insert('user', $data);

            }

            if($did_add_user){
                $this->db->where('key', $key);
                $this->db->delete('temp_user');
                return $data['email'];
            } return false;

        }

        public function log_in($facebook_user)
        {   $data = array(
                'is_logged_in' => 1,
                'email' => $facebook_user['email'],
                'name' => $facebook_user['name']
            );

            $this->session->set_userdata($data);
        }

        public function sign_up_from_facebook($facebook_user){
            $data = array(
                'first_name' => $facebook_user['first_name'],
                'last_name' => $facebook_user['last_name'],
                'email' => $facebook_user['email'],
                'facebook_id' => $facebook_user['id']
            );

            $this->db->insert('users', $data);
        }

    }
