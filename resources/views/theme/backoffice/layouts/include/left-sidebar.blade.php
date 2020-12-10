<aside id="left-sidebar-nav" >
  <ul id="slide-out" class="side-nav fixed leftside-navigation">
    <li class="no-padding">
      <ul class="collapsible" data-collapsible="accordion">
        <li class="bold">
          <a href="{{route('admin.show')}}" class="waves-effect waves-cyan">
            <i class="material-icons">pie_chart_outlined</i>
            <span class="nav-text">Panel de Administración</span>
          </a>
        </li>
        <li class="bold">
          <a href="{{route('user.index')}}" class="waves-effect waves-cyan">
            <i class="material-icons">people</i>
            <span class="nav-text">Usuarios del Sistema</span>
          </a>
        </li>
        @if(user()->has_role(config('app.doctor_role')))
        <li class="bold">
          <a href="{{route('doctor.appointments.show', user()->id)}}" class="waves-effect waves-cyan">
            <i class="material-icons">access_time</i>
            <span class="nav-text">Mis Citas</span>
          </a>
        </li>
        @else
        <li class="bold">
          <a href="{{route('patient.appointments.show')}}" class="waves-effect waves-cyan">
            <i class="material-icons">access_time</i>
            <span class="nav-text">Citas del Sistema</span>
          </a>
        </li>
        @endif
        <li class="bold">
          <a href="{{route('role.index')}}" class="waves-effect waves-cyan">
            <i class="material-icons">perm_identity</i>
            <span class="nav-text">Roles del Sistema</span>
          </a>
        </li>
        <li class="bold">
          <a href="{{route('permission.index')}}" class="waves-effect waves-cyan">
            <i class="material-icons">vpn_key</i>
            <span class="nav-text">Permisos del Sistema</span>
          </a>
        </li>
        <li class="bold">
          <a href="{{route('speciality.index')}}" class="waves-effect waves-cyan">
            <i class="material-icons">local_hospital</i>
            <span class="nav-text">Especialidades Medicas</span>
          </a>
        </li>

      </ul>
    </li>
  </ul>

</aside>
