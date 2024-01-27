<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}else{?>



<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Calander</title>

	

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	
</head>
<body>

<?php if($_SESSION['id']!="");?>
<?php $query=mysqli_query($con,"select * from admin where id='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>

<?php include('includes/header.php');?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Calendar</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Calendar</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="pd-20 card-box mb-30">
					<div class="calendar-wrap">
						<div id='calendar'></div>
					</div>
					<!-- calendar modal -->
					<div id="modal-view-event" class="modal modal-top fade calendar-modal">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-body">
									<h4 class="h4"><span class="event-icon weight-400 mr-3"></span><span class="event-title"></span></h4>
									<div class="event-body"></div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

					<div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<form id="add-event">
									<div class="modal-body">
										<h4 class="text-blue h4 mb-10">Add Event Detail</h4>
										<div class="form-group">
											<label>Event name</label>
											<input type="text" class="form-control" name="ename">
										</div>
										<div class="form-group">
											<label>Event Date</label>
											<input type='text' class="datetimepicker form-control" name="edate">
										</div>
										<div class="form-group">
											<label>Event Description</label>
											<textarea class="form-control" name="edesc"></textarea>
										</div>
										<div class="form-group">
											<label>Event Color</label>
											<select class="form-control" name="ecolor">
												<option value="fc-bg-default">fc-bg-default</option>
												<option value="fc-bg-blue">fc-bg-blue</option>
												<option value="fc-bg-lightgreen">fc-bg-lightgreen</option>
												<option value="fc-bg-pinkred">fc-bg-pinkred</option>
												<option value="fc-bg-deepskyblue">fc-bg-deepskyblue</option>
											</select>
										</div>
										<div class="form-group">
											<label>Event Icon</label>
											<select class="form-control" name="eicon">
												<option value="circle">circle</option>
												<option value="cog">cog</option>
												<option value="group">group</option>
												<option value="suitcase">suitcase</option>
												<option value="calendar">calendar</option>
											</select>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary" >Save</button>
										<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php }include('includes/footer.php');?>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/fullcalendar/fullcalendar.min.js"></script>
	<script src="vendors/scripts/calendar-setting.js"></script>
</body>
</html>

<?php }?>