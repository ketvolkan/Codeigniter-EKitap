<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin/includes/header"); ?>
<?php $this->load->view("admin/includes/navbar") ?>
<?php $this->load->view("admin/includes/sidebar") ?>

<div class="content-wrapper">
    <?php $this->load->view("admin/includes/content_header"); ?>
    <section class="content">
        <div class="card card-dark">
            <?php if ($this->input->get("status") != null) {
                if ($this->input->get("status") == true) {
            ?>
                    <div class="alert alert-success" role="alert">
                        Güncelleme Başarılı
                    </div>

                <?php
                } else {
                ?>
                    <div class="alert alert-ganger" role="alert">
                        Güncelleme Başarısız
                    </div>
            <?php
                }
            } ?>
            <form action="<?php echo base_url("Admin/Admin/update") ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Email</label>
                        <input type="email" class="form-control" id="email" value="<?php echo $admin->email ?>" name="email" required placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <label for="title">Ad</label>
                        <input type="text" class="form-control" id="name" value="<?php echo $admin->firstName ?>" name="firstName" required placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <label for="title">Soyad</label>
                        <input type="text" class="form-control" id="surname" value="<?php echo $admin->lastName ?>" name="lastName" required placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <label for="title">Şifre</label>
                        <input type="password" class="form-control" id="password" value="<?php echo $admin->password ?>" name="password" required placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="hideShowPassword()">Şifre Göster/Gizle
                    </div>
                </div>
                <div class="card-footer ">
                    <div class="row justify-content-center"> <button type="submit" class="btn btn-outline-dark" style="width: 30%;">Güncelle</button></div>

                </div>
            </form>
        </div>
    </section>

</div>
<script>
    function hideShowPassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<?php $this->load->view("admin/includes/footer"); ?>