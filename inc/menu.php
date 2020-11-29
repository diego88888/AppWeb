<?php
function sidebarmenu(){
?>	
  <nav class = "mt-2">
    <ul class = "nav nav-pills nav-sidebar flex-column" data-widget = "treeview" role = "menu" data-accordion = "false">
      <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
      <li class = "nav-item">
        <a href = "index.php?constructor=alumnado" class="nav-link">
          <i class = "nav-icon fas fa-user-graduate"></i>
            <p>
              Alumnado
            </p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href = "index.php?constructor=eso1" class="nav-link">
          <i class = "nav-icon fas fa-dice-one"></i>
            <p>
              1ºESO
            </p>
        </a>
      </li>
      <li class = "nav-item">
        <a href = "#" class="nav-link">
          <i class = "nav-icon fas fa-dice-two"></i>
            <p>
              2ºESO
            </p>
        </a>
      </li>
      <li class = "nav-item">
        <a href = "#" class="nav-link">
          <i class = "nav-icon fas fa-dice-three"></i>
            <p>
              3ºESO
            </p>
        </a>
      </li>
      <li class = "nav-item">
        <a href = "#" class="nav-link">
          <i class = "nav-icon fas fa-dice-four"></i>
            <p>
              4ºESO
            </p>
        </a>
      </li>
      <li class = "nav-item">
        <a href = "#" class="nav-link">
          <i class = "nav-icon fas fa-dice-five"></i>
            <p>
              1ºBachiller
            </p>
        </a>
      </li>
      <li class = "nav-item">
        <a href = "#" class="nav-link">
          <i class = "nav-icon fas fa-dice-six"></i>
            <p>
              2ºBachiller
            </p>
        </a>
      </li>
      <li class = "nav-item">
        <a href = "#" class="nav-link">
          <i class = "nav-icon fas fa-chalkboard-teacher"></i>
            <p>
              Profesorado
            </p>
        </a>
      </li>
      <li class = "nav-item">
        <a href = "#" class="nav-link">
          <i class = "nav-icon fas fa-users"></i>
            <p>
              Personal
            </p>
        </a>
      </li>
      <li class = "nav-item">
        <a href = "#" class="nav-link">
          <i class = "nav-icon fas fa-bus-alt"></i>
            <p>
              Transporte
            </p>
        </a>
      </li>
      <li class = "nav-item">
        <a href = "#" class="nav-link">
          <i class = "nav-icon fas fa-chalkboard"></i>
            <p>
              Equipamiento
            </p>
        </a>
      </li>
      <li class = "nav-item">
        <a href = "logout.php" class="nav-link">
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
  <!-- Left navbar links -->
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