<?php
session_start();
require_once "../common/dbconn.php";

$userid   = $_POST['userid'];
$password = $_POST['password'];
$role     = $_POST['role'];

if ($role == "admin") {
    $qry = "SELECT * FROM admins WHERE userid=? AND password=? LIMIT 1";
    $redirect = "../admin/admin_dashboard2.php";
}
else if ($role == "user") {
    $qry = "SELECT * FROM users WHERE userid=? AND password=? LIMIT 1";
    $redirect = "../user/user_dashboard2.php";
}
$stmt = $conn->prepare($qry);
$stmt->bind_param("ss", $userid, $password);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    $_SESSION['userid'] = $data['userid'];
    $_SESSION['role']   = $role;
    header("Location: $redirect");
    exit();
} else {
    echo "<script>
        alert('Invalid Credentials');
        window.location='../auth/login.php';
    </script>";
    exit();
}
?>