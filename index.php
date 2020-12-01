

<?php 
 $conn=mysqli_connect('localhost','root','','filedownload');



if(isset($_POST['submit'])){





$fullname=$_POST['fullname'];
$phone=$_POST['phone'];
        $email=$_POST['email'];
        $address=$_POST['address'];
       $profile=$_POST['profile'];

     $c_name1 = $_POST['c_name1'];
 $pos_1 = $_POST['pos_1'];
 $sd1 = $_POST['sd1'];
  $edate1 = $_POST['edate1'];//==
     $c_name2=$_POST['c_name2'];
      $pos_2= $_POST['pos_2'];
$sd2 = $_POST['sd2'];
  $edate2 = $_POST['edate2'];//==
       $c_name3=$_POST['c_name3'];
         $pos_3 = $_POST['pos_3'];//==
    $sd3 = $_POST['sd3'];
  $edate3 = $_POST['edate3'];//==       
 $h1 = $_POST['h1'];
 $h2=$_POST['h2'];
  $h3=$_POST['h3'];//==
 $ps1=$_POST['ps1'];
$rate1=$_POST['rate1'];
          $ps2=$_POST['ps2'];
$rate2=$_POST['rate2'];
        $ps3=$_POST['ps3'];
$rate3=$_POST['rate3'];//==
$ed1=$_POST['ed1'];
$bu1=$_POST['bu1'];
$yofp1=$_POST['yofp1'];//==
$ed2=$_POST['ed2'];
$bu2=$_POST['bu2'];
$yofp2=$_POST['yofp2'];//==
$ed3=$_POST['ed3'];
$bu3=$_POST['bu3'];
$yofp3=$_POST['yofp3'];//===
$ref1=$_POST['ref1'];
$ref_pos1=$_POST['ref_pos1'];
$con1=$_POST['con1'];//==
$ref2=$_POST['ref2'];
$ref_pos2=$_POST['ref_pos2'];
$con2=$_POST['con2'];

      
      

       
       







$sql="INSERT INTO `temp2`( `fullname`, `phone`, `email`, `address`, `profile`, `c_name1`, `pos_1`, `sd1`, `edate1`, `c_name2`, `pos_2`, `sd2`, `edate2`, `c_name3`, `pos_3`, `sd3`, `edate3`, `ps1`, `rate1`, `ps2`, `rate2`, `ps3`, `rate3`, `ed1`, `bu1`, `yofp1`, `ed2`, `bu2`, `yofp2`, `ed3`, `bu3`, `yofp3`, `h1`, `h2`, `h3`, `ref1`, `ref_pos1`, `con1`, `ref2`, `ref_pos2`, `con2`)VALUES ( '$fullname', '$phone', '$email', '$address', '$profile', '$c_name1', '$pos_1', '$sd1', '$edate1', '$c_name2', '$pos_2', '$sd2', '$edate2', '$c_name3', '$pos_3', '$sd3', '$edate3', '$ps1', '$rate1', '$ps2', '$rate2', '$ps3', '$rate3', 'ed1', '$bu1', '$yofp1', '$ed2', '$bu2', '$yofp2', '$ed3', '$bu3', '$yofp3', '$h1', '$h2', '$h3', '$ref1', '$ref_pos1', '$con1', '$ref2', '$ref_pos2', '$con2')";


$result = mysqli_query($conn, $sql);  
if($result==true){
  echo "string";
}else{
echo "no";
  # code...
}

header('Location:plshoja.php');
}


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Simle CV Generator</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="assests/css/style.css">

	<!-- Latest compiled and minified JavaScript -->
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<!--Font Awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- development version, includes helpful console warnings -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

	<!-- Custom JS -->
	<script src="assests/js/cv-form.js"></script>

