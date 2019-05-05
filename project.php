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
          <a>Book Now</a>
        </div>
      </div>
    </div>

   <?php
   $count = $count +1;
    }
  }

?>
  </div>
        </div>

        <section class="btns text-center">
        <div class="contanier">
            <div class="row">
            <button href="Alwatinia-Social-Media-Plan.pdf" download ="Alwatinia.pdf" style="float: left"><i class="fa fa-download"></i>Download</button>
            <button href="Alwatinia-Social-Media-Plan.pdf" target="_blank" class="btn bg-blue btn-squre " style="float: right"><i class="fa fa-download"></i>Preview</button>
            </div>
            </div>
        </section>
        
        <h1 style="text-align: center; padding-top: 40px;
                   font-weight: bold">Location</h1>
       <div id="map" style="width:100%;height:350px;"></div> 


<?php
get_footer();



?>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBenFW7knU8aOYP5pDHplxLCKJSd8Hvn1w&callback=initMap"></script>