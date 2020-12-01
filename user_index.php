
<?php 

// Include mpdf library file
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

// Database Connection 

$conn = new mysqli('localhost','root','','filedownload');
//Check for connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
// Select data from MySQL database
$select = "SELECT * FROM `personal`";
$result = $conn->query($select);
$data = array();
while($row = $result->fetch_object()){
  $data .= '<br>'
   .'<br>






   '.$row->fullname.'</br>'
    .'<br>'.$row->gender.'</br>'
     .'<br>'.$row->nationality.'</br>'
      .'<br>'.$row->religion.'</br>'
       .'<br>'.$row->phone.'</br>'
       .'<br>'.$row->dob.'</br>'
        .'<br>'.$row->bloodgroup.'</br></br>'
      
         .'<br>'.$row->ed1.'</br>'
          .'<br>'.$row->ed2.'</br>'
           .'<br>'.$row->ed3.'</br>'
            .'<br>'.$row->ps1.'</br>'
             .'<br>'.$row->ps2.'</br>'
              .'<br>'.$row->ps3.'</br>'
              .'<br>'.$row->name1.'</br>'
             .'<br>'.$row->name2.'</br>'
              .'<br>'.$row->name3.'</br>'
              .'<br>'.$row->name4.'</br>'
           .'<br>'.$row->work_exp1.'</br>'
              .'<br>'.$row->work_exp2.'</br>'
 
       .'<br>'.$row->dt.'</br>'
      .'<br>'.$row->info.'</br>'
      .'<br>'.$row->company.'</br>'
       .'<br>'.$row->h1.'</br>'
        .'<br>'.$row->h2.'</br>';
      //  .'<br>'.$row->h3.'</br>';
}

// Take PDF contents in a variable
/*$pdfcontent = '<h1>Welcome to etutorialspoint.com</h1>
    <h2>Employee Details</h2><table autosize="1"><br>
    <br style="width: 33%"><sbrong>NAME</sbrong></br>
    <br style="width: 36%"><sbrong>ADDRESS</sbrong></br>
    <br style="width: 30%"><sbrong>PHONE</sbrong></br>
    <br style="width: 30%"><sbrong>PHONE</sbrong></br>
    <br style="width: 30%"><sbrong>PHONE</sbrong></br>
    <br style="width: 33%"><sbrong>NAME</sbrong></br>
    <br style="width: 36%"><sbrong>ADDRESS</sbrong></br>
    <br style="width: 30%"><sbrong>PHONE</sbrong></br>
    <br style="width: 30%"><sbrong>PHONE</sbrong></br>
    <br style="width: 30%"><sbrong>PHONE</sbrong></br>
    <br style="width: 33%"><sbrong>NAME</sbrong></br>
    <br style="width: 36%"><sbrong>ADDRESS</sbrong></br>
    <br style="width: 30%"><sbrong>PHONE</sbrong></br>
    <br style="width: 30%"><sbrong>PHONE</sbrong></br>
    <br style="width: 30%"><sbrong>PHONE</sbrong></br>
    <br style="width: 33%"><sbrong>NAME</sbrong></br>
    <br style="width: 36%"><sbrong>ADDRESS</sbrong></br>
    <br style="width: 30%"><sbrong>PHONE</sbrong></br>
    <br style="width: 30%"><sbrong>PHONE</sbrong></br>
    <br style="width: 30%"><sbrong>PHONE</sbrong></br>
    <br style="width: 33%"><sbrong>NAME</sbrong></br>
    <br style="width: 36%"><sbrong>ADDRESS</sbrong></br>
    <br style="width: 30%"><sbrong>PHONE</sbrong></br>
    <br style="width: 30%"><sbrong>PHONE</sbrong></br>
    <br style="width: 30%"><sbrong>PHONE</sbrong></br>
   
    
    </br>
    '.$data.'
    </table>';*/

$mpdf->WriteHTML($data);

$mpdf->SebrisplayMode('fullpage');
$mpdf->list_indent_first_level = 0; 

//call watermark content and image
$mpdf->SetWatermarkText('etutorialspoint');
$mpdf->showWatermarkText = brue;
$mpdf->watermarkTextAlpha = 0.1;

//output in browser
$mpdf->Output();    
?>






<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>  Template 1</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootsbrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />



  <!--link rel="stylesheet" href="https://maxcdn.bootsbrapcdn.com/bootsbrap/3.4.1/css/bootsbrap.min.css">
 
  <script src="https://maxcdn.bootsbrapcdn.com/bootsbrap/3.4.1/js/bootsbrap.min.js"></script-->
 
</head>
<body>
<!-- Navbar -->
<!--nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">RESUME BUILDER</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       
         <li><a href="logouttt.php">Logout</a></li>
          
      </ul>
    </div>
  </div>
</nav-->

<nav class="navbar navbar-default">
  <form method="post" action="filed.php">
    
         <li><a href="logout.php">Logout</a></li>
          
     
</nav>
<div class="container">
  <p>If yourdsfbnfbds page is blank it seems that you didn't fill Full Resume Form!! If not please go ahead. </p>
