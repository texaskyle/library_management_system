<?php
include 'header.php';
?>

<section class="registration">
    <div class="student_box">
        <br><br><br>
        <!-- <h1 style="font-size: 20px;">Library Management System</h1> -->
        <h2 style="font-size: 26px;">registration form</h2>



        <!-- student form to login -->
        <form action="#" method="POST">
            <div class="registrationForm">
                <input type="text" name="fname" placeholder="First name" required><br><br>
                <input type="text" name="lname" placeholder="Second name" required> <br><br>
                <!-- <input type="number" name="phone_no" placeholder="phone number"> <br><br> -->
                <input type="text" name="Regno" placeholder="registration number"> <br><br>
                <input type="email" name="email" placeholder="email@gmail.com"> <br><br>
                <input type="text" name="username" placeholder="username" required><br><br>
                <input type="password" name="pwd" placeholder="password" required><br><br>
                <input type="password" name="confirm_pwd" placeholder="confirm password" required><br><br>

                <button style="width: 100px ;" type="submit" name="submit_register_student">Sign up</button><br><br>
            </div>
        </form>

    </div>
    <br><br><br>
</section>


<?php
include 'footer.php';
?>
