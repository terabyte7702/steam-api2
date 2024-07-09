
<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    
    <!-- header -->
    <?php require('partials/header.php') ?>


  
    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <h2>Sign up</h2><br>
        <form action="adduser.php" method="post">
            <label for="userlogin">Username:</label><br>
                <input type="text" name="userlogin"><br>
            <label for="userpassword">Password:</label><br>
                <input type="password" name="userpassword"><br>
            <label for="user_email">Email:</label><br>
                <input type="email" name="user_email"><br>
            <label for="user_phone">Phone number:</label><br>
                <input type="tel" name="user_phone"><br>
            <br>
            <input type="submit" value="Sign up">
        </form>
        </div>
    </section>
    <!-- Contact Section End -->

    
    <!-- footer -->
    <?php require('partials/footer.php') ?>

    
</body>

</html>