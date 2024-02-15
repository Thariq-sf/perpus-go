<html>


<!-- library boostrap -->
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

<!-- end -->



<!-- buat nyambungin file css nya -->
<link rel="stylesheet" type="text/css" href="style.css">
<!-- end -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
//buat nyambungin file php // database
include 'database.php';

//fungsi session,biar data atau variable tersimpan di semua halaman,selama browser tidak di close atau laptop tidak di restart
session_start(); 

?>

<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'CorporativeN', sans-serif;
        background-color: #E0EDFC;
    }

    #login-box {
        background-color: white;
        padding: 4%;
        position: absolute;
        border-radius: 2%;
        padding-bottom: 3%;
        width: 70%;
        max-width: 500px;
        box-shadow: 0 0px 3px rgba(0, 0, 0, 0.1);
        color: gray;
        font-size: 100%;
    }

    @media only screen and (max-width: 700px) {
        #login-box {
            width: 95%;
            padding: 3%;
        }
    }



    #input-login {
        color: gray;
        margin-top: 10%;
        margin-bottom: 10%;
    }

    .boxinput {
        margin-bottom: 6%;
    }

    .tombolmasuk {
        width: 100%;
        font-size: 90%;
        border-radius: 7px;
        font-family: 'CorporativeR', sans-serif;
    }


    .password-container {
        position: relative;
    }

    .password-input {
        padding-right: 30px;
    }

    .show-password-btn {
        position: absolute;
        top: 70%;
        right: 5px;
        transform: translateY(-50%);
        cursor: pointer;
        border: none;
        background-color: transparent;
        font-size: 14px;
    }

    .alert {
        font-size: 85%;
        padding-top: 2%;
        padding-bottom: 2%;
    }
</style>

<body>

    <div id='login-box'>
        <div id='box'>

            <!-- method form ,jadi element yg ada di dalam element <form>,kalau di submit,valuenya jadi variable post -->
            <form action="" method='post' onsubmit="return validasi()">
                <!-- end -->

                <!-- Judul -->
                <h3 class='judul' style="color:black"><b>Selamat datang di <span
                            style="color:#2680EB">PerpusGo</span></b>
                </h3>
                <p>
                <h5 class='subjudul'>Masuk dengan akun yang terdaftar</h5>
                <!-- end -->

                <!-- input text nomor wa -->
                <div id='input-login'>
                    <div class='boxinput'>
                        <span id='warning-alert'></span>
                    </div>
                    <div class='boxinput'>
                        <span class='title'>Nomor WhatsApp</span>
                        <input type='text' id='nomor' name='nomor' class='form-control'
                            placeholder='Tuliskan Nomer WhatsApp' oninput="validateInput(this)" pattern="\d*"
                            maxlength="16">
                        <span style='font-size:75%;color:red;' id='alertnomor'></span>
                    </div>

                    <!-- end -->


                    <!-- input text password -->

                    <div class='boxinput'>
                        <div class='password-container' style='position:relative;'>
                            <span class='title'>Password</span>
                            <input type='password' name='password' class='form-control password-input' id='password'
                                placeholder='Tuliskan Password'></input>

                            <button type="button" class="show-password-btn" id='showpassword'
                                onclick="togglePassword()"><i class="bi-eye-fill" style='color:gray;'></i></button>
                        </div>
                        <span style='font-size:75%;color:red;' id='alertpassword'></span>
                    </div>

                    <!-- end -->

                </div>
                <center>
                     <!-- submit -->
                    <button type="submit" class="btn btn-primary tombolmasuk">Masuk</button>
                     <!-- end -->
                </center>
            </form>
        </div>

    </div>


    <?php
    //pas tombol submit di click,akan menuju file yang dituju,dalam kasus ini ke file ini sendiri,jadi fungsi php ini bakal jalan kalau form mengirim variable post
    //fungsi isset di php adalah supaya halaman gak error kalau variable gak ada pas di if//
    if (isset($_POST['nomor'])) {
        $nomor = $_POST['nomor'];
        $password = $_POST['password'];

        $row = $conn->query("SELECT * FROM userdata where nomor ='$nomor'")->fetch_assoc(); // kalau data ada
    
        if (isset($row)) {
            if ($password == $row['password']) { // kalau passwordnya benar

                // variable session [$_SESSION['nama variable']] bisa digunakan di halaman lain asalkan browser tidak ditutup/laptop tidak direstart
                $_SESSION['nama'] = $row['nama'];//set variable session nama buat di halaman lain
                
                echo '<script>window.location.href="home.php" </script>';//mengakses ke file home.php
            } else { // kalau passwordnya salah
                echo '<script>document.getElementById("alertpassword").innerHTML = ` password salah `;
                document.getElementById("nomor").value ="' . $nomor . '";
                document.getElementById("password").value = "";
                </script>';
            }
        } else { { // kalau data gak ada
                echo '<script> document.getElementById("warning-alert").innerHTML = ` <div class="alert alert-danger" role="alert">
            Akun Tidak ditemukan
          </div> `;
            document.getElementById("nomor").value ="' . $nomor . '";
            document.getElementById("password").value = "";
            </script>';
            }
        }
    }
    ?>

    <script>
 //document.getElementById()
 //fungsinya buat milih element berdasarkan id nya misal <p id='elemen1'>text</p>
 //di script jadinya "document.getElementById('elemen1')"; 
 var showPW = document.getElementById('showpassword'); 
        var nomorinput = document.getElementById('nomor');
        var passwordInput = document.getElementById('password');

        function validateInput(input) {// fungsi agar input hanya menerima nomor
            input.value = input.value.replace(/\D/g, '');
        }

        function togglePassword() {// show/hide password

            if (passwordInput.type == 'text') {
                passwordInput.type = 'password'
                showPW.innerHTML = ` <i class="bi-eye-slash-fill" style='color:gray;'></i> `;// icon hide password
            } else {
                passwordInput.type = 'text'
                showPW.innerHTML = ` <i class="bi-eye-fill" style='color:gray;'></i> `;// icon show password
            }
        }

        function validasi() {

            if (nomorinput.value != '' && passwordInput.value != '') {
                //kalau return true maka element form akan mengakses halaman dan juga mengirim variable post dari value element yg berada di dalam//
                return true;
            } else {
                if (nomorinput.value == '') {//kalau input nomor kosong
                    document.getElementById('alertnomor').innerHTML = `nomor harus diisi`;
                } else {
                    document.getElementById('alertnomor').innerHTML = ``;
                }
                if (passwordInput.value == '') {//kalau input password kosong
                    document.getElementById('alertpassword').innerHTML = `password harus diisi`;
                } else {
                    document.getElementById('alertpassword').innerHTML = ``;
                }
                //kalau return false element form tidak akan berfungsi atau mengirim variable post//
                return false;
            }
        }


    </script>


</body>

</html>