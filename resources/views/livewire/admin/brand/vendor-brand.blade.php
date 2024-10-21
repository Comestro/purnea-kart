<div>

    @if($vendorBrand->isEmpty())
    <div class="text-center py-4">
        <p class="text-muted">No vendor Brand available. <i class="bi bi-emoji-astonished"></i></p>
    </div>
@else
    <div class="card-header d-flex justify-content-between align-items-center gap-1">
        <h4 class="card-title flex-grow-1"> Pending for approvel</h4>

        <a href="{{url('admin/brands/brand-add')}}" class="btn btn-sm btn-primary">
            Add Brand
        </a>

        <div class="dropdown">
            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false">
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
    <div class="table-responsive">
        <table class="table align-middle mb-0 table-hover table-centered">
            <thead class="bg-light-subtle">
                <tr>
                    <th style="width: 20px;">
                        <div class="form-check ms-1">
                            <input type="checkbox" class="form-check-input" id="selectAll" wire:model="selectAll">
                            <label class="form-check-label" for="selectAll"></label>
                        </div>
                    </th>
                    <th scope="col">Id</th>
                    <th scope="col">Brand Name</th>
                    <th scope="col">Brand Slug</th>
                    <th scope="col">Brand Description</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendorBrand as $key=>$item)
                <tr>
                    <td>
                        <div class="form-check ms-1">
                            <input type="checkbox" class="form-check-input" id="customCheck{{ $item->id }}" wire:model="selectedBrands" value="{{ $item->id }}">
                            <label class="form-check-label" for="customCheck{{ $item->id }}">&nbsp;</label>
                        </div>
                    </td>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->brand_name }}</td>
                    <td>{{ $item->brand_slug }}</td>
                    <td>{{ $item->brand_description }}</td>
                    <td>
                        <img src="{{ $item->logo ? asset('storage/public/logo/brand/' . $item->logo) : asset('storage/logo/brand/default.png') }}" alt="Logo" style="max-width: 100px; max-height: 100px;">
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                           

                            <button wire:click="status({{$item->id}})" class="btn btn-soft-success btn-sm">Active</button>

                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endif

</div>