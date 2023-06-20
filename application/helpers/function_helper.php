<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use YoHang88\LetterAvatar\LetterAvatar;
if(!function_exists('ci'))
{ 
    function ci(){
        $ci = & get_instance();
        return $ci; 
    }
}
function sessionunique()
{ 
    $cookie= get_cookie('sessionid');
    if(!isset($cookie))
    {
        $length     =   "10"; 
        $time       =   time();
        $char       =   "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
        $random     =   substr(str_shuffle($char), 0, $length);
        $random     =   $random.$time;
        $cookie_name = "sessionid";
        $cookie_value = $random;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    }
    return $cookie;
}


if(!function_exists('submenu'))
{
    function switcher()
    {
        echo ci()->load->view("admin/components/switcher", '', TRUE);
    }
}

if(!function_exists('app_header'))
{
    function app_header()
    {
        echo ci()->load->view("admin/components/header", '', TRUE);
    }
}

if(!function_exists('sidebar'))
{
    function sidebar()
    {
        echo ci()->load->view("admin/components/sidebar", '', TRUE);
    }
}

if(!function_exists('sidebar_right'))
{
    function sidebar_right()
    {
        echo ci()->load->view("admin/components/sidebar-right", '', TRUE);
    }
}
if(!function_exists('modals'))
{
    function modals()
    {
        echo ci()->load->view("admin/components/modals", '', TRUE);
    }
}

if(!function_exists('csrf_field'))
{
    function csrf_field() {
        $name = ci()->security->get_csrf_token_name();
        $hash = ci()->security->get_csrf_hash();
        $input = "<input type='hidden' name='".$name."' value='".$hash."' />";
        return $input;
    }
}

if(!function_exists('adminSession'))
{
    function adminSession($id)
    {
        ci()->db->where('id',$id);
        $row = ci()->db->get('tbl_admin')->row();
        if(!empty($row)):
            if($row->status=="Inactive"):
                $data = ci()->session->all_userdata();
                foreach($data as $sess => $rows_value):
                    ci()->session->unset_userdata($sess);
                endforeach;
            endif;
        endif;
        return $row;
    }
}

if(!function_exists('createAvtar'))
{
    function createAvtar($name)
    {
        $avatarImage = new LetterAvatar($name, 'circle', 64);
        return $avatarImage;
    }
}

if(!function_exists('randomID'))
{
    function randomID($length = 6) {
        $char = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charLength = strlen($char);
        $rand = '';
        for ($i = 0; $i < $length; $i++) {
            $rand .= $char[rand(0, $charLength - 1)];
        }
        return $rand;
    }
}

if(!function_exists('colorCode'))
{
    function colorCode($length = 6) {
        $random = str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);
        return $random;
    }
}

if(!function_exists('getUserSession'))
{
    function getUserSession()
    {
        $cookie = get_cookie('user_id');
        ci()->db->where('md5(id)',$cookie);
        $row = ci()->db->get('tbl_users')->row();
        if(!empty($row)):
            if($row->status=="Inactive"):
                unset($_COOKIE['user_id']);
                setcookie('user_id', null, -1, '/');
            endif;
        endif;
        return $row;
    }
}

if(!function_exists('rememberMe'))
{
    function rememberMe()
    {
        $rem = get_cookie('rememberMe');
        $fc = mb_substr(site_name, 0, 1);
        $mid = '__'.strtolower($fc).'_'.base64_encode('adminMail');
        $mail = get_cookie($mid);
        $pid = '__'.strtolower($fc).'_'.base64_encode('adminPass');
        $pass = get_cookie($pid);
        if(!empty($rem)):
            $data = array('box'=>'checked','mail'=>$mail,'pass'=>$pass);
        else:
            $data = '';       
        endif;
        return $data;
    }
}

function post($val)
{
    return ci()->input->post($val);
}

function clean_post($val)
{
    return ci()->security->xss_clean(ci()->input->post($val));
}

function get($val)
{
    return ci()->security->xss_clean(ci()->input->get($val));
}

function set_alert($var, $msg)
{
    return ci()->session->set_flashdata($var, $msg);
}

function Alert($var)
{
    return ci()->session->flashdata($var);
}

function webp($img, $path, $path2 = null)
{
    $type = getimagesize($img);
    if ($type['mime']=='image/jpeg') {
        $ig=imagecreatefromjpeg($img);
    }elseif($type['mime']=='image/png') {
        $ig=imagecreatefrompng($img);
    }else{
        set_alert('warning', 'Please select .jpg|jpeg|png');
    }

    if (!empty($ig)) {
        $o=md5(time());
        $w=imagesx($ig);
        $h=imagesy($ig);
        $webp=imagecreatetruecolor($w,$h);
        $ab=imagecopy($webp,$ig,0,0,0,0,$w,$h);
        imagewebp($webp, $path.$o.'.webp', 80);
        if(!is_null($path2)):
            imagewebp($webp, $path2.$o.'.webp', 30);
        endif;
        $newimg=$o.'.webp';
    }
    return $newimg;
}

function img_url($val)
{
    return APP_URL.'uploads/'.$val;
}
