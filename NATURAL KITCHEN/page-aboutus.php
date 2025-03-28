<?php
/*
Template Name: aboutus
Template Post Type: page
*/
?>

<?php get_header(); ?>


<!--▼▼▼▼▼ここから「About Us」-->
<div class="parent" id="svg-box">
<img src="<?php echo get_template_directory_uri(); ?>/images/shop-in.jpg"> 
<p>ABOUT US</p>
</div>
<!--about us  -->

<div class="menu-concept" id="menu">
    <div class="main-text">
	    <div class="original-text">

            <?php
            // 取得したい固定ページのスラッグを指定
            $page_slugs = array('aboutus');

            // クエリを作成
            $query = new WP_Query(array(
            'post_type' => 'page',
            'post_name__in' => $page_slugs, // スラッグ指定
            'orderby' => 'post_name__in'
            ));

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>

                <?php the_content(); ?>

        </div>
        <?php
            endwhile;
            wp_reset_postdata();
            endif;
        ?>

    </div>
    <img class="breadavocado" src="<?php echo get_template_directory_uri(); ?>/images/bread&avocado.png">
</div>


<!-- 会社概要 -->

<div id="contents">

  <div class="inner">
    
    <section>
    
    <h2>Company<br><span>会社概要</span></h2>
    
    <table class="ta1">
    
        <?php
        // 取得したい固定ページのスラッグを指定
        $page_slugs = array('company');

        // クエリを作成
        $query = new WP_Query(array(
        'post_type' => 'page',
        'post_name__in' => $page_slugs, // スラッグ指定
        'orderby' => 'post_name__in'
        ));

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>

            <?php the_content(); ?>

       
    </table> 
    <p class="btn3"><a href="<?php echo esc_url(home_url('/')); ?>">Topへ戻る</a></p>
    </section>
    <?php
        endwhile;
        wp_reset_postdata();
        endif;
    ?>
 </div>
</div>

<?php get_footer(); ?>





































<!-- 
 
<?php get_header(); ?>



<div class="parent" id="svg-box">
<img src="<?php echo get_template_directory_uri(); ?>/images/shop-in.jpg"> 
<p>ABOUT US</p>
</div>


<div class="menu-concept" id="menu">
	<div class="main-text">
		<div class="original-text">
			<h4 class="original-key">カフェ時間を、もっとヘルシーに。<br>
			今日のあなたに、やさしいごはん。</h4>
            <br>
			<p class="original-sentence">NATURAL KITCHEN は、心と体にやさしいオーガニックフードとドリンクを提供するカフェです。
                私たちは、自然の恵みを大切にし、厳選したオーガニック食材を使用したメニューで、皆さまに健康的で美味しいひとときをお届けしています。</p>
            <br>
            <p class="original-sentence">店内は木の温もりを感じる落ち着いた空間で、ナチュラルな雰囲気に包まれながら、ゆったりとした時間を過ごしていただけます。
                カラダに優しいオーガニックコーヒーやハーブティー、季節の食材を使ったこだわりのスムージー、新鮮な野菜をふんだんに使用したサラダやプレートメニューなど、心も満たされる料理をご用意しています。</p>
            <br>
            <p class="original-sentence">忙しい日常の中で、少しだけ立ち止まり、自然の味わいを楽しむひとときはいかがでしょうか。NATURAL KITCHEN で、オーガニックの美味しさと、心地よい時間をお楽しみください。</p>
		</div>
	</div>
    <img class="breadavocado" src="<?php echo get_template_directory_uri(); ?>/images/bread&avocado.png">
</div>


<div id="contents">

  <div class="inner">
    
    <section>
    
    <h2>Company<br><span>会社概要</span></h2>
    
    <table class="ta1">
 
    <tr>
    <th>店名</th>
    <td>NATURAL KITCHEN</td>
    </tr>
    <tr>
    <th>設立</th>
    <td>2015年8月</td>
    </tr>
    <tr>
    <th>代表取締役</th>
    <td>Napoleon Dynamite</td>
    </tr>
    <tr>
    <th>所在地</th>
    <td>〒150-0021<br>
        東京都渋谷区恵比寿西1-2-3</td>
    </tr>
    <tr>
    <th>アクセス</th>
    <td>東急東横線「代官山」駅、1番出口より南へ徒歩6分</td>
    </tr>
    <tr>
    <th>電話/FAX</th>
    <td>03-0000-0000/03-0000-0000</td>
    </tr>
    <tr>
    <th>メール</th>
    <td>info@example.com</td>
    </tr>
    <tr>
    <th>従業員</th>
    <td>25名</td>
    </tr>

    </table> 
    <p class="btn3"><a href="<?php echo esc_url(home_url('/')); ?>">Topへ戻る</a></p>
    </section>
  </div>
</div>


<?php get_footer(); ?>


-->