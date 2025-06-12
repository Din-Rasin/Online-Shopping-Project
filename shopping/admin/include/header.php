<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard</title>
 <style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f4f4f4;
    top: 0;
    z-index: 1000;
    background-color: white;
    /* position: fixed; */
    width: 100%;
    box-shadow: 0 4px 12px rgba(0,0,0,0.5);
    transition: background-color 0.3s ease; 
    
  }

  /* Slide-in navbar */
  .navbar {
    animation: slideDown 1s ease-in-out;
  }

  @keyframes slideDown {
    from {
      transform: translateY(-100%);
      opacity: 0;
    }
    to {
      transform: translateY(0);
      opacity: 1;
    }
  }

  .nav-avatar:hover {
    animation: pulse 1.5s infinite, spin 1s ease;
  }

  @keyframes spin {
    from {
      transform: rotateY(0deg);
    }
    to {
      transform: rotateY(360deg);
    }
  }

  @keyframes pulse {
    0% {
      box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.7);
    }
    70% {
      box-shadow: 0 0 0 10px rgba(0, 123, 255, 0);
    }
    100% {
      box-shadow: 0 0 0 0 rgba(0, 123, 255, 0);
    }
  }

  .brand {
    animation: glowText 2s infinite alternate;
    transition: transform 0.3s;
  }

  .brand:hover {
    transform: scale(1.05);
  }

  @keyframes glowText {
    from {
      text-shadow: 0 0 5px #fff, 0 0 10px #17f, 0 0 15px #0ff;
    }
    to {
      text-shadow: 0 0 10px #0ff, 0 0 20px #0ff, 0 0 30px #0ff;
    }
  }

  .nav a {
    transition: color 0.3s;
  }

  .nav a:hover {
    color: #17f;
    text-shadow: 0 0 5px #17f;
  }

  .dropdown-menu {
    transform: rotateX(-90deg) translateY(-10px);
    transform-origin: top;
    transition: transform 0.4s ease, opacity 0.4s ease;
    opacity: 0;
    position: absolute;
    display: none;
  }

  .nav-user:hover .dropdown-menu {
    display: block;
    transform: rotateX(0deg) translateY(0);
    opacity: 1;
  }

  .dropdown-menu li {
    animation: fadeInUp 0.4s ease forwards;
    opacity: 0;
  }

  .nav-user:hover .dropdown-menu li:nth-child(1) { animation-delay: 0.1s; }
  .nav-user:hover .dropdown-menu li:nth-child(2) { animation-delay: 0.2s; }
  .nav-user:hover .dropdown-menu li:nth-child(3) { animation-delay: 0.3s; }
  .nav-user:hover .dropdown-menu li:nth-child(4) { animation-delay: 0.4s; }

  @keyframes fadeInUp {
    from {
      transform: translateY(10px);
      opacity: 0;
    }
    to {
      transform: translateY(0);
      opacity: 1;
    }
  }
  


</style>

</head>
<body>
  <div class="navbar navbar-fixed-top" style="background-color: #343a40; color: #fff; position: fixed; top: 0; width: 100%; z-index: 1000; box-shadow: 0 4px 12px rgba(0,0,0,0.5);">
    <div class="navbar-inner" style="background-image: linear-gradient(to bottom, #444, #333); padding: 10px 0;">
      <div class="container" style="width: 90%; margin: 0 auto; display: flex; align-items: center; justify-content: space-between;">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse" style="color: #fff; background-color: #555; border: none; padding: 8px;">
          <i class="icon-reorder shaded"></i>
        </a>
        <a class="brand" href="#" style="color: #fff; font-size: 24px; font-weight: bold; text-decoration: none; padding: 10px;">
          Shopping Portal | Admin
        </a>
        <div class="nav-collapse collapse navbar-inverse-collapse" style="margin-top: 10px;">
          <ul class="nav pull-right" style="list-style: none; margin: 0; display: flex; align-items: center;">
            <li><a href="#" style="color: #fff; padding: 10px 15px; text-decoration: none;">Admin</a></li>
            <li class="nav-user dropdown" style="position: relative;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #fff; padding: 10px 15px; text-decoration: none; display: flex; align-items: center;">
                <img src="images/user.png" class="nav-avatar" style="width: 30px; height: 30px; border-radius: 50%; margin-right: 5px; transition: transform 1s ease;" />
                <b class="caret" style="border-top-color: #fff;"></b>
              </a>
              <ul class="dropdown-menu" style="background-color: #fff; border: 1px solid #ccc; border-radius: 4px; padding: 10px; min-width: 150px; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
                <li><a href="change-password.php" style="color: #333; padding: 5px 10px; text-decoration: none; display: block;">Change Password</a></li>
                <li><a href="login-animation-tutorial.html" target="_blank" style="color: #333; padding: 5px 10px; text-decoration: none; display: block;">Animated Login Tutorial</a></li>
                <li class="divider" style="border-top: 1px solid #ccc; margin: 5px 0;"></li>
                <li><a href="logout.php" style="color: #333; padding: 5px 10px; text-decoration: none; display: block;">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
  <script src="admin/js/jquery-1.7.2.min.js"></script>
  <script src="admin/js/bootstrap.js"></script>
</body>
</html>
