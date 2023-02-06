<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="assets/style/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/style/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/style/css/style.css">
    <script type="text/javascript" src="assets/js/script.js"></script>
    <title>Leo Contact Us</title>
    <link rel="icon" href="assets/image/web-img/logo.png" />
</head>

<body>
    <div class="overlay" id="overlay" onclick="closeNav()"></div>

    <section class="contact-full">
        <section class="head-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                        <a href="index.php"><img class="img-responsive" src="assets/image/web-img/logo.png"></a>
                    </div>
                    <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6 text-right">
                        <div id="mySidenav" class="sidenav text-center">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
                            <a href="index.php">Home</a>
                            <hr>
                            <a href="about.php">About Us</a>
                            <hr>
                            <a href="contact.php">Contact Us</a>
                        </div>
                        <div class="main" id="main">
                            <a href="#" onclick="openNav()">MENU &#9776;</a>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </section>
        <section class="contact-page">
            <div class="container">
                <h2 class="text-center">Contact Us</h2>
                <hr class="hr-mid">
                <section class="form-section">
                    <!--<h3>Contact Us</h3>  -->
                    <form action="config/connection.php" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="first-name" placeholder="first Name" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="last-name" placeholder="last name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input onkeyup="check()" id="email" type="text" name="email" autocomplete="off"
                                        placeholder="Enter Your Email" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="phone_number" placeholder="phone number" required
                                        onkeypress="phone (event)">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <select id="select" type="text" name="catagory">
                                        <option>-Select a catagory</option>
                                        <option>Promote my business</option>
                                        <option>Link not working</option>
                                        <option>Want to work with you</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea rows="14" id="comment" name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default">Send massage</button>
                            <button type="submit" class="btn btn-default">Cancel</button>
                        </fieldset>
                    </form>
                </section>

                <section class="social">
                    <ul>
                        <li><a href="https://www.facebook.com/inavneet.singh.rajput" class="fa fa-facebook fa-2x"
                                aria-hidden="true" target="_blank"></a></li>
                        <li><a href="https://twitter.com/iNAVNEETRAJPUT" class="fa fa-twitter fa-2x" aria-hidden="true"
                                target="_blank"></a></li>
                        <li><a href="https://www.instagram.com/iamnavneetrajput/" class="fa fa-instagram fa-2x"
                                aria-hidden="true" target="_blank"></a></li>
                        <li><a href="https://www.linkedin.com/in/navneet-singh-rajput-20ab531ba/"
                                class="fa fa-linkedin fa-2x" aria-hidden="true" target="_blank"></a></li>
                    </ul>
                </section>

                <section class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <div class="footer-p1">
                                    <p class="font-2">Copyright&copy;2023 by Leo</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <img class="img-responsive foot-img" src="assets/image/web-img/logo.png">
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <div class="footer-p2">
                                    <p class="font-2">Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                            href="https://www.instagram.com/iamnavneetrajput/" target="_blank">Leo</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        </section>

        <script>
        let regExp = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

        function check() {
            if (email.value.match(regExp)) {
                email.style.borderColor = "#27ae60";
                email.style.background = "#eafaf1";
                error.style.display = "none";
                btn.style.display = "block";
            } else {
                email.style.borderColor = "#e74c3c";
                email.style.background = "#fceae9";
                error.style.display = "block";
                btn.style.display = "none";
            }
            if (email.value == "") {
                email.style.borderColor = "lightgrey";
                email.style.background = "#fff";
                error.style.display = "none";
                btn.style.display = "none";
            }
        }

        function phone(evt) {

            var ch = String.fromCharCode(evt.which);

            if (!(/[0-9]/.test(ch))) {
                evt.preventDefault();
            }

        }
        </script>


</body>

</html>