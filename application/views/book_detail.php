<html lang="en">

<head>
    <?php $this->load->view("includes/header"); ?>
</head>

<body style="background-image: url(<?php echo base_url("assets/") ?>img/banner-bg.jpg);">
    <?php $this->load->view("includes/navbar"); ?>

    <div class="product_image_area">
        <div class="container" style="background-color: white;border-radius:2%;padding:3%">
            <div class="row s_product_inner">
                <div class="col-lg-5">
                    <div class="single-prd-item">
                        <img src="https://i.dr.com.tr/cache/500x400-0/originals/0001902535001-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="s_product_text">
                        <h3>Kitap Adı</h3>
                        <h2>$149.99</h2>
                        <p>Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for
                            something that can make your interior look awesome, and at the same time give you the pleasant warm feeling
                            during the winter.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <?php $this->load->view("includes/footer"); ?>
</body>

</html>