<?php
  require("inc/site_config.php"); 
  ?>
<!DOCTYPE html>
<html lang="ru" class="js">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    

    <title><?=$sitename?> - Официальный сайт. Сервис мгновенных игр.</title>
    <script src="https://kit.fontawesome.com/6cce539f85.js"></script>
    <meta name="description" content="<?=$sitename?> - Настоящий сайт Нвути. Все комиссии берем на себя, бонус при регистрации. Произведем выплаты за 24 часа на любую платежную систему.">
    <meta name="keywords" content="maxmin, nvuti, nvuti com, nvuti регистрация, игра деньги, игра заработок, игры с выводом, игры с выводом денег, нвути, нвути сайт, онлайн игры с выводом, игры с деньгами, рубликс, драгон мани, rublix, dragon money, nvuti best, нвути бест, 1dice , nvuti.cat, nvuti.li, nvuti.bar, nvuti.best">

    <meta name="author" content="<?=$linksite?>">
    <meta name="csrf-token" content="gxNU8T0H5jmQc9FDV15dTAm1O77aQvbXwo92VpiS">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="yandex-verification" content="cde3a0095776b585" />
    <meta name="google-site-verification" content="ZVWf3QjipqtqiQiFxVWA0ZPZqkkTv-AaPHLMtUhjPTU" />

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
     (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
         m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
     (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

     ym(55923349, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/55923349" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<style type="text/css">
    .swal-icon--error {
        border-color: #f27474;
        -webkit-animation: animateErrorIcon .5s;
        animation: animateErrorIcon .5s
    }

    .swal-icon--error__x-mark {
        position: relative;
        display: block;
        -webkit-animation: animateXMark .5s;
        animation: animateXMark .5s
    }

    .swal-icon--error__line {
        position: absolute;
        height: 5px;
        width: 47px;
        background-color: #f27474;
        display: block;
        top: 37px;
        border-radius: 2px
    }

    .swal-icon--error__line--left {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        left: 17px
    }

    .swal-icon--error__line--right {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        right: 16px
    }

    @-webkit-keyframes animateErrorIcon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0
        }

        to {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            opacity: 1
        }
    }

    @keyframes  animateErrorIcon {
        0% {
            -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
            opacity: 0
        }

        to {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            opacity: 1
        }
    }

    @-webkit-keyframes animateXMark {
        0% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        50% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        80% {
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
            margin-top: -6px
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1);
            margin-top: 0;
            opacity: 1
        }
    }

    @keyframes  animateXMark {
        0% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        50% {
            -webkit-transform: scale(.4);
            transform: scale(.4);
            margin-top: 26px;
            opacity: 0
        }

        80% {
            -webkit-transform: scale(1.15);
            transform: scale(1.15);
            margin-top: -6px
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1);
            margin-top: 0;
            opacity: 1
        }
    }

    .swal-icon--warning {
        border-color: #f8bb86;
        -webkit-animation: pulseWarning .75s infinite alternate;
        animation: pulseWarning .75s infinite alternate
    }

    .swal-icon--warning__body {
        width: 5px;
        height: 47px;
        top: 10px;
        border-radius: 2px;
        margin-left: -2px
    }

    .swal-icon--warning__body,
    .swal-icon--warning__dot {
        position: absolute;
        left: 50%;
        background-color: #f8bb86
    }

    .swal-icon--warning__dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        margin-left: -4px;
        bottom: -11px
    }

    @-webkit-keyframes pulseWarning {
        0% {
            border-color: #f8d486
        }

        to {
            border-color: #f8bb86
        }
    }

    @keyframes  pulseWarning {
        0% {
            border-color: #f8d486
        }

        to {
            border-color: #f8bb86
        }
    }

    .swal-icon--success {
        border-color: #a5dc86
    }

    .swal-icon--success:after,
    .swal-icon--success:before {
        content: "";
        border-radius: 50%;
        position: absolute;
        width: 60px;
        height: 120px;
        background: #fff;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .swal-icon--success:before {
        border-radius: 120px 0 0 120px;
        top: -7px;
        left: -33px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 60px 60px;
        transform-origin: 60px 60px
    }

    .swal-icon--success:after {
        border-radius: 0 120px 120px 0;
        top: -11px;
        left: 30px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 0 60px;
        transform-origin: 0 60px;
        -webkit-animation: rotatePlaceholder 4.25s ease-in;
        animation: rotatePlaceholder 4.25s ease-in
    }

    .swal-icon--success__ring {
        width: 80px;
        height: 80px;
        border: 4px solid hsla(98, 55%, 69%, .2);
        border-radius: 50%;
        box-sizing: content-box;
        position: absolute;
        left: -4px;
        top: -4px;
        z-index: 2
    }

    .swal-icon--success__hide-corners {
        width: 5px;
        height: 90px;
        background-color: #fff;
        padding: 1px;
        position: absolute;
        left: 28px;
        top: 8px;
        z-index: 1;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .swal-icon--success__line {
        height: 5px;
        background-color: #a5dc86;
        display: block;
        border-radius: 2px;
        position: absolute;
        z-index: 2
    }

    .swal-icon--success__line--tip {
        width: 25px;
        left: 14px;
        top: 46px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-animation: animateSuccessTip .75s;
        animation: animateSuccessTip .75s
    }

    .swal-icon--success__line--long {
        width: 47px;
        right: 8px;
        top: 38px;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-animation: animateSuccessLong .75s;
        animation: animateSuccessLong .75s
    }

    @-webkit-keyframes rotatePlaceholder {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }

        to {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }
    }

    @keyframes  rotatePlaceholder {
        0% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        5% {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        12% {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }

        to {
            -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg)
        }
    }

    @-webkit-keyframes animateSuccessTip {
        0% {
            width: 0;
            left: 1px;
            top: 19px
        }

        54% {
            width: 0;
            left: 1px;
            top: 19px
        }

        70% {
            width: 50px;
            left: -8px;
            top: 37px
        }

        84% {
            width: 17px;
            left: 21px;
            top: 48px
        }

        to {
            width: 25px;
            left: 14px;
            top: 45px
        }
    }

    @keyframes  animateSuccessTip {
        0% {
            width: 0;
            left: 1px;
            top: 19px
        }

        54% {
            width: 0;
            left: 1px;
            top: 19px
        }

        70% {
            width: 50px;
            left: -8px;
            top: 37px
        }

        84% {
            width: 17px;
            left: 21px;
            top: 48px
        }

        to {
            width: 25px;
            left: 14px;
            top: 45px
        }
    }

    @-webkit-keyframes animateSuccessLong {
        0% {
            width: 0;
            right: 46px;
            top: 54px
        }

        65% {
            width: 0;
            right: 46px;
            top: 54px
        }

        84% {
            width: 55px;
            right: 0;
            top: 35px
        }

        to {
            width: 47px;
            right: 8px;
            top: 38px
        }
    }

    @keyframes  animateSuccessLong {
        0% {
            width: 0;
            right: 46px;
            top: 54px
        }

        65% {
            width: 0;
            right: 46px;
            top: 54px
        }

        84% {
            width: 55px;
            right: 0;
            top: 35px
        }

        to {
            width: 47px;
            right: 8px;
            top: 38px
        }
    }

    .swal-icon--info {
        border-color: #c9dae1
    }

    .swal-icon--info:before {
        width: 5px;
        height: 29px;
        bottom: 17px;
        border-radius: 2px;
        margin-left: -2px
    }

    .swal-icon--info:after,
    .swal-icon--info:before {
        content: "";
        position: absolute;
        left: 50%;
        background-color: #c9dae1
    }

    .swal-icon--info:after {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        margin-left: -3px;
        top: 19px
    }

    .swal-icon {
        width: 80px;
        height: 80px;
        border-width: 4px;
        border-style: solid;
        border-radius: 50%;
        padding: 0;
        position: relative;
        box-sizing: content-box;
        margin: 20px auto
    }

    .swal-icon:first-child {
        margin-top: 32px
    }

    .swal-icon--custom {
        width: auto;
        height: auto;
        max-width: 100%;
        border: none;
        border-radius: 0
    }

    .swal-icon img {
        max-width: 100%;
        max-height: 100%
    }

    .swal-title {
        color: rgba(0, 0, 0, .65);
        font-weight: 600;
        text-transform: none;
        position: relative;
        display: block;
        padding: 13px 16px;
        font-size: 27px;
        line-height: normal;
        text-align: center;
        margin-bottom: 0
    }

    .swal-title:first-child {
        margin-top: 26px
    }

    .swal-title:not(:first-child) {
        padding-bottom: 0
    }

    .swal-title:not(:last-child) {
        margin-bottom: 13px
    }

    .swal-text {
        font-size: 16px;
        position: relative;
        float: none;
        line-height: normal;
        vertical-align: top;
        text-align: left;
        display: inline-block;
        margin: 0;
        padding: 0 10px;
        font-weight: 400;
        color: rgba(0, 0, 0, .64);
        max-width: calc(100% - 20px);
        overflow-wrap: break-word;
        box-sizing: border-box
    }

    .swal-text:first-child {
        margin-top: 45px
    }

    .swal-text:last-child {
        margin-bottom: 45px
    }

    .swal-footer {
        text-align: right;
        padding-top: 13px;
        margin-top: 13px;
        padding: 13px 16px;
        border-radius: inherit;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .swal-button-container {
        margin: 5px;
        display: inline-block;
        position: relative
    }

    .swal-button {
        background-color: #7cd1f9;
        color: #fff;
        border: none;
        box-shadow: none;
        border-radius: 5px;
        font-weight: 600;
        font-size: 14px;
        padding: 10px 24px;
        margin: 0;
        cursor: pointer
    }

    .swal-button:not([disabled]):hover {
        background-color: #78cbf2
    }

    .swal-button:active {
        background-color: #70bce0
    }

    .swal-button:focus {
        outline: none;
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, .29)
    }

    .swal-button[disabled] {
        opacity: .5;
        cursor: default
    }

    .swal-button::-moz-focus-inner {
        border: 0
    }

    .swal-button--cancel {
        color: #555;
        background-color: #efefef
    }

    .swal-button--cancel:not([disabled]):hover {
        background-color: #e8e8e8
    }

    .swal-button--cancel:active {
        background-color: #d7d7d7
    }

    .swal-button--cancel:focus {
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, .29)
    }

    .swal-button--danger {
        background-color: #e64942
    }

    .swal-button--danger:not([disabled]):hover {
        background-color: #df4740
    }

    .swal-button--danger:active {
        background-color: #cf423b
    }

    .swal-button--danger:focus {
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, .29)
    }

    .swal-content {
        padding: 0 20px;
        margin-top: 20px;
        font-size: medium
    }

    .swal-content:last-child {
        margin-bottom: 20px
    }

    .swal-content__input,
    .swal-content__textarea {
        -webkit-appearance: none;
        background-color: #fff;
        border: none;
        font-size: 14px;
        display: block;
        box-sizing: border-box;
        width: 100%;
        border: 1px solid rgba(0, 0, 0, .14);
        padding: 10px 13px;
        border-radius: 2px;
        transition: border-color .2s
    }

    .swal-content__input:focus,
    .swal-content__textarea:focus {
        outline: none;
        border-color: #6db8ff
    }

    .swal-content__textarea {
        resize: vertical
    }

    .swal-button--loading {
        color: transparent
    }

    .swal-button--loading~.swal-button__loader {
        opacity: 1
    }

    .swal-button__loader {
        position: absolute;
        height: auto;
        width: 43px;
        z-index: 2;
        left: 50%;
        top: 50%;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        text-align: center;
        pointer-events: none;
        opacity: 0
    }

    .swal-button__loader div {
        display: inline-block;
        float: none;
        vertical-align: baseline;
        width: 9px;
        height: 9px;
        padding: 0;
        border: none;
        margin: 2px;
        opacity: .4;
        border-radius: 7px;
        background-color: hsla(0, 0%, 100%, .9);
        transition: background .2s;
        -webkit-animation: swal-loading-anim 1s infinite;
        animation: swal-loading-anim 1s infinite
    }

    .swal-button__loader div:nth-child(3n+2) {
        -webkit-animation-delay: .15s;
        animation-delay: .15s
    }

    .swal-button__loader div:nth-child(3n+3) {
        -webkit-animation-delay: .3s;
        animation-delay: .3s
    }

    @-webkit-keyframes swal-loading-anim {
        0% {
            opacity: .4
        }

        20% {
            opacity: .4
        }

        50% {
            opacity: 1
        }

        to {
            opacity: .4
        }
    }

    @keyframes  swal-loading-anim {
        0% {
            opacity: .4
        }

        20% {
            opacity: .4
        }

        50% {
            opacity: 1
        }

        to {
            opacity: .4
        }
    }

    .swal-overlay {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
        font-size: 0;
        overflow-y: auto;
        background-color: rgba(0, 0, 0, .4);
        z-index: 10000;
        pointer-events: none;
        opacity: 0;
        transition: opacity .3s
    }

    .swal-overlay:before {
        content: " ";
        display: inline-block;
        vertical-align: middle;
        height: 100%
    }

    .swal-overlay--show-modal {
        opacity: 1;
        pointer-events: auto
    }

    .swal-overlay--show-modal .swal-modal {
        opacity: 1;
        pointer-events: auto;
        box-sizing: border-box;
        -webkit-animation: showSweetAlert .3s;
        animation: showSweetAlert .3s;
        will-change: transform
    }

    .swal-modal {
        width: 478px;
        opacity: 0;
        pointer-events: none;
        background-color: #fff;
        text-align: center;
        border-radius: 5px;
        position: static;
        margin: 20px auto;
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        z-index: 10001;
        transition: opacity .2s, -webkit-transform .3s;
        transition: transform .3s, opacity .2s;
        transition: transform .3s, opacity .2s, -webkit-transform .3s
    }

    @media (max-width:500px) {
        .swal-modal {
            width: calc(100% - 20px)
        }
    }

    @-webkit-keyframes showSweetAlert {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        1% {
            -webkit-transform: scale(.5);
            transform: scale(.5)
        }

        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05)
        }

        80% {
            -webkit-transform: scale(.95);
            transform: scale(.95)
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
    }

    @keyframes  showSweetAlert {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        1% {
            -webkit-transform: scale(.5);
            transform: scale(.5)
        }

        45% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05)
        }

        80% {
            -webkit-transform: scale(.95);
            transform: scale(.95)
        }

        to {
            -webkit-transform: scale(1);
            transform: scale(1)
        }
    }
