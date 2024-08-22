<!DOCTYPE html>
<!-- This Source Code Form is subject to the terms of the Mozilla Public
   - License, v. 2.0. If a copy of the MPL was not distributed with this
   - file, You can obtain one at http://mozilla.org/MPL/2.0/. -->
<html data-l10n-sync="true" lang="en-US" dir="ltr"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Security-Policy" content="default-src chrome:; object-src 'none'">
    <meta name="color-scheme" content="light dark">
    <title data-l10n-id="neterror-dns-not-found-title">Server Not Found</title>
    <link rel="stylesheet" href="chrome://global/skin/aboutNetError.css" type="text/css" media="all">
    <link rel="icon" id="favicon" href="chrome://global/skin/icons/info.svg">
    <link rel="localization" href="branding/brand.ftl">
    <link rel="localization" href="toolkit/neterror/certError.ftl">
    <link rel="localization" href="toolkit/neterror/netError.ftl">
  </head>
  <body class="neterror">
    <div class="container">
      <div id="text-container">
        <!-- Error Title -->
        <div class="title">
          <h1 class="title-text" data-l10n-id="dnsNotFound-title">Hmm. We’re having trouble finding that site.</h1>
        </div>

        <!-- Short Description -->
        <p id="errorShortDesc">We can’t connect to the server at themes.mysitemyway.com.</p>
        <p id="errorShortDesc2"></p>

        <div id="errorWhatToDo" hidden="">
          <p id="errorWhatToDoTitle" data-l10n-id="certerror-what-can-you-do-about-it-title">What can you do about it?</p>
          <p id="badStsCertExplanation" hidden=""></p>
          <p id="errorWhatToDoText"></p>
        </div>

        <!-- Long Description -->
        <div id="errorLongDesc"><span data-l10n-id="neterror-dns-not-found-hint-header"><strong>If you entered the right address, you can:</strong></span><ul><li data-l10n-id="neterror-dns-not-found-hint-try-again">Try again later</li><li data-l10n-id="neterror-dns-not-found-hint-check-network">Check your network connection</li><li data-l10n-id="neterror-dns-not-found-hint-firewall">Check that Firefox Developer Edition has permission to access the web (you might be connected but behind a firewall)</li></ul></div>

        <div id="trrOnlyContainer" hidden="">
          <p id="trrOnlyMessage"></p>
          <div class="trr-message-container">
            <span id="trrOnlyDescription"></span>
            <p id="trrLearnMoreContainer" hidden="">
              <a id="trrOnlylearnMoreLink" target="_blank" rel="noopener noreferrer" data-l10n-id="neterror-learn-more-link">Learn more…</a>
            </p>
          </div>
          <p data-l10n-id="neterror-dns-not-found-trr-third-party-warning2">You can continue with your default DNS resolver. However, a third-party might be able to see what websites you visit.</p>
        </div>

        <div id="nativeFallbackContainer" hidden="">
          <p id="nativeFallbackMessage"></p>
          <div class="trr-message-container">
            <span id="nativeFallbackDescription"></span>
            <p id="nativeFallbackLearnMoreContainer" hidden="">
              <a id="nativeFallbackLearnMoreLink" target="_blank" rel="noopener noreferrer" data-l10n-id="neterror-learn-more-link">Learn more…</a>
            </p>
          </div>
          <p data-l10n-id="neterror-dns-not-found-trr-third-party-warning2">You can continue with your default DNS resolver. However, a third-party might be able to see what websites you visit.</p>
        </div>

        <p id="tlsVersionNotice" hidden=""></p>

        <p id="learnMoreContainer" hidden="">
          <a id="learnMoreLink" target="_blank" rel="noopener noreferrer" data-telemetry-id="learn_more_link" data-l10n-id="neterror-learn-more-link" href="https://support.mozilla.org/1/firefox/130.0/WINNT/en-US/connection-not-secure">Learn more…</a>
        </p>

        <div id="openInNewWindowContainer" class="button-container" hidden="">
          <p>
            <a id="openInNewWindowButton" target="_blank" rel="noopener noreferrer">
              <button class="primary" data-l10n-id="open-in-new-window-for-csp-or-xfo-error">Open Site in New Window</button></a>
          </p>
        </div>

        <!-- UI for option to report certificate errors to Mozilla. Removed on
             init for other error types .-->
        <div id="prefChangeContainer" class="button-container" hidden="">
          <p data-l10n-id="neterror-pref-reset">It looks like your network security settings might be causing this. Do you want the default settings to be restored?</p>
          <button id="prefResetButton" class="primary" data-l10n-id="neterror-pref-reset-button">Restore default settings</button>
        </div>

        <div id="certErrorAndCaptivePortalButtonContainer" class="button-container" hidden="">
          <button id="returnButton" class="primary" data-telemetry-id="return_button_top" data-l10n-id="neterror-return-to-previous-page-recommended-button">Go Back (Recommended)</button>
          <button id="openPortalLoginPageButton" class="primary" data-l10n-id="neterror-open-portal-login-page-button" hidden="">Open Network Login Page</button>
          <button id="certErrorTryAgainButton" class="primary try-again" data-l10n-id="neterror-try-again-button" hidden="">Try Again</button>
          <button id="advancedButton" data-telemetry-id="advanced_button" data-l10n-id="neterror-advanced-button">Advanced…</button>
        </div>
      </div>

      <div id="netErrorButtonContainer" class="button-container"><button id="neterrorTryAgainButton" class="primary try-again" data-l10n-id="neterror-try-again-button" data-telemetry-id="try_again_button">Try Again</button>
        
        <button id="trrExceptionButton" data-l10n-id="neterror-add-exception-button" data-telemetry-id="add_exception_button" hidden="">Always continue for this site</button>
        <button id="trrSettingsButton" data-l10n-id="neterror-settings-button" data-telemetry-id="settings_button" hidden="">Change DNS settings</button>
        <button id="nativeFallbackContinueThisTimeButton" data-l10n-id="neterror-trr-continue-this-time" data-telemetry-id="continue_button" hidden="">Continue this time</button>
        <button id="nativeFallbackIgnoreButton" data-l10n-id="neterror-disable-native-feedback-warning" data-telemetry-id="disable_warning" hidden="">Always continue</button>
      </div>

      <div class="advanced-panel-container">
        <div id="badCertAdvancedPanel" class="advanced-panel" hidden="">
          <p id="badCertTechnicalInfo"></p>
          <a id="viewCertificate" href="javascript:void(0)" data-l10n-id="neterror-view-certificate-link">View Certificate</a>
          <div id="advancedPanelButtonContainer" class="button-container">
            <button id="advancedPanelReturnButton" class="primary" data-telemetry-id="return_button_adv" data-l10n-id="neterror-return-to-previous-page-recommended-button">Go Back (Recommended)</button>
            <button id="advancedPanelTryAgainButton" class="primary try-again" data-l10n-id="neterror-try-again-button" hidden="">Try Again</button>
            <button id="exceptionDialogButton" data-telemetry-id="exception_button" data-l10n-id="neterror-override-exception-button">Accept the Risk and Continue</button>
          </div>
        </div>

        <div id="blockingErrorReporting" class="advanced-panel" hidden="">
          <p class="toggle-container-with-text">
            <input type="checkbox" id="automaticallyReportBlockingInFuture" role="checkbox">
            <label for="automaticallyReportBlockingInFuture" data-l10n-id="neterror-error-reporting-automatic">Report errors like this to help Mozilla identify and block malicious sites</label>
          </p>
        </div>

        <div id="certificateErrorDebugInformation" class="advanced-panel" hidden="">
          <button id="copyToClipboardTop" data-telemetry-id="clipboard_button_top" data-l10n-id="neterror-copy-to-clipboard-button">Copy text to clipboard</button>
          <div id="certificateErrorText"></div>
          <button id="copyToClipboardBottom" data-telemetry-id="clipboard_button_bot" data-l10n-id="neterror-copy-to-clipboard-button">Copy text to clipboard</button>
        </div>
      </div>
    </div>
    <script src="chrome://global/content/neterror/aboutNetErrorCodes.js"></script>
    <script type="module" src="chrome://global/content/aboutNetError.mjs"></script>
  

</body></html>