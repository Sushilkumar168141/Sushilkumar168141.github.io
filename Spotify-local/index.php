<?php

echo "Front Page for login.";

    include "Variables.php";

    if(isset($_POST['loginButton'])) {
        echo "Button clicked<br/>";
        $url = $AUTH_URL."client_id=".$CLIENT_ID."&redirect_uri=".$BASE_URL.$REDIRECT_URI."&scope=".$SCOPE."&response_type=".$RESPONSE_TYPE;
        echo $url;
        header('Location: '.$url);
    }



?>

<form method="post" action="">
    <input type="submit" name="loginButton" value = "Login with Spotify"/>
</form>