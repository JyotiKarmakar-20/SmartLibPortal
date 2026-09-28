<?php
    include_once'../admin/navbar_admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assests/bootstrap/bootstrap.min.css">
    <title>Document</title>  
<style>
    .form-control {
        border-color: #777 !important;
    }
        .btn
        {
            border: 1px solid black;
            border-radius: 10px;
            margin-bottom: 10px;
        }
    .btn:hover{
            background: linear-gradient(to right, #667eea, #764ba2);
        }
        .formm
        {
            background-color: #a7aece;
            border:1.5px solid white;
            border-radius:8px;
            box-shadow: 0 4px 12px rgba(40, 18, 18, 0.5);
        }
</style>
</head>
<body>

<div class="container my-3">
    <div class="row">
        <div class="col-md-6 mx-auto formm">
            <h1 class="text-center mb-2">Add New Book</h1>

            <form action="add_books.php" method="post">
                <label>Book ID</label>
                <input class="form-control mb-2" type="text" name="book_id" required>

                <label>Title</label>
                <input class="form-control mb-2" type="text" name="title" required>

                <label>Author</label>
                <input class="form-control mb-2" type="text" name="author" required>

                <label>Category</label>
                <select class="form-control mb-2" name="category" required>
                    <option value="">--SELECT--</option>
                    <option value="Novel">Novel</option>
                    <option value="Education">Education</option>
                    <option value="Comics">Comics</option>
                    <option value="Technology">Technology</option>
                    <option value="Technology">Self Help</option>
                </select>

                <label>Quantity</label>
                <input class="form-control mb-2" type="number" name="quantity" required>

                <label>Added On</label>
                <input class="form-control mb-2" type="date" name="added_on" required>

                <input type="submit" value="ADD BOOK" class="btn btn-dark">
            </form>
        </div>
    </div>
</div>

    
</body>
</html>
<script src="./bootstrap/bootstrap.bundle.min.js"></script>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once "../common/dbconn.php";

    $book_id  = $_POST['book_id'];
    $title    = $_POST['title'];
    $author   = $_POST['author'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $added_on = $_POST['added_on'];

    $qry = "INSERT INTO books(book_id, title, author, category, quantity, added_on) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($qry);
    $stmt->bind_param("ssssis", $book_id, $title, $author, $category, $quantity, $added_on);

    $res = $stmt->execute();

    if ($res) {
        echo "<script>alert('Book added successfully');</script>";
    } else {
        echo "<p class='text-danger fw-bold text-center'>Error: " . $conn->error . "</p>";
    }
    $stmt->close();
    $conn->close();
}
?>
