<?php
// Create database connection using config file
require ('./config/config.php');

    $tampil = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa ORDER BY nim ASC");
?>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md">
            <form action="" class="" method="POST">
                <input class="col-sm-2 col-form-label" type="text" placeholder="Search" name="keyword"
                    autocomplete="off">
                <input class="btn btn-primary" type="submit" name="cari" value="Search">
            </form>
            <?php
                if(isset($_POST['cari'])){
                    $keyword = $_POST['keyword'];
                    $result = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa ORDER BY nim LIKE '%$keyword%' OR nama_mahasiswa LIKE '%$keyword%' OR tempat_lahir LIKE '%$keyword%' OR tanggal_lahir LIKE '%$keyword%' OR ipk LIKE '%$keyword%' ");
                    $tampil = $result;
                }
                else{
                    $tampil = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa ORDER BY nim ASC");
                }
            ?>
            </br>
            <table class="table table-bordered" id="tampil">
                <thead class="thead-dark">
                    <tr>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>IPK</th>
                        <th></th>
                    </tr>

                    <?php
                        while($user_data = mysqli_fetch_array($tampil)) {         
                            echo "<tr>";
                            echo "<td>".$user_data['nim']."</td>";
                            echo "<td>".$user_data['nama_mahasiswa']."</td>";
                            echo "<td>".$user_data['tempat_lahir']."</td>";
                            echo "<td>".$user_data['tanggal_lahir']."</td>";
                            echo "<td>".$user_data['ipk']."</td>";
                            echo "<td><a class='badge badge-primary' href='add.php?id=$user_data[nim]'>Pinjam </a></td>";
                        }
                    ?>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#tampil').DataTable();
    });
</script>