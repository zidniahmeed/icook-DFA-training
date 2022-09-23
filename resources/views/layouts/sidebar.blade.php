<aside class="main-sidebar orange">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light text-white">icook</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar Menu -->
     
          
      
      <nav class="mt-2">
        
            
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
 
          @php
              $role = Auth::user()->role ?? null 
          @endphp

          <li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon fa-solid fa-list text-white"></i>
              <p class="text-white">
                Dashboard
              </p>
            </a>
          </li>

          @if ( $role == 'admin')
         
          <li class="nav-item">
            <a href="/category" class="nav-link">
              <i class="nav-icon fa-solid fa-list text-white"></i>
              <p class="text-white">
               category
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/user" class="nav-link">
              <i class="fa-solid fa-user text-white nav-icon"></i>
              <p class="text-white">
               user
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/resep" class="nav-link">
              <i class="nav-icon fa-solid fa-book-open text-white"></i>
              <p class="text-white">
               Resep
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/video" class="nav-link">
              <i class="fa-solid fa-video nav-icon text-white"></i>
              <p class="text-white">
               video
              </p>
            </a>
          </li>

          @else

          <li class="nav-item">
            <a href="/resep" class="nav-link">
              <i class="nav-icon fa-solid fa-book-open text-white"></i>
              <p class="text-white">
               Resep
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/video" class="nav-link">
              <i class="fa-solid fa-video nav-icon text-white"></i>
              <p class="text-white">
               video
              </p>
            </a>
          </li>
         
           @endif 
          @php
            $id = Auth::user()->id ?? null 
          @endphp
 
          <li class="nav-item">
            <a href="/setting/{{$id}}" class="nav-link">
              <i class="fa-solid fa-video nav-icon text-white"></i>
              <p class="text-white">
               setting
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/change-password" class="nav-link">
              <i class="fa-solid fa-video nav-icon text-white"></i>
              <p class="text-white">
               cange password
              </p>
            </a>
          </li>

        </ul>
       
        
      </nav>
    
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>