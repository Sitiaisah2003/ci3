<?php $this->load->view("admin/_partials/head.php") ?>

    <body class="sb-nav-fixed">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
    
        <div id="layoutSidenav">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <?php $this->load->view("admin/_partials/breadcumb.php") ?>
                <p>Selamat Datang, <?php echo $this->session->userdata("email"); ?></p>
               
<div class="container">
	<div class="tab-slider--nav">
		<ul class="tab-slider--tabs">
			<li class="tab-slider--trigger active" rel="tab1">SKTM</li>
			<li class="tab-slider--trigger" rel="tab2">Surat Usaha</li>  
		</ul>
	</div>
	<div class="tab-slider--container">
		<div id="tab1" class="tab-slider--body">
			<h2>Surat Keterangan Tidak Mampu</h2>
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
                    <?php endforeach; ?>
  </tbody>
</table>
		</div>
		<div id="tab2" class="tab-slider--body">
			<h2>Surat Usaha </h2>
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