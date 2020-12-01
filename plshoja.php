<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">





<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	body{
		background-image: url('r.png') no-repeat;
background-size:100% ;
	font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
text-align: center;
	}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
</head>
<body>
<div class="alert alert-success" role="alert">
  <h2><strong>Well done!</strong> You successfully filled the Resume Form.</h2>
</div>
<h2>Your Resume is Ready Please Download</h2>
<form method="post">
<button name="Generate" type="submit" class="btn"><i class="fa fa-download"></i> Download</button>
</form>


</body>
</html>










              
<?php 




if(isset($_POST['Generate'])){
require_once __DIR__ . '/vendor/autoload.php';
		ob_start();

		include("template1.php");
		$html=ob_get_clean();
		
		$style = file_get_contents("assets/css/style.css");
		$mpdf = new \Mpdf\Mpdf();				
		$mpdf->WriteHTML($style,1);
		$mpdf->WriteHTML($html,2);
		ob_clean(); 
		$mpdf->Output();
}


 ?>
  


