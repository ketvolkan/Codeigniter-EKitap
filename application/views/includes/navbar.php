<header class="header_area sticky-header">
    <div class="main_menu ">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <a class="navbar-brand logo_h" href="<?php echo base_url("/") ?>"><img src="<?php echo base_url("assets/") ?>img/logo.png" alt="" style="width:50px"></a> <span style="color:orange;font-size: 24px;">E-Kitap</span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item "><a class="nav-link" href="<?php echo base_url("/Ekitap") ?>">Anasayfa</a></li>

                        <?php
                        if ($this->session->userdata("userId") == null) {
                        ?>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Giriş/Kayıt</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url("/Login") ?>">Giriş Yap</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url("/Register") ?>">Kayıt Ol</a></li>
                                </ul>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata("userFirstName") . " " . $this->session->userdata("userLastName"); ?></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><span class="nav-link"><?php echo $this->session->userdata("userEmail"); ?></span></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url("/Login/logOut") ?>">Çıkış Yap</a></li>
                                </ul>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</header><br><br><br><br><br>