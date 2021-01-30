<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Need_lib {

    var $CI; 

    public function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->helper('url');
        $this->CI->load->model('admin_model', 'am'); 
        $this->CI->load->model('public_model', 'pm');
    }
 
    public function send_mail($to_email, $sub, $msg) {
        // $from_email = "email@example.com";
      
        $from_email = "niket8khapekar@gmail.com";
        $this->CI->load->library('email');
        $this->CI->email->from($from_email, 'Niket Pvt. Ltd.');
        $this->CI->email->to($to_email);
        $this->CI->email->set_mailtype("html");
        $this->CI->email->subject($sub);
        $this->CI->email->message($msg);
        if ($this->CI->email->send()) {
            return TRUE;
        } else {
            return FALSE;
        } 
    }

    public function upload_file($file_name, $tmp_file_loc, $path) {
           function Sanitiesss($a) {  $a = stripcslashes($a); return htmlspecialchars($a); }
           $file_name1 = Sanitiesss($file_name);
        $name = time() . "." . $file_name1;
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);
        if ($ext == "jpg" || $ext == "png" || $ext == "jpeg" || $ext == "JPG") {
            move_uploaded_file($tmp_file_loc, $path . $name);
            return $name;
        } else {
            return FALSE;
        }
    }

    public function Upload_resize_file($name, $path) {
        // $name is form field name.
        if ($_FILES[$name]['error'] == 0) {
            //upload and update the file
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'jpeg|jpg|png|JPG';
            $config['overwrite'] = false;
            $config['remove_spaces'] = true;
            $new_name = time() . '-' . $_FILES[$name]['name'];
            $config['file_name'] = $new_name;
            //$config['max_size'] = '100';// in KB

            $this->CI->load->library('upload', $config);

            if (!$this->CI->upload->do_upload($name)) {
                $this->CI->session->set_flashdata('msg_e', $this->CI->upload->display_errors('', ''));
                return FALSE;
            } else {
                //Image Resizing
                $config['source_image'] = $this->CI->upload->upload_path . $this->CI->upload->file_name;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 500;
                $config['height'] = 500;

                $this->CI->load->library('image_lib', $config);

                if (!$this->CI->image_lib->resize()) {
                    $this->CI->session->set_flashdata('msg_e', $this->CI->image_lib->display_errors('', ''));
                    return FALSE;
                } else {
                    return $this->CI->upload->file_name;
                }
            }
        }
    }

    public function pagination($page_url, $table_name) {
        return $data;
    }

     public function send_sms($mobiles, $message) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://sms.procreations.in/api/sendhttp.php?authkey=183418Aakv3DJ8NR5a093741&mobiles=$mobiles&message=$message&sender=CHARUT&route=1&unicode=1");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // tell the return not to go to the browser
        $output = curl_exec($ch); // point the data to a variable
        curl_close($ch);
        return $output;
    }

    public function general_pagination($page_url, $table_name, $id_name) {
        $this->CI->load->library('pagination');
        $config = array();
        // $page_url = base_url() . "lawyer_profile_data/lawyer_question";
        $config["base_url"] = $page_url;
        $total_row = $this->CI->am->count($table_name);
        $config["total_rows"] = $total_row;
        $config["per_page"] = 2;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;
        $config['cur_tag_open'] = '&nbsp;<a class="current">';
        $config['cur_tag_close'] = '</a>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->CI->pagination->initialize($config);
        if ($this->CI->uri->segment(3)) {
            $page = ($this->CI->uri->segment(3));
        } else {
            $page = 1;
        }
        $pageStart = ($page * $config["per_page"]) - $config["per_page"];
        $this->CI->pagination->initialize($config);

        $data["page_data"] = $this->CI->am->page_data($config["per_page"], $pageStart, $table_name, $id_name);
        $data["links"] = $this->CI->pagination->create_links();

        return $data;
    }

}
