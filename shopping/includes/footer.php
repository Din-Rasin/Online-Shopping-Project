<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Footer General Styles */
.footer.color-bg {
    background: linear-gradient(135deg, #1e3c72, #2a5298);
    color: #e0e7ff;
    padding: 40px 0 0; /* Adjusted to accommodate small footer */
    font-family: 'Poppins', sans-serif;
}

/* Container and Row Adjustments */
.links-social .container {
    max-width: 1200px;
}

.links-social .row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    opacity: 0; /* For fade-in animation */
    animation: fadeInUp 0.8s ease forwards 0.2s; /* Delayed fade-in */
}

/* Contact Info Section */
.contact-info {
    text-align: left;
    transform: translateY(20px); /* Initial position for animation */
    opacity: 0;
    animation: slideIn 0.6s ease forwards 0.4s; /* Staggered animation */
}

.footer-logo .logo h3 {
    font-size: 28px;
    color: #ffffff;
    margin: 0 0 20px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: color 0.3s ease, transform 0.3s ease;
}

.footer-logo .logo a:hover h3 {
    color: #a1c4fd;
    transform: scale(1.05); /* Subtle zoom on hover */
}

.module-body p.about-us {
    font-size: 14px;
    line-height: 1.8;
    color: #d1d8e0;
    margin: 0;
    transition: color 0.3s ease;
}

/* Contact Timing Section */
.contact-timing {
    transform: translateY(20px); /* Initial position for animation */
    opacity: 0;
    animation: slideIn 0.6s ease forwards 0.6s; /* Staggered animation */
}

.contact-timing .module-heading h4 {
    font-size: 18px;
    color: #ffffff;
    text-transform: uppercase;
    margin-bottom: 15px;
    position: relative;
    padding-bottom: 10px;
}

.contact-timing .module-heading h4::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 2px;
    background: #a1c4fd;
    transition: width 0.3s ease; /* Animate underline */
}

.contact-timing:hover .module-heading h4::after {
    width: 80px; /* Extend underline on hover */
}

.contact-timing .table {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 8px;
    padding: 15px;
    transition: background 0.3s ease;
}

.contact-timing .table:hover {
    background: rgba(255, 255, 255, 0.1); /* Subtle background change */
}

.contact-timing .table td {
    color: #e0e7ff;
    font-size: 14px;
    padding: 8px 0;
    border: none;
    transition: color 0.3s ease;
}

.contact-timing .table td.pull-right {
    color: #a1c4fd;
}

/* Contact Information Section */
.contact-information {
    transform: translateY(20px); /* Initial position for animation */
    opacity: 0;
    animation: slideIn 0.6s ease forwards 0.8s; /* Staggered animation */
}

.contact-information .module-heading h4 {
    font-size: 18px;
    color: #ffffff;
    text-transform: uppercase;
    margin-bottom: 15px;
    position: relative;
    padding-bottom: 10px;
}

.contact-information .module-heading h4::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 2px;
    background: #a1c4fd;
    transition: width 0.3s ease;
}

.contact-information:hover .module-heading h4::after {
    width: 80px; /* Extend underline on hover */
}

.toggle-footer .media {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    transition: transform 0.3s ease, background 0.3s ease;
    padding: 5px;
    border-radius: 5px;
}

.toggle-footer .media:hover {
    transform: translateX(10px); /* Enhanced slide on hover */
    background: rgba(255, 255, 255, 0.05); /* Subtle background on hover */
}

.toggle-footer .fa-stack {
    color: #a1c4fd;
    margin-right: 15px;
    transition: transform 0.3s ease;
}

.toggle-footer .media:hover .fa-stack {
    transform: scale(1.2); /* Icon zoom on hover */
}

.toggle-footer .fa-circle {
    color: #ffffff;
}

.toggle-footer .fa-inverse {
    color: #1e3c72;
}

.toggle-footer .media-body p,
.toggle-footer .media-body a {
    color: #d1d8e0;
    font-size: 14px;
    margin: 0;
    text-decoration: none;
    transition: color 0.3s ease;
}

