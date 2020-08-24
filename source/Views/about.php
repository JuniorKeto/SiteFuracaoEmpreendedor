<?php $v->layout("templates/template", ["title" => "About"]) ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?= url(IMG . "bg_5.jpg") ?>);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
	<div class="row no-gutters slider-text align-items-end justify-content-center">
		<div class="col-md-9 ftco-animate mb-5 text-center">
		<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
		<h1 class="mb-0 bread">About Us</h1>
		</div>
	</div>
	</div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-6 d-flex align-items-stretch">
					<div class="img img-3 w-100 d-flex justify-content-center align-items-center" style="background-image: url(<?= url(IMG . "about-1.jpg") ?>); position: relative;">
						<a href="https://vimeo.com/45830194" class="play-video popup-vimeo d-flex align-items-center justify-content-center">
							<span class="fa fa-play"></span>
			</a>
					</div>
				</div>
				<div class="col-md-6 wrap-about ftco-animate">
					<div class="bg-light px-3 px-md-5 py-5 ">
				<div class="heading-section">
				<span class="subheading">Welcome to Law Firm</span>
				<h2 class="mb-3">Why to Put Trust Your Trust In Law Firm</h2>

				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
				</div>

				<div class="row">
				<div class="col-lg-6">
					<div class="services d-flex w-100">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-lawyer"></span>
								</div>
								<div class="text pl-2">
									<h2>Expert Attorneys</h2>
									<p>A small river named Duden flows by their place and supplies</p>
								</div>
							</div>
				</div>
				<div class="col-lg-6">
					<div class="services d-flex w-100">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-discount"></span>
								</div>
								<div class="text pl-2">
									<h2>Great Discount</h2>
									<p>A small river named Duden flows by their place and supplies</p>
								</div>
							</div>
				</div>
				<div class="col-lg-6">
					<div class="services d-flex w-100">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-auction"></span>
								</div>
								<div class="text pl-2">
									<h2>Legal Advisory</h2>
									<p>A small river named Duden flows by their place and supplies</p>
								</div>
							</div>
				</div>
				<div class="col-lg-6">
					<div class="services d-flex w-100">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-handcuffs"></span>
								</div>
								<div class="text pl-2">
									<h2>Quick Charges</h2>
									<p>A small river named Duden flows by their place and supplies</p>
								</div>
							</div>
				</div>
				</div>
			</div>

				</div>
			</div>
		</div>
	</section>

<?= $v->insert("templates/components/carousel")  ?>
	
<?= $v->insert("templates/components/consult") ?>

    