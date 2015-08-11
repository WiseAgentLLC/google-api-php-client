<?php
/*
 * Copyright 2013 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
include_once "templates/base.php";
session_start();
echo pageHeader("Simple API Access");

/************************************************
Make a simple API request using a key. In this
example we're not making a request as a
specific user, but simply indicating that the
request comes from our application, and hence
should use our quota, which is higher than the
anonymous quota (which is limited per IP).
 ************************************************/
require_once realpath(dirname(__FILE__) . '/../src/Google/autoload.php');


$client_id = '1039026028052-2iup8280v8ibph5muhqk7lkuthccbkic.apps.googleusercontent.com';
$client_secret = '7PXylY6IpXlPpSREaXbuq3U-';
$redirect_uri = 'http://localhost:8080/oauth2callback.php';
/************************************************
We create the client and set the simple API
access key. If you comment out the call to
setDeveloperKey, the request may still succeed
using the anonymous quota.
 ************************************************/
$client = new Google_Client();
$client->setApplicationName("GoogleAPITest");
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("https://www.google.com/m8/feeds");

$service = new Google_Service_Contacts($client);

/************************************************
If we have a code back from the OAuth 2.0 flow,
we need to exchange that with the authenticate()
function. We store the resultant access token
bundle in the session, and redirect to ourself.
 ************************************************/
if (isset($_GET['code'])) {
    $client->authenticate($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();
    $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
    header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

/************************************************
If we have an access token, we can make
requests, else we generate an authentication URL.
 ************************************************/
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
} else {
    $authUrl = $client->createAuthUrl();
}

/************************************************
We make a call to our service, which will
normally map to the structure of the API.
In this case $service is Books API, the
resource is volumes, and the method is
listVolumes. We pass it a required parameters
(the query), and an array of named optional
parameters.
 ************************************************/

if (isset($authUrl)) {
    echo "<a class='login' href='" . $authUrl . "'>Connect Me!</a>";
} else {
    $optParams = array('alt' => 'json','max-results' => 10000, 'v' => 3);
    $result = $service->contacts->listContacts($optParams);
    echo $client->getAccessToken() . '<br />';

    echo "<h3>Results Of Call:</h3>";
    foreach($result->getFeed()->getEntry() as $contact)
    {
        echo $contact->getTitle()->getValue() . '<br />';
    }
//    $contactUrl = $result->getFeed()->getEntry()[0]->getId()->getValue();
//    $contactId = substr(strrchr($contactUrl, "/"), 1);
////    echo $contactId;
//    $optParams = array('alt' => 'media','v' => 3);
//    $photoData = $service->photos->get($contactId,$optParams);
//    $photo = base64_encode($photoData);
//    echo "<img src= 'data:image/jpeg;base64, $photo' />";
}


/************************************************
This call returns a list of volumes, so we
can iterate over them as normal with any
array.
Some calls will return a single item which we
can immediately use. The individual responses
are typed as Google_Service_Books_Volume, but
can be treated as an array.
 ***********************************************/


/************************************************
This is an example of deferring a call.
 ***********************************************/

echo pageFooter(__FILE__);
