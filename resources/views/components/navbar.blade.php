<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <ul class="navbar-nav me-5 pe-5">
      <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link">Home</a>
      </li>
    </ul>
    <span class="logo text-danger ms-3 fs-2">Linda's Blog</span>
   @auth
<div class="dropdown me-3">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Ciao, {{ Auth::user()->name }}
  </a>
  <ul class="dropdown-menu dropdown-menu-end">
    <li>
      <a href="{{ route('create.article') }}" class="dropdown-item">Crea articolo</a>
    </li>
    <li>
      <a href="#" class="dropdown-item"
      onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
    </li>
  </ul>
  <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">@csrf</form>
</div>
@else
    
    <!-- Left links -->
    
    <div class="d-flex align-items-center">
      
      <a href="{{ route('login') }}" class="btn btn-link me-2 link-offset-2 link-underline link-underline-opacity-0">Login</a> 
      
      <a href="{{ route('register') }}" class="btn btn-primary">Registrati</a> 
      
      
    </div>
    @endauth
  </div>
  <!-- Collapsible wrapper -->
</div>
<!-- Container wrapper -->
</nav>
<!-- Navbar -->

