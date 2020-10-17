<ul class="sidebar-menu">
        <li class="header">Navegación</li>
        <!-- Optionally, you can add icons to the links -->
        <li {{ request()->is('admin') ? 'class=active' : ''}}>
        <a href="{{ route('admin') }}"><i class="fa fa-link"></i> 
        <span>Inicio</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Clanes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
          </a>
          <ul class="treeview-menu {{ request()->is('admin/clans*') ? 'active' : ''}}">
            <li {{ request()->is('admin/clans') ? 'class=active' : ''}}><a href="{{ route('admin.clans.index') }}">Ver todos los clanes</a></li>
            <li {{ request()->is('admin/clans/create') ? 'active' : ''}}><a href="{{ route('admin.clan.create') }}">Crear clan</a></li>
          </ul>
        </li>
      </ul>