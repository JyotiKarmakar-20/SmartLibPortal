<?php 
    include_once 'navbar_admin.php';
?>
<head>
    <link rel="stylesheet" href="admin_dashboard.css"> 
</head>
<body>
      <div class="text-center text-dark mb-4 mt-3">
            <h2>Welcome, Admin</h2>
            <p>Manage library operations below</p>
        </div>
    <div class="container mt-5 mb-3 ">
        <div class="row g-5" style="margin-top:20px">
            <div class="col-md-5 col-sm-12" style="margin-left:100px ; ">
                <div class="card">
                    <img src="../assests/images/manage_books.jpg" class="card-img-top" alt="Manage Books"style="height:320px ;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manage Books</h5>
                        <p class="card-text">Add, update, or delete books in the library.</p>
                        <a href="../admin/manage_books.php" class="btn w-50">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="card">
                    <img src="../assests/images/manage_users.jpg" class="card-img-top" alt="Manage Users" style="object-fit: contain;height:320px ">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manage Users</h5>
                        <p class="card-text">View all users and their borrowed books.</p>
                        <a href="../admin/manage_users.php" class="btn w-50">Show</a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4">
                <div class="card">
                    <img src="images/borrowed.avif" class="card-img-top" alt="Borrowed Books">
                    <div class="card-body text-center">
                        <h5 class="card-title">Borrowed Books</h5>
                        <p class="card-text">Check issue and return dates of borrowed books.</p>
                        <a href="../admin/borrowed_books.php" class="btn">View </a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    </div>
</body>
</html>