<?php

 /* Template Name: project */ 


 get_header();
?>
<?php






?>
<div class="slider-container">
  <div class="slider-control left inactive"></div>
  <div class="slider-control right"></div>
  <ul class="slider-pagi"></ul>
  <div class="slider">
  <?php  


if(isset($_GET['type'])){
  global $wpdb; 
  $type =  $_GET['type'];
  $id_project = $_GET['project_id'];
  $results = $wpdb->get_results( "SELECT * FROM  wpym_all_projects where id_project_area_a ='$id_project' AND type_project_a ='$type' ");




  $count = 0;
  if(!empty($results)) {
    
      foreach($results as $row){
        
          ?>


      <div class="slide slide-<?php echo $count; ?> <?php if($count == 0){ echo "active"; }   ?>">
        <div class="slide__bg"><img src="<?php echo $row->img_project_a;  ?>"></div>
        <div class="slide__content">
          <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
            <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
          </svg>
          <div class="slide__text">
            <h2 class="slide__text-heading"><?php echo $row->title_project_a;  ?></h2>
            <p class="slide__text-desc"><?php echo $row->desc_project_a;  ?></p>
            <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=email@domain.com">Book Now</a>
            <?php if ( is_user_logged_in() ) {   ?>
            <button style="
    height: 30px;
    margin-left: 11px;
    border: none;
    background-color: #f36868;
    font-size: 10px;
    width: 40px;
" data-toggle="modal" class ="update" data-titlee="<?php echo $row->title_project_a;  ?>" data-id="<?php echo $row->id_project_a;   ?>" data-desc="<?php echo $row->desc_project_a;    ?>" data-target="#myModal">Edit</button>
         
            <?php } ?>
          </div>
        </div>
      </div>
  
     <?php
     $count = $count +1;
      }
    }








}else{



global $wpdb;
if(isset($_GET['project_id'])){
   $id_project = $_GET['project_id'];

  $results = $wpdb->get_results( "SELECT * FROM  ex_single_project where id_ex_project ='$id_project'"); 
}else{
  $url = "https://tykooneg.com/";
  wp_redirect( $url );
  exit;
}



$count = 0;
if(!empty($results)) {
  
    foreach($results as $row){
      
        ?>
    <div class="slide slide-<?php echo $count; ?> <?php if($count == 0){ echo "active"; }   ?>">
      <div class="slide__bg"><img src="<?php echo $row->img_ex_sing;  ?>"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading"><?php echo $row->title_ex_sing;  ?></h2>
          <p class="slide__text-desc"><?php echo $row->desc_ex_sing;  ?></p>
          <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=email@domain.com">Book Now</a> 
          <?php if ( is_user_logged_in() ) {   ?>
          
          <button type="button" style="
    height: 31px;
    width: 85px;
    color: red;
    font-size: 16px;
"   data-toggle="modal"  class ="up" data-target="#myModal" data-type="ex" data-id="<?php echo $row->id_ex_sin;  ?>" data-desc="<?php echo $row->desc_ex_sing;  ?>" data-titlee="<?php echo $row->title_ex_sing;  ?>"> Edit</button>

          <?php  }  ?>
        </div>
      </div>
    </div>

   <?php
   $count = $count +1;
    }
?>

<input  type="hidden" class="toto" value="ex">
<?php
    
  }
}
?>






<?php
$id_project = $_GET['project_id'];

if(isset($_GET['type'])){
  $type =  $_GET['type'];
  $pdfq = $wpdb;
$pdf  = $pdfq->get_row( "SELECT * from wpym_ex_single_pdf where id_ex_project_pdf = '$id_project' and type_pdf='$type'   " );

}else{
  $pdfq = $wpdb;
  $pdf  = $pdfq->get_row( "SELECT * from wpym_ex_single_pdf where id_ex_project_pdf = '$id_project' and type_pdf='sign'   " );
  
}




