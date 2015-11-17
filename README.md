moodle-block_slideshow
======================

#Slideshow block 

###This block creates a slideshow that will appear in the heading section of a course page or front page.

A fork of [moodleboy/moodle-block_slideshow](https://github.com/moodleboy/moodle-block_slideshow) with minor fixes to get it running on Moodle 3.0. The new javascript library which enables responsive slides unfortunately supports fewer slide transitions (none, fade, fade out and horizontal scroll).

** Changelog 0.6.0
* Update cycle.js with cycle2.js to support responsive themes
* Replace dropped session_get_instance() with \core\session\manager()
* Add $plugin->component declaration in version.php which is now mandatory

**Installation:**
Download, extract, and upload the "Slideshow" folder into moodle/blocks

**Global Configuration:**
* Set maximum number of slides in a slideshow
* Set maximum file size of slides

**Instance Configuration:**
* Title - Set title of slideshow  (leave blank to hide block's heading)
* Height - Sets height of slideshow and images **NOTE** this block will not rescale image files, it will only change the display size
* Transition - Choose from various slide transitions (some are a bit clunky, but most work well)
* Delay - Sets the time for which a single slide is displayed
* Background color - Clicking in this textbox triggers a colorpicker
* Transparent - Clicking this overrides the background color setting and makes the background transparent
* Image selector - Will only accept gif, jpg, or png files 
* Use as normal Dock - Will allow the slideshow to be displayed in the side columns or where ever a block can be displayed.
