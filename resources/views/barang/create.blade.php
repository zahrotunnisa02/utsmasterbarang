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
    <div class="container-sm mt-5">
        <form action="{{ route('listbarang.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create listbarang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        {{-- <div class="col-md-6 mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input class="form-control @error('kode_barang') is-invalid @enderror" type="text" name="kode_barang" id="kode_barang" value="{{ old('kode_barang') }}" placeholder="Input Kode Barang">
                            @error('kode_barang')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div> --}}
                        <div class="col-md-6 mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input class="form-control @error('nama_barang') is-invalid @enderror" type="text" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}" placeholder="Input Nama Barang">
                            @error('nama_barang')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga_barang" class="form-label">Harga Barang</label>
                            <input class="form-control @error('harga_barang') is-invalid @enderror" type="text" name="harga_barang" id="harga_barang" value="{{ old('harga_barang') }}" placeholder="Input Harga Barang">
                            @error('harga_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                            <input class="form-control @error('deskripsi_barang') is-invalid
                            @enderror" type="text" name="deskripsi_barang" id="deskripsi_barang" value="{{ old('deskripsi_barang') }}"
                            placeholder="Isi deskripsi_barang">
                            @error('deskripsi_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan_id" class="form-label">Satuan Barang</label>
                            <select name="satuan_id" id="satuan" class="form-select @error('satuan_id') is-invalid
                            @enderror" >
                                <option value="">Pilih Satuan</option>
                                @foreach ($satuan as $satuan)
                                <option value="{{ $satuan->kode_satuan }}">{{ $satuan->kode_satuan.' - '.$satuan->nama_satuan }}</option>
                            @endforeach
                            </select>
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="{{ route('listbarang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i>Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>Save</button>
                            </div>
                        </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
