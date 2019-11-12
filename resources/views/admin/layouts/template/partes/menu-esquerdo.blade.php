<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="/vendor/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Procurar...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">CADASTRO BASE</li> -->
        <!-- Optionally, you can add icons to the links -->
          <li class="treeview">
             
              
                  <li><a href="{{route('dashboard') }}"><i class="fa fa-users"></i> <span>DASHBOAD</span></a></li>
                  <!-- <li><a href="{{route('participante_beneficios.index') }}"><i class="fa fa-dollar"></i> <span>Candidatos</span></a></li> -->
              
          </li>

          <li class="treeview">
             
              
             <li><a href="{{route('sindicatos.index') }}"><i class="fa fa-users"></i> <span>Campanhas</span></a></li>
             <!-- <li><a href="{{route('participante_beneficios.index') }}"><i class="fa fa-dollar"></i> <span>Candidatos</span></a></li> -->
         
     </li>

     <li class="treeview">
             
              
             <li><a href=" "><i class="fa fa-users"></i> <span>Candidatos</span></a></li>
             <!-- <li><a href="{{route('participante_beneficios.index') }}"><i class="fa fa-dollar"></i> <span>Candidatos</span></a></li> -->
         
     </li>

          <li class="treeview">
             
              
                  <li><a href="{{route('empresas.index') }}"><i class="fa fa-group"></i> <span>Cabo Eleitoral</span></a></li>
                  <!-- <li><a href=""><i class="fa fa-exchange"></i> <span>Empresas parceiras</span></a></li> -->
              
          </li>
        <!-- <li><a href=""><i class="fa fa-suitcase"></i> <span>Benefícios Sociais</span></a></li> -->


        <!-- <li class="header">FINANCEIRO</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-dollar"></i> <span>Cobranças</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="">Cobranças</a></li>
            <li><a href="">Repasses</a></li>
          </ul>
        </li> -->

      <!-- <li class="header">OCORRÊNCIAS</li>
          <li><a href=""><i class="fa fa-suitcase"></i> <span>Registro de Ocorrências</span></a></li>
         -->
        <!-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>