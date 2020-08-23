

<?php
//Build URL
$ip = 'xx.xx.xx.xx'; //add your home ip addres
$port = ':xxx'; //add your forwarded port
$url = 'http://' . $ip . $port . '/goform/formiPhoneAppDirect.xml';

//GET Input - Must be sent as ?cmd=
$cmd = htmlspecialchars($_GET['cmd']);

echo $cmd;

if ($cmd == 'volup') {
    for ($i = 0; $i < 5; $i++) {
        //loop

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url . '?MVUP');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);
        curl_close($ch);
    }
} elseif ($cmd == 'wayvolup') {
    for ($i = 0; $i < 10; $i++) {
        //loop

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url . '?MVUP');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);
        curl_close($ch);
    }
} elseif ($cmd == 'voldwn') {
    for ($i = 0; $i < 5; $i++) {
        //loop

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url . '?MVDOWN');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);
        curl_close($ch);
    }
} elseif ($cmd == 'wayvoldwn') {
    for ($i = 0; $i < 20; $i++) {
        //loop

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url . '?MVDOWN');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);
        curl_close($ch);
    }
} elseif ($cmd == 'mplay') {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url . '?SIMPLAY');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch);
    curl_close($ch);
} elseif ($cmd == 'cblsat') {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url . '?SISAT%2FCBL');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch);
    curl_close($ch);
} elseif ($cmd == 'muteon') {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url . '?MUON');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch);
    curl_close($ch);
} elseif ($cmd == 'muteoff') {
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
