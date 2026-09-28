<?php 
session_start();
$conn = new mysqli("localhost", "root", "", "library");

$id = $_POST['id'];        
$book_id = $_POST['book_id'];
$action = $_POST['action'];

if ($action == "borrow") {
    $q = "INSERT INTO borrowed_books (user_id, book_id, issue_date)
          VALUES ('$id', '$book_id', NOW())";
    $conn->query($q);
}

// if ($action == "return") {
//     $q = "DELETE FROM borrowed_books WHERE user_id='$id' AND book_id='$book_id'";
//     $conn->query($q);
// }

header("Location: user_dashboard2.php");
exit();
?>