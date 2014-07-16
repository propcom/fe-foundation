Foundation 5 Grid 960/1280
====================

Lets you use the foundation grid system in either 960 or 1280 width sites, modified to allow support for ie8 and to work with the current site template

Also includes the grid block if you know what that is, if not it's awesome:

http://foundation.zurb.com/docs/components/block_grid.html

Install
=======

Copy the conditional statements into the head of your doc, drag the foundation folder into your sass folder and include the required grid below everything else

Usage
=====

Same as any grid, but using large-12, medium-12, and if needed small-12, also large-offset-12, large-pull-2 etc.

Full docs can be found: http://foundation.zurb.com/docs/components/grid.html


Examples
=======


Standard Grid
=======
```html
<div class="row">
  <div class="large-4 medium-4 columns">
    <div class="sidebar"></div>
  </div>
  <div class="large-8 medium-8 columns">
    <div class="main"></div>
  </div>
</div>
```

Offsets
=======
```html
<div class="row">
  <div class="small-10 small-push-2 columns">10</div>
  <div class="small-2 small-pull-10 columns">2, last</div>
</div>
<div class="row">
  <div class="large-9 large-push-3 columns">9</div>
  <div class="large-3 large-pull-9 columns">3, last</div>
</div>
```
Block Grid
=======
```html
<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
  <li><!-- Your content goes here --></li>
  <li><!-- Your content goes here --></li>
  <li><!-- Your content goes here --></li>
  <li><!-- Your content goes here --></li>
  <li><!-- Your content goes here --></li>
  <li><!-- Your content goes here --></li>
</ul>
```

