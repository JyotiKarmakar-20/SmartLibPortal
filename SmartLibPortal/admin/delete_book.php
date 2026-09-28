<?php
if (!isset($_GET['id'])) {
    header("Location: ../admin/manage_books.php");
    exit;
}
require_once "../common/dbconn.php";
$book_id = $_GET['id'];
$qry = "DELETE FROM books WHERE id = ?";
$stmt = $conn->prepare($qry);
$stmt->bind_param("i", $book_id);
$stmt->execute();
header("Location: ../admin/manage_books.php");
exit;
?>