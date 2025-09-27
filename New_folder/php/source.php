<?php

$number = $_POST['number'];

$room_array = [
    '311' => "https://kuula.co/share/collection/7cvH2?logo=-1&info=0&fs=1&vr=1&sd=1&initload=0&thumbs=1",
    '312' => "https://kuula.co/share/collection/7cvHr?logo=-1&info=0&fs=1&vr=1&sd=1&gyro=0&initload=0&thumbs=1",
    '313' => "https://kuula.co/share/collection/7cvMh?logo=0&info=1&fs=1&vr=1&sd=1&thumbs=1",
    '314' => "https://kuula.co/share/collection/7cvMl?logo=0&info=1&fs=1&vr=1&sd=1&thumbs=1",
    '411' => "https://kuula.co/share/collection/7cvM6?logo=0&info=1&fs=1&vr=1&sd=1&thumbs=1",
    '412' => "https://kuula.co/share/collection/7cvM6?logo=0&info=1&fs=1&vr=1&sd=1&thumbs=1"
];

if(array_key_exists($number,$room_array)){

    ?>


<iframe src=<?echo $room_array[$number]?>  style="border:0;" allow="fullscreen" width="100%" height="100%"></iframe>

 

    <?php
}

else{
    echo "Room Not Found";
}


?>