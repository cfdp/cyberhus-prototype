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
      { "start": "13 00", "finish": "1600", "type": "single" },
      { "start": "18 00", "finish": "2100", "type": "single" },
      { "start": "18 00", "finish": "2100", "type": "kram" }
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
// $currentTime = date("H i");

// TEST FUNCTION
$currentTime = "2051";
$currentTime = date('H i', strtotime("$currentTime"));

/* ------------------------------------------------------------------------------------------------------ */ 
// Loop through the times of one day

for($i = 0; $i < count($arr[0]->{"Tue"}); $i++) {
  $start = $arr[0]->{"Tue"}[$i]->{"start"};
  $start = date('H i', strtotime("$start"));
  echo $start;

  $finish = $arr[0]->{"Tue"}[$i]->{"finish"};
  $finish = date('H i', strtotime("$finish"));
  echo $finish;

  $type = $arr[0]->{"Tue"}[$i]->{"type"};
  echo $type;

  if($currentTime > $start && $currentTime < $finish){
    echo "   <---   HIT!";
    echo "<br/> [Output code block for the type: " . $type . "]";
  }

  echo "<br />";
}

echo  "<br /> Current time: " . $currentTime;