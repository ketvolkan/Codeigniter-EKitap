<html lang="en">

<head>
    <?php $this->load->view("includes/header"); ?>
</head>

<body style="background-image: url(<?php echo base_url("assets/") ?>img/banner-bg.jpg); background-repeat: no-repeat;">
    <?php $this->load->view("includes/navbar"); ?>

    <?php $this->load->view("includes/book_list"); ?>
    <?php $this->load->view("includes/footer"); ?>
</body>

</html>