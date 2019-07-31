
		<meta charset="utf-8">
	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="assets/register/fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/register/css/style.css')?>">
		<div class="main">
			<div class="wrapper">
            <form method="POST" action="add_user">
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>
	                	<div class="form-header">
	                		<div class="avartar">
								<a href="#">
									<img src="assets/register/images/avartar.png" alt="">
								</a>
								<div class="avartar-picker">
									<input type="file" name="file-1[]" id="file-1" class="inputfile" data-multiple-caption="{count} files selected" multiple />
									<label for="file-1">
										<i class="zmdi zmdi-camera"></i>
										<span>Choose Picture</span>
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="form-holder active">
									<input type="text" placeholder="First Name" class="form-control" name="fname">
								</div>
								<div class="form-holder">
									<input type="text" placeholder="Middle Name" class="form-control" name="mname">
								</div>
								<div class="form-holder">
									<input type="text" placeholder="Last Name" class="form-control" name="lname">
								</div>
							</div>
	                	</div>
	                	<div class="form-holder">
							<input type="text" placeholder="Email" class="form-control" name="email">
						</div>
						<div class="form-holder">
							<input type="password" placeholder="Create a password" class="form-control" name="password">
						</div>
	                </section>
	                
	                  
					<!-- SECTION 2 -->
	                <h4></h4>
	                <section>
                		<div class="grid">
                			<div class="row">
                				
	                    <div class="form-row">
	                    	<div class="form-holder">
								<input type="number" placeholder="Mobile Number" class="form-control" name="contact">
							</div>
							<div class="form-holder">
								<input type="date"  class="form-control" name="date">
							</div>
							
	                    </div>
	                            <div class="form-row">
	                    	<div class="form-holder">
								<input type="text" placeholder="Nationality" class="form-control" name="nationality">
							</div>
							<div class="form-holder">
								<input type="text"  placeholder="Address" class="form-control" name="address">
							</div>
							
	                    </div>


	                
							
							
	       
	                   
                			</div>
                			
                		</div>
	                </section>

	                <!-- SECTION 3 -->
	                <h4></h4>
	                <section>
						
	                    <div class="form-row">
	                    	<div class="form-holder">
								<input type="text" placeholder="Street Name" class="form-control" name="street_name">
							</div>
							<div class="form-holder">
								<input type="number" placeholder="Street Number" class="form-control" name="street_number">
							</div>
	                    </div>
	                    <div class="form-row">
	                    	<div class="form-holder">
								<input type="text" placeholder="City" class="form-control" name="city">
							</div>
							<div class="form-holder">
								<input type="text" placeholder="Country" class="form-control" name="country">
							</div>

	                    </div><div class="form-row">
	                    	
								<input type="submit" value="Add User" name="submit">
						
						
							
	                    </div>
	                </section>
            	</div>
            </form>
		</div>


		<script src="assets/register/js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="assets/register/js/jquery.steps.js"></script>

		<script src="assets/register/js/main.js"></script>
<!-- Template created and distributed by Colorlib -->
</div>