<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 	
	//-- check logged user
	if (!function_exists('check_login_user')) {
	    function check_login_user() {
	        $ci = get_instance();
	        if ($ci->session->userdata('is_login') != TRUE) {
	            $ci->session->sess_destroy();
	            redirect(base_url('auth'));
	        }
	    }
	}

	if(!function_exists('check_power')){
	    function check_power($type){        
	        $ci = get_instance();
	        
	        $ci->load->model('common_model');
	        $option = $ci->common_model->check_power($type);        
	        
	        return $option;
	    }
    } 

	//-- current date time function
	if(!function_exists('current_datetime')){
	    function current_datetime(){        
	        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
	        $date_time = $dt->format('Y-m-d H:i:s');      
	        return $date_time;
	    }
	}

	//-- show current date & time with custom format
	if(!function_exists('my_date_show_time')){
	    function my_date_show_time($date){       
	        if($date != ''){
	            $date2 = date_create($date);
	            $date_new = date_format($date2,"d M Y h:i A");
	            return $date_new;
	        }else{
	            return '';
	        }
	    }
	}

	//-- show current date with custom format
	if(!function_exists('my_date_show')){
	    function my_date_show($date){       
	        
	        if($date != ''){
	            $date2 = date_create($date);
	            $date_new = date_format($date2,"d M Y");
	            return $date_new;
	        }else{
	            return '';
	        }
	    }
	}

	function get_active_class() {
		$controllerClassUse = & load_class('Router');
		return ucwords($controllerClassUse->fetch_class());
	}
	 
	function get_active_method() {
		$RTR = & load_class('Router');
		return $RTR->fetch_method();
	}
	 
	function get_paginate_url() {
		parse_str($_SERVER['QUERY_STRING'], $arr);
		array_unique($arr);
		unset($arr['per_page']);
	
		return  '/?' . http_build_query($arr);
	}
	 
	function redirect_paginacao($url) {
		$CI = &get_instance();
	
		if( !preg_match('/\/$/', $url) ) $url .= '/';
		$parsedUrl = parse_url($url);
		
		$qStringPagination = ( !preg_match('/^\?$/', $CI->session->userdata('qStringPagination')) ) ? $CI->session->userdata('qStringPagination') : $CI->session->userdata('qStringPagination');
		if( !empty($parsedUrl['query']) ){
			parse_str($CI->session->userdata('qStringPagination'), $queryArray);
			parse_str($parsedUrl['query'], $tempArray);
			foreach($tempArray as $key => $value){
				$queryArray[$key] = $value;
			}
			$qStringPagination = "?" . http_build_query($queryArray); 
		}
		
		redirect($url . $CI->session->userdata('qStringPagination'));
	}

	function arShow($array){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}

  