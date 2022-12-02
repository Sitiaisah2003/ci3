<?php $this->load->view("home/_partials/head.php") ?>

<body class="d-flex flex-column">
<?php $this->load->view("home/_partials/navbar.php") ?>
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3">Tentang Kami</h1>
                                <p class="lead fw-normal text-muted mb-4">SIDLB ini adalah sebuah website yang dimana isinya adalah tentang desa Lintah Betung dan sistem informasi-informasi
                                    desa Lintah Betung dan dimana isi dari website ini salah satunya adalah adanya statistik penduduk desa dan juga ada artikel-artikel seputar desa Lintah Betung<br>
                                <a class="btn btn-primary btn-lg" href="#scroll-target">Selengkapnya Tentang Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About section one-->
            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="<?php echo base_url(); ?>galeri/kas1.jpg" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Pamungkas</h2>
                            <p class="lead fw-normal text-muted mb-0">12210935</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section two-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="<?php echo base_url(); ?>galeri/ais.jpg" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Siti Nuraisah</h2>
                            <p class="lead fw-normal text-muted mb-0">12210933</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team members section-->
            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="<?php echo base_url(); ?>galeri/len.jpg" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Leni Marlina</h2>
                            <p class="lead fw-normal text-muted mb-0">12210909</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="<?php echo base_url(); ?>galeri/din1.jpg" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Dinda Fatika Dewi</h2>
                            <p class="lead fw-normal text-muted mb-0">12211016</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="<?php echo base_url(); ?>galeri/zik.jpg" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Muhammad Zikri L</h2>
                            <p class="lead fw-normal text-muted mb-0">12210899</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php $this->load->view("home/_partials/footer.php") ?>
        <?php $this->load->view("home/_partials/js.php") ?>