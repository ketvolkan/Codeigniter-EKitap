<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin/includes/header.php"); ?>
<?php $this->load->view("admin/includes/navbar.php") ?>
<?php $this->load->view("admin/includes/sidebar.php") ?>

<div class="content-wrapper">
    <?php $this->load->view("admin/includes/content_header.php"); ?>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Title</h3>

            </div>
            <div class="card-body">
                Start creating your amazing application!
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>
    </section>

</div>

<?php $this->load->view("admin/includes/footer.php"); ?>