

<?php
$title = 'Device Reference | Nomad Device Lab';
$active = 'device-reference';
require('_header.php');
?>

<section id="browser-locations" class="reference">
  <header>
    <h2>Browser locations on devices</h2>
  </header>

<p>Listed alphabetically by manufacturer, then device name.</p>

<ul>

  <li>Alacatel One Touch
  <ul>
    <li>Page 1</li>
  </ul></li>

  <li>Amazon Kindle
  <ul>
    <li>Home button, menu button &gt; Experimental, web browser</li>
  </ul></li>

  <li>Apple iPad
  <ul>
    <li>Safari: tray</li>
    <li>other: last page</li>
  </ul></li>

  <li>Apple iPhone 4
  <ul>
    <li>Safari, Chrome, Opera mini, UC: front page</li>
    <li>others: last page</li>
  </ul></li>

  <li>Apple iPhone 5
  <ul>
    <li>Safari, Chrome: front page</li>
  </ul></li>

  <li>Blackberry 8520
  <ul>
    <li>Native: home page, tray - Browser</li>
    <li>Opera Mini: BB button &gt; Downloads</li>
  </ul></li>

  <li>Google Nexus 7
    <ul>
      <li>Page 1</li>
    </ul>
  </li>

  <li>Nintendo Wii
  <ul>
    <li>Second screen &gt; Internet Channel</li>
  </ul></li>

  <li>Nokia N97
  <ul>
    <li>Native: Menu button &gt; Web</li>
    <li>Opera Mini, Opera Mobile: Menu button &gt; applications</li>
    <li>UC browser. Menu button &gt; applications</li>
  </ul></li>


  <li>Nokia XpressMusic 5310
  <ul>
    <li>Native. Menu &gt; Web &gt; Go to address</li>
    <li>Nokia Browser beta. Menu &gt; Applications &gt; Games</li>
    <li>Opera Mini. Menu &gt; Applications &gt; Collection</li>
  </ul></li>

  <li>Samsung E250
  <ul>
    <li>Native (Open Wave): Menu button, Browser icon.</li>
    <li>Opera Mini: Menu button, Application icon. 2 - Games and more. Bottom of list: Opera Mini.</li>
  </ul></li>

  <li>Samsung Galaxy Ace
  <ul>
    <li>Page 1</li>
  </ul></li>

  <li>Samsung Galaxy Pocket
  <ul>
    <li>Page 1</li>
  </ul></li>



</ul>

</section>

<section id="Wi-Fi settings" class="reference">

  <header>
    <h2>Wi-fi settings</h2>
  </header>

<p>Listed alphabetically by manufacturer, then device name.</p>

<ul>

  <li>Alacatel One Touch
  <ul>
    <li>Menu button &gt; Settings &gt; Wireless & Networks &gt; Wi-Fi settings. Wi-Fi networks.
</li>
  </ul></li>

  <li>Amazon Kindle
  <ul>
    <li>Menu button &gt; Turn Wireless On</li>
    <li>Menu button &gt; Settings &gt; Wi-Fi settings
  </ul></li>

  <li>Apple iPad
  <ul>
    <li>Front page. Settings &gt; Wi-Fi. Choose a network</li>
  </ul></li>

  <li>Apple iPhone 4
  <ul>
    <li>Front page. Settings &gt; Wi-Fi. Choose a network</li>
  </ul></li>

  <li>Apple iPhone 5
  <ul>
    <li>Front page. Settings &gt; Wi-Fi. Choose a network</li>
  </ul></li>

  <li>Blackberry 8520
  <ul>
    <li>BB button. Setup > setup Wi-Fi. Scan for networks</li>
  </ul></li>

  <li>Google Nexus 7
    <ul>
      <li>Front Page. Settings. Wi-Fi.</li>
    </ul>
  </li>

  <li>Nokia N97
  <ul>
    <li>Menu button. Settings &gt; Connectivity &gt;  WLAN</li>
  </ul></li>

  <li>Nokia XpressMusic 5310
  <ul>
    <li>None.</li>
  </ul></li>

    <li>Samsung E250
  <ul>
    <li>None.</li>
  </ul></li>

  <li>Samsung Galaxy Pocket
  <ul>
    <li>First Page. Wi-Fi settings. Wi-Fi network.</li>
  </ul></li>

</ul>

</section>

<section id="mxit-locations" class="reference">
  <header>
    <h2>MXit locations on devices</h2>
  </header>

<p>Listed alphabetically by manufacturer, then device name.</p>

<ul>

  <li>Alacatel One Touch
  <ul>
    <li></li>
  </ul></li>


  <li>Nokia N97
  <ul>
    <li></li>
  </ul></li>


  <li>Nokia XpressMusic 5310
  <ul>
    <li>Menu &gt; Apps &gt; Games &gt; </li>
  </ul></li>

  <li>Samsung E250
  <ul>
    <li>Menu &gt; Applications &gt; 2 Games and more &gt; MXit</li>
  </ul></li>

  <li>Samsung Galaxy Ace
  <ul>
    <li>Page 1</li>
  </ul></li>

  <li>Samsung Galaxy Pocket
  <ul>
    <li>Page 1</li>
  </ul></li>

