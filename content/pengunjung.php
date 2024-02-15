<?php session_start();
$_SESSION['menuselect'] = 'Pengunjung';
?>

<div class='container_big'>
    <div class='tabel' style="padding:1%;margin-top:60px">
        <div class="gridbox">
            <h5 class='judul' style='margin-bottom:5%;'>Daftar Pengunjung</h5>

            <button class='btn btn-primary title' style='width:120px;margin-top:1%;font-size:90%;margin-right:1%'
                        data-bs-toggle="modal" data-bs-target="#modal_user">+ Tambah user
            </button>
        </div>

        <!-- tabel pengunjung -->
        <table class="table" id="tabel_baris">
            <thead class='title' style="background-color:lightgray;vertical-align: text-top;">
                <tr>
                    <td rowspan="2">No</td>
                    <td rowspan="2">Nama</td>
                    <td colspan="2" style='text-align:center'>Jam</td>
                    <td rowspan="2" style='width:40%'>Kegiatan</td>
                </tr>
                <tr style='text-align:center'>
                    <td>Masuk</td>
                    <td>Keluar</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once "../database.php";
                    // Assuming you have already established a database connection
                    // Fetch data from the database
                    $sql = "SELECT * FROM pengunjung";
                    $result = $conn->query($sql);

                    // Check if there are rows returned
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>"; // Assuming "id" is the column name for the ID
                            echo "<td class='title'>" . $row["nama"] . "<br>" . $row["kelas"] . "<p style='color:#2680EB'>" . "</td>"; // Assuming "nama" and "keterangan" are column names
                            // echo "<td style='text-align:center'>" . $row["mulai"] . "</td>"; // Assuming "mulai" is the column name for start time
                            // echo "<td style='text-align:center'>" . $row["selesai"] . "</td>"; // Assuming "selesai" is the column name for end time
                            // echo "<td>" . $row["kegiatan"] . "</td>"; // Assuming "kegiatan" is the column name for the activity
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No data available</td></tr>";
                    }
                ?>
            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="modal_user" tabindex="-1" aria-labelledby="modal_user_label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_user_label">Tambah User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="database.php" method="POST">
                            <!-- Your form fields go here -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>

                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <input type="text" class="form-control" id="kelas" name="kelas">
                            </div>
                            <!-- Add more form fields as needed -->

                            <!-- Close modal button -->
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>