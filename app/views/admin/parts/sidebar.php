<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo PATH; ?>" class="brand-link" target="_blank">
        <img src="<?php echo PATH; ?>/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo PATH; ?>/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?php echo ADMIN; ?>/user/edit?id=<?php echo $_SESSION['user']['id']; ?>" class="d-block"><?php echo h($_SESSION['user']['name']); ?></a>
                <a href="<?php echo ADMIN; ?>/user/logout" class="d-block">Logout</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="<?php echo ADMIN; ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Главная</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo ADMIN; ?>/category" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Категории</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo ADMIN; ?>/product" class="nav-link">
                        <i class="nav-icon fas fa-barcode"></i>
                        <p>Товары</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo ADMIN; ?>/download" class="nav-link">
                        <i class="nav-icon fas fa-file-upload"></i>
                        <p>Файлы</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo ADMIN; ?>/order" class="nav-link">
                        <i class="nav-icon fas fa-shopping-bag"></i>
                        <p>Заказы</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo ADMIN; ?>/user" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>Пользователи</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo ADMIN; ?>/cache" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>Управление кэшем</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo ADMIN; ?>/page" class="nav-link">
                        <i class="nav-icon far fa-file-alt"></i>
                        <p>Страницы</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo ADMIN; ?>/slider" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>Слайдер</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
