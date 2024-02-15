<?php session_start();
$_SESSION['menuselect'] = 'Pengaturan';
?>

<div class='container_big'>

    <div class='tabel' style="padding:1%;margin-top:60px">

        <!-- pilih menu-->
        <h5 class='judul' style='margin-bottom:3%;'>Pegaturan</h5>
        <div>
            <table class="table"
                style='font-size:90%;text-align:center; padding:10%;border-bottom:2px solid;color:silver'
                id="tabel_baris">
                <tr style='cursor: default;'>
                    <td class="mode" style="width:10%;border-bottom: 2px solid;color:#2680EB;" onclick="mode(this)">
                        Profil</td>
                    <td class="mode" style="width:13%" onclick="mode(this)">Nomor Rak</td>
                    <td class="mode" style="width:10%;" onclick="mode(this)">Subjek</td>
                    <td class="mode" style=" width:13%" onclick="mode(this)">Bentuk Karya</td>
                    <td class="mode" style="width:13%" onclick="mode(this)">Mata Pelajaran</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <!-- end -->


        <!-- tabel profil-->
        <div class='sub_tabel' id='Profil'>
            <div class='gridbox'>
                <div>
                    <h6 class='judul'>Foto</h6>
                    <div class='icon_profil judul'>
                        <h1 class='judul'>S</h1>
                    </div>
                    <h6 class='title'>ubah foto</h6>
                </div>
                <div>
                    <div style="display:flex;justify-content:space-between">
                        <h6 class='judul'>Informasi</h6>
                        <button class='form-control' style='width:70px;margin-top:-10px;'>Ubah</button>
                    </div>
                    <table>
                        <tr>
                            <td style='width:60%'>
                                <p class="subtitle"> Nama </p>
                            </td>
                            <td>
                                <p class="title"> Hanif </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="stitle"> Nomor Whatsapp </p>
                            </td>
                            <td>
                                <p class="title"> 01234345523 </p>
                            </td>
                        </tr>
                    </table>
                    <div style="display:flex;justify-content:space-between;margin-top:3%;">
                        <h6 class='judul'>Password</h6>
                        <button class='form-control' style='width:70px;margin-top:-10px;'>Ubah</button>
                    </div>

                </div>

            </div>
        </div>

         <!-- end -->


        <!-- tabel nomor rak-->
        <div class="sub_tabel" id='Nomor_Rak' style='display:none'>
            <div class='gridbox' style='margin-bottom:2%'>
                <h5 class='judul'>Daftar Nomor Rak</h5>
                <div style='display:flex;flex-wrap:wrap;float:right;justify-content: right;'>
                    <button class='form-control title' style='width:100px;margin-top:1%;font-size:90%;margin-right:1%'
                        data-bs-toggle="modal" data-bs-target="#edit_tambah_modal"
                        onclick='edittambah(null,"Nomor_Rak","Tambah")'>Tambah + </button>

                    <input type='text' class='form-control'
                        style='width:190px;display:block;order:-1;margin-right:1%;margin-bottom:1%'
                        placeholder="cari nomor rak"></input>
                </div>
            </div>


            <table class="table" id="tabel_nomor_rak">
                <thead class='title'>
                    <tr style="background-color:lightgray;">
                        <td>No</td>
                        <td>Nomor Rak</td>
                        <td width='50%'>Jumlah Buku</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class='title'>A0001</td>
                        <td>4 Buku</td>
                        <td style='display:flex;flex-wrap:no-wrap'>
                            <button class='form-control' style='width:20%;margin-right:2%' data-bs-toggle="modal"
                                data-bs-target="#edit_tambah_modal" onclick='edittambah("A0001","Nomor_Rak","Edit")'><i
                                    class="bi-pencil-fill"></i></button><button class='form-control'
                                style='width:20%;'><i class="bi-trash-fill"></i></button>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

        <!-- end -->



        <!-- tabel subjek-->
        <div class="sub_tabel" id='Subjek' style='display:none'>
            <div class='gridbox' style='margin-bottom:2%'>
                <h5 class='judul'>Daftar Subjek</h5>
                <div style='display:flex;flex-wrap:wrap;float:right;justify-content: right;'>
                    <button class='form-control title' style='width:100px;margin-top:1%;font-size:90%;margin-right:1%'
                        data-bs-toggle="modal" data-bs-target="#edit_tambah_modal"
                        onclick='edittambah(null,"Subjek","Tambah")'>Tambah + </button>

                    <input type='text' class='form-control'
                        style='width:190px;display:block;order:-1;margin-right:1%;margin-bottom:1%'
                        placeholder="cari Subjek"></input>
                </div>
            </div>
            <table class="table" id="tabel_subjek">
                <thead class='title'>
                    <tr style="background-color:lightgray;">
                        <td>No</td>
                        <td width='70%'>Nama</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class='title'>petualangan</td>
                        <td style='display:flex;flex-wrap:no-wrap'><button class='form-control'
                                style='width:20%;margin-right:2%' data-bs-toggle="modal"
                                data-bs-target="#edit_tambah_modal"
                                onclick='edittambah("petualangan","Subjek","Edit")'><i
                                    class="bi-pencil-fill"></i></button><button class='form-control'
                                style='width:20%;'><i class="bi-trash-fill"></i></button></td>

                    </tr>
                </tbody>
            </table>
        </div>

        <!-- end -->


        <!-- tabel bentuk karya-->

        <div class="sub_tabel Profil" id='Bentuk_Karya' style='display:none'>
            <div class='gridbox' style='margin-bottom:2%'>
                <h5 class='judul'>Daftar bentuk Karya</h5>
                <div style='display:flex;flex-wrap:wrap;float:right;justify-content: right;'>
                    <button class='form-control title' style='width:100px;margin-top:1%;font-size:90%;margin-right:1%'
                        data-bs-toggle="modal" data-bs-target="#edit_tambah_modal"
                        onclick='edittambah(null,"Bentuk_Karya","Tambah")'>Tambah + </button>

                    <input type='text' class='form-control'
                        style='width:190px;display:block;order:-1;margin-right:1%;margin-bottom:1%'
                        placeholder="cari Bentuk Karya"></input>
                </div>
            </div>
            <table class="table" id="tabel_bentuk_karya">
                <thead class='title'>
                    <tr style="background-color:lightgray;">
                        <td>No</td>
                        <td width='70%'>Nama</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class='title'>fiksi</td>
                        <td style='display:flex;flex-wrap:no-wrap'><button class='form-control'
                                style='width:20%;margin-right:2%' data-bs-toggle="modal"
                                data-bs-target="#edit_tambah_modal"
                                onclick='edittambah("fiksi","Bentuk_Karya","Edit")'><i
                                    class="bi-pencil-fill"></i></button><button class='form-control'
                                style='width:20%;'><i class="bi-trash-fill"></i></button></td>

                    </tr>
                </tbody>
            </table>
        </div>

        <!-- end -->


        <!-- tabel mata pelajaran-->

        <div class="sub_tabel Profil" id='Mata_Pelajaran' style='display:none'>
            <div class='gridbox' style='margin-bottom:2%'>
                <h5 class='judul'>Daftar Mata Pelajaran</h5>
                <div style='display:flex;flex-wrap:wrap;float:right;justify-content: right;'>
                    <button class='form-control title' style='width:100px;margin-top:1%;font-size:90%;margin-right:1%'
                        data-bs-toggle="modal" data-bs-target="#edit_tambah_modal"
                        onclick='edittambah(null,"Mata_Pelajaran","Tambah")'>Tambah + </button>

                    <input type='text' class='form-control'
                        style='width:190px;display:block;order:-1;margin-right:1%;margin-bottom:1%'
                        placeholder="cari Mata Pelajaran"></input>
                </div>
            </div>
            <table class="table" id="tabel_Mata_Pelajaran">
                <thead class='title'>
                    <tr style="background-color:lightgray;">
                        <td>No</td>
                        <td width='70%'>Nama</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class='title'>Bahasa Indonesia</td>
                        <td style='display:flex;flex-wrap:no-wrap'><button class='form-control'
                                style='width:20%;margin-right:2%' data-bs-toggle="modal"
                                data-bs-target="#edit_tambah_modal"
                                onclick='edittambah("Bahasa Indonesia","Mata_Pelajaran","Edit")'><i
                                    class="bi-pencil-fill"></i></button><button class='form-control'
                                style='width:20%;'><i class="bi-trash-fill"></i></button></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



 <!-- pop up -->
<div class="modal fade" id="edit_tambah_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title judul" id="judul_modal_edit">text didambil dari value di function edittambah di script di home.php</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class='title' id='title_modal_edit'>diambil dari function edittambah</p>
                <input type="text" id='edittambah_input' class="form-control" placeholder="Tuliskan Nomor Rak"></input>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">kembali</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>