<?php 
	require_once('config/config.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/library/bootstrap-4/css/bootstrap.min.css">
	<script type="text/javascript" src="/library/jquery/js/jquery.min.js"></script>
	<script type="text/javascript" src="/library/bootstrap-4/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/library/popper/js/popper.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="/">
			<?php echo HEADER['title']; ?>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/"><?php echo HEADER['home']; ?> <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo HEADER['list']; ?>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<?php 
							foreach(HEADER['list_child'] as $key => $item){
								echo '<a class="dropdown-item" href="'.$item.'">'.$key.'</a>';
							}
						 ?>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#"><?php echo HEADER['disabled']; ?></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo LANGUAGE; ?>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<?php 
							foreach(LANGUAGES as $key => $item){
								$active = $key == $_SESSION["lang"] ? 'active' : '';
								echo '<a class="dropdown-item '.$active.'" href="?lang='.$key.'">'.$item.'</a>';
							}
						 ?>
					</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="<?php echo HEADER['search'];?>" aria-label="<?php echo HEADER['search'];?>">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo HEADER['search']; ?></button>
			</form>
		</div>
	</nav>

	<script type="text/javascript">
		console.log(document.documentElement.lang)
	</script>
</body>
</html>