<!-- MODAL HAPUS -->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel">Hapus data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-2 ">
                        <i class="fas fa-exclamation-circle text-danger display-3"></i>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto align-self-center">
                        <h4> Anda yakin menghapus data?</h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="index.php?page=hapus_mhs&id=<?= $mhs['id_mahasiswa']?>"
                    role="buton">Hapus</a>
            </div>
        </div>
    </div>
</div>
<!-- AKHIR MODAL HAPUS -->

<!-- MODAL EDIT -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="index.php?page=ubah_mhs" method="POST">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id_mahasiswaUbah" name="id_mahasiswaUbah" require>
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nimUbah" name="nimUbah" require>
                    </div>
                    <div class="form-group">
                        <label for="nama_mahasiswa">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_mahasiswaUbah" name="nama_mahasiswaUbah"  require>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahirUbah" name="tempat_lahirUbah" require>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" id="tanggal_lahirUbah" name="tanggal_lahirUbah"
                                class="form-control flatpickr js-flatpickr-dataTime" require>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fakultas_id">Fakultas</label>
                            <select class="form-control" id="fakultas_idUbah" name="fakultas_idUbah" required>
                                <?php foreach ($tampil_fakultas as $fklts) : ?>
                                    <?php if($mhs['fakultas_id'] == $fklts['id_fakultas']): ?>
                                        <option value="<?= $fklts["id_fakultas"] ?>" selected><?= $fklts["nama_fakultas"] ?></option>
                                    <?php else: ?>
                                        <option value="<?= $fklts["id_fakultas"] ?>"><?= $fklts["nama_fakultas"] ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jurusan_id">Jurusan</label>
                            <select class="form-control" id="jurusan_idUbah" name="jurusan_idUbah" required>
                                <?php foreach ($tampil_jurusan as $jrsn) : ?>
                                    <?php if($mhs['jurusan_id'] == $jrsn['id_jurusan']): ?>
                                        <option value="<?= $jrsn["id_jurusan"] ?>" selected><?= $jrsn["nama_jurusan"] ?></option>
                                    <?php else: ?>
                                        <option value="<?= $jrsn["id_jurusan"] ?>"><?= $jrsn["nama_jurusan"] ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ipk">IPK</label>
                        <input type="number" step="any" class="form-control" id="ipkUbah" name="ipkUbah" require>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-success float-right">Simpan</a>
                    <button type="reset" class="btn btn-info float-right">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- AKHIR MODAL EDIT -->

<!-- MODAL TAMBAH -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="index.php?page=tambah_mhs" method="POST">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="18107022" require>
                    </div>
                    <div class="form-group">
                        <label for="nama_mahasiswa">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa"
                            placeholder="Jefri Arnanda Putro" require>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                placeholder="Kota/Kabupaten" require>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" id="tanggal_lahir" name="tanggal_lahir"
                                class="form-control flatpickr js-flatpickr-dataTime" placeholder="Tanggal" require>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fakultas_id">Fakultas</label>
                            <select class="form-control" id="fakultas_id" name="fakultas_id" required>
                                <option selected>Pilih Fakultas</option>
                                <?php foreach ($tampil_fakultas as $fklts) : ?>
                                <option value="<?= $fklts["id_fakultas"] ?>"><?= $fklts["nama_fakultas"] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jurusan_id">Jurusan</label>
                            <select class="form-control" id="jurusan_id" name="jurusan_id" required>
                                <option selected>Pilih Jurusan</option>
                                <?php foreach ($tampil_jurusan as $jrsn) : ?>
                                <option value="<?= $jrsn["id_jurusan"] ?>"><?= $jrsn["nama_jurusan"] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ipk">IPK</label>
                        <input type="number" step="any" class="form-control" id="ipk" name="ipk" placeholder="Nilai IPK"
                            require>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</a>
                        <button type="reset" class="btn btn-info float-right">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- AKHIR MODAL TAMBAH -->
