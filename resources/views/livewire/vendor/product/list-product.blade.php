<div>
    <div class="table-responsive">
        <table class="table table-custom table-lg mb-0" id="products">
            <thead>
                <tr>
                    <th>
                        <input class="form-check-input select-all" type="checkbox" data-select-all-target="#products" id="defaultCheck1">
                    </th>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>Created At</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productList  as $key=>$pro )
                <tr>
                    <td>
                        <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                        <a href="#">{{ $key+1}}</a>
                    </td>
                    <td>
                        <a href="#">
                            <img src="{{ asset('assets_vendor/images/products/1.jpg')}}" class="rounded" width="40" alt="...">
                        </a>
                    </td>
                    <td>{{$pro->name}}</td>
                    <td>
                        @if ($pro->quantity)
                        <span class="text-success">Instock</span>
                        @else
                        <span class="text-danger">out of stock</span>
                        @endif

                    </td>
                    <td>{{$pro->price}}</td>
                    <td>{{$pro->created_at}}</td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a  href="{{url('/vendor/editProduct', $pro->slug)}}" class="dropdown-item">Edit</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                    <a href="#" class="dropdown-item">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                @endforeach


            </tbody>
        </table>
    </div>
    <nav class="mt-4" aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>