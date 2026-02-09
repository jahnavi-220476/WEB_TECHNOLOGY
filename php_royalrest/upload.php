<?php

if (isset($_POST['upload'])) {

    $booking_id = $_POST['booking_id'];
    $file = $_FILES['payment_image'];

    $file_name = $file['name'];
    $tmp_name  = $file['tmp_name'];

    $folder = "payment_screenshots/";

    

    $new_name = $booking_id . "_" . time() . "_" . basename($file_name);
    $destination = $folder . $new_name;

    if (move_uploaded_file($tmp_name, $destination)) {
        echo "Payment uploaded successfully <br><br>";
        echo "<a href='download.php?file=$new_name'><button>Download Screenshot</button></a>";
    } else {
        echo "Upload failed";
    }
}
