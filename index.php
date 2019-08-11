<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
<button id="menu-toggler" class="icon icon-menu" on="tap:menu.toggleClass(class='s1')"></button>
<nav id='menu'>
  <ul>
    <li class="nav-item"><a class="nav-link" href="/" rel="home">Home</a></li>
    <li class="nav-item has-submenu">
      <a class="nav-link" href="/services">Services</a>
      <button class="hidden" on="tap:menu1.toggleClass(class='s1')"></button>
      <ul id="menu1">
        <li><a href="">Link 1</a></li>
        <li><a href="">Link 2</a></li>
      </ul>
    </li>
    <li class="nav-item has-submenu">
      <a class="nav-link" href="/about">About</a>
      <button class="hidden" on="tap:menu2.toggleClass(class='s1')"></button>
      <ul id="menu1">
        <li><a href="">Link 1</a></li>
        <li><a href="">Link 2</a></li>
      </ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
  </ul>
</nav>
