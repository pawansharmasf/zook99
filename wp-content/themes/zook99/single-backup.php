<?php 
	get_header();
	the_post(); 
?>

<div class="pageContent layout1">
	<div class="container clearfix">
    <div class="pageLeft">
    	<article id="post" class="singlePost">
      	<h1><?php the_title(); ?></h1>
        
        
        <div class="postMeta clearfix">
        	<div class="postedDate"><?php the_date('M d, Y'); ?></div><!-- .postedDate -->
          <div class="facebookLike clearfix">
          	<div class="facebookFollow">
          		<iframe id="fblikeButton" src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Flolwatv&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35&amp;appId=1399011197040524" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe>
            </div><!-- .facebookLike -->
            <div class="twitterFollow">
	            <a href="https://twitter.com/Lolwatv" class="twitter-follow-button" data-show-count="false">Follow @Lolwatv</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div><!-- .twitterFollow -->
					</div><!-- .facebookLike -->
        </div><!-- .postMeta -->
        
        <div class="postExcerpt">
        	<p><?php the_content(); ?></p>
        </div><!-- .postExcerpt -->
        
        
        
        <div class="topSocialShare clearfix">
        	<div class="fbShare shareBigButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareBigButton -->
        	<div class="twShare shareBigButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://twitter.com/share?url=<?php the_permalink(); ?>&via=lolwatv&hashtags=&text=<?php the_title(); ?>. Check at','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareBigButton -->
          <div class="shareCount">1.1K <span>Total Shares</span></div><!-- .shareCount -->
        </div><!-- .topSocialShare -->
        
        <div class="videoFrame">
        	<?php the_excerpt(); ?>
        </div><!-- .videoFrame -->
        
        <div class="bottomSocialShare clearfix">
        	<div class="fbShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareSmallButton -->
        	<div class="twShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://twitter.com/share?url=<?php the_permalink(); ?>&via=lolwatv&hashtags=&text=<?php the_title(); ?>. Check at','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareSmallButton -->
        	<div class="gpShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareSmallButton -->
        	<div class="fwShare shareSmallButton"><a href="#"></a></div><!-- .shareSmallButton -->
        </div><!-- .bottomSocialShare -->
        
        <div class="postMetaStats clearfix">
        	<div class="viewsCount"><?php pvc_stats_update( $postid, 1 ); ?> <span>views</span></div><!-- .viewsCount -->
          <div class="postsTags"><?php the_tags(); ?></div><!-- .postsTags -->
          <div class="postSource">Source <a href="#">Youtube</a></div><!-- .postSource -->
        </div><!-- .postMetaStats  -->
        
				<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="4" data-width="100%" data-colorscheme="light"></div>
        
      </article><!-- .singlePost -->
    </div><!-- .pageLeft -->
    <div class="pageRight">
    
    	<?php if ( !function_exists('dynamic_sidebar')
			|| !dynamic_sidebar('Single Page') ) : ?>
			<?php endif; ?>

    	<div class="googleAd"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- lolwa tv - square sidebar -->
      <ins class="adsbygoogle"
           style="display:inline-block;width:300px;height:250px"
           data-ad-client="ca-pub-6052127758295539"
           data-ad-slot="2688100802"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script></div><!-- .googleAd -->

    </div><!-- .pageRight -->
  </div><!-- .container -->
</div><!-- .pageContent -->


<?php get_footer(); ?>