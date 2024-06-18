
<?php

$sql = "SELECT title, description FROM prelim WHERE title LIKE ?";

function showDetails($sql) {

  include("db.php");

  $result = $conn->query($sql);
 
  if ($result->num_rows > 0) {
  
    while ($row = $result->fetch_assoc()) {
      
      echo "<div class='topic-container'>";
      
      if (isset($row['title'])) {
        
        echo "<div class='topic'>" . htmlspecialchars($row['title']) . "</div>";
      } else {
        echo "<div class='topic'></div>"; // Or provide an alternative message
      }
      
      if (isset($row['description'])) {
        echo "<div class='description'>" . htmlspecialchars($row['description']) . "</div>";
      } else {
        echo "<div class='description'></div>"; // Or provide an alternative message
      }
      echo "</div>";
    }
    
  } else {
    echo "No data available.";
  }
  

  $conn->close();
}
function showDetailsGrid($sql) {
    include("db.php");
    
        echo "<div class='first-grid grid'>";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
          
          echo "<div class='square'>";
          echo "<div class='topic'>" . htmlspecialchars($row['title']) . "</div>";
          echo "<div class='description'>" . htmlspecialchars($row['description']) . "</div>";
          echo "</div>";
          
        }
        $conn->close();
        echo "</div>";
        
  }

  function showDetailsGridDescriprtion($sql) {
    include("db.php");
    
        echo "<div class='first-grid grid'>";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
          
          echo "<div class='square'>";
          echo "<div class='description'>" . htmlspecialchars($row['description']) . "</div>";
          echo "</div>";
          
        }
        $conn->close();
        echo "</div>";
        
  }
?>


<?php
      function showDetailsGridOneColumn($sql) {
          include("db.php");
          
              echo "<div class='last-grid grid'>";
              $result = $conn->query($sql);
              while ($row = $result->fetch_assoc()) {
                
                echo "<div class='square'>";
                echo "<div class='topic'>" . htmlspecialchars($row['title']) . "</div>";
                echo "<div class='description'>" . htmlspecialchars($row['description']) . "</div>";
                echo "</div>";
                
              }
              $conn->close();
              echo "</div>";
              
      }

?>
<?php

include("db.php");
function showCurrentUserDetails($conn) {
  // Start the session if it's not already started
  

  // Check if a user is logged in (replace 'user_id' with your actual session variable name)
  if (!isset($_SESSION['user_id'])) {
    return "You are not logged in."; // Or redirect to login page
  }

  // Sanitize user ID (replace with your validation logic)
  $sanitizedUserId = filter_var($_SESSION['user_id'], FILTER_SANITIZE_NUMBER_INT);
  if (!$sanitizedUserId) { // Basic validation for numeric user ID
    return "Invalid user ID.";
  }

  // Prepare a SQL statement (replace 'form' with your actual table name and column names)
  $sql = "SELECT fname AS first_name, lname AS last_name, gender, contactNum AS contact_number, address, email FROM form WHERE id = ?";

  // Prepare the statement (assuming $conn is your established MySQLi connection)
  $stmt = $conn->prepare($sql);
  if (!$stmt) {
    echo "Error preparing statement: " . $conn->error;
    exit; // Or handle the error differently
  }

  // Bind parameters to the statement (replace with your validation logic)
  $stmt->bind_param("i", $sanitizedUserId); // "i" for integer

  // Execute the statement
  if (!$stmt->execute()) {
    echo "Error executing statement: " . $stmt->error;
    exit; // Or handle the error differently
  }

  // Get the result (assuming you only expect one row)
  $result = $stmt->get_result();
  $user = $result->fetch_assoc(); // Fetch associative array

  // Close the statement and result
  $stmt->close();
  $result->close();

  if ($user) {
    // User details found, return as an associative array
    return $user;
  } else {
    return "Error: User details not found.";
  }
}

?>

