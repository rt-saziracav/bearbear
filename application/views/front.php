<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$consumer = "EuYTT6ObKoVC0B282QnkHgz5y";
$consumer_secret = "qFTp7jHs74sbeONasjo56PMbhVPs4MzWJHhchedHQJ6TqcR4HL";
$access_token ="948154884-vB4vkweWO622RvDOofS4cGFDgZAGSVEefh6MCR11";
$access_token_secret = "ATVADA2Ou7Gke6MXQFzwXl25IxdWORXaG8aqFcVqdAed2";

//$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);
//$connection = new TwitterOAuth("SlD3u6xBiAKGENdgXnFaNsIVT", "TyuCETlQqYQ6IfQWNKx0Uq2EWCubf1WYBjM3iUBlXO3mqBoOUr", $access_token, $access_token_secret);
//$connection = $this->twitteroauth->create($consumer, $consumer_secret, $access_token, $access_token_secret);


/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => $access_token,
    'oauth_access_token_secret' => $access_token_secret,
    'consumer_key' => $consumer,
    'consumer_secret' => $consumer_secret
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ *===============================*/
$url = 'https://api.twitter.com/1.1/statuses/update.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'status' => "test post #API @itsivyjocy"
);

/** Perform a POST request and echo the response **/
/*$twitter = new TwitterAPIExchange($settings);
var_dump($twitter->buildOauth($url, $requestMethod)
    ->setPostfields($postfields)
    ->performRequest());*/

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ *===========================*/
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';

/** GET fields required by the URL above. See relevant docs as above **/
$postfields = '?q=nescafe';

/** Perform a GET request and echo the response **/
/*$twitter = new TwitterAPIExchange($settings);
$tweets = json_decode($twitter
        ->setGetfield($postfields)
        ->buildOauth($url, $requestMethod)
    ->performRequest());
$output = print_r($tweets,TRUE);
var_dump(file_put_contents ( "/var/www/bearbear/tweets" , $output));*/

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ *===========================*/
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';

/** GET fields required by the URL above. See relevant docs as above **/
$postfields = '?q=#nescafe';

/** Perform a GET request and echo the response **/
/*$twitter = new TwitterAPIExchange($settings);
$tweets = json_decode($twitter
        ->setGetfield($postfields)
        ->buildOauth($url, $requestMethod)
    ->performRequest());
$output = print_r($tweets,TRUE);
var_dump(file_put_contents ( "/var/www/bearbear/hashtweets" , $output));*/

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ *===========================*/
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';

/** GET fields required by the URL above. See relevant docs as above **/
$postfields = '?q=#nescafe';

/** Perform a GET request and echo the response **/
/*$twitter = new TwitterAPIExchange($settings);
$tweets = json_decode($twitter
        ->setGetfield($postfields)
        ->buildOauth($url, $requestMethod)
    ->performRequest());
$output = print_r($tweets,TRUE);
var_dump(file_put_contents ( "/var/www/bearbear/hashtweets" , $output));*/

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ *===========================*/
$url = 'https://api.twitter.com/1.1/followers/list.json';
$requestMethod = 'GET';

/** GET fields required by the URL above. See relevant docs as above **/
$postfields = '?user_id=oloapsaziracav';

/** Perform a GET request and echo the response **/
/*$twitter = new TwitterAPIExchange($settings);
$tweets = json_decode($twitter
        ->setGetfield($postfields)
        ->buildOauth($url, $requestMethod)
    ->performRequest());
var_dump($tweets);*/
//$output = print_r($tweets,TRUE);
//var_dump(file_put_contents ( "/var/www/bearbear/hashtweets" , $output));

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ *===========================*/
$url = 'https://api.twitter.com/1.1/direct_messages/new.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    "text" => "hahaha",
    "user" => "oloapsaziracav"
    
);

/** Perform a POST request and echo the response **/
/*$twitter = new TwitterAPIExchange($settings);
var_dump($twitter->buildOauth($url, $requestMethod)
    ->setPostfields($postfields)
    ->performRequest());*/


/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ *===========================*/
$url = 'https://stream.twitter.com/1.1/statuses/sample.json';
$requestMethod = 'GET';

/** GET fields required by the URL above. See relevant docs as above **/
$postfields = '?q=#nescafe';

/** Perform a GET request and echo the response **/
/*$twitter = new TwitterAPIExchange($settings);
$tweets = json_decode($twitter
        //->setGetfield($postfields)
        ->buildOauth($url, $requestMethod)
    ->performRequest());
//$output = print_r($tweets,TRUE);
var_dump($tweets);*/
//var_dump(file_put_contents ( "/var/www/bearbear/hashtweets" , $output));


/** URL for streaming request, see: https://dev.twitter.com/streaming/reference/post/statuses/filter *=======================*/
$url = 'https://stream.twitter.com/1.1/statuses/filter.json';
//$url = 'https://stream.twitter.com/1.1/statuses/sample.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    
    'follow' => "MMDA",
    //'track' => "edsa",
    "locations" => "",
    "track" => "edsa"
    
);
//$postfields = "?track=edsa";

/** Perform a POST request and echo the response **/
$twitter = new TwitterAPIExchange($settings);
var_dump($twitter
    //->setPostfields($postfields)
        ->buildOauth($url, $requestMethod)
        ->setPostfields($postfields)
    ->performRequest());



//$content = $connection->get("account/verify_credentials");
//var_dump($content);

//$twitter = new TwitterOAuth($consumer,$consumer_secret,$access_token,$access_token_secret);
//$url = 'https://api.twitter.com/1.1/search/tweets.json?q=edsa';
//$tweets = $twitter->get($url);

?>
