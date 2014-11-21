<?php

 /*
  ¡GIFtv!

  A sort of simple way to display full screen animated GIFs on a monitor at any size.

  Special thanks to Conrad Muan (@conradmuan) for his help! 

  - Dave Schumaker (@davely)
 */

 include('image_update.php');

?>

<html>
 <head>
 <title>GIFtv!</title>
 <style>
  body {
    background: url(<?php getImage($images); ?>) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
   }
 </style>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script type = "text/javascript">

     // Setting this variable outside displayNextImage() so we can update total number of images as more are added or removed
     var imageTotal = <?php echo count($images); ?>;

     function displayNextImage() {
      var body = document.getElementsByTagName('body')[0];
        var i = Math.floor(imageTotal*Math.random());
        console.log("Random image: " + i); // Show which image in the array was picked
        body.style.backgroundImage = 'url(' + images[i] + ')';
   }


      function startTimer() {
          setInterval(displayNextImage, 20000);
      }

      var images = [];
      <?php buildImages($images); ?>

  </script>
 </head>
 <body onload = "startTimer()">
  <div class="container">
  </div>
  <script>
   setInterval(function() {
       $.get('image_update.php', function(data) {
        
        // Since I can't figure out how to pass info to JS from image_update.php,
        // I'm just reading a text file that we create based on the contents of the images folder
        $.get("images.txt", function(data) {
         images = data.split(',');
         imageTotal = images.length; // We need to update the total number of images so we can properly pick a random image
         
         // Debugging stuff to make sure things are working okay. 
         console.log("Total images found: " + imageTotal);
         console.log("Image array: " + images);

         });
       });

   }, 5000);
  </script>
 </body>
</html>
