<nav id="sidebar">
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
  <i class="fa fa-bars"></i>
  <span class="sr-only">Toggle Menu</span>
</button>
</div>
    <div class="p-4 pt-5">
      <h1><a href="/" class="logo">LIBRARY</a></h1>
<ul class="list-unstyled components mb-5">
    <li>
        <a href="/">Home</a>
    </li>
  <li>
      <a href="/students">Students</a>
  </li>
  <li>
  <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Books</a>
  <ul class="collapse list-unstyled" id="pageSubmenu">
    <li>
        <a href="/books">Inventory</a>
    </li>
    <li>
        <a href="#">Borrows</a>
    </li>
    <li>
        <a href="#">Request</a>
    </li>
  </ul>
  </li>
    <li class="active">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Generate</a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
        <li>
            <a href="#">Student ID</a>
        </li>
        <li>
            <a href="{{ url('students_list') }}" target="_blank">Student List</a>
        </li>
        <li>
            <a href="#">Student Login/Logout</a>
        </li>
        </ul>
    </li>
  <li>
  <a href="#">Evaluation</a>
  </li>
  <li>
  <a href="{{ url('about') }}">About</a>
  </li>
</ul>


</div>
</nav>