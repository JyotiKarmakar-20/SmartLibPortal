
<?php 
include_once '../admin/navbar_admin.php';   
require_once "../common/dbconn.php";

if (!isset($_GET['id'])) {
    header('location:../admin/manage_books.php');
}
$id = $_GET['id'];
$qry = "SELECT * FROM books WHERE id=?";
$stmt = $conn->prepare($qry);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows <= 0) {
    header("location:../admin/manage_books.php");
}

$data = $result->fetch_assoc();
?>
<style>
    .form-control {
        border-color: #777 !important;
    }
</style>

<div class="container my-3">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1 class="text-center mb-3">Update Book</h1>

            <form action="update_book.php" method="post">
                <input class="form-control mb-2" type="hidden" name="id" 
                       value="<?php echo $data['id']; ?>">

                <label>Book Id</label>
                <input class="form-control mb-2" type="text" name="book_id" 
                       value="<?php echo $data['book_id']; ?>">

                <label>Book Title</label>
                <input class="form-control mb-2" type="text" name="title" 
                       value="<?php echo $data['title']; ?>">

                <label>Author</label>
                <input class="form-control mb-2" type="text" name="author" 
                       value="<?php echo $data['author']; ?>">

                <label>Category</label>
                <input class="form-control mb-2" type="text" name="category" 
                       value="<?php echo $data['category']; ?>">

                <label>Quantity</label>
                <input class="form-control mb-2" type="number" name="quantity" 
                       value="<?php echo $data['quantity']; ?>">

                <label>Added On</label>
                <input class="form-control mb-2" type="date" name="added_on" 
                       value="<?php echo $data['added_on']; ?>">
                <input type="submit" value="Update" class="btn btn-primary">

            </form>
        </div>
    </div>
</div>