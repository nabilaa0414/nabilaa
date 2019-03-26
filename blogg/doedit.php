<?php
  
  include("koneksi.php");

    $id_post = $_POST['id_post'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
      
    $update = "UPDATE post SET judul = '$judul', isi = '$isi' WHERE id_post ='$id_post'";

      if ($conn->query($update)===TRUE) {
          echo "Post updated";
          header("location:post.php");
      }else{
          echo "gagal memperbarui post..";
      }
    
      $conn->close();
      exit();
  
?>