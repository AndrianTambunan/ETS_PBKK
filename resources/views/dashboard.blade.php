<x-app-layout>
    <x-slot name="header">
<<<<<<< HEAD
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
=======
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
>>>>>>> 72436073a3c3f3b185591ead9c55a7feec667b3d
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<<<<<<< HEAD
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
=======
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- {{ __("You're logged in!") }} -->
                    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center mt-5">Form Barang</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
            <form method="POST" action="{{ route(products.store) }}" enctype="multipart/form-data" class="mt-5">
                @csrf
                <div class="text-center mt-3">
                    <label for="jenisBarang">Jenis Barang</label>
                    <input type="text" class="form-control" name="jenisBarang" id="jenisBarang">
                    @error('jenisBarang')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center mt-3">
                    <label for="kondisiBarang">Kondisi Barang</label>
                    <input type="text" class="form-control" name="kondisiBarang" id="kondisiBarang">
                    @error('kondisiBarang')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center mt-3">
                <label for="keteranganBarang">Keterangan Barang</label>
                    <input type="text" class="form-control" name="keteranganBarang" id="keteranganBarang">
                    @error('keteranganBarang')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center mt-3">
                <label for="kecacatanBarang">Kecacatan Barang</label>
                    <input type="text" class="form-control" name="kecacatanBarang" id="kecacatanBarang">
                    @error('kecacatanBarang')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center mt-3">
                <label for="jumlahBarang">Jumlah Barang</label>
                    <input type="text" class="form-control" name="jumlahBarang" id="jumlahBarang">
                    @error('jumlahBarang')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center mt-3">
                <label for="gambarBarang">Gambar Barang (JPEG, PNG, JPG only)</label>
                    <input type="file" class="form-control" name="gambarBarang" id="gambarBarang">
                    @error('gambarBarang')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
>>>>>>> 72436073a3c3f3b185591ead9c55a7feec667b3d
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
