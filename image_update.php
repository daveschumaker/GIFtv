<?php
  // Update image script. Hopefully.

  // Get all GIFs from our animated GIFs directory.
  function getImages () {
    $image_dir = "images/";
    $images = glob($image_dir . "*.gif"); // All we care about are GIFs, you dig?

    return $images;
  }

  // Build image array.
  function buildImages ($images) {
    $i = 0;
    foreach ($images as $image) {
      echo "images[" . $i . "] = \"" . $image . "\"\n";
      $i++;
    }
  }

  // Since I'm not sure how to pass this array back to Javascript
  // I'm just going to save the array into a basic text file.
  function saveFile ($json) {
    $file = "images.txt";

    $image_json = "";
    foreach ($json as $image) {
      if ($image_json == "") {
        $image_json = $image;
      } else {
        $image_json = $image_json . "," . $image;
      }
    }

    file_put_contents($file, $image_json);
  }

  function loadFile () {
    $file = "images.txt";
    $images = file_get_contents($file);
    return $images;
  }

  // Get the first image (so we can properly set background on pageload)
  function getImage($images) {
    echo $images[0];
  }

  $images = getImages();

  echo json_encode($images, JSON_UNESCAPED_SLASHES);

?>
