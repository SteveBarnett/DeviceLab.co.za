</div><!-- /#main -->

  <footer role="contentinfo" id="footer">

  </footer>

  <nav role="navigation" id="nav" class="navigation">
    <header>
      <h3>Main Navigation</h3>
    </header>
    <ul>
      <li<?php if($active == 'index') echo ' class="active"'; ?>><a href="index.php">home</a></li>
      <li<?php if($active == 'mobile-statistics') echo ' class="active"'; ?>><a href="mobile-statistics.php">mobile statistics</a></li>
      <li<?php if($active == 'testing-on-mobile') echo ' class="active"'; ?>><a href="testing-on-mobile.php">testing on mobile</a></li>
      <li<?php if($active == 'the-lab') echo ' class="active"'; ?>><a href="the-lab.php">the lab</a></li>
    </ul>
  </nav>

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- scripts concatenated and minified via build script -->
  <script defer src="js/script.js"></script>
  <!-- end scripts -->


  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

  <a href="#top">Back to top of page &uarr;</a>

</body>
</html>