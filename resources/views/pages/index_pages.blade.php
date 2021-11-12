<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang tra cứu động vật</title>
    <link rel="icon" type="image/png" href="{{ asset('https://img.favpng.com/23/19/22/animals-icon-woof-woof-icon-dog-icon-png-favpng-qYRWzpkHmgVLvV2yLnAdzCaRW.jpg') }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/admin/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/summernote/summernote-bs4.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <style>
        article,
        aside,
        blockquote,
        dialog,
        figure,
        footer,
        header,
        hgroup,
        hr,
        nav,
        section {
            display: block;
        }

        .clear,
        .clear-fix,
        .sf-menu>li>a {
            zoom: 1;
        }

        a,
        abbr,
        acronym,
        address,
        applet,
        article,
        aside,
        audio,
        b,
        big,
        blockquote,
        body,
        canvas,
        caption,
        center,
        cite,
        code,
        dd,
        del,
        details,
        dfn,
        div,
        dl,
        dt,
        em,
        fieldset,
        figcaption,
        figure,
        font,
        footer,
        form,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        header,
        hgroup,
        html,
        i,
        iframe,
        img,
        ins,
        kbd,
        label,
        legend,
        li,
        mark,
        menu,
        meter,
        nav,
        object,
        ol,
        output,
        p,
        pre,
        progress,
        q,
        s,
        samp,
        section,
        small,
        span,
        strike,
        strong,
        sub,
        summary,
        sup,
        table,
        tbody,
        td,
        tfoot,
        th,
        thead,
        time,
        tr,
        tt,
        ul,
        var,
        video {
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
            background: 0 0;
            margin: 0;
            padding: 0;
        }

        nav ul {
            list-style: none;
        }

        ol {
            list-style: decimal;
        }

        ul {
            list-style: disc;
        }

        ul ul {
            list-style: circle;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:after,
        blockquote:before,
        q:after,
        q:before {
            content: none;
        }

        ins {
            text-decoration: underline;
        }

        del {
            text-decoration: line-through;
        }

        .sf-menu>li>a,
        a {
            text-decoration: none;
        }

        mark {
            background: 0 0;
        }

        abbr[title],
        acronym[title],
        dfn[title] {
            border-bottom: 1px dotted;
            cursor: help;
        }

        hr {
            height: 1px;
            border: 0;
            border-top: 1px solid #ccc;
            margin: 1em 0;
            padding: 0;
        }

        .clear,
        .clear-fix:after {
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0;
            display: block;
        }

        button,
        input[type="button"],
        input[type="submit"] {
            margin: 0;
            padding: 0;
        }

        a img,
        input,
        select {
            vertical-align: middle;
        }

        b,
        strong {
            font-weight: 700;
        }

        em,
        i {
            font-style: italic;
        }

        .clear-fix:after {
            content: ".";
        }

        .alignnone {
            margin: 5px 20px 20px 0;
        }

        .aligncenter,
        div.aligncenter {
            display: block;
            margin: 5px auto;
        }

        .alignright {
            float: right;
            margin: 5px 0 20px 20px;
        }

        .alignleft {
            float: left;
            margin: 5px 20px 20px 0;
        }

        .aligncenter {
            display: block;
            margin: 5px auto;
        }

        a img.alignright {
            float: right;
            margin: 5px 0 20px 20px;
        }

        a img.alignleft,
        dd,
        dt {
            float: left;
        }

        a img.alignleft,
        a img.alignnone {
            margin: 5px 20px 20px 0;
        }

        a img.aligncenter {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .wp-caption {
            background: #fff;
            border-width: 1px;
            border-style: solid;
            max-width: 96%;
            padding: 5px 3px 10px;
            text-align: center;
        }

        .wp-caption.alignleft,
        .wp-caption.alignnone {
            margin: 5px 20px 20px 0;
        }

        .wp-caption.alignright {
            margin: 5px 0 20px 20px;
        }

        .wp-caption img {
            border: 0;
            height: auto;
            margin: 0;
            max-width: 98.5%;
            padding: 0;
            width: auto;
        }

        .wp-caption p.wp-caption-text {
            font-size: 11px;
            line-height: 17px;
            margin: 0;
            padding: 0 4px 5px;
        }

        ol,
        p,
        ul {
            margin-bottom: 20px;
        }

        dl {
            width: 100%;
            overflow: hidden;
        }

        dt {
            width: 30%;
            clear: left;
            margin-bottom: 12px;
        }

        dd {
            width: 70%;
            margin-bottom: 15px;
        }

        big {
            font-size: 15px;
        }

        sub,
        sup {
            font-size: 11px;
        }

        code,
        kbd {
            border: 1px dotted;
            padding: 5px 12px;
            margin: 0 10px;
        }

        sup {
            vertical-align: super;
        }

        sub {
            vertical-align: sub;
        }

        .gallery-item .gallery-icon {
            margin-right: 10px;
        }

        i {
            margin-right: 5px;
        }

        a {
            transition: color 0.3s, background-color 0.3s, opacity 0.3s;
            -moz-transition: color 0.3s, background-color 0.3s, opacity 0.3s;
            -o-transition: color 0.3s, background-color 0.3s, opacity 0.3s;
            -webkit-transition: color 0.3s, background-color 0.3s, opacity 0.3s;
        }

        ol,
        ul {
            margin-left: 30px;
        }

        body {
            line-height: 1.7;
            overflow-y: scroll;
            -webkit-text-size-adjust: 100%;
            -webkit-font-smoothing: antialiased;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            line-height: 1.3;
            margin-bottom: 18px;
            font-weight: 400;
        }

        .post-password-form input[type="submit"] {
            margin-left: 20px;
            margin-bottom: 0;
        }

        .post-password-form input[type="password"] {
            margin-left: 10px;
            padding: 10px 15px;
        }

        .container {
            padding: 0;
            margin: 0 auto;
        }

        .column,
        .columns {
            float: left;
            position: relative;
            min-height: 1px;
        }

        .one-ninth {
            width: 11.111%;
        }

        .one-eighth {
            width: 12.5%;
        }

        .one-seventh {
            width: 14.285%;
        }

        .one-fifth {
            width: 20%;
        }

        .two-fifth {
            width: 40%;
        }

        .three-fifth {
            width: 60%;
        }

        .four-fifth {
            width: 80%;
        }

        .one {
            width: 8.333%;
        }

        .two {
            width: 16.666%;
        }

        .three {
            width: 25%;
        }

        .four {
            width: 33.333%;
        }

        .five {
            width: 41.666%;
        }

        .six {
            width: 50%;
        }

        .seven {
            width: 58.334%;
        }

        .eight {
            width: 66.667%;
        }

        .nine {
            width: 75%;
        }

        .ten {
            width: 83.334%;
        }

        .eleven {
            width: 91.667%;
        }

        .twelve {
            width: 100%;
        }

        .ie7 .sf-mega-section.three {
            width: 24%;
        }

        .gdlr-item {
            margin: 0 15px 20px;
            min-height: 1px;
        }

        .gdlr-full-size-wrapper .gdlr-item-no-space {
            margin-bottom: 0;
        }

        .gdlr-item-no-space {
            margin: 0 20px 40px;
        }

        .gdlr-item-no-space .gdlr-item {
            margin: 0;
        }

        .gdlr-item.gdlr-main-content {
            margin-bottom: 55px;
        }

        .gdlr-item.gdlr-divider-item {
            margin-bottom: 50px;
        }

        .gdlr-color-wrapper,
        .gdlr-item-start-content,
        .gdlr-parallax-wrapper,
        .section-container {
            padding-top: 55px;
        }

        .gdlr-color-wrapper,
        .gdlr-full-size-wrapper,
        .gdlr-parallax-wrapper {
            padding-bottom: 40px;
        }

        .gdlr-full-size-wrapper .gdlr-item,
        .gdlr-full-size-wrapper .gdlr-item-no-space {
            margin-left: 0;
            margin-right: 0;
        }

        .ie7 .gdlr-item-start-content {
            overflow: hidden;
        }

        audio {
            width: 100%;
        }

        .mejs-container .mejs-controls .mejs-horizontal-volume-slider {
            position: relative;
            clear: both;
            float: right;
            top: -31px;
        }

        img,
        video {
            max-width: 100%;
            height: auto;
            width: auto;
        }

        .ms-container video {
            max-width: none;
        }

        input[type="password"],
        input[type="text"],
        input[type="email"],
        textarea {
            border: 0;
            outline: 0;
            padding: 6px;
            max-width: 100%;
        }

        .body-wrapper {
            overflow: hidden;
        }

        .body-wrapper.gdlr-boxed-style {
            margin: 0 auto;
            -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0 5px 2px rgba(0, 0, 0, 0.15);
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
        }

        img.gdlr-full-boxed-background {
            min-height: 100%;
            min-width: 1024px;
            width: 100%;
            height: auto;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
        }

        @media screen and (max-width: 1024px) {
            img.gdlr-full-boxed-background {
                left: 50%;
                margin-left: -512px;
            }
        }

        .content-wrapper {
            position: relative;
            z-index: 89;
            
        }

        .top-navigation-wrapper {
            position: relative;
            z-index: 98;
        }

        .top-navigation-divider {
            margin-top: 1px;
            border-bottom-width: 1px;
            border-bottom-style: solid;
        }

        .top-navigation-left {
            float: left;
            margin: 0 15px;
        }

        .top-navigation-left-text {
            font-size: 12px;
            padding: 14px 0 13px;
            line-height: 18px;
        }

        .top-navigation-right {
            float: right;
            margin: 0 15px;
        }

        .top-social-wrapper {
            padding-top: 11px;
            padding-bottom: 11px;
        }

        .top-social-wrapper .social-icon {
            float: left;
            margin-left: 12px;
            max-width: 16px;
        }

        .top-social-wrapper .social-icon:first-child {
            margin-left: 0;
        }

        .top-social-wrapper .social-icon a {
            opacity: 0.6;
            filter: alpha(opacity=60);
        }

        .top-social-wrapper .social-icon a:hover {
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .gdlr-navigation-substitute {
            position: relative;
            z-index: 91;
        }

        .gdlr-nav-search-form-button-wrapper {
            float: left;
            border-left-width: 1px;
            border-right-width: 1px;
            border-style: solid;
        }

        .gdlr-nav-search-form form {
            position: relative;
            display: block;
        }

        .gdlr-nav-search-form input[type="text"] {
            margin: 0;
            padding: 16px;
            height: 16px;
            font-size: 11px;
            background-color: transparent;
            font-weight: 400;
            text-transform: uppercase;
        }

        .gdlr-nav-search-form .search-text {
            float: left;
            overflow: hidden;
            width: 0;
        }

        .gdlr-nav-search-form-button {
            overflow: hidden;
            font-size: 14px;
            width: 14px;
            height: 14px;
            padding: 16px;
            cursor: pointer;
            line-height: 1;
        }

        .gdlr-nav-search-form-button i {
            margin: 0;
        }

        .gdlr-header-transparent #gdlr-menu-search {
            top: 85%;
        }

        .gdlr-login-form input[type="password"],
        .gdlr-login-form input[type="text"],
        .gdlr-login-form input[type="email"] {
            width: 200px;
            padding: 12px;
            margin-bottom: 5px;
        }

        .gdlr-login-form label {
            display: block;
            margin-bottom: 4px;
        }

        .gdlr-login-form p {
            margin-bottom: 0;
            margin-top: 9px;
            overflow: hidden;
        }

        .gdlr-login-form p:first-child {
            margin-top: 0;
        }

        .gdlr-login-form input[type="submit"] {
            margin-bottom: 0;
        }

        .gdlr-login-form input[type="checkbox"] {
            margin: 2px 10px 0 0;
            float: left;
        }

        .gdlr-login-form .login-remember {
            padding-top: 3px;
        }

        .gdlr-top-woocommerce-button {
            cursor: pointer;
            width: 15px;
            height: 18px;
            padding: 13px 4px 0;
            text-align: center;
            font-size: 10px;
            margin-top: -9px;
        }

        .gdlr-top-woocommerce-wrapper {
            float: right;
            margin-left: 10px;
            padding-left: 20px;
        }

        .gdlr-top-woocommerce {
            text-align: center;
            padding-top: 20px;
            display: none;
            position: absolute;
            right: 15px;
        }

        .gdlr-top-woocommerce .gdlr-top-woocommerce-inner {
            padding: 30px 45px 23px;
        }

        .gdlr-top-woocommerce .gdlr-cart-count {
            margin-bottom: 8px;
        }

        .gdlr-top-woocommerce .gdlr-cart-amount {
            margin-bottom: 20px;
        }

        .gdlr-top-woocommerce-inner>a {
            display: block;
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .gdlr-fixed-header .gdlr-header-inner-overlay,
        .gdlr-fixed-header .gdlr-navigation-slide-bar {
            display: none;
        }

        .gdlr-header-wrapper {
            position: relative;
            z-index: 99;
        }

        .gdlr-header-container {
            position: relative;
            z-index: 97;
        }

        .gdlr-logo {
            float: left;
            margin-left: 15px;
            margin-right: 15px;
        }

        .gdlr-logo h1 {
            margin-bottom: 0;
            line-height: 0;
        }

        .gdlr-fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 999;
        }

        .gdlr-fixed-header .gdlr-logo img {
            width: auto;
        }

        .gdlr-fixed-header .gdlr-main-menu>li>a {
            padding-bottom: 18px;
        }

        .gdlr-fixed-header.gdlr-header-inner {
            -moz-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
        }

        .gdlr-fixed-header .gdlr-navigation-wrapper .gdlr-main-menu>li>a {
            font-size: 13px;
            padding-bottom: 32px;
        }

        .admin-bar .gdlr-fixed-header {
            top: 32px;
        }

        .gdlr-navigation-wrapper {
            margin: 0 15px;
            float: right;
        }

        .gdlr-navigation-wrapper .gdlr-navigation-container {
            position: relative;
            line-height: 0;
        }

        .gdlr-navigation-wrapper .gdlr-main-menu>li {
            padding: 0;
        }

        .gdlr-navigation-wrapper .gdlr-main-menu>li>a {
            font-size: 13px;
            padding: 0 20px 45px;
            margin: 0;
            text-transform: uppercase;
        }

        .gdlr-navigation-wrapper .gdlr-main-menu>li:first-child>a {
            padding-left: 0;
        }

        .gdlr-navigation-wrapper .gdlr-main-menu>li>a.sf-with-ul,
        .gdlr-navigation-wrapper .gdlr-main-menu>li>a.sf-with-ul-pre {
            padding-right: 22px;
        }

        .gdlr-navigation-wrapper .gdlr-main-menu>li>a.sf-with-ul:after {
            display: none;
            top: 10px;
            right: 0;
        }

        .header-style-2 .gdlr-navigation-wrapper .gdlr-main-menu>li>a {
            padding-bottom: 40px;
        }

        .header-style-2 .gdlr-fixed-header .gdlr-navigation-wrapper .gdlr-main-menu>li>a {
            padding-bottom: 30px;
        }

        .body-wrapper.gdlr-header-transparent .gdlr-page-title-wrapper {
            padding-top: 200px;
            padding-bottom: 80px;
        }

        .body-wrapper.gdlr-header-transparent .gdlr-header-wrapper {
            position: absolute;
            left: 0;
            right: 0;
        }

        .body-wrapper.gdlr-header-transparent .gdlr-header-inner,
        .body-wrapper.gdlr-header-transparent .gdlr-header-wrapper {
            background: 0 0;
        }

        .body-wrapper.gdlr-header-transparent .gdlr-header-inner {
            position: relative;
            padding-top: 1px;
        }

        .body-wrapper.gdlr-header-transparent .gdlr-header-inner-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .gdlr-navigation-gimmick {
            position: absolute;
            height: 2px;
            z-index: -1;
        }

        .gdlr-page-title-wrapper {
            padding: 70px 0 62px;
            position: relative;
            z-index: 89;
            text-align: center;
            line-height: 1;
            background-repeat: repeat;
            background-position: center;
        }

        .gdlr-page-title-wrapper .gdlr-page-title-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: #000;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .gdlr-page-title-wrapper .gdlr-page-title-container {
            position: relative;
        }

        .gdlr-page-title-wrapper .gdlr-page-title {
            font-size: 28px;
            font-weight: 700;
            text-transform: uppercase;
            margin: 0 15px;
            display: block;
            letter-spacing: 3px;
        }

        .gdlr-page-title-wrapper .gdlr-page-caption {
            font-size: 13px;
            margin: 16px 15px 0;
            display: block;
            font-weight: 400;
            font-style: italic;
            letter-spacing: 1px;
        }

        .gdlr-page-title-wrapper .gdlr-page-title-gimmick {
            font-size: 20px;
            display: block;
            margin-top: 20px;
        }

        body.header-style-2 .gdlr-logo {
            float: none;
            margin-right: auto;
            margin-left: auto;
            text-align: center;
        }

        body.header-style-2 .gdlr-logo .gdlr-logo-inner {
            margin: 0 15px;
        }

        body.header-style-2 .gdlr-navigation-wrapper {
            margin-top: 0;
            float: none;
            text-align: center;
            line-height: 0;
        }

        body.header-style-2 .gdlr-navigation {
            text-align: left;
            display: inline-block;
            line-height: 1.7;
        }

        .gdlr-column-service-item.gdlr-type-2,
        .gdlr-column-service-item.gdlr-type-3,
        .gdlr-item-title-wrapper.pos-center,
        .page-not-found-block {
            text-align: center;
        }

        .gdlr-header-transparent .gdlr-page-title-wrapper .gdlr-page-title {
            font-size: 43px;
            font-weight: 300;
            letter-spacing: 5px;
        }

        .gdlr-header-transparent .gdlr-page-title-wrapper .gdlr-page-caption {
            font-size: 17px;
            margin: 30px 15px 0;
            letter-spacing: 1px;
            font-style: normal;
        }

        .gdlr-heading-shortcode.with-background {
            padding: 8px 19px;
            display: inline-block;
        }

        .gdlr-heading-shortcode i {
            margin-right: 10px;
        }

        .gdlr-color-wrapper,
        .gdlr-parallax-wrapper {
            overflow: hidden;
            background-position: center 0;
            background-repeat: repeat;
            position: relative;
        }

        .with-sidebar-container .with-sidebar-content {
            float: right;
        }

        .gdlr-widget-title {
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .gdlr-sidebar .gdlr-widget-title {
            display: inline-block;
            padding-right: 4px;
        }

        .widget.gdlr-widget {
            margin-bottom: 50px;
        }

        .gdlr-stunning-text-item.type-center {
            text-align: center;
            margin-bottom: 35px;
        }

        .gdlr-stunning-text-item.type-center .stunning-text-title {
            font-size: 33px;
            font-weight: 700;
            margin-bottom: 25px;
        }

        .gdlr-stunning-text-item.type-center .stunning-text-caption {
            font-size: 16px;
        }

        .gdlr-stunning-text-item.type-center .stunning-text-button {
            margin: 15px 0 0;
        }

        .gdlr-stunning-text-item.type-normal.gdlr-button-on {
            padding-right: 190px;
            position: relative;
        }

        .gdlr-stunning-text-item.type-normal .stunning-text-title {
            font-size: 29px;
            margin-bottom: 18px;
        }

        .gdlr-stunning-text-item.type-normal .stunning-text-caption {
            font-size: 16px;
        }

        .gdlr-stunning-text-item.type-normal .stunning-text-button {
            position: absolute;
            right: 0;
            top: 50%;
            margin-top: -22px;
            margin-right: 0;
        }

        .gdlr-full-size-wrapper .gdlr-item-title-wrapper .gdlr-item-title-carousel,
        .gdlr-stunning-text-item.with-padding .stunning-text-button {
            right: 40px;
        }

        .gdlr-stunning-text-item.with-padding {
            padding: 35px 35px 15px;
        }

        .gdlr-stunning-text-item.with-padding.with-border {
            border-width: 3px;
            border-style: solid;
        }

        .gdlr-stunning-text-item.with-padding.gdlr-button-on {
            padding-right: 180px;
        }

        .gdlr-stunning-text-item.with-padding .stunning-text-caption {
            margin-bottom: 20px;
        }

        .footer-wrapper {
            position: relative;
            background-repeat: no-repeat;
            background-position: right top;
        }

        .footer-wrapper a {
            cursor: pointer;
        }

        .footer-wrapper .widget.gdlr-widget {
            margin-bottom: 60px;
        }

        .footer-wrapper .gdlr-widget-title {
            margin-bottom: 35px;
        }

        .footer-container {
            padding-top: 60px;
        }

        .ie7 .footer-wrapper {
            overflow: hidden;
        }

        .copyright-left {
            margin: 0 15px;
            float: left;
        }

        .copyright-right {
            margin: 0 15px;
            float: right;
        }

        .copyright-wrapper {
            border-top-width: 1px;
            border-top-style: solid;
        }

        .copyright-container {
            padding: 20px 0;
            font-size: 13px;
        }

        .gdlr-shortcode-wrapper {
            margin-left: -15px;
            margin-right: -15px;
        }

        .page-not-found-block {
            padding: 50px 50px 60px;
            margin: 50px 0;
        }

        .page-not-found-block .page-not-found-title {
            font-size: 45px;
            line-height: 1;
            margin-bottom: 17px;
        }

        .page-not-found-block .page-not-found-caption {
            font-size: 20px;
            margin-bottom: 35px;
        }

        .page-not-found-block .page-not-found-icon {
            font-size: 89px;
            line-height: 1;
            margin-bottom: 20px;
        }

        .page-not-found-search {
            max-width: 300px;
            margin: 0 auto;
        }

        .page-not-found-search .gdl-search-form {
            padding-right: 30px;
        }

        .page-not-found-search .gdl-search-form input[type="text"] {
            padding: 12px 15px;
            font-size: 15px;
            border: none;
            -moz-border-radius: 0;
            -webkit-border-radius: 0;
            border-radius: 0;
        }

        .page-not-found-search .gdl-search-form input[type="submit"] {
            background-image: url(images/light/icon-search.png);
        }

        body.search .page-not-found-block {
            margin-top: 0;
        }

        .gdlr-full-size-wrapper .gdlr-modern-room .gdlr-room-thumbnail {
            margin-left: -1px;
        }

        .gdlr-full-size-wrapper .gdlr-modern-room.gdlr-item {
            margin-bottom: 20px;
        }

        .gdlr-full-size-wrapper .gdlr-item-title-wrapper.gdlr-item {
            margin-bottom: 55px;
        }

        .gdlr-full-size-wrapper .gdlr-modern-room .gdlr-room-detail,
        .gdlr-full-size-wrapper .gdlr-modern-room .gdlr-room-title {
            margin-left: 25px;
        }

        .gdlr-item-title-wrapper.gdlr-item {
            margin-bottom: 40px;
            position: relative;
        }

        .gdlr-item-title-wrapper .gdlr-item-title {
            margin-bottom: 0;
            line-height: 1;
            display: inline-block;
        }

        .gdlr-item-title-wrapper .gdlr-item-title-carousel {
            position: absolute;
            right: 0;
            top: 50%;
            margin-top: -11px;
        }

        .gdlr-item-title-wrapper .gdlr-flex-next,
        .gdlr-item-title-wrapper .gdlr-flex-prev {
            vertical-align: super;
            font-size: 20px;
            cursor: pointer;
            overflow: hidden;
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            transition: color 0.3s, background-color 0.3s;
            -moz-transition: color 0.3s, background-color 0.3s;
            -o-transition: color 0.3s, background-color 0.3s;
            -webkit-transition: color 0.3s, background-color 0.3s;
        }

        .gdlr-item-title-wrapper .gdlr-flex-prev {
            margin-right: 6px;
            padding: 9px 19px 11px 18px;
        }

        .gdlr-item-title-wrapper .gdlr-flex-next {
            margin: 0;
            padding: 9px 18px 11px 19px;
        }

        .gdlr-item-title-wrapper .gdlr-item-title-caption {
            margin-top: 28px;
            font-size: 16px;
        }

        .gdlr-item-title-wrapper .gdlr-item-title-link {
            margin-top: 27px;
            display: block;
            font-style: italic;
            letter-spacing: 1px;
        }

        .gdlr-item-title-wrapper .gdlr-item-title-link i {
            margin-right: 0;
            margin-left: 15px;
        }

        .gdlr-item-title-wrapper .gdlr-item-title-divider {
            border-bottom-width: 2px;
            border-bottom-style: solid;
        }

        .gdlr-item-title-wrapper.pos-center .gdlr-item-title-divider {
            width: 38px;
            margin: 34px auto 0;
            border-bottom-width: 3px;
        }

        .gdlr-item-title-wrapper.pos-center .gdlr-item-title {
            font-size: 27px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .gdlr-item-title-wrapper.pos-center .gdlr-item-title-caption {
            font-size: 14px;
            margin-top: 20px;
        }

        .gdlr-item-title-wrapper.pos-center-divider .gdlr-item-title {
            font-size: 37px;
            font-weight: 700;
            letter-spacing: 6px;
        }

        .gdlr-item-title-wrapper.pos-center-divider .gdlr-item-title-caption {
            font-size: 15px;
            letter-spacing: 3px;
            font-style: italic;
            margin-top: 30px;
        }

        .gdlr-item-title-wrapper.pos-left .gdlr-item-title {
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .gdlr-item-title-wrapper.pos-left .gdlr-item-title-divider {
            width: 34px;
            margin-top: 24px;
        }

        .gdlr-title-item {
            margin-bottom: 20px;
        }

        .gdlr-title-item .gdlr-item-title-wrapper.gdlr-item {
            margin-bottom: 0;
        }

        .accordion-tab>.accordion-content {
            display: none;
        }

        .accordion-tab.active>.accordion-content {
            display: block;
        }

        .gdlr-accordion-item.style-1 .accordion-tab {
            overflow: hidden;
            padding: 11px 0;
            border-top-width: 1px;
            border-top-style: solid;
        }

        .gdlr-accordion-item.style-1 .accordion-tab:first-child {
            border: 0;
            padding-top: 0;
        }

        .gdlr-accordion-item.style-1 .accordion-title {
            font-weight: 400;
            font-size: 17px;
            line-height: 26px;
            margin-bottom: 0;
            cursor: pointer;
            transition: color 0.2s;
            -moz-transition: color 0.2s;
            -o-transition: color 0.2s;
            -webkit-transition: color 0.2s;
        }

        .gdlr-accordion-item.style-1 .accordion-title i {
            margin-right: 25px;
            font-size: 13px;
            width: 9px;
            height: 13px;
            padding: 12px 14px 10px;
            display: inline-block;
            float: left;
            transition: color 0.2s, background-color 0.2s;
            -moz-transition: color 0.2s, background-color 0.2s;
            -o-transition: color 0.2s, background-color 0.2s;
            -webkit-transition: color 0.2s, background-color 0.2s;
        }

        .gdlr-accordion-item.style-1 .accordion-content {
            padding-top: 18px;
            margin-left: 62px;
        }

        .gdlr-accordion-item.style-1 .accordion-title span {
            overflow: hidden;
            display: block;
        }

        .gdlr-accordion-item.style-2 .accordion-tab {
            overflow: hidden;
            padding-bottom: 4px;
        }

        .gdlr-accordion-item.style-2 .accordion-title {
            padding-bottom: 16px;
            font-weight: 400;
            font-size: 15px;
            line-height: 18px;
            margin-bottom: 0;
            cursor: pointer;
        }

        .gdlr-accordion-item.style-2 .accordion-title i {
            margin-right: 20px;
            font-size: 13px;
        }

        .gdlr-accordion-item.style-2 .accordion-content {
            margin-left: 31px;
        }

        input[type="submit"],
        input[type="button"] {
            -webkit-appearance: none;
        }

        .gdlr-button,
        input[type="submit"],
        input[type="button"] {
            display: inline-block;
            font-size: 13px;
            font-weight: 700;
            font-style: italic;
            padding: 12px 25px;
            margin-bottom: 15px;
            margin-right: 5px;
            outline: 0;
            cursor: pointer;
            border: none;
            letter-spacing: 1px;
        }

        .gdlr-button.with-border,
        .gdlr-column-service-item .column-service-divider {
            border-bottom-width: 2px;
            border-bottom-style: solid;
        }

        .gdlr-button.small {
            font-size: 11px;
            padding: 12px 16px;
        }

        .gdlr-button.large {
            font-size: 14px;
            padding: 14px 25px;
        }

        .gdlr-button .gdlr-icon {
            margin-right: 5px;
            letter-spacing: 1px;
        }

        .gdlr-column-service-item .column-service-icon {
            margin-right: 15px;
            font-size: 30px;
            line-height: 18px;
        }

        .gdlr-column-service-item .column-service-icon i {
            margin: 0;
        }

        .gdlr-column-service-item .column-service-title {
            margin-bottom: 22px;
            font-size: 15px;
            line-height: 25px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .gdlr-column-service-item .column-service-image {
            margin-bottom: 26px;
        }

        .gdlr-column-service-item .column-service-divider {
            width: 32px;
            margin-bottom: 22px;
        }

        .gdlr-column-service-item.gdlr-type-1 .column-service-icon {
            float: left;
            margin-right: 25px;
        }

        .gdlr-column-service-item.gdlr-type-1 .column-service-icon.gdlr-skin-box {
            background: 0 0;
        }

        .gdlr-column-service-item.gdlr-type-1 .column-service-content-wrapper {
            overflow: hidden;
        }

        .gdlr-column-service-item.gdlr-type-2 .column-service-divider {
            margin: 0 auto 22px;
        }

        .gdlr-column-service-item.gdlr-type-2 .column-service-icon {
            width: 33px;
            height: 33px;
            font-size: 25px;
            line-height: 36px;
            padding: 20px;
            margin: 0 auto 30px;
            -moz-border-radius: 38px;
            -webkit-border-radius: 38px;
            border-radius: 38px;
        }

        .gdlr-column-service-item.gdlr-type-3 .column-service-image {
            max-width: 130px;
            margin: 0 auto 35px;
            overflow: hidden;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }

        .gdlr-column-service-item.gdlr-type-3 .column-service-image img {
            display: block;
        }

        .gdlr-column-service-item.gdlr-type-3 .column-service-divider {
            display: none;
        }

        .gdlr-column-service-item.gdlr-type-3 .column-service-title {
            font-size: 17px;
            letter-spacing: 2px;
            margin-bottom: 25px;
        }

        .gdlr-column-service-item.gdlr-type-3 .column-service-icon {
            width: 35px;
            height: 35px;
            font-size: 35px;
            line-height: 1;
            margin: 0 auto 30px;
        }

        .gdlr-divider.double,
        .gdlr-divider.double-dotted {
            height: 3px;
            border-top-width: 1px;
        }

        .gdlr-service-with-image-item .service-with-image-thumbnail {
            max-width: 125px;
            float: left;
            margin-right: 40px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            overflow: hidden;
        }

        .gdlr-service-with-image-item .service-with-image-thumbnail img {
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            overflow: hidden;
        }

        .gdlr-service-with-image-item .service-with-image-title {
            font-size: 17px;
            letter-spacing: 3px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 25px;
        }

        .gdlr-service-with-image-item .service-with-image-content-wrapper {
            overflow: hidden;
        }

        .gdlr-service-with-image-item.gdlr-right {
            text-align: right;
        }

        .gdlr-service-with-image-item.gdlr-right .service-with-image-thumbnail {
            float: right;
            margin-left: 40px;
            margin-right: 0;
        }

        .gdlr-feature-media-item .feature-media-button {
            margin-top: 15px;
        }

        .gdlr-feature-media-item.gdlr-left .feature-media-thumbnail {
            float: left;
            margin-right: 55px;
            width: 37%;
        }

        .gdlr-feature-media-item.gdlr-left .feature-media-content-wrapper {
            overflow: hidden;
        }

        .gdlr-feature-media-item.gdlr-center {
            text-align: center;
        }

        .gdlr-feature-media-item.gdlr-center .feature-media-thumbnail {
            max-width: 700px;
            margin: 0 auto 40px;
        }

        .gdlr-feature-media-item.gdlr-center .feature-media-content-wrapper {
            max-width: 700px;
            margin: 0 auto;
        }

        .gdlr-feature-media-item.gdlr-center .feature-media-divider {
            width: 300px;
            max-width: 100%;
            margin: 0 auto 40px;
            border-bottom-width: 5px;
            border-bottom-style: solid;
        }

        .gdlr-feature-media-item .gdlr-item-title-wrapper.gdlr-item {
            margin-left: 0;
            margin-right: 0;
            margin-top: 15px;
        }

        .gdlr-divider {
            border-bottom-width: 1px;
            border-style: solid;
            margin: 0 auto;
            max-width: 100%;
        }

        .gdlr-divider.dotted,
        .gdlr-divider.double-dotted {
            border-style: dashed;
        }

        .gdlr-divider.thick {
            border-bottom-width: 3px;
        }

        .gdlr-box-with-icon-item {
            text-align: center;
            padding: 40px 30px 20px;
            position: relative;
        }

        .gdlr-box-with-icon-item>i {
            font-size: 45px;
            display: inline-block;
            margin-bottom: 22px;
            margin-right: 0;
        }

        .gdlr-box-with-icon-item .box-with-icon-title {
            font-size: 20px;
            margin-bottom: 20px;
            display: block;
        }

        .gdlr-box-with-icon-item.pos-left {
            text-align: left;
            padding: 30px 40px 20px;
        }

        .gdlr-box-with-icon-item.pos-left>i {
            float: left;
            margin: 5px 25px 0 0;
        }

        .gdlr-box-with-icon-item.type-circle .box-with-circle-icon {
            padding: 18px;
            display: inline-block;
            position: absolute;
            -moz-border-radius: 30px;
            -webkit-border-radius: 30px;
            border-radius: 30px;
        }

        .gdlr-frame,
        .gdlr-image-link-shortcode {
            position: relative;
        }

        .gdlr-box-with-icon-item.type-circle .box-with-circle-icon>i {
            font-size: 22px;
            margin-right: 0;
        }

        .gdlr-box-with-icon-item.type-circle.pos-top {
            padding-top: 50px;
        }

        .gdlr-box-with-icon-item.type-circle.pos-top .box-with-circle-icon {
            top: -30px;
            left: 50%;
            margin-left: -30px;
        }

        .gdlr-box-with-icon-item.type-circle.pos-left {
            margin-left: 40px;
            padding-left: 50px;
        }

        .gdlr-box-with-icon-item.type-circle.pos-left .box-with-circle-icon {
            left: -30px;
            top: 50%;
            margin-top: -30px;
        }

        i.gdlr-icon {
            margin-right: 10px;
        }

        .gdlr-frame-shortcode {
            line-height: 1;
        }

        .gdlr-frame-shortcode.gdlr-align-left {
            float: left;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .gdlr-frame-shortcode.gdlr-align-right {
            float: right;
            margin-left: 20px;
            margin-bottom: 20px;
        }

        .gdlr-frame-shortcode.gdlr-align-center {
            text-align: center;
            margin-bottom: 20px;
        }

        .gdlr-frame-shortcode .gdlr-frame-caption {
            display: block;
            text-align: center;
            margin-top: 15px;
        }

        .gdlr-frame {
            display: inline-block;
            max-width: 100%;
        }

        .gdlr-frame img {
            display: block;
        }

        .gdlr-frame.frame-type-border {
            padding: 6px;
            border-style: solid;
            border-width: 1px;
        }

        .gdlr-frame.frame-type-solid {
            padding: 5px;
        }

        .gdlr-frame.frame-type-rounded {
            overflow: hidden;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

        .gdlr-frame.frame-type-border.frame-type-circle .gdlr-image-link-shortcode,
        .gdlr-frame.frame-type-circle,
        .gdlr-frame.frame-type-solid.frame-type-circle .gdlr-image-link-shortcode {
            overflow: hidden;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }

        .gdlr-frame.frame-type-border.frame-type-rounded .gdlr-image-link-shortcode,
        .gdlr-frame.frame-type-solid.frame-type-rounded .gdlr-image-link-shortcode {
            overflow: hidden;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

        .gdlr-image-frame-item {
            text-align: center;
            line-height: 0;
        }

        .gdlr-image-frame-item .image-frame-item {
            display: inline-block;
            line-height: 1;
        }

        .gdlr-image-link-shortcode .gdlr-image-link-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            cursor: pointer;
        }

        .gdlr-image-link-shortcode .gdlr-image-link-icon {
            padding: 25px;
            line-height: 1;
            display: inline-block;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -37px;
            margin-left: -37px;
            background: url(images/portfolio-icon-overlay.png);
            opacity: 0;
            -moz-border-radius: 37px;
            -webkit-border-radius: 37px;
            border-radius: 37px;
            filter: inherit;
        }

        .gdlr-image-link-shortcode .gdlr-image-link-icon i {
            margin-right: 0;
        }

        .gdlr-image-link-shortcode .gdlr-image-link-icon i.icon-link {
            font-size: 22px;
            padding: 1px;
        }

        .gdlr-image-link-shortcode .gdlr-image-link-icon i.icon-search {
            font-size: 22px;
            padding: 2px;
        }

        .gdlr-image-link-shortcode .gdlr-image-link-icon i.icon-play {
            font-size: 21px;
            margin-left: 0;
        }

        .gdlr-personnel-item.carousel.round-style {
            padding-top: 45px;
        }

        .gdlr-personnel-item.carousel .personnel-item {
            margin: 0 15px;
        }

        .gdlr-personnel-item.carousel.box-style .personnel-item {
            padding-top: 35px;
        }

        .gdlr-personnel-item.carousel .personnel-item:first-child {
            margin-left: 0;
        }

        .personnel-content .gdlr-icon {
            margin-right: 5px;
        }

        .gdlr-personnel-item.box-style .personnel-item-inner {
            padding: 25px 30px;
            position: relative;
        }

        .gdlr-personnel-item.box-style .personnel-item-inner:after {
            content: "";
            height: 0;
            width: 0;
            border: 12px solid transparent;
            position: absolute;
            right: 0;
            bottom: -24px;
        }

        .gdlr-personnel-item.box-style .personnel-info {
            margin-top: 30px;
            text-align: center;
        }

        .gdlr-personnel-item.box-style .personnel-author {
            font-size: 21px;
            font-weight: 700;
        }

        .gdlr-personnel-item.box-style .personnel-author-image {
            width: 65px;
            height: 65px;
            position: absolute;
            left: 50%;
            top: -35px;
            margin-left: -35px;
            border-width: 3px;
            border-style: solid;
            overflow: hidden;
            -moz-border-radius: 35px;
            -webkit-border-radius: 35px;
            border-radius: 35px;
        }

        .gdlr-personnel-item.box-style .personnel-position {
            font-size: 15px;
        }

        .gdlr-personnel-item.box-style .personnel-content {
            text-align: center;
            margin-top: 15px;
        }

        .gdlr-personnel-item.box-style .personnel-social {
            text-align: center;
            font-size: 20px;
            margin-top: 14px;
        }

        .gdlr-personnel-item.box-style .personnel-social i {
            margin: 0 1px;
        }

        .gdlr-personnel-item.plain-style .personnel-content,
        .gdlr-personnel-item.plain-style .personnel-info {
            margin-top: 20px;
            text-align: center;
        }

        .gdlr-personnel-item.plain-style .personnel-item-inner {
            padding: 25px 30px;
            position: relative;
        }

        .gdlr-personnel-item.plain-style .personnel-item-inner:after {
            content: "";
            height: 0;
            width: 0;
            border: 12px solid transparent;
            position: absolute;
            right: 0;
            bottom: -24px;
        }

        .gdlr-personnel-item.plain-style .personnel-author {
            font-size: 21px;
            font-weight: 700;
        }

        .gdlr-personnel-item.plain-style .personnel-position {
            font-size: 15px;
        }

        .gdlr-personnel-item.plain-style .personnel-social {
            text-align: center;
            font-size: 22px;
            margin-top: 14px;
        }

        .gdlr-personnel-item.box-style {
            margin-top: 35px;
        }

        .gdlr-personnel-item.plain-style .personnel-social i {
            margin: 0 10px 0 0;
        }

        .gdlr-personnel-item.round-style .personnel-author-image,
        .gdlr-personnel-item.round-style .personnel-item {
            position: relative;
            overflow: hidden;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }

        .gdlr-personnel-item.round-style .personnel-item img {
            display: block;
        }

        .gdlr-personnel-item.round-style .personnel-item-inner {
            position: absolute;
            opacity: 0;
            filter: alpha(opacity=0);
            top: 50%;
            left: 40px;
            right: 40px;
            text-align: center;
            background: 0 0;
        }

        .gdlr-personnel-item.round-style .personnel-author {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 2px;
        }

        .gdlr-personnel-item.round-style .personnel-position {
            font-size: 16px;
            font-style: italic;
        }

        .gdlr-personnel-item.round-style .personnel-content {
            margin-top: 20px;
        }

        .gdlr-pie-chart-item {
            text-align: center;
        }

        .gdlr-pie-chart-item .gdlr-chart {
            margin: 0 auto 30px;
        }

        .gdlr-pie-chart-item .pie-chart-title {
            font-size: 17px;
            font-weight: 400;
        }

        .gdlr-skill-bar-wrapper {
            margin-bottom: 15px;
        }

        .gdlr-skill-bar-wrapper .gdlr-skill-bar-progress {
            width: 0;
            position: relative;
        }

        .gdlr-skill-bar-wrapper.gdlr-size-small .gdlr-skill-bar-progress {
            height: 8px;
        }

        .gdlr-skill-bar-wrapper.gdlr-size-medium .gdlr-skill-bar-progress {
            padding: 8px 0;
            font-size: 15px;
        }

        .gdlr-skill-bar-wrapper.gdlr-size-large .gdlr-skill-bar-progress {
            padding: 14px 0;
            font-size: 17px;
        }

        .gdlr-skill-bar-wrapper .skill-bar-content {
            font-weight: 700;
        }

        .gdlr-skill-bar-wrapper.gdlr-size-small .skill-bar-content {
            margin-bottom: 10px;
            display: block;
            font-size: 14px;
        }

        .gdlr-skill-bar-wrapper.gdlr-size-small {
            margin-bottom: 20px;
        }

        .gdlr-skill-bar-wrapper.gdlr-size-medium .skill-bar-content {
            padding: 0 16px;
        }

        .gdlr-skill-bar-wrapper.gdlr-size-medium .skill-bar-content i {
            position: absolute;
            font-size: 15px;
            right: 8px;
            top: 50%;
            margin-top: -8px;
        }

        .gdlr-skill-bar-wrapper.gdlr-size-large .skill-bar-content {
            padding: 0 22px;
        }

        .gdlr-skill-bar-wrapper.gdlr-size-large .skill-bar-content i {
            position: absolute;
            font-size: 18px;
            right: 16px;
            top: 50%;
            margin-top: -9px;
        }

        .gdlr-skill-item-wrapper {
            text-align: center;
            line-height: 1;
        }

        .gdlr-skill-item-wrapper .gdlr-skill-item-title {
            font-size: 60px;
            font-weight: 700;
            margin-bottom: 11px;
        }

        .gdlr-skill-item-wrapper .gdlr-skill-item-dot {
            font-size: 25px;
            margin-bottom: 8px;
        }

        .gdlr-skill-item-wrapper .gdlr-skill-item-caption {
            font-size: 18px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .gdlr-skill-item-wrapper.gdlr-type-2 {
            margin: 0;
            padding: 80px 20px;
        }

        .gdlr-notification {
            padding: 13px;
        }

        .gdlr-notification>i {
            float: left;
            margin-right: 15px;
            margin-top: 3px;
        }

        .gdlr-notification>.notification-content {
            display: block;
            overflow: hidden;
        }

        .gdlr-notification.color-background {
            padding: 16px;
        }

        .gdlr-notification.color-border {
            border-width: 3px;
            border-style: solid;
        }

        .gdlr-tab-item.horizontal>.tab-title-wrapper {
            overflow: hidden;
        }

        .gdlr-tab-item.horizontal>.tab-title-wrapper .tab-title {
            float: left;
            border-style: solid;
            border-width: 1px 1px 1px 0;
            font-size: 13px;
            line-height: 19px;
            font-weight: 700;
            padding: 11px 20px;
            margin-bottom: 0;
            cursor: pointer;
        }

        .gdlr-tab-item.horizontal>.tab-title-wrapper .tab-title:first-child {
            border-left-width: 1px;
        }

        .gdlr-tab-item.horizontal>.tab-title-wrapper .tab-title i {
            margin-right: 10px;
        }

        .gdlr-tab-item.horizontal>.tab-title-wrapper .tab-title.active {
            border-bottom-width: 0;
            padding-bottom: 12px;
        }

        .gdlr-tab-item.horizontal>.tab-content-wrapper {
            margin-top: -1px;
            padding: 20px 20px 0;
            border-width: 1px;
            border-style: solid;
        }

        .gdlr-tab-item.horizontal>.tab-content-wrapper .tab-content {
            display: none;
        }

        .gdlr-tab-item.horizontal>.tab-content-wrapper .tab-content.active {
            display: block;
        }

        .gdlr-tab-item.vertical>.tab-title-wrapper {
            float: left;
            margin-right: -1px;
            max-width: 40%;
            text-align: center;
        }

        .gdlr-tab-item.vertical>.tab-title-wrapper .tab-title {
            border-style: solid;
            border-width: 0 1px 1px;
            font-size: 13px;
            line-height: 19px;
            font-weight: 700;
            padding: 11px 30px;
            margin-bottom: 0;
            cursor: pointer;
        }

        .gdlr-tab-item.vertical>.tab-title-wrapper .tab-title:first-child {
            border-top-width: 1px;
        }

        .gdlr-tab-item.vertical>.tab-title-wrapper .tab-title.active {
            padding-bottom: 12px;
            border-right-width: 0;
        }

        .gdlr-tab-item.vertical>.tab-title-wrapper .tab-title i {
            margin-right: 10px;
        }

        .gdlr-tab-item.vertical>.tab-content-wrapper {
            overflow: hidden;
            padding: 20px 20px 0;
            border-width: 1px;
            border-style: solid;
        }

        .gdlr-tab-item.vertical>.tab-content-wrapper .tab-content {
            display: none;
        }

        .gdlr-tab-item.vertical>.tab-content-wrapper .tab-content.active {
            display: block;
        }

        .gdlr-tab-item.vertical.right>.tab-title-wrapper {
            float: right;
            margin-left: -1px;
            margin-right: 0;
        }

        .gdlr-tab-item.vertical.right>.tab-title-wrapper .tab-title.active {
            border-right-width: 1px;
            border-left-width: 0;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            text-align: center;
        }

        table tr td {
            padding: 15px 0;
            border-bottom-width: 1px;
            border-bottom-style: solid;
        }

        table tr th {
            padding: 13px 0;
            font-size: 16px;
            font-weight: 400;
        }

        .gdlr-testimonial-item.box-style .testimonial-author,
        .gdlr-testimonial-item.round-style .testimonial-author {
            font-weight: 700;
        }

        table.style-2 {
            border-spacing: 2px;
            border-collapse: separate;
        }

        table.style-2 tr td {
            border-bottom-width: 0;
        }

        .gdlr-testimonial-item.carousel .testimonial-item {
            margin: 0 15px;
        }

        .gdlr-testimonial-item.carousel .testimonial-item:first-child {
            margin-left: 0;
        }

        .gdlr-testimonial-item.round-style .testimonial-item {
            padding-bottom: 35px;
        }

        .gdlr-testimonial-item.round-style .testimonial-item-inner {
            padding: 30px 30px 60px;
            position: relative;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }

        .gdlr-testimonial-item.round-style .testimonial-info {
            margin-top: 15px;
        }

        .gdlr-testimonial-item.round-style .testimonial-author-image {
            width: 65px;
            height: 65px;
            position: absolute;
            left: 50%;
            bottom: -35px;
            margin-left: -35px;
            border-width: 3px;
            border-style: solid;
            overflow: hidden;
            -moz-border-radius: 35px;
            -webkit-border-radius: 35px;
            border-radius: 35px;
        }

        .gdlr-testimonial-item.box-style .testimonial-item {
            padding-bottom: 75px;
        }

        .gdlr-testimonial-item.box-style .testimonial-item-inner {
            padding: 25px 30px;
            position: relative;
        }

        .gdlr-testimonial-item.box-style .testimonial-item-inner:after {
            content: "";
            height: 0;
            width: 0;
            border: 12px solid transparent;
            position: absolute;
            right: 0;
            bottom: -24px;
        }

        .gdlr-testimonial-item.box-style .testimonial-info {
            margin-top: 15px;
            text-align: right;
        }

        .gdlr-testimonial-item.box-style .testimonial-author-image {
            width: 65px;
            height: 65px;
            position: absolute;
            right: 34px;
            bottom: -75px;
        }

        .gdlr-testimonial-item.plain-style .testimonial-item {
            text-align: center;
            font-size: 16px;
        }

        .gdlr-testimonial-item.plain-style .testimonial-item-inner {
            padding: 25px 30px;
            position: relative;
        }

        .gdlr-testimonial-item.plain-style .testimonial-item-inner:after {
            content: "";
            height: 0;
            width: 0;
            border: 12px solid transparent;
            position: absolute;
            right: 0;
            bottom: -24px;
        }

        .gdlr-testimonial-item.plain-style .testimonial-info {
            margin-top: 15px;
            font-size: 17px;
            font-style: italic;
            letter-spacing: 1px;
        }

        .gdlr-testimonial-item.plain-style .testimonial-info:before {
            display: block;
            font-family: FontAwesome;
            content: "\f0dd";
            font-size: 13px;
            margin-bottom: 9px;
        }

        .gdlr-testimonial-item.plain-style.large {
            font-size: 20px;
        }

        blockquote {
            background-repeat: no-repeat;
            background-position: 20px 24px;
            font-size: 18px;
            font-style: italic;
            background-image: url(images/dark/quote-small.png);
            background-size: 24px 20px;
            padding: 20px 20px 0 60px;
            border-bottom-width: 1px;
            border-top-width: 1px;
            border-style: solid;
            margin-bottom: 20px;
        }

        blockquote.gdlr-align-left {
            width: 33%;
            float: left;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        blockquote.gdlr-align-right {
            width: 33%;
            float: right;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .gdlr-icon-light blockquote {
            background-image: url(images/light/quote-small.png);
        }

        div.gdlr-dropcap {
            font-size: 25px;
            font-size: 29px;
            width: 32px;
            height: 32px;
            line-height: 33px;
            text-align: center;
            float: left;
            margin: 2px 7px 0 2px;
        }

        div.gdlr-dropcap.gdlr-type-circle {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            font-size: 18px;
            margin-right: 10px;
        }

        .gdlr-styled-box-head-wrapper {
            overflow: hidden;
        }

        .gdlr-styled-box-head {
            overflow: hidden;
            height: 40px;
        }

        .gdlr-styled-box-corner {
            float: right;
            height: 0;
            width: 0;
            border-style: solid;
            border-width: 0 40px 40px 0;
            border-right-color: transparent;
        }

        .gdlr-styled-box-body {
            padding: 45px 40px 25px;
        }

        .gdlr-styled-box-body.with-head {
            padding-top: 5px;
        }

        .gdlr-styled-box-body .gdlr-styled-box-head-wrapper {
            overflow: hidden;
        }

        .gdlr-code-item {
            padding: 7px 15px;
            border-width: 1px;
            border-style: solid;
            overflow: hidden;
        }

        .gdlr-code-item .gdlr-code-title {
            font-weight: 700;
            cursor: pointer;
        }

        .gdlr-code-item .gdlr-code-title i {
            font-size: 9px;
            margin-right: 7px;
        }

        .gdlr-code-item .gdlr-code-content {
            padding: 8px 14px;
            display: none;
            line-height: 2;
        }

        .gdlr-code-item.active .gdlr-code-content {
            display: block;
            line-height: 2;
        }

        .gdlr-process-wrapper .gdlr-process-tab {
            padding-bottom: 10px;
            margin-bottom: 20px;
            position: relative;
        }

        .gdlr-process-wrapper .gdlr-process-tab .gdlr-process-icon {
            width: 24px;
            height: 24px;
            line-height: 24px;
            font-size: 22px;
            padding: 30px;
            overflow: hidden;
            border-width: 3px;
            border-style: solid;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }

        .gdlr-process-wrapper .gdlr-process-tab .gdlr-process-icon i {
            margin-right: 0;
        }

        .gdlr-process-wrapper .gdlr-process-tab .gdlr-process-tab-content {
            overflow: hidden;
        }

        .gdlr-process-wrapper .gdlr-process-tab .gdlr-process-title {
            font-size: 21px;
            margin-bottom: 17px;
            font-weight: 400;
        }

        .gdlr-process-wrapper .gdlr-process-tab .process-line,
        .gdlr-process-wrapper .gdlr-process-tab .process-line .process-line-divider {
            position: absolute;
        }

        .gdlr-process-wrapper.gdlr-vertical-process .gdlr-process-tab .gdlr-process-icon {
            float: left;
            margin-right: 30px;
            text-align: center;
        }

        .gdlr-process-wrapper.gdlr-vertical-process .gdlr-process-tab .process-line {
            top: 110px;
            bottom: 0;
            left: 35px;
            width: 20px;
        }

        .gdlr-process-wrapper.gdlr-vertical-process .gdlr-process-tab .process-line .process-line-divider {
            left: 50%;
            margin-left: -1px;
            bottom: 5px;
            top: 0;
            border-left-width: 1px;
            border-left-style: dashed;
        }

        .gdlr-process-wrapper.gdlr-vertical-process .gdlr-process-tab .process-line .fa-chevron-down,
        .gdlr-process-wrapper.gdlr-vertical-process .gdlr-process-tab .process-line .icon-chevron-down {
            position: absolute;
            bottom: 0;
            margin: 0;
            font-size: 20px;
        }

        .gdlr-process-wrapper.gdlr-horizontal-process {
            text-align: center;
        }

        .gdlr-process-wrapper.gdlr-horizontal-process .gdlr-process-tab .gdlr-process-icon {
            margin: 0 auto 30px;
        }

        .gdlr-process-wrapper.gdlr-horizontal-process .gdlr-process-tab .process-line {
            top: 35px;
            left: 50%;
            right: -50%;
            height: 20px;
        }

        .gdlr-process-wrapper.gdlr-horizontal-process .gdlr-process-tab .process-line .process-line-divider {
            left: 75px;
            right: 55px;
            top: 50%;
            margin-top: -1px;
            border-top-width: 1px;
            border-top-style: dashed;
        }

        .gdlr-process-wrapper.gdlr-horizontal-process .gdlr-process-tab .process-line .fa-chevron-right,
        .gdlr-process-wrapper.gdlr-horizontal-process .gdlr-process-tab .process-line .icon-chevron-right {
            position: absolute;
            right: 50px;
            margin: 0;
            font-size: 20px;
        }

        .gdlr-banner-images ul.slides li {
            margin: 0 15px;
            text-align: center;
        }

        .gdlr-banner-description-item .nav-container.style-1 .flex-direction-nav,
        .gdlr-banner-images ul.slides li:first-child {
            margin-left: 0;
        }

        .gdlr-banner-description-item .gdlr-banner-title {
            font-size: 23px;
            margin-bottom: 15px;
            font-weight: 400;
        }

        .gdlr-banner-description-item .gdlr-banner-description {
            margin-bottom: 25px;
        }

        .gdlr-banner-description-item .nav-container {
            overflow: hidden;
        }

        .gdlr-banner-description-item .nav-container.style-1 .flex-control-nav {
            display: none;
        }

        .gdlr-banner-images ul.slides li img {
            width: auto;
            display: inline-block;
        }

        .gdlr-banner-item-wrapper .flex-direction-nav {
            line-height: 1;
        }

        .gdlr-banner-item-wrapper .flex-direction-nav a {
            padding-top: 18px;
            padding-bottom: 18px;
        }

        .gdlr-banner-item-wrapper .flex-direction-nav .flex-prev {
            background: 0 0;
            left: -60px;
            opacity: 1;
            font-size: 30px;
        }

        .gdlr-banner-item-wrapper .flex-direction-nav .flex-next {
            background: 0 0;
            right: -60px;
            opacity: 1;
            font-size: 30px;
        }

        .gdlr-gallery-item.gdlr-item {
            margin: 0;
        }

        .gdlr-gallery-item.gdlr-item .gallery-item {
            margin: 0 15px 30px;
        }

        .gdlr-gallery-item.gdlr-item .gallery-item img {
            display: block;
            margin: 0 auto;
        }

        .gdlr-gallery-item.gdlr-item .gallery-caption {
            display: block;
            text-align: center;
            padding: 7px 0 6px;
        }

        .gdlr-gallery-item.gdlr-item.gdlr-gallery-thumbnail .gallery-item {
            padding: 5px;
            cursor: pointer;
        }

        .gdlr-gallery-item.gdlr-item .gdlr-gallery-thumbnail-container {
            margin: 0 15px 20px;
            position: relative;
            overflow: hidden;
        }

        .gdlr-gallery-item.gdlr-item .gdlr-gallery-thumbnail-container .gdlr-gallery-thumbnail {
            display: none;
        }

        .gdlr-gallery-item.gdlr-item .gdlr-gallery-thumbnail-container .gdlr-gallery-thumbnail:first-child {
            display: block;
        }

        .gdlr-gallery-item.gdlr-item .gdlr-gallery-thumbnail-container img {
            margin: 0 auto;
            display: block;
        }

        .gdlr-gallery-item.gdlr-item .gdlr-gallery-thumbnail-container .gallery-caption-wrapper {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
        }

        .gdlr-gallery-item.gdlr-item .gdlr-gallery-thumbnail-container .gallery-caption {
            padding: 10px 15px;
            opacity: 0.8;
            filter: alpha(opacity=80);
            display: inline-block;
            max-width: 60%;
        }

        .gdlr-banner-images.gdlr-item .flex-direction-nav i {
            margin-right: 0;
            font-size: 24px;
        }

        .gdlr-caption-wrapper {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 90;
        }

        .gdlr-caption-wrapper .gdlr-caption-inner {
            margin: 0 auto;
        }

        .gdlr-caption-wrapper.position-center {
            text-align: center;
        }

        .gdlr-caption-wrapper.position-left .gdlr-caption {
            float: left;
            text-align: left;
        }

        .gdlr-caption-wrapper.position-right .gdlr-caption {
            float: right;
            text-align: left;
        }

        .gdlr-caption-wrapper.position-center .gdlr-caption {
            display: inline-block;
        }

        .gdlr-caption-wrapper .gdlr-caption {
            max-width: 40%;
            padding: 25px 28px;
            opacity: 0.77;
            filter: alpha(opacity=77);
        }

        .gdlr-caption-wrapper .gdlr-caption .gdlr-caption-title {
            font-size: 24px;
            line-height: 1;
            margin-bottom: 10px;
        }

        .gdlr-full-size-wrapper .gdlr-caption-wrapper.position-post-right {
            max-width: 350px;
        }

        .gdlr-caption-wrapper.post-slider .gdlr-caption {
            max-width: none;
            background: 0 0;
        }

        .gdlr-caption-wrapper.post-slider .gdlr-caption .blog-info {
            float: left;
            margin-right: 10px;
            margin-bottom: 13px;
        }

        .gdlr-post-slider-item.style-post-bottom .gdlr-caption .blog-info {
            display: none;
        }

        .gdlr-caption-wrapper.position-post-left {
            right: auto;
            top: 0;
            max-width: 40%;
        }

        .gdlr-caption-wrapper.position-post-right {
            left: auto;
            top: 0;
            max-width: 40%;
        }

        .gdlr-post-slider-item.style-post-left .gdlr-caption,
        .gdlr-post-slider-item.style-post-right .gdlr-caption {
            padding: 30px 25px;
        }

        .gdlr-post-slider-item.style-post-left .flex-direction-nav .flex-prev {
            left: 40%;
        }

        .gdlr-post-slider-item.style-post-right .flex-direction-nav .flex-next {
            right: 40%;
        }

        .gdlr-caption-wrapper.post-slider,
        .gdlr-post-slider-item.style-post-left .flex-next,
        .gdlr-post-slider-item.style-post-left .flex-prev,
        .gdlr-post-slider-item.style-post-right .flex-next,
        .gdlr-post-slider-item.style-post-right .flex-prev {
            opacity: 0.8;
            filter: alpha(opacity=80);
        }

        .gdlr-post-slider-item {
            padding-bottom: 25px;
        }

        .gdlr-post-slider-item.style-no-excerpt .gdlr-caption-wrapper .gdlr-caption {
            position: relative;
            margin: 0;
            display: inline-block;
        }

        .gdlr-post-slider-item.style-no-excerpt .gdlr-caption-wrapper .gdlr-caption-inner {
            position: relative;
        }

        .gdlr-post-slider-item.style-no-excerpt .gdlr-caption-wrapper .gdlr-caption-date {
            position: absolute;
            top: -33px;
            left: 0;
            padding: 5px 12px;
        }

        .gdlr-post-slider-item.style-no-excerpt .gdlr-caption-wrapper .gdlr-caption-title {
            margin-bottom: 0;
        }

        .gdlr-post-slider-item.style-no-excerpt .gdlr-caption-wrapper .gdlr-title-link {
            font-size: 18px;
            position: absolute;
            right: -26px;
            top: 0;
            height: 30px;
            padding: 22px 10px;
        }

        .gdlr-post-slider-item.style-no-excerpt .gdlr-caption-wrapper .gdlr-title-link i {
            margin-right: 0;
        }

        .gdlr-stack-image {
            position: relative;
            margin-bottom: 40px;
        }

        .gdlr-stack-image img {
            display: block;
        }

        body .ls-v5 .ls-bottom-slidebuttons a {
            width: 18px;
        }

        body .ls-v5 .ls-bottom-slidebuttons,
        body .ls-v5 .ls-nav-sides,
        body .ls-v5 .ls-nav-start,
        body .ls-v5 .ls-nav-stop {
            top: -45px;
        }

        body .ls-v5 .ls-nav-prev {
            left: 20px;
        }

        body .ls-v5 .ls-nav-next {
            right: 20px;
        }

        body .ms-skin-default .ms-nav-next,
        body .ms-skin-default .ms-nav-prev {
            width: 27px;
            height: 46px;
            margin-top: -13px;
        }

        body .ms-skin-default .ms-nav-prev {
            background: url(images/master-slider-left.png);
        }

        body .ms-skin-default .ms-nav-next {
            background: url(images/master-slider-right.png);
        }

        body .ms-skin-default .ms-bullet {
            background-image: none;
            border-width: 2px;
            border-style: solid;
            border-color: #fff;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            transition: background-color 0.2s;
            -moz-transition: background-color 0.2s;
            -o-transition: background-color 0.2s;
            -webkit-transition: background-color 0.2s;
            margin-bottom: 20px;
            width: 8px;
            height: 8px;
        }

        body .ms-skin-default .ms-bullet-selected {
            background-image: none;
        }

        body .ms-skin-default .ms-inner-controls-cont {
            position: static;
        }

        body .ms-skin-default .ms-bullet.ms-bullet-selected,
        body .ms-skin-default .ms-bullet:hover {
            background: #949494;
        }

        body .ms-skin-default .ms-slide .ms-slide-vcbtn {
            top: auto;
            bottom: 60px;
            right: 50%;
            margin-right: -14px;
        }

        .gdlr-price-inner-item {
            margin: 0 3px;
            border-style: solid;
            border-width: 1px;
            -moz-box-shadow: 0 0 8px rgba(0, 0, 0, 0.08);
            -webkit-box-shadow: 0 0 8px rgba(0, 0, 0, 0.08);
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.08);
        }

        .gdlr-price-item .price-title-wrapper {
            padding-bottom: 5px;
            text-align: center;
        }

        .gdlr-price-item .price-title {
            font-size: 19px;
            padding: 6px 0;
            margin: 0;
        }

        .gdlr-price-item .price-tag {
            font-size: 22px;
            line-height: 1;
            padding: 25px 0;
            font-weight: 700;
            background-image: url(images/light/price-tag-shadow.png);
            background-position: 0 0;
            background-repeat: repeat-x;
        }

        .gdlr-price-item .price-content {
            text-align: center;
            font-size: 13px;
            line-height: 1.5;
            overflow: hidden;
            padding-bottom: 5px;
        }

        .gdlr-price-item .price-content ul {
            list-style: none;
            margin-left: 0;
        }

        .gdlr-price-item .price-content ul li {
            padding: 12px 20px;
            border-bottom-width: 1px;
            border-bottom-style: solid;
        }

        .gdlr-price-item .price-button {
            text-align: center;
        }

        .gdlr-price-item .price-button .gdlr-button {
            margin: 0 0 25px;
        }

        .gdlr-price-item .best-price {
            margin-top: -25px;
        }

        .gdlr-price-item .best-price .price-title {
            font-size: 22px;
        }

        .gdlr-price-item .best-price .price-tag {
            padding: 34px 20px;
            font-size: 30px;
        }

        .gdlr-price-item .best-price .price-button {
            padding-bottom: 15px;
        }

        .gdlr-pagination {
            margin: 0 20px 60px;
            text-align: right;
        }

        .gdlr-pagination a {
            cursor: pointer;
        }

        .gdlr-pagination .page-numbers.current {
            cursor: default;
        }

        .gdlr-pagination .page-numbers {
            display: inline-block;
            padding: 7px 12px;
            margin-right: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
        }

        .gdlr-social-share {
            margin-bottom: 40px;
            line-height: 1;
            padding: 27px 27px 22px;
        }

        .gdlr-comments-area .comments-title,
        .gdlr-post-author .post-author-title {
            padding-bottom: 8px;
            border-bottom-width: 0;
            border-bottom-style: solid;
            font-weight: 700;
            text-transform: uppercase;
        }

        .gdlr-social-share .social-share-title {
            font-size: 15px;
            line-height: 23px;
            font-weight: 700;
            float: left;
            margin-right: 20px;
            margin-bottom: 0;
        }

        .gdlr-social-share a {
            display: inline-block;
            width: 23px;
            margin-right: 6px;
            opacity: 0.5;
            filter: alpha(opacity=50);
        }

        .gdlr-social-share a:hover {
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .gdlr-social-share a img {
            display: block;
        }

        .gdlr-post-author {
            margin-bottom: 45px;
        }

        .gdlr-post-author .post-author {
            font-size: 17px;
            margin-bottom: 10px;
        }

        .gdlr-post-author .post-author-title {
            font-size: 17px;
            margin-bottom: 15px;
            padding-top: 10px;
        }

        .gdlr-post-author .post-author-avartar {
            float: left;
            margin-right: 20px;
        }

        .gdlr-post-author .post-author-content {
            overflow: hidden;
        }

        .gdlr-comments-area {
            margin-bottom: 0;
        }

        .gdlr-comments-area .comments-title {
            font-size: 12px;
            margin-bottom: 20px;
            padding-top: 30px;
            letter-spacing: 2px;
        }

        .gdlr-comments-area ol.commentlist {
            list-style: none;
            margin-left: 0;
        }

        .gdlr-comments-area ol.commentlist .comment-article {
            margin-bottom: 30px;
            padding-bottom: 5px;
            border-bottom-width: 1px;
            border-bottom-style: solid;
        }

        .gdlr-comments-area ol.commentlist ol.children {
            list-style: none;
            margin-left: 40px;
        }

        .gdlr-comments-area .comment-avatar {
            float: left;
            overflow: hidden;
            margin-right: 20px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }

        .gdlr-comments-area .comment-avatar img {
            display: block;
        }

        .gdlr-comments-area .comment-body {
            overflow: hidden;
            position: relative;
        }

        .gdlr-comments-area .comment-author {
            font-size: 15px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .gdlr-comments-area .comment-reply {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 15px;
        }

        .gdlr-comments-area .comment-reply i {
            margin-right: 12px;
        }

        .gdlr-comments-area .comment-time {
            line-height: 20px;
            margin-bottom: 5px;
        }

        .gdlr-comments-area .comment-time i {
            font-size: 16px;
            line-height: 20px;
            float: left;
            margin-right: 6px;
        }

        .gdlr-comments-area .comment-time time {
            font-style: italic;
        }

        .gdlr-comments-area .comment-content {
            margin-top: 15px;
        }

        .comment-respond .comment-form {
            width: 101%;
        }

        .comment-respond .comment-reply-title {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 15px;
            padding-top: 10px;
            padding-bottom: 8px;
            border-bottom-width: 0;
            border-bottom-style: solid;
            letter-spacing: 2px;
        }

        .comment-respond .comment-form-head>input {
            float: left;
            width: 28.5%;
            margin: 0 0 0 1.5%;
            padding: 11px 1.5%;
            border: 0;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
        }

        .comment-respond .comment-form-head>input:first-child {
            width: 30%;
            margin-left: 0;
        }

        .comment-respond .comment-form-comment>textarea {
            margin: 9px 0 0;
            padding: 11px 2%;
            width: 95%;
            border: 0;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            display: block;
        }

        .comment-respond .comment-form-comment>textarea:focus {
            outline: 0;
        }

        .comment-respond .form-submit>input[type="submit"] {
            margin-bottom: 0;
            margin-top: 20px;
            padding: 15px 20px;
            font-size: 11px;
        }

        .gdlr-blog-thumbnail {
            position: relative;
            background: #000;
        }

        .gdlr-blog-thumbnail .icon-bullhorn {
            margin-right: 9px;
        }

        .gdlr-blog-thumbnail .gdlr-sticky-banner {
            position: absolute;
            bottom: 0;
            font-size: 12px;
            font-weight: 700;
            padding: 7px 15px;
            text-transform: uppercase;
            right: 0;
        }

        .format-gallery .gdlr-blog-thumbnail,
        .gdlr-blog-thumbnail.gdlr-audio {
            background: 0 0;
        }

        .gdlr-blog-thumbnail>a>img {
            transition: opacity 0.3s;
            -moz-transition: opacity 0.3s;
            -o-transition: opacity 0.3s;
            -webkit-transition: opacity 0.3s;
        }

        .gdlr-blog-thumbnail>a>img:hover {
            opacity: 0.8;
            filter: alpha(opacity=80);
        }

        .gdlr-blog-carousel-item.gdlr-item .gdlr-blog-grid:first-child {
            margin-left: 0;
        }

        .gdlr-item.gdlr-blog-grid {
            margin-bottom: 50px;
        }

        .gdlr-blog-grid .gdlr-blog-title {
            font-size: 17px;
            margin-bottom: 15px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .gdlr-blog-grid .gdlr-blog-content {
            margin-bottom: 0;
        }

        .gdlr-blog-grid .gdlr-blog-thumbnail {
            margin-bottom: 22px;
        }

        .gdlr-blog-grid .gdlr-blog-thumbnail img {
            display: block;
            margin: 0 auto;
        }

        .gdlr-blog-grid .gdlr-blog-info {
            line-height: 18px;
            font-size: 13px;
            margin-bottom: 12px;
            font-style: italic;
        }

        .gdlr-blog-grid .gdlr-blog-info i {
            margin-right: 8px;
        }

        .gdlr-blog-grid .gdlr-blog-info .blog-info {
            float: left;
            margin-right: 20px;
        }

        .gdlr-blog-grid .excerpt-read-more {
            margin-top: 20px;
            font-style: italic;
            font-size: 13px;
            letter-spacing: 1px;
            display: inline-block;
        }

        .gdlr-blog-grid .excerpt-read-more i {
            margin-left: 15px;
        }

        .gdlr-blog-widget.gdlr-item {
            margin-bottom: 25px;
            padding-top: 25px;
            border-top-width: 1px;
            border-top-style: solid;
        }

        .gdlr-blog-widget.gdlr-item:first-child {
            padding-top: 0;
            border: none;
        }

        .gdlr-blog-widget .gdlr-blog-thumbnail {
            width: 133px;
            float: left;
        }

        .gdlr-blog-widget .gdlr-blog-thumbnail .gdlr-sticky-banner {
            display: none;
        }

        .gdlr-blog-widget .blog-date-wrapper {
            width: 46px;
            text-align: center;
            float: left;
            padding: 8px 3px;
            margin-right: 22px;
        }

        .gdlr-blog-widget .blog-date-wrapper span {
            display: block;
            line-height: 1;
            margin: 3px 0;
        }

        .gdlr-blog-widget .blog-date-wrapper .blog-date-day {
            font-size: 17px;
            font-weight: 700;
        }

        .gdlr-blog-widget .blog-date-wrapper .blog-date-month {
            font-size: 11px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .gdlr-blog-widget .gdlr-blog-title {
            font-size: 16px;
            margin-bottom: 12px;
            font-weight: 700;
        }

        .gdlr-blog-widget .excerpt-read-more {
            display: none;
        }

        .gdlr-blog-widget .post-header {
            overflow: hidden;
        }

        .blog-widget-right-text-link {
            font-size: 13px;
            margin: 0 15px 20px;
            font-style: italic;
            display: inline-block;
            letter-spacing: 1px;
        }

        .blog-widget-right-text-link i {
            margin-left: 15px;
        }

        .gdlr-item.gdlr-blog-medium {
            margin-bottom: 50px;
        }

        .gdlr-blog-medium .gdlr-blog-thumbnail {
            margin-right: 27px;
            float: left;
            width: 35%;
        }

        .gdlr-blog-medium .gdlr-blog-thumbnail img {
            display: block;
            margin: 0 auto;
        }

        .gdlr-blog-medium .gdlr-blog-content-wrapper {
            overflow: hidden;
        }

        .gdlr-blog-medium .gdlr-blog-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .gdlr-blog-medium .gdlr-blog-content {
            margin-bottom: 0;
        }

        .gdlr-blog-medium .gdlr-blog-info {
            line-height: 18px;
            font-size: 13px;
            margin-bottom: 12px;
            font-style: italic;
        }

        .gdlr-blog-medium .gdlr-blog-info i {
            margin-right: 8px;
        }

        .gdlr-blog-medium .gdlr-blog-info .blog-info {
            float: left;
            margin-right: 20px;
        }

        .gdlr-blog-medium .excerpt-read-more {
            margin-top: 20px;
            font-style: italic;
            font-size: 13px;
            letter-spacing: 1px;
            display: inline-block;
        }

        .gdlr-blog-medium .excerpt-read-more i {
            margin-left: 15px;
        }

        .gdlr-blog-medium .blog-date-wrapper {
            width: 50px;
            text-align: center;
            float: left;
            padding: 10px 2px;
            margin-right: 25px;
        }

        .gdlr-blog-medium .blog-date-wrapper span {
            display: block;
            line-height: 1;
            margin: 3px 0 5px;
        }

        .gdlr-blog-medium .blog-date-wrapper .blog-date-day {
            font-size: 20px;
            font-weight: 700;
        }

        .gdlr-blog-medium .blog-date-wrapper .blog-date-month {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .gdlr-item.gdlr-blog-full {
            margin-bottom: 40px;
        }

        .blog-item-holder .gdlr-blog-full .gdlr-blog-content {
            margin-bottom: 30px;
        }

        .gdlr-blog-full .gdlr-blog-title {
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .gdlr-blog-full .gdlr-blog-thumbnail {
            text-align: center;
            margin-bottom: 30px;
        }

        .gdlr-blog-full .gdlr-blog-thumbnail img {
            display: block;
            margin: 0 auto;
        }

        .gdlr-blog-full .gdlr-blog-info {
            line-height: 18px;
            font-size: 13px;
            margin-bottom: 10px;
            font-style: italic;
        }

        .gdlr-blog-full .gdlr-blog-info i {
            margin-right: 8px;
        }

        .gdlr-blog-full .gdlr-blog-info .blog-info {
            float: left;
            margin-right: 20px;
        }

        .gdlr-blog-full .excerpt-read-more {
            margin-top: 22px;
            font-style: italic;
            font-size: 13px;
            letter-spacing: 1px;
            display: inline-block;
        }

        .gdlr-blog-full .excerpt-read-more i {
            margin-left: 15px;
        }

        .gdlr-blog-full .blog-content-wrapper {
            overflow: hidden;
        }

        .gdlr-blog-full .blog-date-wrapper {
            width: 50px;
            text-align: center;
            float: left;
            padding: 10px 2px;
            margin-right: 28px;
        }

        .gdlr-blog-full .blog-date-wrapper span {
            display: block;
            line-height: 1;
            margin: 3px 0 5px;
        }

        .gdlr-blog-full .blog-date-wrapper .blog-date-day {
            font-size: 20px;
            font-weight: 700;
        }

        .gdlr-blog-full .blog-date-wrapper .blog-date-month {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .gdlr-blog-full .gdlr-single-blog-tag {
            margin-bottom: 40px;
        }

        .gdlr-blog-full .gdlr-single-blog-tag i {
            font-size: 16px;
            line-height: 16px;
            padding-top: 6px;
            margin-right: 20px;
            float: left;
        }

        .gdlr-blog-full .gdlr-single-blog-tag a {
            line-height: 12px;
            padding: 8px 13px;
            display: inline-block;
            margin-right: 5px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
        }

        .gdlr-blog-full .gdlr-single-blog-tag .sep,
        .gdlr-blog-thumbnail .flex-control-nav {
            display: none;
        }

        body.single .gdlr-blog-full {
            border-bottom: 0;
        }

        .gdlr-blog-thumbnail .flexslider .flex-next,
        .gdlr-blog-thumbnail .flexslider .flex-prev {
            opacity: 0.7;
        }

        .gdlr-single-nav>div i {
            font-size: 18px;
            line-height: 20px;
            padding: 5px 12px;
            background: 0 0 !important;
        }

        .single-post .gdlr-single-nav {
            margin-bottom: 65px;
            width: 100%;
        }

        .single-post .gdlr-single-nav>div.previous-nav {
            padding-right: 10px;
            float: left;
        }

        .single-post .gdlr-single-nav>div.previous-nav i {
            margin-right: 8px;
        }

        .single-post .gdlr-single-nav>div.next-nav {
            padding-left: 10px;
            float: right;
            text-align: right;
        }

        .single-post .gdlr-single-nav>div.next-nav i {
            margin-left: 8px;
        }

        .gdlr-outer-nav.gdlr-nav-container i {
            font-size: 30px;
            position: absolute;
            top: 50%;
            margin-top: -4px;
        }

        .gdlr-outer-nav.gdlr-nav-container span {
            cursor: pointer;
            transition: background-color 0.2s;
            -moz-transition: background-color 0.2s;
            -o-transition: background-color 0.2s;
            -webkit-transition: background-color 0.2s;
            -moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.15);
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.15);
        }

        .gdlr-outer-nav.gdlr-nav-container span.gdlr-flex-next {
            display: block;
            position: absolute;
            padding: 0 15px;
            right: 0;
            top: 0;
            bottom: 0;
            width: 13px;
        }

        .gdlr-outer-nav.gdlr-nav-container span.gdlr-flex-next i {
            margin-left: 5px;
        }

        .gdlr-outer-nav.gdlr-nav-container span.gdlr-flex-prev {
            display: block;
            position: absolute;
            padding: 0 15px;
            left: 0;
            top: 0;
            bottom: 0;
            width: 13px;
        }

        .gdlr-outer-nav.gdlr-nav-container span.gdlr-flex-prev i {
            margin-right: 5px;
        }

        .gdlr-single-lightbox {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 199;
            overflow-y: auto;
        }

        .gdlr-single-lightbox-overlay {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: url(images/port-loader.gif) center no-repeat #111;
            padding: 5px;
            opacity: 0.8;
            filter: alpha(opacity=80);
        }

        .gdlr-single-lightbox-wrapper {
            margin-top: 80px;
            margin-bottom: 80px;
        }

        .gdlr-single-lightbox-close .gdlr-exit {
            width: 25px;
            height: 25px;
            padding: 25px;
            float: right;
            cursor: pointer;
            background: url(images/single-port-close.png) center no-repeat #000;
        }

        .gdlr-single-lightbox-container {
            padding: 40px;
        }

        .gdlr-single-lightbox-title {
            margin: 20px 20px 0;
            font-size: 29px;
            text-transform: uppercase;
            font-weight: 700;
            text-align: center;
        }

        .gdlr-portfolio-info .portfolio-info .info-head {
            font-weight: 700;
            margin-right: 7px;
        }

        .gdlr-portfolio-info .gdlr-social-share {
            padding: 10px 0 0;
            background: 0 0;
        }

        .gdlr-portfolio-info .social-share-title {
            display: none;
        }

        .single-portfolio .gdlr-single-nav i {
            margin-right: 2px;
        }

        .single-portfolio .gdlr-single-nav>div.next-nav,
        .single-portfolio .gdlr-single-nav>div.previous-nav {
            float: left;
        }

        .single-portfolio .gdlr-single-nav {
            position: absolute;
            right: 0;
            top: 5px;
        }

        .gdlr-related-portfolio .head {
            font-size: 24px;
            font-weight: 700;
            margin: 0 20px 30px;
        }

        .gdlr-related-portfolio.portfolio-item-holder {
            margin-bottom: 25px;
        }

        .gdlr-portfolio-style1 .gdlr-portfolio-thumbnail {
            text-align: center;
            margin-bottom: 55px;
        }

        .gdlr-portfolio-style1 .gdlr-portfolio-thumbnail img {
            display: block;
            margin: 0 auto;
        }

        .gdlr-portfolio-style1 .gdlr-portfolio-description {
            width: 62%;
            float: left;
            margin-right: 3%;
            position: relative;
        }

        .gdlr-portfolio-style1 .gdlr-portfolio-content .head {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .gdlr-portfolio-style1 .gdlr-portfolio-info {
            width: 35%;
            float: right;
            position: relative;
        }

        .gdlr-portfolio-style1 .portfolio-info {
            padding-bottom: 10px;
            margin-bottom: 10px;
            border-bottom-width: 1px;
            border-bottom-style: solid;
        }

        .gdlr-class-both-sidebar .gdlr-portfolio-style1 .gdlr-portfolio-description,
        .gdlr-class-left-sidebar .gdlr-portfolio-style1 .gdlr-portfolio-description,
        .gdlr-class-right-sidebar .gdlr-portfolio-style1 .gdlr-portfolio-description {
            float: none;
            margin-right: 0;
            width: auto;
        }

        .gdlr-class-both-sidebar .gdlr-portfolio-style1 .gdlr-portfolio-info,
        .gdlr-class-left-sidebar .gdlr-portfolio-style1 .gdlr-portfolio-info,
        .gdlr-class-right-sidebar .gdlr-portfolio-style1 .gdlr-portfolio-info {
            width: auto;
            float: none;
            margin-bottom: 30px;
        }

        .gdlr-portfolio-style2.gdlr-item-start-content {
            margin-bottom: 35px;
        }

        .gdlr-portfolio-style2 .gdlr-portfolio-thumbnail {
            text-align: center;
            margin: 0 30px 30px 0;
            max-width: 60%;
            float: left;
        }

        .gdlr-portfolio-style2 .gdlr-portfolio-thumbnail.gdlr-slider,
        .gdlr-portfolio-style2 .gdlr-portfolio-thumbnail.gdlr-video {
            width: 60%;
        }

        .gdlr-portfolio-style2 .gdlr-portfolio-thumbnail img {
            display: block;
            margin: 0 auto;
        }

        .gdlr-portfolio-style2 .gdlr-portfolio-content {
            overflow: hidden;
            position: relative;
        }

        .gdlr-portfolio-style2 .gdlr-portfolio-content .head {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
        }

        .gdlr-portfolio-style2 .gdlr-portfolio-info {
            margin-bottom: 45px;
        }

        .gdlr-portfolio-style2 .portfolio-info {
            padding-bottom: 10px;
            margin-bottom: 10px;
            border-bottom-width: 1px;
            border-bottom-style: solid;
        }

        .gdlr-class-both-sidebar .gdlr-portfolio-style2 .gdlr-portfolio-thumbnail,
        .gdlr-class-left-sidebar .gdlr-portfolio-style2 .gdlr-portfolio-thumbnail,
        .gdlr-class-right-sidebar .gdlr-portfolio-style2 .gdlr-portfolio-thumbnail {
            max-width: 100%;
            float: none;
            margin-right: 0;
            margin-left: 0;
            width: auto !important;
        }

        .portfolio-thumbnail {
            position: relative;
            overflow: hidden;
        }

        .portfolio-thumbnail .flex-control-nav {
            display: none;
        }

        .portfolio-thumbnail .portfolio-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .portfolio-thumbnail .portfolio-icon {
            line-height: 1;
            display: inline-block;
            filter: inherit;
            padding: 16px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
        }

        .portfolio-thumbnail .portfolio-icon i {
            font-size: 17px;
            margin: 0;
            display: inline-block;
        }

        .gdlr-classic-portfolio .portfolio-info .info-head,
        .gdlr-classic-portfolio .portfolio-thumbnail.gdlr-video .portfolio-content-wrapper {
            display: none;
        }

        .portfolio-thumbnail .portfolio-icon i.fa-link,
        .portfolio-thumbnail .portfolio-icon i.icon-link {
            padding: 2px 0 0;
        }

        .portfolio-thumbnail .portfolio-icon i.fa-search,
        .portfolio-thumbnail .portfolio-icon i.icon-search {
            padding: 2px;
        }

        .portfolio-thumbnail .flexslider .flex-next,
        .portfolio-thumbnail .flexslider .flex-prev {
            opacity: 0.7;
        }

        .gdlr-classic-portfolio.gdlr-item {
            margin-bottom: 45px;
        }

        .gdlr-classic-portfolio .portfolio-thumbnail {
            margin-bottom: 28px;
            text-align: center;
            font-size: 0;
        }

        .gdlr-classic-portfolio .portfolio-thumbnail .portfolio-overlay-content {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            text-align: center;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .gdlr-classic-portfolio .portfolio-title {
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .gdlr-classic-portfolio .excerpt-read-more,
        .gdlr-classic-portfolio .portfolio-info {
            font-size: 13px;
            letter-spacing: 1px;
            font-style: italic;
        }

        .gdlr-classic-portfolio .portfolio-excerpt {
            margin-top: 16px;
        }

        .gdlr-classic-portfolio .excerpt-read-more {
            margin-top: 18px;
            display: inline-block;
        }

        .gdlr-modern-portfolio .portfolio-info .info-head,
        .gdlr-modern-portfolio .portfolio-thumbnail.gdlr-video .portfolio-content-wrapper,
        .portfolio-item-filter .gdlr-saperator:first-child {
            display: none;
        }

        .gdlr-recent-room-widget .recent-room-widget-title,
        .gdlr-video-content-title,
        .list-with-icon .list-with-icon-title {
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .gdlr-classic-portfolio .excerpt-read-more i {
            margin-left: 13px;
        }

        .gdlr-classic-portfolio .gdlr-pagination {
            margin-top: 10px;
            position: relative;
            z-index: 10;
        }

        .gdlr-item-no-space .gdlr-modern-portfolio.gdlr-item {
            margin-bottom: 0;
        }

        .type-modern-portfolio-no-space .gdlr-pagination {
            margin-top: 50px;
        }

        .gdlr-modern-portfolio.gdlr-item {
            margin-bottom: 40px;
        }

        .gdlr-modern-portfolio .portfolio-thumbnail {
            font-size: 0;
            text-align: center;
        }

        .gdlr-modern-portfolio .portfolio-thumbnail .portfolio-overlay-content {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            text-align: center;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .gdlr-modern-portfolio .portfolio-title {
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .gdlr-modern-portfolio .portfolio-info {
            font-size: 13px;
            position: relative;
        }

        .gdlr-modern-portfolio .portfolio-thumbnail .portfolio-icon {
            margin-bottom: 40px;
            margin-top: 40px;
        }

        .type-modern-portfolio .gdlr-pagination {
            margin-top: 20px;
        }

        .gdlr-portfolio-carousel-item .gdlr-portfolio-item:first-child {
            margin-left: 0;
        }

        .portfolio-item-filter {
            margin: 0 15px;
            text-align: center;
            padding-bottom: 40px;
        }

        .portfolio-item-filter a {
            font-size: 16px;
        }

        .portfolio-item-filter .gdlr-saperator {
            margin: 0 18px;
        }

        .gdlr-now-loading {
            height: 32px;
            padding: 40px 0 80px;
            display: none;
            background: url(images/dark/now-loading.gif) center no-repeat;
        }

        .list-with-icon {
            margin-bottom: 55px;
            padding-bottom: 0;
            margin-top: 3px;
        }

        .list-with-icon .list-with-icon-title i {
            font-size: 23px;
            line-height: 25px;
        }

        .list-with-icon .list-with-icon-title {
            overflow: hidden;
            font-size: 15px;
            margin-bottom: 8px;
        }

        .list-with-icon.gdlr-left {
            text-align: left;
        }

        .list-with-icon.gdlr-left .list-with-icon-title i {
            margin-left: 18px;
        }

        .list-with-icon.gdlr-right {
            text-align: right;
        }

        .list-with-icon.gdlr-right .list-with-icon-title i {
            margin-right: 18px;
        }

        .format-aside .gdlr-blog-content {
            font-size: 20px;
            font-style: italic;
            padding: 30px;
            line-height: 1.5;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5 px;
        }

        .format-aside .gdlr-blog-content p:last-child {
            margin-bottom: 0;
        }

        .format-quote .gdlr-top-quote blockquote {
            font-weight: 700;
            font-size: 25px;
            font-style: normal;
            line-height: 1.4;
            padding: 0 0 0 55px;
            border-top-width: 0;
            border-bottom-width: 0;
            background-size: 34px 29px;
            background-position: 0 7px;
            background-image: url(images/dark/quote.png);
        }

        .post.format-link,
        .post.format-quote .gdlr-blog-content {
            border-top-width: 1px;
            border-bottom-width: 1px;
            border-top-style: dashed;
            border-bottom-style: dashed;
        }

        .gdlr-icon-light .format-quote .gdlr-top-quote blockquote {
            background-image: url(images/light/quote.png);
        }

        .format-quote .gdlr-top-quote blockquote,
        .format-quote .gdlr-top-quote blockquote p {
            margin-bottom: 12px;
        }

        .format-quote .gdlr-quote-author {
            font-size: 14px;
            font-weight: 700;
            padding-left: 55px;
        }

        .post.format-quote .gdlr-blog-content {
            padding-top: 40px;
            padding-bottom: 20px;
        }

        .format-link .gdlr-blog-content,
        .gdlr-blog-full .post.format-link .gdlr-blog-content {
            margin-bottom: 0;
        }

        .post.format-link {
            margin-bottom: 70px;
            padding: 40px 0;
        }

        .gdlr-blog-full .post.format-link .gdlr-blog-title {
            margin-bottom: 5px;
        }

        .gdlr-blog-content {
            margin-bottom: 50px;
        }

        .gdlr-video-content {
            margin-top: 17px;
        }

        .gdlr-video-content-title {
            font-size: 14px;
            margin-top: 26px;
            margin-bottom: 0;
        }

        .widget_archive ul,
        .widget_categories ul,
        .widget_meta ul,
        .widget_nav_menu ul,
        .widget_pages ul,
        .widget_recent_comments ul,
        .widget_recent_entries ul,
        .widget_rss ul {
            position: relative;
            list-style: none;
            margin-left: 0;
        }

        .widget_archive ul ul,
        .widget_categories ul ul,
        .widget_meta ul ul,
        .widget_nav_menu ul ul,
        .widget_pages ul ul,
        .widget_recent_comments ul ul,
        .widget_recent_entries ul ul,
        .widget_rss ul ul {
            margin-top: 15px;
            margin-bottom: 0;
        }

        .widget_archive ul ul li:last-child,
        .widget_categories ul ul li:last-child,
        .widget_meta ul ul li:last-child,
        .widget_nav_menu ul ul li:last-child,
        .widget_pages ul ul li:last-child,
        .widget_recent_comments ul ul li:last-child,
        .widget_recent_entries ul ul li:last-child,
        .widget_rss ul ul li:last-child {
            padding-bottom: 0;
            margin-bottom: 0;
            border-bottom-width: 0;
        }

        .widget_archive ul li,
        .widget_categories ul li,
        .widget_meta ul li,
        .widget_nav_menu ul li,
        .widget_pages ul li,
        .widget_recent_comments ul li,
        .widget_recent_entries ul li,
        .widget_rss ul li {
            margin-bottom: 10px;
            padding-left: 25px;
            line-height: 20px;
            padding-bottom: 10px;
            border-bottom-width: 1px;
            border-bottom-style: solid;
        }

        .widget_archive ul li:before,
        .widget_categories ul li:before,
        .widget_meta ul li:before,
        .widget_nav_menu ul li:before,
        .widget_pages ul li:before,
        .widget_recent_comments ul li:before,
        .widget_recent_entries ul li:before,
        .widget_rss ul li:before {
            content: "\f105";
            font-family: FontAwesome;
            text-align: center;
            position: absolute;
            left: 0;
            display: block;
            height: 20px;
            width: 20px;
            margin-top: -1px;
        }

        .tagcloud a {
            font-size: 11px !important;
            display: block;
            float: left;
            padding: 5px 10px;
            margin-right: 7px;
            margin-top: 7px;
            border: 0 solid;
            border-color: inherit;
            font-weight: 700;
            text-transform: uppercase;
        }

        .tagcloud a:hover {
            opacity: 0.8;
            filter: alpha(opacity=80);
        }

        .tagcloud {
            display: inline-block;
        }

        .gdl-search-form {
            position: relative;
            padding-right: 32px;
        }

        .gdl-search-form input[type="text"] {
            border-width: 1px;
            border-style: solid;
            width: 100%;
            padding: 15px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            font-size: 13px;
        }

        .gdl-search-form input[type="submit"] {
            position: absolute;
            right: 15px;
            top: 50%;
            margin: -8px 0 0;
            width: 16px;
            height: 16px;
            padding: 0;
            background-color: transparent !important;
            background-size: 16px 16px;
            background-image: url(images/dark/icon-search.png);
            border: none;
        }

        .gdlr-navigation-wrapper {
            line-height: 0;
        }

        .gdlr-navigation-wrapper .gdlr-navigation {
            display: inline-block;
            line-height: 1.7;
        }

        .gdlr-navigation-wrapper .gdlr-menu-search-button-sep {
            vertical-align: top;
            margin: -3px 30px 0 10px;
            line-height: 24px;
        }

        .gdlr-navigation-wrapper .gdlr-menu-search-button {
            vertical-align: top;
            margin: 1px 0 0;
            cursor: pointer;
        }

        #gdlr-menu-search {
            position: absolute;
            top: 100%;
            right: 15px;
            width: 250px;
            display: none;
        }

        #gdlr-menu-search input[type="text"] {
            margin: 0;
            background: 0 0;
            padding: 20px 23px;
        }

        .recent-post-widget,
        .top-rated-post-widget {
            padding-bottom: 15px;
            border-bottom-width: 1px;
            border-bottom-style: solid;
        }

        #gdlr-menu-search input[type="submit"] {
            display: none;
        }

        .recent-post-widget {
            margin-bottom: 15px;
        }

        .recent-post-widget .recent-post-widget-thumbnail {
            max-width: 70px;
            float: left;
            margin-right: 15px;
        }

        .recent-post-widget .recent-post-widget-thumbnail img {
            display: block;
        }

        .recent-post-widget .recent-post-widget-content {
            overflow: hidden;
            margin-top: 5px;
        }

        .recent-post-widget .recent-post-widget-title {
            font-size: 13px;
            margin-bottom: 6px;
            margin-top: 2px;
        }

        .recent-post-widget .recent-post-widget-info {
            line-height: 22px;
        }

        .recent-post-widget .recent-post-widget-info i {
            font-size: 15px;
            margin-right: 9px;
        }

        .top-rated-post-widget {
            margin-bottom: 15px;
            overflow: hidden;
        }

        .top-rated-post-widget .top-rated-post-rating {
            color: #fff;
            background: #f5be3b;
            width: 26px;
            height: 20px;
            padding: 15px 12px;
            text-align: center;
            float: left;
            margin-right: 20px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            font-size: 13px;
            font-weight: 700;
            line-height: 19px;
        }

        .wpcf7 input:focus::input-placeholder,
        .wpcf7 textarea:focus::input-placeholder {
            color: transparent;
        }

        .top-rated-post-widget .top-rated-post-title {
            overflow: hidden;
            margin-top: 10px;
        }

        .gdlr-recent-room-widget .recent-room-widget {
            margin-bottom: 20px;
        }

        .gdlr-recent-room-widget .recent-room-widget-thumbnail {
            float: left;
            max-width: 70px;
            margin-right: 20px;
        }

        .gdlr-recent-room-widget .recent-room-widget-content {
            overflow: hidden;
        }

        .gdlr-recent-room-widget .recent-room-widget-title {
            font-size: 13px;
            margin-bottom: 8px;
            margin-top: 5px;
        }

        .gdlr-recent-room-widget .recent-room-widget-info {
            font-size: 11px;
            font-style: italic;
        }

        .gdlr-recent-room-widget .recent-room-widget-info i {
            margin-left: 10px;
        }

        .gdlr-recent-comment-widget .recent-comment-widget-thumbnail {
            overflow: hidden;
            float: left;
            margin-right: 20px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }

        .gdlr-recent-comment-widget .recent-comment-widget-content {
            overflow: hidden;
        }

        .gdlr-recent-comment-widget .recent-commnet-widget {
            padding-bottom: 20px;
            margin-bottom: 20px;
            border-bottom-width: 1px;
            border-bottom-style: solid;
        }

        .gdlr-recent-comment-widget .recent-comment-widget-title {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .gdlr-recent-comment-widget .recent-comment-widget-info {
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        ul.gdlr-twitter-widget {
            list-style: none;
            margin-left: 0;
        }

        ul.gdlr-twitter-widget li {
            margin-bottom: 20px;
            border-bottom-width: 1px;
            border-bottom-style: solid;
        }

        ul.gdlr-twitter-widget li:before {
            font-size: 19px;
            line-height: 24px;
            float: left;
            margin-right: 20px;
            margin-top: 2px;
            font-family: FontAwesome;
            content: "\f099";
        }

        ul.gdlr-twitter-widget li .gdlr-twitter {
            margin-bottom: 20px;
            overflow: hidden;
        }

        .gdlr-flickr-widget .flickr_badge_image,
        .gdlr-recent-port2-widget .recent-port-widget-thumbnail {
            max-width: 70px;
            margin-right: 15px;
            margin-bottom: 15px;
            float: left;
        }

        .footer-wrapper .gdlr-recent-port2-widget .recent-port-widget-thumbnail {
            max-width: 70px;
        }

        .footer-wrapper .gdlr-flickr-widget .flickr_badge_image {
            max-width: 57px;
        }

        .gdlr-post-slider-widget .flex-control-nav {
            display: none;
        }

        .gdlr-post-slider-widget .gdlr-caption-title {
            padding: 7px;
            font-size: 13px;
            text-align: center;
        }

        .gdlr-post-slider-widget .flex-direction-nav li a {
            padding-top: 15px;
            padding-bottom: 15px;
            margin-top: -30px;
        }

        .widget_calendar caption {
            font-size: 14px;
            margin-bottom: 14px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .widget_calendar th {
            font-size: 11px;
            font-weight: 700;
        }

        .widget_calendar table,
        .widget_calendar td,
        .widget_calendar tr {
            padding: 10px 0;
        }

        .widget_calendar table tfoot td {
            border-bottom: 0;
        }

        .isotope-item {
            z-index: 2;
        }

        .isotope-hidden.isotope-item {
            pointer-events: none;
            z-index: 1;
        }

        .isotope,
        .isotope .isotope-item {
            -webkit-transition-duration: 0.8s;
            -moz-transition-duration: 0.8s;
            -ms-transition-duration: 0.8s;
            -o-transition-duration: 0.8s;
            transition-duration: 0.8s;
        }

        .isotope {
            -webkit-transition-property: height, width;
            -moz-transition-property: height, width;
            -ms-transition-property: height, width;
            -o-transition-property: height, width;
            transition-property: height, width;
        }

        .isotope .isotope-item {
            -webkit-transition-property: -webkit-transform, opacity;
            -moz-transition-property: -moz-transform, opacity;
            -ms-transition-property: -ms-transform, opacity;
            -o-transition-property: -o-transform, opacity;
            transition-property: transform, opacity;
        }

        .isotope .isotope-item.no-transition,
        .isotope.no-transition,
        .isotope.no-transition .isotope-item {
            -webkit-transition-duration: 0s;
            -moz-transition-duration: 0s;
            -ms-transition-duration: 0s;
            -o-transition-duration: 0s;
            transition-duration: 0s;
        }

        .gdlr-chart {
            position: relative;
            text-align: center;
            display: inline-block;
        }

        .gdlr-chart canvas {
            position: absolute;
            top: 0;
            left: 0;
            max-width: 100%;
            max-height: 100%;
            max-height: none\9;
        }

        .gdlr-chart .chart-content-wrapper {
            position: absolute;
            left: 50%;
            top: 50%;
            line-height: 1;
            z-index: 1;
        }

        .gdlr-chart .chart-content-wrapper .chart-content-inner {
            position: relative;
            left: -50%;
            margin-top: -25%;
        }

        .gdlr-chart .chart-content-wrapper .chart-content {
            font-size: 16px;
            margin-bottom: 8px;
            display: block;
        }

        .gdlr-chart .chart-content-wrapper .chart-percent-number {
            font-size: 24px;
            display: block;
        }

        .gdlr-chart .chart-content-wrapper .chart-content i {
            font-size: 25px;
            margin-top: -28px;
            margin-bottom: 10px;
            margin-right: 0;
            display: block;
        }

        .gdlr-mailchimp-form .yks-require-description {
            display: none;
        }

        .gdlr-mailchimp-form .yks-mailchimpFormDivRowField,
        .gdlr-mailchimp-form .yks-mailchimpFormDivRowLabel {
            display: block;
            margin-bottom: 3px;
            width: auto;
        }

        .gdlr-mailchimp-form .yks-mailchimpFormDivRow {
            margin-top: 9px;
        }

        .gdlr-mailchimp-form .yks-mailchimpFormDivRow:first-child {
            margin-top: 0;
        }

        .gdlr-mailchimp-form input[type="password"],
        .gdlr-mailchimp-form input[type="text"],
        .gdlr-mailchimp-form input[type="email"] {
            width: 200px;
            padding: 12px;
            margin-bottom: 5px;
        }

        .gdlr-mailchimp-form input[type="submit"],
        .gdlr-mailchimp-form p {
            margin-bottom: 0;
        }

        .gdlr-mailchimp-form .yks-status .yks-success {
            white-space: normal;
            text-align: center;
            margin: 0 auto;
            padding: 5px 12px;
        }

        .gdlr-wpml-language-selector img {
            margin-right: 12px;
            vertical-align: middle;
        }

        .gdlr-reservation-bar .gdlr-price-room-summary-info .gdlr-price-room-summary-price,
        .gdlr-woocommerce-cart .gdlr-button:last-child {
            margin-right: 0;
        }

        .gdlr-woocommerce-cart .sub-menu-item {
            padding-top: 12px;
            margin-top: 12px;
            border-top-width: 1px;
            border-top-style: solid;
        }

        .gdlr-woocommerce-cart .sub-menu-item:first-child {
            padding-top: 0;
            border-top-width: 0;
        }

        .gdlr-woocommerce-cart .sub-menu-item .head {
            font-weight: 700;
        }

        .gdlr-woocommerce-cart .gdlr-button {
            margin-bottom: 0;
        }

        .footer-wrapper .wpcf7 p,
        .gdlr-flex-thumbnail-control li {
            margin-bottom: 10px;
        }

        .gdlr-woocommerce-cart .sub-menu-item .gdlr-button {
            margin-top: 9px;
        }

        .gdlr-fluid-video-wrapper {
            width: 100%;
            position: relative;
            padding: 0;
        }

        .gdlr-fluid-video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .wpcf7 input[type="password"],
        .wpcf7 input[type="text"],
        .wpcf7 input[type="email"],
        .wpcf7 textarea {
            padding: 16px 19px;
            width: 100%;
            font-size: 13px;
        }

        .wpcf7 input[type="submit"] {
            padding: 10px 20px;
            letter-spacing: 0;
            text-transform: none;
        }

        .wpcf7 span.wpcf7-form-control-wrap {
            display: block;
            padding-right: 46px;
            margin-top: 7px;
        }

        .footer-wrapper .wpcf7 input[type="password"],
        .footer-wrapper .wpcf7 input[type="text"],
        .footer-wrapper .wpcf7 input[type="email"],
        .footer-wrapper .wpcf7 textarea {
            padding: 15px 18px;
            width: 100%;
        }

        .footer-wrapper .wpcf7 span.wpcf7-form-control-wrap {
            padding-right: 38px;
            margin-top: 5px;
        }

        .wpcf7 input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        .wpcf7 input:focus::-moz-placeholder {
            color: transparent;
        }

        .wpcf7 input:focus:-moz-placeholder {
            color: transparent;
        }

        .wpcf7 input:focus:-ms-input-placeholder {
            color: transparent;
        }

        .wpcf7 textarea:focus::-webkit-input-placeholder {
            color: transparent;
        }

        .wpcf7 textarea:focus::-moz-placeholder {
            color: transparent;
        }

        .wpcf7 textarea:focus:-moz-placeholder {
            color: transparent;
        }

        .wpcf7 textarea:focus:-ms-input-placeholder {
            color: transparent;
        }

        .gdlr-modern-portfolio .portfolio-info,
        .gdlr-modern-portfolio .portfolio-info a,
        .gdlr-modern-portfolio .portfolio-title a,
        .gdlr-modern-portfolio .portfolio-title a:hover,
        .gdlr-top-woocommerce,
        .gdlr-top-woocommerce-button,
        .gdlr-top-woocommerce-inner>a {
            color: #fff;
        }

        .gdlr-bg-player {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        .gdlr-player-overlay {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background: #000;
        }

        @media only screen and (min--moz-device-pixel-ratio: 2),
        only screen and (-o-min-device-pixel-ratio: 2/1),
        only screen and (-webkit-min-device-pixel-ratio: 2),
        only screen and (min-device-pixel-ratio: 2) {
            blockquote {
                background-image: url(images/dark/quote@2x.png);
                background-repeat: no-repeat;
            }

            .gdlr-icon-light blockquote {
                background-image: url(images/light/quote@2x.png);
            }

            .gdl-search-form input[type="submit"] {
                background-image: url(images/dark/icon-search@2x.png);
            }

            .page-not-found-search .gdl-search-form input[type="submit"] {
                background-image: url(images/light/icon-search@2x.png);
            }
        }

        .gdlr-top-woocommerce-inner {
            background: #242424;
        }

        .master-slider-parent {
            padding-bottom: 0 !important;
        }

        .icon-angle-left,
        .icon-angle-right,
        .icon-minus,
        .icon-plus {
            line-height: 1;
        }

        .icon-angle-left:before {
            content: "\f104";
            font-family: fontAwesome;
            font-style: normal;
        }

        .icon-angle-right:before {
            content: "\f105";
            font-family: fontAwesome;
            font-style: normal;
        }

        .icon-minus:before {
            content: "\f068";
            font-family: fontAwesome;
            font-style: normal;
        }

        .icon-plus:before {
            content: "\f067";
            font-family: fontAwesome;
            font-style: normal;
        }

        .portfolio-thumbnail .portfolio-icon {
            background: #000;
            background: rgba(0, 0, 0, 0.6);
        }

        .gdlr-hotel-missing-room {
            border-top: 3px solid #e43e3e;
            padding: 15px 20px;
            background-color: #fff0f0;
            color: #e43e3e;
        }

        @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 767px) {

            .gdlr-hotel-availability .gdlr-combobox-wrapper select:focus,
            .gdlr-hotel-availability input.gdlr-datepicker:focus,
            .gdlr-reservation-bar .gdlr-combobox-wrapper select:focus,
            .gdlr-reservation-bar input.gdlr-datepicker:focus,
            input:focus,
            select:focus,
            textarea:focus {
                font-size: 16px;
            }
        }

        .gdlr-single-room-thumbnail .gdlr-flex-thumbnail-control {
            margin-bottom: 0;
        }

        body.hotelmaster-new-style .gdlr-page-title-wrapper .gdlr-page-title {
            font-size: 54px;
        }

        body.hotelmaster-new-style .gdlr-page-title-wrapper .gdlr-page-caption {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        body.hotelmaster-new-style .gdlr-reservation-bar {
            width: 340px;
            border-radius: 0;
            -moz-border-radius: 0;
            -webkit-border-radius: 0;
        }

        body.hotelmaster-new-style .gdlr-reservation-bar .gdlr-reservation-bar-title {
            font-size: 17px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            padding: 20px 0 18px;
            border-bottom-width: 1px;
            margin: 0 25px;
        }

        body.hotelmaster-new-style .gdlr-reservation-bar .gdlr-reservation-bar-date-form {
            padding-left: 25px;
        }

        body.hotelmaster-new-style .gdlr-reservation-bar .gdlr-reservation-field-title {
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 13px;
        }

        body.hotelmaster-new-style .gdlr-reservation-bar .gdlr-combobox-wrapper {
            box-shadow: none;
            -webkit-box-shadow: none;
            border-width: 2px;
            border-style: solid;
        }

        body.hotelmaster-new-style .gdlr-reservation-bar .gdlr-combobox-wrapper select {
            height: 38px;
        }

        body.hotelmaster-new-style .gdlr-reservation-bar input.gdlr-datepicker {
            height: 18px;
            box-shadow: none;
            -webkit-box-shadow: none;
            border-width: 2px;
            border-style: solid;
        }

        body.hotelmaster-new-style .gdlr-reservation-bar .gdlr-datepicker-wrapper:after {
            top: 9px;
            right: 13px;
        }

        body.hotelmaster-new-style .gdlr-reservation-field.gdlr-resv-time .gdlr-reservation-time-title {
            font-size: 13px;
            font-weight: 700;
        }

        body.hotelmaster-new-style .gdlr-reservation-people-title {
            margin-top: 45px;
            font-weight: 700;
        }

        body.hotelmaster-new-style .gdlr-reservation-room .gdlr-reservation-room-title {
            text-transform: uppercase;
            margin-bottom: 6px;
            letter-spacing: 1px;
        }

        body.hotelmaster-new-style .gdlr-reservation-room .gdlr-reservation-room-info {
            font-weight: 700;
            font-style: normal;
            margin-left: 0;
        }

        body.hotelmaster-new-style .gdlr-reservation-room.gdlr-active .gdlr-reservation-room-info {
            margin-left: 0;
        }

        body.hotelmaster-new-style .gdlr-reservation-room .gdlr-reservation-room-info a {
            font-weight: 400;
        }

        body.hotelmaster-new-style .gdlr-reservation-room .fa-angle-double-right {
            display: block;
            width: 25px;
            height: 30px;
            margin-right: 8px;
            background: url(images/default-icon/current-room.png) left center no-repeat;
            background-size: 19px 16px;
        }

        body.hotelmaster-new-style .gdlr-reservation-room .fa-angle-double-right:before {
            content: "\f105";
            display: none;
        }

        body.hotelmaster-new-style .gdlr-reservation-room.gdlr-active .fa-angle-double-right {
            background: 0 0;
        }

        body.hotelmaster-new-style .gdlr-reservation-room.gdlr-active .fa-angle-double-right:before {
            display: inline-block;
        }

        body.hotelmaster-new-style .gdlr-booking-process-bar {
            background: 0 0;
            padding-bottom: 16px;
            border-bottom-width: 3px;
            border-bottom-style: solid;
        }

        body.hotelmaster-new-style .gdlr-booking-process-bar .gdlr-booking-process {
            font-size: 15px;
            text-transform: uppercase;
            padding: 0;
        }

        body.hotelmaster-new-style .gdlr-booking-process-bar .gdlr-booking-process:before {
            display: none;
        }

        body.hotelmaster-new-style .gdlr-booking-process-bar .gdlr-booking-process:after {
            font-family: fontAwesome;
            content: "\f105";
            margin: 0 22px;
            border: none;
            position: static;
            top: auto;
            right: auto;
        }

        .gdlr-room-carousel-item .gdlr-medium-room-new:first-child,
        body.hotelmaster-new-style .gdlr-reservation-bar .gdlr-price-room-summary-info {
            margin-left: 0;
        }

        body.hotelmaster-new-style .gdlr-room-selection-complete .gdlr-room-selection-title {
            font-size: 17px;
            text-transform: uppercase;
            font-style: normal;
            letter-spacing: 1px;
        }

        body.hotelmaster-new-style .gdlr-room-selection-complete .gdlr-room-selection-caption {
            font-size: 13px;
        }

        body.hotelmaster-new-style .gdlr-booking-service-head {
            font-size: 15px;
            text-transform: uppercase;
            text-align: center;
        }

        body.hotelmaster-new-style .gdlr-room-service-title {
            font-size: 14px;
            font-style: normal;
        }

        body.hotelmaster-new-style .gdlr-room-service-unit {
            font-size: 16px;
            font-weight: 700;
            font-style: normal;
        }

        body.hotelmaster-new-style .gdlr-booking-contact-form span {
            font-style: normal;
            font-weight: 700;
        }

        body.hotelmaster-new-style .gdlr-booking-contact-form .gdlr-booking-contact-or {
            font-style: normal;
            text-transform: uppercase;
            font-weight: 700;
        }

        body.hotelmaster-new-style .gdlr-price-summary-head,
        body.hotelmaster-new-style .gdlr-service-price-summary-head {
            font-size: 17px;
            font-weight: 700;
        }

        body.hotelmaster-new-style .gdlr-service-price-summary {
            font-style: normal;
        }

        body.hotelmaster-new-style .gdlr-price-deposit-wrapper .gdlr-price-deposit-input,
        body.hotelmaster-new-style .gdlr-reservation-bar .gdlr-price-room-summary,
        body.hotelmaster-new-style .gdlr-reservation-bar .gdlr-price-summary-vat,
        body.hotelmaster-new-style .gdlr-reservation-bar .gdlr-service-price-summary-item {
            font-weight: 700;
            font-style: normal;
            line-height: 23px;
        }

        body.hotelmaster-new-style .gdlr-reservation-bar .gdlr-price-room-summary-title {
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        body.hotelmaster-new-style .gdlr-price-summary-grand-total {
            font-size: 20px;
        }

        body.hotelmaster-new-style .gdlr-price-summary-grand-total-wrapper-2 .gdlr-price-summary-grand-total .gdlr-head,
        body.hotelmaster-new-style .gdlr-price-summary-grand-total-wrapper-2 .gdlr-price-summary-grand-total .gdlr-tail {
            font-weight: 700;
        }

        body.hotelmaster-new-style .gdlr-reservation-bar .gdlr-price-room-summary-price,
        body.hotelmaster-new-style .gdlr-reservation-bar .gdlr-price-summary-vat .gdlr-tail,
        body.hotelmaster-new-style .gdlr-reservation-bar .gdlr-service-price-summary-item .gdlr-tail {
            font-size: 17px;
        }

        body.hotelmaster-new-style .gdlr-price-deposit-input .gdlr-radio-input:before,
        body.hotelmaster-new-style .gdlr-room-service-checkbox:before {
            content: "\f00c";
            font-family: fontAwesome;
            display: inline-block;
            font-size: 10px;
        }

        body.hotelmaster-new-style .gdlr-price-deposit-wrapper .gdlr-price-deposit-amount,
        body.hotelmaster-new-style .gdlr-price-deposit-wrapper .gdlr-price-deposit-caption,
        body.hotelmaster-new-style .gdlr-price-deposit-wrapper .gdlr-price-deposit-title {
            font-weight: 700;
            font-style: normal;
        }

        body.hotelmaster-new-style .gdlr-price-deposit-input .gdlr-radio-input {
            border: 0 !important;
            line-height: 13px;
            height: 13px;
            padding-bottom: 3px;
            width: 15px;
            text-align: center;
            vertical-align: text-top;
            overflow: hidden;
            border-radius: 2px;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
        }

        body.hotelmaster-new-style .gdlr-room-service-checkbox {
            border: 0 !important;
            line-height: 13px;
            height: 13px;
            padding-bottom: 3px;
            width: 15px;
            text-align: center;
            vertical-align: text-top;
            overflow: hidden;
            margin-top: 1px;
            border-radius: 2px;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
        }

        body.hotelmaster-button-new-style .gdlr-button,
        body.hotelmaster-button-new-style input[type="submit"],
        body.hotelmaster-button-new-style input[type="button"] {
            text-transform: uppercase;
            font-style: normal;
            font-size: 15px;
        }

        body.hotelmaster-button-new-style .gdlr-button.with-border {
            border-bottom: 0;
        }

        body.hotelmaster-button-new-style .gdlr-button.small {
            font-size: 13px;
        }

        body.hotelmaster-button-new-style .gdlr-button.large {
            font-size: 16px;
        }

        body.hotelmaster-single-new-style.single .gdlr-room-title {
            font-size: 32px;
        }

        body.hotelmaster-single-new-style.single .gdlr-room-price .gdlr-tail {
            font-size: 21px;
            font-weight: 700;
        }

        body.hotelmaster-single-new-style.single .gdlr-room-price .gdlr-tail,
        body.hotelmaster-single-new-style.single .gdlr-room-title {
            line-height: 32px;
        }

        body.hotelmaster-single-new-style.single .gdlr-room-title-wrapper {
            padding-bottom: 0;
            border-bottom: 0;
            margin-bottom: 35px;
        }

        body.single .gdlr-hotel-room-info-new-style {
            padding-bottom: 24px;
            padding-top: 20px;
            margin-bottom: 35px;
            border-bottom-width: 3px;
            border-bottom-style: solid;
        }

        .gdlr-room-info-new-style {
            float: left;
            margin-right: 38px;
            text-align: center;
            min-width: 50px;
        }

        .gdlr-room-info-new-style .gdlr-head {
            display: block;
            margin-bottom: 10px;
            height: 30px;
            line-height: 30px;
        }

        .gdlr-room-info-new-style .gdlr-head img {
            max-height: 24px;
            display: inline !important;
            width: auto !important;
        }

        .gdlr-room-info-new-style .gdlr-tail {
            display: block;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 600;
        }

        .gdlr-medium-room-new .gdlr-room-title {
            font-size: 32px;
            margin-bottom: 30px;
        }

        .gdlr-medium-room-new .gdlr-hotel-room-info-new-style {
            margin-bottom: 23px;
        }

        .gdlr-medium-room-new .gdlr-button i {
            display: none;
        }

        .gdlr-medium-room-new .gdlr-room-price .gdlr-head {
            font-size: 17px;
        }

        .gdlr-medium-room-new .gdlr-room-price .gdlr-tail {
            font-size: 24px;
            font-weight: 700;
        }

        .gdlr-medium-room-new .gdlr-room-price {
            margin-top: 20px;
        }

        .gdlr-booking-room-wrapper .gdlr-medium-room-new .gdlr-room-price {
            margin-top: 13px;
        }

        .gdlr-booking-room-wrapper .gdlr-medium-room-new .gdlr-price-break-down {
            font-size: 14px;
            font-style: italic;
            margin-top: -2px;
        }

        .gdlr-modern-room-new .gdlr-hotel-room-info-new-style {
            text-align: center;
        }

        .gdlr-modern-room-new .gdlr-room-info-new-style {
            float: none;
            display: inline-block;
            margin: 0 10px 15px;
        }

        .gdlr-modern-room-new .gdlr-room-info-new-style .gdlr-tail {
            font-size: 10px;
        }

        .gdlr-modern-room-new .gdlr-room-info-new-style .gdlr-head img {
            max-height: 18px;
        }

        .gdlr-modern-room-new .gdlr-room-info-new-style .gdlr-head {
            margin-bottom: 5px;
        }

        .gdlr-modern-room-new .gdlr-room-thumbnail-wrap {
            margin-bottom: 26px;
            position: relative;
        }

        .gdlr-modern-room-new .gdlr-room-thumbnail-inner {
            overflow: hidden;
        }

        .gdlr-modern-room-new .gdlr-room-thumbnail-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .gdlr-room-carousel-item .gdlr-modern-room-new:first-child {
            margin-left: 0;
        }

        .gdlr-modern-room-new .gdlr-room-title-wrap {
            display: table;
            width: 100%;
            height: 100%;
        }

        .gdlr-modern-room-new .gdlr-room-title {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            padding: 19px 20px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .gdlr-modern-room-new .gdlr-room-title a {
            color: #fff;
        }

        .gdlr-blog-widget-2 {
            padding-top: 25px;
            margin-top: 25px;
            border-top-width: 1px;
            border-top-style: solid;
        }

        .gdlr-blog-widget-2:first-child {
            padding-top: 0;
            margin-top: 0;
            border-top: 0;
        }

        .gdlr-blog-widget-2 .blog-date-wrapper {
            width: 52px;
            font-size: 16px;
            text-align: center;
            line-height: 1;
            padding: 10px 0;
            float: left;
            margin-right: 25px;
        }

        .gdlr-blog-widget-2 .blog-date-wrapper .blog-date-day {
            font-size: 16px;
            display: block;
            font-weight: 700;
        }

        .gdlr-blog-widget-2 .blog-date-wrapper .blog-date-month {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .gdlr-blog-widget-2 .post-header {
            overflow: hidden;
        }

        .gdlr-blog-widget-2 .gdlr-blog-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .gdlr-blog-widget-2 .gdlr-blog-info .blog-info {
            display: inline-block;
            margin-right: 26px;
            font-size: 13px;
        }

        .blog-widget-2-right-text-link {
            font-size: 14px;
            margin: 15px 15px 20px;
            font-style: italic;
            display: inline-block;
            letter-spacing: 1px;
        }

        .blog-widget-2-right-text-link i {
            margin-left: 15px;
        }

        div#gdlr-navigation-gimmick.gdlr-pos-bottom {
            bottom: 0;
            top: auto !important;
        }

        html body {
            min-width: 300px;
        }

        #gdlr-responsive-navigation {
            display: none;
        }

        @media only screen and (max-width: 1159px) {
            .gdlr-navigation-gimmick {
                display: none;
            }

            .gdlr-navigation-wrapper .gdlr-main-menu>li>a,
            .gdlr-navigation-wrapper .gdlr-main-menu>li>a.sf-with-ul,
            .gdlr-navigation-wrapper .gdlr-main-menu>li>a.sf-with-ul-pre {
                padding-left: 12px;
                padding-right: 12px;
            }
        }

        @media only screen and (max-width: 959px) {
            body .container {
                max-width: 768px;
            }

            body .body-wrapper.gdlr-boxed-style {
                max-width: 808px;
            }

            .flex-direction-nav .flex-next,
            .flex-direction-nav .flex-prev {
                opacity: 1;
            }

            .gdlr-logo {
                margin: 0 auto !important;
                padding-top: 20px;
                padding-bottom: 20px;
                float: none;
            }

            .gdlr-navigation-wrapper {
                float: none;
                text-align: center;
                margin-top: 10px !important;
                line-height: 0;
            }

            .gdlr-navigation-wrapper .gdlr-navigation {
                display: inline-block;
                text-align: left;
                line-height: 1.7;
            }

            .blog-item-wrapper .gdlr-outer-nav,
            .body-wrapper.gdlr-header-transparent .gdlr-header-inner-overlay,
            .gdlr-fixed-header,
            .gdlr-hide-in-tablet,
            .gdlr-hide-in-tablet-mobile,
            .portfolio-item-wrapper .gdlr-outer-nav {
                display: none;
            }

            .gdlr-navigation-wrapper .gdlr-main-menu>li>a {
                padding-left: 12px;
                padding-right: 12px;
                padding-bottom: 25px;
            }

            .gdlr-navigation-wrapper .gdlr-menu-search-button-sep {
                margin-right: 20px;
                margin-left: 0;
            }

            .gdlr-datepicker-range-wrapper .ui-datepicker-group {
                width: auto;
                border: none;
            }

            .body-wrapper.gdlr-header-transparent .gdlr-page-title-wrapper {
                padding-top: 70px;
            }

            .body-wrapper.gdlr-header-transparent .gdlr-header-wrapper {
                position: relative;
                background: #000;
            }
        }

        @media only screen and (max-width: 767px) {
            body .container {
                max-width: 420px;
            }

            body .body-wrapper.gdlr-boxed-style {
                max-width: 460px;
            }

            body .body-wrapper {
                overflow: hidden;
            }

            .eight,
            .eleven,
            .five,
            .four,
            .four-fifth,
            .nine,
            .one,
            .one-eighth,
            .one-fifth,
            .one-ninth,
            .one-seventh,
            .seven,
            .six,
            .ten,
            .three,
            .three-fifth,
            .twelve,
            .two,
            .two-fifth {
                width: 100%;
            }

            .top-navigation-container {
                text-align: center;
                line-height: 1;
            }

            .top-navigation-left {
                float: none;
            }

            .top-navigation-right {
                float: none;
                padding-bottom: 10px;
            }

            .top-navigation-right-text {
                float: none;
                padding: 10px 0;
            }

            .top-social-wrapper {
                float: none;
                margin-left: 0;
                display: inline-block;
                padding: 0;
            }

            #gdlr-responsive-navigation {
                display: block;
                height: 0;
                position: static;
                float: none;
            }

            #gdlr-responsive-navigation .dl-trigger {
                position: absolute;
                right: 15px;
                top: 50%;
                margin-top: -20px;
            }

            .dl-menuwrapper>.dl-menu,
            .dl-menuwrapper>.dl-submenu {
                margin: 30px 0 0;
                width: 390px;
                text-align: left;
                left: 15px;
            }

            .copyright-left,
            .copyright-right,
            .gdlr-service-with-image-item .service-with-image-content-wrapper,
            .gdlr-stunning-text-item {
                text-align: center;
            }

            body .gdlr-logo {
                float: none;
                display: block;
                padding: 30px 80px;
            }

            .gdlr-caption-wrapper .gdlr-caption .gdlr-caption-text,
            .gdlr-feature-media-item .feature-media-icon,
            .gdlr-item-title-head .gdlr-flex-next,
            .gdlr-item-title-head .gdlr-flex-prev,
            .gdlr-item-title-wrapper.pos-center .gdlr-item-title-gimmick,
            .gdlr-navigation-wrapper,
            .gdlr-reservation-people-title {
                display: none;
            }

            body .gdlr-logo.gdlr-align-left #gdlr-responsive-navigation .dl-trigger,
            body .gdlr-logo.gdlr-align-right #gdlr-responsive-navigation .dl-trigger {
                top: 45px;
                margin-top: 0;
            }

            .gdlr-header-wrapper {
                background: #111;
                position: relative;
            }

            .gdlr-stunning-text-item.type-normal.gdlr-button-on {
                padding-right: 0;
            }

            .gdlr-stunning-text-item.type-normal .stunning-text-button {
                position: static;
                margin-top: 0;
            }

            .gdlr-stunning-text-item.with-padding.gdlr-button-on {
                padding-right: 35px;
            }

            .gdlr-service-with-image-item .service-with-image-thumbnail {
                float: none;
                margin: 0 auto;
            }

            .gdlr-feature-media-item.gdlr-left .feature-media-thumbnail {
                float: none;
                width: auto;
                margin-right: 0;
            }

            html .woocommerce ul.products li.product,
            html .woocommerce-page ul.products li.product {
                width: 99% !important;
            }

            .gdlr-portfolio-style1 .gdlr-portfolio-description {
                float: none;
                margin-right: 0;
                width: auto;
            }

            .gdlr-portfolio-style1 .gdlr-portfolio-info {
                width: auto;
                float: none;
                margin-bottom: 30px;
            }

            .gdlr-portfolio-style2 .gdlr-portfolio-thumbnail {
                max-width: 100%;
                float: none;
                margin-right: 0;
                margin-left: 0;
                width: auto !important;
            }

            .gdlr-blog-medium .gdlr-blog-thumbnail {
                margin-right: 0;
                float: none;
                margin-bottom: 20px;
                width: auto;
            }

            .gdlr-caption-wrapper .gdlr-caption .gdlr-caption-title {
                margin-bottom: 0;
                font-size: 15px;
            }

            .gdlr-caption-wrapper .gdlr-caption {
                max-width: 100%;
                padding: 13px 12px;
            }

            .gdlr-item-title-wrapper.pos-center.gdlr-right-text,
            .gdlr-item-title-wrapper.pos-icon.gdlr-right-text {
                padding: 0;
            }

            .gdlr-item-title-wrapper>.nav-container {
                position: static;
                text-align: center;
                margin-top: 10px;
            }

            .gdlr-item-title-wrapper>.nav-container>.gdlr-right-text-link {
                float: none;
                margin: 0;
            }

            .gdlr-hotel-availability .gdlr-reservation-field {
                float: none;
                width: auto;
                margin-bottom: 20px;
            }

            .gdlr-hotel-availability .gdlr-combobox-wrapper,
            .gdlr-hotel-availability .gdlr-datepicker-wrapper {
                margin-right: 0;
            }

            .gdlr-hotel-availability .gdlr-hotel-availability-submit input[type="submit"] {
                margin-top: 0;
            }

            #gdlr-reservation-bar {
                max-width: auto;
                width: auto;
            }

            .hotelmaster-new-style .gdlr-hotel-availability input.gdlr-datepicker {
                width: 100%;
            }

            .gdlr-hotel-availability .gdlr-resv-combobox,
            .gdlr-hotel-availability .gdlr-resv-datepicker,
            .gdlr-hotel-availability.gdlr-hostel .gdlr-resv-combobox,
            .gdlr-hotel-availability.gdlr-hostel .gdlr-resv-datepicker,
            .gdlr-hotel-branches-enable .gdlr-hotel-availability .gdlr-resv-branches-combobox,
            .gdlr-hotel-branches-enable .gdlr-hotel-availability .gdlr-resv-combobox,
            .gdlr-hotel-branches-enable .gdlr-hotel-availability .gdlr-resv-datepicker,
            .gdlr-hotel-branches-enable .gdlr-hotel-availability.gdlr-hostel .gdlr-resv-combobox,
            .gdlr-hotel-branches-enable .gdlr-hotel-availability.gdlr-hostel .gdlr-resv-datepicker {
                float: none !important;
                width: auto !important;
            }

            .gdlr-reservation-bar {
                float: none;
                width: auto;
                margin: 0 auto 40px;
            }

            .single .gdlr-reservation-bar {
                float: none;
                margin: 0 0 30px;
                width: auto;
            }

            .gdlr-medium-room .gdlr-room-thumbnail {
                float: none;
                margin-right: 0;
                margin-bottom: 30px;
                max-width: 100%;
            }

            .gdlr-datepicker-range-wrapper .ui-datepicker-group {
                width: auto;
                border: none;
            }

            .gdlr-booking-contact-form .gdlr-form-half-left,
            .gdlr-booking-contact-form .gdlr-form-half-right {
                float: none;
                width: auto;
                margin-right: 0;
                margin-left: 0;
            }

            .copyright-left,
            .copyright-right {
                float: none;
            }

            .gdlr-hide-in-tablet {
                display: block;
            }

            .gdlr-hide-in-mobile {
                display: none;
            }

            .gdlr-service-with-image-item .service-with-image-thumbnail {
                margin-bottom: 30px;
            }
        }

        .sf-mega-section,
        .sf-menu,
        .sf-menu>li {
            float: left;
        }

        @media only screen and (max-width: 419px) {
            body .container {
                max-width: 300px;
            }

            body .body-wrapper.gdlr-boxed-style {
                max-width: 340px;
            }

            body .gdlr-logo {
                padding-left: 0;
            }

            .dl-menuwrapper .dl-menu,
            .dl-menuwrapper>.dl-submenu {
                width: 270px;
            }

            #gdlr-reservation-bar .gdlr-reservation-time-title {
                display: none;
            }
        }

        body,
        html.ltie9 body {
            min-width: 1140px;
        }

        .container,
        .gdlr-caption-wrapper .gdlr-caption-inner {
            max-width: 1140px;
        }

        .body-wrapper.gdlr-boxed-style {
            max-width: 1220px;
        }

        .body-wrapper.gdlr-boxed-style .gdlr-header-wrapper {
            max-width: 1220px;
            margin: 0 auto;
        }

        .body-wrapper.gdlr-header-transparent .gdlr-header-inner-overlay {
            opacity: 0.7;
        }

        .gdlr-logo {
            max-width: 145px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .gdlr-navigation-wrapper {
            margin-top: 52px;
        }

        .gdlr-header-transparent .gdlr-navigation-wrapper .gdlr-main-menu>li>a {
            padding-bottom: 23px;
        }

        .gdlr-page-title-wrapper,
        body.archive .gdlr-page-title-wrapper,
        body.error404 .gdlr-page-title-wrapper,
        body.search .gdlr-page-title-wrapper,
        body.single .gdlr-page-title-wrapper,
        body.single-portfolio .gdlr-page-title-wrapper {
            background-image: url(https://timezonehostel.com/wp-content/uploads/2015/03/hollywood-front.jpeg);
        }

        .gdlr-title-font,
        body.hotelmaster-button-new-style .gdlr-button,
        body.hotelmaster-button-new-style input[type="submit"],
        body.hotelmaster-button-new-style input[type="button"],
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Open Sans";
        }

        #gdlr-booking-process-bar,
        #gdlr-reservation-bar,
        .gdlr-booking-complete-title,
        .gdlr-booking-contact-form span,
        .gdlr-booking-contact-or,
        .gdlr-booking-service-head,
        .gdlr-reservation-room .gdlr-reservation-room-info a,
        .gdlr-room-selection-complete .gdlr-room-selection-title,
        .gdlr-room-service-option,
        body,
        input,
        select,
        textarea {
            font-family: Merriweather;
        }

        .gdlr-navigation,
        .gdlr-slider-item {
            font-family: "Open Sans";
        }

        body {
            font-size: 14px;
        }

        h1 {
            font-size: 30px;
        }

        h2 {
            font-size: 25px;
        }

        h3 {
            font-size: 20px;
        }

        h4 {
            font-size: 18px;
        }

        h5 {
            font-size: 16px;
        }

        h6 {
            font-size: 15px;
        }

        .top-navigation-wrapper {
            background-color: #fff;
            color: #a5a5a5;
        }

        .gdlr-main-menu>li>a,
        .top-navigation-wrapper a,
        .top-navigation-wrapper a:hover {
            color: #0d4a52;
        }

        .top-navigation-divider {
            border-color: #898989;
        }

        .body-wrapper.gdlr-header-transparent .gdlr-header-inner-overlay,
        .gdlr-header-inner,
        .gdlr-header-wrapper {
            background-color: #fff;
        }

        .gdlr-main-menu>li.current-menu-ancestor>a,
        .gdlr-main-menu>li.current-menu-item>a,
        .gdlr-main-menu>li:hover>a {
            color: #555;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .gdlr-navigation-gimmick {
            background-color: #1abc9c;
        }

        .gdlr-menu-search-button-sep {
            color: #1abc9c;
        }

        .gdlr-navigation-wrapper .gdlr-menu-search-button {
            color: #fff;
        }

        .gdlr-header-transparent .gdlr-main-menu>li>a {
            color: #0d4a52;
        }

        .gdlr-header-transparent .gdlr-main-menu>li.current-menu-ancestor>a,
        .gdlr-header-transparent .gdlr-main-menu>li.current-menu-item>a,
        .gdlr-header-transparent .gdlr-main-menu>li:hover>a {
            color: #3e4d51;
        }

        .gdlr-main-menu>.gdlr-mega-menu .sf-mega,
        .gdlr-main-menu>.gdlr-normal-menu .sub-menu {
            border-top-color: #fcfcfc;
        }

        .gdlr-main-menu>.gdlr-mega-menu .sf-mega,
        .gdlr-main-menu>.gdlr-normal-menu li {
            background-color: #fff;
        }

        .gdlr-main-menu>li>.sf-mega a,
        .gdlr-main-menu>li>.sub-menu a {
            color: #0d4a52;
        }

        .gdlr-main-menu>li>.sf-mega .current-menu-ancestor>a,
        .gdlr-main-menu>li>.sf-mega .current-menu-item>a,
        .gdlr-main-menu>li>.sf-mega a:hover,
        .gdlr-main-menu>li>.sub-menu .current-menu-ancestor>a,
        .gdlr-main-menu>li>.sub-menu .current-menu-item>a,
        .gdlr-main-menu>li>.sub-menu a:hover {
            color: #354f51;
        }

        .gdlr-main-menu>li>.sf-mega .sf-mega-section-inner.current-menu-ancestor>a,
        .gdlr-main-menu>li>.sf-mega .sf-mega-section-inner.current-menu-item>a,
        .gdlr-main-menu>li>.sf-mega .sf-mega-section-inner>a,
        .gdlr-main-menu>li>.sf-mega .sf-mega-section-inner>a:hover,
        .gdlr-page-caption,
        .gdlr-page-title,
        .gdlr-page-title-gimmick {
            color: #fff;
        }

        .gdlr-main-menu .gdlr-normal-menu li>a.sf-with-ul:after {
            border-left-color: #354f51;
        }

        .gdlr-main-menu .sf-mega-section-inner>ul>li.current-menu-item>a,
        .gdlr-main-menu .sf-mega-section-inner>ul>li>a:hover {
            background-color: #d33;
        }

        .gdlr-main-menu>li>.sf-mega *,
        .gdlr-main-menu>li>.sub-menu * {
            border-color: #ddd;
        }

        #gdlr-responsive-navigation.dl-menuwrapper button,
        #gdlr-responsive-navigation.dl-menuwrapper button.dl-active,
        #gdlr-responsive-navigation.dl-menuwrapper button:hover,
        #gdlr-responsive-navigation.dl-menuwrapper ul {
            background-color: #1abc9c;
        }

        .gdlr-menu-search {
            background: #fff;
            background: rgba(255, 255, 255, 0.8);
        }

        body {
            background-color: #ddd;
        }

        .body-wrapper,
        .gdlr-single-lightbox-container {
            background-color: #fff;
        }

        .gdlr-title,
        .gdlr-title a,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #454545;
        }

        .gdlr-item-title-wrapper .gdlr-item-title {
            color: #1e1e1e;
            border-color: #1e1e1e;
        }

        .gdlr-item-title-divider {
            border-color: #1abc9c;
        }

        .gdlr-item-title-wrapper .gdlr-item-caption {
            color: #9b9b9b;
        }

        body {
            color: #909090;
        }

        a {
            color: #1abc9c;
        }

        a:hover {
            color: #53bca7;
        }

        body * {
            border-color: #e5e5e5;
        }

        .page-not-found-block {
            background-color: #d65938;
            color: #fff;
        }

        .page-not-found-search .gdl-search-form input[type="text"] {
            background-color: #963a20;
            color: #d57f5c;
        }

        .gdlr-sidebar .gdlr-widget-title {
            color: #383838;
        }

        .gdlr-sidebar * {
            border-color: #eee;
        }

        .gdlr-sidebar ul li:before {
            border-color: #bdbdbd;
        }

        .gdl-search-form input {
            background-color: #f7f7f7;
            color: #9d9d9d;
            border-color: #ebebeb;
        }

        .tagcloud a {
            background-color: #1abc9c;
        }

        .tagcloud a,
        .tagcloud a:hover {
            color: #fff;
        }

        .gdlr-accordion-item.style-1 .pre-active .accordion-title {
            color: #3c3c3c;
        }

        .gdlr-accordion-item.style-1 .accordion-title {
            color: #8d8d8d;
        }

        .gdlr-accordion-item.style-1 .accordion-title i {
            background-color: #f3f3f3;
            color: #a8a8a8;
        }

        .gdlr-accordion-item.style-1 .accordion-title i.icon-minus {
            background-color: #1abc9c;
            color: #fff;
        }

        .gdlr-banner-item-wrapper .flex-direction-nav .flex-next,
        .gdlr-banner-item-wrapper .flex-direction-nav .flex-prev {
            color: #999;
        }

        .gdlr-box-with-icon-item .box-with-icon-title,
        .gdlr-box-with-icon-item>i {
            color: #585858;
        }

        .gdlr-box-with-icon-item {
            background-color: #f5f5f5;
            color: #929292;
        }

        .gdlr-button,
        .gdlr-button:hover,
        .gdlr-top-menu>.gdlr-mega-menu .sf-mega a.gdlr-button,
        input[type="submit"],
        input[type="button"] {
            color: #fff;
        }

        .gdlr-button,
        input[type="submit"],
        input[type="button"] {
            background-color: #1abc9c;
        }

        .gdlr-button {
            border-color: #16af9b;
        }

        .column-service-title {
            color: #333;
        }

        .column-service-content {
            color: #909090;
        }

        .column-service-icon i {
            color: #1abc9c;
        }

        .gdlr-column-service-item.gdlr-type-2 .column-service-divider {
            border-color: #1abc9c;
        }

        .gdlr-column-service-item.gdlr-type-2 .column-service-icon {
            background-color: #3e3e3e;
        }

        .list-with-icon .list-with-icon-title {
            color: #333;
        }

        .gdlr-pie-chart-item .pie-chart-title {
            color: #313131;
        }

        .gdlr-price-inner-item {
            background-color: #f9f9f9;
        }

        .gdlr-price-item .price-title-wrapper {
            background-color: #454545;
        }

        .gdlr-price-item .price-title {
            color: #fff;
        }

        .gdlr-price-item .price-tag {
            background-color: #838383;
            color: #fff;
        }

        .gdlr-price-item .best-price .price-tag {
            background-color: #1abc9c;
        }

        .gdlr-process-tab .gdlr-process-icon {
            background-color: #f3f3f3;
            border-color: #e3e3e3;
        }

        .gdlr-process-tab .gdlr-process-icon i {
            color: #aaa;
        }

        .gdlr-process-tab .process-line .process-line-divider {
            border-color: #e3e3e3;
        }

        .gdlr-process-tab .process-line .icon-chevron-down,
        .gdlr-process-tab .process-line .icon-chevron-right {
            color: #e3e3e3;
        }

        .gdlr-process-wrapper .gdlr-process-tab .gdlr-process-title {
            color: #454545;
        }

        .gdlr-skill-item-wrapper {
            color: #3a3a3a;
        }

        .stunning-text-title {
            color: #414141;
        }

        .stunning-text-caption {
            color: #949494;
        }

        .gdlr-stunning-text-item.with-padding {
            background-color: #f3f3f3;
        }

        .gdlr-stunning-text-item.with-border {
            border-color: #f3f3f3;
        }

        .tab-title-wrapper .tab-title {
            background-color: #f9f9f9;
            color: #3b3b3b;
        }

        .tab-content-wrapper,
        .tab-title-wrapper .tab-title.active {
            background-color: #fff;
        }

        table tr th {
            background-color: #1abc9c;
            color: #fff;
        }

        table.style-2 tr:nth-child(odd) {
            background-color: #f9f9f9;
            color: #949494;
        }

        table.style-2 tr:nth-child(even) {
            background-color: #f3f3f3;
            color: #949494;
        }

        .gdlr-blog-title,
        .gdlr-blog-title a {
            color: #424242;
        }

        .gdlr-blog-title a:hover {
            color: #1c1111;
        }

        .blog-info,
        .blog-info a,
        .blog-info i {
            color: #1abc9c;
        }

        .gdlr-blog-thumbnail .gdlr-sticky-banner {
            background-color: #232323;
        }

        .gdlr-blog-thumbnail .gdlr-sticky-banner,
        .gdlr-blog-thumbnail .gdlr-sticky-banner i {
            color: #fff;
        }

        .gdlr-social-share,
        .gdlr-social-share a {
            background-color: #f3f3f3;
        }

        .gdlr-social-share .social-share-title {
            color: #353535;
        }

        .blog-date-wrapper,
        .format-aside .gdlr-blog-content,
        .gdlr-standard-style .gdlr-single-blog-tag a {
            background-color: #1abc9c;
            color: #fff;
        }

        .gdlr-blog-full .blog-date-wrapper,
        .gdlr-blog-medium .blog-date-wrapper,
        .gdlr-blog-widget .blog-date-wrapper {
            box-shadow: 2px 2px 0 #1c8e77;
            -moz-box-shadow: 2px 2px 0 #1c8e77;
            -webkit-box-shadow: 2px 2px 0 #1c8e77;
        }

        .format-quote .gdlr-top-quote blockquote {
            color: #8d8d8d;
        }

        .format-quote .gdlr-quote-author {
            color: #1abc9c;
        }

        .gdlr-single-nav>div i {
            background-color: #f3f3f3;
            color: #8d8d8d;
        }

        .portfolio-item-filter a,
        .portfolio-item-filter a.active,
        .portfolio-item-filter span {
            color: #1abc9c;
        }

        .gdlr-image-link-shortcode .gdlr-image-link-overlay,
        .gdlr-room-category-thumbnail-overlay,
        .portfolio-thumbnail .portfolio-overlay {
            background-color: #000;
        }

        .gdlr-image-link-shortcode .gdlr-image-link-icon,
        .gdlr-room-category-thumbnail-overlay-icon i,
        .portfolio-thumbnail .portfolio-icon i {
            color: #fff;
        }

        .portfolio-title a,
        .portfolio-title a:hover {
            color: #515151;
        }

        .portfolio-info,
        .portfolio-info a {
            color: #1abc9c;
        }

        .gdlr-pagination .page-numbers {
            background-color: #ebebeb;
            color: #979797;
        }

        .gdlr-pagination .page-numbers.current,
        .gdlr-pagination .page-numbers:hover {
            background-color: #1abc9c;
            color: #fff;
        }

        .single .gdlr-room-title {
            color: #4b4b4b;
        }

        .single .gdlr-room-info {
            background-color: #f5f5f5;
            color: #888;
        }

        ,
        .gdlr-classic-room .gdlr-room-title a,
        .gdlr-classic-room .gdlr-room-title a:hover,
        .gdlr-medium-room .gdlr-room-title a,
        .gdlr-medium-room .gdlr-room-title a:hover,
        .gdlr-modern-room .gdlr-room-title a,
        .gdlr-modern-room .gdlr-room-title a:hover {
            color: #1abc9c;
        }

        .gdlr-classic-room .gdlr-room-price .gdlr-tail,
        .gdlr-medium-room .gdlr-room-price .gdlr-tail,
        .gdlr-room-service-unit,
        .single .gdlr-room-price .gdlr-tail {
            color: #74b7d3;
        }

        .gdlr-modern-room .gdlr-room-detail {
            color: #787878;
        }

        .gdlr-modern-room-new .gdlr-room-thumbnail-overlay {
            background: #1f242c;
            background: rgba(31, 36, 44, 0.85);
        }

        .gdlr-medium-room .gdlr-hotel-room-info {
            border-color: #bfbfbf;
            color: #898989;
        }

        .gdlr-medium-room .gdlr-price-break-down {
            color: #bdbdbd;
        }

        .price-breakdown-wrapper .price-breakdown-content {
            background-color: #f3f3f3;
        }

        .price-breakdown-wrapper .price-breakdown-content,
        .price-breakdown-wrapper .price-breakdown-total {
            border-color: #e6e6e6;
        }

        .price-breakdown-wrapper .price-breakdown-info .gdlr-head,
        .price-breakdown-wrapper .price-breakdown-total .gdlr-head {
            color: #232323;
        }

        .price-breakdown-wrapper .price-breakdown-info .gdlr-head span,
        .price-breakdown-wrapper .price-breakdown-total .gdlr-head span {
            color: #a2a2a2;
        }

        .gdlr-booking-contact-form .gdlr-payment-method label.gdlr-active img,
        .gdlr-booking-contact-form .gdlr-payment-method label:hover img {
            border-color: #72afd5;
        }

        .gdlr-booking-contact-form .gdlr-booking-payment-submit {
            background-color: #81bad3;
            border-color: #4a87a2;
        }

        .gdlr-price-deposit-wrapper .gdlr-price-deposit-input span.gdlr-active,
        .gdlr-price-summary-grand-total.gdlr-active,
        .gdlr-reservation-bar .gdlr-price-summary-wrapper {
            color: #fff;
        }

        .gdlr-price-deposit-input .gdlr-radio-input {
            background: #fff;
            border: 3px solid #fff !important;
        }

        .gdlr-price-deposit-wrapper .gdlr-price-deposit-caption,
        .gdlr-price-deposit-wrapper .gdlr-price-deposit-input span,
        .gdlr-price-summary-grand-total,
        .gdlr-reservation-bar .gdlr-price-room-summary,
        .gdlr-reservation-bar .gdlr-price-room-summary-info,
        .gdlr-service-price-summary-item {
            color: #baefe2;
        }

        .gdlr-reservation-bar .gdlr-price-summary-wrapper * {
            border-color: #0e8e75;
        }

        .gdlr-price-summary-wrapper .gdlr-edit-booking-button {
            background-color: #0e8e75;
            border-color: #006847;
        }

        .gdlr-booking-process-bar .gdlr-booking-process:after,
        .gdlr-booking-process-bar .gdlr-booking-process:before,
        body.hotelmaster-new-style .gdlr-booking-process-bar {
            border-left-color: #1abc9c;
        }

        .gdlr-booking-complete,
        .gdlr-booking-failed,
        .gdlr-room-selection-complete {
            background-color: #f5f5f5;
        }

        .gdlr-room-selection-complete .gdlr-room-selection-caption {
            color: #8d8d8d;
            border-bottom-color: #e5e5e5;
        }

        .gdlr-booking-complete .gdlr-booking-complete-additional i,
        .gdlr-booking-complete .gdlr-booking-complete-title,
        .gdlr-booking-failed .gdlr-booking-failed-title,
        .gdlr-booking-service-head,
        .gdlr-room-selection-complete .gdlr-room-selection-title,
        .gdlr-room-service-title {
            color: #484848;
        }

        body.hotelmaster-new-style .gdlr-price-deposit-input .gdlr-radio-input,
        body.hotelmaster-new-style .gdlr-room-service-checkbox {
            color: #fff;
            background-color: #e3e3e3;
        }

        body.hotelmaster-new-style .gdlr-price-deposit-input .gdlr-active .gdlr-radio-input,
        body.hotelmaster-new-style .gdlr-room-service-checkbox.gdlr-active {
            background-color: #343434;
        }

        .gdlr-datepicker-range-wrapper,
        .ui-datepicker {
            background-color: #f3f3f3;
        }

        .ui-datepicker th,
        .ui-datepicker-title {
            color: #4b4b4b;
        }

        .ui-datepicker .ui-datepicker-next,
        .ui-datepicker .ui-datepicker-prev,
        .ui-state-default,
        .ui-state-default:hover {
            background-color: #fff;
            color: #6a6a6a;
        }

        .ui-state-disabled .ui-state-default,
        .ui-state-disabled .ui-state-default:hover {
            background-color: #eaeaea;
            color: #aaa;
        }

        .dp-highlight .ui-state-default,
        .dp-highlight .ui-state-highlight:hover {
            background-color: #1abc9c;
            color: #fff;
        }

        .gdlr-booking-process-bar .gdlr-active {
            color: #fff;
        }

        .gdlr-booking-process-bar {
            background-color: #1abc9c;
            color: #91f2cb;
        }

        .gdlr-reservation-bar {
            background-color: #1abc9c;
        }

        .gdlr-reservation-bar .gdlr-reservation-bar-title {
            color: #fff;
            border-color: #0e9e72;
        }

        .gdlr-reservation-bar .gdlr-reservation-field-title,
        .gdlr-reservation-people-title,
        .gdlr-reservation-time-sep,
        .gdlr-reservation-time-title {
            color: #fff;
        }

        .gdlr-reservation-bar .gdlr-combobox-wrapper,
        .gdlr-reservation-bar .gdlr-combobox-wrapper select,
        .gdlr-reservation-bar .gdlr-combobox-wrapper select option,
        .gdlr-reservation-bar input.gdlr-datepicker {
            background-color: #fff;
        }

        body.hotelmaster-new-style .gdlr-reservation-bar .gdlr-combobox-wrapper,
        body.hotelmaster-new-style .gdlr-reservation-bar input.gdlr-datepicker {
            border-color: #e9e9e9;
        }

        .gdlr-reservation-bar .gdlr-combobox-wrapper select,
        .gdlr-reservation-bar input.gdlr-datepicker {
            color: #999;
        }

        .gdlr-reservation-bar .gdlr-combobox-wrapper:after,
        .gdlr-reservation-bar .gdlr-datepicker-wrapper:after {
            color: #000;
        }

        .gdlr-reservation-bar .gdlr-reservation-bar-room-form {
            background-color: #64c1ac;
        }

        .gdlr-reservation-room .gdlr-reservation-room-title {
            color: #7b6549;
        }

        .gdlr-reservation-room,
        .gdlr-reservation-room.gdlr-active .gdlr-reservation-room-info,
        .gdlr-reservation-room.gdlr-active .gdlr-reservation-room-title {
            color: #fff;
        }

        .gdlr-reservation-room .gdlr-reservation-change-room {
            color: #007a66;
        }

        .gdlr-reservation-bar .gdlr-reservation-bar-button {
            background-color: #0e8e75;
            color: #fff;
            border-color: #097c62;
        }

        .gdlr-personnel-item .personnel-author-image,
        .gdlr-testimonial-item .testimonial-author-image {
            border-color: #1abc9c;
        }

        .gdlr-price-summary-hotel-branches {
            background-color: #51392b;
            color: #fff;
        }

        .gdlr-personnel-item .personnel-item-inner {
            background-color: #f5f5f5;
        }

        .gdlr-personnel-item.round-style .personnel-item {
            background-color: #1abc9c;
        }

        .gdlr-personnel-item .personnel-author {
            color: #3b3b3b;
        }

        .gdlr-personnel-item .personnel-position {
            color: #acacac;
        }

        .gdlr-personnel-item .personnel-content {
            color: #959595;
        }

        .gdlr-personnel-item .personnel-social i {
            color: #3b3b3b;
        }

        .gdlr-testimonial-item .testimonial-author-image,
        .gdlr-testimonial-item .testimonial-item-inner {
            background-color: #f5f5f5;
        }

        .gdlr-testimonial-item .testimonial-content {
            color: #9b9b9b;
        }

        .gdlr-testimonial-item .testimonial-author {
            color: #1abc9c;
        }

        .gdlr-testimonial-item .testimonial-position {
            color: #4d4d4d;
        }

        .gdlr-caption-text,
        .gdlr-caption-title,
        .gdlr-caption-wrapper.post-slider .gdlr-caption-title,
        .ls-flawless .ls-nav-next,
        .ls-flawless .ls-nav-prev,
        body .flex-direction-nav a,
        body .flex-direction-nav a:hover,
        body .nivo-directionNav a {
            color: #fff;
        }

        .gdlr-testimonial-item.box-style .testimonial-item-inner:after {
            border-top-color: #ddd;
            border-left-color: #ddd;
        }

        .gdlr-gallery-thumbnail .gallery-item {
            background-color: #e5e5e5;
        }

        .gdlr-gallery-thumbnail-container .gallery-caption {
            background-color: #000;
            color: #fff;
        }

        .flex-control-paging li a,
        .nivo-controlNav a {
            background-color: #cecece;
            border-color: #fff !important;
        }

        .flex-control-paging li a.flex-active,
        .flex-control-paging li a:hover,
        .nivo-controlNav a.active,
        .nivo-controlNav a:hover {
            background-color: #949494;
        }

        .flex-direction-nav a,
        .gdlr-caption,
        .gdlr-caption-wrapper.post-slider,
        .ls-flawless .ls-nav-next,
        .ls-flawless .ls-nav-prev,
        .nivo-directionNav a {
            background-color: #000;
        }

        .gdlr-caption-wrapper.post-slider .gdlr-caption-text {
            color: #ddd;
        }

        .gdlr-post-slider-item.style-no-excerpt .gdlr-caption-wrapper .gdlr-caption-date,
        .gdlr-post-slider-item.style-no-excerpt .gdlr-caption-wrapper .gdlr-title-link {
            color: #fff;
            background-color: #1abc9c;
        }

        .gdlr-item-title-wrapper .gdlr-flex-next,
        .gdlr-item-title-wrapper .gdlr-flex-prev {
            background-color: #ebebeb;
            color: #b2b2b2;
        }

        .gdlr-item-title-wrapper .gdlr-flex-next:hover,
        .gdlr-item-title-wrapper .gdlr-flex-prev:hover {
            background-color: #1abc9c;
            color: #fff;
        }

        .gdlr-hotel-availability .gdlr-combobox-wrapper select,
        input::input-placeholder,
        input[type="password"],
        input[type="text"],
        input[type="email"],
        textarea,
        textarea::input-placeholder {
            color: #828282;
        }

        .gdlr-hotel-availability .gdlr-combobox-wrapper,
        input[type="password"],
        input[type="text"],
        input[type="email"],
        textarea {
            background-color: #f5f5f5;
        }

        input::-webkit-input-placeholder {
            color: #828282;
        }

        input::-moz-placeholder {
            color: #828282;
        }

        input:-moz-placeholder {
            color: #828282;
        }

        input:-ms-input-placeholder {
            color: #828282;
        }

        textarea::-webkit-input-placeholder {
            color: #828282;
        }

        textarea::-moz-placeholder {
            color: #828282;
        }

        textarea:-moz-placeholder {
            color: #828282;
        }

        textarea:-ms-input-placeholder {
            color: #828282;
        }

        .footer-wrapper .gdlr-widget-title,
        .footer-wrapper .gdlr-widget-title a {
            color: #fff;
        }

        .footer-wrapper {
            background-color: #1e1e1e;
            color: #c4c4c4;
        }

        .footer-wrapper a {
            color: #a3a3a3;
        }

        .footer-wrapper a:hover {
            color: #fff;
        }

        .footer-wrapper * {
            border-color: #424242;
        }

        .footer-wrapper input[type="password"],
        .footer-wrapper input[type="text"],
        .footer-wrapper input[type="email"],
        .footer-wrapper textarea {
            background-color: #fff;
            color: #828282;
            border-color: #313131;
        }

        .footer-wrapper .gdlr-button,
        .footer-wrapper .gdlr-button:hover,
        .footer-wrapper .tagcloud a,
        .footer-wrapper .tagcloud a:hover,
        .footer-wrapper input[type="submit"],
        .footer-wrapper input[type="button"] {
            color: #fff;
        }

        .footer-wrapper .gdlr-button,
        .footer-wrapper .tagcloud a,
        .footer-wrapper input[type="submit"],
        .footer-wrapper input[type="button"] {
            background-color: #1abc9c;
        }

        .copyright-wrapper {
            background-color: #0f0f0f;
            color: #9e9e9e;
        }

        .footer-wrapper .copyright-wrapper {
            border-color: #0f0f0f;
        }

        html .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active,
        html .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
        html .woocommerce span.onsale,
        html .woocommerce-message,
        html .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active,
        html .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active,
        html .woocommerce-page span.onsale {
            background: #1abc9c;
        }

        html .woocommerce #content div.product p.price,
        html .woocommerce #content div.product span.price,
        html .woocommerce .star-rating,
        html .woocommerce .star-rating:before,
        html .woocommerce div.product p.price,
        html .woocommerce div.product span.price,
        html .woocommerce-page #content div.product p.price,
        html .woocommerce-page #content div.product span.price,
        html .woocommerce-page .star-rating,
        html .woocommerce-page .star-rating:before,
        html .woocommerce-page div.product p.price,
        html .woocommerce-page div.product span.price {
            color: #1abc9c;
        }

        html .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active,
        html .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
        html .woocommerce nav.woocommerce-pagination ul li span.current,
        html .woocommerce span.onsale,
        html .woocommerce-error,
        html .woocommerce-error a.button,
        html .woocommerce-info,
        html .woocommerce-info a.button,
        html .woocommerce-message,
        html .woocommerce-message a.button,
        html .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active,
        html .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active,
        html .woocommerce-page nav.woocommerce-pagination ul li a:hover,
        html .woocommerce-page nav.woocommerce-pagination ul li span.current,
        html .woocommerce-page span.onsale,
        html .woocommercenav.woocommerce-pagination ul li a:hover {
            color: #fff;
        }

        html .woocommerce-info {
            background: #389ec5;
        }

        html .woocommerce-error {
            background: #c23030;
        }

        html .woocommerce #content div.product form.cart .button,
        html .woocommerce #content input.button,
        html .woocommerce #content input.button.alt,
        html .woocommerce #content input.button.alt:hover,
        html .woocommerce #content input.button:hover,
        html .woocommerce #respond input#submit,
        html .woocommerce #respond input#submit.alt,
        html .woocommerce #respond input#submit.alt:hover,
        html .woocommerce #respond input#submit:hover,
        html .woocommerce a.button,
        html .woocommerce a.button.alt,
        html .woocommerce a.button.alt:hover,
        html .woocommerce a.button:hover,
        html .woocommerce button.button,
        html .woocommerce button.button.alt,
        html .woocommerce button.button.alt:hover,
        html .woocommerce button.button:hover,
        html .woocommerce div.product form.cart .button,
        html .woocommerce input.button,
        html .woocommerce input.button.alt,
        html .woocommerce input.button.alt:hover,
        html .woocommerce input.button:hover,
        html .woocommerce ul.products li.product a.loading,
        html .woocommerce-page #content div.product form.cart .button,
        html .woocommerce-page #content input.button,
        html .woocommerce-page #content input.button.alt,
        html .woocommerce-page #content input.button.alt:hover,
        html .woocommerce-page #content input.button:hover,
        html .woocommerce-page #respond input#submit,
        html .woocommerce-page #respond input#submit.alt,
        html .woocommerce-page #respond input#submit.alt:hover,
        html .woocommerce-page #respond input#submit:hover,
        html .woocommerce-page a.button,
        html .woocommerce-page a.button.alt,
        html .woocommerce-page a.button.alt:hover,
        html .woocommerce-page a.button:hover,
        html .woocommerce-page button.button,
        html .woocommerce-page button.button.alt,
        html .woocommerce-page button.button.alt:hover,
        html .woocommerce-page button.button:hover,
        html .woocommerce-page div.product form.cart .button,
        html .woocommerce-page input.button,
        html .woocommerce-page input.button.alt,
        html .woocommerce-page input.button.alt:hover,
        html .woocommerce-page input.button:hover {
            background: #b89f80;
            color: #fff;
            border-bottom: 3px solid #b28855;
        }

        html .woocommerce #reviews #comments ol.commentlist li img.avatar,
        html .woocommerce-page #reviews #comments ol.commentlist li img.avatar {
            background: #ebebeb;
        }

        html .woocommerce #content table.cart td.actions .coupon .input-text,
        html .woocommerce #reviews #comments ol.commentlist li .comment-text,
        html .woocommerce #reviews #comments ol.commentlist li img.avatar,
        html .woocommerce form.checkout_coupon,
        html .woocommerce form.login,
        html .woocommerce form.register,
        html .woocommerce table.cart td.actions .coupon .input-text,
        html .woocommerce ul.products li.product a img,
        html .woocommerce ul.products li.product a img:hover,
        html .woocommerce-page #content div.product div.images img,
        html .woocommerce-page #content table.cart td.actions .coupon .input-text,
        html .woocommerce-page #reviews #comments ol.commentlist li .comment-text,
        html .woocommerce-page #reviews #comments ol.commentlist li img.avatar,
        html .woocommerce-page div.product div.images img,
        html .woocommerce-page form.checkout_coupon,
        html .woocommerce-page form.login,
        html .woocommerce-page form.register,
        html .woocommerce-page table.cart td.actions .coupon .input-text,
        html .woocommerce-page ul.products li.product a img,
        html .woocommerce-page ul.products li.product a img:hover {
            border: 1px solid #ebebeb;
        }

        html .woocommerce #content div.product .woocommerce-tabs ul.tabs:before,
        html .woocommerce div.product .woocommerce-tabs ul.tabs:before,
        html .woocommerce table.shop_table tfoot td,
        html .woocommerce table.shop_table tfoot th,
        html .woocommerce-page #content div.product .woocommerce-tabs ul.tabs:before,
        html .woocommerce-page div.product .woocommerce-tabs ul.tabs:before,
        html .woocommerce-page table.shop_table tfoot td,
        html .woocommerce-page table.shop_table tfoot th {
            border-bottom: 1px solid #ebebeb;
        }

        html .woocommerce .cart-collaterals .cart_totals table tr:first-child td,
        html .woocommerce .cart-collaterals .cart_totals table tr:first-child th,
        html .woocommerce-page .cart-collaterals .cart_totals table tr:first-child td,
        html .woocommerce-page .cart-collaterals .cart_totals table tr:first-child th {
            border-top: 3px #ebebeb solid;
        }

        html .woocommerce .cart-collaterals .cart_totals tr td,
        html .woocommerce .cart-collaterals .cart_totals tr th,
        html .woocommerce-page .cart-collaterals .cart_totals tr td,
        html .woocommerce-page .cart-collaterals .cart_totals tr th {
            border-bottom: 2px solid #ebebeb;
        }

        html .woocommerce #content .quantity input.qty,
        html .woocommerce #content div.product .woocommerce-tabs ul.tabs li,
        html .woocommerce #content table.cart a.remove,
        html .woocommerce #payment,
        html .woocommerce .customer_details,
        html .woocommerce .quantity input.qty,
        html .woocommerce .widget_shopping_cart .total,
        html .woocommerce div.product .woocommerce-tabs ul.tabs li,
        html .woocommerce form .form-row input.input-text,
        html .woocommerce form .form-row textarea,
        html .woocommerce nav.woocommerce-pagination ul li a,
        html .woocommerce table.cart a.remove,
        html .woocommerce ul.order_details,
        html .woocommerce-page #content .quantity input.qty,
        html .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li,
        html .woocommerce-page #content table.cart a.remove,
        html .woocommerce-page #payment,
        html .woocommerce-page .quantity input.qty,
        html .woocommerce-page .widget_shopping_cart .total,
        html .woocommerce-page div.product .woocommerce-tabs ul.tabs li,
        html .woocommerce-page form .form-row input.input-text,
        html .woocommerce-page form .form-row textarea,
        html .woocommerce-page nav.woocommerce-pagination ul li a,
        html .woocommerce-page table.cart a.remove {
            background: #f3f3f3;
        }

        html .woocommerce #content .quantity input.qty,
        html .woocommerce .quantity input.qty,
        html .woocommerce-page #content .quantity input.qty,
        html .woocommerce-page .quantity input.qty {
            border: 1px solid #f3f3f3;
        }

        html .woocommerce .widget_shopping_cart .total,
        html .woocommerce-page .widget_shopping_cart .total {
            border-top: 2px solid #e5e5e5;
        }

        html #payment div.payment_box,
        html .woocommerce #content table.cart a.remove:hover,
        html .woocommerce table.cart a.remove:hover,
        html .woocommerce-page #content table.cart a.remove:hover,
        html .woocommerce-page #payment div.payment_box,
        html .woocommerce-page table.cart a.remove:hover {
            background: #e5e5e5;
        }

        .cart-subtotal th,
        .shipping th,
        .total th,
        html .woocommerce table.shop_attributes .alt th,
        html .woocommerce table.shop_table tfoot td,
        html .woocommerce table.shop_table tfoot th,
        html .woocommerce ul.products li.product .price,
        html .woocommerce-page table.shop_attributes .alt th,
        html .woocommerce-page table.shop_table tfoot td,
        html .woocommerce-page table.shop_table tfoot th,
        html.woocommerce-page ul.products li.product .price {
            color: #333;
        }

        html .woocommerce #content table.cart a.remove,
        html .woocommerce table.cart a.remove,
        html .woocommerce ul.products li.product .price del,
        html .woocommerce-page #content table.cart a.remove,
        html .woocommerce-page table.cart a.remove,
        html .woocommerce-page ul.products li.product .price del {
            color: #888;
        }

        html .woocommerce #content .quantity .minus,
        html .woocommerce #content .quantity .plus,
        html .woocommerce .quantity .minus,
        html .woocommerce .quantity .plus,
        html .woocommerce-page #content .quantity .minus,
        html .woocommerce-page #content .quantity .plus,
        html .woocommerce-page .quantity .minus,
        html .woocommerce-page .quantity .plus {
            border: 1px solid #a0a0a0;
            color: #fff;
        }

        .gdlr-skin-dark-service *,
        .gdlr-skin-dark-service .gdlr-skin-border,
        .gdlr-skin-light-grey *,
        .gdlr-skin-light-grey .gdlr-skin-border {
            border-color: #fff;
        }

        html .woocommerce #content .quantity .plus,
        html .woocommerce #content .quantity .plus:hover,
        html .woocommerce .quantity .plus,
        html .woocommerce .quantity .plus:hover,
        html .woocommerce-page #content .quantity .plus,
        html .woocommerce-page #content .quantity .plus:hover,
        html .woocommerce-page .quantity .plus,
        html .woocommerce-page .quantity .plus:hover {
            background: #9a9a9a;
        }

        html .woocommerce #content .quantity .minus,
        html .woocommerce #content .quantity .minus:hover,
        html .woocommerce .quantity .minus,
        html .woocommerce .quantity .minus:hover,
        html .woocommerce-page #content .quantity .minus,
        html .woocommerce-page #content .quantity .minus:hover,
        html .woocommerce-page .quantity .minus,
        html .woocommerce-page .quantity .minus:hover {
            background: #b6b6b6;
        }

        .gdlr-skin-dark-service .gdlr-column-service-item .gdlr-skin-box,
        .gdlr-skin-dark-service .gdlr-flex-next,
        .gdlr-skin-dark-service .gdlr-flex-prev,
        .gdlr-skin-dark-service .gdlr-hotel-availability .gdlr-combobox-wrapper,
        .gdlr-skin-dark-service .gdlr-hotel-availability .gdlr-combobox-wrapper select,
        .gdlr-skin-dark-service .gdlr-hotel-availability .gdlr-combobox-wrapper select option,
        .gdlr-skin-dark-service .gdlr-skin-box,
        .gdlr-skin-dark-service input[type="password"],
        .gdlr-skin-dark-service input[type="text"],
        .gdlr-skin-dark-service input[type="email"],
        .gdlr-skin-dark-service textarea,
        .gdlr-skin-light-grey .gdlr-column-service-item .gdlr-skin-box,
        .gdlr-skin-light-grey .gdlr-flex-next,
        .gdlr-skin-light-grey .gdlr-flex-prev,
        .gdlr-skin-light-grey .gdlr-skin-box {
            background-color: #fff;
        }

        .gdlr-skin-dark-service,
        .gdlr-skin-dark-service .gdlr-flex-next,
        .gdlr-skin-dark-service .gdlr-flex-prev,
        .gdlr-skin-dark-service .gdlr-hotel-availability .gdlr-datepicker-wrapper:after,
        .gdlr-skin-dark-service .gdlr-skin-content,
        .gdlr-skin-dark-service i {
            color: #fff;
        }

        .gdlr-skin-dark-service .gdlr-skin-title,
        .gdlr-skin-dark-service .gdlr-skin-title a,
        .gdlr-skin-dark-service h1,
        .gdlr-skin-dark-service h2,
        .gdlr-skin-dark-service h3,
        .gdlr-skin-dark-service h4,
        .gdlr-skin-dark-service h5,
        .gdlr-skin-dark-service h6 {
            color: #1abc9c;
        }

        .gdlr-skin-dark-service .gdlr-hotel-availability .gdlr-combobox-wrapper select,
        .gdlr-skin-dark-service .gdlr-skin-info,
        .gdlr-skin-dark-service .gdlr-skin-info a,
        .gdlr-skin-dark-service .gdlr-skin-info a:hover,
        .gdlr-skin-dark-service .gdlr-skin-link,
        .gdlr-skin-dark-service .gdlr-skin-link-color,
        .gdlr-skin-dark-service .gdlr-skin-link:hover,
        .gdlr-skin-dark-service .gdlr-skin-title a:hover,
        .gdlr-skin-dark-service a,
        .gdlr-skin-dark-service a:hover,
        .gdlr-skin-dark-service input[type="password"],
        .gdlr-skin-dark-service input[type="text"],
        .gdlr-skin-dark-service input[type="email"],
        .gdlr-skin-dark-service textarea {
            color: #fff;
        }

        .gdlr-skin-dark-service .gdlr-button,
        .gdlr-skin-dark-service .gdlr-button:hover,
        .gdlr-skin-dark-service input[type="submit"],
        .gdlr-skin-dark-service input[type="button"] {
            border-color: #fff;
            color: #fff;
            background-color: #fff;
        }

        .gdlr-skin-light-grey,
        .gdlr-skin-light-grey .gdlr-skin-content {
            color: #5e5e5e;
        }

        .gdlr-skin-light-grey .gdlr-flex-next,
        .gdlr-skin-light-grey .gdlr-flex-prev,
        .gdlr-skin-light-grey .gdlr-hotel-availability .gdlr-datepicker-wrapper:after,
        .gdlr-skin-light-grey i {
            color: #fff;
        }

        .gdlr-skin-light-grey .gdlr-skin-title,
        .gdlr-skin-light-grey .gdlr-skin-title a,
        .gdlr-skin-light-grey .gdlr-skin-title a:hover,
        .gdlr-skin-light-grey h1,
        .gdlr-skin-light-grey h2,
        .gdlr-skin-light-grey h3,
        .gdlr-skin-light-grey h4,
        .gdlr-skin-light-grey h5,
        .gdlr-skin-light-grey h6 {
            color: #1abc9c;
        }

        .gdlr-skin-light-grey .gdlr-skin-info,
        .gdlr-skin-light-grey .gdlr-skin-info a,
        .gdlr-skin-light-grey .gdlr-skin-info a:hover {
            color: #6d6d6d;
        }

        .gdlr-skin-light-grey .gdlr-skin-link,
        .gdlr-skin-light-grey .gdlr-skin-link-color,
        .gdlr-skin-light-grey .gdlr-skin-link:hover,
        .gdlr-skin-light-grey a,
        .gdlr-skin-light-grey a:hover {
            color: #fff;
        }

        .gdlr-skin-light-grey .gdlr-button,
        .gdlr-skin-light-grey .gdlr-button:hover,
        .gdlr-skin-light-grey input[type="submit"],
        .gdlr-skin-light-grey input[type="button"] {
            border-color: #15a881;
            color: #fff;
            background-color: #1abc9c;
        }

        .gdlr-skin-light-grey .gdlr-hotel-availability .gdlr-combobox-wrapper select,
        .gdlr-skin-light-grey input[type="password"],
        .gdlr-skin-light-grey input[type="text"],
        .gdlr-skin-light-grey input[type="email"],
        .gdlr-skin-light-grey textarea {
            color: #a8a8a8;
        }

        .gdlr-skin-light-grey .gdlr-hotel-availability .gdlr-combobox-wrapper,
        .gdlr-skin-light-grey .gdlr-hotel-availability .gdlr-combobox-wrapper select,
        .gdlr-skin-light-grey .gdlr-hotel-availability .gdlr-combobox-wrapper select option,
        .gdlr-skin-light-grey input[type="password"],
        .gdlr-skin-light-grey input[type="text"],
        .gdlr-skin-light-grey input[type="email"],
        .gdlr-skin-light-grey textarea {
            background-color: #fff;
        }

        .gdlr-skin-dark-skin,
        .gdlr-skin-dark-skin .gdlr-flex-next,
        .gdlr-skin-dark-skin .gdlr-flex-prev,
        .gdlr-skin-dark-skin .gdlr-hotel-availability .gdlr-datepicker-wrapper:after,
        .gdlr-skin-dark-skin .gdlr-skin-content,
        .gdlr-skin-dark-skin .gdlr-skin-info,
        .gdlr-skin-dark-skin .gdlr-skin-info a,
        .gdlr-skin-dark-skin .gdlr-skin-info a:hover,
        .gdlr-skin-dark-skin .gdlr-skin-link,
        .gdlr-skin-dark-skin .gdlr-skin-link-color,
        .gdlr-skin-dark-skin .gdlr-skin-link:hover,
        .gdlr-skin-dark-skin .gdlr-skin-title,
        .gdlr-skin-dark-skin .gdlr-skin-title a,
        .gdlr-skin-dark-skin .gdlr-skin-title a:hover,
        .gdlr-skin-dark-skin a,
        .gdlr-skin-dark-skin a:hover,
        .gdlr-skin-dark-skin h1,
        .gdlr-skin-dark-skin h2,
        .gdlr-skin-dark-skin h3,
        .gdlr-skin-dark-skin h4,
        .gdlr-skin-dark-skin h5,
        .gdlr-skin-dark-skin h6,
        .gdlr-skin-dark-skin i {
            color: #fff;
        }

        .gdlr-skin-dark-skin .gdlr-column-service-item .gdlr-skin-box,
        .gdlr-skin-dark-skin .gdlr-flex-next,
        .gdlr-skin-dark-skin .gdlr-flex-prev,
        .gdlr-skin-dark-skin .gdlr-skin-box {
            background-color: #1abc9c;
        }

        .gdlr-skin-dark-skin *,
        .gdlr-skin-dark-skin .gdlr-skin-border {
            border-color: #fff;
        }

        .gdlr-skin-dark-skin .gdlr-button,
        .gdlr-skin-dark-skin .gdlr-button:hover,
        .gdlr-skin-dark-skin input[type="submit"],
        .gdlr-skin-dark-skin input[type="button"] {
            border-color: #149174;
            color: #fff;
            background-color: #1abc9c;
        }

        .gdlr-skin-dark-skin .gdlr-hotel-availability .gdlr-combobox-wrapper select,
        .gdlr-skin-dark-skin input[type="password"],
        .gdlr-skin-dark-skin input[type="text"],
        .gdlr-skin-dark-skin input[type="email"],
        .gdlr-skin-dark-skin textarea {
            color: #fff;
        }

        .gdlr-skin-dark-skin .gdlr-hotel-availability .gdlr-combobox-wrapper,
        .gdlr-skin-dark-skin .gdlr-hotel-availability .gdlr-combobox-wrapper select,
        .gdlr-skin-dark-skin .gdlr-hotel-availability .gdlr-combobox-wrapper select option,
        .gdlr-skin-dark-skin input[type="password"],
        .gdlr-skin-dark-skin input[type="text"],
        .gdlr-skin-dark-skin input[type="email"],
        .gdlr-skin-dark-skin textarea {
            background-color: #fff;
        }

        .gdlr-skin-service-testimonial,
        .gdlr-skin-service-testimonial .gdlr-flex-next,
        .gdlr-skin-service-testimonial .gdlr-flex-prev,
        .gdlr-skin-service-testimonial .gdlr-hotel-availability .gdlr-datepicker-wrapper:after,
        .gdlr-skin-service-testimonial .gdlr-skin-content,
        .gdlr-skin-service-testimonial .gdlr-skin-info,
        .gdlr-skin-service-testimonial .gdlr-skin-info a,
        .gdlr-skin-service-testimonial .gdlr-skin-info a:hover,
        .gdlr-skin-service-testimonial .gdlr-skin-link,
        .gdlr-skin-service-testimonial .gdlr-skin-link-color,
        .gdlr-skin-service-testimonial .gdlr-skin-link:hover,
        .gdlr-skin-service-testimonial .gdlr-skin-title,
        .gdlr-skin-service-testimonial .gdlr-skin-title a,
        .gdlr-skin-service-testimonial .gdlr-skin-title a:hover,
        .gdlr-skin-service-testimonial a,
        .gdlr-skin-service-testimonial a:hover,
        .gdlr-skin-service-testimonial h1,
        .gdlr-skin-service-testimonial h2,
        .gdlr-skin-service-testimonial h3,
        .gdlr-skin-service-testimonial h4,
        .gdlr-skin-service-testimonial h5,
        .gdlr-skin-service-testimonial h6,
        .gdlr-skin-service-testimonial i {
            color: #fff;
        }

        .gdlr-skin-service-testimonial .gdlr-column-service-item .gdlr-skin-box,
        .gdlr-skin-service-testimonial .gdlr-flex-next,
        .gdlr-skin-service-testimonial .gdlr-flex-prev,
        .gdlr-skin-service-testimonial .gdlr-skin-box {
            background-color: #43655e;
        }

        .gdlr-skin-service-testimonial *,
        .gdlr-skin-service-testimonial .gdlr-skin-border {
            border-color: #fff;
        }

        .gdlr-skin-service-testimonial .gdlr-button,
        .gdlr-skin-service-testimonial .gdlr-button:hover,
        .gdlr-skin-service-testimonial input[type="submit"],
        .gdlr-skin-service-testimonial input[type="button"] {
            border-color: #fff;
            color: #fff;
            background-color: #fff;
        }

        .gdlr-skin-service-testimonial .gdlr-hotel-availability .gdlr-combobox-wrapper select,
        .gdlr-skin-service-testimonial input[type="password"],
        .gdlr-skin-service-testimonial input[type="text"],
        .gdlr-skin-service-testimonial input[type="email"],
        .gdlr-skin-service-testimonial textarea {
            color: #fff;
        }

        .gdlr-skin-service-testimonial .gdlr-hotel-availability .gdlr-combobox-wrapper,
        .gdlr-skin-service-testimonial .gdlr-hotel-availability .gdlr-combobox-wrapper select,
        .gdlr-skin-service-testimonial .gdlr-hotel-availability .gdlr-combobox-wrapper select option,
        .gdlr-skin-service-testimonial input[type="password"],
        .gdlr-skin-service-testimonial input[type="text"],
        .gdlr-skin-service-testimonial input[type="email"],
        .gdlr-skin-service-testimonial textarea {
            background-color: #fff;
        }

        .gdlr-skin-services-facilities,
        .gdlr-skin-services-facilities .gdlr-skin-content {
            color: #828282;
        }

        .gdlr-skin-services-facilities .gdlr-flex-next,
        .gdlr-skin-services-facilities .gdlr-flex-prev,
        .gdlr-skin-services-facilities .gdlr-hotel-availability .gdlr-datepicker-wrapper:after,
        .gdlr-skin-services-facilities .gdlr-skin-title,
        .gdlr-skin-services-facilities .gdlr-skin-title a,
        .gdlr-skin-services-facilities .gdlr-skin-title a:hover,
        .gdlr-skin-services-facilities h1,
        .gdlr-skin-services-facilities h2,
        .gdlr-skin-services-facilities h3,
        .gdlr-skin-services-facilities h4,
        .gdlr-skin-services-facilities h5,
        .gdlr-skin-services-facilities h6,
        .gdlr-skin-services-facilities i {
            color: #1abc9c;
        }

        .gdlr-skin-services-facilities .gdlr-skin-info,
        .gdlr-skin-services-facilities .gdlr-skin-info a,
        .gdlr-skin-services-facilities .gdlr-skin-info a:hover,
        .gdlr-skin-services-facilities .gdlr-skin-link,
        .gdlr-skin-services-facilities .gdlr-skin-link-color,
        .gdlr-skin-services-facilities .gdlr-skin-link:hover,
        .gdlr-skin-services-facilities a,
        .gdlr-skin-services-facilities a:hover {
            color: #fff;
        }

        .gdlr-skin-services-facilities .gdlr-column-service-item .gdlr-skin-box,
        .gdlr-skin-services-facilities .gdlr-flex-next,
        .gdlr-skin-services-facilities .gdlr-flex-prev,
        .gdlr-skin-services-facilities .gdlr-skin-box {
            background-color: #fff;
        }

        .gdlr-skin-services-facilities *,
        .gdlr-skin-services-facilities .gdlr-skin-border {
            border-color: #fff;
        }

        .gdlr-skin-services-facilities .gdlr-button,
        .gdlr-skin-services-facilities .gdlr-button:hover,
        .gdlr-skin-services-facilities input[type="submit"],
        .gdlr-skin-services-facilities input[type="button"] {
            border-color: #fff;
            color: #fff;
            background-color: #fff;
        }

        .gdlr-skin-services-facilities .gdlr-hotel-availability .gdlr-combobox-wrapper select,
        .gdlr-skin-services-facilities input[type="password"],
        .gdlr-skin-services-facilities input[type="text"],
        .gdlr-skin-services-facilities input[type="email"],
        .gdlr-skin-services-facilities textarea {
            color: #fff;
        }

        .gdlr-skin-services-facilities .gdlr-hotel-availability .gdlr-combobox-wrapper,
        .gdlr-skin-services-facilities .gdlr-hotel-availability .gdlr-combobox-wrapper select,
        .gdlr-skin-services-facilities .gdlr-hotel-availability .gdlr-combobox-wrapper select option,
        .gdlr-skin-services-facilities input[type="password"],
        .gdlr-skin-services-facilities input[type="text"],
        .gdlr-skin-services-facilities input[type="email"],
        .gdlr-skin-services-facilities textarea {
            background-color: #fff;
        }

        .gdlr-color-wrapper,
        .gdlr-page-title-wrapper,
        .gdlr-parallax-wrapper {
            background-size: cover;
        }

        .gdlr-navigation-wrapper .gdlr-menu-search-button,
        .gdlr-navigation-wrapper .gdlr-menu-search-button-sep {
            display: none;
        }

        @media only screen and (max-width: 959px) {
            .body-wrapper.gdlr-header-transparent .gdlr-header-wrapper {
                background: 0 0;
            }
        }

        .gdlr-navigation-wrapper .gdlr-main-menu>li:nth-last-child(-n + 3) a {
            font-size: 0;
            padding: 5px;
        }

        .gdlr-navigation-wrapper .gdlr-main-menu>li:nth-last-child(-n + 3) a i {
            font-size: 20px;
            margin: 0;
        }

        .gdlr-booking-contact-submit,
        .gdlr-reservation-bar,
        .gdlr-room-price,
        .gdlr-room-selection,
        body.home .with-sidebar-wrapper #content-section-3 {
            display: none !important;
        }

        .sf-menu,
        .sf-menu .gdlr-normal-menu ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .sf-menu .gdlr-normal-menu,
        .sf-menu .gdlr-normal-menu li {
            position: relative;
        }

        .sf-menu .gdlr-normal-menu ul {
            position: absolute;
            display: none;
            top: 100%;
            left: 0;
            z-index: 99;
        }

        .sf-menu .gdlr-normal-menu li.sfHover>ul,
        .sf-menu .gdlr-normal-menu li:hover>ul,
        .sf-menu .gdlr-normal-menu.sfHover>ul {
            display: block;
        }

        .sf-menu .gdlr-normal-menu a {
            display: block;
            position: relative;
        }

        .sf-menu .gdlr-normal-menu ul ul {
            top: 1px;
            left: 100%;
            margin-left: 1px;
        }

        .sf-menu>.gdlr-mega-menu .sf-mega {
            position: absolute;
            display: none;
            z-index: 99;
        }

        .sf-menu>.gdlr-mega-menu li.sfHover>.sf-mega,
        .sf-menu>.gdlr-mega-menu li:hover>.sf-mega,
        .sf-menu>.gdlr-mega-menu.sfHover>.sf-mega {
            display: block;
        }

        .sf-menu>.gdlr-mega-menu>a {
            display: block;
            position: relative;
        }

        .sf-menu>li>a {
            font-size: 13px;
            padding: 10px 5px;
            margin-right: 16px;
        }

        .sf-menu li a.sf-with-ul:after {
            content: "\f107";
            font-family: FontAwesome;
            position: absolute;
            top: 12px;
            right: 0;
            line-height: 20px;
            height: 20px;
            margin-top: -9px;
        }

        .sf-menu>li>a.sf-with-ul {
            padding-right: 17px;
        }

        .sf-menu i {
            margin-right: 7px;
        }

        .sf-menu li li i {
            margin-right: 10px;
        }

        .sf-menu>.gdlr-normal-menu ul {
            text-transform: none;
            letter-spacing: 0;
            font-size: 13px;
            min-width: 190px;
        }

        .sf-menu>.gdlr-normal-menu li {
            white-space: nowrap;
        }

        .sf-menu>.gdlr-normal-menu li a {
            padding: 10px 15px;
            border-top-width: 1px;
            border-top-style: solid;
            zoom: 1;
        }

        .sf-menu>.gdlr-normal-menu li:first-child>a {
            border-top-width: 0;
        }

        .sf-menu>.gdlr-normal-menu li>a.sf-with-ul {
            padding-right: 30px;
        }

        .sf-menu>.gdlr-normal-menu li>a.sf-with-ul:after {
            content: "\f105";
            top: 50%;
            margin-top: -10px;
            right: 10px;
            border-color: transparent;
        }

        .sf-menu>.gdlr-normal-menu .sub-menu {
            border-top-width: 0;
            border-top-style: solid;
        }

        .sf-menu>.gdlr-mega-menu .sf-mega {
            left: 0;
            right: 0;
            margin: 0 15px;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border-top-width: 0;
            border-top-style: solid;
        }

        .sf-mega-section .sf-mega-section-inner {
            padding: 20px 25px 30px;
            border-left-width: 1px;
            border-left-style: solid;
            border-top-width: 1px;
            border-top-style: solid;
        }

        .sf-mega-section.first-column .sf-mega-section-inner {
            border-left-width: 0;
        }

        .sf-mega-section[data-row="1"] .sf-mega-section-inner {
            border-top-width: 0;
        }

        .sf-mega-section-inner>a {
            text-transform: none;
            letter-spacing: 0;
            font-size: 17px;
            display: block;
            padding-left: 10px;
            margin-bottom: 15px;
            margin-top: 10px;
        }

        .sf-mega-section-inner>ul {
            text-transform: none;
            letter-spacing: 0;
            list-style: none;
            margin: 0;
            font-size: 12px;
            line-height: 1.5;
        }

        .sf-mega-section-inner>ul>li>a {
            padding: 7px 10px;
            display: block;
        }

        .sf-mega-section-inner>ul>li {
            margin-bottom: 0;
        }

        .gdlr-top-menu.sf-menu li a.sf-with-ul:after {
            display: none;
        }

        .gdlr-top-menu.sf-menu>li i {
            margin-right: 9px;
            font-size: 14px;
        }

        .gdlr-top-menu.sf-menu>li>a {
            padding: 8px 15px 8px 16px;
            margin-right: 0;
            line-height: 18px;
            border-style: solid;
            border-left-width: 1px;
        }

        .gdlr-top-menu.sf-menu>li:last-child>a {
            border-right-width: 1px;
        }

        .gdlr-top-menu.sf-menu>.gdlr-mega-menu .sf-mega {
            left: auto;
            right: auto;
            border-top: 0;
            -moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.25);
            \-webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.25);
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.25);
            margin: 2px 0 0;
            padding: 20px;
            white-space: nowrap;
            min-width: 120px;
        }

        .gdlr-top-menu.sf-menu>li .sub-menu-item {
            line-height: 1;
            margin-top: 15px;
        }

        .gdlr-top-menu.sf-menu>li .sub-menu-item:first-child {
            margin-top: 0;
        }

        .dl-menuwrapper {
            width: 100%;
            float: left;
            position: relative;
        }

        .dl-menuwrapper:first-child {
            margin-right: 100px;
        }

        .dl-menuwrapper button {
            background: #ccc;
            border: none;
            width: 43px;
            height: 39px;
            text-indent: -900em;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            outline: 0;
        }

        .dl-menuwrapper button.dl-active,
        .dl-menuwrapper button:hover,
        .dl-menuwrapper ul {
            background: #aaa;
        }

        .dl-menuwrapper button:after {
            content: "";
            position: absolute;
            width: 68%;
            height: 4px;
            background: #fff;
            top: 8px;
            left: 17%;
            box-shadow: 0 10px 0 #fff, 0 20px 0 #fff;
        }

        .dl-menuwrapper ul {
            margin: 0;
            padding: 0;
            list-style: none;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .dl-menuwrapper li {
            position: relative;
        }

        .dl-menuwrapper li a {
            display: block;
            position: relative;
            padding: 15px 20px;
            font-size: 16px;
            line-height: 20px;
            font-weight: 300;
            color: #fff;
            outline: 0;
        }

        .no-touch .dl-menuwrapper li a:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .dl-menuwrapper li.dl-back>a {
            padding-left: 38px;
            background: rgba(0, 0, 0, 0.1);
        }

        .dl-menuwrapper li.dl-back:after,
        .dl-menuwrapper li>a:not(:only-child):after {
            position: absolute;
            top: 0;
            line-height: 50px;
            font-family: FontAwesome;
            speak: none;
            -webkit-font-smoothing: antialiased;
            content: "\f105";
            font-size: 16px;
            color: #fff;
        }

        .dl-menuwrapper li.dl-back:after {
            left: 20px;
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .dl-menuwrapper li>a:after {
            right: 15px;
            color: rgba(0, 0, 0, 0.15);
        }

        .dl-menuwrapper .dl-menu {
            margin: 0;
            position: absolute;
            width: 100%;
            opacity: 0;
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .dl-menuwrapper .dl-menu.dl-menu-toggle {
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .dl-menuwrapper .dl-menu.dl-menuopen {
            opacity: 1;
            pointer-events: auto;
        }

        .dl-menu.dl-subview li,
        .dl-menu.dl-subview li.dl-subview>a,
        .dl-menu.dl-subview li.dl-subviewopen>a,
        .dl-menuwrapper li .dl-submenu {
            display: none;
        }

        .dl-menu.dl-subview li.dl-subview,
        .dl-menu.dl-subview li.dl-subview .dl-submenu,
        .dl-menu.dl-subview li.dl-subviewopen,
        .dl-menu.dl-subview li.dl-subviewopen>.dl-submenu,
        .dl-menu.dl-subview li.dl-subviewopen>.dl-submenu>li,
        .no-js .dl-menuwrapper li .dl-submenu {
            display: block;
        }

        .dl-menuwrapper>.dl-submenu {
            position: absolute;
            width: 100%;
            left: 0;
            margin: 0;
        }

        .dl-menu.dl-animate-out-1 {
            -webkit-animation: MenuAnimOut1 0.4s;
            -moz-animation: MenuAnimOut1 0.4s;
            animation: MenuAnimOut1 0.4s;
        }

        .dl-menu.dl-animate-out-2 {
            -webkit-animation: MenuAnimOut2 0.3s ease-in-out;
            -moz-animation: MenuAnimOut2 0.3s ease-in-out;
            animation: MenuAnimOut2 0.3s ease-in-out;
        }

        .dl-menu.dl-animate-out-3 {
            -webkit-animation: MenuAnimOut3 0.4s ease;
            -moz-animation: MenuAnimOut3 0.4s ease;
            animation: MenuAnimOut3 0.4s ease;
        }

        .dl-menu.dl-animate-out-4 {
            -webkit-animation: MenuAnimOut4 0.4s ease;
            -moz-animation: MenuAnimOut4 0.4s ease;
            animation: MenuAnimOut4 0.4s ease;
        }

        .dl-menu.dl-animate-out-5 {
            -webkit-animation: MenuAnimOut5 0.4s ease;
            -moz-animation: MenuAnimOut5 0.4s ease;
            animation: MenuAnimOut5 0.4s ease;
        }

        @-webkit-keyframes MenuAnimOut1 {
            50% {
                -webkit-transform: translateZ(-250px) rotateY(30deg);
            }

            75% {
                -webkit-transform: translateZ(-372.5px) rotateY(15deg);
                opacity: 0.5;
            }

            100% {
                -webkit-transform: translateZ(-500px) rotateY(0);
                opacity: 0;
            }
        }

        @-webkit-keyframes MenuAnimOut2 {
            100% {
                -webkit-transform: translateX(-100%);
                opacity: 0;
            }
        }

        @-webkit-keyframes MenuAnimOut3 {
            100% {
                -webkit-transform: translateZ(300px);
                opacity: 0;
            }
        }

        @-webkit-keyframes MenuAnimOut4 {
            100% {
                -webkit-transform: translateZ(-300px);
                opacity: 0;
            }
        }

        @-webkit-keyframes MenuAnimOut5 {
            100% {
                -webkit-transform: translateY(40%);
                opacity: 0;
            }
        }

        @-moz-keyframes MenuAnimOut1 {
            50% {
                -moz-transform: translateZ(-250px) rotateY(30deg);
            }

            75% {
                -moz-transform: translateZ(-372.5px) rotateY(15deg);
                opacity: 0.5;
            }

            100% {
                -moz-transform: translateZ(-500px) rotateY(0);
                opacity: 0;
            }
        }

        @-moz-keyframes MenuAnimOut2 {
            100% {
                -moz-transform: translateX(-100%);
                opacity: 0;
            }
        }

        @-moz-keyframes MenuAnimOut3 {
            100% {
                -moz-transform: translateZ(300px);
                opacity: 0;
            }
        }

        @-moz-keyframes MenuAnimOut4 {
            100% {
                -moz-transform: translateZ(-300px);
                opacity: 0;
            }
        }

        @-moz-keyframes MenuAnimOut5 {
            100% {
                -moz-transform: translateY(40%);
                opacity: 0;
            }
        }

        @keyframes MenuAnimOut1 {
            50% {
                transform: translateZ(-250px) rotateY(30deg);
            }

            75% {
                transform: translateZ(-372.5px) rotateY(15deg);
                opacity: 0.5;
            }

            100% {
                transform: translateZ(-500px) rotateY(0);
                opacity: 0;
            }
        }

        @keyframes MenuAnimOut2 {
            100% {
                transform: translateX(-100%);
                opacity: 0;
            }
        }

        @keyframes MenuAnimOut3 {
            100% {
                transform: translateZ(300px);
                opacity: 0;
            }
        }

        @keyframes MenuAnimOut4 {
            100% {
                transform: translateZ(-300px);
                opacity: 0;
            }
        }

        @keyframes MenuAnimOut5 {
            100% {
                transform: translateY(40%);
                opacity: 0;
            }
        }

        .dl-menu.dl-animate-in-1 {
            -webkit-animation: MenuAnimIn1 0.3s;
            -moz-animation: MenuAnimIn1 0.3s;
            animation: MenuAnimIn1 0.3s;
        }

        .dl-menu.dl-animate-in-2 {
            -webkit-animation: MenuAnimIn2 0.3s ease-in-out;
            -moz-animation: MenuAnimIn2 0.3s ease-in-out;
            animation: MenuAnimIn2 0.3s ease-in-out;
        }

        .dl-menu.dl-animate-in-3 {
            -webkit-animation: MenuAnimIn3 0.4s ease;
            -moz-animation: MenuAnimIn3 0.4s ease;
            animation: MenuAnimIn3 0.4s ease;
        }

        .dl-menu.dl-animate-in-4 {
            -webkit-animation: MenuAnimIn4 0.4s ease;
            -moz-animation: MenuAnimIn4 0.4s ease;
            animation: MenuAnimIn4 0.4s ease;
        }

        .dl-menu.dl-animate-in-5 {
            -webkit-animation: MenuAnimIn5 0.4s ease;
            -moz-animation: MenuAnimIn5 0.4s ease;
            animation: MenuAnimIn5 0.4s ease;
        }

        @-webkit-keyframes MenuAnimIn1 {
            0% {
                -webkit-transform: translateZ(-500px) rotateY(0);
                opacity: 0;
            }

            20% {
                -webkit-transform: translateZ(-250px) rotateY(30deg);
                opacity: 0.5;
            }

            100% {
                -webkit-transform: translateZ(0) rotateY(0);
                opacity: 1;
            }
        }

        @-webkit-keyframes MenuAnimIn2 {
            0% {
                -webkit-transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                -webkit-transform: translateX(0);
                opacity: 1;
            }
        }

        @-webkit-keyframes MenuAnimIn3 {
            0% {
                -webkit-transform: translateZ(300px);
                opacity: 0;
            }

            100% {
                -webkit-transform: translateZ(0);
                opacity: 1;
            }
        }

        @-webkit-keyframes MenuAnimIn4 {
            0% {
                -webkit-transform: translateZ(-300px);
                opacity: 0;
            }

            100% {
                -webkit-transform: translateZ(0);
                opacity: 1;
            }
        }

        @-webkit-keyframes MenuAnimIn5 {
            0% {
                -webkit-transform: translateY(40%);
                opacity: 0;
            }

            100% {
                -webkit-transform: translateY(0);
                opacity: 1;
            }
        }

        @-moz-keyframes MenuAnimIn1 {
            0% {
                -moz-transform: translateZ(-500px) rotateY(0);
                opacity: 0;
            }

            20% {
                -moz-transform: translateZ(-250px) rotateY(30deg);
                opacity: 0.5;
            }

            100% {
                -moz-transform: translateZ(0) rotateY(0);
                opacity: 1;
            }
        }

        @-moz-keyframes MenuAnimIn2 {
            0% {
                -moz-transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                -moz-transform: translateX(0);
                opacity: 1;
            }
        }

        @-moz-keyframes MenuAnimIn3 {
            0% {
                -moz-transform: translateZ(300px);
                opacity: 0;
            }

            100% {
                -moz-transform: translateZ(0);
                opacity: 1;
            }
        }

        @-moz-keyframes MenuAnimIn4 {
            0% {
                -moz-transform: translateZ(-300px);
                opacity: 0;
            }

            100% {
                -moz-transform: translateZ(0);
                opacity: 1;
            }
        }

        @-moz-keyframes MenuAnimIn5 {
            0% {
                -moz-transform: translateY(40%);
                opacity: 0;
            }

            100% {
                -moz-transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes MenuAnimIn1 {
            0% {
                transform: translateZ(-500px) rotateY(0);
                opacity: 0;
            }

            20% {
                transform: translateZ(-250px) rotateY(30deg);
                opacity: 0.5;
            }

            100% {
                transform: translateZ(0) rotateY(0);
                opacity: 1;
            }
        }

        @keyframes MenuAnimIn2 {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes MenuAnimIn3 {
            0% {
                transform: translateZ(300px);
                opacity: 0;
            }

            100% {
                transform: translateZ(0);
                opacity: 1;
            }
        }

        @keyframes MenuAnimIn4 {
            0% {
                transform: translateZ(-300px);
                opacity: 0;
            }

            100% {
                transform: translateZ(0);
                opacity: 1;
            }
        }

        @keyframes MenuAnimIn5 {
            0% {
                transform: translateY(40%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .dl-menuwrapper>.dl-submenu.dl-animate-in-1 {
            -webkit-animation: SubMenuAnimIn1 0.4s ease;
            -moz-animation: SubMenuAnimIn1 0.4s ease;
            animation: SubMenuAnimIn1 0.4s ease;
        }

        .dl-menuwrapper>.dl-submenu.dl-animate-in-2 {
            -webkit-animation: SubMenuAnimIn2 0.3s ease-in-out;
            -moz-animation: SubMenuAnimIn2 0.3s ease-in-out;
            animation: SubMenuAnimIn2 0.3s ease-in-out;
        }

        .dl-menuwrapper>.dl-submenu.dl-animate-in-3 {
            -webkit-animation: SubMenuAnimIn3 0.4s ease;
            -moz-animation: SubMenuAnimIn3 0.4s ease;
            animation: SubMenuAnimIn3 0.4s ease;
        }

        .dl-menuwrapper>.dl-submenu.dl-animate-in-4 {
            -webkit-animation: SubMenuAnimIn4 0.4s ease;
            -moz-animation: SubMenuAnimIn4 0.4s ease;
            animation: SubMenuAnimIn4 0.4s ease;
        }

        .dl-menuwrapper>.dl-submenu.dl-animate-in-5 {
            -webkit-animation: SubMenuAnimIn5 0.4s ease;
            -moz-animation: SubMenuAnimIn5 0.4s ease;
            animation: SubMenuAnimIn5 0.4s ease;
        }

        @-webkit-keyframes SubMenuAnimIn1 {
            0% {
                -webkit-transform: translateX(50%);
                opacity: 0;
            }

            100% {
                -webkit-transform: translateX(0);
                opacity: 1;
            }
        }

        @-webkit-keyframes SubMenuAnimIn2 {
            0% {
                -webkit-transform: translateX(100%);
                opacity: 0;
            }

            100% {
                -webkit-transform: translateX(0);
                opacity: 1;
            }
        }

        @-webkit-keyframes SubMenuAnimIn3 {
            0% {
                -webkit-transform: translateZ(-300px);
                opacity: 0;
            }

            100% {
                -webkit-transform: translateZ(0);
                opacity: 1;
            }
        }

        @-webkit-keyframes SubMenuAnimIn4 {
            0% {
                -webkit-transform: translateZ(300px);
                opacity: 0;
            }

            100% {
                -webkit-transform: translateZ(0);
                opacity: 1;
            }
        }

        @-webkit-keyframes SubMenuAnimIn5 {
            0% {
                -webkit-transform: translateZ(-200px);
                opacity: 0;
            }

            100% {
                -webkit-transform: translateZ(0);
                opacity: 1;
            }
        }

        @-moz-keyframes SubMenuAnimIn1 {
            0% {
                -moz-transform: translateX(50%);
                opacity: 0;
            }

            100% {
                -moz-transform: translateX(0);
                opacity: 1;
            }
        }

        @-moz-keyframes SubMenuAnimIn2 {
            0% {
                -moz-transform: translateX(100%);
                opacity: 0;
            }

            100% {
                -moz-transform: translateX(0);
                opacity: 1;
            }
        }

        @-moz-keyframes SubMenuAnimIn3 {
            0% {
                -moz-transform: translateZ(-300px);
                opacity: 0;
            }

            100% {
                -moz-transform: translateZ(0);
                opacity: 1;
            }
        }

        @-moz-keyframes SubMenuAnimIn4 {
            0% {
                -moz-transform: translateZ(300px);
                opacity: 0;
            }

            100% {
                -moz-transform: translateZ(0);
                opacity: 1;
            }
        }

        @-moz-keyframes SubMenuAnimIn5 {
            0% {
                -moz-transform: translateZ(-200px);
                opacity: 0;
            }

            100% {
                -moz-transform: translateZ(0);
                opacity: 1;
            }
        }

        @keyframes SubMenuAnimIn1 {
            0% {
                transform: translateX(50%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes SubMenuAnimIn2 {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes SubMenuAnimIn3 {
            0% {
                transform: translateZ(-300px);
                opacity: 0;
            }

            100% {
                transform: translateZ(0);
                opacity: 1;
            }
        }

        @keyframes SubMenuAnimIn4 {
            0% {
                transform: translateZ(300px);
                opacity: 0;
            }

            100% {
                transform: translateZ(0);
                opacity: 1;
            }
        }

        @keyframes SubMenuAnimIn5 {
            0% {
                transform: translateZ(-200px);
                opacity: 0;
            }

            100% {
                transform: translateZ(0);
                opacity: 1;
            }
        }

        .dl-menuwrapper>.dl-submenu.dl-animate-out-1 {
            -webkit-animation: SubMenuAnimOut1 0.4s ease;
            -moz-animation: SubMenuAnimOut1 0.4s ease;
            animation: SubMenuAnimOut1 0.4s ease;
        }

        .dl-menuwrapper>.dl-submenu.dl-animate-out-2 {
            -webkit-animation: SubMenuAnimOut2 0.3s ease-in-out;
            -moz-animation: SubMenuAnimOut2 0.3s ease-in-out;
            animation: SubMenuAnimOut2 0.3s ease-in-out;
        }

        .dl-menuwrapper>.dl-submenu.dl-animate-out-3 {
            -webkit-animation: SubMenuAnimOut3 0.4s ease;
            -moz-animation: SubMenuAnimOut3 0.4s ease;
            animation: SubMenuAnimOut3 0.4s ease;
        }

        .dl-menuwrapper>.dl-submenu.dl-animate-out-4 {
            -webkit-animation: SubMenuAnimOut4 0.4s ease;
            -moz-animation: SubMenuAnimOut4 0.4s ease;
            animation: SubMenuAnimOut4 0.4s ease;
        }

        .dl-menuwrapper>.dl-submenu.dl-animate-out-5 {
            -webkit-animation: SubMenuAnimOut5 0.4s ease;
            -moz-animation: SubMenuAnimOut5 0.4s ease;
            animation: SubMenuAnimOut5 0.4s ease;
        }

        @-webkit-keyframes SubMenuAnimOut1 {
            0% {
                -webkit-transform: translateX(0);
                opacity: 1;
            }

            100% {
                -webkit-transform: translateX(50%);
                opacity: 0;
            }
        }

        @-webkit-keyframes SubMenuAnimOut2 {
            0% {
                -webkit-transform: translateX(0);
                opacity: 1;
            }

            100% {
                -webkit-transform: translateX(100%);
                opacity: 0;
            }
        }

        @-webkit-keyframes SubMenuAnimOut3 {
            0% {
                -webkit-transform: translateZ(0);
                opacity: 1;
            }

            100% {
                -webkit-transform: translateZ(-300px);
                opacity: 0;
            }
        }

        @-webkit-keyframes SubMenuAnimOut4 {
            0% {
                -webkit-transform: translateZ(0);
                opacity: 1;
            }

            100% {
                -webkit-transform: translateZ(300px);
                opacity: 0;
            }
        }

        @-webkit-keyframes SubMenuAnimOut5 {
            0% {
                -webkit-transform: translateZ(0);
                opacity: 1;
            }

            100% {
                -webkit-transform: translateZ(-200px);
                opacity: 0;
            }
        }

        @-moz-keyframes SubMenuAnimOut1 {
            0% {
                -moz-transform: translateX(0);
                opacity: 1;
            }

            100% {
                -moz-transform: translateX(50%);
                opacity: 0;
            }
        }

        @-moz-keyframes SubMenuAnimOut2 {
            0% {
                -moz-transform: translateX(0);
                opacity: 1;
            }

            100% {
                -moz-transform: translateX(100%);
                opacity: 0;
            }
        }

        @-moz-keyframes SubMenuAnimOut3 {
            0% {
                -moz-transform: translateZ(0);
                opacity: 1;
            }

            100% {
                -moz-transform: translateZ(-300px);
                opacity: 0;
            }
        }

        @-moz-keyframes SubMenuAnimOut4 {
            0% {
                -moz-transform: translateZ(0);
                opacity: 1;
            }

            100% {
                -moz-transform: translateZ(300px);
                opacity: 0;
            }
        }

        @-moz-keyframes SubMenuAnimOut5 {
            0% {
                -moz-transform: translateZ(0);
                opacity: 1;
            }

            100% {
                -moz-transform: translateZ(-200px);
                opacity: 0;
            }
        }

        @keyframes SubMenuAnimOut1 {
            0% {
                transform: translateX(0);
                opacity: 1;
            }

            100% {
                transform: translateX(50%);
                opacity: 0;
            }
        }

        @keyframes SubMenuAnimOut2 {
            0% {
                transform: translateX(0);
                opacity: 1;
            }

            100% {
                transform: translateX(100%);
                opacity: 0;
            }
        }

        @keyframes SubMenuAnimOut3 {
            0% {
                transform: translateZ(0);
                opacity: 1;
            }

            100% {
                transform: translateZ(-300px);
                opacity: 0;
            }
        }

        @keyframes SubMenuAnimOut4 {
            0% {
                transform: translateZ(0);
                opacity: 1;
            }

            100% {
                transform: translateZ(300px);
                opacity: 0;
            }
        }

        @keyframes SubMenuAnimOut5 {
            0% {
                transform: translateZ(0);
                opacity: 1;
            }

            100% {
                transform: translateZ(-200px);
                opacity: 0;
            }
        }

        .no-js .dl-menuwrapper .dl-menu {
            position: relative;
            opacity: 1;
            -webkit-transform: none;
            -moz-transform: none;
            transform: none;
        }

        .no-js .dl-menuwrapper li.dl-back {
            display: none;
        }

        .no-js .dl-menuwrapper li>a:not(:only-child) {
            background: rgba(0, 0, 0, 0.1);
        }

        .no-js .dl-menuwrapper li>a:not(:only-child):after {
            content: "";
        }

        @media screen and (min-width: 960px) {
            .content-wrapper .gdlr-content .with-sidebar-wrapper {
                padding-top: 130px;
            }
        }
    </style>
</head>

<body>
    <div class="body-wrapper  gdlr-icon-dark gdlr-header-transparent" data-home="https://timezonehostel.com">
        <header class="gdlr-header-wrapper">
            <!-- top navigation -->
            <!-- logo -->
            <div class="gdlr-header-inner">
                <div class="gdlr-header-inner-overlay"></div>
                <div class="gdlr-header-container container">
                    <!-- logo -->
                    <div class="gdlr-logo">
                        <div class="gdlr-logo-inner">
                            <a href="https://timezonehostel.com">
                                <img src="https://timezonehostel.com/wp-content/uploads/2017/05/timezone-logo.png" alt="" width="500" height="304" data-normal="https://timezonehostel.com/wp-content/uploads/2017/05/timezone-logo.png"> </a>
                            <a href="https://timezonehostel.com" class="gdlr-responsive-navigation dl-menuwrapper" id="gdlr-responsive-navigation">
                                <button class="dl-trigger">Open Menu</button>
                            </a>
                        </div>
                    </div>
                    <!-- navigation -->
                    <div class="gdlr-navigation-wrapper">
                        <nav class="gdlr-navigation sf-js-enabled sf-arrows" id="gdlr-main-navigation" role="navigation">
                            <ul id="menu-main-1" class="sf-menu gdlr-main-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3720 current_page_item menu-item-4245menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3720 current_page_item menu-item-4245 gdlr-normal-menu"><a href="https://timezonehostel.com/">Home</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4247menu-item menu-item-type-post_type menu-item-object-page menu-item-4247 gdlr-normal-menu"><a href="https://timezonehostel.com/rooms/">Rooms</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4347menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4347 gdlr-normal-menu">
                                    <a href="https://timezonehostel.com/services-facilities/" class="sf-with-ul-pre sf-with-ul">Services &amp; Facilities</a>
                                    <ul class="sub-menu" style="display: none;">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4515"><a href="https://timezonehostel.com/cafe/">Cafe</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4495menu-item menu-item-type-post_type menu-item-object-page menu-item-4495 gdlr-normal-menu"><a href="https://timezonehostel.com/gallery/">Gallery</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4249menu-item menu-item-type-post_type menu-item-object-page menu-item-4249 gdlr-normal-menu"><a href="https://timezonehostel.com/about-us/">About Us</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4252menu-item menu-item-type-post_type menu-item-object-page menu-item-4252 gdlr-normal-menu"><a href="https://timezonehostel.com/contact/">Contact Us</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4510menu-item menu-item-type-custom menu-item-object-custom menu-item-4510 gdlr-normal-menu"><a title="Facebook" href="https://www.facebook.com/Timezonehostelhollywood/"><i class="fa fa-facebook-square"></i>Facebook</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4511menu-item menu-item-type-custom menu-item-object-custom menu-item-4511 gdlr-normal-menu"><a title="Twitter" href="https://twitter.com/timezonehostel"><i class="fa fa-twitter-square"></i>Twitter</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4512menu-item menu-item-type-custom menu-item-object-custom menu-item-4512 gdlr-normal-menu"><a title="Instagram" href="https://www.instagram.com/Timezonehostelhollywood/"><i class="fa fa-instagram"></i>Instagram</a></li>
                            </ul>
                        </nav>
                        <span class="gdlr-menu-search-button-sep">•</span>
                        <i class="fa fa-search icon-search gdlr-menu-search-button" id="gdlr-menu-search-button"></i>
                        <div class="gdlr-menu-search" id="gdlr-menu-search">
                            <form method="get" id="searchform" action="https://timezonehostel.com/">
                                <div class="search-text">
                                    <input type="text" value="Type Keywords" name="s" autocomplete="off" data-default="Type Keywords">
                                </div>
                                <input type="submit" value="">
                                <div class="clear"></div>
                            </form>
                        </div>
                        <div class="gdlr-navigation-gimmick " id="gdlr-navigation-gimmick" style="width: 39px; left: 404.703px; top: 80px; overflow: hidden;"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
        <div id="gdlr-header-substitute"></div>
        <!-- is search -->
        <div class="content-wrapper" style="margin-left: 0;">
            <div class="gdlr-content">
                <div class="with-sidebar-wrapper">
                    <section id="content-reservations">
                        <!--     CONTENT HERE       -->
                    </section>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <footer class="footer-wrapper">
            <div class="footer-container container">
                <div class="footer-column three columns" id="footer-widget-1">
                    <div id="text-5" class="widget widget_text gdlr-item gdlr-widget">
                        <h3 class="gdlr-widget-title">Book Now!</h3>
                        <div class="clear"></div>
                        <div class="textwidget">
                            <p><i class="gdlr-icon fa fa-phone" style="color: #333; font-size: 16px; "></i> <a href="tel:+18666251829">+1 866-625-1829</a></p>
                            <div class="clear"></div>
                            <div class="gdlr-space" style="margin-top: -15px;"></div>
                            <p><i class="gdlr-icon fa fa-envelope-o" style="color: #333; font-size: 16px; "></i> <a href="mailto:info@timezonehostel.com" target="_blank">info@timezonehostel.com</a></p>
                            <div class="clear"></div>
                            <div class="gdlr-space" style="margin-top: -15px;"></div>
                            <p><i class="gdlr-icon fa fa-pencil" style="color: #333; font-size: 16px; "></i> <a href="https://www.google.com/search?q=time+zone+hostel&amp;oq=time+zone+hostel&amp;aqs=chrome.0.69i59j69i60l3j0l2.6743j0j4&amp;ie=UTF-8#lrd=0x80c2bf31eddd58e1:0x91ee68302a455bd0,3" target="_blank">Write a Review</a></p>
                            <div class="clear"></div>
                            <div class="gdlr-space" style="margin-top: 25px;"></div>
                            <p><a href="https://www.facebook.com/Timezonehostelhollywood/" target="_blank"><i class="gdlr-icon fa fa-facebook-square" style="color: #333333; font-size: 24px; "></i></a> <a href="https://twitter.com/timezonehostel" target="_blank"><i class="gdlr-icon fa fa-twitter-square" style="color: #333333; font-size: 24px; "></i></a> <a href="https://www.instagram.com/Timezonehostelhollywood/" target="_blank"><i class="gdlr-icon fa fa-instagram" style="color: #333333; font-size: 24px; "></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="footer-column three columns" id="footer-widget-2">
                </div>
                <div class="footer-column six columns" id="footer-widget-3">
                    <div id="text-10" class="widget widget_text gdlr-item gdlr-widget">
                        <h3 class="gdlr-widget-title">Be Ready!</h3>
                        <div class="clear"></div>
                        <div class="textwidget">
                            <p>We believe that cheap is not the same as bad, prepare to have one of the best experiences of your life.</p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="copyright-wrapper">
                <div class="copyright-container container">
                    <div class="copyright-left">
                        <a href="https://timezonehostel.com/" style="margin-right: 10px;">Home</a>|<a href="https://timezonehostel.com" style="margin-right: 10px; margin-left: 10px;">Booking</a> | <a href="https://timezonehostel.com/about-us/" style="margin-right: 10px; margin-left: 10px;">About</a> | <a href="https://timezonehostel.com/contact/" style="margin-right: 10px; margin-left: 10px;">Contact</a>
                    </div>
                    <div class="copyright-right">
                        Copyright 2018 All Right Reserved
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </footer>
    </div>

    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('public/admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('public/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('public/admin/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('public/admin/plugins/sparklines/sparkline.js') }}"></script>

    <!-- jQuery Knob Chart -->
    <script src="{{ asset('') }}public/admin/plugins/jquery-knob/jquery.knob.min.js"></script>

    <!-- daterangepicker -->
    <script src="{{ asset('public/admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('public/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('public/admin/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('public/admin/dist/js/demo.js') }}"></script>
</body>

</html>