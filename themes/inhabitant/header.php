<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>


    <header> 
        <nav class="<?php echo is_page(array('About', 'Home')) ? 'main-menu' : 'main-menu2' ;?>">
        <div class="nav-logo-container">
            <div class="<?php echo is_page(array('About', 'Home')) ? 'nav-logo' : 'nav-logo2' ;?>">
                <a href="http://localhost:8888/red/projects/project-04/">
                <h1 class="site-title">Inhabitent</h1>
                </a>
            </div>  

            <div class="nav-logo3">
                <a href="http://localhost:8888/red/projects/project-04/">
                <h1 class="site-title">Inhabitent</h1>
                </a>
            </div>  
</div>
              
        
       
            <!-- Menu -->
        <div class="header-menu">
        <?php wp_nav_menu(array(
        'theme_location' => 'main'
        )) ;?>  
        <!-- Search -->
        <div class="header-search">
         <?php get_search_form();?>
        </div>
        

        


       


        </nav>
    </header>
    



    
    
    
    
  
    
   
    
    

