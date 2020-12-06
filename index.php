<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 8</title>

    <link rel="stylesheet" href="assets/css/style.css">
	<!-- bootstrap core css -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<!-- datatables css -->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
	<!-- animasi -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- flatpickr datepick css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> </script>
	<!-- boostrap bundle js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"> </script>
    <!-- datatables -->
	<script src="assets/js/datatables.min.js"></script>
	<!-- flatpickr datepick css -->
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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
			            case 'data_mhs':
				            include "layout/daftarMahasiswa.php";
				            break;
			            case 'tambah_mhs':
				            include "layout/CRUD/add.php";
				            break;
			            case 'ubah_mhs':
				            include "layout/CRUD/edit.php";
				            break;
			            case 'hapus_mhs':
				            include "layout/CRUD/delete.php";
				            break;
						case 'data_dosen':
							include "layout/daftarDosen.php";
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
    <div class="footer-copyright text-center py-3 bg-dark text-white mt-5 mb-0">© 2020 Copyright:
        <span>Jefri Arnanda Putro</span>
    </div>
</footer>
</body>

</html>