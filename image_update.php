<?php
  // Update image script. Hopefully.

  // Get all GIFs from our animated GIFs directory.
  function getImages () {
    $image_dir = "images/";
    $images = glob($image_dir . "*.gif"); // All we care about are GIFs, you dig?

    return $images;
  }

  // Get the first image (so we can properly set background on pageload)
  function getImage($images) {
    echo $images[0];
  }

  $images = getImages();

  echo json_encode($images, JSON_UNESCAPED_SLASHES);
