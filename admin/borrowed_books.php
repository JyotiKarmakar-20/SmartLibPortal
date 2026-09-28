
<?php 
include_once '../admin/navbar_admin.php';

require_once "../common/dbconn.php";
$qry = "SELECT * FROM borrowed_books";
$stmt = $conn->prepare($qry);
$stmt->execute();
$result = $stmt->get_result();
?>

<div class="container my-3">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center mb-2">Borrowed Books</h1>
            <table class="table ">
                <tr>
                    <th style="background-color : #472650ff ; color:white;">Borrow_Id</th>
                    <th style="background-color : #472650ff ; color:white;">User_Id</th>
                    <th style="background-color : #472650ff ; color:white;">Book_Id</th>
                    <th style="background-color : #472650ff ; color:white;">Issue_date</th>
                </tr>
                <?php 
                while ($data = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td ><?php echo $data['borrow_id'] ?></td>
                        <td><?php echo $data['user_id'] ?></td>
                        <td><?php echo $data['book_id'] ?></td>
                        <td><?php echo $data['issue_date'] ?></td>                       
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
