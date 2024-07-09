
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Header Section Begin -->
<!-- Black with white text -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home</a>
      
    </li>
    <li class="nav-item">
      <a class="nav-link" href="reg.php">Registration</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="shop.php">Shop</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="good.php">Good</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>

    <li class="nav-item">
      <?php
      
      if (!empty($_SESSION['userlogin']))
      {
        echo 'You are entered as a '.$_SESSION['userlogin'];
        echo '<br><a href="exit.php">Log out</a>';

      }
      else{

      echo "
      <form action='login.php' method='POST'>
        <span align=right>
        Login:
              <input type='text' name='userlogin' value='Enter your login'>
              
              Password:
              <input type='password' name='userpassword' value='Enter your password'>
              <input type='submit' value='Login'>
        </span>

      </form>";
    }
    ?>
    </li>
    <li>
      <a href="steam.php" target="_blank">
        <img style="width:200px;height: 50px; margin-left: 250px" src="loginsteamlarge.png">
      </a>
    </li>
  </ul>
</nav>

<!-- Header End -->