<?php
include ("header.php");
?>

<center> Kutsuge oma sõbrad ka kandidaate soovitama!
<br>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-send" data-href="http://valimissoovitus.azurewebsites.net/" data-colorscheme="dark" data-width="165" data-height="100"></div>
</center>
