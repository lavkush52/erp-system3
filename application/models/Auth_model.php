<?php
class Auth_model extends CI_Model
{
    public function admin_login()
    {
        $email = clean_post('email');
        $password = clean_post('password');
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $row = $this->db->get('tbl_admin')->row();
        
        if(!empty($row)):
            $fc = mb_substr(site_name, 0, 1);
            $mid = '__'.strtolower($fc).'_'.base64_encode('adminMail'); $mval = base64_encode($email);
            $pid = '__'.strtolower($fc).'_'.base64_encode('adminPass'); $pval = base64_encode($password);

            if(clean_post('remember')==1):
                $cookie_name = "rememberMe";
                $cookie_value = clean_post('remember');
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                setcookie($mid, $mval, time() + (86400 * 30), "/");
                setcookie($pid, $pval, time() + (86400 * 30), "/");
            else:
                setcookie('rememberMe', null, -1, '/');
                setcookie($mid, null, -1, '/');
                setcookie($pid, null, -1, '/');
            endif;
            $this->session->set_userdata('admin_id', $row->id);
        else:
            return 'Email or password is invaild';
        endif;      
    }

    public function admin_forgot_password()
    {
        $email = clean_post('email');
        $this->db->where('email', $email);
        $row = $this->db->get('tbl_admin')->row();
        if(!empty($row)):
            return true;
        else:
            return false;
        endif; 
    }
}

?>