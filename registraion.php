<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">  
<meta name='apple-mobile-web-app-capable' content='yes' />

<title>Enroll form</title>

<link rel="stylesheet" media="screen" href="css/bootstrap-31.css" />
<link href="css/basef94a.css" rel="stylesheet" ></link>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<link rel="stylesheet" type="text/css" href="css/dev.css">





</head>

<body>

<?php
include 'header.php';
?>

<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Member Login</h2>
                    <form method="POST" action="insert.php">
                        
                        <div class="input-group">
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <span class="fa fa-user login_icon" style="font-size: 16px; margin: 12px 0px 0px 15px; color: #4d4d4d;"></span>
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <input class="input--style-3" type="text" placeholder="Name" name="name">
                                </div>
                             </div>
                        </div>


                        <div class="input-group">
                        	<div class="row">
                        		<div class="col-md-2 col-sm-2">
                        			<span class="fa fa-envelope login_icon" style="font-size: 14px; margin: 14px 0px 0px 15px; color: #4d4d4d;"></span>
                        		</div>
                        		<div class="col-md-10 col-sm-10">
                            		<input class="input--style-3" type="text" placeholder="Email" name="email">
                            	</div>
                       		 </div>
                    	</div>


                        <div class="input-group">
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <span class="fa fa-mobile login_icon" style="font-size: 26px; margin: 10px 0px 0px 15px; color: #4d4d4d;"></span>
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <input class="input--style-3" type="text" placeholder="Contact Number" name="contact">
                                </div>
                             </div>
                        </div>

                            <div class="input-group">
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <span class="fa fa-lock login_icon" style="font-size: 20px; margin: 12px 0px 0px 15px; color: #4d4d4d;"></span>
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <input class="input--style-3" type="text" placeholder="Password" name="password">
                                </div>
                             </div>
                        </div>
	                        
                    
              
                      
                        <div class="p-t-10">
                            <button class="btn btn-success" type="submit"><a href="insert.php"> Submit</a></button>
                        </div>
                        
                    </form>
                    
                </div>

            </div>    
        </div>
    </div>

<?php

include 'footer.php';

?>



    <!-- Vendor JS-->
    <script src="js/select2/select2.min.js"></script>
  

    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>

</html>