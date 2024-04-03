<!DOCTYPE html>
<html>
  <style>
	
	.sidenav {
		position: fixed;
		z-index: 1;
		height: 100%;
		top: 93px;
		left: 0;
		background-color: #dfdfdf;
		overflow-x: hidden;
	}

	.sidenav a {
		padding: 2px 10px 2px 10px;
		text-decoration: none;
		font-size: 15px;
		color: #797979;
		display: block;
		text-align: center;
		margin: 10px;
		transition: all 0.4s ease-in-out;
	}

	.sidenav a:hover {
	  color: #f1f1f1;
		background-image: linear-gradient(#0cc7a6, #059e86);
		border-radius: 3px;
		transition: all 0.4s ease-in-out;
	}
	
	.sidenav a.active {
	  color: #f1f1f1;
		background-image: linear-gradient(#0cc7a6, #059e86);
		border-radius: 3px;
	}

	.main {
		width: auto;
		overflow-x: scroll;
		margin-left: 99px;
	}
	
	.sticy{
		z-index:1;
		position:relative;
	}
	
	.table>thead>tr>th {
		border-bottom: 0px solid #ddd !important;
		background: black;
		color: #e8e8e8 !important;
	}
	
	.table>tbody>tr>td, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td {
		color: black !important;
	}
	@media (max-width: 875px) {
		.scorllpy{
			overflow-x:scroll;
		}
	}
	
	/*Profile Pic Start*/
	.picture-container{
		position: relative;
		cursor: pointer;
		text-align: center;
	}
	.picture{
		width: 106px;
		height: 106px;
		background-color: #999999;
		border: 4px solid #CCCCCC;
		color: #FFFFFF;
		border-radius: 50%;
		margin: 0px auto;
		overflow: hidden;
		transition: all 0.2s;
		-webkit-transition: all 0.2s;
	}
	.picture:hover{
		border-color: #2ca8ff;
	}
	.content.ct-wizard-green .picture:hover{
		border-color: #05ae0e;
	}
	.content.ct-wizard-blue .picture:hover{
		border-color: #3472f7;
	}
	.content.ct-wizard-orange .picture:hover{
		border-color: #ff9500;
	}
	.content.ct-wizard-red .picture:hover{
		border-color: #ff3b30;
	}
	.picture input[type="file"] {
		cursor: pointer;
		display: block;
		height: 100%;
		left: 0;
		opacity: 0 !important;
		position: absolute;
		top: 0;
		width: 100%;
	}

	.picture-src{
		width: 100%;
		
	}
	/*Profile Pic End*/
	
	.profilll{
		background-image: linear-gradient(#f0efef, #e6e6e6);
		border-radius: 20px;
		color: #d73732 !important;
	}
  </style>
<head>
		
<?php
	include_once("header.php");
?>

	<div class="container-fluid" style="margin-top: 93px;display: inline-block; width:100%;">
		<div class="sidenav">
		  <h2 style="font-size:16px;text-align: center;color: #666666;border-bottom: 1px solid #c7c7c7;padding:15px 10px;">Dashboard</h2>  
		  <a href="profile.php" class="profilll active"><i class="fa fa-user"></i></a>
		  <a href="listing.php">Listing</a>
		  <a href="add.php">Add</a>
		  <a href="password.php">Password</a>
		</div>

		<div class="main">
			<div class="container">
				<div class="main-body">
					<!-- Breadcrumb -->
					<nav aria-label="breadcrumb" class="main-breadcrumb" style="margin-top: 15px;">
						<ol class="breadcrumb">
						  <li style="color: #797777;font-size: 15px;">User Profile</li>
						</ol>
					</nav>
					<!-- /Breadcrumb -->

					<div class="row gutters-sm">
						<div class="col-md-4 pad-10">
						  <div class="card">
							<div class="card-body" style="margin-top: 20px;">
							  <div class="d-flex flex-column align-items-center text-center">
								<div class="container" style="width: auto;">
									<div class="picture-container">
										<div class="picture">
											<img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
											<input type="file" id="wizard-picture" class="">
										</div>
									</div>
								</div>
								<div style="margin-top: 25px;">
								  <h3 style="color: #5c5c5c;margin-bottom: 5px;">John Doe</h3>
								  <p class="text-secondary mb-1">Full Stack Developer</p>
								  <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
								</div>
							  </div>
							</div>
						  </div>
						</div>
						<div class="col-md-8 pad-10">
						  <div class="card mb-3">
							<div class="card-body" style="color: #333333;">
							  <div class="row">
								<div class="col-sm-3">
								  <h6 style="margin-bottom: 10px;font-weight: bold;font-size: 15px;color: #505050;"><i>Full Name</i></h6>
								</div>
								<div class="col-sm-9">Kenneth Valdez</div>
							  </div>
							  <hr style="margin-top: 5px !important;margin-bottom: 30px !important;">
							  <div class="row">
								<div class="col-sm-3">
								  <h6 style="margin-bottom: 10px;font-weight: bold;font-size: 15px;color: #505050;"><i>Email</i></h6>
								</div>
								<div class="col-sm-9">fip@jukmuh.al</div>
							  </div>
							  <hr style="margin-top: 5px !important;margin-bottom: 30px !important;">
							  <div class="row">
								<div class="col-sm-3">
								  <h6 style="margin-bottom: 10px;font-weight: bold;font-size: 15px;color: #505050;"><i>Mobile</i></h6>
								</div>
								<div class="col-sm-9">+91 816-9029</div>
							  </div>
							  <hr style="margin-top: 5px !important;margin-bottom: 30px !important;">
							  <div class="row">
								<div class="col-sm-3">
								  <h6 style="margin-bottom: 10px;font-weight: bold;font-size: 15px;color: #505050;"><i>Gendar</i></h6>
								</div>
								<div class="col-sm-9">
									<input type="radio" id="male" name="gender" value="male">
									<label for="male">Male</label><br>
									<input type="radio" id="female" name="gender" value="female">
									<label for="female">Female</label><br>
									<input type="radio" id="other" name="gender" value="other">
									<label for="other">Other</label>
								</div>
							  </div>
							  <hr style="margin-top: 5px !important;margin-bottom: 30px !important;">
							  <div class="row">
								<div class="col-sm-3">
								  <h6 style="margin-bottom: 10px;font-weight: bold;font-size: 15px;color: #505050;"><i>Address</i></h6>
								</div>
								<div class="col-sm-9">Bay Area, San Francisco, CA</div>
							  </div>
							  <hr style="margin-top: 5px !important;margin-bottom: 20px !important;">
							</div>
						  </div>
						</div>
					</div>
					
					<!-- Breadcrumb -->
					<nav aria-label="breadcrumb" class="main-breadcrumb" style="margin-top: 15px;">
						<ol class="breadcrumb text-center">
						  <a href="edit_profile.php"><i class="fa fa-sign-out"><button type="button" class="btn btn-primary">Edit</button></a>
						  <button type="button" class="btn btn-success">Save</button>
						</ol>
					</nav>
					<!-- /Breadcrumb -->
				</div>
			</div>
		</div>
	</div>
	
	
	
	<script src="assets/js/dd.js"></script>
	<script>
		$(document).ready(function(){
		// Prepare the preview for profile picture
			$("#wizard-picture").change(function(){
				readURL(this);
			});
		});
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>
	
<?php
	include_once("footer.php");
?>
