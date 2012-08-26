<?php
$title = 'The Lab | Nomad Device Lab';
$active = 'the-lab';
require('_header.php');
?>

<section>

  <header>
    <h1 id="thelab" class="page-title">The Lab</h1>
  </header>

  <p><strong>Nomad Device Lab</strong> is a traveling, curated, collection of mobile devices that can work with you to do practical and efficient testing.</p>

  <p>The focus is on <a href="#whytestonrealdevices">hands-on testing</a> on a <a href="#deviceselection">small number of devices, covering a large range of variables</a>, and on using that testing to learn and improve your knowledge of the various operating systems and browsers.</p>

</section>

<section>

  <header>
    <h2 id="whytestonrealdevices">Why test on real devices?</h2>
  </header>

  <article>

    <p>Testing on real devices gives the clearest picture of how the site will work &#8220;in the wild.&#8221; It allows for testing in a way that&#8217;s closest to how real users will interact with the site. The most important benefits of using real devices are the physical characteristics of devices:</p>

    <ul>
    <li><strong>input methods</strong> such as fingers on a touch screen rather (are link targets big enough?);</li>
    <li>the weight, size, <strong>form factor</strong>, and portability of a device (is the text well-sized with the screen up close?);</li>
    <li>the <strong>quality and condition</strong> of the hardware (how well does the site work if the touch screen is not very responsive, is cracked, or dirty?);</li>
    <li><strong>capabilities</strong>: touch, GPS, accelerometer, etc. (can we use the device&#8217;s extra capabiliites to add extra value for the user?)</li>
    </ul>

    <p>More realistic testing isn&#8217;t the only benefit of using real devices. You learn more each time you use them, and become more efficient by knowing what to look out for next time. Exposure to more platforms and design approaches, Operating Systems, and browsers is also beneficial. It serves as a reminder of the wide range of use cases and that the site needs to be as lean and robust as possible to survive in whatever environment it is used in.</p>

  </article>

  <article>

    <header>
      <h3 id="emulators">Emulators</h3>
    </header>

    <p>Testing on emulators can be useful, and is certainly better than not testing for mobile at all, but is not as good as testing on real devices. Emulators are essentially ports of an Operating System / browser, so there is the chance of errors or differences in performance and behaviour. They also add another layer of abstraction from the experience that the user has, and another potential place for bugs to occur. They can be a good first test of layout, but can&#8217;t replicate a real user experience.</p>

  </article>

</section>

<section>

  <header>
    <h2 id="deviceselection">Device selection</h2>
  </header>

  <p>It would be impossible to test your site on every device that exists today, and the range and variation is only increasing. Testing on as many devices as possible can quickly become impractical. A pragmatic approach is to test on a representative sample of devices, covering as broad a range as possible.</p>

  <p>The focus of development should be on long term functional support for as many devices as possible, followed by optimisation for higher-end devices. Achieving perfection for specific devices or platforms will only be a short term success: the quantity, quality, and variety of internet-enabled devices is increasing at a remarkble pace.</p>

  <p>The devices in the lab are selected using high-level device categories: the specific devices in the lab aren&#8217;t as important as the categories that each belongs to. Some of the categories used are:</p>

  <ul>
    <li>Operating system and installable browsers</li>
    <li>Screen size, resolution, and ppi</li>
    <li>Inputs method (touchscreen, touchpad, QWERTY keyboard, dpad)</li>
    <li>form factor (shape, size)</li>
    <li>hardware quality</li>
    <li>manufacturer</li>
  </ul>           

</section>

<section>

  <header>
    <h1 id="devicesinthelab">Devices in the lab</h1>
  </header>

  <p>Below is a list of devices currently in the lab, and a short description of why they&#8217;re included.</p>

  <ul>
  <li><strong>Samsung galaxy pocket</strong>. Low end smartphone from leading manufacturer, with most popular Android version (2.3 Gingerbread).</li>
  <li><strong>BB curve 8520</strong>. Older Blackberry (OS 5) with landscape screen, and touchpad / QWERTY input.</li>
  <li><strong>Alacatel one touch</strong>. Mid range smartphone with older Android version (2.2 Froyo).</li>
  <li><strong>iPad 2</strong>. Popular Apple iOS tablet, with large 10&quot; screen and a wide range of available browsers.</li>
  <li><strong>Amazon Kindle keyboard</strong>. Popular e-reader with low capability browser and 16-level grayscale e-ink display. Oddball!</li>
  <li><strong>Nokia 5800 XpressMusic</strong>. Mid range Symbian smartphone from manufacturer popular in Africa, with touchscreen</li>
  <li><strong>iPhone 4</strong>. Popular Apple iOS smartphone, high dpi 3.5&quot; screen and a wide range of available browsers.</li>
  <li><strong>HcH Generic 7inch Android tablet</strong>. Low end tablet with older Android version and mid-size screen.</li>
  <li><strong>Nokia 5310 XpressMusic</strong>. Mid range feature phone from manufacturer popular in Africa, on Series 40 OS, dpad and keypad input, running Opera Mini proxy browser.</li>
  </ul>

  <p>If you would like to host the lab for a day or half day session, please <a href="&#109;&#x61;&#105;&#x6c;&#116;&#111;&#58;&#110;&#x6f;&#109;&#x61;&#100;&#x40;&#100;&#x65;&#118;&#x69;&#99;&#101;&#x6c;&#97;&#98;&#46;&#99;&#x6f;&#46;&#x7a;&#x61;&#63;&#x73;&#x75;&#x62;&#x6a;&#x65;&#99;&#x74;&#61;&#73;&#x25;&#50;&#x30;&#x77;&#111;&#117;&#108;&#100;&#x25;&#50;&#x30;&#108;&#x69;&#x6b;&#101;&#37;&#50;&#x30;&#116;&#x6f;&#37;&#x32;&#x30;&#104;&#x6f;&#115;&#x74;&#37;&#50;&#x30;&#x74;&#x68;&#101;&#x25;&#50;&#48;&#108;&#97;&#98;&#37;&#50;&#x30;&#x66;&#111;&#114;&#x25;&#50;&#x30;&#x61;&#37;&#x32;&#x30;&#115;&#x65;&#x73;&#115;&#x69;&#x6f;&#110;">&#103;&#101;&#x74; &#105;&#110; &#x74;&#x6f;&#117;&#x63;&#104;</a>.</p>

</section>

<?php
require('_footer.php');