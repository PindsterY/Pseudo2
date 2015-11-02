<?php
if (!empty($_POST['aadress'])) {
    $file = fopen("aadressid.txt", "a") or die("Unable to open file!");
    fwrite($file, $_POST['aadress'] . "\n");
}

header('Location: yl_4.html');
?>