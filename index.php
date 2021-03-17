<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include 'link.php' ?>
		<?php include 'style.php' ?>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg nav_style p-3 sticky-top">
  <a class="navbar-brand pl-5" href="#">Corona Virus</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
<!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
-->
<!--
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
-->
    </ul>
<!--
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
-->
  </div>
</nav>

<div class="container main_header">
	<div class="row w-100 h-100">
		<div class=" col-lg-5 col-md-5 col-12 order-lg-1 order-2 ">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="image/virus.png" width="300" height="300" alt="Image">
			</div> 
		</div>
		<div class=" col-lg-7 col-md-7 col-12 order-lg-2 order-1 ">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe &amp; Fight Together Against Corona Virus.</h1>
			</div>
		</div>
	</div>	
</div>

<!--*********************************Corona latest update**************************************************-->
<section class="corona_update">
	<div class="mb-3">
		<h3 class="text-uppercase text-center">Corona Virus Updates</h3>
	</div>
	<div class="d-flex justify-content-around align-items-center">
		<?php
			$file = file_get_contents('https://api.covid19india.org/data.json');
			$data = json_decode($file,true); 
		?>
		
		<div>
			<h1 class="count"><?php echo $data['statewise'][0]['confirmed']."<br>";?></h1>
			<p>Confirmed Cases</p>
		</div>
		<div>
			<h1 class="count"><?php echo $data['statewise'][0]['active']."<br>";?></h1>
			<p>Active cases</p>
		</div>
		<div>
			<h1 class="count"><?php echo $data['statewise'][0]['recovered']."<br>";?></h1>
			<p>Cured/Discharged</p>
		</div>
		<div>
			<h1 class="count"><?php echo $data['statewise'][0]['deaths']."<br>";?></h1>
			<p>Deaths</p>
		</div>
	</div>
	<div class="bu text-center">
		<a href="./display.php"><button type="button" class="btn btn-primary">See Details</button></a>
	</div>
</section>

<!--**********************************about section********************************************-->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> About Coronavirus</h1>
	</div>
	<div class="row pt-5 ">
		<div class="col-lg-5 col-md-6 col-12 ml-5">
		<img src="image/about.jpg" alt="corona_about"class="img-fluid">		
		</div>

		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is CoronaVirus ?</h2>
			<p>Coronaviruses are a family of viruses that range from the common cold to MERS coronavirus, which is Middle East Respiratory Syndrome coronavirus and SARs, Severe acute respiratory syndrome coronavirus. </p>
		</div>
	</div>	
</div>
<!--*********************************** corona symptoms ******************************************-->
<div class="container-fluid pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> Coronavirus Symptoms</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
				<img src="image/cough.png" alt="cough" class="img-fluid" width="120" height="120">
				<figcaption> Cough </figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
				<img src="image/flu%20(1).png" alt="Running Nose" class="img-fluid" width="120" height="120">
				<figcaption> Runny Nose </figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
				<img src="image/fever.png" alt="Fever" class="img-fluid" width="120" height="120">
				<figcaption> Fever </figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
				<img src="image/patient.png" alt="Sick" class="img-fluid" width="120" height="120">
				<figcaption> Sick </figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
				<img src="image/sleep.png" alt="Tiredness" class="img-fluid" width="120" height="120">
				<figcaption> Tiredness </figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
				<img src="image/coronavirus.png" alt="Difficulty Breathing (severe cases)" class="img-fluid" width="120" height="120">
				<figcaption> Difficulty Breathing (severe cases) </figcaption>
			</figure>
		</div>
	</div>
</div>

<!--******************************** Prevention against coronavirus**************************************-->

<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>6 steps Prevention Against Corona-Virus</h1>
	</div>
	<div class="container">
		<div class="row">
					
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="image/hand-wash.png" alt="Wash" class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Wash your hand regularly for 20 seconds, with soap and water or alcohol-based hand rub.</p>
					</div>
				</div>
			</div><div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="image/mask.png" alt="Wash" class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.</p>
					</div>
				</div>
			</div><div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="image/quarantine.png" alt="Wash" class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Avoid close contact(1 meter or 3 feet) with people who are unwell.</p>
					</div>
				</div>
			</div><div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="image/stay-home.png" alt="Wash" class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay home and self-isolate from others in the household if you feel unwell.</p>
					</div>
				</div>
			</div><div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="image/television.png" alt="Wash" class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay informed by watching news &amp; follow the recommended practices.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="image/first-aid-kit.png" alt="Wash" class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>If you have fever, cough and difficulty breathing, seek medical care early.</p>
					</div>
				</div>
			</div>
			
			
			
		</div>
	</div>
</div>

<!--*****************************************************Contact************************************************-->
<div class="container-fluid pt-5 pb-5" id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Contact</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
					<form>
					 <div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" name="name" placeholder="Name" autocomplete="off" required>
					  </div>
					  <div class="form-group">
						<label >Email</label>
						<input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
					  </div>
					  <div class="form-group">
						<label>Mobile</label>
						<input type="number" class="form-control" name="mobile" placeholder="Mobile" autocomplete="off" required>
					  </div>

					  <div class="form-group">
						<label>Select Symptoms</label><br>
						<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
							<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold"><label class="custom-control-label" for="customcheckbox1">Cold</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
							<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever"><label class="custom-control-label" for="customcheckbox2">Fever</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
							<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath"><label class="custom-control-label" for="customcheckbox3">Difficult In Breath</label>
						</div>
						<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
							<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired"><label class="custom-control-label" for="customcheckbox4">Feeling Week</label>
						</div>
					  </div>
					  <div class="form-group">
						<label for="exampleFormControlTextarea1">Example textarea</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary">Sign in</button>
					</form>
			</div>
		</div>
	</div>
</div>

<!--******************************* top cursor*******************************-->
<!--<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>-->



<!--*******************************************Footer*****************************************************-->
<div class="mt-5">
	<div class="footer_style text-white text-center container-fluid">
		<p>Copyright &copy; with &hearts;</p>
	</div>
</div>


<script type="text/javascript">
	$('.count').counterUp({
		delay: 10,
		time: 3000		
	})		</script>

<!--

<script type="text/javascript">
	$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });
</script>
-->


	</body>
</html>