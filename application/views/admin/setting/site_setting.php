<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin/includes/header"); ?>
<?php $this->load->view("admin/includes/navbar") ?>
<?php $this->load->view("admin/includes/sidebar") ?>
<div class="content-wrapper">
    <?php $this->load->view("admin/includes/content_header"); ?> <section class="content">
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
            } ?> <form action="<?php echo base_url("Admin/Setting/Update") ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Site Adı</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $setting->site_name ?>" name="site_name" required placeholder="Site Adını Giriniz">
                    </div>
                    <div class="form-group">
                        <label for="title">Navbar Başlık</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $setting->navbar_title ?>" name="navbar_title" required placeholder="Navbar Başlığını Giriniz">
                    </div>

                    <div class="form-group">
                        <label for="tinymce">Hakkımızda Açıklama</label>

                        <textarea name="about_description" id="description"><?php echo $setting->about_description ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="title">Footer Yazı</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $setting->footer ?>" name="footer" required placeholder="Footer Yazısı Giriniz">
                    </div>
                    <button class="btn btn-outline-dark" style="width: 100%;" type="submit">Güncelle</button>
                </div>
            </form>
        </div>
    </section>
</div>
<script>
    tinymce.init({
        selector: '#description'
    });
</script>

<?php $this->load->view("admin/includes/footer"); ?>