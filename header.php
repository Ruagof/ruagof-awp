<!doctype html>

<head>

    <title><?php wp_title(); ?></title>
    <?php wp_head() ?>
</head>

<body>
<div id="wrapper"/>
<!-- wraps entire body, ending in footer -->
<div id="header">
 <h1>WordPress Theme</h1>
    
    
 <h2><?php if (is_category('sport')) { ?>
   <img id="icon" src="<?php bloginfo('template_directory');?>/images/football.png" alt="Category Icon"/>
   <?php } ?>
 </h2>
</div>