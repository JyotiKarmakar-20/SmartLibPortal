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
        .info-box { margin-top: 60px; } 
        .hero-img { width: 100%; border-radius: 8px; }
        a:hover{
            background: linear-gradient(to right, #667eea, #764ba2);
            border-radius: 10px;
        }
        .btn:hover{
            background: linear-gradient(to right, #667eea, #764ba2);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="#" style="background: none;">📖Smart Lib Portal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="../auth/login.php?role=admin" >Admin</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="contact.php" >Contact Us</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6 info-box">
                <h1 class="fw-bold">Welcome to Smart Library Portal 📚</h1>
                <p class="mt-3">
                    A smart and simple online library system.  
                    Users can register, browse books, and read.  
                    Admins can manage books and handle the digital library.
                </p>
                <a href="../user/register.php" class="btn mt-4"  style="background-color : #472650ff ; color:white;width:125px">Get Started</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="../assests/images/home.jpg" alt="Library Image" class="hero-img mt-4">
            </div>
        </div>
    </div>
<script src="./bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
