<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>

        <div class="div row mt-3">
            <div class="com -md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data mahsiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span arial-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <di class="row mt-3">
        <div class="col-md-6">
            <a href="<?php base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </di v>


    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['nim']; ?>" class="badge badge-danger float-right">hapus</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>