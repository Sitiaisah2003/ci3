<?php $this->load->view("admin/_partials/head.php") ?>

    <body class="sb-nav-fixed">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
    
        <div id="layoutSidenav">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <?php $this->load->view("admin/_partials/breadcumb.php") ?>
					<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/artikel/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Isi Artikel</th>
										<th>Photo</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($artikel as $artikel): ?>
									<tr>
										<td width="150">
											<?php echo $artikel->nama ?>
										</td>
										<td>
											<?php echo $artikel->isi ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/artikel/'.$artikel->poto) ?>" width="64" />
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/artikel/edit/'.$artikel->id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											 <a href="<?php echo site_url('admin/artikel/delete/'.$artikel->id) ?>"
											 class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
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
