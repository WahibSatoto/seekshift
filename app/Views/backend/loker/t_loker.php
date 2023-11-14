<?= $this->extend('backend/layout') ?>

<?= $this->section('konten') ?>

<div class="row">
    <div class="col-12">
        <?= form_open('loker/save') ?>
        <div class="card">
            <div class="card-header">
                <h4>Tambah data Loker</h4>
            </div>
            <div class="card-body">
                <?= form_button('', '<i class="fa fa-backward"></i> Kembali', [
                    'class' => 'btn btn-warning mb-3',
                    'onclick' => "location.href=('" . site_url('loker/index') . "')"
                ]) ?>

                <?= session()->getFlashdata('error') ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <?= form_input('posisi', '', [
                                'class' => 'form-control mb-3',
                                'id' => 'posisi',
                                'placeholder' => 'masukan posisi yang dibutuhkan',
                                'autofocus' => 'true'
                            ]) ?>
                            <?= session()->getFlashdata('erorNamaKategori'); ?>
                        </div>
                        <div class="form-group">
                            <label for="perusahaannm">Nama Perusahaan</label>
                            <?= form_input('perusahaannm', '', [
                                'class' => 'form-control mb-3',
                                'id' => 'perusahaannm',
                                'placeholder' => 'masukan nama perusahaan',
                                'autofocus' => 'true'
                            ]) ?>
                            <?= session()->getFlashdata('erorNamaKategori'); ?>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Pendidikan Terakhir</label>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="pendidikan" value="SMP" class="selectgroup-input" checked="">
                                    <span class="selectgroup-button">SMP</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="pendidikan" value="SMA/SMK" class="selectgroup-input">
                                    <span class="selectgroup-button">SMA/SMK</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="pendidikan" value="S1" class="selectgroup-input">
                                    <span class="selectgroup-button">S1</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="pendidikan" value="D3" class="selectgroup-input">
                                    <span class="selectgroup-button">D3</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="pendidikan" value="D4" class="selectgroup-input">
                                    <span class="selectgroup-button">D4</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="pendidikan" value="S2" class="selectgroup-input">
                                    <span class="selectgroup-button">S2</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="pendidikan" value="Tidak Ada Batas" class="selectgroup-input">
                                    <span class="selectgroup-button">Tidak ada batas<span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Zona Domisili Pelamar (isikan "-" jika tidak ada batas)</label>
                            <textarea name="domisili" placeholder="masukkan domisili" class="form-control mb-3" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Gaji</label>
                            <input type="number" name="gaji" class="form-control mb-3" placeholder="masukkan gaji (hanya angka)" id="">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Jenis Pekerjaan</label>
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="jenispekerjaan" value="WFH" class="selectgroup-input" checked="">
                                    <span class="selectgroup-button">WFH</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="jenispekerjaan" value="WFO" class="selectgroup-input" checked="">
                                    <span class="selectgroup-button">WFO</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="jenispekerjaan" value="Full Time" class="selectgroup-input" checked="">
                                    <span class="selectgroup-button">Full Time</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="jenispekerjaan" value="Freelance" class="selectgroup-input" checked="">
                                    <span class="selectgroup-button">Freelance</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kategori Pekerjaan</label>
                            <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="katid">
                                <option>-- Pilih Kategori --</option>
                                <?php foreach ($datakategori as $key) : ?>
                                    <option value="<?= $key['katid'] ?>"><?= $key['katnama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Orang dibutuhkan</label>
                            <input type="number" class="form-control mb-3" placeholder="masukkan jumlah" name="lowonganjumlah">
                        </div>
                        <div class="form-group">
                            <label>Usia Minimal</label>
                            <input type="text" class="form-control mb-3" placeholder="masukkan usia minimal" name="usiamin">
                        </div>
                        <div class="form-group">
                            <label>Usia Maksimal</label>
                            <input type="text" class="form-control mb-3" placeholder="masukkan usia maksimal" name="usiamax">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="kelamin">
                                <option>-- Pilih Kelamis --</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                                <option value="Pria/Wanita">Pria/Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lokasi Pekerjaan</label>
                            <select class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="lokid">
                                <option>-- Pilih Lokasi --</option>
                                <?php foreach ($datalokasi as $key) : ?>
                                    <option value="<?= $key['lokid'] ?>"><?= $key['loknama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi pekerjaan</label>
                            <textarea name="deskripsi" placeholder="masukkan deskripsi pekerjaan" class="form-control mb-3" id="" cols="30" rows="50"></textarea>
                        </div>
                        <input type="hidden" value="<?= session()->get('adminid') ?>" name="authorid">
                        <input type="hidden" value="<?= session()->get('adminnama') ?>" name="authornm">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Post Pekerjaan</button>
                    </div>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
    <?= $this->endSection('konten') ?>