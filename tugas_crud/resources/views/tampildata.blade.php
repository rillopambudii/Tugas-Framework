<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap demo</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <h1 class="text-center nb-4">Edit Data </h1>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card-body">
                    <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp"
                                value="{{ $data->nama }}">

                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat"
                                aria-describedby="emailHelp" value="{{ $data->alamat }}">

                        </div>
                        <div class="mb-3">
                            <label for="nohp" class="form-label">No HandPhone</label>
                            <input type="number" name="nohp" class="form-control" id="number"
                                aria-describedby="emailHelp" value="{{ $data->nohp }}">

                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>