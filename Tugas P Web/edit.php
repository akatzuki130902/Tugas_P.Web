<?php
    echo $_GET['urut'];


    if($rs->num_rows == 1)
    {
        $baris = $rs->fetch_assoc();
        session_start();
        $_SESSION['username'] = $baris['username'];
        $_SESSION['userid'] = $baris['id'];
        $_SESSION['nama'] = $baris['nama'];
        $_SESSION['views'] = 0;
        $_SESSION['is_logged_in'] = TRUE;
        header("Location: main.php");
    }
    else
    {
        echo "Username atau password salah";
    }