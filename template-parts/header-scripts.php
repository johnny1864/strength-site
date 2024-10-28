<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// MISC. HEADER SCRIPTS / CODE
?>

<?php if( $_SERVER['HTTP_HOST'] == 'SITEURL') : ?>


<?php endif; ?>


<?php // HIDE ELEMENTS UNLESS URL VARIABLE IS SET - ?test=true
if( !(isset($_GET['test']) && $_GET['test'] == 'true') ) :
?>

    <style>
        .hrl-hide{display: none !important;}
    </style>

<?php endif; ?>


