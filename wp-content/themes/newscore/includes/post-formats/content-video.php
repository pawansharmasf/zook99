<?php /* GALLERY POST FORMAT */ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">

        <?php do_action('radium_before_post_title'); ?>

          <?php if( is_single() ) {  // DISPLAY ON SINGLE ONLY  ?>

              <h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1><!-- END .entry-title -->

          <?php } else {  // END ON SINGLE ONLY ?>

              <h2 class="entry-title" itemprop="headline"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'radium' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2><!-- END .entry-title -->

          <?php } ?>

          <?php do_action('radium_after_post_title'); ?>

      </header><!-- END .entry-header -->

        <div class="postMeta clearfix">
            <div class="postedDate"><?php the_date('M d, Y'); ?></div><!-- .postedDate -->
            <div class="facebookLike clearfix">
                <div class="facebookFollow">
                    <iframe id="fblikeButton" src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fzook99&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35&amp;appId=377815018957332" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe>

                </div><!-- .facebookLike -->
                <div class="twitterFollow">
                    <a href="https://twitter.com/zook99" class="twitter-follow-button" data-show-count="false">Follow @Lolwatv</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div><!-- .twitterFollow -->
            </div><!-- .facebookLike -->
        </div><!-- .postMeta -->


    <div class="bottomSocialShare clearfix">
        <div class="fbShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareSmallButton -->
        <div class="twShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://twitter.com/share?url=<?php the_permalink(); ?>&via=zook99&hashtags=&text=<?php the_title(); ?>. Check at','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareSmallButton -->
        <div class="gpShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareSmallButton -->
        <div class="fwShare shareSmallButton"><a href="#"></a></div><!-- .shareSmallButton -->
    </div><!-- .bottomSocialShare -->

    <div class="entry-content-media">



    </div><!-- END .entry-content-media -->
    <div class="entry-content">

        <?php the_content(); ?>

        <div class="postMetaStats clearfix">
            <div class="viewsCount">788<span>views</span></div><!-- .viewsCount -->
            <div class="postsTags"><?php the_tags(); ?></div><!-- .postsTags -->
            <div class="postSource">Source <a href="#">Youtube</a></div><!-- .postSource -->
        </div><!-- .postMetaStats  -->

    </div><!-- END .entry-content -->



</article><!-- END #post-<?php the_ID(); ?> -->
