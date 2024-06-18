<?php
session_start();
include("db.php");

$sql = "SELECT * FROM form";
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
    <title>Course Syllabus</title> 
</head>
<body>
    <div class="container">
        <div class="side-bar" id="sideBar">       
            <h1 id="title">Cybersecurity</h1>
           
            <nav class="navbar">
        
                <a href="#"><span>Profle</span></a>
                <a href="index.php"><span>Logout</span></a>
                

        
            </nav>
        
        </div>
        <div class="main-body">
            <header class="header">
            
                <section class="flex">
                    <button class="menu-icon" id="menu-btn"><i class="fas fa-bars"></i></button>
                    <h1>Settings</h1>
                </section>

            </header>
            <section class="content-div" id="first-topic">
                <div class="lesson space" id="midterm-first-topic-first-space"></div>
                
                <div class="lesson" id="first-topic-first-lesson-title">
                    <div class="topic">Your Profile</div>
                    <div class="square">
                            <div class="topic">
                            <?php
                           
                                require_once("function.php");
                         
                                $userDetails = showCurrentUserDetails($conn);

                                // Check the returned value from the function
                                if (is_array($userDetails)) {
                                    echo "<div class='first-grid grid'>";
                                    echo "<div class='square'>";
                                        echo "<div class='topic'>" . $userDetails['first_name'] . "</div>";
                                        echo "<div class='description'>First Name</div>";
                                    echo "</div>";
                                    

                                   
                                    echo "<div class='square'>";
                                        echo "<div class='topic'>" . $userDetails['last_name'] . "</div>";
                                        echo "<div class='description'>Last Name</div>";
                                    echo "</div>";
                                    

                                    
                                    echo "<div class='square'>";
                                        echo "<div class='topic'>" . $userDetails['gender'] . "</div>";
                                        echo "<div class='description'>Gender</div>";
                                    echo "</div>";
                                    

                                   
                                    echo "<div class='square'>";
                                        echo "<div class='topic'>" . $userDetails['contact_number'] . "</div>";
                                        echo "<div class='description'>Contact Number</div>";
                                    echo "</div>";

                                    echo "<div class='square'>";
                                        echo "<div class='topic'>" . $userDetails['address'] . "</div>";
                                        echo "<div class='description'>Address</div>";
                                    echo "</div>";

                                    echo "<div class='square'>";
                                        echo "<div class='topic'>" . $userDetails['email'] . "</div>";
                                        echo "<div class='description'>Address</div>";
                                    echo "</div>";
                                    echo "</div>";  

                                } else {
                                  echo "<p>" . $userDetails . "</p>"; // Assuming the function returns the error message
                                }
                            ?>
                            </div>
                    </div>
 
                   
                </div>

                <div class="lesson" id="first-topic-first-lesson-title">
                    
                    <div class="last-grid grid">
                        <div class="square">
                            <div class="topic">Reminder!</div>
                            <div class="description">You can't modify our profile for the moment! Thank you</div>
                        </div>
                    </div>

               
            </div>
           
            </section>
        
        </div>  
    </div>
    <script src="/javascript/menu.js"></script>
</body>
</html>
