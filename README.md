# upnup-test
Test project for Up&amp;Up.
Basic responsive page to test code fluency, organization, and methods.


##Grid system

I implemented my own grid system based on the grids used by Foundation in v. 4/5. This allowed me to keep my grid code a bit lighter (as well as serving as a good learning exercise). There is some room to improve the grid styles I built and make them more robust, but it works well for the intended purpose.


##SMACSS

I chose to break down my SASS into smaller files (especially for modules) and then import all those parts in the final build. This method makes it easier for me to locate a specific file. Module class names correspond to their file names.

###Module Naming conventions

For any modules that may have distinct sub-parts, I use the BEM double underscore (__) style to indicate a sub-part belongs to a certain module. Likewise for module sub-classing I prefer the BEM style double-dash (--) to indicate a modified version of a module. This, for me, is clearer than a single dash, which can also be used in longer class names.


##Design suggestions/ modifications

I did make a few very minor modifications to the design (I am not sure if this is allowed?) I would have liked to have consulted with the designer before making such changes, but I operated on my best judgment.

* Pulled the "Georgia Grown" logo into the boundaries of the grid - it gets cut off before the tablet breakpoint when scaling down. Not sure if there was a different behavior intended, but it looks broken if it is stuck outside the grid.
* Changed the font weight of the main nav items from light to regular for legibility.
* Added a dark transparent overlay over the main banner to increase the legibility of the white type (esp the nav items).
* Changed the font weight of the nav items in the top transparent bar from light to normal for legibility.
* Darkened the overlay gradient on the product call-out boxes to increase the legibility of the white text.

These changes could easily be removed if undesired.

