<?php if (have_posts()) :  ?>

<?php /* Подключение навигации между страницами (не показывается на главной и в отдельных постах) */ 
if ( (is_archive()) or (is_search()) or (is_paged()) or (is_category()) ) { 
	/* Подключаем файл */
		include (TEMPLATEPATH . '/navigation.php'); } 
?>

<?php /* Включаем сам LOOP */
while (have_posts()) : the_post(); 
?>

<?php /* Подключение навигации между постами  (должно быть внутри LOOP'а) */ 
	if (is_single()) { include (TEMPLATEPATH . '/navigation.php'); } 
?>

<?php /* сам пост, включает постоянную ссылку, метаданные, счетчик комментариев и текст */ ?>
<div class="entry">
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка для <?php the_title(); ?>"><?php the_title(); ?></a></h1>
<p class="postmetadata">Опубликовано <?php the_time('F jS, Y') ?>. <?php comments_popup_link('Без комментов', '1 Коммент', '% Комментов'); ?> <?php edit_post_link('Редактировать', '<strong>', '</strong>'); ?></p>

<?php
	/*
	Самый интересный момент. Здесь при постраничном просмотре архивов или поиске 
	включается функция the_excerpt (краткая выдержка из поста).
Но на главной и в отдельном посте, как и полагается полный текст поста с ссылками, картинками и т.д.
	*/
?>
<?php if ( (is_archive()) or (is_search()) ) { ?>
	<?php the_excerpt(); ?>
<?php } else { ?>
	<?php the_content("Читать дальше..."); ?>
<?php } ?>				

<?php link_pages('<p><strong>Страницы:</strong> ', '', 'number'); ?>
</div>

	<!--
		<?php trackback_rdf(); ?>
	-->

<?php endwhile; ?>

<?php /* Подключение навигации между страницами (показывается везде и на главной тоже) */ 
if ( (is_home() or is_archive()) or (is_search()) or (is_paged()) or (is_category()) ) { 
		include (TEMPLATEPATH . '/navigation.php'); } 
?>

<?php /* в случае ошибки 404 */
else : 
?>

<div class="entry">
<h1>Error</h1>
<p>Произошла ошибка. Проверьте правильность запроса.</p>
</div>

<p align="center"><?php include (TEMPLATEPATH . "/searchform.php"); ?></p>


<?php endif; ?>
