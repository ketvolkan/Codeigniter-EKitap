<?php $this->load->view("admin/login/login_header"); ?>

<body class="login-page" style="min-height: 496.781px;">
    <div class="login-box">
        <div class="login-logo">
            <a href=".<?php echo base_url() ?>"><b>E-Kitap</b></a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Yönetim Paneli Girişi</p>
                <form action="<?php echo base_url("Admin/Login/checkUser") ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
                        </div>

                    </div>
                </form>
                <?php if ($this->input->get("status") != null) {
                    if ($this->input->get("status") == "false") {
                ?>
                        <div class="alert alert-danger" role="alert">
                            Giriş Başarısız! Bilgilerinizi Kontrol Edin!
                        </div>
                <?php
                    }
                } ?>

            </div>
        </div>

</body>