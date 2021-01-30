<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {  
  
    public function Multiple_update($table_name, $user_login_id, $points, $e_uploaded, $e_total_points)
    {
        $dat = $this->db->get_where($table_name,array($user_login_id=>$_SESSION['player_id']))->result();
            $up_uploaded = $dat[0]->$e_uploaded + 1;
            $up_points = $dat[0]->$e_total_points + $points; 

            $d = array($e_uploaded => $up_uploaded, $e_total_points => $up_points);
            return $this->am->update($table_name, $d, $user_login_id, $_SESSION['player_id']);
    }
// ======================================================== 
    public function Solved_update($table_name, $user_login_id, $points, $e_solved, $e_total_points)
    {
        $dat = $this->db->get_where($table_name,array($user_login_id=>$_SESSION['player_id']))->result();
            $up_points = $dat[0]->$e_total_points + $points;
            $up_solved = $dat[0]->$e_solved + 1;
            $d = array($e_total_points => $up_points, $e_solved => $up_solved);
            return $this->am->update($table_name, $d, $user_login_id, $_SESSION['player_id']);
    }
// ===============================================================================
    public function detail_category() {          // its a join  //without where condition 
        $d = $this->db->query('SELECT product_id, product_name, main_category_name, product_price,  product_image
        FROM main_category
        CROSS JOIN product
        ON main_category.main_category_id = product.main_cat_id')->result();
        return $d; }
// ===============================================================================
    public function detail_data_state($id)           // its a join
    {
        $d = $this->db->query('SELECT state_name, city_name, city_description   
        FROM state_table
        CROSS JOIN city_table
        ON state_table.state_id = city_table.city_state_id WHERE city_table.city_id = '.$id)->result();
        return $d; }
// ===============================================================================
    public function selectByDESCfivejoin($table_name1, $epzl_solved, $epzl_name, $epzl_approved)
    {
        $d = $this->db->query("SELECT gender, user_upload_name, user_image, $epzl_solved, $epzl_name   
        FROM $table_name1
        LEFT JOIN user_login
        ON $table_name1.user_upload_name = user_login.username WHERE $table_name1.$epzl_approved = 1")->result();
        return $d; }
// ===============================================================================
    public function count($table) {
        return $this->db->count_all($table);
    }
// ===============================================================================
    public function insertonly($table_name, $data) {
        return $this->db->insert($table_name, $data); }
// ===============================================================================
    public function insert($table_name, $data) {
        $r = $this->db->insert($table_name, $data);
        if ($r === TRUE) {
            $this->session->set_flashdata('msg', 'Record Inserted Successfully.');
            return $r;
        } else {
            $this->session->set_flashdata('msg', 'Somthing went Wrong.');
            return FALSE;
        }
    }
// ===============================================================================
    public function select_2where($table_name, $login_id, $sessn, $to_text_id, $personal_chat_id) {
            $this->db->where($login_id, $sessn);
            $this->db->where($to_text_id, $personal_chat_id);
     return $this->db->get($table_name)->result();
    }
// ===============================================================================
    public function select_2whereDESC($table_name, $login_id, $sessn, $to_text_id, $personal_chat_id, $by_order) {
            $this->db->where($login_id, $sessn);
            $this->db->where($to_text_id, $personal_chat_id);
     return $this->db->order_by($by_order, 'DESC')->get($table_name)->result();
    }
// ===============================================================================
    public function select_where_where($table_name, $login_id, $to_text_id, $personal_chat_id) {
            $this->db->where($login_id, $_SESSION['player_id']);
            $this->db->where($to_text_id, $personal_chat_id);
     return $this->db->get($table_name)->result();
    }
// ===============================================================================
    public function approveinsert($table_name, $data) {
        $r = $this->db->insert($table_name, $data);
            return $r;       
    }
// ===============================================================================
    public function selectdesc($table_name, $login_text_id) {
        return $this->db->order_by($login_text_id, 'DESC')->get($table_name)->result();
    }
// ===============================================================================
    public function select($table_name) {
        return $this->db->get($table_name)->result();
    }
// ===============================================================================
    public function selectByASCg($table_name, $id_name) {   // ASC is by default
        return $this->db->order_by($id_name, 'ASC')->get($table_name)->result();
    }
// ===============================================================================
    public function selectByDESC($table_name, $id_name) {   // ASC is by default
        return $this->db->order_by($id_name, 'DESC')->get($table_name)->result();
    }
// ===============================================================================
    public function select_where($table_name, $id_name, $id) {
        return $this->db->get_where($table_name, array($id_name => $id))->result();
    }
// ===============================================================================
    public function selectByDESCfive($table_name, $id_name, $epzl_approved) {   // ASC is by default
               $this->db->where($epzl_approved, 1);
        return $this->db->limit(5)->order_by($id_name, 'DESC')->get($table_name)->result();
    }
// ===============================================================================
    public function selectByASCfive($table_name, $id_name, $epzl_approved) {   // ASC is by default
               $this->db->where($epzl_approved, 1);
        return $this->db->limit(5)->order_by($id_name, 'ASC')->get($table_name)->result();
    }
// ===============================================================================
    public function selectByASC($table_name, $id_name, $epzl_approved) {   // ASC is by default
               $this->db->where($epzl_approved, 1);
        return $this->db->order_by($id_name, 'ASC')->get($table_name)->result();
    }
// ===============================================================================
    public function selectfindpeople($table_name, $id_name) {   // ASC is by default
               // $this->db->where($epzl_approved, 1);
        return $this->db->order_by($id_name, 'ASC')->get($table_name)->result();
    }
// ===============================================================================
    public function select_where_DESC($table_name, $e_pzl_id, $epzl_approved) {
            $this->db->where('user_upload_name', $_SESSION['player']);
            $this->db->where($epzl_approved, 1);
     return $this->db->order_by($e_pzl_id, 'DESC')->get($table_name)->result();
    }
// ===============================================================================
    public function selectName_twowhere($table_name, $user_player_name, $epzl_approved) {
            $this->db->where('user_upload_name', $user_player_name);
            $this->db->where($epzl_approved, 1);
     return $this->db->get($table_name)->result();
    }
// ===============================================================================
    public function selectId_twowhere($table_name, $e_pzl_id, $user_player_id, $epzl_approved) {
            $this->db->where($e_pzl_id, $user_player_id);
            $this->db->where($epzl_approved, 1);
     return $this->db->get($table_name)->result();
    }
// ===============================================================================
    public function select_oneDESC($table_name, $order_colom, $colom1, $colom2) {
            $this->db->where($colom1, $colom2);
     return $this->db->order_by($order_colom, 'DESC')->get($table_name)->result();
    }
// ===============================================================================
    // public function select_threewhere($table_name, $colom1, $colom2, $colom3, $colom4, $colom5, $colom6) {
    //         $this->db->where($colom1, $colom2);
    //         $this->db->where($colom3, $colom4);
    //         $this->db->where($colom5, $colom6);
    //  return $this->db->get($table_name)->result();
    // }
// ===============================================================================
    public function select_twoonly($table_name, $order_colom, $colom1, $colom2, $colom3, $colom4) {
            $this->db->where($colom1, $colom2);
            $this->db->where($colom3, $colom4);
     return $this->db->order_by($order_colom, 'DESC')->get($table_name)->result();
    }    
// ===============================================================================
    public function selectById($table_name, $id_name, $id) {
        return $this->db->get_where($table_name, array($id_name => $id))->result();
    }
// ===============================================================================
    public function updatetwowhere($table_name, $data, $where1, $where2, $where3, $where4) {
             $this->db->where($where1, $where2);
             $this->db->where($where3, $where4);
      return $this->db->update($table_name, $data); }
// ===============================================================================
    public function updateonly($table_name, $data, $where1, $where2) {
             $this->db->where($where1, $where2);
      return $this->db->update($table_name, $data); }
// ===============================================================================
    public function update($table_name, $data, $colom_name, $id) {
             $this->db->where($colom_name, $id);
        $r = $this->db->update($table_name, $data);
        if ($r === TRUE) {
            $this->session->set_flashdata('msg', 'Record Updated Successfully.');
            return $r;
        } else {
            $this->session->set_flashdata('msg', 'Somthing went Wrong.');
            return FALSE;
        }
    }
// ===============================================================================
    public function approveupdate($table_name, $data, $colom_name, $id) {
             $this->db->where($colom_name, $id);
        $r = $this->db->update($table_name, $data);
            $this->session->set_flashdata('msg_w', 'Sudoku Sent for Approval.');
            return $r;  
    }
// ===============================================================================
    public function deleteLimit20($table_name, $id_name, $id) {
             $this->db->where($id_name, $id);
      return $this->db->delete($table_name);
    }
// ===============================================================================
    public function delete($table_name, $id_name, $id) {
             $this->db->where($id_name, $id);
        $r = $this->db->delete($table_name);
        if ($r === TRUE) {
            $this->session->set_flashdata('msg', 'Record Deleted Successfully.');
            return $r;
        } else {
            $this->session->set_flashdata('msg', 'Somthing went Wrong.');
            return FALSE;
        }
    }
    // NEED LIB HERE
 
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
        $name = time() . "." . $file_name;
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