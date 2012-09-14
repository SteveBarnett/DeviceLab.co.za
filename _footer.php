</div><!-- /#main -->

  <footer role="contentinfo" id="footer">

  </footer>

  <nav role="navigation" id="nav" class="navigation">
    <header>
      <h3>Main Navigation</h3>
    </header>
    <ul>
      <li<?php if($active == 'index') echo ' class="nav-active"'; ?>><a href="index.php">home</a></li>
      <li<?php if($active == 'mobile-statistics') echo ' class="nav-active"'; ?>><a href="mobile-statistics.php">mobile statistics</a></li>
      <li<?php if($active == 'testing-on-mobile') echo ' class="nav-active"'; ?>><a href="testing-on-mobile.php">testing on mobile</a></li>
      <li<?php if($active == 'the-lab') echo ' class="nav-active"'; ?>><a href="the-lab.php">the lab</a></li>
      <li<?php if($active == 'schedule') echo ' class="nav-active"'; ?>><a href="schedule.php">schedule</a></li>
    </ul>
  </nav>

<p id="back" class="navigation"><a href="#top">Back to top of page &uarr;</a></p>  

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