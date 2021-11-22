<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width">
    <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">
    <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>Model Arıyorum</title>
    <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- CSS Reset : BEGIN -->
    <style>
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */

        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;
        }

        /* What it does: Stops email clients resizing small text. */

        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */

        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */

        table,
        td {
            mso-table-lspace: 0 !important;
            mso-table-rspace: 0 !important;
        }

        /* What it does: Fixes webkit padding issue. */

        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */

        a {
            text-decoration: none;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */

        *[x-apple-data-detectors],
            /* iOS */

        .unstyle-auto-detected-links *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */

        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */

        .im {
            color: inherit !important;
        }

        /* If the above doesn't work, add a .g-img class to any image in question. */

        img.g-img + div {
            display: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */
        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */

        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u ~ div .email-container {
                min-width: 320px !important;
            }
        }

        /* iPhone 6, 6S, 7, 8, and X */

        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u ~ div .email-container {
                min-width: 375px !important;
            }
        }

        /* iPhone 6+, 7+, and 8+ */

        @media only screen and (min-device-width: 414px) {
            u ~ div .email-container {
                min-width: 414px !important;
            }
        }
    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>
        .primary {
            background: #30e3ca;
        }

        .bg_white {
            background: #ffffff;
        }

        .bg_light {
            background: #fafafa;
        }

        .bg_black {
            background: #000000;
        }

        .bg_dark {
            background: rgba(0, 0, 0, .8);
        }

        .email-section {
            padding: 2.5em;
        }

        /*BUTTON*/

        .btn {
            padding: 10px 15px;
            display: inline-block;
        }

        .btn.btn-primary {
            border-radius: 5px;
            background: #30e3ca;
            color: #ffffff;
        }

        .btn.btn-white {
            border-radius: 5px;
            background: #ffffff;
            color: #000000;
        }

        .btn.btn-white-outline {
            border-radius: 5px;
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
        }

        .btn.btn-black-outline {
            border-radius: 0px;
            background: transparent;
            border: 2px solid #000;
            color: #000;
            font-weight: 700;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #000000;
            margin-top: 0;
            font-weight: 400;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0, 0, 0, .4);
            width: 100%;
        }

        a {
            color: #30e3ca;
        }

        table {
        }

        /*LOGO*/

        .logo h1 {
            margin: 0;
        }

        .logo h1 a {
            color: #30e3ca;
            font-size: 24px;
            font-weight: 700;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        /*HERO*/

        .hero {
            position: relative;
            z-index: 0;
        }

        .hero .text {
            color: rgba(0, 0, 0, .3);
        }

        .hero .text h2 {
            color: #000;
            font-size: 40px;
            margin-bottom: 0;
            font-weight: 400;
            line-height: 1.4;
        }

        .hero .text h3 {
            font-size: 24px;
            font-weight: 300;
        }

        .hero .text h2 span {
            font-weight: 600;
            color: #30e3ca;
        }

        /*HEADING SECTION*/

        .heading-section {
        }

        .heading-section h2 {
            color: #000000;
            font-size: 28px;
            margin-top: 0;
            line-height: 1.4;
            font-weight: 400;
        }

        .heading-section .subheading {
            margin-bottom: 20px !important;
            display: inline-block;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(0, 0, 0, .4);
            position: relative;
        }

        .heading-section .subheading::after {
            position: absolute;
            left: 0;
            right: 0;
            bottom: -10px;
            content: '';
            width: 100%;
            height: 2px;
            background: #30e3ca;
            margin: 0 auto;
        }

        .heading-section-white {
            color: rgba(255, 255, 255, .8);
        }

        .heading-section-white h2 {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1;
            padding-bottom: 0;
        }

        .heading-section-white h2 {
            color: #ffffff;
        }

        .heading-section-white .subheading {
            margin-bottom: 0;
            display: inline-block;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(255, 255, 255, .4);
        }

        ul.social {
            padding: 0;
        }

        ul.social li {
            display: inline-block;
            margin-right: 10px;
        }

        /*FOOTER*/

        .footer {
            border-top: 1px solid rgba(0, 0, 0, .05);
            color: rgba(0, 0, 0, .5);
        }

        .footer .heading {
            color: #000;
            font-size: 20px;
        }

        .footer ul {
            margin: 0;
            padding: 0;
        }

        .footer ul li {
            list-style: none;
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: rgba(0, 0, 0, 1);
        }

        @media screen and (max-width: 500px) {
        }
    </style>

    <!-- Font Awesome 6 : BEGIN -->
    <style>
        /*!
         * Font Awesome Free 6.0.0-beta2 by @fontawesome - https://fontawesome.com
         * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
         */
        .fa {
            font-family: "Font Awesome 6 Free", sans-serif;
            font-weight: 900;
        }

        .fa,
        .fas,
        .fa-solid,
        .far,
        .fa-regular,
        .fal,
        .fa-light,
        .fat,
        .fa-thin,
        .fad,
        .fa-duotone,
        .fab,
        .fa-brands {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            line-height: 1;
            text-rendering: auto;
        }

        .fa-1x {
            font-size: 1em;
        }

        .fa-2x {
            font-size: 2em;
        }

        .fa-3x {
            font-size: 3em;
        }

        .fa-4x {
            font-size: 4em;
        }

        .fa-5x {
            font-size: 5em;
        }

        .fa-6x {
            font-size: 6em;
        }

        .fa-7x {
            font-size: 7em;
        }

        .fa-8x {
            font-size: 8em;
        }

        .fa-9x {
            font-size: 9em;
        }

        .fa-10x {
            font-size: 10em;
        }

        .fa-2xs {
            font-size: 0.625em;
            line-height: 0.1em;
            vertical-align: 0.225em;
        }

        .fa-xs {
            font-size: 0.75em;
            line-height: 0.08333em;
            vertical-align: 0.125em;
        }

        .fa-sm {
            font-size: 0.875em;
            line-height: 0.07143em;
            vertical-align: 0.05357em;
        }

        .fa-lg {
            font-size: 1.25em;
            line-height: 0.05em;
            vertical-align: -0.075em;
        }

        .fa-xl {
            font-size: 1.5em;
            line-height: 0.04167em;
            vertical-align: -0.125em;
        }

        .fa-2xl {
            font-size: 2em;
            line-height: 0.03125em;
            vertical-align: -0.1875em;
        }

        .fa-fw {
            text-align: center;
            width: 1.25em;
        }

        .fa-ul {
            list-style-type: none;
            margin-left: 2.5em;
            padding-left: 0;
        }

        .fa-ul > li {
            position: relative;
        }

        .fa-li {
            left: calc(2em * -1);
            position: absolute;
            text-align: center;
            width: 2em;
            line-height: inherit;
        }

        .fa-border {
            border-color: #eee;
            border-radius: 0.1em;
            border-style: solid;
            border-width: 0.08em;
            padding: 0.2em 0.25em 0.15em;
        }

        .fa-pull-left {
            float: left;
            margin-right: 0.3em;
        }

        .fa-pull-right {
            float: right;
            margin-left: 0.3em;
        }

        .fa-beat {
            -webkit-animation-name: fa-beat;
            animation-name: fa-beat;
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
            -webkit-animation-direction: normal;
            animation-direction: normal;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
        }

        .fa-fade {
            -webkit-animation-name: fa-fade;
            animation-name: fa-fade;
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
            -webkit-animation-direction: normal;
            animation-direction: normal;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.6, 1);
            animation-timing-function: cubic-bezier(0.4, 0, 0.6, 1);
        }

        .fa-flash {
            -webkit-animation-name: fa-flash;
            animation-name: fa-flash;
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
            -webkit-animation-direction: normal;
            animation-direction: normal;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.6, 1);
            animation-timing-function: cubic-bezier(0.4, 0, 0.6, 1);
        }

        .fa-flip {
            -webkit-animation-name: fa-flip;
            animation-name: fa-flip;
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
            -webkit-animation-direction: normal;
            animation-direction: normal;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
        }

        .fa-spin {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
            -webkit-animation-direction: normal;
            animation-direction: normal;
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
        }

        .fa-spin-reverse {
            --fa-animation-direction: reverse;
        }

        .fa-pulse,
        .fa-spin-pulse {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-direction: normal;
            animation-direction: normal;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: steps(8);
            animation-timing-function: steps(8);
        }

        @media (prefers-reduced-motion: reduce) {
            .fa-beat,
            .fa-fade,
            .fa-flash,
            .fa-flip,
            .fa-pulse,
            .fa-spin,
            .fa-spin-pulse {
                -webkit-animation-delay: -1ms;
                animation-delay: -1ms;
                -webkit-animation-duration: 1ms;
                animation-duration: 1ms;
                -webkit-animation-iteration-count: 1;
                animation-iteration-count: 1;
                -webkit-transition-delay: 0s;
                transition-delay: 0s;
                -webkit-transition-duration: 0s;
                transition-duration: 0s;
            }
        }

        @-webkit-keyframes fa-beat {
            0%, 90% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            45% {
                -webkit-transform: scale(1.25);
                transform: scale(1.25);
            }
        }

        @keyframes fa-beat {
            0%, 90% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            45% {
                -webkit-transform: scale(1.25);
                transform: scale(1.25);
            }
        }

        @-webkit-keyframes fa-fade {
            50% {
                opacity: 0.4;
            }
        }

        @keyframes fa-fade {
            50% {
                opacity: 0.4;
            }
        }

        @-webkit-keyframes fa-flash {
            0%, 100% {
                opacity: 0.4;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.125);
                transform: scale(1.125);
            }
        }

        @keyframes fa-flash {
            0%, 100% {
                opacity: 0.4;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.125);
                transform: scale(1.125);
            }
        }

        @-webkit-keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(0, 1, 0, -180deg);
                transform: rotate3d(0, 1, 0, -180deg);
            }
        }

        @keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(0, 1, 0, -180deg);
                transform: rotate3d(0, 1, 0, -180deg);
            }
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .fa-rotate-90 {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .fa-rotate-180 {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .fa-rotate-270 {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .fa-flip-horizontal {
            -webkit-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }

        .fa-flip-vertical {
            -webkit-transform: scale(1, -1);
            transform: scale(1, -1);
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -webkit-transform: scale(-1, -1);
            transform: scale(-1, -1);
        }

        .fa-rotate-by {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        .fa-stack {
            display: inline-block;
            height: 2em;
            line-height: 2em;
            position: relative;
            vertical-align: middle;
            width: 2.5em;
        }

        .fa-stack-1x,
        .fa-stack-2x {
            left: 0;
            position: absolute;
            text-align: center;
            width: 100%;
            z-index: auto;
        }

        .fa-stack-1x {
            line-height: inherit;
        }

        .fa-stack-2x {
            font-size: 2em;
        }

        .fa-inverse {
            color: #fff;
        }

        /* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
readers do not read off random characters that represent icons */
        .fa-0::before {
            content: "\30";
        }

        .fa-1::before {
            content: "\31";
        }

        .fa-2::before {
            content: "\32";
        }

        .fa-3::before {
            content: "\33";
        }

        .fa-4::before {
            content: "\34";
        }

        .fa-5::before {
            content: "\35";
        }

        .fa-6::before {
            content: "\36";
        }

        .fa-7::before {
            content: "\37";
        }

        .fa-8::before {
            content: "\38";
        }

        .fa-9::before {
            content: "\39";
        }

        .fa-a::before {
            content: "\41";
        }

        .fa-address-book::before {
            content: "\f2b9";
        }

        .fa-contact-book::before {
            content: "\f2b9";
        }

        .fa-address-card::before {
            content: "\f2bb";
        }

        .fa-contact-card::before {
            content: "\f2bb";
        }

        .fa-vcard::before {
            content: "\f2bb";
        }

        .fa-align-center::before {
            content: "\f037";
        }

        .fa-align-justify::before {
            content: "\f039";
        }

        .fa-align-left::before {
            content: "\f036";
        }

        .fa-align-right::before {
            content: "\f038";
        }

        .fa-anchor::before {
            content: "\f13d";
        }

        .fa-angle-down::before {
            content: "\f107";
        }

        .fa-angle-left::before {
            content: "\f104";
        }

        .fa-angle-right::before {
            content: "\f105";
        }

        .fa-angle-up::before {
            content: "\f106";
        }

        .fa-angles-down::before {
            content: "\f103";
        }

        .fa-angle-double-down::before {
            content: "\f103";
        }

        .fa-angles-left::before {
            content: "\f100";
        }

        .fa-angle-double-left::before {
            content: "\f100";
        }

        .fa-angles-right::before {
            content: "\f101";
        }

        .fa-angle-double-right::before {
            content: "\f101";
        }

        .fa-angles-up::before {
            content: "\f102";
        }

        .fa-angle-double-up::before {
            content: "\f102";
        }

        .fa-ankh::before {
            content: "\f644";
        }

        .fa-apple-whole::before {
            content: "\f5d1";
        }

        .fa-apple-alt::before {
            content: "\f5d1";
        }

        .fa-archway::before {
            content: "\f557";
        }

        .fa-arrow-down::before {
            content: "\f063";
        }

        .fa-arrow-down-1-9::before {
            content: "\f162";
        }

        .fa-sort-numeric-asc::before {
            content: "\f162";
        }

        .fa-sort-numeric-down::before {
            content: "\f162";
        }

        .fa-arrow-down-9-1::before {
            content: "\f886";
        }

        .fa-sort-numeric-desc::before {
            content: "\f886";
        }

        .fa-sort-numeric-down-alt::before {
            content: "\f886";
        }

        .fa-arrow-down-a-z::before {
            content: "\f15d";
        }

        .fa-sort-alpha-asc::before {
            content: "\f15d";
        }

        .fa-sort-alpha-down::before {
            content: "\f15d";
        }

        .fa-arrow-down-short-wide::before {
            content: "\f884";
        }

        .fa-sort-amount-desc::before {
            content: "\f884";
        }

        .fa-sort-amount-down-alt::before {
            content: "\f884";
        }

        .fa-arrow-down-wide-short::before {
            content: "\f160";
        }

        .fa-sort-amount-asc::before {
            content: "\f160";
        }

        .fa-sort-amount-down::before {
            content: "\f160";
        }

        .fa-arrow-down-z-a::before {
            content: "\f881";
        }

        .fa-sort-alpha-desc::before {
            content: "\f881";
        }

        .fa-sort-alpha-down-alt::before {
            content: "\f881";
        }

        .fa-arrow-left::before {
            content: "\f060";
        }

        .fa-arrow-pointer::before {
            content: "\f245";
        }

        .fa-mouse-pointer::before {
            content: "\f245";
        }

        .fa-arrow-right::before {
            content: "\f061";
        }

        .fa-arrow-rotate-left::before {
            content: "\f0e2";
        }

        .fa-arrow-left-rotate::before {
            content: "\f0e2";
        }

        .fa-arrow-rotate-back::before {
            content: "\f0e2";
        }

        .fa-arrow-rotate-backward::before {
            content: "\f0e2";
        }

        .fa-undo::before {
            content: "\f0e2";
        }

        .fa-arrow-rotate-right::before {
            content: "\f01e";
        }

        .fa-arrow-right-rotate::before {
            content: "\f01e";
        }

        .fa-arrow-rotate-forward::before {
            content: "\f01e";
        }

        .fa-redo::before {
            content: "\f01e";
        }

        .fa-arrow-trend-down::before {
            content: "\e097";
        }

        .fa-arrow-trend-up::before {
            content: "\e098";
        }

        .fa-arrow-up::before {
            content: "\f062";
        }

        .fa-arrow-up-1-9::before {
            content: "\f163";
        }

        .fa-sort-numeric-up::before {
            content: "\f163";
        }

        .fa-arrow-up-9-1::before {
            content: "\f887";
        }

        .fa-sort-numeric-up-alt::before {
            content: "\f887";
        }

        .fa-arrow-up-a-z::before {
            content: "\f15e";
        }

        .fa-sort-alpha-up::before {
            content: "\f15e";
        }

        .fa-arrow-up-from-bracket::before {
            content: "\e09a";
        }

        .fa-arrow-up-short-wide::before {
            content: "\f885";
        }

        .fa-sort-amount-up-alt::before {
            content: "\f885";
        }

        .fa-arrow-up-wide-short::before {
            content: "\f161";
        }

        .fa-sort-amount-up::before {
            content: "\f161";
        }

        .fa-arrow-up-z-a::before {
            content: "\f882";
        }

        .fa-sort-alpha-up-alt::before {
            content: "\f882";
        }

        .fa-arrows-rotate::before {
            content: "\f021";
        }

        .fa-refresh::before {
            content: "\f021";
        }

        .fa-sync::before {
            content: "\f021";
        }

        .fa-asterisk::before {
            content: "\2a";
        }

        .fa-at::before {
            content: "\40";
        }

        .fa-atom::before {
            content: "\f5d2";
        }

        .fa-audio-description::before {
            content: "\f29e";
        }

        .fa-austral-sign::before {
            content: "\e0a9";
        }

        .fa-award::before {
            content: "\f559";
        }

        .fa-b::before {
            content: "\42";
        }

        .fa-baby::before {
            content: "\f77c";
        }

        .fa-baby-carriage::before {
            content: "\f77d";
        }

        .fa-carriage-baby::before {
            content: "\f77d";
        }

        .fa-backward::before {
            content: "\f04a";
        }

        .fa-backward-fast::before {
            content: "\f049";
        }

        .fa-fast-backward::before {
            content: "\f049";
        }

        .fa-backward-step::before {
            content: "\f048";
        }

        .fa-step-backward::before {
            content: "\f048";
        }

        .fa-bacon::before {
            content: "\f7e5";
        }

        .fa-bacteria::before {
            content: "\e059";
        }

        .fa-bacterium::before {
            content: "\e05a";
        }

        .fa-bag-shopping::before {
            content: "\f290";
        }

        .fa-shopping-bag::before {
            content: "\f290";
        }

        .fa-bahai::before {
            content: "\f666";
        }

        .fa-baht-sign::before {
            content: "\e0ac";
        }

        .fa-ban::before {
            content: "\f05e";
        }

        .fa-cancel::before {
            content: "\f05e";
        }

        .fa-ban-smoking::before {
            content: "\f54d";
        }

        .fa-smoking-ban::before {
            content: "\f54d";
        }

        .fa-bandage::before {
            content: "\f462";
        }

        .fa-band-aid::before {
            content: "\f462";
        }

        .fa-bank::before {
            content: "\f19c";
        }

        .fa-institution::before {
            content: "\f19c";
        }

        .fa-university::before {
            content: "\f19c";
        }

        .fa-barcode::before {
            content: "\f02a";
        }

        .fa-bars::before {
            content: "\f0c9";
        }

        .fa-navicon::before {
            content: "\f0c9";
        }

        .fa-bars-staggered::before {
            content: "\f550";
        }

        .fa-reorder::before {
            content: "\f550";
        }

        .fa-stream::before {
            content: "\f550";
        }

        .fa-baseball::before {
            content: "\f433";
        }

        .fa-baseball-ball::before {
            content: "\f433";
        }

        .fa-basket-shopping::before {
            content: "\f291";
        }

        .fa-shopping-basket::before {
            content: "\f291";
        }

        .fa-basketball::before {
            content: "\f434";
        }

        .fa-basketball-ball::before {
            content: "\f434";
        }

        .fa-bath::before {
            content: "\f2cd";
        }

        .fa-bathtub::before {
            content: "\f2cd";
        }

        .fa-battery-empty::before {
            content: "\f244";
        }

        .fa-battery-0::before {
            content: "\f244";
        }

        .fa-battery-full::before {
            content: "\f240";
        }

        .fa-battery::before {
            content: "\f240";
        }

        .fa-battery-5::before {
            content: "\f240";
        }

        .fa-battery-half::before {
            content: "\f242";
        }

        .fa-battery-3::before {
            content: "\f242";
        }

        .fa-battery-quarter::before {
            content: "\f243";
        }

        .fa-battery-2::before {
            content: "\f243";
        }

        .fa-battery-three-quarters::before {
            content: "\f241";
        }

        .fa-battery-4::before {
            content: "\f241";
        }

        .fa-bed::before {
            content: "\f236";
        }

        .fa-bed-pulse::before {
            content: "\f487";
        }

        .fa-procedures::before {
            content: "\f487";
        }

        .fa-beer-mug-empty::before {
            content: "\f0fc";
        }

        .fa-beer::before {
            content: "\f0fc";
        }

        .fa-bell::before {
            content: "\f0f3";
        }

        .fa-bell-concierge::before {
            content: "\f562";
        }

        .fa-concierge-bell::before {
            content: "\f562";
        }

        .fa-bell-slash::before {
            content: "\f1f6";
        }

        .fa-bezier-curve::before {
            content: "\f55b";
        }

        .fa-bicycle::before {
            content: "\f206";
        }

        .fa-binoculars::before {
            content: "\f1e5";
        }

        .fa-biohazard::before {
            content: "\f780";
        }

        .fa-bitcoin-sign::before {
            content: "\e0b4";
        }

        .fa-blender::before {
            content: "\f517";
        }

        .fa-blender-phone::before {
            content: "\f6b6";
        }

        .fa-blog::before {
            content: "\f781";
        }

        .fa-bold::before {
            content: "\f032";
        }

        .fa-bolt::before {
            content: "\f0e7";
        }

        .fa-flash::before {
            content: "\f0e7";
        }

        .fa-bomb::before {
            content: "\f1e2";
        }

        .fa-bone::before {
            content: "\f5d7";
        }

        .fa-bong::before {
            content: "\f55c";
        }

        .fa-book::before {
            content: "\f02d";
        }

        .fa-book-atlas::before {
            content: "\f558";
        }

        .fa-atlas::before {
            content: "\f558";
        }

        .fa-book-bible::before {
            content: "\f647";
        }

        .fa-bible::before {
            content: "\f647";
        }

        .fa-book-journal-whills::before {
            content: "\f66a";
        }

        .fa-journal-whills::before {
            content: "\f66a";
        }

        .fa-book-medical::before {
            content: "\f7e6";
        }

        .fa-book-open::before {
            content: "\f518";
        }

        .fa-book-open-reader::before {
            content: "\f5da";
        }

        .fa-book-reader::before {
            content: "\f5da";
        }

        .fa-book-quran::before {
            content: "\f687";
        }

        .fa-quran::before {
            content: "\f687";
        }

        .fa-book-skull::before {
            content: "\f6b7";
        }

        .fa-book-dead::before {
            content: "\f6b7";
        }

        .fa-bookmark::before {
            content: "\f02e";
        }

        .fa-border-all::before {
            content: "\f84c";
        }

        .fa-border-none::before {
            content: "\f850";
        }

        .fa-border-top-left::before {
            content: "\f853";
        }

        .fa-border-style::before {
            content: "\f853";
        }

        .fa-bowling-ball::before {
            content: "\f436";
        }

        .fa-box::before {
            content: "\f466";
        }

        .fa-box-archive::before {
            content: "\f187";
        }

        .fa-archive::before {
            content: "\f187";
        }

        .fa-box-open::before {
            content: "\f49e";
        }

        .fa-box-tissue::before {
            content: "\e05b";
        }

        .fa-boxes-stacked::before {
            content: "\f468";
        }

        .fa-boxes::before {
            content: "\f468";
        }

        .fa-boxes-alt::before {
            content: "\f468";
        }

        .fa-braille::before {
            content: "\f2a1";
        }

        .fa-brain::before {
            content: "\f5dc";
        }

        .fa-bread-slice::before {
            content: "\f7ec";
        }

        .fa-briefcase::before {
            content: "\f0b1";
        }

        .fa-briefcase-medical::before {
            content: "\f469";
        }

        .fa-broom::before {
            content: "\f51a";
        }

        .fa-brush::before {
            content: "\f55d";
        }

        .fa-bug::before {
            content: "\f188";
        }

        .fa-building::before {
            content: "\f1ad";
        }

        .fa-bullhorn::before {
            content: "\f0a1";
        }

        .fa-bullseye::before {
            content: "\f140";
        }

        .fa-burger::before {
            content: "\f805";
        }

        .fa-hamburger::before {
            content: "\f805";
        }

        .fa-bus::before {
            content: "\f207";
        }

        .fa-bus-simple::before {
            content: "\f55e";
        }

        .fa-bus-alt::before {
            content: "\f55e";
        }

        .fa-business-time::before {
            content: "\f64a";
        }

        .fa-briefcase-clock::before {
            content: "\f64a";
        }

        .fa-c::before {
            content: "\43";
        }

        .fa-cake-candles::before {
            content: "\f1fd";
        }

        .fa-birthday-cake::before {
            content: "\f1fd";
        }

        .fa-calculator::before {
            content: "\f1ec";
        }

        .fa-calendar::before {
            content: "\f133";
        }

        .fa-calendar-check::before {
            content: "\f274";
        }

        .fa-calendar-day::before {
            content: "\f783";
        }

        .fa-calendar-days::before {
            content: "\f073";
        }

        .fa-calendar-alt::before {
            content: "\f073";
        }

        .fa-calendar-minus::before {
            content: "\f272";
        }

        .fa-calendar-plus::before {
            content: "\f271";
        }

        .fa-calendar-week::before {
            content: "\f784";
        }

        .fa-calendar-xmark::before {
            content: "\f273";
        }

        .fa-calendar-times::before {
            content: "\f273";
        }

        .fa-camera::before {
            content: "\f030";
        }

        .fa-camera-alt::before {
            content: "\f030";
        }

        .fa-camera-retro::before {
            content: "\f083";
        }

        .fa-camera-rotate::before {
            content: "\e0d8";
        }

        .fa-campground::before {
            content: "\f6bb";
        }

        .fa-candy-cane::before {
            content: "\f786";
        }

        .fa-cannabis::before {
            content: "\f55f";
        }

        .fa-capsules::before {
            content: "\f46b";
        }

        .fa-car::before {
            content: "\f1b9";
        }

        .fa-automobile::before {
            content: "\f1b9";
        }

        .fa-car-battery::before {
            content: "\f5df";
        }

        .fa-battery-car::before {
            content: "\f5df";
        }

        .fa-car-crash::before {
            content: "\f5e1";
        }

        .fa-car-rear::before {
            content: "\f5de";
        }

        .fa-car-alt::before {
            content: "\f5de";
        }

        .fa-car-side::before {
            content: "\f5e4";
        }

        .fa-caravan::before {
            content: "\f8ff";
        }

        .fa-caret-down::before {
            content: "\f0d7";
        }

        .fa-caret-left::before {
            content: "\f0d9";
        }

        .fa-caret-right::before {
            content: "\f0da";
        }

        .fa-caret-up::before {
            content: "\f0d8";
        }

        .fa-carrot::before {
            content: "\f787";
        }

        .fa-cart-arrow-down::before {
            content: "\f218";
        }

        .fa-cart-flatbed::before {
            content: "\f474";
        }

        .fa-dolly-flatbed::before {
            content: "\f474";
        }

        .fa-cart-flatbed-suitcase::before {
            content: "\f59d";
        }

        .fa-luggage-cart::before {
            content: "\f59d";
        }

        .fa-cart-plus::before {
            content: "\f217";
        }

        .fa-cart-shopping::before {
            content: "\f07a";
        }

        .fa-shopping-cart::before {
            content: "\f07a";
        }

        .fa-cash-register::before {
            content: "\f788";
        }

        .fa-cat::before {
            content: "\f6be";
        }

        .fa-cedi-sign::before {
            content: "\e0df";
        }

        .fa-cent-sign::before {
            content: "\e3f5";
        }

        .fa-certificate::before {
            content: "\f0a3";
        }

        .fa-chair::before {
            content: "\f6c0";
        }

        .fa-chalkboard::before {
            content: "\f51b";
        }

        .fa-blackboard::before {
            content: "\f51b";
        }

        .fa-chalkboard-user::before {
            content: "\f51c";
        }

        .fa-chalkboard-teacher::before {
            content: "\f51c";
        }

        .fa-champagne-glasses::before {
            content: "\f79f";
        }

        .fa-glass-cheers::before {
            content: "\f79f";
        }

        .fa-charging-station::before {
            content: "\f5e7";
        }

        .fa-chart-area::before {
            content: "\f1fe";
        }

        .fa-area-chart::before {
            content: "\f1fe";
        }

        .fa-chart-bar::before {
            content: "\f080";
        }

        .fa-bar-chart::before {
            content: "\f080";
        }

        .fa-chart-gantt::before {
            content: "\e0e4";
        }

        .fa-chart-line::before {
            content: "\f201";
        }

        .fa-line-chart::before {
            content: "\f201";
        }

        .fa-chart-pie::before {
            content: "\f200";
        }

        .fa-pie-chart::before {
            content: "\f200";
        }

        .fa-check::before {
            content: "\f00c";
        }

        .fa-check-double::before {
            content: "\f560";
        }

        .fa-check-to-slot::before {
            content: "\f772";
        }

        .fa-vote-yea::before {
            content: "\f772";
        }

        .fa-cheese::before {
            content: "\f7ef";
        }

        .fa-chess::before {
            content: "\f439";
        }

        .fa-chess-bishop::before {
            content: "\f43a";
        }

        .fa-chess-board::before {
            content: "\f43c";
        }

        .fa-chess-king::before {
            content: "\f43f";
        }

        .fa-chess-knight::before {
            content: "\f441";
        }

        .fa-chess-pawn::before {
            content: "\f443";
        }

        .fa-chess-queen::before {
            content: "\f445";
        }

        .fa-chess-rook::before {
            content: "\f447";
        }

        .fa-chevron-down::before {
            content: "\f078";
        }

        .fa-chevron-left::before {
            content: "\f053";
        }

        .fa-chevron-right::before {
            content: "\f054";
        }

        .fa-chevron-up::before {
            content: "\f077";
        }

        .fa-child::before {
            content: "\f1ae";
        }

        .fa-church::before {
            content: "\f51d";
        }

        .fa-circle::before {
            content: "\f111";
        }

        .fa-circle-arrow-down::before {
            content: "\f0ab";
        }

        .fa-arrow-circle-down::before {
            content: "\f0ab";
        }

        .fa-circle-arrow-left::before {
            content: "\f0a8";
        }

        .fa-arrow-circle-left::before {
            content: "\f0a8";
        }

        .fa-circle-arrow-right::before {
            content: "\f0a9";
        }

        .fa-arrow-circle-right::before {
            content: "\f0a9";
        }

        .fa-circle-arrow-up::before {
            content: "\f0aa";
        }

        .fa-arrow-circle-up::before {
            content: "\f0aa";
        }

        .fa-circle-check::before {
            content: "\f058";
        }

        .fa-check-circle::before {
            content: "\f058";
        }

        .fa-circle-chevron-down::before {
            content: "\f13a";
        }

        .fa-chevron-circle-down::before {
            content: "\f13a";
        }

        .fa-circle-chevron-left::before {
            content: "\f137";
        }

        .fa-chevron-circle-left::before {
            content: "\f137";
        }

        .fa-circle-chevron-right::before {
            content: "\f138";
        }

        .fa-chevron-circle-right::before {
            content: "\f138";
        }

        .fa-circle-chevron-up::before {
            content: "\f139";
        }

        .fa-chevron-circle-up::before {
            content: "\f139";
        }

        .fa-circle-dollar-to-slot::before {
            content: "\f4b9";
        }

        .fa-donate::before {
            content: "\f4b9";
        }

        .fa-circle-dot::before {
            content: "\f192";
        }

        .fa-dot-circle::before {
            content: "\f192";
        }

        .fa-circle-down::before {
            content: "\f358";
        }

        .fa-arrow-alt-circle-down::before {
            content: "\f358";
        }

        .fa-circle-exclamation::before {
            content: "\f06a";
        }

        .fa-exclamation-circle::before {
            content: "\f06a";
        }

        .fa-circle-h::before {
            content: "\f47e";
        }

        .fa-hospital-symbol::before {
            content: "\f47e";
        }

        .fa-circle-half-stroke::before {
            content: "\f042";
        }

        .fa-adjust::before {
            content: "\f042";
        }

        .fa-circle-info::before {
            content: "\f05a";
        }

        .fa-info-circle::before {
            content: "\f05a";
        }

        .fa-circle-left::before {
            content: "\f359";
        }

        .fa-arrow-alt-circle-left::before {
            content: "\f359";
        }

        .fa-circle-minus::before {
            content: "\f056";
        }

        .fa-minus-circle::before {
            content: "\f056";
        }

        .fa-circle-notch::before {
            content: "\f1ce";
        }

        .fa-circle-pause::before {
            content: "\f28b";
        }

        .fa-pause-circle::before {
            content: "\f28b";
        }

        .fa-circle-play::before {
            content: "\f144";
        }

        .fa-play-circle::before {
            content: "\f144";
        }

        .fa-circle-plus::before {
            content: "\f055";
        }

        .fa-plus-circle::before {
            content: "\f055";
        }

        .fa-circle-question::before {
            content: "\f059";
        }

        .fa-question-circle::before {
            content: "\f059";
        }

        .fa-circle-radiation::before {
            content: "\f7ba";
        }

        .fa-radiation-alt::before {
            content: "\f7ba";
        }

        .fa-circle-right::before {
            content: "\f35a";
        }

        .fa-arrow-alt-circle-right::before {
            content: "\f35a";
        }

        .fa-circle-stop::before {
            content: "\f28d";
        }

        .fa-stop-circle::before {
            content: "\f28d";
        }

        .fa-circle-up::before {
            content: "\f35b";
        }

        .fa-arrow-alt-circle-up::before {
            content: "\f35b";
        }

        .fa-circle-user::before {
            content: "\f2bd";
        }

        .fa-user-circle::before {
            content: "\f2bd";
        }

        .fa-circle-xmark::before {
            content: "\f057";
        }

        .fa-times-circle::before {
            content: "\f057";
        }

        .fa-xmark-circle::before {
            content: "\f057";
        }

        .fa-city::before {
            content: "\f64f";
        }

        .fa-clapperboard::before {
            content: "\e131";
        }

        .fa-clipboard::before {
            content: "\f328";
        }

        .fa-clipboard-check::before {
            content: "\f46c";
        }

        .fa-clipboard-list::before {
            content: "\f46d";
        }

        .fa-clock::before {
            content: "\f017";
        }

        .fa-clock-four::before {
            content: "\f017";
        }

        .fa-clock-rotate-left::before {
            content: "\f1da";
        }

        .fa-history::before {
            content: "\f1da";
        }

        .fa-clone::before {
            content: "\f24d";
        }

        .fa-closed-captioning::before {
            content: "\f20a";
        }

        .fa-cloud::before {
            content: "\f0c2";
        }

        .fa-cloud-arrow-down::before {
            content: "\f0ed";
        }

        .fa-cloud-download::before {
            content: "\f0ed";
        }

        .fa-cloud-download-alt::before {
            content: "\f0ed";
        }

        .fa-cloud-arrow-up::before {
            content: "\f0ee";
        }

        .fa-cloud-upload::before {
            content: "\f0ee";
        }

        .fa-cloud-upload-alt::before {
            content: "\f0ee";
        }

        .fa-cloud-meatball::before {
            content: "\f73b";
        }

        .fa-cloud-moon::before {
            content: "\f6c3";
        }

        .fa-cloud-moon-rain::before {
            content: "\f73c";
        }

        .fa-cloud-rain::before {
            content: "\f73d";
        }

        .fa-cloud-showers-heavy::before {
            content: "\f740";
        }

        .fa-cloud-sun::before {
            content: "\f6c4";
        }

        .fa-cloud-sun-rain::before {
            content: "\f743";
        }

        .fa-clover::before {
            content: "\e139";
        }

        .fa-code::before {
            content: "\f121";
        }

        .fa-code-branch::before {
            content: "\f126";
        }

        .fa-code-commit::before {
            content: "\f386";
        }

        .fa-code-compare::before {
            content: "\e13a";
        }

        .fa-code-fork::before {
            content: "\e13b";
        }

        .fa-code-merge::before {
            content: "\f387";
        }

        .fa-code-pull-request::before {
            content: "\e13c";
        }

        .fa-coins::before {
            content: "\f51e";
        }

        .fa-colon-sign::before {
            content: "\e140";
        }

        .fa-comment::before {
            content: "\f075";
        }

        .fa-comment-dollar::before {
            content: "\f651";
        }

        .fa-comment-dots::before {
            content: "\f4ad";
        }

        .fa-commenting::before {
            content: "\f4ad";
        }

        .fa-comment-medical::before {
            content: "\f7f5";
        }

        .fa-comment-slash::before {
            content: "\f4b3";
        }

        .fa-comment-sms::before {
            content: "\f7cd";
        }

        .fa-sms::before {
            content: "\f7cd";
        }

        .fa-comments::before {
            content: "\f086";
        }

        .fa-comments-dollar::before {
            content: "\f653";
        }

        .fa-compact-disc::before {
            content: "\f51f";
        }

        .fa-compass::before {
            content: "\f14e";
        }

        .fa-compass-drafting::before {
            content: "\f568";
        }

        .fa-drafting-compass::before {
            content: "\f568";
        }

        .fa-compress::before {
            content: "\f066";
        }

        .fa-computer-mouse::before {
            content: "\f8cc";
        }

        .fa-mouse::before {
            content: "\f8cc";
        }

        .fa-cookie::before {
            content: "\f563";
        }

        .fa-cookie-bite::before {
            content: "\f564";
        }

        .fa-copy::before {
            content: "\f0c5";
        }

        .fa-copyright::before {
            content: "\f1f9";
        }

        .fa-couch::before {
            content: "\f4b8";
        }

        .fa-credit-card::before {
            content: "\f09d";
        }

        .fa-credit-card-alt::before {
            content: "\f09d";
        }

        .fa-crop::before {
            content: "\f125";
        }

        .fa-crop-simple::before {
            content: "\f565";
        }

        .fa-crop-alt::before {
            content: "\f565";
        }

        .fa-cross::before {
            content: "\f654";
        }

        .fa-crosshairs::before {
            content: "\f05b";
        }

        .fa-crow::before {
            content: "\f520";
        }

        .fa-crown::before {
            content: "\f521";
        }

        .fa-crutch::before {
            content: "\f7f7";
        }

        .fa-cruzeiro-sign::before {
            content: "\e152";
        }

        .fa-cube::before {
            content: "\f1b2";
        }

        .fa-cubes::before {
            content: "\f1b3";
        }

        .fa-d::before {
            content: "\44";
        }

        .fa-database::before {
            content: "\f1c0";
        }

        .fa-delete-left::before {
            content: "\f55a";
        }

        .fa-backspace::before {
            content: "\f55a";
        }

        .fa-democrat::before {
            content: "\f747";
        }

        .fa-desktop::before {
            content: "\f390";
        }

        .fa-desktop-alt::before {
            content: "\f390";
        }

        .fa-dharmachakra::before {
            content: "\f655";
        }

        .fa-diagram-project::before {
            content: "\f542";
        }

        .fa-project-diagram::before {
            content: "\f542";
        }

        .fa-diamond-turn-right::before {
            content: "\f5eb";
        }

        .fa-directions::before {
            content: "\f5eb";
        }

        .fa-dice::before {
            content: "\f522";
        }

        .fa-dice-d20::before {
            content: "\f6cf";
        }

        .fa-dice-d6::before {
            content: "\f6d1";
        }

        .fa-dice-five::before {
            content: "\f523";
        }

        .fa-dice-four::before {
            content: "\f524";
        }

        .fa-dice-one::before {
            content: "\f525";
        }

        .fa-dice-six::before {
            content: "\f526";
        }

        .fa-dice-three::before {
            content: "\f527";
        }

        .fa-dice-two::before {
            content: "\f528";
        }

        .fa-disease::before {
            content: "\f7fa";
        }

        .fa-divide::before {
            content: "\f529";
        }

        .fa-dna::before {
            content: "\f471";
        }

        .fa-dog::before {
            content: "\f6d3";
        }

        .fa-dollar-sign::before {
            content: "\24";
        }

        .fa-dollar::before {
            content: "\24";
        }

        .fa-usd::before {
            content: "\24";
        }

        .fa-dolly::before {
            content: "\f472";
        }

        .fa-dolly-box::before {
            content: "\f472";
        }

        .fa-dong-sign::before {
            content: "\e169";
        }

        .fa-door-closed::before {
            content: "\f52a";
        }

        .fa-door-open::before {
            content: "\f52b";
        }

        .fa-dove::before {
            content: "\f4ba";
        }

        .fa-down-left-and-up-right-to-center::before {
            content: "\f422";
        }

        .fa-compress-alt::before {
            content: "\f422";
        }

        .fa-down-long::before {
            content: "\f309";
        }

        .fa-long-arrow-alt-down::before {
            content: "\f309";
        }

        .fa-download::before {
            content: "\f019";
        }

        .fa-dragon::before {
            content: "\f6d5";
        }

        .fa-draw-polygon::before {
            content: "\f5ee";
        }

        .fa-droplet::before {
            content: "\f043";
        }

        .fa-tint::before {
            content: "\f043";
        }

        .fa-droplet-slash::before {
            content: "\f5c7";
        }

        .fa-tint-slash::before {
            content: "\f5c7";
        }

        .fa-drum::before {
            content: "\f569";
        }

        .fa-drum-steelpan::before {
            content: "\f56a";
        }

        .fa-drumstick-bite::before {
            content: "\f6d7";
        }

        .fa-dumbbell::before {
            content: "\f44b";
        }

        .fa-dumpster::before {
            content: "\f793";
        }

        .fa-dumpster-fire::before {
            content: "\f794";
        }

        .fa-dungeon::before {
            content: "\f6d9";
        }

        .fa-e::before {
            content: "\45";
        }

        .fa-ear-deaf::before {
            content: "\f2a4";
        }

        .fa-deaf::before {
            content: "\f2a4";
        }

        .fa-deafness::before {
            content: "\f2a4";
        }

        .fa-hard-of-hearing::before {
            content: "\f2a4";
        }

        .fa-ear-listen::before {
            content: "\f2a2";
        }

        .fa-assistive-listening-systems::before {
            content: "\f2a2";
        }

        .fa-earth-africa::before {
            content: "\f57c";
        }

        .fa-globe-africa::before {
            content: "\f57c";
        }

        .fa-earth-americas::before {
            content: "\f57d";
        }

        .fa-earth::before {
            content: "\f57d";
        }

        .fa-globe-americas::before {
            content: "\f57d";
        }

        .fa-earth-asia::before {
            content: "\f57e";
        }

        .fa-globe-asia::before {
            content: "\f57e";
        }

        .fa-earth-europa::before {
            content: "\f7a2";
        }

        .fa-globe-europe::before {
            content: "\f7a2";
        }

        .fa-egg::before {
            content: "\f7fb";
        }

        .fa-eject::before {
            content: "\f052";
        }

        .fa-elevator::before {
            content: "\e16d";
        }

        .fa-ellipsis::before {
            content: "\f141";
        }

        .fa-ellipsis-h::before {
            content: "\f141";
        }

        .fa-ellipsis-vertical::before {
            content: "\f142";
        }

        .fa-ellipsis-v::before {
            content: "\f142";
        }

        .fa-envelope::before {
            content: "\f0e0";
        }

        .fa-envelope-open::before {
            content: "\f2b6";
        }

        .fa-envelope-open-text::before {
            content: "\f658";
        }

        .fa-envelopes-bulk::before {
            content: "\f674";
        }

        .fa-mail-bulk::before {
            content: "\f674";
        }

        .fa-equals::before {
            content: "\3d";
        }

        .fa-eraser::before {
            content: "\f12d";
        }

        .fa-ethernet::before {
            content: "\f796";
        }

        .fa-euro-sign::before {
            content: "\f153";
        }

        .fa-eur::before {
            content: "\f153";
        }

        .fa-euro::before {
            content: "\f153";
        }

        .fa-exclamation::before {
            content: "\21";
        }

        .fa-expand::before {
            content: "\f065";
        }

        .fa-eye::before {
            content: "\f06e";
        }

        .fa-eye-dropper::before {
            content: "\f1fb";
        }

        .fa-eye-dropper-empty::before {
            content: "\f1fb";
        }

        .fa-eyedropper::before {
            content: "\f1fb";
        }

        .fa-eye-low-vision::before {
            content: "\f2a8";
        }

        .fa-low-vision::before {
            content: "\f2a8";
        }

        .fa-eye-slash::before {
            content: "\f070";
        }

        .fa-f::before {
            content: "\46";
        }

        .fa-face-angry::before {
            content: "\f556";
        }

        .fa-angry::before {
            content: "\f556";
        }

        .fa-face-dizzy::before {
            content: "\f567";
        }

        .fa-dizzy::before {
            content: "\f567";
        }

        .fa-face-flushed::before {
            content: "\f579";
        }

        .fa-flushed::before {
            content: "\f579";
        }

        .fa-face-frown::before {
            content: "\f119";
        }

        .fa-frown::before {
            content: "\f119";
        }

        .fa-face-frown-open::before {
            content: "\f57a";
        }

        .fa-frown-open::before {
            content: "\f57a";
        }

        .fa-face-grimace::before {
            content: "\f57f";
        }

        .fa-grimace::before {
            content: "\f57f";
        }

        .fa-face-grin::before {
            content: "\f580";
        }

        .fa-grin::before {
            content: "\f580";
        }

        .fa-face-grin-beam::before {
            content: "\f582";
        }

        .fa-grin-beam::before {
            content: "\f582";
        }

        .fa-face-grin-beam-sweat::before {
            content: "\f583";
        }

        .fa-grin-beam-sweat::before {
            content: "\f583";
        }

        .fa-face-grin-hearts::before {
            content: "\f584";
        }

        .fa-grin-hearts::before {
            content: "\f584";
        }

        .fa-face-grin-squint::before {
            content: "\f585";
        }

        .fa-grin-squint::before {
            content: "\f585";
        }

        .fa-face-grin-squint-tears::before {
            content: "\f586";
        }

        .fa-grin-squint-tears::before {
            content: "\f586";
        }

        .fa-face-grin-stars::before {
            content: "\f587";
        }

        .fa-grin-stars::before {
            content: "\f587";
        }

        .fa-face-grin-tears::before {
            content: "\f588";
        }

        .fa-grin-tears::before {
            content: "\f588";
        }

        .fa-face-grin-tongue::before {
            content: "\f589";
        }

        .fa-grin-tongue::before {
            content: "\f589";
        }

        .fa-face-grin-tongue-squint::before {
            content: "\f58a";
        }

        .fa-grin-tongue-squint::before {
            content: "\f58a";
        }

        .fa-face-grin-tongue-wink::before {
            content: "\f58b";
        }

        .fa-grin-tongue-wink::before {
            content: "\f58b";
        }

        .fa-face-grin-wide::before {
            content: "\f581";
        }

        .fa-grin-alt::before {
            content: "\f581";
        }

        .fa-face-grin-wink::before {
            content: "\f58c";
        }

        .fa-grin-wink::before {
            content: "\f58c";
        }

        .fa-face-kiss::before {
            content: "\f596";
        }

        .fa-kiss::before {
            content: "\f596";
        }

        .fa-face-kiss-beam::before {
            content: "\f597";
        }

        .fa-kiss-beam::before {
            content: "\f597";
        }

        .fa-face-kiss-wink-heart::before {
            content: "\f598";
        }

        .fa-kiss-wink-heart::before {
            content: "\f598";
        }

        .fa-face-laugh::before {
            content: "\f599";
        }

        .fa-laugh::before {
            content: "\f599";
        }

        .fa-face-laugh-beam::before {
            content: "\f59a";
        }

        .fa-laugh-beam::before {
            content: "\f59a";
        }

        .fa-face-laugh-squint::before {
            content: "\f59b";
        }

        .fa-laugh-squint::before {
            content: "\f59b";
        }

        .fa-face-laugh-wink::before {
            content: "\f59c";
        }

        .fa-laugh-wink::before {
            content: "\f59c";
        }

        .fa-face-meh::before {
            content: "\f11a";
        }

        .fa-meh::before {
            content: "\f11a";
        }

        .fa-face-meh-blank::before {
            content: "\f5a4";
        }

        .fa-meh-blank::before {
            content: "\f5a4";
        }

        .fa-face-rolling-eyes::before {
            content: "\f5a5";
        }

        .fa-meh-rolling-eyes::before {
            content: "\f5a5";
        }

        .fa-face-sad-cry::before {
            content: "\f5b3";
        }

        .fa-sad-cry::before {
            content: "\f5b3";
        }

        .fa-face-sad-tear::before {
            content: "\f5b4";
        }

        .fa-sad-tear::before {
            content: "\f5b4";
        }

        .fa-face-smile::before {
            content: "\f118";
        }

        .fa-smile::before {
            content: "\f118";
        }

        .fa-face-smile-beam::before {
            content: "\f5b8";
        }

        .fa-smile-beam::before {
            content: "\f5b8";
        }

        .fa-face-smile-wink::before {
            content: "\f4da";
        }

        .fa-smile-wink::before {
            content: "\f4da";
        }

        .fa-face-surprise::before {
            content: "\f5c2";
        }

        .fa-surprise::before {
            content: "\f5c2";
        }

        .fa-face-tired::before {
            content: "\f5c8";
        }

        .fa-tired::before {
            content: "\f5c8";
        }

        .fa-fan::before {
            content: "\f863";
        }

        .fa-faucet::before {
            content: "\e005";
        }

        .fa-fax::before {
            content: "\f1ac";
        }

        .fa-feather::before {
            content: "\f52d";
        }

        .fa-feather-pointed::before {
            content: "\f56b";
        }

        .fa-feather-alt::before {
            content: "\f56b";
        }

        .fa-file::before {
            content: "\f15b";
        }

        .fa-file-arrow-down::before {
            content: "\f56d";
        }

        .fa-file-download::before {
            content: "\f56d";
        }

        .fa-file-arrow-up::before {
            content: "\f574";
        }

        .fa-file-upload::before {
            content: "\f574";
        }

        .fa-file-audio::before {
            content: "\f1c7";
        }

        .fa-file-code::before {
            content: "\f1c9";
        }

        .fa-file-contract::before {
            content: "\f56c";
        }

        .fa-file-csv::before {
            content: "\f6dd";
        }

        .fa-file-excel::before {
            content: "\f1c3";
        }

        .fa-file-export::before {
            content: "\f56e";
        }

        .fa-arrow-right-from-file::before {
            content: "\f56e";
        }

        .fa-file-image::before {
            content: "\f1c5";
        }

        .fa-file-import::before {
            content: "\f56f";
        }

        .fa-arrow-right-to-file::before {
            content: "\f56f";
        }

        .fa-file-invoice::before {
            content: "\f570";
        }

        .fa-file-invoice-dollar::before {
            content: "\f571";
        }

        .fa-file-lines::before {
            content: "\f15c";
        }

        .fa-file-alt::before {
            content: "\f15c";
        }

        .fa-file-text::before {
            content: "\f15c";
        }

        .fa-file-medical::before {
            content: "\f477";
        }

        .fa-file-pdf::before {
            content: "\f1c1";
        }

        .fa-file-powerpoint::before {
            content: "\f1c4";
        }

        .fa-file-prescription::before {
            content: "\f572";
        }

        .fa-file-signature::before {
            content: "\f573";
        }

        .fa-file-video::before {
            content: "\f1c8";
        }

        .fa-file-waveform::before {
            content: "\f478";
        }

        .fa-file-medical-alt::before {
            content: "\f478";
        }

        .fa-file-word::before {
            content: "\f1c2";
        }

        .fa-file-zipper::before {
            content: "\f1c6";
        }

        .fa-file-archive::before {
            content: "\f1c6";
        }

        .fa-fill::before {
            content: "\f575";
        }

        .fa-fill-drip::before {
            content: "\f576";
        }

        .fa-film::before {
            content: "\f008";
        }

        .fa-filter::before {
            content: "\f0b0";
        }

        .fa-filter-circle-dollar::before {
            content: "\f662";
        }

        .fa-funnel-dollar::before {
            content: "\f662";
        }

        .fa-filter-circle-xmark::before {
            content: "\e17b";
        }

        .fa-fingerprint::before {
            content: "\f577";
        }

        .fa-fire::before {
            content: "\f06d";
        }

        .fa-fire-extinguisher::before {
            content: "\f134";
        }

        .fa-fire-flame-curved::before {
            content: "\f7e4";
        }

        .fa-fire-alt::before {
            content: "\f7e4";
        }

        .fa-fire-flame-simple::before {
            content: "\f46a";
        }

        .fa-burn::before {
            content: "\f46a";
        }

        .fa-fish::before {
            content: "\f578";
        }

        .fa-flag::before {
            content: "\f024";
        }

        .fa-flag-checkered::before {
            content: "\f11e";
        }

        .fa-flag-usa::before {
            content: "\f74d";
        }

        .fa-flask::before {
            content: "\f0c3";
        }

        .fa-floppy-disk::before {
            content: "\f0c7";
        }

        .fa-save::before {
            content: "\f0c7";
        }

        .fa-florin-sign::before {
            content: "\e184";
        }

        .fa-folder::before {
            content: "\f07b";
        }

        .fa-folder-minus::before {
            content: "\f65d";
        }

        .fa-folder-open::before {
            content: "\f07c";
        }

        .fa-folder-plus::before {
            content: "\f65e";
        }

        .fa-folder-tree::before {
            content: "\f802";
        }

        .fa-font::before {
            content: "\f031";
        }

        .fa-football::before {
            content: "\f44e";
        }

        .fa-football-ball::before {
            content: "\f44e";
        }

        .fa-forward::before {
            content: "\f04e";
        }

        .fa-forward-fast::before {
            content: "\f050";
        }

        .fa-fast-forward::before {
            content: "\f050";
        }

        .fa-forward-step::before {
            content: "\f051";
        }

        .fa-step-forward::before {
            content: "\f051";
        }

        .fa-franc-sign::before {
            content: "\e18f";
        }

        .fa-frog::before {
            content: "\f52e";
        }

        .fa-futbol::before {
            content: "\f1e3";
        }

        .fa-futbol-ball::before {
            content: "\f1e3";
        }

        .fa-soccer-ball::before {
            content: "\f1e3";
        }

        .fa-g::before {
            content: "\47";
        }

        .fa-gamepad::before {
            content: "\f11b";
        }

        .fa-gas-pump::before {
            content: "\f52f";
        }

        .fa-gauge-simple::before {
            content: "\f62a";
        }

        .fa-gauge-simple-high::before {
            content: "\f62a";
        }

        .fa-tachometer::before {
            content: "\f62a";
        }

        .fa-gavel::before {
            content: "\f0e3";
        }

        .fa-legal::before {
            content: "\f0e3";
        }

        .fa-gear::before {
            content: "\f013";
        }

        .fa-cog::before {
            content: "\f013";
        }

        .fa-gears::before {
            content: "\f085";
        }

        .fa-cogs::before {
            content: "\f085";
        }

        .fa-gem::before {
            content: "\f3a5";
        }

        .fa-genderless::before {
            content: "\f22d";
        }

        .fa-ghost::before {
            content: "\f6e2";
        }

        .fa-gift::before {
            content: "\f06b";
        }

        .fa-gifts::before {
            content: "\f79c";
        }

        .fa-glasses::before {
            content: "\f530";
        }

        .fa-globe::before {
            content: "\f0ac";
        }

        .fa-golf-ball-tee::before {
            content: "\f450";
        }

        .fa-golf-ball::before {
            content: "\f450";
        }

        .fa-gopuram::before {
            content: "\f664";
        }

        .fa-graduation-cap::before {
            content: "\f19d";
        }

        .fa-mortar-board::before {
            content: "\f19d";
        }

        .fa-greater-than::before {
            content: "\3e";
        }

        .fa-greater-than-equal::before {
            content: "\f532";
        }

        .fa-grip::before {
            content: "\f58d";
        }

        .fa-grip-horizontal::before {
            content: "\f58d";
        }

        .fa-grip-lines::before {
            content: "\f7a4";
        }

        .fa-grip-lines-vertical::before {
            content: "\f7a5";
        }

        .fa-grip-vertical::before {
            content: "\f58e";
        }

        .fa-guarani-sign::before {
            content: "\e19a";
        }

        .fa-guitar::before {
            content: "\f7a6";
        }

        .fa-gun::before {
            content: "\e19b";
        }

        .fa-h::before {
            content: "\48";
        }

        .fa-hammer::before {
            content: "\f6e3";
        }

        .fa-hamsa::before {
            content: "\f665";
        }

        .fa-hand::before {
            content: "\f256";
        }

        .fa-hand-paper::before {
            content: "\f256";
        }

        .fa-hand-back-fist::before {
            content: "\f255";
        }

        .fa-hand-rock::before {
            content: "\f255";
        }

        .fa-hand-dots::before {
            content: "\f461";
        }

        .fa-allergies::before {
            content: "\f461";
        }

        .fa-hand-fist::before {
            content: "\f6de";
        }

        .fa-fist-raised::before {
            content: "\f6de";
        }

        .fa-hand-holding::before {
            content: "\f4bd";
        }

        .fa-hand-holding-dollar::before {
            content: "\f4c0";
        }

        .fa-hand-holding-usd::before {
            content: "\f4c0";
        }

        .fa-hand-holding-droplet::before {
            content: "\f4c1";
        }

        .fa-hand-holding-water::before {
            content: "\f4c1";
        }

        .fa-hand-holding-heart::before {
            content: "\f4be";
        }

        .fa-hand-holding-medical::before {
            content: "\e05c";
        }

        .fa-hand-lizard::before {
            content: "\f258";
        }

        .fa-hand-middle-finger::before {
            content: "\f806";
        }

        .fa-hand-peace::before {
            content: "\f25b";
        }

        .fa-hand-point-down::before {
            content: "\f0a7";
        }

        .fa-hand-point-left::before {
            content: "\f0a5";
        }

        .fa-hand-point-right::before {
            content: "\f0a4";
        }

        .fa-hand-point-up::before {
            content: "\f0a6";
        }

        .fa-hand-pointer::before {
            content: "\f25a";
        }

        .fa-hand-scissors::before {
            content: "\f257";
        }

        .fa-hand-sparkles::before {
            content: "\e05d";
        }

        .fa-hand-spock::before {
            content: "\f259";
        }

        .fa-hands::before {
            content: "\f2a7";
        }

        .fa-sign-language::before {
            content: "\f2a7";
        }

        .fa-signing::before {
            content: "\f2a7";
        }

        .fa-hands-asl-interpreting::before {
            content: "\f2a3";
        }

        .fa-american-sign-language-interpreting::before {
            content: "\f2a3";
        }

        .fa-asl-interpreting::before {
            content: "\f2a3";
        }

        .fa-hands-american-sign-language-interpreting::before {
            content: "\f2a3";
        }

        .fa-hands-bubbles::before {
            content: "\e05e";
        }

        .fa-hands-wash::before {
            content: "\e05e";
        }

        .fa-hands-clapping::before {
            content: "\e1a8";
        }

        .fa-hands-holding::before {
            content: "\f4c2";
        }

        .fa-hands-praying::before {
            content: "\f684";
        }

        .fa-praying-hands::before {
            content: "\f684";
        }

        .fa-handshake::before {
            content: "\f2b5";
        }

        .fa-handshake-angle::before {
            content: "\f4c4";
        }

        .fa-hands-helping::before {
            content: "\f4c4";
        }

        .fa-handshake-simple-slash::before {
            content: "\e05f";
        }

        .fa-handshake-alt-slash::before {
            content: "\e05f";
        }

        .fa-handshake-slash::before {
            content: "\e060";
        }

        .fa-hanukiah::before {
            content: "\f6e6";
        }

        .fa-hard-drive::before {
            content: "\f0a0";
        }

        .fa-hdd::before {
            content: "\f0a0";
        }

        .fa-hashtag::before {
            content: "\23";
        }

        .fa-hat-cowboy::before {
            content: "\f8c0";
        }

        .fa-hat-cowboy-side::before {
            content: "\f8c1";
        }

        .fa-hat-wizard::before {
            content: "\f6e8";
        }

        .fa-head-side-cough::before {
            content: "\e061";
        }

        .fa-head-side-cough-slash::before {
            content: "\e062";
        }

        .fa-head-side-mask::before {
            content: "\e063";
        }

        .fa-head-side-virus::before {
            content: "\e064";
        }

        .fa-heading::before {
            content: "\f1dc";
        }

        .fa-header::before {
            content: "\f1dc";
        }

        .fa-headphones::before {
            content: "\f025";
        }

        .fa-headphones-simple::before {
            content: "\f58f";
        }

        .fa-headphones-alt::before {
            content: "\f58f";
        }

        .fa-headset::before {
            content: "\f590";
        }

        .fa-heart::before {
            content: "\f004";
        }

        .fa-heart-crack::before {
            content: "\f7a9";
        }

        .fa-heart-broken::before {
            content: "\f7a9";
        }

        .fa-heart-pulse::before {
            content: "\f21e";
        }

        .fa-heartbeat::before {
            content: "\f21e";
        }

        .fa-helicopter::before {
            content: "\f533";
        }

        .fa-helmet-safety::before {
            content: "\f807";
        }

        .fa-hard-hat::before {
            content: "\f807";
        }

        .fa-hat-hard::before {
            content: "\f807";
        }

        .fa-highlighter::before {
            content: "\f591";
        }

        .fa-hippo::before {
            content: "\f6ed";
        }

        .fa-hockey-puck::before {
            content: "\f453";
        }

        .fa-holly-berry::before {
            content: "\f7aa";
        }

        .fa-horse::before {
            content: "\f6f0";
        }

        .fa-horse-head::before {
            content: "\f7ab";
        }

        .fa-hospital::before {
            content: "\f0f8";
        }

        .fa-hospital-user::before {
            content: "\f80d";
        }

        .fa-hospital-wide::before {
            content: "\f47d";
        }

        .fa-hospital-alt::before {
            content: "\f47d";
        }

        .fa-hot-tub-person::before {
            content: "\f593";
        }

        .fa-hot-tub::before {
            content: "\f593";
        }

        .fa-hotdog::before {
            content: "\f80f";
        }

        .fa-hotel::before {
            content: "\f594";
        }

        .fa-hourglass::before {
            content: "\f254";
        }

        .fa-hourglass-2::before {
            content: "\f254";
        }

        .fa-hourglass-half::before {
            content: "\f254";
        }

        .fa-hourglass-empty::before {
            content: "\f252";
        }

        .fa-hourglass-end::before {
            content: "\f253";
        }

        .fa-hourglass-3::before {
            content: "\f253";
        }

        .fa-hourglass-start::before {
            content: "\f251";
        }

        .fa-hourglass-1::before {
            content: "\f251";
        }

        .fa-house::before {
            content: "\f015";
        }

        .fa-home::before {
            content: "\f015";
        }

        .fa-house-chimney::before {
            content: "\e3af";
        }

        .fa-home-lg::before {
            content: "\e3af";
        }

        .fa-house-crack::before {
            content: "\e3b1";
        }

        .fa-house-laptop::before {
            content: "\e066";
        }

        .fa-laptop-house::before {
            content: "\e066";
        }

        .fa-house-medical::before {
            content: "\e3b2";
        }

        .fa-house-user::before {
            content: "\e1b0";
        }

        .fa-home-user::before {
            content: "\e1b0";
        }

        .fa-hryvnia-sign::before {
            content: "\f6f2";
        }

        .fa-hryvnia::before {
            content: "\f6f2";
        }

        .fa-i::before {
            content: "\49";
        }

        .fa-i-cursor::before {
            content: "\f246";
        }

        .fa-ice-cream::before {
            content: "\f810";
        }

        .fa-icicles::before {
            content: "\f7ad";
        }

        .fa-icons::before {
            content: "\f86d";
        }

        .fa-heart-music-camera-bolt::before {
            content: "\f86d";
        }

        .fa-id-badge::before {
            content: "\f2c1";
        }

        .fa-id-card::before {
            content: "\f2c2";
        }

        .fa-drivers-license::before {
            content: "\f2c2";
        }

        .fa-id-card-clip::before {
            content: "\f47f";
        }

        .fa-id-card-alt::before {
            content: "\f47f";
        }

        .fa-igloo::before {
            content: "\f7ae";
        }

        .fa-image::before {
            content: "\f03e";
        }

        .fa-image-portrait::before {
            content: "\f3e0";
        }

        .fa-portrait::before {
            content: "\f3e0";
        }

        .fa-images::before {
            content: "\f302";
        }

        .fa-inbox::before {
            content: "\f01c";
        }

        .fa-indent::before {
            content: "\f03c";
        }

        .fa-indian-rupee-sign::before {
            content: "\e1bc";
        }

        .fa-indian-rupee::before {
            content: "\e1bc";
        }

        .fa-inr::before {
            content: "\e1bc";
        }

        .fa-industry::before {
            content: "\f275";
        }

        .fa-infinity::before {
            content: "\f534";
        }

        .fa-info::before {
            content: "\f129";
        }

        .fa-italic::before {
            content: "\f033";
        }

        .fa-j::before {
            content: "\4a";
        }

        .fa-jedi::before {
            content: "\f669";
        }

        .fa-jet-fighter::before {
            content: "\f0fb";
        }

        .fa-fighter-jet::before {
            content: "\f0fb";
        }

        .fa-joint::before {
            content: "\f595";
        }

        .fa-k::before {
            content: "\4b";
        }

        .fa-kaaba::before {
            content: "\f66b";
        }

        .fa-key::before {
            content: "\f084";
        }

        .fa-keyboard::before {
            content: "\f11c";
        }

        .fa-khanda::before {
            content: "\f66d";
        }

        .fa-kip-sign::before {
            content: "\e1c4";
        }

        .fa-kit-medical::before {
            content: "\f479";
        }

        .fa-first-aid::before {
            content: "\f479";
        }

        .fa-kiwi-bird::before {
            content: "\f535";
        }

        .fa-l::before {
            content: "\4c";
        }

        .fa-landmark::before {
            content: "\f66f";
        }

        .fa-language::before {
            content: "\f1ab";
        }

        .fa-laptop::before {
            content: "\f109";
        }

        .fa-laptop-code::before {
            content: "\f5fc";
        }

        .fa-laptop-medical::before {
            content: "\f812";
        }

        .fa-lari-sign::before {
            content: "\e1c8";
        }

        .fa-layer-group::before {
            content: "\f5fd";
        }

        .fa-leaf::before {
            content: "\f06c";
        }

        .fa-left-long::before {
            content: "\f30a";
        }

        .fa-long-arrow-alt-left::before {
            content: "\f30a";
        }

        .fa-left-right::before {
            content: "\f337";
        }

        .fa-arrows-alt-h::before {
            content: "\f337";
        }

        .fa-lemon::before {
            content: "\f094";
        }

        .fa-less-than::before {
            content: "\3c";
        }

        .fa-less-than-equal::before {
            content: "\f537";
        }

        .fa-life-ring::before {
            content: "\f1cd";
        }

        .fa-lightbulb::before {
            content: "\f0eb";
        }

        .fa-link::before {
            content: "\f0c1";
        }

        .fa-chain::before {
            content: "\f0c1";
        }

        .fa-link-slash::before {
            content: "\f127";
        }

        .fa-chain-broken::before {
            content: "\f127";
        }

        .fa-chain-slash::before {
            content: "\f127";
        }

        .fa-unlink::before {
            content: "\f127";
        }

        .fa-lira-sign::before {
            content: "\f195";
        }

        .fa-list::before {
            content: "\f03a";
        }

        .fa-list-squares::before {
            content: "\f03a";
        }

        .fa-list-check::before {
            content: "\f0ae";
        }

        .fa-tasks::before {
            content: "\f0ae";
        }

        .fa-list-ol::before {
            content: "\f0cb";
        }

        .fa-list-1-2::before {
            content: "\f0cb";
        }

        .fa-list-numeric::before {
            content: "\f0cb";
        }

        .fa-list-ul::before {
            content: "\f0ca";
        }

        .fa-list-dots::before {
            content: "\f0ca";
        }

        .fa-litecoin-sign::before {
            content: "\e1d3";
        }

        .fa-location-arrow::before {
            content: "\f124";
        }

        .fa-location-crosshairs::before {
            content: "\f601";
        }

        .fa-location::before {
            content: "\f601";
        }

        .fa-location-dot::before {
            content: "\f3c5";
        }

        .fa-map-marker-alt::before {
            content: "\f3c5";
        }

        .fa-location-pin::before {
            content: "\f041";
        }

        .fa-map-marker::before {
            content: "\f041";
        }

        .fa-lock::before {
            content: "\f023";
        }

        .fa-lock-open::before {
            content: "\f3c1";
        }

        .fa-lungs::before {
            content: "\f604";
        }

        .fa-lungs-virus::before {
            content: "\e067";
        }

        .fa-m::before {
            content: "\4d";
        }

        .fa-magnet::before {
            content: "\f076";
        }

        .fa-magnifying-glass::before {
            content: "\f002";
        }

        .fa-search::before {
            content: "\f002";
        }

        .fa-magnifying-glass-dollar::before {
            content: "\f688";
        }

        .fa-search-dollar::before {
            content: "\f688";
        }

        .fa-magnifying-glass-location::before {
            content: "\f689";
        }

        .fa-search-location::before {
            content: "\f689";
        }

        .fa-magnifying-glass-minus::before {
            content: "\f010";
        }

        .fa-search-minus::before {
            content: "\f010";
        }

        .fa-magnifying-glass-plus::before {
            content: "\f00e";
        }

        .fa-search-plus::before {
            content: "\f00e";
        }

        .fa-manat-sign::before {
            content: "\e1d5";
        }

        .fa-map::before {
            content: "\f279";
        }

        .fa-map-location::before {
            content: "\f59f";
        }

        .fa-map-marked::before {
            content: "\f59f";
        }

        .fa-map-location-dot::before {
            content: "\f5a0";
        }

        .fa-map-marked-alt::before {
            content: "\f5a0";
        }

        .fa-map-pin::before {
            content: "\f276";
        }

        .fa-marker::before {
            content: "\f5a1";
        }

        .fa-mars::before {
            content: "\f222";
        }

        .fa-mars-and-venus::before {
            content: "\f224";
        }

        .fa-mars-double::before {
            content: "\f227";
        }

        .fa-mars-stroke::before {
            content: "\f229";
        }

        .fa-mars-stroke-right::before {
            content: "\f22b";
        }

        .fa-mars-stroke-h::before {
            content: "\f22b";
        }

        .fa-mars-stroke-up::before {
            content: "\f22a";
        }

        .fa-mars-stroke-v::before {
            content: "\f22a";
        }

        .fa-martini-glass::before {
            content: "\f57b";
        }

        .fa-glass-martini-alt::before {
            content: "\f57b";
        }

        .fa-martini-glass-citrus::before {
            content: "\f561";
        }

        .fa-cocktail::before {
            content: "\f561";
        }

        .fa-martini-glass-empty::before {
            content: "\f000";
        }

        .fa-glass-martini::before {
            content: "\f000";
        }

        .fa-mask::before {
            content: "\f6fa";
        }

        .fa-mask-face::before {
            content: "\e1d7";
        }

        .fa-masks-theater::before {
            content: "\f630";
        }

        .fa-theater-masks::before {
            content: "\f630";
        }

        .fa-maximize::before {
            content: "\f31e";
        }

        .fa-expand-arrows-alt::before {
            content: "\f31e";
        }

        .fa-medal::before {
            content: "\f5a2";
        }

        .fa-memory::before {
            content: "\f538";
        }

        .fa-menorah::before {
            content: "\f676";
        }

        .fa-mercury::before {
            content: "\f223";
        }

        .fa-message::before {
            content: "\f27a";
        }

        .fa-comment-alt::before {
            content: "\f27a";
        }

        .fa-meteor::before {
            content: "\f753";
        }

        .fa-microchip::before {
            content: "\f2db";
        }

        .fa-microphone::before {
            content: "\f130";
        }

        .fa-microphone-lines::before {
            content: "\f3c9";
        }

        .fa-microphone-alt::before {
            content: "\f3c9";
        }

        .fa-microphone-lines-slash::before {
            content: "\f539";
        }

        .fa-microphone-alt-slash::before {
            content: "\f539";
        }

        .fa-microphone-slash::before {
            content: "\f131";
        }

        .fa-microscope::before {
            content: "\f610";
        }

        .fa-mill-sign::before {
            content: "\e1ed";
        }

        .fa-minimize::before {
            content: "\f78c";
        }

        .fa-compress-arrows-alt::before {
            content: "\f78c";
        }

        .fa-minus::before {
            content: "\f068";
        }

        .fa-subtract::before {
            content: "\f068";
        }

        .fa-mitten::before {
            content: "\f7b5";
        }

        .fa-mobile-button::before {
            content: "\f10b";
        }

        .fa-mobile-screen-button::before {
            content: "\f3cd";
        }

        .fa-mobile-alt::before {
            content: "\f3cd";
        }

        .fa-money-bill::before {
            content: "\f0d6";
        }

        .fa-money-bill-1::before {
            content: "\f3d1";
        }

        .fa-money-bill-alt::before {
            content: "\f3d1";
        }

        .fa-money-bill-1-wave::before {
            content: "\f53b";
        }

        .fa-money-bill-wave-alt::before {
            content: "\f53b";
        }

        .fa-money-bill-wave::before {
            content: "\f53a";
        }

        .fa-money-check::before {
            content: "\f53c";
        }

        .fa-money-check-dollar::before {
            content: "\f53d";
        }

        .fa-money-check-alt::before {
            content: "\f53d";
        }

        .fa-monument::before {
            content: "\f5a6";
        }

        .fa-moon::before {
            content: "\f186";
        }

        .fa-mortar-pestle::before {
            content: "\f5a7";
        }

        .fa-mosque::before {
            content: "\f678";
        }

        .fa-motorcycle::before {
            content: "\f21c";
        }

        .fa-mountain::before {
            content: "\f6fc";
        }

        .fa-mug-hot::before {
            content: "\f7b6";
        }

        .fa-mug-saucer::before {
            content: "\f0f4";
        }

        .fa-coffee::before {
            content: "\f0f4";
        }

        .fa-music::before {
            content: "\f001";
        }

        .fa-n::before {
            content: "\4e";
        }

        .fa-naira-sign::before {
            content: "\e1f6";
        }

        .fa-network-wired::before {
            content: "\f6ff";
        }

        .fa-neuter::before {
            content: "\f22c";
        }

        .fa-newspaper::before {
            content: "\f1ea";
        }

        .fa-not-equal::before {
            content: "\f53e";
        }

        .fa-note-sticky::before {
            content: "\f249";
        }

        .fa-sticky-note::before {
            content: "\f249";
        }

        .fa-notes-medical::before {
            content: "\f481";
        }

        .fa-o::before {
            content: "\4f";
        }

        .fa-object-group::before {
            content: "\f247";
        }

        .fa-object-ungroup::before {
            content: "\f248";
        }

        .fa-oil-can::before {
            content: "\f613";
        }

        .fa-om::before {
            content: "\f679";
        }

        .fa-otter::before {
            content: "\f700";
        }

        .fa-outdent::before {
            content: "\f03b";
        }

        .fa-dedent::before {
            content: "\f03b";
        }

        .fa-p::before {
            content: "\50";
        }

        .fa-pager::before {
            content: "\f815";
        }

        .fa-paint-brush::before {
            content: "\f1fc";
        }

        .fa-paint-roller::before {
            content: "\f5aa";
        }

        .fa-palette::before {
            content: "\f53f";
        }

        .fa-pallet::before {
            content: "\f482";
        }

        .fa-panorama::before {
            content: "\e209";
        }

        .fa-paper-plane::before {
            content: "\f1d8";
        }

        .fa-paperclip::before {
            content: "\f0c6";
        }

        .fa-parachute-box::before {
            content: "\f4cd";
        }

        .fa-paragraph::before {
            content: "\f1dd";
        }

        .fa-passport::before {
            content: "\f5ab";
        }

        .fa-paste::before {
            content: "\f0ea";
        }

        .fa-file-clipboard::before {
            content: "\f0ea";
        }

        .fa-pause::before {
            content: "\f04c";
        }

        .fa-paw::before {
            content: "\f1b0";
        }

        .fa-peace::before {
            content: "\f67c";
        }

        .fa-pen::before {
            content: "\f304";
        }

        .fa-pen-clip::before {
            content: "\f305";
        }

        .fa-pen-alt::before {
            content: "\f305";
        }

        .fa-pen-fancy::before {
            content: "\f5ac";
        }

        .fa-pen-nib::before {
            content: "\f5ad";
        }

        .fa-pen-ruler::before {
            content: "\f5ae";
        }

        .fa-pencil-ruler::before {
            content: "\f5ae";
        }

        .fa-pen-to-square::before {
            content: "\f044";
        }

        .fa-edit::before {
            content: "\f044";
        }

        .fa-pencil::before {
            content: "\f303";
        }

        .fa-pencil-alt::before {
            content: "\f303";
        }

        .fa-people-arrows-left-right::before {
            content: "\e068";
        }

        .fa-people-arrows::before {
            content: "\e068";
        }

        .fa-people-carry-box::before {
            content: "\f4ce";
        }

        .fa-people-carry::before {
            content: "\f4ce";
        }

        .fa-pepper-hot::before {
            content: "\f816";
        }

        .fa-percent::before {
            content: "\25";
        }

        .fa-percentage::before {
            content: "\25";
        }

        .fa-person::before {
            content: "\f183";
        }

        .fa-male::before {
            content: "\f183";
        }

        .fa-person-biking::before {
            content: "\f84a";
        }

        .fa-biking::before {
            content: "\f84a";
        }

        .fa-person-booth::before {
            content: "\f756";
        }

        .fa-person-dots-from-line::before {
            content: "\f470";
        }

        .fa-diagnoses::before {
            content: "\f470";
        }

        .fa-person-dress::before {
            content: "\f182";
        }

        .fa-female::before {
            content: "\f182";
        }

        .fa-person-hiking::before {
            content: "\f6ec";
        }

        .fa-hiking::before {
            content: "\f6ec";
        }

        .fa-person-praying::before {
            content: "\f683";
        }

        .fa-pray::before {
            content: "\f683";
        }

        .fa-person-running::before {
            content: "\f70c";
        }

        .fa-running::before {
            content: "\f70c";
        }

        .fa-person-skating::before {
            content: "\f7c5";
        }

        .fa-skating::before {
            content: "\f7c5";
        }

        .fa-person-skiing::before {
            content: "\f7c9";
        }

        .fa-skiing::before {
            content: "\f7c9";
        }

        .fa-person-skiing-nordic::before {
            content: "\f7ca";
        }

        .fa-skiing-nordic::before {
            content: "\f7ca";
        }

        .fa-person-snowboarding::before {
            content: "\f7ce";
        }

        .fa-snowboarding::before {
            content: "\f7ce";
        }

        .fa-person-swimming::before {
            content: "\f5c4";
        }

        .fa-swimmer::before {
            content: "\f5c4";
        }

        .fa-person-walking::before {
            content: "\f554";
        }

        .fa-walking::before {
            content: "\f554";
        }

        .fa-person-walking-with-cane::before {
            content: "\f29d";
        }

        .fa-blind::before {
            content: "\f29d";
        }

        .fa-peseta-sign::before {
            content: "\e221";
        }

        .fa-peso-sign::before {
            content: "\e222";
        }

        .fa-phone::before {
            content: "\f095";
        }

        .fa-phone-flip::before {
            content: "\f879";
        }

        .fa-phone-alt::before {
            content: "\f879";
        }

        .fa-phone-slash::before {
            content: "\f3dd";
        }

        .fa-phone-volume::before {
            content: "\f2a0";
        }

        .fa-volume-control-phone::before {
            content: "\f2a0";
        }

        .fa-photo-film::before {
            content: "\f87c";
        }

        .fa-photo-video::before {
            content: "\f87c";
        }

        .fa-piggy-bank::before {
            content: "\f4d3";
        }

        .fa-pills::before {
            content: "\f484";
        }

        .fa-pizza-slice::before {
            content: "\f818";
        }

        .fa-place-of-worship::before {
            content: "\f67f";
        }

        .fa-plane::before {
            content: "\f072";
        }

        .fa-plane-arrival::before {
            content: "\f5af";
        }

        .fa-plane-departure::before {
            content: "\f5b0";
        }

        .fa-plane-slash::before {
            content: "\e069";
        }

        .fa-play::before {
            content: "\f04b";
        }

        .fa-plug::before {
            content: "\f1e6";
        }

        .fa-plus::before {
            content: "\2b";
        }

        .fa-add::before {
            content: "\2b";
        }

        .fa-plus-minus::before {
            content: "\e43c";
        }

        .fa-podcast::before {
            content: "\f2ce";
        }

        .fa-poo::before {
            content: "\f2fe";
        }

        .fa-poo-storm::before {
            content: "\f75a";
        }

        .fa-poo-bolt::before {
            content: "\f75a";
        }

        .fa-poop::before {
            content: "\f619";
        }

        .fa-power-off::before {
            content: "\f011";
        }

        .fa-prescription::before {
            content: "\f5b1";
        }

        .fa-prescription-bottle::before {
            content: "\f485";
        }

        .fa-prescription-bottle-medical::before {
            content: "\f486";
        }

        .fa-prescription-bottle-alt::before {
            content: "\f486";
        }

        .fa-print::before {
            content: "\f02f";
        }

        .fa-pump-medical::before {
            content: "\e06a";
        }

        .fa-pump-soap::before {
            content: "\e06b";
        }

        .fa-puzzle-piece::before {
            content: "\f12e";
        }

        .fa-q::before {
            content: "\51";
        }

        .fa-qrcode::before {
            content: "\f029";
        }

        .fa-question::before {
            content: "\3f";
        }

        .fa-quidditch::before {
            content: "\f458";
        }

        .fa-broom-ball::before {
            content: "\f458";
        }

        .fa-quidditch-broom-ball::before {
            content: "\f458";
        }

        .fa-quote-left::before {
            content: "\f10d";
        }

        .fa-quote-left-alt::before {
            content: "\f10d";
        }

        .fa-quote-right::before {
            content: "\f10e";
        }

        .fa-quote-right-alt::before {
            content: "\f10e";
        }

        .fa-r::before {
            content: "\52";
        }

        .fa-radiation::before {
            content: "\f7b9";
        }

        .fa-rainbow::before {
            content: "\f75b";
        }

        .fa-receipt::before {
            content: "\f543";
        }

        .fa-record-vinyl::before {
            content: "\f8d9";
        }

        .fa-rectangle-ad::before {
            content: "\f641";
        }

        .fa-ad::before {
            content: "\f641";
        }

        .fa-rectangle-list::before {
            content: "\f022";
        }

        .fa-list-alt::before {
            content: "\f022";
        }

        .fa-rectangle-xmark::before {
            content: "\f410";
        }

        .fa-rectangle-times::before {
            content: "\f410";
        }

        .fa-times-rectangle::before {
            content: "\f410";
        }

        .fa-window-close::before {
            content: "\f410";
        }

        .fa-recycle::before {
            content: "\f1b8";
        }

        .fa-registered::before {
            content: "\f25d";
        }

        .fa-repeat::before {
            content: "\f363";
        }

        .fa-reply::before {
            content: "\f3e5";
        }

        .fa-mail-reply::before {
            content: "\f3e5";
        }

        .fa-reply-all::before {
            content: "\f122";
        }

        .fa-mail-reply-all::before {
            content: "\f122";
        }

        .fa-republican::before {
            content: "\f75e";
        }

        .fa-restroom::before {
            content: "\f7bd";
        }

        .fa-retweet::before {
            content: "\f079";
        }

        .fa-ribbon::before {
            content: "\f4d6";
        }

        .fa-right-from-bracket::before {
            content: "\f2f5";
        }

        .fa-sign-out-alt::before {
            content: "\f2f5";
        }

        .fa-right-left::before {
            content: "\f362";
        }

        .fa-exchange-alt::before {
            content: "\f362";
        }

        .fa-right-long::before {
            content: "\f30b";
        }

        .fa-long-arrow-alt-right::before {
            content: "\f30b";
        }

        .fa-right-to-bracket::before {
            content: "\f2f6";
        }

        .fa-sign-in-alt::before {
            content: "\f2f6";
        }

        .fa-ring::before {
            content: "\f70b";
        }

        .fa-road::before {
            content: "\f018";
        }

        .fa-robot::before {
            content: "\f544";
        }

        .fa-rocket::before {
            content: "\f135";
        }

        .fa-rotate::before {
            content: "\f2f1";
        }

        .fa-sync-alt::before {
            content: "\f2f1";
        }

        .fa-rotate-left::before {
            content: "\f2ea";
        }

        .fa-rotate-back::before {
            content: "\f2ea";
        }

        .fa-rotate-backward::before {
            content: "\f2ea";
        }

        .fa-undo-alt::before {
            content: "\f2ea";
        }

        .fa-route::before {
            content: "\f4d7";
        }

        .fa-rss::before {
            content: "\f09e";
        }

        .fa-feed::before {
            content: "\f09e";
        }

        .fa-ruble-sign::before {
            content: "\f158";
        }

        .fa-rouble::before {
            content: "\f158";
        }

        .fa-rub::before {
            content: "\f158";
        }

        .fa-ruble::before {
            content: "\f158";
        }

        .fa-ruler::before {
            content: "\f545";
        }

        .fa-ruler-combined::before {
            content: "\f546";
        }

        .fa-ruler-horizontal::before {
            content: "\f547";
        }

        .fa-ruler-vertical::before {
            content: "\f548";
        }

        .fa-rupee-sign::before {
            content: "\f156";
        }

        .fa-rupee::before {
            content: "\f156";
        }

        .fa-rupiah-sign::before {
            content: "\e23d";
        }

        .fa-s::before {
            content: "\53";
        }

        .fa-sailboat::before {
            content: "\e445";
        }

        .fa-satellite::before {
            content: "\f7bf";
        }

        .fa-satellite-dish::before {
            content: "\f7c0";
        }

        .fa-scale-balanced::before {
            content: "\f24e";
        }

        .fa-balance-scale::before {
            content: "\f24e";
        }

        .fa-scale-unbalanced::before {
            content: "\f515";
        }

        .fa-balance-scale-left::before {
            content: "\f515";
        }

        .fa-scale-unbalanced-flip::before {
            content: "\f516";
        }

        .fa-balance-scale-right::before {
            content: "\f516";
        }

        .fa-school::before {
            content: "\f549";
        }

        .fa-scissors::before {
            content: "\f0c4";
        }

        .fa-cut::before {
            content: "\f0c4";
        }

        .fa-screwdriver::before {
            content: "\f54a";
        }

        .fa-screwdriver-wrench::before {
            content: "\f7d9";
        }

        .fa-tools::before {
            content: "\f7d9";
        }

        .fa-scroll::before {
            content: "\f70e";
        }

        .fa-scroll-torah::before {
            content: "\f6a0";
        }

        .fa-torah::before {
            content: "\f6a0";
        }

        .fa-sd-card::before {
            content: "\f7c2";
        }

        .fa-section::before {
            content: "\e447";
        }

        .fa-seedling::before {
            content: "\f4d8";
        }

        .fa-sprout::before {
            content: "\f4d8";
        }

        .fa-server::before {
            content: "\f233";
        }

        .fa-shapes::before {
            content: "\f61f";
        }

        .fa-triangle-circle-square::before {
            content: "\f61f";
        }

        .fa-share::before {
            content: "\f064";
        }

        .fa-arrow-turn-right::before {
            content: "\f064";
        }

        .fa-mail-forward::before {
            content: "\f064";
        }

        .fa-share-from-square::before {
            content: "\f14d";
        }

        .fa-share-square::before {
            content: "\f14d";
        }

        .fa-share-nodes::before {
            content: "\f1e0";
        }

        .fa-share-alt::before {
            content: "\f1e0";
        }

        .fa-shekel-sign::before {
            content: "\f20b";
        }

        .fa-ils::before {
            content: "\f20b";
        }

        .fa-shekel::before {
            content: "\f20b";
        }

        .fa-sheqel::before {
            content: "\f20b";
        }

        .fa-sheqel-sign::before {
            content: "\f20b";
        }

        .fa-shield-blank::before {
            content: "\f3ed";
        }

        .fa-shield-alt::before {
            content: "\f3ed";
        }

        .fa-shield-virus::before {
            content: "\e06c";
        }

        .fa-ship::before {
            content: "\f21a";
        }

        .fa-shirt::before {
            content: "\f553";
        }

        .fa-t-shirt::before {
            content: "\f553";
        }

        .fa-tshirt::before {
            content: "\f553";
        }

        .fa-shoe-prints::before {
            content: "\f54b";
        }

        .fa-shop::before {
            content: "\f54f";
        }

        .fa-store-alt::before {
            content: "\f54f";
        }

        .fa-shop-slash::before {
            content: "\e070";
        }

        .fa-store-alt-slash::before {
            content: "\e070";
        }

        .fa-shower::before {
            content: "\f2cc";
        }

        .fa-shuffle::before {
            content: "\f074";
        }

        .fa-random::before {
            content: "\f074";
        }

        .fa-shuttle-space::before {
            content: "\f197";
        }

        .fa-space-shuttle::before {
            content: "\f197";
        }

        .fa-sign-hanging::before {
            content: "\f4d9";
        }

        .fa-sign::before {
            content: "\f4d9";
        }

        .fa-signal::before {
            content: "\f012";
        }

        .fa-signal-5::before {
            content: "\f012";
        }

        .fa-signal-perfect::before {
            content: "\f012";
        }

        .fa-signature::before {
            content: "\f5b7";
        }

        .fa-signs-post::before {
            content: "\f277";
        }

        .fa-map-signs::before {
            content: "\f277";
        }

        .fa-sim-card::before {
            content: "\f7c4";
        }

        .fa-sink::before {
            content: "\e06d";
        }

        .fa-sitemap::before {
            content: "\f0e8";
        }

        .fa-skull::before {
            content: "\f54c";
        }

        .fa-skull-crossbones::before {
            content: "\f714";
        }

        .fa-slash::before {
            content: "\f715";
        }

        .fa-sleigh::before {
            content: "\f7cc";
        }

        .fa-sliders::before {
            content: "\f1de";
        }

        .fa-sliders-h::before {
            content: "\f1de";
        }

        .fa-smog::before {
            content: "\f75f";
        }

        .fa-smoking::before {
            content: "\f48d";
        }

        .fa-snowflake::before {
            content: "\f2dc";
        }

        .fa-snowman::before {
            content: "\f7d0";
        }

        .fa-snowplow::before {
            content: "\f7d2";
        }

        .fa-soap::before {
            content: "\e06e";
        }

        .fa-socks::before {
            content: "\f696";
        }

        .fa-solar-panel::before {
            content: "\f5ba";
        }

        .fa-sort::before {
            content: "\f0dc";
        }

        .fa-unsorted::before {
            content: "\f0dc";
        }

        .fa-sort-down::before {
            content: "\f0dd";
        }

        .fa-sort-desc::before {
            content: "\f0dd";
        }

        .fa-sort-up::before {
            content: "\f0de";
        }

        .fa-sort-asc::before {
            content: "\f0de";
        }

        .fa-spa::before {
            content: "\f5bb";
        }

        .fa-spaghetti-monster-flying::before {
            content: "\f67b";
        }

        .fa-pastafarianism::before {
            content: "\f67b";
        }

        .fa-spell-check::before {
            content: "\f891";
        }

        .fa-spider::before {
            content: "\f717";
        }

        .fa-spinner::before {
            content: "\f110";
        }

        .fa-splotch::before {
            content: "\f5bc";
        }

        .fa-spoon::before {
            content: "\f2e5";
        }

        .fa-utensil-spoon::before {
            content: "\f2e5";
        }

        .fa-spray-can::before {
            content: "\f5bd";
        }

        .fa-spray-can-sparkles::before {
            content: "\f5d0";
        }

        .fa-air-freshener::before {
            content: "\f5d0";
        }

        .fa-square::before {
            content: "\f0c8";
        }

        .fa-square-caret-down::before {
            content: "\f150";
        }

        .fa-caret-square-down::before {
            content: "\f150";
        }

        .fa-square-caret-left::before {
            content: "\f191";
        }

        .fa-caret-square-left::before {
            content: "\f191";
        }

        .fa-square-caret-right::before {
            content: "\f152";
        }

        .fa-caret-square-right::before {
            content: "\f152";
        }

        .fa-square-caret-up::before {
            content: "\f151";
        }

        .fa-caret-square-up::before {
            content: "\f151";
        }

        .fa-square-check::before {
            content: "\f14a";
        }

        .fa-check-square::before {
            content: "\f14a";
        }

        .fa-square-envelope::before {
            content: "\f199";
        }

        .fa-envelope-square::before {
            content: "\f199";
        }

        .fa-square-full::before {
            content: "\f45c";
        }

        .fa-square-h::before {
            content: "\f0fd";
        }

        .fa-h-square::before {
            content: "\f0fd";
        }

        .fa-square-minus::before {
            content: "\f146";
        }

        .fa-minus-square::before {
            content: "\f146";
        }

        .fa-square-parking::before {
            content: "\f540";
        }

        .fa-parking::before {
            content: "\f540";
        }

        .fa-square-pen::before {
            content: "\f14b";
        }

        .fa-pen-square::before {
            content: "\f14b";
        }

        .fa-pencil-square::before {
            content: "\f14b";
        }

        .fa-square-phone::before {
            content: "\f098";
        }

        .fa-phone-square::before {
            content: "\f098";
        }

        .fa-square-phone-flip::before {
            content: "\f87b";
        }

        .fa-phone-square-alt::before {
            content: "\f87b";
        }

        .fa-square-plus::before {
            content: "\f0fe";
        }

        .fa-plus-square::before {
            content: "\f0fe";
        }

        .fa-square-poll-horizontal::before {
            content: "\f682";
        }

        .fa-poll-h::before {
            content: "\f682";
        }

        .fa-square-poll-vertical::before {
            content: "\f681";
        }

        .fa-poll::before {
            content: "\f681";
        }

        .fa-square-root-variable::before {
            content: "\f698";
        }

        .fa-square-root-alt::before {
            content: "\f698";
        }

        .fa-square-rss::before {
            content: "\f143";
        }

        .fa-rss-square::before {
            content: "\f143";
        }

        .fa-square-share-nodes::before {
            content: "\f1e1";
        }

        .fa-share-alt-square::before {
            content: "\f1e1";
        }

        .fa-square-up-right::before {
            content: "\f360";
        }

        .fa-external-link-square-alt::before {
            content: "\f360";
        }

        .fa-stairs::before {
            content: "\e289";
        }

        .fa-stamp::before {
            content: "\f5bf";
        }

        .fa-star::before {
            content: "\f005";
        }

        .fa-star-and-crescent::before {
            content: "\f699";
        }

        .fa-star-half::before {
            content: "\f089";
        }

        .fa-star-half-stroke::before {
            content: "\f5c0";
        }

        .fa-star-half-alt::before {
            content: "\f5c0";
        }

        .fa-star-of-david::before {
            content: "\f69a";
        }

        .fa-star-of-life::before {
            content: "\f621";
        }

        .fa-sterling-sign::before {
            content: "\f154";
        }

        .fa-gbp::before {
            content: "\f154";
        }

        .fa-pound-sign::before {
            content: "\f154";
        }

        .fa-stethoscope::before {
            content: "\f0f1";
        }

        .fa-stop::before {
            content: "\f04d";
        }

        .fa-stopwatch::before {
            content: "\f2f2";
        }

        .fa-stopwatch-20::before {
            content: "\e06f";
        }

        .fa-store::before {
            content: "\f54e";
        }

        .fa-store-slash::before {
            content: "\e071";
        }

        .fa-street-view::before {
            content: "\f21d";
        }

        .fa-strikethrough::before {
            content: "\f0cc";
        }

        .fa-stroopwafel::before {
            content: "\f551";
        }

        .fa-subscript::before {
            content: "\f12c";
        }

        .fa-suitcase::before {
            content: "\f0f2";
        }

        .fa-suitcase-medical::before {
            content: "\f0fa";
        }

        .fa-medkit::before {
            content: "\f0fa";
        }

        .fa-suitcase-rolling::before {
            content: "\f5c1";
        }

        .fa-sun::before {
            content: "\f185";
        }

        .fa-superscript::before {
            content: "\f12b";
        }

        .fa-swatchbook::before {
            content: "\f5c3";
        }

        .fa-synagogue::before {
            content: "\f69b";
        }

        .fa-syringe::before {
            content: "\f48e";
        }

        .fa-t::before {
            content: "\54";
        }

        .fa-table::before {
            content: "\f0ce";
        }

        .fa-table-cells::before {
            content: "\f00a";
        }

        .fa-th::before {
            content: "\f00a";
        }

        .fa-table-cells-large::before {
            content: "\f009";
        }

        .fa-th-large::before {
            content: "\f009";
        }

        .fa-table-columns::before {
            content: "\f0db";
        }

        .fa-columns::before {
            content: "\f0db";
        }

        .fa-table-list::before {
            content: "\f00b";
        }

        .fa-th-list::before {
            content: "\f00b";
        }

        .fa-table-tennis-paddle-ball::before {
            content: "\f45d";
        }

        .fa-ping-pong-paddle-ball::before {
            content: "\f45d";
        }

        .fa-table-tennis::before {
            content: "\f45d";
        }

        .fa-tablet-button::before {
            content: "\f10a";
        }

        .fa-tablet-screen-button::before {
            content: "\f3fa";
        }

        .fa-tablet-alt::before {
            content: "\f3fa";
        }

        .fa-tablets::before {
            content: "\f490";
        }

        .fa-tachograph-digital::before {
            content: "\f566";
        }

        .fa-digital-tachograph::before {
            content: "\f566";
        }

        .fa-tag::before {
            content: "\f02b";
        }

        .fa-tags::before {
            content: "\f02c";
        }

        .fa-tape::before {
            content: "\f4db";
        }

        .fa-taxi::before {
            content: "\f1ba";
        }

        .fa-cab::before {
            content: "\f1ba";
        }

        .fa-teeth::before {
            content: "\f62e";
        }

        .fa-teeth-open::before {
            content: "\f62f";
        }

        .fa-temperature-empty::before {
            content: "\f2cb";
        }

        .fa-temperature-0::before {
            content: "\f2cb";
        }

        .fa-thermometer-0::before {
            content: "\f2cb";
        }

        .fa-thermometer-empty::before {
            content: "\f2cb";
        }

        .fa-temperature-full::before {
            content: "\f2c7";
        }

        .fa-temperature-4::before {
            content: "\f2c7";
        }

        .fa-thermometer-4::before {
            content: "\f2c7";
        }

        .fa-thermometer-full::before {
            content: "\f2c7";
        }

        .fa-temperature-half::before {
            content: "\f2c9";
        }

        .fa-temperature-2::before {
            content: "\f2c9";
        }

        .fa-thermometer-2::before {
            content: "\f2c9";
        }

        .fa-thermometer-half::before {
            content: "\f2c9";
        }

        .fa-temperature-high::before {
            content: "\f769";
        }

        .fa-temperature-low::before {
            content: "\f76b";
        }

        .fa-temperature-quarter::before {
            content: "\f2ca";
        }

        .fa-temperature-1::before {
            content: "\f2ca";
        }

        .fa-thermometer-1::before {
            content: "\f2ca";
        }

        .fa-thermometer-quarter::before {
            content: "\f2ca";
        }

        .fa-temperature-three-quarters::before {
            content: "\f2c8";
        }

        .fa-temperature-3::before {
            content: "\f2c8";
        }

        .fa-thermometer-3::before {
            content: "\f2c8";
        }

        .fa-thermometer-three-quarters::before {
            content: "\f2c8";
        }

        .fa-tenge-sign::before {
            content: "\f7d7";
        }

        .fa-tenge::before {
            content: "\f7d7";
        }

        .fa-terminal::before {
            content: "\f120";
        }

        .fa-text-height::before {
            content: "\f034";
        }

        .fa-text-slash::before {
            content: "\f87d";
        }

        .fa-remove-format::before {
            content: "\f87d";
        }

        .fa-text-width::before {
            content: "\f035";
        }

        .fa-thermometer::before {
            content: "\f491";
        }

        .fa-thumbs-down::before {
            content: "\f165";
        }

        .fa-thumbs-up::before {
            content: "\f164";
        }

        .fa-thumbtack::before {
            content: "\f08d";
        }

        .fa-thumb-tack::before {
            content: "\f08d";
        }

        .fa-ticket-simple::before {
            content: "\f3ff";
        }

        .fa-ticket-alt::before {
            content: "\f3ff";
        }

        .fa-timeline::before {
            content: "\e29c";
        }

        .fa-toggle-off::before {
            content: "\f204";
        }

        .fa-toggle-on::before {
            content: "\f205";
        }

        .fa-toilet::before {
            content: "\f7d8";
        }

        .fa-toilet-paper::before {
            content: "\f71e";
        }

        .fa-toilet-paper-slash::before {
            content: "\e072";
        }

        .fa-toolbox::before {
            content: "\f552";
        }

        .fa-tooth::before {
            content: "\f5c9";
        }

        .fa-torii-gate::before {
            content: "\f6a1";
        }

        .fa-tower-broadcast::before {
            content: "\f519";
        }

        .fa-broadcast-tower::before {
            content: "\f519";
        }

        .fa-tractor::before {
            content: "\f722";
        }

        .fa-trademark::before {
            content: "\f25c";
        }

        .fa-traffic-light::before {
            content: "\f637";
        }

        .fa-trailer::before {
            content: "\e041";
        }

        .fa-train::before {
            content: "\f238";
        }

        .fa-train-subway::before {
            content: "\f239";
        }

        .fa-subway::before {
            content: "\f239";
        }

        .fa-train-tram::before {
            content: "\f7da";
        }

        .fa-tram::before {
            content: "\f7da";
        }

        .fa-transgender::before {
            content: "\f225";
        }

        .fa-transgender-alt::before {
            content: "\f225";
        }

        .fa-trash::before {
            content: "\f1f8";
        }

        .fa-trash-arrow-up::before {
            content: "\f829";
        }

        .fa-trash-restore::before {
            content: "\f829";
        }

        .fa-trash-can::before {
            content: "\f2ed";
        }

        .fa-trash-alt::before {
            content: "\f2ed";
        }

        .fa-trash-can-arrow-up::before {
            content: "\f82a";
        }

        .fa-trash-restore-alt::before {
            content: "\f82a";
        }

        .fa-tree::before {
            content: "\f1bb";
        }

        .fa-triangle-exclamation::before {
            content: "\f071";
        }

        .fa-exclamation-triangle::before {
            content: "\f071";
        }

        .fa-warning::before {
            content: "\f071";
        }

        .fa-trophy::before {
            content: "\f091";
        }

        .fa-truck::before {
            content: "\f0d1";
        }

        .fa-truck-fast::before {
            content: "\f48b";
        }

        .fa-shipping-fast::before {
            content: "\f48b";
        }

        .fa-truck-medical::before {
            content: "\f0f9";
        }

        .fa-ambulance::before {
            content: "\f0f9";
        }

        .fa-truck-monster::before {
            content: "\f63b";
        }

        .fa-truck-moving::before {
            content: "\f4df";
        }

        .fa-truck-pickup::before {
            content: "\f63c";
        }

        .fa-truck-ramp-box::before {
            content: "\f4de";
        }

        .fa-truck-loading::before {
            content: "\f4de";
        }

        .fa-tty::before {
            content: "\f1e4";
        }

        .fa-teletype::before {
            content: "\f1e4";
        }

        .fa-turkish-lira-sign::before {
            content: "\e2bb";
        }

        .fa-try::before {
            content: "\e2bb";
        }

        .fa-turkish-lira::before {
            content: "\e2bb";
        }

        .fa-turn-down::before {
            content: "\f3be";
        }

        .fa-level-down-alt::before {
            content: "\f3be";
        }

        .fa-turn-up::before {
            content: "\f3bf";
        }

        .fa-level-up-alt::before {
            content: "\f3bf";
        }

        .fa-tv::before {
            content: "\f26c";
        }

        .fa-television::before {
            content: "\f26c";
        }

        .fa-tv-alt::before {
            content: "\f26c";
        }

        .fa-u::before {
            content: "\55";
        }

        .fa-umbrella::before {
            content: "\f0e9";
        }

        .fa-umbrella-beach::before {
            content: "\f5ca";
        }

        .fa-underline::before {
            content: "\f0cd";
        }

        .fa-universal-access::before {
            content: "\f29a";
        }

        .fa-unlock::before {
            content: "\f09c";
        }

        .fa-unlock-keyhole::before {
            content: "\f13e";
        }

        .fa-unlock-alt::before {
            content: "\f13e";
        }

        .fa-up-down::before {
            content: "\f338";
        }

        .fa-arrows-alt-v::before {
            content: "\f338";
        }

        .fa-up-down-left-right::before {
            content: "\f0b2";
        }

        .fa-arrows-alt::before {
            content: "\f0b2";
        }

        .fa-up-long::before {
            content: "\f30c";
        }

        .fa-long-arrow-alt-up::before {
            content: "\f30c";
        }

        .fa-up-right-and-down-left-from-center::before {
            content: "\f424";
        }

        .fa-expand-alt::before {
            content: "\f424";
        }

        .fa-up-right-from-square::before {
            content: "\f35d";
        }

        .fa-external-link-alt::before {
            content: "\f35d";
        }

        .fa-upload::before {
            content: "\f093";
        }

        .fa-user::before {
            content: "\f007";
        }

        .fa-user-astronaut::before {
            content: "\f4fb";
        }

        .fa-user-check::before {
            content: "\f4fc";
        }

        .fa-user-clock::before {
            content: "\f4fd";
        }

        .fa-user-doctor::before {
            content: "\f0f0";
        }

        .fa-user-md::before {
            content: "\f0f0";
        }

        .fa-user-gear::before {
            content: "\f4fe";
        }

        .fa-user-cog::before {
            content: "\f4fe";
        }

        .fa-user-graduate::before {
            content: "\f501";
        }

        .fa-user-group::before {
            content: "\f500";
        }

        .fa-user-friends::before {
            content: "\f500";
        }

        .fa-user-injured::before {
            content: "\f728";
        }

        .fa-user-large::before {
            content: "\f406";
        }

        .fa-user-alt::before {
            content: "\f406";
        }

        .fa-user-large-slash::before {
            content: "\f4fa";
        }

        .fa-user-alt-slash::before {
            content: "\f4fa";
        }

        .fa-user-lock::before {
            content: "\f502";
        }

        .fa-user-minus::before {
            content: "\f503";
        }

        .fa-user-ninja::before {
            content: "\f504";
        }

        .fa-user-nurse::before {
            content: "\f82f";
        }

        .fa-user-pen::before {
            content: "\f4ff";
        }

        .fa-user-edit::before {
            content: "\f4ff";
        }

        .fa-user-plus::before {
            content: "\f234";
        }

        .fa-user-secret::before {
            content: "\f21b";
        }

        .fa-user-shield::before {
            content: "\f505";
        }

        .fa-user-slash::before {
            content: "\f506";
        }

        .fa-user-tag::before {
            content: "\f507";
        }

        .fa-user-tie::before {
            content: "\f508";
        }

        .fa-user-xmark::before {
            content: "\f235";
        }

        .fa-user-times::before {
            content: "\f235";
        }

        .fa-users::before {
            content: "\f0c0";
        }

        .fa-group::before {
            content: "\f0c0";
        }

        .fa-users-gear::before {
            content: "\f509";
        }

        .fa-users-cog::before {
            content: "\f509";
        }

        .fa-users-slash::before {
            content: "\e073";
        }

        .fa-utensils::before {
            content: "\f2e7";
        }

        .fa-cutlery::before {
            content: "\f2e7";
        }

        .fa-v::before {
            content: "\56";
        }

        .fa-van-shuttle::before {
            content: "\f5b6";
        }

        .fa-shuttle-van::before {
            content: "\f5b6";
        }

        .fa-vault::before {
            content: "\e2c5";
        }

        .fa-vector-square::before {
            content: "\f5cb";
        }

        .fa-venus::before {
            content: "\f221";
        }

        .fa-venus-double::before {
            content: "\f226";
        }

        .fa-venus-mars::before {
            content: "\f228";
        }

        .fa-vest::before {
            content: "\e085";
        }

        .fa-vest-patches::before {
            content: "\e086";
        }

        .fa-vial::before {
            content: "\f492";
        }

        .fa-vials::before {
            content: "\f493";
        }

        .fa-video::before {
            content: "\f03d";
        }

        .fa-video-camera::before {
            content: "\f03d";
        }

        .fa-video-slash::before {
            content: "\f4e2";
        }

        .fa-vihara::before {
            content: "\f6a7";
        }

        .fa-virus::before {
            content: "\e074";
        }

        .fa-virus-slash::before {
            content: "\e075";
        }

        .fa-viruses::before {
            content: "\e076";
        }

        .fa-voicemail::before {
            content: "\f897";
        }

        .fa-volleyball::before {
            content: "\f45f";
        }

        .fa-volleyball-ball::before {
            content: "\f45f";
        }

        .fa-volume-high::before {
            content: "\f028";
        }

        .fa-volume-up::before {
            content: "\f028";
        }

        .fa-volume-low::before {
            content: "\f027";
        }

        .fa-volume-down::before {
            content: "\f027";
        }

        .fa-volume-off::before {
            content: "\f026";
        }

        .fa-volume-xmark::before {
            content: "\f6a9";
        }

        .fa-volume-mute::before {
            content: "\f6a9";
        }

        .fa-volume-times::before {
            content: "\f6a9";
        }

        .fa-vr-cardboard::before {
            content: "\f729";
        }

        .fa-w::before {
            content: "\57";
        }

        .fa-wallet::before {
            content: "\f555";
        }

        .fa-wand-magic::before {
            content: "\f0d0";
        }

        .fa-magic::before {
            content: "\f0d0";
        }

        .fa-warehouse::before {
            content: "\f494";
        }

        .fa-water::before {
            content: "\f773";
        }

        .fa-water-ladder::before {
            content: "\f5c5";
        }

        .fa-ladder-water::before {
            content: "\f5c5";
        }

        .fa-swimming-pool::before {
            content: "\f5c5";
        }

        .fa-wave-square::before {
            content: "\f83e";
        }

        .fa-weight-hanging::before {
            content: "\f5cd";
        }

        .fa-weight-scale::before {
            content: "\f496";
        }

        .fa-weight::before {
            content: "\f496";
        }

        .fa-wheelchair::before {
            content: "\f193";
        }

        .fa-whiskey-glass::before {
            content: "\f7a0";
        }

        .fa-glass-whiskey::before {
            content: "\f7a0";
        }

        .fa-wifi::before {
            content: "\f1eb";
        }

        .fa-wifi-3::before {
            content: "\f1eb";
        }

        .fa-wifi-strong::before {
            content: "\f1eb";
        }

        .fa-wind::before {
            content: "\f72e";
        }

        .fa-window-maximize::before {
            content: "\f2d0";
        }

        .fa-window-minimize::before {
            content: "\f2d1";
        }

        .fa-window-restore::before {
            content: "\f2d2";
        }

        .fa-wine-bottle::before {
            content: "\f72f";
        }

        .fa-wine-glass::before {
            content: "\f4e3";
        }

        .fa-wine-glass-empty::before {
            content: "\f5ce";
        }

        .fa-wine-glass-alt::before {
            content: "\f5ce";
        }

        .fa-won-sign::before {
            content: "\f159";
        }

        .fa-krw::before {
            content: "\f159";
        }

        .fa-won::before {
            content: "\f159";
        }

        .fa-wrench::before {
            content: "\f0ad";
        }

        .fa-x::before {
            content: "\58";
        }

        .fa-x-ray::before {
            content: "\f497";
        }

        .fa-xmark::before {
            content: "\f00d";
        }

        .fa-close::before {
            content: "\f00d";
        }

        .fa-multiply::before {
            content: "\f00d";
        }

        .fa-remove::before {
            content: "\f00d";
        }

        .fa-times::before {
            content: "\f00d";
        }

        .fa-y::before {
            content: "\59";
        }

        .fa-yen-sign::before {
            content: "\f157";
        }

        .fa-cny::before {
            content: "\f157";
        }

        .fa-jpy::before {
            content: "\f157";
        }

        .fa-rmb::before {
            content: "\f157";
        }

        .fa-yen::before {
            content: "\f157";
        }

        .fa-yin-yang::before {
            content: "\f6ad";
        }

        .fa-z::before {
            content: "\5a";
        }

        .sr-only,
        .fa-sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .sr-only-focusable:not(:focus),
        .fa-sr-only-focusable:not(:focus) {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        @font-face {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url("<?=base_url("public/admin/webfonts/fa-brands-400.woff2")?>") format("woff2"), url("<?=base_url("public/admin/webfonts/fa-brands-400.ttf")?>") format("truetype");
        }

        .fab,
        .fa-brands {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa-42-group:before {
            content: "\e080";
        }

        .fa-innosoft:before {
            content: "\e080";
        }

        .fa-500px:before {
            content: "\f26e";
        }

        .fa-accessible-icon:before {
            content: "\f368";
        }

        .fa-accusoft:before {
            content: "\f369";
        }

        .fa-acquisitions-incorporated:before {
            content: "\f6af";
        }

        .fa-adn:before {
            content: "\f170";
        }

        .fa-adversal:before {
            content: "\f36a";
        }

        .fa-affiliatetheme:before {
            content: "\f36b";
        }

        .fa-airbnb:before {
            content: "\f834";
        }

        .fa-algolia:before {
            content: "\f36c";
        }

        .fa-alipay:before {
            content: "\f642";
        }

        .fa-amazon:before {
            content: "\f270";
        }

        .fa-amazon-pay:before {
            content: "\f42c";
        }

        .fa-amilia:before {
            content: "\f36d";
        }

        .fa-android:before {
            content: "\f17b";
        }

        .fa-angellist:before {
            content: "\f209";
        }

        .fa-angrycreative:before {
            content: "\f36e";
        }

        .fa-angular:before {
            content: "\f420";
        }

        .fa-app-store:before {
            content: "\f36f";
        }

        .fa-app-store-ios:before {
            content: "\f370";
        }

        .fa-apper:before {
            content: "\f371";
        }

        .fa-apple:before {
            content: "\f179";
        }

        .fa-apple-pay:before {
            content: "\f415";
        }

        .fa-artstation:before {
            content: "\f77a";
        }

        .fa-asymmetrik:before {
            content: "\f372";
        }

        .fa-atlassian:before {
            content: "\f77b";
        }

        .fa-audible:before {
            content: "\f373";
        }

        .fa-autoprefixer:before {
            content: "\f41c";
        }

        .fa-avianex:before {
            content: "\f374";
        }

        .fa-aviato:before {
            content: "\f421";
        }

        .fa-aws:before {
            content: "\f375";
        }

        .fa-bandcamp:before {
            content: "\f2d5";
        }

        .fa-battle-net:before {
            content: "\f835";
        }

        .fa-behance:before {
            content: "\f1b4";
        }

        .fa-behance-square:before {
            content: "\f1b5";
        }

        .fa-bilibili:before {
            content: "\e3d9";
        }

        .fa-bimobject:before {
            content: "\f378";
        }

        .fa-bitbucket:before {
            content: "\f171";
        }

        .fa-bitcoin:before {
            content: "\f379";
        }

        .fa-bity:before {
            content: "\f37a";
        }

        .fa-black-tie:before {
            content: "\f27e";
        }

        .fa-blackberry:before {
            content: "\f37b";
        }

        .fa-blogger:before {
            content: "\f37c";
        }

        .fa-blogger-b:before {
            content: "\f37d";
        }

        .fa-bluetooth:before {
            content: "\f293";
        }

        .fa-bluetooth-b:before {
            content: "\f294";
        }

        .fa-bootstrap:before {
            content: "\f836";
        }

        .fa-bots:before {
            content: "\e340";
        }

        .fa-btc:before {
            content: "\f15a";
        }

        .fa-buffer:before {
            content: "\f837";
        }

        .fa-buromobelexperte:before {
            content: "\f37f";
        }

        .fa-buy-n-large:before {
            content: "\f8a6";
        }

        .fa-buysellads:before {
            content: "\f20d";
        }

        .fa-canadian-maple-leaf:before {
            content: "\f785";
        }

        .fa-cc-amazon-pay:before {
            content: "\f42d";
        }

        .fa-cc-amex:before {
            content: "\f1f3";
        }

        .fa-cc-apple-pay:before {
            content: "\f416";
        }

        .fa-cc-diners-club:before {
            content: "\f24c";
        }

        .fa-cc-discover:before {
            content: "\f1f2";
        }

        .fa-cc-jcb:before {
            content: "\f24b";
        }

        .fa-cc-mastercard:before {
            content: "\f1f1";
        }

        .fa-cc-paypal:before {
            content: "\f1f4";
        }

        .fa-cc-stripe:before {
            content: "\f1f5";
        }

        .fa-cc-visa:before {
            content: "\f1f0";
        }

        .fa-centercode:before {
            content: "\f380";
        }

        .fa-centos:before {
            content: "\f789";
        }

        .fa-chrome:before {
            content: "\f268";
        }

        .fa-chromecast:before {
            content: "\f838";
        }

        .fa-cloudflare:before {
            content: "\e07d";
        }

        .fa-cloudscale:before {
            content: "\f383";
        }

        .fa-cloudsmith:before {
            content: "\f384";
        }

        .fa-cloudversify:before {
            content: "\f385";
        }

        .fa-cmplid:before {
            content: "\e360";
        }

        .fa-codepen:before {
            content: "\f1cb";
        }

        .fa-codiepie:before {
            content: "\f284";
        }

        .fa-confluence:before {
            content: "\f78d";
        }

        .fa-connectdevelop:before {
            content: "\f20e";
        }

        .fa-contao:before {
            content: "\f26d";
        }

        .fa-cotton-bureau:before {
            content: "\f89e";
        }

        .fa-cpanel:before {
            content: "\f388";
        }

        .fa-creative-commons:before {
            content: "\f25e";
        }

        .fa-creative-commons-by:before {
            content: "\f4e7";
        }

        .fa-creative-commons-nc:before {
            content: "\f4e8";
        }

        .fa-creative-commons-nc-eu:before {
            content: "\f4e9";
        }

        .fa-creative-commons-nc-jp:before {
            content: "\f4ea";
        }

        .fa-creative-commons-nd:before {
            content: "\f4eb";
        }

        .fa-creative-commons-pd:before {
            content: "\f4ec";
        }

        .fa-creative-commons-pd-alt:before {
            content: "\f4ed";
        }

        .fa-creative-commons-remix:before {
            content: "\f4ee";
        }

        .fa-creative-commons-sa:before {
            content: "\f4ef";
        }

        .fa-creative-commons-sampling:before {
            content: "\f4f0";
        }

        .fa-creative-commons-sampling-plus:before {
            content: "\f4f1";
        }

        .fa-creative-commons-share:before {
            content: "\f4f2";
        }

        .fa-creative-commons-zero:before {
            content: "\f4f3";
        }

        .fa-critical-role:before {
            content: "\f6c9";
        }

        .fa-css3:before {
            content: "\f13c";
        }

        .fa-css3-alt:before {
            content: "\f38b";
        }

        .fa-cuttlefish:before {
            content: "\f38c";
        }

        .fa-d-and-d:before {
            content: "\f38d";
        }

        .fa-d-and-d-beyond:before {
            content: "\f6ca";
        }

        .fa-dailymotion:before {
            content: "\e052";
        }

        .fa-dashcube:before {
            content: "\f210";
        }

        .fa-deezer:before {
            content: "\e077";
        }

        .fa-delicious:before {
            content: "\f1a5";
        }

        .fa-deploydog:before {
            content: "\f38e";
        }

        .fa-deskpro:before {
            content: "\f38f";
        }

        .fa-dev:before {
            content: "\f6cc";
        }

        .fa-deviantart:before {
            content: "\f1bd";
        }

        .fa-dhl:before {
            content: "\f790";
        }

        .fa-diaspora:before {
            content: "\f791";
        }

        .fa-digg:before {
            content: "\f1a6";
        }

        .fa-digital-ocean:before {
            content: "\f391";
        }

        .fa-discord:before {
            content: "\f392";
        }

        .fa-discourse:before {
            content: "\f393";
        }

        .fa-dochub:before {
            content: "\f394";
        }

        .fa-docker:before {
            content: "\f395";
        }

        .fa-draft2digital:before {
            content: "\f396";
        }

        .fa-dribbble:before {
            content: "\f17d";
        }

        .fa-dribbble-square:before {
            content: "\f397";
        }

        .fa-dropbox:before {
            content: "\f16b";
        }

        .fa-drupal:before {
            content: "\f1a9";
        }

        .fa-dyalog:before {
            content: "\f399";
        }

        .fa-earlybirds:before {
            content: "\f39a";
        }

        .fa-ebay:before {
            content: "\f4f4";
        }

        .fa-edge:before {
            content: "\f282";
        }

        .fa-edge-legacy:before {
            content: "\e078";
        }

        .fa-elementor:before {
            content: "\f430";
        }

        .fa-ello:before {
            content: "\f5f1";
        }

        .fa-ember:before {
            content: "\f423";
        }

        .fa-empire:before {
            content: "\f1d1";
        }

        .fa-envira:before {
            content: "\f299";
        }

        .fa-erlang:before {
            content: "\f39d";
        }

        .fa-ethereum:before {
            content: "\f42e";
        }

        .fa-etsy:before {
            content: "\f2d7";
        }

        .fa-evernote:before {
            content: "\f839";
        }

        .fa-expeditedssl:before {
            content: "\f23e";
        }

        .fa-facebook:before {
            content: "\f09a";
        }

        .fa-facebook-f:before {
            content: "\f39e";
        }

        .fa-facebook-messenger:before {
            content: "\f39f";
        }

        .fa-facebook-square:before {
            content: "\f082";
        }

        .fa-fantasy-flight-games:before {
            content: "\f6dc";
        }

        .fa-fedex:before {
            content: "\f797";
        }

        .fa-fedora:before {
            content: "\f798";
        }

        .fa-figma:before {
            content: "\f799";
        }

        .fa-firefox:before {
            content: "\f269";
        }

        .fa-firefox-browser:before {
            content: "\e007";
        }

        .fa-first-order:before {
            content: "\f2b0";
        }

        .fa-first-order-alt:before {
            content: "\f50a";
        }

        .fa-firstdraft:before {
            content: "\f3a1";
        }

        .fa-flickr:before {
            content: "\f16e";
        }

        .fa-flipboard:before {
            content: "\f44d";
        }

        .fa-fly:before {
            content: "\f417";
        }

        .fa-font-awesome:before {
            content: "\f2b4";
        }

        .fa-font-awesome-flag:before {
            content: "\f2b4";
        }

        .fa-font-awesome-logo-full:before {
            content: "\f2b4";
        }

        .fa-fonticons:before {
            content: "\f280";
        }

        .fa-fonticons-fi:before {
            content: "\f3a2";
        }

        .fa-fort-awesome:before {
            content: "\f286";
        }

        .fa-fort-awesome-alt:before {
            content: "\f3a3";
        }

        .fa-forumbee:before {
            content: "\f211";
        }

        .fa-foursquare:before {
            content: "\f180";
        }

        .fa-free-code-camp:before {
            content: "\f2c5";
        }

        .fa-freebsd:before {
            content: "\f3a4";
        }

        .fa-fulcrum:before {
            content: "\f50b";
        }

        .fa-galactic-republic:before {
            content: "\f50c";
        }

        .fa-galactic-senate:before {
            content: "\f50d";
        }

        .fa-get-pocket:before {
            content: "\f265";
        }

        .fa-gg:before {
            content: "\f260";
        }

        .fa-gg-circle:before {
            content: "\f261";
        }

        .fa-git:before {
            content: "\f1d3";
        }

        .fa-git-alt:before {
            content: "\f841";
        }

        .fa-git-square:before {
            content: "\f1d2";
        }

        .fa-github:before {
            content: "\f09b";
        }

        .fa-github-alt:before {
            content: "\f113";
        }

        .fa-github-square:before {
            content: "\f092";
        }

        .fa-gitkraken:before {
            content: "\f3a6";
        }

        .fa-gitlab:before {
            content: "\f296";
        }

        .fa-gitter:before {
            content: "\f426";
        }

        .fa-glide:before {
            content: "\f2a5";
        }

        .fa-glide-g:before {
            content: "\f2a6";
        }

        .fa-gofore:before {
            content: "\f3a7";
        }

        .fa-golang:before {
            content: "\e40f";
        }

        .fa-goodreads:before {
            content: "\f3a8";
        }

        .fa-goodreads-g:before {
            content: "\f3a9";
        }

        .fa-google:before {
            content: "\f1a0";
        }

        .fa-google-drive:before {
            content: "\f3aa";
        }

        .fa-google-pay:before {
            content: "\e079";
        }

        .fa-google-play:before {
            content: "\f3ab";
        }

        .fa-google-plus:before {
            content: "\f2b3";
        }

        .fa-google-plus-g:before {
            content: "\f0d5";
        }

        .fa-google-plus-square:before {
            content: "\f0d4";
        }

        .fa-google-wallet:before {
            content: "\f1ee";
        }

        .fa-gratipay:before {
            content: "\f184";
        }

        .fa-grav:before {
            content: "\f2d6";
        }

        .fa-gripfire:before {
            content: "\f3ac";
        }

        .fa-grunt:before {
            content: "\f3ad";
        }

        .fa-guilded:before {
            content: "\e07e";
        }

        .fa-gulp:before {
            content: "\f3ae";
        }

        .fa-hacker-news:before {
            content: "\f1d4";
        }

        .fa-hacker-news-square:before {
            content: "\f3af";
        }

        .fa-hackerrank:before {
            content: "\f5f7";
        }

        .fa-hips:before {
            content: "\f452";
        }

        .fa-hire-a-helper:before {
            content: "\f3b0";
        }

        .fa-hive:before {
            content: "\e07f";
        }

        .fa-hooli:before {
            content: "\f427";
        }

        .fa-hornbill:before {
            content: "\f592";
        }

        .fa-hotjar:before {
            content: "\f3b1";
        }

        .fa-houzz:before {
            content: "\f27c";
        }

        .fa-html5:before {
            content: "\f13b";
        }

        .fa-hubspot:before {
            content: "\f3b2";
        }

        .fa-ideal:before {
            content: "\e013";
        }

        .fa-imdb:before {
            content: "\f2d8";
        }

        .fa-instagram:before {
            content: "\f16d";
        }

        .fa-instagram-square:before {
            content: "\e055";
        }

        .fa-instalod:before {
            content: "\e081";
        }

        .fa-intercom:before {
            content: "\f7af";
        }

        .fa-internet-explorer:before {
            content: "\f26b";
        }

        .fa-invision:before {
            content: "\f7b0";
        }

        .fa-ioxhost:before {
            content: "\f208";
        }

        .fa-itch-io:before {
            content: "\f83a";
        }

        .fa-itunes:before {
            content: "\f3b4";
        }

        .fa-itunes-note:before {
            content: "\f3b5";
        }

        .fa-java:before {
            content: "\f4e4";
        }

        .fa-jedi-order:before {
            content: "\f50e";
        }

        .fa-jenkins:before {
            content: "\f3b6";
        }

        .fa-jira:before {
            content: "\f7b1";
        }

        .fa-joget:before {
            content: "\f3b7";
        }

        .fa-joomla:before {
            content: "\f1aa";
        }

        .fa-js:before {
            content: "\f3b8";
        }

        .fa-js-square:before {
            content: "\f3b9";
        }

        .fa-jsfiddle:before {
            content: "\f1cc";
        }

        .fa-kaggle:before {
            content: "\f5fa";
        }

        .fa-keybase:before {
            content: "\f4f5";
        }

        .fa-keycdn:before {
            content: "\f3ba";
        }

        .fa-kickstarter:before {
            content: "\f3bb";
        }

        .fa-kickstarter-k:before {
            content: "\f3bc";
        }

        .fa-korvue:before {
            content: "\f42f";
        }

        .fa-laravel:before {
            content: "\f3bd";
        }

        .fa-lastfm:before {
            content: "\f202";
        }

        .fa-lastfm-square:before {
            content: "\f203";
        }

        .fa-leanpub:before {
            content: "\f212";
        }

        .fa-less:before {
            content: "\f41d";
        }

        .fa-line:before {
            content: "\f3c0";
        }

        .fa-linkedin:before {
            content: "\f08c";
        }

        .fa-linkedin-in:before {
            content: "\f0e1";
        }

        .fa-linode:before {
            content: "\f2b8";
        }

        .fa-linux:before {
            content: "\f17c";
        }

        .fa-lyft:before {
            content: "\f3c3";
        }

        .fa-magento:before {
            content: "\f3c4";
        }

        .fa-mailchimp:before {
            content: "\f59e";
        }

        .fa-mandalorian:before {
            content: "\f50f";
        }

        .fa-markdown:before {
            content: "\f60f";
        }

        .fa-mastodon:before {
            content: "\f4f6";
        }

        .fa-maxcdn:before {
            content: "\f136";
        }

        .fa-mdb:before {
            content: "\f8ca";
        }

        .fa-medapps:before {
            content: "\f3c6";
        }

        .fa-medium:before {
            content: "\f23a";
        }

        .fa-medium-m:before {
            content: "\f23a";
        }

        .fa-medrt:before {
            content: "\f3c8";
        }

        .fa-meetup:before {
            content: "\f2e0";
        }

        .fa-megaport:before {
            content: "\f5a3";
        }

        .fa-mendeley:before {
            content: "\f7b3";
        }

        .fa-microblog:before {
            content: "\e01a";
        }

        .fa-microsoft:before {
            content: "\f3ca";
        }

        .fa-mix:before {
            content: "\f3cb";
        }

        .fa-mixcloud:before {
            content: "\f289";
        }

        .fa-mixer:before {
            content: "\e056";
        }

        .fa-mizuni:before {
            content: "\f3cc";
        }

        .fa-modx:before {
            content: "\f285";
        }

        .fa-monero:before {
            content: "\f3d0";
        }

        .fa-napster:before {
            content: "\f3d2";
        }

        .fa-neos:before {
            content: "\f612";
        }

        .fa-nimblr:before {
            content: "\f5a8";
        }

        .fa-node:before {
            content: "\f419";
        }

        .fa-node-js:before {
            content: "\f3d3";
        }

        .fa-npm:before {
            content: "\f3d4";
        }

        .fa-ns8:before {
            content: "\f3d5";
        }

        .fa-nutritionix:before {
            content: "\f3d6";
        }

        .fa-octopus-deploy:before {
            content: "\e082";
        }

        .fa-odnoklassniki:before {
            content: "\f263";
        }

        .fa-odnoklassniki-square:before {
            content: "\f264";
        }

        .fa-old-republic:before {
            content: "\f510";
        }

        .fa-opencart:before {
            content: "\f23d";
        }

        .fa-openid:before {
            content: "\f19b";
        }

        .fa-opera:before {
            content: "\f26a";
        }

        .fa-optin-monster:before {
            content: "\f23c";
        }

        .fa-orcid:before {
            content: "\f8d2";
        }

        .fa-osi:before {
            content: "\f41a";
        }

        .fa-page4:before {
            content: "\f3d7";
        }

        .fa-pagelines:before {
            content: "\f18c";
        }

        .fa-palfed:before {
            content: "\f3d8";
        }

        .fa-patreon:before {
            content: "\f3d9";
        }

        .fa-paypal:before {
            content: "\f1ed";
        }

        .fa-penny-arcade:before {
            content: "\f704";
        }

        .fa-perbyte:before {
            content: "\e083";
        }

        .fa-periscope:before {
            content: "\f3da";
        }

        .fa-phabricator:before {
            content: "\f3db";
        }

        .fa-phoenix-framework:before {
            content: "\f3dc";
        }

        .fa-phoenix-squadron:before {
            content: "\f511";
        }

        .fa-php:before {
            content: "\f457";
        }

        .fa-pied-piper:before {
            content: "\f2ae";
        }

        .fa-pied-piper-alt:before {
            content: "\f1a8";
        }

        .fa-pied-piper-hat:before {
            content: "\f4e5";
        }

        .fa-pied-piper-pp:before {
            content: "\f1a7";
        }

        .fa-pied-piper-square:before {
            content: "\e01e";
        }

        .fa-pinterest:before {
            content: "\f0d2";
        }

        .fa-pinterest-p:before {
            content: "\f231";
        }

        .fa-pinterest-square:before {
            content: "\f0d3";
        }

        .fa-pix:before {
            content: "\e43a";
        }

        .fa-playstation:before {
            content: "\f3df";
        }

        .fa-product-hunt:before {
            content: "\f288";
        }

        .fa-pushed:before {
            content: "\f3e1";
        }

        .fa-python:before {
            content: "\f3e2";
        }

        .fa-qq:before {
            content: "\f1d6";
        }

        .fa-quinscape:before {
            content: "\f459";
        }

        .fa-quora:before {
            content: "\f2c4";
        }

        .fa-r-project:before {
            content: "\f4f7";
        }

        .fa-raspberry-pi:before {
            content: "\f7bb";
        }

        .fa-ravelry:before {
            content: "\f2d9";
        }

        .fa-react:before {
            content: "\f41b";
        }

        .fa-reacteurope:before {
            content: "\f75d";
        }

        .fa-readme:before {
            content: "\f4d5";
        }

        .fa-rebel:before {
            content: "\f1d0";
        }

        .fa-red-river:before {
            content: "\f3e3";
        }

        .fa-reddit:before {
            content: "\f1a1";
        }

        .fa-reddit-alien:before {
            content: "\f281";
        }

        .fa-reddit-square:before {
            content: "\f1a2";
        }

        .fa-redhat:before {
            content: "\f7bc";
        }

        .fa-renren:before {
            content: "\f18b";
        }

        .fa-replyd:before {
            content: "\f3e6";
        }

        .fa-researchgate:before {
            content: "\f4f8";
        }

        .fa-resolving:before {
            content: "\f3e7";
        }

        .fa-rev:before {
            content: "\f5b2";
        }

        .fa-rocketchat:before {
            content: "\f3e8";
        }

        .fa-rockrms:before {
            content: "\f3e9";
        }

        .fa-rust:before {
            content: "\e07a";
        }

        .fa-safari:before {
            content: "\f267";
        }

        .fa-salesforce:before {
            content: "\f83b";
        }

        .fa-sass:before {
            content: "\f41e";
        }

        .fa-schlix:before {
            content: "\f3ea";
        }

        .fa-scribd:before {
            content: "\f28a";
        }

        .fa-searchengin:before {
            content: "\f3eb";
        }

        .fa-sellcast:before {
            content: "\f2da";
        }

        .fa-sellsy:before {
            content: "\f213";
        }

        .fa-servicestack:before {
            content: "\f3ec";
        }

        .fa-shirtsinbulk:before {
            content: "\f214";
        }

        .fa-shopify:before {
            content: "\e057";
        }

        .fa-shopware:before {
            content: "\f5b5";
        }

        .fa-simplybuilt:before {
            content: "\f215";
        }

        .fa-sistrix:before {
            content: "\f3ee";
        }

        .fa-sith:before {
            content: "\f512";
        }

        .fa-sitrox:before {
            content: "\e44a";
        }

        .fa-sketch:before {
            content: "\f7c6";
        }

        .fa-skyatlas:before {
            content: "\f216";
        }

        .fa-skype:before {
            content: "\f17e";
        }

        .fa-slack:before {
            content: "\f198";
        }

        .fa-slack-hash:before {
            content: "\f198";
        }

        .fa-slideshare:before {
            content: "\f1e7";
        }

        .fa-snapchat:before {
            content: "\f2ab";
        }

        .fa-snapchat-ghost:before {
            content: "\f2ab";
        }

        .fa-snapchat-square:before {
            content: "\f2ad";
        }

        .fa-soundcloud:before {
            content: "\f1be";
        }

        .fa-sourcetree:before {
            content: "\f7d3";
        }

        .fa-speakap:before {
            content: "\f3f3";
        }

        .fa-speaker-deck:before {
            content: "\f83c";
        }

        .fa-spotify:before {
            content: "\f1bc";
        }

        .fa-square-font-awesome:before {
            content: "\f425";
        }

        .fa-square-font-awesome-stroke:before {
            content: "\f35c";
        }

        .fa-font-awesome-alt:before {
            content: "\f35c";
        }

        .fa-squarespace:before {
            content: "\f5be";
        }

        .fa-stack-exchange:before {
            content: "\f18d";
        }

        .fa-stack-overflow:before {
            content: "\f16c";
        }

        .fa-stackpath:before {
            content: "\f842";
        }

        .fa-staylinked:before {
            content: "\f3f5";
        }

        .fa-steam:before {
            content: "\f1b6";
        }

        .fa-steam-square:before {
            content: "\f1b7";
        }

        .fa-steam-symbol:before {
            content: "\f3f6";
        }

        .fa-sticker-mule:before {
            content: "\f3f7";
        }

        .fa-strava:before {
            content: "\f428";
        }

        .fa-stripe:before {
            content: "\f429";
        }

        .fa-stripe-s:before {
            content: "\f42a";
        }

        .fa-studiovinari:before {
            content: "\f3f8";
        }

        .fa-stumbleupon:before {
            content: "\f1a4";
        }

        .fa-stumbleupon-circle:before {
            content: "\f1a3";
        }

        .fa-superpowers:before {
            content: "\f2dd";
        }

        .fa-supple:before {
            content: "\f3f9";
        }

        .fa-suse:before {
            content: "\f7d6";
        }

        .fa-swift:before {
            content: "\f8e1";
        }

        .fa-symfony:before {
            content: "\f83d";
        }

        .fa-teamspeak:before {
            content: "\f4f9";
        }

        .fa-telegram:before {
            content: "\f2c6";
        }

        .fa-telegram-plane:before {
            content: "\f2c6";
        }

        .fa-tencent-weibo:before {
            content: "\f1d5";
        }

        .fa-the-red-yeti:before {
            content: "\f69d";
        }

        .fa-themeco:before {
            content: "\f5c6";
        }

        .fa-themeisle:before {
            content: "\f2b2";
        }

        .fa-think-peaks:before {
            content: "\f731";
        }

        .fa-tiktok:before {
            content: "\e07b";
        }

        .fa-trade-federation:before {
            content: "\f513";
        }

        .fa-trello:before {
            content: "\f181";
        }

        .fa-tumblr:before {
            content: "\f173";
        }

        .fa-tumblr-square:before {
            content: "\f174";
        }

        .fa-twitch:before {
            content: "\f1e8";
        }

        .fa-twitter:before {
            content: "\f099";
        }

        .fa-twitter-square:before {
            content: "\f081";
        }

        .fa-typo3:before {
            content: "\f42b";
        }

        .fa-uber:before {
            content: "\f402";
        }

        .fa-ubuntu:before {
            content: "\f7df";
        }

        .fa-uikit:before {
            content: "\f403";
        }

        .fa-umbraco:before {
            content: "\f8e8";
        }

        .fa-uncharted:before {
            content: "\e084";
        }

        .fa-uniregistry:before {
            content: "\f404";
        }

        .fa-unity:before {
            content: "\e049";
        }

        .fa-unsplash:before {
            content: "\e07c";
        }

        .fa-untappd:before {
            content: "\f405";
        }

        .fa-ups:before {
            content: "\f7e0";
        }

        .fa-usb:before {
            content: "\f287";
        }

        .fa-usps:before {
            content: "\f7e1";
        }

        .fa-ussunnah:before {
            content: "\f407";
        }

        .fa-vaadin:before {
            content: "\f408";
        }

        .fa-viacoin:before {
            content: "\f237";
        }

        .fa-viadeo:before {
            content: "\f2a9";
        }

        .fa-viadeo-square:before {
            content: "\f2aa";
        }

        .fa-viber:before {
            content: "\f409";
        }

        .fa-vimeo:before {
            content: "\f40a";
        }

        .fa-vimeo-square:before {
            content: "\f194";
        }

        .fa-vimeo-v:before {
            content: "\f27d";
        }

        .fa-vine:before {
            content: "\f1ca";
        }

        .fa-vk:before {
            content: "\f189";
        }

        .fa-vnv:before {
            content: "\f40b";
        }

        .fa-vuejs:before {
            content: "\f41f";
        }

        .fa-watchman-monitoring:before {
            content: "\e087";
        }

        .fa-waze:before {
            content: "\f83f";
        }

        .fa-weebly:before {
            content: "\f5cc";
        }

        .fa-weibo:before {
            content: "\f18a";
        }

        .fa-weixin:before {
            content: "\f1d7";
        }

        .fa-whatsapp:before {
            content: "\f232";
        }

        .fa-whatsapp-square:before {
            content: "\f40c";
        }

        .fa-whmcs:before {
            content: "\f40d";
        }

        .fa-wikipedia-w:before {
            content: "\f266";
        }

        .fa-windows:before {
            content: "\f17a";
        }

        .fa-wirsindhandwerk:before {
            content: "\e2d0";
        }

        .fa-wsh:before {
            content: "\e2d0";
        }

        .fa-wix:before {
            content: "\f5cf";
        }

        .fa-wizards-of-the-coast:before {
            content: "\f730";
        }

        .fa-wodu:before {
            content: "\e088";
        }

        .fa-wolf-pack-battalion:before {
            content: "\f514";
        }

        .fa-wordpress:before {
            content: "\f19a";
        }

        .fa-wordpress-simple:before {
            content: "\f411";
        }

        .fa-wpbeginner:before {
            content: "\f297";
        }

        .fa-wpexplorer:before {
            content: "\f2de";
        }

        .fa-wpforms:before {
            content: "\f298";
        }

        .fa-wpressr:before {
            content: "\f3e4";
        }

        .fa-xbox:before {
            content: "\f412";
        }

        .fa-xing:before {
            content: "\f168";
        }

        .fa-xing-square:before {
            content: "\f169";
        }

        .fa-y-combinator:before {
            content: "\f23b";
        }

        .fa-yahoo:before {
            content: "\f19e";
        }

        .fa-yammer:before {
            content: "\f840";
        }

        .fa-yandex:before {
            content: "\f413";
        }

        .fa-yandex-international:before {
            content: "\f414";
        }

        .fa-yarn:before {
            content: "\f7e3";
        }

        .fa-yelp:before {
            content: "\f1e9";
        }

        .fa-yoast:before {
            content: "\f2b1";
        }

        .fa-youtube:before {
            content: "\f167";
        }

        .fa-youtube-square:before {
            content: "\f431";
        }

        .fa-zhihu:before {
            content: "\f63f";
        }

        @font-face {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url("<?=base_url("public/admin/webfonts/fa-regular-400.woff2")?>") format("woff2"), url("<?=base_url("public/admin/webfonts/fa-regular-400.ttf")?>") format("truetype");
        }

        .far,
        .fa-regular {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        @font-face {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url("<?=base_url("public/admin/webfonts/fa-solid-900.woff2")?>") format("woff2"), url("<?=base_url("public/admin/webfonts/fa-solid-900.ttf")?>") format("truetype");
        }

        .fas,
        .fa-solid {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 900;
        }
    </style>
    <style>
        /*!
         * Font Awesome Free 6.0.0-beta2 by @fontawesome - https://fontawesome.com
         * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
         */
        .fa.fa-glass:before {
            content: "\f000";
        }

        .fa.fa-envelope-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-envelope-o:before {
            content: "\f0e0";
        }

        .fa.fa-star-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-star-o:before {
            content: "\f005";
        }

        .fa.fa-remove:before {
            content: "\f00d";
        }

        .fa.fa-close:before {
            content: "\f00d";
        }

        .fa.fa-gear:before {
            content: "\f013";
        }

        .fa.fa-trash-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-trash-o:before {
            content: "\f2ed";
        }

        .fa.fa-home:before {
            content: "\f015";
        }

        .fa.fa-file-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-o:before {
            content: "\f15b";
        }

        .fa.fa-clock-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-clock-o:before {
            content: "\f017";
        }

        .fa.fa-arrow-circle-o-down {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-arrow-circle-o-down:before {
            content: "\f358";
        }

        .fa.fa-arrow-circle-o-up {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-arrow-circle-o-up:before {
            content: "\f35b";
        }

        .fa.fa-play-circle-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-play-circle-o:before {
            content: "\f144";
        }

        .fa.fa-repeat:before {
            content: "\f01e";
        }

        .fa.fa-rotate-right:before {
            content: "\f01e";
        }

        .fa.fa-refresh:before {
            content: "\f021";
        }

        .fa.fa-list-alt {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-list-alt:before {
            content: "\f022";
        }

        .fa.fa-dedent:before {
            content: "\f03b";
        }

        .fa.fa-video-camera:before {
            content: "\f03d";
        }

        .fa.fa-picture-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-picture-o:before {
            content: "\f03e";
        }

        .fa.fa-photo {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-photo:before {
            content: "\f03e";
        }

        .fa.fa-image {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-image:before {
            content: "\f03e";
        }

        .fa.fa-map-marker:before {
            content: "\f3c5";
        }

        .fa.fa-pencil-square-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-pencil-square-o:before {
            content: "\f044";
        }

        .fa.fa-edit {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-edit:before {
            content: "\f044";
        }

        .fa.fa-share-square-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-share-square-o:before {
            content: "\f14d";
        }

        .fa.fa-check-square-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-check-square-o:before {
            content: "\f14a";
        }

        .fa.fa-arrows:before {
            content: "\f0b2";
        }

        .fa.fa-times-circle-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-times-circle-o:before {
            content: "\f057";
        }

        .fa.fa-check-circle-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-check-circle-o:before {
            content: "\f058";
        }

        .fa.fa-mail-forward:before {
            content: "\f064";
        }

        .fa.fa-expand:before {
            content: "\f424";
        }

        .fa.fa-compress:before {
            content: "\f422";
        }

        .fa.fa-eye {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-eye-slash {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-warning:before {
            content: "\f071";
        }

        .fa.fa-calendar:before {
            content: "\f073";
        }

        .fa.fa-arrows-v:before {
            content: "\f338";
        }

        .fa.fa-arrows-h:before {
            content: "\f337";
        }

        .fa.fa-bar-chart {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-bar-chart:before {
            content: "\f080";
        }

        .fa.fa-bar-chart-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-bar-chart-o:before {
            content: "\f080";
        }

        .fa.fa-twitter-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-facebook-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-gears:before {
            content: "\f085";
        }

        .fa.fa-thumbs-o-up {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-thumbs-o-up:before {
            content: "\f164";
        }

        .fa.fa-thumbs-o-down {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-thumbs-o-down:before {
            content: "\f165";
        }

        .fa.fa-heart-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-heart-o:before {
            content: "\f004";
        }

        .fa.fa-sign-out:before {
            content: "\f2f5";
        }

        .fa.fa-linkedin-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-linkedin-square:before {
            content: "\f08c";
        }

        .fa.fa-thumb-tack:before {
            content: "\f08d";
        }

        .fa.fa-external-link:before {
            content: "\f35d";
        }

        .fa.fa-sign-in:before {
            content: "\f2f6";
        }

        .fa.fa-github-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-lemon-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-lemon-o:before {
            content: "\f094";
        }

        .fa.fa-square-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-square-o:before {
            content: "\f0c8";
        }

        .fa.fa-bookmark-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-bookmark-o:before {
            content: "\f02e";
        }

        .fa.fa-twitter {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-facebook {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-facebook:before {
            content: "\f39e";
        }

        .fa.fa-facebook-f {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-facebook-f:before {
            content: "\f39e";
        }

        .fa.fa-github {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-credit-card {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-feed:before {
            content: "\f09e";
        }

        .fa.fa-hdd-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hdd-o:before {
            content: "\f0a0";
        }

        .fa.fa-hand-o-right {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hand-o-right:before {
            content: "\f0a4";
        }

        .fa.fa-hand-o-left {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hand-o-left:before {
            content: "\f0a5";
        }

        .fa.fa-hand-o-up {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hand-o-up:before {
            content: "\f0a6";
        }

        .fa.fa-hand-o-down {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hand-o-down:before {
            content: "\f0a7";
        }

        .fa.fa-arrows-alt:before {
            content: "\f31e";
        }

        .fa.fa-group:before {
            content: "\f0c0";
        }

        .fa.fa-chain:before {
            content: "\f0c1";
        }

        .fa.fa-scissors:before {
            content: "\f0c4";
        }

        .fa.fa-cut:before {
            content: "\f0c4";
        }

        .fa.fa-files-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-files-o:before {
            content: "\f0c5";
        }

        .fa.fa-floppy-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-floppy-o:before {
            content: "\f0c7";
        }

        .fa.fa-save {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-save:before {
            content: "\f0c7";
        }

        .fa.fa-navicon:before {
            content: "\f0c9";
        }

        .fa.fa-reorder:before {
            content: "\f0c9";
        }

        .fa.fa-pinterest {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-pinterest-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-google-plus-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-google-plus {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-google-plus:before {
            content: "\f0d5";
        }

        .fa.fa-money {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-money:before {
            content: "\f3d1";
        }

        .fa.fa-unsorted:before {
            content: "\f0dc";
        }

        .fa.fa-sort-desc:before {
            content: "\f0dd";
        }

        .fa.fa-sort-asc:before {
            content: "\f0de";
        }

        .fa.fa-linkedin {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-linkedin:before {
            content: "\f0e1";
        }

        .fa.fa-rotate-left:before {
            content: "\f0e2";
        }

        .fa.fa-legal:before {
            content: "\f0e3";
        }

        .fa.fa-dashboard:before {
            content: "\f62a";
        }

        .fa.fa-comment-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-comment-o:before {
            content: "\f075";
        }

        .fa.fa-comments-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-comments-o:before {
            content: "\f086";
        }

        .fa.fa-flash:before {
            content: "\f0e7";
        }

        .fa.fa-clipboard {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-paste {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-paste:before {
            content: "\f328";
        }

        .fa.fa-lightbulb-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-lightbulb-o:before {
            content: "\f0eb";
        }

        .fa.fa-exchange:before {
            content: "\f362";
        }

        .fa.fa-cloud-download:before {
            content: "\f0ed";
        }

        .fa.fa-cloud-upload:before {
            content: "\f0ee";
        }

        .fa.fa-bell-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-bell-o:before {
            content: "\f0f3";
        }

        .fa.fa-cutlery:before {
            content: "\f2e7";
        }

        .fa.fa-file-text-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-text-o:before {
            content: "\f15c";
        }

        .fa.fa-building-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-building-o:before {
            content: "\f1ad";
        }

        .fa.fa-hospital-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hospital-o:before {
            content: "\f0f8";
        }

        .fa.fa-tablet:before {
            content: "\f3fa";
        }

        .fa.fa-mobile:before {
            content: "\f3cd";
        }

        .fa.fa-mobile-phone:before {
            content: "\f3cd";
        }

        .fa.fa-circle-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-circle-o:before {
            content: "\f111";
        }

        .fa.fa-mail-reply:before {
            content: "\f3e5";
        }

        .fa.fa-github-alt {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-folder-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-folder-o:before {
            content: "\f07b";
        }

        .fa.fa-folder-open-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-folder-open-o:before {
            content: "\f07c";
        }

        .fa.fa-smile-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-smile-o:before {
            content: "\f118";
        }

        .fa.fa-frown-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-frown-o:before {
            content: "\f119";
        }

        .fa.fa-meh-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-meh-o:before {
            content: "\f11a";
        }

        .fa.fa-keyboard-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-keyboard-o:before {
            content: "\f11c";
        }

        .fa.fa-flag-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-flag-o:before {
            content: "\f024";
        }

        .fa.fa-mail-reply-all:before {
            content: "\f122";
        }

        .fa.fa-star-half-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-star-half-o:before {
            content: "\f089";
        }

        .fa.fa-star-half-empty {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-star-half-empty:before {
            content: "\f089";
        }

        .fa.fa-star-half-full {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-star-half-full:before {
            content: "\f089";
        }

        .fa.fa-code-fork:before {
            content: "\f126";
        }

        .fa.fa-chain-broken:before {
            content: "\f127";
        }

        .fa.fa-unlink:before {
            content: "\f127";
        }

        .fa.fa-shield:before {
            content: "\f3ed";
        }

        .fa.fa-calendar-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-calendar-o:before {
            content: "\f133";
        }

        .fa.fa-maxcdn {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-html5 {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-css3 {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-ticket:before {
            content: "\f3ff";
        }

        .fa.fa-minus-square-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-minus-square-o:before {
            content: "\f146";
        }

        .fa.fa-level-up:before {
            content: "\f3bf";
        }

        .fa.fa-level-down:before {
            content: "\f3be";
        }

        .fa.fa-pencil-square:before {
            content: "\f14b";
        }

        .fa.fa-external-link-square:before {
            content: "\f360";
        }

        .fa.fa-compass {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-caret-square-o-down {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-caret-square-o-down:before {
            content: "\f150";
        }

        .fa.fa-toggle-down {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-toggle-down:before {
            content: "\f150";
        }

        .fa.fa-caret-square-o-up {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-caret-square-o-up:before {
            content: "\f151";
        }

        .fa.fa-toggle-up {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-toggle-up:before {
            content: "\f151";
        }

        .fa.fa-caret-square-o-right {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-caret-square-o-right:before {
            content: "\f152";
        }

        .fa.fa-toggle-right {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-toggle-right:before {
            content: "\f152";
        }

        .fa.fa-eur:before {
            content: "\f153";
        }

        .fa.fa-euro:before {
            content: "\f153";
        }

        .fa.fa-gbp:before {
            content: "\f154";
        }

        .fa.fa-usd:before {
            content: "\24";
        }

        .fa.fa-dollar:before {
            content: "\24";
        }

        .fa.fa-inr:before {
            content: "\f156";
        }

        .fa.fa-rupee:before {
            content: "\f156";
        }

        .fa.fa-jpy:before {
            content: "\f157";
        }

        .fa.fa-cny:before {
            content: "\f157";
        }

        .fa.fa-rmb:before {
            content: "\f157";
        }

        .fa.fa-yen:before {
            content: "\f157";
        }

        .fa.fa-rub:before {
            content: "\f158";
        }

        .fa.fa-ruble:before {
            content: "\f158";
        }

        .fa.fa-rouble:before {
            content: "\f158";
        }

        .fa.fa-krw:before {
            content: "\f159";
        }

        .fa.fa-won:before {
            content: "\f159";
        }

        .fa.fa-btc {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-bitcoin {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-bitcoin:before {
            content: "\f15a";
        }

        .fa.fa-file-text:before {
            content: "\f15c";
        }

        .fa.fa-sort-alpha-asc:before {
            content: "\f15d";
        }

        .fa.fa-sort-alpha-desc:before {
            content: "\f881";
        }

        .fa.fa-sort-amount-asc:before {
            content: "\f160";
        }

        .fa.fa-sort-amount-desc:before {
            content: "\f884";
        }

        .fa.fa-sort-numeric-asc:before {
            content: "\f162";
        }

        .fa.fa-sort-numeric-desc:before {
            content: "\f886";
        }

        .fa.fa-youtube-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-youtube {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-xing {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-xing-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-youtube-play {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-youtube-play:before {
            content: "\f167";
        }

        .fa.fa-dropbox {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-stack-overflow {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-instagram {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-flickr {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-adn {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-bitbucket {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-bitbucket-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-bitbucket-square:before {
            content: "\f171";
        }

        .fa.fa-tumblr {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-tumblr-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-long-arrow-down:before {
            content: "\f309";
        }

        .fa.fa-long-arrow-up:before {
            content: "\f30c";
        }

        .fa.fa-long-arrow-left:before {
            content: "\f30a";
        }

        .fa.fa-long-arrow-right:before {
            content: "\f30b";
        }

        .fa.fa-apple {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-windows {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-android {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-linux {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-dribbble {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-skype {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-foursquare {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-trello {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-gratipay {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-gittip {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-gittip:before {
            content: "\f184";
        }

        .fa.fa-sun-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-sun-o:before {
            content: "\f185";
        }

        .fa.fa-moon-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-moon-o:before {
            content: "\f186";
        }

        .fa.fa-vk {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-weibo {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-renren {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-pagelines {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-stack-exchange {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-arrow-circle-o-right {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-arrow-circle-o-right:before {
            content: "\f35a";
        }

        .fa.fa-arrow-circle-o-left {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-arrow-circle-o-left:before {
            content: "\f359";
        }

        .fa.fa-caret-square-o-left {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-caret-square-o-left:before {
            content: "\f191";
        }

        .fa.fa-toggle-left {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-toggle-left:before {
            content: "\f191";
        }

        .fa.fa-dot-circle-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-dot-circle-o:before {
            content: "\f192";
        }

        .fa.fa-vimeo-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-try:before {
            content: "\f195";
        }

        .fa.fa-turkish-lira:before {
            content: "\f195";
        }

        .fa.fa-plus-square-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-plus-square-o:before {
            content: "\f0fe";
        }

        .fa.fa-slack {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-wordpress {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-openid {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-institution:before {
            content: "\f19c";
        }

        .fa.fa-bank:before {
            content: "\f19c";
        }

        .fa.fa-mortar-board:before {
            content: "\f19d";
        }

        .fa.fa-yahoo {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-google {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-reddit {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-reddit-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-stumbleupon-circle {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-stumbleupon {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-delicious {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-digg {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-pied-piper-pp {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-pied-piper-alt {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-drupal {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-joomla {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-spoon:before {
            content: "\f2e5";
        }

        .fa.fa-behance {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-behance-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-steam {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-steam-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-automobile:before {
            content: "\f1b9";
        }

        .fa.fa-cab:before {
            content: "\f1ba";
        }

        .fa.fa-spotify {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-deviantart {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-soundcloud {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-pdf-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-pdf-o:before {
            content: "\f1c1";
        }

        .fa.fa-file-word-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-word-o:before {
            content: "\f1c2";
        }

        .fa.fa-file-excel-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-excel-o:before {
            content: "\f1c3";
        }

        .fa.fa-file-powerpoint-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-powerpoint-o:before {
            content: "\f1c4";
        }

        .fa.fa-file-image-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-image-o:before {
            content: "\f1c5";
        }

        .fa.fa-file-photo-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-photo-o:before {
            content: "\f1c5";
        }

        .fa.fa-file-picture-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-picture-o:before {
            content: "\f1c5";
        }

        .fa.fa-file-archive-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-archive-o:before {
            content: "\f1c6";
        }

        .fa.fa-file-zip-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-zip-o:before {
            content: "\f1c6";
        }

        .fa.fa-file-audio-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-audio-o:before {
            content: "\f1c7";
        }

        .fa.fa-file-sound-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-sound-o:before {
            content: "\f1c7";
        }

        .fa.fa-file-video-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-video-o:before {
            content: "\f1c8";
        }

        .fa.fa-file-movie-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-movie-o:before {
            content: "\f1c8";
        }

        .fa.fa-file-code-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-file-code-o:before {
            content: "\f1c9";
        }

        .fa.fa-vine {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-codepen {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-jsfiddle {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-life-ring {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-life-bouy {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-life-bouy:before {
            content: "\f1cd";
        }

        .fa.fa-life-buoy {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-life-buoy:before {
            content: "\f1cd";
        }

        .fa.fa-life-saver {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-life-saver:before {
            content: "\f1cd";
        }

        .fa.fa-support {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-support:before {
            content: "\f1cd";
        }

        .fa.fa-circle-o-notch:before {
            content: "\f1ce";
        }

        .fa.fa-rebel {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-ra {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-ra:before {
            content: "\f1d0";
        }

        .fa.fa-resistance {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-resistance:before {
            content: "\f1d0";
        }

        .fa.fa-empire {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-ge {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-ge:before {
            content: "\f1d1";
        }

        .fa.fa-git-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-git {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hacker-news {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-y-combinator-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-y-combinator-square:before {
            content: "\f1d4";
        }

        .fa.fa-yc-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-yc-square:before {
            content: "\f1d4";
        }

        .fa.fa-tencent-weibo {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-qq {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-weixin {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-wechat {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-wechat:before {
            content: "\f1d7";
        }

        .fa.fa-send:before {
            content: "\f1d8";
        }

        .fa.fa-paper-plane-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-paper-plane-o:before {
            content: "\f1d8";
        }

        .fa.fa-send-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-send-o:before {
            content: "\f1d8";
        }

        .fa.fa-circle-thin {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-circle-thin:before {
            content: "\f111";
        }

        .fa.fa-header:before {
            content: "\f1dc";
        }

        .fa.fa-sliders:before {
            content: "\f1de";
        }

        .fa.fa-futbol-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-futbol-o:before {
            content: "\f1e3";
        }

        .fa.fa-soccer-ball-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-soccer-ball-o:before {
            content: "\f1e3";
        }

        .fa.fa-slideshare {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-twitch {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-yelp {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-newspaper-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-newspaper-o:before {
            content: "\f1ea";
        }

        .fa.fa-paypal {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-google-wallet {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-cc-visa {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-cc-mastercard {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-cc-discover {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-cc-amex {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-cc-paypal {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-cc-stripe {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-bell-slash-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-bell-slash-o:before {
            content: "\f1f6";
        }

        .fa.fa-trash:before {
            content: "\f2ed";
        }

        .fa.fa-copyright {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-eyedropper:before {
            content: "\f1fb";
        }

        .fa.fa-area-chart:before {
            content: "\f1fe";
        }

        .fa.fa-pie-chart:before {
            content: "\f200";
        }

        .fa.fa-line-chart:before {
            content: "\f201";
        }

        .fa.fa-lastfm {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-lastfm-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-ioxhost {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-angellist {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-cc {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-cc:before {
            content: "\f20a";
        }

        .fa.fa-ils:before {
            content: "\f20b";
        }

        .fa.fa-shekel:before {
            content: "\f20b";
        }

        .fa.fa-sheqel:before {
            content: "\f20b";
        }

        .fa.fa-meanpath {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-meanpath:before {
            content: "\f2b4";
        }

        .fa.fa-buysellads {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-connectdevelop {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-dashcube {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-forumbee {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-leanpub {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-sellsy {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-shirtsinbulk {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-simplybuilt {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-skyatlas {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-diamond {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-diamond:before {
            content: "\f3a5";
        }

        .fa.fa-intersex:before {
            content: "\f225";
        }

        .fa.fa-transgender-alt:before {
            content: "\f225";
        }

        .fa.fa-facebook-official {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-facebook-official:before {
            content: "\f09a";
        }

        .fa.fa-pinterest-p {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-whatsapp {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hotel:before {
            content: "\f236";
        }

        .fa.fa-viacoin {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-medium {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-y-combinator {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-yc {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-yc:before {
            content: "\f23b";
        }

        .fa.fa-optin-monster {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-opencart {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-expeditedssl {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-battery-4:before {
            content: "\f240";
        }

        .fa.fa-battery:before {
            content: "\f240";
        }

        .fa.fa-battery-3:before {
            content: "\f241";
        }

        .fa.fa-battery-2:before {
            content: "\f242";
        }

        .fa.fa-battery-1:before {
            content: "\f243";
        }

        .fa.fa-battery-0:before {
            content: "\f244";
        }

        .fa.fa-object-group {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-object-ungroup {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-sticky-note-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-sticky-note-o:before {
            content: "\f249";
        }

        .fa.fa-cc-jcb {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-cc-diners-club {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-clone {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hourglass-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hourglass-o:before {
            content: "\f254";
        }

        .fa.fa-hourglass-1:before {
            content: "\f251";
        }

        .fa.fa-hourglass-2:before {
            content: "\f254";
        }

        .fa.fa-hourglass-3:before {
            content: "\f253";
        }

        .fa.fa-hand-rock-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hand-rock-o:before {
            content: "\f255";
        }

        .fa.fa-hand-grab-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hand-grab-o:before {
            content: "\f255";
        }

        .fa.fa-hand-paper-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hand-paper-o:before {
            content: "\f256";
        }

        .fa.fa-hand-stop-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hand-stop-o:before {
            content: "\f256";
        }

        .fa.fa-hand-scissors-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hand-scissors-o:before {
            content: "\f257";
        }

        .fa.fa-hand-lizard-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hand-lizard-o:before {
            content: "\f258";
        }

        .fa.fa-hand-spock-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hand-spock-o:before {
            content: "\f259";
        }

        .fa.fa-hand-pointer-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hand-pointer-o:before {
            content: "\f25a";
        }

        .fa.fa-hand-peace-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-hand-peace-o:before {
            content: "\f25b";
        }

        .fa.fa-registered {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-creative-commons {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-gg {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-gg-circle {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-tripadvisor {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-odnoklassniki {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-odnoklassniki-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-get-pocket {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-wikipedia-w {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-safari {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-chrome {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-firefox {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-opera {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-internet-explorer {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-television:before {
            content: "\f26c";
        }

        .fa.fa-contao {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-500px {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-amazon {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-calendar-plus-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-calendar-plus-o:before {
            content: "\f271";
        }

        .fa.fa-calendar-minus-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-calendar-minus-o:before {
            content: "\f272";
        }

        .fa.fa-calendar-times-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-calendar-times-o:before {
            content: "\f273";
        }

        .fa.fa-calendar-check-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-calendar-check-o:before {
            content: "\f274";
        }

        .fa.fa-map-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-map-o:before {
            content: "\f279";
        }

        .fa.fa-commenting:before {
            content: "\f4ad";
        }

        .fa.fa-commenting-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-commenting-o:before {
            content: "\f4ad";
        }

        .fa.fa-houzz {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-vimeo {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-vimeo:before {
            content: "\f27d";
        }

        .fa.fa-black-tie {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-fonticons {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-reddit-alien {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-edge {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-credit-card-alt:before {
            content: "\f09d";
        }

        .fa.fa-codiepie {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-modx {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-fort-awesome {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-usb {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-product-hunt {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-mixcloud {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-scribd {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-pause-circle-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-pause-circle-o:before {
            content: "\f28b";
        }

        .fa.fa-stop-circle-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-stop-circle-o:before {
            content: "\f28d";
        }

        .fa.fa-bluetooth {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-bluetooth-b {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-gitlab {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-wpbeginner {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-wpforms {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-envira {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-wheelchair-alt {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-wheelchair-alt:before {
            content: "\f368";
        }

        .fa.fa-question-circle-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-question-circle-o:before {
            content: "\f059";
        }

        .fa.fa-volume-control-phone:before {
            content: "\f2a0";
        }

        .fa.fa-asl-interpreting:before {
            content: "\f2a3";
        }

        .fa.fa-deafness:before {
            content: "\f2a4";
        }

        .fa.fa-hard-of-hearing:before {
            content: "\f2a4";
        }

        .fa.fa-glide {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-glide-g {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-signing:before {
            content: "\f2a7";
        }

        .fa.fa-viadeo {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-viadeo-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-snapchat {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-snapchat-ghost {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-snapchat-ghost:before {
            content: "\f2ab";
        }

        .fa.fa-snapchat-square {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-pied-piper {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-first-order {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-yoast {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-themeisle {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-google-plus-official {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-google-plus-official:before {
            content: "\f2b3";
        }

        .fa.fa-google-plus-circle {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-google-plus-circle:before {
            content: "\f2b3";
        }

        .fa.fa-font-awesome {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-fa {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-fa:before {
            content: "\f2b4";
        }

        .fa.fa-handshake-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-handshake-o:before {
            content: "\f2b5";
        }

        .fa.fa-envelope-open-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-envelope-open-o:before {
            content: "\f2b6";
        }

        .fa.fa-linode {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-address-book-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-address-book-o:before {
            content: "\f2b9";
        }

        .fa.fa-vcard:before {
            content: "\f2bb";
        }

        .fa.fa-address-card-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-address-card-o:before {
            content: "\f2bb";
        }

        .fa.fa-vcard-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-vcard-o:before {
            content: "\f2bb";
        }

        .fa.fa-user-circle-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-user-circle-o:before {
            content: "\f2bd";
        }

        .fa.fa-user-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-user-o:before {
            content: "\f007";
        }

        .fa.fa-id-badge {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-drivers-license:before {
            content: "\f2c2";
        }

        .fa.fa-id-card-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-id-card-o:before {
            content: "\f2c2";
        }

        .fa.fa-drivers-license-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-drivers-license-o:before {
            content: "\f2c2";
        }

        .fa.fa-quora {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-free-code-camp {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-telegram {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-thermometer-4:before {
            content: "\f2c7";
        }

        .fa.fa-thermometer:before {
            content: "\f2c7";
        }

        .fa.fa-thermometer-3:before {
            content: "\f2c8";
        }

        .fa.fa-thermometer-2:before {
            content: "\f2c9";
        }

        .fa.fa-thermometer-1:before {
            content: "\f2ca";
        }

        .fa.fa-thermometer-0:before {
            content: "\f2cb";
        }

        .fa.fa-bathtub:before {
            content: "\f2cd";
        }

        .fa.fa-s15:before {
            content: "\f2cd";
        }

        .fa.fa-window-maximize {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-window-restore {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-times-rectangle:before {
            content: "\f410";
        }

        .fa.fa-window-close-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-window-close-o:before {
            content: "\f410";
        }

        .fa.fa-times-rectangle-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-times-rectangle-o:before {
            content: "\f410";
        }

        .fa.fa-bandcamp {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-grav {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-etsy {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-imdb {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-ravelry {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-eercast {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-eercast:before {
            content: "\f2da";
        }

        .fa.fa-snowflake-o {
            font-family: 'Font Awesome 6 Free', sans-serif;
            font-weight: 400;
        }

        .fa.fa-snowflake-o:before {
            content: "\f2dc";
        }

        .fa.fa-superpowers {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-wpexplorer {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }

        .fa.fa-meetup {
            font-family: 'Font Awesome 6 Brands', sans-serif;
            font-weight: 400;
        }
    </style>
    <style>
        .fa-500px.color {
            color: #222
        }

        .fa-accusoft.color {
            color: #f47d48
        }

        .fa-acquisitions-incorporated.color {
            color: #bd992f
        }

        .fa-adn.color {
            color: #000
        }

        .fa-adobe.color {
            color: #e71b23
        }

        .fa-adversal.color {
            color: #ca0232
        }

        .fa-affiliatetheme.color {
            color: #bc1516
        }

        .fa-airbnb.color {
            color: #ff5a5f
        }

        .fa-algolia.color {
            color: #0f98f7
        }

        .fa-alipay.color {
            color: #00aeef
        }

        .fa-amazon.color {
            color: #f90
        }

        .fa-amazon-pay.color {
            color: #f90
        }

        .fa-amilia.color {
            color: #2f92de
        }

        .fa-android.color {
            color: #a4c639
        }

        .fa-angellist.color {
            color: #7fbb00
        }

        .fa-angrycreative.color {
            color: #f84e4e
        }

        .fa-angular.color {
            color: #dd0330
        }

        .fa-app-store.color {
            color: #1da0f8
        }

        .fa-app-store-ios.color {
            color: #1da0f8
        }

        .fa-apper.color {
            color: #120b14
        }

        .fa-apple.color {
            color: #000
        }

        .fa-apple-pay.color {
            color: #000
        }

        .fa-artstation.color {
            color: #12a8e8
        }

        .fa-asymmetrik.color {
            color: #be1e2d
        }

        .fa-atlassian.color {
            color: #0050c6
        }

        .fa-audible.color {
            color: #f1941e
        }

        .fa-autoprefixer.color {
            color: #d73534
        }

        .fa-avianex.color {
            color: #62606d
        }

        .fa-aviato.color {
            color: #2665b0
        }

        .fa-aws.color {
            color: #f90
        }

        .fa-bandcamp.color {
            color: #1da0c3
        }

        .fa-battle-net.color {
            color: #008dd3
        }

        .fa-behance.color {
            color: #1769ff
        }

        .fa-behance-square.color {
            color: #1769ff
        }

        .fa-bimobject.color {
            color: #0797d0
        }

        .fa-bitbucket.color {
            color: #205081
        }

        .fa-bitcoin.color {
            color: #f90
        }

        .fa-bity.color {
            color: #3190cf
        }

        .fa-black-tie.color {
            color: #000
        }

        .fa-blackberry.color {
            color: #000
        }

        .fa-blogger.color {
            color: #f06a35
        }

        .fa-blogger-b.color {
            color: #f06a35
        }

        .fa-bluetooth.color {
            color: #2b3490
        }

        .fa-bluetooth-b.color {
            color: #2b3490
        }

        .fa-bootstrap.color {
            color: #563d7c
        }

        .fa-btc.color {
            color: #f90
        }

        .fa-buffer.color {
            color: #000
        }

        .fa-buromobelexperte.color {
            color: #ed8003
        }

        .fa-buy-n-large.color {
            color: red
        }

        .fa-buysellads.color {
            color: #9f0012
        }

        .fa-canadian-maple-leaf.color {
            color: #dd0206
        }

        .fa-cc-amazon-pay.color {
            color: #f19321
        }

        .fa-cc-amex.color {
            color: #006cc9
        }

        .fa-cc-apple-pay.color {
            color: #000
        }

        .fa-cc-diners-club.color {
            color: #0069aa
        }

        .fa-cc-discover.color {
            color: #f78222
        }

        .fa-cc-jcb.color {
            color: #114997
        }

        .fa-cc-mastercard.color {
            color: #f90
        }

        .fa-cc-paypal.color {
            color: #002e82
        }

        .fa-cc-stripe.color {
            color: #6772e5
        }

        .fa-cc-visa.color {
            color: #0c54a8
        }

        .fa-centercode.color {
            color: #5fc4cd
        }

        .fa-centos.color {
            color: #932678
        }

        .fa-chrome.color {
            color: #4685f2
        }

        .fa-chromecast.color {
            color: #48b2e6
        }

        .fa-cloudscale.color {
            color: #04517d
        }

        .fa-cloudsmith.color {
            color: #539bbe
        }

        .fa-cloudversify.color {
            color: #24b8e3
        }

        .fa-codepen.color {
            color: #000
        }

        .fa-codiepie.color {
            color: #000
        }

        .fa-confluence.color {
            color: #0052cc
        }

        .fa-connectdevelop.color {
            color: #391448
        }

        .fa-contao.color {
            color: #f47c00
        }

        .fa-cotton-bureau.color {
            color: #ed5f53
        }

        .fa-cpanel.color {
            color: #ff6c2c
        }

        .fa-creative-commons.color {
            color: #000
        }

        .fa-creative-commons-by.color {
            color: #000
        }

        .fa-creative-commons-nc.color {
            color: #000
        }

        .fa-creative-commons-nc-eu.color {
            color: #000
        }

        .fa-creative-commons-nc-jp.color {
            color: #000
        }

        .fa-creative-commons-nd.color {
            color: #000
        }

        .fa-creative-commons-pd.color {
            color: #000
        }

        .fa-creative-commons-pd-alt.color {
            color: #000
        }

        .fa-creative-commons-remix.color {
            color: #000
        }

        .fa-creative-commons-sa.color {
            color: #000
        }

        .fa-creative-commons-sampling.color {
            color: #000
        }

        .fa-creative-commons-sampling-plus.color {
            color: #000
        }

        .fa-creative-commons-share.color {
            color: #000
        }

        .fa-creative-commons-zero.color {
            color: #000
        }

        .fa-critical-role.color {
            color: #000
        }

        .fa-css3.color {
            color: #016fba
        }

        .fa-css3-alt.color {
            color: #016fba
        }

        .fa-cuttlefish.color {
            color: #3972b9
        }

        .fa-d-and-d.color {
            color: #e62026
        }

        .fa-d-and-d-beyond.color {
            color: #e62026
        }

        .fa-dashcube.color {
            color: #4282c1
        }

        .fa-delicious.color {
            color: #4088da
        }

        .fa-deploydog.color {
            color: #000
        }

        .fa-deskpro.color {
            color: #4191cc
        }

        .fa-dev.color {
            color: #000
        }

        .fa-deviantart.color {
            color: #05c645
        }

        .fa-dhl.color {
            color: #cf0028
        }

        .fa-diaspora.color {
            color: #000
        }

        .fa-digg.color {
            color: #1b5791
        }

        .fa-digital-ocean.color {
            color: #007df8
        }

        .fa-discord.color {
            color: #6f85d4
        }

        .fa-discourse.color {
            color: #f2e88f
        }

        .fa-dochub.color {
            color: #31a0f3
        }

        .fa-docker.color {
            color: #2496ed
        }

        .fa-draft2digital.color {
            color: #ef4823
        }

        .fa-dribbble.color {
            color: #ea4c89
        }

        .fa-dribbble-square.color {
            color: #ea4c89
        }

        .fa-dropbox.color {
            color: #007ee5
        }

        .fa-drupal.color {
            color: #0077c0
        }

        .fa-dyalog.color {
            color: #fc9732
        }

        .fa-earlybirds.color {
            color: #c4d02c
        }

        .fa-ebay.color {
            color: #0064d2
        }

        .fa-edge.color {
            color: #3277bc
        }

        .fa-elementor.color {
            color: #f7285c
        }

        .fa-ello.color {
            color: #000
        }

        .fa-ember.color {
            color: #da4c37
        }

        .fa-empire.color {
            color: #000
        }

        .fa-envira.color {
            color: #7dbd4e
        }

        .fa-erlang.color {
            color: #a40532
        }

        .fa-ethereum.color {
            color: #393939
        }

        .fa-etsy.color {
            color: #f56400
        }

        .fa-evernote.color {
            color: #0a1
        }

        .fa-expeditedssl.color {
            color: #000
        }

        .fa-facebook.color {
            color: #3a5895
        }

        .fa-facebook-f.color {
            color: #3a5895
        }

        .fa-facebook-messenger.color {
            color: #3a5895
        }

        .fa-facebook-square.color {
            color: #3a5895
        }

        .fa-fantasy-flight-games.color {
            color: #03325a
        }

        .fa-fedex.color {
            color: #452e8d
        }

        .fa-fedora.color {
            color: #283f6f
        }

        .fa-figma.color {
            color: #f56257
        }

        .fa-firefox.color {
            color: #ff9500
        }

        .fa-first-order.color {
            color: #7c112d
        }

        .fa-first-order-alt.color {
            color: #7c112d
        }

        .fa-firstdraft.color {
            color: #000
        }

        .fa-flickr.color {
            color: #ff0084
        }

        .fa-flipboard.color {
            color: #f82d33
        }

        .fa-fly.color {
            color: #000
        }

        .fa-font-awesome.color {
            color: #228ae6
        }

        .fa-font-awesome-alt.color {
            color: #228ae6
        }

        .fa-font-awesome-flag.color {
            color: #228ae6
        }

        .fa-fonticons.color {
            color: #445962
        }

        .fa-fonticons-fi.color {
            color: #445962
        }

        .fa-fort-awesome.color {
            color: #2c2e37
        }

        .fa-fort-awesome-alt.color {
            color: #2c2e37
        }

        .fa-forumbee.color {
            color: #82a72e
        }

        .fa-foursquare.color {
            color: #f34575
        }

        .fa-free-code-camp.color {
            color: #006101
        }

        .fa-freebsd.color {
            color: #f80000
        }

        .fa-fulcrum.color {
            color: #7a9dc0
        }

        .fa-galactic-republic.color {
            color: #a02
        }

        .fa-galactic-senate.color {
            color: #000
        }

        .fa-get-pocket.color {
            color: #e24150
        }

        .fa-gg.color {
            color: #000
        }

        .fa-gg-circle.color {
            color: #000
        }

        .fa-git.color {
            color: #f05033
        }

        .fa-git-alt.color {
            color: #f05033
        }

        .fa-git-square.color {
            color: #f05033
        }

        .fa-github.color {
            color: #313030
        }

        .fa-github-alt.color {
            color: #313030
        }

        .fa-github-square.color {
            color: #313030
        }

        .fa-gitkraken.color {
            color: #127f76
        }

        .fa-gitlab.color {
            color: #f59f25
        }

        .fa-gitter.color {
            color: #e71453
        }

        .fa-glide.color {
            color: #0095f8
        }

        .fa-glide-g.color {
            color: #0095f8
        }

        .fa-gofore.color {
            color: #f8814f
        }

        .fa-goodreads.color {
            color: #73441d
        }

        .fa-goodreads-g.color {
            color: #73441d
        }

        .fa-google.color {
            color: #4082ee
        }

        .fa-google-drive.color {
            color: #4082ee
        }

        .fa-google-play.color {
            color: #4082ee
        }

        .fa-google-plus.color {
            color: #cc4339
        }

        .fa-google-plus-g.color {
            color: #cc4339
        }

        .fa-google-plus-square.color {
            color: #cc4339
        }

        .fa-google-wallet.color {
            color: #089a5b
        }

        .fa-gratipay.color {
            color: #633200
        }

        .fa-grav.color {
            color: #1a0528
        }

        .fa-gripfire.color {
            color: #e72125
        }

        .fa-grunt.color {
            color: #e18323
        }

        .fa-gulp.color {
            color: #e54849
        }

        .fa-hacker-news.color {
            color: #ff7416
        }

        .fa-hacker-news-square.color {
            color: #ff7416
        }

        .fa-hackerrank.color {
            color: #2ebe60
        }

        .fa-hips.color {
            color: #7db83f
        }

        .fa-hire-a-helper.color {
            color: #663136
        }

        .fa-hooli.color {
            color: #388afa
        }

        .fa-hornbill.color {
            color: #000
        }

        .fa-hotjar.color {
            color: #f63859
        }

        .fa-houzz.color {
            color: #4bb714
        }

        .fa-html5.color {
            color: #e34f26
        }

        .fa-hubspot.color {
            color: #ec7559
        }

        .fa-imdb.color {
            color: #eec017
        }

        .fa-instagram.color {
            color: #c83085
        }

        .fa-intercom.color {
            color: #1e89e7
        }

        .fa-internet-explorer.color {
            color: #35a0dc
        }

        .fa-invision.color {
            color: #ff3265
        }

        .fa-ioxhost.color {
            color: #faa829
        }

        .fa-itch-io.color {
            color: #fa5c5c
        }

        .fa-itunes.color {
            color: #e449ba
        }

        .fa-itunes-note.color {
            color: #e449ba
        }

        .fa-java.color {
            color: #f70100
        }

        .fa-jedi-order.color {
            color: #840000
        }

        .fa-jenkins.color {
            color: #000
        }

        .fa-jira.color {
            color: #0052cc
        }

        .fa-joget.color {
            color: #5c6f37
        }

        .fa-joomla.color {
            color: #17558b
        }

        .fa-js.color {
            color: #f7b31b
        }

        .fa-js-square.color {
            color: #f7b31b
        }

        .fa-jsfiddle.color {
            color: #3e99d0
        }

        .fa-kaggle.color {
            color: #35b5e2
        }

        .fa-keybase.color {
            color: #f86c20
        }

        .fa-keycdn.color {
            color: #047aed
        }

        .fa-kickstarter.color {
            color: #05c875
        }

        .fa-kickstarter-k.color {
            color: #05c875
        }

        .fa-korvue.color {
            color: #325689
        }

        .fa-laravel.color {
            color: #f82c1f
        }

        .fa-lastfm.color {
            color: #dd1b22
        }

        .fa-lastfm-square.color {
            color: #dd1b22
        }

        .fa-leanpub.color {
            color: #252324
        }

        .fa-less.color {
            color: #2a4c80
        }

        .fa-line.color {
            color: #4cc700
        }

        .fa-linkedin.color {
            color: #0170ad
        }

        .fa-linkedin-in.color {
            color: #0170ad
        }

        .fa-linode.color {
            color: #1ead58
        }

        .fa-linux.color {
            color: #000
        }

        .fa-lyft.color {
            color: #e40b88
        }

        .fa-magento.color {
            color: #eb6021
        }

        .fa-mailchimp.color {
            color: #000
        }

        .fa-mandalorian.color {
            color: #000
        }

        .fa-markdown.color {
            color: #000
        }

        .fa-mastodon.color {
            color: #2a8cd3
        }

        .fa-maxcdn.color {
            color: #ff6603
        }

        .fa-mdb.color {
            color: #3584d5
        }

        .fa-medapps.color {
            color: #072d80
        }

        .fa-medium.color {
            color: #000
        }

        .fa-medium-m.color {
            color: #000
        }

        .fa-medrt.color {
            color: #000
        }

        .fa-meetup.color {
            color: #e71b3e
        }

        .fa-megaport.color {
            color: #e20000
        }

        .fa-mendeley.color {
            color: #a91d27
        }

        .fa-microsoft.color {
            color: #00a8ea
        }

        .fa-mix.color {
            color: #f87d25
        }

        .fa-mixcloud.color {
            color: #000
        }

        .fa-mizuni.color {
            color: #2c2c34
        }

        .fa-modx.color {
            color: #81c04e
        }

        .fa-monero.color {
            color: #f86300
        }

        .fa-napster.color {
            color: #3255b2
        }

        .fa-neos.color {
            color: #00a8e7
        }

        .fa-nimblr.color {
            color: #f07936
        }

        .fa-node.color {
            color: #7fc728
        }

        .fa-node-js.color {
            color: #7fc728
        }

        .fa-npm.color {
            color: #c53635
        }

        .fa-ns8.color {
            color: #72b90e
        }

        .fa-nutritionix.color {
            color: #66ae43
        }

        .fa-odnoklassniki.color {
            color: #ee7e1f
        }

        .fa-odnoklassniki-square.color {
            color: #ee7e1f
        }

        .fa-old-republic.color {
            color: #000
        }

        .fa-opencart.color {
            color: #30ace9
        }

        .fa-openid.color {
            color: #f18f1d
        }

        .fa-opera.color {
            color: #f81a2c
        }

        .fa-optin-monster.color {
            color: #8acd1d
        }

        .fa-orcid.color {
            color: #a1c837
        }

        .fa-osi.color {
            color: #3ba137
        }

        .fa-page4.color {
            color: #475f89
        }

        .fa-pagelines.color {
            color: #000
        }

        .fa-palfed.color {
            color: #f6c407
        }

        .fa-patreon.color {
            color: #f96854
        }

        .fa-paypal.color {
            color: #002e82
        }

        .fa-penny-arcade.color {
            color: #054e8b
        }

        .fa-periscope.color {
            color: #40a4c4
        }

        .fa-phabricator.color {
            color: #000
        }

        .fa-phoenix-framework.color {
            color: #e94400
        }

        .fa-phoenix-squadron.color {
            color: #f89b35
        }

        .fa-php.color {
            color: #7478ae
        }

        .fa-pied-piper.color {
            color: #016d66
        }

        .fa-pied-piper-alt.color {
            color: #016d66
        }

        .fa-pied-piper-hat.color {
            color: #016d66
        }

        .fa-pied-piper-pp.color {
            color: #016d66
        }

        .fa-pinterest.color {
            color: #cb2027
        }

        .fa-pinterest-p.color {
            color: #cb2027
        }

        .fa-pinterest-square.color {
            color: #cb2027
        }

        .fa-playstation.color {
            color: #0467ad
        }

        .fa-product-hunt.color {
            color: #dc5425
        }

        .fa-pushed.color {
            color: #f9e302
        }

        .fa-python.color {
            color: #3572a3
        }

        .fa-qq.color {
            color: #000
        }

        .fa-quinscape.color {
            color: #021fad
        }

        .fa-quora.color {
            color: #a7352d
        }

        .fa-r-project.color {
            color: #1d62b2
        }

        .fa-raspberry-pi.color {
            color: #d0254d
        }

        .fa-ravelry.color {
            color: #eb1364
        }

        .fa-react.color {
            color: #00d8ff
        }

        .fa-reacteurope.color {
            color: #4d5fab
        }

        .fa-readme.color {
            color: #2484c6
        }

        .fa-rebel.color {
            color: #cc0003
        }

        .fa-red-river.color {
            color: #c7103f
        }

        .fa-reddit.color {
            color: #f83d17
        }

        .fa-reddit-alien.color {
            color: #f83d17
        }

        .fa-reddit-square.color {
            color: #f83d17
        }

        .fa-redhat.color {
            color: #e72333
        }

        .fa-renren.color {
            color: #025aa7
        }

        .fa-replyd.color {
            color: #000
        }

        .fa-researchgate.color {
            color: #00c6b6
        }

        .fa-resolving.color {
            color: #d1281c
        }

        .fa-rev.color {
            color: #e71b45
        }

        .fa-rocketchat.color {
            color: #d62122
        }

        .fa-rockrms.color {
            color: #e77323
        }

        .fa-safari.color {
            color: #1a8dee
        }

        .fa-salesforce.color {
            color: #00a1e0
        }

        .fa-sass.color {
            color: #cd6799
        }

        .fa-schlix.color {
            color: #000
        }

        .fa-scribd.color {
            color: #00808c
        }

        .fa-searchengin.color {
            color: #3187be
        }

        .fa-sellcast.color {
            color: #f15b2f
        }

        .fa-sellsy.color {
            color: #142632
        }

        .fa-servicestack.color {
            color: #000
        }

        .fa-shirtsinbulk.color {
            color: #da3925
        }

        .fa-shopware.color {
            color: #179af8
        }

        .fa-simplybuilt.color {
            color: #000
        }

        .fa-sistrix.color {
            color: #0074c2
        }

        .fa-sith.color {
            color: #9e1919
        }

        .fa-sketch.color {
            color: #fdad00
        }

        .fa-skyatlas.color {
            color: #4abec3
        }

        .fa-skype.color {
            color: #009dd9
        }

        .fa-slack.color {
            color: #481449
        }

        .fa-slack-hash.color {
            color: #481449
        }

        .fa-slideshare.color {
            color: #f48701
        }

        .fa-snapchat.color {
            color: #f8f501
        }

        .fa-snapchat-ghost.color {
            color: #f8f501
        }

        .fa-snapchat-square.color {
            color: #f8f501
        }

        .fa-soundcloud.color {
            color: #f85300
        }

        .fa-sourcetree.color {
            color: #0050c6
        }

        .fa-speakap.color {
            color: #f34d30
        }

        .fa-speaker-deck.color {
            color: #329563
        }

        .fa-spotify.color {
            color: #1dd15d
        }

        .fa-squarespace.color {
            color: #000
        }

        .fa-stack-exchange.color {
            color: #2c4b97
        }

        .fa-stack-overflow.color {
            color: #ec7d27
        }

        .fa-stackpath.color {
            color: #000
        }

        .fa-staylinked.color {
            color: #60ad44
        }

        .fa-steam.color {
            color: #314969
        }

        .fa-steam-square.color {
            color: #314969
        }

        .fa-steam-symbol.color {
            color: #314969
        }

        .fa-sticker-mule.color {
            color: #4a2317
        }

        .fa-strava.color {
            color: #f73400
        }

        .fa-stripe.color {
            color: #6772e5
        }

        .fa-stripe-s.color {
            color: #6772e5
        }

        .fa-studiovinari.color {
            color: #f4da8d
        }

        .fa-stumbleupon.color {
            color: #e54622
        }

        .fa-stumbleupon-circle.color {
            color: #e54622
        }

        .fa-superpowers.color {
            color: #f7d702
        }

        .fa-supple.color {
            color: #00bbec
        }

        .fa-suse.color {
            color: #32ce46
        }

        .fa-swift.color {
            color: #e94f36
        }

        .fa-symfony.color {
            color: #000
        }

        .fa-teamspeak.color {
            color: #277dbe
        }

        .fa-telegram.color {
            color: #2ca0db
        }

        .fa-telegram-plane.color {
            color: #2ca0db
        }

        .fa-tencent-weibo.color {
            color: #369bd4
        }

        .fa-the-red-yeti.color {
            color: #e31708
        }

        .fa-themeco.color {
            color: #1f4f99
        }

        .fa-themeisle.color {
            color: #1696bf
        }

        .fa-think-peaks.color {
            color: #239489
        }

        .fa-trade-federation.color {
            color: #000
        }

        .fa-trello.color {
            color: #0076ba
        }

        .fa-tripadvisor.color {
            color: #88be5b
        }

        .fa-tumblr.color {
            color: #314e6a
        }

        .fa-tumblr-square.color {
            color: #314e6a
        }

        .fa-twitch.color {
            color: #6240a1
        }

        .fa-twitter.color {
            color: #1c9deb
        }

        .fa-twitter-square.color {
            color: #1c9deb
        }

        .fa-typo3.color {
            color: #f88300
        }

        .fa-uber.color {
            color: #000
        }

        .fa-ubuntu.color {
            color: #d74613
        }

        .fa-uikit.color {
            color: #2b8eb9
        }

        .fa-umbraco.color {
            color: #3442ac
        }

        .fa-uniregistry.color {
            color: #00814e
        }

        .fa-untappd.color {
            color: #f8bb00
        }

        .fa-ups.color {
            color: #f8b000
        }

        .fa-usb.color {
            color: #000
        }

        .fa-usps.color {
            color: #00457d
        }

        .fa-ussunnah.color {
            color: #2b7f49
        }

        .fa-vaadin.color {
            color: #00afe9
        }

        .fa-viacoin.color {
            color: #1d84df
        }

        .fa-viadeo.color {
            color: #e76f50
        }

        .fa-viadeo-square.color {
            color: #e76f50
        }

        .fa-viber.color {
            color: #795098
        }

        .fa-vimeo.color {
            color: #3facd5
        }

        .fa-vimeo-square.color {
            color: #3facd5
        }

        .fa-vimeo-v.color {
            color: #3facd5
        }

        .fa-vine.color {
            color: #00ba8b
        }

        .fa-vk.color {
            color: #4f7db3
        }

        .fa-vnv.color {
            color: #219cd4
        }

        .fa-vuejs.color {
            color: #3fb37f
        }

        .fa-waze.color {
            color: #40cff8
        }

        .fa-weebly.color {
            color: #1f8ae7
        }

        .fa-weibo.color {
            color: #d12628
        }

        .fa-weixin.color {
            color: #2cbc00
        }

        .fa-whatsapp.color {
            color: #24cd63
        }

        .fa-whatsapp-square.color {
            color: #24cd63
        }

        .fa-whmcs.color {
            color: #003554
        }

        .fa-wikipedia-w.color {
            color: #000
        }

        .fa-windows.color {
            color: #00bcf2
        }

        .fa-wix.color {
            color: #000
        }

        .fa-wizards-of-the-coast.color {
            color: #7586bf
        }

        .fa-wolf-pack-battalion.color {
            color: #000
        }

        .fa-wordpress.color {
            color: #207297
        }

        .fa-wordpress-simple.color {
            color: #207297
        }

        .fa-wpbeginner.color {
            color: #f86300
        }

        .fa-wpexplorer.color {
            color: #0363d0
        }

        .fa-wpforms.color {
            color: #d27435
        }

        .fa-wpressr.color {
            color: #000
        }

        .fa-xbox.color {
            color: #10790f
        }

        .fa-xing.color {
            color: #00585c
        }

        .fa-xing-square.color {
            color: #00585c
        }

        .fa-y-combinator.color {
            color: #f4621d
        }

        .fa-yahoo.color {
            color: #5d00cd
        }

        .fa-yammer.color {
            color: #008cb8
        }

        .fa-yandex.color {
            color: #df251f
        }

        .fa-yandex-international.color {
            color: #f80000
        }

        .fa-yarn.color {
            color: #2b8ab6
        }

        .fa-yelp.color {
            color: #d3222d
        }

        .fa-yoast.color {
            color: #9d2667
        }

        .fa-youtube.color {
            color: #f7021a
        }

        .fa-youtube-square.color {
            color: #f7021a
        }

        .fa-zhihu.color {
            color: #0f84e5
        }
    </style>
    <!-- Font Awesome 6 : END -->

</head>

<body style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
<div style="max-width: 600px; margin: 0 auto;" class="email-container">
    <!-- BEGIN BODY -->
    <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
        <tr>
            <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td class="logo" style="text-align: center;">
                            <h1><a href="#" title="Model Arıyorum">Model Arıyorum</a></h1>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- end tr -->
        <tr>
            <td valign="middle" class="hero bg_white" style="padding: 3em 0 2em 0;">
                <img src="<?=base_url("public/admin/img/stisla.svg")?>" alt="Model Arıyorum" style="width: 300px; max-width: 600px; height: auto; margin: auto; display: block;">
            </td>
        </tr>
        <!-- end tr -->
        <?php $this->renderSection("content") ?>
        <!-- end tr -->
        <tr>
            <td valign="middle" class="hero bg_white" style="padding: 2em 0 4em 0;">
                <table>
                    <tr>
                        <td>
                            <div class="text" style="padding: 0 2.5em; text-align: center;">
                                <p><?=lang("EmailTemplate.footer_content")?></p>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- end tr -->
        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
            <tr>
                <td valign="middle" class="bg_light footer email-section">
                    <table>
                        <tr>
                            <td valign="top" width="33.333%" style="padding-top: 20px;">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="text-align: left; padding-right: 10px;">
                                            <h3 class="heading"><?=lang("EmailTemplate.about_us")?></h3>
                                            <p><?=lang("EmailTemplate.about_us_content")?></p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td valign="top" width="33.333%" style="padding-top: 20px;">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="text-align: left; padding-left: 5px; padding-right: 5px;">
                                            <h3 class="heading"><?=lang("EmailTemplate.contact")?></h3>
                                            <ul>
                                                <li><span class="text"><?=lang("EmailTemplate.address")?></span></li>
                                                <li><span class="text"><?=lang("EmailTemplate.phone")?></span>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td valign="top" width="33.333%" style="padding-top: 20px;">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="text-align: left; padding-left: 10px;">
                                            <h3 class="heading"><?=lang("EmailTemplate.useful_links")?></h3>
                                            <ul>
                                                <li><a href="<?= base_url() ?>" title="Model Arıyorum">Model
                                                        Arıyorum</a></li>
                                                <li>
                                                    <a href="tel:" title="Model Arıyorum"><i class="fa fa-phone"></i></a>
                                                </li>
                                                <li>
                                                    <a href="mailto:" title="Model Arıyorum"><i class="fa fa-envelope-open-o"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://facebook.com" title="Model Arıyorum"><i class="fa fa-facebook color"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://instagram.com" title="Model Arıyorum"><i class="fa fa-instagram color"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://youtube.com" title="Model Arıyorum"><i class="fa fa-youtube color"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- end: tr -->
        </table>

</div>
</body>

</html>