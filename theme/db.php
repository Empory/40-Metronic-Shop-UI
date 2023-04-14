<?php
  // Connect to database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "e-commerce";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Retrieve data from database


  // Display data on web page
  
  // Close connection
  
