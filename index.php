<?php
#   Переменные
$title = 'QR Store Scanner';
$protocol = !isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https'; // 1 - Check the protocol
define('URL', $URL = $protocol . '://'. $_SERVER['HTTP_HOST']); // 2 - Full website address

if ((strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') or strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') or strpos($_SERVER['HTTP_USER_AGENT'], 'iPod')) && isset($_GET['url'])) header('Location: itms-services://?action=download-manifest&url=' . $_GET['url']);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css?5055">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css?4938">
    <link rel="stylesheet" type="text/css" href="./assets/css/custom.css?1745">
    <link href='https://fonts.googleapis.com/css?family=Roboto&display=swap&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <title><?php echo $title; ?></title>
</head>
<body>
<div class="page-container">
	<?php
	if (isset($_GET['url'])) {
		if ($_GET['url']) require_once __DIR__ . "/index/success.php"; // If success
		else require_once __DIR__ . "/index/error.php";
	} else require_once __DIR__ . "/index/create.php";
	?>
</div>
<!-- Additional JS -->
<script src="./assets/js/jquery-3.3.1.js?2124"></script>
<script src="./assets/js/bootstrap.bundle.js?2851"></script>
<script src="./assets/js/blocs.js?243"></script>
<script src="./assets/js/lazysizes.min.js" defer></script>
<script src="./assets/js/tilt.jquery.js?2959"></script>
<script src="./assets/js/tilt.jquery.js?3163"></script>
<!-- Additional JS END -->
</body>
</html>