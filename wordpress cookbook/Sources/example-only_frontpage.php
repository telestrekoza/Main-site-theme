<?php 
	if ( (is_home()) && !(is_page()) && !(is_single()) && !(is_search()) && !(is_archive()) && !(is_author()) && !(is_category()) && !(is_paged()) ) { ?>	

	Это увидят только на главной странице блога

<?php } ?>