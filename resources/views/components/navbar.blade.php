<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <!-- Container wrapper -->
  <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link">Home</a>
      </li>
    </ul>
    @auth
    <span>Ciao, {{ Auth::user()->name }}</span>
    <ul class="dropdown-menu">
      <li>
        <a href="#" class="dropdown-item"
        onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
      </li>
      <form action="{{ route('logout') }}" method="POST" id="form-logout">@csrf</form>
    </ul>
    @else
    <span>Ciao, utente!</span>
    
    <!-- Left links -->
    
    <div class="d-flex align-items-center">
      
      <a href="{{ route('login') }}" class="btn btn-link px-3 me-2 link-offset-2 link-underline link-underline-opacity-0">Login</a> 
      
      <a href="{{ route('register') }}" class="btn btn-primary me-3">Registrati</a> 
      
      
    </div>
    @endauth
  </div>
  <!-- Collapsible wrapper -->
</div>
<!-- Container wrapper -->
</nav>
<!-- Navbar -->