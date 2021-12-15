<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Login - Register</title>
</head>

<body>
    <header>>
        <h1 class="logo">MINARFA</h1>
        <nav>
            <ul class="navbar">
                <li><a href="../lp/index.php">Home</a></li>
                <li><a href="../acus/aus.php">About</a></li>
                <li><a href="../acus/cus.php">Contact</a></li>
            </ul>
        </nav>

    </header>
    <div class="keren">
        <div class="container">
            <input type="checkbox" id="flip" />
            <div class="cover">
                <div class="front">
                    <img src="gg.jpg" alt="" />
                    <div class="text">
                        <span class="text-1">Selalu jadi diri sendiri, ekspresikan diri anda, milikilah
                            kepercayaan terhadap diri, <br />
                            jangan mencari keluar dan temukan kepribadian sukses dan
                            duplikasikan</span>
                        <span class="text-2">Bruce Lee</span>
                    </div>
                </div>
                <div class="back">
                    <img class="backImg" src="g.jpg" alt="" />
                    <div class="text">
                        <span class="text-1">Kehormatan kita adalah Kepribadian Kita. <br />
                            Saat Kepribadian saja tidak punya, tak akan mungkin punya
                            Kehormatan.</span>
                        <span class="text-2">Chairul Tanjung</span>
                    </div>
                </div>
            </div>
            <div class="forms">
                <div class="form-content">
                    <div class="login-form">
                        <div class="title">Login</div>
                        <form action="#">
                            <div class="input-boxes">
                                <div class="input-box">
                                    <i class="fas fa-envelope"></i>
                                    <input type="text" placeholder="Enter your email" required />
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" placeholder="Enter your password" required />
                                </div>
                                <div class="text"><a href="#">Forgot password?</a></div>
                                <div class="button input-box">
                                    <input type="submit" value="Submit" />
                                </div>
                                <div class="text sign-up-text">
                                    Don't have an account? <label for="flip">Sigup now</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="signup-form">
                        <div class="title">Signup</div>
                        <form action="#">
                            <div class="input-boxes">
                                <div class="input-box">
                                    <i class="fas fa-font"></i>
                                    <input type="text" placeholder="Enter your name" required />
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-user"></i>
                                    <input type="text" placeholder="Enter your Username" required />
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-envelope"></i>
                                    <input type="text" placeholder="Enter your email" required />
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" placeholder="Enter your password" required />
                                </div>
                                <div class="button input-box">
                                    <input type="submit" value="Submit" />
                                </div>
                                <div class="text sign-up-text">
                                    Already have an account? <label for="flip">Login now</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>