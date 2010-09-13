<?php get_header(); ?>  

<div id="content">
<?php include (TEMPLATEPATH . '/theloop.php'); ?>

<?php comments_template(); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?> 