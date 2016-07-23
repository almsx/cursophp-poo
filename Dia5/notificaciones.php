<?php

define('GOOGLE_KEY', 'AIzaSyBq3Ee7rOK7Rbh-8CliYCrDtvAniHgXDqI');

$json = '{
  "registration_ids": ["ex8FXlMqLx0:APA91bHYAooB46qBopO8_uOSmPHoqaie3BfsTF_lMzypSvaMgUCRDngxP5oh1LrQKz7vL90TCxpWZaSc2FNkm3zixT7pdgeO0xGv3w3E7L3fHbhnkhZJmBQxowTC74TU_AUHGAPduaLs"],
  "data":{
    "data": {
      "alert": "Push Notifications Appcelerator ",
      "title": "BBVA Bancomer",
      "vibrate": true,
      "sound": "default",
      "badge": 1,
      "tag": "APP",
      "id": 1,
      "force_show_in_foreground": false,
      "data": {
            "foo" : "bar"
    }
    }
  }
}';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://android.googleapis.com/gcm/send');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [ 'Authorization: key=' . GOOGLE_KEY, 'Content-Type: application/json' ]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
echo curl_exec($ch);
curl_close($ch);

?>