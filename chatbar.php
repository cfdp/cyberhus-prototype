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
// $currentTime = "1430";

echo '<div id="chatWrapper"></div>';

/* ------------------------------------------------------------------------------------------------------ */ 
// Loop through the times of one day and output chatbar if needed

for($i = 0; $i < count($arr[0]->{$currentDay}); $i++) {
  $start = $arr[0]->{$currentDay}[$i]->{"start"};
  $start = date('H i', strtotime("$start"));

  $finish = $arr[0]->{$currentDay}[$i]->{"finish"};
  $finish = date('H i', strtotime("$finish"));

  $type = $arr[0]->{$currentDay}[$i]->{"type"};

  // JS timer
  ?>
  <script>
    var currentTime = '<?php echo $currentTime; ?>'.replace(/\s+/g, '');
    var openingTime = '<?php echo $start; ?>'.replace(/\s+/g, '');

    var currentHours = parseInt(currentTime.substring(0,2));
    var openingHours = parseInt(openingTime.substring(0,2));
    var timerHours = openingHours - currentHours - 1;

    var currentMinutes = parseInt(currentTime.substring(2,4));
    var openingMinutes = parseInt(openingTime.substring(2,4));

    currentMinutes = currentMinutes + currentHours * 60;
    openingMinutes = openingMinutes + openingHours * 60;
    var timerMinutes = (openingMinutes - currentMinutes) % 60;
  </script>
  <?php

  if($currentTime > $start && $currentTime < $finish){
    if($type == "single"){
      echo '<div class="chatBar">Single chat is open</div>';
    } else if($type == "group"){
      echo '<div class="chatBar">Group chat is open</div>';
    } else if($type == "kram") {
      echo '<div class="chatBar">KRAM chat is open</div>';
    }
  }
  
  if($currentTime < $start){
    ?>
    <script>
      div = document.getElementById('chatWrapper');
      div.innerHTML = div.innerHTML + '<span id="chatTimer">Next <?php echo $type; ?> chat in ' + timerHours +
        'h ' + timerMinutes + 'm!</span>';
    </script>
    <?php
  }
}