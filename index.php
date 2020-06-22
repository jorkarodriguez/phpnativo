
<?php 
    session_start();
    require_once('_C0nect10n.php');
    $conexion= _conectar();
    if(!isset($_COOKIE['tiempo'])){ 
        header('location: login.html');        
    }
 ?>


<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <link rel="icon"type="image/png" href="images\jorkablogicon.png">
    <title>JorkaBlog</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css\sidebar.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <style>
        html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{border:0;font-size:100%;font:inherit;vertical-align:baseline;margin:0;padding:0}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:none}table{border-collapse:collapse;border-spacing:0}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html,
body,
header {
	background-color: #111116; /* Black */
}

body {
  position: absolute;
  width: 100%;
  height: 100%;
  color: white;
  font-family: sans-serif;
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
}

.color-01 { color: #FF1461; } /* Red */
.color-02 { color: #FF7C72; } /* Orange */
.color-03 { color: #FBF38C; } /* Yellow */
.color-04 { color: #A6FF8F; } /* Citrus */
.color-05 { color: #18FF92; } /* Green */
.color-06 { color: #1CE2B2; } /* Darkgreen */
.color-07 { color: #5EF3FB; } /* Turquoise */
.color-08 { color: #61C3FF; } /* Lightblue */
.color-09 { color: #5A87FF; } /* Blue */
.color-10 { color: #8453E3; } /* Purple */
.color-11 { color: #C26EFF; } /* Lavender */
.color-12 { color: #FB89FB; } /* Pink */


body {
  opacity: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
body.ready {
  opacity: 1;
}
.logo-animation {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  margin-top: -40px;
}
.letters {
  position: relative;
  display: flex;
  width: 682px;
  height: 162px;
}
.letter {
  position: relative;
  width: 162px;
  height: 162px;
}
.letter:not(:first-child) {
  margin-left: -42px;
}
.letter-i {
  z-index: 1;
  width: 82px;
  transform-origin: 100% 50%;
}
.dot {
  position: absolute;
  width: 42px;
  height: 42px;
  transform: scale(0);
}
.dot-i {
  top: 0;
  left: 240px;
}
.dot-e {
  bottom: 0;
  right: 0;
}
.logo-icon {

  display: none;
  position: absolute;
  left: 230px;
  top: -10px;
  width: 222px;
  height: 62px;
}
.icon {
  width: 62px;
  height: 62px;
  opacity: 0;
}
.icon-text {
  position: absolute;
  top: 60px;
  left: 60px;
  width: 160px;
  height: 62px;
}
.icon-text path,
.icon-text polygon {
  opacity: 0;
}

    </style>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="active">
            <div class="sidebar-header" id="sidebarCollapse">
                <h3>Jorka Blog</h3>
                <strong>JB</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user"></i>
                        Perfil
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Actualizar</a>
                        </li>
                        <li>
                            <a href="#">Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-briefcase"></i>
                        Amigos
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
          


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="_DsconeCtar_.php">Cerrar sesion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="logo-animation">
  <div class="letters">
    <div class="letter letter-t">
      <svg viewBox="0 0 162 162">
        <g fill="none" fill-rule="evenodd" stroke="#5E89FB">
          <path class="fill in" stroke-width="40" d="M70 30 A20 20 0 1 0 50 50 A20 20 0 1 1 30 70"/>
          <path class="fill out" stroke-width="40" d="M70 30 A20 20 0 1 0 50 50 A20 20 0 1 1 30 70"/>
          <path class="line out" stroke-width="2"  d="M70 30 A20 20 0 1 0 50 50 A20 20 0 1 1 30 70"/>
        </g>
      </svg>
    </div>
    <div class="letter letter-n">
      <svg viewBox="0 0 162 162">
        <g fill="none" fill-rule="evenodd" stroke="#FB155A">
          <path class="fill in" stroke-width="40" d="M21 161V1"/>
          <path class="fill out" stroke-width="40" d="M21 1v160"/>
          <path class="fill in" stroke-width="40" d="M21 161V81c1-33.14 26.86-60 60-60a60 60 0 0 1 60 60v80"/>
          <path class="fill out" stroke-width="40" d="M141 161V81a60 60 0 0 0-60-60c-33.14 0-59 26.86-60 60v80"/>
          <path class="line out" stroke-width="2" d="M41 161V1H1v160h40z"/>
          <path class="line out" stroke-width="2" d="M1 161V80.4C2.35 36.27 37.2 1 81 1a80 80 0 0 1 80 80v80h-40V81a40 40 0 0 0-40-40c-21.7 0-39.18 17.59-40 40.33V161H1z"/>
        </g>
      </svg>
    </div>
    <div class="letter letter-i">
      <svg viewBox="0 0 82 162">
        <g fill="none" fill-rule="evenodd" stroke="#18FF92">
          <path class="fill in" stroke-width="40" d="M21 61v20a60 60 0 0 0 60 60"/>
          <path class="fill out" stroke-width="40" d="M81 141a60 60 0 0 1-60-60V61"/>
          <path class="line out" stroke-width="2" d="M81 121a40 40 0 0 1-40-40V61H1v20a80 80 0 0 0 80 80v-40z"/>
        </g>
      </svg>
    </div>
    <div class="letter letter-m-1">
      <svg viewBox="0 0 162 162">
        <g fill="none" fill-rule="evenodd" stroke="#5E89FB">
          <path class="fill in" stroke-width="40" d="M21 161V1"/>
          <path class="fill out" stroke-width="40" d="M21 1v160"/>
          <path class="fill in" stroke-width="40" d="M21 161V81c1-33.14 26.86-60 60-60a60 60 0 0 1 60 60v80"/>
          <path class="fill out" stroke-width="40" d="M141 161V81a60 60 0 0 0-60-60c-33.14 0-59 26.86-60 60v80"/>
          <path class="line out" stroke-width="2" d="M41 161V1H1v160h40z"/>
          <path class="line out" stroke-width="2" d="M1 161V80.4C2.35 36.27 37.2 1 81 1a80 80 0 0 1 80 80v80h-40V81a40 40 0 0 0-40-40c-21.7 0-39.18 17.59-40 40.33V161H1z"/>
        </g>
      </svg>
    </div>
    <div class="letter letter-m-2">
      <svg viewBox="0 0 162 162">
        <g fill="none" fill-rule="evenodd" stroke="#FB155A">
          <path class="fill in" stroke-width="40" d="M21 161V81c1-33.14 26.86-60 60-60a60 60 0 0 1 60 60v80"/>
          <path class="fill out" stroke-width="40" d="M141 161V81a60 60 0 0 0-60-60c-33.14 0-59 26.86-60 60v80"/>
          <path class="line out" stroke-width="2" d="M1 161V80.4C2.35 36.27 37.2 1 81 1a80 80 0 0 1 80 80v80h-40V81a40 40 0 0 0-40-40c-21.7 0-39.18 17.59-40 40.33V161H1z"/>
        </g>
      </svg>
    </div>
    <div class="letter letter-e">
      <svg viewBox="0 0 162 162">
        <g fill="none" fill-rule="evenodd" stroke="#18FF92">
          <path class="fill in" stroke-width="40" d="M81 101h60V81c-1-33.14-26.86-60-60-60a60 60 0 1 0 0 120"/>
          <path class="fill out" stroke-width="40" d="M81 141a60 60 0 1 1 0-120c33.14 0 59 26.86 60 60v20H81"/>
          <path class="line out" stroke-width="2" d="M81 81v40h80V80.7C159.66 36.27 124.8 1 81 1a80 80 0 1 0 0 160v-40a40 40 0 1 1 0-80c21.6 0 39.01 17.42 39.99 40H81z"/>
        </g>
      </svg>
    </div>
    <div class="logo-icon">
      <div class="icon">
        <svg viewBox="0 0 62 62">
          <g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
            <path class="icon-curve" stroke="#FF1554" d="M0 16a80.88 80.88 0 0 1 44 44"/>
            <path class="icon-line" stroke="#5E89FB" d="M4 0h54a2 2 0 0 1 2 2.01V58A2 2 0 0 1 58 60H2a2 2 0 0 1-2-2.01V2A2 2 0 0 1 2 0h2z"/>
            <rect width="40" height="40" x="10" y="10" stroke="#18FF92" rx="20"/>
          </g>
        </svg>
      </div>
      <div class="icon-text">
        <svg viewBox="0 0 160 62">
          <g fill="#FBF3FB" fill-rule="evenodd">
            <path d="M27.33 18h1.73l10.15 25.7h-1.69l-3.24-8.24H21.97l-3.28 8.24H17L27.33 18zm6.45 16.1l-5.51-14.55h-.07l-5.73 14.54h11.3z"/>
            <polygon points="51.334 18 53.314 18 69.55 41.58 69.622 41.58 69.622 18 71.206 18 71.206 43.704 69.334 43.704 52.99 19.944 52.918 19.944 52.918 43.704 51.334 43.704"/>
            <polygon points="86.027 18 87.611 18 87.611 43.704 86.027 43.704"/>
            <polygon points="102.433 18 104.701 18 114.745 41.94 114.817 41.94 124.753 18 127.021 18 127.021 43.704 125.437 43.704 125.437 19.944 125.365 19.944 115.573 43.704 113.989 43.704 104.089 19.944 104.017 19.944 104.017 43.704 102.433 43.704"/>
            <polygon points="141.843 18 159.123 18 159.123 19.368 143.427 19.368 143.427 29.664 158.187 29.664 158.187 31.032 143.427 31.032 143.427 42.336 159.303 42.336 159.303 43.704 141.843 43.704"/>
          </g>
        </svg>
      </div>
    </div>
    <div class="dot dot-i">
      <svg viewBox="0 0 42 42">
        <g fill="none" fill-rule="evenodd">
          <rect width="40" height="40" x="1" y="1" fill="#17F28C" rx="20"/>
        </g>
      </svg>
    </div>
    <div class="dot dot-e">
      <svg viewBox="0 0 42 42">
        <g fill="none" fill-rule="evenodd">
          <rect width="40" height="40" x="1" y="1" fill="#FFFFFF" rx="20"/>
        </g>
      </svg>
    </div>
  </div>
</div>

        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        /*
 2017 Julian Garnier
 Released under the MIT license
*/
var $jscomp$this=this;
(function(v,p){"function"===typeof define&&define.amd?define([],p):"object"===typeof module&&module.exports?module.exports=p():v.anime=p()})(this,function(){function v(a){if(!g.col(a))try{return document.querySelectorAll(a)}catch(b){}}function p(a){return a.reduce(function(a,d){return a.concat(g.arr(d)?p(d):d)},[])}function w(a){if(g.arr(a))return a;g.str(a)&&(a=v(a)||a);return a instanceof NodeList||a instanceof HTMLCollection?[].slice.call(a):[a]}function F(a,b){return a.some(function(a){return a===b})}
function A(a){var b={},d;for(d in a)b[d]=a[d];return b}function G(a,b){var d=A(a),c;for(c in a)d[c]=b.hasOwnProperty(c)?b[c]:a[c];return d}function B(a,b){var d=A(a),c;for(c in b)d[c]=g.und(a[c])?b[c]:a[c];return d}function S(a){a=a.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i,function(a,b,d,h){return b+b+d+d+h+h});var b=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(a);a=parseInt(b[1],16);var d=parseInt(b[2],16),b=parseInt(b[3],16);return"rgb("+a+","+d+","+b+")"}function T(a){function b(a,b,c){0>
c&&(c+=1);1<c&&--c;return c<1/6?a+6*(b-a)*c:.5>c?b:c<2/3?a+(b-a)*(2/3-c)*6:a}var d=/hsl\((\d+),\s*([\d.]+)%,\s*([\d.]+)%\)/g.exec(a);a=parseInt(d[1])/360;var c=parseInt(d[2])/100,d=parseInt(d[3])/100;if(0==c)c=d=a=d;else{var e=.5>d?d*(1+c):d+c-d*c,l=2*d-e,c=b(l,e,a+1/3),d=b(l,e,a);a=b(l,e,a-1/3)}return"rgb("+255*c+","+255*d+","+255*a+")"}function x(a){if(a=/([\+\-]?[0-9#\.]+)(%|px|pt|em|rem|in|cm|mm|ex|pc|vw|vh|deg|rad|turn)?/.exec(a))return a[2]}function U(a){if(-1<a.indexOf("translate"))return"px";
if(-1<a.indexOf("rotate")||-1<a.indexOf("skew"))return"deg"}function H(a,b){return g.fnc(a)?a(b.target,b.id,b.total):a}function C(a,b){if(b in a.style)return getComputedStyle(a).getPropertyValue(b.replace(/([a-z])([A-Z])/g,"$1-$2").toLowerCase())||"0"}function I(a,b){if(g.dom(a)&&F(V,b))return"transform";if(g.dom(a)&&(a.getAttribute(b)||g.svg(a)&&a[b]))return"attribute";if(g.dom(a)&&"transform"!==b&&C(a,b))return"css";if(null!=a[b])return"object"}function W(a,b){var d=U(b),d=-1<b.indexOf("scale")?
1:0+d;a=a.style.transform;if(!a)return d;for(var c=[],e=[],l=[],h=/(\w+)\((.+?)\)/g;c=h.exec(a);)e.push(c[1]),l.push(c[2]);a=l.filter(function(a,c){return e[c]===b});return a.length?a[0]:d}function J(a,b){switch(I(a,b)){case "transform":return W(a,b);case "css":return C(a,b);case "attribute":return a.getAttribute(b)}return a[b]||0}function K(a,b){var d=/^(\*=|\+=|-=)/.exec(a);if(!d)return a;b=parseFloat(b);a=parseFloat(a.replace(d[0],""));switch(d[0][0]){case "+":return b+a;case "-":return b-a;case "*":return b*
a}}function D(a){return g.obj(a)&&a.hasOwnProperty("totalLength")}function X(a,b){function d(c){c=void 0===c?0:c;return a.el.getPointAtLength(1<=b+c?b+c:0)}var c=d(),e=d(-1),l=d(1);switch(a.property){case "x":return c.x;case "y":return c.y;case "angle":return 180*Math.atan2(l.y-e.y,l.x-e.x)/Math.PI}}function L(a,b){var d=/-?\d*\.?\d+/g;a=D(a)?a.totalLength:a;if(g.col(a))b=g.rgb(a)?a:g.hex(a)?S(a):g.hsl(a)?T(a):void 0;else{var c=x(a);a=c?a.substr(0,a.length-c.length):a;b=b?a+b:a}b+="";return{original:b,
numbers:b.match(d)?b.match(d).map(Number):[0],strings:b.split(d)}}function Y(a,b){return b.reduce(function(b,c,e){return b+a[e-1]+c})}function M(a){return(a?p(g.arr(a)?a.map(w):w(a)):[]).filter(function(a,d,c){return c.indexOf(a)===d})}function Z(a){var b=M(a);return b.map(function(a,c){return{target:a,id:c,total:b.length}})}function aa(a,b){var d=A(b);if(g.arr(a)){var c=a.length;2!==c||g.obj(a[0])?g.fnc(b.duration)||(d.duration=b.duration/c):a={value:a}}return w(a).map(function(a,c){c=c?0:b.delay;
a=g.obj(a)&&!D(a)?a:{value:a};g.und(a.delay)&&(a.delay=c);return a}).map(function(a){return B(a,d)})}function ba(a,b){var d={},c;for(c in a){var e=H(a[c],b);g.arr(e)&&(e=e.map(function(a){return H(a,b)}),1===e.length&&(e=e[0]));d[c]=e}d.duration=parseFloat(d.duration);d.delay=parseFloat(d.delay);return d}function ca(a){return g.arr(a)?y.apply(this,a):N[a]}function da(a,b){var d;return a.tweens.map(function(c){c=ba(c,b);var e=c.value,l=J(b.target,a.name),h=d?d.to.original:l,h=g.arr(e)?e[0]:h,m=K(g.arr(e)?
e[1]:e,h),l=x(m)||x(h)||x(l);c.isPath=D(e);c.from=L(h,l);c.to=L(m,l);c.start=d?d.end:a.offset;c.end=c.start+c.delay+c.duration;c.easing=ca(c.easing);c.elasticity=(1E3-Math.min(Math.max(c.elasticity,1),999))/1E3;g.col(c.from.original)&&(c.round=1);return d=c})}function ea(a,b){return p(a.map(function(a){return b.map(function(b){var c=I(a.target,b.name);if(c){var d=da(b,a);b={type:c,property:b.name,animatable:a,tweens:d,duration:d[d.length-1].end,delay:d[0].delay}}else b=void 0;return b})})).filter(function(a){return!g.und(a)})}
function O(a,b,d){var c="delay"===a?Math.min:Math.max;return b.length?c.apply(Math,b.map(function(b){return b[a]})):d[a]}function fa(a){var b=G(ga,a),d=G(ha,a),c=Z(a.targets),e=[],g=B(b,d),h;for(h in a)g.hasOwnProperty(h)||"targets"===h||e.push({name:h,offset:g.offset,tweens:aa(a[h],d)});a=ea(c,e);return B(b,{children:[],animatables:c,animations:a,duration:O("duration",a,d),delay:O("delay",a,d)})}function n(a){function b(){return window.Promise&&new Promise(function(a){return Q=a})}function d(a){return f.reversed?
f.duration-a:a}function c(a){for(var b=0,c={},d=f.animations,e={};b<d.length;){var g=d[b],h=g.animatable,m=g.tweens;e.tween=m.filter(function(b){return a<b.end})[0]||m[m.length-1];e.isPath$1=e.tween.isPath;e.round=e.tween.round;e.eased=e.tween.easing(Math.min(Math.max(a-e.tween.start-e.tween.delay,0),e.tween.duration)/e.tween.duration,e.tween.elasticity);m=Y(e.tween.to.numbers.map(function(a){return function(b,c){c=a.isPath$1?0:a.tween.from.numbers[c];b=c+a.eased*(b-c);a.isPath$1&&(b=X(a.tween.value,
b));a.round&&(b=Math.round(b*a.round)/a.round);return b}}(e)),e.tween.to.strings);ia[g.type](h.target,g.property,m,c,h.id);g.currentValue=m;b++;e={isPath$1:e.isPath$1,tween:e.tween,eased:e.eased,round:e.round}}if(c)for(var k in c)E||(E=C(document.body,"transform")?"transform":"-webkit-transform"),f.animatables[k].target.style[E]=c[k].join(" ");f.currentTime=a;f.progress=a/f.duration*100}function e(a){if(f[a])f[a](f)}function g(){f.remaining&&!0!==f.remaining&&f.remaining--}function h(a){var h=f.duration,
l=f.offset,n=f.delay,P=f.currentTime,q=f.reversed,r=d(a),r=Math.min(Math.max(r,0),h);if(f.children){var p=f.children;if(r>=f.currentTime)for(var u=0;u<p.length;u++)p[u].seek(r);else for(u=p.length;u--;)p[u].seek(r)}r>l&&r<h?(c(r),!f.began&&r>=n&&(f.began=!0,e("begin")),e("run")):(r<=l&&0!==P&&(c(0),q&&g()),r>=h&&P!==h&&(c(h),q||g()));a>=h&&(f.remaining?(t=m,"alternate"===f.direction&&(f.reversed=!f.reversed)):(f.pause(),"Promise"in window&&(Q(),R=b()),f.completed||(f.completed=!0,e("complete"))),
k=0);e("update")}a=void 0===a?{}:a;var m,t,k=0,Q=null,R=b(),f=fa(a);f.reset=function(){var a=f.direction,b=f.loop;f.currentTime=0;f.progress=0;f.paused=!0;f.began=!1;f.completed=!1;f.reversed="reverse"===a;f.remaining="alternate"===a&&1===b?2:b;for(a=f.children.length;a--;)b=f.children[a],b.seek(b.offset),b.reset()};f.tick=function(a){m=a;t||(t=m);h((k+m-t)*n.speed)};f.seek=function(a){h(d(a))};f.pause=function(){var a=q.indexOf(f);-1<a&&q.splice(a,1);f.paused=!0};f.play=function(){f.paused&&(f.paused=
!1,t=0,k=d(f.currentTime),q.push(f),z||ja())};f.reverse=function(){f.reversed=!f.reversed;t=0;k=d(f.currentTime)};f.restart=function(){f.pause();f.reset();f.play()};f.finished=R;f.reset();f.autoplay&&f.play();return f}var ga={update:void 0,begin:void 0,run:void 0,complete:void 0,loop:1,direction:"normal",autoplay:!0,offset:0},ha={duration:1E3,delay:0,easing:"easeOutElastic",elasticity:500,round:0},V="translateX translateY translateZ rotate rotateX rotateY rotateZ scale scaleX scaleY scaleZ skewX skewY".split(" "),
E,g={arr:function(a){return Array.isArray(a)},obj:function(a){return-1<Object.prototype.toString.call(a).indexOf("Object")},svg:function(a){return a instanceof SVGElement},dom:function(a){return a.nodeType||g.svg(a)},str:function(a){return"string"===typeof a},fnc:function(a){return"function"===typeof a},und:function(a){return"undefined"===typeof a},hex:function(a){return/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(a)},rgb:function(a){return/^rgb/.test(a)},hsl:function(a){return/^hsl/.test(a)},col:function(a){return g.hex(a)||
g.rgb(a)||g.hsl(a)}},y=function(){function a(a,d,c){return(((1-3*c+3*d)*a+(3*c-6*d))*a+3*d)*a}return function(b,d,c,e){if(0<=b&&1>=b&&0<=c&&1>=c){var g=new Float32Array(11);if(b!==d||c!==e)for(var h=0;11>h;++h)g[h]=a(.1*h,b,c);return function(h){if(b===d&&c===e)return h;if(0===h)return 0;if(1===h)return 1;for(var m=0,k=1;10!==k&&g[k]<=h;++k)m+=.1;--k;var k=m+(h-g[k])/(g[k+1]-g[k])*.1,l=3*(1-3*c+3*b)*k*k+2*(3*c-6*b)*k+3*b;if(.001<=l){for(m=0;4>m;++m){l=3*(1-3*c+3*b)*k*k+2*(3*c-6*b)*k+3*b;if(0===l)break;
var n=a(k,b,c)-h,k=k-n/l}h=k}else if(0===l)h=k;else{var k=m,m=m+.1,f=0;do n=k+(m-k)/2,l=a(n,b,c)-h,0<l?m=n:k=n;while(1e-7<Math.abs(l)&&10>++f);h=n}return a(h,d,e)}}}}(),N=function(){function a(a,b){return 0===a||1===a?a:-Math.pow(2,10*(a-1))*Math.sin(2*(a-1-b/(2*Math.PI)*Math.asin(1))*Math.PI/b)}var b="Quad Cubic Quart Quint Sine Expo Circ Back Elastic".split(" "),d={In:[[.55,.085,.68,.53],[.55,.055,.675,.19],[.895,.03,.685,.22],[.755,.05,.855,.06],[.47,0,.745,.715],[.95,.05,.795,.035],[.6,.04,.98,
.335],[.6,-.28,.735,.045],a],Out:[[.25,.46,.45,.94],[.215,.61,.355,1],[.165,.84,.44,1],[.23,1,.32,1],[.39,.575,.565,1],[.19,1,.22,1],[.075,.82,.165,1],[.175,.885,.32,1.275],function(b,c){return 1-a(1-b,c)}],InOut:[[.455,.03,.515,.955],[.645,.045,.355,1],[.77,0,.175,1],[.86,0,.07,1],[.445,.05,.55,.95],[1,0,0,1],[.785,.135,.15,.86],[.68,-.55,.265,1.55],function(b,c){return.5>b?a(2*b,c)/2:1-a(-2*b+2,c)/2}]},c={linear:y(.25,.25,.75,.75)},e={},l;for(l in d)e.type=l,d[e.type].forEach(function(a){return function(d,
e){c["ease"+a.type+b[e]]=g.fnc(d)?d:y.apply($jscomp$this,d)}}(e)),e={type:e.type};return c}(),ia={css:function(a,b,d){return a.style[b]=d},attribute:function(a,b,d){return a.setAttribute(b,d)},object:function(a,b,d){return a[b]=d},transform:function(a,b,d,c,e){c[e]||(c[e]=[]);c[e].push(b+"("+d+")")}},q=[],z=0,ja=function(){function a(){z=requestAnimationFrame(b)}function b(b){var c=q.length;if(c){for(var d=0;d<c;)q[d]&&q[d].tick(b),d++;a()}else cancelAnimationFrame(z),z=0}return a}();n.version="2.0.2";
n.speed=1;n.running=q;n.remove=function(a){a=M(a);for(var b=q.length;b--;)for(var d=q[b],c=d.animations,e=c.length;e--;)F(a,c[e].animatable.target)&&(c.splice(e,1),c.length||d.pause())};n.getValue=J;n.path=function(a,b){var d=g.str(a)?v(a)[0]:a,c=b||100;return function(a){return{el:d,property:a,totalLength:d.getTotalLength()*(c/100)}}};n.setDashoffset=function(a){var b=a.getTotalLength();a.setAttribute("stroke-dasharray",b);return b};n.bezier=y;n.easings=N;n.timeline=function(a){var b=n(a);b.pause();
b.duration=0;b.add=function(a){b.children.forEach(function(a){a.began=!0;a.completed=!0});w(a).forEach(function(a){var c=b.duration,d=a.offset;a.autoplay=!1;a.offset=g.und(d)?c:K(d,c);b.seek(a.offset);a=n(a);a.duration>c&&(b.duration=a.duration);a.began=!0;b.children.push(a)});b.reset();b.seek(0);b.autoplay&&b.restart();return b};return b};n.random=function(a,b){return Math.floor(Math.random()*(b-a+1))+a};return n});

        var logoEl = document.querySelector('.logo-animation');
var pathEls = document.querySelectorAll('.logo-animation path:not(.icon-curve)');
var innerWidth = window.innerWidth;
var maxWidth = 740;
var logoScale = innerWidth <= maxWidth ? innerWidth / maxWidth : 1;
var logoTimeline = anime.timeline();

logoEl.style.transform = 'translateY(50px) scale('+logoScale+')';

for (var i = 0; i < pathEls.length; i++) {
  var el = pathEls[i];
  el.setAttribute('stroke-dashoffset', anime.setDashoffset(el));
}

logoTimeline
  .add({
  targets: '.dot-e',
  translateX: [
    { value: -600, duration: 520, delay: 200, easing: 'easeInQuart' },
    { value: [-100, 0], duration: 500, delay: 1000, easing: 'easeOutQuart' }
  ],
  scale: [
    { value: [0, 1], duration: 200, easing: 'easeOutBack' },
    { value: 0, duration: 20, delay: 500, easing: 'easeInQuart' },
    { value: 1, duration: 200, delay: 1000, easing: 'easeOutQuart' },
    { value: 0, duration: 400, delay: 500, easing: 'easeInBack' }
  ],
  offset: 0
})
  .add({
  targets: '.dot-i',
  translateY: { value: [-200, 0], duration: 500, elasticity: 400 },
  scale: [
    { value: [0, 1], duration: 100, easing: 'easeOutQuart' },
    { value: 0, duration: 400, delay: 1400, easing: 'easeInBack' }
  ],
  delay: 1200,
  offset: 0
})
  .add({
  targets: '.fill.in',
  strokeDashoffset: {
    value: [anime.setDashoffset, 0],
    duration: 600,
    delay: function(el, i, t) { return 700 + ( i * 100 ); },
    easing: 'easeOutQuart'
  },
  stroke: {
    value: ['#FFF', function(el) { return anime.getValue(el.parentNode, 'stroke') } ],
    duration: 500,
    delay: 500,
    easing: 'easeInQuad'
  },
  opacity: {
    value: 0,
    duration: 1,
    delay: function(el, i, t) { return 1900 + ( i * 80 ); },
  },
  offset: 0
})
  .add({
  targets: '.fill.out',
  strokeDashoffset: [
    { value: [anime.setDashoffset, anime.setDashoffset], duration: 1890 },
    {
      value: [0, anime.setDashoffset],
      duration: 800,
      delay: function(el, i) { return (i * 80); },
      easing: 'easeInQuart'
    }
  ],
  offset: 0
})
  .add({
  targets: '.line.out',
  strokeDashoffset: {
    value: [0, anime.setDashoffset],
    duration: 1200,
    delay: function(el, i, t) { return 2500 + ( i * 100 ); },
    easing: 'easeInQuart'
  },
  strokeWidth: {
    value: [0, 2],
    delay: function(el, i, t) { return 2000 + ( i * 100 ); },
    duration: 200,
    easing: 'linear'
  },
  offset: 0
})
  .add({
  targets: '.icon',
  opacity: { value: 1, duration: 10, delay: 2800, easing: 'linear' },
  translateY: { value: 60, duration: 800 },
  delay: 4200,
  offset: 0
})
  .add({
  targets: '.icon-line',
  strokeDashoffset: [
    { value: [anime.setDashoffset, anime.setDashoffset], duration: 3000 },
    { value: 0, duration: 1200, easing: 'easeInOutQuart' }
  ],
  strokeWidth: {
    value: [8, 2],
    delay: 3000,
    duration: 800,
    easing: 'easeInQuad'
  },
  stroke: {
    value: ['#FFF', function(el) { return anime.getValue(el, 'stroke') } ],
    duration: 800,
    delay: 3400,
    easing: 'easeInQuad'
  },
  offset: 0
})
  .add({
  targets: ['.icon-text path', '.icon-text polygon'],
  translateY: [50, 0],
  opacity: { value: [0, 1], duration: 100, easing: 'linear' },
  delay: function(el, i, t) { return 4200 + ( i * 20 ); },
  offset: 0
});
    </script>
</body>

</html>