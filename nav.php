<!DOCTYPE html>
<html>
<head>
   <script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
   <script src="assets/js/jquery.mmenu.min.all.js" type="text/javascript"></script>
   <link href="assets/css/jquery.mmenu.all.css" type="text/css" rel="stylesheet" />
</head>
<body>
<nav id="my-menu">
   <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/about/">About us</a>
         <ul>
            <li><a href="/about/history/">History</a></li>
            <li><a href="/about/team/">The team</a></li>
            <li><a href="/about/address/">Our address</a></li>
         </ul>
      </li>
      <li><a href="/contact/">Contact</a></li>
   </ul>
</nav>
   <div class="mm-page">
      <div>
   <img src="assets/image/logo.png" />
   <p>Welcome to the advanced menu.</p>
</div>

   </div>

   <script type="text/javascript">
   $(document).ready(function() {
      $("#my-menu").mmenu({
         // options
      }, {
         // configuration
         offCanvas: {
            pageSelector: "#my-wrapper"
         }
      });
   });
</script>
</body>
</html>