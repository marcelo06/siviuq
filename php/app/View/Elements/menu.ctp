<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand">
             <?php echo $this->Html->Link('SIVIUQ', array('controller' => 'pages', 'action' => 'display', 'home')) ?>
          </div>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Grupos de investigación <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo  $this->Html->Link('Crear un grupo de investigación', array('controller' => 'grupo_investigacions','action' => 'add'))   ?></li>
                <li><?php echo  $this->Html->Link('Ver los grupos de investigación', array('controller' => 'grupo_investigacions','action' => 'index'))   ?></li>
                <li><?php echo  $this->Html->Link('buscar grupo de investigación', array('controller' => 'grupo_investigacions','action' => 'find'))   ?></li>
                </ul>
              </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Proyectos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo  $this->Html->Link('Crear Proyecto', array('controller' => 'proyectos','action' => 'add'))   ?></li>
                <li><?php echo  $this->Html->Link('Ver proyectos', array('controller' => 'proyectos','action' => 'index'))   ?></li>
               <li><?php echo  $this->Html->Link('Buscar proyectos', array('controller' => 'proyectos','action' => 'find'))   ?></li>
               <li><?php echo  $this->Html->Link('Evaluar proyecto', array('controller' => 'evaluacions','action' => 'add'))   ?></li>
                </ul>
             </li>

             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Investigadores <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo  $this->Html->Link('Ver estudiantes', array('controller' => 'estudiantes','action' => 'index'))   ?></li>
                <li><?php echo  $this->Html->Link('Ver docentes', array('controller' => 'docentes','action' => 'index'))   ?></li>
                </ul>
              </li>

             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Semilleros de investigación <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo  $this->Html->Link('Crear un semillero de investigación', array('controller' => 'Semilleros','action' => 'add'))   ?></li>
                <li><?php echo  $this->Html->Link('Ver semilleros de investigación', array('controller' => 'semilleros','action' => 'index'))   ?></li>
                <li><?php echo  $this->Html->Link('Buscar semilleros de investigación', array('controller' => 'semilleros','action' => 'find'))   ?></li>
                </ul>
              </li>

              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Convocatoria <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo  $this->Html->Link('Ver convocatorias', array('controller' => 'convocatorias','action' => 'index'))   ?></li>
                <li><?php echo  $this->Html->Link('Crear una Convocatoria', array('controller' => 'convocatorias','action' => 'add'))   ?></li>
               </ul>
            </li>


              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reportes <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo  $this->Html->Link('Generar reporte de grupos de investigación', array('controller' => 'grupo_investigacions','action' => 'report'))   ?></li>
               <li><?php echo  $this->Html->Link('Generar reporte de lineas de investigación', array('controller' => 'grupo_investigacions','action' => 'report'))   ?></li>
               <li><?php echo  $this->Html->Link('Generar reporte de investigadores', array('controller' => 'investigadores','action' => 'report'))   ?></li>
                <li><?php echo  $this->Html->Link('Generar reporte de convocatorias', array('controller' => 'convocatorias','action' => 'report'))   ?></li>
                </ul>
              </li>

              
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>