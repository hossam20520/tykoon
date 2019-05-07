<?php

 /* Template Name: listprojects */ 


 get_header();
 if(isset($_GET['ID_AREA']) && isset($_GET['NAME'])):
    $id = $_GET['ID_AREA'];


?>



<section class="pro1 text-center">
        <div class="container">
        <div class="row">
        <h1><?php echo $_GET['NAME'];   ?></h1>
        <?php
        $arz = $wpdb;
if(isset($_GET['page']) == "comme"){
    $area  = $arz->get_results("SELECT * FROM wpym_projects_com where id_area_com='$id'");
    foreach ( $area as $row ):
    ?>


<div class="col-md-4 text-center data">
                <a href="https://tykooneg.com/project/?project_id=<?php  echo $row->id_com_pro;   ?>&&type=comPro"><img src="<?php echo $row->img_com_pro;   ?>" style="width: 80%;height: 290px"></a>
            <p><?php echo $row->name_com_pro;   ?></p>
            </div>

<?php
endforeach;

}elseif(isset($_GET['page']) == "resort"){
    $area  = $arz->get_results("SELECT * FROM wpym_projects_sort where id_area_sort='$id'");
    foreach ( $area as $row ):
?>

<div class="col-md-4 text-center data">
                <a href="https://tykooneg.com/project/?project_id=<?php  echo $row->id_sort_pro;   ?>&&type=sortPro"><img src="<?php echo $row->img_sort_pro;   ?>" style="width: 80%;height: 290px"></a>
            <p><?php echo $row->name_sort_pro;   ?></p>
            </div>

<?php 
endforeach;
}elseif(isset($_GET['page']) == "resresale"){
    $area  = $arz->get_results("SELECT * FROM wpym_projects_res_sale where id_area_res_sale ='$id'");
    foreach ( $area as $row ):
?>


   <div class="col-md-4 text-center data">
                <a href="https://tykooneg.com/project/?project_id=<?php  echo $row->id_res_pro_sale;   ?>&&type=resSale"><img src="<?php echo $row->img_res_pro_sale;   ?>" style="width: 80%;height: 290px"></a>
            <p><?php echo $row->name_res_pro_sale;   ?></p>
            </div>


<?php
endforeach;
}elseif(isset($_GET['page']) == "comme_sale"){
    $area  = $arz->get_results("SELECT * FROM wpym_projects_com_sale where id_area_com_sale ='$id'");
    foreach ( $area as $row ):
?>



<div class="col-md-4 text-center data">
                <a href="https://tykooneg.com/project/?project_id=<?php  echo $row->id_com_pro_sale;   ?>&&type=comSale"><img src="<?php echo $img_com_pro_sale;   ?>" style="width: 80%;height: 290px"></a>
            <p><?php echo $row->name_com_pro_sale;   ?></p>
            </div>


<?php
endforeach;
}elseif( isset($_GET['page']) == "resort_sale"){
    $area  = $arz->get_results("SELECT * FROM wpym_projects_sort_sale where id_area_sort_sale ='$id'");
    foreach ( $area as $row ):
?>

      <div class="col-md-4 text-center data">
                <a href="https://tykooneg.com/project/?project_id=<?php  echo $row->id_sort_pro_sale;   ?>&&type=sortSale"><img src="<?php echo $img_sort_pro_sale;   ?>" style="width: 80%;height: 290px"></a>
            <p><?php echo $row->name_sort_pro_sale;   ?></p>
            </div>

<?php  
endforeach;  
}else{
    $area  = $arz->get_results("SELECT * FROM wpym_projects_res where id_area_res='$id'");
    foreach ( $area as $row ):
?>


       <div class="col-md-4 text-center data">
                <a href="https://tykooneg.com/project/?project_id=<?php  echo $row->id_res_pro;   ?>&&type=resPro"><img src="<?php echo $row->img_res_pro;   ?>" style="width: 80%;height: 290px"></a>
            <p><?php echo $row->name_res_pro;   ?></p>
            </div>


<?php
 endforeach;
}


?>

            
         
            

            
            
        
        </div>
        </div>
        </section>


        <?php else:
    
    $url = "https://tykooneg.com/";
    wp_redirect( $url );
    exit;

endif;
    ?>

<script src="<?php echo get_template_directory_uri()   ?>/script/jquery-1.12.4.min.js"></script>
        <script src="<?php echo get_template_directory_uri()   ?>/script/wow.min.js"></script>
        <script src="<?php echo get_template_directory_uri()   ?>/script/bootstrap.min.js"></script>
         <script src="<?php echo get_template_directory_uri()   ?>/script/slick.min.js"></script>
        <script src="<?php echo get_template_directory_uri()   ?>/script/projects.js"></script>