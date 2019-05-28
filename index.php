<?php

/**
 * The main template file
 * @package WordPress
 * @subpackage tykon
 * @since tykon 1.0
 * 
 *
 * 
 * 
 *
 * 
 *

 */

get_header();

?>
















<div id="particles-js"></div>
<header>
    
    <section class="head">
    <div class="intro">
    <form method="get" class="example" action="https://tykooneg.com/ser/">
  <input type="text" placeholder="Search for Home - Blog - Resale..."  name="find">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
   </div>
        
        
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo get_template_directory_uri();   ?>/img/21122-636300001309291788_0.jpg" alt="...">
      
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri();   ?>/img/59871bae8ef99547574557.jpg" alt="...">
      
    </div>
      
      <div class="item">
      <img src="<?php echo get_template_directory_uri();   ?>/img/636299938381948052.jpg" alt="...">
      
    </div>
    
      
     
      
  </div>

  

</div>
        
    <div class="book">
    
    <a href="https://tykooneg.com/contact/" class="mainBtn">BOOK NOW</a>
    </div>
    <div class="under">
        
    <a href="#projects" class="scroll-link downBtn"><i class="fa fa-chevron-down"></i></a>
   </div>
            
    </section>
</header>

<div class="number">
                <a href="tel:+20120444680">0120444680<i class="fa fa-whatsapp"></i></a>
                </div>       
            
<section class="dev">
       <h1>Developers</h1> 
<div class="container">
<div class="row">            
 <?php  

$developersz = $wpdb;

$developers  = $developersz->get_results('SELECT * FROM wpym_developers');
foreach ( $developers as $row ):
?>
     <div class="col-md-2 col-xs-6 blog">    
    
        <a href="https://tykooneg.com/singledev/?id_dev=<?php echo $row->id_dev; ?>"><img src="<?php  echo $row->img_dev;  ?>"></a>
           <p><?php  echo $row->name_dev;  ?></p> 
        
    </div>

<?php  endforeach;  ?>

    
     
    
</div>    
</div>    
</section>

        
        
     <section class="instructors">
           <h2> Our Exclusive Projects </h2>
             <div class="slider-container">
                    <div class="responsive">

 <?php  

$ex_projecta = $wpdb;

$ex_projects = $ex_projecta->get_results('SELECT * FROM wpym_ex_projects');
foreach ( $ex_projects  as $ex ):
?>


                        <div class="item">
                            <img src="<?php echo $ex->img_ex;   ?>" alt="Instructor img">
                            <h3><?php echo $ex->name_ex;   ?></h3>
                            <p><?php echo $ex->description_ex;   ?></p>
                            <a href="https://tykooneg.com/project/?project_id=<?php echo $ex->id_ex; ?>">View More</a>

                            <?php if ( is_user_logged_in() ) {   ?>
                            <button type="button"  data-toggle="modal" data-target="#myModal" tabindex="0" data-img="<?php echo $ex->img_ex;   ?>" data-id="<?php echo $ex->id_ex;   ?>"  data-title="<?php echo $ex->name_ex;   ?>"  class="editt" data-desc="<?php echo $ex->description_ex;   ?>"  style="
    color: white;
    background-color: #db708e;
"> Edit </button>

                            <?php    }       ?>
                        </div>

<?php endforeach;    ?>
                       
                        
                    </div>
                    <div class="controllers hidden-sm hidden-xs">
                        <span class="prev fa fa-angle-left"></span>
                        <span class="next fa fa-angle-right"></span>
                    </div>
                </div>


        </section>
      
   
        <section class="why" >
           
     <div id="gradient" >
  <div class="container">  
      <div class="row">
    <h1>Our Service</h1>
          
      <div  class="col-md-3 col-s-6" >
          
          <div class="num1">
          
              
          <div class="feat">
                    
                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                    <h3>Fully Integrated Services</h3>
                    <p>With CBE New Homes you can find your dream property from our selective wide range of 200 Real Estate Compounds in Egypt.</p>
                    
                
                </div>    
          </div>
          
          
          </div>
          
          <div class="col-md-3 col-s-6">
          <div class="num1">
              
              <div class="feat">
                    
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    <h3>Multiple Choices</h3>
                    <p>We provide you with the largest re-sale inventory.</p>
                
                </div>    
              </div>
          
          
          </div>
          
          <div class="col-md-3 col-s-6">
          <div class="num1">
              <div class="feat">
                    
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    <h3>Largest Compound</h3>
                    <p>With New Homes you can find your dream property from our selective wide</p>
                
                </div>    
              </div>
          
          
          </div>
       <div class="col-md-3 col-s-6">
          <div class="num1">
           
           <div class="feat">
                    
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    <h3>Outstanding Design</h3>
                    <p>Choose your favorite relaxation zone by the sea.</p>
                
                </div>    
           </div>
          
          
          </div>
          
          
      </div>
      </div>
  
