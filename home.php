<?php session_start();
if (isset($_SESSION['nama'])) { //kalau isset/variable 'nama' nya ada
    $nama = $_SESSION['nama']; //value dari variable diambil dari variable session nama atau nama yg ada didatabase sesuai nomor wa
} else {
    $nama = null; //kalau gak ada jadinya null atau kosong
}


// function generateInitials($name)
// {
//     $words = explode(' ', $name);
//     $initials = '';
//     for ($i = 0; $i < min(count($words), 2); $i++) {
//         $initials .= strtoupper($words[$i][0]);
//     }

//     return $initials;
// }


?>


<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple Sidebar</title>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: whitesmoke;
        font-family: 'CorporativeN', sans-serif;
        color: grey;
        font-size: 90%;
    }

    .flex-container {
        overflow: hidden;
    }

    #content {
        margin-left: 7%;
        padding-top: 5%;
    }



    .sidebar,
    .main-container {
        width: 20%;
        float: left;
        box-sizing: border-box;
    }


    .menu-button {
        display: none;
    }

    @media screen and (max-width: 550px) {
        /* kalau ukuran kurang dari 550px/di minimize atau tampilan mobile*/

        .sidebar {
            width: 0%;
        }

        .main-content {
            margin-left: 0%;
        }

        #content {
            margin-left: 0%;
        }

        .top-bar {
            padding-left: 1%;
        }

        .menu-button {
            display: inline-block;
        }
    }
</style>
</head>

