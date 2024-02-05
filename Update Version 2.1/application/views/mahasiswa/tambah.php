<div class="container">

    <div class="mb-3">
        <div class="col-md-6">


            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                        <?php if( validation_errors() ) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                        <form action="" method="post">
                            <div class="mb-3">
                            <div class="from-group">
                                <label for="nim">Nim</label>
                                <input type="text" name="nim" class="form-control" id="nim">
                            </div>
                            </div>
                            <div class="from-group">
                            <div class="mb-3">
                                <label for="nama_mhs">Nama Mahasiswa</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                            </div>
                            </div>
                            <div class="from-group">
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email">
                            </div>
                            </div>
                            <div class="mb-3">
                            <div class="from-group">
                                <label for="jeniskelamin">Jenis Kelamin</label>
                                    <select class="form-control" id="jenis Kelamin" name="jenis_kelamin">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                            </div>
                            </div>
                            <div class="mb-3">
                            <div class="from-group">
                                <label for="Program_studi">Program Studi</label>
                                <select class="form-control" id="jurusan" name="jurusan">
                                    <option value="Teknik Informatika">Teknik Informatika</option>
						            <option value="Teknik SipilL">Teknik Sipil</option>
						            <option value="Teknik Kimia">Teknik Kimia</option>
						            <option value="Teknik Elektro">Teknik Elektro</option>
						            <option value="Akuntansi">Akuntansi</option>
						            <option value="Manajemen">Manajemen</option>
						            <option value="Farmasi">Farmasi</option>
						            <option value="Hukum">Hukum</option>
                                </select>
                            </div>
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
