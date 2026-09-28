<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Lib Portal📖</title>
    <link rel="stylesheet" href="../assests/bootstrap/bootstrap.min.css"> 
    
    <style>
        body {
            background: linear-gradient(to right, #a4abcb, #d8c4ed); 
        }
        button{
            background: linear-gradient(to right, #7883b4ff, #bf99e7ff);   
        }
        button:hover{
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
        }
    </style>
</head>
<body>
    <?php 
        session_start();
        $conn = new mysqli("localhost", "root", "", "library");

        $user_id = $_SESSION['userid'];

        $qry="SELECT * FROM users WHERE userid=?";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("s", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();

        $name = $data['fullname'];
        $id   = $data['id']; 

        $qry = "SELECT * FROM books";
        $result = $conn->query($qry);
    ?>

    <nav class="navbar navbar-dark bg-dark px-4">
        <h3 class="navbar-brand">👤 Welcome <?php echo $name; ?></h3>
        <a href="../common/home.php" class="btn btn-outline-danger">Log Out</a>
    </nav>

    <script src="../assests/bootstrap/bootstrap.bundle.min.js"></script>

    <div class="container mt-5">
        <h2 class="mb-4" align="center">User Dashboard</h2>

        <table class="table table-bordered">
            <thead class="table-dark text-center">
                <tr>
                    <th style="background-color : #472650ff ; color:white;">ID</th>
                    <th style="background-color : #472650ff ; color:white;">Book Name</th>
                    <th style="background-color : #472650ff ; color:white;">Author</th>
                    <th style="background-color : #472650ff ; color:white;">Genre</th>
                    <th style="background-color : #472650ff ; color:white;">Action</th>
                </tr>
            </thead>

            <tbody class="text-center">
                <?php while($row = $result->fetch_assoc()) {

                    $bookId = $row['book_id'];
 
                    $qry = "SELECT * FROM borrowed_books WHERE user_id='$id' AND book_id='$bookId'";
                    $isBorrowed = $conn->query($qry);
                ?>
                   <tr>
                        <td><?php echo $row['book_id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['author']; ?></td>
                        <td><?php echo $row['category']; ?></td>
                        <td>
                            <?php if ($isBorrowed->num_rows > 0) { ?>
                                <button class="btn btn-sm text-dark" style="font-weight: bolder;"disabled> Borrowed</button>
                            <?php } else { ?>
                                <form action="borrow.php" method="POST" style="display:inline;">
                                    <input type="hidden" name="book_id" value="<?php echo $row['book_id']; ?>">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <button type="submit" name="action" value="borrow" class="btn btn-success btn-sm text-dark" style="font-weight: bolder;">
                                        Borrow
                                    </button>
                                </form>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>