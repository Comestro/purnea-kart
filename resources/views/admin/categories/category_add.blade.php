
@extends('admin.include.adminBase')
@section('title', 'Create Category ||')

@section('content')



     
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">
               <!-- Start Container Fluid -->
               <div class="container-xxl">
                    <div class="row">
                         <div class="col-xl-12 col-lg-8 ">            
                             <livewire:admin.category.insert-categoryform/>
             
                         </div>
                    </div>

               </div>
             

          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

@endsection