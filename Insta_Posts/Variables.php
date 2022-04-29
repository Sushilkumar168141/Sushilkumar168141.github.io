<?php

$BASE_URL = "https://sushilkumar168141.github.io/Insta_Posts/";
//$BASE_URL = "https://localhost/Insta_Posts/";
$CLIENT_ID = "572404311158465";
$SCOPE="user_profile,user_media";
//$SCOPE = "instagram_graph_user_media, instagram_graph_user_profile";
$RESPONSE_TYPE="code";
$REDIRECT_URI = $BASE_URL."auth/index.html";

$AUTHORIZATION_URL = "https://www.instagram.com/oauth/authorize?";

$CLIENT_SECRET = "0e7f9837b9c9ca56096659518c1aa5e5";
$GRANT_TYPE = "authorization_code";
$CODE="";

$IG_BASE_URL = "https://api.instagram.com/";
$IG_ACCESS_TOKEN_QUERY = "oauth/access_token";

$IG_ACCESS_TOKEN_URL = $IG_BASE_URL.$IG_ACCESS_TOKEN_QUERY;

//$ACCESS_TOKEN = "";
$USER_ID="";

$ACCESS_TOKEN = "IGQVJWcFRxbVI0eE51QjVtQ0Q2Rjd0WUtEclpSanNBTVhEdVlJaUx4enBwZAHdqWlc4TnJuMTloRnItR3lfUnlCeEYwbV9STVdHOGRqM2pmbEVXc0RfdnRYUXpoUENWMFZARenJDZAVg3VTJ5ZATFZAQ05KbwZDZD";
$IG_QUERY_URL = "https://graph.instagram.com/v13.0/";

$ID = "";
$USERNAME = "";
$ACCOUNT_TYPE = "";
$MEDIA_COUNT = "";


?>
