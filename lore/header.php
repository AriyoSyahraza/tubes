<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
  <link rel="icon" href="source/logo.png">
  <title>Header</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

    * {
      margin: 0;
      padding: 0;

    }

    body {
      font-family: "Poppins", sans-serif;
    }

    nav {
      display: flex;
      background-color: #105652;
      padding: 20px 0px;
      color: #ccebe9;
      align-items: center;


    }

    nav ul {
      display: flex;
      list-style: none;
      margin: 0px 5%;
    }
    .logo {
      display: flex;
    }
    nav .logo{
      margin: 0px 15%;
      font-family: 'Oxygen', sans-serif;
      color: white;
      letter-spacing: 2px;
      
    }
    nav .logo :hover{
      text-decoration: underline;
      cursor: pointer;
    }

    nav ul li a {
      color: #ffffff;
      text-decoration: none;
      font-weight: 400;
      font-size: 18px;
      padding: 0px 20px;

    }

    nav ul li a:hover {
      color: #9DAD7F;
      font-weight: 400;
      font-size: 18px;
    }


    nav ul li button {
      padding: 9px 25px;
      background-color: #ffffff;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      color: #105652;
      font-weight: 400;
      font-size: 18px;
    }

    button:hover {
      background-color: #9DAD7F;
      color: #F7F7E8;
      font-weight: 400;
      font-size: 18px;

    }
    nav ul li .dropdown{
      display: none;

    }
    nav ul li:hover .dropdown{
      display: block;
      background-color: #105652 ;
      color: white;
      font-weight: 400;
      position: absolute;
      font-size: 18px;
      padding: 10px;
    }
    nav ul li:hover .dropdown li{
      display: block;

    }
    nav ul li:hover .dropdown li a {
      color: #ffffff;
      text-decoration: none;
      font-weight: 400;
      font-size: 18px;
      padding: 0px 20px;
    }
    nav ul li:hover .dropdown li a:hover{
      background-color: #105652;
      color: #9DAD7F;
      font-weight: 400;
      font-size: 18px;
    }
  </style>

</head>


<body>

  <nav>
    <div class="logo">
      <h2><a href="../lp/index.php"></a> MINARFA</h2>
    </div>
    <ul class="navbar">
      <li><a href="../lp/index.php">Home</a></li>
      <li><a href="#">Kepribadian</a>
        <ul class="dropdown">
          <li><a href="../lp/intro.php">Introvert</a></li>
          <li><a href="../lp/intro.php">Ambivert</a></li>
          <li><a href="../lp/intro.php">Ekstrovert</a></li>

        </ul>
      </li>

      <li><a href="../acus/aus.php">About</a></li>
      <li><a href="../acus/cus.php">Contact</a></li>
      <li><a class="log" href="../form/login-user.php"><button>Login</button></a></li>
      <li><a class="register" href="../form/signup-user.php"><button>Register</button></a></li>
      
    </ul>
  </nav>


</body>

</html>
