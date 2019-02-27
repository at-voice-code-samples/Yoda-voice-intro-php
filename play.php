<?php

/*This app can run on any webserver of your choice in the example I used nginx. 
I used ngrok to expose the webserver to the internet. To fire up ngrok use the following command ./ngrok http 8000 note the port has to be the same as the port used by nginx. Use the url provided by ngrok as the callback URL.
*/

$response = '<?xml version="1.0" encoding="UTF-8"?><Response>\n';
$response .= '<Say voice="woman" playBeep="true"> Welcome, kindly listen to this lit sound, after the beep.</Say>';
$response .= '<Play url="https://s3.eu-west-2.amazonaws.com/at-voice-sample/play.mp3"/>';
$response .= '</Response>';

echo $response;

?>
