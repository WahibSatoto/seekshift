<?= $this->extend('backend/layout') ?>

<?= $this->section('konten') ?>

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h4>Tambah data kategori</h4>
            </div>
            <div class="card-body">
                <?= form_button('', '<i class="fa fa-backward"></i> Kembali', [
                    'class' => 'btn btn-warning mb-3',
                    'onclick' => "location.href=('" . site_url('kategori/index') . "')"
                ]) ?>

                <?= form_open('kategori/save') ?>
                <div class="form-group">
                    <label for="namakategori">Nama Kategori</label>
                    <?= form_input('namakategori', '', [
                        'class' => 'form-control mb-3',
                        'id' => 'namakategori',
                        'placeholder' => 'masukan nama kategori',
                        'autofocus' => 'true'
                    ]) ?>
                    <?= session()->getFlashdata('erorNamaKategori'); ?>
                </div>
                <div class="form-group">
                    <?= form_submit('', 'Simpan', [
                        'class' => 'btn btn-success'
                    ]) ?>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('konten') ?>