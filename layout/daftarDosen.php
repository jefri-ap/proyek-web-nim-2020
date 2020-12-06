<?php
// Create database connection using config file
    include_once ('./config/config.php');    
    $tampil_dosen = Index("SELECT * FROM tb_dosen ORDER BY nip");
    $tampil_fakultas = Index("SELECT * FROM tb_fakultas");
    $tampil_jurusan = Index("SELECT * FROM tb_jurusan");
?>

<div class="container mt-4 mb-5">
    <div class="row">
        <div class="col-md">
            <h4 class="card-title">Daftar Data Dosen</h4>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered" id="tampil">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Dosen</th>
                                <th>Fakultas</th>
                                <th>Jurusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1 ?>
                            <?php foreach($tampil_dosen as $dosen) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $dosen['nip'] ?></td>
                                <td><?= $dosen['nama_dosen'] ?></td>
                                <td>
                                    <?php foreach($tampil_fakultas as $fklts) : ?>
                                        <?php if($fklts['id_fakultas'] == $dosen['fakultas_id']) : ?>
                                            <?= $fklts['nama_fakultas'] ?>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </td>  
                                <td>
                                    <?php foreach($tampil_jurusan as $jrsn) : ?>
                                        <?php if($jrsn['id_jurusan'] == $dosen['prodi_id']) : ?>
                                            <?= $jrsn['nama_jurusan'] ?>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Dosen</th>
                                <th>Fakultas</th>
                                <th>Jurusan</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#tampil').DataTable();
    });
</script>