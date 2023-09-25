
<html lang="en" data-theme="system">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neon</title>
    <script>
        if (typeof(Storage) !== 'undefined') {
            let themeMode = document.documentElement.getAttribute('data-theme');
            if (themeMode !== null && themeMode === 'system') {
                setSysPrefColor();
            }
            const theme = localStorage.getItem('selected-theme');
            if (theme == 'light') {
                setColorScheme('light');
            } else if (theme == 'dark') {
                setColorScheme('dark');
            }
        }

        function setSysPrefColor() {
            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                setColorScheme('dark');
            }
            window.matchMedia('(prefers-color-scheme: dark)').addListener(e => {
                if (e.matches) {
                    setColorScheme('dark');
                } else {
                    setColorScheme('light');
                }
            });
        }

        function setColorScheme(scheme) {
            if (scheme == 'dark') {
                document.documentElement.setAttribute('data-theme', 'dark');
            } else {
                document.documentElement.removeAttribute('data-theme');
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="<?php echo BASEURL; ?>/css/style.min5f88.css" rel="stylesheet">
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">

    <style>
        :root:not([data-theme=dark]) {
            --body-background-color: #F9F9FF;
        }
    </style>

    <style id="gh-members-styles">
        .gh-post-upgrade-cta-content,
        .gh-post-upgrade-cta {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: center;
            width: 100%;
            color: #ffffff;
            font-size: 16px;
        }

        .gh-post-upgrade-cta-content {
            border-radius: 8px;
            padding: 40px 4vw;
        }

        .gh-post-upgrade-cta h2 {
            color: #ffffff;
            font-size: 28px;
            letter-spacing: -0.2px;
            margin: 0;
            padding: 0;
        }

        .gh-post-upgrade-cta p {
            margin: 20px 0 0;
            padding: 0;
        }

        .gh-post-upgrade-cta small {
            font-size: 16px;
            letter-spacing: -0.2px;
        }

        .gh-post-upgrade-cta a {
            color: #ffffff;
            cursor: pointer;
            font-weight: 500;
            box-shadow: none;
            text-decoration: underline;
        }

        .gh-post-upgrade-cta a:hover {
            color: #ffffff;
            opacity: 0.8;
            box-shadow: none;
            text-decoration: underline;
        }

        .gh-post-upgrade-cta a.gh-btn {
            display: block;
            background: #ffffff;
            text-decoration: none;
            margin: 28px 0 0;
            padding: 8px 18px;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
        }

        .gh-post-upgrade-cta a.gh-btn:hover {
            opacity: 0.92;
        }
    </style>
    <script async src="https://js.stripe.com/v3/"></script>
    <script defer src="../cdn.jsdelivr.net/ghost/sodo-search%40_1.1/umd/sodo-search.min.js" data-key="c89a12a5e85bbc31c4e928df8a" data-styles="https://cdn.jsdelivr.net/ghost/sodo-search@~1.1/umd/main.css" data-sodo-search="https://neon.gbjsolution.com/" crossorigin="anonymous"></script>

    <script defer src="public/cards.min5f88.js?v=e1a38e9aad"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/css/cards.min5f88.css">
    <script defer src="public/comment-counts.min5f88.js?v=e1a38e9aad" data-ghost-comments-counts-api="https://neon.gbjsolution.com/members/api/comments/counts/"></script>
    <script defer src="public/member-attribution.min5f88.js?v=e1a38e9aad"></script>
    <script>
        const introStyle = localStorage.getItem('intro-style');
        if (introStyle !== null) {
            document.documentElement.setAttribute('data-intro', introStyle);
        } else {
            document.documentElement.setAttribute('data-intro', 'one');
        }
    </script>
    <style>
        .cover {
            display: none;
        }

        [data-intro=one] .home-intro-one {
            display: block;
        }

        [data-intro=two] .home-intro-two {
            display: block;
        }

        [data-intro=three] .home-intro-three {
            display: block;
        }

        :root:not([data-theme="dark"]) body {
            --body-background-color: var(--body-custom-background-color, #F9F9FF);
        }

        .hide-subscrition .subscription-text,
        .hide-subscrition .cover-subscribe-form {
            display: none;
        }

        .sidebar.hidden {
            display: none;
        }
    </style>
    <style>
        :root {
            --ghost-accent-color: #FB2576;
        }
    </style>
</head>

<body class="home-template" data-nav="normal">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="global-icons" style="display:none">
        <symbol id="i-search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z" />
        </symbol>
        <symbol id="i-moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M10 7a7 7 0 0 0 12 4.9v.1c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2h.1A6.979 6.979 0 0 0 10 7zm-6 5a8 8 0 0 0 15.062 3.762A9 9 0 0 1 8.238 4.938 7.999 7.999 0 0 0 4 12z" />
        </symbol>
        <symbol id="i-sun" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M12 18a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-2a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM11 1h2v3h-2V1zm0 19h2v3h-2v-3zM3.515 4.929l1.414-1.414L7.05 5.636 5.636 7.05 3.515 4.93zM16.95 18.364l1.414-1.414 2.121 2.121-1.414 1.414-2.121-2.121zm2.121-14.85l1.414 1.415-2.121 2.121-1.414-1.414 2.121-2.121zM5.636 16.95l1.414 1.414-2.121 2.121-1.414-1.414 2.121-2.121zM23 11v2h-3v-2h3zM4 11v2H1v-2h3z" />
        </symbol>
        <symbol id="i-twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z" />
        </symbol>
        <symbol id="i-facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z" />
        </symbol>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M4 22a8 8 0 1 1 16 0H4zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z" />
        </svg>
        <svg id="i-user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M4 22a8 8 0 1 1 16 0H4zm9-5.917V20h4.659A6.009 6.009 0 0 0 13 16.083zM11 20v-3.917A6.009 6.009 0 0 0 6.341 20H11zm1-7c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" />
        </svg>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M4 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H4zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" />
        </symbol>
        <symbol id="i-calendar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm3 8H4v8h16v-8zm-5-6H9v2H7V5H4v4h16V5h-3v2h-2V5zm-9 8h2v2H6v-2zm5 0h2v2h-2v-2zm5 0h2v2h-2v-2z" />
        </symbol>
        <symbol id="i-clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm1-8h4v2h-6V7h2v5z" />
        </symbol>
        <symbol id="i-map-pin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zm4.95-7.778a7 7 0 1 0-9.9 0L12 20.9l4.95-4.95zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
        </symbol>
        <symbol id="i-link" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M18.364 15.536L16.95 14.12l1.414-1.414a5 5 0 1 0-7.071-7.071L9.879 7.05 8.464 5.636 9.88 4.222a7 7 0 0 1 9.9 9.9l-1.415 1.414zm-2.828 2.828l-1.415 1.414a7 7 0 0 1-9.9-9.9l1.415-1.414L7.05 9.88l-1.414 1.414a5 5 0 1 0 7.071 7.071l1.414-1.414 1.415 1.414zm-.708-10.607l1.415 1.415-7.071 7.07-1.415-1.414 7.071-7.07z" />
        </symbol>
        <symbol id="i-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
        </symbol>
        <symbol id="i-arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M7.828 11H20v2H7.828l5.364 5.364-1.414 1.414L4 12l7.778-7.778 1.414 1.414z" />
        </symbol>
        <symbol id="i-arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" />
        </symbol>
    </svg>
    <div class="site-wrap">
        <header class="site-header">
            <div class="container">
                <div class="header-inner flex justify-space-between">
                    <div class="header-logo">
                        <a href="<?php echo BASEURL; ?>" class="logo-image theme-light-logo">
                            <img src="<?php echo BASEURL; ?>images/logo-dark.svg" alt="Neon">
                        </a>
                        <a href="index.html" class="logo-image theme-dark-logo">
                            <img src="<?php echo BASEURL; ?>images/logo-light.svg" alt="Neon">
                        </a>
                    </div>
                    <input id="mobile-menu-toggle" class="mobile-menu-checkbox" type="checkbox">
                    <label for="mobile-menu-toggle" class="mobile-menu-icon" aria-label="menu toggle button">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="sr-only">Menu toggle button</span>
                    </label>
                    <nav class="nav-wrap flex" role="navigation" aria-label="main navigation">
                        <ul class="nav-item-container nav-left no-style-list flex" role="menu">
                            <li class="nav-item" role="menuitem">
                                <a href="<?php echo BASEURL; ?>home/tags" class="nav-link">Tags</a>
                            </li>
                            <li class="nav-item" role="menuitem">
                                <a href="<?php echo BASEURL; ?>home/authors" class="nav-link">Authors</a>
                            </li>
                        </ul>
                        <div class="nav-center icon-items-wrap flex">
                            <button href="javascript:;" class="nav-icon search-icon flex" data-ghost-search>
                                <span><svg>
                                        <use xlink:href="#i-search"></use>
                                    </svg></span>
                            </button>
                            <button href="javascript:;" class="nav-icon theme-icon flex js-toggle-dark-light" aria-label="Toggle theme">
                                <div class="toggle-mode flex">
                                    <div class="light"><svg>
                                            <use xlink:href="#i-sun"></use>
                                        </svg></div>
                                    <span class="dark"><svg>
                                            <use xlink:href="#i-moon"></use>
                                        </svg></span>
                                </div>
                            </button>
                        </div>
                        <ul class="nav-item-container nav-right no-style-list flex">
                            <li class="nav-item" role="menuitem">
                                <a href="<?php echo BASEURL; ?>home/signin" class="nav-link">Sign in</a>
                            </li>
                            <li class="nav-item" role="menuitem">
                                <a href="<?php echo BASEURL; ?>home/membership" class="btn btn-sm">Become member</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </header>