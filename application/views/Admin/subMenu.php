<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
		<div class="buton ml-auto">
			<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#add"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah SubMenu</a>
		</div>
	</div>
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<!-- <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div> -->
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th width="5%" class="text-center">NO</th>
							<th>Title</th>
							<th>menu</th>
							<th>URL</th>
							<th>Icon</th>
							<th>Active</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
            <?php $i = 1; ?>
						<?php foreach ($submenu as $row) : ?>
							<tr>
								<td scope="row" class="text-center"><?= $i; ?></td>
								<td><?= $row['title'] ?></td>
								<td><?= $row['menu'] ?></td>
								<td><?= $row['url'] ?></td>
								<td><?= $row['icon'] ?></td>
								<td><?= $row['is_active'] ?></td>
								</td>
								<td>
									<a href="<?= base_url('Admin/deleteMenu/') ?><?= $row['id'] ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
									<a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></a>
								</td>
							</tr>
              <?php $i++; ?>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- modal edit menu -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editScrollableTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editScrollableTitle">Tambah Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?= base_url('admin/editMenu') ?>" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Menu</label>
            <input type="text" class="form-control name" name="menu" placeholder="......." minlength="4" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end modal edit menu -->
<!-- modal tambah menu -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Menu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="<?= base_url('admin/subMenu') ?>" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Menu</label>
            <input type="text" class="form-control name" id="title" name="title" placeholder="......." minlength="4" required>
          </div>
          <div class="form-group">
            <label>Pilih Menu</label>
            <select class="form-control" name="menu_id" id="menu_id">
              <?php foreach ($edit_menu as $row) : ?>
                <option value="<?= $row['id']; ?>"><?= $row['menu']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>URL</label>
            <input type="text" class="form-control name" id="url" name="url" placeholder="......." minlength="4" required>
          </div>
          <div class="form-group">
            <label>Icon</label>
            <input type="text" class="form-control name" id="icon" name="icon" placeholder="......." minlength="4" required>
          </div>
          <div class="form-group">
            <label>active</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="is_active" checked>
              <label class="form-check-label" for="defaultCheck1">
                Active?
              </label>
            </div>
          </div>
        </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
