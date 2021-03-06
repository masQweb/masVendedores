<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

   public function get_usuarios($usuario,$clave){
   	  $query= $this->db->get_where('usuarios', array('usuario' => $usuario,
   	  										                   'clave'   => $clave));


   	   if ($query->num_rows() > 0){
            
   	   	$userdata = $query->result_array(); 
		      $admin    = $userdata[0]['es_admin'];
            $id_user  = $userdata[0]['id'];

   	  		$userdata = array('user_name' => $usuario,
                              'admin'     => $admin,
                              'id_user'   => $id_user);
            $data['cssFiles'] = array('login/css/style.css','style.css');
                   $data['jsFiles']  = array('jquery.js',
                          'jquery-validation/dist/jquery.validate.js',
                          'jquery-validation/localization/messages_es.js',
                          'valid_forms.js');

   	  		$this->session->set_userdata($userdata);

   	  		return true;

   	   } else {

			   return false;

		   }
   }
}