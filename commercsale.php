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
            <a href="https://tykooneg.com/listprojects/?ID_AREA=<?php echo $row->id_com_a_s;  ?>&&NAME=<?php echo $row->name_com_a_s;  ?>&&page=comme_sale"><img src="<?php  echo $row->img_com_a_s;  ?>"></a>
            <p><?php  echo $row->name_com_a_s;  ?></p>
            </div>
            
           
<?php endforeach;  ?>  
       
        </div>
        </div>
        </section>