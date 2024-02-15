<?php session_start();
$_SESSION['menuselect'] = 'Peminjaman';
?>

<div class='container_big'>

    <div class='tabel' style="padding:1%;margin-top:60px">


        <div class='gridbox'>
            <h5 class='judul'>Daftar Peminjaman</h5>
            <div style='display:flex;justify-content:right;flex-wrap:wrap'>


                <input type='text' class='form-control' style='width:200px;margin-bottom:1%;margin-right:2%'
                    placeholder="tanggal mulai - tanggal selesai"></input>
                <button class='btn btn-primary title' style='width:120px;margin-top:1%;font-size:90%;margin-right:1%'
                    data-bs-toggle="modal" data-bs-target="#modal_peminjaman">+
                    Pinjam Buku</button>

            </div>
        </div>


        <!-- tabel peminjaman berlangsung -->
        <div>
            <table class="table"
                style='font-size:90%;text-align:center; padding:10%;border-bottom:2px solid;color:silver'
                id="tabel_baris">
                <tr style='cursor: default;'>
                    <td class='mode' style="width:7%;border-bottom: 2px solid;color:#2680EB;" onclick="mode(this)">
                        Berlangsung</td>
                    <td class='mode' style="width:7%" onclick="mode(this)">Riwayat</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="table sub_tabel" id="Berlangsung">
            <table class='table'>
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
                        <td><button class='btn btn-primary  ButtonB'>kembalikan</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- end -->


        <!-- tabel peminjaman riwayat -->

        <div class="table sub_tabel" id="Riwayat" style='display:none'>
            <table class='table'>
                <thead class='title'>
                    <tr style="background-color:lightgray;">
                        <td>No</td>
                        <td>Nama</td>
                        <td>Buku</td>
                        <td>Tanggal Meminjam</td>
                        <td>Tanggal Mengembalikan</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class='title'>Davis Rosser<p style="color:#2680EB">XII SIJA 2</td>
                        <td>Ayat Ayat cinta</td>
                        <td>14 february 2023</td>
                        <td>15 february 2023</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- end -->

    </div>




    <!-- popup peminjaman -->
    <div class="modal fade" id="modal_peminjaman" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title judul" id="exampleModalLabel">Pinjam Buku</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class='title'>Nama</span>
                    <input type="text" class="form-control" placeholder='cari nama atau nomor whatsapp'></input>

                    <div id='jumlah_pinjaman' style="margin-bottom:5%">
                        <div class='form-control'
                            style='box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.1);padding-bottom:2%'>
                            <p class='title'>Pinjaman 1</p>
                            <hr>
                            <div style="display:flex;justify-content:space-between">
                                <div style='margin-right:1%;width:50%'>
                                    <p class='title'>Buku</p>
                                    <input type="text" class="form-control" placeholder='buku'></input>
                                </div>
                                <div style='margin-right:1%;width:50%'>
                                    <p class='title'>Durasi Meminjam</p>
                                    <input type="text" class="form-control"
                                        placeholder='Tuliskan jumlah dalam hari'></input>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class='btn btn-primary'> Tambah Pinjaman + </button>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- end -->
    </div>