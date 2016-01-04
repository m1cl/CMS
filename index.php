<?php
	include('config/setup.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title><?php echo $page['title'].' | '.$site_title?> </title>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<?php include('config/css.php') ?> <!-- includes css links -->
		<?php include('config/js.php') ?>  <!-- includes javascript links -->
    </head>
    <body>
		<div id="wrap">
			<?php include(D_TEMPLATE.'/navigation.php') ?>
			<div class="container">
				<h1><?php echo $page['header'];?></h1>
				<?php echo $page['body']; ?>
			</div>

		</div><!--End of WRAP -->
		<?php include(D_TEMPLATE.'/footer.php') ?>
        <div id="console-debug">
                <pre>
                <? print_r($page); ?>
                </pre>
        </div>
	</body
</html>

