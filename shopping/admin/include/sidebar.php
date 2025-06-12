<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		<style>
        /* Sidebar container */
        .sidebar {
            background: #532784;
            width: 250px;
            height: 100vh;
            padding: 10px;
            position: fixed;
            top: 0;
            left: 0;
            transition: transform 0.3s ease;
        }

        /* Sidebar items */
        .widget-menu li {
            list-style-type: none;
        }

        .widget-menu li a {
            display: block;
            padding: 12px 20px;
            margin: 5px 0;
            color: #fff;
            background: #532784;
            text-decoration: none;
            border-radius: 10px;
            position: relative;
            transition: all 0.3s ease;
            transform-style: preserve-3d;
            perspective: 1000px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }

        /* Rotating border animation */
        .widget-menu li a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 2px solid #fff;
            border-radius: 10px;
            transition: all 0.5s ease;
            transform-origin: center;
            transform: rotate(0deg);
        }

        /* Hover effect with border rotation */
        .widget-menu li a:hover::before {
            transform: rotate(360deg);
        }

        /* Hover effect with 3D tilt and highlight */
        .widget-menu li a:hover {
            transform: translateY(-5px) rotateX(5deg);
            background: #3a3f44;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.5);
        }

        /* Icon spacing */
        .menu-icon {
            margin-right: 10px;
        }

        /* Collapse icon animation */
        .collapsed .icon-chevron-down {
            transform: rotate(0deg);
            transition: transform 0.3s ease;
        }

        .collapsed[aria-expanded="true"] .icon-chevron-down {
            transform: rotate(180deg);
        }
		/* Hover Glow Effect */
.widget-menu li a:hover {
    transform: translateY(-5px) rotateX(5deg);
    background: #3a3f44;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.5), 0 0 10px #fff;
    animation: glowEffect 1.5s ease-in-out infinite alternate;
}

/* Glow Animation */
@keyframes glowEffect {
    0% {
        text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff;
    }
    100% {
        text-shadow: 0 0 20px #ff00ff, 0 0 30px #ff00ff, 0 0 40px #ff00ff;
    }
}
/* Text Fade-in Animation */
.widget-menu li a span {
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.widget-menu li a:hover span {
    opacity: 1;
}
/* Pulse Animation for Active Link */
.widget-menu li a.active {
    animation: pulse 1.5s infinite;
}

/* Pulse Keyframes */
@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
    100% {
        transform: scale(1);
    }
}
/* Slide-in Effect for Sidebar Items */
.widget-menu li {
    opacity: 0;
    transform: translateX(-50px);
    animation: slideIn 0.5s forwards;
}

.widget-menu li:nth-child(1) {
    animation-delay: 0.2s;
}
.widget-menu li:nth-child(2) {
    animation-delay: 0.4s;
}
.widget-menu li:nth-child(3) {
    animation-delay: 0.6s;
}

/* Slide-in Animation */
@keyframes slideIn {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
/* Sidebar Bounce */
.sidebar.open {
    animation: bounceIn 0.5s ease-out;
}

@keyframes bounceIn {
    0% {
        transform: translateX(-150%);
    }
    60% {
        transform: translateX(30%);
    }
    100% {
        transform: translateX(0);
    }
}
        /* Sidebar Collapse */
        .sidebar.collapsed {
            transform: translateX(-100%);
        }

        /* Sidebar Toggle Button */
        .sidebar-toggle {
            position: absolute;
            top: 20px;
            right: -50px;
            background: #532784;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .sidebar-toggle:hover {
            background: #3a3f44;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.5);
        }
    </style>
	</style>
</head>
<body>
	<div class="span3">
					<div class="sidebar">


<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Order Management
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="todays-orders.php">
											<i class="icon-tasks"></i>
											Today's Orders
  <?php
  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 $result = mysqli_query($con,"SELECT * FROM Orders where orderDate Between '$from' and '$to'");
$num_rows1 = mysqli_num_rows($result);
{
?>
											<b class="label orange pull-right"><?php echo htmlentities($num_rows1); ?></b>
											<?php } ?>
										</a>
									</li>
									<li>
										<a href="pending-orders.php">
											<i class="icon-tasks"></i>
											Pending Orders
										<?php	
	$status='Delivered';									 
$ret = mysqli_query($con,"SELECT * FROM Orders where orderStatus!='$status' || orderStatus is null ");
$num = mysqli_num_rows($ret);
{?><b class="label orange pull-right"><?php echo htmlentities($num); ?></b>
<?php } ?>
										</a>
									</li>
									<li>
										<a href="delivered-orders.php">
											<i class="icon-inbox"></i>
											Delivered Orders
								<?php	
	$status='Delivered';									 
$rt = mysqli_query($con,"SELECT * FROM Orders where orderStatus='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>

										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="manage-users.php">
									<i class="menu-icon icon-group"></i>
									Manage users
								</a>
							</li>
						</ul>


						<ul class="widget widget-menu unstyled">
                                <li><a href="category.php"><i class="menu-icon icon-tasks"></i> Create Category </a></li>
                                <li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i>Sub Category </a></li>
                                <li><a href="insert-product.php"><i class="menu-icon icon-paste"></i>Insert Product </a></li>
                                <li><a href="manage-products.php"><i class="menu-icon icon-table"></i>Manage Products </a></li>
                        
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<li><a href="user-logs.php"><i class="menu-icon icon-tasks"></i>User Login Log </a></li>
							
							<li>
								<a href="logout.php">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
				<script>
document.querySelectorAll('[data-toggle="collapse"]').forEach(button => {
    button.addEventListener('click', function () {
        const target = document.querySelector(this.getAttribute('href'));
        target.classList.toggle('show');
        this.classList.toggle('active');
    });
});
</script>

</body>
</html>
