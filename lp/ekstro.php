<?php
include("header.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrovert</title>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Courgette&family=Lato&family=Merriweather&display=swap');
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url('source/checkerboard-cross.png');
            position: absolute;
            background-repeat: repeat;
        }

        .main {
            margin: 8% 8%;
            padding: 10px 20px;
            display: flex;
            flex-direction: column;
            
            background: rgb(247, 255, 254, 0.5);
        }
        
        .main .judul.utama h1{
            font-size: 4em;
            font-weight: 700;
            font-family: 'Courgette', cursive;
            letter-spacing: 5px;
            color: #095e59;
            margin-bottom: 30px;
            
        }
        .main .judul.utama h1 u{
        margin-top: 5px;
        }

        .definition {
            display: flex;
            margin-top: 50px;
            margin-bottom: 15px;

        }

        .main .img img {
            width: 450px;
            position: relative;
            margin-right: 25px;
        }
        .main .definition .text .judul h1{
            color: #105c57;
            margin-bottom: 30px;
            text-transform: uppercase;
        }
        .main .definition.tiga .judul.tiga h1{
            color: #105c57;
            margin-bottom: 50px;
            text-transform: uppercase;
            font-size: 40px;

        }
        .main .fakta .text .judul {
            color: #105c57;
            margin-bottom: 30px;
            font-size: 30px;
            font-weight: 600;
            font-family: 'Merriweather', serif;
            text-transform: capitalize;

        }
        .main .definition .konten p{
            color: #444242;
            font-size: 18px;
            font-weight: 500;
            font-family: 'Lato', sans-serif;
            margin-bottom: 7px;
            text-align: justify;
        }
        .main .definition.tiga .fakta{
            display: flex;
            margin-top: 40px;
            margin-bottom: 30px;
        }
        .fakta p{
            color: #444242;
            font-size: 18px;
            font-weight: 500;
            font-family: 'Lato', sans-serif;
            margin-bottom: 7px;
            text-align: justify;
        }
        

    </style>
</head>

<body>

    
    <div class="main">
        <div class="judul utama">
            <h1><u>Ekstrovert</u> </h1>
        </div>
        <div class="definition satu">
            <div class="img satu">
                <img src="source/search1.png" alt="">
            </div>
            <div class="text satu">
                <div class="judul satu">
                    <h1>APA ITU EKSTROVERT ???</h1>
                </div>
                <div class="konten satu">
                    <p>
                        Ekstrovert merupakan individu dengan ciri kepribadian extraversion, yaitu yang memperoleh energi melalui hal yang bersifat eksternal (dari luar dirinya). Dari situ, extraversion bisa dibilang bertolak belakang dengan kepribadian introversion, yang memperoleh energinya melalui dalam diri.
                    </p>
                    <p>
                        Ibaratkan sebuah baterai, seorang ekstrovert mengisi ulang energinya melalui komunikasi serta interaksi sosial. Mulai dari berinteraksi dengan orang baru, teman-teman, sampai teman dari teman-temannya. Selain itu, mereka juga dikenal sebagai individu yang terbuka, mudah bergaul, menyenangkan, sampai antusias ketika bertemu orang baru. Dengan begitu, seorang ekstrovert memiliki kecenderungan untuk menyukai interaksi sosial dengan orang lain.
                    </p>
                    <p>
                        Dari situ, ekstrovert memiliki kaitan dengan kemampuan leadership, atau kepemimpinan dalam sehari-harinya. Ini dikarenakan mereka senang berinteraksi sosial dengan orang sekitarnya. Selain itu, ekstrovert juga memiliki kecenderungan bersikap asertif, aktif, dan terbuka dalam berkomunikasi. Oleh sebab itu, seringkali mereka dipandang sebagai pemimpin yang baik.
                    </p>
                    <p>
                        Nah, penting bagi kamu untuk memahami ekstrovert dengan baik dalam sehari-harinya. Ini berguna bagi kamu dalam berkehidupan sehari-hari, salah satunya dalam lingkungan sekolah dan pekerjaan. Melalui itu, kamu bisa belajar untuk memahami orang lain sebelum menilainya.
                    </p>
                </div>
            </div>
        </div>
        <div class="definition tiga">
            <div class="judul tiga">
                <h1>Mitos ekstrovert</h1>

                <div class="fakta satu">

                    <div class="img tiga ">
                        <img src="source/weak3.png" alt="">
                    </div>
                    <div class="text tiga">

                        <p class="judul">
                            1. Tidak Butuh Waktu Sendirian
                        </p>
                        <p>
                            Banyak yang beranggapan bahwa ekstrovert gak butuh waktu sendirian, seperti layaknya introvert. Memang, mereka memiliki kecenderungan senang bertemu orang lain. Namun, kedua jenis kepribadian tersebut gak sehitam putih itu, alias cuman sebuah kecenderungan yang kamu miliki. Dengan begitu, kurang tepat jika mengatakan ekstrovert tidak butuh waktu sendirian.
                        </p>
                        
                    </div>
                </div>
                <div class="fakta dua">

                    <div class="img empat ">
                        <img src="source/friends.png" alt="">
                    </div>
                    <div class="text empat">

                        <p class="judul">
                            2. Pasti Memiliki Banyak Teman
                        </p>
                        <p>
                            Tak sedikit yang beranggapan bahwa ekstrovert pasti memiliki banyak teman dalam sehari-harinya. Salah satunya karena mereka cenderung menyukai berinteraksi sosial dengan orang lain. Namun, perlu diingat bahwa tidak semua ekstrovert memiliki kemampuan interpersonal yang baik. Karena itu bukanlah sesuatu yang ditentukan dari kepribadian, melainkan sesuatu yang dilatih. Dengan begitu, kurang tepat jika ekstrovert pasti memiliki banyak teman.
                        </p>
                        
                    </div>
                </div>
                <div class="fakta tiga">

                    <div class="img lima ">
                        <img src="source/talk.png" alt="">
                    </div>
                    <div class="text lima">

                        <p class="judul">
                            3. Cuma Bisa Basa-Basi
                        </p>
                        <p>
                            Selain itu, ekstrovert seringkali dinilai sebagai seseorang yang dangkal, alias gak bisa ngobrol topik yang personal. Hal itu dikarenakan mereka terkenal sering basa-basi ketika berinteraksi dengan orang lain. Padahal, itu bukan berarti mereka gak bisa ngobrolin sesuatu yang berbobot, melainkan hanya preferensi obrolan saja. Menjadi seorang ekstrovert hanyalah cara untuk mereka mengisi ulang energi. Dengan begitu, bukan berarti mereka cuman suka basa-basi saja.

                        </p>
                    </div>
                </div>
                <div class="fakta empat">

                    <div class="img enam ">
                        <img src="source/listen2.png" alt="">
                    </div>
                    <div class="text enam">

                        <p class="judul">
                            4. Pasti Memiliki Kemampuan Leadership yang Baik
                        </p>
                        <p>
                            Walaupun berkaitan, menjadi ekstrovert tidak menjamin seseorang memiliki kemampuan leadership yang baik. Hal itu dikarenakan kemampuan leadership bukanlah sesuatu yang bersifat bawaan, alias dapat sesuatu yang harus diasah. Oleh sebab itu, seorang introvert juga memiliki kemampuan leadership yang baik. Dengan begitu, gak berarti menjadi extrovert pasti memiliki kemampuan leadership yang baik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
include("cardekstro.php");
?>
</body>

</html>