<?php
require("config/config.php");

?>

<?php if (isset($_POST['tambah'])): ?>
    <?php if (Add($_POST) > 0): ?>
        <div class="modal fade" id="suksesModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="suksesModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-2 ">
                                <i class="far fa-check-circle text-success display-3"></i>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto align-self-center">
                                <h4>Data Berhasil Ditambah</h4>
                            </div>
                        </div>
                        <a class="btn btn-primary float-right" href="index.php?page=data_mhs" role="buton">Oke</a>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="modal fade" id="suksesModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="suksesModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-2 ">
                                <i class="fas fa-exclamation-circle text-danger display-3"></i>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto align-self-center">
                                <h4>Data Gagal Ditambah</h4>
                            </div>
                        </div>
                        <a class="btn btn-primary float-right" href="index.php?page=data_mhs" role="buton">Oke</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
<?php endif ?>

<script>
    $("#suksesModal").modal('show');
</script>
