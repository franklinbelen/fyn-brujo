<?php if (have_posts()): while(have_posts()): the_post(); ?>
    <article>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large'); ?>
            <?php the_title(); ?>
            <p><?php the_category('-'); ?></p>
        </a>
    </article>
<?php endwhile; else:?>
    <p>El contenido solicitado no existe</p>
<?php endif;?>


<section class="Pagination Other">
    <?php echo paginate_links(); ?>
</section>