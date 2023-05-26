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
						<a href="<?php echo site_url('admin/sktm/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

                    <table class="table table-bordered">
  <thead>
    <tr>
      
      
      <th>Nama</th>
      <th>NIK</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Status Perkawinan</th>
      <th>Pekerjaan</th>
      <th>Agama</th>
      <th>Alamat</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($sktm as $sktm): ?>
    <tr>
										
										<td>
											<?php echo $sktm->nama ?>
										</td>
                    <td>
											<?php echo $sktm->nik ?>
										</td>
                                        <td>
											<?php echo $sktm->tgl_lahir?>
										</td>
                    <td>
											<?php echo $sktm->jenis_kelamin ?>
										</td>
                    <td>
											<?php echo $sktm->status_perkawinan ?>
										</td>
                                        <td>
											<?php echo $sktm->pekerjaan ?>
										</td>
                                        <td>
											<?php echo $sktm->agama ?>
										</td>
                                        <td>
											<?php echo $sktm->alamat ?>
										</td>
                    <td width="250">
											<a href="<?php echo site_url('admin/sktm/edit/'.$sktm->id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											 <a href="<?php echo site_url('admin/sktm/delete/'.$sktm->id) ?>"
											 class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
                       <a href="<?php echo site_url('admin/sktm/pdf/'.$sktm->id) ?>"
											 class="btn btn-success btn-lg"><span class="fas fa-download"></span> download</a>
										</td>
                    <?php endforeach; ?>
  </tbody>
</table>
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
