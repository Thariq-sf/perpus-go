<?php session_start();
if (isset($_SESSION['nama'])) {
    $nama = $_SESSION['nama'];
} else {
    $nama = null;
}
?>
<?php
function generateInitials($name)
{
    $words = explode(' ', $name);
    $initials = '';
    for ($i = 0; $i < min(count($words), 2); $i++) {
        $initials .= strtoupper($words[$i][0]);
    }

    return $initials;
}
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
<link rel="stylesheet" href="style.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple Sidebar</title>
<style>
    #logoutbutton {
        color: red;
        background-color: transparent;
        border-color: transparent;
        position: absolute;
        bottom: 3;
        font-size: 90%;
    }
</style>

<body>


    <div class="sidebar" id="mySidebar">
        <span class='subjudul textside'>
            <span style='color:black'>
                <?php echo $nama ?>
            </span>
        </span>
        <a href="#">Dashboard</a>
        <a href="#">Buku</a>
        <a href="#">Peminjaman</a>
        <a href="#">Pengunjung</a>
        <a href="#">Pengaturan</a>
        <button class="textside" id='logoutbutton' data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            logout
        </button>
    </div>


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



    <script>
        function keluar() {
            window.location.href = "logout.php";
        }
    </script>

</body>



</html>