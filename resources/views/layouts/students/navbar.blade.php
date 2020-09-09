<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    
    <div class="navbar-nav ml-auto">
       <li class="nav-item dropdown">

        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"><span class="fi-account-logout" >
            {{ __('Logout') }}
            </span>
            </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </li>
      </div>

    <!-- Right navbar links -->
   
  </nav>