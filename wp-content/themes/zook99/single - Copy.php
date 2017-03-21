<?php 
	get_header();
	the_post(); 
?>

<div class="pageContent layout2 commonStyles1">

	<script type="text/javascript">
        
        
        if(window.innerWidth < 1010 && window.innerWidth > 740) {
			document.write (
				 '<div class="video-top-ad"><ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-6052127758295539" data-ad-slot="2688100802"></ins></div>'
				);				
			(adsbygoogle = window.adsbygoogle || []).push({});
		}

		if(window.innerWidth < 740 && window.innerWidth > 467) {
			document.write (
				 '<div class="video-top-ad"><ins class="adsbygoogle" style="display:inline-block;width:468px;height:60px" data-ad-client="ca-pub-6052127758295539" data-ad-slot="2688100802" data-ad-format="auto"></ins></div>'
				);				
			(adsbygoogle = window.adsbygoogle || []).push({});
		}

		if(window.innerWidth < 468 && window.innerWidth > 250) {
			document.write (
				 '<div class="video-top-ad"><ins class="adsbygoogle" style="display:inline-block;width:320px;height:50px" data-ad-client="ca-pub-6052127758295539" data-ad-slot="2688100802" data-ad-format="auto"></ins></div>'
				);				
			(adsbygoogle = window.adsbygoogle || []).push({});
		}
        
		</script>						


 	<div class="videoHead">
		<div class="container clearfix">
  
    	<div class="videobarAd" style="text-align:right">
            <img style="" src="<?php bloginfo('template_directory'); ?>/images/left-ad.jpg">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      
			<script type="text/javascript">
                /* for desktop 
				if(window.innerWidth > 1131) {
					document.write (
            '<ins class="adsbygoogle" style="display:inline-block;width:160px;height:500px" data-ad-client="ca-pub-6052127758295539" data-ad-slot="7757428807"></ins>'
					);				
					(adsbygoogle = window.adsbygoogle || []).push({});
				}
                */
			</script>

      </div><!-- .videobarAd -->
    	<article id="post" class="singlePost">
        
        <div class="videoFrame">
						<?php the_excerpt(); ?>
            
            <?php
							// is_facebook like buttons form admin
							prepareFbLikes();
							$is_aads = get_post_meta($post->ID,'is_aads',TRUE);
							if($is_aads == 'yes') {
								//prepareFbLikes();
							} 
							
							// betweetn 30 to 50 hours automatically FB like button
							//printFbLikes(get_the_time('U'));							
						?>
        </div><!-- .videoFrame -->
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
 					
      </article><!-- .singlePost -->
      
      <div class="sideSocialShare clearfix">
        <div class="shareCount">1.1K <span>Total Shares</span></div><!-- .shareCount -->
        <div class="fbShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareBigButton -->
        <div class="twShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://twitter.com/share?url=<?php the_permalink(); ?>&via=lolwatv&hashtags=&text=<?php the_title(); ?>. Check at','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareBigButton -->
        <div class="customLikeMsg">
        	<h4>Like this post on Facebook</h4>
       		<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Flolwatv&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=451657398305015" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
        </div><!-- .customLikeMsg -->
      </div><!-- .sideSocialShare -->

      
		</div><!-- .container -->
  </div><!-- .videoHead -->
    
    <div class="page-inside">
	<div class="container clearfix">
    
        <div class="videobarAd">
            <div class="bottomSocialShare clearfix">
                <div class="fbShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareSmallButton -->
                <div class="twShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://twitter.com/share?url=<?php the_permalink(); ?>&via=lolwatv&hashtags=&text=<?php the_title(); ?>. Check at','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareSmallButton -->
                <div class="gpShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareSmallButton -->
                <div class="fwShare shareSmallButton"><a href="#"></a></div><!-- .shareSmallButton -->
            </div><!-- .bottomSocialShare -->
        </div>
    
        
    	
       <div class="singlePost">
        
        <div class="postExcerpt">

					<div id="google-ads-1"></div>
          <div class="mobileGoogleAd" style=" margin: 15px -15px -2px; text-align:center;">

				<script type="text/javascript"> 
           
              /* Calculate the width of available ad space */
              ad = document.getElementById('google-ads-1');
           
              if (ad.getBoundingClientRect().width) {
                  adWidth = ad.getBoundingClientRect().width; // for modern browsers 
              } else {
                  adWidth = ad.offsetWidth; // for old IE 
              }
           
              /* Replace ca-pub-XXX with your AdSense Publisher ID */ 
              google_ad_client = "ca-pub-6052127758295539";
           
              /* Replace 1234567890 with the AdSense Ad Slot ID */ 
                        google_ad_slot = "2688100802";
            
              var showAd = true;
							
							/* Do not change anything after this line */
              if ( adWidth >= 710 )
                showAd = false; 
              else if ( adWidth >= 468 )
                google_ad_size = ["468", "60"];  /* Banner (468 x 60) */
              else if ( adWidth >= 270 )
                google_ad_size = ["320", "50"]; /* Square (250 x 250) */
              else
                showAd = false; 
           		
							if(showAd) {
								document.write (
								 '<ins class="adsbygoogle" style="display:inline-block;width:' 
									+ google_ad_size[0] + 'px;height:' 
									+ google_ad_size[1] + 'px" data-ad-client="' 
									+ google_ad_client + '" data-ad-slot="' 
									+ google_ad_slot + '"></ins>'
								);
							
								(adsbygoogle = window.adsbygoogle || []).push({});
							}           
          </script>
 						</div><!-- .mobileGoogleAd -->        
        
        	<p><?php the_content(); ?></p>
        </div><!-- .postExcerpt -->
                        
           <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="4" data-width="100%" data-colorscheme="light"></div>

        <div class="postMetaStats clearfix">
        	<div class="viewsCount"><?php pvc_stats_update( $postid, 1 ); ?> <span>views</span></div><!-- .viewsCount -->
          <div class="postsTags"><?php the_tags(); ?></div><!-- .postsTags -->
          <div class="postSource">Source <a href="#">Youtube</a></div><!-- .postSource -->
        </div><!-- .postMetaStats  -->
        
        
    </div><!-- .pageLeft -->

        <div class="sideSocialShare clearfix">
    
    	<div class="googleAd">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Right square bar -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:200px;height:200px"
                 data-ad-client="ca-pub-6052127758295539"
                 data-ad-slot="5288313602"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
      </div><!-- .googleAd -->

    	<?php if ( !function_exists('dynamic_sidebar')
			|| !dynamic_sidebar('Single Page') ) : ?>
			<?php endif; ?>

    </div><!-- .pageRight -->
  </div><!-- .container -->
    </div><!-- .page-inside -->
</div><!-- .pageContent -->



<?php get_footer(); ?>