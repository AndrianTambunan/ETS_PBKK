<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                
                <!-- <a class=" btn text-xl font-bold bg-blue-900 h-10 hover:bg-red-900 text-white rounded" href="{{ route('products.create') }}">Add new product</a> -->
                <!-- <a class="btn bg-blue-900 hover:bg-red-900 text-white text-xl font-bold rounded" href="{{ route('products.create') }}" style="width:100px">Add new product</a> -->
                <div class="p-2 mt-4 font-bold bg-black d-flex rounded" style="width: 143px;">
                    <a href="{{ route('products.create') }}" class="btn btn-primary text-white ml-auto">Add new product</a>
                </div>

                <table class="table table-bordered my-10">
                    <tr class="text-center">
                        <th>No</th>            
                        <th class="w-1/5">Images</th>
                        <th>Jenis Barang</th>
                        <th class="w-1/5">Keterangan Barang</th>
                        <th class="w-1/5">Kecacatan Barang</th>
                        <th class="w-24">Jumlah Barang</th>
                        <th width="280px">Action</th>
                    </tr>

                    @foreach ($products as $product)
	                <tr>
	                    <td>{{ ++$i }}</td>
                        <td><img class="m-auto" src="/image/{{ $product->image }}" width="100px"></td>
	                    <td>{{ $product->name }}</td>
	                    <td class="text-center">{{ $product->keterangan }}</td>
                        <td class="text-center">{{ $product->kecacatan }}</td>
                        <td class="text-center">{{ $product->jumlah }}</td>
	                    <td class="text-center">         
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                                    <button class="btn bg-blue-900 h-10 hover:bg-black text-white rounded" style="width:60px; ">
                                        <a href="{{ route('products.show', $product->id) }}">Show</a>
                                    </button>

                                    <button class="btn bg-blue-900 h-10 hover:bg-black text-white rounded" style="width:50px; ">
                                            <a href="{{ route('products.edit',$product->id) }}">Edit</a>
                                        </button>
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger bg-red-900 h-10 hover:bg-black text-white rounded"style="width:65px;">Delete</button>

                            </form>    
	                    </td>
	                </tr>
	                @endforeach
                </table>

                {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</x-app-layout>
</html>