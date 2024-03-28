<?php
// Include the database connection file
include ("db_conn.php");

// Get the 'id' parameter from the URL
$id = $_GET['id'];

// Define the SQL query to delete a record with the given 'id'
$sql = "DELETE FROM `CRUD` WHERE id = $id";

// Execute the SQL query using the database connection
$result = mysqli_query($conn, $sql);

// Check if the query execution was successful
if ($result) {
  // If successful, redirect to the index.php page with a success message
  header("Location: index.php?msg=Record deleted successfully.");
} else {
  // If the query execution failed, display an error message
  echo "Failed to delete: " . mysqli_error($conn);
}