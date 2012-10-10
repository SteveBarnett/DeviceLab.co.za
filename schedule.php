<?php
$title = 'Schedule | Nomad Device Lab';
$active = 'schedule';
require('_header.php');
?>


<?php

require('schedule.inc.php');
ksort($schedule);

print_r($next);

$previous = $schedule;
foreach ($previous as $dtstart => $details) {
  if(strtotime($dtstart) > time()) unset($previous[$dtstart]);
}

$future = $schedule;
foreach ($future as $dtstart => $details) {
  if(strtotime($dtstart) < time()) unset($future[$dtstart]);
}

if(count($future) > 0) {
  $next_dtstart = array_search(min($future), $future);
  unset($future[$next_dtstart]);
}

?>

<?php
if(isset($next_dtstart)) {
?>


<section class="sessions-next">
  <header>
    <h2>Next session</h2>
  </header>


  <div class="vevent">
    <div class="summary">Nomad Device Lab</div>

    <abbr class="dtstart" title="<?php echo date('c', strtotime($next_dtstart)); ?>"><?php echo date('l j F Y', strtotime($next_dtstart)); ?><br /><?php echo date('ga', strtotime($next_dtstart)); ?></abbr> – <abbr class="dtend" title="<?php echo date('c', strtotime($schedule[$next_dtstart]['dtend'])); ?>"><?php echo date('ga', strtotime($schedule[$next_dtstart]['dtend'])); ?></abbr>

    <div class="location"><a href="<?php echo $schedule[$next_dtstart]['url']; ?>"><?php echo $schedule[$next_dtstart]['location']; ?></a></div>   

    <?php
    if ($schedule[$next_dtstart]['status']) {
    ?>
    <p class="status"><?php echo $schedule[$next_dtstart]['status']; ?></p>
    <?php
    }
    else {
    ?>
    <p>Use of the lab is free, but space is limited. Please contact <a href="<?php echo $schedule[$next_dtstart]['contact-email']; ?>" class="contact"><?php echo $schedule[$next_dtstart]['contact']; ?></a> to book your slot.</p>
    <?php
    }
    ?>

  </div>

</section>

<?php
}
?>


<section class="sessions-upcoming">
  <header>
    <h2>Upcoming sessions</h2>
  </header>

  <ul class="schedule">

    <?php
    if(count($future) > 0) {
     foreach ($future as $dtstart => $details) {

      $dtstart = strtotime($dtstart);
      ?>
    <li class="vevent">
        <div class="summary">Nomad Device Lab</div>

        <abbr class="dtstart" title="<?php echo date('c', $dtstart); ?>"><?php echo date('l j F Y', $dtstart); ?><br /><?php echo date('ga', $dtstart); ?></abbr> – <abbr class="dtend" title="<?php echo date('c', strtotime($details['dtend'])); ?>"><?php echo date('ga', strtotime($details['dtend'])); ?></abbr>
  
        <div class="location"><a href="<?php echo $details['url']; ?>"><?php echo $details['location']; ?></a></div>   

        <?php
        if ($details['status']) {
        ?>
        <p class="status"><?php echo $details['status']; ?></p>
        <?php
        }
        else {
        ?>
        <p>Contact <a href="mailto:<?php echo $details['contact-email']; ?>" class="contact"><?php echo $details['contact']; ?></a> to book your slot.</p>
        <?php
        }
        ?>
    </li>

      <?php
      }
    }
    ?>


  </ul>
  <p>The schedule is also posted to <a href="https://twitter.com/nomaddevicelab">@NomadDeviceLab on Twitter</a>.</p>

</section>

<?php
if (count($previous) > 0 ) {
?>

<section class="sessions-previous">
  <header>
    <h2>Previous sessions</h2>
  </header>

  <ul class="schedule">

    <?php
    
    foreach ($previous as $dtstart => $details) {

      $dtstart = strtotime($dtstart);
      ?>
    <li class="vevent">
        <div class="summary">Nomad Device Lab</div>

        <abbr class="dtstart" title="<?php echo date('c', $dtstart); ?>"><?php echo date('l j F Y', $dtstart); ?><br /><?php echo date('ga', $dtstart); ?></abbr> – <abbr class="dtend" title="<?php echo date('c', strtotime($details['dtend'])); ?>"><?php echo date('ga', strtotime($details['dtend'])); ?></abbr>
  
        <div class="location"><a href="<?php echo $details['url']; ?>"><?php echo $details['location']; ?></a></div>   

        <?php

        if(count($details['attendees'])>0) {

          foreach ($details['attendees'] as $attendeeName => $attendeeorg) {
            $attendees .= '<li>' . $attendeeName . ' of <a href="' . $attendeeorg['url'] . '">' . $attendeeorg['org'] . '</a></li>';
          }

          if(count($attendees) > 0 ) {
            $attendees = '<p>Attendees: </p>
          <ul>' . $attendees;
            $attendees .= '</ul>';
          }
          echo $attendees;

        }
        ?>
        
    </li>

      <?php
    }
    ?>


  </ul>


</section>

<?php
}
?>

<?php
require('_footer.php');