<?php
$title = 'Mobile Statistics | Nomad Device Lab';
$active = 'mobile-statistics';
require('_header.php');
?>

<section>
  <header>
    <h1 id="mobilestatistics" class="page-title">Mobile Statistics</h1>
  </header>

  <p>Mobile is showing continued and rapid growth across a wide range of metrics: sales, internet usage (especially search), advertising, e-commerce, and social networking. Many users don&#8217;t have access to a fixed-line or a desktop computer, so their mobile device is their only access to the internet. Below are some statistics as a guide to this. More detailed information is available from the sites in the <a href="#statisticssources">sources section</a>.</p>

</section>

<section class="stats">

  <article id="number-of-users" class="stat">

    <table summary="Comparison of number of cell, web, and mobile web users across the world, and in South Africa">          
    <caption>Cell and web stats: World and South Africa</caption>

      <thead>
        <tr>
          <td></td>
          <th scope="col">People</th>
          <th scope="col">Cell Users</th>
          <th scope="col">Internet Users</th>
          <th scope="col">Mobile Web Users</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">World (billions)</th>
          <td>7</td>
          <td>6</td>
          <td>2.3</td>
          <td>1.2</td>
        </tr>

        <tr>
          <th scope="row">South Africa (millions)</th>
          <td>50</td>
          <td>40</td>
          <td>10</td>
          <td>6</td>
        </tr>
      </tbody>

    </table>

    <div class="chart">

      <p class="chart-label">World</p>
      <img src="img/cell-and-web-stats-world.png" alt="" />

    </div>

    <div class="chart">

      <p class="chart-label">South Africa</p>
      <img src="img/cell-and-web-stats-sa.png" alt="" />

    </div>

  </article>

  <article id="mobile-vs-desktop" class="stat">

    <table summary="Balance of web traffic between mobile and desktop access">          
    <caption>Mobile versus desktop web access: World and South Africa</caption>

      <thead>
        <tr>
          <td></td>
          <th scope="col">Mobile</th>
          <th scope="col">Desktop</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">World (%)</th>
          <td>11</td>
          <td>89</td>
        </tr>

        <tr>
          <th scope="row">South Africa (%)</th>
          <td>12</td>
          <td>88</td>
        </tr>
      </tbody>

    </table>

    <div class="chart">

      <p class="chart-label">World</p>
      <img src="img/web-access-world.png" alt="" />
  
    </div>

    <div class="chart">

      <p class="chart-label">South Africa</p>
      <img src="img/web-access-sa.png" alt="" />

    </div>

  </article>

  <article id="mobile-only-users" class="stat">

    <table summary="Number of users who only access the web using a mobile device">          
    <caption>Mobile only versus desktop and mobile web access: World and South Africa</caption>

      <thead>
        <tr>
          <td></td>
          <th scope="col">Mobile only</th>
          <th scope="col">Desktop too</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">World (%)</th>
          <td>25</td>
          <td>75</td>
        </tr>

        <tr>
          <th scope="row">South Africa (%)</th>
          <td>57</td>
          <td>43</td>
        </tr>
      </tbody>

    </table>

    <div class="chart">

      <p class="chart-label">World</p>
      <img src="img/mobile-only-world.png" alt="" />
   
    </div>

    <div class="chart">

      <p class="chart-label">South Africa</p>
      <img src="img/mobile-only-sa.png" alt="" />

    </div>

  </article>

  <article id="featurephones-vs-smartphones" class="stat">

    <table summary="Balance of featurephone to smartphones">          
    <caption>Feature phones vs smartphones: World and South Africa</caption>

      <thead>
        <tr>
          <td></td>
          <th scope="col">Feature phones</th>
          <th scope="col">Smartphones</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">World (%)</th>
          <td>66</td>
          <td>34</td>
        </tr>

        <tr>
          <th scope="row">South Africa (%)</th>
          <td>80</td>
          <td>20</td>
        </tr>
      </tbody>

    </table>

    <div class="chart">

      <p class="chart-label">World</p>
      <img src="img/featurephones-smartphone-world.png" alt="" />

    </div>

    <div class="chart">

      <p class="chart-label">South Africa</p>
      <img src="img/featurephones-smartphone-sa.png" alt="" />

    </div>

  </article>

</section>

<section>
  <header>
    <h2 id="whatweshoulddoaboutit">What we should do about it</h2>
  </header>

  <p>Given that mobile web access is increasingly popular, we should be building site that work well on mobile devices. The big question is: <a href="testing-on-mobile.php">how do we do rigorous testing on mobile?</a></p>

  <p>Doing so is <a href="testing-on-mobile.php#philosophy">good for developers</a> because it helps our sites reach as many people, on as many devices, as possible. The focus that mobile brings also helps us produce lighter, leaner, sites. [Why is testing on mobile good for developers?</p>

  <p>Testing on mobile is also <a href="testing-on-mobile.php#business">good for our clients</a>. If their customers aren&#8217;t already using their site on mobile, they will be soon. Mobile offers a new channel, and new opportunities for businesses to connect with their existing customers and to pull in new ones.</p>

</section>

<section>
  <header>
    <h2 id="statisticssources">Statistics sources</h2>
  </header>

  

  <p><a href="http://blog.cloudfour.com/a-comprehensive-guide-to-mobile-statistics/">A “Comprehensive” Guide to Mobile Statistics</a> by Jason Grigsby of Cloud Four provides a great starting point for research and statistics sources.</p>

  <p>The <a href="http://www.lukew.com/ff/">Writings section of Luke Wroblewski&#8217;s site</a> provides excellent, regular, details of mobile-related news, amongst other things.</p>

  <p>A brief list of sources used for the statistics above:</p>

  <ul class="stats-sources">
    <li><a href="http://www.digitaltrends.com/mobile/">Digital Trends / mobile</a></li>
    <li><a href="http://www.canalys.com/">Canalys</a></li>
    <li><a href="http://mobithinking.com/">mobiThinking</a></li>
    <li><a href="http://ondeviceresearch.com/">ondevice research</a></li>
    <li><a href="http://www.mobify.com/resources/">Mobify / Resources</a></li>
    <li><a href="http://gs.statcounter.com/">StatCounter</a></li>
    <li><a href="http://pewresearch.org/topics/internetandtechnology/">Pew Research / Internet and Technology</a></li>
    <li><a href="http://www.opera.com/press/releases/">Opera / Press Releases</a></li>
    <li><a href="http://blog.nielsen.com/nielsenwire/category/online_mobile/">Nielsenwire / Online + Mobile</a></li>
    <li><a href="http://www.mobilemarketingwatch.com/">MobileMarketingWatch</a></li>
    <li><a href="http://www.worldwideworx.com/">world wide worx</a></li>
    <li><a href="http://blogs.strategyanalytics.com/">Strategy Analytics Blog</a></li>
    <li><a href="http://insights.chitika.com/">Chitika Insights</a></li>
    <li><a href="http://www.strategyworx.co.za/">Strategy Worx</a></li>
    <li><a href="http://www.comscore.com/">comScore</a></li>
    <li><a href="http://www.itu.int/ITU-D/ict/">ICT</a></li>

  </ul>

</section>

<?php
require('_footer.php');