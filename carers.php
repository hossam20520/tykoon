



<?php

/* Template Name: carers */ 


get_header();

?>





<h3>Stacked Form</h3>
<p>How to use CSS to create a stacked form:</p>

<div class="container">

<center><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=email@domain.com" style="
    font-size: 24px;
    color: #f9f9f9;
"> Apply Now And Send Your C.v Click Here Now! </a> <img draggable="false" class="emoji" alt="😎" src="https://s.w.org/images/core/emoji/11.2.0/svg/1f60e.svg" style="
    /* width: 20px; */
"></center>
  <!-- <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
      
      <form action="index.php" method="post" enctype="multipart/form-data">
          <label for="file">Upload Your C.V</label>
  <input type="file" name="file1">
    <input type="button" id="bot" value="Submit">
          </form>
  </form> -->
</div>

<script src="<?php echo get_template_directory_uri();  ?>/script/jquery-1.12.4.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/script/wow.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/script/bootstrap.min.js"></script>
         

       
        <script src="<?php echo get_template_directory_uri();  ?>/script/slick.min.js"></script>
       <script type="text/javascript"></script>


       <script>
       
       $("#bot").click(function(){
       let fname = $("#fname").val();
       let lname = $("#lname").val();
       let full_name = fname+" "+lname;
       let ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
       var form_data = new  FormData();
        form_data.append('full_name' , full_name);
        form_data.append('action' , 'add_name');

        jQuery.ajax({
       url: ajaxurl,
       type:'POST',
       contentType:false,
       processData:false,
       data:form_data,
       dataType: 'json',
       success:function(response){

       },error:function (er){
         
       }


   });


       });
       
       
       </script>