<!--
 * Name: Emily Van Vlerah
 * Assignment: Week 2 - Project Version 1 (Minimum 2 Features)
 * Date: May 13th, 2015
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

    }
