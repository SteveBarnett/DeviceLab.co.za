<script>
(function(){
  if('querySelector' in document
  && 'localStorage' in window
  && 'addEventListener' in window) {
    document.write("<h1>Your browser cuts the mustard</h1>");
  }
  else {
    document.write("<h1>Your browser does not cut the mustard</h1>");
  }
})();
  </script>