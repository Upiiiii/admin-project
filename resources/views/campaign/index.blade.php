<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaign Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-container {
            overflow: hidden;
            border-radius: 10px;
        }

        .btn-approve {
            background-color: #28a745;
            color: white;
        }

        .btn-edit {
            background-color: #ffc107;
            color: white;
        }

        .btn-tutup {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#createcampaign">
            Create Campaign
        </button>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Campaign</th>
                    <th>Creator</th>
                    <th>Lokasi</th>
                    <th>Tanggal & Waktu</th>
                    <th>Target</th>
                    <th>Terkumpul</th>
                    <th>Status</th>
                    <th>Approved</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>11</td>
                    <td>Jariyah Menara Masjid</td>
                    <td>LAZISMU KOTA SEMARANG</td>
                    <td>Kota Semarang</td>
                    <td>2024-10-18 - 2024-12-18</td>
                    <td>227.789.700</td>
                    <td>0</td>
                    <td><span class="text-success">Aktif</span></td>
                    <td><button class="btn btn-approve btn-sm">Approve</button></td>
                    <td>
                        <button class="btn btn-edit btn-sm">Edit</button>
                        <button class="btn btn-tutup btn-sm">Tutup</button>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Darul Arqam Madya Nasional</td>
                    <td>LAZISMU KOTA SEMARANG</td>
                    <td>Balai Pelatihan Kerja 1 Kota Semarang</td>
                    <td>2024-10-18 - 2024-10-24</td>
                    <td>11.442.500</td>
                    <td>4.100.000</td>
                    <td><span class="text-success">Aktif</span></td>
                    <td><button class="btn btn-approve btn-sm">Approve</button></td>
                    <td>
                        <button class="btn btn-edit btn-sm">Edit</button>
                        <button class="btn btn-tutup btn-sm">Tutup</button>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Layanan Ambulance Gratis</td>
                    <td>LAZISMU KOTA SEMARANG</td>
                    <td>Kota Semarang & sekitarnya</td>
                    <td>2024-01-01 - 2024-12-25</td>
                    <td>2.875.000</td>
                    <td>0</td>
                    <td><span class="text-success">Aktif</span></td>
                    <td><button class="btn btn-approve btn-sm">Approve</button></td>
                    <td>
                        <button class="btn btn-edit btn-sm">Edit</button>
                        <button class="btn btn-tutup btn-sm">Tutup</button>
                    </td>
                </tr>
                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>



        <!-- Modal -->
        <div class="modal fade" id="createcampaign" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Campaign</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="dropdown mb-3">
                                <button class="btn btn-outline-dark dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <input type="name" class="form-control" placeholder="Your Name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Code Campaign">
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Deskripsi" id="floatingTextarea" style="height: 100px;"></textarea>
                                <label for="floatingTextarea">Deskripsi</label>
                            </div>

                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" placeholder="Lokasi">
                            </div>

                            <div class="row mb-3">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Target Amount">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="startDate" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="startDate" name="startDate" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="endDate" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="endDate" name="endDate" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="imageUpload" class="form-label">Pilih Gambar</label>
                                <input class="form-control" type="file" id="imageUpload" name="image"
                                    accept="image/*" required>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Decline</button>
                        <button type="button" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
