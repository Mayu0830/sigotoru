<?php get_header(); ?>

<!--▼▼▼▼▼ここから「スライドショー」-->
<div id="svg-box">

<div class="slide-type1">

<div class="slide img1">
<img src="<?php echo get_template_directory_uri(); ?>/images/shop-in.jpg" alt="お店の内装">
</div>

<div class="slide img2">
<img src="<?php echo get_template_directory_uri(); ?>/images/salad.jpg" alt="サラダプレート">
</div>

<div class="slide img3">
<img src="<?php echo get_template_directory_uri(); ?>/images/lettuce.jpg" alt="レタスの料理">
</div>

<!--インジケーターボタン（現在表示中ボタン）-->
<div class="slide-indicators"></div>

</div>
<!--/.slide-type1-->

<!--回転する円形のテキストアニメーション-->
<img src="<?php echo get_template_directory_uri(); ?>/images/spin.png" alt="カラダにやさしいコーヒーを。オーガニックをお楽しみください。" class="animation-text spin">

<svg  width="0" height="0" viewBox="0 0 1600 900">
<defs>
<clipPath id="myClip1" clipPathUnits="objectBoundingBox">
<path transform="scale(0.000625,0.001111)" d="M244.6,20v94c0,11-9,20-20,20H19.6c-11,0-20,9-20,20v726c0,11,9,20,20,20h1560c11,0,20-9,20-20V20c0-11-9-20-20-20H264.6c-11,0-20,9-20,20Z">
</clippath>
</defs>
</svg>

</div>
<!--▲▲▲▲▲ここまで「スライドショー」-->



<main>



<!--▼▼▼▼▼ここから「Healthy Food」-->
<section class="box1" id="healthyfood">

<p class="deco-text">Healthy Food</p>
<img src="<?php echo get_template_directory_uri(); ?>/images/avocado.png" alt="アボカド" class="illust1">
<img src="<?php echo get_template_directory_uri(); ?>/images/bread.png" alt="食パン" class="illust2">

<div class="text order1 blur">

<h2><span class="main-text">ヘルシーフードとは</span><span class="sub-text">Healthy Food</span></h2>

<p>私たちのヘルシーフードは、厳選されたオーガニック食材を使用し、栄養バランスを考慮して調理されています。添加物や保存料を一切使用していません。</p>

<p class="btn1"><a href="<?php echo home_url(); ?>/healthyfood">View More</a></p>

</div>
<!--/.text-->

<div class="image blur">
<img src="<?php echo get_template_directory_uri(); ?>/images/healthy.png" alt="ヘルシーな食材を用いた料理" class="speed1">
<img src="<?php echo get_template_directory_uri(); ?>/images/healthy2.png" alt="ヘルシードリンク" class="speed2">
</div>

</section>
<!--▲▲▲▲▲ここまで「Healthy Food」-->



<!--▼▼▼▼▼ここから「About Us」-->

<section class="logo-kazari padding-lr0" id="aboutus">

<div class="title-bg blur">
<h2><span class="tate order1">私たちについて</span><span class="yoko">About Us</span></h2>
</div>

<div class="list1 image1 up">

<div class="text">

<h3><span class="large">N</span>ATURAL <span class="large">K</span>ITCHEN</h3>
<p>NATURAL KITCHEN は、心と体にやさしいオーガニックフードとドリンクを提供するカフェです。私たちは、自然の恵みを大切にし、厳選したオーガニック食材を使用したメニューで、皆さまに健康的で美味しいひとときをお届けしています。</p>
<p class="btn2"><a href="<?php echo home_url(); ?>/aboutus">View More</a></p>

</div>

</div>
<!--/.list1.image1-->


</section>
<!--▲▲▲▲▲ここまで「About Us」-->


<!--▼▼▼▼▼ここから「Menu」-->
<div class="slide-thumbnail-box" style="padding-top: 20px;">

	<div class="slide-thumbnail1">
	<div class="img rtl">
	<div><a href="<?php echo home_url(); ?>/menu"><img src="<?php echo get_template_directory_uri(); ?>/images/item-blueberry.jpg" alt=""></a></div>
	<div><a href="<?php echo home_url(); ?>/menu"><img src="<?php echo get_template_directory_uri(); ?>/images/item-pasta.jpg" alt=""></a></div>
	<div><a href="<?php echo home_url(); ?>/menu"><img src="<?php echo get_template_directory_uri(); ?>/images/item-salad.jpg" alt=""></a></div>
	<div><a href="<?php echo home_url(); ?>/menu"><img src="<?php echo get_template_directory_uri(); ?>/images/lettuce.jpg" alt=""></a></div>
	</div>
	</div>
</div>

