<?php 
    include_once 'navbar_admin.php';
?>
<head>
    <style>
        .card {
            height: 100%;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .card img {
            height: 240px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .btn {
            background-color: rgb(38, 45, 45);
            color: white;
            width: 120px;
            border-radius: 10px;
        }

        .btn:hover {
            background: linear-gradient(to right, #667eea, #764ba2); 
            color: white;
        }

        .card-body h5 {
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="text-center text-dark mb-4 mt-3">
        <h2>Welcome, Admin</h2>
        <p>Manage library operations below</p>
    </div>

    <div class="container mt-5 mb-3">
        <div class="row justify-content-center g-4">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <img src="../assests/images/manage_books.jpg" class="card-img-top" alt="Manage Books">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manage Books</h5>
                        <p class="card-text">Add, update, or delete books in the library.</p>
                        <a href="../admin/manage_books.php" class="btn">Go</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <img src="../assests/images/manage_users.jpg" class="card-img-top" alt="Manage Users" style="object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manage Users</h5>
                        <p class="card-text">View all users and their borrowed books.</p>
                        <a href="../admin/manage_users.php" class="btn">Show</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <img src="../assests/images/borrowed_books.jpg" class="card-img-top" alt="Borrowed Books" style="object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Borrowed Books</h5>
                        <p class="card-text">Check issue and return dates of borrowed books.</p>
                        <a href="../admin/borrowed_books.php" class="btn">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
