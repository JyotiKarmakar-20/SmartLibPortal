<?php
$conn = new mysqli("localhost", "root", "", "library");

// user id (static)
$user_id = 1;

// get book id from URL
if (isset($_GET['bookid'])) {
    $book_id = $_GET['bookid'];

    // insert into borrowed_books table
    $qry = "INSERT INTO borrowed_books (user_id, book_id, issue_date, return_date)
            VALUES ('$user_id', '$book_id', NOW(), NULL)";

    if ($conn->query($qry)) {
        echo "
        <script>
            alert('Book borrowed successfully!');
            window.location.href = 'user_dashboard.php';
        </script>
        ";
    } else {
        echo "Error: " . $conn->error;
    }

} else {
    echo "Invalid Book!";
}
?>