<?php
 session_start();
 if(isset($_POST['add'])){

    $users = simplexml_load_file('files/mahasiswa.xml');
    $user = $users->addChild('user');
    $user->addChild('id', $_POST['id']);
    $user->addChild('nama', $_POST['nama']);
    $user->addChild('alamat', $_POST['alamat']);
    $user->addChild('jurusan', $_POST['jurusan']);

    $dom = new DomDocument();
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($users->asXML());
    $dom->save('files/mahasiswa.xml');
    // Prettify / Format XML and save

    $_SESSION['message'] = 'Mahasiswa berhasil di tambahkan';
    header('location: index.php');
 }
 else{
    $_SESSION['message'] = 'Fill up add form first';
    header('location: index.php');
 }
?>