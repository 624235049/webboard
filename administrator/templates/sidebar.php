<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
   <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://minotar.net/avatar/user" width="48" alt="User Image">
      <div>
         <p class="app-sidebar__user-name">John Doe</p>
         <p class="app-sidebar__user-designation">Frontend Developer</p>
      </div>
   </div>
   <ul class="app-menu">
      <li><a class="app-menu__item" href="<?php echo ROOT_PROJECT; ?>/administrator"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
      <li><a class="app-menu__item" href="<?php echo ROOT_PROJECT; ?>/administrator/webboard"><i class="app-menu__icon fa fa-pencil-square"></i><span class="app-menu__label">เว็บบอร์ด</span></a></li>
      <li><a class="app-menu__item" href="<?php echo ROOT_PROJECT; ?>/administrator/member"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">สมาชิก</span></a></li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">UI Elements</span><i class="treeview-indicator fa fa-angle-right"></i></a>
         <ul class="treeview-menu">
            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
         </ul>
      </li>
   </ul>
</aside>