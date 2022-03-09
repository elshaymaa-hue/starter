
 <ul>
        <li><a href="#!" class="search-bar-toggle"><i class="mdi-action-search"></i></a>
        </li>                   
        <li class="user">
          <a class="dropdown-button" href="#!" data-activates="user-dropdown">
            <img src="{{ url('/') }}/{{ Auth::user()->path_foto }}" height="35" width="35" alt="{{ Auth::user()->name }}" class="circle">{{ Auth::user()->name }}<i class="mdi-navigation-expand-more right"></i>
          </a>

          <ul id="user-dropdown" class="dropdown-content">
            <li><a href="{{ url('/usuarios/') }}/{{ Auth::user()->id }}"><i class="fa fa-user"></i> Perfil</a>
            </li>
           <!-- <li><a href="mail-inbox.html"><i class="fa fa-envelope"></i> Messages <span class="badge new">2</span></a> -->
            </li>
            @if (Auth::user()->tipo_usuario == "ALL")

            <li><a href="#!"><i class="fa fa-cogs"></i> Configurações</a>
            </li>

            @endif

            <li class="divider"></li>
            <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> Sair</a>
            </li>
          </ul>
        </li>
      </ul>