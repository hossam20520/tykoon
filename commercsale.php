<?php

 /* Template Name: commercsale*/ 


 get_header();
?>

<section class="pro1 text-center">
        <div class="container">
        <div class="row">
        <h1>Commercial</h1>
<?php
        $arz = $wpdb;

$area  = $arz->get_results('SELECT * FROM wpym_com_area_sale');
foreach ( $area as $row ):
?>

            
            <div class="col-md-4 text-center data">
            <a href="https://tykooneg.com/listprojects/?ID_AREA=<?php echo $row->id_com_a_s;  ?>&&NAME=<?php echo $row->name_com_a_s;  ?>&&page=comme_sale"><img src="<?php  echo $row->img_com_a_s;  ?>" data-id="<?php echo $row->id_com_a_s;  ?>" id="imog"></a>
            <p><?php  echo $row->name_com_a_s;  ?></p>
            <?php if( is_user_logged_in() ) {  ?>
            <button class="delete" style="
    border: none;
    background-color: red;
    color: #f1f1f1;
" data-id="<?php echo $row->id_com_a_s;  ?>"> Delete </button>
<button class="edit" style="
    border: none;
    margin-left: 20px;
    background-color: #3d56d2;
    color: #f1f1f1;
    "  data-idE="<?php echo $row->id_com_a_s;  ?>" data-name="<?php echo $row->name_com_a_s;  ?>" data-toggle="modal"   data-target="#myModal"  >EDIT</button>


<?php  }  ?>
            </div>
            
           
<?php endforeach;  ?>  
       
        </div>
        </div>
        </section>


        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

      

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><input type="text" id="namez">
          <input  type="hidden" id="idz" value="">
          </h4>
         </div>

        <div class="modal-body">
        <form method="post"  enctype="multipart/form-data">
        <input type="file" class="form-control" id="image" name="filename" data-type="resPro" onchange="update_area_img(this)">
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
  $(".edit").click(function(event){ 
  let id =  $(this).data('ide');
  let name =  $(this).data('name');

  $("#namez").val(name);
  $("#idz").val(id);



  });


  $(".delete").click(function(event){ 
  let id =  $(this).data('id');
  let type = "comSale";


  if (confirm('Are you sure?')) {

  var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  


var form_data = new  FormData();


form_data.append('id' , id);
form_data.append('type' , type);
form_data.append('action' , 'deleteAll');



jQuery.ajax({
url: ajaxurl,
type:'POST',
contentType:false,
processData:false,
data:form_data,
dataType: 'json',
success:function(response){

location.reload(true);

}
});

  }


  });


});


function update_area_img(elm){
  let type = "comSale";

  let id = $("#idz").val();

  let name = $("#namez").val();
  
               var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  

                var file_data = $(elm).prop('files')[0];
                var form_data = new  FormData();
                form_data.append('file' , file_data );
                form_data.append('type' , type);
                form_data.append('id' , id);
                form_data.append('name' , name);
                form_data.append('action' , 'updateAll');


       jQuery.ajax({
       url: ajaxurl,
       type:'POST',
       contentType:false,
       processData:false,
       data:form_data,
       dataType: 'json',
       success:function(response){
       
        location.reload(true);

       }
   });


}
        
        </script>