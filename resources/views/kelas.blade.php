<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to Many</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="text-center mb-4">Praktikum 7 : Relasi One to Many</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Ruang Kelas</th>
                            <th>Nama Mahasiswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kelas as $kelas)
                        <tr>
                            <td>{{ $kelas->ruang_kelas }}</td>
                            <td>
                                @foreach($kelas->mahasiswa()->get() as $mahasiswa)
                                <div class="card shadow-sm mb-2">
                                    <div class="card-body">
                                        {{ $mahasiswa->nama }}
                                    </div>
                                </div>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>