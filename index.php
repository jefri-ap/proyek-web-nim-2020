<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/datedropper.pro.min.js"></script>

</head>

<body>
    <?php require('layout/components/navbar.php'); ?>

            <?php 
	            if(isset($_GET['page'])){
		        $page = $_GET['page'];

		            switch ($page) {
		    	        case 'home':
	    			        include "layout/components/home.php";
    				        break;
			            case 'data-mahasiswa':
				            include "layout/daftarMahasiswa.php";
				            break;
			            case 'data_ruang':
				            include "ruangan/data_ruang.php";
				            break;			
			            default:
				            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				            break;
		            }
	            }           
                else{
                    include "layout/components/home.php";
                }

	        ?>

            <footer class="page-footer font-small blue">
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <span>Jefri Arnanda Putro</span>
                </div>
            </footer>
</body>

</html>