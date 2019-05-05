<?php  
/*

Template Name: developer
*/
get_header();
?>



<header>
        
       
      <div class="content">
          <div class="par">
  <h1><a href="https://superdevresources.com/full-background-image-css/" target="_blank">Taykoon's Developers</a></h1>
  <p>Aroma wings est doppio black et fair trade seasonal breve. Cortado organic coffee, single shot, roast cappuccino mocha single origin doppio. Half and half, roast, espresso roast decaffeinated aromatic, con panna froth grounds grinder sweet. Wings fair trade extraction lungo, irish cappuccino skinny saucer wings.</p>
<p>Ut bar medium eu, medium, con panna lungo whipped cup frappuccino. Dark crema single origin, con panna cortado eu galão crema. Organic qui and whipped espresso caramelization spoon espresso aroma. To go, whipped, con panna cream galão coffee kopi-luwak.</p>
</div>

          
</div>
        
        </header>
  
  
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




<?php get_footer();   ?>

