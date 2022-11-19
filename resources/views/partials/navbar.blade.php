<div class="fixed z-20 py-3 navbar bg-base-100">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 active:stroke-primary" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </label>
      <ul tabindex="0" class="p-2 mt-3 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
        <li><a href="/">Home</a></li>
        <li tabindex="0">
          <a class="justify-between">
            Product
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24">
              <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
            </svg>
          </a>
          <ul class="p-2">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
          </ul>
        </li>
        <li><a href="/about">About</a></li>
        <li><a href="/about">Students</a></li>
      </ul>
    </div>
    <a class="text-xl normal-case btn btn-ghost hover:text-primary hover:bg-primary/10">laravUI</a>
  </div>
  <div class="hidden navbar-center lg:flex">
    <ul class="p-0 menu menu-horizontal">
      <li class="hover:rounded-md"><a href="/"
          class="{{ Request::is('/') ? 'visited:text-primary hover:bg-primary/10 font-semibold' : '' }}">Home</a></li>
      <li tabindex="0">
        <a>
          Product
          <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
            viewBox="0 0 24 24">
            <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
          </svg>
        </a>
        <ul class="p-2 rounded-md bg-base-100">
          <li><a>Submenu 1</a></li>
          <li><a>Submenu 2</a></li>
        </ul>
      </li>
      <li class="hover:rounded-md"><a href="/students"
          class="{{ Request::is('students') ? 'visited:text-primary hover:bg-primary/10 font-semibold' : '' }}">Students</a>
      </li>
      <li class="hover:rounded-md"><a href="/class"
          class="{{ Request::is('class') ? 'visited:text-primary hover:bg-primary/10 font-semibold' : '' }}">Class</a>
      </li>
      <li class="hover:rounded-md"><a href="/extracurricular"
          class="{{ Request::is('extracurricular') ? 'visited:text-primary hover:bg-primary/10 font-semibold' : '' }}">Extracurricular</a>
      </li>
      <li class="hover:rounded-md"><a href="/about"
          class="{{ Request::is('about') ? 'visited:text-primary hover:bg-primary/10 font-semibold' : '' }}">About</a>
      </li>

    </ul>
  </div>
  <div class="navbar-end">
    <a class="btn">Get started</a>
  </div>
</div>
