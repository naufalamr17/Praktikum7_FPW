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
                <h5 class="text-center mb-4">Praktikum 6 : Relasi One to Many</h5>
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

                <hr>
                <h5 class="text-center mb-4">Input Data</h5>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <form action="{{url('store-form')}}" method="post">
                            {{csrf_field()}}
                            <tr>
                                <td><label for="idmhs">ID Mahasiswa :</label></td>
                                <td>
                                    <div class="card shadow-sm mb-2">
                                        <div class="card-body">
                                            <input type="text" id="idmhs" name="idmhs">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="fname">Nama :</label></td>
                                <td>
                                    <div class="card shadow-sm mb-2">
                                        <div class="card-body">
                                            <input type="text" id="fname" name="fname">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="idkel">ID Kelas :</label></td>
                                <td>
                                    <div class="card shadow-sm mb-2">
                                        <div class="card-body">
                                            <input type="radio" id="idkel" name="idkel" value="111">
                                            <label for="111">111</label><br>
                                            <input type="radio" id="idkel" name="idkel" value="112">
                                            <label for="112">112</label><br>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="btn btn-primary" type="submit" value="Submit"></td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>