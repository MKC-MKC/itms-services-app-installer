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
    if (isset($_GET['url'])) {
        if ($_GET['url']) require_once __DIR__ . "/index/success.php"; // If success
        elseif (!$_GET['url']) require_once __DIR__ . "/index/error.php"; // If _GET empty
    }
    else
        require_once __DIR__ . "/index/create.php"; // If _GET not exist
    ?>
</div>
<?php
require_once __DIR__."/assets/scripts.php";
?>
</body>
</html>