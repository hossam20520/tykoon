<?php

/* Template Name: ser */ 


get_header();
$ser = $_GET['find'];


?>
<?php   



$developersz = $wpdb;
$developersz2 = $wpdb;
$developersz3 = $wpdb;
$developersz4 = $wpdb;


$rows  = $developersz->get_results("SELECT * FROM wpym_projects_res where name_res_pro like '$ser%' ");
$row2  = $developersz2->get_results("SELECT * FROM wpym_projects_com where name_com_pro like '$ser%' ");
$row3  = $developersz3->get_results("SELECT * FROM wpym_projects_sort where name_sort_pro like '$ser%' ");

$row4  = $developersz4->get_results("SELECT * FROM wpym_developers where name_dev like '$ser%' or name_dev='$ser' ");
?>
<style>
.cv{
    margin-top: 126px;
    margin-left: 70px;
}
li{
    list-style: none;
}
li a{
    font-size:   36px;
  
}
</style>
<div class="cv">
<h3>Found Results ......</h3>
<ul>
    <?php  foreach ( $rows as $row ) {  ?>
<li><u><a href="https://tykooneg.com/project/?project_id=2"><?php echo $row->name_res_pro  ?><font color="red"> Residential</font></a></u></li>

    <?php  } ?>

    <?php  foreach ( $row2 as $rowx ) {  ?>
<li><u><a href="https://tykooneg.com/project/?project_id=2"><?php echo $rowx->name_com_pro  ?><font color="red"> Commercial</font></a></u></li>

    <?php  } ?>

    <?php  foreach ( $row3 as $rowx3 ) {  ?>
<li><u><a href="https://tykooneg.com/project/?project_id=3"><?php echo $rowx3->name_com_pro  ?><font color="red"> Resort</font></a></u></li>

    <?php  } ?>


    <?php  foreach ( $row4 as $rowx4 ) {  ?>
<li><u><a href="https://tykooneg.com/singledev/?id_dev=<?php echo $rowx4->id_dev;   ?>"><?php echo $rowx4->name_dev;  ?><font color="red"> Developers</font></a></u></li>

    <?php  } ?>
</ul>
</div>


