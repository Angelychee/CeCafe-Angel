<?php
include "proses/koneksi.php";
$query = mysqli_query($kon, "SELECT * FROM tb_user ");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            Halaman User
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser">Tambah User</button>
                </div>
                <!-- Modal Buat Nambahin User-->
                <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form untuk mengirim data -->
                                <form action="" method="post" id="formTambahUser">
                                    <!-- Input fields for Name, Username, etc. -->
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingName" name="name" placeholder="Your Name" required>
                                                <label for="floatingName">Masukkan dulu namamu, wey.</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="PasswordUser" name="password" placeholder="Password" required>
                                                <label for="PasswordUser">Hey kamu, passwornya apa?</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Input fields for Phone, Username, Level, etc. -->
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingPhone" name="nohp" placeholder="08xxxxx" required>
                                                <label for="floatingPhone">Bagi nomormu, dong! 😉</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingLevel" name="level" required>
                                                    <option selected hidden>Pilih aku, plis 😋</option>
                                                    <option value="1">Owner/Admin</option>
                                                    <option value="2">Kasir</option>
                                                    <option value="3">Pelayan</option>
                                                    <option value="4">Dapur</option>
                                                </select>
                                                <label for="floatingLevel">Pilih Level</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingUsername" name="username" placeholder="Your Username" required>
                                                <label for="floatingUsername">Santai, pikir dulu usernamenya.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="alamat" id="floatingInput" cols="30" rows="10" required></textarea>
                                        <label for="floatingInput">Infokan Alamat!</label>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!-- Tombol Close untuk menutup modal -->
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <!-- Tombol Submit untuk form -->
                                <button type="submit" class="btn btn-primary" name="input_user_validate" value="12345" form="formTambahUser">Otw simpan, say 😎</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Tutup Modal Buat Nambahin User-->

                <!-- Modal Buat Liatin User-->
                <div class="modal fade" id="ModalLihat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Data User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form action="" method="post" id="formTambahUser">
                                    <!-- Input fields for Name, Username, etc. -->
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingName" name="name" placeholder="Your Name">
                                                <label for="floatingName">Masukkan dulu namamu, wey.</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="PasswordUser" name="password" placeholder="Password">
                                                <label for="PasswordUser">Hey kamu, passwornya apa?</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Input fields for Phone, Username, Level, etc. -->
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingPhone" name="nohp" placeholder="08xxxxx">
                                                <label for="floatingPhone">Bagi nomormu, dong! 😉</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingLevel" name="level">
                                                    <option selected hidden>Pilih aku, plis 😋</option>
                                                    <option value="1">Owner/Admin</option>
                                                    <option value="2">Kasir</option>
                                                    <option value="3">Pelayan</option>
                                                    <option value="4">Dapur</option>
                                                </select>
                                                <label for="floatingLevel">Pilih Level</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingUsername" name="username" placeholder="Your Username">
                                                <label for="floatingUsername">Santai, pikir dulu usernamenya.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="alamat" id="floatingInput" cols="30" rows="10"></textarea>
                                        <label for="floatingInput">Infokan Alamat!</label>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tutup Modal Buat Liatin User-->

            <?php
            if (empty($result)) {
                echo "Data usernya gaada, woy!";
            } else {
                # code...

            ?>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Username</th>
                                <th scope="col">Level</th>
                                <th scope="col">No. Hp</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (empty($result)) {
                                echo '<tr><td colspan="6" class="text-center">Data user tidak ditemukan!</td></tr>';
                            } else {
                                $no = 1;
                                foreach ($result as $row) {
                                    echo '<tr>';
                                    echo '<th scope="row">' . $no++ . '</th>';
                                    echo '<td>' . $row['nama'] . '</td>';
                                    echo '<td>' . $row['username'] . '</td>';
                                    echo '<td>' . $row['level'] . '</td>';
                                    echo '<td>' . $row['nohp'] . '</td>';
                                    echo '<td class="d-flex">
                            <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalLihat"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalLihat" data-id="' . $row['id'] . '" data-name="' . $row['nama'] . '"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></button>
                          </td>';
                                    echo '</tr>';
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</div>