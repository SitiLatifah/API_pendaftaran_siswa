<?php
$title = "Edit data"; // define title addon
require_once "database/connection.php";
require "main/assets/notlogin.asset.php";
require "main/assets/restrict.asset.php";
require "main/views/partials/head.php";
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Daftar siswa</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Daftar Siswa
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Sekolah Asal</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Sekolah Asal</th>
                                <th>Tindakan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM calon_siswa";
                            $stmt = $mysqli->query($query);
                            $counter = 1;

                            while ($siswa = $stmt->fetch_array()) : ?>
                                <tr>

                                    <td><?= $counter++ ?></td>
                                    <td><?= $siswa['id'] ?></td>
                                    <td><?= $siswa['nama'] ?></td>
                                    <td><?= $siswa['alamat'] ?></td>
                                    <td><?= $siswa['jenis_kelamin'] ?></td>
                                    <td><?= $siswa['agama'] ?></td>
                                    <td><?= $siswa['sekolah_asal'] ?></td>

                                    <td>
                                        <a href="../views/form-edit.view.php?id=<?= $siswa['id'] ?>"><button id='edit' type='button' class='btn btn-info'>Edit</button></a> | 
                                        <a href="../assets/hapus.php?id=<?= $siswa['id'] ?>" onclick="return confirm('Yakin ingin menghapus <?= $siswa['nama'] ?> (Id=<?= $siswa['id'] ?>) ?');">
                                            <button id='hapus' type='button' class='btn btn-danger'>Hapus</button>
                                        </a>
                                    </td>

                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require "main/views/partials/footer.php"; ?>