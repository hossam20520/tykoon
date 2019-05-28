<?php  
/*

Template Name: singledev
*/
get_header();
?>


<?php  if(isset($_GET['id_dev'])):
$id = $_GET['id_dev'];
$single_dev = $wpdb;

$sing  = $single_dev->get_row("select * from wpym_developers where id_dev = '$id'");



  ?>


<input type="hidden" id="north" value="30.356583">
<input type="hidden" id="west" value="30.534954">



 <?php  
if($sing->loc == "no"){
    ?>


    <?php

}else{
//  echo $sing->loc;   
}

 ?>
 
 <!-- <center></center><iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3442.801775208288!2d30.532765314598844!3d30.35658298176987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x14562b96b79f2bff%3A0xbc31fd06f4f8f98f!2zQWdyb2Qg2LnYrNix2YjYrw!3m2!1d30.0653962!2d32.415579!4m0!5e0!3m2!1sen!2seg!4v1557840252142!5m2!1sen!2seg" width="150" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center> -->


<!-- <div id="map" style="width:100%;height:350px;"></div>  -->
        <h1 style="text-align: center; color:#00aec1; font-weight: bold; padding-top: 20px"><?php echo $sing->name_dev;   ?></h1>
        <section class="info">
        <div class="container">
        <div class="row">
         
        <p><br> <b>-</b><?php echo $sing->description_dev;  ?><br><br></p>


        <?php if ( is_user_logged_in() ) {   ?>
        <button type="button" data-toggle="modal" data-target="#myModal"   data-name="<?php echo $sing->name_dev;   ?>" data-desc="<?php echo $sing->description_dev;   ?>" data-id="<?php  echo $sing->id_dev;   ?>" class="editt" >Edit</button>
        <button type="button"    class="del" data-id="<?php  echo $sing->id_dev;   ?>" >delete</button>

        <?php  } ?>
           
            <div class="col-md-12 text-center">
                
            <img src="<?php echo $sing->img_dev;   ?>">
                </div>
            
            <div class="col-md-12 text-center par">
                
           <p><?php echo $sing->name_dev;   ?></p>
                </div>
            
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
" id="go"> Update</button>

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>



      </div>
      
    </div>
  </div>


        <?php get_footer();   ?>
        <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBenFW7knU8aOYP5pDHplxLCKJSd8Hvn1w&callback=initMap"></script> -->

        <script>   
        $(document).ready(function(){
console.log("ddd");
            $(".del").click(function(event){ 
        let id =  $(this).data('id');
        if (confirm('Are you sure?')) {
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

var form_data = new  FormData();


form_data.append('id' , id );
form_data.append('action' , 'deldev');  


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


            
 $(".editt").click(function(event){
// alert("dd");
        let id = $(this).data('id');
        let name = $(this).data('name');
        let des  = $(this).data('desc');
 $("#ror").val(id);
 $("#title").val(name);
  $("#area").val(des);

 console.log(name);


    


            });



            $("#go").click(function(event){
       
 let id = $("#ror").val();
 let name = $("#title").val();
 let des = $("#area").val();



        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

var form_data = new  FormData();

form_data.append('name' ,  name );
form_data.append('desc' ,  des );
form_data.append('id' ,  id );
form_data.append('action' , 'updev');  


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
   let dev = "go";
    form_data.append('file' , file_data );
    form_data.append('id' , id);
    form_data.append('develop' , dev);
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