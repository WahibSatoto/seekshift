<?= $this->extend('backend/layout') ?>

<?= $this->section('konten') ?>
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <form action="/admin/save" method="post">
            <div class="card shadow">
                <div class="card-header">
                    <h4>Tambah Data Admin</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>ID Admin</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <input type="text" name="adminid" class="form-control phone-number">
                        </div>
                        <span class="text-danger"><?= session()->getFlashdata('errAdminId') ?></span>
                    </div>
                    <div class="form-group">
                        <label>Nama Admin</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <input type="text" name="adminnama" class="form-control phone-number">
                        </div>
                        <span class="text-danger"><?= session()->getFlashdata('errNamaAdmin') ?></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <input type="password" name="adminpassword" class="form-control pwstrength" data-indicator="pwindicator">
                        </div>
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                        <span class="text-danger"><?= session()->getFlashdata('errPassword') ?></span>
                    </div>
                    <div class="form-group">
                        <label>Admin Level</label>
                        <div class="selectric-wrapper selectric-form-control selectric-selectric selectric-hover selectric-above">
                            <div class="selectric-hide-select">
                                <select class="form-control selectric" tabindex="-1" name="adminlevel">
                                    <option>-- Pilih Level Admin --</option>
                                    <?php foreach ($datalevel as $key) : ?>
                                        <option value="<?= $key['levelid'] ?>"><?= $key['levelnama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <span class="text-danger"><?= session()->getFlashdata('errAdminLevel') ?></span>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Simpan <i class="fa fa-save"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection('konten') ?>