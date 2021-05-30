<?php
	include_once __DIR__.'/vendor/autoload.php';

	use webscrap\Classes\News;

	$data = new News("https://www.prothomalo.com/");

	$head = $data->getHeadlines();

	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<?php 
			foreach ($head as $h) {
				?>
				<li><a href="<?=$h['link']?>"><?=$h['text']?></a></li>
				<?php
			}
		?>
	</ul>
</body>
</html>