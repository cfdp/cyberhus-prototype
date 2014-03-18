<?php

// JSON variable

$json = '[
{ "Mon": 
[
{ "start": "1300", "finish": "1600", "type": "single" }
],

"Tue":
[
{ "start": "1300", "finish": "1600", "type": "single" },
{ "start": "1800", "finish": "2100", "type": "single" },
{ "start": "1800", "finish": "2100", "type": "group" }
],

"Wed":
[
{ "start": "1300", "finish": "1600", "type": "single" },
{ "start": "1800", "finish": "2100", "type": "single" },
{ "start": "1800", "finish": "2100", "type": "kram" }
],

"Thu":
[
{ "start": "1300", "finish": "1600", "type": "single" },
{ "start": "1800", "finish": "2100", "type": "single" },
{ "start": "1800", "finish": "2100", "type": "group" }
],

"Fri":
[
{ "start": "1300", "finish": "1600", "type": "single" }
]
}
]';


/* ------------------------------------------------------------------------------------------------------ */ 
// Decode JSON

$arr = json_decode($json);


/* ------------------------------------------------------------------------------------------------------ */ 
// Set timezone and store current day and time

date_default_timezone_set('Europe/Copenhagen');
$currentDay = date("D");
$currentTime = date("H i");

// TEST FUNCTION
// $currentDay = "Tue";
// $currentTime = "1930";

/* ------------------------------------------------------------------------------------------------------ */ 
// Loop through the times of one day

for($i = 0; $i < count($arr[0]->{"Tue"}); $i++) {
  $start = $arr[0]->{$currentDay}[$i]->{"start"};
  $start = date('H i', strtotime("$start"));

  $finish = $arr[0]->{$currentDay}[$i]->{"finish"};
  $finish = date('H i', strtotime("$finish"));

  $type = $arr[0]->{$currentDay}[$i]->{"type"};

  if($currentTime > $start && $currentTime < $finish){
    if($type == "single"){
      echo '<div class="chatBar"><p>Single chat is open</p></div>';
    } else if($type == "group"){
      echo '<div class="chatBar"><p>Group chat is open</p></div>';
    } else if($type == "kram") {
      echo '<div class="chatBar"><p>KRAM chat is open</p></div>';
    }
  }
}