<?php

 /* Template Name: residentialpro */ 


 get_header();
?>

<section class="pro1 text-center">
        <div class="container">
        <div class="row">
        <h1>Residential</h1>
<?php
        $arz = $wpdb;

$area  = $arz->get_results('SELECT * FROM wpym_res_area');
foreach ( $area as $row ):
?>

            
            <div class="col-md-4 text-center data">
            <a href="https://tykooneg.com/listprojects/?ID_AREA=<?php echo $row->id_res_a;  ?>&&NAME=<?php echo $row->name_res_a;  ?>"><img src="<?php  echo $row->img_res_a;  ?>"></a>
            <p><?php  echo $row->name_res_a;  ?></p>
            </div>
            
           
<?php endforeach;  ?>  
       
        </div>
        </div>
        </section>