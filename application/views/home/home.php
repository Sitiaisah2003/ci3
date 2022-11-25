<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("home/_partials/head.php") ?>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php $this->load->view("home/_partials/navbar.php") ?>
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2"><?php echo SITE_NAME2 ?></h1>
                                <p class="lead fw-normal text-white-50 mb-4">Sebuah Website Untuk Mempersentasikan Hasil Observasi Dan Tugas Kelompok</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Selengkapnya ...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="<?php echo base_url(); ?>galeri/WhatsApp Image 2022-11-20 at 18.10.33.jpeg" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Statistik Penduduk Desa Lintah Betung</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                                    <h2 class="h5">Lansia (60-90 tahun)</h2>
                                    <p class="mb-0">72 orang</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                                    <h2 class="h5">Balita (0-5 tahun)</h2>
                                    <p class="mb-0">309 orang</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                                    <h2 class="h5">Remaja (12-15 tahun)-</h2>
                                    <p class="mb-0">433 orang</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                                    <h2 class="h5">Dewasa (18-25)</h2>
                                    <p class="mb-0">266 orang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <!-- Blog preview section-->
            <?php $this->load->view("home/_partials/artikel.php") ?>

        </main>
        <!-- Footer-->
       
        <?php $this->load->view("home/_partials/footer.php") ?>
        <?php $this->load->view("home/_partials/js.php") ?>

    </body>
</html>
