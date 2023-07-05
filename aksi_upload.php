<?php
$target_dir = "gambar/"; // folder untuk menyimpan file yang diunggah
$target_file = $target_dir . basename($_FILES["fupload"]["name"]); // path lengkap file yang diunggah
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Periksa apakah file sudah diunggah atau belum
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fupload"]["tmp_name"]);
    if ($check !== false) {
        echo "File adalah gambar - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.";
        $uploadOk = 0;
    }
}

// Periksa apakah file sudah ada di server
if (file_exists($target_file)) {
    echo "Maaf, file sudah ada.";
    $uploadOk = 0;
}

// Periksa ukuran file
if ($_FILES["fupload"]["size"] > 500000) {
    echo "Maaf, file terlalu besar.";
    $uploadOk = 0;
}

// Izinkan hanya beberapa jenis file
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.";
    $uploadOk = 0;
}

// Periksa apakah $uploadOk = 0, artinya terdapat error
if ($uploadOk == 0) {
    echo "Maaf, file tidak dapat diunggah.";
    // Jika semua periksa sukses, maka file akan diunggah
} else {
    if (move_uploaded_file($_FILES["fupload"]["tmp_name"], $target_file)) {
        echo "File " . basename($_FILES["fupload"]["name"]) . " telah diunggah.";
    } else {
        echo "Maaf, terdapat kesalahan saat mengunggah file.";
    }
}