<!doctype html>
<html amp lang="en">
<head><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<title><?= $title_head ?></title>
<meta name="format-detection" content="telephone=no">
<link rel="icon" type="image/png" href="https://timoanttila.com/favicon.png">
<link rel="icon" href="https://timoanttila.com/favicon.ico" type="image/x-icon">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<style amp-custom>
  .hidden,
  .submenu { display: none }
  .nav-item:hover .submenu,
  .submenu.show,
  #menu a { display: block }
  .nav-item { position: relative }
  @media screen and (min-width:1200px){
    .submenu {
      position: absolute;
      top: 100%;
      left: 0;
      min-width: 100%;
      z-index: 100
  }
  @media screen and (max-width:1200px){
    .hidden {
      display: block;
      width: 42px;
      height: 42px;
      position: absolute;
      top: 0;
      right: 0;
      z-index: 120
    }
    #menu a {
      padding: 10px 15px;
      border-top: 1px solid rgba(255,255,255,.2)
    }
    #menu li li a {
      padding-left: 45px;
    }
  }
</style>
<link rel="canonical" href="realurl">
</head><body>

<button id="menu-toggler" class="icon icon-menu" on="tap:menu.toggleClass(class='show')"></button>
<nav id='menu'>
  <ul>
    <li class="nav-item"><a class="nav-link" href="/" rel="home">Home</a></li>
    <li class="nav-item has-submenu">
      <a class="nav-link" href="/services">Services</a>
      <button class="hidden" on="tap:menu1.toggleClass(class='show')"></button>
      <ul id="menu1" class="submenu">
        <li><a href="">Link 1</a></li>
        <li><a href="">Link 2</a></li>
      </ul>
    </li>
    <li class="nav-item has-submenu">
      <a class="nav-link" href="/about">About</a>
      <button class="hidden" on="tap:menu2.toggleClass(class='show')"></button>
      <ul id="menu2" class="submenu">
        <li><a href="">Link 1</a></li>
        <li><a href="">Link 2</a></li>
      </ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
  </ul>
</nav>

</body></html>
