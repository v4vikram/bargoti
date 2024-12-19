<?php
get_header(); ?>
<?php if (have_posts()): ?>
    <ul>
        <?php while (have_posts()):
            the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <p><?php the_excerpt(); ?></p>
            </li>
        <?php endwhile; ?>
    </ul>
    <?php
    // Pagination
    the_posts_pagination();
?>
<?php else: ?>
    <p>No posts found.</p>
<?php endif; ?>

<?php
get_footer();
