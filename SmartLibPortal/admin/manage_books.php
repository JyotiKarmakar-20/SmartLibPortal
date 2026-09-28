<!-- <head>
       <link rel="stylesheet" href="admin_dashboard.css"> 
</head> -->
<?php 
include_once '../admin/navbar_admin.php';
require_once "../common/dbconn.php";
$qry = "SELECT * FROM books";
$stmt = $conn->prepare($qry);
$stmt->execute();
$result = $stmt->get_result();
?>
<div class="container my-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center mb-3">Manage Books</h1>

            <div class="text-end mb-3">
                <a href="add_books.php" class="btn w-25"style="background-color : #472650ff ; color:white;">+ Add New Book</a>
            </div>

            <table class="table" style="border-radius: 12px;">
                <tr align="center">
                    <th style="background-color : #472650ff ; color:white;">Book ID</th>
                    <th style="background-color : #472650ff ; color:white;">Book Title</th>
                    <th style="background-color : #472650ff ; color:white;">Author</th>
                    <th style="background-color : #472650ff ; color:white;">Quantity</th>
                    <th style="background-color : #472650ff ; color:white;">Action</th>
                </tr>
                <?php while ($data = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $data['book_id'] ?></td>
                        <td><?php echo $data['title'] ?></td>
                        <td><?php echo $data['author'] ?></td>
                        <td><?php echo $data['quantity'] ?></td>

                        <td>
                            <a class="btn btn-sm btn-outline-warning " 
                               href="update.php?id=<?php echo $data['id'] ?>">
                               Update
                            </a>
                            <a class="btn btn-sm btn-outline-danger" 
                               href="delete_book.php?id=<?php echo $data['id'] ?>" 
                               onclick="return confirm('Delete this book?')">
                               Delete
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

