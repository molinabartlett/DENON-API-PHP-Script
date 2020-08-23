

<?php
//Build URL
$ip = 'xx.xx.xx.xx'; //add your home ip addres
$port = ':xxx'; //add your forwarded port
$url = 'http://' . $ip . $port . '/goform/formiPhoneAppDirect.xml';

//GET Input - Must be sent as ?cmd=
$cmd = htmlspecialchars($_GET['cmd']);

echo $cmd;

if ($cmd == 'volup') { //Volume Up
    for ($i = 0; $i < 5; $i++) {
        //loop

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url . '?MVUP');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);
        curl_close($ch);
    }
} elseif ($cmd == 'wayvolup') { //Volume Up More
    for ($i = 0; $i < 10; $i++) {
        //loop

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url . '?MVUP');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);
        curl_close($ch);
    }
} elseif ($cmd == 'voldwn') { //Volume Down
    for ($i = 0; $i < 5; $i++) {
        //loop

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url . '?MVDOWN');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);
        curl_close($ch);
    }
} elseif ($cmd == 'wayvoldwn') { // Volume Down More
    for ($i = 0; $i < 20; $i++) {
        //loop

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url . '?MVDOWN');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);
        curl_close($ch);
    }
} elseif ($cmd == 'mplay') { //Input Media
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url . '?SIMPLAY');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch);
    curl_close($ch);
} elseif ($cmd == 'cblsat') { // Input Cable/Sat
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url . '?SISAT%2FCBL');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch);
    curl_close($ch);
} elseif ($cmd == 'muteon') { //Mute On
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url . '?MUON');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch);
    curl_close($ch);
} elseif ($cmd == 'muteoff') { //Mute Off
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url . '?MUOFF');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch);
    curl_close($ch);
} else {
    die();
}

/*

// Curl Errors - Place between curl_exec and curl_close to see Curl errors.
if(curl_error($ch))
{
	echo 'Curl error: ' . curl_error($ch).'<br>';
}


// Reminder for the idiots (like me) that = sets, == is equal to


*/


?>
