<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
/* Top Bar General Styles */
.top-bar {
    background: linear-gradient(90deg, #2c3e50, #3498db);
    padding: 10px 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.header-top-inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Account Navigation Styles */
.cnt-account ul.list-unstyled {
    display: flex;
    margin: 0;
    padding: 0;
}

.cnt-account ul li {
    margin: 0 10px;
    position: relative;
}

.cnt-account ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 14px;
    padding: 8px 12px;
    display: flex;
    align-items: center;
    transition: all 0.3s ease;
    border-radius: 4px;
}

.cnt-account ul li a i {
    margin-right: 6px;
    transition: transform 0.3s ease;
}

/* Hover Effects for Account Links */
.cnt-account ul li a:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
}

.cnt-account ul li a:hover i {
    transform: scale(1.2);
}

/* Block Navigation Styles */
.cnt-block ul.list-unstyled {
    display: flex;
    margin: 0;
    padding: 0;
}

.cnt-block ul li {
    margin: 0 10px;
}

.cnt-block ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 14px;
    padding: 8px 12px;
    display: flex;
    align-items: center;
    transition: all 0.3s ease;
    border-radius: 4px;
}

.cnt-block ul li a i {
    margin-right: 6px;
}

/* Hover Effects for Block Links */
.cnt-block ul li a:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
}

/* Dropdown Animation */
.dropdown-small, .yamm {
    position: relative;
}

.dropdown-small a, .yamm a {
    cursor: pointer;
}

/* Smooth Transition for Dropdown */
.dropdown-small a:hover, .yamm a:hover {
    background: rgba(255, 255, 255, 0.2);
}

/* Admin Link Specific Animation */
.yamm a {
    position: relative;
    overflow: hidden;
}

.yamm a::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: #fff;
    transition: left 0.3s ease;
}

.yamm a:hover::after {
    left: 0;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .header-top-inner {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .cnt-account ul, .cnt-block ul {
        flex-direction: column;
        width: 100%;
    }
    
    .cnt-account ul li, .cnt-block ul li {
        margin: 5px 0;
        width: 100%;
    }
    
    .cnt-account ul li a, .cnt-block ul li a {
        justify-content: flex-start;
    }
}

/* Keyframe for Fade In Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.top-bar.animate-dropdown {
    animation: fadeIn 0.5s ease forwards;
}
	</style>
</head>
<body>
	<?php 
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">

<?php if(strlen($_SESSION['login']))
    {   ?>
				<li><a href="#"><i class="icon fa fa-user"></i>Welcome -<?php echo htmlentities($_SESSION['username']);?></a></li>
				<?php } ?>

					<li><a href="my-account.php"><i class="icon fa fa-user"></i>My Account</a></li>
					<li><a href="my-wishlist.php"><i class="icon fa fa-heart"></i>Wishlist</a></li>
					<li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>

					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
<li><a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a></li>
<?php }
else{ ?>
	
				<li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->

<div class="cnt-block">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a href="track-orders.php" class="dropdown-toggle" ><span class="key">Track Order</b></a>
						
					</li>
					
                    <li class="dropdown yamm">
    <a href="admin/" style="color:#000; font-weight: 600;" title="Admin Dashboard">
        <i class="fas fa-user-shield" style="margin-right: 5px;"></i> Admin Login
    </a>
</li>

				
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->
</body>
</html>