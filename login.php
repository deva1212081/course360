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

include 'connect.php';

session_start();

if (isset($_POST['name'])) {
	$name=$_POST['name'];
	$password=$_POST['password'];

$sql= "SELECT * FROM registration WHERE name='".$name."' AND password='".$password."'limit 1";

$select=mysqli_query($connect,$sql);


while ($result=mysqli_fetch_assoc($select)) {
	
	$name=$result['name'];
	$password=$result['password'];

	if ($password!=$password || $name!=$name) {
		echo "Incorrect Details";
	}
	else{
		$_SESSION['name']=$name;
	header('location:home.php');
	}



}

/*if(mysqli_num_rows($result)==1){
	$_SESSION['name']=$name;
	header('location:index.php');
}else{
	echo "check chesko ra...";
}die;*/

}


?>
<?php
include 'header.php';
?>




<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Member Login</h2>
                    <form method="POST" action="#">
                        <div class="input-group">
                        	<div class="row">
                        		<div class="col-md-2 col-sm-2">
                        			<span class="fa fa-envelope-o login_icon" style="font-size: 16px; margin: 12px 0px 0px 15px; color: #4d4d4d;"></span>
                        		</div>
                        		<div class="col-md-10 col-sm-10">
                            		<input class="input--style-3" type="text" placeholder="User Name" name="name">
                            	</div>
                       		 </div>
                    	</div>

                            <div class="input-group">
	                        	<div class="row">
	                        		<div class="col-md-2 col-sm-2">
	                        			<span class="fa fa-lock login_icon" style="font-size: 16px; margin: 12px 0px 0px 15px; color: #4d4d4d;"></span>
	                        		</div>
	                        		<div class="col-md-10 col-sm-10">
	                            		<input class="input--style-3" type="Password" placeholder="Password" name="password">
	                            	</div>
	                       		 </div>
	                    	</div>
	                        
                    
              
                      
                        <div class="p-t-10">
                            <button class="btn btn-success" type="submit"><a href="#"> Submit</a></button>
                           
                        </div>
                        <div class="forgot_user">Forgot <a href="#" class="forgot">Email / Password</a> </div>

                    </form>
                    <div class="create_account"><a href="registraion.php">  Create New Account </a> <i class="fa fa-long-arrow-right"></i> </div>
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