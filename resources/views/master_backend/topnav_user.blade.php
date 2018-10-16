  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('template/backend/matrix-admin-bt4/assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31"></a>
      <div class="dropdown-menu dropdown-menu-right user-dd animated">
          <button type="button" class="dropdown-item" data-toggle="modal" data-target="#Profile"><i class="ti-user m-r-5 m-l-5"></i>Profile</button>
          <div class="dropdown-divider"></div>
          <!-- <button type="button" class="dropdown-item" data-toggle="modal" data-target="#accountsetting"><i class="ti-user m-r-5 m-l-5"></i>Account Setting</button>
          <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
              <i class="fa fa-power-off m-r-5 m-l-5"></i>
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
      </div>
  </li>
