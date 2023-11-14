<?= $this->extend('backend/layout') ?>
<?= $this->section('konten') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <?= form_button('', '<i class="fa fa-backward"></i> Kembali', [
                    'class' => 'btn btn-warning mb-3',
                    'onclick' => "location.href=('" . site_url('lokasi/index') . "')"
                ]) ?>

                <?= form_open('lokasi/update', '', [
                    'idlokasi' => $id
                ]) ?>
                <div class="form-group">
                    <label for="namalokasi">Nama Lokasi</label>
                    <?= form_input('namalokasi', $nama, [
                        'class' => 'form-control mb-3',
                        'id' => 'namalokasi',
                        'placeholder' => 'masukan nama lokasi',
                        'autofocus' => true
                    ]) ?>
                    <?= session()->getFlashdata('erorNamaLokasi'); ?>
                </div>
                <div class="form-group">
                    <?= form_submit('', 'Update', [
                        'class' => 'btn btn-success'
                    ]) ?>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('konten') ?>