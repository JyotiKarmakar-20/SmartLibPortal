<?php
include_once 'navbar_register.php';
?>
<body>
<div class="container mt-4 mb-3">
    <div class="row justify-content-center">

        <div class="col-md-5 reg-box" style="padding: 20px;background: linear-gradient(to left, #a4abcb, #d8c4ed);
                                            border-radius: 12px;box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35);">
            <h2 class="text-center mb-4">User Registration</h2>
            <form action="register.php" method="post" >
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email ID</label>
                    <input type="email" name="userid" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile Number</label>
                    <input type="number" name="mobile" class="form-control" minlength="10" maxlength="10" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Create Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <!-- <div class="mb-4">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" required>
                </div> -->
                <button type="submit" class="btn btn-primary w-100">Register</button>
                <p class="text-center mt-3 ">
                    Already have an account? <a href="../auth/login.php?role=user" ><b>Login</b></a>
                </p>
            </form>
        </div>
    </div>
</div>

<?php
require_once '../common/dbconn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST["fullname"];
    $userid    = $_POST["userid"];
    $mobile    = $_POST["mobile"];
    $password     = $_POST["password"];

    $qry = "INSERT INTO users(fullname, userid, password, mobile) VALUES (?, ?, ?,?)";
    $stmt = $conn->prepare($qry);
    $stmt->bind_param("sssi", $fullname, $userid, $password, $mobile);

   if ($stmt->execute()) {
        echo "<script>alert('Registered Successfully');
        window.location.href = 'register.php';</script>";
    }else {
        echo "<p class='text-danger text-center fw-bold mt-3'>Error: " . $conn->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>