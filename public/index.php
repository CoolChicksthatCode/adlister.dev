<?php
session_start();
require_once __DIR__ . '/../bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
    <?php require '../views/partials/head.php'; ?>
</head>
<body>
    <?php require '../views/partials/navbar.php'; ?>

    <?php require $mainView; ?>



	<!-- jQuery Version 1.11.1 -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <?php require '../views/partials/common_js.php'; ?>
</body>
</html>