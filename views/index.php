<?php include_once '../helpers/helper.php'; ?>

<?php subview('header.php'); ?>
	<title>Flight Ticket Booking</title>
	<link rel="stylesheet" href="../assets/css/style.css">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<meta name="keywords" content="Flight Ticket Booking  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } ;</script>
		
<style>
	h1 {
		margin-top: 20px;
		color:cornflowerblue;
	}
</style>
	<!-- <h1>Flight Ticket Booking</h1> -->
	<div class="main-agileinfo">
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Round Trip</span></li>
					<li class="resp-tab-item"><span>One way</span></li>
					<!-- <li class="resp-tab-item"><span>Multi city</span></li>				 -->
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content roundtrip">
						<form action="#" method="post">
							<div class="from">
								<h3>From</h3>
								<input type="text" name="city" class="city1" placeholder="Type Departure City" required="">
							</div>
							<div class="to">
								<h3>To</h3>
								<input type="text" name="city" class="city2" placeholder="Type Destination City" required="">
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3>Depart</h3>
									<input  id="datepicker" name="Text" type="date" class="form-control" 
										style="width: 100%;" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
								<div class="return">
									<h3>Return</h3>
									<input  id="datepicker1" name="Text" type="date" class="form-control" 
										style="width: 100%;" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

								</div>
								<div class="clear"></div>
							</div>
							<div class="class">
								<h3>Class</h3>
								<select id="w3_country1" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">Economy</option>  
									<option value="null">Premium Economy</option>   
									<option value="null">Business</option>   
									<option value="null">First class</option>   						
								</select>

							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<div class="adults">
									<h3>Adult:(12+ yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="child">
									<h3>Child:(2-11 yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Search Flights">
						</form>						
					</div>		
					<div class="tab-1 resp-tab-content oneway">
						<form action="#" method="post">
							<div class="from">
								<h3>From</h3>
								<input type="text" name="city" class="city1" placeholder="Type Departure City" required="">
							</div>
							<div class="to">
								<h3>To</h3>
								<input type="text" name="city" class="city2" placeholder="Type Destination City" required="">
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3>Depart</h3>
									<input class="date form-control" id="datepicker2" name="Text" type="date" 
										style="width: 200px;" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
							</div>
							<div class="class">
								<h3>Class</h3>
								<select id="w3_country1" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">Economy</option>  
									<option value="null">Premium Economy</option>   
									<option value="null">Business</option>   
									<option value="null">First class</option>   						
								</select>

							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<div class="adults">
									<h3>Adult:(12+ yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="child">
									<h3>Child:(2-11 yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Search Flights">
						</form>	
								
					</div>
					<div class="tab-1 resp-tab-content multicity">
						
									<form action="#" method="post">
										<div class="from">
											<h3>From</h3>
											<input type="text" name="city" class="city1" placeholder="Type Departure City" required="">
										</div>
										<div class="to">
											<h3>To</h3>
											<input type="text" name="city" class="city2" placeholder="Type Destination City" required="">
										</div>
										<div class="clear"></div>
										<div class="date">
											<div class="depart">
												<h3>Depart</h3>
												<input class="date" id="datepicker3" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
												<span class="checkbox1">
													<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Flexible with date</label>
												</span>
											</div>
										</div>
										<div class="class">
											<h3>Class</h3>
											<select id="w3_country1" onchange="change_country(this.value)" class="frm-field required">
												<option value="null">Economy</option>  
												<option value="null">Premium Economy</option>   
												<option value="null">Business</option>   
												<option value="null">First class</option>   						
											</select>
										</div>
										<div class="clear"></div>
										<div id="loadMore">Add City+</div>
										<div id="showLess">Remove</div>
									</form>
				<div class="load_more">	
						<ul id="myList">
							<li>
			
								<div class="l_g spcl">
									<form action="#" method="post" class="blackbg">
										<div class="from">
											<h3>From</h3>
											<input type="text" name="city" class="city1" placeholder="Type Departure City" required="">
										</div>
										<div class="to">
											<h3>To</h3>
											<input type="text" name="city" class="city2" placeholder="Type Destination City" required="">
										</div>
										<div class="clear"></div>
										<div class="date">
											<div class="depart">
												<h3>Depart</h3>
												<input class="date" id="datepicker" name="Text" type="text" placeholder="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
												<span class="checkbox1">
													<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Flexible with date</label>
												</span>
											</div>
										</div>
										<div class="clear"></div>
									</form>
					
								</div>
								
							</li>
							<form action="#" method="post">
							<div class="numofppl">
								<div class="adults">
									<h3>Adult:(12+ yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="child">
									<h3>Child:(2-11 yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Search Flights">
							</form>
						</ul>
					</div>
					</div>
		
				</div>						
			</div>
		</div>
	</div>
	<div class="footer-w3l">
		<p class="agileinfo" style="color:white"> &copy; 2020 Flight Ticket Booking . All Rights Reserved</p>
	</div>
<?php subview('footer.php'); ?> 

		<script src="../assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});		
		</script>
		<script>
		$('.value-plus').on('click', function(){
			var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function(){
			var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
			if(newVal>=1) divUpd.text(newVal);
		});
		</script>
	<script>
	$(document).ready(function () {
		size_li = $("#myList li").size();
		x=1;
		$('#myList li:lt('+x+')').show();
		$('#loadMore').click(function () {
			x= (x+1 <= size_li) ? x+1 : size_li;
			$('#myList li:lt('+x+')').show();
		});
		$('#showLess').click(function () {
			x=(x-1<0) ? 1 : x-1;
			$('#myList li').not(':lt('+x+')').hide();
		});
	});
</script>
<!-- //load-more -->



