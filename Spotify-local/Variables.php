<?php

$BASE_URL = "http://localhost/Spotify-local/";
$CLIENT_ID = "91132726e6784991af677e7e7c804b7e";
$RESPONSE_TYPE = "code";
$REDIRECT_URI = "auth/index.php";
$AUTH_URL = "https://accounts.spotify.com/authorize?";
$SCOPE="user-library-modify user-library-read";




// Function to get curl data
    function get_curl($url) 
    {
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_HTTPGET, true);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

?>