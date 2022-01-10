<main>

    <section class="home section" id="home">
        <h2 class="section__title">Tempe kenteng</h2>
        <span class="section__subtitle">Rumah Tempe Kenteng</span>

        <div class="home__container container grid">
            <div class="jumbotron">
                <img src="<?= URLROOT; ?>/img/5.jpeg" alt="dwi" class="home__img">
            </div>

            <div class="home__data">
                <p class="home__description">Tempe merupakan salah satu makanan olahan dari kedelai yang banyak
                    digemari oleh banyak orang dari berbagai kalangan masyarakat. Salah satu hal yang membuat
                    makanan ini menjadi favorit yaitu harganya yang murah, bisa diolah menjadi berbagai jenis
                    makanan, dan yang paling penting, kaya akan berbagai macam nutrisi. Tempe mengandung protein
                    yang tinggi dan rendah kandungan lemak.</p>

                <div class="home__info">
                    <div>
                        <span class="home__info-title">100+</span>
                        <span class="home__info-name">Tempe<br> dalam penjualan.</span>
                    </div>
                    <div>
                        <span class="home__info-title">10+</span>
                        <span class="home__info-name">Desa<br> area pemasaran.</span>
                    </div>
                    <div>
                        <span class="home__info-title">50+</span>
                        <span class="home__info-name">Pelangan<br> tetap kami.</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="produk section" id="produk">
        <h2 class="section__title">Produk Kami</h2>
        <span class="section__subtitle">Tempe Kedelai</span>

        <div class="produk__container container swiper-container">
            <div class="swiper-wrapper">
                <!-- produk 1 -->
                <div class="produk__content grid swiper-slide">
                    <img src="<?= URLROOT; ?>/img/1.jpg" alt="" class="produk__img">

                    <div class="produk__data">
                        <h3 class="produk__title">Tempe Kedelai</h3>
                        <p class="produk__description">Packing plastik.</p>

                    </div>
                </div>

                <!-- produk 2 -->
                <div class="produk__content grid swiper-slide">
                    <img src="<?= URLROOT; ?>/img/2.jpg" alt="" class="produk__img">

                    <div class="produk__data">
                        <h3 class="produk__title">Tempe Bundal</h3>
                        <p class="produk__description">tempe dibungkus dengan daun pisang.</p>

                    </div>
                </div>

                <!-- produk 3 -->
                <div class="produk__content grid swiper-slide">
                    <img src="<?= URLROOT; ?>/img/3.jpg" alt="" class="produk__img">

                    <div class="produk__data">
                        <h3 class="produk__title">Brand Design</h3>
                        <p class="produk__description">Website adaptable to all devices, with ui component and
                            animated interactions.</p>

                    </div>
                </div>
                <!-- produk 4 -->
                <div class="produk__content grid swiper-slide">
                    <img src="<?= URLROOT; ?>/img/4.jpg" alt="" class="produk__img">

                    <div class="produk__data">
                        <h3 class="produk__title">Brand Design</h3>
                        <p class="produk__description">Website adaptable to all devices, with ui component and
                            animated interactions.</p>

                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next">
                <i class="uil uil-angle-right-b swiper-produk-icon"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="uil uil-angle-left-b swiper-produk-icon"></i>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="order section">
        <div class="order__container container grid">
            <div class="order__data">
                <h2 class="order__title">Pesan sekarang</h2>
                <p class="order__description">Contact me now and get 30% discount.</p>
                <a href="#contact" class="button button--flex button--white">
                    Order
                    <i class="uil uil-baby-carriage order__icon button__icon"></i>
                </a>
            </div>
        </div>
    </section>

</main>