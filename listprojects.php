<?php

 /* Template Name: listprojects */ 


 get_header();
 if(isset($_GET['ID_AREA']) && isset($_GET['NAME']) ):
    $id = $_GET['ID_AREA'];


?>



<section class="pro1 text-center">
        <div class="container">
        <div class="row">
        <h1><?php echo $_GET['NAME'];   ?></h1>
        <?php
        $arz = $wpdb;
if(@$_GET['page'] == "comme"){
    $area  = $arz->get_results("SELECT * FROM wpym_projects_com where id_area_com='$id'");
    foreach ( $area as $row ):
    ?>


<div class="col-md-4 text-center data">
                <a href="https://tykooneg.com/project/?project_id=<?php  echo $row->id_com_pro;   ?>&type=comPro"><img src="<?php echo $row->img_com_pro;   ?>" style="width: 80%;height: 290px"></a>
            <p><?php echo $row->name_com_pro;   ?></p>
<?php if ( is_user_logged_in() ) {   ?>
            <button  style="
    background-color: red;
    border: 1px solid;
    color: white;
   
" data-id="<?php  echo $row->id_com_pro;   ?>"  data-type="com_pro" class="delt">delete</button>


<?php  }  ?>
            </div>

<?php
endforeach;

}elseif(@$_GET['page'] == "resort"){
    $area  = $arz->get_results("SELECT * FROM wpym_projects_sort where id_area_sort='$id'");
    foreach ( $area as $row ):
?>

<div class="col-md-4 text-center data">
                <a href="https://tykooneg.com/project/?project_id=<?php  echo $row->id_sort_pro;   ?>&type=sortPro"><img src="<?php echo $row->img_sort_pro;   ?>" style="width: 80%;height: 290px"></a>
            <p><?php echo $row->name_sort_pro;   ?></p>
            <?php if ( is_user_logged_in() ) {   ?>
            <button  style="
    background-color: red;
    border: 1px solid;
    color: white;
   
" data-id="<?php  echo $row->id_sort_pro;   ?>" data-type="sort_pro" class="delt">delete</button>

<?php  }  ?>
            </div>

<?php 
endforeach;
}elseif(@$_GET['page']  == "resresale"){
    $area  = $arz->get_results("SELECT * FROM wpym_projects_res_sale where id_area_res_sale ='$id'");
    foreach ( $area as $row ):
?>


   <div class="col-md-4 text-center data">
                <a href="https://tykooneg.com/project/?project_id=<?php  echo $row->id_res_pro_sale;   ?>&type=resSale"><img src="<?php echo $row->img_res_pro_sale;   ?>" style="width: 80%;height: 290px"></a>
            <p><?php echo $row->name_res_pro_sale;   ?></p>
            <?php if ( is_user_logged_in() ) {   ?>
            <button  style="
    background-color: red;
    border: 1px solid;
    color: white;
   
" data-id="<?php  echo $row->id_res_pro_sale;   ?>"  data-type="res_pro_sale" class="delt">delete</button>

<?php  }  ?>
            </div>


<?php
endforeach;
}elseif(@$_GET['page'] == "comme_sale"){
    $arz = $wpdb;

    $area  = $arz->get_results("SELECT * FROM wpym_projects_com_sale where id_area_com_sale ='$id'");
    foreach ( $area as $row ):
?>



<div class="col-md-4 text-center data">
                <a href="https://tykooneg.com/project/?project_id=<?php  echo $row->id_com_pro_sale;   ?>&type=comSale"><img src="<?php echo $row->img_com_pro_sale;   ?>" style="width: 80%;height: 290px"></a>
            <p><?php echo $row->name_com_pro_sale;   ?></p>
            <?php if ( is_user_logged_in() ) {   ?>
            <button  style="
    background-color: red;
    border: 1px solid;
    color: white;
   
" data-id="<?php  echo $row->id_com_pro_sale;   ?>" data-type="com_pro_sale" class="delt">delete</button>

<?php  }  ?>
            </div>


<?php
endforeach;
}elseif( @$_GET['page'] == "resort_sale"){
    $area  = $arz->get_results("SELECT * FROM wpym_projects_sort_sale where id_area_sort_sale ='$id'");
    foreach ( $area as $row ):
?>

      <div class="col-md-4 text-center data">
                <a href="https://tykooneg.com/project/?project_id=<?php  echo $row->id_sort_pro_sale;   ?>&type=sortSale"><img src="<?php echo $row->img_sort_pro_sale;   ?>" style="width: 80%;height: 290px"></a>
            <p><?php echo $row->name_sort_pro_sale;   ?></p>
            <?php if ( is_user_logged_in() ) {   ?>
            <button  style="
    background-color: red;
    border: 1px solid;
    color: white;
   
" data-id="<?php  echo $row->id_sort_pro_sale;   ?>" data-type="sort_pro_sale" class="delt">delete</button>

<?php  }  ?>
            </div>

<?php  
endforeach;  
}else{
    $area  = $arz->get_results("SELECT * FROM wpym_projects_res where id_area_res='$id'");
    foreach ( $area as $row ):
?>


       <div class="col-md-4 text-center data">
                <a href="https://tykooneg.com/project/?project_id=<?php  echo $row->id_res_pro;   ?>&type=resPro"><img src="<?php echo $row->img_res_pro;   ?>" style="width: 80%;height: 290px"></a>
            <p><?php echo $row->name_res_pro;   ?></p>
            <?php if ( is_user_logged_in() ) {   ?>
            <button  style="
    background-color: red;
    border: 1px solid;
    color: white;
   
" data-id="<?php  echo $row->id_res_pro;   ?>" data-type="res_pro" class="delt">delete</button>

<?php  }  ?>
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





<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

      

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><input type="text" id="title"><input type="hidden" id="ror"></h4>
        </div>

        <div class="modal-body">

 <form method="post"  enctype="multipart/form-data">
                      <input type="file" class="form-control" id="image" name="filename" onchange="fetch(this)">
</form>
        </div>

        <div class="modal-footer">
        <button style="
    width: 100px;
    font-size: 15px;
    height: 30px;
" id="go"> Update</button>

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>



      </div>
      
    </div>
  </div>













        <script src="<?php echo get_template_directory_uri()   ?>/script/jquery-1.12.4.min.js"></script>
        <script src="<?php echo get_template_directory_uri()   ?>/script/wow.min.js"></script>
        <script src="<?php echo get_template_directory_uri()   ?>/script/bootstrap.min.js"></script>
         <script src="<?php echo get_template_directory_uri()   ?>/script/slick.min.js"></script>
        <script src="<?php echo get_template_directory_uri()   ?>/script/projects.js"></script>

        <script>
        $(document).ready(function(){

            $("#edi").click(function(event){ 

         let id  = $(this).data('id');
         let type = $(this).data('type');

            });




  $(".delt").click(function(event){
     //alert("deleting....");

      if (confirm('Are you sure?')) {
let id = $(this).data("id");
let type = $(this).data("type");
var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

var form_data = new  FormData();

form_data.append('type' ,  type );
form_data.append('id' ,  id );
form_data.append('action' , 'delete');  


jQuery.ajax({
       url: ajaxurl,
       type:'POST',
       contentType:false,
       processData:false,
       data:form_data,
       dataType: 'json',
       success:function(response){
     alert("success");
     location.reload(true);
       

       }
   });


      }
  });

  
        });
        
        
        function fetch(elm){




        }  
        
        </script>