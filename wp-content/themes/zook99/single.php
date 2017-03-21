<?php 
	get_header();
	the_post(); 
?>

<div class="pageContent layout2 commonStyles1">


 	<div class="videoHead">
       
		<div class="container clearfix">
  
    	
    	<article id="post" class="singlePost">
        
        <div class="videoFrame">
						<?php the_excerpt(); ?>
            
            <?php
							// is_facebook like buttons form admin
							prepareFbLikes();
							$is_aads = get_post_meta($post->ID,'is_aads',TRUE);
							if($is_aads == 'yes') {
								prepareFbLikes();
							} 
							
							// betweetn 30 to 50 hours automatically FB like button
							//printFbLikes(get_the_time('U'));							
						?>
        </div><!-- .videoFrame -->
      
 					
      </article><!-- .singlePost -->
            
            <div class="head-share">
                <h1><?php the_title(); ?></h1>  
                <div class="topSocialShare clearfix">
                    <div class="shareCount">1.1K <span>Total Shares</span></div><!-- .shareCount -->
                    <div class="fbShare shareBigButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareBigButton -->
                    <div class="twShare shareBigButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://twitter.com/share?url=<?php the_permalink(); ?>&via=lolwatv&hashtags=&text=<?php the_title(); ?>. Check at','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareBigButton -->

                </div><!-- .sideSocialShare -->
            </div>
      
      <div class="sideSocialShare clearfix videoSocialShare">
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
    
        <div class="videobarAd page-inside-left">
           
            <div class="shareCount">1.1K <span>Total Shares</span></div>
           
            <div class="bottomSocialShare newIcons clearfix">
                <div class="fbShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareSmallButton -->
                <div class="twShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://twitter.com/share?url=<?php the_permalink(); ?>&via=lolwatv&hashtags=&text=<?php the_title(); ?>. Check at','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareSmallButton -->
                <div class="gpShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareSmallButton -->              
            </div><!-- .bottomSocialShare -->
            
            <div class="share-it-punch">Don’t forget<br> to share :)</div>
            
        </div>
    
        
    	
       <div class="singlePost">
        <div class="singlePostFluid">
        <div class="postExcerpt">
        
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
        
        
		  <?php the_content(); ?>
        </div><!-- .postExcerpt -->
                        
           
    </div><!-- .pageLeft -->
        </div><!-- .singlePostFluid -->
        <div class="sideSocialShare clearfix">
            <div class="watch-next">Watch next</div> 
           
                <?php if ( !function_exists('dynamic_sidebar')
                          || !dynamic_sidebar('Single Page') ) : ?>
                <?php endif; ?>
       


    </div><!-- .pageRight -->
    
  </div><!-- .container -->
   
    </div><!-- .page-inside -->
    
    <div class="page-extras">
        <div class="container clearfix">

            <div class="topSocialShare clearfix">
                <div class="shareCount">1.1K <span>Total Shares</span></div><!-- .shareCount -->
                <div class="fbShare shareBigButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareBigButton -->
                <div class="twShare shareBigButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://twitter.com/share?url=<?php the_permalink(); ?>&via=lolwatv&hashtags=&text=<?php the_title(); ?>. Check at','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareBigButton -->

            </div><!-- .sideSocialShare -->


        </div>        
    </div><!-- .page-extras -->
    
</div><!-- .pageContent -->



<?php get_footer(); ?>