
@php
    $currentRoute = Route::currentRouteName();
@endphp

<nav class="sidebar sidebar-offcanvas" id="sidebar">

  <ul class="nav">

  <!-- User -->

    <li class="nav-item" style="pointer-events: none;" >
      <a class="nav-link" href="" >
        <span class="menu-title">User</span>
      </a>
    </li>
    
    <li class="nav-item active{{ $currentRoute == 'dashboard' ? 'active' : '' }} ">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item active{{ $currentRoute == 'complainant.index' ? 'active' : '' }} ">
      <a class="nav-link" href="{{ route('complainant.index') }}">
      <i class="icon-columns menu-icon"></i>
        <span class="menu-title">Complainant</span>
      </a>
    </li>


<!-- Nodal -->


    <li class="nav-item" style="pointer-events: none;" >
      <a class="nav-link" href="" >
        <span class="menu-title">Nodal</span>
      </a>
    </li>

    <li class="nav-item active{{ $currentRoute == 'nodal.dashboard' ? 'active' : '' }} ">
      <a class="nav-link" href="{{ route('nodal.dashboard') }}">
      <i class="icon-columns menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item active{{ $currentRoute == 'nodal.complainant.index' ? 'active' : '' }} ">
      <a class="nav-link" href="{{ route('nodal.complainant.index') }}">
      <i class="icon-columns menu-icon"></i>
        <span class="menu-title">Complainant</span>
      </a>
    </li>


<!-- FTO -->



    <li class="nav-item" style="pointer-events: none;" >
      <a class="nav-link" href="" >
        <span class="menu-title">FTO</span>
      </a>
    </li>

    <li class="nav-item active{{ $currentRoute == 'fco.dashboard' ? 'active' : '' }} ">
      <a class="nav-link" href="{{ route('fco.dashboard') }}">
      <i class="icon-columns menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    
    <li class="nav-item active{{ $currentRoute == 'fco.complainant.index' ? 'active' : '' }} ">
      <a class="nav-link" href="{{route('fco.complainant.index')}}">
      <i class="icon-grid-2 menu-icon"></i>
        <span class="menu-title">FTO Complainant</span>
      </a>
    </li>

  </ul>
</nav>