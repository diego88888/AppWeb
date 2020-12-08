<?php
function sidebarmenu(){
?>	
  <nav class = "mt-2">
    <ul class = "nav nav-pills nav-sidebar flex-column" data-widget = "treeview" role = "menu" data-accordion = "false">
      <li class = "nav-item">
        <a href = "index.php?constructor=alumnado" class = "nav-link">
          <i class = "nav-icon fas fa-user-graduate"></i>
            <p>
              Alumnado
            </p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href = "#" class = "nav-link">
          <i class = "nav-icon fas fa-dice-one"></i>
            <p>
              1ºESO
              <i class = "right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class = "nav nav-treeview">
          <li class = "nav-item">
            <a href = "index.php?constructor=eso1a" class = "nav-link">
              <i class = "far fa-circle nav-icon"></i>
					    <p>Alumnos</p>
            </a>
          </li>
          <li class = "nav-item">
            <a href = "index.php?constructor=eso1p" class = "nav-link">
              <i class = "far fa-circle nav-icon"></i>
					    <p>Profesores</p>
            </a>
          </li>
        </ul>
      </li>
      <li class = "nav-item">
        <a href = "#" class = "nav-link">
          <i class = "nav-icon fas fa-dice-two"></i>
            <p>
              2ºESO
              <i class = "right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class = "nav nav-treeview">
          <li class = "nav-item">
            <a href = "index.php?constructor=eso2a" class = "nav-link">
              <i class = "far fa-circle nav-icon"></i>
					    <p>Alumnos</p>
            </a>
          </li>
          <li class = "nav-item">
            <a href = "index.php?constructor=eso2p" class = "nav-link">
              <i class = "far fa-circle nav-icon"></i>
					    <p>Profesores</p>
            </a>
          </li>
        </ul>
      </li>
      <li class = "nav-item">
        <a href = "#" class = "nav-link">
          <i class = "nav-icon fas fa-dice-three"></i>
            <p>
              3ºESO
              <i class = "right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class = "nav nav-treeview">
          <li class = "nav-item">
            <a href = "index.php?constructor=eso3a" class = "nav-link">
              <i class = "far fa-circle nav-icon"></i>
					    <p>Alumnos</p>
            </a>
          </li>
          <li class = "nav-item">
            <a href = "index.php?constructor=eso3p" class = "nav-link">
              <i class = "far fa-circle nav-icon"></i>
					    <p>Profesores</p>
            </a>
          </li>
        </ul>
      </li>
      <li class = "nav-item">
        <a href = "#" class="nav-link">
          <i class = "nav-icon fas fa-dice-four"></i>
            <p>
              4ºESO
              <i class = "right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class = "nav nav-treeview">
          <li class = "nav-item">
            <a href = "index.php?constructor=eso4a" class = "nav-link">
              <i class = "far fa-circle nav-icon"></i>
					    <p>Alumnos</p>
            </a>
          </li>
          <li class = "nav-item">
            <a href = "index.php?constructor=eso4p" class = "nav-link">
              <i class = "far fa-circle nav-icon"></i>
					    <p>Profesores</p>
            </a>
          </li>
        </ul>
      </li>
      <li class = "nav-item">
        <a href = "#" class = "nav-link">
          <i class = "nav-icon fas fa-dice-five"></i>
            <p>
              1ºBachiller
              <i class = "right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class = "nav nav-treeview">
          <li class = "nav-item">
            <a href = "index.php?constructor=bac1a" class = "nav-link">
              <i class = "far fa-circle nav-icon"></i>
					    <p>Alumnos</p>
            </a>
          </li>
          <li class = "nav-item">
            <a href = "index.php?constructor=bac1p" class = "nav-link">
              <i class = "far fa-circle nav-icon"></i>
					    <p>Profesores</p>
            </a>
          </li>
        </ul>
      </li>
      <li class = "nav-item">
        <a href = "#" class="nav-link">
          <i class = "nav-icon fas fa-dice-six"></i>
            <p>
              2ºBachiller
              <i class = "right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class = "nav nav-treeview">
          <li class = "nav-item">
            <a href = "index.php?constructor=bac2a" class = "nav-link">
              <i class = "far fa-circle nav-icon"></i>
					    <p>Alumnos</p>
            </a>
          </li>
          <li class = "nav-item">
            <a href = "index.php?constructor=bac2p" class = "nav-link">
              <i class = "far fa-circle nav-icon"></i>
					    <p>Profesores</p>
            </a>
          </li>
        </ul>
      </li>
      <li class = "nav-item">
        <a href = "index.php?constructor=profesorado" class = "nav-link">
          <i class = "nav-icon fas fa-chalkboard-teacher"></i>
            <p>
              Profesorado
            </p>
        </a>
      </li>
      <li class = "nav-item">
        <a href = "index.php?constructor=personal" class = "nav-link">
          <i class = "nav-icon fas fa-users"></i>
            <p>
              Personal
            </p>
        </a>
      </li>
      <li class = "nav-item">
        <a href = "index.php?constructor=transporte" class = "nav-link">
          <i class = "nav-icon fas fa-bus-alt"></i>
            <p>
              Transporte
            </p>
        </a>
      </li>
      <li class = "nav-item">
        <a href = "index.php?constructor=equipamiento" class = "nav-link">
          <i class = "nav-icon fas fa-chalkboard"></i>
            <p>
              Equipamiento
            </p>
        </a>
      </li>
      <li class = "nav-item">
        <a href = "logout.php" class = "nav-link">
          <i class = "nav-icon fas fa-power-off"></i>
            <p>
              Cerrar sesion
            </p>
        </a>
      </li>
    </ul>
  </nav>
<?php	
}

function navbar() {
?>	
  <ul class = "navbar-nav">
    <li class = "nav-item">
      <a class = "nav-link" data-widget = "pushmenu" href = "#"><i class = "fas fa-bars"></i></a>
    </li>
    <li class = "nav-item d-none d-sm-inline-block">
      <a href = "index.php" style = "color:white" class = "nav-link">Inicio</a>
    </li>
  </ul>
<?php	  
}
?>