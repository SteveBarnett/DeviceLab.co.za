<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title><?php echo $title; ?></title>
  <meta name="description" content="Nomad Device Lab is a collection of mobile devices that helps you do better mobile testing.">
  <meta name="author" content="Steve Barnett, Monad Device Lab">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- Serve basic style.css to everything, enhanced.css to larger screens and IE. Keep html.*ie* for element fixes. -->
  <link rel="stylesheet" href="stylesheets/style.20120924.css" media="screen, handheld"/>
  <link rel="stylesheet" href="stylesheets/enhanced.20120924.css" media="screen  and (min-width: 40.5em)"/>
  <!--[if (lt IE 9)&(!IEMobile)]><link rel="stylesheet" href="stylesheets/ie.20120924.css" /> <![endif]-->
  
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js
       Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects; 
       for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/modernizr.custom.20120522.js"></script>

  <!-- Typekit -->
  <script type="text/javascript">
    (function() {
      var config = {
        kitId: 'xha5hpw',
        scriptTimeout: 3000
      };
      var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
    })();
  </script>

  <!-- For author information in search results. Add Google+ profile URL. http://support.google.com/webmasters/bin/answer.py?hl=en&answer=1408986 --> 
  <link rel="author" href="https://plus.google.com/u/0/117361059687801331615"/>

</head>

<body class="<?php echo $active; ?>">
<!-- "Skip to main content," to id, and tabindex="-1" on target -->
<!-- terrillthompson.com/blog/161 -->
<a href="#main" id="top" class="visuallyhidden">Skip to main content</a>

	<header role="banner" id="header">
    <a href="index.php">
      <img src="img/logo.gif" alt="" />
		  <h1 class="site-title">Nomad Device Lab</h1>
    </a>
	</header>

  <a id="jump" href="#nav">Menu</a>

	<div role="main" id="main" class="maincontent" tabindex="-1">