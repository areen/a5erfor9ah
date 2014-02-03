<html>
	<head>
		<meta charset="UTF-8">
		<title>Example of Twitter Bootstrap 3 Accordion</title>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
	
                <script src="http://code.jquery.com/jquery-latest.js"></script>
                <script src="ajax.js"></script>	

		<script>
		$(".openpanel").on("click", function() {
			$("#panel1").collapse('show');
		});
		$(".closepanel").on("click", function() {
			$("#panel1").collapse('hide');
		});

		/* ensure any open panels are closed before showing selected */
		$('#accordion').on('show.bs.collapse', function () {
			$('#accordion .in').collapse('hide');
		});
		</script>

	</head>
	<body>


<?php
	 
	 
    $con = mysql_connect('sql311.dc7.us','dc7_14229326','sujuod') or die(mysql_error());
    
    if (!$con) {
        echo "Unable to connect to DB: " . mysql_error();
        exit;
    }
 
    if (!mysql_select_db("dc7_14229326_univ")) {
        echo "Unable to select mydbname: " . mysql_error();
        exit;
    }
    
    $A = mysql_real_escape_string($_POST["areen"]);
   $S = mysql_real_escape_string($_POST["soso"]);

   
		echo"<h1>Your Mark for '" . $S ."'  </h1>";
   
    $sql_Q = "SELECT course_name, mark_first, mark_second,mark_other,mark_final,(mark_first+mark_second+mark_other) mark FROM stdinfo WHERE student_id = " . $A . " AND course_semester ='" . $S ."' ";
    $result = mysql_query($sql_Q);
    if ($result == FALSE) {
        die(mysql_error());
    }
// while ($row = mysql_fetch_array($result)) { 
	echo"				<div class='panel-group' id='accordion'>
							<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'>
						                <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion' href='#panel1'>'" . $S ."'</a>
	 								</h4>
								</div>
								<div id='panel1' class='panel-collapse collapse'>
									<div class='panel-body'>
						           First $f</div>
								</div>
						    </div>
					</div>
	";
	?>
							
	</body>
	
	
</html>