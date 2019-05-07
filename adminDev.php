<?php

/* Template Name: adminDev */ 


get_header();


?>


<section class="sec">
            <div class="container">
                <div class="row">
                    <h1 class="text-center">Developer Page</h1>
                    <div class="form-group">
                      <label >Developer Name:</label>
                      <input type="text" class="form-control" id="dev" >
                    </div>
                    
                    
                    <div class="form-group">
                      <label >Developer Image:</label>
                      <form method="post"  enctype="multipart/form-data">
                      <input type="file" class="form-control" id="image" name="filename" onchange="fetch(this)">
</form>
                      <img width="200px" height="200px;" id="toShow" style="margin-top: 20px">
                    </div>
                    
                    
                    <div class="form-group">
                      <label >Description:</label>
                      <textarea class="form-control" rows="5" id="desc"></textarea>
                    </div>
                    
                    
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-default" id="gon" style="padding-left: 20px;padding-right:20px">Save</button> 
                    </div>
                </div>
            </div>
        </section>


        <script src="<?php echo get_template_directory_uri();  ?>/script/jquery-1.12.4.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/script/wow.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/script/bootstrap.min.js"></script>
         

       
        <script src="<?php echo get_template_directory_uri();  ?>/script/slick.min.js"></script>


        <script>
        
        function fetch(elm){
           // var loadd = load("https://fpfashions.com/wp-content/uploads/load.gif");
             var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
                var file_data = $(elm).prop('files')[0];
                var form_data = new  FormData();
                form_data.append('file' , file_data );
               
             
                form_data.append('action' , 'my_action');

         jQuery.ajax({
       url: ajaxurl,
       type:'POST',
       contentType:false,
       processData:false,
       data:form_data,
       dataType: 'json',
       success:function(response){
       console.log(response.url);
        $("#toShow").attr("src" ,response.url );

       }
   });
 }

 $(document).ready(function(){



$("#gon").click(function(){

        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>"; 
        let name = $("#dev").val();
        let dec = $("#desc").val();
        var form_data = new  FormData();
         form_data.append('name_dev' , name );
            form_data.append('desc' , dec );



            form_data.append('action' , 'updateDev');

    jQuery.ajax({
       url: ajaxurl,
       type:'POST',
       contentType:false,
       processData:false,
       data:form_data,
       dataType: 'json',
       success:function(response){
      // console.log(response.url);
       alert(response.status);
       location.reload(true);

       }
   });
    
});




});
        
        </script>