<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//var_dump($_SERVER ["DOCUMENT_ROOT"]);
//require $_SERVER ["DOCUMENT_ROOT"]."/bearbear/twitteroauth/autoload.php";
//use Abraham\TwitterOAuth\TwitterOAuth;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bearbear</title>

        <script src="general.js"></script>
        <script src="fb.js"></script>
        <script src="twitter.js"></script>
        <script src="jquery-1.11.1.min.js"></script>


    </head>
    <body>

        <div
            class="fb-like"
            data-share="true"
            data-width="450"
            data-show-faces="true">
        </div>


        <!--
          Below we include the Login Button social plugin. This button uses
          the JavaScript SDK to present a graphical Login button that triggers
          the FB.login() function when clicked.
        -->

    <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
    </fb:login-button>

    <div id="status">
    </div>
    <br>
    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://localhost/bearbear/" data-via="oloapsaziracav">Tweet</a><br>
    <a class="twitter-timeline" href="https://twitter.com/oloapsaziracav" data-widget-id="567502126759153664">Tweets by @oloapsaziracav</a>
    <br><a href="https://twitter.com/intent/tweet?text=hahaha&hashtags=tawa,meh&in_reply_to=463440424141459456">Reply</a>
    <a href="https://twitter.com/intent/retweet?tweet_id=463440424141459456">Retweet</a>
    <a href="https://twitter.com/intent/favorite?tweet_id=463440424141459456">Favorite</a><br>
</body>
</html>