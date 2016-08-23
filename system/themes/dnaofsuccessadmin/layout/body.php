<?php



$pagename = AI_PAGE_NAME;



//IF IT HAS A PAGES FILE, USE THAT

if(file_exists('system/themes/dnaofsuccessadmin/pages/'.$pagename.'.php')){

    require('system/themes/dnaofsuccessadmin/pages/'.$pagename.'.php');

}

else {

    echo $AI->get_dynamic_area('Page-'.$pagename);

}

