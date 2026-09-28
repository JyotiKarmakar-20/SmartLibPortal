<?php
include_once 'navbar_login.php';
?>

<?php
    $role = isset($_GET['role']) ? $_GET['role'] : 'user';
?>
<div style="
    width: 400px;
    margin: 60px auto;
    padding: 20px;
    background: linear-gradient(to left, #a4abcb, #d8c4ed);
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35);
    text-align: center;  ">

    <img src="../assests/images/login.avif" 
         style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; margin-bottom: 15px;">

    <h3 style="margin-bottom: 20px;">
        <?php echo ($role == 'admin') ? "Admin Login" : "User Login"; ?>
    </h3>

    <form action="../auth/login_code.php" method="POST">
        <input type="hidden" name="role" value="<?php echo $role; ?>">

        <div style="text-align:left; margin-bottom: 10px;">
            <label>User ID</label>
            <input type="text" name="userid" 
                   placeholder="<?php echo ($role == 'admin') ? 'Enter UserId' : 'user@gmail.com'; ?>" 
                   required
                   style="width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
        </div>

        <div style="text-align:left; margin-bottom: 15px;">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required
                   style="width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
        </div>

        <button type="submit"
                style="width: 100%; padding: 10px; background:#5a76e8; color:white; 
                       border:none; border-radius:5px; font-weight:bold;">
            Login
        </button>
    </form>
</div>

