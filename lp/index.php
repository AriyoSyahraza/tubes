<?php
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="source/logo.png">

    <title>MANRFA</title>
</head>

<body>
    <section>
        <div class="circle"></div>
        <div class="content">
            <div class="text">
                <h2>Who Are You</h2><br>
                <h2>Find The Real of <span>YOU</span></h2>
                <p>
                    Mencari "Kepribadian" merupakan hal yang sangat penting untuk menjadi tahu siapakah kamu yang
                    sebenarnya.
                    <br>
                    Mengapa sampai saat ini Kamu merasa "Tidak ada yang memahami"
                    <br>
                    "Mungkin tidak ada yang peduli"
                    <br>
                    "Aku tidak Mampu mengucapkannya"
                    <br>
                    "Mereka semua tidak paham apa yang terjadi"

                </p>
                <a href="../kuis/kuis.php"> Ikuti Tes</a>
            </div>
            <div class="image">
                <img src="source/intro.png" class="intro">
            </div>
        </div>

        <ul class="thumb">
            <li><img src="source/intro.png" alt="" onclick="imgSlider('source/intro.png')"><p>Introvert</p></li>
            <li><img src="source/ambi.png" alt="" onclick="imgSlider('source/ambi.png')"><p>Ambivert</p></li>
            <li><img src="source/extro.png" alt="" onclick="imgSlider('source/extro.png')"><p>Ekstrovert</p></li>

        </ul>
    </section>

    <script type="text/javascript">
        function imgSlider(anything){
            document.querySelector('.intro').src = anything;
        }
    </script>

</body>

</html>