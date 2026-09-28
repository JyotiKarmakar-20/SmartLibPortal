<?php 
include_once '../admin/navbar_admin.php';
require_once "../common/dbconn.php";
$qry = "SELECT * FROM users";
$stmt = $conn->prepare($qry);
$stmt->execute();
$result = $stmt->get_result();
?>
<div class="container my-5 ">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center mb-2">Available Users</h1>
            <table class="table">
                <tr class="bg-primary" >
                    <th style="background-color : #472650ff ; color:white;">UserName</th>
                    <th style="background-color : #472650ff ; color:white;">Email</th>
                    <th style="background-color : #472650ff ; color:white;">Mobile</th>
                </tr>
                <?php
                while ($data = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $data['fullname'] ?></td>
                        <td><?php echo $data['userid'] ?></td>
                        <td><?php echo $data['mobile'] ?></td>
    
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
