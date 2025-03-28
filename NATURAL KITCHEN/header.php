<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>NATURAL KITCHEN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="NATURAL KITCHEN | オーガニック食材で楽しむヘルシーフードカフェ">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<?php wp_head(); ?>
</head>

<body class="home">

<div id="container">



<!--▼▼▼▼▼ここから「ヘッダー」-->
<header>

<h1 id="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="NATURAL KITCHEN"></a></h1>

<nav>
<ul>
<li><a href="<?php echo home_url(); ?>/healthyfood">Healthy Food</a></li>
<li><a href="<?php echo home_url(); ?>/aboutus">About Us</a></li>
<li><a href="<?php echo home_url(); ?>/category/menu">Menu</a></li>
<li><a href="<?php echo home_url(); ?>/category/blog">Blog</a></li>
<li><a href="<?php echo home_url(); ?>/recruit">Recruit</a></li>
</ul>
</nav>

</header>

<!--開閉ボタン（ハンバーガーアイコン）-->
<div id="menubar_hdr">
<div class="menu-icon">
<span></span><span></span>
</div>
</div>


<!--開閉ブロック-->
<div id="menubar">

<nav>
<ul>
<li><a href="<?php echo esc_url(home_url('/')); ?>">Top</a></li>
<li><a href="<?php echo home_url(); ?>/healthyfood">Healthy Food</a></li>
<li><a href="<?php echo home_url(); ?>/aboutus">About Us</a></li>
<li><a href="<?php echo home_url(); ?>/category/menu">Menu</a></li>
<li><a href="<?php echo home_url(); ?>/category/blog">Blog</a></li>
<li><a href="<?php echo home_url(); ?>/recruit">Recruit</a></li>
<li><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
</ul>
</nav>

</div>
<!--/#menubar-->
<!--▲▲▲▲▲ここまで「ヘッダー」-->