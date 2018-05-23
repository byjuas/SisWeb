<?php
		if (isset($title))
		{
	?>



<header id="header" class="page-topbar">
      
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="../images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">EMPNA</span></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"  data-activates="translation-dropdown"><img src="../images/flag-icons/United-States.png" alt="USA" /></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>
                        
                        </a>
                        </li>                        
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>
                    </ul>
                    <!-- translation-button -->
                    
                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                      <li>
                        <h5>NOTIFICATIONES <span class="new badge">5</span></h5>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                      </li>
                      
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
       
    <!-- START WRAPPER -->
    <div class="wrapper">
   
      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light cyan"><i class="mdi-navigation-menu"></i></a>
 
         <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="../images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="#"><i class="mdi-action-face-unlock"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                        </li>
                        
                        <li class="divider"></li>
                        
                        <li><a href="../Frondend/Login.php?logout"><i class="mdi-hardware-keyboard-tab"></i> Cerrar</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
            </li>
            <li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Inicio</a>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-view-carousel"></i> Productos</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="">Full Screen</a>
                                </li>
                                <li><a href="">Horizontal Menu</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            
            <li class="bold"><a href="../Frondend/personas.php" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i>Afiliados</a>
            <li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Mienbros Relacionados</a>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    
                    
                    
                    <li class="bold"><a href="app-widget.html" class="waves-effect waves-cyan"><i class="mdi-device-now-widgets"></i> Perfil</a>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Historial</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="">Basic Tables</a>
                                </li>
                                <li><a href="">Data Tables</a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                    
               
                </ul>
            </li>
            <li class="li-hover"><div class="divider"></div></li>
            <li class="li-hover"><p class="ultra-small margin more-text">MAS</p></li>
            <li><a href=""><i class="mdi-action-verified-user"></i> Angular UI  <span class="new badge"></span></a>
            </li>
            <li><a href="../Frondend/Login.php?logout"><i class="mdi-image-grid-on"></i> Cerrar Cesion</a>
            </li>
            
                               
            <li class="li-hover"><div class="divider"></div></li>
            
            
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <?php
		}
	?>