</div>

  <br />  
        
                            
                       <section>     




    <div class="container-fluid overcover">
        <div class="container profile-box">
            <div class="row top-prof">
                <div class="col-md-4 scov">
                     
                    <ul>
                        <li>
                               <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i> 
                               </div>
                               <div class="detail">
                                      <br><?php echo $row["address"];?></br>
                               </div>
                          </li>    
                               
                        <li>
                           <div class="icon">
                                    <i class="fas fa-mobile-alt"></i> 
                               </div>
                               <div class="detail">
                                   
                                      <br><?php echo $row["phone"];?></br>
                               </div>
                           </li>
                        <li>
                         <div class="icon">
                                   <i class="far fa-envelope"></i>
                               </div>
                               <div class="detail">
                                     <br><?php echo $row["mail"];?></br>
                               </div>
                         </li>
                        <li>
                        <div class="icon">
                                   <i class="fas fa-globe-americas"></i>
                               </div>
                               
                           </li>
                        
                    </ul>
                      <div class="styl-bb"></div>
                </div>
                <div class="col-md-8">
                    <div class="row profile-go">
                        <div class="col-md-4">
                            <img src="assets/images/profile.jpg" alt="">
                        </div>
                        <div class="col-md-8 datadiv">
                            <h2>  <br><?php echo $row["fullname"];?></br> /  <?php echo $row["dt"];?></h2>
                            <p>  <br><?php echo $row["info"];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row more-detail">
                <div class="col-md-5">
                    <div class="education">
                        <h3><i class="fas fa-user-graduate"></i> Education Details</h3>
                        <ul>
                            <li>
                              <p>Basic Education</p>
                              <b><?php echo $row["ed1"];?></b>
                         
                            </li>


                            <li>
                              <p> Diploma</p>
                              <b><?php echo $row["ed2"];?></b>
                           
                            
                            </li>
                            <li>
                              <p>Bachlore Degree / Masters(if any) </p>
                              <b><?php echo $row["ed3"];?></b>
                            
                            
                            </li>
                           
                        </ul>
                    </div>
                    <div class="education">
                        <h3><i class="fas fa-briefcase"></i> Working Experiance</h3>
                        <ul>
                            <li><b><br><?php echo $row["work_exp1"];?></br></b>
                            
                           
                            </li>
                        </ul>
                    </div>
                    <div class="education">
                        <h3><i class="fas fa-briefcase"></i>jjjjj</h3>
                        <ul>
                            <li><b><br><?php echo $row["work_exp2"];?></br></b>
                            
                           
                            </li>
                        </ul>
                    </div>
                    <div class="education personal">
                        <h3><i class="fas fa-user"></i> Personal Detail</h3>
                        
                        <div class="row bd-ro">
                            <div class="col-sm-5">
                                Date of Dirth
                                <span>:</span>
                            </div>
                            <div class="col-sm-7">
                               <br><?php echo $row["dob"];?></br>
                            </div>
                        </div>
                        <div class="row bd-ro">
                            <div class="col-sm-5">
                              Your Nationality
                                <span>:</span>
                            </div>
                            <div class="col-sm-7">
                              <br><?php echo $row["nationality"];?></br>
                            </div>
                        </div>
                        <div class="row bd-ro">
                            <div class="col-sm-5">
                              Religion
                                <span>:</span>
                            </div>
                            <div class="col-sm-7">
                                <br><?php echo $row["religion"];?></br>
                            </div>
                        </div>
                        <div class="row bd-ro">
                            <div class="col-sm-5">
                                Bloog Group
                                <span>:</span>
                            </div>
                            <div class="col-sm-7">
                                <br><?php echo $row["bloodgroup"];?></br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                     <div class="education">
                        <h3><i class="far fa-object-ungroup"></i> Profesional Skills</h3>
                        <div class="profess-cover">
                                            <div class="row prog-row">
                                                <div class="col-sm-6">
                                                Working speed 
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width:  <?php echo $row["ps1"];?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
                                                </div>
                                            </div>
                                            <div class="row prog-row">
                                                <div class="col-sm-6">
                                                 Technical Concepts  
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="progress">
  <div class="progress-bar" role="progressbar"style="width:  <?php echo $row["ps2"];?>%;" aria-valuemin="0" aria-valuemax="100"></div>
</div>
                                                </div>
                                            </div>
                                            <div class="row prog-row">
                                                <div class="col-sm-6">
                                                  Implimentation
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width:  <?php echo $row["ps3"];?>%;" aria-valuemin="0" aria-valuemax="100"></div>
</div>
                                              
                                                </div>
                                            </div>


  



                                        </div>
                    </div>
                    <div class="education">
                        <h3><i class="fas fa-pen-fancy"></i> Personal Skills</h3>
                        <div class="profess-cover">
                                            <div class="row prog-row">
                                                <div class="col-sm-6">
                                                    Creativity
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width:<?php echo $row["hb1"];?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
                                                </div>
                                            </div>
                                            <div class="row prog-row">
                                                <div class="col-sm-6">
                                                    Communicatin
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width:  <?php echo $row["hb2"];?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
                                                </div>
                                            </div>
                                            <div class="row prog-row">
                                                <div class="col-sm-6">
                                                    Team Work
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width:  <?php echo $row["hb3"];?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
                                                </div>
                                            </div>
                                       

                                                </div>
                                            </div>
                                        </div>
                    </div>
                    <div class="education row no-margin activity">
                        <h3><i class="far fa-object-ungroup"></i> other</h3>
                        <ul>
                            
                            <li> <?php echo $row["company"];?></li>

                          
                        </ul>
                    </div>
                    <div class="education aars">
                        <h3><i class="fas fa-brophy"></i> Certificates</h3>
                        <ul>
                            <li><b><?php echo $row["name1"];?></b></li>
                           
                           
                            <li><b><?php echo $row["name2"];?></b></li>
                           
                            
                            <li><b><?php echo $row["name3"];?></b></li>
                            
                          
                            <li><b><?php echo $row["name4"];?></b>
                           </li>
                            
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>




    </br> 
                         


                           <br /> 
                          </br>  
                                <div class="container" ></div><br>
<div class="container"><br ><button class="btn btn-success " type="submit">Download</button></a></br>


</div>        
                          </br>  
                         
                </div>  
           </div>  
         <br></p></div></div></div></div>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootsbrap.min.js"></script>
<script src="assets/js/script.js"></script>


</html>





