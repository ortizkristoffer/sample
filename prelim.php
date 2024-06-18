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
    <title>Prelim</title>
<body>
    <div class="container">
        <div class="side-bar" id="sideBar">       
            <h1 id="title">Cybersecurity</h1>
           
            <nav class="navbar">
            
            <div id="first">
                <a id="modules">
                    <span>Information Systems Security</span>
                    <i class="fa-solid fa-caret-down up" id="module-one-sidebar-first-topic-down"></i>
                    <i class="fa-solid fa-caret-up down" id="module-one-sidebar-first-topic-up"></i>
                    
                </a>

                <ul class="sidebar-dropdown-list" id="module-one-first-topic-list">
                    <li id="module-one-first-topic-list-one">Cybersecurity</li>
                    <li id="module-one-first-topic-list-two">Introduction to Risks, Threats, and Vulnerabilities</li>
                    <li id="module-one-first-topic-list-three">The CIA Triad</li>
                    <li id="module-one-first-topic-list-four">Data Classification Standards</li>
                </ul>

                
            </div>

            <div id="first">
                <a id="second-module">
                    <span>Security Concepts and Goals</span>
                    <i class="fa-solid fa-caret-down up" id="module-one-sidebar-second-topic-down"></i>
                    <i class="fa-solid fa-caret-up down" id="module-one-sidebar-second-topic-up"></i>
                </a>

                <ul class="sidebar-dropdown-list" id="module-one-second-topic-list">
                    <li id="module-two-second-topic-list-one">Subjects and Objects of Security</li>
                    <li id="module-two-second-topic-list-two">Security Objectives</li>
                    <li id="module-two-second-topic-list-three">IT Security Framework</li>
                    <li id="module-two-second-topic-list-four">Security Architecture</li>
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
                                <input id="input-box" type="text" name="search_box" required placeholder="search courses..." maxlength="100">
                                
                            </div>
                            
                            <div class="result-box result-box">
                    
                            </div>
                        </form>

                    <div class="icons">
                    
                        <div id="user-btn" class="fas fa-user"></div>
                        
                    </div>    
                </section>

            </header>
            <section class="content-div" id="first-topic">
                <div class="lesson space" id="module-one-first-topic-first-space"></div>
                <div class="lesson" id="first-topic-first-lesson">
                    <?php
                        require_once("function.php");

                        $sql = "SELECT title, description FROM prelim WHERE id BETWEEN 1 AND 8";
                        $result = $conn->query($sql);
 
                        echo showDetails($sql);
                        
                       
                    ?>
                </div>
                <div class="lesson" id="first-topic-first-lesson-sub-topic">
                    <?php
                        require_once("function.php");

                        $sql = "SELECT title, description FROM prelim WHERE id = 9";
                        $result = $conn->query($sql);
                        echo showDetails($sql);
                    
                        $sql = "SELECT title, description FROM prelim WHERE id BETWEEN 10 AND 14";
                        $result = $conn->query($sql);
 
                        echo showDetailsGrid($sql);
                
                    ?>
                </div>
                <div class="lesson space" id="module-one-first-topic-second-space"></div>
                <div class="lesson" id="first-topic-second-lesson-title">
                    <?php
                        require_once("function.php");

                        $sql = "SELECT title, description FROM prelim WHERE id = 15";
                        $result = $conn->query($sql);
 
                        echo showDetails($sql);
              
                    ?>
                </div>
                <div class="lesson sub-topic" id="first-topic-second-lesson-sub-topic-title">
                    <?php
                        require_once("function.php");

                        $sql = "SELECT title, description FROM prelim WHERE id = 16";
                        $result = $conn->query($sql);
 
                        echo showDetails($sql);
                        echo "<div class='image'><img src='/images/attack.PNG'></div>"
                        
                    ?>
                </div>
                <div class="lesson" id="first-topic-second-lesson-sub-topic-description">
                    <?php    
                       require_once("function.php");

                       $sql = "SELECT title, description FROM prelim WHERE id BETWEEN 17 AND 20";
                       $result = $conn->query($sql);

                       echo showDetailsGrid($sql);
                  ?>  
                        
                </div>
                <div class="lesson space" id="module-one-first-topic-third-space"></div>
                <div class="lesson" id="first-topic-third-lesson">
                    <?php
                         
                         require_once("function.php");
                         $sql = "SELECT title, description FROM prelim WHERE id = 21";
                         $result = $conn->query($sql);
                         echo "<div class='sub-topic'>";
                         echo showDetails($sql);
                         echo "<div class='image'><img src='/images/cia.PNG'></div>";
                         echo "</div>";

                         $sql = "SELECT title, description FROM prelim WHERE id BETWEEN 22 AND 24";
                         $result = $conn->query($sql);
                        
                         echo showDetailsGridOneColumn($sql);
                    ?>
                        
                          
                </div>
                <div class="lesson space " id="module-one-first-topic-fourth-space"></div>
                <div class="lesson" id="first-topic-fourth-lesson">
                    <?php
                        require_once("function.php");
                        $sql = "SELECT title, description FROM prelim WHERE id = 25";
                        $result = $conn->query($sql);
  
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM prelim WHERE id BETWEEN 26 AND 31";
                        $result = $conn->query($sql);

                        echo showDetailsGrid($sql);

                        $sql = "SELECT title, description FROM prelim WHERE id = 32";
                        $result = $conn->query($sql);

                        echo showDetailsGridOneColumn($sql);
                    ?>
                                            
                
                </div>
            </section>
            
            <section class="content-div" id="second-topic">
                <div class="lesson space" id="module-two-second-topic-first-space"></div>
                <div class="lesson" id="second-topic-first-lesson-title">
                    <?php
                      require_once("function.php");
                      $sql = "SELECT title FROM prelim WHERE id = 33";
                      $result = $conn->query($sql);

                      echo showDetails($sql);

                    ?>
                </div>
                <div class="lesson" id="second-topic-first-lesson">
                    <?php
                        require_once("function.php");
                        $sql = "SELECT title FROM prelim WHERE id = 34";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);

                        require_once("function.php");
                        $sql = "SELECT title, description FROM prelim WHERE id BETWEEN 35 AND 37";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);
                    ?>
                </div>
                <div class="lesson" id="second-topic-first-lesson-first-sub-topic">
                    <?php
                        require_once("function.php");
                        $sql = "SELECT title FROM prelim WHERE id=38";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);

                        $sql = "SELECT title FROM prelim WHERE id=39";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);
                        echo "<div class='image'><img src=/images/1.PNG></div>";

                        $sql = "SELECT description FROM prelim WHERE id = 39";
                        $result = $conn->query($sql);
                        echo showDetails($sql);

                        $sql = "SELECT title FROM prelim WHERE id=40";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);
                        echo "<div class='image'><img src=/images/2.PNG></div>";

                        $sql = "SELECT description FROM prelim WHERE id = 40";
                        $result = $conn->query($sql);
                        echo showDetails($sql);

                        $sql = "SELECT title FROM prelim WHERE id=41";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);
                        echo "<div class='image'><img src=/images/3.PNG></div>";

                        $sql = "SELECT description FROM prelim WHERE id = 43";
                        $result = $conn->query($sql);
                        echo showDetails($sql);
                    ?>                
                </div>          
                <div class="lesson" id="second-topic-first-lesson-second-sub-topic">
                    <?php
                        require_once("function.php");
                        $sql = "SELECT * FROM prelim WHERE id=42";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);
 
                        $sql = "SELECT * FROM prelim WHERE id BETWEEN 43 AND 46";
                        $result = $conn->query($sql);
                        echo showDetailsGrid($sql);

                        $sql = "SELECT * FROM prelim WHERE id = 47";
                        $result = $conn->query($sql);
                        echo showDetailsGridOneColumn($sql);
                    ?>

                </div>
                <div class="lesson space" id="module-two-second-topic-second-space"></div>
                <div class="lesson" id="second-topic-second-lesson-title">
                    <?php
                        require_once("function.php");
                        $sql = "SELECT title, description FROM prelim WHERE id=48";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);
                        
                        
                    ?>
                </div>
                <div class="lesson" id="second-topic-second-lesson-first-sub-topic">
                    <?php
                        require_once("function.php");
                        $sql = "SELECT title, description FROM prelim WHERE id=49";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);
                        
                        
                    ?>
                </div>
                <div class="lesson" id="second-topic-second-lesson-second-sub-topic">
                    
                    <?php
                       require_once 'function.php';

                       $sql = "SELECT title, description FROM prelim WHERE id=50";
                        $result = $conn->query($sql);
                        
                        echo showDetails($sql);

                        $sql = "SELECT * FROM prelim WHERE id BETWEEN 51 AND 58";
                        $result = $conn->query($sql);
                        
                        echo showDetailsGrid($sql);

                        $sql = "SELECT * FROM prelim WHERE id = 59";
                        $result = $conn->query($sql);
                        
                        echo showDetailsGridOneColumn($sql);
                        
                    
                    ?> 

                </div>
                <div class="lesson space" id="module-two-second-topic-third-space"></div>
                <div class="lesson" id="second-topic-third-lesson-title">
                    <?php
                       require_once 'function.php';

                        $sql1 = "SELECT * FROM prelim WHERE id = 60";
                        $result1 = $conn->query($sql1);
                        
                        echo showDetails($sql1);
                        
                    
                    ?>       
                </div>
                <div class="lesson" id="second-topic-third-lesson-first-sub-topic">
                <?php
                    require_once 'function.php';   

                        $sql = "SELECT title FROM prelim WHERE id = 61";
                        $result = $conn->query($sql);

                        echo showDetails($sql);
                        echo "<div class='image'><img src='/images/4.PNG'></div>";

                        $sql = "SELECT description FROM prelim WHERE id = 61";
                        $result = $conn->query($sql);
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM prelim WHERE id BETWEEN 62 AND 64";
                        $result = $conn->query($sql);

                        echo showDetails($sql);

                        $sql = "SELECT title FROM prelim WHERE id = 65";
                        $result = $conn->query($sql);

                        echo showDetails($sql);
                        echo "<div class='image'><img src='/images/5.PNG'></div>";

                        $sql = "SELECT description FROM prelim WHERE id = 65";
                        $result = $conn->query($sql);
                        echo showDetails($sql);
                        
                        $sql = "SELECT title, description FROM prelim WHERE id BETWEEN 66 AND 71";
                        $result = $conn->query($sql);

                        echo showDetails($sql);

                        $sql = "SELECT title FROM prelim WHERE id = 89";
                        $result = $conn->query($sql);

                        echo showDetails($sql);
                        echo "<div class='image'><img src='/images/6.PNG'></div>";

                        $sql = "SELECT description FROM prelim WHERE id = 89";
                        $result = $conn->query($sql);
                        echo showDetails($sql);

                        $sql = "SELECT title, description FROM prelim WHERE id BETWEEN 73 AND 78";
                        $result = $conn->query($sql);

                        echo showDetails($sql);
                    
                ?>
                    
                </div>
                <div class="lesson space" id="module-two-second-topic-fourth-space"></div>
                <div class="lesson" id="second-topic-fourth-lesson-title">
                    <?php
                      require_once("function.php");
                      $sql = "SELECT title FROM prelim WHERE id = 79";
                      $result = $conn->query($sql);

                      echo showDetails($sql);

                    ?>
                </div>
                <div class="lesson" id="second-topic-fourth-lesson">
                    <?php
                      require_once("function.php");
                      $sql = "SELECT title, description FROM prelim WHERE id BETWEEN 80 AND 81";
                      $result = $conn->query($sql);

                      echo showDetails($sql);

                      $sql = "SELECT title FROM prelim WHERE id = 82";
                      $result = $conn->query($sql);

                      echo showDetails($sql);

                      $sql = "SELECT description FROM prelim WHERE id = 90";
                      $result = $conn->query($sql);

                      echo showDetails($sql);

                      $sql = "SELECT description FROM prelim WHERE id BETWEEN 82 AND 84";
                      $result = $conn->query($sql);

                      echo showDetails($sql);

                      $sql = "SELECT title, description FROM prelim WHERE id BETWEEN 85 AND 88";
                      $result = $conn->query($sql);

                      echo showDetails($sql);

                    ?>
                </div>
            </section>
        </div>  
    </div>

    <script src="/javascript/prelim.js"></script>
    <script src="/javascript/menu.js"></script>
</body>
</html>
