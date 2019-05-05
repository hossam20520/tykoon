<!DOCTYPE html>
<html <?php language_attributes();    ?> >
    <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <title><?php bloginfo('name') ?></title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

        <link rel="icon" href="https://tykooneg.com/wp-content/uploads/2019/04/logo-old.png">
      
      <?php wp_head() ?>

        <!-- <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/logo%20old.png"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
        
    </head>  
    <body>
        
        <nav class="navbar navbar-default top-fixed">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo  get_home_url(); ?>"><img src="https://tykooneg.com/wp-content/uploads/2019/04/logo-old.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
            
              <?php $contact = ""; if(is_page('contact') ){ $contact = "active"; }  ?>
              <li class="<?php echo $contact; ?>"><a href="<?php echo  get_home_url(); ?>/contact">Contact Us</a></li>
             
              
              <?php $car = ""; if(is_page('carers') ){ $car = "active"; }  ?>

                   <li class="<?php echo $car; ?>"><a href="https://tykooneg.com/carers/">Careers</a></li>


                   <?php $blog = ""; if(is_page('blog') || is_page('blog') ){ $blog = "active"; }  ?> 
                  <li class="<?php echo $blog ?>" ><a href="https://tykooneg.com/blog/" >News &amp; Event</a></li>
             
                <?php $developers = ""; if(is_page('singledev') || is_page('developer') ){ $developers = "active"; }  ?> 
                  <li class="<?php echo $developers ?>"><a href="<?php echo  get_home_url(); ?>/developer">Developers</a></li>
                  <?php $about = ""; if(is_page('about') || is_page('about') ){ $about = "active"; }  ?> 
                  <li class="<?php echo $about ?>"><a href="https://tykooneg.com/about/">Why Tykoon?</a></li>
                  <?php $sale = ""; if(is_page('resale') || is_page('residentialsale') ){ $sale = "active"; }  ?> 
                  <li  class="<?php echo $sale ?>" ><a href="https://tykooneg.com/resale/">Resale</a></li>

                  <?php $project = ""; if(is_page('project') || is_page('residentialpro') ){ $project = "active"; }  ?> 
                 <li class="<?php echo $project ?>"><a href="<?php echo  get_home_url(); ?>/projects/">Projects</a></li>
                    
                 <?php $home = ""; if(is_page('Home')){ $home = "active"; }  ?> 
               <li class="<?php echo $home;  ?>"><a href="<?php echo  get_home_url(); ?>">Home</a></li>
                  
                 
              </ul>
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>