<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
	<div class="container">

		<div class="dropdown button-dropdown">
			<a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
				<span class="button-bar"></span>
				<span class="button-bar"></span>
				<span class="button-bar"></span>
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-header">Dropdown header</a>
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Separated link</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">One more separated link</a>
			</div>
		</div>

<!-- burger nav togle -->
		<div class="navbar-translate">
			<a class="navbar-brand text-warning" href="<?=base_url()?>" rel="tooltip" title="<?=$title_brand?>" data-placement="bottom" target="_blank">
				<span class="font_9 display-4 text-white mx-auto"> MYLS </span>
			</a>
			<button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
		   		<span class="navbar-toggler-bar top-bar"></span>
				<span class="navbar-toggler-bar middle-bar"></span>
				<span class="navbar-toggler-bar bottom-bar"></span>
		 	</button>
		</div>

	    <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="<?=$img_url?>blurred-image-1.jpg">
			<ul class="navbar-nav">

				<li class="nav-item">
					<a class="nav-link" href="../index.html">Back to Kit</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://github.com/creativetimofficial/now-ui-kit/issues">Have an issue?</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="<?=base_url()?>" target="_blank">
						<i class="fab fa-twitter"></i>
						<p class="d-lg-none d-xl-none">Twitter</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="<?=base_url()?>" target="_blank">
						<i class="fab fa-facebook-square"></i>
						<p class="d-lg-none d-xl-none">Facebook</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="<?=base_url()?>" target="_blank">
						<i class="fab fa-instagram"></i>
						<p class="d-lg-none d-xl-none">Instagram</p>
					</a>
				</li>

			</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->
