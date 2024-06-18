<?php
include("db.php");

$sql = "SELECT title, description FROM finals";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="/css/module.css">
    <link rel="stylesheet" href="/css/mediaqueries.css">
    <title>Finals</title>
<body>
    <div class="container">
        <div class="side-bar" id="sideBar">       
            <h1 id="title">Cybersecurity</h1>
           
            <nav class="navbar">
            
            <div id="first">
                <a id="modules">
                    <span>Risk Management</span>
                    <i class="fa-solid fa-caret-down" id="finals-sidebar-first-topic-down"></i>
                    <i class="fa-solid fa-caret-up" id="finals-sidebar-first-topic-up"></i>
                    
                </a>

                <ul class="sidebar-dropdown-list" id="finals-first-topic-list">
                    <li id="finals-first-topic-list-one">Elements and Categories of Risks</li>
                    <li id="finals-first-topic-list-two">Risk Monitoring and Response</li>
                    <li id="finals-first-topic-list-three">Incident Handling and Documentation</li>
                    <li id="finals-first-topic-list-four">Backup and Recovery</li>
                </ul>

                
            </div>

            <div id="first">
                <a id="second-module">
                    <span>Incident Countermeasure</span>
                    <i class="fa-solid fa-caret-down" id="finals-sidebar-second-topic-down"></i>
                    <i class="fa-solid fa-caret-up" id="finals-sidebar-second-topic-up"></i>
                </a>

                <ul class="sidebar-dropdown-list" id="finals-second-topic-list">
                    <li id="finals-second-topic-list-one">Netiquette</li>
                    <li id="finals-second-topic-list-two">Firewall and Software</li>
                    <li id="finals-second-topic-list-three">Authentication Mechanisms</li>
                </ul>

                
            </div>
                <a href="syllabus.php"><span>Course Syllabus</span></a>
                <a href="courses.php"><span>Courses</span></a>
                <a href="syllabus.php"><span>About Us</span></a>
                <a href="settings.php"><span>Settings</span></a>
        
            </nav>
        
        </div>
        <div class="main-body">
            <header class="header">
            
                <section class="flex">
                    <button class="menu-icon" id="menu-btn"><i class="fas fa-bars"></i></button>
                    <form action="search.html" method="post" class="search-form">
                            <div id="search-form">
                                <input id="input-box-finals" type="text" name="search_box" required placeholder="search courses..." maxlength="100">
                                <button class="fas fa-search"></button>
                            </div>
                            
                            <div class="result-box-finals result-box">
                    
                            </div>
                        </form>


                    <div class="icons">
                    
                        <div id="user-btn" class="fas fa-user"></div>
                        
                    </div>    
                </section>

            </header>
            <section class="content-div" id="first-topic">
            <div class="lesson space" id="finals-first-topic-first-space"></div>
                <div class="lesson" id="finals-first-topic-first-lesson-title">
                    <?php
                        require_once("function.php");

                        $sql = "SELECT title, description FROM finals WHERE id = 1 ";
                        $result = $conn->query($sql);
 
                        echo showDetails($sql);
                       
                    ?>
                </div>
                <div class="lesson" id="finals-topic-first-lesson">
                    <?php
                        require_once("function.php");

                        $sql = "SELECT title, description FROM finals WHERE id = 2";
                        $result = $conn->query($sql);
                        echo "<div class='image'><img src='/images/14.PNG'></div>";
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM finals WHERE id = 3";
                        $result = $conn->query($sql);
                        echo "<div class='image'><img src='/images/15.PNG'></div>";
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 4 AND 5";
                        $result = $conn->query($sql);
                        echo showDetails($sql);
                        echo "<div class='image'><img src='/images/16.PNG'></div>";
                        
                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 7 AND 10";
                        $result = $conn->query($sql);
                        echo showDetailsGriD($sql);

                        $sql = "SELECT title, description FROM finals WHERE id = 11";
                        $result = $conn->query($sql);
                        echo showDetailsGridOneColumn($sql);
                        

                        $sql = "SELECT title, description FROM finals WHERE id = 12";
                        $result = $conn->query($sql);
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 13 AND 14";
                        $result = $conn->query($sql);
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title, description FROM finals WHERE id = 15";
                        $result = $conn->query($sql);
                        echo showDetailsGridOneColumn($sql);
                        echo "<div class='image'><img src='/images/17.PNG'></div>";

                        $sql = "SELECT title, description FROM finals WHERE id = 17";
                        $result = $conn->query($sql);
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 18 AND 23";
                        $result = $conn->query($sql);
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title, description FROM finals WHERE id = 24";
                        $result = $conn->query($sql);
                        echo showDetailsGridOneColumn($sql);
                        echo "<div class='image'><img src='/images/33.PNG'></div>";

                        $sql = "SELECT title, description FROM finals WHERE id = 121";
                        $result = $conn->query($sql);
                        echo showDetails($sql);
                        
                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 25 AND 28";
                        $result = $conn->query($sql);
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title, description FROM finals WHERE id = 29";
                        $result = $conn->query($sql);
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 30 AND 31";
                        $result = $conn->query($sql);
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title, description FROM finals WHERE id = 32";
                        $result = $conn->query($sql);
                        echo showDetailsGridOneColumn($sql);
                        echo "<div class='image'><img src='/images/34.PNG'></div>";

                        $sql = "SELECT title, description FROM finals WHERE id = 33";
                        $result = $conn->query($sql);
                        echo showDetails($sql);
                        echo "<div class='image'><img src='/images/35.PNG'></div>";

                        $sql = "SELECT title, description FROM finals WHERE id = 122";
                        $result = $conn->query($sql);
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 34 AND 35";
                        $result = $conn->query($sql);
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title, description FROM finals WHERE id = 36";
                        $result = $conn->query($sql);
                        echo showDetailsGridOneColumn($sql);

                        $sql = "SELECT title, description FROM finals WHERE id = 123";
                        $result = $conn->query($sql);
                        echo showDetails($sql);
                        
                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 37 AND 41";
                        $result = $conn->query($sql);
                        echo showDetailsGridOneColumn($sql);

                        
                    ?>
                </div>
                <div class="lesson space" id="finals-first-topic-second-space"></div>

                <div class="lesson" id="finals-first-topic-second-lesson-title">
                    <?php
                        $sql = "SELECT title, description FROM finals WHERE id = 42";
                        $result = $conn->query($sql);

                        echo showDetails($sql);
                    ?>
                </div>

                <div class="lesson" id="finals-first-topic-second-lesson">
                    <?php
                         require_once("function.php");
                         $sql = "SELECT title FROM finals WHERE id = 43";
                         $result = $conn->query($sql);
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM finals WHERE id BETWEEN 44 AND 47";
                         $result = $conn->query($sql);
                         echo showDetailsGrid($sql);

                        $sql = "SELECT title FROM finals WHERE id = 112";
                        $result = $conn->query($sql);
                        echo showDetails($sql);
                        echo "<div class='image'><img src='/images/36.PNG'></div>";

                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 48 AND 51";
                        $result = $conn->query($sql);
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM finals WHERE id = 124";
                        $result = $conn->query($sql);
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 52 AND 57";
                        $result = $conn->query($sql);
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 58 AND 59";
                        $result = $conn->query($sql);
                        echo showDetails($sql);
             
                 ?>

                </div>
                <div class="lesson space" id="finals-first-topic-third-space"></div>

                <div class="lesson" id="finals-first-topic-third-lesson-title">
                    <?php

                        $sql = "SELECT title, description FROM finals WHERE id = 60";
                        $result = $conn->query($sql);
 
                        echo showDetails($sql); 
                       
                    ?>
                </div>
             
                <div class="lesson" id="finals-first-topic-third-lesson">
                    <?php    
                       require_once("function.php");

                       $sql = "SELECT title, description FROM finals WHERE id = 61";
                       $result = $conn->query($sql);
                       echo showDetails($sql);
                       echo "<div class='image'><img src='/images/21.PNG'></div>";

                      

                       $sql = "SELECT title, description FROM finals WHERE id = 62";
                       $result = $conn->query($sql);

                       echo showDetails($sql);

                       $sql = "SELECT title, description FROM finals WHERE id = 125";
                       $result = $conn->query($sql);

                       echo showDetails($sql);
                       $sql = "SELECT title, description FROM finals WHERE id BETWEEN 63 AND 67";
                       $result = $conn->query($sql);

                       echo showDetailsGridOneColumn($sql);

                       $sql = "SELECT title, description FROM finals WHERE id = 68";
                       $result = $conn->query($sql);

                       echo showDetails($sql);

                       $sql = "SELECT title, description FROM finals WHERE id = 69";
                       $result = $conn->query($sql);

                       echo showDetailsGridOneColumn($sql);
                       echo "<div class='image'><img src='/images/22.PNG'></div>";

                       $sql = "SELECT title, description FROM finals WHERE id = 70";
                       $result = $conn->query($sql);

                       echo showDetailsGridOneColumn($sql);
                       echo "<div class='image'><img src='/images/23.PNG'></div>";

                       $sql = "SELECT title, description FROM finals WHERE id = 71";
                       $result = $conn->query($sql);

                       echo showDetailsGridOneColumn($sql);
                       echo "<div class='image'><img src='/images/24.PNG'></div>";

                       $sql = "SELECT title, description FROM finals WHERE id = 72";
                       $result = $conn->query($sql);

                       echo showDetailsGridOneColumn($sql);
                       echo "<div class='image'><img src='/images/25.PNG'></div>";

                       $sql = "SELECT title, description FROM finals WHERE id = 73";
                       $result = $conn->query($sql);

                       echo showDetailsGridOneColumn($sql);
                       echo "<div class='image'><img src='/images/26.PNG'></div>";

                       $sql = "SELECT title, description FROM finals WHERE id = 114";
                       $result = $conn->query($sql);

                       echo showDetailsGridOneColumn($sql);
                       
                       echo "<div class='image'><img src='/images/37.PNG'></div>";

                       $sql = "SELECT title, description FROM finals WHERE id BETWEEN 78 AND 84";
                       $result = $conn->query($sql);

                       echo showDetails($sql);

                       $sql = "SELECT title, description FROM finals WHERE id = 115";
                       $result = $conn->query($sql);

                       echo showDetailsGridOneColumn($sql);
                       
                       echo "<div class='image'><img src='/images/38.PNG'></div>";
            
                  ?>  
                        
                </div>
                <div class="lesson space" id="finals-first-topic-fourth-space"></div>

                <div class="lesson" id="first-topic-topic-fourth-lesson-title">
                    <?php
                         
                         require_once("function.php");
                         $sql = "SELECT title, description FROM finals WHERE id = 85";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);
                         echo "<div class='image'><img src='/images/39.PNG'></div>";

                         $sql = "SELECT title, description FROM finals WHERE id BETWEEN 117 AND 120";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM finals WHERE id = 116";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);
                         echo "<div class='image'><img src='/images/40.PNG'></div>";

                         $sql = "SELECT title, description FROM finals WHERE id = 127";
                         $result = $conn->query($sql);
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM finals WHERE id BETWEEN 89 AND 91";
                         $result = $conn->query($sql);
   
                         echo showDetailsGridOneColumn($sql);
                        
                         $sql = "SELECT title, description FROM finals WHERE id = 126";
                         $result = $conn->query($sql);
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM finals WHERE id BETWEEN 92 AND 96";
                         $result = $conn->query($sql);
   
                         echo showDetailsGridOneColumn($sql);
                         
                    ?>     
                </div>

            </section>
            
            <section class="content-div" id="second-topic">
                <div class="lesson space" id="finals-second-topic-first-space"></div>
                <div class="lesson" id="second-topic-first-lesson-title">
                    <?php
                      require_once("function.php");
                      $sql = "SELECT title, description FROM finals WHERE id = 97";
                      $result = $conn->query($sql);

                      echo showDetails($sql);

                    ?>
                </div>
                <div class="lesson" id="second-topic-first-lesson">
                    <?php
                        require_once("function.php");
                        $sql = "SELECT title FROM finals WHERE id = 128";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 98 AND 101";
                        $result = $conn->query($sql);
                        
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title FROM finals WHERE id = 129";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 102 AND 103";
                        $result = $conn->query($sql);
                        
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title FROM finals WHERE id = 104";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 105 AND 108";
                        $result = $conn->query($sql);
                        
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title, description FROM finals WHERE id = 109";
                        $result = $conn->query($sql);
                        
                        echo showDetailsGridOneColumn($sql);
                    ?>
                </div>
                <div class="lesson space" id="finals-second-topic-second-space"></div>
                <div class="lesson" id="second-topic-second-lesson-title">
                    <?php
                        require_once("function.php");
                        $sql = "SELECT title FROM finals WHERE id = 130";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);

                    ?>                
                </div>          
                <div class="lesson" id="second-topic-second-lesson">
                    <?php
                        require_once("function.php");
                        $sql = "SELECT * FROM finals WHERE id = 110";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);
                        echo "<div class='image'><img src='/images/41.PNG'></div>";

                        $sql = "SELECT * FROM finals WHERE id = 131";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);

                        $sql = "SELECT * FROM finals WHERE id BETWEEN 132 AND 141";
                        $result = $conn->query($sql);
                        
                        echo showDetailsGrid($sql);

                        $sql = "SELECT * FROM finals WHERE id = 142";
                        $result = $conn->query($sql);
                        

                        $sql = "SELECT * FROM finals WHERE id = 143";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);

                        $sql = "SELECT * FROM finals WHERE id BETWEEN 144 AND 149";
                        $result = $conn->query($sql);
                        
                        echo showDetailsGrid($sql);
    
    
    
                    ?>

                </div>
                <div class="lesson space" id="finals-second-topic-third-space"></div>
                <div class="lesson" id="second-topic-second-lesson-title">
                    <?php
                        require_once("function.php");
                        $sql = "SELECT title, description FROM finals WHERE id=161";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);    
                        
                    ?>
                </div>
                <div class="lesson" id="second-topic-second-lesson">
                    <?php
                        require_once("function.php");
                        $sql = "SELECT title, description FROM finals WHERE id=111";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);    
                        echo "<div class='image'><img src='/images/42.PNG'></div>";
                    ?>
                </div>
                <div class="lesson" id="second-topic-third-lesson">
                    <?php
                        require_once("function.php");
                        $sql = "SELECT title, description FROM finals WHERE id=150";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 151 AND 156";
                        $result = $conn->query($sql);
                        
                        echo showDetailsGrid($sql);
                        
                        $sql = "SELECT title, description FROM finals WHERE id=157";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM finals WHERE id BETWEEN 158 AND 160";
                        $result = $conn->query($sql);
                        
                        echo showDetailsGridOneColumn($sql);
                        
                    ?>
               
            </section>
        </div>  
    </div>

    <script src="/javascript/finals.js"></script>
    <script src="/javascript/menu.js"></script>
</body>
</html>
