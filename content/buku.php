<?php session_start();
$_SESSION['menuselect'] = 'Buku';
?>
<div class='container_big'>

    <div class='tabel' style="padding:1%;margin-top:60px">
        <div class='gridbox'>


            <h5 class='judul'>Daftar Buku</h5>

            <div style='display:flex;justify-content:right;flex-wrap:wrap'>

                <!--input pencarian -->
                <input type='text' class='form-control'
                    style='width:200px;display:block;margin-right:1%;margin-bottom:2%'
                    placeholder="cari judul atau ISBN"></input>

                <!--end -->


                <!--dropdown filter -->
                <span class='title' style='width:100px;margin-right:1%'>
                    <!--id sama value variable function onclick pilihdropdown() harus sama ,misal kalau disini yaitu id nya 'filter'-->
                    <input type="button" id='Filter' class=" title form-control dropdown2"
                        onclick="toggleDropdown('myDropdown',this)" value='filter'></input>
                    <span class="dropdown-content" id="myDropdown">
                        <!--onclick pilihdropdown('nama value yg bakal ngisi dropdown','nama id yg mau dirubah valuenya')-->
                        <!--kalau mau nambah pilihan atau kurang tinggal copy paste button yg bawah terus tinggal ganti -->
                        <button class="buttontransparant selectoption"
                            onclick='pilihdropdown("Opsi1","Filter")'>Opsi1</button>
                        <button class="buttontransparant selectoption"
                            onclick='pilihdropdown("Opsi2","Filter")'>Opsi2</button>
                        <button class="buttontransparant selectoption"
                            onclick='pilihdropdown("Opsi3","Filter")'>Opsi3</button>
                        <hr>
                        <!--pilihan value ke default atau semula-->
                        <button class="buttontransparant selectoption"
                            onclick='pilihdropdown("Filter","Filter")'>Filter</button>
                    </span>
                </span>
                <!--end -->

                <!--tombol tambah-->
                <input type="text" class='btn btn-primary title'
                    style='width:90px;margin-top:1%;font-size:90%;margin-right:1%' value="Tambah +"> </input>
                <!--end -->

            </div>


            <!--menambilkan jumlah buku -->
            <p>Menampilkan 1-10 dari 100 buku</p>
            <!--end -->


            <!--dropdown urutkan,mekanisme nya hampir sama kayak yg atas,cuman beda di id sama isi valuenya -->
            <div style='display:flex;flex-wrap:no-wrap;justify-content: right;'>
                <span style='float:right;margin-top:2%'> Urutkan :</span>
                <span class='title container-horizontal-right' style='width:180px'>
                    <input type="button" id='Urutkan' class=" title form-control dropdown2"
                        onclick="toggleDropdown('myDropdown2',this)" value='Urutkan' style="padding:0% 5%"></input>
                    <span class="dropdown-content" id="myDropdown2">
                        <button class="buttontransparant selectoption"
                            onclick='pilihdropdown("terbaru","Urutkan")'>terbaru</button>
                        <button class="buttontransparant selectoption"
                            onclick='pilihdropdown("terlama","Urutkan")'>terlama</button>
                        <button class="buttontransparant selectoption"
                            onclick='pilihdropdown("A-Z","Urutkan")'>A-Z</button>
                        <hr>
                        <button class="buttontransparant selectoption"
                            onclick='pilihdropdown("Filter","Urutkan")'>Urutkan</button>
                    </span>
                </span>

            </div>

            <!--end -->

        </div>

        <div style="display:flex;flex-wrap:wrap;">

            <div class='bukubox'>
                <div class="foto-buku buku-dipinjam" style="background-image:url('contoh1.png')">
                </div>
                <div class="isi-box" style='padding:4%;padding-bottom:10%;'>
                    <h5 class="judul">Kambing Jantan</h5>
                    <p style='margin-bottom:1%'>raditya dika</p>
                    <p style='margin-bottom:0%'>rak no.1</p>
                    <p>tersedia 3 buku</p>
                    <div style="display:flex;flex-wrap:wrap;">
                        <button class='btn btn-primary title'><i class="fa fa-ellipsis-h"></i></button>
                        <button class='btn btn-primary title'>Pinjam Buku</button>
                    </div>
                </div>
            </div>

            <div class='bukubox'>
                <div class="foto-buku" style="background-image:url('contoh1.png')">
                </div>
                dfasdas
            </div>
            <div class='bukubox'>
                <div class="foto-buku" style="background-image:url('contoh1.png')">
                </div>
                dfasdas
            </div>
            <div class='bukubox'>
                <div class="foto-buku" style="background-image:url('contoh1.png')">
                </div>
                dfasdas
            </div>
            <div class='bukubox'>
                <div class="foto-buku" style="background-image:url('contoh1.png')">
                </div>
                dfasdas
            </div>
            <div class='bukubox'>
                <div class="foto-buku" style="background-image:url('contoh1.png')">
                </div>
                dfasdas
            </div>
            <div class='bukubox'>
                <div class="foto-buku" style="background-image:url('contoh1.png')">
                </div>
                dfasdas
            </div>

            <div class='bukubox'>
                <div class="foto-buku" style="background-image:url('contoh1.png')">
                </div>
                dfasdas
            </div>
            <div class='bukubox'>
                <div class="foto-buku" style="background-image:url('contoh1.png')">
                </div>
                dfasdas
            </div>
            <div class='bukubox'>
                <div class="foto-buku" style="background-image:url('contoh1.png')">
                </div>
                dfasdas
            </div>
            <div class='bukubox'>
                <div class="foto-buku" style="background-image:url('contoh1.png')">
                </div>
                dfasdas
            </div>
            <div class='bukubox'>
                <div class="foto-buku" style="background-image:url('contoh1.png')">
                </div>
                dfasdas
            </div>
            <div class='bukubox'>
                <div class="foto-buku" style="background-image:url('contoh1.png')">
                </div>
                dfasdas
            </div>
            <div class='bukubox'>
                <div class="foto-buku" style="background-image:url('contoh1.png')">
                </div>
                dfasdas
            </div>

            <div class='bukubox'>
                <div class="foto-buku" style="background-image:url('contoh1.png')">
                </div>
                dfasdas
            </div>
        </div>


    </div>








</div>