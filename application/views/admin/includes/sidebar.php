<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="<?php echo base_url("/") ?>" class="brand-link">
        <img src=<?php echo base_url("assets/img/logo.png") ?> alt="" class="brand-image img-circle elevation-3 bg-light" style="opacity: .8;padding:3px;width:15%;heigth:15%">
        <span class="brand-text font-weight-light">E-Kitap Panel</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="<?php echo base_url("Admin/Admin") ?>" class="d-block"><?php echo $this->session->userdata("AdminUserFirstName") . " " . $this->session->userdata("AdminUserLastName") ?></a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Ayarları
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url("Admin/Setting") ?>" class="nav-link">
                                <i class="fas fa-cog nav-icon"></i>
                                <p>Site Ayarları</p>
                            </a>
                        </li>

                    </ul>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Üyeler
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url("Admin/User/Lists") ?>" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Listele</p>
                            </a>
                        </li>

                    </ul>
                </li>
                </li>
            </ul>
        </nav>
    </div>
</aside>