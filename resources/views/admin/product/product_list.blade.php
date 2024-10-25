@extends('admin.include.adminBase')
@section('title', 'Product List ||')

@section('content')
<style>
    .btn-toggle {
        width: 2.75rem;
        height: 1.5rem;
        background-color: #dc3545;
        /* Red for inactive */
        border-radius: 1.5rem;
        position: relative;
        padding: 0;
        border: 0;
        transition: background-color 0.3s ease;
    }

    .btn-toggle.active {
        background-color: #28a745;
        /* Green for active */
    }

    .btn-toggle::before {
        content: '';
        width: 1.25rem;
        height: 1.25rem;
        background-color: white;
        border-radius: 50%;
        position: absolute;
        top: 0.126rem;
        left: 0.125rem;
        transition: transform 0.3s ease;
    }

    .btn-toggle.active::before {
        transform: translateX(1.25rem);
    }
</style>



    <!-- ==================================================== -->
    <!-- Start right Content here -->
    <!-- ==================================================== -->
    <div class="page-content">

        <!-- Start Container Fluid -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                <livewire:admin.product.calling-product />
                
                        {{-- <div class="card-footer border-top">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end mb-0">
                                    <!-- Previous Page Link -->
                                    <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $products->previousPageUrl() }}"
                                            tabindex="-1">Previous</a>
                                    </li>

                                    <!-- Pagination Links -->
                                    @for ($i = 1; $i <= $products->lastPage(); $i++)
                                        <li class="page-item {{ $i == $products->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    <!-- Next Page Link -->
                                    <li class="page-item {{ $products->hasMorePages() ? '' : 'disabled' }}">
                                        <a class="page-link" href="{{ $products->nextPageUrl() }}">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div> --}}
                    </div>
                </div>

            </div>

        </div>
        <!-- End Container Fluid -->

      
    </div>
    <!-- ==================================================== -->
    <!-- End Page Content -->
    <!-- ==================================================== -->



@endsection
