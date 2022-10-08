<link href="//fonts.googleapis.com/css?family=GFS+Neohellenic:400,400i,700,700i&amp;subset=greek" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1>Home Loan Application</h1>
		</div>
		<!--//header-->
		<!--main-->
	<div class="agileits-register">
		<form action="#" method="post">
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Name :</span>
					<input type="text" name="Name" placeholder="Your Name" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid">
					<span>Email :</span>
					<input type="email" name="Email" placeholder="Your E-mail" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Phone Number :</span>
					<input type="text" name="phone Number" placeholder="Your Phone Number" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Address :</span>
					<input type="text" name="address" placeholder="Address" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					
					<input type="text" name="address" placeholder="Street" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					
					<input type="text" name="address" placeholder="City" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					
					<input type="text" name="address" placeholder="ZipCode" required=""/>
					<div class="clear"> </div>
				</div>
				
				<div class="w3_modal_body_grid">
					<span>Details For :</span>
					<select id="w3_country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">Select</option>
						<option value="null">Primary Residence</option>   
						<option value="null">Secondary Residence</option>   
						<option value="null">Investment</option>   						
					</select>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Date Of Apply :</span>
					<input class="date" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}" required="" />
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid">
					<h4>Are you represented by a Realtor?</h4>
					
						<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>Yes</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>No</label>
						</div>
						<div class="clear"> </div>
					
					<div class="clear"> </div>
				</div>
				
				<div class="w3_modal_body_grid">
				
				<input type="submit" value="Apply Now" />
				<div class="clear"></div>
			</form>
		</div>
		
		<!--//main-->
		
	</div>
	<!--footer-->
		<div class="footer">
			<h2>&copy; 2018 Home Loan Application Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></h2>
		</div>
		<!--//footer-->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script>
<!-- //Calendar -->		

</body>
</html>