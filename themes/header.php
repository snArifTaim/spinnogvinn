<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_url('/assets/css/style.css') ?>">
    <title><?php echo $_ENV['site_title']; ?></title>
    <link rel="shortcut icon" href="<?php echo get_url('/assets/img/title.ico') ?>" type="image/x-icon">
</head>

<body>
    <div class='page-wrap'>
        <div class='page-content'>
            <header class="header">
                <div class="header-block">
                    <div class="header-logo-wrapper header-item">
                        <a href="/" class="header-logo">
                            <img class=" ls-is-cached lazyloaded" src="<?php echo $_ENV['logo_url']; ?>" alt="Logo" />
                        </a>
                    </div>
                    <div class="header-item" style="display: flex; justify-content: flex-end">
                        <button class="header-burger" type="button" aria-label="burger">
                            <span class="header-burger-icon"> <span></span> </span>
                        </button>
                    </div>
                    <div class="header-modal js-header-modal">
                        <nav class="menu-nav-menu-container">
                            <ul id="menu-nav-menu" class="header-menu">
                                <li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-18">
                                    <a href="/" aria-current="page">
                                        <font>
                                            <font>Spill</font>
                                        </font>
                                    </a>
                                </li>
                                <li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-19">
                                    <a href="/page/terms">
                                        <font>
                                            <font>Om oss</font>
                                        </font>
                                    </a>
                                </li>
                                <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
                                    <a href="/page/about-us">
                                        <font>
                                            <font>Vilkår</font>
                                        </font>
                                    </a>
                                </li>
                                <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
                                    <a href="/page/login" class="main-button main-button-link login">
                                        <font>
                                            <font>Logg inn</font>
                                        </font>
                                    </a>
                                </li>
                                <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
                                    <a href="/page/contact-us" class="main-button main-button-link login">
                                        <font>
                                            <font>Kontakt Oss</font>
                                        </font>
                                    </a>
                                </li>
                                <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
                                    <a href="/page/registration" class="main-button" style="width: 100%">
                                        <font>
                                            <font>Registrering</font>
                                        </font>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>