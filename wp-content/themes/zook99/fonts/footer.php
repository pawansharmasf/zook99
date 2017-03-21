<footer class="siteFooter">
	<div class="container clearfix">
     
     <div class="col-one-third">
         <div class="footer-logo"><img src="<?php bloginfo('template_directory'); ?>/images/zook99-logo-inverse.png"></div>
         <p>Collective Evolution (CE) believes in creating change by thinking outside the box. We aim to challenge the current status quo by shaking up how we currently think about the world. We encourage and inspire each other to take action with the goal of bringing to life a bright future for us all.</p>
     </div>
     
        <div class="col-one-third middle-column">
            <img src="<?php bloginfo('template_directory'); ?>/images/ad-300.png">
        </div>
        
        <div class="col-one-third footer-newsletter">
            <p>New releases, updates, sneak peeks & exclusive deals right in your inbox.</p>
            <?php 
            if (function_exists('newsletter_form')) newsletter_form();
            
            ?>
        </div>
  </div><!-- container -->

<div class="subFooter">
        <div class="container clearfix">
            <span>© 2015 Copyright Website Title </span>
            <?php
                if (has_nav_menu('footer2')) {
                    wp_nav_menu( array( 'theme_location'  => 'footer2') );
                } else {
                    echo "Please add a Menu from the 'admin panel > Appearance > Menus' and add it to 'footer2' location.";
                }
            ?>
        </div>
    </div>
</footer><!-- .siteFooter -->



<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12208434-21', 'lolwa.tv');
  ga('send', 'pageview');

</script>  

</body>
</html>