?>






  </div>
        </div>

        <section class="btns text-center">
        <div class="contanier">
            <div class="row">
            <a href="<?php echo $pdf->Link_ex_pdf;   ?>"><button href="Alwatinia-Social-Media-Plan.pdf" download ="Alwatinia.pdf" style="float: left"><i class="fa fa-download"></i>Download</button></a>
            <a href="<?php echo $pdf->Link_ex_pdf;   ?>"><button href="Alwatinia-Social-Media-Plan.pdf" target="_blank" class="btn bg-blue btn-squre " style="float: right"><i class="fa fa-download"></i>Preview</button></a>
            <input type="hidden" id="pdfo" value="<?php echo $pdf->Link_ex_pdf;   ?>" > 
            <input type="hidden" id="idpdf" value="<?php echo $pdf->id_ex_project_pdf;   ?>" >
            <input type="hidden" id="loc" value="<?php echo $pdf->location;   ?>" >

            </div>
            </div>
        </section>
        
        <h1 style="text-align: center; padding-top: 40px;
                   font-weight: bold">Location</h1>

          <?php echo $pdf->location;    ?>
       <!-- <div id="map" style="width:100%;height:350px;"></div>  -->









       <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

      

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><input type="text" id="areat"> <input type="text"  placeholder="location" id="location"> <input type="text"  placeholder="add pdf link" id="pdf"><input type="hidden" id="ror"><input type="hidden" id="toto"></h4>
        </div>

        <div class="modal-body">
        <textarea style="
    width: 400px;
    font-size: 25px;
    height: 200px;
" id="area"> </textarea>
 <form method="post"  enctype="multipart/form-data">
                      <input type="file" class="form-control" id="image" name="filename" onchange="fetch(this)">
</form>
        </div>

        <div class="modal-footer">
        <button style="
    width: 100px;
    font-size: 15px;
    height: 30px;
" id="go">Update</button>

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>



      </div>
      
    </div>
  </div>







<?php
get_footer();



?>

<script>
$(document).ready(function(){
  $(".update").click(function(event){ 
    let v = $(this).data('desc');
    let title =  $(this).data('titlee');
    let id =  $(this).data('id');
    let pdf = $("#pdfo").val();
     let loc = $("#loc").val();
    //console.log(title);
  $("#area").val(v);
  $("#ror").val(id);
  $("#areat").val(title);
  $("#pdf").val(pdf);
$("#location").val(loc);



  });

  $(".up").click(function(event){ 
    let v = $(this).data('desc');
    let title =  $(this).data('titlee');
    let id =  $(this).data('id');
    let pdf = $("#pdfo").val();
    let toto = $(this).data('type');
    let loc = $("#loc").val();
    //console.log(title);
  $("#area").val(v);
  $("#ror").val(id);
  $("#areat").val(title);
  $("#pdf").val(pdf);
  $("#toto").val(toto);
  $("#location").val(loc);



  });


  $("#go").click(function(){ 
   let c =  $("#area").val();
    let  pdf = $("#pdf").val();
   let id  =  $("#ror").val();
   
   let idpdf = $("#idpdf").val();
   let tit =  $("#areat").val();
   let type = $("#toto").val();
   let lo =  $("#location").val();
var form_data = new  FormData();

form_data.append('de' ,  c  );
form_data.append('id' ,  id );
form_data.append('idpdf' ,  idpdf );
form_data.append('title' ,  tit );
form_data.append('pdf' ,  pdf );
form_data.append('loc' ,  lo );
form_data.append('single' ,  type );


form_data.append('action' , 'update_cont');

   var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>"; 



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
  });


});

function fetch(elm){
  var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>"; 
  var file_data = $(elm).prop('files')[0];
   var form_data = new  FormData();
    let id  = $("#ror").val();
    
    form_data.append('file' , file_data );
    form_data.append('id' , id);
    form_data.append('action' , 'updateS');


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


</script>
 <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBenFW7knU8aOYP5pDHplxLCKJSd8Hvn1w&callback=initMap"></script> -->