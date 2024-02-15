<?php session_start();
$_SESSION['menuselect'] = 'Dashboard';
?>

<div class='container' style="margin-bottom:2%;padding-top:60px">
    <div class='box tabel'>Dipinjam<p><b>100 buku</b></div>
    <div class='box tabel'>Tersedia<p><b>200 buku</b></div>
    <div class='box tabel'>Total<p><b>100 buku</b></div>

</div>
<div class='container_big'>
    <div class='tabel' style="padding:1%">
        <h5 class='judul' style='margin-bottom:5%;'>Daftar Peminjaman</h5>


        <!-- tabel -->
        <table class="table" id="tabel_baris">
            <thead class='title'>
                <tr style="background-color:lightgray;">
                    <td>No</td>
                    <td>Nama</td>
                    <td>Buku</td>
                    <td>Tanggal Meminjam</td>
                    <td>Sisa Waktu</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class='title'>Davis Rosser<p style="color:#2680EB">XII SIJA 2</td>
                    <td>Ayat Ayat cinta</td>
                    <td>14 february 2023</td>
                    <td>lewat 1 hari</td>
                    <td><button class='btn btn-primary ButtonB'>kembalikan</button></td>
                </tr>
            </tbody>
        </table>
        <!-- end -->
    </div>
</div>