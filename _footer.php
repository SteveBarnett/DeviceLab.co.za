</div><!-- /#main -->

  <footer role="contentinfo" id="footer">
 
    <div id="hcard-Steve-Barnett" class="vcard">

      <p><a class="url org" href="http://devicelab.co.za">Nomad Device Lab</a>
      is run by 
      <span class="fn">Steve Barnett</span> of <a href="http://naga.co.za">Naga</a>.</p>
      
      <p>To book your place at a session, or to host the lab yourself, get in touch at 
      <a class="email" href="mailto:nomad@devicelab.co.za">nomad@devicelab.co.za</a></p>

      <span class="tel">
        <span class="type">work</span> <span class="value">+27 (0) 21 447 8343</span>
      </span>
      <span class="tel">
        <span class="type">cell</span> <span class="value">+27 (0) 78 111 2163</span>
      </span>

    </div>
 
  </footer>

  <nav role="navigation" id="nav" class="navigation" aria-label="Main Navigation">
    <header>
      <h1>Main Navigation</h1>
    </header>
    <ul>
      <li<?php if($active == 'index') echo ' class="nav-active"'; ?>><a href="index.php" accesskey="h"><em>h</em>ome</a></li>
      <li<?php if($active == 'mobile-statistics') echo ' class="nav-active"'; ?>><a href="mobile-statistics.php" accesskey="m"><em>m</em>obile statistics</a></li>
      <li<?php if($active == 'testing-on-mobile') echo ' class="nav-active"'; ?>><a href="testing-on-mobile.php" accesskey="t"><em>t</em>esting on mobile</a></li>
      <li<?php if($active == 'the-lab') echo ' class="nav-active"'; ?>><a href="the-lab.php" accesskey="l">the <em>l</em>ab</a></li>
      <li<?php if($active == 'schedule') echo ' class="nav-active"'; ?>><a href="schedule.php" accesskey="s"><em>s</em>chedule</a></li>
    </ul>
  </nav>

<p id="back" class="navigation"><a href="#top" accesskey="b">Back to top of page &uarr;</a></p>  

<?php /*
  <!-- JavaScript at the bottom for fast page loading -->

  <!-- scripts concatenated and minified via build script -->
  <script defer src="js/script.js"></script>
  <!-- end scripts -->
*/ ?>

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-24142825-6'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

</body>
</html>