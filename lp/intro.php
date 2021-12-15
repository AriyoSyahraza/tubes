<?php
include("header.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introvert</title>
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
            <h1><u>INTROVERT</u> </h1>
        </div>
        <div class="definition satu">
            <div class="img satu">
                <img src="source/search3.svg" alt="">
            </div>
            <div class="text satu">
                <div class="judul satu">
                    <h1>APA ITU INTROVERT ???</h1>
                </div>
                <div class="konten satu">
                    <p>
                        Introvert adalah sikap atau karakter seseorang yang memiliki orientasi subyektif secara mental
                        dalam menjalani kehidupannya.
                    </p>
                    <p>
                        Kepribadian introvert cenderung menyukai kondisi yang tenang, senang menyendiri, reflektif
                        terhadap apa yang mereka lakukan. Mereka memiliki kecenderungan untuk menjauhi interaksi dengan
                        hal-hal baru.
                    </p>
                    <p>
                        Seseorang introvert sangat senang untuk melakukan aktivitas yang bersifat soliter (dapat di
                        lakukan sendirian tanpa bantuan orang lain). Kegiatan tersebut seperti menulis, membaca,
                        mengoperasikan komputer, menonton film, memancing dan lain sebagainya.
                    </p>
                    <p>
                        Banyak dari seniman, komposer lagu, penulis novel, atau penemu biasanya memiliki kepribadian
                        introvert. Mereka lebih menyukai menikmati waktu yang dihabiskan sendirian, karena menurut
                        mereka, sendirian adalah hal yang menyenangkan.
                    </p>
                    <p>
                        Selain itu, introvert juga memiliki kemampuan yang sangat baik dalam melakukan analisa hal-hal
                        rumit. Mereka lebih mudah untuk berkonsentrasi saat memecahkan masalah.
                    </p>
                </div>
            </div>
        </div>
        <div class="definition dua">
            <div class="img dua">
                <img src="source/ciri.png" alt="">
            </div>
            <div class="text dua">
                <div class="judul dua">
                    <h1>Ciri Ciri Introvert</h1>
                </div>
                <div class="konten dua">
                    <p>
                        Seorang introvert dicirikan sebagai sosok yang senang menikmati waktu ketika sedang sendiri,
                        bukan berarti mereka orang yang anti sosial atau tidak bisa bergaul melainkan seorang introvert
                        akan mendapatkan sumber energinya ketika ia sedang sendiri.
                    </p>
                    <p>
                        Seorang introvert akan merasa energi dalam tubuhnya terisi kembali ketika misalnya ia berada di
                        dalam rumah atau kamar sendirian dan melakukan berbagai macam kegiatan yang mereka sukai seperti
                        menonton film, membaca buku, mendengarkan lagu dan lain sebagainya maka energinya akan terisi
                        kembali setelah seharian ia habiskan mungkin untuk bekerja atau melakukan aktivitas lainnya.
                    </p>
                </div>
            </div>
        </div>
        <div class="definition tiga">
            <div class="judul tiga">
                <h1>Fakta Introvert dan Kelebihannya</h1>

                <div class="fakta satu">

                    <div class="img tiga ">
                        <img src="source/happy.png" alt="">
                    </div>
                    <div class="text tiga">

                        <p class="judul">
                            1. Bahagia dengan kesendirian
                        </p>
                        <p>
                            Sosok introvert lebih banyak menghabiskan waktunya sendiri, walau terkesan aneh tetapi
                            memiliki kemampuan untuk mengenal dan memahami diri sendiri merupakan kelebihan yang tidak
                            semua orang miliki. Kelebihan untuk mampu mengenali diri sendiri, dapat membuatmu mengetahui
                            segala kelebihan dan kelemahan di dalam dirimu sehingga itu bisa memudahkan mu untuk menjadi
                            jauh lebih berkembang setiap harinya.
                        </p>
                        <p>
                            Dengan kesendirian pula kamu tidak perlu bergantung pada teman maupun pasangan ketika hendak
                            berpergian atau melakukan sesuatu hal, tidak perlu diawali dengan persetujuan apalagi
                            perdebatan terlebih dahulu yang kadang menghabiskan waktu dan tenaga. Hal ini akan semakin
                            mengefisienkan waktumu dalam melakukan suatu pekerjaan.
                        </p>
                    </div>
                </div>
                <div class="fakta dua">

                    <div class="img empat ">
                        <img src="source/listen.png" alt="">
                    </div>
                    <div class="text empat">

                        <p class="judul">
                            2. Pendengar yang baik
                        </p>
                        <p>
                            Walaupun banyak dari seoarang introvert yang memiliki sifat keras kepala karena merasa apa yang ia pikirkan lah yang paling benar tetapi di balik itu semua introvert sebenarnya lebih cenderung pendiam dan lebih suka memperhatikan lingkungan sekitarnya, ia lebih senang mendengarkan orang yang bercerita padanya dan memahami perasaan serta pikiran lawan bicaranya.
                        </p>
                        <p>
                            Sosok introvert memiliki rasa empati yang tinggi sehingga tak heran banyak orang yang menjadikan sosok introvert sebagai tempat curhat dan sosok yang dapat diandalkan untuk meminta saran dalam menyelesaikan suatu permasalahan.
                        </p>
                    </div>
                </div>
                <div class="fakta tiga">

                    <div class="img lima ">
                        <img src="source/power4.png" alt="">
                    </div>
                    <div class="text lima">

                        <p class="judul">
                            3. Sosok yang kreatif
                        </p>
                        <p>
                            Seorang introvert memiliki dunia mereka sendiri, ia lebih nyaman berada di dalam kesendirian yang menyebabkan banyaknya ide dan imajinasi yang dilahirkan di kala sedang sendirian. Maka tak jarang ide dan imajinasi tersebut dapat melahirkan sebuah karya yang sangat membanggakan.

                        </p>
                        <p>
                            Banyak tokoh penting juga yang menghasilkan sebuah karya didalam kesendiriannya, contohnya saja penulis ternama Pramoedya Ananta Toer yang menghasilakan empat karya sastra tetralogi di dalam kesendiriannya di kala pengasingannya di Pulau Buru dan masih banyak lagi sosok inspiratif lainnya yang menghasilkan karya di kala kesendiriannya.
                        </p>
                    </div>
                </div>
                <div class="fakta empat">

                    <div class="img enam ">
                        <img src="source/weak2.png" alt="">
                    </div>
                    <div class="text enam">

                        <p class="judul">
                            4. Memiliki ketenangan
                        </p>
                        <p>
                            Seorang introvert cenderung memiliki ketenangan di dalam melakukan sesuatu, karena kelebihannya mengenal diri sendiri ia tak mudah terdistraksi oleh faktor eksternal di luar dirinya. Memiliki ketenangan merupakan buah dari kesendirian yang mereka gemari, dengan kesendirian pula ia dapat memiliki keseimbangan emosi sehingga membuat seorang introvert cenderung sedikit memiliki musuh dan konflik dengan orang lain.
                        </p>
                    </div>
                </div>
                <div class="fakta lima">

                    <div class="img tujuh ">
                        <img src="source/judge.png" alt="">
                    </div>
                    <div class="text tujuh">

                        <p class="judul">
                            5. Terampil Dalam Menilai Sesuatu
                        </p>
                        <p>
                            Memiliki dunia mereka sendiri membuat introvert lebih banyak berpikir dan mendengar daripada berbicara, di situasi yang asing dimana banyak orang yang tak mereka kenali sosok introvert cenderung terlihat diam saja padahal ia menghabiskan waktunya untuk berpikir dan menganalisis sesuatu di sekitarnya.
                        </p>
                        <p>
                            Hal inilah yang membuatnya kerap memiliki intuisi dan naluri yang kuat dalam mengambil sebuah keputusan, menilai seseorang ataupun lingkungan sekitarnya. Pandai menilai sesuatu bukan berarti mereka yang paling benar atau paling tahu segalanya melainkan dengan cara begitu mereka lebih banyak memiliki sudut pandang baru dalam menyikapi sesuatu permasalahan. Sehingga tak jarang seorang introvert dapat menerapkan dan memiliki growth mindset.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
include("cardintro.php");
?>
</body>

</html>