<div class="vi-demo-col-phone">
    <div class="vi-demo-mobile-caption-list">
        <div class="vi-demo-mobile-caption vi-demo-caption-1 demo-hide">
            <p>
                A game blogger posts Nintendo Switch game reviews and monetizes them using vi. The player combines a funny ad about Switch's chipmaker with an interview about Switch game quality.
            </p>
        </div>
        <div class="vi-demo-mobile-caption vi-demo-caption-2">
            <p>
                A food blogger posts a tasty pasta recipe that's monetized using vi. The player intelligently combines a food promotion followed by directions for a complementary salad into <strong>one</strong> ad unit.
            </p>
        </div>
    </div>
    <div class="vi-demo-mobile">
        <div class="vi-demo-mobile-ratio">
            <img class="vi-demo-screen-1 vi-demo-screen" src="<?php echo plugins_url(self::$folder_name . '/images/vi-demo-1.gif') ?>"/>
            <img class="vi-demo-screen-2 vi-demo-screen" src="<?php echo plugins_url(self::$folder_name . '/images/vi-demo-2.gif') ?>"/>
        </div>
    </div>

    <p class="vi-ad-source-row">
        <img class="vi-ad-source" src="<?php echo plugins_url(self::$folder_name . '/images/vi-source-billboard.png') ?>"/>
        <img class="vi-ad-source" src="<?php echo plugins_url(self::$folder_name . '/images/vi-source-nowthis.png') ?>"/>
        <img class="vi-ad-source" src="<?php echo plugins_url(self::$folder_name . '/images/vi-source-bonnier.png') ?>"/>
        <img class="vi-ad-source" src="<?php echo plugins_url(self::$folder_name . '/images/vi-source-cbc.png') ?>"/>
        <img class="vi-ad-source" src="<?php echo plugins_url(self::$folder_name . '/images/vi-source-thetelegraph.png') ?>"/>
        <img class="vi-ad-source" src="<?php echo plugins_url(self::$folder_name . '/images/vi-source-itn.png') ?>"/>
    </p>

