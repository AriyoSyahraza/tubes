<?php
    include("includes/koneksi.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="layoutacus/cus.css" />
    <link rel="stylesheet" href="layoutacus/dragbar.css" />
</head>

<body>
    <?php
                $namaDepan = "";
                $namaBelakang = "";
                $email = "";
                $nomortelp = "";
                $konten = "";
                $error = "";
                $sukses = "";

                if(isset($_POST['simpan'])){
                    $namaDepan = $_POST['namaDepan'];
                    $namaBelakang = $_POST['namaBelakang'];
                    $email = $_POST['email'];
                    $nomortelp = $_POST['nomortelp'];
                    $konten = $_POST['konten'];

                    if($namaDepan == '' or $konten == ''){
                        $error = "Mohon Diisi";
                    }

                    if(empty($error)){
                        $sql = "INSERT INTO contact_us (namaDepan,namaBelakang,email,nomortelp,konten) VALUES ('$namaDepan','$namaBelakang','$email','$nomortelp','$konten')";
                        $q1 = mysqli_query($koneksi,$sql);

                        if($q1){
                            $sukses = "Input Data Berhasil";
                        }
                        else{
                            $error = "Input Data Gagal";
                        }
                    }
                }

    ?>
    <section>
        <div class="navigation">
            <div class="toggle"></div>
            <ul>
                <li>
                    <a href="../lp/index.php">
                        <span class="icon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="../pf/profile.php">
                        <span class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                        <span class="title">Profil</span>
                    </a>
                </li>
                <li>
                    <a href="../acus/cus.php">
                        <span class="icon">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                        </span>
                        <span class="title">Contact Us</span>
                    </a>
                </li>
                <li>
                    <a href="../acus/aus.php">
                        <span class="icon">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </span>
                        <span class="title">About Us</span>
                    </a>
                </li>
                <li>
                    <a href="../landingpage/">
                        <span class="icon">
                            <i class="fa fa-child" aria-hidden="true"></i>
                        </span>
                        <span class="title">Kepribadian</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="container">
            <div class="contactInfo">
                <div>
                    <h2>Contact Info</h2>
                    <ul class="info">
                        <li>
                            <span>
                                <ion-icon name="school-outline"></ion-icon>
                            </span>
                            <span>Universitas Sumatera Utara</span>
                        </li>
                        <li>
                            <span>
                                <ion-icon name="mail-outline"></ion-icon>
                            </span>
                            <span>kelompok2tbs@gmail.com</span>
                        </li>
                        <li>
                            <span>
                                <ion-icon name="location-outline"></ion-icon>
                            </span>
                            <span>Sumatera Utara, Indonesia</span>
                        </li>
                    </ul>
                </div>
                <ul class="sci">
                    <li>
                        <a href="aus.php"><img src="layoutacus/images/1.png" alt="Facebook" /></a>
                    </li>
                    <li>
                        <a href="aus.php"><img src="layoutacus/images/2.png" alt="Twitter" /></a>
                    </li>
                    <li>
                        <a href="aus.php"><img src="layoutacus/images/3.png" alt="IG" /></a>
                    </li>
                </ul>
            </div>

            <!-- =========================================================================================== -->


            <!-- =========================================================================================== -->

            <!-- ========================================================================================== -->
            <div class="contactForm">

                <h2>Send a Message</h2>
                <div class="formBox">
                    <form method="POST" class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="namaDepan" required />
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="namaBelakang" required />
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="email" name="email" required />
                            <span>Email Address</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="nomortelp" required />
                            <span>Phone or Whatsapp</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea name="konten"></textarea>
                            <span>Write Your Message Here...</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" name="simpan" value="Send" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <script>
    const navigation = document.querySelector('.navigation');
    document.querySelector('.toggle').ondblclick = function() {
        this.classList.toggle('active');
        navigation.classList.toggle('active');
    };
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
    $(function() {
        $('.navigation').draggable();
    });
    </script>
</body>

</html>