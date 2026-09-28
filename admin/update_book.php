<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    require_once "../common/dbconn.php";

    $id=$_POST['id'];
    $book_id = $_POST['book_id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $added_on = $_POST['added_on'];

    $qry = "UPDATE books SET book_id=?,title=?, author=?, category=?, quantity=?, added_on=? WHERE id=?";
    $stmt = $conn->prepare($qry);
    $stmt->bind_param("ssssisi", $book_id,$title, $author, $category, $quantity, $added_on, $id);

    if($stmt->execute()){
        ?>
        <script>
            alert("Book Updated Successfully");
            window.location = "../admin/manage_books.php";
        </script>
        <?php
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