</div>
<div class="vi-demo-col-content">
    <div class="vi-demo">
        <p class="vi-demo-lede">
            You now have the option to make money embedding quality video ads with this plugin. The ads that you will embed are privacy/GDPR friendly,
            delivered by <img class="vi-logo-text" alt="vi" src="<?php echo plugins_url(self::$folder_name . '/images/vi_logo.svg'); ?>">
            <a href="https://www.vi.ai/publisher-video-monetization/?aid=WP_embedplus&utm_source=Wordpress&utm_medium=WP_embedplus" target="_blank">video intelligence</a>,
            and completely separate from your YouTube embeds.
        </p>
        <p>
            Instead of an ordinary video ad, vi ads are so effective because they wrap an ad with additional useful video content 
                that <strong>automatically matches your site's topics and attract your visitors' attention. </strong>
                It's like free related content that you're paid to embed. Plus, you'll get <strong>increased visitor time-on-site and high CPMs from vi.</strong>
        </p>
        <p>
            Check out the demos on the right. Below, sign up for free in minutes.
        </p>
    </div>
    <div class="ytvi-wrap">
        <div class="ytvi-step ytvi-step-1">
            <div class="ytvi-step-1--form">
                <div class="side-signup ytprefs-ajax-form">
                    <h1>Sign up with vi.ai</h1>
                    <h2>Join 30,000+ publishers</h2>
                    <p class="description">Where should we send your welcome and revenue info?</p>
                    <p>
                        <input class="textinput regular-text ytvi-register-email" type="text" placeholder="Your email" />
                    </p>
                    <p class="description">
                        <label>
                            <input type="checkbox" class="ytvi-step-1--confirm"/>
                            I understand that vi will create my account using my email, my domain, and EmbedPlus as the referral.
                        </label>
                    </p>
                    <p>
                        <input disabled class="button-primary ytvi-step-1--submit-register ytprefs-ajax-form--submit" type="button" value="Next &raquo;"/>
                        <a class="vi-forgot-pw" href="https://www.vi.ai/legals/?aid=WP_embedplus&utm_source=Wordpress&utm_medium=WP_embedplus" target="_blank">vi.ai Terms & Privacy &raquo;</a>
                    </p>
                </div>
                <div class="side-login ytprefs-ajax-form">
                    <h1>Log in to vi.ai</h1>
                    <h2>Start embedding quality ads</h2>
                    <p class="description">Already signed up? Login here using the info from your welcome email.</p>
                    <p>
                        <input class="textinput regular-text ytvi-login-email" type="text" placeholder="Your email" />
                    </p>
                    <p>
                        <input class="textinput regular-text ytvi-password" type="password" placeholder="Password" />
                    </p>
                    <p>
                        <input class="button-primary ytvi-step-1--submit-login ytprefs-ajax-form--submit" type="button" value="Log In &raquo;">
                        <a class="vi-forgot-pw" href="https://dashboard.vi.ai/resetPassword/" target="_blank">Forgot Password?</a>
                    </p>
                </div>
                <div class="vi-contact-support">
                    <p class="center"><em>Need help signing up or signing in? Contact support at <strong><a href="mailto:ext@embedplus.com">ext@embedplus.com</a></strong></em></p>
                </div>
            </div>
            <p class="box-vi-not-interested">
                Not interested? You can hide this by <button class="button button-small vi-cover-prompt-no" type="button">clicking here</button> or checking <a class="vi-not-interested" target="_top" href="<?php echo admin_url('admin.php?page=youtube-my-preferences#vi_hide_monetize_tab') ?>"><em>Hide "Monetize" Feature</em></a> found in the YouTube Settings "Defaults" tab.
            </p>
        </div>
        <div class="ytvi-step ytvi-step-2-loading">
            <p class="ytvi-loading--message">
                <img src="<?php echo EPYT_BASE_URL . 'images/ajax-loader.gif' ?>"> Loading sign up form...
            </p>
        </div>
        <div class="ytvi-step ytvi-step-2">
            <h3>Step 2 of 2 - Complete Registration</h3>
            <div class="ytvi-registration">
                <div class="ytvi-step-2-msg">
                    <ol>
                        <li><strong>Fill out</strong> the below</li>
                        <li><strong>Check your email</strong> for a confirmation link</li>
                        <li><strong>Come back</strong> and
                            <?php
                            $curr_screen = get_current_screen();
                            echo strpos($curr_screen->id, 'youtube-ep-vi') !== false ? 'refresh this page' : '<a target="_blank" href="' . admin_url('admin.php?page=youtube-ep-vi') . '">click here</a>'
                            ?> to login
                        </li>                            
                    </ol>
                </div>
                <iframe frameborder="0"></iframe>
                <p class="center">
                    <input class="button-secondary ytvi-registration--cancel" type="button" value="&laquo; Go Back"/>
                </p>
            </div>
        </div>
        <div class="ytvi-step ytvi-login-loading">
            <p class="ytvi-loading--message">
                <img src="<?php echo EPYT_BASE_URL . 'images/ajax-loader.gif' ?>"> Logging you in...
            </p>
        </div>

    </div>
</div>
<?php
if (!self::vi_cover_prompt_yes())
{
    ?>
    <div class="clearboth vi-cover-clear"></div>
    <div class="vi-cover-prompt">
        <h1>
            Hey! We have a new optional feature to help you monetize using video.
            <br>
            Are you interested in learning more about it?
        </h1>
        <p class="vi-cover-prompt-buttons">
            <button type="button" class="button-primary vi-cover-prompt-yes">Yes, tell me more.</button><span></span><button type="button" class="button-secondary vi-cover-prompt-no">No, hide this feature.</button>
        </p>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="viblurfilter-svg">
        <defs>
        <filter id="viblurfilter">
            <feGaussianBlur stdDeviation="8" />
        </filter>
        </defs>
        </svg>
    </div>
<?php } ?>
