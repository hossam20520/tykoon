<?php

/* Template Name: admComPro */ 


get_header();


?>
    <style>
            input[type="file"] {display: block;}
            .imageThumb {max-height: 100px; border: 2px solid; padding: 1px; cursor: pointer;}
            .pip {display: inline-block; margin: 10px 10px 0 0;}
            .container{
              margin-top: 77px;
            }
        </style>


<input type="hidden" id="id_areaa" value="1" >
<input type="hidden" id="project_id" value="">
<section class="sec1">
            <div class="container">
                <div class="row">
                    <h1 class="text-center">Residential's projects Commercial</h1>
                      <form>
                        <div class="form-group ">
                          <label for="sel1">Area Name : </label>
                          <select class="form-control country" id="sel1">
                              <?php
    $arz = $wpdb;

$area  = $arz->get_results('SELECT * FROM wpym_com_area');
foreach ( $area as $row ):
?>

            
<option value="<?php echo $row->id_com_a;  ?>"><?php  echo $row->name_com_a;  ?></option>
                                   
           
<?php endforeach;  ?>  
                           

                          </select>
                        </div>
                    </form>
                    
                    
                    <div class="form-group">
                      <label >Or New Area:</label>
                      <input type="text" class="form-control" id="new_nameArea" placeholder="type the new one">
                    </div>
                    
                    
                    <div class="form-group">
                      <label > new Area Image:</label>
                      <form method="post"  enctype="multipart/form-data">
                      <input type="file" class="form-control" id="image" name="filename" onchange="update_area_img(this)">
</form>
                      <img width="200px" height="200px;" id="area_img" style="margin-top: 20px">
                    </div>
                    
                    <hr style="border: 2px solid black">
                    
                    
                    <div class="form-group">
                      <label >main Project Name:</label>
                      <input type="text" class="form-control main_pro_name" id="proName"  placeholder="type project name">
                    </div>
                    
                    <div class="form-group">
                        <label >main Project Image:</label>
                        <form method="post"  enctype="multipart/form-data">
                        <input type="file" class="form-control" id="image" name="filename"  onchange=" update_project_img(this)" >
                      </form>
                        <img width="200px" height="200px;" id="project_img" style="margin-top: 20px">
                      </div>

                
                    
                    <!-- <div class="form-group">
                        <label >Images:</label>
                        <input type="file" id="files" name="files[]" multiple />
                    </div> -->
                    <hr style="border: 2px solid black">

                    <div class="form-group">
                        <label >Project title 1:</label>
                        <input type="text" class="form-control pro1"  id="proName" placeholder="type project name">
                      </div>
                      <div class="form-group">
                          <label >Description 1:</label>
                          <textarea class="form-control desc1" rows="5" id="desc"></textarea>
                        </div>
                        <div class="form-group">
                            <label >Project Image 1:</label>
                            <form method="post"  enctype="multipart/form-data">
                            <input type="file" class="form-control" id="image" name="filename"  onchange="project_1(this)"  >
</form>
                            <img width="200px" height="200px;" id="proj1" style="margin-top: 20px">
                          </div>

                          <hr style="border: 2px solid black">

                  

                          <div class="form-group">
                        <label >Project title 2:</label>
                        <input type="text" class="form-control pro2"  id="proName" placeholder="type project name">
                      </div>
                      <div class="form-group">
                          <label >Description 2:</label>
                          <textarea class="form-control desc2" rows="5" id="desc"></textarea>
                        </div>
                        <div class="form-group">
                            <label >Project Image 2:</label>
                            <form method="post"  enctype="multipart/form-data">
                            <input type="file" class="form-control" id="image" name="filename"  onchange="project_2(this)"  >
</form>
                            <img width="200px" height="200px;" id="proj2" style="margin-top: 20px">
                          </div>
                          
                          <hr style="border: 2px solid black">



                          <div class="form-group">
                        <label >Project title 3:</label>
                        <input type="text" class="form-control pro3"  id="proName" placeholder="type project name">
                      </div>
                      <div class="form-group">
                          <label >Description 3:</label>
                          <textarea class="form-control desc3" rows="5" id="desc"></textarea>
                        </div>
                        <div class="form-group">
                            <label >Project Image 3:</label>
                            <form method="post"  enctype="multipart/form-data">
                            <input type="file" class="form-control" id="image" name="filename"  onchange="project_3(this)"  >
</form>
                            <img width="200px" height="200px;" id="proj3" style="margin-top: 20px">
                          </div>
                          
                          <hr style="border: 2px solid black">





                          <div class="form-group">
                        <label >Project title 4:</label>
                        <input type="text" class="form-control pro4"  id="proName" placeholder="type project name">
                      </div>
                      <div class="form-group">
                          <label >Description 4:</label>
                          <textarea class="form-control desc4" rows="5" id="desc"></textarea>
                        </div>
                        <div class="form-group">
                            <label >Project Image 4:</label>
                            <form method="post"  enctype="multipart/form-data">
                            <input type="file" class="form-control" id="image" name="filename"  onchange="project_4(this)"  >
