<?php
include 'header.php';
?>
<?php
if(isset($_SESSION['success'])){
?>
<!-- <div class="row justify-content-center my-5">
    <div class="col-5">
<div class=" alert alert-success alert-dismissible fade show" role="alert">
  <strong>hey!</strong> <?php echo $_SESSION['success'];?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
</div> -->
<?php
}
?>


<!-- Intro Three -->
<section id="home" class="intro intro-bg bg-overlay parallax">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 caption-two-panel ml-auto pt-5">
				<div class="intro-caption mt-5">
				<h1 class="text-white mb-2">It's not really hard to stand out in crowd</h1>
				<p class="text-white mb-4"> These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>
				<a class="btn btn-primary text-white mr-3">Explore More</a>
			</div>
		</div>
	</div>
</section>

<!-- Info block 1 -->
<section id="services" class="info-section text-white bg-right bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="head-box">
					<h2 class="font-abril ">Services We offered!</h2>
				</div>
				<div class="three-panel-block mt-5">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="service-block mb-5">
								<i class="icon-box mb-3 float-left w-100"><img src="img/icons/scissors.png" class="img-fluid"></i>
								<h3 class="text-primary">Scissor Cut</h3>
								<p>Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="service-block mb-5">
								<i class="icon-box mb-3 float-left w-100"><img src="img/icons/razor-1.png" class="img-fluid"></i>
								<h3 class="text-primary">Razor Cut</h3>
								<p>Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="service-block mb-5">
								<i class="icon-box mb-3 float-left w-100"><img src="img/icons/brush.png" class="img-fluid"></i>
								<h3 class="text-primary">Head Shave</h3>
								<p>Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="service-block">
								<i class="icon-box mb-3 float-left w-100"><img src="img/icons/hair-clip.png" class="img-fluid"></i>
								<h3 class="text-primary">Clipper Cut</h3>
								<p>Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<!-- Content block 1 -->
<section id="about" class="copy-content-sec sec-bg-02 h-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12 copy-container ml-auto">
				<div class="copy-content pr-4">
					<h2 class="font-abril text-primary">
						Who We Are
					</h2>
					<p class="lead ml-2">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
					<p class="ml-2">
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<p class="mt-4 ml-2">
						<a href="#" class="text-primary">Read More</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Info block 2 -->
<section id="price" class="info-section sec-bg-03 bg-overlay">
	<div class="container text-white">
		<div class="head-box text-center mb-5">
			<h2 class="font-abril">Our Jaw Drop Prices</h2>
		</div>
		<div class="three-panel-block my-4">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 pl-md-5 mb-4">
					<div class="service-block-bg text-center p-3">
						<div class="price-count font-abril"><span>$</span>39</div>
						<h3>Haircut</h3>
						<p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 pr-md-5 mb-4">
					<div class="service-block-bg text-center p-3">
						<div class="price-count font-abril"><span>$</span>27</div>
						<h3>Shave</h3>
						<p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 pl-md-5 mb-4">
					<div class="service-block-bg text-center p-3">
						<div class="price-count font-abril"><span>$</span>20</div>
						<h3>Moustache </h3>
						<p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 pr-md-5">
					<div class="service-block-bg text-center p-3">
						<div class="price-count font-abril"><span>$</span>15</div>
						<h3>Beard Trim</h3>
						<p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Testimonial Block 01-->
<section id="testimonial" class="testimonial-section sec-bg-04 py-5 h-100">
	<div class="container">
		<div class="row">
			<div class="head-box text-center mb-3 col-md-12 mt-5">
				<h2 class="font-abril">What Our Clients Says About Us</h2>
			</div>
		</div>
		<div class="single-testimonial">
		  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		    <div class="carousel-inner pt-5" role="listbox">
		      <div class="carousel-item active">
		        <div class="testimonial-box text-center">
					<div class="testimonial-content w-100 bg-faded">
						<p class="mb-0"><i class="fa fa-quote-left fa-3x" aria-hidden="true"></i></p>
						<p class="lead font-abril">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<div class="testimonial-footer">
							<h4 class="mt-2 mb-0 text-primary">Gerald Montgomery</h4>
							<p>-United States</p>
						</div>
					</div>
				</div>
		      </div>
		      <div class="carousel-item">
		        <div class="testimonial-box text-center">
					<div class="testimonial-content w-100 bg-faded">
						<p class="mb-0"><i class="fa fa-quote-left fa-3x" aria-hidden="true"></i></p>
						<p class="lead font-abril">"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet.</p>
						<div class="testimonial-footer">
							<h4 class="mt-2 mb-0 text-primary">Harper Robertson</h4>
							<p>-United States</p>
						</div>
					</div>
				</div>
		      </div>
		    </div>
		    <div class="navigator-box">
		    	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			      <span class="fa fa-angle-left" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			      <span class="fa fa-angle-right" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
		    </div>
		  </div>
		</div>
	</div>
</section>

<!-- Contact Block -->
<section id="contact" class="contact-section h-100 bg-dark">
	<div id="map" class="bg-overlay"></div>
	<div class="container py-5">
		<div class="col-lg-8 col-md-6 col-sm-10 form-sec bg-white my-5 p-5 mx-auto">
				<form action="data_code.php" class="" method="POST">
				  <h2 class="mb-4">Book Now!</h2>
				  <div class="row">
				  	<div class="col-md-6">
						<div class="form-group">
							<label class="sr-only" for="formGroupExampleInput">Full Name</label>
							<input name="full_name" class="form-control" id="formGroupExampleInput" placeholder="Full Name" onfocus="this.placeholder=''" onblur="this.placeholder='Full Name'" type="text">
						</div>
				  	</div>
				  	<div class="col-md-6">
						<div class="form-group">
							<label class="sr-only" for="formGroupExampleInput2">Phone Number</label>
							<input name="p_no" class="form-control" id="formGroupExampleInput2" placeholder="Phone Number" onfocus="this.placeholder=''" onblur="this.placeholder='Phone Number'" type="text">
						</div>		
				  	</div>
				  </div>
				  <div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="sr-only" for="formGroupExampleInput2">Email Address</label>
							<input name="email_address" class="form-control" id="formGroupExampleInput2" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder='Email Address'" type="email">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="sr-only" for="formGroupExampleInput2">Address</label>
							<input name="address" class="form-control" id="formGroupExampleInput2" placeholder="Enter Address" onfocus="this.placeholder=''" onblur="this.placeholder='Enter Address'" type="text">
						</div>
					</div>
				  </div>
				  <div class="row">
				  	<div class="col-md-12">
					
						<div class="form-group">
			
							<input type="submit" values="submit"  name="submitbtn" class="btn btn-primary btn-capsul px-4"/>
							<a href="view_data.php" class="btn btn-primary btn-capsul mx-4 px-4"> View Booking Data</a>

						</div>		
				  	</div>
				  </div>
			  </form>
			</div>
	</div>
</section>

<?php
include 'footer.php';
?>