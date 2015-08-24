<?php
/**
 * Created by PhpStorm.
 * User: ignatenkov
 * Date: 20.08.15
 * Time: 21:58
 */
error_reporting(-1);

require_once('vendor/autoload.php');


use YandexWeather\ParserYandexWeather;

$parser = new ParserYandexWeather(27643);
//$parser->load();
$city = $parser->getResult();

//var_dump($city);
?>

<!DOCTYPE html>
<!-- saved from url=(0031)https://pogoda.yandex.ru/vyksa/ -->
<html class="i-ua_js_yes i-ua_css_standard i-ua_svg_yes i-ua_inlinesvg_yes i-ua_placeholder_yes" lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Прогноз погоды в Выксе на 10 дней — Яндекс.Погода</title>
    <script>;
        (function (d, e, c, r) {
            e = d.documentElement;
            c = "className";
            r = "replace";
            e[c] = e[c][r]("i-ua_js_no", "i-ua_js_yes");
            if (d.compatMode != "CSS1Compat")e[c] = e[c][r]("i-ua_css_standart", "i-ua_css_quirks")
        })(document);
        ;
        (function (d, e, c, n, w, v, f) {
            e = d.documentElement;
            c = "className";
            n = "createElementNS";
            f = "firstChild";
            w = "http://www.w3.org/2000/svg";
            e[c] += " i-ua_svg_" + (!!d[n] && !!d[n](w, "svg").createSVGRect ? "yes" : "no");
            v = d.createElement("div");
            v.innerHTML = "<svg/>";
            e[c] += " i-ua_inlinesvg_" + ((v[f] && v[f].namespaceURI) == w ? "yes" : "no");
        })(document);
        ;
        (function (d, e, p) {
            e = d.documentElement;
            p = "placeholder";
            e.className += " i-ua_" + p + (p in d.createElement("input") ? "_yes" : "_no")
        })(document);</script>
    <!--[if gt IE 9]><!-->
    <link rel="stylesheet" href="https://yastatic.net/weather-frontend/3.10.1/desktop.bundles/index/_index.css">
    <!--<![endif]--><!--[if IE 6]>
    <link rel="stylesheet" href="//yastatic.net/weather-frontend/3.10.1/desktop.bundles/index/_index.ie6.css"/>
    <![endif]--><!--[if IE 7]>
    <link rel="stylesheet" href="//yastatic.net/weather-frontend/3.10.1/desktop.bundles/index/_index.ie7.css"/>
    <![endif]--><!--[if IE 8]>
    <link rel="stylesheet" href="//yastatic.net/weather-frontend/3.10.1/desktop.bundles/index/_index.ie8.css"/>
    <![endif]--><!--[if IE 9]>
    <link rel="stylesheet" href="//yastatic.net/weather-frontend/3.10.1/desktop.bundles/index/_index.ie9.css"/>
    <![endif]-->
    <link rel="stylesheet" href="https://yastatic.net/weather-frontend/3.10.1/i/print/print.css" media="print">
    <meta name="viewport" content="width=1000">
    <meta name="description"
          content="Подробный прогноз погоды для Выксы на сегодня, завтра, неделю, 10 дней. Температура воздуха и воды, осадки, давление и влажность, скорость ветра. Погодные карты, информер для сайта и информация о климате регионов. ">
    <meta property="og:title" content="Прогноз погоды в Выксе на 10 дней  — Яндекс.Погода">
    <meta property="og:description"
          content="Подробный прогноз погоды для Выксы на сегодня, завтра, неделю, 10 дней. Температура воздуха и воды, осадки, давление и влажность, скорость ветра. Погодные карты, информер для сайта и информация о климате регионов. ">
    <meta property="og:image" content="/og_image.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Яндекс.Погода">
    <link rel="shortcut icon" href="https://pogoda.yandex.ru/favicon.ico">
    <meta name="msapplication-TileImage" content="/tile-square-transp.png">
    <meta name="msapplication-TileColor" content="#ee0000">
    <meta name="application-name" content="Яндекс.Погода">
    <meta name="msapplication-square70x70logo" content="/tile-tiny-transp.png">
    <meta name="msapplication-square150x150logo" content="/tile-square-transp.png">
    <meta name="msapplication-wide310x150logo" content="/tile-wide-transp.png">
    <meta name="msapplication-square310x310logo" content="/tile-large-transp.png">
    <link rel="search" type="application/opensearchdescription+xml" title="Яндекс.Погода"
          href="https://pogoda.yandex.ru/opensearch.ru.xml">
    <link rel="canonical" href="https://pogoda.yandex.ru/vyksa">
    <style type="text/css"></style>
    <style type="text/css">.tableau {
            position: absolute;
            z-index: -1;
            visibility: hidden;
            overflow: visible;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            margin-top: -20px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            opacity: 0;
            border: 1px solid #ccc;
            border-color: rgba(0, 0, 0, .06);
            -webkit-transition: margin .15s ease-out 0s, opacity .15s ease-out 0s, visibility 0s ease-out .15s;
            transition: margin .15s ease-out 0s, opacity .15s ease-out 0s, visibility 0s ease-out .15s;
            -webkit-overflow-scrolling: touch
        }

        .tableau_opened {
            visibility: visible;
            margin-top: 0;
            opacity: 1;
            -webkit-transition-delay: 0s;
            transition-delay: 0s
        }

        .tableau__content {
            display: block;
            width: 100%;
            height: 100%;
            background: #fff;
            -webkit-box-shadow: 0 30px 70px -10px rgba(0, 0, 0, .4);
            box-shadow: 0 30px 70px -10px rgba(0, 0, 0, .4)
        }

        .tableau_closed .tableau__content {
            display: none
        }

        .tableau__tail, .tableau__tail:after {
            position: absolute;
            display: block;
            width: 0;
            height: 0;
            border-style: solid;
            border-color: transparent;
            border-color: rgba(255, 255, 255, 0)
        }

        .tableau__tail {
            top: -15px;
            left: 32px;
            border-width: 0 14px 14px 14px;
            border-bottom-color: #ccc;
            border-bottom-color: rgba(0, 0, 0, .06)
        }

        .tableau__tail:after {
            top: 1.4px;
            left: -15px;
            content: '';
            border-width: 0 15px 15px 15px;
            border-bottom-color: #fff
        }

        .tableau_opened .tableau__tail:after {
            content: ' '
        }</style>
    <script type="text/javascript" async="async"
            src="./Прогноз погоды в Выксе на 10 дней — Яндекс.Погода_files/watch.js"></script>
    <style type="text/css" data-ymaps="css-modules">.ymaps-2-1-29-default-cluster {
            position: absolute;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px
        }

        /**/
        .ymaps-2-1-29-cluster-night-content {
            color: #fff
        }

        /**/
        .ymaps-2-1-29-controls__toolbar, .ymaps-2-1-29-controls__bottom {
            position: absolute;
            width: 100%
        }

        .ymaps-2-1-29-controls__toolbar_left {
            float: left;
            height: 0
        }

        .ymaps-2-1-29-controls__toolbar_right {
            float: right;
            height: 0
        }

        .ymaps-2-1-29-controls__control_toolbar {
            display: inline-block;
            vertical-align: top
        }

        .ymaps-2-1-29-controls__control {
            display: block;
            position: absolute;
            vertical-align: top
        }

        .ymaps-2-1-29-controls__control_visibility_hidden {
            display: none
        }

        /**/
        .ymaps-2-1-29-copyright__logo {
            display: block;
            width: 46px;
            height: 20px;
            position: relative;
            top: -2px;
            opacity: .7;
            background-position: 0 100%;
            background-repeat: no-repeat
        }

        .ymaps-2-1-29-copyright_color_white .ymaps-2-1-29-copyright__logo {
            opacity: .95
        }

        .ymaps-2-1-29-copyright .ymaps-2-1-29-copyright__logo:hover {
            opacity: 1
        }

        .ymaps-2-1-29-copyright__logo {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0NS45ODkiIGhlaWdodD0iMjAuMDIxIiB2aWV3Qm94PSIwLjAxIC0xLjAyMyA0NS45ODkgMjAuMDIxIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAuMDEgLTEuMDIzIDQ1Ljk4OSAyMC4wMjEiPjxwYXRoIGZpbGw9IiNmMDAiIGQ9Ik04Ljc2OC45OTFoLTIuMjVjLTIuMjA5IDAtNC4wODMgMS42OS00LjA4MyA0Ljk3MSAwIDEuOTY3LjkwOSAzLjQxOCAyLjUyNSA0LjEzNWwtMy4wMTggNS40ODZjLS4wOTkuMTc5IDAgLjMxNy4xNTkuMzE3aDEuNDAxYy4xMTkgMCAuMTk4LS4wMzkuMjM1LS4xMzdsMi43NDMtNS4zODloLjk4NnY1LjM4OWMwIC4wNjEuMDU5LjEzNy4xMzguMTM3aDEuMjI0Yy4xMTggMCAuMTU4LS4wNTguMTU4LS4xNTZ2LTE0LjU1MWMtLjAwMS0uMTQxLS4wODEtLjIwMS0uMjE4LS4yMDJ6bS0xLjMwNCA4LjExMmgtLjgzYy0xLjMwMiAwLTIuNTY0LS45NTUtMi41NjQtMy4zNCAwLTIuNDg1IDEuMTg0LTMuNSAyLjM4Ny0zLjVoMS4wMDd2Ni44NHoiLz48cGF0aCBkPSJNMTYuMTgxIDUuOTM0aC0xLjIyNGMtLjA5OSAwLS4xNTguMDgtLjE1OC4xMzl2My43OTZoLTIuMjY5di0zLjc5N2MwLS4wOTktLjAzOS0uMTM5LS4xMzktLjEzOWgtMS4yMjJjLS4wOTggMC0uMTU5LjA2MS0uMTU5LjEzOXY5LjY2M2MwIC4wOTguMDQxLjE1Ny4xMzguMTU3aDEuMjQyYy4wNzkgMCAuMTM5LS4wNi4xMzktLjE1N3YtNC42MTJoMi4yNjl2NC42MTJjMCAuMDk4LjA1OC4xNTcuMTU4LjE1N2gxLjIyNGMuMDk5IDAgLjEzNy0uMDguMTM3LS4xNTd2LTkuNjYzYzAtLjA3OC0uMDU4LS4xMzgtLjEzNi0uMTM4ek00NC4xMDEgMTUuMjU1bC0uMTU2LS42NzMtLjEtLjA4MWMtLjEgMC0uNjMxLjIyLTEuNDAyLjIyLTEuNDk2IDAtMi4yMjUtMS40NDktMi4yMjUtMy43NTUgMC0yLjAyOS42MDktNC4wMzcgMS42MzUtNC4wMzcuMjc3IDAgLjYxMy4wNzkgMS4xNDUuNTc4LjA2MS4wNTguMS4wOC4xNTYuMDguMDYxIDAgLjExOS0uMDQxLjE3OC0uMTM5bC41MzMtLjg3NS4wNjEtLjE4YzAtLjA3OS0uMDgtLjEzOS0uMTk3LS4xOTgtLjgxMi0uNDE3LTEuMzYxLS40OTctMS44MzYtLjQ5Ny0xLjg1NCAwLTMuMjk1IDIuMjI2LTMuMjk1IDUuNzA1IDAgMy4wMDEgMS4zODEgNC43MyAzLjM1NSA0LjczLjgyOCAwIDEuNzEzLS4zOTUgMi4wNjgtLjY1NS4wOC0uMDYuMS0uMTM5LjA4LS4yMnYtLjAwM3pNMzUuNTI5IDEwLjQyNWwyLjM2NS00LjM1MmMuMDQxLS4wNTkuMDItLjEzOS0uMDU5LS4xMzloLTEuMTY0Yy0uMzM2IDAtLjQ1My4xMi0uNTcuMzc4bC0xLjc3NSAzLjcxN2MtLjEuMjE4LS4xOTUuMzU3LS4yOTkuNDE2di00LjM3M2MwLS4wNzktLjAzNy0uMTM5LS4xMTUtLjEzOWgtMS4yODJjLS4wNTkgMC0uMTIxLjA2LS4xMjEuMTM5djkuNjgzYzAgLjA1Ni4wMzkuMTM2LjEyMS4xMzZoMS4yODFjLjA3OCAwIC4xMTUtLjA2MS4xMTUtLjEzNnYtNC45OTRjLjA2Mi4wNC4xMDIuMTAxLjE0MS4xODFsMi4yNSA0LjY1Yy4xMTcuMjM4LjI5Ny4yOTguNTUzLjI5OGgxLjI2MmMuMDc2IDAgLjA5OC0uMDc5LjA1OS0uMTM3bC0yLjc2Mi01LjMyOHpNMjQuMjI4IDE0LjY0MWgtLjIzNmMtLjI5NSAwLS4zNzUtLjExOS0uMzc1LS4zNTh2LTguMjFjMC0uMDk5LS4wMzktLjEzOS0uMTE3LS4xMzloLTMuOTQ1Yy0uMSAwLS4xNTkuMDYxLS4xNTkuMTM5di43MTZjMCAyLjQwNC0uMTM2IDUuNTA1LTEuMzk5IDcuODUzaC0uNDM0Yy0uMTE4IDAtLjE1OC4wNTktLjE1OC4xNTh2Mi45YzAgLjEwMS4wNzkuMTQxLjEzOC4xNDFoLjk0NWMuMjE3IDAgLjI5NS0uMTU5LjI5NS0uMjk5di0xLjY0OWg0LjIyMXYxLjgxYzAgLjA3OS4wNjEuMTQxLjEzNy4xNDFoMS4wMDhjLjExOSAwIC4yNC0uMTAxLjI0LS4yOTl2LTIuNzQzYy0uMDAzLS4xLS4wNjEtLjE2MS0uMTYxLS4xNjF6bS0yLjEzMSAwaC0yLjg1OWMxLjAwNS0xLjcyOSAxLjQtMy42NzkgMS41NC02LjA2Mi4wNC0uNTE4LjA1OC0xLjA1NC4wNTgtMS4zOTFoMS4yNjF2Ny40NTN6TTI4LjI1MSA1LjY5NGMtMi4xMjkgMC0zLjA3OCAyLjcwNC0zLjA3OCA1LjY0NiAwIDMuMDAyIDEuMzQyIDQuNzg5IDMuMzE0IDQuNzg5Ljk2NyAwIDEuODE0LS4zNzQgMi4yNDYtLjY1NC4wNzgtLjA0MS4xLS4xLjA3OC0uMTc4bC0uMTU2LS42NzhjLS4wMjEtLjA3OS0uMDU4LS4xMTktLjE1NS0uMTE5LS4wOCAwLS42NS4yMTktMS40NjEuMjE5LTEuNTIgMC0yLjIyNy0xLjMzMS0yLjIyNy0zLjA4di0uNDcxcy43NjguMDkyIDEuMjIzLjA5MmgyLjg3N3YtLjgzNmMuMDAyLTMuMDgxLTEuMDg0LTQuNzMtMi42NjEtNC43M3ptLS4yMTYgNC4zMTZjLS40NTUgMC0xLjE2Mi4wNzgtMS4xNjIuMDc4czAtLjI5Ny4wNDEtLjYxNmMuMTc0LTEuNjkyLjU5LTIuNTQ2IDEuMjc3LTIuNTQ2LjYzNSAwIDEuMDI3Ljg3NCAxLjEyNyAyLjQwNC4wMjEuMzIuMDIxLjY3OC4wMjEuNjc4bC0xLjMwNC4wMDJ6Ii8+PC9zdmc+")
        }

        .ymaps-2-1-29-copyright_color_white .ymaps-2-1-29-copyright__logo {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0NS45ODkiIGhlaWdodD0iMjAuMDIxIiB2aWV3Qm94PSIwLjAxIC0xLjAyMyA0NS45ODkgMjAuMDIxIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAuMDEgLTEuMDIzIDQ1Ljk4OSAyMC4wMjEiPjxnIGZpbGw9IiNmZmYiPjxwYXRoIGQ9Ik04Ljc2Ny45OTFoLTIuMjQ5Yy0yLjIwOSAwLTQuMDgzIDEuNjktNC4wODMgNC45NzEgMCAxLjk2Ny45MDggMy40MTggMi41MjUgNC4xMzVsLTMuMDE4IDUuNDg2Yy0uMDk5LjE3OSAwIC4zMTcuMTU5LjMxN2gxLjQwMWMuMTE4IDAgLjE5OC0uMDM5LjIzNS0uMTM3bDIuNzQzLTUuMzg5aC45ODZ2NS4zODljMCAuMDYxLjA1OS4xMzcuMTM4LjEzN2gxLjIyNGMuMTE5IDAgLjE1OS0uMDU4LjE1OS0uMTU2di0xNC41NTFjLS4wMDItLjE0MS0uMDgzLS4yMDEtLjIyLS4yMDJ6bS0xLjMwMyA4LjExMmgtLjgzYy0xLjMwMiAwLTIuNTY0LS45NTUtMi41NjQtMy4zNCAwLTIuNDg1IDEuMTg0LTMuNSAyLjM4Ni0zLjVoMS4wMDh2Ni44NHpNMTYuMTggNS45MzRoLTEuMjI0Yy0uMDk5IDAtLjE1Ny4wOC0uMTU3LjEzOXYzLjc5NmgtMi4yNjl2LTMuNzk3YzAtLjA5OS0uMDM5LS4xMzktLjEzOS0uMTM5aC0xLjIyM2MtLjA5OCAwLS4xNTkuMDYxLS4xNTkuMTM5djkuNjYzYzAgLjA5OC4wNDEuMTU3LjEzOC4xNTdoMS4yNDJjLjA3OSAwIC4xMzktLjA2LjEzOS0uMTU3di00LjYxMmgyLjI2OXY0LjYxMmMwIC4wOTguMDU4LjE1Ny4xNTcuMTU3aDEuMjI0Yy4wOTkgMCAuMTM2LS4wOC4xMzYtLjE1N3YtOS42NjNjLjAwMy0uMDc4LS4wNTYtLjEzOC0uMTM0LS4xMzh6TTQ0LjA5OSAxNS4yNTVsLS4xNTQtLjY3My0uMS0uMDgxYy0uMSAwLS42MzMuMjItMS40MDQuMjItMS40OTYgMC0yLjIyNS0xLjQ0OS0yLjIyNS0zLjc1NSAwLTIuMDI5LjYwOS00LjAzNyAxLjYzNS00LjAzNy4yNzkgMCAuNjE1LjA3OSAxLjE0NS41NzguMDYxLjA1OC4xLjA4LjE1OC4wOHMuMTE3LS4wNDEuMTc4LS4xMzlsLjUzMy0uODc1LjA2MS0uMThjMC0uMDc5LS4wNzgtLjEzOS0uMTk3LS4xOTgtLjgxMi0uNDE3LTEuMzYxLS40OTctMS44MzgtLjQ5Ny0xLjg1MiAwLTMuMjkzIDIuMjI2LTMuMjkzIDUuNzA1IDAgMy4wMDEgMS4zNzkgNC43MyAzLjM1NCA0LjczLjgzIDAgMS43MTUtLjM5NSAyLjA3LS42NTUuMDgtLjA2LjEtLjEzOS4wOC0uMjJ2LS4wMDNoLS4wMDN6TTM1LjUyOSAxMC40MjVsMi4zNjUtNC4zNTJjLjA0MS0uMDU5LjAyLS4xMzktLjA1OS0uMTM5aC0xLjE2NmMtLjMzNCAwLS40NTEuMTItLjU2OC4zNzhsLTEuNzc1IDMuNzE3Yy0uMS4yMTgtLjE5Ny4zNTctLjI5OS40MTZ2LTQuMzczYzAtLjA3OS0uMDM5LS4xMzktLjExNS0uMTM5aC0xLjI4M2MtLjA1NyAwLS4xMjEuMDYtLjEyMS4xMzl2OS42ODNjMCAuMDU2LjA0MS4xMzYuMTIxLjEzNmgxLjI4M2MuMDc2IDAgLjExNS0uMDYxLjExNS0uMTM2di00Ljk5NGMuMDYyLjA0LjEwMi4xMDEuMTM5LjE4MWwyLjI1MiA0LjY1Yy4xMTcuMjM4LjI5Ny4yOTguNTUxLjI5OGgxLjI2MmMuMDc4IDAgLjEtLjA3OS4wNjEtLjEzN2wtMi43NjMtNS4zMjh6TTI0LjIyNiAxNC42NDFoLS4yMzZjLS4yOTUgMC0uMzc1LS4xMTktLjM3NS0uMzU4di04LjIxYzAtLjA5OS0uMDM5LS4xMzktLjExNy0uMTM5aC0zLjk0NGMtLjEgMC0uMTU5LjA2MS0uMTU5LjEzOXYuNzE2YzAgMi40MDQtLjEzNiA1LjUwNS0xLjM5OSA3Ljg1M2gtLjQzNGMtLjExOCAwLS4xNTguMDU5LS4xNTguMTU4djIuOWMwIC4xMDEuMDc5LjE0MS4xMzguMTQxaC45NDVjLjIxNyAwIC4yOTUtLjE1OS4yOTUtLjI5OXYtMS42NDloNC4yMjJ2MS44MWMwIC4wNzkuMDU5LjE0MS4xMzcuMTQxaDEuMDA2Yy4xMTkgMCAuMjQtLjEwMS4yNC0uMjk5di0yLjc0M2MtLjAwMS0uMS0uMDYxLS4xNjEtLjE2MS0uMTYxem0tMi4xMjkgMGgtMi44NTljMS4wMDUtMS43MjkgMS40LTMuNjc5IDEuNTQtNi4wNjIuMDQtLjUxOC4wNTgtMS4wNTQuMDU4LTEuMzkxaDEuMjYxdjcuNDUzek0yOC4yNTEgNS42OTRjLTIuMTMxIDAtMy4wOCAyLjcwNC0zLjA4IDUuNjQ2IDAgMy4wMDIgMS4zNDIgNC43ODkgMy4zMTYgNC43ODkuOTY1IDAgMS44MTItLjM3NCAyLjI0NC0uNjU0LjA4LS4wNDEuMTAyLS4xLjA4LS4xNzhsLS4xNTgtLjY3OGMtLjAxOS0uMDc5LS4wNTgtLjExOS0uMTUzLS4xMTktLjA4MiAwLS42NS4yMTktMS40NjEuMjE5LTEuNTE2IDAtMi4yMjctMS4zMzEtMi4yMjctMy4wOHYtLjQ3MXMuNzY2LjA5MiAxLjIyMy4wOTJoMi44Nzd2LS44MzZjMC0zLjA4MS0xLjA4NC00LjczLTIuNjYxLTQuNzN6bS0uMjE2IDQuMzE2Yy0uNDU3IDAtMS4xNjQuMDc4LTEuMTY0LjA3OHMwLS4yOTcuMDQxLS42MTZjLjE3NC0xLjY5Mi41OS0yLjU0NiAxLjI3OS0yLjU0Ni42MzUgMCAxLjAyNy44NzQgMS4xMjcgMi40MDQuMDIuMzIuMDIuNjc4LjAyLjY3OGwtMS4zMDMuMDAyeiIvPjwvZz48L3N2Zz4=")
        }

        .ymaps-2-1-29-copyright__logo_lang_en {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0NS45ODkiIGhlaWdodD0iMjAuMDIxIiB2aWV3Qm94PSIwLjAxIC0xLjAyMyA0NS45ODkgMjAuMDIxIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAuMDEgLTEuMDIzIDQ1Ljk4OSAyMC4wMjEiPjxwYXRoIGQ9Ik0xMi42MjUgNS43NzhjLS42MDggMC0xLjUyMS4yMjgtMi4xMjYuNTAzLS4xNzMuMDctLjI2My4xNDktLjE0OC4zOWwuNDI0Ljg4MWMuMDMzLjEwMy4xLjEyNy4xNTkuMTI3bC4xNzEtLjA1N2MuNjE2LS40MDEgMS4wNC0uNTk3IDEuMzk2LS41OTcuNDY2IDAgLjc2NC4yOTcuOTQ4Ljc0My4xOTMuNDQ3LjI2MiAxLjA1NC4yNjIgMS43Mjl2LjE5NGMtLjM4OC0uMjE4LTEuMDQyLS4zNTMtMS4zODMtLjM1My0xLjc1IDAtMi42OTcgMS42ODMtMi42OTcgMy40NjggMCAxLjk2NyAxLjExOCAzLjM2IDIuNDQzIDMuMzYuNzQzIDAgMS40MTctLjQyMSAxLjg2NC0uOTY5bC4yNTEuNjA0Yy4wNDQuMTE0LjA5Mi4xMjguMTk0LjEyOGguNzIxYy4wNTUgMCAuMTIzLS4wMzcuMTIzLS4xNXYtNS41ODJjMC0xLjM3NC0uMDktMi40MjYtLjQ0My0zLjEyNC0uNDQ2LS44OTItMS4yNDYtMS4yOTMtMi4xNTktMS4yOTN2LS4wMDJ6bTEuMDg0IDguNTkyYy0uMzY1LjM1NS0uNzY4LjUyOC0xLjE0NC41MjgtMS4wNiAwLTEuMzEzLTEuMzA1LTEuMzEzLTIuMTg4IDAtMS4wNTEuMzk5LTIuMTI2IDEuMjEyLTIuMTI2LjM5OCAwIC44NTYuMTAyIDEuMjQ2LjQyNGwtLjAwMSAzLjM2MnptNi44MjQtOC40NjRjLS45NzQgMC0xLjk2OC43Mi0xLjk2OC43MnYtLjQ3YzAtLjA4LS4wNjktLjE0OS0uMTI1LS4xNDloLTEuMjQ1Yy0uMDkgMC0uMTQ5LjA3LS4xNDkuMTQ5djkuNjI1YzAgLjA5My4wMjUuMTQ4LjE0OS4xNDhoMS4yNDVjLjA1NiAwIC4xMjUtLjA1OC4xMjUtLjE0OHYtOC4yNTJzLjU3My0uMzUyIDEuMjkyLS4zNTJjLjY1MSAwIDEuMTc3LjMzIDEuMTc3Ljk5NnY3LjYwN2MwIC4wOTMuMDY4LjE0OC4xNy4xNDhoMS4yMDFjLjEzOCAwIC4xNDgtLjA1OC4xNDgtLjE0OHYtOC4wMzJjMC0xLjE5MS0uNzMyLTEuODQxLTIuMDItMS44NDJ6bTkuNTA2LTQuODI5aC0xLjI0NmMtLjEwNSAwLS4xNDguMDctLjE0OC4xNDd2NC44NTNjLS40OTItLjE5NC0uOTI2LS4yOTgtMS4yNDYtLjI5OC0yLjAxNiAwLTMuMzYxIDEuOS0zLjM2MSA1LjU4MyAwIDMuMTM4IDEuMzAzIDQuODMyIDMuMDYyIDQuODMyLjcyMSAwIDEuMzI2LS40MjYgMS43NDYtLjgxM2wuMjc1LjQ0NmMuMDQ1LjA5Mi4wNy4xMDMuMTcyLjEwM2guNzQ2Yy4wOCAwIC4xMjUtLjA1OC4xMjUtLjE0OHYtMTQuNTU4YzAtLjEwMi0uMDQ1LS4xNDktLjEyNS0uMTQ5di4wMDJ6bS0xLjM5NSAxMy41MDNjLS4zMjIuMTcyLS42OTUuMzE4LTEuMDk2LjMxOC0xLjMzOCAwLTEuODg3LTEuNTY2LTEuODg3LTMuODU2IDAtMi4wMjEuNTY4LTQuMDE0IDEuNzkzLTQuMDE0LjM4NyAwIC43ODUuMTUgMS4xODguNDI0djcuMTI4aC4wMDJ6bTYuMDc4LTguODAyYy0yLjEyNyAwLTMuMDgyIDIuNzEzLTMuMDgyIDUuNjMgMCAyLjk3NyAxLjMzNCA0Ljc1OSAzLjMyIDQuNzU5Ljk0NyAwIDEuNzk1LS4zNjUgMi4yNjQtLjY3NC4wNTktLjA0Ny4wOC0uMDY2LjA1OS0uMTQ5bC0uMTUtLjY4OGMtLjAyLS4wNzctLjA1NS0uMTI0LS4xNDgtLjEyNC0uMTAyIDAtLjY3NC4yNDItMS40NzMuMjQyLTEuNTIgMC0yLjIyMS0xLjM0MS0yLjIyMS0zLjA5MnYtLjQ2OXMuNzU4LjEwMyAxLjIwMy4xMDNoMi44ODl2LS44MjNjMC0zLjA5Mi0xLjA5NC00LjcxNi0yLjY2Mi00LjcxNmwuMDAxLjAwMXptLS4yMyA0LjI5MmMtLjQ0MyAwLTEuMTY0LjA5My0xLjE2NC4wOTNzMC0uMjk4LjA0NS0uNjE5Yy4yMTctMS42OS41NzItMi41MzkgMS4yOTMtMi41MzkuNjI3IDAgMS4wMjUuODcgMS4xMTUgMi4zOTUuMDIzLjMyLjAyMy42NzQuMDIzLjY3NGgtMS4zMTJ2LS4wMDR6bTkuMzYxLTQuMDYzaC0xLjA3NmMtLjEyNSAwLS4yMDcuMDctLjI0LjE3NC0uMDQ1LjE0Ni0uNTIzIDEuMzk2LS43MDUgMS44ODctLjEyNy4zNTYtLjUxNiAxLjM5Ni0uNTE2IDEuMzk2aC0uMDM1cy0uMjc1LS43NDItLjQyNC0xLjExOWMtLjA5LS4zMjMtLjcwOS0xLjkxNC0uNzg3LTIuMTE4LS4wMzMtLjA5My0uMTI1LS4yMTktLjI1Mi0uMjE5aC0xLjE4OWMtLjE1IDAtLjIwMy4xNDktLjE1Ni4yNDJsMS45MTggNC40NDFzLTIuMDEgNC44MTUtMi4wNjggNC45NjZjLS4wNy4xNDYuMDIxLjI3NC4xNS4yNzRoMS4wMjVjLjE5MyAwIC4yNTItLjA4My4zMTgtLjI1M2wuNjk5LTEuOS41MjMtMS42NjhoLjA0NXMuMzc5IDEuMDUxLjUwNCAxLjQxNmwuODIgMi4xOThjLjA0NS4xMjYuMTI3LjIwOC4yNjQuMjA4aDEuMTU0Yy4xMjUgMCAuMTkxLS4xMjguMTI1LS4yNTQtLjE0Ni0uMjc0LTEuMjQ0LTMuMDQxLTIuMDQ1LTQuODE3IDAgMCAyLjAzMy00LjUwOCAyLjA5LTQuNjExLjAyMS0uMTE1LjAyMS0uMjQyLS4xNDYtLjI0MmguMDA0di0uMDAxeiIvPjxwYXRoIGZpbGw9IiNmMDAiIGQ9Ik0xMC45NTItLjI2NGgtMS4zMDNjLS4xMzcgMC0uMTk1LjA1Ni0uMjM5LjE4M2wtMi4zOSA2LjY5MmMtLjI3NS43NTctLjYwNSAyLjA1LS42MDUgMi4wNWgtLjA3cy0uNTI0LTEuNTIyLS42NS0yLjAxM2MtLjE5Ny0uNTUxLTEuODg1LTUuMTg1LTEuOTIxLTUuMzQ2LS4wMjMtLjExNS0uMDkxLS4yMzktLjI2LS4yMzloLTEuMzI2Yy0uMTk0IDAtLjIxNy4xNy0uMTQ3LjI5Ny4yNTEuNjc1IDIuNTcgNi41OCAzLjUwOCA4Ljk0N3Y1LjQzOGMwIC4wODkuMDQ2LjE0Ni4xNDcuMTQ2aDEuMjQ0Yy4wNTkgMCAuMTI3LS4wNTYuMTI3LS4xNDZ2LTUuMzkxYy44MjQtMi4zMTEgNC4wMS0xMC4zMjEgNC4wMzMtMTAuMzkuMDQ3LS4xMjYuMDIyLS4yMjgtLjE0OC0uMjI4eiIvPjwvc3ZnPg==")
        }

        .ymaps-2-1-29-copyright_color_white .ymaps-2-1-29-copyright__logo_lang_en {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0NS45ODkiIGhlaWdodD0iMjAuMDIxIiB2aWV3Qm94PSIwLjAxIC0xLjAyMyA0NS45ODkgMjAuMDIxIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAuMDEgLTEuMDIzIDQ1Ljk4OSAyMC4wMjEiPjxnIGZpbGw9IiNmZmYiPjxwYXRoIGQ9Ik0xMi42MjUgNS43NzhjLS42MDggMC0xLjUyMS4yMjgtMi4xMjYuNTAzLS4xNzMuMDctLjI2My4xNDktLjE0OC4zOWwuNDI0Ljg4MWMuMDMzLjEwMy4xLjEyNy4xNTkuMTI3bC4xNzEtLjA1N2MuNjE2LS40MDEgMS4wNC0uNTk3IDEuMzk2LS41OTcuNDY2IDAgLjc2NC4yOTcuOTQ4Ljc0My4xOTMuNDQ3LjI2MiAxLjA1NC4yNjIgMS43Mjl2LjE5NGMtLjM4OC0uMjE4LTEuMDQyLS4zNTMtMS4zODMtLjM1My0xLjc1IDAtMi42OTcgMS42ODMtMi42OTcgMy40NjggMCAxLjk2NyAxLjExOCAzLjM2IDIuNDQzIDMuMzYuNzQzIDAgMS40MTctLjQyMSAxLjg2NC0uOTY5bC4yNTEuNjA0Yy4wNDQuMTE0LjA5Mi4xMjguMTk0LjEyOGguNzIxYy4wNTUgMCAuMTIzLS4wMzcuMTIzLS4xNXYtNS41ODJjMC0xLjM3NC0uMDktMi40MjYtLjQ0My0zLjEyNC0uNDQ2LS44OTItMS4yNDYtMS4yOTMtMi4xNTktMS4yOTN2LS4wMDJ6bTEuMDg0IDguNTkyYy0uMzY1LjM1NS0uNzY4LjUyOC0xLjE0NC41MjgtMS4wNiAwLTEuMzEzLTEuMzA1LTEuMzEzLTIuMTg4IDAtMS4wNTEuMzk5LTIuMTI2IDEuMjEyLTIuMTI2LjM5OCAwIC44NTYuMTAyIDEuMjQ2LjQyNGwtLjAwMSAzLjM2MnptNi44MjQtOC40NjRjLS45NzQgMC0xLjk2OC43Mi0xLjk2OC43MnYtLjQ3YzAtLjA4LS4wNjktLjE0OS0uMTI1LS4xNDloLTEuMjQ1Yy0uMDkgMC0uMTQ5LjA3LS4xNDkuMTQ5djkuNjI1YzAgLjA5My4wMjUuMTQ4LjE0OS4xNDhoMS4yNDVjLjA1NiAwIC4xMjUtLjA1OC4xMjUtLjE0OHYtOC4yNTJzLjU3My0uMzUyIDEuMjkyLS4zNTJjLjY1MSAwIDEuMTc3LjMzIDEuMTc3Ljk5NnY3LjYwN2MwIC4wOTMuMDY4LjE0OC4xNy4xNDhoMS4yMDFjLjEzOCAwIC4xNDgtLjA1OC4xNDgtLjE0OHYtOC4wMzJjMC0xLjE5MS0uNzMyLTEuODQxLTIuMDItMS44NDJ6bTkuNTA2LTQuODI5aC0xLjI0NmMtLjEwNSAwLS4xNDguMDctLjE0OC4xNDd2NC44NTNjLS40OTItLjE5NC0uOTI2LS4yOTgtMS4yNDYtLjI5OC0yLjAxNiAwLTMuMzYxIDEuOS0zLjM2MSA1LjU4MyAwIDMuMTM4IDEuMzAzIDQuODMyIDMuMDYyIDQuODMyLjcyMSAwIDEuMzI2LS40MjYgMS43NDYtLjgxM2wuMjc1LjQ0NmMuMDQ1LjA5Mi4wNy4xMDMuMTcyLjEwM2guNzQ2Yy4wOCAwIC4xMjUtLjA1OC4xMjUtLjE0OHYtMTQuNTU4YzAtLjEwMi0uMDQ1LS4xNDktLjEyNS0uMTQ5di4wMDJ6bS0xLjM5NSAxMy41MDNjLS4zMjIuMTcyLS42OTUuMzE4LTEuMDk2LjMxOC0xLjMzOCAwLTEuODg3LTEuNTY2LTEuODg3LTMuODU2IDAtMi4wMjEuNTY4LTQuMDE0IDEuNzkzLTQuMDE0LjM4NyAwIC43ODUuMTUgMS4xODguNDI0djcuMTI4aC4wMDJ6bTYuMDc4LTguODAyYy0yLjEyNyAwLTMuMDgyIDIuNzEzLTMuMDgyIDUuNjMgMCAyLjk3NyAxLjMzNCA0Ljc1OSAzLjMyIDQuNzU5Ljk0NyAwIDEuNzk1LS4zNjUgMi4yNjQtLjY3NC4wNTktLjA0Ny4wOC0uMDY2LjA1OS0uMTQ5bC0uMTUtLjY4OGMtLjAyLS4wNzctLjA1NS0uMTI0LS4xNDgtLjEyNC0uMTAyIDAtLjY3NC4yNDItMS40NzMuMjQyLTEuNTIgMC0yLjIyMS0xLjM0MS0yLjIyMS0zLjA5MnYtLjQ2OXMuNzU4LjEwMyAxLjIwMy4xMDNoMi44ODl2LS44MjNjMC0zLjA5Mi0xLjA5NC00LjcxNi0yLjY2Mi00LjcxNmwuMDAxLjAwMXptLS4yMyA0LjI5MmMtLjQ0MyAwLTEuMTY0LjA5My0xLjE2NC4wOTNzMC0uMjk4LjA0NS0uNjE5Yy4yMTctMS42OS41NzItMi41MzkgMS4yOTMtMi41MzkuNjI3IDAgMS4wMjUuODcgMS4xMTUgMi4zOTUuMDIzLjMyLjAyMy42NzQuMDIzLjY3NGgtMS4zMTJ2LS4wMDR6bTkuMzYxLTQuMDYzaC0xLjA3NmMtLjEyNSAwLS4yMDcuMDctLjI0LjE3NC0uMDQ1LjE0Ni0uNTIzIDEuMzk2LS43MDUgMS44ODctLjEyNy4zNTYtLjUxNiAxLjM5Ni0uNTE2IDEuMzk2aC0uMDM1cy0uMjc1LS43NDItLjQyNC0xLjExOWMtLjA5LS4zMjMtLjcwOS0xLjkxNC0uNzg3LTIuMTE4LS4wMzMtLjA5My0uMTI1LS4yMTktLjI1Mi0uMjE5aC0xLjE4OWMtLjE1IDAtLjIwMy4xNDktLjE1Ni4yNDJsMS45MTggNC40NDFzLTIuMDEgNC44MTUtMi4wNjggNC45NjZjLS4wNy4xNDYuMDIxLjI3NC4xNS4yNzRoMS4wMjVjLjE5MyAwIC4yNTItLjA4My4zMTgtLjI1M2wuNjk5LTEuOS41MjMtMS42NjhoLjA0NXMuMzc5IDEuMDUxLjUwNCAxLjQxNmwuODIgMi4xOThjLjA0NS4xMjYuMTI3LjIwOC4yNjQuMjA4aDEuMTU0Yy4xMjUgMCAuMTkxLS4xMjguMTI1LS4yNTQtLjE0Ni0uMjc0LTEuMjQ0LTMuMDQxLTIuMDQ1LTQuODE3IDAgMCAyLjAzMy00LjUwOCAyLjA5LTQuNjExLjAyMS0uMTE1LjAyMS0uMjQyLS4xNDYtLjI0MmguMDA0di0uMDAxek0xMC45NTItLjI2NGgtMS4zMDNjLS4xMzcgMC0uMTk1LjA1Ni0uMjM5LjE4M2wtMi4zOSA2LjY5MmMtLjI3NS43NTctLjYwNSAyLjA1LS42MDUgMi4wNWgtLjA3cy0uNTI0LTEuNTIyLS42NS0yLjAxM2MtLjE5Ny0uNTUxLTEuODg1LTUuMTg1LTEuOTIxLTUuMzQ2LS4wMjMtLjExNS0uMDkxLS4yMzktLjI2LS4yMzloLTEuMzI2Yy0uMTk0IDAtLjIxNy4xNy0uMTQ3LjI5Ny4yNTEuNjc1IDIuNTcgNi41OCAzLjUwOCA4Ljk0N3Y1LjQzOGMwIC4wODkuMDQ2LjE0Ni4xNDcuMTQ2aDEuMjQ0Yy4wNTkgMCAuMTI3LS4wNTYuMTI3LS4xNDZ2LTUuMzkxYy44MjQtMi4zMTEgNC4wMS0xMC4zMjEgNC4wMzMtMTAuMzkuMDQ3LS4xMjYuMDIyLS4yMjgtLjE0OC0uMjI4eiIvPjwvZz48L3N2Zz4=")
        }

        /**/
        .ymaps-2-1-29-copyright {
            position: relative;
            z-index: 1;
            display: block;
            height: 20px
        }

        .ymaps-2-1-29-copyright {
            top: -20px;
            float: right
        }

        .ymaps-2-1-29-copyright_float_left {
            float: left
        }

        .ymaps-2-1-29-copyright_fog_yes {
            float: none
        }

        .ymaps-2-1-29-copyright__wrap {
            display: block;
            overflow: hidden
        }

        .ymaps-2-1-29-copyright__layout {
            position: relative;
            z-index: 1;
            top: 1px;
            display: table;
            float: right
        }

        .ymaps-2-1-29-copyright__content-cell, .ymaps-2-1-29-copyright__logo-cell {
            display: table-cell;
            vertical-align: top
        }

        .ymaps-2-1-29-copyright__logo-cell {
            padding-left: 4px
        }

        .ymaps-2-1-29-copyright__content {
            display: inline-block;
            float: right;
            padding: 0 4px 1px;
            white-space: nowrap;
            border-radius: 3px;
            background-color: rgba(255, 255, 255, .75);
            font: 11px/14px Verdana, Arial, sans-serif
        }

        .ymaps-2-1-29-copyright_fog_yes .ymaps-2-1-29-copyright__content {
            background-color: transparent
        }

        .ymaps-2-1-29-copyright_fog_yes .ymaps-2-1-29-copyright__wrap {
            margin-left: 17px
        }

        .ymaps-2-1-29-copyright_fog_yes:after {
            position: absolute;
            z-index: -1;
            top: 1px;
            right: 50px;
            left: 17px;
            height: 15px;
            content: '';
            border-radius: 0 3px 3px 0;
            background-color: rgba(255, 255, 255, .75)
        }

        .ymaps-2-1-29-copyright_logo_no.ymaps-2-1-29-copyright_fog_yes:after {
            right: 0
        }

        .ymaps-2-1-29-copyright_logo_no .ymaps-2-1-29-copyright__logo-cell, .ymaps-2-1-29-copyright_providers_no .ymaps-2-1-29-copyright__text, .ymaps-2-1-29-copyright_ua_no .ymaps-2-1-29-copyright__agreement {
            display: none
        }

        .ymaps-2-1-29-copyright__fog {
            position: absolute;
            z-index: 2;
            top: 1px;
            left: 0;
            display: none;
            width: 12px;
            height: 15px;
            padding-left: 5px;
            border-radius: 3px 0 0 3px;
            background: rgba(255, 255, 255, .75);
            font: 11px/14px Verdana, Arial, sans-serif
        }

        .ymaps-2-1-29-copyright_fog_yes .ymaps-2-1-29-copyright__fog {
            display: block
        }

        .ymaps-2-1-29-copyright__extend {
            margin-left: .4em
        }

        .ymaps-2-1-29-copyright__link {
            text-decoration: underline !important;
            color: #333 !important
        }

        .ymaps-2-1-29-copyright__link:hover {
            color: #c00 !important
        }

        /**/
        .ymaps-2-1-29-islets_gotoymaps {
            display: inline-block;
            position: absolute;
            top: -24px;
            color: #000;
            cursor: pointer
        }

        .ymaps-2-1-29-islets_gotoymaps__icon {
            width: 24px;
            height: 24px;
            position: relative;
            z-index: 1;
            display: inline-block;
            background: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zLjgyNiAxQzIuMjY2IDEgMSAyLjI3OCAxIDMuODN2MTYuMzRDMSAyMS43MyAyLjI2IDIzIDMuODI2IDIzSDE2LjAzYy4zNzIgMCAuODI0LS4yNSAxLjAxOC0uNTc2bDUuNzk3LTkuNzAyYy4yMzgtLjQuMjQyLTEuMDQgMC0xLjQ0NGwtNS43OTctOS43MDJjLS4xOS0uMzE4LS42NDMtLjU3Ni0xLjAyLS41NzZIMy44Mjd6IiBzdHJva2Utb3BhY2l0eT0iLjE1IiBzdHJva2U9IiMwMDAiIGZpbGw9IiNGRkYiLz48cGF0aCBkPSJNMTAuMjkgMTIuODk1TDkuMSAyMHM0LjU0LTYuMTc1IDUuNjEtOC45ODdjLjEzOC0uMzYuMTktMS4xMTcuMTktMi4wMTNsLTQuNjEgMy44OTV6IiBzdHJva2U9IiNDNTE0MUMiIHN0cm9rZS13aWR0aD0iLjEiIGZpbGw9IiNDNTE0MUMiLz48cGF0aCBkPSJNMTAgMTRjMi43NiAwIDUtMi4yNCA1LTVzLTIuMjQtNS01LTUtNSAyLjI0LTUgNSAyLjI0IDUgNSA1em0wLTNjMS4xMDUgMCAyLS44OTUgMi0ycy0uODk1LTItMi0yLTIgLjg5NS0yIDIgLjg5NSAyIDIgMnoiIGZpbGw9IiNFMDAiLz48L2c+PC9zdmc+") no-repeat;
            vertical-align: bottom
        }

        .ymaps-2-1-29-islets_gotoymaps__text {
            display: inline-block;
            position: relative;
            top: -1px;
            margin-left: -23px;
            padding-right: 9px;
            padding-left: 26px;
            border-radius: 4px;
            background-color: rgba(255, 255, 255, .7);
            font: 11px/22px Arial, Helvetica, sans-serif
        }

        /**/

        /**/
        .ymaps-2-1-29-map {
            position: relative;
            z-index: 0;
            display: block;
            margin: 0 !important;
            padding: 0 !important;
            text-align: left !important;
            text-decoration: none !important;
            color: #000;
            font-weight: 400 !important;
            font-style: normal !important;
            line-height: normal;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-print-color-adjust: exact;
            -webkit-transform: translate3d(0, 0, 0)
        }

        .ymaps-2-1-29-map ymaps, .ymaps-2-1-29-map ymaps:before, .ymaps-2-1-29-map ymaps:after {
            -moz-box-sizing: content-box;
            box-sizing: content-box
        }

        a .ymaps-2-1-29-map {
            text-decoration: none !important;
            color: #000;
            font-style: normal !important
        }

        .ymaps-2-1-29-fullscreen {
            overflow: hidden !important
        }

        .ymaps-2-1-29-touch-action-none {
            -ms-touch-action: none;
            touch-action: none
        }

        .ymaps-2-1-29-user-selection-none, .ymaps-2-1-29-user-selection-none * {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none
        }

        .ymaps-2-1-29-display-none {
            display: none !important
        }

        ymaps, ymaps input, ymaps i, ymaps canvas {
            max-width: none;
            max-height: none
        }

        @media print {
            .ymaps-2-1-29-patched-for-print {
                background: none !important;
                display: list-item !important;
                list-style-position: inside !important
            }
        }

        .ymaps-2-1-29-patched-for-print-preload .ymaps-2-1-29-patched-for-print {
            background: none !important;
            display: list-item !important;
            list-style-position: inside !important
        }

        /**/
        .ymaps-2-1-29-inner-panes {
            display: block;
            position: absolute;
            overflow: hidden;
            width: 100%;
            height: 100%;
            padding: 0 !important;
            margin: 0 !important
        }

        .ymaps-2-1-29-outer-panes {
            display: block;
            position: absolute;
            width: 0;
            height: 0;
            padding: 0 !important;
            margin: 0 !important
        }

        /**/
        .ymaps-2-1-29-map-ru {
            background: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAzIiBoZWlnaHQ9IjgxIiB2aWV3Qm94PSIwIDAgMjAzIDgxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Ik0zMy41ODUuMTIzaC0xMC43NTFjLTEwLjU1OSAwLTE5LjUxOCA4LjA0LTE5LjUxOCAyMy42NDggMCA5LjM2NCA0LjMzOSAxNi4yNjggMTIuMDY5IDE5LjY3NGwtMTQuNDI0IDI2LjEwN2MtLjQ3Mi44NTIgMCAxLjUxMy43NTIgMS41MTNoNi42OTVjLjU2NiAwIC45NDQtLjE4OSAxLjEzMi0uNjYxbDEzLjEwNi0yNS42MzVoNC43MTd2MjUuNjM1YzAgLjI4My4yODMuNjYxLjY1Ny42NjFoNS44NDljLjU2NiAwIC43NTUtLjI4My43NTUtLjc1NHYtNjkuMjQxYzAtLjY2My0uMzc4LS45NDYtMS4wMzgtLjk0NnptLTYuMjIzIDM4LjU5MmgtMy45NjJjLTYuMjIzIDAtMTIuMjU4LTQuNTQtMTIuMjU4LTE1Ljg5MSAwLTExLjgyNSA1LjY1Ny0xNi42NDggMTEuNDA5LTE2LjY0OGg0LjgxMXYzMi41NGguMDAxem0wIDAiIGZpbGw9IiNGRjRDNEMiLz48cGF0aCBkPSJNNjkuMDI4IDIzLjY0aC01Ljg0NmMtLjQ3MiAwLS43NTUuMzc4LS43NTUuNjZ2MTguMDY3aC0xMC44NDZ2LTE4LjA2N2MwLS40NzItLjE4Ni0uNjYtLjY1Ny0uNjZoLTUuODQ5Yy0uNDY5IDAtLjc1Mi4yODMtLjc1Mi42NnY0NS45NzNjMCAuNDcyLjE4OS43NTUuNjU3Ljc1NWg1Ljk0M2MuMzc3IDAgLjY1Ny0uMjgzLjY1Ny0uNzU1di0yMS45NDRoMTAuODQ2djIxLjk0NGMwIC40NzIuMjgzLjc1NS43NTUuNzU1aDUuODQ2Yy40NzIgMCAuNjYtLjM3OC42Ni0uNzU1di00NS45NzNjMC0uMzc3LS4yODMtLjY2LS42Ni0uNjZ6bTAgME0yMDIuNTE0IDY4LjAwMmwtLjc1NS0zLjIxNmMtLjA5Mi0uMjgzLS4xODYtLjM3Ny0uNDY5LS4zNzctLjQ3MSAwLTMuMDE4IDEuMDM4LTYuNjk2IDEuMDM4LTcuMTY3IDAtMTAuNjU3LTYuOTAyLTEwLjY1Ny0xNy44NzYgMC05LjY1IDIuOTI1LTE5LjIwMiA3LjgyOC0xOS4yMDIgMS4zMjEgMCAyLjkyNS4zNzcgNS40NjggMi43NDUuMjg0LjI4My40NzIuMzc4Ljc1NS4zNzguMjg0IDAgLjU2Ni0uMTkyLjg1LS42NjRsMi41NDctNC4xNmMuMTg4LS4yODYuMjgyLS41NzIuMjgyLS44NTUgMC0uMzc4LS4zNzgtLjY2LS45NDQtLjk0NC0zLjg2OC0xLjk4Ny02LjUwNy0yLjM2NC04Ljc3LTIuMzY0LTguODY1IDAtMTUuNzQ5IDEwLjU5My0xNS43NDkgMjcuMTQ1IDAgMTQuMjg1IDYuNjAxIDIyLjUxMyAxNi4wMzEgMjIuNTEzIDMuOTYzIDAgOC4yMDUtMS44OSA5LjkwMi0zLjEyMi4zNzUtLjI4My40NjktLjY2MS4zNzUtMS4wMzh6bTAgME0xNjEuNTMyIDQ1LjAxNWwxMS4zMTUtMjAuNzE1Yy4xODktLjI4My4wOTMtLjY2LS4yODQtLjY2aC01LjU2M2MtMS42MDMgMC0yLjE3LjU2Ni0yLjczMiAxLjc5NWwtOC40OSAxNy42OWMtLjQ2OSAxLjA0MS0uOTQxIDEuNzAxLTEuNDEyIDEuOTg3di0yMC44MTJjMC0uMzc3LS4xODktLjY2LS41NjYtLjY2aC02LjEyOWMtLjI4MiAwLS41NjYuMjgzLS41NjYuNjZ2NDYuMDY3YzAgLjI4My4xODkuNjYxLjU2Ni42NjFoNi4xMjljLjM3OCAwIC41NjYtLjI4My41NjYtLjY2MXYtMjMuNzQzYy4yODIuMTg5LjQ3MS40NzIuNjYuODUybDEwLjc0OSAyMi4xMzJjLjU2NiAxLjEzNSAxLjQxNSAxLjQxOCAyLjY0MiAxLjQxOGg2LjAzNGMuMzc4IDAgLjQ3MS0uMzc4LjI4Mi0uNjYxbC0xMy4yMDItMjUuMzUxem0wIDBNMTA3LjUwMiA2NS4wNjloLTEuMTMyYy0xLjQxNSAwLTEuNzkyLS41NjYtMS43OTItMS43MDF2LTM5LjA2OGMwLS40NzItLjE4OS0uNjYtLjU2Ni0uNjZoLTE4Ljg1OGMtLjQ3MiAwLS43NTUuMjgzLS43NTUuNjZ2My40MDVjMCAxMS40NDUtLjY2MSAyNi4yMDEtNi42OTUgMzcuMzYzaC0yLjA3NmMtLjU2NiAwLS43NTUuMjg2LS43NTUuNzU4djEzLjgxYzAgLjQ3NC4zNzguNjYxLjY2LjY2MWg0LjUyOGMxLjAzNCAwIDEuNDEyLS43NTUgMS40MTItMS40MTh2LTcuODUxaDIwLjE4MnY4LjYwOWMwIC4zNzcuMjguNjYxLjY1Ny42NjFoNC44MTFjLjU2MyAwIDEuMTI5LS40NzIgMS4xMjktMS40MTh2LTEzLjA1MmMuMDAxLS40NzEtLjI4Mi0uNzU4LS43NTEtLjc1OHptLTEwLjE4NSAwaC0xMy42NzNjNC44MTEtOC4yMjggNi42OTYtMTcuNDk4IDcuMzU1LTI4Ljg0OC4xODktMi40NTkuMjgzLTUuMDE1LjI4My02LjYyMmg2LjAzNXYzNS40N3ptMCAwTTEyNi43MzcgMjIuNTA1Yy0xMC4xODIgMC0xNC43MSAxMi44NjMtMTQuNzEgMjYuODYyIDAgMTQuMjg0IDYuNDExIDIyLjc5NiAxNS44NDMgMjIuNzk2IDQuNjE5IDAgOC42NzUtMS43OTUgMTAuNzQ4LTMuMTIyLjM3OC0uMTg5LjQ3Mi0uNDcyLjM3OC0uODQ5bC0uNzU0LTMuMjE2Yy0uMDk0LS4zNzctLjI4My0uNTY2LS43NTUtLjU2Ni0uMzc0IDAtMy4xMSAxLjAzOC02Ljk3OCAxLjAzOC03LjI2MSAwLTEwLjY1NC02LjMzNi0xMC42NTQtMTQuNjU5di0yLjIzOXMzLjY3Ni40NDEgNS44NDYuNDQxaDEzLjc2N3YtMy45NzRjLS4wMDEtMTQuNjU5LTUuMTg5LTIyLjUxMS0xMi43My0yMi41MTF6bS0xLjAzNyAyMC41MjZjLTIuMTcxIDAtNS41NjMuMzc4LTUuNTYzLjM3OHMwLTEuNDE4LjE4OS0yLjkzM2MuODQ2LTguMDQgMi44MjctMTIuMTA1IDYuMTI4LTEyLjEwNSAzLjAxOSAwIDQuOTAzIDQuMTYgNS4zNzQgMTEuNDQ1LjA5NCAxLjUxMy4wOTQgMy4yMTYuMDk0IDMuMjE2aC02LjIyM3YtLjAwMXptMCAwIiBmaWxsPSIjNTk1OTU5Ii8+PC9zdmc+") #fafafa center no-repeat
        }

        /**/
        .ymaps-2-1-29-tile-not-found {
            text-align: center;
            display: block;
            font-family: Arial, serif;
            font-size: 10px;
            white-space: nowrap;
            position: absolute;
            top: 40%;
            width: 90%;
            left: 10%;
            overflow: hidden
        }

        /**/
        @media print {
            .ymaps-2-1-29-controls-pane {
                visibility: hidden
            }
        }

        /**/
        .ymaps-2-1-29-placemark {
            position: absolute;
            z-index: 1;
            display: block;
            height: 28px;
            background-repeat: repeat-x;
            background-position: 0 -60px;
            background-size: auto !important
        }

        .ymaps-2-1-29-placemark__content {
            position: relative;
            z-index: 5;
            display: block;
            width: auto;
            height: 27px;
            margin: 0 -3px;
            text-align: center;
            white-space: nowrap;
            color: #000;
            font: 13px Arial, sans-serif
        }

        .ymaps-2-1-29-placemark__content-inner {
            display: block;
            overflow: hidden;
            margin-top: 6px;
            margin-left: 5px;
            margin-right: 5px;
            height: 15px
        }

        .ymaps-2-1-29-placemark__content-inner > * {
            display: block
        }

        .ymaps-2-1-29-placemark_state_active .ymaps-2-1-29-placemark__content {
            margin-right: -9px
        }

        .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark__r {
            position: absolute;
            z-index: 4;
            display: block;
            width: 13px;
            height: 27px
        }

        .ymaps-2-1-29-placemark__l {
            left: -13px;
            background-position: 0 0
        }

        .ymaps-2-1-29-placemark__r {
            right: -14px;
            width: 14px;
            background-position: -14px 0
        }

        .ymaps-2-1-29-placemark_state_active .ymaps-2-1-29-placemark__r {
            right: -26px;
            width: 26px;
            height: 41px;
            background-position: -80px 0
        }

        /**/
        .ymaps-2-1-29-placemark_theme_blue .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_blue .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_blue {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiMxRTk4RkY7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        .ymaps-2-1-29-placemark_theme_black .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_black .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_black {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiM1OTU5NTk7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        .ymaps-2-1-29-placemark_theme_brown .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_brown .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_brown {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiM3OTNEMEU7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        .ymaps-2-1-29-placemark_theme_darkblue .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_darkblue .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_darkblue {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiMxNzdCQzk7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        .ymaps-2-1-29-placemark_theme_darkgreen .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_darkgreen .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_darkgreen {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiMxQkFEMDM7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        .ymaps-2-1-29-placemark_theme_darkorange .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_darkorange .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_darkorange {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiNFNjc2MUI7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        .ymaps-2-1-29-placemark_theme_gray .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_gray .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_gray, .ymaps-2-1-29-placemark_theme_grey .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_grey .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_grey {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiNCM0IzQjM7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        .ymaps-2-1-29-placemark_theme_green .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_green .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_green {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiM1NkRCNDA7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        .ymaps-2-1-29-placemark_theme_lightblue .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_lightblue .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_lightblue {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiM4MkNERkY7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        .ymaps-2-1-29-placemark_theme_night .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_night .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_night {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiMwRTQ3Nzk7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        .ymaps-2-1-29-placemark_theme_orange .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_orange .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_orange {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiNGRjkzMUU7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        .ymaps-2-1-29-placemark_theme_pink .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_pink .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_pink {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiNGMzcxRDE7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        .ymaps-2-1-29-placemark_theme_red .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_red .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_red {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiNFRDQ1NDM7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        .ymaps-2-1-29-placemark_theme_violet .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_violet .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_violet {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiNCNTFFRkY7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        .ymaps-2-1-29-placemark_theme_yellow .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_yellow .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_yellow {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiNGRkQyMUU7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        .ymaps-2-1-29-placemark_theme_olive .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_theme_olive .ymaps-2-1-29-placemark__r, .ymaps-2-1-29-placemark_theme_olive {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxMjBweCIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyMCAxMDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxzdHlsZT4ud2hpdGVfb3BhY2l0eXtmaWxsOiNmZmY7ZmlsbC1vcGFjaXR5OjAuODt9LmN1c3RvbV9jb2xvcl9zb2xpZHtmaWxsOiM5N0ExMDA7fS53aGl0ZV9zb2xpZHtmaWxsOiNmZmY7fS5ibGFja19zb2xpZF9zdGFydCwuYmxhY2tfc29saWRfZmluaXNoe3N0b3AtY29sb3I6IzAwMDt9LmJsYWNrX3NvbGlkX2ZpbmlzaHtzdG9wLW9wYWNpdHk6MDt9LnNoYWRvd3tvcGFjaXR5OjAuNTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTAgMTMuNUMwIDYgNiAwIDEzLjUgMFMyNyA2IDI3IDEzLjVTMjAuOTU2IDI3IDEzLjUgMjcgUzAgMjEgMCAxMy41TDAgMTMuNXogTTIyIDEzLjVDMjIgOC44IDE4LjIgNSAxMy41IDVTNSA4LjggNSAxMy41UzguODA2IDIyIDEzLjUgMjJTMjIgMTguMiAyMiAxMy41TDIyIDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIiBjeD0iMTMuNSIgY3k9IjEzLjUiIHI9IjExLjUiLz48Y2lyY2xlIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgY3g9IjEzLjUiIGN5PSIxMy41IiByPSI4LjUiLz48L2c+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJzaGFkb3ctZ3JhZGllbnQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iLTM0MCIgeTE9IjM5MS45IiB4Mj0iLTMzOS4xIiB5Mj0iMzkyLjciIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMjEuMjE2MSAwIDAgLTIxLjc4NzkgNzI2Mi4wMzUyIDg1NzUuMTEwNCkiPjxzdG9wIG9mZnNldD0iMCIgY2xhc3M9ImJsYWNrX3NvbGlkX3N0YXJ0Ii8+PHN0b3Agb2Zmc2V0PSIxIiBjbGFzcz0iYmxhY2tfc29saWRfZmluaXNoIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic2hhZG93IiBmaWxsPSJ1cmwoI3NoYWRvdy1ncmFkaWVudCkiIGQ9Ik00OC43MTkgMzkuNyBjNC43MTEtMi4zOTUgMTcuODE4LTExLjUxOCAxOC4zMDQtMTEuOTc5YzAuNTUzLTAuNTIxIDEuMDYyLTEuMDYyIDEuNDktMS42MTljMy00IDEuMTIxLTcuNjIxLTQuNDMtOC4wMyBjLTAuNDc3LTAuMDM2LTEuMDY4LTAuMTA3LTEuNjgtMC4xNjFjLTAuOTU5IDMuNDI3LTMuMjIzIDcuNjA0LTYuNDM0IDEyLjMyOWMtMS40NzEgMi4xNjYtMy4wNDQgNC4yOTktNC42MTUgNi4zIGMtMC41NTEgMC43MDUtMS4wNjIgMS4zNDQtMS41MjEgMS45MDVjLTAuMjQ2IDAuMzAyLTAuNDMyIDAuNTI0LTAuNTQ3IDAuNjYyYy0wLjExOCAwLjE1My0wLjI3IDAuMzIxLTAuNDY3IDAuNSBDNDguNzg3IDM5LjYgNDguOCAzOS42IDQ4LjcgMzkuNjY2TDQ4LjcxOSAzOS42NjZ6Ii8+PHBhdGggY2xhc3M9IndoaXRlX29wYWNpdHkiIGQ9Ik0zNiAxMy41QzM2IDYgNDIgMCA0OS41IDBTNjMgNiA2MyAxMy41IGMwIDAuNzgyLTAuMDY2IDEuNTU3LTAuMTk4IDIuMzE3bDAuMDEzIDAuMTY2bC0wLjAzNyAwLjIyOWMtMC41OTYgMy43MDItMy4wNTQgOC40NzItNi44MDQgMTQgYy0xLjQ3MiAyLjE2Ni0zLjA0NSA0LjI5OS00LjYxNyA2LjMxYy0wLjU0OSAwLjcwNS0xLjA2MSAxLjM0NC0xLjUyMSAxLjkwNWMtMC4yNDYgMC4zMDItMC40MzMgMC41MjQtMC41NDcgMC43IGMtMC4xMTggMC4xNTMtMC4yNzEgMC4zMjEtMC40NjggMC40OTVjLTAuMjIzIDAuMTk1LTAuNDYzIDAuMzYxLTAuNzI3IDAuNDgyYy0wLjQwNiAwLjE4Ny0wLjg2NSAwLjI2NC0xLjQgMC4yIGMtMC4xMTYtMC4wMjItMC4xNDgtMC4wMjgtMC4yMTctMC4wNDljLTAuODYzLTAuMjI2LTEuNDYzLTAuODgxLTEuNjYtMS42OGMtMC4xMDYtMC40MzQtMC4wODgtMC44MTQtMC4wMDYtMS4xODIgYzAuMDE3LTAuMDcgMC4wMzItMC4xMzUgMC4wNTEtMC4xOTNsMi43Ny0xMC4yNThDNDEuMDU5IDI2IDM2IDIwLjMgMzYgMTMuNUwzNiAxMy41eiIvPjxwYXRoIGNsYXNzPSJjdXN0b21fY29sb3Jfc29saWQiIGQ9Ik0zOCAxMy41QzM4IDcuMSA0My4xIDIgNDkuNSAyUzYxIDcuMSA2MSAxMy41YzAgMC43NjgtMC4wNzUgMS41MTctMC4yMTkgMi4yIGMwLjAxIDAgMCAwLjEgMCAwLjE1MWMtMS4yODQgOC4wMDItMTMuMDgzIDIxLjk0OC0xMy4wODMgMjEuOTQ4cy0wLjM3NSAwLjUyMy0wLjczMiAwLjQgYy0wLjM2Ny0wLjA5NC0wLjIwNC0wLjU2Mi0wLjIwNC0wLjU2MmwzLjQzMi0xMi43MDlDNDkuOTc3IDI1IDQ5LjcgMjUgNDkuNSAyNUM0My4xNDggMjUgMzggMTkuOSAzOCAxMy41TDM4IDEzLjV6Ii8+PGNpcmNsZSBjbGFzcz0id2hpdGVfc29saWQiIGN4PSI0OS41IiBjeT0iMTMuNSIgcj0iOC41Ii8+PC9nPjxnPjxsaW5lYXJHcmFkaWVudCBpZD0ic2hhZG93LWdyYWRpZW50MiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSItNjA4LjQiIHkxPSIzNTQuMSIgeDI9Ii02MDcuNCIgeTI9IjM1NC45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDIxLjIxNjEgMCAwIC0yMS43ODc5IDEyOTkxLjE2MDIgNzc1Mi42NDE2KSI+PHN0b3Agb2Zmc2V0PSIwIiBjbGFzcz0iYmxhY2tfc29saWRfc3RhcnQiLz48c3RvcCBvZmZzZXQ9IjEiIGNsYXNzPSJibGFja19zb2xpZF9maW5pc2giLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGNsYXNzPSJzaGFkb3ciIGZpbGw9InVybCgjc2hhZG93LWdyYWRpZW50MikiIGQ9Ik04NC43MTggMzkuNyBjNC43MS0yLjM5NSAxNy44MTktMTEuNTE4IDE4LjMwNi0xMS45NzljMC41NTQtMC41MjEgMS4wNjItMS4wNjIgMS40OS0xLjYxOWMzLTQgMS4xMi03LjYyMy00LjQzMS04LjAzIGMtMC40NzgtMC4wMzYtMS4wNjctMC4xMDctMS42ODEtMC4xNjFjLTAuOTU3IDMuNDI4LTMuMjIzIDcuNjA0LTYuNDMyIDEyLjMzYy0xLjQ3NSAyLjE2Ni0zLjA0NyA0LjI5OS00LjYxNyA2LjMgYy0wLjU0OSAwLjcwNS0xLjA2MiAxLjM0NC0xLjUyMSAxLjkwNmMtMC4yNDcgMC4zMDEtMC40MzQgMC41MjMtMC41NDggMC42NjJjLTAuMTE4IDAuMTUyLTAuMjcxIDAuMzItMC40NjggMC41IEM4NC43ODcgMzkuNiA4NC44IDM5LjYgODQuNyAzOS42NjZMODQuNzE4IDM5LjY2NnoiLz48cGF0aCBjbGFzcz0id2hpdGVfb3BhY2l0eSIgZD0iTTgwIDI1djJoMy41OTVsLTIuNzM1IDEwLjEyOWMtMC4wMjEgMC4wNTktMC4wMzQgMC4xMjMtMC4wNDkgMC4yIGMtMC4wODIgMC4zNjctMC4xMDQgMC43IDAgMS4xODJjMC4xOTcgMC44IDAuOCAxLjUgMS43IDEuNjhjMC4wNjQgMCAwLjEgMCAwLjIgMCBjMC41MzcgMC4xIDEgMCAxLjM5OC0wLjE3YzAuMjY2LTAuMTIxIDAuNTA2LTAuMjg3IDAuNzI5LTAuNDhjMC4xOTctMC4xNzYgMC4zNDktMC4zNDQgMC40NjctMC40OTQgYzAuMTE1LTAuMTQxIDAuMzAxLTAuMzU5IDAuNTQ4LTAuNjYyYzAuNDYtMC41NjIgMC45NzItMS4xOTkgMS41MjEtMS45MDRjMS41NjktMi4wMTIgMy4xNDYtNC4xNDUgNC42MTUtNi4zMTEgYzMuNzUyLTUuNTIxIDYuMjExLTEwLjI5NCA2LjgwNy0xMy45OTdsMC4wMzUtMC4yMjlMOTguOCAxNS44MThjMC4xMzQtMC43NjEgMC4yLTEuNTM2IDAuMi0yLjMxOEM5OSA2IDkzIDAgODUuNSAwSDgwIHYyIi8+PHBhdGggY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIgZD0iTTgwIDIydjNoNS41YzAuMjM4IDAgMC40NzctMC4wMDggMC43MTMtMC4wMjFsLTMuNDMyIDEyLjcwOWMwIDAtMC4xNjMgMC41IDAuMiAwLjYgYzAuMzU0IDAuMSAwLjcyOS0wLjQwOCAwLjcyOS0wLjQwOFM5NS41MTggMjMuOSA5Ni44IDE1Ljg5NGMtMC4wMDQtMC4wNTYtMC4wMTEtMC4xMDYtMC4wMjEtMC4xNTEgQzk2LjkyNSAxNSA5NyAxNC4zIDk3IDEzLjVDOTcgNy4xIDkxLjkgMiA4NS41IDJIODB2MyIvPjxwYXRoIGNsYXNzPSJ3aGl0ZV9zb2xpZCIgZD0iTTg1LjUgNUg4MHYxN2g1LjVjNC42OTMgMCA4LjUtMy44MDYgOC41LTguNVM5MC4xOTMgNSA4NS41IDV6Ii8+PC9nPjxnPjxyZWN0IHk9IjYwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjIiIGNsYXNzPSJ3aGl0ZV9vcGFjaXR5Ii8+PHJlY3QgeT0iODUiIHdpZHRoPSIxMjAiIGhlaWdodD0iMiIgY2xhc3M9IndoaXRlX29wYWNpdHkiLz48cmVjdCB5PSI2MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSIzIiBjbGFzcz0iY3VzdG9tX2NvbG9yX3NvbGlkIi8+PHJlY3QgeT0iODIiIHdpZHRoPSIxMjAiIGhlaWdodD0iMyIgY2xhc3M9ImN1c3RvbV9jb2xvcl9zb2xpZCIvPjxyZWN0IHk9IjY1IiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjE3IiBjbGFzcz0id2hpdGVfc29saWQiLz48L2c+PC9zdmc+")
        }

        /**/
        .ymaps-2-1-29-placemark_type_blank {
            width: 28px;
            background-position: 0 0;
            background-repeat: no-repeat
        }

        .ymaps-2-1-29-placemark_type_blank.ymaps-2-1-29-placemark_state_active {
            background-image: none;
            width: 0
        }

        .ymaps-2-1-29-placemark_type_blank .ymaps-2-1-29-placemark__content {
            position: absolute;
            top: 0;
            z-index: 6;
            margin: 0 !important;
            width: 27px;
            background: 0 0
        }

        .ymaps-2-1-29-placemark_type_blank.ymaps-2-1-29-placemark_state_active .ymaps-2-1-29-placemark__content {
            left: -8px
        }

        .ymaps-2-1-29-placemark_type_blank .ymaps-2-1-29-placemark__l, .ymaps-2-1-29-placemark_type_blank .ymaps-2-1-29-placemark__r {
            display: none
        }

        .ymaps-2-1-29-placemark_state_active.ymaps-2-1-29-placemark_type_blank .ymaps-2-1-29-placemark__r {
            display: block;
            background-position: -36px 0 !important;
            right: -28px;
            width: 36px
        }

        /**/
        .ymaps-2-1-29-node-size-parent-style {
            visibility: hidden !important;
            position: absolute;
            overflow: hidden;
            width: 0;
            height: 0;
            display: block;
            zoom: 1 !important
        }

        .ymaps-2-1-29-node-size-parent-pane-style {
            visibility: hidden !important;
            position: relative;
            overflow: visible;
            display: block;
            zoom: 1 !important
        }

        .ymaps-2-1-29-node-size-node-style {
            position: absolute !important;
            overflow: hidden !important;
            overflow-x: hidden !important;
            overflow-y: hidden !important;
            zoom: 1 !important;
            display: block !important
        }

        .ymaps-2-1-29-node-size-w3c-box-model-test {
            width: 100px !important;
            border-left-width: 10px !important;
            overflow: hidden !important;
            overflow-x: hidden !important;
            overflow-y: hidden !important
        }

        .ymaps-2-1-29-node-size-paddings-test {
            width: 0 !important;
            height: 0 !important;
            border-width: 0 !important;
            border-top-width: 0 !important;
            border-right-width: 0 !important;
            border-bottom-width: 0 !important;
            border-left-width: 0 !important;
            overflow: hidden !important;
            overflow-x: hidden !important;
            overflow-y: hidden !important;
            display: block !important
        }

        .ymaps-2-1-29-node-size-no-scrolls-test {
            position: absolute !important;
            display: block !important;
            left: 0 !important;
            top: 0 !important;
            width: 100px !important;
            height: 100px !important;
            overflow: hidden !important;
            overflow-x: hidden !important;
            overflow-y: hidden !important;
            visibility: visible !important
        }

        .ymaps-2-1-29-node-size-scrolls-test {
            overflow: scroll !important;
            overflow-x: scroll !important;
            overflow-y: scroll !important
        }

        /**/
    </style>
    <style type="text/css" data-ymaps="css-modules">.ymaps-2-1-29-button__icon {
            width: 16px;
            height: 16px
        }

        .ymaps-2-1-29-button__icon {
            position: relative;
            top: 3px;
            margin-right: 7px
        }

        .ymaps-2-1-29-button_disabled_yes .ymaps-2-1-29-button__icon {
            opacity: .7
        }

        .ymaps-2-1-29-button__icon {
            top: 0;
            display: inline-block;
            width: 26px;
            height: 28px;
            margin: 0 4px 0 -12px;
            background-repeat: no-repeat;
            background-position: center;
            vertical-align: top
        }

        .ymaps-2-1-29-button__icon_icon_geolocation {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjI2cHgiIGhlaWdodD0iMjZweCIgdmlld0JveD0iMCAwIDI2IDI2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDx0aXRsZT5HZW9Mb2NhdGlvbjwvdGl0bGU+CiAgICA8ZGVzY3JpcHRpb24+Q3JlYXRlZCB3aXRoIFNrZXRjaCAoaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoKTwvZGVzY3JpcHRpb24+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBza2V0Y2g6dHlwZT0iTVNQYWdlIj4KICAgICAgICA8ZyBpZD0iVHJpYW5nbGUtMS0rLVRyaWFuZ2xlLTEtY29weSIgc2tldGNoOnR5cGU9Ik1TTGF5ZXJHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTQuMDAwMDAwLCAxMS41MDAwMDApIHJvdGF0ZSgtMzE1LjAwMDAwMCkgdHJhbnNsYXRlKC0xNC4wMDAwMDAsIC0xMS41MDAwMDApIHRyYW5zbGF0ZSg3LjAwMDAwMCwgMy4wMDAwMDApIj4KICAgICAgICAgICAgPHBhdGggZD0iTTcsMTEgTDIuODQyMTcwOTRlLTE0LDE2IEw3LDEiIGlkPSJUcmlhbmdsZS0xIiBmaWxsPSIjNjY2NjY2IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik0xNCwxMSBMNywxNiBMMTQsMSIgaWQ9IlRyaWFuZ2xlLTEtY29weSIgZmlsbD0iIzMzMzMzMyIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTAuNTAwMDAwLCA4LjUwMDAwMCkgc2NhbGUoLTEsIDEpIHRyYW5zbGF0ZSgtMTAuNTAwMDAwLCAtOC41MDAwMDApICI+PC9wYXRoPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+")
        }

        .ymaps-2-1-29-button__icon_icon_ruler {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjI2cHgiIGhlaWdodD0iMjZweCIgdmlld0JveD0iMCAwIDI2IDI2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDx0aXRsZT5SdWxsZXI8L3RpdGxlPgogICAgPGRlc2NyaXB0aW9uPkNyZWF0ZWQgd2l0aCBTa2V0Y2ggKGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCk8L2Rlc2NyaXB0aW9uPgogICAgPGRlZnM+PC9kZWZzPgogICAgPGcgaWQ9IlBhZ2UtMSIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIgc2tldGNoOnR5cGU9Ik1TUGFnZSI+CiAgICAgICAgPGcgaWQ9Ikdyb3VwIiBza2V0Y2g6dHlwZT0iTVNMYXllckdyb3VwIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzLjAwMDAwMCwgMTAuMDAwMDAwKSIgZmlsbD0iIzY2NjY2NiI+CiAgICAgICAgICAgIDxyZWN0IGQ9Ik0zLDEgTDMsNCBMNCw0IEw0LDEgTDMsMSBaIE0zLDEiIGlkPSJSZWN0YW5nbGUtMjEwIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIiB4PSIzIiB5PSIxIiB3aWR0aD0iMSIgaGVpZ2h0PSIzIj48L3JlY3Q+CiAgICAgICAgICAgIDxyZWN0IGQ9Ik02LDEgTDYsNCBMNyw0IEw3LDEgTDYsMSBaIE02LDEiIGlkPSJSZWN0YW5nbGUtMjEwLWNvcHkiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiIHg9IjYiIHk9IjEiIHdpZHRoPSIxIiBoZWlnaHQ9IjMiPjwvcmVjdD4KICAgICAgICAgICAgPHJlY3QgZD0iTTksMSBMOSw0IEwxMCw0IEwxMCwxIEw5LDEgWiBNOSwxIiBpZD0iUmVjdGFuZ2xlLTIxMC1jb3B5LTIiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiIHg9IjkiIHk9IjEiIHdpZHRoPSIxIiBoZWlnaHQ9IjMiPjwvcmVjdD4KICAgICAgICAgICAgPHJlY3QgZD0iTTEyLDEgTDEyLDQgTDEzLDQgTDEzLDEgTDEyLDEgWiBNMTIsMSIgaWQ9IlJlY3RhbmdsZS0yMTAtY29weS0zIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIiB4PSIxMiIgeT0iMSIgd2lkdGg9IjEiIGhlaWdodD0iMyI+PC9yZWN0PgogICAgICAgICAgICA8cmVjdCBkPSJNMTUsMiBMMTUsNCBMMTcsNCBMMTcsMiBMMTUsMiBaIE0xNSwyIiBpZD0iUmVjdGFuZ2xlLTIxNCIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIgeD0iMTUiIHk9IjIiIHdpZHRoPSIyIiBoZWlnaHQ9IjIiPjwvcmVjdD4KICAgICAgICAgICAgPHBhdGggZD0iTTAsNyBMMjAsNyBMMjAsMCBMMCwwIEwwLDcgWiBNMSwxIEwxLDYgTDE5LDYgTDE5LDEgTDEsMSBaIE0xLDEiIGlkPSJSZWN0YW5nbGUtMjA5IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=")
        }

        .ymaps-2-1-29-button__icon_icon_fold {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjI2cHgiIGhlaWdodD0iMjZweCIgdmlld0JveD0iMCAwIDI2IDI2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDx0aXRsZT5TbGljZSAxPC90aXRsZT4KICAgIDxkZXNjcmlwdGlvbj5DcmVhdGVkIHdpdGggU2tldGNoIChodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gpPC9kZXNjcmlwdGlvbj4KICAgIDxkZWZzPjwvZGVmcz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHNrZXRjaDp0eXBlPSJNU1BhZ2UiPgogICAgICAgIDxwYXRoIGQ9Ik0xMiwxMyBMMTMsMTIgTDE0LDEzIEwxOS41MDAwOTM3LDE4IEwyMSwxNi41IEwxNCwxMCBMMTMsOSBMMTIsMTAgTDUsMTYuNSBMNi40OTcwOTM5MywxOCBMMTIsMTMgWiBNMTIsMTMiIGlkPSJhcnJvdyIgZmlsbD0iIzk5OTk5OSIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPgogICAgPC9nPgo8L3N2Zz4=")
        }

        .ymaps-2-1-29-button__icon_icon_plus {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjI2cHgiIGhlaWdodD0iMjZweCIgdmlld0JveD0iMCAwIDI2IDI2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDx0aXRsZT5QbHVzPC90aXRsZT4KICAgIDxkZXNjcmlwdGlvbj5DcmVhdGVkIHdpdGggU2tldGNoIChodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gpPC9kZXNjcmlwdGlvbj4KICAgIDxkZWZzPjwvZGVmcz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHNrZXRjaDp0eXBlPSJNU1BhZ2UiPgogICAgICAgIDxnIGlkPSJTbWFsbCIgc2tldGNoOnR5cGU9Ik1TTGF5ZXJHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNi4wMDAwMDAsIDYuMDAwMDAwKSIgZmlsbD0iIzY2NjY2NiI+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik01LDkgTDAsOSBMMCw1IEw1LDUgTDUsLTcuMzQ3ODgwNzllLTE2IEw5LDAgTDksNSBMMTQsNSBMMTQsOSBMOSw5IEw5LDE0IEw1LDE0IEw1LDkgWiBNNSw5IiBpZD0iUmVjdGFuZ2xlLTk5LWNvcHktMyIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+")
        }

        .ymaps-2-1-29-button__icon_icon_minus {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjI2cHgiIGhlaWdodD0iMjZweCIgdmlld0JveD0iMCAwIDI2IDI2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDx0aXRsZT5NaW51czwvdGl0bGU+CiAgICA8ZGVzY3JpcHRpb24+Q3JlYXRlZCB3aXRoIFNrZXRjaCAoaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoKTwvZGVzY3JpcHRpb24+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBza2V0Y2g6dHlwZT0iTVNQYWdlIj4KICAgICAgICA8ZyBpZD0iU21hbGwiIHNrZXRjaDp0eXBlPSJNU0xheWVyR3JvdXAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDYuMDAwMDAwLCAtMjcuMDAwMDAwKSIgZmlsbD0iIzY2NjY2NiI+CiAgICAgICAgICAgIDxyZWN0IGQ9Ik0wLDM4IEwwLDQyIEwxNCw0MiBMMTQsMzggTDAsMzggWiBNMCwzOCIgaWQ9IlJlY3RhbmdsZS05OS1jb3B5IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIiB4PSIwIiB5PSIzOCIgd2lkdGg9IjE0IiBoZWlnaHQ9IjQiPjwvcmVjdD4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPg==")
        }

        .ymaps-2-1-29-button__icon_icon_layers {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjI2cHgiIGhlaWdodD0iMjZweCIgdmlld0JveD0iMCAwIDI2IDI2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDx0aXRsZT5MYXllcnM8L3RpdGxlPgogICAgPGRlc2NyaXB0aW9uPkNyZWF0ZWQgd2l0aCBTa2V0Y2ggKGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCk8L2Rlc2NyaXB0aW9uPgogICAgPGRlZnM+PC9kZWZzPgogICAgPGcgaWQ9IlBhZ2UtMSIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIgc2tldGNoOnR5cGU9Ik1TUGFnZSI+CiAgICAgICAgPGcgaWQ9IlJlY3RhbmdsZS0xNDItY29weS0rLVJlY3RhbmdsZS0xNDItY29weS0zLSstUmVjdGFuZ2xlLTE0Mi1jb3B5LTMiIHNrZXRjaDp0eXBlPSJNU0xheWVyR3JvdXAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMuMDAwMDAwLCA1LjAwMDAwMCkiPgogICAgICAgICAgICA8cGF0aCBkPSJNMTcsOS41IEwyMCwxMSBMMTAsMTYgTDAsMTEgTDMsOS41IEw0LjUsMTAuMjUgTDMsMTEgTDEwLDE0LjUgTDE3LDExIEwxNS41LDEwLjI1IEwxNyw5LjUgWiBNMTcsOS41IiBpZD0iUmVjdGFuZ2xlLTE0Mi1jb3B5IiBmaWxsPSIjMzMzMzMzIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik0xNyw2LjUgTDIwLDggTDEwLDEzIEwwLDggTDMsNi41IEw0LjUsNy4yNSBMMyw4IEwxMCwxMS41IEwxNyw4IEwxNS41LDcuMjUgTDE3LDYuNSBaIE0xNyw2LjUiIGlkPSJSZWN0YW5nbGUtMTQyLWNvcHktMyIgZmlsbD0iIzRDNEM0QyIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPgogICAgICAgICAgICA8cGF0aCBkPSJNMTAsMTAgTDIwLDUgTDEwLC05LjkwMTAzMzQ2ZS0xNyBMMCw1IEwxMCwxMCBaIE0xMCw4LjUgTDE3LDUgTDEwLDEuNSBMMyw1IEwxMCw4LjUgWiBNMTAsOC41IiBpZD0iUmVjdGFuZ2xlLTE0Mi1jb3B5LTMiIGZpbGw9IiM2NjY2NjYiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiPjwvcGF0aD4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPg==")
        }

        .ymaps-2-1-29-button__icon_icon_expand {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjYiIGhlaWdodD0iMjYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiPjx0aXRsZT5GdWxsX21heGltaXplPC90aXRsZT48ZyBza2V0Y2g6dHlwZT0iTVNQYWdlIiBmaWxsPSIjNkI2QjZCIj48cGF0aCBkPSJNMTYuMTM3IDcuODU1bC0xLjg2Ni0xLjg1NWg1LjcyOHY1LjY5NmwtMS44MzItMS44MjEtMy4xMzEgMy4xMzEtMi4wMjUtMi4wMjUgMy4xMjYtMy4xMjZ6bTAgMCIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIvPjxwYXRoIGQ9Ik05Ljg2MyAxOC4xNDVsMS44NjYgMS44NTVoLTUuNzI4di01LjY5NmwxLjgzMiAxLjgyMSAzLjEzMS0zLjEzMSAyLjAyNSAyLjAyNS0zLjEyNiAzLjEyNnptMCAwIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIi8+PC9nPjwvc3ZnPg==")
        }

        .ymaps-2-1-29-button__icon_icon_collapse {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjYiIGhlaWdodD0iMjYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiPjx0aXRsZT5GdWxsX21pbmltaXplPC90aXRsZT48ZyBza2V0Y2g6dHlwZT0iTVNQYWdlIiBmaWxsPSIjNkI2QjZCIj48cGF0aCBkPSJNOC4xMzcgMTUuODU1bC0xLjg2Ni0xLjg1NWg1LjcyOHY1LjY5NmwtMS44MzItMS44MjEtMy4xMzEgMy4xMzEtMi4wMjUtMi4wMjUgMy4xMjYtMy4xMjZ6bTAgMCIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIvPjxwYXRoIGQ9Ik0xNy44NjMgMTAuMTQ1bDEuODY2IDEuODU1aC01LjcyOHYtNS42OTZsMS44MzIgMS44MjEgMy4xMzEtMy4xMzEgMi4wMjUgMi4wMjUtMy4xMjYgMy4xMjZ6bTAgMCIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIvPjwvZz48L3N2Zz4=")
        }

        .ymaps-2-1-29-button__icon_icon_magnifier {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjI2cHgiIGhlaWdodD0iMjZweCIgdmlld0JveD0iMCAwIDI2IDI2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDx0aXRsZT5Mb3VwZTwvdGl0bGU+CiAgICA8ZGVzY3JpcHRpb24+Q3JlYXRlZCB3aXRoIFNrZXRjaCAoaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoKTwvZGVzY3JpcHRpb24+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBza2V0Y2g6dHlwZT0iTVNQYWdlIj4KICAgICAgICA8ZyBpZD0iT3ZhbC0xMS0rLVJlY3RhbmdsZS0xMjgiIHNrZXRjaDp0eXBlPSJNU0xheWVyR3JvdXAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEzLjUwMDAwMCwgMTMuNTAwMDAwKSByb3RhdGUoLTQ1LjAwMDAwMCkgdHJhbnNsYXRlKC0xMy41MDAwMDAsIC0xMy41MDAwMDApIHRyYW5zbGF0ZSg3LjAwMDAwMCwgNC4wMDAwMDApIiBmaWxsPSIjNjY2NjY2Ij4KICAgICAgICAgICAgPHBhdGggZD0iTTYsMTIgQzkuMzEzNzA4NjYsMTIgMTIsOS4zMTM3MDg2NiAxMiw2IEMxMiwyLjY4NjI5MTM0IDkuMzEzNzA4NjYsNC4yNjMyNTY0MWUtMTQgNiw0LjI2MzI1NjQxZS0xNCBDMi42ODYyOTEzNCw0LjI2MzI1NjQxZS0xNCAwLDIuNjg2MjkxMzQgMCw2IEMwLDkuMzEzNzA4NjYgMi42ODYyOTEzNCwxMiA2LDEyIFogTTYsOS41IEM3LjkzMjk5NjcyLDkuNSA5LjUsNy45MzI5OTY3MiA5LjUsNiBDOS41LDQuMDY3MDAzMjggNy45MzI5OTY3MiwyLjUgNiwyLjUgQzQuMDY3MDAzMjgsMi41IDIuNSw0LjA2NzAwMzI4IDIuNSw2IEMyLjUsNy45MzI5OTY3MiA0LjA2NzAwMzI4LDkuNSA2LDkuNSBaIE02LDkuNSIgaWQ9Ik92YWwtMTEiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiPjwvcGF0aD4KICAgICAgICAgICAgPHJlY3QgZD0iTTQuNSwxMSBMNC41LDE4IEw3LjUsMTggTDcuNSwxMSBMNC41LDExIFogTTQuNSwxMSIgaWQ9IlJlY3RhbmdsZS0xMjgiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiIHg9IjQuNSIgeT0iMTEiIHdpZHRoPSIzIiBoZWlnaHQ9IjciPjwvcmVjdD4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPg==")
        }

        .ymaps-2-1-29-button__icon_icon_routes {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjYiIGhlaWdodD0iMjYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iIzZCNkI2QiI+PHBhdGggZD0iTTEwIDE0aDQuNTA4YzEuOTI5IDAgMy40OTItMS41NzEgMy40OTItMy41IDAtMS45MzMtMS41NjYtMy41LTMuNDkyLTMuNWgtNC41MDh2Mmg0LjUwNGMuODE2IDAgMS40OTYuNjcyIDEuNDk2IDEuNSAwIC44MzQtLjY3IDEuNS0xLjQ5NiAxLjVoLTQuNTA0djJ6bTAgMCIvPjxwYXRoIGQ9Ik0xNSAxMmgtNC41MDhjLTEuOTI5IDAtMy40OTIgMS41NzEtMy40OTIgMy41IDAgMS45MzMgMS41NjYgMy41IDMuNDkyIDMuNWg0LjUwOHYtMmgtNC41MDRjLS44MTYgMC0xLjQ5Ni0uNjcyLTEuNDk2LTEuNSAwLS44MzQuNjctMS41IDEuNDk2LTEuNWg0LjUwNHYtMnptMCAwIi8+PHBhdGggZD0iTTE5IDIwYzEuMTA1IDAgMi0uODk1IDItMnMtLjg5NS0yLTItMi0yIC44OTUtMiAyIC44OTUgMiAyIDJ6bTAtMWMuNTUyIDAgMS0uNDQ4IDEtMXMtLjQ0OC0xLTEtMS0xIC40NDgtMSAxIC40NDggMSAxIDF6bTAgMCIvPjxwYXRoIGQ9Ik05IDEwYzEuMTA1IDAgMi0uODk1IDItMnMtLjg5NS0yLTItMi0yIC44OTUtMiAyIC44OTUgMiAyIDJ6bTAtMWMuNTUyIDAgMS0uNDQ4IDEtMXMtLjQ0OC0xLTEtMS0xIC40NDgtMSAxIC40NDggMSAxIDF6bTAgMCIvPjxwYXRoIGQ9Ik0xMy41NjggMjAuODA4bDIuODI4LTIuODI4LS43MDctLjcwNy0yLjgyOCAyLjgyOC43MDcuNzA3em0xLjQxNC0yLjgyOGwuNzA3LS43MDctMi4xMjEtMi4xMjEtLjcwNy43MDcgMi4xMjEgMi4xMjF6bTAgMCIvPjwvZz48L3N2Zz4=")
        }

        /**/
        .ymaps-2-1-29-button__text {
            position: relative;
            padding: 0 1em
        }

        @media all and (min-width: 0) {
            .ymaps-2-1-29-i-ua_inlinesvg_no button.ymaps-2-1-29-button .ymaps-2-1-29-button__text {
                line-height: 215.5% !important
            }
        }

        /**/
        .ymaps-2-1-29-button_disabled_yes {
            opacity: .6
        }

        /**/
        .ymaps-2-1-29-button_icon_only .ymaps-2-1-29-button__icon {
            margin-right: -12px
        }

        .ymaps-2-1-29-button_icon_only .ymaps-2-1-29-button__title {
            display: none !important
        }

        /**/
        @media all and (min-width: 0) {
            .ymaps-2-1-29-button_pressed_yes .ymaps-2-1-29-button__text {
                top: 1px
            }
        }

        /**/
        .ymaps-2-1-29-button_size_s {
            line-height: 28px;
            font-size: 13px
        }

        /**/
        .ymaps-2-1-29-button_theme_action {
            font-family: Arial, sans-serif
        }

        @media all and (min-width: 0) {
            .ymaps-2-1-29-button_theme_action {
                background: rgba(70, 47, 0, .54);
                background: -webkit-linear-gradient(top, rgba(96, 64, 0, .4) 0%, rgba(70, 47, 0, .54) 100%);
                background: -moz-linear-gradient(top, rgba(96, 64, 0, .4) 0%, rgba(70, 47, 0, .54) 100%);
                background: -o-linear-gradient(top, rgba(96, 64, 0, .4) 0%, rgba(70, 47, 0, .54) 100%);
                background: linear-gradient(to bottom, rgba(96, 64, 0, .4) 0%, rgba(70, 47, 0, .54) 100%);
                -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .07);
                box-shadow: 0 1px 0 rgba(0, 0, 0, .07);
                border-radius: 3px
            }

            .ymaps-2-1-29-button_theme_action:before {
                position: absolute;
                bottom: 1px;
                right: 1px;
                left: 1px;
                top: 1px;
                content: '';
                background: #ffdf60;
                background: -webkit-linear-gradient(top, #ffdf60 0, #fc0 100%);
                background: -moz-linear-gradient(top, #ffdf60 0, #fc0 100%);
                background: -o-linear-gradient(top, #ffdf60 0, #fc0 100%);
                background: linear-gradient(to bottom, #ffdf60 0, #fc0 100%);
                border-radius: 2px
            }

            .ymaps-2-1-29-button_focused_yes.ymaps-2-1-29-button_theme_action {
                -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .07), 0 0 6px 2px rgba(255, 204, 0, .7);
                box-shadow: 0 1px 0 rgba(0, 0, 0, .07), 0 0 6px 2px rgba(255, 204, 0, .7)
            }

            .ymaps-2-1-29-button_focused_yes.ymaps-2-1-29-button_theme_action:before {
                -moz-box-shadow: 0 0 0 1px rgba(193, 154, 0, .2);
                box-shadow: 0 0 0 1px rgba(193, 154, 0, .2)
            }

            .ymaps-2-1-29-button_pressed_yes.ymaps-2-1-29-button_theme_action {
                -moz-box-shadow: inset 0 2px 1px -1px rgba(0, 0, 0, .4), 0 1px 0 rgba(255, 255, 255, .2);
                box-shadow: inset 0 2px 1px -1px rgba(0, 0, 0, .4), 0 1px 0 rgba(255, 255, 255, .2)
            }

            .ymaps-2-1-29-button_pressed_yes.ymaps-2-1-29-button_theme_action:before {
                -moz-box-shadow: inset 0 1px 3px -1px rgba(0, 0, 0, .5);
                box-shadow: inset 0 1px 3px -1px rgba(0, 0, 0, .5)
            }

            .ymaps-2-1-29-button_theme_action, a.ymaps-2-1-29-button_theme_action.ymaps-2-1-29-button_hovered_yes {
                color: #333 !important
            }
        }

        @media all and (min-width: 0) {
            .ymaps-2-1-29-button_theme_action.ymaps-2-1-29-button_hovered_yes:before {
                background: #ffe681;
                background: -webkit-linear-gradient(top, rgba(255, 230, 129, 1) 0, rgba(255, 212, 40, 1) 100%);
                background: -moz-linear-gradient(top, rgba(255, 230, 129, 1) 0, rgba(255, 212, 40, 1) 100%);
                background: -o-linear-gradient(top, rgba(255, 230, 129, 1) 0, rgba(255, 212, 40, 1) 100%);
                background: linear-gradient(to bottom, rgba(255, 230, 129, 1) 0, rgba(255, 212, 40, 1) 100%)
            }
        }

        /**/
        .ymaps-2-1-29-button_theme_normal {
            font-family: Arial, sans-serif
        }

        @media all and (min-width: 0) {
            .ymaps-2-1-29-button_theme_normal {
                background: rgba(0, 0, 0, .4);
                background: -webkit-linear-gradient(top, rgba(0, 0, 0, .2) 0, rgba(0, 0, 0, .4) 100%);
                background: -moz-linear-gradient(top, rgba(0, 0, 0, .2) 0, rgba(0, 0, 0, .4) 100%);
                background: -o-linear-gradient(top, rgba(0, 0, 0, .2) 0, rgba(0, 0, 0, .4) 100%);
                background: linear-gradient(to bottom, rgba(0, 0, 0, .2) 0, rgba(0, 0, 0, .4) 100%);
                -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .07);
                box-shadow: 0 1px 0 rgba(0, 0, 0, .07);
                border-radius: 3px
            }

            .ymaps-2-1-29-button_theme_normal:before {
                position: absolute;
                bottom: 1px;
                right: 1px;
                left: 1px;
                top: 1px;
                content: '';
                background: #fff;
                background: -webkit-linear-gradient(top, #fff 0, #eee 100%);
                background: -moz-linear-gradient(top, #fff 0, #eee 100%);
                background: -o-linear-gradient(top, #fff 0, #eee 100%);
                background: linear-gradient(to bottom, #fff 0, #eee 100%);
                border-radius: 2px
            }

            .ymaps-2-1-29-button_focused_yes.ymaps-2-1-29-button_theme_normal {
                -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .07), 0 0 6px 2px rgba(255, 204, 0, .7);
                box-shadow: 0 1px 0 rgba(0, 0, 0, .07), 0 0 6px 2px rgba(255, 204, 0, .7)
            }

            .ymaps-2-1-29-button_focused_yes.ymaps-2-1-29-button_theme_normal:not(.ymaps-2-1-29-button_pressed_yes):before {
                -moz-box-shadow: 0 0 0 1px rgba(193, 154, 0, .2);
                box-shadow: 0 0 0 1px rgba(193, 154, 0, .2)
            }

            .ymaps-2-1-29-button_pressed_yes.ymaps-2-1-29-button_theme_normal {
                -moz-box-shadow: inset 0 2px 1px -1px rgba(0, 0, 0, .4), 0 1px 0 rgba(255, 255, 255, .2);
                box-shadow: inset 0 2px 1px -1px rgba(0, 0, 0, .4), 0 1px 0 rgba(255, 255, 255, .2)
            }

            .ymaps-2-1-29-button_pressed_yes.ymaps-2-1-29-button_theme_normal:before {
                -moz-box-shadow: inset 0 1px 3px -1px rgba(0, 0, 0, .5);
                box-shadow: inset 0 1px 3px -1px rgba(0, 0, 0, .5)
            }

            .ymaps-2-1-29-button_theme_normal, a.ymaps-2-1-29-button_theme_normal.ymaps-2-1-29-button_hovered_yes {
                color: #333 !important
            }
        }

        @media all and (min-width: 0) {
            .ymaps-2-1-29-button_theme_normal.ymaps-2-1-29-button_hovered_yes:before {
                background: #fff;
                background: -webkit-linear-gradient(top, rgba(255, 255, 255, 1) 0, rgba(246, 245, 243, 1) 100%);
                background: -moz-linear-gradient(top, rgba(255, 255, 255, 1) 0, rgba(246, 245, 243, 1) 100%);
                background: -o-linear-gradient(top, rgba(255, 255, 255, 1) 0, rgba(246, 245, 243, 1) 100%);
                background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0, rgba(246, 245, 243, 1) 100%)
            }
        }

        /**/
        .ymaps-2-1-29-button {
            position: relative;
            display: inline-block;
            margin: 0;
            padding: 0;
            outline: 0;
            text-align: center;
            white-space: nowrap;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        .ymaps-2-1-29-button::-moz-focus-inner {
            padding: 0;
            border: 0
        }

        @media all and (min-width: 0) {
            .ymaps-2-1-29-button {
                border: 0
            }

            a.ymaps-2-1-29-button:link, a.ymaps-2-1-29-button:hover, a.ymaps-2-1-29-button:visited {
                cursor: default;
                outline: hidden;
                text-decoration: none
            }
        }

        .ymaps-2-1-29-button {
            cursor: pointer;
            text-align: start
        }

        .ymaps-2-1-29-button.ymaps-2-1-29-button {
            box-sizing: border-box
        }

        .ymaps-2-1-29-button {
            vertical-align: top
        }

        .ymaps-2-1-29-button__text {
            display: block;
            overflow: hidden;
            vertical-align: top;
            text-overflow: ellipsis
        }

        .ymaps-2-1-29-button_size_s .ymaps-2-1-29-button__text {
            height: 28px
        }

        .ymaps-2-1-29-button_disabled_yes {
            cursor: auto
        }

        .ymaps-2-1-29-button_theme_normal.ymaps-2-1-29-button_checked_yes, .ymaps-2-1-29-button_theme_normal.ymaps-2-1-29-button_checked_yes.ymaps-2-1-29-button_hovered_yes {
            background: #ffeca6
        }

        .ymaps-2-1-29-button_theme_normal.ymaps-2-1-29-button_checked_yes:before, .ymaps-2-1-29-button_theme_normal.ymaps-2-1-29-button_checked_yes.ymaps-2-1-29-button_hovered_yes:before {
            background: #ffeca6
        }

        .ymaps-2-1-29-button_theme_normal.ymaps-2-1-29-button_checked_yes:after, .ymaps-2-1-29-button_theme_normal.ymaps-2-1-29-button_checked_yes.ymaps-2-1-29-button_hovered_yes:after {
            background: #333
        }

        .ymaps-2-1-29-button_theme_normal.ymaps-2-1-29-button_checked_yes .ymaps-2-1-29-button__text, .ymaps-2-1-29-button_theme_normal.ymaps-2-1-29-button_checked_yes.ymaps-2-1-29-button_hovered_yes .ymaps-2-1-29-button__text {
            top: 1px
        }

        .ymaps-2-1-29-button_theme_normal.ymaps-2-1-29-button_checked_yes, .ymaps-2-1-29-button_theme_normal.ymaps-2-1-29-button_checked_yes.ymaps-2-1-29-button_hovered_yes {
            background: -webkit-linear-gradient(top, rgba(255, 236, 166, .4) 0, rgba(255, 246, 213, .4) 100%);
            background: -moz-linear-gradient(top, rgba(255, 236, 166, .4) 0, rgba(255, 246, 213, .4) 100%);
            background: -o-linear-gradient(top, rgba(255, 236, 166, .4) 0, rgba(255, 246, 213, .4) 100%);
            background: linear-gradient(to bottom, rgba(255, 236, 166, .4) 0, rgba(255, 246, 213, .4) 100%);
            box-shadow: inset 0 1px 5px rgba(30, 23, 0, .7)
        }

        .ymaps-2-1-29-button_theme_normal.ymaps-2-1-29-button_checked_yes:before, .ymaps-2-1-29-button_theme_normal.ymaps-2-1-29-button_checked_yes.ymaps-2-1-29-button_hovered_yes:before {
            background: -webkit-linear-gradient(top, #ffeca6 0, #fff6d5 100%);
            background: -moz-linear-gradient(top, #ffeca6 0, #fff6d5 100%);
            background: -o-linear-gradient(top, #ffeca6 0, #fff6d5 100%);
            background: linear-gradient(to bottom, #ffeca6 0, #fff6d5 100%);
            -moz-box-shadow: inset 0 1px 3px -1px rgba(0, 0, 0, .5);
            box-shadow: inset 0 1px 3px -1px rgba(0, 0, 0, .5)
        }

        .ymaps-2-1-29-button_side_right, .ymaps-2-1-29-button_side_right:before {
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important
        }

        .ymaps-2-1-29-button_side_left, .ymaps-2-1-29-button_side_left:before {
            border-top-right-radius: 0 !important;
            border-bottom-right-radius: 0 !important
        }

        .ymaps-2-1-29-button_side_left:before {
            right: 0 !important
        }

        /**/
        .ymaps-2-1-29-zoom {
            position: relative;
            display: block;
            padding: 28px 0;
            width: 28px;
            height: 10px
        }

        .ymaps-2-1-29-zoom .ymaps-2-1-29-zoom__button {
            position: absolute;
            z-index: 1;
            display: block
        }

        .ymaps-2-1-29-zoom .ymaps-2-1-29-zoom__icon {
            margin-right: 1px;
            margin-left: 1px
        }

        .ymaps-2-1-29-zoom__plus {
            top: 0
        }

        .ymaps-2-1-29-zoom__minus {
            bottom: 0
        }

        .ymaps-2-1-29-zoom__scale {
            position: absolute;
            top: 27px;
            bottom: 27px;
            left: 11px;
            display: block;
            width: 4px;
            border-right: 1px solid rgba(0, 0, 0, .2);
            border-left: 1px solid rgba(0, 0, 0, .2);
            background: rgba(0, 0, 0, .07);
            box-shadow: inset 0 0 2px 0 rgba(0, 0, 0, .2)
        }

        .ymaps-2-1-29-zoom__runner {
            position: absolute;
            left: -12px;
            margin-top: 1px;
            width: 28px;
            height: 15px;
            line-height: 15px
        }

        .ymaps-2-1-29-zoom__runner__transition {
            -webkit-transition: top .3s;
            transition: top .3s
        }

        .ymaps-2-1-29-zoom .ymaps-2-1-29-button__icon_icon_runner {
            display: block;
            height: 13px
        }

        .ymaps-2-1-29-zoom__runner .ymaps-2-1-29-zoom__icon {
            background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMHB4IiBoZWlnaHQ9IjVweCIgdmlld0JveD0iMCAwIDEwIDUiIHZlcnNpb249IjEuMSI+PGcgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PHBhdGggZD0iTTAgMCBMMSAwIEwxIDEgTDAgMSBaIE0zIDAgTDQgMCBMNCAxIEwzIDEgWiBNNiAwIEw3IDAgTDcgMSBMNiAxIFogTTkgMCBMMTAgMCBMMTAgMSBMOSAxIFogTTAgMyBMMSAzIEwxIDQgTDAgNCBaIE0zIDMgTDQgMyBMNCA0IEwzIDQgWiBNNiAzIEw3IDMgTDcgNCBMNiA0IFogTTkgMyBMMTAgMyBMMTAgNCBMOSA0IFogTTkgMyIgZmlsbD0iIzY2NjY2NiIvPjxwYXRoIGQ9Ik0wIDEgTDEgMSBMMSAyIEwwIDIgWiBNMyAxIEw0IDEgTDQgMiBMMyAyIFogTTYgMSBMNyAxIEw3IDIgTDYgMiBaIE05IDEgTDEwIDEgTDEwIDIgTDkgMiBaIE0wIDQgTDEgNCBMMSA1IEwwIDUgWiBNMyA0IEw0IDQgTDQgNSBMMyA1IFogTTYgNCBMNyA0IEw3IDUgTDYgNSBaIE05IDQgTDEwIDQgTDEwIDUgTDkgNSBaIE05IDQiIGZpbGwtb3BhY2l0eT0iMC43NSIgZmlsbD0iI0ZGRkZGRiIvPjwvZz48L3N2Zz4=") center 6px no-repeat
        }

        .ymaps-2-1-29-zoom__minus .ymaps-2-1-29-zoom__icon {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjI2cHgiIGhlaWdodD0iMjZweCIgdmlld0JveD0iMCAwIDI2IDI2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDx0aXRsZT5NaW51czwvdGl0bGU+CiAgICA8ZGVzY3JpcHRpb24+Q3JlYXRlZCB3aXRoIFNrZXRjaCAoaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoKTwvZGVzY3JpcHRpb24+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBza2V0Y2g6dHlwZT0iTVNQYWdlIj4KICAgICAgICA8ZyBpZD0iU21hbGwiIHNrZXRjaDp0eXBlPSJNU0xheWVyR3JvdXAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDYuMDAwMDAwLCAtMjcuMDAwMDAwKSIgZmlsbD0iIzY2NjY2NiI+CiAgICAgICAgICAgIDxyZWN0IGQ9Ik0wLDM4IEwwLDQyIEwxNCw0MiBMMTQsMzggTDAsMzggWiBNMCwzOCIgaWQ9IlJlY3RhbmdsZS05OS1jb3B5IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIiB4PSIwIiB5PSIzOCIgd2lkdGg9IjE0IiBoZWlnaHQ9IjQiPjwvcmVjdD4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPg==")
        }

        .ymaps-2-1-29-zoom__plus .ymaps-2-1-29-zoom__icon {
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjI2cHgiIGhlaWdodD0iMjZweCIgdmlld0JveD0iMCAwIDI2IDI2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDx0aXRsZT5QbHVzPC90aXRsZT4KICAgIDxkZXNjcmlwdGlvbj5DcmVhdGVkIHdpdGggU2tldGNoIChodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gpPC9kZXNjcmlwdGlvbj4KICAgIDxkZWZzPjwvZGVmcz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHNrZXRjaDp0eXBlPSJNU1BhZ2UiPgogICAgICAgIDxnIGlkPSJTbWFsbCIgc2tldGNoOnR5cGU9Ik1TTGF5ZXJHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNi4wMDAwMDAsIDYuMDAwMDAwKSIgZmlsbD0iIzY2NjY2NiI+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik01LDkgTDAsOSBMMCw1IEw1LDUgTDUsLTcuMzQ3ODgwNzllLTE2IEw5LDAgTDksNSBMMTQsNSBMMTQsOSBMOSw5IEw5LDE0IEw1LDE0IEw1LDkgWiBNNSw5IiBpZD0iUmVjdGFuZ2xlLTk5LWNvcHktMyIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+")
        }

        .ymaps-2-1-29-zoom__runner__transition {
            -webkit-transition: top .3s;
            transition: top .3s
        }

        /**/
    </style>
</head>
<body class="b-page b-page_type_index inquire geo-stat b-page__body i-ua i-ua_interaction_yes i-global i-bem b-page_js_inited inquire_js_inited i-ua_platform_other i-ua_js_inited i-global_js_inited"
      data-bem="{&quot;b-page&quot;:{},&quot;inquire&quot;:{&quot;inquire&quot;:{&quot;top&quot;:&quot;.content__top a&quot;,&quot;btm&quot;:&quot;.info__ratatuy a&quot;},&quot;level&quot;:2,&quot;maxLevel&quot;:3},&quot;geo-stat&quot;:{},&quot;i-ua&quot;:{},&quot;i-global&quot;:{&quot;lang&quot;:&quot;ru&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;content-region&quot;:&quot;ru&quot;,&quot;click-host&quot;:&quot;//clck.yandex.ru&quot;,&quot;passport-host&quot;:&quot;https://passport.yandex.ru&quot;,&quot;pass-host&quot;:&quot;https://pass.yandex.ru&quot;,&quot;social-host&quot;:&quot;https://social.yandex.ru&quot;,&quot;export-host&quot;:&quot;https://export.yandex.ru&quot;,&quot;login&quot;:&quot;MustangXP&quot;,&quot;lego-static-host&quot;:&quot;//yastatic.net/lego/2.10-142&quot;,&quot;id&quot;:&quot;weather&quot;,&quot;host&quot;:&quot;https://pogoda.yandex.ru&quot;,&quot;user-region&quot;:&quot;ru&quot;,&quot;secret-key&quot;:&quot;yafd339789e7f51da41042bbfe20da711&quot;,&quot;retpath&quot;:&quot;https://pogoda.yandex.ru/vyksa/&quot;,&quot;social-retpath&quot;:&quot;https://pogoda.yandex.ru/social-broker__closer.html&quot;,&quot;uid&quot;:&quot;16370760&quot;,&quot;yu&quot;:&quot;1168825731435355130&quot;,&quot;rid&quot;:20040,&quot;urid&quot;:47,&quot;slug&quot;:&quot;vyksa&quot;,&quot;metrikaId&quot;:115080}}"
      data-interaction="pointer">
<div class="content">
    <div class="content__top clearfix">
        <div class="current-weather">
            <div class="current-weather__today">Сейчас <span class="current-weather__local-time"><?=date("H:i")?></span></div>
            <span class="current-weather__col current-weather__col_type_now t t_c_13"><i
                    class="icon icon_size_48 icon_thumb_<?=$city->fact->getIcon()?>" data-width="48"></i><span class="current-weather__comment">пасмурно</span><div
                    class="current-weather__thermometer current-weather__thermometer_type_now"><?=$city->fact->temperature?> °C
                </div></span><span class="current-weather__col current-weather__col_type_after t t_c_8"><span
                    class="current-weather__thermometer-name">ночью</span><i class="icon icon_thumb_<?=$city->getCurrentDay()->night->getIcon()?> icon_size_30"
                                                                             data-width="30"></i><div
                    class="current-weather__thermometer current-weather__thermometer_type_after"><?=$city->getCurrentDay()->night->temperature_avg?>
                </div></span><span class="current-weather__col current-weather__col_type_after t t_c_11"><span
                    class="current-weather__thermometer-name">днём</span><i class="icon icon_thumb_<?=$city->getCurrentDay()->day->getIcon()?> icon_size_30"
                                                                             data-width="30"></i><div
                    class="current-weather__thermometer current-weather__thermometer_type_after"><?=$city->getCurrentDay()->day->temperature_avg?>
                </div></span><span class="current-weather__col current-weather__info"><div class="current-weather__info-row">
                    <span class="current-weather__info-label">Восход: </span><?=$city->getCurrentDay()->sunrise?><span
                        class="current-weather__info-label current-weather__info-label_type_sunset">Закат: </span><?=$city->getCurrentDay()->sunset?>
                </div><div class="current-weather__info-row current-weather__info-row_type_wind"><span
                        class="current-weather__info-label">Ветер: </span> <span class="wind-speed"><?=$city->fact->wind_speed?> м/с</span> <abbr
                        class=" icon-abbr" title="Ветер: северо-восточный"><?=$city->fact->getWindDirection()?></abbr><i
                        class="icon icon_size_12 icon_wind_<?=$city->fact->wind_direction?> icon_wind" data-width="12"></i></div><div
                    class="current-weather__info-row"><span class="current-weather__info-label">Влажность: </span><?=$city->fact->humidity?>%
                </div><div class="current-weather__info-row"><span class="current-weather__info-label">Давление: </span><?=$city->fact->pressure?> мм
                    рт. ст.
                </div><div class="current-weather__info-row current-weather__info-row_type_time">Данные на <?=$city->fact->getObservationTime()?></div></span>

            <div class="current-weather__yesterday">Вчера в это время: <?=$city->yesterday->temperature?></div>
        </div>
    </div>
    <div class="forecasts">
        <div class="tabs-panes i-bem" data-bem="{&quot;tabs-panes&quot;:{&quot;id&quot;:&quot;forecasts&quot;}}">
            <div class="tabs-panes__pane tabs-panes__pane_active_yes" role="tabpanel" aria-labelledby="forecasts-tab-0"
                 aria-expanded="true">
                <ul class="forecast-brief forecast-item">
                    <?php

                    foreach ($city->days as $key => $day) {
                        echo <<<BLOCK
                    <li class="forecast-brief__item">
                        <div class="forecast-brief__item-date"><span
                                class="forecast-brief__item-dayname">завтра</span><span
                                class="forecast-brief__item-day">24 августа</span></div>
                        <div class="forecast-brief__item-description t t_c_17"><i
                                class="icon icon_thumb_bkn-d icon_size_30" data-width="30"></i>

                            <div class="forecast-brief__item-comment">облачно с прояснениями</div>
                            <div class="forecast-brief__item-temp-day" title="Максимальная температура днём">+17 днём
                            </div>
                        </div>
                        <div class="forecast-brief__item-temp-night t t_c_9" title="Минимальная температура ночью">+9
                            ночью
                        </div>
                    </li>
BLOCK;



                        if(\YandexWeather\Models\Day::CheckSaturday($key))
                            echo '<li class="forecast-brief__item forecast-brief__item_gap">&nbsp;</li>';

                    }

                    ?>
                    <!--<li class="forecast-brief__item">
                        <div class="forecast-brief__item-date"><span
                                class="forecast-brief__item-dayname">завтра</span><span
                                class="forecast-brief__item-day">24 августа</span></div>
                        <div class="forecast-brief__item-description t t_c_17"><i
                                class="icon icon_thumb_bkn-d icon_size_30" data-width="30"></i>

                            <div class="forecast-brief__item-comment">облачно с прояснениями</div>
                            <div class="forecast-brief__item-temp-day" title="Максимальная температура днём">+17 днём
                            </div>
                        </div>
                        <div class="forecast-brief__item-temp-night t t_c_9" title="Минимальная температура ночью">+9
                            ночью
                        </div>
                    </li>-->
                    <!--<li class="forecast-brief__item">
                        <div class="forecast-brief__item-date"><span class="forecast-brief__item-dayname">вт</span><span
                                class="forecast-brief__item-day">25</span></div>
                        <div class="forecast-brief__item-description t t_c_22"><i
                                class="icon icon_thumb_ovc icon_size_30" data-width="30"></i>

                            <div class="forecast-brief__item-comment">пасмурно</div>
                            <div class="forecast-brief__item-temp-day" title="Максимальная температура днём">+22</div>
                        </div>
                        <div class="forecast-brief__item-temp-night t t_c_12" title="Минимальная температура ночью">
                            +12
                        </div>
                    </li>
                    <li class="forecast-brief__item">
                        <div class="forecast-brief__item-date"><span class="forecast-brief__item-dayname">ср</span><span
                                class="forecast-brief__item-day">26</span></div>
                        <div class="forecast-brief__item-description t t_c_23"><i
                                class="icon icon_thumb_ovc icon_size_30" data-width="30"></i>

                            <div class="forecast-brief__item-comment">пасмурно</div>
                            <div class="forecast-brief__item-temp-day" title="Максимальная температура днём">+23</div>
                        </div>
                        <div class="forecast-brief__item-temp-night t t_c_12" title="Минимальная температура ночью">
                            +12
                        </div>
                    </li>
                    <li class="forecast-brief__item">
                        <div class="forecast-brief__item-date" title="День российского кино"><span
                                class="forecast-brief__item-dayname">чт</span><span
                                class="forecast-brief__item-day">27</span></div>
                        <div class="forecast-brief__item-description t t_c_23"><i
                                class="icon icon_thumb_ovc-ra icon_size_30" data-width="30"></i>

                            <div class="forecast-brief__item-comment">дождь</div>
                            <div class="forecast-brief__item-temp-day" title="Максимальная температура днём">+23</div>
                        </div>
                        <div class="forecast-brief__item-temp-night t t_c_13" title="Минимальная температура ночью">
                            +13
                        </div>
                    </li>
                    <li class="forecast-brief__item">
                        <div class="forecast-brief__item-date"><span class="forecast-brief__item-dayname">пт</span><span
                                class="forecast-brief__item-day">28</span></div>
                        <div class="forecast-brief__item-description t t_c_23"><i
                                class="icon icon_thumb_ovc icon_size_30" data-width="30"></i>

                            <div class="forecast-brief__item-comment">пасмурно</div>
                            <div class="forecast-brief__item-temp-day" title="Максимальная температура днём">+23</div>
                        </div>
                        <div class="forecast-brief__item-temp-night t t_c_14" title="Минимальная температура ночью">
                            +14
                        </div>
                    </li>
                    <li class="forecast-brief__item">
                        <div class="forecast-brief__item-date forecast-brief__item-date_weekend_yes"><span
                                class="forecast-brief__item-dayname">сб</span><span
                                class="forecast-brief__item-day">29</span></div>
                        <div class="forecast-brief__item-description t t_c_22"><i
                                class="icon icon_thumb_ovc-m-ra icon_size_30" data-width="30"></i>

                            <div class="forecast-brief__item-comment">пасмурно, небольшой дождь</div>
                            <div class="forecast-brief__item-temp-day" title="Максимальная температура днём">+22</div>
                        </div>
                        <div class="forecast-brief__item-temp-night t t_c_13" title="Минимальная температура ночью">
                            +13
                        </div>
                    </li>
                    <li class="forecast-brief__item">
                        <div class="forecast-brief__item-date forecast-brief__item-date_weekend_yes"
                             title="День шахтера"><span class="forecast-brief__item-dayname">вс</span><span
                                class="forecast-brief__item-day">30</span></div>
                        <div class="forecast-brief__item-description t t_c_20"><i
                                class="icon icon_thumb_ovc icon_size_30" data-width="30"></i>

                            <div class="forecast-brief__item-comment">пасмурно</div>
                            <div class="forecast-brief__item-temp-day" title="Максимальная температура днём">+20</div>
                        </div>
                        <div class="forecast-brief__item-temp-night t t_c_11" title="Минимальная температура ночью">
                            +11
                        </div>
                    </li>-->
                    <li class="forecast-brief__item forecast-brief__item_gap">&nbsp;</li>
                    <!--<li class="forecast-brief__item">
                        <div class="forecast-brief__item-date"><span class="forecast-brief__item-dayname">пн</span><span
                                class="forecast-brief__item-day">31 августа</span></div>
                        <div class="forecast-brief__item-description t t_c_17"><i
                                class="icon icon_thumb_ovc icon_size_30" data-width="30"></i>

                            <div class="forecast-brief__item-comment">пасмурно</div>
                            <div class="forecast-brief__item-temp-day" title="Максимальная температура днём">+17</div>
                        </div>
                        <div class="forecast-brief__item-temp-night t t_c_9" title="Минимальная температура ночью">+9
                        </div>
                    </li>
                    <li class="forecast-brief__item">
                        <div class="forecast-brief__item-date" title="День знаний"><span
                                class="forecast-brief__item-dayname">вт</span><span
                                class="forecast-brief__item-day">1</span></div>
                        <div class="forecast-brief__item-description t t_c_19"><i
                                class="icon icon_thumb_ovc icon_size_30" data-width="30"></i>

                            <div class="forecast-brief__item-comment">пасмурно</div>
                            <div class="forecast-brief__item-temp-day" title="Максимальная температура днём">+19</div>
                        </div>
                        <div class="forecast-brief__item-temp-night t t_c_10" title="Минимальная температура ночью">
                            +10
                        </div>
                    </li>-->
                </ul>
            </div>
            <div class="tabs-panes__pane" role="tabpanel" aria-labelledby="forecasts-tab-1" aria-expanded="false">
                <dl class="forecast-detailed forecast-item">
                    <dt class="forecast-detailed__day forecast-detailed__day_weekend"
                        title="День воинской славы России: Курская битва">
                        <small class="forecast-detailed__weekday">вс</small>
                        <strong class="forecast-detailed__day-number">23 <span class="forecast-detailed__day-month">августа</span></strong>
                    </dt>
                    <dd class="forecast-detailed__day-info forecast-detailed__day-info_first">
                        <table class="weather-table">
                            <thead class="weather-table__head">
                            <tr>
                                <th class="weather-table__head-cell" colspan="3"></th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Давление, <br>мм рт. ст.</div>
                                </th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Влажность</div>
                                </th>
                                <th class="weather-table__head-cell weather-table__head-cell_type_wind" colspan="2">
                                    <div class="weather-table__value">Ветер, м/с</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="weather-table__body">
                            <tr class="weather-table__row t t_c_20">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">утром</div>
                                    <div class="weather-table__temp">+12…+20</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_bkn-d"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">малооблачно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">755</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">83%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северо-восточный">СВ</abbr><i
                                            class="icon icon_size_12 icon_wind_ne icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">3,7</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_20">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">днём</div>
                                    <div class="weather-table__temp">+18…+20</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_skc-d"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">ясно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">755</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">63%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северный">С</abbr><i
                                            class="icon icon_size_12 icon_wind_n icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">4,3</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_18">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">вечером</div>
                                    <div class="weather-table__temp">+10…+18</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_skc-n"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">ясно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">756</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">56%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северный">С</abbr><i
                                            class="icon icon_size_12 icon_wind_n icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">4,3</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_9">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">ночью</div>
                                    <div class="weather-table__temp">+7…+9</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_skc-n"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">ясно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">758</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">76%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северо-восточный">СВ</abbr><i
                                            class="icon icon_size_12 icon_wind_ne icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">2,9</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="forecast-detailed__geomagnetic-field">
                            <small class="forecast-detailed__key">Магнитное поле:</small>
                            <div class="forecast-detailed__value">слабо возмущенное</div>
                        </div>
                        <div class="forecast-detailed__moon"><i class="icon icon_size_26 icon_moon_12" title=""
                                                                data-width="26"></i></div>
                        <div class="forecast-detailed__sunset">
                            <small class="forecast-detailed__key">Закат</small>
                            <div class="forecast-detailed__value">19:28</div>
                        </div>
                        <div class="forecast-detailed__sunrise">
                            <small class="forecast-detailed__key">Восход</small>
                            <div class="forecast-detailed__value">04:58</div>
                        </div>
                    </dd>
                    <dt class="forecast-detailed__day">
                        <small class="forecast-detailed__weekday">пн</small>
                        <strong class="forecast-detailed__day-number">24 <span class="forecast-detailed__day-month">августа</span></strong>
                    </dt>
                    <dd class="forecast-detailed__day-info">
                        <table class="weather-table">
                            <thead class="weather-table__head">
                            <tr>
                                <th class="weather-table__head-cell" colspan="3"></th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Давление, <br>мм рт. ст.</div>
                                </th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Влажность</div>
                                </th>
                                <th class="weather-table__head-cell weather-table__head-cell_type_wind" colspan="2">
                                    <div class="weather-table__value">Ветер, м/с</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="weather-table__body">
                            <tr class="weather-table__row t t_c_14">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">утром</div>
                                    <div class="weather-table__temp">+7…+14</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_bkn-d"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">облачно с прояснениями</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">759</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">65%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северный">С</abbr><i
                                            class="icon icon_size_12 icon_wind_n icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">2,8</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_17">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">днём</div>
                                    <div class="weather-table__temp">+15…+17</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_bkn-d"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">облачно с прояснениями</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">758</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">45%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северный">С</abbr><i
                                            class="icon icon_size_12 icon_wind_n icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">3,1</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_16">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">вечером</div>
                                    <div class="weather-table__temp">+10…+16</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_skc-n"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">ясно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">758</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">61%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северный">С</abbr><i
                                            class="icon icon_size_12 icon_wind_n icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">2,2</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_9">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">ночью</div>
                                    <div class="weather-table__temp">+9</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_skc-n"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">ясно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">757</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">74%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">2,6</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="forecast-detailed__geomagnetic-field">
                            <small class="forecast-detailed__key">Магнитное поле:</small>
                            <div class="forecast-detailed__value">слабо возмущенное</div>
                        </div>
                        <div class="forecast-detailed__moon"><i class="icon icon_size_26 icon_moon_13"
                                                                title="Растущая луна" data-width="26"></i></div>
                        <div class="forecast-detailed__sunset">
                            <small class="forecast-detailed__key">Закат</small>
                            <div class="forecast-detailed__value">19:25</div>
                        </div>
                        <div class="forecast-detailed__sunrise">
                            <small class="forecast-detailed__key">Восход</small>
                            <div class="forecast-detailed__value">05:00</div>
                        </div>
                    </dd>
                    <dt class="forecast-detailed__day">
                        <small class="forecast-detailed__weekday">вт</small>
                        <strong class="forecast-detailed__day-number">25 <span class="forecast-detailed__day-month">августа</span></strong>
                    </dt>
                    <dd class="forecast-detailed__day-info">
                        <table class="weather-table">
                            <thead class="weather-table__head">
                            <tr>
                                <th class="weather-table__head-cell" colspan="3"></th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Давление, <br>мм рт. ст.</div>
                                </th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Влажность</div>
                                </th>
                                <th class="weather-table__head-cell weather-table__head-cell_type_wind" colspan="2">
                                    <div class="weather-table__value">Ветер, м/с</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="weather-table__body">
                            <tr class="weather-table__row t t_c_13">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">утром</div>
                                    <div class="weather-table__temp">+8…+13</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_skc-d"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">ясно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">757</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">77%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">2,9</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_22">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">днём</div>
                                    <div class="weather-table__temp">+16…+22</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">755</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">47%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северо-западный">СЗ</abbr><i
                                            class="icon icon_size_12 icon_wind_nw icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">4,3</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_22">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">вечером</div>
                                    <div class="weather-table__temp">+15…+22</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">754</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">77%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">2,1</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_15">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">ночью</div>
                                    <div class="weather-table__temp">+12…+15</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">753</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">83%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">1,8</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="forecast-detailed__geomagnetic-field">&nbsp;</div>
                        <div class="forecast-detailed__moon"><i class="icon icon_size_26 icon_moon_13"
                                                                title="Растущая луна" data-width="26"></i></div>
                        <div class="forecast-detailed__sunset">
                            <small class="forecast-detailed__key">Закат</small>
                            <div class="forecast-detailed__value">19:23</div>
                        </div>
                        <div class="forecast-detailed__sunrise">
                            <small class="forecast-detailed__key">Восход</small>
                            <div class="forecast-detailed__value">05:02</div>
                        </div>
                    </dd>
                    <dt class="forecast-detailed__day">
                        <small class="forecast-detailed__weekday">ср</small>
                        <strong class="forecast-detailed__day-number">26 <span class="forecast-detailed__day-month">августа</span></strong>
                    </dt>
                    <dd class="forecast-detailed__day-info">
                        <table class="weather-table">
                            <thead class="weather-table__head">
                            <tr>
                                <th class="weather-table__head-cell" colspan="3"></th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Давление, <br>мм рт. ст.</div>
                                </th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Влажность</div>
                                </th>
                                <th class="weather-table__head-cell weather-table__head-cell_type_wind" colspan="2">
                                    <div class="weather-table__value">Ветер, м/с</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="weather-table__body">
                            <tr class="weather-table__row t t_c_18">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">утром</div>
                                    <div class="weather-table__temp">+10…+18</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">753</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">62%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">1,4</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_23">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">днём</div>
                                    <div class="weather-table__temp">+18…+23</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_bkn-d"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">малооблачно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">752</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">41%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">3,1</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_23">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">вечером</div>
                                    <div class="weather-table__temp">+16…+23</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_bkn-n"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">малооблачно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">751</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">66%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: юго-западный">ЮЗ</abbr><i
                                            class="icon icon_size_12 icon_wind_sw icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">2,1</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_16">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">ночью</div>
                                    <div class="weather-table__temp">+12…+16</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">750</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">81%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: юго-западный">ЮЗ</abbr><i
                                            class="icon icon_size_12 icon_wind_sw icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">2,8</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="forecast-detailed__geomagnetic-field">&nbsp;</div>
                        <div class="forecast-detailed__moon"><i class="icon icon_size_26 icon_moon_14"
                                                                title="Растущая луна" data-width="26"></i></div>
                        <div class="forecast-detailed__sunset">
                            <small class="forecast-detailed__key">Закат</small>
                            <div class="forecast-detailed__value">19:20</div>
                        </div>
                        <div class="forecast-detailed__sunrise">
                            <small class="forecast-detailed__key">Восход</small>
                            <div class="forecast-detailed__value">05:04</div>
                        </div>
                    </dd>
                    <dt class="forecast-detailed__day" title="День российского кино">
                        <small class="forecast-detailed__weekday">чт</small>
                        <strong class="forecast-detailed__day-number">27 <span class="forecast-detailed__day-month">августа</span></strong>
                    </dt>
                    <dd class="forecast-detailed__day-info">
                        <table class="weather-table">
                            <thead class="weather-table__head">
                            <tr>
                                <th class="weather-table__head-cell" colspan="3"></th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Давление, <br>мм рт. ст.</div>
                                </th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Влажность</div>
                                </th>
                                <th class="weather-table__head-cell weather-table__head-cell_type_wind" colspan="2">
                                    <div class="weather-table__value">Ветер, м/с</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="weather-table__body">
                            <tr class="weather-table__row t t_c_19">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">утром</div>
                                    <div class="weather-table__temp">+11…+19</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc-ra"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">дождь</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">750</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">67%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: юго-западный">ЮЗ</abbr><i
                                            class="icon icon_size_12 icon_wind_sw icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">1,7</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_23">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">днём</div>
                                    <div class="weather-table__temp">+19…+23</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">750</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">54%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">4,2</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_23">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">вечером</div>
                                    <div class="weather-table__temp">+17…+23</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc-m-ra"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно, небольшой дождь</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">751</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">80%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">3,1</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_17">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">ночью</div>
                                    <div class="weather-table__temp">+13…+17</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">751</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">84%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">2,8</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="forecast-detailed__geomagnetic-field">&nbsp;</div>
                        <div class="forecast-detailed__moon"><i class="icon icon_size_26 icon_moon_15"
                                                                title="Растущая луна" data-width="26"></i></div>
                        <div class="forecast-detailed__sunset">
                            <small class="forecast-detailed__key">Закат</small>
                            <div class="forecast-detailed__value">19:18</div>
                        </div>
                        <div class="forecast-detailed__sunrise">
                            <small class="forecast-detailed__key">Восход</small>
                            <div class="forecast-detailed__value">05:06</div>
                        </div>
                    </dd>
                    <dt class="forecast-detailed__day">
                        <small class="forecast-detailed__weekday">пт</small>
                        <strong class="forecast-detailed__day-number">28 <span class="forecast-detailed__day-month">августа</span></strong>
                    </dt>
                    <dd class="forecast-detailed__day-info">
                        <table class="weather-table">
                            <thead class="weather-table__head">
                            <tr>
                                <th class="weather-table__head-cell" colspan="3"></th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Давление, <br>мм рт. ст.</div>
                                </th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Влажность</div>
                                </th>
                                <th class="weather-table__head-cell weather-table__head-cell_type_wind" colspan="2">
                                    <div class="weather-table__value">Ветер, м/с</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="weather-table__body">
                            <tr class="weather-table__row t t_c_19">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">утром</div>
                                    <div class="weather-table__temp">+12…+19</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_bkn-d"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">облачно с прояснениями</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">752</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">67%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: юго-западный">ЮЗ</abbr><i
                                            class="icon icon_size_12 icon_wind_sw icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">1,7</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_23">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">днём</div>
                                    <div class="weather-table__temp">+19…+23</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">751</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">57%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">4,0</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_23">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">вечером</div>
                                    <div class="weather-table__temp">+19…+23</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">749</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">59%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: юго-западный">ЮЗ</abbr><i
                                            class="icon icon_size_12 icon_wind_sw icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">3,7</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_19">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">ночью</div>
                                    <div class="weather-table__temp">+14…+19</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">748</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">94%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">2,8</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="forecast-detailed__geomagnetic-field">&nbsp;</div>
                        <div class="forecast-detailed__moon"><i class="icon icon_size_26 icon_moon_15"
                                                                title="Растущая луна" data-width="26"></i></div>
                        <div class="forecast-detailed__sunset">
                            <small class="forecast-detailed__key">Закат</small>
                            <div class="forecast-detailed__value">19:15</div>
                        </div>
                        <div class="forecast-detailed__sunrise">
                            <small class="forecast-detailed__key">Восход</small>
                            <div class="forecast-detailed__value">05:08</div>
                        </div>
                    </dd>
                    <dt class="forecast-detailed__day forecast-detailed__day_weekend">
                        <small class="forecast-detailed__weekday">сб</small>
                        <strong class="forecast-detailed__day-number">29 <span class="forecast-detailed__day-month">августа</span></strong>
                    </dt>
                    <dd class="forecast-detailed__day-info">
                        <table class="weather-table">
                            <thead class="weather-table__head">
                            <tr>
                                <th class="weather-table__head-cell" colspan="3"></th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Давление, <br>мм рт. ст.</div>
                                </th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Влажность</div>
                                </th>
                                <th class="weather-table__head-cell weather-table__head-cell_type_wind" colspan="2">
                                    <div class="weather-table__value">Ветер, м/с</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="weather-table__body">
                            <tr class="weather-table__row t t_c_19">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">утром</div>
                                    <div class="weather-table__temp">+13…+19</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">747</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">78%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">3,5</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_22">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">днём</div>
                                    <div class="weather-table__temp">+19…+22</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc-m-ra"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно, небольшой дождь</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">745</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">63%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">5,0</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_22">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">вечером</div>
                                    <div class="weather-table__temp">+17…+22</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_bkn-n"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">облачно с прояснениями</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">745</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">72%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">3,6</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_17">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">ночью</div>
                                    <div class="weather-table__temp">+13…+17</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_bkn-n"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">облачно с прояснениями</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">745</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">84%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">3,9</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="forecast-detailed__geomagnetic-field">&nbsp;</div>
                        <div class="forecast-detailed__moon"><i class="icon icon_size_26 icon_moon_0" title="Полнолуние"
                                                                data-width="26"></i></div>
                        <div class="forecast-detailed__sunset">
                            <small class="forecast-detailed__key">Закат</small>
                            <div class="forecast-detailed__value">19:13</div>
                        </div>
                        <div class="forecast-detailed__sunrise">
                            <small class="forecast-detailed__key">Восход</small>
                            <div class="forecast-detailed__value">05:10</div>
                        </div>
                    </dd>
                    <dt class="forecast-detailed__day forecast-detailed__day_weekend" title="День шахтера">
                        <small class="forecast-detailed__weekday">вс</small>
                        <strong class="forecast-detailed__day-number">30 <span class="forecast-detailed__day-month">августа</span></strong>
                    </dt>
                    <dd class="forecast-detailed__day-info">
                        <table class="weather-table">
                            <thead class="weather-table__head">
                            <tr>
                                <th class="weather-table__head-cell" colspan="3"></th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Давление, <br>мм рт. ст.</div>
                                </th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Влажность</div>
                                </th>
                                <th class="weather-table__head-cell weather-table__head-cell_type_wind" colspan="2">
                                    <div class="weather-table__value">Ветер, м/с</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="weather-table__body">
                            <tr class="weather-table__row t t_c_18">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">утром</div>
                                    <div class="weather-table__temp">+12…+18</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_bkn-d"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">облачно с прояснениями</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">745</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">68%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северо-западный">СЗ</abbr><i
                                            class="icon icon_size_12 icon_wind_nw icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">4,6</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_20">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">днём</div>
                                    <div class="weather-table__temp">+18…+20</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">745</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">66%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: западный">З</abbr><i
                                            class="icon icon_size_12 icon_wind_w icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">5,8</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_19">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">вечером</div>
                                    <div class="weather-table__temp">+15…+19</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_bkn-n"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">облачно с прояснениями</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">747</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">85%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северный">С</abbr><i
                                            class="icon icon_size_12 icon_wind_n icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">3,4</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_15">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">ночью</div>
                                    <div class="weather-table__temp">+11…+15</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_bkn-n"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">облачно с прояснениями</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">748</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">56%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северо-западный">СЗ</abbr><i
                                            class="icon icon_size_12 icon_wind_nw icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">3,5</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="forecast-detailed__geomagnetic-field">&nbsp;</div>
                        <div class="forecast-detailed__moon"><i class="icon icon_size_26 icon_moon_0" title="Полнолуние"
                                                                data-width="26"></i></div>
                        <div class="forecast-detailed__sunset">
                            <small class="forecast-detailed__key">Закат</small>
                            <div class="forecast-detailed__value">19:10</div>
                        </div>
                        <div class="forecast-detailed__sunrise">
                            <small class="forecast-detailed__key">Восход</small>
                            <div class="forecast-detailed__value">05:12</div>
                        </div>
                    </dd>
                    <dt class="forecast-detailed__day">
                        <small class="forecast-detailed__weekday">пн</small>
                        <strong class="forecast-detailed__day-number">31 <span class="forecast-detailed__day-month">августа</span></strong>
                    </dt>
                    <dd class="forecast-detailed__day-info">
                        <table class="weather-table">
                            <thead class="weather-table__head">
                            <tr>
                                <th class="weather-table__head-cell" colspan="3"></th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Давление, <br>мм рт. ст.</div>
                                </th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Влажность</div>
                                </th>
                                <th class="weather-table__head-cell weather-table__head-cell_type_wind" colspan="2">
                                    <div class="weather-table__value">Ветер, м/с</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="weather-table__body">
                            <tr class="weather-table__row t t_c_15">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">утром</div>
                                    <div class="weather-table__temp">+9…+15</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">749</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">50%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северо-западный">СЗ</abbr><i
                                            class="icon icon_size_12 icon_wind_nw icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">3,9</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_17">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">днём</div>
                                    <div class="weather-table__temp">+15…+17</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">749</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">42%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северо-западный">СЗ</abbr><i
                                            class="icon icon_size_12 icon_wind_nw icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">4,2</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_17">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">вечером</div>
                                    <div class="weather-table__temp">+13…+17</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">750</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">52%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северо-западный">СЗ</abbr><i
                                            class="icon icon_size_12 icon_wind_nw icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">2,1</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_13">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">ночью</div>
                                    <div class="weather-table__temp">+9…+13</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">750</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">61%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северо-западный">СЗ</abbr><i
                                            class="icon icon_size_12 icon_wind_nw icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">2,2</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="forecast-detailed__geomagnetic-field">&nbsp;</div>
                        <div class="forecast-detailed__moon"><i class="icon icon_size_26 icon_moon_1"
                                                                title="Убывающая луна" data-width="26"></i></div>
                        <div class="forecast-detailed__sunset">
                            <small class="forecast-detailed__key">Закат</small>
                            <div class="forecast-detailed__value">19:08</div>
                        </div>
                        <div class="forecast-detailed__sunrise">
                            <small class="forecast-detailed__key">Восход</small>
                            <div class="forecast-detailed__value">05:14</div>
                        </div>
                    </dd>
                    <dt class="forecast-detailed__day" title="День знаний">
                        <small class="forecast-detailed__weekday">вт</small>
                        <strong class="forecast-detailed__day-number">1 <span class="forecast-detailed__day-month">сентября</span></strong>
                    </dt>
                    <dd class="forecast-detailed__day-info">
                        <table class="weather-table">
                            <thead class="weather-table__head">
                            <tr>
                                <th class="weather-table__head-cell" colspan="3"></th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Давление, <br>мм рт. ст.</div>
                                </th>
                                <th class="weather-table__head-cell">
                                    <div class="weather-table__value">Влажность</div>
                                </th>
                                <th class="weather-table__head-cell weather-table__head-cell_type_wind" colspan="2">
                                    <div class="weather-table__value">Ветер, м/с</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="weather-table__body">
                            <tr class="weather-table__row t t_c_15">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">утром</div>
                                    <div class="weather-table__temp">+8…+15</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">751</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">54%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северо-западный">СЗ</abbr><i
                                            class="icon icon_size_12 icon_wind_nw icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">3,1</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_19">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">днём</div>
                                    <div class="weather-table__temp">+15…+19</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">750</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">43%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: северо-западный">СЗ</abbr><i
                                            class="icon icon_size_12 icon_wind_nw icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">4,1</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_19">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">вечером</div>
                                    <div class="weather-table__temp">+13…+19</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_ovc"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">пасмурно</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">749</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">74%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: юго-западный">ЮЗ</abbr><i
                                            class="icon icon_size_12 icon_wind_sw icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">2,5</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            <tr class="weather-table__row t t_c_13">
                                <td class="weather-table__body-cell weather-table__body-cell_type_daypart">
                                    <div class="weather-table__daypart">ночью</div>
                                    <div class="weather-table__temp">+10…+13</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_icon">
                                    <div class="weather-table__value"><i class="icon icon_size_30 icon_thumb_bkn-n"
                                                                         data-width="30"></i></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_condition">
                                    <div class="weather-table__value">облачно с прояснениями</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_air-pressure">
                                    <div class="weather-table__value">747</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_humidity">
                                    <div class="weather-table__value">97%</div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind">
                                    <div class="weather-table__value"><abbr class=" icon-abbr"
                                                                            title="Ветер: юго-восточный">ЮВ</abbr><i
                                            class="icon icon_size_12 icon_wind_se icon_wind" data-width="12"></i><span
                                            class="weather-table__wind"><span class="wind-speed">2,4</span></span></div>
                                </td>
                                <td class="weather-table__body-cell weather-table__body-cell_type_wind-strength">
                                    <div class="weather-table__value"></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="forecast-detailed__geomagnetic-field">&nbsp;</div>
                        <div class="forecast-detailed__moon"><i class="icon icon_size_26 icon_moon_2"
                                                                title="Убывающая луна" data-width="26"></i></div>
                        <div class="forecast-detailed__sunset">
                            <small class="forecast-detailed__key">Закат</small>
                            <div class="forecast-detailed__value">19:05</div>
                        </div>
                        <div class="forecast-detailed__sunrise">
                            <small class="forecast-detailed__key">Восход</small>
                            <div class="forecast-detailed__value">05:15</div>
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>
<script src="./Прогноз погоды в Выксе на 10 дней — Яндекс.Погода_files/jquery.min.js"></script>
<script src="./Прогноз погоды в Выксе на 10 дней — Яндекс.Погода_files/_index.ru.js"></script>
<i class="b-statcounter"><i
        style="background: url(//www.tns-counter.ru/V13a****yandex_ru/ru/CP1251/tmsec=yandex_weather/281658677)"></i><i
        class="b-statcounter__metrika b-statcounter__metrika_type_js i-bem b-statcounter__metrika_js_inited"
        data-bem="{&quot;b-statcounter__metrika&quot;:{&quot;enableAll&quot;:true,&quot;webvisor&quot;:true,&quot;params&quot;:{&quot;experiments&quot;:{&quot;3605-rtb-425px&quot;:&quot;all&quot;},&quot;lang&quot;:&quot;ru&quot;,&quot;los_portal&quot;:false,&quot;los_level&quot;:&quot;2&quot;},&quot;id&quot;:115080}}">
        <noscript>&lt;img alt="" src="//mc.yandex.ru/watch/115080"/&gt;</noscript>
    </i></i>

<div class="tableau tableau_closed" style="width: 372px; top: -1px; left: -1px; height: 506px;">
    <div class="tableau__tail"></div>
    <iframe class="tableau__content" src="./Прогноз погоды в Выксе на 10 дней — Яндекс.Погода_files/tableau.html"
            frameborder="0" allowtransparency="true"></iframe>
</div>
</body>
</html>
