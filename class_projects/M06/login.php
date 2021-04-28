<?php
//Ian Bays

 //require_once('bookmark_fns.php');
 
 // ▼ this line is needed for the HTML to Load 
 require_once('output_fns.php');


 do_html_header('');

 display_site_info();
 display_login_form();

 do_html_footer();
?>