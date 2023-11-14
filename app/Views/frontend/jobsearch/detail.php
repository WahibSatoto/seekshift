<?= $this->extend('frontend/layout') ?>
<?= $this->section('konten') ?>
<div class="container p-5 mx-auto justify-content-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card rounded">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="card-tittle ">
                            <h4>Detail Pekerjaan</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-0 d-flex">
                            <i class="fas fa-building mr-2" style="color: #4ef459;font-size: 40px"></i>
                            <h6><?= $job['perusahaannm'] ?><br><?= $job['posisi'] ?></h6>
                        </div>
                        <div class="mb-3">
                            <ul class="list-inline">
                                <li>
                                    <i class="fas fa-briefcase mr-3"></i><?= $job['jenispekerjaan'] ?>
                                </li>
                                <li class="">
                                    <i class="fas fa-money-bill-wave mr-3"></i><?= rupiah($job['gaji']) ?>
                                </li>
                                <li class="">
                                    <span class="text-success" style="font-size:11px"><?= $job['lowonganjumlah'] ?> orang dibutuhkan</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-3">
                            <h4>Persyaratan Umum</h4>
                            <div class="row">
                                <div class="col-12">
                                    <table width="100%">
                                        <tr>
                                            <td width="25%">
                                                <ul class="list-inline">
                                                    <li>Usia</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-inline">
                                                    <li class="text-dark"><?= $job['usiamin'] ?> - <?= $job['usiamax'] ?> tahun</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <ul class="list-inline">
                                                    <li>Pendidikan</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-inline">
                                                    <li class="text-dark"><?= $job['pendidikan'] ?> </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <ul class="list-inline">
                                                    <li>Jenis Kelamin</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-inline">
                                                    <li class="text-dark"><?= $job['kelamin'] ?></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <ul class="list-inline">
                                                    <li>Domisili</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list-inline">

                                                    <li class="text-dark"><?= $job['domisili'] ?></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4>Deskripsi Pekerjaan</h4>
                            <ul class="list-inline">
                                <li><?= $job['deskripsi'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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