</ul>

</section>

<section id="ataglance" class="tabular-data">

 <header>
    <h2 id="devicedifferences">Device differences</h2>
  </header>

<?php
$devices_json = utf8_encode(file_get_contents("devices.json"));
$devices = json_decode($devices_json, true);

function cb($disabled = true, $checked = false) {
  if ($checked === true) {
    $html .= '&bull;';
  }
  return $html;
}

?>

  <header>
    <h3>Operating Systems</h3>
  </header>

  <table caption="List of operating systems of devices in the lab">

    <thead>
      <th scope="column">Device</th>
      <th scope="column">iOS</th>
      <th scope="column">Android</th>
      <th scope="column">Symbian</th>
      <th scope="column">Blackberry</th>
      <th scope="column">Windows Phone</th>
      <th scope="column">Other</th>
    </thead>


<?php foreach ($devices as $device => $details) { ?>
    <tr scope="row">
      <th>
        <?php echo $device; ?>
      </th>
      <td data-title="iOS"><?php echo cb(true, $details['OS']['name'] == 'iOS'); ?></td>
      <td data-title="Android"><?php echo cb(true, $details['OS']['name'] == 'Android') ?></td>
      <td data-title="Symbian"><?php echo cb(true, $details['OS']['name'] == 'Symbian') ?></td>
      <td data-title="Blackberry"><?php echo cb(true, $details['OS']['name'] == 'Blackberry'); ?></td>
      <td data-title="Windows Phone"><?php echo cb(true, $details['OS']['name'] == 'Windows Phone'); ?></td>
      <td data-title="Other"><?php echo cb(true, $details['OS']['name'] != 'iOS' && $details['OS']['name'] != 'Android' && $details['OS']['name'] != 'Symbian' && $details['OS']['name'] != 'Blackberry'); ?></td>
    </tr>
<?php } ?>

  </table>


  <header>
    <h3>Input methods</h3>
  </header>

  <table caption="List of input methods of devices in the lab">

    <thead>
      <th scope="column">Device</th>
      <th scope="column">Keypad</th>
      <th scope="column">Qwerty</th>
      <th scope="column">Trackpad</th>
      <th scope="column">Touch</th>
      <th scope="column">Other</th>
    </thead>


<?php foreach ($devices as $device => $details) { ?>
    <tr scope="row">
      <th>
        <?php echo $device; ?>
      </th>
      <td data-title="Keypad"><?php echo cb(true, $details['input-method']['keypad']); ?></td>
      <td data-title="Qwerty"><?php echo cb(true, $details['input-method']['qwerty']); ?></td>
      <td data-title="Trackpad"><?php echo cb(true, $details['input-method']['trackpad']); ?></td>
      <td data-title="Touch"><?php echo cb(true, $details['input-method']['touch']); ?></td>
      <td data-title="Other"><?php echo cb(true, !$details['input-method']['keypad'] && !$details['input-method']['qwerty'] && !$details['input-method']['trackpad'] && !$details['input-method']['touch']); ?></td>
    </tr>
<?php } ?>

  </table>


  <header>
    <h3>Screen sizes</h3>
  </header>

  <table caption="List of screen sizes of devices in the lab">

    <thead>
      <th scope="column">Device</th>
      <th scope="column">Extra small</th>
      <th scope="column">Small</th>
      <th scope="column">Medium</th>
      <th scope="column">Large</th>
      <th scope="column">Widescreen</th>
      <th scope="column">High DPI</th>
    </thead>


<?php foreach ($devices as $device => $details) { ?>
    <tr scope="row">
      <th>
        <?php echo $device; ?>
      </th>
      <td data-title="Extra Small"><?php echo cb(true, $details['screen-size'] == 'extra small'); ?></td>
      <td data-title="Small"><?php echo cb(true, $details['screen-size'] == 'small'); ?></td>
      <td data-title="Medium"><?php echo cb(true, $details['screen-size'] == 'medium'); ?></td>
      <td data-title="Large"><?php echo cb(true, $details['screen-size'] == 'large'); ?></td>
      <td data-title="Widescreen"><?php echo cb(true, $details['aspect-ratio'] == 'widescreen'); ?></td>
      <td data-title="High DPI"><?php echo cb(true, $details['high-device-pixel-ratio']); ?></td>
    </tr>
<?php } ?>

  </table>


  <header>
    <h3>Web Standards support</h3>
  </header>

  <table caption="List of Web Standards support for devices in the lab">

    <thead>
      <th scope="column">Device</th>
      <th scope="column">Bad</th>
      <th scope="column">Okay</th>
      <th scope="column">Good</th>
    </thead>


<?php foreach ($devices as $device => $details) { ?>
    <tr scope="row">
      <th>
        <?php echo $device; ?>
      </th>
      <td data-title="Bad"><?php echo cb(true, $details['web-standards-support'] == 'bad'); ?></td>
      <td data-title="Okay"><?php echo cb(true, $details['web-standards-support'] == 'okay'); ?></td>
      <td data-title="Good"><?php echo cb(true, $details['web-standards-support'] == 'good'); ?></td>

    </tr>
<?php } ?>

  </table>


</section>

<?php
require('_footer.php');