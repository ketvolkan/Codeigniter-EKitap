<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin/includes/header"); ?>
<?php $this->load->view("admin/includes/navbar") ?>
<?php $this->load->view("admin/includes/sidebar") ?>

<div class="content-wrapper">
    <?php $this->load->view("admin/includes/content_header"); ?>
    <section class="content">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0" style="height: 750px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>İsim</th>
                                <th width="20%">Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($users as $user) {

                                $viewData = [
                                    "user" => $user,

                                ];

                                $this->load->view("admin/user/list_user_table_row", $viewData);
                            }
                            ?>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </section>
</div>

<?php $this->load->view("admin/includes/footer"); ?>