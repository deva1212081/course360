<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Courses</title>


<link rel="stylesheet" media="screen" href="css/bootstrap-31.css" >
<link href="css/basef94a.css" rel="stylesheet" >
<link rel="stylesheet" type="text/css" href="css/style1.css">



<script src="js/application-c.js" ></script>
<script src="js/student-a.js"></script>

</head>
<body>

<?php

include 'header.php';

?>


<div role="main" class='view-school'>
  
<div class='view-directory course-directory '>
  <div class='container'>
    <div class='row search'>
      
        <!-- Filter: Category -->
        <div class='pull-left course-filter'>
          <div class="filter-label">
            Category:
          </div>
          <div class="btn-group">
            <button class="btn btn-default btn-lg btn-course-filter dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
              
                All <span class="caret"></span>
              
            </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="courses.php">All</a></li>
              
                
                  <li><a href="courses/category/Back-end.html">Back end (24)</a></li>
                
              
                
                  <li><a href="courses/category/Bundles.html">Bundles (3)</a></li>
                
              
                
                  <li><a href="courses/category/Computer%20Science%20Essentials.html">Computer Science Essentials (7)
                  </a></li>
                
              
                
                  <li><a href="courses/category/Front-end.html">Front end (15)</a></li>
                
              
            </ul>
          </div>
        </div>
        <!-- Filter: Author -->
       <!--  <div class='pull-left course-filter'>
          <div class="filter-label">
            Author:
          </div>
          <div class="btn-group">
            <button class="btn btn-default btn-lg btn-course-filter dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
              
                All <span class="caret"></span>
              
            </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="courses.html">All</a></li>
              
                <li><a href="courses/author/111013.html">Chris</a></li>
              
                <li><a href="courses/author/105281.html">Mosh Hamedani</a></li>
              
            </ul>
          </div>
        </div> -->
      
      <!-- Search Box -->
      <div class='col-lg-4 col-md-4 col-xs-12 pull-right'>
        <form role="search" method="get" action="courses.html">
            <div class="input-group">
              <label for="search-courses" class="sr-only">Find a course</label>
              <input class='form-control search input-lg' data-list='.list' id='search-courses' name="query" placeholder="Find a course" type='text'>
            <span class="input-group-btn">
              <button aria-label="Search Courses" id="search-course-button" class="btn search btn-default btn-lg" type="submit"><i class='fa fa-search' title='Search'></i></button>
            </span>
          </div>
        </form>
      </div>
    </div>
    <!-- Filter Title & Description-->
    
    <div class='row course-list list'>
      <!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="240431" data-course-url="/p/all-access", class='course-listing' >
    <div class='row'>
      <a href="p/all-access.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            Full Stack Web Developer
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
            A full-stack developer is a person who can develop both client and server software.
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        
        <div class='small course-bundle'>
          26 Course Bundle
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="240431">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-737227">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="417695" data-course-url="/p/python-programming-course-beginners", class='course-listing' >
    <div class='row'>
      <a href="p/python-programming-course-beginners.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            AWS Solution Architect – Associate & Professional
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
            Amazon Web Services (AWS) is widely used cloud platform in the world.
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        
        <!-- Author Image and Name (everyone) -->
         <div class='small course-bundle'>
          6 Weeks Course
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="417695">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-866084">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="496060" data-course-url="/p/full-stack-javascript-developer-bundle", class='course-listing' >
    <div class='row'>
      <a href="p/full-stack-javascript-developer-bundle.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            Digital Marketing
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
            Digital Marketing is the process of reaching your target audiences in a more effective and precise way through various digital channels, to attract, engage and convert them to customers.
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        
        <div class='small course-bundle'>
          6 Course Bundle
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="496060">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="680815" data-course-url="/p/data-structures-algorithms", class='course-listing' >
    <div class='row'>
      <a href="p/data-structures-algorithms.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            Core Java
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
            It is used to devlop all desktop and mobile applications. Core java is a very beginning of java without this no one can get Advanced Java
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        
        <div class='small course-bundle'>
          3 Course Bundle
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="680815">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-1412264">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="357787" data-course-url="/p/mastering-react", class='course-listing' >
    <div class='row'>
      <a href="p/mastering-react.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            Advanced Java
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
             It is used to devlop all desktop and mobile applications. 
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        
        <!-- Author Image and Name (everyone) -->
        
        <div class='small course-bundle'>
          2 Weeks Course
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="357787">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-754264">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="293204" data-course-url="/p/the-complete-node-js-course", class='course-listing' >
    <div class='row'>
      <a href="p/the-complete-node-js-course.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            Automation Anywhere
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
              Robotic Process Automation (RPA) allows us to automate the tasks as a human being would do across the application.
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        
    
         <div class='small course-author-name'>
        2 Weeks Course
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="293204">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-947427">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="606250" data-course-url="/p/the-ultimate-java-mastery-series", class='course-listing' >
    <div class='row'>
      <a href="p/the-ultimate-java-mastery-series.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            APACHE SPARK WITH SCALA
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
            Apache Spark is an open-source Big Data Processing framework with the cost-effective, sophisticated analytics and speed of use. 
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        
        <div class='small course-bundle'>
          3 Course Bundle
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="606250">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-1514333">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="496615" data-course-url="/p/the-ultimate-full-stack-net-developer-bundle", class='course-listing' >
    <div class='row'>
      <a href="p/the-ultimate-full-stack-net-developer-bundle.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            RPA UI PATH AND BLUE PRISM
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
            RPA is an emerging form of business process automation technology based on the notion of metaphorical software robots or artificial intelligence (AI) workers.
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        
        <div class='small course-bundle'>
          8 Course Bundle
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="496615">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-993430">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="206545" data-course-url="/p/angular-master-class", class='course-listing' >
    <div class='row'>
      <a href="p/angular-master-class.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            Microsoft Azure
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
            Build professional, interactive apps with Angular - the most popular framework for building web apps. This course covers everything.
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        
        
        <div class='small course-bundle'>
          6 Weeks Course
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="206545">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-947508">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="525068" data-course-url="/p/complete-sql-mastery", class='course-listing' >
    <div class='row'>
      <a href="p/complete-sql-mastery.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            UiPath -Robotic Process Automation
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
            UiPath is one of the best Robotic Process Automation tools.UiPath Training makes an aspirant work very quickly with an easy process by using diagrams and flowcharts in the UiPath studio.
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        <div class='small course-bundle'>
          2 Weeks Course
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="525068">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-1057975">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="222293" data-course-url="/p/asp-net-mvc", class='course-listing' >
    <div class='row'>
      <a href="p/asp-net-mvc.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            VAPT -Ethical Hacking
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
             Ethical hacking is to fix these vulnerabilities found during testing and improve the security of the system or network.
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
            
        <div class='small course-bundle'>
          #Weeks Course
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="222293">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-947528">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="324741" data-course-url="/p/javascript-basics-for-beginners", class='course-listing' >
    <div class='row'>
      <a href="p/javascript-basics-for-beginners.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            DevOps
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
            DevOps is a set of practices that automates the processes between software development and IT teams, in order that they can build, test, and release software faster and more reliably.
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        
          <div class='small course-bundle'>
          #Weeks Course
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="324741">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-662698">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="639884" data-course-url="/p/data-structures-algorithms-part1", class='course-listing' >
    <div class='row'>
      <a href="p/data-structures-algorithms-part1.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            SAP HANA
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
            It is a combination of both hardware and software, integrating different components like SAP SLT (System Landscape Transformation) Replication server, AP HANA Database, Sybase replication technology, and SAP HANA Direct Extractor connection.
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        <div class='small course-bundle'>
          #Weeks Course
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="639884">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-1308953">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="650827" data-course-url="/p/data-structures-algorithms-part-2", class='course-listing' >
    <div class='row'>
      <a href="p/data-structures-algorithms-part-2.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            SAP Basis
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
           SAP Basis refers to the administration of the SAP system which incorporates configuration and installation, load balancing, and the performance of SAP applications which are running on Java stack and SAP ABAP.
        </div></div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        
        <!-- Author Image and Name (everyone) -->
        
        <div class='small course-bundle'>
          26 Course Bundle
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="650827">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-1337121">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="680168" data-course-url="/p/data-structures-algorithms-part-3", class='course-listing' >
    <div class='row'>
      <a href="p/data-structures-algorithms-part-3.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            Hadoop
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
            The Apache Hadoop is an open-source software library framework that allows the distributed processing of large data sets across clusters of computers using simple programming models.
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        
        <!-- Author Image and Name (everyone) -->
        
       <div class='small course-bundle'>
          26 Course Bundle
        </div>

      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="680168">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-1410770">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="580597" data-course-url="/p/ultimate-java-part-1", class='course-listing' >
    <div class='row'>
      <a href="p/ultimate-java-part-1.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            Blue Prism
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
            Blue Prism is Robotic Process Automation (RPA) pioneers who have the advanced capabilities to access and harness the power of automation, AI and other disruptive technologies that will help the organizations to fetch high with less effort.
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        
        <!-- Author Image and Name (everyone) -->
        
        <div class='small course-bundle'>
          26 Course Bundle
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="580597">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-1242126">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="606251" data-course-url="/p/ultimate-java-part-2", class='course-listing' >
    <div class='row'>
      <a href="p/ultimate-java-part-2.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='images/all2.jpg' role="presentation">
          </div>
          <div class='course-listing-title'>
            Selenium Web Driver with Java, Automation Frameworks, Live Project Training
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
            Selenium is an open-source tool to automate web applications across different browsers and platforms.
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        
        <!-- Author Image and Name (everyone) -->
        
      <div class='small course-bundle'>
          # Course Bundle
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="606251">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-1242170">

        </div>
      </div>
    </div>
  </div>
