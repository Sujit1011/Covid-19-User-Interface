<!DOCTYPE html>
<html>
	<head>
		<?php include 'link.php' ?>
		<?php include 'style.php' ?>
		<title>Display | Corona Virus</title>
	</head>
	<body>
			<nav class="navbar navbar-expand-lg nav_style p-3">
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
	
		<div class="container-fluid bg-light p-5 text-center ">
			<h1>Corona Virus Tracker</h1>
			<h5>A Software that keep track of all the Corona Virus cases across India.</h5>
		</div>
		
		
<section class="corona_update bg-light">
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
</section>
		
		
		<div class="corona_update container-fluid">
			<div class="row">
				<div class="col-lg col-md col-12 order-lg-1 order-2">
				<table class="table table-bordered table-striped text-center">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Sl. no.</th>
						<th scope="col">States / UT</th>
						<th scope="col">Total Cases</th>
						<th scope="col">Active Cases</th>
						<th scope="col">Recovered</th>
						<th scope="col">Deceased</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$file = file_get_contents('https://api.covid19india.org/data.json');
						$data = json_decode($file,true);
//						echo "<pre>";
//						print_r($data);
//						echo "</pre>";
						$statescount = count($data['statewise']);
						//echo $data['statewise'][1]['state'];
						$i = 1;
						$a = 1;
						while($i < $statescount)
						{ 
							if($data['statewise'][$i]['confirmed'] != 0)
							{
					
							?>
						
						<tr>
							<td><?php echo $a."<br>";?></td>
							<td><?php echo $data['statewise'][$i]['state']."<br>";?></td>
							<td><?php echo $data['statewise'][$i]['confirmed']."<br>";?>
								<?php
						 			if( $data['statewise'][$i]['deltaconfirmed'] != 0){
								?>
							<small class="text-danger pl-2"><i class="fas fa-arrow-up"><?php echo $data['statewise'][$i]['deltaconfirmed'] ?></i></small><?php }?>
							</td>
							<td><?php echo $data['statewise'][$i]['active']."<br>";?>
							</td>
							<td><?php echo $data['statewise'][$i]['recovered']."<br>";?>
								<?php
						 			if( $data['statewise'][$i]['deltarecovered'] != 0){
								?>
							<small class="text-danger pl-2"><i class="fas fa-arrow-up"><?php echo $data['statewise'][$i]['deltarecovered'] ?></i></small><?php }?>
							</td>
							<td><?php echo $data['statewise'][$i]['deaths']."<br>";?>
								<?php
						 			if( $data['statewise'][$i]['deltadeaths'] != 0){
								?>
							<small class="text-danger pl-2"><i class="fas fa-arrow-up"><?php echo $data['statewise'][$i]['deltadeaths'] ?></i></small><?php }?>
							</td>
						</tr>

						<?php }	$i++;
								$a++;

						} 
					?>
					
					
						
					
				</tbody>
			</table>
				
			</div>
			<div class="col-lg col-md col-12 order-lg-2 order-1">
			
				<form method="get" action="display.php">
					<select name="district">
						<option>--------------------------- Select State ---------------------------</option>
						<?php						
						if(1)
						{
							$file1 = file_get_contents('https://api.covid19india.org/v2/state_district_wise.json');
							$data1 = json_decode($file1,true);
							$statescount1 = count($data1);
							
							$i = 0;
							while($i < $statescount1)
							{
								echo "<option value=".$i.">". $data1[$i]['state'] ."</option>";
								$i++;
							}
						}
						?>				
					</select>
					<input type="submit" name="show_dowpdown_value" value="show" class="btn btn-primary"/>
				</form>			
				<table class="table table-bordered table-striped text-center mt-3">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Sl. no.</th>
						<th scope="col">Districts</th>
						<th scope="col">Total Cases</th>
						<th scope="col">Active Cases</th>
						<th scope="col">Recovered</th>
						<th scope="col">Deceased</th>
					</tr>
				</thead>
				<tbody>
					<?php
	$file1 = file_get_contents('https://api.covid19india.org/v2/state_district_wise.json');
	$data1 = json_decode($file1,true);

	if (isset($_GET['show_dowpdown_value'])) 
	{
		$dis = $_GET['district'];
		
		//$statescount1 = count($data1);
		$distcount = count($data1[$dis]['districtData']);
		
		$a = 1;
		$i = 0;
				
		while($i < $distcount)
		{	?>

<tr>
	<td><?php echo $a."<br>";?></td>
	<td><?php echo $data1[$dis]['districtData'][$i]['district']."<br>";?></td>
	<td><?php echo $data1[$dis]['districtData'][$i]['confirmed']."<br>";?></td>
	<td><?php echo $data1[$dis]['districtData'][$i]['active']."<br>";?></td>
	<td><?php echo $data1[$dis]['districtData'][$i]['recovered']."<br>";?></td>
	<td><?php echo $data1[$dis]['districtData'][$i]['deceased']."<br>";?></td>
</tr> 

<?php $a++; $i++;		 
		}
	}
?>
				</tbody>
				</table>
				
			</div>
				
			</div>
		</div>
		
		
		<?php include 'link1.php' ?>		
		<script type="text/javascript">
			$('.count').counterUp({
				delay: 10,
				time: 3000		
			})		</script>
		
		
	</body>
</html>