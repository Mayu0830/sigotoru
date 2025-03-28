<?php get_header(); ?>

<main>

<div class="bg1" id="whatsnew" style="padding: var(--space-large)">
    <?php
        $cat = get_the_category();
        $catslug = $cat[0]->slug;
        $catname = $cat[0]->cat_name;
    ?>
	<h2 class="c no-line" style="padding-top: 20px;">
        <span class="main-text">
        <?php echo $catname; ?>
        </span>
        <span class="sub-text" style="text-transform: capitalize">
        <?php echo $catslug; ?>
        </span>
    </h2>
	<span>オーガニック食品や健康に関する情報、コーヒーの豆知識などを定期的に更新しています。ぜひチェックしてみてください。</span>
	
	<div class="list-grid1">
        <?php if (have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <div class="list">
                <figure>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full'); ?>
                    </a>
                </figure>
                <div class="text">
                    <h4>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h4>
                    <p>
                    <?php echo wp_trim_words( get_the_content() , 100, '...'); ?>
                    </p>
                    <span style="font-size: 0.7rem"><?php echo get_the_date(); ?></span>
                </div>
            
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
    
	<!--/.list-grid1-->
	<p class="btn3" style="padding: 20px 10px"><a href="<?php echo esc_url(home_url('/')); ?>">Topへ戻る</a></p>
</div>

</main>

<?php get_footer(); ?>


	<!-- 繰り返し前のHTML

	<div class="list blur">
	<figure><a href="#"><img src="images/renewal.jpg" alt="コーヒー豆とカフェラテ"></a></figure>
	<div class="text">
	<h4>Webサイトのリニューアル</h4>
	<p>新たに、Webサイトをリニューアルしました。</p>
	<span class="sub-text">2025.03.01</span>
	</div>
	</div>
	
	<div class="list blur">
	<figure><a href="#"><img src="images/chocolates4.jpg" alt="トリュフチョコレート"></a></figure>
	<div class="text">
	<h4>ホワイトデーチョコレートセット販売のお知らせ</h4>
	<p>ホワイトデーチョコレートセットの販売を開始しました。</p>
	<span class="sub-text">2025.02.17</span>
	</div>
	</div>

	<div class="list blur">
	<figure><a href="#"><img src="images/sakura-drink3.jpg" alt="さくらドリンク"></a></figure>
	<div class="text">
	<h4>さくらドリンク販売のお知らせ</h4>
	<p>これからの季節にぴったりのさくらドリンクの販売を開始しました。</p>
	<span class="sub-text">2025.02.10</span>
	</div>
	</div>

    -->


	