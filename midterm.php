<?php
include("db.php");

$sql = "SELECT title, description FROM prelim";
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
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="/css/module.css">
    <link rel="stylesheet" href="/css/mediaqueries.css">
    <title>Midterm</title> 
<body>
    <div class="container">
        <div class="side-bar" id="sideBar">       
            <h1 id="title">Cybersecurity</h1>
           
            <nav class="navbar">
            
            <div id="first">
                <a id="modules">
                    <span>Typical Domains of IT Infrastracture</span>
                    <i class="fa-solid fa-caret-down" id="midterm-sidebar-first-topic-down"></i>
                    <i class="fa-solid fa-caret-up" id="midterm-sidebar-first-topic-up"></i>
                    
                </a>

                <ul class="sidebar-dropdown-list" id="midterm-first-topic-list">
                    <li id="midterm-first-topic-list-one">User, LAN, and WAN Domain</li>
                    <li id="midterm-first-topic-list-two">Remote Access Domain</li>
                    <li id="midterm-first-topic-list-three">System/Application Domain</li>
                    <li id="midterm-first-topic-list-four">Ethics and the Internet</li>
                </ul>

                
            </div>

            <div id="first">
                <a id="second-module">
                    <span>Security System Engineering</span>
                    <i class="fa-solid fa-caret-down" id="midterm-sidebar-second-topic-down"></i>
                    <i class="fa-solid fa-caret-up" id="midterm-sidebar-second-topic-up"></i>
                </a>

                <ul class="sidebar-dropdown-list" id="midterm-second-topic-list">
                    <li id="midterm-second-topic-list-one">Policy Development</li>
                    <li id="midterm-second-topic-list-two">Process Management</li>
                    <li id="midterm-second-topic-list-three">Network Compliance</li>
                    <li id="midterm-second-topic-list-four">Cryptography</li>
                </ul>

                
            </div>

            <div id="first">
                <a id="third-module">
                    <span>Cryptography</span>
                    <i class="fa-solid fa-caret-down" id="midterm-sidebar-third-topic-down"></i>
                    <i class="fa-solid fa-caret-up" id="midterm-sidebar-third-topic-up"></i>
                </a>

                <ul class="sidebar-dropdown-list" id="midterm-third-topic-list">
                    <li id="midterm-third-topic-list-one">Caesar Cipher</li>
                    <li id="midterm-third-topic-list-two">Keyword Cipher</li>
                    <li id="midterm-third-topic-list-three">Giovanni’s Method</li>
                    <li id="midterm-third-topic-list-four">Transposition Technique</li>
                    <li id="midterm-third-topic-list-five">Polyalphabetic Cipher</li>
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
                                <input id="input-box-midterm" type="text" name="search_box" required placeholder="search courses..." maxlength="100">
                                
                            </div>
                            
                            <div class="result-box-midterm result-box">
                    
                            </div>
                        </form>

                    <div class="icons">
                    
                        <div id="user-btn" class="fas fa-user"></div>
                        
                    </div>    
                </section>

            </header>
            <section class="content-div" id="first-topic">
                <div class="lesson space" id="midterm-first-topic-first-space"></div>
                <div class="lesson" id="first-topic-first-lesson-title">
                    <?php
                        require_once("function.php");

                        $sql = "SELECT title FROM midterm WHERE id = 1";
                        $result = $conn->query($sql);
 
                        echo showDetails($sql);
                       
                    ?>
                </div>
                <div class="lesson" id="first-topic-first-lesson-sub-topic">
                    <?php
                        require_once("function.php");

                        $sql = "SELECT title, description FROM midterm WHERE id = 2";
                        $result = $conn->query($sql);
 
                        echo showDetails($sql);

                
                    ?>
                </div>
                <div class="lesson" id="first-topic-first-lesson-sub-topic">
                    <?php
                        require_once("function.php");

                        $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 3 AND 23";
                        $result = $conn->query($sql);
 
                        echo showDetails($sql);

                
                    ?>
                </div>
                <div class="lesson" id="first-topic-first-lesson-sub-topic">
                    <?php
                        require_once("function.php");

                        $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 24 AND 35";
                        $result = $conn->query($sql);
 
                        echo showDetails($sql);

                
                    ?>
                </div>
                <div class="lesson space" id="midterm-first-topic-second-space"></div>
                <div class="lesson" id="first-topic-second-lesson-title">
                    <?php
                        require_once("function.php");

                        $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 36 AND 37";
                        $result = $conn->query($sql);
 
                        echo showDetails($sql);

                        
                        $sql = "SELECT title, description FROM midterm WHERE id = 38";
                        $result = $conn->query($sql);
                        
                        echo showDetailsGridOneColumn($sql);

                        $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 39 AND 40";
                        $result = $conn->query($sql);
                        
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title, description FROM midterm WHERE id = 41";
                        
                        echo showDetailsGridOneColumn($sql);

                        $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 42 AND 46";
                        $result = $conn->query($sql);
                        
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title, description FROM midterm WHERE id = 49";
                        
                        echo showDetailsGridOneColumn($sql);

                        $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 50 AND 51";
                        $result = $conn->query($sql);
                        
                        echo showDetailsGrid($sql);
              
                    ?>
                </div>
                <div class="lesson space" id="midterm-first-topic-third-space"></div>
                <div class="lesson" id="first-topic-third-lesso">
                    <?php
                        require_once("function.php");

                        $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 54 AND 58";
                        $result = $conn->query($sql);
 
                        echo showDetails($sql);

                        $sql = "SELECT title FROM midterm WHERE id = 59";
                        $result = $conn->query($sql);
 
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 60 AND 61";
                        $result = $conn->query($sql);
 
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 62 AND 63";
                        $result = $conn->query($sql);
 
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title FROM midterm WHERE id = 64";
                        $result = $conn->query($sql);
 
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 65 AND 66";
                        $result = $conn->query($sql);
 
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 67 AND 68";
                        $result = $conn->query($sql);
 
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title FROM midterm WHERE id = 162";
                        $result = $conn->query($sql);
 
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 69 AND 70";
                        $result = $conn->query($sql);
 
                        echo showDetailsGrid($sql);

                        $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 71 AND 73";
                        $result = $conn->query($sql);
 
                        echo showDetails($sql);
                        
                        
                        
                        
                    ?>
                </div>
                <div class="lesson space" id="midterm-first-topic-fourth-space"></div>
                <div class="lesson" id="first-topic-fourth-lesson">
                    <?php    
                       require_once("function.php");

                       $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 84 AND 91";
                       $result = $conn->query($sql);

                       echo showDetails($sql);

                       $sql = "SELECT title, description FROM midterm WHERE id = 92";
                       $result = $conn->query($sql);

                       echo showDetailsGridOneColumn($sql);

                       $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 93 AND 96";
                       $result = $conn->query($sql);

                       echo showDetailsGrid($sql);

                       $sql = "SELECT title, description FROM midterm WHERE id = 97";
                       $result = $conn->query($sql);

                       echo showDetailsGridOneColumn($sql);

                       $sql = "SELECT title, description FROM midterm WHERE id = 98";
                       $result = $conn->query($sql);

                       echo showDetails($sql);

                       $sql = "SELECT title FROM midterm WHERE id = 99";
                       $result = $conn->query($sql);

                       echo showDetails($sql);

                       $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 99 AND 102";
                       $result = $conn->query($sql);

                       echo showDetailsGridDescriprtion($sql);

                       $sql = "SELECT title FROM midterm WHERE id = 103";
                       $result = $conn->query($sql);

                       echo showDetails($sql);

                       $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 103 AND 104";
                       $result = $conn->query($sql);

                       echo showDetailsGridDescriprtion($sql);

                       $sql = "SELECT title, description FROM midterm WHERE id = 105";
                       $result = $conn->query($sql);

                       echo showDetailsGridOneColumn($sql);

                       $sql = "SELECT title FROM midterm WHERE id = 106";
                       $result = $conn->query($sql);

                       echo showDetails($sql);

                       $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 106 AND 113";
                       $result = $conn->query($sql);

                       echo showDetailsGridDescriprtion($sql);

                  ?>  
                        
                </div>
            </section>
            
            <section class="content-div" id="second-topic">
                <div class="lesson space" id="midterm-second-topic-first-space"></div>
                <div class="lesson" id="first-topic-first-lesson-title">
                    <?php
                         $sql = "SELECT title, description FROM midterm WHERE id = 163";
                         $result = $conn->query($sql);
 
                         echo showDetails($sql);

                         
                    ?>       
                </div>
                <div class="lesson" id="first-topic-first-lesson">
                    <?php
                         $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 114 AND 115";
                         $result = $conn->query($sql);
 
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 116 AND 119";
                         $result = $conn->query($sql);
 
                         echo showDetailsGrid($sql);

                         $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 120 AND 121";
                         $result = $conn->query($sql);
 
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 122 AND 123";
                         $result = $conn->query($sql);
 
                         echo showDetailsGrid($sql);

                         $sql = "SELECT title, description FROM midterm WHERE id = 124";
                         $result = $conn->query($sql);
 
                         echo showDetailsGridOneColumn($sql);

                         $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 125 AND 130";
                         $result = $conn->query($sql);
 
                         echo showDetails($sql);
                    ?>       
                </div>
                <div class="lesson space" id="midterm-second-topic-second-space"></div>
                <div class="lesson" id="first-topic-second-lesson-title">
                    <?php
                         $sql = "SELECT title, description FROM midterm WHERE id = 163";
                         $result = $conn->query($sql);
 
                         echo showDetails($sql);

                         
                    ?>       
                </div>
                <div class="lesson" id="second-topic-second-lesson">
                    <?php
                        $sql = "SELECT title, description FROM midterm  WHERE id = 131";
                        $result = $conn->query($sql);

                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM midterm  WHERE id BETWEEN 132 AND 139";
                        $result = $conn->query($sql);

                        echo showDetailsGrid($sql);
                    ?>
                                            
                
                </div>
                <div class="lesson space" id="midterm-second-topic-third-space"></div>
                <div class="lesson" id="first-topic-third-lesson-title">
                    <?php
                         $sql = "SELECT title FROM midterm WHERE id = 140";
                         $result = $conn->query($sql);
 
                         echo showDetails($sql);

                         
                    ?>       
                </div>
                <div class="lesson" id="second-topic-third-lesson">
                    <?php
                        $sql = "SELECT title, description FROM midterm  WHERE id BETWEEN 140 AND 143";
                        $result = $conn->query($sql);

                        echo showDetailsGrid($sql);
                    ?>
                                            
                
                </div>
                <div class="lesson space" id="midterm-second-topic-fourth-space"></div>
                <div class="lesson" id="first-topic-fourth-lesson">
                    <?php
                        $sql = "SELECT title, description FROM midterm  WHERE id BETWEEN 144 AND 152";
                        $result = $conn->query($sql);

                        echo showDetails($sql);
                    ?>
                                            
                
                </div>
            </section>

            <section class="content-div" id="third-topic">
                <div class="lesson space" id="midterm-third-topic-first-space"></div>
                <div class="lesson" id="third-topic-title">
                        <?php
                         $sql = "SELECT title FROM midterm WHERE id = 153";
                         $result = $conn->query($sql);
 
                         echo showDetails($sql);
                    ?>             
                </div>
                <div class="lesson" id="third-topic-first-lesson">
                        <?php
                        $sql = "SELECT title, description FROM midterm WHERE id = 154";
                         $result = $conn->query($sql);
 
                         echo showDetails($sql);
                         echo "<div class='image'><img src='/images/28.PNG'></div>";
                    ?>
                </div>
                <div class="lesson space" id="midterm-third-topic-second-space"></div>
                <div class="lesson" id="third-topic-second-lesson">
                        <?php
                        $sql = "SELECT title, description FROM midterm WHERE id = 155";
                         $result = $conn->query($sql);
 
                         echo showDetails($sql);
                         echo "<div class='image'><img src='/images/29.PNG'></div>";
                    ?>
                </div>
                <div class="lesson space" id="midterm-third-topic-third-space"></div>
                <div class="lesson" id="third-topic-third-lesson">
                        <?php
                        $sql = "SELECT title, description FROM midterm WHERE id = 156";
                         $result = $conn->query($sql);
 
                         echo showDetails($sql);
                         echo "<div class='image'><img src='/images/32.PNG'></div>";

                         $sql = "SELECT title, description FROM midterm WHERE id BETWEEN 157 AND 159";
                         $result = $conn->query($sql);
 
                         echo showDetails($sql);
                    ?>
                </div>
                <div class="lesson space" id="midterm-third-topic-fourth-space"></div>
                <div class="lesson" id="third-topic-fourth-lesson">
                        <?php
                        $sql = "SELECT title, description FROM midterm WHERE id = 160";
                         $result = $conn->query($sql);
 
                         echo showDetails($sql);
                         echo "<div class='image'><img src='/images/30.PNG'></div>";
                    ?>
                </div>
                <div class="lesson space" id="midterm-third-topic-fifth-space"></div>
                <div class="lesson" id="third-topic-fifth-lesson">
                        <?php
                        $sql = "SELECT title, description FROM midterm WHERE id = 161";
                         $result = $conn->query($sql);
 
                         echo showDetails($sql);
                         echo "<div class='image'><img src='/images/31.PNG'></div>";
                    ?>
                </div>
                
            </section>
        </div>  
    </div>

    <script src="/javascript/midterm.js"></script>
    <script src="/javascript/menu.js"></script>
</body>
</html>
