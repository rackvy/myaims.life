<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$TITLE?></title>
    <!-- CSS Dependencies -->
    <link rel="stylesheet" href="/js/timeline/css/style.css">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/shards.min.css">
    <!--    <link rel="stylesheet" href="/app/js/chart/Chart.min.css">-->


    <link rel="stylesheet/less" href="/app/css/style.less"/>

    <script>document.getElementsByTagName("html")[0].className += " js";</script>
</head>
<body>


<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-md-2 brand-name">
                <img src="/images/logo.png" class="logo">
                <span>my<br>aims<br>life</span>
            </div>
            <div class="col-8 xs-hide">
                <div class="quote"><i class="far fa-dot-circle"></i> 29.03.2020 <b>Отложить 30 000 рублей.</b> Цель: <a href="#">Поездка с семьей в Таиланд</a></div>
            </div>
            <div class="col-4 col-md-2 text-right">
                <div class="sign-out">
                    <a href="?logout=confirm" class="btn btn-outline-light btn-pill">Выйти <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="sign-out-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class=""><path fill="currentColor" d="M160 217.1c0-8.8 7.2-16 16-16h144v-93.9c0-7.1 8.6-10.7 13.6-5.7l141.6 143.1c6.3 6.3 6.3 16.4 0 22.7L333.6 410.4c-5 5-13.6 1.5-13.6-5.7v-93.9H176c-8.8 0-16-7.2-16-16v-77.7m-32 0v77.7c0 26.5 21.5 48 48 48h112v61.9c0 35.5 43 53.5 68.2 28.3l141.7-143c18.8-18.8 18.8-49.2 0-68L356.2 78.9c-25.1-25.1-68.2-7.3-68.2 28.3v61.9H176c-26.5 0-48 21.6-48 48zM0 112v288c0 26.5 21.5 48 48 48h132c6.6 0 12-5.4 12-12v-8c0-6.6-5.4-12-12-12H48c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16h132c6.6 0 12-5.4 12-12v-8c0-6.6-5.4-12-12-12H48C21.5 64 0 85.5 0 112z" class=""></path></svg></a>
                </div>
            </div>
            <div class="col-2 text-right xs-show menu-burger js-menu-open">
                <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="ellipsis-v-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" class=""><g class="fa-group"><path fill="#2eb87c" d="M168 80a72 72 0 1 0-72 72 72 72 0 0 0 72-72zm-96 0a24 24 0 1 1 24 24 24 24 0 0 1-24-24zm96 352a72 72 0 1 0-72 72 72 72 0 0 0 72-72zm-96 0a24 24 0 1 1 24 24 24 24 0 0 1-24-24zm96-176a72 72 0 1 0-72 72 72 72 0 0 0 72-72zm-96 0a24 24 0 1 1 24 24 24 24 0 0 1-24-24z" class="fa-secondary"></path><path fill="#e01f5a" d="M120 80a24 24 0 1 0-24 24 24 24 0 0 0 24-24zm0 176a24 24 0 1 0-24 24 24 24 0 0 0 24-24zm0 176a24 24 0 1 0-24 24 24 24 0 0 0 24-24z" class="fa-primary"></path></g></svg>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 xs-hide" style="background: #2eb87c;">
                <nav>
                    <ul>
                        <li>
                            <a href="/app/"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa  fa-w-18"><path fill="currentColor" d="M541 229.16l-61-49.83v-77.4a6 6 0 0 0-6-6h-20a6 6 0 0 0-6 6v51.33L308.19 39.14a32.16 32.16 0 0 0-40.38 0L35 229.16a8 8 0 0 0-1.16 11.24l10.1 12.41a8 8 0 0 0 11.2 1.19L96 220.62v243a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16v-128l64 .3V464a16 16 0 0 0 16 16l128-.33a16 16 0 0 0 16-16V220.62L520.86 254a8 8 0 0 0 11.25-1.16l10.1-12.41a8 8 0 0 0-1.21-11.27zm-93.11 218.59h.1l-96 .3V319.88a16.05 16.05 0 0 0-15.95-16l-96-.27a16 16 0 0 0-16.05 16v128.14H128V194.51L288 63.94l160 130.57z" class=""></path></svg> Главная</a>
                        </li>
                        <li>
                            <a href="#"><i class="far fa-dot-circle"></i> Текущие цели</a>
                            <ul>
                                <li><a href="/app/my-aims/?id=1">Поездка с семьей в Таиланд</a></li>
                                <li><a href="/app/my-aims/?id=2">Поездка с семьей на Бали на Новый год</a></li>
                                <li><a href="/app/my-aims/?id=3">Выучить анлийский язык</a></li>
                                <li><a href="/app/my-aims/?id=4">Купить машину Mitsubishi Pajero</a></li>
                                <li><a href="/app/my-aims/?id=5">Купить машину Toyota Prado</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/app/we_aim_to/"><svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-plus fa-w-14"><g class="fa-group"><path fill="currentColor" d="M176 448a32 32 0 0 0 32 32h32a32 32 0 0 0 32-32V304h-96zm64-416h-32a32 32 0 0 0-32 32v144h96V64a32 32 0 0 0-32-32z" class="fa-secondary"></path><path fill="currentColor" d="M448 240v32a32 32 0 0 1-32 32H32a32 32 0 0 1-32-32v-32a32 32 0 0 1 32-32h384a32 32 0 0 1 32 32z" class="fa-primary"></path></g></svg> Поставить новую цель</a>
                        </li>
                        <li>
                            <a href="/app/archive/"><svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-archive fa-w-16"><g class="fa-group"><path fill="currentColor" d="M32 160v288a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V160zm288 84a12 12 0 0 1-12 12H204a12 12 0 0 1-12-12v-8a12 12 0 0 1 12-12h104a12 12 0 0 1 12 12z" class="fa-secondary"></path><path fill="currentColor" d="M512 64v48a16 16 0 0 1-16 16H16a16 16 0 0 1-16-16V64a32 32 0 0 1 32-32h448a32 32 0 0 1 32 32z" class="fa-primary"></path></g></svg> Архив</a>
                        </li>
                        <li>
                            <a href="/app/profile/"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-user-circle fa-w-16"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm128 421.6c-35.9 26.5-80.1 42.4-128 42.4s-92.1-15.9-128-42.4V416c0-35.3 28.7-64 64-64 11.1 0 27.5 11.4 64 11.4 36.6 0 52.8-11.4 64-11.4 35.3 0 64 28.7 64 64v13.6zm30.6-27.5c-6.8-46.4-46.3-82.1-94.6-82.1-20.5 0-30.4 11.4-64 11.4S204.6 320 184 320c-48.3 0-87.8 35.7-94.6 82.1C53.9 363.6 32 312.4 32 256c0-119.1 96.9-216 216-216s216 96.9 216 216c0 56.4-21.9 107.6-57.4 146.1zM248 120c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 144c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z" class=""></path></svg> Мой профиль</a>
                        </li>
                        <li>
                            <a href="/grow/"><span style="text-decoration: line-through;"><i class="far fa-dot-circle"></i> GROW</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-10">
                <div class="body-aims">