</div>
        </section>
        
        
        
    <!-- Start Section Testimonails --> 
        
    <section class="Testimonails text-center">    
        <div class="container">
        
        <h1>What Client Say?</h1>
        
    <!-- Start Testimonails Carousel -->
        
        
        <div id="Carousel_Testimonails" class="carousel slide" data-ride="carousel">
            
  <!-- Wrapper for slides --> 
  <div class="carousel-inner">
    
      <div class="item active">
         <p class="lead">tykon company is honest company which i can trust </p>
          
          <span>Mivida</span>
          
      </div>
    
    
      
        <div class="item">
      
          <p class="lead">and while I was sending myself test emails, I noticed they were getting thrown into my junk folder and while I was sending myself test emails, I noticed they were getting thrown into my junk and while I was sending myself test emails, I noticed they were getting thrown into my junk.</p>
            
            <span>Mark-Zuckerberg</span>
            
        </div>
      
        <div class="item">
      
         <p class="lead">and while I was sending myself test emails, I noticed they were getting thrown into my junk folder and while I was sending myself test emails, I noticed they were getting thrown into my junk and while I was sending myself test emails, I noticed they were getting thrown into my junk.</p>
            
        <span>Bill gates</span>    
            
      </div>
            
    <div class="item">
      
        <p class="lead">and while I was sending myself test emails, I noticed they were getting thrown into my junk folder and while I was sending myself test emails, I noticed they were getting thrown into my junk and while I was sending myself test emails, I noticed they were getting thrown into my junk.</p>
        
        <span>Pablo Picasso</span>
        
      </div>
  
    </div>
            
            
    <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#Carousel_Testimonails" data-slide-to="0" class="active"><img src="https://tykooneg.com/wp-content/uploads/2019/04/mividaaaaa.jpg" alt="Walt Diseny"></li>
    <li data-target="#Carousel_Testimonails" data-slide-to="1"> <img src="<?php echo get_template_directory_uri()  ?>/img/Mark-Zuckerberg.jpg" alt="Zucker berg"></li>
    <li data-target="#Carousel_Testimonails" data-slide-to="2"> <img src="<?php echo get_template_directory_uri()  ?>/img/Bill-Gates.jpg" alt="Bill Gates"></li>
    <li data-target="#Carousel_Testimonails" data-slide-to="3"> <img src="<?php echo get_template_directory_uri()  ?>/img/picaso.jpg" alt="Picasso"></li>  
  </ol>        

</div>
            
        </div>
        </section>







  


<?php
get_footer();

?>







<div class="modal fade" id="myModal" role="dialog" style="top:100px; padding-right: 7px;">
    <div class="modal-dialog">
    
      
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

<script>

$(document).ready(function(){
  $(".editt").click(function(event){ 

let id = $(this).data('id');
let img = $(this).data('img');
let title = $(this).data('title');
let desc = $(this).data('desc');

$('#ror').val(id);
$('#title').val(title);
$('#area').val(desc);


  });



  $("#go").click(function(){ 
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
 
    let id = $('#ror').val();
let title = $('#title').val();
let desc = $('#area').val();
  var form_data = new  FormData();


form_data.append('desc' ,  desc );

form_data.append('id' ,  id );
form_data.append('title' ,  title );
form_data.append('action' , 'update_ex');



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
  let id = $('#ror').val();
  var file_data = $(elm).prop('files')[0];
  var form_data = new  FormData();
  form_data.append('id' , id );
  form_data.append('file' , file_data );
  form_data.append('action' , 'changee');

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

