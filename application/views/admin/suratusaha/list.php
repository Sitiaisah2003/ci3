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
						<a href="<?php echo site_url('admin/suratusaha/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

                    <table class="table table-bordered">
  <thead>
    <tr>
      
      
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>No KTP</th>
      <th>Pekerjaan</th>
      <th>Agama</th>
      <th>Alamat</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($suratusaha as $suratusaha): ?>
    <tr>
										
										<td>
											<?php echo $suratusaha->nama ?>
										</td>

                                        <td>
											<?php echo $suratusaha->tgl_lahir?>
										</td>
                                        <td>
											<?php echo $suratusaha->no_ktp?>
										</td>
                  
                                        <td>
											<?php echo $suratusaha->pekerjaan ?>
										</td>
                                        <td>
											<?php echo $suratusaha->agama ?>
										</td>
                                        <td>
											<?php echo $suratusaha->alamat ?>
										</td>
                    <td width="250">
											<a href="<?php echo site_url('admin/suratusaha/edit/'.$suratusaha->id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											 <a href="<?php echo site_url('admin/suratusaha/delete/'.$suratusaha->id) ?>"
											 class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
                                             <a href="<?php echo site_url('admin/suratusaha/pdf/'.$suratusaha->id) ?>"
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
