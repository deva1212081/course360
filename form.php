<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">  
<meta name='apple-mobile-web-app-capable' content='yes' />

<title>Enroll form</title>

<link rel="stylesheet" media="screen" href="css/bootstrap-31.css" />
<link href="css/basef94a.css" rel="stylesheet" ></link>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link href="js/select2/select2.min.css" rel="stylesheet" media="all">
    

  

<link href="js/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">




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
                    <h2 class="title">Enroll Form</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                        </div>
                    
                   <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search input--style-3">
                                <select name="course">
                                    <option disabled="disabled" selected="selected">Course</option>
                                    <option>Full Stack</option>
                                    <option>Full Stack</option>
                                    <option>Full Stack</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                      
                        <div class="p-t-10">
                            <button class="btn " type="submit">Submit</button>
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