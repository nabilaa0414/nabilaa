  <?php
    require_once('koneksi.php');
         
        $id_post=$_POST['id_post'];
        $judul=$_POST['judul'];
        $isi=$_POST['isi'];

    $edit = "UPDATE post SET judul = '$judul', isi = '$isi' WHERE id_post ='$id_post'";

    if ($conn->query($update)===TRUE) {
       echo "Berhasil diperbarui";
    } else {
        echo "Gagal memperbarui";
    }
    $conn->close();
    header('location:index.php');
    exit;
  ?>