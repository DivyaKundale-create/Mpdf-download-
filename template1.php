

<?php 


$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"filedownload");

 // $sql = 'SELECT emp_id, emp_name, emp_salary FROM employee';
  // mysql_select_db('test_db');
  // $retval = mysql_query( $sql, $conn );

$q=" SELECT * from `temp2` ORDER BY id DESC LIMIT 1;";

$query=mysqli_query($conn,$q);



 ?>








<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>  </title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>



<?php 

          if(mysqli_num_rows($query) > 0)  
                          {  

if($row = mysqli_fetch_array($query))  
                               {  





 ?>
<section>
   <h1 align="center">Resume</h1> 
<div id="p">
    <h3><u>Personal Information</u></h3>
    <p>Name :<?php echo $row['fullname']; ?></p>
<p>Contact Number :<?php echo $row['phone']; ?></p>
<p>Email :<?php echo $row['email']; ?></p>
<p>Adress :<?php echo $row['address']; ?></p>

</div>

    <div id="profile">
<h3><u>Profile<u></h3>

<p>Profile<br> <?php echo $row['profile']; ?></p></div>


<div class="comp">
    <h3><u>Work Experience<u></h3>
<ul>
    <table style=" border: 1px solid black; ">
        <tr>
            <th>Company Name</th>
            <th>Postion</th>
            <th>Period</th>
        </tr>
        <tr>
            <td> <?php echo $row['c_name1']; ?> </td>
            <td><?php echo $row['pos_1']; ?></td>
            <td><?php echo $row['sd1']; ?> - <?php echo $row['edate1']; ?></td>
        </tr>
        <tr>   <td> <?php echo $row['c_name2']; ?> </td>
            <td><?php echo $row['pos_2']; ?></td>
            <td><?php echo $row['sd2']; ?> - <?php echo $row['edate2']; ?></td>
        </tr>
         <tr>   <td> <?php echo $row['c_name3']; ?> </td>
            <td><?php echo $row['pos_3']; ?></td>
            <td><?php echo $row['sd3']; ?> - <?php echo $row['edate3']; ?></td>
        </tr>
    </table>
     </div>



<div class="skill">
    <h3><u>Profetional Skills<u></h3>

<p>
     Followings are Professional Skills which I have learned:-<br>
        I give <?php echo $row['rate1']; ?>% for skill <?php echo $row['ps1']; ?> ,
        <?php echo $row['rate2']; ?>%  skill of <?php echo $row['ps2']; ?> and
        <?php echo $row['rate3']; ?>%  skill of <?php echo $row['ps3']; ?> .

</p>



<div class="edu">

    <h3><u>Educational Details<u></h3>
<table style=" border: 1px solid black; ">  
<tr style=" border: 1px solid black; ">
     <th style=" border: 1px solid black; ">Sr No.  </th>
       <th style=" border: 1px solid black; ">Education  </th>
          <th style=" border: 1px solid black; "> Board/University</th>
             <th style=" border: 1px solid black; ">Year Of Passing</th>

    </tr>
   
    <tr><td>   1.  </td>
        <td><?php echo $row['ed1']; ?></td>
        <td><?php echo $row['bu1']; ?></td>
        <td><?php echo $row['yofp1']; ?></td>


    </tr>
      <tr><td>  2. </td>
        <td><?php echo $row['ed2']; ?></td>
        <td><?php echo $row['bu2']; ?></td>
        <td><?php echo $row['yofp2']; ?></td>


    </tr>
      <tr><td>  3. </td>
        <td><?php echo $row['ed3']; ?></td>
        <td><?php echo $row['bu3']; ?></td>
        <td><?php echo $row['yofp3']; ?></td>


    </tr>
</table>

</div>


<div class="h"> <h3><u>Hobbies<u></h3>
<ul>
<li><p><?php echo $row['h1']; ?></p></li>
<li><p> <?php echo $row['h2']; ?></p></li>
<li><p><?php echo $row['h3']; ?></p></li>
</ul></div>

<div class="ref">
     <h3><u>References<u></h3>
        <ol>
           
            <li>    Name: <?php echo $row['ref1']; ?> <br>
                Position: <?php echo $row['ref_pos1']; ?><br> 
                Contact Number: <?php echo $row['con1']; ?></li>
           <li> Name: <?php echo $row['ref2']; ?> <br> Position:  <?php echo $row['ref_pos2']; ?> <br> Contact Number:  <?php echo $row['con2']; ?></li>
        </ol>
       


</div>


</div>



</section>

<?php 

}}
 ?>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>


</html>