<html>
 <head>
 <title>GIFtv!</title>
 <style>
  body {
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
   }
 </style>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 </head>
 <body>
  <div class="container">
  </div>
  <script>

  $(document).ready(function(){
    getImage();
  });

  function getImage(){
    $.get('image_update.php', function(data){
      var images = $.parseJSON(data);
      var i = Math.floor(images.length*Math.random());
      $('body').css({
        'background-image': 'url(' + images[i] + ')'
      });
    });
  }

  setInterval(getImage, 20000);
  </script>
 </body>
</html>
