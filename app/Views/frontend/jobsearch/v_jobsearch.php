<?= $this->extend('frontend/layout') ?>
<?= $this->section('konten') ?>

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid mb-5">
    <div class="container text-center py-5">
        <h1 class="text-primary mb-4">Cari & Dapatkan Pekerjaan</h1>
        <h1 class="text-white display-3 mb-5"><i>SEEKSHIFT</i></h1>
        <div class="mx-auto" style="width: 100%; max-width: 600px">
            <?= form_open('jobsearch/index') ?>
            <div class="input-group">
                <input type="text" name="cari" class="form-control border-light" style="padding: 30px" placeholder="Temukan Pekerjaan" value="<?= $cari ?>" />
                <div class="input-group-append">
                    <button type="submit" name="tcari" class="btn btn-primary px-3">Cari Pekerjaan</button>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container py-5 mx-auto">
    <div class="row row-cols-1 row-cols-md-3 g-md-3 align-items-center justify-content-center">
        <?php foreach ($dataloker as $key) : ?>
            <div class="col mb-3">
                <div class="card rounded-lg shadow">
                    <div class="card-body">
                        <div class="mb-3 d-flex">
                            <i class="fas fa-building mr-2" style="color: #4ef459; "></i>
                            <h6><?= $key['perusahaannm'] ?></h6>
                        </div>
                        <div class="mb-3">
                            <h5 class="text-primary"><?= $key['posisi'] ?></h5>
                            <p class="" style="color:grey; opacity:calc(60%); font-size: 15px;"><?= $key['loknama'] ?></p>
                        </div>
                        <ul class="list-inline">
                            <li>
                                <i class="fas fa-user-graduate mr-3"></i><?= $key['pendidikan'] ?>
                            </li>
                            <li>
                                <i class="fas fa-briefcase mr-3"></i><?= $key['jenispekerjaan'] ?>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-money-bill-wave mr-3"></i><?= rupiah($key['gaji']) ?>
                            </li>
                            <li>
                                <span class="text-success" style="font-size: 12px;"><?= $key['lowonganjumlah'] ?> orang dibutuhkan</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 bg-light justify-content-end text-right"> <a href="/jobsearch/<?= $key['lokerid'] ?>" class="btn btn-primary btn-sm mt-3 py-2 px-4">Selengkapnya</a></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
function rupiah($angka)
{
    $hasil = "Rp " . number_format($angka, '2', ',', '.');
    return $hasil;
}
?>

<?= $this->endSection('konten') ?>