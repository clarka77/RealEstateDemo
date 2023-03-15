<?php
/**
 * 403
 *
 * The custom template for displaying 403 pages (forbidden)
 * based on 403 Page by Clara Beyer
 * php version 8.1.12
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Real_Estate_Demo
 * @author     Clark Alford <clark@clarka.me>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @since      1.0.0
 */
?>
<!DOCTYPE html>
<html lang="en-US">
 <head>
    <meta name="robots" content="noindex, nofollow">
    <title>Forbidden! | Halt!</title>
    <style>
  @import url("https://fonts.googleapis.com/css?family=Roboto+Condensed:700");
  html {
    height: 100%;
  }

  body {
    min-height: 100%;
    background-color: #111111;
    font-family: "Roboto Condensed";
    text-transform: uppercase;
    overflow: hidden;
  }

  .police-tape {
    background-color: #e2bb2d;
    background: linear-gradient(180deg, #eed887 0%, #e2bb2d 5%, #e2bb2d 90%, #e5c243 95%, #0e0b02 100%);
    padding: 0.125em;
    font-size: 3em;
    text-align: center;
    white-space: nowrap;
  }

  .police-tape--1 {
    transform: rotate(10deg);
    position: absolute;
    top: 40%;
    left: -5%;
    right: -5%;
    z-index: 2;
    margin-top: 0;
  }

  .police-tape--2 {
    transform: rotate(-8deg);
    position: absolute;
    top: 50%;
    left: -5%;
    right: -5%;
  }

  .ghost {
    display: flex;
    justify-content: stretch;
    flex        @import 'https://fonts.googleapis.com/css?family=Inconsolata';

        html {
        min-height: 100%;
        }

        body {
        box-sizing: border-box;
        height: 100%;
        background-color: #000000;
        background-image: radial-gradient(#11581E, #041607), url("https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif");
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Inconsolata', Helvetica, sans-serif;
        font-size: 1.5rem;
        color: rgba(128, 255, 128, 0.8);
        text-shadow:
                0 0 1ex rgba(51, 255, 51, 1),
                0 0 2px rgba(255, 255, 255, 0.8);
        }

        .noise {
        pointer-events: none;
        position: absolute;
        width: 100%;
        height: 100%;
        background-image: url("https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif");
        background-repeat: no-repeat;
        background-size: cover;
        z-index: -1;
        opacity: .02;
        }

        .overlay {
        pointer-events: none;
        position: absolute;
        width: 100%;
        height: 100%;
        background:
                repeating-linear-gradient(
                180deg,
                rgba(0, 0, 0, 0) 0,
                rgba(0, 0, 0, 0.3) 50%,
                rgba(0, 0, 0, 0) 100%);
        background-size: auto 4px;
        z-index: 1;
        }

        .overlay::before {
        content: "";
        pointer-events: none;
        position: absolute;
        display: block;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(
                0deg,
                transparent 0%,
                rgba(32, 128, 32, 0.2) 2%,
                rgba(32, 128, 32, 0.8) 3%,
                rgba(32, 128, 32, 0.2) 3%,
                transparent 100%);
        background-repeat: no-repeat;
        animation: scan 7.5s linear 0s infinite;
        }

        @keyframes scan {
        0%        { background-position: 0 -100vh; }
        35%, 100% { background-position: 0 100vh; }
        }

        .terminal {
        box-sizing: inherit;
        position: absolute;
        height: 100%;
        width: 1000px;
        max-width: 100%;
        padding: 4rem;
        text-transform: uppercase;
        }

        .output {
        color: rgba(128, 255, 128, 0.8);
        text-shadow:
                0 0 1px rgba(51, 255, 51, 0.4),
                0 0 2px rgba(255, 255, 255, 0.8);
        }

        .output::before {
        content: "> ";
        }

        /*
        .input {
        color: rgba(192, 255, 192, 0.8);
        text-shadow:
                0 0 1px rgba(51, 255, 51, 0.4),
                0 0 2px rgba(255, 255, 255, 0.8);
        }

        .input::before {
        content: "$ ";
        }
        */

        a {
        color: #fff;
        text-decoration: none;
        }

        a::before {
        content: "[";
        }

        a::after {
        content: "]";
        }

        .errorcode {
        color: white;
        }-direction: column;
    height: 100vh;
  }

  .ghost--columns {
    display: flex;
    flex-grow: 1;
    flex-basis: 200px;
    align-content: stretch;
  }

  .ghost--navbar {
    flex: 0 0 60px;
    background: linear-gradient(0deg, #27292d 0px, #27292d 10px, transparent 10px);
    border-bottom: 2px solid #111111;
  }

  .ghost--column {
    flex: 1 0 30%;
    border-width: 0px;
    border-style: solid;
    border-color: #27292d;
    border-left-width: 10px;
    background-color: #191a1d;
  }
  .ghost--column:nth-child(1) .code:nth-child(1) {
    margin-left: 2em;
  }
  .ghost--column:nth-child(1) .code:nth-child(2) {
    margin-left: 2em;
  }
  .ghost--column:nth-child(1) .code:nth-child(3) {
    margin-left: 3.5em;
  }
  .ghost--column:nth-child(1) .code:nth-child(4) {
    margin-left: 5.5em;
  }
  .ghost--column:nth-child(2) .code:nth-child(1) {
    margin-left: 2.5em;
  }
  .ghost--column:nth-child(2) .code:nth-child(2) {
    margin-left: 3em;
  }
  .ghost--column:nth-child(2) .code:nth-child(3) {
    margin-left: 5em;
  }
  .ghost--column:nth-child(2) .code:nth-child(4) {
    margin-left: 2em;
  }
  .ghost--column:nth-child(3) .code:nth-child(1) {
    margin-left: 4em;
  }
  .ghost--column:nth-child(3) .code:nth-child(2) {
    margin-left: 1.5em;
  }
  .ghost--column:nth-child(3) .code:nth-child(3) {
    margin-left: 5em;
  }
  .ghost--column:nth-child(3) .code:nth-child(4) {
    margin-left: 3em;
  }

  .ghost--main {
    background-color: #111111;
    border-top: 15px solid #303338;
    flex: 1 0 100px;
  }

  .code {
    display: block;
    width: 100px;
    background-color: #27292d;
    height: 1em;
    margin: 1em;
  }

  .ghost--main .code {
    height: 2em;
    width: 200px;
  }
    </style>
 </head>
 <body>
   <div class="ghost">

   <div class="ghost--navbar"></div>
     <div class="ghost--columns">
       <div class="ghost--column">
         <div class="code"></div>
         <div class="code"></div>
         <div class="code"></div>
         <div class="code"></div>
       </div>
       <div class="ghost--column">
         <div class="code"></div>
         <div class="code"></div>
         <div class="code"></div>
         <div class="code"></div>
       </div>
       <div class="ghost--column">
         <div class="code"></div>
         <div class="code"></div>
         <div class="code"></div>
         <div class="code"></div>
       </div>

     </div>
     <div class="ghost--main">
       <div class="code"></div>
       <div class="code"></div>

     </div>

   </div>

   <h1 class="police-tape police-tape--1">
     &nbsp;&nbsp;&nbsp;&nbsp;Error: 403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: 403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: 403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: 403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: 403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: 403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: 403
   </h1>
   <h1 class="police-tape police-tape--2">Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
 </body>

</html>
