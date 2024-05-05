<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('listbarang.index') }}" class="navbar-brand mb-0 h1"> home</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('listbarang.index') }}" class="nav-link">Home</a></li>
                    {{-- <li class="nav-item col-2 col-md-auto"><a href="{{ route('barang.index') }}" class="nav-link active">barang List</a></li> --}}
                </ul>

                <hr class="d-lg-none text-white-50">

            </div>
        </div>
     </nav>


    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('listbarang.create') }}" class="btn btn-primary">Create List Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi</th>
                        {{-- <th>Category</th> --}}
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listbarang as $listbarang)
                        <tr>
                            <td>{{ $listbarang->nama_barang }}</td>
                            <td>{{ $listbarang->harga_barang }}</td>
                            <td>{{ $listbarang->deskripsi_barang }}</td>
                            <td>
                            {{-- ACTIONS SECTION --}}
                            <div class="d-flex">
                            {{-- <a href="{{ route('listbarang.show', ['listbarang' => $listbarang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a> --}}
                            <a href="{{ route('listbarang.edit', ['listbarang' => $listbarang->kode_barang]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                            {{-- <a href="{{ route('listbarang.edit')}}"></a> --}}
                            <div>
                            <form action="{{ route('listbarang.destroy', ['listbarang' => $listbarang->kode_barang]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                            </form>
                            </div>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
