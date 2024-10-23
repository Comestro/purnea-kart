@extends('admin.include.adminBase')
@section('title', 'Create Brand ||')
@section('content')


   
    <div class="page-content">

        <!-- Start Container Fluid -->
        <div class="container-xxl">
            <div class="row">
                <div class="">
                    <livewire:admin.brand.insert-brand />
                </div>
            </div>


            {{-- <div class="col-8">
                <div class="card mt-5 ">
                    <div class="card-body">

                        <livewire:admin.brand.previous-item />
                    </div>
                </div>
            </div> --}}

        </div>

        <!-- End Container Fluid -->

       
    </div>
    <!-- ==================================================== -->
    <!-- End Page Content -->
    <!-- ==================================================== -->



    <!-- ========== App Menu Start ========== -->


@endsection
