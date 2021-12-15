<?php
    include 'includes/koneksi.php';

    $kepribadian = $_POST['sifat'];

    $result['pesan'] = "OKe";

    if($kepribadian == ""){
        $result['pesan'] = "Belum ada isi";
    }
    else {
        // $sql = "INSERT INTO posting (username,tanggal,konten) VALUES('$username','$tanggal','$konten')";
        // $q1 = mysqli_query($koneksi,$sql);
        $cek = $koneksi->query("INSERT INTO users (kepribadian) VALUES ('".$kepribadian."') ");

        if($cek){
            $result['pesan'] = "Berhasil diAdd";
        } else {
            $result['pesan'] = "Gagal diAdd";
        }
    }

    echo json_encode($result);
?>