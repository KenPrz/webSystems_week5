<?php
	// var_dump($_SERVER["REQUEST_METHOD"]);
	$postArticle = $_POST['postArticle'] ?? null;
	$error_msg = '';

	// var_dump($_POST);
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(!isset($postArticle) || strlen(trim($postArticle))==0){
            $has_error = 1;
            $error_msg .= '&bull; Review terms and condition <br>';
        }
	}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap Core css and JS-->
    <?php include './header.php' ?>
    <!--Bootstrap Core css and JS-->
    <title>New Article Screen</title>
</head>

<body style=" background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg')" style="background-repeat: no-repeat, repeat;"> 

<div class="container">
	<div class="">
		<!-- header -->
		<nav class="navbar navbar-light">
			<img src="https://www.pngarts.com/files/3/Logo-PNG-Transparent-Image.png" height= "150" width= "50" class="img-fluid" alt="...">
			<h3>New Article Screen</h3>
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!--offcanvas  -->
			<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavbarLabel">New Article Screen</h5>
					<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="./landing_screen.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./registration_screen.php">Register</a>
						</li>
						<?php echo '<br>'?>
						<form class="d-flex">
							<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success" type="submit">Search</button>
						</form>
				</div>
			</div>
		</nav>

		<!-- body -->
		<div class="container py-4">
			<div class="card shadow-sm">
				<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
					<title>
						Placeholder
					</title>
					<rect width="100%" height="100%">
						
					</rect>
					<text x="46%" y="50%" fill="white">
						Thumbnail
					</text>
				</svg>

				<div class="card-body">
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				<div class="d-flex justify-content-between align-items-center">
					<div class="btn-group">
					<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
					<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
					</div>
					<small class="text-muted">9 mins</small>
				</div>
				</div>
			</div>
		</div>

		<!-- Featured posts -->
		<div class="row mb-2">
    		<div class="col-md-6">
      			<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static" style="background-color: white">
						<strong class="d-inline-block mb-2 text-primary">World</strong>
						<h3 class="mb-0">Featured post</h3>
						<div class="mb-1 text-muted">Nov 12</div>
						<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="stretched-link">Continue reading</a>
					</div>
					<div class="col-auto d-none d-lg-block">
						<svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static" style="background-color: white">
						<strong class="d-inline-block mb-2 text-success">Design</strong>
						<h3 class="mb-0">Post title</h3>
						<div class="mb-1 text-muted">Nov 11</div>
						<p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="stretched-link">Continue reading</a>
					</div>
					<div class="col-auto d-none d-lg-block">
						<svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
					</div>
				</div>
			</div>
  		</div>
  
		<!-- upload article -->
		<div class="row mb-2">
			<div class="col">
				<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static" style="background-color: white">
						<strong class="d-inline-block mb-2 text-primary">Write an Article</strong>
						<h3 class="mb-0">Featured post</h3>
						<div class="mb-1 text-muted">[Indicate Date]</div>
						<p class="card-text mb-auto">You can add an article by inputting your thoughts in the box.</p>

						<!-- POST AN ARTICLE -->
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
							<div class="col-12 my-2">
								<label for="postArticle" class="form-label">Article</label>
								<input type="text" class="form-control"  id="postArticle" name="postArticle" placeholder="Write an Article">
								<!-- submit button -->
								<div class="col-12 my-2">
									<button class="btn btn-primary" type="submit">Post</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!--  includes the articles from another php file [articles.php] once -->
		<!--Upload File-->
		<div class="row mb-2">
			<div class="col">
				<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static" style="background-color: white">
						<strong class="d-inline-block mb-2 text-primary">Upload an Article</strong>
						<h3 class="mb-0">Featured post</h3>
						<div class="mb-1 text-muted">[Indicate Date]</div>
						<p class="card-text mb-auto">
							You can add an article by uploading it to this website.
						</p>
						<p class="text-justified">
							('pdf', 'docx', 'doc', 'docs', 'txt', 'ppt', 'pptx', 'odp', 'key')*
						</p>
						<!-- POST AN ARTICLE -->
						<form action="upload_files.php" method="POST" enctype="multipart/form-data">
  							<input type="file" name="file">
  								<button type="submit" name="submit">
  									Upload
  								</button>
							</form>
					</div>
				</div>
			</div>
		</div>

		<?php include_once './articles.php' ?>
		<?php echo '<br> <br>'?>
		
		<div class="nav-scroller px-3 mb-2">
			<nav class="blog-pagination" aria-label="Pagination">
				<a class="btn btn-outline-primary" href="#">Older</a>
				<a class="btn btn-outline-secondary disabled">Newer</a>
			</nav>
		</div>
	</div>
</div>
</body>
</html>