</head><style type="text/css">
form{
text-align: center;

}
body{

    background: linear-gradient(to right, #006699 0%, #003300 100%);

}
</style>
<body>

	<div class="container">
		<div align="center">
			<div class=" col-lg-7">
				<div class="jumbotron cv-form">
					<h3 class=" text-center cv-heading">CURRICULUM VITAE</h3>
					<p class=" text-center lead">Enter your details and get the CV in PDF format</p>
					<form method="post" action="" class="needs-validation" novalidate id="form1">
						

						<div id="validationCustom01">
            <h2>Personal Information</h2>
              

              <div class="form-group">
              <label for="fc_name">Your Full Name</label>
              <input class="form-control" type="text" id="fullname"  name="fullname"   required>
              </div>
 
              <div class="form-group">
              <label for="start_text">Phone Number</label>
              <input class="form-control" type="text" id="phone" name="phone" required>
              </div>

              <div class="form-group">
	            <label for="work_ed1">Email:</label>
              <input class="form-control"   type="text" id="work_ed2" name="email" required>
              </div>


              <div class="form-group">
	            <label for="work_ed1">Address:</label>
              <input class="form-control"   type="varchar" id="" name="address" required>
              </div>


              <div class="form-group">
              <label for="start_text">Profile </label><br>
              <textarea  class="form-control"class="" type="text" id="info" name="profile" required></textarea></div>
              </div>
             <br>

             <h2>Work Experience</h2>
             <div>
             <h3>company 1</h3>
             <div class="form-group">
              
                <label for="c_name">Name</label>
                <input type="text" class="form-control" id="website" name="c_name1"><br>
                <label for="pos_1">Position</label>
                <input type="text" class="form-control" id="website" name="pos_1"><br>

                <label for="start_date">Start Date</label>
                <input type="Date" class="form-control" id="date" name="sd1"><br>

                <label for="end_date">End Date</label>
                <input type="Date" class="form-control" id="date" name="edate1"><br>
             </div>

             <h3>company 2</h3>
             <div class="form-group">
              
                  <label for="c_name">Name</label>
                  <input type="text" class="form-control" id="website" name="c_name2"><br>
                  <label for="c_name1">Position</label>
                  <input type="text" class="form-control" id="website" name="pos_2"><br>

                  <label for="start_date">Start Date</label>
                  <input type="Date" class="form-control" id="date" name="sd2"><br>

                  <label for="end_date">End Date</label>
                  <input type="Date" class="form-control" id="date" name="edate2"><br>
             </div>
             <h3>company 3</h3>
             <div class="form-group">
              
                  <label for="c_name3">Name</label>
                  <input type="text" class="form-control" id="website" name="c_name3"><br>
                  <label for="c_name3">Position</label>
                  <input type="text" class="form-control" id="website" name="pos_3"><br>

                  <label for="start_date">Start Date</label>
                  <input type="Date" class="form-control" id="date" name="sd3"><br>

                  <label for="end_date">End Date</label>
                  <input type="Date" class="form-control" id="date" name="edate3"><br>
             </div>
   
           
  
            <div>
              <h2>Professional Skills</h2>
       

                  <div class="form-group">

                        <h4 for="start_text">Professional skill 1</h4>
                        <input class="form-control" type="text" id="ps1" name="ps1" required></div>

                        <div class="form-group">
                        <label for="ps1">Rate your skill </label>
                          <select id="bloodgroup" name="rate1">
                            <option value="10%">10%</option>
                            <option value="20%">20%</option>
                            <option value="30%">30%</option>
                            <option value="40%">40%</option>
                            <option value="50%">50%</option>
                            <option value="60%">60%</option>
                            <option value="70%">70%</option>
                            <option value="80%">80%</option>
                            <option value="90%">90%</option>
                            <option value="100%">100%</option>
                          </select>
                        </div> 
                        <div>                 
                        <h4 for="end_text">Professional skill 2</h4>
                        <input class="form-control" type="text" id="ps2" name="ps2" required></div>

                         <label for="ps2">Rate your skill</label>
                             <select id="bloodgroup" name="rate2">
                              <option value="10%">10%</option>
                              <option value="20%">20%</option>
                              <option value="30%">30%</option>
                              <option value="40%">40%</option>
                              <option value="50%">50%</option>
                              <option value="60%">60%</option>
                              <option value="70%">70%</option>
                              <option value="80%">80%</option>
                              <option value="90%">90%</option>
                              <option value="100%">100%</option>
                            </select>
               </div>    
               <div>
                          <h4 for="end_text">Professional skill 3</h4>
                          <input class="form-control" type="text" id="ps3" name="ps3" required></div>

                <label for="ps2">Rate your skill</label>
                               <select id="bloodgroup" name="rate3">
                                <option value="10%">10%</option>
                                <option value="20%">20%</option>
                                <option value="30%">30%</option>
                                <option value="40%">40%</option>
                                <option value="50%">50%</option>
                                <option value="60%">60%</option>
                                <option value="70%">70%</option>
                                <option value="80%">80%</option>
                                <option value="90%">90%</option>
                                <option value="100%">100%</option>
                              </select>

                            </div>

                      <br>
                      <h2>Educational Details</h2>
                            
                           
                              <div class="form-group">
                              <label for="end_text">Basic Education(DIPLOMA/HSC)</label>
                              <input  class="form-control"  type="text" id="ed1" name="ed1"  required></div>
                              <div>
                              <label for="end_text"> Board/University</label>
                              <input  class="form-control"  type="text" id="ed1" name="bu1"  required></div>
                              <div>
                              <label for="end_date">Year Of Passing</label>
                              <input type="Date" class="form-control" id="date" name="yofp1"><br>
                              </div>



                              <div class="form-group">
                              <label for="end_text">Bachlor Degree</label>
                              <input  class="form-control"  type="text" id="ed1" name="ed2"  required></div>
                              <div>
                              <label for="end_text"> Board/University</label>
                              <input  class="form-control"  type="text" id="ed1" name="bu2"  required></div>
                              <div>
                              <label for="end_date">Year Of Passing</label>
                              <input type="Date" class="form-control" id="date" name="yofp2"><br>
                              </div>


                              <div class="form-group">
                              <label for="end_text">Master Degree</label>
                              <input  class="form-control"  type="text" id="ed1" name="ed3"  required></div>
                              <div>
                              <label for="end_text"> Board/University</label>
                              <input  class="form-control"  type="text" id="ed1" name="bu3"  required></div>
                              <div>
                              <label for="end_date">Year Of Passing</label>
                              <input type="Date" class="form-control" id="date" name="yofp3"><br>
                              </div>


                           
    
                            <h2>Interests/Hobbies</h2>

                   <div class="form-group">
                            <label for="c_name"> Hobby 1</label>
                            <input class="form-control" type="text" id="h1" name="h1" required></div>
                   <div class="form-group">
                            <label for="c_name">Hobby 2</label>
                            <input  class="form-control"  type="text" id="h2" name="h2" required></div>
                   <div class="form-group">
                            <label for="c_name">Hobby 3</label>
                            <input  class="form-control"  type="text" id="h3" name="h3" required></div>

          <br>
                      <h2>References</h2>
                            
                           
                              <div class="form-group">
                              <h4 for="end_text">Name of a Referral 1</h4>
                              <input  class="form-control"  type="text" id="ed1" name="ref1"  required></div>
                              <div>
                              <label for="end_text">Position</label>
                              <input  class="form-control"  type="text" id="ed1" name="ref_pos1"  required></div>
                              <div>
                              <label for="end_date">Contact No</label>
                              <input type="" class="form-control" id="date" name="con1"><br>
                              </div>

                              <div class="form-group">
                              <h4 for="end_text">Name of a Referral 2</h4>
                              <input  class="form-control"  type="text" id="ed1" name="ref2"  required></div>
                              <div>
                              <label for="end_text">Position</label>
                              <input  class="form-control"  type="text" id="ed1" name="ref_pos2"  required></div>
                              <div>
                              <label for="end_date">Contact No</label>
                              <input type="" class="form-control" id="date" name="con2"><br>
                              </div>


                              



              


</div>

  


<button class="btn btn-success btn-md " style="width: 100%;" id="submit" type="submit" name="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