<section class="menu-concept" id="menu">

	<div class="main-text">
		<div class="original-text">
			<h2 class="original-title">Menu</h2>
			<h4 class="original-key">カフェ時間を、もっとヘルシーに。<br>
			今日のあなたに、やさしいごはん。</h4>
			<p class="original-sentence">当店のコーヒー、フードは、全てオーガニックの物を使用しています。<br>
				お子様でも安心してお召し上がりください。</p>
		</div>
	</div>
	<p class="btn3"><a href="<?php echo home_url(); ?>/category/menu">View More</a></p>

</section>
<div class="slide-thumbnail-box" style="padding-top: 20px;">
	<div class="slide-thumbnail1">
		<div class="img ltr">
		<div><a href="<?php echo home_url(); ?>/menu"><img src="<?php echo get_template_directory_uri(); ?>/images/item-blueberry.jpg" alt=""></a></div>
		<div><a href="<?php echo home_url(); ?>/menu"><img src="<?php echo get_template_directory_uri(); ?>/images/item-pasta.jpg" alt=""></a></div>
		<div><a href="<?php echo home_url(); ?>/menu"><img src="<?php echo get_template_directory_uri(); ?>/images/item-salad.jpg" alt=""></a></div>
		<div><a href="<?php echo home_url(); ?>/menu"><img src="<?php echo get_template_directory_uri(); ?>/images/lettuce.jpg" alt=""></a></div>
		</div>
		</div>
		
	</div>

	
<!--▲▲▲▲▲ここまで「Menu」-->


<!--▼▼▼▼▼ここから「Blog」-->
<section>

    <h2 class="c no-line"><span class="main-text">お知らせ</span><span class="sub-text">What's New?</span></h2>
    
	<?php
     //取得したい投稿記事などの条件を引数として渡す
    $args = array(
    // 投稿タイプ
    'post_type'      => 'post',
    // カテゴリー名
    'category_name' => 'blog',
    // 1ページに表示する投稿数
    'posts_per_page' => 3,
    );
    // データの取得
    $posts = get_posts($args);
	?>

     <!-- ループ処理 -->
    <?php foreach($posts as $post): ?>
     <!-- 投稿データをセット -->
    <?php setup_postdata($post); ?>
	<dl class="new">
		<dt>
			<!-- aタグで投稿記事へのリンクを作成 -->
			<a href="<?php echo get_permalink(); ?>">
    			<!-- 日付を出力する -->
				<?php echo get_the_date(); ?>
			</a>
		</dt>
		<dd>
			<!--  aタグで投稿記事へのリンクを作成する -->
			<a href="<?php the_permalink(); ?>">
				 <!--  投稿記事のタイトルを表示する -->
				 <?php the_title(); ?>
			</a>
		</dd>
	</dl>

	<?php endforeach; ?>
	<!-- 使用した投稿データをリセット -->
	<?php wp_reset_postdata(); ?>

</section>
<!--  もとのhtml(怖いから消せない)

    <dl class="new">
    <dt>2025.03.01</dt>
    <dd>新たに、Webサイトをリニューアルしました。</dd>
    <dt>2025.02.17</dt>
    <dd>ホワイトデーチョコレートセットの販売を開始しました。</dd>
    <dt>2025.02.10</dt>
    <dd>これからの季節にぴったりのさくらドリンクの販売を開始しました。</dd>
    </dl>
    
	<p class="btn3" style="padding-top: 20px"><a href="<?php echo home_url(); ?>/blog">View More</a></p>
</section>
    
-->

<!--▲▲▲▲▲ここまで「Blog」-->



<!--▼▼▼▼▼ここから「Recruit」と「Contact」-->
<section class="padding0">

<div class="list-c2">

<a href="<?php echo home_url(); ?>/recruit">
<div class="list image2" id="recruit">
<div class="text">
<h4><span class="sub-text">スタッフ採用</span><span class="main-text">Recruit</span></h4>
<p>私たちのチームに参加しませんか？<br>
	NATURAL KITCHENでは、オーガニック食品や健康に関心のあるスタッフを募集しています。<br>
	経験者はもちろん、未経験者も大歓迎です。
</p>
</div>
</div>
</a>


<a href="<?php echo home_url(); ?>/contact">
<div class="list image1" id="contact">
<div class="text">
<h4><span class="sub-text">お問い合わせ</span><span class="main-text">Contact</span></h4>
<p>ご質問やご意見がございましたら、以下の方法でお気軽にお問い合わせください。</p>
</div>
</div>
</a>

</div>
<!--/.list-c2-->

</section>
<!--▲▲▲▲▲ここまで「Contact」と「Online Shop」-->


</main>


<?php get_footer(); ?>

