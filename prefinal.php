<?php
include("db.php");

$sql = "SELECT title, description FROM prefinal";
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
    <title>Pre-Final</title>
<body>
    <div class="container">
        <div class="side-bar" id="sideBar">       
            <h1 id="title">Cybersecurity</h1>
           
            <nav class="navbar">
            
            <div id="first">
                <a id="modules">
                    <span>Threat Landscape</span>
                    <i class="fa-solid fa-caret-down" id="prefinal-sidebar-first-topic-down"></i>
                    <i class="fa-solid fa-caret-up" id="prefinal-sidebar-first-topic-up"></i>
                    
                </a>

                <ul class="sidebar-dropdown-list" id="prefinal-first-topic-list">
                    <li id="prefinal-first-topic-list-one">Network Awareness</li>
                    <li id="prefinal-first-topic-list-two">Classification of Hackers</li>
                    <li id="prefinal-first-topic-list-three">Methods of Cyberattack</li>
                    <li id="prefinal-first-topic-list-four">Phases of Cybersecurity Attack</li>
                </ul>

                
            </div>

            <div id="first">
                <a id="second-module">
                    <span>Ontology of Malware</span>
                    <i class="fa-solid fa-caret-down" id="prefinal-sidebar-second-topic-down"></i>
                    <i class="fa-solid fa-caret-up" id="prefinal-sidebar-second-topic-up"></i>
                </a>

                <ul class="sidebar-dropdown-list" id="prefinal-second-topic-list">
                    <li id="prefinal-second-topic-list-one">Spyware</li>
                    <li id="prefinal-second-topic-list-two">Adware</li>
                    <li id="prefinal-second-topic-list-three">Rootkits</li>
                    <li id="prefinal-second-topic-list-four">Ransomware</li>
                    <li id="prefinal-second-topic-list-five">Trojan Horses</li>
                    <li id="prefinal-second-topic-list-six">Backdoor</li>
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
                                <input id="input-box-prefinal" type="text" name="search_box" required placeholder="search courses..." maxlength="100">
                                <button class="fas fa-search"></button>
                            </div>
                            
                            <div class="result-box-prefinal result-box">
                    
                            </div>
                    </form>

                    <div class="icons">
                    
                        <div id="user-btn" class="fas fa-user"></div>
                        
                    </div>    
                </section>

            </header>
            <section class="content-div" id="prefinal-first-topic">
                <div class="lesson space" id="prefinal-first-topic-first-space"></div>
                <div class="lesson" id="prefinal-first-lesson-title">
                    <?php   
                        require_once("function.php");
                        $sql = "SELECT title FROM prefinal WHERE id = 1";
                        $result = $conn->query($sql);
  
                        echo showDetails($sql);
                       
                    ?>
                </div>
                <div class="lesson" id="prefinal-first-sub-topic">
                    <?php
                         require_once("function.php");
                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 2 AND 3";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);
                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 4 AND 7";
                         $result = $conn->query($sql);
   
                         echo showDetailsGrid($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id = 8";
                         $result = $conn->query($sql);
   
                         echo showDetailsGridOneColumn($sql);
                    ?>
                </div>
                <div class="lesson space" id="prefinal-first-topic-second-space"></div>
                <div class="lesson" id="prefinal-second-lesson">
                    <?php
                        $sql = "SELECT title FROM prefinal WHERE id = 93";
                        $result = $conn->query($sql);
   
                        echo showDetails($sql);
                        echo "<div class='image'><img src='/images/7.PNG'></div>";
                 
                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 19 AND 22";
                         $result = $conn->query($sql);
   
                         echo showDetailsGrid($sql);

                        $sql = "SELECT title, description FROM prefinal WHERE id = 23";
                        $result = $conn->query($sql);
   
                        echo showDetails($sql);
                        echo "<div class='image'><img src='/images/8.PNG'></div>";
                        
                    ?>
                </div>
                <div class="lesson space" id="prefinal-first-topic-third-space"></div>
                <div class="lesson" id="prefinal-third-lesson">
                    <?php
                        $sql = "SELECT title, description FROM prefinal WHERE id = 24";
                        $result = $conn->query($sql);
   
                        echo showDetails($sql);
                    ?>
                </div>
                <div class="lesson space" id="prefinal-first-topic-fourth-space"></div>
                <div class="lesson" id="prefinal-fourth-lesson">
                    <?php
                        $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 25 AND 30";
                        $result = $conn->query($sql);
   
                        echo showDetails($sql);
                        
                    ?>
                </div>
            </section>

            <section class="content-div" id="prefinal-second-topic">
                <div class="lesson space" id="prefinal-second-topic-first-space"></div>
                <div class="lesson" id="prefinal-second-topic-first-lesson-title">
                    <?php   
                        require_once("function.php");
                        $sql = "SELECT title FROM prefinal WHERE id = 92";
                        $result = $conn->query($sql);
  
                        echo showDetails($sql);
                       
                    ?>
                </div>
                <div class="lesson" id="prefinal-second-first-lesson">
                    <?php
                         require_once("function.php");
                         $sql = "SELECT title, description FROM prefinal WHERE id = 31";
                         $result = $conn->query($sql);

                         echo showDetails($sql);
                         echo "<div class=image><img src='/images/9.PNG'></div>";

                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 32 AND 33";
                         $result = $conn->query($sql);
   
                         echo showDetailsGrid($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id = 34";
                         $result = $conn->query($sql);
   
                         echo showDetailsGridOneColumn($sql);
                    ?>
                </div>
                <div class="lesson space" id="prefinal-second-topic-second-space"></div>
                <div class="lesson" id="prefinal-second-second-lesson">
                    <?php
                         require_once("function.php");

                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 35 AND 38";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);
                         echo "<div class=image><img src='/images/10.PNG'></div>";

                         $sql = "SELECT title, description FROM prefinal WHERE id = 39";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 40 AND 41";
                         $result = $conn->query($sql);
   
                         echo showDetailsGrid($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id = 42";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 43 AND 47";
                         $result = $conn->query($sql);
   
                         echo showDetailsGridOneColumn($sql);

            
                    ?>
                </div>
                <div class="lesson space" id="prefinal-second-topic-third-space"></div>
                <div class="lesson" id="prefinal-second-third-lesson">
                    <?php
                         require_once("function.php");

                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 49 AND 50";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 51 AND 52";
                         $result = $conn->query($sql);
   
                         echo showDetailsGridOneColumn($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id = 54";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 55 AND 59";
                         $result = $conn->query($sql);
   
                         echo showDetailsGridOneColumn($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id =61";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 62 AND 64";
                         $result = $conn->query($sql);
   
                         echo showDetailsGridOneColumn($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id = 65";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);
 
                    ?>
                </div>
                <div class="lesson space" id="prefinal-second-topic-fourth-space"></div>
                <div class="lesson" id="prefinal-second-fourth-lesson">
                    <?php
                         require_once("function.php");

                         $sql = "SELECT title, description FROM prefinal WHERE id = 66";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);
                         echo "<div class=image><img src='/images/11.PNG'></div>";

                         $sql = "SELECT title, description FROM prefinal WHERE id = 95";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 67 AND 68";
                         $result = $conn->query($sql);
   
                         echo showDetailsGrid($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id = 94";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 69 AND 72";
                         $result = $conn->query($sql);
   
                         echo showDetailsGrid($sql);
 
                    ?>
                </div>
                <div class="lesson space" id="prefinal-second-topic-fifth-space"></div>
                <div class="lesson" id="prefinal-second-fifth-lesson">
                    <?php
                         require_once("function.php");

                         $sql = "SELECT title, description FROM prefinal WHERE id = 73";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);
                         echo "<div class=image><img src='/images/12.PNG'></div>";

                         $sql = "SELECT title, description FROM prefinal WHERE id = 74";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id = 96";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 75 AND 80";
                         $result = $conn->query($sql);
   
                         echo showDetailsGrid($sql);
 
                    ?>
                </div>
                <div class="lesson space" id="prefinal-second-topic-sixth-space"></div>
                <div class="lesson" id="prefinal-second-sixth-lesson">
                    <?php
                         require_once("function.php");

                         $sql = "SELECT title, description FROM prefinal WHERE id = 81";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);
                         echo "<div class=image><img src='/images/13.PNG'></div>";

                         $sql = "SELECT title, description FROM prefinal WHERE id = 97";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 82 AND 87";
                         $result = $conn->query($sql);
   
                         echo showDetailsGrid($sql);

                         $sql = "SELECT title, description FROM prefinal WHERE id = 98";
                         $result = $conn->query($sql);
   
                         echo showDetails($sql);


                         $sql = "SELECT title, description FROM prefinal WHERE id BETWEEN 88 AND 91";
                         $result = $conn->query($sql);
   
                         echo showDetailsGrid($sql);
 
                    ?>
                </div>
            </section>
        </div>  
    </div>

    <script src="/javascript/prefinal.js"></script>
    <script src="/javascript/menu.js"></script>
</body>
</html>