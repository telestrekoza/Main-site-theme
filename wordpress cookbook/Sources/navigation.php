<?php 
/* навигационные ссылки в посте, показываются ссылки на следующий и предыдущий пост от того, в котором находимся в данный момент */
if (is_single()) { ?>
<div class="navigation">
	<div class="alignleft"><?php previous_post('&laquo; %','','yes') ?></div>
	<div class="alignright"><?php next_post(' % &raquo;','','yes') ?></div>
	<div class="clear"></div>
</div>
<?php } else { 
/* или же показывать ссылки навигации между страницами, будь-то в архивах или просмотр отдельных категорий */
?>
<div class="navigation">
	<div class="alignleft"><?php posts_nav_link('','','&laquo; Назад') ?></div>
	<div class="alignright"><?php posts_nav_link('','Вперёд &raquo;','') ?></div>
	<div class="clear"></div>
</div>
<?php } ?>