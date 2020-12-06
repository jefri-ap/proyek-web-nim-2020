<?php
// Create database connection using config file
    include_once ('./config/config.php');    
    $tampil_mahasiswa = Index("SELECT * FROM tb_mahasiswa ORDER BY nim");
    $tampil_fakultas = Index("SELECT * FROM tb_fakultas");
    $tampil_jurusan = Index("SELECT * FROM tb_jurusan");
?>

<div class="container mt-4 mb-5">
    <div class="row">
        <div class="col-md">
            <h4 class="card-title">Daftar Data Mahasiswa</h4>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered" id="tampil">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Fakultas</th>
                                <th>Jurusan</th>
                                <th>IPK</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1 ?>
                            <?php foreach($tampil_mahasiswa as $mhs) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $mhs['nim'] ?></td>
                                <td><?= $mhs['nama_mahasiswa'] ?></td>
                                <td><?= $mhs['tempat_lahir'] ?></td>
                                <td><?=  date("d F Y", strtotime($mhs['tanggal_lahir'])) ?></td>
                                <td>
                                    <?php foreach($tampil_fakultas as $fklts) : ?>
                                        <?php if($fklts['id_fakultas'] == $mhs['fakultas_id']) : ?>
                                            <?= $fklts['nama_fakultas'] ?>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </td>  
                                <td>
                                    <?php foreach($tampil_jurusan as $jrsn) : ?>
                                        <?php if($jrsn['id_jurusan'] == $mhs['jurusan_id']) : ?>
                                            <?= $jrsn['nama_jurusan'] ?>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </td>
                                <td> <?=$mhs['ipk'] ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col-4">
                                            <h5><a id="tombolUbah" class='badge badge-pill badge-success' data-toggle="modal" data-target="#editModal" 
                                                   data-id="<?= $mhs['id_mahasiswa'];?>" data-nim="<?= $mhs['nim'];?>" data-nama="<?= $mhs['nama_mahasiswa'];?>" 
                                                   data-tempat="<?= $mhs['tempat_lahir'];?>" data-tanggal="<?= $mhs['tanggal_lahir'];?>" data-fakultas="<?= $mhs['fakultas_id'];?>"
                                                   data-jurusan="<?= $mhs['jurusan_id'];?>" data-ipk="<?= $mhs['ipk'];?>" role="button">Edit </a></h5>
                                        </div>
                                        <div class="col-4">
                                            <h5><a class='badge badge-pill badge-danger' data-toggle="modal" data-target="#hapusModal" role="button">Hapus </a></h5>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Fakultas</th>
                                <th>Jurusan</th>
                                <th>IPK</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary float-right " data-toggle="modal" data-target="#addModal"><i class="fas fa-plus mr-2"></i>Tambah Data Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>
    <?php require('components/modal.php'); ?>
</div>

<script>
    $(document).ready(function(){
        $('#tampil').DataTable();
    });

    $(document).on('click', '#tombolUbah', function() {
        let id = $(this).data('id');
        let nim = $(this).data('nim');
        let nama = $(this).data('nama');
        let tempat = $(this).data('tempat');
        let tanggal = $(this).data('tanggal');
        let fakultas = $(this).data('fakultas');
        let jurusan = $(this).data('jurusan');
        let ipk = $(this).data('ipk');

        $('.modal-body #id_mahasiswaUbah').val(id);
        $('.modal-body #nimUbah').val(nim);
        $('.modal-body #nama_mahasiswaUbah').val(nama);
        $('.modal-body #tempat_lahirUbah').val(tempat);
        $('.modal-body #tanggal_lahirUbah').val(tanggal);
        $('.modal-body #fakultas_idUbah').val(fakultas); 
        $('.modal-body #jurusan_idUbah').val(jurusan);
        $('.modal-body #ipkUbah').val(ipk);
    });
    
    flatpickr("#tanggal_lahir", {
        altInput: true,
        dateFormat: "Y-m-d",
        maxDate: "2002.12.31"
    });
</script>