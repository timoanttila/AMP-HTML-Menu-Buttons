# AMP-HTML-Menu-Buttons
A guide how to create responsive multi-level menu with Google AMP HTML.

## Add this to inside the head section:
```
<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
```

## More about AMP Bind:

https://amp.dev/documentation/components/amp-bind/

## Basic example how to make simple multi-level menu with AMP HTML
```
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
```
## Why not AMP Sidebar

I like to have my AMP pages look good for all the devices and most of the websites use normal navigation menu and not responsive one / open after pressing the button. [AMP Sidebar](https://amp.dev/documentation/components/amp-sidebar/) is great, but it has to be hidden by default. That's very good for mobile only.
