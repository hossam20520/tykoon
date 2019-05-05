<?php

 /* Template Name: resortsale */ 


 get_header();
?>

<section class="pro1 text-center">
        <div class="container">
        <div class="row">
        <h1>Resort</h1>
<?php
        $arz = $wpdb;

$area  = $arz->get_results('SELECT * FROM wpym_sort_area_sale');
foreach ( $area as $row ):
?>

            
            <div class="col-md-4 text-center data">
            <a href="https://tykooneg.com/listprojects/?ID_AREA=<?php echo $row->id_sort_a_s;  ?>&&NAME=<?php echo $row->name_sort_a_s;  ?>&&page=resort_sale"><img src="<?php  echo $row->img_sort_a_s;  ?>"></a>
            <p><?php  echo $row->name_sort_a_s;  ?></p>
            </div>
            
           
<?php endforeach;  ?>  
       
        </div>
        </div>
        </section>