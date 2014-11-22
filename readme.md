# GIFtv - Turn any display into a GIF picture frame

## The Problem

Our office has an empty TV that isn't being properly utilized at the moment. It's definitely a #FirstWorldProblem, but it basically boils down to the fact that we have multiple displays that act as dashboards for our various services and properties.

Anyway, we had a spare television available to show whatever we wanted. THE ENTIRE INTERNET WAS OUR OYSTER and what better way to put it to use than to display a random assortment of animated GIFs.

Our troubles arose when we realized we had to manually change out the animated GIFs, as well as zoom in in via the attached machine's web browser so that it would properly display images.

Annoying, right?

## The Solution

*Cue superhero music*

Some Javascript, CSS, and PHP came the the rescue!

We're using **CSS** to set a background image (based on one of our animated GIFs) that fills up the entire display. Depending on the settings of your viewport, the image has the possibility of being severly cropped, but hey, whatever!

We're using some **Javascript** calls (thank you so much, Stackoverlow) to display a new animated GIF every 20 seconds or so (or really, whatever time you want, but I'm using 20 seconds), as well as build an array of animated GIFs from our images folder.

Which brings us to **PHP**. We're using PHP to scan the contents of the folder and then using some Jquery calls to periodically call our PHP script to rescan and rebuild the image array -- this means you can drop new animated gifs into the /images folder (or remove them, but why would you even) and it will automagically add them to the Javascript array for random consideration.

Yes? Yes!

## How to use

Upload this script to your favorite webserver that supports PHP. Drop images (of the animated GIF variety) into the /images folder. Open up this page in your favorite browser on your favorite device. Cool? Cool!

## Demo time

So, what the heck does this thing look like? You can see it in action [right here.](http://dave.ly/stuff/giftv/) (Make sure to set your browser to full screen presentation mode so you get the right effect).

GIFtv: [http://dave.ly/stuff/giftv/](http://dave.ly/stuff/giftv/)

## To-do's

* Better error handling
* Figure out how to get Dropbox integration working so the whole company can get in on the fun

## Soft 'g' or hard 'g'?

Hard G, dudes. It's JIFF! I'm not wrong. [You're wrong.](http://www.theatlantic.com/technology/archive/2011/02/tech-etymology-animated-gif/70504/)

## Special Thanks

Thanks to a few people who helped me try and figure this out.

* Conrad Muan (@conradmuan)
* Lydia Katsamberis (@llkats)
* Jon Ursenbach (@jonursenbach)
