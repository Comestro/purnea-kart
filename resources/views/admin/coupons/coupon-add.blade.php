@extends('admin.include.adminBase')
@section('title', 'Create Category ||')

@section('content')


    <!-- Activity Timeline -->
    <div>
        <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-activity-offcanvas"
            style="max-width: 450px; width: 100%;">
            <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                <h5 class="text-white m-0 fw-semibold">Activity Stream</h5>
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            <div class="offcanvas-body p-0">
                <div data-simplebar class="h-100 p-4">
                    <div class="position-relative ms-2">
                        <span class="position-absolute start-0  top-0 border border-dashed h-100"></span>
                        <div class="position-relative ps-4">
                            <div class="mb-4">
                                <span
                                    class="position-absolute start-0 avatar-sm translate-middle-x bg-danger d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon
                                        icon="iconamoon:folder-check-duotone"></iconify-icon></span>
                                <div class="ms-2">
                                    <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Report-Fix / Update </h5>
                                    <p class="d-flex align-items-center">Add 3 files to <span
                                            class=" d-flex align-items-center text-primary ms-1"><iconify-icon
                                                icon="iconamoon:file-light"></iconify-icon> Tasks</span></p>
                                    <div class="bg-light bg-opacity-50 rounded-2 p-2">
                                        <div class="row">
                                            <div class="col-lg-6 border-end border-light">
                                                <div class="d-flex align-items-center gap-2">
                                                    <i class="bx bxl-figma fs-20 text-red"></i>
                                                    <a href="#!" class="text-dark fw-medium">Concept.fig</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center gap-2">
                                                    <i class="bx bxl-file-doc fs-20 text-success"></i>
                                                    <a href="#!" class="text-dark fw-medium">larkon.docs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="mt-2 text-muted">Monday , 4:24 PM</h6>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative ps-4">
                            <div class="mb-4">
                                <span
                                    class="position-absolute start-0 avatar-sm translate-middle-x bg-success d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon
                                        icon="iconamoon:check-circle-1-duotone"></iconify-icon></span>
                                <div class="ms-2">
                                    <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Project Status
                                    </h5>
                                    <p class="d-flex align-items-center mb-0">Marked<span
                                            class=" d-flex align-items-center text-primary mx-1"><iconify-icon
                                                icon="iconamoon:file-light"></iconify-icon> Design </span> as <span
                                            class="badge bg-success-subtle text-success px-2 py-1 ms-1"> Completed</span>
                                    </p>
                                    <div class="d-flex align-items-center gap-3 mt-1 bg-light bg-opacity-50 p-2 rounded-2">
                                        <a href="#!" class="fw-medium text-dark">UI/UX Figma Design</a>
                                        <div class="ms-auto">
                                            <a href="#!" class="fw-medium text-primary fs-18" data-bs-toggle="tooltip"
                                                data-bs-title="Download" data-bs-placement="bottom"><iconify-icon
                                                    icon="iconamoon:cloud-download-duotone"></iconify-icon></a>
                                        </div>
                                    </div>
                                    <h6 class="mt-3 text-muted">Monday , 3:00 PM</h6>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative ps-4">
                            <div class="mb-4">
                                <span
                                    class="position-absolute start-0 avatar-sm translate-middle-x bg-primary d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-16">UI</span>
                                <div class="ms-2">
                                    <h5 class="mb-1 text-dark fw-semibold fs-15">Larkon Application UI v2.0.0 <span
                                            class="badge bg-primary-subtle text-primary px-2 py-1 ms-1"> Latest</span>
                                    </h5>
                                    <p>Get access to over 20+ pages including a dashboard layout, charts, kanban board,
                                        calendar, and pre-order E-commerce & Marketing pages.</p>
                                    <div class="mt-2">
                                        <a href="#!" class="btn btn-light btn-sm">Download Zip</a>
                                    </div>
                                    <h6 class="mt-3 text-muted">Monday , 2:10 PM</h6>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative ps-4">
                            <div class="mb-4">
                                <span
                                    class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img
                                        src="assets/images/users/avatar-7.jpg" alt="avatar-5"
                                        class="avatar-sm rounded-circle"></span>
                                <div class="ms-2">
                                    <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Alex Smith Attached Photos
                                    </h5>
                                    <div class="row g-2 mt-2">
                                        <div class="col-lg-4">
                                            <a href="#!">
                                                <img src="assets/images/small/img-6.jpg" alt=""
                                                    class="img-fluid rounded">
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#!">
                                                <img src="assets/images/small/img-3.jpg" alt=""
                                                    class="img-fluid rounded">
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#!">
                                                <img src="assets/images/small/img-4.jpg" alt=""
                                                    class="img-fluid rounded">
                                            </a>
                                        </div>
                                    </div>
                                    <h6 class="mt-3 text-muted">Monday 1:00 PM</h6>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative ps-4">
                            <div class="mb-4">
                                <span
                                    class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img
                                        src="assets/images/users/avatar-6.jpg" alt="avatar-5"
                                        class="avatar-sm rounded-circle"></span>
                                <div class="ms-2">
                                    <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Rebecca J. added a new team member
                                    </h5>
                                    <p class="d-flex align-items-center gap-1"><iconify-icon
                                            icon="iconamoon:check-circle-1-duotone" class="text-success"></iconify-icon>
                                        Added a new member to Front Dashboard</p>
                                    <h6 class="mt-3 text-muted">Monday 10:00 AM</h6>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative ps-4">
                            <div class="mb-4">
                                <span
                                    class="position-absolute start-0 avatar-sm translate-middle-x bg-warning d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon
                                        icon="iconamoon:certificate-badge-duotone"></iconify-icon></span>
                                <div class="ms-2">
                                    <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Achievements
                                    </h5>
                                    <p class="d-flex align-items-center gap-1 mt-1">Earned a <iconify-icon
                                            icon="iconamoon:certificate-badge-duotone"
                                            class="text-danger fs-20"></iconify-icon>" Best Product Award"</p>
                                    <h6 class="mt-3 text-muted">Monday 9:30 AM</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#!" class="btn btn-outline-dark w-100">View All</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Sidebar (Theme Settings) -->
    <div>
        <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                <h5 class="text-white m-0">Theme Settings</h5>
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            <div class="offcanvas-body p-0">
                <div data-simplebar class="h-100">
                    <div class="p-3 settings-bar">

                        <div>
                            <h5 class="mb-3 font-16 fw-semibold">Color Scheme</h5>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="data-bs-theme"
                                    id="layout-color-light" value="light">
                                <label class="form-check-label" for="layout-color-light">Light</label>
                            </div>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="data-bs-theme"
                                    id="layout-color-dark" value="dark">
                                <label class="form-check-label" for="layout-color-dark">Dark</label>
                            </div>
                        </div>

                        <div>
                            <h5 class="my-3 font-16 fw-semibold">Topbar Color</h5>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="data-topbar-color"
                                    id="topbar-color-light" value="light">
                                <label class="form-check-label" for="topbar-color-light">Light</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="data-topbar-color"
                                    id="topbar-color-dark" value="dark">
                                <label class="form-check-label" for="topbar-color-dark">Dark</label>
                            </div>
                        </div>


                        <div>
                            <h5 class="my-3 font-16 fw-semibold">Menu Color</h5>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="data-menu-color"
                                    id="leftbar-color-light" value="light">
                                <label class="form-check-label" for="leftbar-color-light">
                                    Light
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="data-menu-color"
                                    id="leftbar-color-dark" value="dark">
                                <label class="form-check-label" for="leftbar-color-dark">
                                    Dark
                                </label>
                            </div>
                        </div>

                        <div>
                            <h5 class="my-3 font-16 fw-semibold">Sidebar Size</h5>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="data-menu-size"
                                    id="leftbar-size-default" value="default">
                                <label class="form-check-label" for="leftbar-size-default">
                                    Default
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="data-menu-size"
                                    id="leftbar-size-small" value="condensed">
                                <label class="form-check-label" for="leftbar-size-small">
                                    Condensed
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-hidden"
                                    value="hidden">
                                <label class="form-check-label" for="leftbar-hidden">
                                    Hidden
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="data-menu-size"
                                    id="leftbar-size-small-hover-active" value="sm-hover-active">
                                <label class="form-check-label" for="leftbar-size-small-hover-active">
                                    Small Hover Active
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="data-menu-size"
                                    id="leftbar-size-small-hover" value="sm-hover">
                                <label class="form-check-label" for="leftbar-size-small-hover">
                                    Small Hover
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="offcanvas-footer border-top p-3 text-center">
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-danger w-100" id="reset-layout">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Topbar End ========== -->

    <!-- ========== App Menu Start ========== -->
    @include('admin.include.sidebar')
    <!-- ========== App Menu End ========== -->

    <!-- ==================================================== -->

    <div class="page-content">

        <!-- Start Container Fluid -->
        <div class="container-xxl">

            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Coupon Status</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault5"
                                                id="flexRadioDefault9" checked="">
                                            <label class="form-check-label" for="flexRadioDefault9">
                                                Active
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault5"
                                            id="flexRadioDefault10">
                                        <label class="form-check-label" for="flexRadioDefault10">
                                            In Active
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault5"
                                            id="flexRadioDefault11">
                                        <label class="form-check-label" for="flexRadioDefault11">
                                            Future Plan
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Date Schedule</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="start-date" class="form-label text-dark">Start Date</label>
                                    <input type="text" id="start-date" class="form-control flatpickr-input active"
                                        placeholder="dd-mm-yyyy" readonly="readonly">
                                </div>
                            </form>
                            <form>
                                <div class="mb-3">
                                    <label for="end-date" class="form-label text-dark">End Date</label>
                                    <input type="text" id="end-date" class="form-control flatpickr-input active"
                                        placeholder="dd-mm-yyyy" readonly="readonly">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Coupon Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="coupons-code" class="form-label">Coupons Code</label>
                                        <input type="text" id="coupons-code" name="coupons-code" class="form-control"
                                            placeholder="Code enter">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <form>
                                        <label for="product-categories" class="form-label">Discount Products</label>
                                        <select class="form-control" id="product-categories" data-choices
                                            data-choices-groups data-placeholder="Select Categories"
                                            name="choices-single-groups">
                                            <option value="">Choose a categories</option>
                                            <option value="Fashion">Fashion</option>
                                            <option value="Electronics">Electronics</option>
                                            <option value="Footwear">Footwear</option>
                                            <option value="Sportswear">Sportswear</option>
                                            <option value="Watches">Watches</option>
                                            <option value="Furniture">Furniture</option>
                                            <option value="Appliances">Appliances</option>
                                            <option value="Headphones">Headphones</option>
                                            <option value="Other Accessories">Other Accessories</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <form>
                                        <label for="choices-country" class="form-label">Discount Country</label>
                                        <select class="form-control" id="choices-country" data-choices data-choices-groups
                                            data-placeholder="Select Country" name="choices-country">
                                            <option value="">Choose a country</option>
                                            <optgroup label="">
                                                <option value="">United Kingdom</option>
                                                <option value="Fran">France</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="U.S.A">U.S.A</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Australia">Australia</option>
                                                <option value="India">India</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Spain">Spain</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                            </optgroup>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="coupons-limits" class="form-label">Coupons Limits</label>
                                        <input type="number" id="coupons-limits" name="coupons-limits"
                                            class="form-control" placeholder="limits nu">
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title mb-3 mt-2">Coupons Types</h4>
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault6"
                                                id="flexRadioDefault12" checked="">
                                            <label class="form-check-label" for="flexRadioDefault12">
                                                Free Shipping
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault6"
                                            id="flexRadioDefault13">
                                        <label class="form-check-label" for="flexRadioDefault13">
                                            Percentage
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault6"
                                            id="flexRadioDefault14">
                                        <label class="form-check-label" for="flexRadioDefault14">
                                            Fixed Amount
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="">
                                        <label for="discount-value" class="form-label">Discount Value</label>
                                        <input type="text" id="discount-value" name="discount-value"
                                            class="form-control" placeholder="value enter">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-top">
                            <a href="#!" class="btn btn-primary">Create Coupon</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Container Fluid -->

        <!-- ========== Footer Start ========== -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone"
                            class="fs-18 align-middle text-danger"></iconify-icon> <a href=""
                            class="fw-bold footer-text" target="_blank">Techzaa</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ========== Footer End ========== -->

    </div>
    <!-- ==================================================== -->
    <!-- End Page Content -->

@endsection