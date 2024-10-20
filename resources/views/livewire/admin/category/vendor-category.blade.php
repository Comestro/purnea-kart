<div>
    @if($vendorCat->isEmpty())
    <div class="text-center py-4">
        <p class="text-muted">No vendor categories available.<i class="bi bi-emoji-astonished"></i></p>
    </div>
@else

<div class="mb-3 position-relative">
    <div class="input-group">
        <input type="search"
               class="form-control rounded-pill ps-5"
               placeholder="Search here.."
               wire:model.live="search">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="position-absolute top-50 translate-middle-y text-muted"
             style="left: 15px;"
             width="20"
             height="20"
             viewBox="0 0 48 48">
            <path d="M 20.5 6 C 12.509634 6 6 12.50964 6 20.5 C 6 28.49036 12.509634 35 20.5 35 C 23.956359 35 27.133709 33.779044 29.628906 31.75 L 39.439453 41.560547 A 1.50015 1.50015 0 1 0 41.560547 39.439453 L 31.75 29.628906 C 33.779044 27.133709 35 23.956357 35 20.5 C 35 12.50964 28.490366 6 20.5 6 z M 20.5 9 C 26.869047 9 32 14.130957 32 20.5 C 32 23.602612 30.776198 26.405717 28.791016 28.470703 A 1.50015 1.50015 0 0 0 28.470703 28.791016 C 26.405717 30.776199 23.602614 32 20.5 32 C 14.130953 32 9 26.869043 9 20.5 C 9 14.130957 14.130953 9 20.5 9 z"></path>
        </svg>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center gap-1">
                <h4 class="card-title flex-grow-1">Pending for approvel</h4>
                {{-- <a href="product-add.html" class="btn btn-sm btn-primary">
                    Add Category
                </a> --}}
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        This Month
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Download</a>
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Export</a>
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Import</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-hover table-centered">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1"></label>
                                    </div>
                                </th>
                                <th>Id</th>
                                <th>Category Name</th>
                                <th>Category slug</th>
                                <th>Category Description</th>
                                <th>Category Logo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vendorCat as $key=>$cat)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2"></label>
                                        </div>
                                    </td>
                                    <td>{{$key+1}}</td>
                                    <td>{{ $cat->cat_title }}</td>
                                    <td>{{ $cat->cat_slug }}</td>
                                    <td class="text-truncate" style="width: 50px;">{{ $cat->cat_description }}</td>

                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div
                                                class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('https://purneakart.s3.ap-south-1.amazonaws.com/public/image/category/' . $cat->image) }}"
                                                    alt="" class="avatar-md">
                                            </div>
                                            <p class="text-dark fw-medium fs-15 mb-0">{{ $cat->name }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                           <form wire:submit="status({{$cat->id}})">
                                            <button type="submit" class="btn btn-soft-success btn-sm">Active</button>
                                           </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            <!-- Pagination -->
           
        </div>
    </div>
</div>
@endif

</div>