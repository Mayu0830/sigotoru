<?php get_header(); ?>

<main>
<div class="bg1" id="whatsnew" style="padding: var(--space-large)">
    <?php
        $cat = get_the_category();
        $catslug = $cat[0]->slug;
        $catname = $cat[0]->cat_name;
    ?>
<h2 class="c no-line" style="padding-top: 20px;"><span class="main-text">
<?php echo $catname; ?></span><span class="sub-text" style="text-transform: capitalize"><?php echo $catslug; ?></span></h2>

    <?php if (have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <div class="list blur">
            <figure>
                <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('full'); ?>
                </a>
            </figure>

                <div class="text">
                    <h4>
                      <?php the_title(); ?></a>
                    </h4>
                    <p>
                    <?php echo get_the_content(); ?>
                    </p>
                    <span style="font-size: 0.7rem"><?php echo get_the_date(); ?></span>
                </div>
      <?php endwhile; ?>
    <?php endif; ?>




</main>
<?php get_footer(); ?>