</style>

<link rel="stylesheet" href="/css/vendor.bundle.css">
<link rel="stylesheet" href="/css/loader-0.css">
<link rel="stylesheet" href="/css/style.css?v=1575178639" id="layoutstyle">
<link rel="stylesheet" href="/css/datatables.min.css">
<script src="/script/jquery-latest.min.js"></script>
<script src="/script/odometr.js"></script>
<script src="/script/js.cookie.js"></script>
</head>

<body class="page-user no-touch">
 
    <div class="topbar-wrap" style="padding-top: 0px;">
        <div class="topbar is-sticky">
            <div class="container">
                <div>
                    <style>
                        .mmmob {
                            display: none;
                        }
                        @media (max-width: 991px) {
                            .des {
                                display: none;
                            }
                            .mmmob {
                                display: block;
                            }
                            .desktop-nav {
                                margin-top: -55px;
                            }
                        }
                    </style>

				<div style="border: 1px solid #e6eff5">
					<label style="padding: 5px; width: 100%;">
					<b style="display: block; text-align: center;">
						При пополнении от 
						<span style="color: #c91c46">150₽</span>
						 получи 
						<span style="color: #1c65c9">50₽</span> в подарок!
					</b>
				</label>
				</div>	

				<div style="border: 1px solid #e6eff5">
					<label style="padding: 5px; width: 100%;">
					<b style="display: block; text-align: center;">
						При пополнении от 
						<span style="color: #c91c46">500₽</span>
						 получи 
						<span style="color: #1c65c9">250₽</span> в подарок!
					</b>
				</label>
				</div>	

				<div style="border: 1px solid #e6eff5">
					<label style="padding: 5px; width: 100%;">
					<b style="display: block; text-align: center;">
						При пополнении от 
						<span style="color: #c91c46">1000₽</span>
						 получи 
						<span style="color: #1c65c9">1000₽</span> в подарок!
					</b>
				</label>
				</div>		

				<div style="border: 1px solid #e6eff5">
					<label style="padding: 5px; width: 100%;">
					<b style="display: block; text-align: center;">
						При пополнении от 
						<span style="color: #c91c46">2000₽</span>
						 получи 
						<span style="color: #1c65c9">8000₽</span> в подарок!
					</b>
				</label>
				</div>
		</div><!-- .modal-content -->
	</div><!-- .modal-dialog -->
</div><script src="/script/jquery.bundle.js"></script>
<script src="/script/datatables.min.js"></script>
<script src="/script/script.js?v=2"></script>
<script src="/script/jquery-3.2.1.min.js"></script>
</body>
</html>