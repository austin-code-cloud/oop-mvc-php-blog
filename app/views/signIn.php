<?php require_once 'includes/auth.header.inc.php' ?>
<div class="members-page-wrap responsive-header-img">
    <div class="members-content-wrap">
        <a class="back-home-link" href="<?php echo BASEURL; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M7.828 11H20v2H7.828l5.364 5.364-1.414 1.414L4 12l7.778-7.778 1.414 1.414z" />
            </svg> Back to home
        </a>
        <div class="sign-card text-center">
            <div class="header-logo logo-wrap">
                <a href="../index.html" class="logo-image theme-light-logo">
                    <img src="<?php echo BASEURL; ?>images/logo-dark.svg" alt="Neon">
                </a>
                <a href="../index.html" class="logo-image theme-dark-logo">
                    <img src="<?php echo BASEURL; ?>/images/logo-light.svg" alt="Neon">
                </a>
            </div>
            <h1 class="post-title text-center h2">
                Welcome back!
            </h1>
            <div class="description text-center">
                Sign into your account for full access
            </div>
            <form class="members-form text-left" data-members-form="signin" autocomplete="off">
                <div class="members-form-box">
                    <div class="form-field-wrap">
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
                        <strong>Great!</strong> Check your inbox and click the link to complete sign in.</span>
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
                Don&#x27;t have an account yet? <a href="<?php echo BASEURL; ?>home/signup">Sign up</a>
            </div>
        </div>
    </div>
</div>
</div>
<?php require 'includes/auth.footer.inc.php' ?>