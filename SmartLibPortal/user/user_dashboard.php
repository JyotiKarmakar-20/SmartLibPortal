<?php 
include_once "navbar_user.php";
require_once '../common/dbconn.php';
?>
<?php
$qry = "SELECT * FROM books";
$result = $conn->query($qry);
?>
<div class="container mt-4" >
    <h2 class="text-center mb-4">📚 Available Books</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark"align="center">
            <tr>
                <th>Book ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <!-- <th>Action</th> -->
            </tr>
        </thead>
        <tbody align="center">
<?php
while ($data = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td >".$data['book_id']."</td>";
    echo "<td>".$data['title']."</td>";
    echo "<td>".$data['author']."</td>";
    echo "<td>".$data['category']."</td>";
    echo "</tr>";
}
?>
      </tbody>
    </table>
</div>