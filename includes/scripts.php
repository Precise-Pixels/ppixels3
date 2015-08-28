<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src='/js/modernizr.custom.min.js'></script>
<script src='/js/all.js'></script>

<?php if($isHome): ?>
    <script src='/js/index.js'></script>
<?php endif; ?>

<script src='/js/wow.min.js'></script>
<script>
var wow = new WOW(
  {
    boxClass:     'wow',        // animated element css class (default is wow)
    animateClass: 'animated',   // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       false         // trigger animations on mobile devices (true is default)
  }
);
new WOW().init();
</script>

<script>
// GOOGLE ANALYTICS HERE
</script>