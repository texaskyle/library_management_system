<?php
include 'header.php';
?>

<section class="student_login">
    <div class="student_box">
        <br><br><br>
        <h1 style="font-size: 20px;">Library Management System</h1> <br><br>
        <h2 style="font-size: 26px;">student login</h2>
        <br><br><br>


        <!-- student form to login -->
        <form action="#" method="POST">
            <input type="text" name="username" placeholder="username" required><br><br>
            <input type="password" name="pwd" placeholder="password" required><br><br>
            <button type="submit" name="submit_login_student">login</button><br><br>
        </form>
        <p style="color: white;">
            <a style="color: white; font-size:20px" href=" #">Forgot password?</a> <br><br>

            New to this system?? &nbsp;&nbsp;
            <a style="color: white;font-size:20px;" href="registration.php">Signup</a>

        </p>

    </div>
</section>


<?php
include 'footer.php';
?>