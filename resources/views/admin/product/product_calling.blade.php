@extends('admin.include.adminBase')
@section('title', 'Product List ||')

@section('content')

<div class="container mt-5">
  <h2 class="text-center">Calling Table</h2>
  <table class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Discount price</th>
      </tr>
    </thead>
    <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
            </tr>
            @endforeach
        </tbody>

  </table>
</div>

@endsection