<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error  -my portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css">
    <link rel="stylesheet" href="css/style.css">
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
                <a href="index.html">HOME</a>
            </li>
            <li>
                <span></span>
                <span></span>
                <span></span>
                <a href="./about.html">ABOUT</a>
            </li>
            <li>
                <span></span>
                <span></span>
                <span></span>
                <a href="./work.html">WORK</a>
            </li>
            <li>
                <span></span>
                <span></span>
                <span></span>
                <a href="./contact.html">CONTACT</a>
            </li>
        </ul>
    
    </div>
<?php get_header();?>
<main id="404">
    <div class="myname-en" style="margin-bottom: 64px;">404 Not Found</div>
    <a class="myname-en" href="<?php echo home_url(); ?>">トップに戻る</a>
</main>
<?php get_footer();?>