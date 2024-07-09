
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
    <?php require('partials/globals.php') ?>
    <?php require('partials/header.php') ?>


  
    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <?php 
                $userlogin=$_POST['userlogin'];
                $userpassword=$_POST['userpassword'];
                $user_email=$_POST['user_email'];
                $user_phone=$_POST['user_phone'];

                $checkuser = mysqli_query($conn,"SELECT * FROM users WHERE userlogin='$userlogin'");
                $row = mysqli_fetch_array($checkuser);
                if (!empty($row['userID'])){
                    echo "Error. Login already exist";
                    header('refresh:2, url=reg.php');
                    exit();
                }

                $adduser = mysqli_query($conn,"INSERT INTO users(userlogin, userpassword, user_email, user_phone)
                 VALUES('$userlogin','$userpassword','$user_email','$user_phone')");
                if ($adduser){
                    echo "New user added successfully!";
                }
                else{
                    echo "Error";
                }
            ?>
        </div>
    </section>
    <!-- Contact Section End -->

    
    <!-- footer -->
    <?php require('partials/footer.php') ?>

    
</body>

</html>