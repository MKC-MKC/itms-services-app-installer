<?php
/*
 * Connect core
 */
require_once __DIR__."/engine/core.php";

/*
 * Enabling the handler for iOS
 */
OS_Check($_SERVER['HTTP_USER_AGENT']);

/*
 * Generate QR for other device
 */
$title = 'QR Store Scanner';
$keywords = 'Empty';
$description = 'Empty';
?>
<!doctype html>
<html lang="ru">
<head>
    <?php require_once __DIR__."/assets/head.php"; ?>
    <title><?php echo $title; ?></title>
</head>
<body>
<div class="page-container">
    <?php
    if ( isset($_GET['url']) )
        // If success
        require_once __DIR__."/index/success.php";
    else
        // If _GET empty
        require_once __DIR__."/index/error.php";
    ?>
</div>
<?php
require_once __DIR__."/assets/scripts.php";
?>
</body>
</html>