</form>
                            <img width="200px" height="200px;" id="proj4" style="margin-top: 20px">
                          </div>
                          
                          <div class="form-group">
                        <label >Link Pdf</label>
                        <input type="text" class="form-control pro4"  id="pdf_link" placeholder="type pdf_link">
                      </div>


                      <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control"  id="location" placeholder="put location">
                      </div>

                          <hr style="border: 2px solid black">


                    <div class="form-group text-center">
                        <button type="submit" id="save" class="btn btn-default" style="padding-left: 20px;padding-right:20px">Save</button> 
                    </div>
                </div>
            </div>
        </section>


        <script src="<?php echo get_template_directory_uri();  ?>/script/jquery-1.12.4.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/script/wow.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/script/bootstrap.min.js"></script>
         

       
        <script src="<?php echo get_template_directory_uri();  ?>/script/slick.min.js"></script>

        <script>
        function update_area_img(elm){
           let name_are = $("#new_nameArea").val();
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
                var file_data = $(elm).prop('files')[0];
                var form_data = new  FormData();
                form_data.append('file' , file_data );
                form_data.append('new_area_name' , name_are );
                form_data.append('action' , 'admComPro');

         jQuery.ajax({
       url: ajaxurl,
       type:'POST',
       contentType:false,
       processData:false,
       data:form_data,
       dataType: 'json',
       success:function(response){
       console.log(response.url);
        $("#area_img").attr("src" ,response.url );
        $("#id_areaa").val(response.id);

       }
   });

        }



   function update_project_img(elm){

    let id  = $("#id_areaa").val();
    let name_pro = $(".main_pro_name").val();
 var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
    var file_data = $(elm).prop('files')[0];
    var form_data = new  FormData();
    form_data.append('file' , file_data );
    form_data.append('id_area' , id );
    form_data.append('name_project' , name_pro );
    form_data.append('action' , 'admComPro_p_img');

jQuery.ajax({
url: ajaxurl,
type:'POST',
contentType:false,
processData:false,
data:form_data,
dataType: 'json',
success:function(response){
console.log(response.url);
$("#project_img").attr("src" ,response.url );
$("#project_id").val(response.id);


}
});

}



function project_1(elm){
          let proj_id = $("#project_id").val();
          let dec = $(".desc1").val();
          let name = $(".pro1").val();
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
                var file_data = $(elm).prop('files')[0];
                var form_data = new  FormData();
                form_data.append('file' , file_data );
                form_data.append('project_id' , proj_id);
                form_data.append('pro_name' , name);
                form_data.append('desc' , dec);
                form_data.append('action' , 'project_1_d_com');

         jQuery.ajax({
       url: ajaxurl,
       type:'POST',
       contentType:false,
       processData:false,
       data:form_data,
       dataType: 'json',
       success:function(response){
       console.log(response.url);
        $("#proj1").attr("src" ,response.url );
       

       }
   });

        }


        












        function project_2(elm){
          let proj_id = $("#project_id").val();
          let dec = $(".desc2").val();
          let name = $(".pro2").val();
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
                var file_data = $(elm).prop('files')[0];
                var form_data = new  FormData();
                form_data.append('file' , file_data );
                form_data.append('project_id' , proj_id);
                form_data.append('pro_name' , name);
                form_data.append('desc' , dec);
                form_data.append('action' , 'project_2_d_com');

         jQuery.ajax({
       url: ajaxurl,
       type:'POST',
       contentType:false,
       processData:false,
       data:form_data,
       dataType: 'json',
       success:function(response){
       console.log(response.url);
        $("#proj2").attr("src" ,response.url );
       

       }
   });

        }





        function project_3(elm){
          let proj_id = $("#project_id").val();
          let dec = $(".desc3").val();
          let name = $(".pro3").val();
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
                var file_data = $(elm).prop('files')[0];
                var form_data = new  FormData();
                form_data.append('file' , file_data );
                form_data.append('project_id' , proj_id);
                form_data.append('pro_name' , name);
                form_data.append('desc' , dec);
                form_data.append('action' , 'project_3_d_com');

         jQuery.ajax({
       url: ajaxurl,
       type:'POST',
       contentType:false,
       processData:false,
       data:form_data,
       dataType: 'json',
       success:function(response){
       console.log(response.url);
        $("#proj3").attr("src" ,response.url );
       

       }
   });

        }



        function project_4(elm){
          let proj_id = $("#project_id").val();
          let dec = $(".desc4").val();
          let name = $(".pro4").val();
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
                var file_data = $(elm).prop('files')[0];
                var form_data = new  FormData();
                form_data.append('file' , file_data );
                form_data.append('project_id' , proj_id);
                form_data.append('pro_name' , name);
                form_data.append('desc' , dec);
                form_data.append('action' , 'project_4_d_com');

         jQuery.ajax({
       url: ajaxurl,
       type:'POST',
       contentType:false,
       processData:false,
       data:form_data,
       dataType: 'json',
       success:function(response){
       console.log(response.url);
        $("#proj4").attr("src" ,response.url );
       

       }
   });

        }







   





     














        
        
$(document).ready(function(){


                 $("#save").click(function(){
                 var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
                 let link  = $("#pdf_link").val();
                 let id = $("#project_id").val();
                 let location = $("#location").val();
                 var form_data = new  FormData();

                form_data.append('link' ,  link  );
                form_data.append('location' ,  location );
                form_data.append('id' ,  id );
                form_data.append('action' , 'linkComPro');



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

$("select.country").change(function(){
        var selectedCountry = $(this).children("option:selected").val();
       // alert("You have selected the country - " + selectedCountry);

  
    let id  = $("#id_areaa").val(selectedCountry);
     
        
});

});
        
        </script>


