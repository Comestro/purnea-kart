@extends('admin.include.adminBase')
@section('title', 'Category List ||')


@section('content')
<style>
     .btn-toggle {
         width: 2.75rem;
         height: 1.5rem;
         background-color: #dc3545; /* Red for inactive */
         border-radius: 1.5rem;
         position: relative;
         padding: 0;
         border: 0;
         transition: background-color 0.3s ease;
     }
 
     .btn-toggle.active {
         background-color: #28a745; /* Green for active */
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
       

          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-xxl">

                    <livewire:admin.category.preview-image/>
                    <livewire:admin.category.manage-categoryform/>
                    {{-- <livewire:admin.category.vendor-category/> --}}
               </div>
               <!-- End Container Fluid -->

             
          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->


@endsection