<body>

    <div class="flex-container">
        <!-- sidebar -->

        <div class="sidebar" id="mySidebar">
            <button class='buttontransparant menu-button' style="float:right;margin-top:2%" onclick='menushow("tutup")'>
                <i style='font-size:20px;color:black;' class=" fa fa-ellipsis-v"></i></button>
            <div class='subjudul text_side'>
                <span style='color:black'>
                    <?php echo $nama ?>
                </span>
            </div>
            <button id='Dashboard' class='text_side menuselect buttontransparant'
                onclick='ada("Dashboard")'>Dashboard</button>
            <button id='Buku' class='text_side disselect buttontransparant' onclick='ada("Buku")'>Buku</button>
            <button id='Peminjaman' class='text_side disselect buttontransparant'
                onclick='ada("Peminjaman")'>Peminjaman</button>
            <button id='Pengunjung' class='text_side disselect buttontransparant'
                onclick='ada("Pengunjung")'>Pengunjung</button>
            <button id='Pengaturan' class='text_side disselect buttontransparant'
                onclick='ada("Pengaturan")'>Pengaturan</button>
            <hr style='margin: 25% 5%;'>
            <button class="text_side buttontransparant" id='logoutbutton' style="color:red;" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop"><i class="bi-box-arrow-right"></i>
                Keluar
            </button>
        </div>

        <!-- end -->


        <div class="main-content" id="mainContent">
            <!-- top bar -->
            <div class="top-bar" id='top-bar'>
                <div style="display:flex">
                    <button class='buttontransparant menu-button' onclick='menushow("buka")'>
                        <i style='margin-right:3%;margin-top:1%;font-size:20px;color:black'
                            class=" fa fa-ellipsis-v"></i></button>
                    <div>
                        <h5 class='judul' style='color:black'> Selamat
                            Datang di <span style="color:#2680EB;">Perpus</span></h5>
                        <h6 class='subjudul'>
                            <?php if ($nama != null) {
                                echo "Halo " . $nama;
                            } else {
                                echo "Anda Belum Login";
                            } ?>
                        </h6>
                    </div>
                </div>
            </div>
            <!-- end -->

            <!--konten : karena isi nya beda2 tiap klik jadinya element diisi pake ajax di javascript -->
            <div id='content'>
            </div>
        </div>
        <!-- end -->
    </div>




    <!-- pop up logout /keluar -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title judul" id="staticBackdropLabel">Log Out</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin keluar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary title" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary title" onclick="keluar()">Iya</button>
                </div>
            </div>
        </div>
    </div>

    <!-- end -->






    <script>

        var selected_dropdown = null;

        window.addEventListener('resize', function () {
            // Mendapatkan lebar jendela saat ini
            var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            // Memeriksa jika lebar jendela kurang dari 500px
            if (windowWidth < 550) {
                document.getElementById('mySidebar').style.width = '0%';
            } else {
                document.getElementById('mySidebar').style.width = '20%';
            }
        });


        function menushow(action) {//buat munculin side bar di versi mobile/ukuran layar kecil
            if (action == 'buka') {
                document.getElementById('mySidebar').style.width = '70%';
            } else {
                document.getElementById('mySidebar').style.width = '0%';
            }
        }

        //mengisi value di dropdown
        function pilihdropdown(selectcvalue, namaID) {
            document.getElementById(namaID).value = selectcvalue;
        }

        //munculin sama ngilangin dropdown
        function toggleDropdown(element, dropdown) {
            if (document.getElementById(element).style.display == "inline-block") {
                document.getElementById(element).style.display = "none";
                selected_dropdown = null;
            } else if (selected_dropdown == null) {
                document.getElementById(element).style.display = "inline-block";
                document.getElementById(element).style.width = dropdown.clientWidth;
                selected_dropdown = dropdown.getAttribute("id");
            }
        }

        // Menutup dropdown saat mengklik di luar dropdown
        window.onclick = function (event) {
            if (!event.target.matches('#' + selected_dropdown)) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.style.display === "inline-block") {
                        openDropdown.style.display = "none";
                        selected_dropdown = null;
                    }
                }
            }
        }

        <?php
        //biar pas di refresh tetap di halaman gak ngulang.contohnya misal dihalaman buku,kalau di restart jadinya balik ke halaman dashboard kalau code ini dihilangin
        //variable session 'menuselect' 
         if (isset($_SESSION['menuselect'])) {
            echo 'var disselect = "' . $_SESSION['menuselect'] . '";
            document.querySelector(".menuselect").classList.remove("menuselect");
            document.getElementById("' . $_SESSION['menuselect'] . '").classList.add("menuselect");';
        } else {
            echo 'var disselect = "Dashboard";';//kalau gak login langsung ke halaman dashboard atau variable diisi otomatis jadi dashboard tanpa harus nerima variable dari form login
        }
        ?>

         //munculin halaman di awal sesudah login
        $(document).ready(function () {
            $.ajax({
                type: 'POST',
                url: "content/" + disselect + ".php",
                cache: false,
                success: function (msg) {
                    $("#content").html(msg);
                }
            });
        });

        function keluar() {
            window.location.href = "logout.php";
        }

        //munculin halaman yg dituju sesuai sama tombol yg di click
        function ada(a) {
            if (disselect == a) {
            } else {
                $.ajax({
                    type: 'POST',
                    url: "content/" + a + ".php",
                    cache: false,
                    success: function (msg) {
                        $("#content").html(msg);
                    }
                });
            }
            document.getElementById(disselect).classList.remove("menuselect");
            document.getElementById(a).classList.add("menuselect");
            disselect = a;
        }


        //top bar kalau misal di scroll
        document.addEventListener("scroll", function () {
            var fixedElement = document.getElementById("top-bar");
            var scrollPosition = window.scrollY;

            var scrollThreshold = window.innerHeight / 4;

            if (scrollPosition > scrollThreshold) {
                fixedElement.style.position = "relative";
                fixedElement.style.top = scrollThreshold + "px";
            } else {
                fixedElement.style.position = "fixed";
                fixedElement.style.top = "0";
            }
        });


        //misal di content ada lagi pembagian halaman lagi kayak di halaman pengaturan yg harus di click kalau mau ke halaman tsb
        function mode(element) {

            var element_id = element.innerText.split(' ').join('_');
            var sub_tabel = document.getElementsByClassName('sub_tabel');

            if (document.getElementById(element_id).style.display == "none") {
                for (var j = 0; j < sub_tabel.length; j++) {
                    sub_tabel[j].style.display = 'none';

                }

                document.getElementsByClassName('sub_tabel').display = 'none';
                var elements = document.getElementsByClassName('mode');

                for (var i = 0; i < elements.length; i++) {
                    elements[i].style.borderBottom = "2px solid";
                    elements[i].style.color = "silver";
                }
                document.getElementById(element_id).style.display = 'block';

                element.style.borderBottom = "2px solid #2680EB";
                element.style.color = '#2680EB';
            }
        }
        


        function edittambah(nama_value,nama_halaman,jenis_edit){
            document.getElementById('judul_modal_edit').innerHTML =jenis_edit + ` `+ nama_halaman;
            document.getElementById('title_modal_edit').innerHTML = nama_halaman;
            document.getElementById('edittambah_input').placeholder = "Tuliskan " +nama_halaman;


            if(jenis_edit == "Edit"){
                
                document.getElementById('edittambah_input').value = nama_value;
            }
            
        }

    </script>

</body>



</html>