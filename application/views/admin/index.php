<?php $this->load->view("admin/_partials/head.php") ?>

    <body class="sb-nav-fixed">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
    
        <div id="layoutSidenav">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <?php $this->load->view("admin/_partials/breadcumb.php") ?>

                    </div>
                </main>
                <?php $this->load->view("admin/_partials/footer.php") ?>

            </div>
        </div>
        <?php $this->load->view("admin/_partials/scrolltop.php") ?>
        <?php $this->load->view("admin/_partials/modal.php") ?>
        <?php $this->load->view("home/_partials/js.php") ?>

    </body>
</html>
