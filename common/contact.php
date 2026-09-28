<?php
    include_once "navbar_contact.php";
?>
<div class="main-box ">
    <div class="contact-title">
        <h2><i>Contact Us</i></h2>
        <hr>
    </div>
    <div class="contact-container">
        <div class="info-box">
            <h4>📩 For inquiries, please email:</h4>
            <p><strong>smartlib@gmail.com</strong></p>
            <p>— or send a message using the form.</p>
        </div>
        <div class="contact-form">
            <!-- <h4>Contact</h4> -->
            <form action="home.php" method="POST">
                <div class="name-row">
                    <div style="flex:1;">
                        <label>First Name</label>
                        <input type="text" name="fname" required>
                    </div>
                    <div style="flex:1;">
                        <label>Last Name</label>
                        <input type="text" name="lname" required>
                    </div>
                </div>
                <label>Email</label>
                <input type="email" name="email" required>
                <label>Your Message</label>
                <textarea name="message" rows="4"  required></textarea>
                <button type="submit" class="bg-dark" onclick="alert('Thank you for contacting us..')">Submit</button>
            </form>
        </div>
    </div>
</div>
