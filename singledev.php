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



<div id="map" style="width:100%;height:350px;"></div> 
        <h1 style="text-align: center; color:#00aec1; font-weight: bold; padding-top: 20px"><?php echo $sing->name_dev;   ?></h1>
        <section class="info">
        <div class="container">
        <div class="row">
         
        <p><br> <b>-</b><?php echo $sing->description_dev;  ?><br><br></p>
           
            <div class="col-md-12 text-center">
                 <h2>DEVELOPER PROJECTS</h2>
            <img src="img/images%20(1).jpg">
                </div>
            
            <div class="col-md-12 text-center par">
                 <h2>DEVELOPER AREA OF INTEREST</h2>
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

        <?php get_footer();   ?>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBenFW7knU8aOYP5pDHplxLCKJSd8Hvn1w&callback=initMap"></script>