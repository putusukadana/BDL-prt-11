<?php
 session_start();
 if(isset($_POST['edit'])){
 $users = simplexml_load_file('files/mahasiswa.xml');
 foreach($users->user as $user){
 if($user->id == $_POST['id']){
 $user->nama = $_POST['nama'];
 $user->alamat = $_POST['alamat'];
 $user->jurusan = $_POST['jurusan'];
 break;
 }
 }

 file_put_contents('files/mahasiswa.xml', $users->asXML());
 $_SESSION['message'] = 'Mahasiswa telah berhasil di Update';
 header('location: index.php');
 }
 else{
 $_SESSION['message'] = 'Pilih terlebih dahulu untuk mengedit data';
 header('location: index.php');
 }

?>
