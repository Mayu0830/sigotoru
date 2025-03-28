<?php get_header(); ?>

<!--▼▼▼▼▼ここから「MENU」-->
<main>

<div class="menu-concept" id="menu" style="background-color: #f0f0f0;">
    <?php
        $cat = get_the_category();
        $catslug = $cat[0]->slug;
        $catname = $cat[0]->cat_name;
    ?>
	<div class="main-text">
        <h3> - <?php echo $catslug; ?>  - </h4>
		<div class="original-text">
			<p class="original-sentence">健康的で美味しい食事を楽しんでいただくために、当店では栄養バランスにこだわったヘルシーメニューをご用意しております。
            新鮮な野菜や良質なたんぱく質を使用し、カロリーを抑えつつも満足感のある一皿をお届けします。
            </p>
		</div>
	</div>

    <div class="bg1" id="whatsnew" style="padding: 0px var(--space-large)">
	    <div class="list-grid1">
            <?php if (have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="list">
                    <figure>
                    <?php the_post_thumbnail('full'); ?>
                    </figure>
                    <div class="text">
                        <h4>
                        <?php the_title(); ?>
                        </h4>
                        <p>
                        <?php the_content(); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <p class="btn3" style="padding: 0 3% 30px;"><a href="<?php echo esc_url(home_url('/')); ?>">Topへ戻る</a></p>
</div>

</main>

<?php get_footer(); ?>