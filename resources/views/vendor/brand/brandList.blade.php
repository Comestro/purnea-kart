@extends('vendor.include.vendorBase')

<style>
    .clamp {
  display: -webkit-box;
  -webkit-line-clamp: 3; /* Number of lines to show */
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style>
@section('content')
    <!-- content -->
    <div class="content ">

        <div class="mb-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <i class="bi bi-globe2 small me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">
                            <i class="bi bi-globe2 small me-2"></i> Brand
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-8">
                <livewire:vendor.brand.brandlist/>
            </div>
            <div class="col-md-4">
                <h5 class="mb-4">Filter brands</h5>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            aria-expanded="true" data-bs-target="#keywordsCollapseExample" role="button">
                            <div>Keywords</div>
                            <div class="bi bi-chevron-down"></div>
                        </div>
                        <div class="collapse show mt-4" id="keywordsCollapseExample">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Phone, Headphone, Shoe ...">
                                <button class="btn btn-outline-light" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            aria-expanded="true" data-bs-target="#categoriesCollapseExample" role="button">
                            <div>Categories</div>
                            <div class="bi bi-chevron-down"></div>
                        </div>
                        <div class="collapse show mt-4" id="categoriesCollapseExample">
                            <div class="d-flex flex-column gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck1">
                                    <label class="form-check-label" for="categoryCheck1">
                                        All
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck2">
                                    <label class="form-check-label" for="categoryCheck2">
                                        Accessories
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck3">
                                    <label class="form-check-label" for="categoryCheck3">
                                        Phone
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck4">
                                    <label class="form-check-label" for="categoryCheck4">
                                        Headphone
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="categoryCheck5">
                                    <label class="form-check-label" for="categoryCheck5">
                                        Camera
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            aria-expanded="true" data-bs-target="#priceCollapseExample" role="button">
                            <div>Price</div>
                            <div class="bi bi-chevron-down"></div>
                        </div>
                        <div class="collapse show mt-4" id="priceCollapseExample">
                            <input id="price-filter">
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                            aria-expanded="true" data-bs-target="#colorsCollapseExample" role="button">
                            <div>Colors</div>
                            <div class="bi bi-chevron-down"></div>
                        </div>
                        <div class="collapse show mt-4" id="colorsCollapseExample">
                            <div class="color-filter-group d-flex gap-3">
                                <input class="form-check-input" type="checkbox" value="#1fa0c6" aria-label="...">
                                <input class="form-check-input" type="checkbox" checked="" value="green"
                                    aria-label="...">
                                <input class="form-check-input" type="checkbox" checked="" value="#c61faa"
                                    aria-label="...">
                                <input class="form-check-input" type="checkbox" value="#1fc662" aria-label="...">
                                <input class="form-check-input" type="checkbox" value="#9dc61f" aria-label="...">
                                <input class="form-check-input" type="checkbox" checked="" value="#c67b1f"
                                    aria-label="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ./ content -->
@endsection
