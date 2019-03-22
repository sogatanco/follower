<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/odometer-theme-car.css">
	<script   src="http://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="<?php echo base_url()?>asset/js/odometer.js"></script>
	<script src="//cdn.steemjs.com/lib/latest/steem.min.js"></script>	
	<title>Live Count</title>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">Live Count </a>
		</div>
	</nav>

	<div class="container">
		<div class="row mt-5">
			<div class="col-sm-6">
				<div class="card text-center">
					<div class="card-header">
						Following count
					</div>
					<div class="card-body">
						<div id="following" class="odometer"></div>
					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card text-center">
					<div class="card-header">
						Follower count
					</div>
					<div class="card-body">
						<div id="follower" class="odometer"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
		$(document).ready(function(){
			
			setInterval(function() { 
				steem.api.getFollowCount('team2dev', function(err, result) {	
					$('#following').html(result.following_count);
					$('#follower').html(result.follower_count);
				});	
			}, 1000); 
			// 1000 is 1 second
		})
	</script>
</html>