</div>


<!-- Course Listing -->
<div class='col-xs-12 col-sm-6 col-md-4'>
  <div data-course-id="222856" data-course-url="/p/angular-crash-course", class='course-listing' >
    <div class='row'>
      <a href="p/angular-crash-course.html" data-role="course-box-link">
        <div class='col-lg-12'>
          <!-- Course Image, Name & Subtitle (everyone) -->
          <div class='course-box-image-container'>
            <img class='course-box-image' src='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/stccKo5kR5iZY7CtLFvi' role="presentation">
          </div>
          <div class='course-listing-title'>
            Angular 4 Crash Course for Busy Developers
          </div>
          <!-- Progress bar (enrolled users) -->
          <div class='col-xs-12 hidden'>
            <div class='progressbar'>
              <div class='progressbar-fill'></div>
            </div>
          </div>
          <!-- Subtitle (unenrolled users) -->
          <div class='course-listing-subtitle'>
            Learn the Angular essentials, from setup to deployment, in 2 days. The fastest way to get started with Angular!
          </div>
        </div>
      </a>
    </div>
    <div class='course-listing-extra-info col-xs-12'>
      <div class='pull-left'>
        <!-- Bundle Info (everyone) -->
        
        <!-- Author Image and Name (everyone) -->
        
        <div class='small course-bundle'>
          # Course Bundle
        </div>
        
      </div>
      <!-- Progress percentage (enrolled users) -->
      <div class='pull-right hidden'>
        <div class='small course-progress'>
          <span class='percentage' data-course-id="222856">
            %
          </span>
          <br>
          COMPLETE
        </div>
      </div>
      <!-- Price (unenrolled users) -->
      <div class='pull-right'>
        <div class='small course-price' id="course-box-price-product-947538">

        </div>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</div>
</div>


    
<?php

include 'footer.php';

?>        



  </body>

</html>
