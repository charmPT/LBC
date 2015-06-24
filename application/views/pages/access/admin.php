<html>
<title> LBC Admin User Guide </title>
<head>

	<base href="http://docs.lbc.promotexter.com/" />  <!-- import image from folder -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="assets/js/jquery-2.1.1.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<style type="text/css"> 
.header-bg { 
	background: #f85032; /* Old browsers */
background: -moz-linear-gradient(-45deg, #f85032 0%, #f02f17 18%, #f02f17 18%, #f16f5c 50%, #f6290c 100%, #e73827 100%, #f6290c 101%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#f85032), color-stop(18%,#f02f17), color-stop(18%,#f02f17), color-stop(50%,#f16f5c), color-stop(100%,#f6290c), color-stop(100%,#e73827), color-stop(101%,#f6290c)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #f85032 0%,#f02f17 18%,#f02f17 18%,#f16f5c 50%,#f6290c 100%,#e73827 100%,#f6290c 101%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #f85032 0%,#f02f17 18%,#f02f17 18%,#f16f5c 50%,#f6290c 100%,#e73827 100%,#f6290c 101%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #f85032 0%,#f02f17 18%,#f02f17 18%,#f16f5c 50%,#f6290c 100%,#e73827 100%,#f6290c 101%); /* IE10+ */
background: linear-gradient(135deg, #f85032 0%,#f02f17 18%,#f02f17 18%,#f16f5c 50%,#f6290c 100%,#e73827 100%,#f6290c 101%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f85032', endColorstr='#f6290c',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}
.page-header h1 span{
	color: #FFF;
}
.panel-heading a {
	color: #373737
}
.panel-body a {
	color: #373737
}
#dashboard {
	color: #373737
}

</style>
</head>

<body>

	<!-- HEADER -->
	<div class = "container">
		<div class = "page-header">
				<h1> <b><span class="list-group-item header-bg" > LBC Admin User Guide </span></b> </h1>
		</div>
	</div>

		<!-- MENU -->
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="list-group">
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
	    					<div class="panel-heading">
	    						<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"> <b> DASHBOARD </b> </a>
	      					</div>
						</div>

						<div class="panel panel-default">
	    					<div class="panel-heading">
	    						<a data-toggle="collapse" data-parent="#accordion" href="#collapsesix"> <b> API </b> </a>
	    					</div>
	    						<div id="collapsesix" class="panel-collapse collapse">
	      							<div class="panel-body">		
		    							<ul>
						    				<li> <a href="<?php echo site_url("sample/page_admin"); ?>#SelectDates"> Select Dates </a> </li>
						    				<li> <a href="<?php echo site_url("sample/page_admin"); ?>#Download"> Download </a> </li>
						    				<li> <a href="<?php echo site_url("sample/page_admin"); ?>#AllCountries"> All Countries </a> </li>
						    			</ul>
			      					</div>
								</div>
						</div>								

						<div class="panel panel-default">
	    					<div class="panel-heading">
	    						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <b> CAMPAIGNS </b> </a>
	      					</div>
								<div id="collapseOne" class="panel-collapse collapse">
	      							<div class="panel-body">
	        							<ul> 
							        		<li> <a href="<?php echo site_url("sample/page_admin"); ?>#NewCampaign"> New Campaign </a> </li>
							        			<ul>
							        				<li> <a href="<?php echo site_url("sample/page_admin"); ?>#CampaignSummary"> Campaign Summary </a> </li>
							        			</ul>
							        		<li> <a href="<?php echo site_url("sample/page_admin"); ?>#LiveCampaign"> Live Campaigns </a> </li>
											<li> <a href="<?php echo site_url("sample/page_admin"); ?>#SentCampaign"> Sent Campaigns</a> </li>
											<li> <a href="<?php echo site_url("sample/page_admin"); ?>#DraftCampaign"> Draft Campaigns</a> </li>
										</ul>
									</div>
								</div>
						</div>	

						<div class="panel panel-default">
								<div class="panel-heading">
	    							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> <b> INBOX </b> </a>
	      					</div>
								<div id="collapseTwo" class="panel-collapse collapse">
	      							<div class="panel-body">
	        							<ul> 
	        								<li> <a href="<?php echo site_url("sample/page_admin"); ?>#Inbox"> Inbox </a> </li>
							        		<ul>
								        		<li> <a href="<?php echo site_url("sample/page_admin"); ?>#MessageHistory"> Message History </a> </li>
								        		<li> <a href="<?php echo site_url("sample/page_admin"); ?>#QuickSMS"> Quick SMS </a> </li>
											</ul>
										</ul>
									</div>
								</div>
						</div>

						<div class="panel panel-default">
	    					<div class="panel-heading">
	    						<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> <b> PHONEBOOK </b> </a>
	      					</div>
								<div id="collapseThree" class="panel-collapse collapse">
	      							<div class="panel-body">
	        							<ul> 
	        								<li> <a href="<?php echo site_url("sample/page_admin"); ?>#Phonebook"> Phonebook </a> </li>
	        									<ul>
	        										<li> <a href="<?php echo site_url("sample/page_admin"); ?>#AddContacts"> Add Contacts </a></li>
	        										<li> <a href="<?php echo site_url("sample/page_admin"); ?>#DownloadContacts"> Download Contacts </a></li>	
	        									</ul>
							        		<li> <a href="<?php echo site_url("sample/page_admin"); ?>#Groups"> Groups </a> </li>
											<li> <a href="<?php echo site_url("sample/page_admin"); ?>#UploadFile"> Upload File </a> </li>
											<li> <a href="<?php echo site_url("sample/page_admin"); ?>#Uploads"> Uploads </a> </li>
										</ul>
									</div>
								</div>
						</div>	

						<div class="panel panel-default">
	    					<div class="panel-heading">
	    						<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"> <b> REPORTS </b> </a>
	      					</div>
								<div id="collapseFour" class="panel-collapse collapse">
	      							<div class="panel-body">
	        							<ul> 
							        		<li> <a href="<?php echo site_url("sample/page_admin"); ?>#SMSTraffic"> SMS Traffic Report </a> </li>
							        			<ul>
							        				<li> <a href="<?php echo site_url("sample/page_admin"); ?>#GenerateReport"> Generate Report </a> </li>
												</ul>
											<li> <a href="<?php echo site_url("sample/page_admin"); ?>#CustomReport"> Custom Report </a> </li>	
												<ul>
							        				<li> <a href="<?php echo site_url("sample/page_admin"); ?>#AlertReport"> SMS Alert Reports per Product </a> </li>
													<li> <a href="<?php echo site_url("sample/page_admin"); ?>#Pamme'sReport"> SMS Report - Pamme's Format </a> </li>
													<li> <a href="<?php echo site_url("sample/page_admin"); ?>#StandardLogsReport"> Standard Logs Report </a> </li>
													<li> <a href="<?php echo site_url("sample/page_admin"); ?>#MonthlyReport"> SMS Monthly Reports </a> </li>
													<li> <a href="<?php echo site_url("sample/page_admin"); ?>#SMSReport"> SMS Traffic </a> </li>
												</ul>
										</ul>
									</div>
								</div>
						</div>

						<div class="panel panel-default">
	    					<div class="panel-heading">
	    						<a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"> <b> MANAGE ACCOUNT </b> </a>
	      					</div>
								<div id="collapseSeven" class="panel-collapse collapse">
	      							<div class="panel-body">
	        							<ul> 
							        		<li> <a href="<?php echo site_url("sample/page_admin"); ?>#ChangePassword"> Change Password </a> </li>
							        		<li> <a href="<?php echo site_url("sample/page_admin"); ?>#DepartmentUsers"> Department Users </a> </li>	
												<ul>
													<li> <a href="<?php echo site_url("sample/page_admin"); ?>#ManageUsers"> Manage Users </a> </li>	
													<li> <a href="<?php echo site_url("sample/page_admin"); ?>#AddNewUser"> Add New User </a> </li>	
												</ul>
										</ul>
									</div>
								</div>
						</div>				
					</div>
				</div>
			</div>	



				<!-- DETAILS -->

	<div class="col-sm-9">
		<h1 id="Dashboard"> <strong> Dashboard </strong> </h1>
		 <a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>        	
			<div class="span4">
                <div class="thumbnail">
                	<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/month.png"  style="width:70%;"> <br>
                		 <p> Displays month's traffic. </p> <br> 
	                	   	<div class="caption">
		                    	<!-- <p> Displays campaign name, filters and delivery status. </p> -->
	                    		<table class="table table-bordered table-striped">
									<thead>
							            <tr>
							                <th class="col-sm-2"><span>Field</span></th> 
							                <th class="col-sm-6"><span>Description</span></th>
							            </tr>
							        </thead>
							        <tbody>
							            <tr>
							                <td class="col-sm-1">Valid API</td>
							                <td class="col-sm-5"> Total number of Valid API sent this month </td>
							            </tr>

							            <tr>
							                <td class="col-sm-1">Rejected API</td>
							                <td class="col-sm-5"> Total number of Rejected API this month </td>
							            </tr>

							             <tr>
							                <td class="col-sm-1">SMS Blast Sent</td>
							                <td class="col-sm-5"> Total SMS Blast Sent this month </td>
							            </tr>

							            <tr>
							                <td class="col-sm-1">Total Cost</td>
							                <td class="col-sm-5"> Total Cost for Valid API and SMS Blast sent this month </td>
							            </tr>
							        </tbody>
								</table>
							</div>

					<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/today.png"  style="width:70%;"> <br>
            		 	<p> Displays today's traffic.</p> <br> 
	                	   	<div class="caption">
		                    	<!-- <p> Displays campaign name, filters and delivery status. </p> -->
	                    		<table class="table table-bordered table-striped">
									<thead>
							            <tr>
							                <th class="col-sm-2"><span>Field</span></th> 
							                <th class="col-sm-6"><span>Description</span></th>
							            </tr>
							        </thead>
							        <tbody>
							            <tr>
							                <td class="col-sm-1">Valid API</td>
							                <td class="col-sm-5"> Total number of Valid API sent today </td>
							            </tr>

							            <tr>
							                <td class="col-sm-1">Rejected API</td>
							                <td class="col-sm-5"> Total number of Rejected API today </td>
							            </tr>

							             <tr>
							                <td class="col-sm-1">SMS Blast Sent</td>
							                <td class="col-sm-5"> Total SMS Blast Sent today </td>
							            </tr>

							            <tr>
							                <td class="col-sm-1">Total Cost</td>
							                <td class="col-sm-5"> Total Cost for Valid API and SMS Blast sent today </td>
							            </tr>
							        </tbody>
								</table>
							</div>

						<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/latestcampaign.png"  style="width:70%;"> <br>
	                		 	<p> Displays latest campaigns.</p> <br> 
			                	   	<div class="caption">
				                    	<!-- <p> Displays campaign name, filters and delivery status. </p> -->
			                    		<table class="table table-bordered table-striped">
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Column</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									            <tr>
									                <td class="col-sm-1">Campaign Name</td>
									                <td class="col-sm-5"> Name of the campaign </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Status</td>
									                <td class="col-sm-5"> Status of the campaign </td>
									            </tr>
										    </tbody>
										</table>
									</div>	
				 </div>
		    </div>

		<h1 id="API"> <strong> API </strong> </h1>
		 	<h4 id="APICalls"> <strong> API Calls </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>        	
				<div class="span4">
	                <div class="thumbnail">
	                	<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/apicalls.png"  style="width:100%;"> <br>
	                		 <p> API calls. </p> <br> 
		                	   	<div class="caption">
			                    	<!-- <p> Displays campaign name, filters and delivery status. </p> -->
		                    		<table class="table table-bordered table-striped">
										<thead>
								            <tr>
								                <th class="col-sm-2"><span>Column</span></th> 
								                <th class="col-sm-6"><span>Description</span></th>
								            </tr>
								        </thead>
								        <tbody>
								            <tr>
								                <td class="col-sm-1"> SMS TXN ID </td>
								                <td class="col-sm-5"> SMS transaction ID </td>
								            </tr>

								            <tr>
								                <td class="col-sm-1"> Date Sent </td>
								                <td class="col-sm-5"> Date and time the API was sent </td>
								            </tr>

								             <tr>
								                <td class="col-sm-1"> Country </td>
								                <td class="col-sm-5"> Contact Country </td>
								            </tr>

								            <tr>
								                <td class="col-sm-1"> Recipient </td>
								                <td class="col-sm-5"> Message recipient of the message sent through API </td>
								            </tr>

								            <tr>
								                <td class="col-sm-1"> Sender ID </td>
								                <td class="col-sm-5"> Masked Sender ID used to send SMS </td>
								            </tr>

								            <tr>
								                <td class="col-sm-1"> Message </td>
								                <td class="col-sm-5"> SMS Content </td>
								            </tr>

								            <tr>
								                <td class="col-sm-1"> Track no </td>
								                <td class="col-sm-5"> Unique code provided to customers used monitor status of parcel </td>
								            </tr>

								            <tr>
								                <td class="col-sm-1"> Load no </td>
								                <td class="col-sm-5"> Load number of the API sent </td>
								            </tr>

								            <tr>
								                <td class="col-sm-1"> LBC Status </td>
								                <td class="col-sm-5"> Delivered, released to rep, picked up at branch</td>
								            </tr>

								            <tr>
								                <td class="col-sm-1"> Status </td>
								                <td class="col-sm-5"> </td>
								            </tr>

								            <tr>
								                <td class="col-sm-1"> Error Description </td>
								                <td class="col-sm-5"> Network operator from country of origin</td>
								            </tr>

								            <tr>
								                <td class="col-sm-1"> Operator </td>
								                <td class="col-sm-5"> </td>
								            </tr>

								            <tr>
								                <td class="col-sm-1"> Price </td>
								                <td class="col-sm-5"> Price per transaction </td>
								            </tr>
								        </tbody>
									</table>
								
									<table class="table table-bordered table-striped">
										<thead>
								            <tr>
								                <th class="col-sm-2"><span>Button</span></th> 
								                <th class="col-sm-6"><span>Description</span></th>
								            </tr>
								        </thead>
								        <tbody>
								            <tr>
								                <td class="col-sm-1"> Next </td>
								                <td class="col-sm-5">  </td>
								            </tr>

								            <tr>
								                <td class="col-sm-1"> Preview </td>
								                <td class="col-sm-5">  </td>
								            </tr>
										<tbody>
									</table>
								</div>	
					 </div>
		    	</div>

		    <h4 id="SelectDates"> <strong> Select Dates </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
			                  		<div class="caption">
				                    	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/selectdates.png" style="width:90%;"> </center> <br>
										 	<ol>
										 		<li> Select date from </li>
										 		<li> Select date to </li>
										 		<li> Click Filter </li>
										 	</ol>
										 	<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Parameter</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										           <tr>
										                <td class="col-sm-1">Date From</td>
										                <td class="col-sm-5">  </td>
										            </tr>
													
													<tr>
										                <td class="col-sm-1">Date To</td>
										                <td class="col-sm-5">  </td>
										            </tr>
										    	</tbody>
										    </table>
										    <table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Button</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Close</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Filter</td>
										                <td class="col-sm-5">  </td>
										            </tr>
										    	</tbody>
										    </table>		
									</div>
				                </div>
				            </div>		

			<h4 id="Download"> <strong> Download </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
			                  		<div class="caption">
				                    	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/download.png" style="width:50%;"> </center> <br>
										 	<ol>
										 		<li> Click Download </li>
										 			<p> Note: API calls will be downloaded in .csv file <p>
										 	</ol>
										 	<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Button</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Download</td>
										                <td class="col-sm-5">  </td>
										            </tr>
												</tbody>
										    </table>		
									</div>
				                </div>
				            </div>

			<h4 id="AllCountries"> <strong> All Countries </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
			                  		<div class="caption">
				                    	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/allcountries.png" style="width:50%;"> </center> <br>
										 	<p> Allows you to select country. </p>
									</div>
				                </div>
				            </div>	            		

		<h1 id="Campaign"> <strong> Campaign </strong> </h1>
			<h4 id="NewCampaign"> <strong> New Campaign </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
				                  	<div class="caption">
				                    	<ol> 
				                    		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/newcampaign.png" style="width:90%;"> </center> <br>
											<li> Select Product Name </li>
											<li> Fill out Campaign Name </li>
											<li> Select Sender ID </li>
												<p> Note: Sender IDs are pre-approved by Account Managers. </p>
											<li> Choose Recipients </li>
												<p> 
													a. Enter individual contact number/s, or <br> 
												    b. Select from Phonebook Groups 
												</p>
											<li> Fill out content on Message box </li>
												<ol>
													<p> 
														a. Create message <br>
														b. Use Template 
													</p> 
														<ol>
															<li> Click Use Template </li> 
															<li> Select template </li> <br>
																<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/template.png" style="width:80%;"> </center> <br>
																	<p> Note: Templates can be created at Admin </p>
																	<table class="table table-bordered table-striped">
									                					<thead>
																            <tr>
																                <th class="col-sm-2"><span>Column</span></th> 
																                <th class="col-sm-6"><span>Description</span></th>
																            </tr>
																        </thead>
																        <tbody>
																            <tr>
																                <td class="col-sm-1">Name</td>
																                <td class="col-sm-5"> <b> Required. </b> Name of template</td>
																            </tr>

																            <tr>
																                <td class="col-sm-1">Content</td>
																                <td class="col-sm-5"> <b> Required. </b> Content of template</td>
																            </tr>
																    	</tbody>
																    </table>
														</ol>		    	
															<p> c. Use tags </p> <br>
																<ol>
																	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/tags.png" style="width:50%;"> </center> <br>
																	<p> Note: You can add personalization at Admin </p>
																	<li> Click Insert tag drop-down menu </li> 
																	<li> Select tag or tags</li> <br>
																</ol>
																</ol>			
															<li> Select date and time if Campaign is a scheduled campaign or ignore Schedule </li> <br>
															<ul>
																<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/date.png" style="width:40%; height:40%">  
															    <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/time.png" style="width:40%; height:40%"> <br><br>
															</ul>
															<li> Click Next button </li> <br>
											<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Parameter</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Department</td>
										                <td class="col-sm-5"> <b> Required. </b> User Department </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Product</td>
										                <td class="col-sm-5"> <b> Required. </b> List of Product names for SMS Blast </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Campaign Name</td>
										                <td class="col-sm-5"> <b> Required. </b> Name of the campaign </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Sender ID</td>
										                <td class="col-sm-5"> <b> Required. </b> Masked sender used for SMS Blast </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Recipients</td>
										                <td class="col-sm-5"> <b> Optional. </b> Campaign recipients </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Phonebook Groups</td>
										                <td class="col-sm-5"> <b> Required. </b> Specific group of recipients the blast is intended for </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Message</td>
										                <td class="col-sm-5"> <b> Required. </b>  Content of the campaign </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Schedule</td>
										                <td class="col-sm-5"> <b> Optional. </b> Set date and time you wish to send the campaign  </td>
										            </tr>
										    	</tbody>
										    </table>	
										    <table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Action</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Next</td>
										                <td class="col-sm-5"> Proceed button </td>
										            </tr>
										    	</tbody>
										    </table>	
										</ol>				
									</div>								
								</div>
							</div>
						

			<h4 id="CampaignSummary"> <strong> Campaign Summary </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
			                  		<div class="caption">
				                    	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/campaignsummary.png" style="width:90%;"> </center> <br>
										 	<p> Summary of the campaign created. </p>
										 	<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Field</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										           <tr>
										                <td class="col-sm-1">Department</td>
										                <td class="col-sm-5"> User department </td>
										            </tr>
													
													<tr>
										                <td class="col-sm-1">Campaign Name</td>
										                <td class="col-sm-5"> Name of the SMS campaign </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Sender ID</td>
										                <td class="col-sm-5"> Masked sender used for SMS blast </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Message</td>
										                <td class="col-sm-5"> SMS Blast content </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Total Recipients</td>
										                <td class="col-sm-5"> Total number of campaign recipients </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">SMS Parts</td>
										                <td class="col-sm-5">  SMS parts count </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">SMS Count</td>
										                <td class="col-sm-5"> SMS character count </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Cost Estimate</td>
										                <td class="col-sm-5"> Estimated cost of campaign </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Start Time</td>
										                <td class="col-sm-5"> Start run time of the campaign </td>
										            </tr>
										    	</tbody>
										    </table>
										    <table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Action</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Save as Draft</td>
										                <td class="col-sm-5"> Campaign will be saved as draft </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Edit Campaign</td>
										                <td class="col-sm-5"> Edit campaign content, recipients, schedule etc </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Send Test SMS</td>
										                <td class="col-sm-5"> Send test campaign to test group </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Cancel</td>
										                <td class="col-sm-5"> Discard SMS campaign created </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Send Now</td>
										                <td class="col-sm-5"> Go live the SMS campaign </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Activate</td>
										                <td class="col-sm-5"> Activate scheduled campaign </td>
										            </tr>
										    	</tbody>
										    </table>		
									</div>
				                </div>
				            </div>	

			<h4 id="LiveCampaign"> <strong> Live Campaigns </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
			                  		<div class="caption">
				                    	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/livecampaign.png" style="width:90%;"> </center> <br>
										 	<p> List of campaigns that are currently being processed.  </p>
										 	<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										           <tr>
										                <td class="col-sm-1">Date Created</td>
										                <td class="col-sm-5">Date when the campaign was created </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Campaign Name</td>
										                <td class="col-sm-5"> Name of the SMS campaign </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Sender ID</td>
										                <td class="col-sm-5">  Masked sender used for SMS blast </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Created By</td>
										                <td class="col-sm-5"> SMS blast creator’s name </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Department</td>
										                <td class="col-sm-5">  User department </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Status</td>
										                <td class="col-sm-5"> Status of the campaign </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Action</td>
										                <td class="col-sm-5"> 
										                	<p> Pause/stop campaign sending or view created campaign </p>
										                </td>
										            </tr>
												</tbody>
										    </table>
									</div>
				                </div>
				            </div>

			<h4 id="SentCampaign"> <strong> Sent Campaigns </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
			                  		<div class="caption">
				                    	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/sentcampaign.png" style="width:90%;"> </center> <br>
										 	<p> List of campaigns that were successfully processed. </p>
										 	<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										           <tr>
										                <td class="col-sm-1">Date Created</td>
										                <td class="col-sm-5"> Date when the campaign was created </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Campaign Name</td>
										                <td class="col-sm-5"> Name of the SMS campaign </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Sender ID</td>
										                <td class="col-sm-5"> Masked sender used for SMS blast </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Created By</td>
										                <td class="col-sm-5"> SMS blast creator’s name </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Department</td>
										                <td class="col-sm-5"> User department </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Status</td>
										                <td class="col-sm-5"> Status of the campaign</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Action</td>
										                <td class="col-sm-5"> 
										                	<p> View, copy or delete created campaign </p>
														</td>
										            </tr>
												</tbody>
										    </table>
									</div>
				                </div>
				            </div>	   	            	    

			<h4 id="DraftCampaign"> <strong> Draft Campaigns </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
			                  		<div class="caption">
				                    	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/draftcampaign.png" style="width:100%;"> </center> <br>
										 	<p> List of unprocessed campaigns that are saved as draft. </p>
										 	<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Date Created</td>
										                <td class="col-sm-5"> Date when the campaign was created </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Campaign Name</td>
										                <td class="col-sm-5"> Name of the SMS campaign </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Sender ID</td>
										                <td class="col-sm-5"> Masked sender used for SMS blast </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Created By</td>
										                <td class="col-sm-5"> SMS blast creator’s name </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Department</td>
										                <td class="col-sm-5"> User department </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Status</td>
										                <td class="col-sm-5"> Status of the campaign </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Action</td>
										                <td class="col-sm-5"> 
										                	<p> Edit or delete created campaign </p>
										                </td>
										            </tr>
												</tbody>
										    </table>
									</div>
				                </div>
				            </div>	            	            


		<h1 id="Inbox"> <strong> Inbox </strong> </h1>
			<h4 id="Inbox"> <strong> Inbox </strong> </h4>
				<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/inbox.png"  style="width:100%;"> <br>
		                		 <p> Page to view inbound messages from customers and auto-reply via short code 8933.   </p> <br> 
			                	   	<div class="caption">
				                    	<!-- <p> Displays campaign name, filters and delivery status. </p> -->
			                    		<table class="table table-bordered table-striped">
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Column</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									            <tr>
									                <td class="col-sm-1">Date Recieved</td>
									                <td class="col-sm-5"> Date when message was received </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Customer</td>
									                <td class="col-sm-5"> Mobile number from which message was received </td>
									            </tr>
												
												<tr>
									                <td class="col-sm-1">Short Code</td>
									                <td class="col-sm-5"> Gateway number receiving inbound messages from customers </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Keyword</td>
									                <td class="col-sm-5"> Keyword used in the message that prompts an auto-reply from the platform </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Status</td>
									                <td class="col-sm-5"> Status of the message </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Avg. Response Time </td>
									                <td class="col-sm-5"> Time interval between when the inbound message was received from client and when the auto-reply was sent from the platform </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Last Reply by</td>
									                <td class="col-sm-5"> User who replied on the last message received   </td>
									            </tr>
									        </tbody>
										</table>

										<table class="table table-bordered table-striped">
											<thead>
									            <tr>
									                <th class="col-sm-2"><span>Action</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									            <tr>
									                <td class="col-sm-1">New SMS</td>
									                <td class="col-sm-5">  Quick SMS sending page </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Next</td>
									                <td class="col-sm-5"> Proceed to next page </td>
									            </tr>

									            <tr>
									                <td class="col-sm-1">Previous</td>
									                <td class="col-sm-5"> Go back to previous page </td>
									            </tr>
									        </tbody>
										</table>
			                    	</div>
		                </div>
				    </div>

		<h4 id="MessageHistory"> <strong> Message History </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
			                  		<div class="caption">
				                    	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/messagehistory.png" style="width:90%;"> </center> <br>
										 	<p> Displays message thread for customer selected </p>
										 	<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Parameter</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										           <tr>
										                <td class="col-sm-1">Reply</td>
										                <td class="col-sm-5"> <b> Optional. </b> Send reply to last message received </td>
										            </tr>
												</tbody>
										    </table>
										 	<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										           <tr>
										                <td class="col-sm-1">Date</td>
										                <td class="col-sm-5"> Date when message was received </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Message</td>
										                <td class="col-sm-5"> Inbound message content </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">User</td>
										                <td class="col-sm-5"> Account user </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Response Time</td>
										                <td class="col-sm-5"> Time interval between when the inbound message was received from client and when the reply was sent from the platform </td>
										            </tr>
												</tbody>
										    </table>

										    <table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Action</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Previous</td>
										                <td class="col-sm-5"> Go back to previous page </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Next</td>
										                <td class="col-sm-5"> Proceed to next page </td>
										            </tr>
										          
										          	 <tr>
										                <td class="col-sm-1">Send</td>
										                <td class="col-sm-5"> Send reply message </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Close</td>
										                <td class="col-sm-5"> Exit message history window </td>
										            </tr>
												</tbody>
										    </table>
									</div>
				                </div>
				            </div>	 

		<h4 id="QuickSMS"> <strong> Quick SMS </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
			                  		<div class="caption">
				                    	<ol>
				                    		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/quicksms.png" style="width:70%;"> </center> <br>
											<li> Input recipient mobile number </li>
									 		<li> Fill out message content </li>
									 	    	<p> a. Click Send to process quick SMS <br>
									 	    	    b. Click Close to cancel
									 	    	</p>
									 	    <li> To - Mobile recipient number </li>
									 	    <li> Message - Outbound message content	</li>
									 	    <li> Send - Process message </li>
									 	    <li> Close - Cancel message </li>
									 	</ol>
										 	<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Parameter</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										           <tr>
										                <td class="col-sm-1">To</td>
										                <td class="col-sm-5"> <b> Required. </b>  Mobile recipient number </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> Message </td>
										                <td class="col-sm-5"> <b> Required. </b> Outbound message content	 </td>
										            </tr>
												</tbody>
										    </table>

										    <table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Action</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										           	<tr>
										                <td class="col-sm-1">Send</td>
										                <td class="col-sm-5"> Process message </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Close</td>
										                <td class="col-sm-5"> Cancel message </td>
										            </tr>
												</tbody>
										    </table>
									</div>
				                </div>
				            </div>		            


		<h1 id="Phonebook"> <strong> Phonebook </strong> </h1>     
		    <h4 id="ViewContacts"> <strong> Phonebook </strong> </h2>
				<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/phonebook.png"  style="width:90%;"><br>
	                	   	   	<div class="caption">
			                    	<!-- <p> Displays campaign name, filters and delivery status. </p> -->
			                    		<p> Page to view all contacts saved in the account. </p> <br> 
					              		
					              			<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Mobile Number</td>
										                <td class="col-sm-5">  Contact mobile number </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">First Name</td>
										                <td class="col-sm-5"> Contact first name </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Last Name</td>
										                <td class="col-sm-5"> Contact last name </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> Country</td>
										                <td class="col-sm-5"> Originating country of contact </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Status</td>
										                <td class="col-sm-5"> Status of mobile number </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Created By</td>
										                <td class="col-sm-5"> Account used in creating the contact </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Action</td>
										                <td class="col-sm-5"> 
										                	<p> Edit or delete created contact </p>
										                </td>
										            </tr>
										        </tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Action</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Add Contact</td>
										                <td class="col-sm-5"> Add new contact </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Upload Contacts</td>
										                <td class="col-sm-5"> Upload new contacts in .csv file format </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Download Contacts</td>
										                <td class="col-sm-5"> Download existing contacts in .csv file format </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">View Groups</td>
										                <td class="col-sm-5"> Display group list created </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Delete</td>
										                <td class="col-sm-5"> Delete existing contact from phonebook </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Block SMS</td>
										                <td class="col-sm-5"> Block contact to stop receiving messages </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Unblock SMS</td>
										                <td class="col-sm-5"> Unblock contact to continue receiving messages </td>
										            </tr>
										        </tbody>
											</table>	
	                    		</div>
		                </div>
			        </div>

			<h4 id="AddContacts"> <strong> Add Contacts </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
			                  		<div class="caption">
				                    	<ol>
				                    		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/addcontacts.png" style="width:70%;"> </center> <br>
										 	<li> Fill out on Mobile number box </li>
				                    		<li> Fill out on Email box </li>
				                    		<li> Choose Group </li>
				                    		<li> Fill out on First Name box</li>
				                    		<li> Fill out on Last Name box </li>
				                    		<li> Choose Country </li>
				                    		<li> Choose Gender </li>
				                    		<li> Choose Birthday </li>
				                    		<li> Fill out on Company box </li>
				                    		<li> Fill out on Position box </li>
				                    		<li> Fill out on Status box </li>
				                    		<li> Click Save </li> <br>
				                    	</ol>
				                    	<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Parameter</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										           <tr>
										                <td class="col-sm-1">Mobile Number</td>
										                <td class="col-sm-5"> <b> Required. </b> Contact's mobile number </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Email</td>
										                <td class="col-sm-5"> <b> Optional. </b> Contact's email address </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Select Group</td>
										                <td class="col-sm-5"> <b> Optional. </b> Group where you may add new contact </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">First Name</td>
										                <td class="col-sm-5"> <b> Optional. </b> Contact's first name </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Last Name</td>
										                <td class="col-sm-5"> <b> Optional. </b> Contact's last name </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Country</td>
										                <td class="col-sm-5"> <b> Optional. </b> Contact country </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Gender</td>
										                <td class="col-sm-5"> <b> Optional. </b> Contact's gender </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Birthday</td>
										                <td class="col-sm-5"> <b> Optional. </b> Contact's birthdate </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Company</td>
										                <td class="col-sm-5"> <b> Optional. </b> Contact's company name </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Position</td>
										                <td class="col-sm-5"> <b> Optional. </b> Contact's job position </td>
										            </tr>

													<tr>
										                <td class="col-sm-1">Status</td>
										                <td class="col-sm-5"> <b> Optional. </b> Contact's marital status </td>
										            </tr>
												</tbody>
										    </table>

										    <table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Action</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										           	<tr>
										                <td class="col-sm-1">Save</td>
										                <td class="col-sm-5"> Add new contact in phonebook </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Close</td>
										                <td class="col-sm-5">  Close Add Contact window without saving </td>
										                
										            </tr>
												</tbody>
										    </table>
									</div>
				                </div>
				            </div>

			<h4 id="DownloadContacts"> <strong> Download Contacts </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
			                  		<div class="caption">
				                    	<ol>
				                    		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/downloadcontacts.png" style="width:70%;"> </center> <br>
											<li> Click Download Contacts </li> 
				                    		<li> Contacts will be downloaded in .xls file format </li>
										</ol>
				                    	</div>
				                </div>
				            </div>

			<h4 id="Groups"> <strong> Groups </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
			                  		<div class="caption">
				                    	<ol>
				                    		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/phonebookgroups.png" style="width:90%;"> </center> <br>
											<li> Click Add New Group </li><br>
										
											<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Group Name</td>
										                <td class="col-sm-5"> Contact's group name </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Date Created</td>
										                <td class="col-sm-5"> Date and time the group was created </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Contacts</td>
										                <td class="col-sm-5"> Total number of contacts in the group </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Department</td>
										                <td class="col-sm-5"> User Department </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Created by</td>
										                <td class="col-sm-5"> Account used to create group </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Action</td>
										                <td class="col-sm-5"> 
										                	<p> Edit, view or delete phonebook group </p>
										                </td>
										            </tr>
												</tbody>
										    </table>

										    <table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Action</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										           	<tr>
										                <td class="col-sm-1">Add New Group</td>
										                <td class="col-sm-5"> Add new phonebook group </td>
										            </tr>

										           	<tr>
										                <td class="col-sm-1">Previous</td>
										                <td class="col-sm-5"> Go back to previous page</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Next</td>
										                <td class="col-sm-5">Proceed to next page </td>
										        </tbody>
										    </table>

										    <table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Action</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										           	<tr>
										                <td class="col-sm-1">Edit Group</td>
										                <td class="col-sm-5"> Update selected group </td>
										            </tr>

										           	<tr>
										                <td class="col-sm-1">View Group</td>
										                <td class="col-sm-5"> Display selected group details</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Delete Group</td>
										                <td class="col-sm-5"> Delete selected group </td>
										        </tbody>
										    </table>
										
											<li> Fill out Group Name </li> <br>
												<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/addnewgroup.png" style="width:70%;"> </center> <br>
											<li> Click Save </li><br> 
										</ol>
											<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Parameter</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										           	<tr>
										                <td class="col-sm-1">Group Name</td>
										                <td class="col-sm-5"> <b> Required. </b> Name to be assigned to the group </td>
										            </tr>
												</tbody>
										    </table>
										   	<table class="table table-bordered table-striped">
			                				<thead>
									            <tr>
									                <th class="col-sm-2"><span>Action</span></th> 
									                <th class="col-sm-6"><span>Description</span></th>
									            </tr>
									        </thead>
									        <tbody>
									           	<tr>
									                <td class="col-sm-1">Close</td>
									                <td class="col-sm-5"> Close Phonebook window without saving </td>
									            </tr>

									           	<tr>
									                <td class="col-sm-1">Save</td>
									                <td class="col-sm-5"> Save new contact group to Phonebook </td>
									            </tr>
											</tbody>
									    </table>
									</div>
				                </div>
				            </div>	            		         

			<h4 id="UploadFile"> <strong> Upload File </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
			                  		<div class="caption">
				                    	<ol>
				                    		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/uploadfile.png" style="width:100%;"> </center> <br>
										 	<li> Select Group </li> 
				                    			<p> a. New Group
										 				<ol> 
											 				<li> Check Add to New Group </li>
											 				<li> Provide new group name </li>
											 				<li> Click Choose Files to select files to be uploaded </li>
											 				<li> Click Start to begin uploading </li>
											 			</ol>
									 			 	b. Existing Group </p> 
										 				<ol>
										 					<li> Select Group name from dropdown list </li>
											 				<li> Click Choose Files to select files to be uploaded </li>
											 				<li> Click Start to begin uploading</li>
											 				<p> Note: You will be redirected to Uploads page </p> <br>
											 			</ol>
									 	</ol>
				                    </div>
				                </div>
				            </div>

			<h4 id="Uploads"> <strong> Uploads </strong> </h4>
			<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>
				<div class= "col-sm-112">
					<div class="row-fluid">
			            <div class="thumbnails">
			            	<div class="span4">
				               	<div class="thumbnail">
			                  		<div class="caption">
				                    	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/uploads.png" style="width:100%;"> </center> <br>
										 	<table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										           <tr>
										                <td class="col-sm-1">File Name</td>
										                <td class="col-sm-5"> Name of the file to be uploaded </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Created</td>
										                <td class="col-sm-5"> Date and Time the contacts was uploaded </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">User</td>
										                <td class="col-sm-5"> User account used to upload contacts file </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Uploaded</td>
										                <td class="col-sm-5"> Total number of contacts uploaded </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Status</td>
										                <td class="col-sm-5"> Uploading status </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Progress</td>
										                <td class="col-sm-5"> Uploading progress </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Action</td>
										                <td class="col-sm-5"> 
										                	<p> Review or delete file being uploaded </p>
										                </td>
										            </tr>
												</tbody>
										    </table>

										    <table class="table table-bordered table-striped">
			                					<thead>
										            <tr>
										                <th class="col-sm-2"><span>Action</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										           	<tr>
										                <td class="col-sm-1">Upload New File</td>
										                <td class="col-sm-5"> Upload new contacts </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Previous</td>
										                <td class="col-sm-5"> Go back to previous page </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Next</td>
										                <td class="col-sm-5"> Proceed to next page </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Review</td>
										                <td class="col-sm-5"> Review uploaded file </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Delete</td>
										                <td class="col-sm-5"> Delete uploaded file </td>
										            </tr>
												</tbody>
										    </table>
									</div>
				                </div>
				            </div>

			<h1 id="Reports"> <strong> Reports </strong> </h1>     
		    <h4 id="SMSTraffic"> <strong> SMS Traffic Report </strong> </h2>
				<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<ol>
		                		<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/smstraffic.png"  style="width:100%;"> </center><br>
	                	   		<li> Choose Country  </li>
		                		<li> Choose Campaign  </li>
		                		<li> Choose Product  </li> 
		                			<p> Note: You may check Include operator breakdown </p> 
		                		<li> Select Breakdown </li> 
		                			<p> 
		                				a. Daily <br>
		                				b. Monthly 
		                			</p> 
		                		<li> Choose Start Date  </li>
		                		<li> Choose End Date  </li>
		                		<li> Select Transaction/s </li>
		                			<p>
		                				a. Outbound <br>
		                				b. Inbound <br>
		                				c. Cleanup <br>	
		                				d. API SMS Traffic <br>
		                				e. Web Campaign SMS Traffic 
		                			</p>
		                		<li> Click Generate report </li> <br>
	                	   	</ol>
		                		<div class="caption">
			                    	<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Field</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Department</td>
										                <td class="col-sm-5">  User Department </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Country</td>
										                <td class="col-sm-5"> List of countries </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Campaign</td>
										                <td class="col-sm-5"> List of campaigns </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> Product</td>
										                <td class="col-sm-5"> List of Products for SMS Blast </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> Breakdown</td>
										                <td class="col-sm-5"> Breakdown of reports </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Start Date</td>
										                <td class="col-sm-5"> Date from </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">End Date</td>
										                <td class="col-sm-5"> Date to </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Transaction</td>
										                <td class="col-sm-5"> List of transactions </td>
										            </tr>
										        </tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Action</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Generate Report</td>
										                <td class="col-sm-5"> Start generating report </td>
										            </tr>
												</tbody>
											</table>
	                    		</div>
		                </div>
			        </div>

			<h4 id="GenerateReport"> <strong> Generate Report </strong> </h2>
				<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/genreport.png"  style="width:100%;"> </center><br>
	                	   		<div class="caption">
			                    	<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Field</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Date</td>
										                <td class="col-sm-5"> Selected date range for the report </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Department</td>
										                <td class="col-sm-5"> List of selected department </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Product</td>
										                <td class="col-sm-5"> List of the selected products </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> Campaign</td>
										                <td class="col-sm-5"> List of campaigns selected </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> User</td>
										                <td class="col-sm-5"> Selected user </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Operator Break</td>
										                <td class="col-sm-5"> Breakdown of cost per operator </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Countries </td>
										                <td class="col-sm-5"> Countries selected </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Group By</td>
										                <td class="col-sm-5"> Breakdown grouped daily or monthly </td>
										            </tr>
 
										            <tr>
										                <td class="col-sm-1"> API SMS Traffic </td>
										                <td class="col-sm-5"> Total API transactions </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Web Campaign SMS Traffic</td>
										                <td class="col-sm-5"> Total SMS Blast sent </td>
										            </tr>
										        </tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Month</td>
										                <td class="col-sm-5"> Date </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Department</td>
										                <td class="col-sm-5"> User Department </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Product</td>
										                <td class="col-sm-5"> List of Products for SMS Blast </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Country</td>
										                <td class="col-sm-5"> List of countries </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Operator</td>
										                <td class="col-sm-5"> Type of operator (e.g. Philippines Default, Smart, Globe, Sun) </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Description</td>
										                <td class="col-sm-5"> Type of transaction </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Count</td>
										                <td class="col-sm-5"> Total count of transaction </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Cost</td>
										                <td class="col-sm-5"> Total cost of campaign </td>
										            </tr>
												</tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Month</td>
										                <td class="col-sm-5"> Shows month date </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Country</td>
										                <td class="col-sm-5"> List of countries </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Operator</td>
										                <td class="col-sm-5"> Type of operator (e.g. Philippines Default, Smart, Globe, Sun) </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Description</td>
										                <td class="col-sm-5"> Type of transaction </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Count</td>
										                <td class="col-sm-5"> Total count of campaign </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Cost</td>
										                <td class="col-sm-5"> Total cost of campaign </td>
										            </tr>
												</tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Action</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Download</td>
										                <td class="col-sm-5"> Start downloading report in .csv format </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Change Filters</td>
										                <td class="col-sm-5"> Go back to SMS Traffic Report page and edit filters </td>
										            </tr>
												</tbody>
											</table>
	                    		</div>
		                </div>
			        </div>	

			<h4 id="AlertReport"> <strong> Custom Report (SMS Alert Reports per Product)</strong> </h2>
				<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/SMSAlertReport.png"  style="width:100%;"> </center><br>
	                	   		<ol>
	                	   			<li> Select date range </li>
	                	   			<li> Click Send to start generating report </li>
	                	   				<p> Note: You may also download report in .xls file format by clicking Download. </p>
	                	   		</ol>
	                	   		<div class="caption">
			                    	<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Parameter</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Date From</td>
										                <td class="col-sm-5"> Start date for the report</td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Date To</td>
										                <td class="col-sm-5"> End date for the report </td>
										            </tr>
												</tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Button</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1"> Send </td>
										                <td class="col-sm-5"> Generate report </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1"> Download </td>
										                <td class="col-sm-5"> Download report in .csv format </td>
										            </tr>
												</tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Product</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">SMS Notification Status</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Total</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> % Distribution </td>
										                <td class="col-sm-5"> </td>
										            </tr>
												</tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>SMS Notification Status</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Delivered</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Bounced</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Invalid No</td>
										                <td class="col-sm-5">  </td>
										            </tr>
										            
										            <tr>
										                <td class="col-sm-1">No Contact No</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Not Yet Sent</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Bounced</td>
										                <td class="col-sm-5">  </td>
										            </tr>
												</tbody>
											</table>
	                    		</div>
		                </div>
			        </div>	           	  

			<h4 id="Pamme'sReport"> <strong> Custom Report (SMS Report - Pamme's Format)</strong> </h2>
				<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/pammesreport.png"  style="width:100%;"> </center><br>
	                	   		<ol>
	                	   			<li> Select date range </li>
	                	   			<li> Click Send to start generating report </li>
	                	   				<p> Note: You may also download report in .xls file format by clicking Download. </p>
	                	   		</ol>
	                	   		<div class="caption">
			                    	<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Parameter</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Date From</td>
										                <td class="col-sm-5"> Start date for the report </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Date To</td>
										                <td class="col-sm-5"> End date for the report</td>
										            </tr>
												</tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Button</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1"> Send </td>
										                <td class="col-sm-5"> Generate report </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1"> Download </td>
										                <td class="col-sm-5"> Download report in .csv format </td>
										            </tr>
												</tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Product</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">SMS Notification Status</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Total</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> % Distribution </td>
										                <td class="col-sm-5"> </td>
										            </tr>
												</tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>SMS Notification Status</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Delivered</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Bounced</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Invalid No</td>
										                <td class="col-sm-5">  </td>
										            </tr>
										            
										            <tr>
										                <td class="col-sm-1">No Contact No</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Not Yet Sent</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Bounced</td>
										                <td class="col-sm-5">  </td>
										            </tr>
												</tbody>
											</table>
										<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/pammesreport2.png"  style="width:100%;"> </center><br>
	                	   					<ol>
				                	   			<li> Select date range </li>
				                	   			<li> Check frequency of sending per specific load number </li> 
				                	   			<li> Click Send to start generating report </li>
				                	   				<p> Note: You may also download report in .xls file format by clicking Download. </p>
				                	   		</ol>
	                	   					<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Parameter</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Date From</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Date To</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Filter Load Number</td>
										                <td class="col-sm-5"> </td>
										            </tr>
												</tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Button</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1"> Send </td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Download</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Frequency of Sending</td>
										                <td class="col-sm-5"> </td>
										            </tr>
												</tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1"> Int'l Origin </td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Touch Points</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> Once </td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Twice</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Multiple Times</td>
										                <td class="col-sm-5"> </td>
										            </tr>
												</tbody>
											</table>
	                    		</div>
		                </div>
			        </div>	           	  
			
			<h4 id="StandardLogsReport"> <strong> Custom Report (Standard Logs Report) </strong> </h2>
				<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/standardlogsreport.png"  style="width:100%;"> </center><br>
	                	   		<ol> 
	                	   			<li> Select date range </li>
	                	   			<li> Click Send to start generating report </li>
	                	   				<p> Note: You may also download report in .xls file format by clicking Download. </p>
				                </ol>
	                	   		<div class="caption">
			                    	<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Field</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Date</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Department</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Product</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> Campaign</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> User</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1">Operator Break</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Countries</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Group By</td>
										                <td class="col-sm-5">  </td>
										            </tr>
 
										            <tr>
										                <td class="col-sm-1"> API SMS Traffic </td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Web Campaign SMS Traffic</td>
										                <td class="col-sm-5"> </td>
										            </tr>
										        </tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Month</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Department</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Product</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Country</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Operator</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Description</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Count</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Cost</td>
										                <td class="col-sm-5">  </td>
										            </tr>
												</tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Month</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Country</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Operator</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Description</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Count</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Cost</td>
										                <td class="col-sm-5"></td>
										            </tr>
												</tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Button</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Download</td>
										                <td class="col-sm-5"> To download report in .csv file </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Change Filters</td>
										                <td class="col-sm-5"> To go back to SMS Traffic Report and enable you to edit filters </td>
										            </tr>
												</tbody>
											</table>
	                    		</div>
		                </div>
			        </div>

			<h1 id="ManageAccount"> <strong>  Manage Account </strong> </h1>
				<h4 id="ChangePassword"> <strong>  Change Password </strong> </h4>
					<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/changepassword.png"  style="width:70%;"> </center><br>
	                	   		<ol> 
	                	   			<li> Type Current Password </li>
	                	   			<li> Type New Password </li>
	                	   			<li> Retype Password </li>
	                	   			<li> Click Save to change password </li>
	                	   		</ol>
	                	   		<div class="caption">
			                    	<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Field</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Current Password</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> New Password </td>
										                <td class="col-sm-5"> </td>
										            </tr>

										             <tr>
										                <td class="col-sm-1"> Retype Password </td>
										                <td class="col-sm-5"> </td>
										            </tr>
										        </tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Button</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Save</td>
										                <td class="col-sm-5">  </td>
										            </tr>
												</tbody>
											</table>
	                    		</div>
		                </div>
			        </div>

			    <h4 id="ManageUsers"> <strong>  Manage Users </strong> </h4>
					<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/manageusers.png"  style="width:90%;"> </center><br>
	                	   		<p> View all users under account. </p>
	                	   		<div class="caption">
			                    	<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Column</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Name</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> Email </td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> Access </td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> Department </td>
										                <td class="col-sm-5"> </td>
										            </tr>
										        </tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Action</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Edit User</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">Delete User</td>
										                <td class="col-sm-5">  </td>
										            </tr>
												</tbody>
											</table>
	                    		</div>
		                </div>
			        </div>

			    <h4 id="AddNewUser"> <strong>  Add New User </strong> </h4>
					<a type="button" class="btn btn-xs btn-danger" href="<?php echo site_url("sample/page_admin"); ?>" >Back to Top</a> <br> <br>        	
					<div class="span4">
		                <div class="thumbnail">
		                	<center> <img data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="assets/img/adduser.png"  style="width:60%;"> </center><br>
	                	   		<ol>
	                	   			<li> Type name of new user </li>
	                	   			<li> Provide email address </li>
	                	   			<li> Type password for new user</li>
	                	   			<li> Choose User Access on the drop down list </li>
	                	   				<p> a. DEPTADMIN <br>
	                	   					b. DEPTUSER	
	                	   				</p>
	                	   		</ol>
	                	   		<div class="caption">
			                    	<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Field</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Name</td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> Email </td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> Password </td>
										                <td class="col-sm-5"> </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1"> User Access </td>
										                <td class="col-sm-5"> </td>
										            </tr>
										        </tbody>
											</table>

											<table class="table table-bordered table-striped">
												<thead>
										            <tr>
										                <th class="col-sm-2"><span>Button</span></th> 
										                <th class="col-sm-6"><span>Description</span></th>
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td class="col-sm-1">Close</td>
										                <td class="col-sm-5">  </td>
										            </tr>

										            <tr>
										                <td class="col-sm-1">OK</td>
										                <td class="col-sm-5">  </td>
										            </tr>
												</tbody>
											</table>
	                    		</div>
		                </div>
			        </div>
			            
			</div>  
		</div>
	</div>
</body>
</html>