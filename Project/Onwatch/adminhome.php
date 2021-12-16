<?php
      require_once('./config/dbconn.php');
      $db = new crud();
      $result=$db->view_movie();
	  $result2=$db->view_pack();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>AdminPage</title>
        <link rel="stylesheet" href="css/index.css"> 
		<link rel="stylesheet" href="css/bootstrap.css"> 
    </head>
    <body>
		<header>
			<div id="header">
				<div id="logo">
					<a href="#"> <img id = "logopic" src = "img/logo.png" /></a>
				</div>
				<div id="navigation">
					<ul>
						<a href="blog.php"><li class="link">Blogs</li></a>
						<a href="viewbook.php"><li class="link">Booking</li></a>
						<a href="movies.php"><li class="link">Movie</li></a>
                        <a href="packages.php"><li class="link">Packages</li></a>
						<a href="login.php"><li class="link">Logout</li></a>
					</ul>
				</div>
			</div>
		</header>
		<div class="container py-5">
			<div class="row mt-4">
			<h1>Movies</h1>
				<?php
					while ($data = $result->fetch_assoc())
					{
					?>
						<div class="col-md-3 mt-3">
							<div class="card">
								<img src="banner/<?php echo $data['image']; ?>" height='400px' alt="img">
								<div class="card-body bg-dark">
									<h4 class="card-title"><?php echo $data['image_text']; ?> </h4>
									<p class="card-text">
									<button class="btn btn-info"  type="button" name="trailer"><a href="trailer.php?U_ID=<?php echo $data['id'] ?>"> Sample Trailer </a></button>
									<button class="btn btn-info" type="button" name="trailer"><a href="addbook.php?U_ID=<?php echo $data['id'] ?>"> BOOK </a></button>
									</p>
								</div>
							</div>
						</div>
						<?php
					}
				?>
			</div>
			<div class="row mt-4">
				<h1>Drinks and Popcorns</h1>
				<?php
					while ($data2 = $result2->fetch_assoc())
					{
					?>
						
						<div class="col-md-3 mt-3">
							<div class="card">
								<img src="package/<?php echo $data2['banner']; ?>" height='400px' alt="img">
								<div class="card-body bg-dark">
									<h4 class="card-title"><?php echo $data2['pack']; ?> </h4>
									<p class="card-text">
									<button class="btn btn-info" type="button" ><a href="bookadmin.php?U_ID=<?php echo $data2['id'] ?>"> Book Now </a></button>
									</p>
								</div>
							</div>
						</div>
						<?php
					}
				?>
			</div>
		</div>
    </body>
</html>