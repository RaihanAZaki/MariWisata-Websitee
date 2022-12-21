<!doctype html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="">Niagahoster Tutorial</a>
        </div>
    </nav>

    <div class="container pt-5">
        <div class="text-right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"
                data-whatever="@getbootstrap" style="margin-bottom:10px;">Tambah Data</button>
        </div>

        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title" style="text-align: center;">Data Vaksinasi Karyawan</h4>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Karyawan</th>
                                <th>Usia</th>
                                <th>Status Vaksin 1</th>
                                <th>Status Vaksin 2</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                                foreach ($getKaryawan as $krywn) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $krywn['nama_karyawan']; ?></td>
                                <td><?= $krywn['usia']; ?></td>
                                <td><?= $krywn['status_vaksin_1']; ?></td>
                                <td><?= $krywn['status_vaksin_2']; ?></td>
                                <td>
                                    <a href="<?= base_url('employee/edit/' . $krywn['id']); ?>" class="btn btn-success"
                                        data-target="#editModal">
                                        Edit</a>
                                    <a href="<?= base_url('employee/hapus/' . $krywn['id']); ?>">
                                        <!-- Optional JavaScript -->
                                        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                                        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                                            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                                            crossorigin="anonymous"></script>
                                        <script
                                            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                                            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                                            crossorigin="anonymous"></script>
                                        <script
                                            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                                            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                                            crossorigin="anonymous"></script>
</body>

</html>