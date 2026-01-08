<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php get_template_part('_inc/meta_description'); ?>">
    <?php get_template_part('_inc/title_info'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/style.css';?>">
    <?php wp_deregister_script('jquery');?>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="btn m-btn">
            Menu
        </div>
        <div class="btn cle-btn">
            Close
        </div>
        <div class="menu">
            <ul class="menu-list">
                <li>
                    <span></span>
                    <span></span>
                    <span></span>
                    <a href="<?php echo home_url(); ?>">HOME</a>
                </li>
                <li>
                    <span></span>
                    <span></span>
                    <span></span>
                    <a href="<?php echo home_url().'/about';?>">ABOUT</a>
                </li>
                <li>
                    <span></span>
                    <span></span>
                    <span></span>
                    <a href="<?php echo home_url().'/work';?>">WORK</a>
                </li>
                <li>
                    <span></span>
                    <span></span>
                    <span></span>
                    <a href="<?php echo home_url().'/contact';?>">CONTACT</a>
                </li>
            </ul>
        
        </div>
    </header>
