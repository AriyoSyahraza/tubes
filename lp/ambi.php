<?php
include("header.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambivert</title>
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
            <h1><u>AMBIVERT</u> </h1>
        </div>
        <div class="definition satu">
            <div class="img satu">
                <img src="source/explanation2.png" alt="">
            </div>
            <div class="text satu">
                <div class="judul satu">
                    <h1>APA ITU ambivert ???</h1>
                </div>
                <div class="konten satu">
                    <p>
                        Ambivert adalah kepribadian yang istimewa, ia seorang introvert dan juga bisa menjadi extrovert. Ada seseorang yang terlahir langsung dengan kepribadian ambivert. Umumnya seorang ambivert lebih cenderung mendominasi dari kelemahan introvert dan extrovert.
                    </p>
                    <p>
                        Namun seiring bertambahnya usia, banyaknya proses kehidupan yang seseorang lewati. Seorang ambivert akan bisa mengendalikan potensi dan kelebihan yang ada pada diri mereka.


                    </p>
                    <p>
                        Di dalam hal ini setiap orang sebenarnya bisa seperti ini. Seseorang ambivert adalah mereka yang telah melalui berbagai lika-liku hidup dan berbagai pengalaman. Kelebihan dari keduanya bisa di optimalkan, tentu hal ini adalah hal yang sangat baik.


                    </p>

                </div>
            </div>
        </div>
        <div class="definition dua">
            <div class="img dua">
                <img src="source/search2.png" alt="">
            </div>
            <div class="text dua">
                <div class="judul dua">
                    <h1>Ciri Ciri ambivert</h1>
                </div>
                <div class="konten dua">
                    <p>
                        Ambivert mempunyai kualitas si ekstrovert. Tapi juga memiliki ciri-ciri si introvert. Kadang menjadi si ekstrovert yang senang sosialisasi. Kadang menjadi si introvert yang suka dengan privasi.


                    </p>
                </div>
            </div>
        </div>
        <div class="definition tiga">
            <div class="judul tiga">
                <h1>Ciri Ciri Ambivert</h1>

                <div class="fakta satu">

                    <div class="img tiga ">
                        <img src="source/social2.svg" alt="">
                    </div>
                    <div class="text tiga">

                        <p class="judul">
                            1. Dapat bersosialisasi sekaligus penyendiri
                        </p>
                        <p>
                            Salah satu tanda kepribadian ambivert adalah pandai bersosialiasi tapi juga suka menyendiri di situasi-situasi tertentu. Mereka dapat dengan luwes berkomunikasi dengan orang-orang di sekelilingnya, tapi juga suka menyendiri di waktu-waktu tertentu jika mereka memang membutuhkan.
                        </p>
                    </div>
                </div>
                <div class="fakta dua">

                    <div class="img empat ">
                        <img src="source/talk2.png" alt="">
                    </div>
                    <div class="text empat">

                        <p class="judul">
                            2. Pendengar sekaligus pembicara yang baik
                        </p>
                        <p>
                            Suka membicarakan hal ini dan itu biasanya menjadi ciri dari seorang yang esktrovert. Sebaliknya, seorang yang introvert cenderung pemalu, meskipun introvert berbeda dengan pemalu. Lantas, seperti apa orang dengan karakter ambivert? Nah, orang yang ambivert ternyata bisa saja pendengar sekaligus pembicara yang baik.
                        </p>
                        <p>
                            Jika dirinya memang butuh mengemukakan pendapat, ia tidak malu untuk mengutarakannya. Di lain sisi, ia juga bisa menjadi pendengar yang baik jika memang situasinya mengharuskan.
                        </p>
                    </div>
                </div>
                <div class="fakta tiga">

                    <div class="img lima ">
                        <img src="source/care.png" alt="">
                    </div>
                    <div class="text lima">

                        <p class="judul">
                            3. Punya empati yang tinggi
                        </p>
                        <p>
                            Satu lagi ciri-ciri kepribadian ambivert yang perlu Anda ketahui, yakni rasa empati sangat tinggi. Empati sendiri adalah memahami apa yang dirasakan orang lain, melihat dari sudut pandang orang tersebut, sekaligus bisa membayangkan diri di posisi orang tersebut.
                        </p>
                        <p>
                            Satu lagi ciri-ciri kepribadian ambivert yang perlu Anda ketahui, yakni rasa empati sangat tinggi. Empati sendiri adalah memahami apa yang dirasakan orang lain, melihat dari sudut pandang orang tersebut, sekaligus bisa membayangkan diri di posisi orang tersebut.
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="definition tiga">
            <div class="judul tiga">
                <h1>Kelebihan Ambivert</h1>

                <div class="fakta satu">

                    <div class="img tiga ">
                        <img src="source/health.png" alt="">
                    </div>
                    <div class="text tiga">

                        <p class="judul">
                            1. Memiliki hubungan yang lebih sehat dan stabil
                        </p>
                        <p>
                            Salah satu keuntungan dari seorang ambivert adalah mereka mempunyai hubungan yang lebih stabil, baik itu antara teman maupun pasangan mereka.
                        </p>
                        <p>
                            Hal tersebut dikarenakan mereka dapat mendengarkan sekaligus bersosialisasi dengan baik di khalayak umum. Selain itu, orang dengan karakter ambivert lebih fleksibel dan stabil secara emosional, sehingga ketika menghadapi sebuah masalah dalam hubungan, mereka cenderung menjadi penengah.
                        </p>
                    </div>
                </div>
                <div class="fakta dua">

                    <div class="img empat ">
                        <img src="source/cond.png" alt="">
                    </div>
                    <div class="text empat">

                        <p class="judul">
                            2. Dapat membaca situasi yang dihadapi dengan baik
                        </p>
                        <p>
                            Tahun 2013 lalu, sebuah penelitian melakukan pengamatan hubungan antara kepribadian ekstrovert dengan bakat untuk menjual barang. Banyak orang yang percaya ketika menyangkut menawarkan barang, orang ekstrovert dinilai ahli dalam bidang ini. Kenyataannya, ambivert justru lebih mahir.
                        </p>
                        <p>
                            Hal tersebut dikarenakan mereka dapat berbicara dengan baik, sekaligus menjadi pendengar yang baik. Oleh karena itu, ketika dikaitkan dengan bidang penjualan, ambivert lebih bisa mendengarkan apa yang diinginkan pelanggan tanpa terlihat terlalu bersemangat
                        </p>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    <?php
include("cardambi.php");
?>

</body>

</html>