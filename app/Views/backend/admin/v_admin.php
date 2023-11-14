<?= $this->extend('backend/layout') ?>

<?= $this->section('konten') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-heaader">
                <h2>Data Admin</h2>
            </div>
            <div class="card-body">
                <?= form_open('admin/index') ?>
                <div class="input-group mb-3">
                    <input type="text" name="cari" value="<?= $cari; ?>" class="form-control" placeholder="Cari data admin" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-success" type="submit" id="tcari" name="tcari">
                        <i class="fa fa-search"></i>
                    </button>
                    <?= form_button('', '<i class="fa fa-plus"></i> Tambah admin', [
                        'class' => 'btn btn-success mx-2',
                        'onclick' => "location.href=('" . site_url('admin/tambah') . "')"
                    ]) ?>
                </div>
                <?= form_close(); ?>
                <?= session()->getFlashdata('sukses') ?>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th width="10%">No</th>
                                <th>ID Admin</th>
                                <th>Nama Admin</th>
                                <th>Level Admin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($dataadmin as $key) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $key['adminid'] ?></td>
                                    <td><?= $key['adminnama'] ?></td>
                                    <td><?= $key['levelnama'] ?></td>
                                    <td width="15%">
                                        <button onclick="edit(<?= $key['adminid'] ?>)" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></button>
                                        <form action="/admin/hapus/<?= $key['adminid'] ?>" method="post" style="display: inline;" onsubmit="hapus();">
                                            <input type="hidden" value="DELETE" name="_method">
                                            <button type="submit" class="btn btn-danger" title="Hapus">
                                                <i class=" fa fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="float-center mt-2 mx-2">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function edit(id) {
        window.location = ('/admin/edit/' + id);
    }

    function hapus() {
        pesan = confirm('Yakin akan menghapus data ?');
        if (pesan) {
            return true;
        } else {
            return false;
        }
    }
</script>
<?= $this->endSection('konten') ?>