.toggle-footer .media-body a:hover {
    color: #a1c4fd;
    text-decoration: underline;
}

/* Hover Animations for Sections */
.contact-info:hover,
.contact-timing:hover,
.contact-information:hover {
    transform: translateY(-8px); /* Enhanced lift on hover */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
}

/* Small Footer Section */
.small-footer {
    background: #1e3c72; /* Darker shade for contrast */
    padding: 15px 0;
    text-align: center;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    animation: fadeIn 0.5s ease forwards;
}

.small-footer p {
    margin: 0;
    color: #d1d8e0;
    font-size: 13px;
}

.small-footer .social-links a {
    color: #a1c4fd;
    font-size: 16px;
    margin: 0 10px;
    text-decoration: none;
    transition: color 0.3s ease, transform 0.3s ease;
}

.small-footer .social-links a:hover {
    color: #ffffff;
    transform: scale(1.3); /* Zoom effect for social icons */
}

/* Keyframe Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

/* Responsive Design */
@media (max-width: 991px) {
    .links-social .row .col-md-4 {
        margin-bottom: 30px;
    }
}

@media (max-width: 767px) {
    .links-social .row {
        flex-direction: column;
        text-align: center;
    }

    .contact-info,
    .contact-timing,
    .contact-information {
        text-align: center;
    }

    .contact-timing .table {
        display: block;
    }

    .contact-timing .table td {
        display: block;
        text-align: center;
    }

    .contact-timing .table td.pull-right {
        margin-top: 5px;
    }

    .toggle-footer .media {
        justify-content: center;
    }

    .contact-timing .module-heading h4::after,
    .contact-information .module-heading h4::after {
        left: 50%;
        transform: translateX(-50%);
    }
}
    </style>
</head>
<body>
    <footer id="footer" class="footer color-bg">
        <div class="links-social inner-top-sm">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <!-- ============================================================= CONTACT INFO ============================================================= -->
                        <div class="contact-info">
                            <div class="footer-logo">
                                <div class="logo">
                                    <a href="index.php">
                                        <h3>Shopping Portal</h3>
                                    </a>
                                </div><!-- /.logo -->
                            </div><!-- /.footer-logo -->
                            <div class="module-body m-t-20">
                                <p class="about-us"> Nam libero tempore, cum soluta nobis est ses eligendi optio cumque cum soluta nobis est ses eligendi optio cumque.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <!-- ============================================================= CONTACT TIMING ============================================================= -->
                        <div class="contact-timing">
                            <div class="module-heading">
                                <h4 class="module-title">Opening Time</h4>
                            </div><!-- /.module-heading -->
                            <div class="module-body outer-top-xs">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr><td>Monday-Friday:</td><td class="pull-right">08.00 To 18.00</td></tr>
                                            <tr><td>Saturday:</td><td class="pull-right">09.00 To 20.00</td></tr>
                                            <tr><td>Sunday:</td><td class="pull-right">10.00 To 20.00</td></tr>
                                        </tbody>
                                    </table>
                                </div><!-- /.table-responsive -->
                            </div><!-- /.module-body -->
                        </div><!-- /.contact-timing -->
                    </div><!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <!-- ============================================================= INFORMATION ============================================================= -->
                        <div class="contact-information">
                            <div class="module-heading">
                                <h4 class="module-title">Information</h4>
                            </div><!-- /.module-heading -->
                            <div class="module-body outer-top-xs">
                                <ul class="toggle-footer" style="">
                                    <li class="media">
                                        <div class="pull-left">
                                            <span class="icon fa-stack fa-lg">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <p>New Delhi, Delhi</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left">
                                            <span class="icon fa-stack fa-lg">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <p>(011) 000000000000<br>(011) 000000000000</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left">
                                            <span class="icon fa-stack fa-lg">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <span><a href="#">test@test.com</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- /.module-body -->
                        </div><!-- /.contact-information -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.links-social -->
        <!-- Small Footer -->
        <div class="small-footer">
            <div class="container">
                <p>&copy; 2025 Shopping Portal. All rights reserved.</p>
                <div class="social-links">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div><!-- /.small-footer -->
    </footer>
</body>
</html>