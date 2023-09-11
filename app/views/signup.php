<?php require_once 'includes/auth.header.inc.php' ?>

<div class="members-page-wrap responsive-header-img">
    <div class="members-content-wrap">
        <a class="back-home-link" href="../index.html">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M7.828 11H20v2H7.828l5.364 5.364-1.414 1.414L4 12l7.778-7.778 1.414 1.414z" />
            </svg> Back to home
        </a>
        <div class="sign-card text-center">
            <div class="header-logo logo-wrap">
                <a href="../index.html" class="logo-image theme-light-logo">
                    <img src="<?php echo BASEURL; ?>/images/logo-dark.svg" alt="Neon">
                </a>
                <a href="../index.html" class="logo-image theme-dark-logo">
                    <img src="<?php echo BASEURL; ?>/images/logo-light.svg" alt="Neon">
                </a>
            </div>
            <h1 class="post-title text-center">
                Sign up
            </h1>
            <div class="description text-center">
                Get access to members only content.
            </div>
            <form class="members-form text-left" data-members-form="signup" autocomplete="off">
                <div class="members-form-box">
                    <div class="form-field-wrap">
                        <label for="name" class="sr-only">Your name</label>
                        <input data-members-name="" type="text" class="name form-field" id="name" placeholder="Your name" required="" autocomplete="off">
                        <label for="email" class="sr-only">Email</label>
                        <input data-members-email="" type="email" class="email form-field" id="email" placeholder="Your email address" required="" autocomplete="off">
                        <button class="btn btn-block form-field" type="submit" name="submit"><span>Send login link</span></button>
                    </div>
                </div>
                <div class="message-container">
                    <div class="notification success form-notification">
                        <a class="notification-close" href="javascript:;" aria-label="close notification"><span class="close-icon"><svg>
                                    <use xlink:href="#i-close" />
                                </svg></span></a>
                        <strong>Great!</strong> Check your inbox and click the link to confirm your subscription</span>
                    </div>
                    <div class="notification error form-notification">
                        <a class="notification-close" href="javascript:;" aria-label="close notification"><span class="close-icon"><svg>
                                    <use xlink:href="#i-close" />
                                </svg></span></a>
                        <strong>Error!</strong> Sorry, something went wrong. Please try again.
                    </div>

                </div>
            </form>
            <div class="alternate-option text-center">
                Already have an account? <a href="../signin/index.html">Sign in</a>
            </div>
        </div>
    </div>
</div>
<?php require_once 'includes/auth.header.inc.php' ?>