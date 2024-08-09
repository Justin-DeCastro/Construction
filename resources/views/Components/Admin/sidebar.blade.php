<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="/" class="logo">
          <img
            src=""
            alt="navbar brand"
            class="navbar-brand"
            height="50"
          />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
          
          
          </li>
      <div class="sidebar-content">
        <ul class="nav nav-secondary">

       

          <li class="nav-item">
            <a href="{{ route('dashboard') }}">
                <i class="fas fa-briefcase"></i>
                <p>Dashboard</p>
            </a>
             <a href="{{ route('getappointment') }}">
                <i class="fas fa-building"></i>

                <p>Appointment</p>
            </a>
            <a href="{{ route('getquotation') }}">
            <i class="fas fa-briefcase"></i>

                <p>Quotation</p>
            </a>
             <a href="{{ route('getservices') }}">
                <i class="fas fa-user-alt"></i>
                <p>Our Services</p>
            </a>
              
            
              <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="collapse" data-target="#manageUpdatesMenu" aria-expanded="false" aria-controls="manageUpdatesMenu">
    <i class="fas fa-cogs"></i> <!-- Using a sync icon to represent updates -->
    <p>Manage Services</p>
</a>

          <div id="manageUpdatesMenu" class="collapse">
            <ul class="nav nav-submenu">
              <li class="nav-item">
                  <a href="{{ route('getconsultation') }}">
                  <i class="fas fa-user-alt"></i>
                  <p>Consultation</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="{{ route('getdesign') }}">
                  <i class="fas fa-user-alt"></i>
                  <p>Design</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('getbuild') }}">
                  <i class="fas fa-user-alt"></i>
                  <p>Build</p>
                </a>
              </li>
              
            </ul>
          </div>
        </li>
           
          
            
          



    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  var dropdownToggles = document.querySelectorAll('.dropdown-toggle');
  dropdownToggles.forEach(function (dropdownToggle) {
    dropdownToggle.addEventListener('click', function (e) {
      e.preventDefault();
      var targetMenu = document.querySelector(this.dataset.target);
      targetMenu.classList.toggle('collapse');
    });
  });
});
</script>
