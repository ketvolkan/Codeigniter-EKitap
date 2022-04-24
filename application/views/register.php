<html lang="en">

<head>
    <?php $this->load->view("includes/header"); ?>
</head>

<body style="background-image: url(<?php echo base_url("assets/") ?>img/banner-bg.jpg); background-repeat: no-repeat;">
    <?php $this->load->view("includes/navbar"); ?>
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 bg-light">
                    <div class="login_form_inner">
                        <h3>Kayıt Ol</h3>
                        <form class="row login_form" action="<?php echo base_url("/Register/registerUser") ?>" method="post" id="contactForm">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="firstName" placeholder="Ad" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ad'" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="lastName" placeholder="Soyad" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Soyad'" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" id="name" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Şifre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Şifre'" required>
                            </div>
                            <div class="col-md-12 ">
                                <input type="checkbox" onclick="showHidePassword()">Şifreyi Göster
                                <script>
                                    function showHidePassword() {
                                        var x = document.getElementById("password");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                    }
                                </script>
                            </div><br>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Kayıt Ol</button>

                            </div>
                            <div class="col-md-12">
                                <?php if ($this->input->get("status") != null) {
                                    if ($this->input->get("status") == "false") {
                                ?>
                                        <div class="row justify-content-center">
                                            <div class="col-sm-10">
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>Hata!</strong> Kayıt Oluşturulamadı.
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="row justify-content-center">
                                            <div class="col-sm-10">
                                                <div class="alert alert-success" role="alert">
                                                    <strong>Başarılı!</strong> Kayıt Oluşturuldu.
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view("includes/footer"); ?>
</body>

</html>