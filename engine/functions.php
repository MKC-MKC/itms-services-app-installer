<?php
/*
 * Check iPhone, iPad and iPod OS
 */
function OS_Check($userteam_UA)
{
    if ( strpos($userteam_UA, 'iPhone') or strpos($userteam_UA, 'iPad') or strpos($userteam_UA, 'iPod') )
        /*
         * GET URL
         */
        if ( isset($_GET['url']) )
        {
            header('Location: itms-services://?action=download-manifest&url=' . $_GET['url']);
        }
}