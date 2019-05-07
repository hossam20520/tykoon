<?php

add_theme_support('post-thumbnails');
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

function hossam_add_script(){ 

        wp_enqueue_script('jquery-js' , get_template_directory_uri() . '/script/jquery-1.12.4.min.js' , array() , false , true);
        wp_enqueue_script('wow-js' , get_template_directory_uri() . '/script/wow.min.js' , array() , false , true);
        wp_enqueue_script('bootstrap-js' , get_template_directory_uri() . '/script/bootstrap.min.js' , array() , false , true); 
       
        wp_enqueue_script('unpkg-js' , 'https://unpkg.com/aos@2.3.1/dist/aos.js' , array() , false , true);
         
        wp_enqueue_script('jsdelivr-js' , 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js' , array() , false , true);
      wp_enqueue_script('slick-js' , get_template_directory_uri() . '/script/slick.min.js' , array() , false , true);
      wp_enqueue_script('map-api' , 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBenFW7knU8aOYP5pDHplxLCKJSd8Hvn1w&callback=initMap' , array() , false , true);
      wp_enqueue_script('map-api' , 'https://unpkg.com/aos@2.3.1/dist/aos.js' , array() , false , true);
      
      
      
      
      if(is_page('project')){
                wp_enqueue_script('single-js' , get_template_directory_uri() . '/script/Single.pro.js' , array() , false , true); 

        }else if(is_page('projectss') || is_page('resale') || is_page('developers')){
                wp_enqueue_script('script-js' , get_template_directory_uri() . '/script/projects.js' , array() , false , true); 
        }else if(is_page('residential') || is_page( 'residential-projects' )){
                wp_enqueue_script('Blog-js' , get_template_directory_uri() . '/script/Blog.js' , array() , false , true);     
         }else if(is_page('commercial') || is_page('commercial-projects')){ 

               wp_enqueue_script('Blog-js' , get_template_directory_uri() . '/script/Blog.js' , array() , false , true);  
         }else if(is_page('resort') || is_page('resort-projects')){
                wp_enqueue_script('Blog-js' , get_template_directory_uri() . '/script/Blog.js' , array() , false , true);    
         }else if(is_page( 'developOne' )){
                wp_enqueue_script('develop-js' , get_template_directory_uri() . '/script/Single.developers.js' , array() , false , true); 
         }else if(is_page( 'blog' )){
              
                wp_enqueue_script('Blog-js' , get_template_directory_uri() . '/script/Blog.js' , array() , false , true);  
         }else{

                wp_enqueue_script('script-js' , get_template_directory_uri() . '/script/script.js' , array() , false , true); 

        }
        
 }


function hossam_add_style(){

   
        wp_enqueue_style('font-awesome' , get_template_directory_uri() . '/css/font-awesome.min.css');
        wp_enqueue_style('font-google' , 'https://fonts.googleapis.com/css?family=PT+Sans');
     
        wp_enqueue_style('animate' , get_template_directory_uri() . '/css/animate.css');
        wp_enqueue_style('bootstrap-css' , get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('slick-css' , get_template_directory_uri() . '/css/slick.css'); 
        if(is_page('project')){
               
                wp_enqueue_style('single-css' , get_template_directory_uri() . '/css/Single.pro.css?v=1');
        }else if(is_page('projects') || is_page('resale')){
                wp_enqueue_style('style-css' , get_template_directory_uri() . '/css/style.css');
                wp_enqueue_style('projectss-css' , get_template_directory_uri() . '/css/projects.css');
        }else if(is_page('residentialpro') || is_page( 'listprojects' ) || is_page('residentialsale')){
                wp_enqueue_style('style-css' , get_template_directory_uri() . '/css/style.css');
                wp_enqueue_style('residential-css' , get_template_directory_uri() . '/css/pro1.css');
        }else if(is_page('commercpro') || is_page('commercial-projects') || is_page('commercsale') ){
                wp_enqueue_style('style-css' , get_template_directory_uri() . '/css/style.css');
                wp_enqueue_style('commercial-css' , get_template_directory_uri() . '/css/pro2.css');
        }else if(is_page('resortpro') || is_page('resort-projects') || is_page('resortsale') ){
                wp_enqueue_style('style-css' , get_template_directory_uri() . '/css/style.css');
                wp_enqueue_style('resort-css' , get_template_directory_uri() . '/css/pro3.css');
        }else if(is_page('carers')){

                  wp_enqueue_style('resort-css' , get_template_directory_uri() . '/css/Careers.css'); 
        }else if(is_page('developer')){ 
                
                wp_enqueue_style('developers-css' , get_template_directory_uri() . '/css/Developers.css');

        }else if(is_page( 'singledev' )){
              
                wp_enqueue_style('singledev-css' , get_template_directory_uri() . '/css/Single.developers.css');

        }else if(is_page( 'blog' )){

                wp_enqueue_style('blog-css' , get_template_directory_uri() . '/css/Blog.css'); 
        }else if(is_page('contact')){
               
                wp_enqueue_style('contact-css' , get_template_directory_uri() . '/css/Contact.css'); 
        }else if(is_page('about')){
                wp_enqueue_style('about-css' , get_template_directory_uri() . '/css/About.css'); 
           
        }elseif(is_page('adminDev')){

 wp_enqueue_style('style-css' , get_template_directory_uri() . '/css/style.css');
        }else{ 
                wp_enqueue_style('style-css' , get_template_directory_uri() . '/css/style.css');
        }
       
       


}

function remove_admin_bar() {

        show_admin_bar(false);
      }
      add_action('after_setup_theme', 'remove_admin_bar');

      
add_action('wp_enqueue_scripts'  ,'hossam_add_script');
add_action('wp_enqueue_scripts'  ,'hossam_add_style');






add_action( 'wp_ajax_add_name' , 'data_add_name'  );
add_action( 'wp_ajax_nopriv_name' , 'data_add_name'  );

function data_add_name(){
	global $wpdb;
	global $current_user;
	get_currentuserinfo();
      $name = $_POST['full_name'];

      $table_name = "users_cv";
      $wpdb->insert($table_name, array(
                     'fname_cv' => $name //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
                    
            ),array('%s') 
    );

	
	wp_reset_postdata();
	wp_die();
	
}


add_action( 'wp_ajax_my_action' , 'data_fetch'  );
add_action( 'wp_ajax_nopriv_my_action' , 'data_fetch'  );

function data_fetch(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

  $table_name = "wpym_developers";
  $wpdb->insert($table_name, array(
	  'name_dev' =>  "not_name", //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
          'description_dev' => "not_name",
          'img_dev'   => $upload['url']
        ),array('%s','%s' , '%s' ) 
);
	echo json_encode($upload);
	wp_reset_postdata();
	wp_die();
	


}


add_action( 'wp_ajax_updateDev' , 'updateDev_ajx');
add_action( 'wp_ajax_nopriv_updateDev' , 'updateDev_ajx');

function updateDev_ajx(){
global $wpdb;
$table_name  = "wpym_developers";

$wpdb->query( $wpdb->prepare("UPDATE $table_name 
			SET name_dev = %s  , description_dev = %s
		 WHERE name_dev = %s",$_POST['name_dev'],$_POST['desc'] , "not_name")
);

$ar = array("status"=> "success");
	echo json_encode($ar);
	wp_reset_postdata();
	wp_die();
	


}










//  jjjjjjjjjjjjjjjjjjjjjjjj---------admResPro----------jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj

add_action( 'wp_ajax_admResPro' , 'admResPro_area_img'  );
add_action( 'wp_ajax_nopriv_admResPro' , 'admResPro_area_img'  );

function admResPro_area_img(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

  $table_name = "wpym_res_area";
  $wpdb->insert($table_name, array(
	  'name_res_a' =>  $_POST['new_area_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
         
          'img_res_a'   => $upload['url']
        ),array('%s','%s') 
);

$imgv = $wpdb;

$id  = $imgv->get_row( "SELECT * from wpym_res_area ORDER BY id_res_a DESC" );
$gid = $id->id_res_a;







    $arr = array(
            'url' => $upload['url'],
            'id'  => $gid
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}


add_action( 'wp_ajax_admResPro_p_img' , 'admResPro_project_img'  );
add_action( 'wp_ajax_nopriv_admResPro_p_img' , 'admResPro_project_img'  );


function admResPro_project_img(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

  $table_name = "wpym_projects_res";
  $wpdb->insert($table_name, array(
	  'name_res_pro' => $_POST['name_project'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
         
          'img_res_pro'   => $upload['url'],
          'id_area_res'   => $_POST['id_area']
        ),array('%s','%s' , '%s') 
);

$imgv = $wpdb;

$id  = $imgv->get_row( "SELECT * from wpym_projects_res ORDER BY id_res_pro DESC" );
$gid = $id->id_res_pro;
$ar = array(
        'url' => $upload['url'],
        'id' => $gid
);
	echo json_encode($ar);
	wp_reset_postdata();
	wp_die();

}




add_action( 'wp_ajax_project_1_d' , 'project_1'  );
add_action( 'wp_ajax_nopriv_project_1_d' , 'project_1'  );

function project_1(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "resPro"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}



add_action( 'wp_ajax_project_2_d' , 'project_2'  );
add_action( 'wp_ajax_nopriv_project_2_d' , 'project_2'  );

function project_2(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "resPro"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}




add_action( 'wp_ajax_project_3_d' , 'project_3'  );
add_action( 'wp_ajax_nopriv_project_3_d' , 'project_3'  );

function project_3(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "resPro"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}





add_action( 'wp_ajax_project_4_d' , 'project_4'  );
add_action( 'wp_ajax_nopriv_project_4_d' , 'project_4'  );

function project_4(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "resPro"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}




//  jjjjjjjjjjjjjjjjjjjjjjjj---------Commerisal----------jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj

add_action( 'wp_ajax_admComPro' , 'admComPro_area_img'  );
add_action( 'wp_ajax_nopriv_admComPro' , 'admComPro_area_img'  );

function admComPro_area_img(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

  $table_name = "wpym_com_area";
  $wpdb->insert($table_name, array(
	  'name_com_a' =>  $_POST['new_area_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
         
          'img_com_a'   => $upload['url']
        ),array('%s','%s') 
);

$imgv = $wpdb;

$id  = $imgv->get_row( "SELECT * from wpym_com_area ORDER BY id_com_a DESC" );
$gid = $id->id_com_a;







    $arr = array(
            'url' => $upload['url'],
            'id'  => $gid
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}




add_action( 'wp_ajax_admComPro_p_img' , 'admComPro_project_img'  );
add_action( 'wp_ajax_nopriv_admComPro_p_img' , 'admComPro_project_img'  );


function admComPro_project_img(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

  $table_name = "wpym_projects_com";
  $wpdb->insert($table_name, array(
	  'name_res_pro' => $_POST['name_project'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
         
          'img_res_pro'   => $upload['url'],
          'id_area_res'   => $_POST['id_area']
        ),array('%s','%s' , '%s') 
);

$imgv = $wpdb;

$id  = $imgv->get_row( "SELECT * from wpym_projects_com ORDER BY id_com_pro DESC" );
$gid = $id->id_com_pro;
$ar = array(
        'url' => $upload['url'],
        'id' => $gid
);
	echo json_encode($ar);
	wp_reset_postdata();
	wp_die();

}










add_action( 'wp_ajax_project_1_d_com' , 'project_1_com'  );
add_action( 'wp_ajax_nopriv_project_1_d_com' , 'project_1_com'  );

function project_1_com(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "comPro"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}



add_action( 'wp_ajax_project_2_d_com' , 'project_2_com'  );
add_action( 'wp_ajax_nopriv_project_2_d_com' , 'project_2_com'  );

function project_2_com(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "comPro"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}




add_action( 'wp_ajax_project_3_d_com' , 'project_3_com'  );
add_action( 'wp_ajax_nopriv_project_3_d_com' , 'project_3_com'  );

function project_3_com(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "comPro"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}





add_action( 'wp_ajax_project_4_d_com' , 'project_4_com'  );
add_action( 'wp_ajax_nopriv_project_4_d_com' , 'project_4_com'  );

function project_4_com(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "comPro"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}





//  jjjjjjjjjjjjjjjjjjjjjjjj---------Resort----------jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj

add_action( 'wp_ajax_admSortPro' , 'admSortPro_area_img'  );
add_action( 'wp_ajax_nopriv_admSortPro' , 'admSortPro_area_img'  );

function admSortPro_area_img(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

  $table_name = "wpym_sort_area";
  $wpdb->insert($table_name, array(
	  'name_sort_a' =>  $_POST['new_area_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
         
          'img_sort_a'   => $upload['url']
        ),array('%s','%s') 
);

$imgv = $wpdb;

$id  = $imgv->get_row( "SELECT * from wpym_sort_area ORDER BY id_sort_a DESC" );
$gid = $id->id_sort_a;







    $arr = array(
            'url' => $upload['url'],
            'id'  => $gid
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}




add_action( 'wp_ajax_admSortPro_p_img' , 'admSortPro_project_img'  );
add_action( 'wp_ajax_nopriv_admSortPro_p_img' , 'admSortPro_project_img'  );


function admSortPro_project_img(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

  $table_name = "wpym_projects_sort";
  $wpdb->insert($table_name, array(
	  'name_sort_pro' => $_POST['name_project'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
         
          'img_sort_pro'   => $upload['url'],
          'id_area_sort'   => $_POST['id_area']
        ),array('%s','%s' , '%s') 
);

$imgv = $wpdb;

$id  = $imgv->get_row( "SELECT * from wpym_projects_sort ORDER BY id_sort_pro DESC" );
$gid = $id->id_sort_pro;
$ar = array(
        'url' => $upload['url'],
        'id' => $gid
);
	echo json_encode($ar);
	wp_reset_postdata();
	wp_die();

}










add_action( 'wp_ajax_project_1_d_sort' , 'project_1_sort'  );
add_action( 'wp_ajax_nopriv_project_1_d_sort' , 'project_1_sort'  );

function project_1_sort(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "sortPro"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}



add_action( 'wp_ajax_project_2_d_sort' , 'project_2_sort'  );
add_action( 'wp_ajax_nopriv_project_2_d_sort' , 'project_2_sort'  );

function project_2_sort(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "sortPro"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}




add_action( 'wp_ajax_project_3_d_sort' , 'project_3_sort'  );
add_action( 'wp_ajax_nopriv_project_3_d_sort' , 'project_3_sort'  );

function project_3_sort(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "sortPro"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}





add_action( 'wp_ajax_project_4_d_sort' , 'project_4_sort'  );
add_action( 'wp_ajax_nopriv_project_4_d_sort' , 'project_4_sort'  );

function project_4_sort(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "sortPro"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}







//  jjjjjjjjjjjjjjjjjjjjjjjj---------Residental Resale----------jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj



add_action( 'wp_ajax_admResSale' , 'admResSale_area_img'  );
add_action( 'wp_ajax_nopriv_admResSale' , 'admResSale_area_img'  );

function admResSale_area_img(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

  $table_name = "wpym_res_area_sale";
  $wpdb->insert($table_name, array(
	  'name_res_a_s' =>  $_POST['new_area_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
         
          'img_res_a_s'   => $upload['url']
        ),array('%s','%s') 
);

$imgv = $wpdb;

$id  = $imgv->get_row( "SELECT * from wpym_res_area_sale ORDER BY id_res_a_s DESC" );
$gid = $id->id_res_a_s;







    $arr = array(
            'url' => $upload['url'],
            'id'  => $gid
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}


add_action( 'wp_ajax_admResSale_p_img' , 'admResSale_project_img'  );
add_action( 'wp_ajax_nopriv_admResSale_p_img' , 'admResSale_project_img'  );


function admResSale_project_img(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

  $table_name = "wpym_projects_res_sale";
  $wpdb->insert($table_name, array(
	  'name_res_pro_sale' => $_POST['name_project'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
         
          'img_res_pro_sale'   => $upload['url'],
          'id_area_res_sale'   => $_POST['id_area']
        ),array('%s','%s' , '%s') 
);

$imgv = $wpdb;

$id  = $imgv->get_row( "SELECT * from wpym_projects_res_sale ORDER BY id_res_pro_sale DESC" );
$gid = $id->id_res_pro;
$ar = array(
        'url' => $upload['url'],
        'id' => $gid
);
	echo json_encode($ar);
	wp_reset_postdata();
	wp_die();

}



add_action( 'wp_ajax_project_1_d_res_sale' , 'project_1_res_Sale'  );
add_action( 'wp_ajax_nopriv_project_1_d_res_sale' , 'project_1_res_Sale'  );

function project_1_res_Sale(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "resSale"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}



add_action( 'wp_ajax_project_2_d_res_sale' , 'project_2_res_sale'  );
add_action( 'wp_ajax_nopriv_project_2_d_res_sale' , 'project_2_res_sale'  );

function project_2_res_sale(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "resSale"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}




add_action( 'wp_ajax_project_3_d_res_sale' , 'project_3_res_sale'  );
add_action( 'wp_ajax_nopriv_project_3_d_res_sale' , 'project_3_res_sale'  );

function project_3_res_sale(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "resSale"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}





add_action( 'wp_ajax_project_4_d_res_sale' , 'project_4_res_sale'  );
add_action( 'wp_ajax_nopriv_project_4_d_res_sale' , 'project_4_res_sale'  );

function project_4_res_sale(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "resSale"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}













//   jjjjjjjjjjjjjjjjjjjjjjjj          com sale dddddddddddddddddddddddd





add_action( 'wp_ajax_admComSale' , 'admComSale_area_img'  );
add_action( 'wp_ajax_nopriv_admComSale' , 'admComSale_area_img'  );

function admComSale_area_img(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

  $table_name = "wpym_com_area_sale";
  $wpdb->insert($table_name, array(
	  'name_com_a_s' =>  $_POST['new_area_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
         
          'img_com_a_s'   => $upload['url']
        ),array('%s','%s') 
);

$imgv = $wpdb;

$id  = $imgv->get_row( "SELECT * from wpym_com_area_sale ORDER BY id_com_a_s DESC" );
$gid = $id->id_com_a_s;







    $arr = array(
            'url' => $upload['url'],
            'id'  => $gid
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}




add_action( 'wp_ajax_admComSale_p_img' , 'admComSale_project_img'  );
add_action( 'wp_ajax_nopriv_admComSale_p_img' , 'admComSale_project_img'  );


function admComSale_project_img(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

  $table_name = "wpym_projects_com_sale";
  $wpdb->insert($table_name, array(
	  'name_com_pro_sale' => $_POST['name_project'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
         
          'img_com_pro_sale'   => $upload['url'],
          'id_area_com_sale'   => $_POST['id_area']
        ),array('%s','%s' , '%s') 
);

$imgv = $wpdb;

$id  = $imgv->get_row( "SELECT * from wpym_projects_com_sale ORDER BY id_com_pro_sale DESC" );
$gid = $id->id_com_pro_sale;
$ar = array(
        'url' => $upload['url'],
        'id' => $gid
);
	echo json_encode($ar);
	wp_reset_postdata();
	wp_die();

}










add_action( 'wp_ajax_project_1_d_com_sale' , 'project_1_com_sale'  );
add_action( 'wp_ajax_nopriv_project_1_d_com_sale' , 'project_1_com_sale'  );

function project_1_com_sale(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "comSale"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}



add_action( 'wp_ajax_project_2_d_com_sale' , 'project_2_com_sale'  );
add_action( 'wp_ajax_nopriv_project_2_d_com_sale' , 'project_2_com_sale'  );

function project_2_com_sale(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "comSale"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}




add_action( 'wp_ajax_project_3_d_com_sale' , 'project_3_com_sale'  );
add_action( 'wp_ajax_nopriv_project_3_d_com_sale' , 'project_3_com_sale'  );

function project_3_com_sale(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "comSale"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}





add_action( 'wp_ajax_project_4_d_com_sale' , 'project_4_com_sale'  );
add_action( 'wp_ajax_nopriv_project_4_d_com_sale' , 'project_4_com_sale'  );

function project_4_com_sale(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "comSale"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}






//  sale ///////////













add_action( 'wp_ajax_admSortSale' , 'admSortSale_area_img'  );
add_action( 'wp_ajax_nopriv_admSortSale' , 'admSortSale_area_img'  );

function admSortSale_area_img(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

  $table_name = "wpym_sort_area_sale";
  $wpdb->insert($table_name, array(
	  'name_sort_a_s' =>  $_POST['new_area_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
         
          'img_sort_a_s'   => $upload['url']
        ),array('%s','%s') 
);

$imgv = $wpdb;

$id  = $imgv->get_row( "SELECT * from wpym_sort_area_sale ORDER BY id_sort_a_s DESC" );
$gid = $id->id_sort_a_s;







    $arr = array(
            'url' => $upload['url'],
            'id'  => $gid
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}




add_action( 'wp_ajax_admSortSale_p_img' , 'admSortSale_project_img'  );
add_action( 'wp_ajax_nopriv_admSortSale_p_img' , 'admSortSale_project_img'  );


function admSortSale_project_img(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

  $table_name = "wpym_projects_sort_sale";
  $wpdb->insert($table_name, array(
	  'name_sort_pro_sale' => $_POST['name_project'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
         
          'img_sort_pro_sale'   => $upload['url'],
          'id_area_sort_sale'   => $_POST['id_area']
        ),array('%s','%s' , '%s') 
);

$imgv = $wpdb;

$id  = $imgv->get_row( "SELECT * from wpym_projects_sort_sale ORDER BY id_sort_pro_sale DESC" );
$gid = $id->id_sort_pro_sale;
$ar = array(
        'url' => $upload['url'],
        'id' => $gid
);
	echo json_encode($ar);
	wp_reset_postdata();
	wp_die();

}










add_action( 'wp_ajax_project_1_d_sort_sale' , 'project_1_sort_sale'  );
add_action( 'wp_ajax_nopriv_project_1_d_sort_sale' , 'project_1_sort_sale'  );

function project_1_sort_sale(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "sortSale"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}



add_action( 'wp_ajax_project_2_d_sort_sale' , 'project_2_sort_sale'  );
add_action( 'wp_ajax_nopriv_project_2_d_sort_sale' , 'project_2_sort_sale'  );

function project_2_sort_sale(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "sortSale"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}




add_action( 'wp_ajax_project_3_d_sort_sale' , 'project_3_sort_sale'  );
add_action( 'wp_ajax_nopriv_project_3_d_sort_sale' , 'project_3_sort_sale'  );

function project_3_sort_sale(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "sortSale"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}





add_action( 'wp_ajax_project_4_d_sort_sale' , 'project_4_sort_sale'  );
add_action( 'wp_ajax_nopriv_project_4_d_sort_sale' , 'project_4_sort_sale'  );

function project_4_sort_sale(){
        global $wpdb;
        $upload = wp_upload_bits($_FILES['file']['name'],null,file_get_contents($_FILES['file']['tmp_name']));

   $table_name = "wpym_all_projects";
  $wpdb->insert($table_name, array(
	  'title_project_a' =>  $_POST['pro_name'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
           'desc_project_a'  => $_POST['desc'],
          'img_project_a'   => $upload['url'],
           'id_project_area_a'  => $_POST['project_id'],
           'type_project_a'    =>  "sortSale"
        ),array('%s','%s' , '%s' , '%s' , '%s') 
);


    $arr = array(
            'url' => $upload['url']
           
    );
	echo json_encode($arr);
	wp_reset_postdata();
	wp_die();

}



?>