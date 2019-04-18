<!DOCTYPE html>
<html>
<head>
	<title>Webnotes_Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		table
		{
			border-color: #333;
			border-collapse: collapse;
			text-align: center;
			width: 100%!important;
			
		}
		body
		{
			margin: 0;
			padding: 0;
		}
		th
		{
			font-weight: 500;
			color:#17a2b8;
		}
		.container-fluid
		{
			margin: 0;
			padding: 0;
			display: block;
		}
		.filter-box
		{
			margin: 2px 10px;
			height: 200px;
			width: 380px;
			background: #333;
			border-radius: 5px;
			overflow: hidden;
			box-shadow: 3px 3px 8px #ccc;
		}
		.table-box
		{
			max-width: 80%;
		}
		.filter
		{
			width: 100%;
			height: auto;
			background: #17a2b8;
			text-align: center;
			color: #fff;
			font-family: sans-serif;
			letter-spacing: 1px;
			padding: 10px 0px;
		}
		.date_form
		{
			position: relative;
			top:0%;
		}
		input[type="date"]::-webkit-inner-spin-button
		{
			-webkit-appearance:none;
		}
		input[type="date"]::-webkit-calendar-picker-indicator
		{
  			color: #fff;
		}
		input[type="date"]::-webkit-calendar-picker-indicator:hover
		{
  			color: red;
  			background: #222;
  			cursor: pointer;
		}
		input[type="date"]
		{
			width: 80%;
			margin: 5px 0px;
			background: #222;
			border:none;
			border-radius: 5px;
			padding: 10px;
			color: #fff;
			outline: none;
		}
		.total
		{
			font-size: 110px;
		}
		#myform
		{
			margin-top: 25px;
		}
	</style>
</head>
<body>
<div class="container-fluid">
<div style="display: flex;">
	<div class="filter-box">
	 		<div class="filter">
	 			Filter By-date
	 		</div>
	 		<div class="date_form">
	 			<center>
		 			<form action="/search_by_date" method="post" id="myform">
		 				@csrf
		 				<input type="date" name="date" id="date" ><br>
		 				<button class="btn btn-info btn-lg" name="btn" onclick="submit1()">
				 			<span id="spinner" style="display:none;" class="spinner-border spinner-border-sm"></span>
						  	search
						</button>
		 			</form>
		 		</center>
	 		</div>
		</div>
		<div class="filter-box">
	 		<div class="filter">
	 			Total feedback
	 		</div>
	 		<div class="date_form">
	 			<center>
		 			<h1 class="total">{{$count}}</h1>
		 		</center>
	 		</div>
		</div>
</div>
	<hr>	
	<center>
	<div class="table-box">
		<?php 
			
				echo "<table border='2' class='table table-striped table-dark'><tr><th colspan='6' class='bg-info text-dark'><center>All feedbacks</center></th></tr>
					<tr>
						<th>Date</th>
						<th>Name</th>
						<th>Email</th>
						<th>Feedback</th>
						<th>Rating</th>
					</tr>";
				foreach ($info as $p) 
				{	
					echo "<tr>";
					echo "<td>".$p->date."</td>";
					echo "<td style='text-align:left'>".$p->name."</td>";
					echo "<td style='text-align:left'>".$p->email."</td>";
					echo "<td style='text-align:left'>".$p->feedback."</td>";
					echo "<td>".$p->rating."</td>";
					
					echo "</tr>";
				}
				echo "</table>";
		?>
	</div>
</center>	
<script type="text/javascript">
	function submit1() {
		document.getElementById('spinner').style.display="inline-block";
		var date = document.getElementById('date').value;
		var NULL = "";
		if(date!=NULL)
		{
		document.getElementById('myform').submit();
		}
	}
</script>
</body>
</html>
