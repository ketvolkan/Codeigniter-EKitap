<div class="single-product-slider">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">

                    <h1 style="margin-top: 7%;">Tüm Kitaplar</h1>

                </div>
            </div>
        </div>
        <div class="row">
            <?php for ($i = 0; $i < 10; $i++) {
                $this->load->view("includes/single_book_card");
            } ?>

        </div>
    </div>
</div>