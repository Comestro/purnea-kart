<div>
    <div class="card">
        <div class="card-body">
            <div class="d-md-flex gap-4 align-items-center">
                <div class="d-none d-md-flex">All brands</div>
                <div class="d-md-flex gap-4 align-items-center">
                    <form class="mb-3 mb-md-0">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <select class="form-select">
                                    <option>Sort by</option>
                                    <option value="desc">Desc</option>
                                    <option value="asc">Asc</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="dropdown ms-auto">
                    <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"
                        aria-haspopup="true" aria-expanded="false">Actions</a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another action</a>
                        <a href="#" class="dropdown-item">Something else here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-custom table-lg mb-0" id="brands">
            <thead>
                <tr>
                    <th>
                        <input class="form-check-input select-all" type="checkbox" data-select-all-target="#brands"
                            id="defaultCheck1">
                    </th>
                    <th>ID</th>
                    <th>logo</th>
                    <th>Brand name</th>
                    <th>Brand slug</th>
                    <th>Brand Description</th>
                    {{-- <th>Created At</th> --}}
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($brands as $brand)
               <tr>
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td>
                    <a href="#">{{$brand->id}}</a>
                </td>
                <td>
                    <a href="#">
                        <img src="{{ $brand->logo ? asset('storage/public/logo/brand/' . $brand->logo) : asset('storage/logo/brand/default.png') }}" alt="Logo" style="max-width: 100px; max-height: 100px;">

                    </a>
                </td>
                <td>{{$brand->brand_name}}</td>
                <td>
                    <span class="text-success">{{ $brand->brand_slug }}</span>
                </td>
                <td class="clamp">{{ $brand->brand_description }}</td>
                {{-- <td>02/03/2021</td> --}}
                <td class="text-end">
                    <div class="d-flex">
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Action</a>
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
