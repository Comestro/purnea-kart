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

             <div class="row d-none">
                  <div class="col-lg-12">
                       <div class="card bg-light-subtle">
                            <div class="card-header border-0">
                                 <div class="row justify-content-between">
                                      <div class="col-lg-6">
                                           <div class="row align-items-center">
                                                <div class="col-lg-6">
                                                     <form class="app-search d-none d-md-block me-auto">
                                                          <div class="position-relative">
                                                               <input type="search" class="form-control" placeholder="Search Coupons and Code" autocomplete="off" value="">
                                                               <iconify-icon icon="solar:magnifer-broken" class="search-widget-icon"></iconify-icon>
                                                          </div>
                                                     </form>
                                                </div>
                                                <div class="col-lg-4">
                                                     <h5 class="text-dark fw-medium mb-0">5,786 <span class="text-muted">Items</span></h5>
                                                </div>
                                           </div>
                                      </div>
                                      <div class="col-lg-6">
                                           <div class="text-md-end mt-3 mt-md-0">
                                                <button type="button" class="btn btn-outline-secondary me-1"><i class="bx bx-cog me-1"></i>More Setting</button>
                                                <button type="button" class="btn btn-outline-secondary me-1"><i class="bx bx-filter-alt me-1"></i> Filters</button>
                                                <button type="button" class="btn btn-success me-1"><i class="bx bx-plus"></i> New Coupons</button>
                                           </div>
                                      </div><!-- end col-->
                                 </div>
                            </div>
                       </div>
                  </div>
             </div>

             <div class="row">
                  <div class="col-md-6 col-xl-3">
                       <div class="card bg-primary-subtle">
                            <div class="card-body">
                                 <h4 class="mb-1">4 Coupons</h4>
                                 <p>Small nice summer coupons pack</p>
                                 <div class="d-flex justify-content-between align-items-center">
                                      <div>
                                           <h3 class="text-primary fw-semibold">$140.00</h3>
                                           <p class="mb-0">Duration : 1 Year</p>
                                      </div>
                                      <div>
                                           <a href="#!" class="btn btn-primary">Buy Now</a>
                                      </div>
                                 </div>
                            </div>
                       </div>
                  </div>
                  <div class="col-md-6 col-xl-3">
                       <div class="card bg-info-subtle">
                            <div class="card-body">
                                 <h4 class=" mb-1">8 Coupons</h4>
                                 <p class="">Medium nice summer coupons pack</p>
                                 <div class="d-flex justify-content-between align-items-center">
                                      <div>
                                           <h3 class="text-info fw-semibold">$235.00</h3>
                                           <p class="mb-0">Duration : 1 Year</p>
                                      </div>
                                      <div>
                                           <a href="#!" class="btn btn-info">Buy Now</a>
                                      </div>
                                 </div>
                            </div>
                       </div>
                  </div>

                  <div class="col-md-12 col-xl-6">
                       <div class="card bg-primary-subtle overflow-hidden z-1">
                            <div class="card-body">
                                 <div class="d-flex flex-wrap rounded-3 gap-2 align-items-center">
                                      <iconify-icon icon="solar:bag-smile-bold-duotone" class="fs-48 text-primary"></iconify-icon>
                                      <div class="d-block">
                                           <h3 class=" fw-semibold">30% Special discounts for customers</h3>
                                           <h5 class=" mb-0">25 November - 2 December</h5>
                                      </div>
                                      <div class="ms-auto">

                                      </div>
                                 </div>
                            </div>
                            <div class="card-footer pt-2">
                                 <a href="#!" class="btn btn-primary fw-semibold">View Plan</a>
                            </div>
                            <div class="position-absolute top-100 start-100 translate-middle z-n1 opacity-75">
                                 <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800" height="400" width="400">
                                      <defs>
                                           <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="wwwhirl-grad">
                                                <stop stop-color="#ff6c2f" stop-opacity="1" offset="45%"></stop>
                                                <stop stop-color="#ff6c2f" stop-opacity="1" offset="100%"></stop>
                                           </linearGradient>
                                      </defs>
                                      <g stroke-width="2" stroke="url(#wwwhirl-grad)" fill="none" stroke-linecap="round">
                                           <path d="M37.00000251770027 421.0787426918496C50.75000289917 406.0224922741403 75.50000358581553 351.9024907726754 103.000004348755 348.80874068684466C130.50000511169446 345.714990601014 141.5000054168703 406.6412422913064 169.00000617980973 406.22874227986233C196.5000069427492 405.8162422684182 207.50000724792503 339.4037404259194 235.00000801086446 346.82874063191304C262.500008773804 354.2537408379067 273.5000090789798 439.3937431999673 301.0000098419193 441.8687432686319C328.50001060485874 444.3437433372964 339.5000109100345 361.8024910473336 367.000011672974 358.7087409615029C394.50001243591345 355.6149908756722 405.5000127410893 426.3999928394784 433.0000135040287 427.0187428566445C460.5000142669682 427.6374928738107 471.50001457214404 363.3287410896767 499.0000153350834 361.67874104390035C526.5000160980228 360.02874099812396 537.5000164031987 420.1299926655282 565.0000171661382 419.09874263691796C592.5000179290777 418.06749260830776 603.5000182342535 349.5099907062996 631.000018997193 356.72874090657126C658.5000197601325 363.94749110684285 669.5000200653083 453.33624358677764 697.0000208282477 453.7487435982217C724.5000215911871 454.1612436096658 749.2500222778326 378.50874151081933 763.0000226593024 358.7087409615029 " transform="rotate(99, 400, 400)"></path>
                                           <path d="M48.00000244140632 420.43999499405265C61.33333614464971 405.8399945890012 85.3333368104878 353.35999313303523 112.00000421697456 350.3599930498055C138.6666716234613 347.3599929665757 149.33333858605602 406.43999460564714 176.00000599254278 406.03999459454985C202.66667339902952 405.6399945834525 213.33334036162427 341.239992796787 240.000007768111 348.4399929965384C266.6666751745978 355.6399931962899 277.3333421371925 438.1999954867729 304.00000954367925 440.5999955533567C330.66667695016605 442.9999956199405 341.3333439127607 362.9599933993705 368.00001131924745 359.9599933161407C394.66667872573424 356.95999323291096 405.33334568832896 425.5999951372079 432.00001309481576 426.1999951538538C458.66668050130244 426.79999517049976 469.3333474638972 364.4399934404305 496.0000148703839 362.8399933960413C522.6666822768707 361.23999335165206 533.3333492394653 419.51999496852886 560.0000166459522 418.51999494078564C586.666684052439 417.5199949130424 597.3333510150337 351.0399930686709 624.0000184215204 358.0399932628737C650.6666858280073 365.03999345707643 661.3333527906019 451.71999586186166 688.0000201970887 452.11999587295895C714.6666876035754 452.51999588405624 738.6666882694134 379.15999384881115 752.0000219726569 359.9599933161407 " transform="rotate(96, 400, 400)"></path>
                                           <path d="M59.00000236511238 419.8012396668612C71.9166693901294 405.6574892744676 95.16667003516005 354.81748786400055 121.00000408519412 351.91123778337175C146.83333813522813 349.00498770274294 157.1666717552418 406.23873929059334 183.0000058052758 405.85123927984284C208.83333985530987 405.46373926909234 219.1666734753235 343.0762375382601 245.00000752535757 350.0512377317693C270.8333415753916 357.02623792527845 281.1666751954052 437.0062401441839 307.0000092454393 439.33124020868695C332.83334329547336 441.65624027319 343.16667691548696 364.11748812201284 369.00001096552097 361.211238041384C394.83334501555504 358.30498796075517 405.1666786355687 424.7999898055428 431.0000126856027 425.3812398216686C456.8333467356368 425.96248983779435 467.16668035565044 365.55123816178974 493.0000144056845 364.0012381187877C518.8333484557185 362.4512380757856 529.1666820757321 418.90998964213503 555.0000161257661 417.9412396152588C580.8333501758003 416.9724895883825 591.1666837958139 352.5699878016476 617.000017845848 359.35123798978157C642.8333518958821 366.1324881779155 653.1666855158957 450.10374050755115 679.0000195659296 450.49124051830165C704.8333536159636 450.8787405290522 728.0833542609943 379.8112385574085 741.0000212860114 361.211238041384 " transform="rotate(93, 400, 400)"></path>
                                           <path d="M70.00000228881842 419.16249196906426C82.50000263560909 405.4749915893285 105.00000325983231 356.2749902243604 130.00000395341365 353.4624901463325C155.00000464699497 350.64999006830465 165.00000492442751 406.0374916049341 190.00000561800886 405.66249159453037C215.0000063115902 405.28749158412666 225.00000658902275 344.9124899091277 250.00000728260406 351.66249009639466C275.00000797618543 358.4124902836616 285.000008253618 435.81249243098944 310.0000089471993 438.0624924934118C335.00000964078066 440.31249255583407 345.00000991821315 365.27499047404973 370.0000106117945 362.4624903960218C395.00001130537584 359.6499903179939 405.0000115828084 423.9999921032723 430.0000122763897 424.56249211887786C455.000012969971 425.1249921344834 465.0000132474036 366.66249051254346 490.00001394098496 365.1624904709286C515.0000146345662 363.6624904293137 525.0000149119987 418.29999194513573 550.0000156055801 417.36249191912646C575.0000162991615 416.4249918931171 585.000016576594 354.09999016401883 610.0000172701755 360.6624903460839C635.0000179637568 367.2249905281491 645.0000182411893 448.4874927826352 670.0000189347705 448.8624927930389C695.0000196283519 449.23749280344265 717.5000202525752 380.4624908954004 730.0000205993658 362.4624903960218 " transform="rotate(90, 400, 400)"></path>
                                           <path d="M81.00000221252448 418.52374045657007C93.08333588108879 405.29249008949216 114.83333648450457 357.732488770023 139.0000038216332 355.01373869459604C163.1666711587618 352.2949886191691 172.83333809361326 405.83624010457754 197.0000054307419 405.4737400945206C221.16667276787052 405.1112400844637 230.833339702722 346.74873846529806 255.00000703985063 353.2737386463228C279.16667437697924 359.7987388273475 288.83334131183074 434.6187409030978 313.00000864895935 436.79374096343935C337.16667598608797 438.9687410237809 346.8333429209394 366.43248901138935 371.000010258068 363.71373893596234C395.16667759519663 360.9949888605354 404.8333445300481 423.19999058630447 429.00001186717674 423.74374060138985C453.16667920430535 424.2874906164753 462.8333461391569 367.77373904859996 487.00001347628546 366.32373900837223C511.1666808134141 364.87373896814455 520.8333477482655 417.68999043343916 545.0000150853941 416.7837404082968C569.1666824225229 415.8774903831545 578.8333493573742 355.6299887116928 603.000016694503 361.9737388876891C627.1666840316316 368.31748906368534 636.8333509664831 446.871241243022 661.0000183036116 447.2337412530789C685.1666856407402 447.5962412631358 706.9166862441559 381.113739418695 719.0000199127203 363.71373893596234 " transform="rotate(87, 400, 400)"></path>
                                           <path d="M92.00000213623053 417.88499275877314C103.6666691265685 405.1099924043531 124.66666970917683 359.1899911303829 148.00000368985275 356.5649910575568C171.33333767052864 353.9399909847308 180.666671262799 405.6349924189183 204.00000524347493 405.28499240920814C227.33333922415085 404.934992399498 236.66667281642125 348.5849908361657 260.00000679709717 354.88499101094817C283.33334077777306 361.18499118573067 292.66667437004344 433.4249931899033 316.0000083507193 435.52499324816415C339.3333423313953 437.624993306425 348.66667592366565 367.58999136342624 372.00000990434154 364.96499129060015C395.3333438850174 362.3399912177741 404.6666774772878 422.39999288403396 428.00001145796375 422.92499289859916C451.3333454386397 423.44999291316435 460.6666790309101 368.88499139935374 484.000013011586 367.48499136051316C507.33334699226185 366.08499132167265 516.6666805845323 417.07999273643986 540.0000145652082 416.2049927121645C563.3333485458841 415.32999268788916 572.6666821381544 357.15999107406407 596.0000161188304 363.2849912439915C619.3333500995063 369.40999141391893 628.6666836917767 445.254993518106 652.0000176724526 445.60499352781613C675.3333516531285 445.95499353752626 696.3333522357368 381.7649917566868 708.0000192260748 364.96499129060015 " transform="rotate(84, 400, 400)"></path>
                                           <path d="M103.00000205993659 417.2462450609762C114.25000237204819 404.927494719214 134.5000029338491 360.64749349074276 157.00000355807228 358.11624342051766C179.50000418229547 355.5849933502925 188.5000044319848 405.433744733259 211.00000505620795 405.09624472389567C233.50000568043117 404.7587447145323 242.50000593012047 350.4212432070333 265.0000065543437 356.49624337557356C287.5000071785669 362.5712435441138 296.5000074282562 432.23124547670886 319.0000080524794 434.25624553288895C341.5000086767026 436.28124558906904 350.50000892639184 368.7474937154631 373.00000955061506 366.21624364523797C395.5000101748383 363.68499357501287 404.5000104245276 421.5999951817634 427.00001104875076 422.1062451958084C449.500011672974 422.6124952098535 458.5000119226633 369.9962437501075 481.00001254688647 368.6462437126541C503.50001317110963 367.2962436752007 512.5000134207988 416.4699950394405 535.0000140450221 415.62624501603216C557.5000146692455 414.78249499262375 566.5000149189347 358.6899934364353 589.0000155431579 364.5962436002939C611.5000161673811 370.5024937641525 620.5000164170704 443.63874579319 643.0000170412935 443.97624580255336C665.5000176655168 444.3137458119167 685.7500182273176 382.4162440946787 697.0000185394292 366.21624364523797 " transform="rotate(81, 400, 400)"></path>
                                           <path d="M114.00000198364263 416.607493548482C124.83333561752788 404.74499321937765 144.33333615852135 362.10499203640535 166.0000034262918 359.6674919687812C187.6666706940623 357.22999190115695 196.3333376011705 405.2324932329025 218.000004868941 404.9074932238859C239.6666721367115 404.5824932148694 248.3333390438197 352.25749176320363 270.0000063115902 358.1074919255017C291.6666735793607 363.9574920877997 300.33334048646896 431.03749394881714 322.0000077542394 432.9874940029165C343.6666750220099 434.93749405701584 352.3333419291181 369.9049922528027 374.0000091968886 367.4674921851785C395.6666764646591 365.02999211755434 404.3333433717673 420.7999936647956 426.0000106395378 421.28749367832046C447.66667790730827 421.7749936918453 456.3333448144165 371.10749228616396 478.00001208218697 369.80749225009777C499.66667934995746 368.5074922140315 508.33334625706556 415.85999352774394 530.0000135248362 415.0474935052025C551.6666807926067 414.23499348266114 560.3333476997147 360.2199919841093 582.0000149674854 365.90749214189907C603.6666822352558 371.5949922996888 612.3333491423641 442.0224942535768 634.0000164101345 442.3474942625934C655.666683677905 442.67249427160993 675.1666842188985 383.0674926179733 686.0000178527837 367.4674921851785 " transform="rotate(78, 400, 400)"></path>
                                           <path d="M125.00000190734869 415.9687458506851C135.41666886300757 404.5624955342386 154.1666693831936 363.5624943967652 175.00000329451137 361.21874433174196C195.83333720582914 358.8749942667187 204.16667077035626 405.03124554724326 225.00000468167406 404.7187455385735C245.83333859299182 404.4062455299037 254.16667215751897 354.09374413407124 275.00000606883674 359.71874429012706C295.8333399801545 365.3437444461829 304.16667354468166 429.8437462356227 325.0000074559994 431.71874628764135C345.8333413673172 433.5937463396599 354.16667493184434 371.06249460483957 375.00000884316205 368.7187445398163C395.8333427544799 366.3749944747931 404.166676319007 419.9999959625251 425.0000102303248 420.4687459755297C445.83334414164256 420.93749598853435 454.1666777061697 372.21874463691773 475.0000116174875 370.96874460223864C495.83334552880524 369.7187445675596 504.1666790933323 415.24999583074464 525.0000130046501 414.4687458090702C545.8333469159679 413.6874957873958 554.166680480495 361.74999434648055 575.0000143918128 367.2187444982015C595.8333483031306 372.68749464992237 604.1666818676579 440.40624652866086 625.0000157789755 440.7187465373306C645.8333496902933 441.0312465460004 664.5833502104794 383.7187449559652 675.0000171661382 368.7187445398163 " transform="rotate(75, 400, 400)"></path>
                                           <path d="M136.00000183105476 415.3299905234936C146.00000210848728 404.379990219705 164.00000260786584 365.0199891277305 184.00000316273093 362.7699890653082C204.00000371759597 360.5199890028859 212.000003939542 404.82999023218946 232.00000449440708 404.5299902238665C252.00000504927215 404.22999021554347 260.0000052712182 355.9299888755444 280.0000058260833 361.3299890253579C300.0000063809483 366.7299891751715 308.00000660289436 428.64999089303376 328.00000715775946 430.4499909429716C348.00000771262455 432.2499909929095 356.00000793457053 372.2199893274819 376.0000084894356 369.96998926505967C396.00000904430067 367.7199892026373 404.0000092662467 419.19999063086 424.0000098211118 419.6499906433445C444.0000103759769 420.09999065582895 452.0000105979229 373.329989358277 472.000011152788 372.12998932498505C492.000011707653 370.9299892916932 500.00001192959905 414.63999050435075 520.0000124844642 413.88999048354333C540.0000130393292 413.1399904627359 548.0000132612753 363.27998907945727 568.0000138161404 368.5299892251094C588.0000143710055 373.7799893707614 596.0000145929514 438.78999117435035 616.0000151478165 439.0899911826733C636.0000157026815 439.3899911909963 654.00001620206 384.36998966456247 664.0000164794926 369.96998926505967 " transform="rotate(72, 400, 400)"></path>
                                           <path d="M146.9999864959717 414.6912504550912C156.5833200951779 404.19750016396046 173.83332057374906 366.4774991174849 192.9999877721614 364.3212490576635C212.16665497057375 362.16499899784213 219.8333218499387 404.6287501759247 238.99998904835104 404.34125016794854C258.1666562467634 404.05375015997237 265.8333231261284 357.7662488758065 284.9999903245407 362.94124901937784C304.1666575229531 368.1162491629492 311.83332440231806 427.45625080923384 330.9999916007304 429.18125085709096C350.1666587991428 430.9062509049481 357.83332567850766 373.37749930891334 376.99999287692003 371.221249249092C396.1666600753324 369.06499918927057 403.8333269546974 418.400000557984 422.99999415310975 418.8312505699483C442.1666613515221 419.26250058191255 449.83332823088705 374.4412493384253 468.9999954292994 373.2912493065205C488.16666262771173 372.1412492746158 495.83332950707666 414.030000436746 514.9999967054891 413.31125041680554C534.1666639039015 412.59250039686503 541.8333307832664 364.80999907122305 560.9999979816788 369.84124921080627C580.1666651800912 374.87249935038955 587.8333320594561 437.1737510788289 606.9999992578685 437.4612510868051C626.1666664562807 437.74875109478126 643.4166669348518 385.0212496319489 653.000000534058 371.221249249092 " transform="rotate(69, 400, 400)"></path>
                                           <path d="M157.99998641967778 414.0524913132025C167.1666533406576 404.0149910347296 183.6666537984213 367.93499003375297 201.99998764038094 365.8724899765325C220.33332148234058 363.80998991931205 227.66665501912445 404.42749104617366 245.9999888610841 404.15249103854427C264.33332270304373 403.8774910309149 271.6666562398276 359.60248980258234 289.99999008178725 364.5524899399114C308.3333239237469 369.5024900772405 315.6666574605308 426.2624916519476 333.99999130249046 427.91249169772396C352.3333251444501 429.56249174350035 359.6666586812339 374.53499021685843 377.99999252319355 372.472490159638C396.3333263651532 370.4099901024175 403.6666599019371 417.59999141162166 421.99999374389677 418.01249142306574C440.3333275858564 418.4249914345099 447.6666611226403 375.5524902450872 465.9999949645999 374.45249021456965C484.3333288065595 373.35249018405204 491.6666623433434 413.4199912956549 509.9999961853031 412.7324912765814C528.3333300272627 412.0449912575079 535.6666635640465 366.3399899895025 553.9999974060063 371.1524901230169C572.3333312479659 375.96499025653134 579.6666647847499 435.5574919098211 597.9999986267094 435.83249191745057C616.3333324686689 436.10749192507996 632.8333329264326 385.67249052584896 641.9999998474125 372.472490159638 " transform="rotate(66, 400, 400)"></path>
                                           <path d="M168.99998634338385 413.41374361540556C177.7499865861373 403.8324933495905 193.49998702309355 369.3924923941129 210.9999875086005 367.4237423394933C228.4999879941074 365.4549922848738 235.49998818831023 404.2262433605144 252.99998867381714 403.9637433532318C270.49998915932406 403.7012433459492 277.49998935352687 361.43874217344995 294.9999898390338 366.1637423045368C312.4999903245407 370.88874243562367 319.4999905187435 425.0687439387532 336.99999100425043 426.64374398244877C354.49999148975735 428.2187440261444 361.49999168396016 375.6924925688953 378.9999921694671 373.72374251427584C396.49999265497405 371.7549924596563 403.4999928491768 416.79999370935116 420.9999933346837 417.19374372027505C438.4999938201907 417.58749373119895 445.4999940143935 376.663742595841 462.9999944999004 375.6137425667106C480.4999949854073 374.56374253758014 487.4999951796101 412.8099935986556 504.99999566511707 412.15374358044903C522.4999961506239 411.49749356224254 529.4999963448267 367.86999235187375 546.9999968303338 372.4637424793193C564.4999973158407 377.05749260676487 571.4999975100434 433.9412441849052 588.9999979955503 434.2037441921878C606.4999984810572 434.4662441994704 622.2499989180135 386.32374286384083 630.999999160767 373.72374251427584 " transform="rotate(63, 400, 400)"></path>
                                           <path d="M179.9999862670899 412.77499591760863C188.33331983161702 403.6499956644514 203.3333202477658 370.84999475447273 219.99998737682003 368.9749947024541C236.66665450587425 367.0999946504355 243.33332135749595 404.0249956748552 259.9999884865502 403.7749956679193C276.6666556156044 403.5249956609835 283.33332246722614 363.27499454431756 299.99998959628033 367.7749946691622C316.6666567253345 372.27499479400683 323.3333235769563 423.87499622555873 339.9999907060105 425.37499626717363C356.6666578350647 426.87499630878847 363.3333246866864 376.8499949209322 379.9999918157406 374.97499486891365C396.6666589447948 373.09999481689505 403.33332579641655 415.9999960070806 419.9999929254708 416.3749960174843C436.666660054525 416.7499960278881 443.3333269061467 377.77499494659475 459.9999940352009 376.77499491885146C476.6666611642551 375.77499489110824 483.33332801587676 412.1999959016563 499.99999514493106 411.5749958843167C516.6666622739854 410.9499958669772 523.333329125607 369.399994714245 539.9999962546613 373.7749948356217C556.6666633837156 378.14999495699846 563.3333302353371 432.3249964599892 579.9999973643913 432.57499646692503C596.6666644934455 432.82499647386084 611.6666649095944 386.97499520183266 619.9999984741214 374.97499486891365 " transform="rotate(60, 400, 400)"></path>
                                           <path d="M190.99998619079594 412.13625012716034C198.9166530770967 403.467499886661 213.16665347243807 372.3074990221812 228.99998724503956 370.52624897276354C244.83332101764108 368.74499892334586 251.1666545266817 403.82374989654454 266.99998829928325 403.5862498899555C282.8333220718847 403.34874988336645 289.16665558092535 365.1112488225338 304.99998935352687 369.3862489411362C320.83332312612833 373.6612490597386 327.166656635169 422.6812504197129 342.9999904077705 424.10625045924706C358.833324180372 425.5312504987812 365.1666576894126 378.0074991803177 380.9999914620141 376.2262491309001C396.8333252346156 374.4449990814824 403.1666587436563 415.2000002121587 418.99999251625775 415.55625022204225C434.83332628885927 415.9125002319258 441.1666597978999 378.88624920469715 456.99999357050143 377.93624917834103C472.8333273431029 376.98624915198496 479.1666608521435 411.59000011200555 494.99999462474506 410.996250095533C510.8333283973466 410.4025000790605 517.1666619063872 370.9299989839649 532.9999956789886 375.0862490992728C548.8333294515903 379.2424992145807 555.1666629606309 430.7087506424219 570.9999967332324 430.9462506490109C586.8333305058338 431.18375065559997 601.0833309011753 387.62624944717317 608.9999977874759 376.2262491309001 " transform="rotate(57, 400, 400)"></path>
                                           <path d="M201.999986114502 411.4975062440607C209.49998632257638 403.2850060162192 222.99998669711033 373.76500519723834 237.99998711325912 372.0775051504216C252.99998752940792 370.39000510360484 258.99998769586745 403.62250602558254 273.99998811201624 403.3975060193403C288.9999885281651 403.1725060130981 294.99998869462456 366.9475050080987 309.9999891107734 370.99750512045887C324.9999895269222 375.04750523281905 330.99998969338174 421.4875065212158 345.99999010953053 422.83750655866913C360.9999905256793 424.18750659612255 366.9999906921388 379.1650053470519 381.99999110828765 377.4775053002352C396.99999152443644 375.7900052534184 402.99999169089597 414.40000632458543 417.99999210704476 414.7375063339488C432.99999252319355 415.0750063433121 438.99999268965314 379.99750537014813 453.99999310580193 379.09750534517923C468.9999935219507 378.1975053202103 474.9999936884102 410.9800062297035 489.99999410455905 410.4175062140979C504.9999945207079 409.85500619849233 510.9999946871674 372.4600051610334 525.9999951033162 376.39750527027246C540.9999955194651 380.3350053795115 546.9999956859245 429.0925067322032 561.9999961020733 429.31750673844545C576.9999965182221 429.54250674468767 590.499996892756 388.2775055998623 597.9999971008303 377.4775053002352 " transform="rotate(54, 400, 400)"></path>
                                           <path d="M212.99998603820805 410.858741380126C220.08331956805608 403.1024911649424 232.8333199217826 375.2224903914605 246.99998698147868 373.6287403472447C261.16665404117475 372.03499030302885 266.8333208650532 403.4212411737856 280.9999879247493 403.20874116789014C295.16665498444536 402.9962411619947 300.83332180832383 368.7837402128286 314.99998886801995 372.60874031894656C329.166655927716 376.4337404250645 334.83332275159444 420.2937416418836 348.99998981129056 421.56874167725624C363.1666568709866 422.8437417126289 368.83332369486504 380.32249053295106 382.99999075456117 378.7287404887353C397.16665781425723 377.1349904445195 402.8333246381357 413.5999914561772 416.9999916978318 413.9187414650204C431.1666587575279 414.23749147386354 436.8333255814063 381.1087405547642 450.99999264110244 380.25874053118247C465.1666597007985 379.40874050760067 470.8333265246769 410.3699913665665 484.99999358437304 409.8387413518279C499.16666064406917 409.3074913370893 504.8333274679476 373.98999035726695 518.9999945276437 377.7087404604372C533.1666615873398 381.42749056360736 538.8333284112182 427.47624184114954 552.9999954709143 427.688741847045C567.1666625306103 427.9012418529404 579.9166628843368 388.92874077171643 586.9999964141849 378.7287404887353 " transform="rotate(51, 400, 400)"></path>
                                           <path d="M223.9999859619141 410.2199974970263C230.6666528135358 402.9199972945006 242.66665314645485 376.6799965665176 255.99998684969822 375.1799965249027C269.3333205529416 373.6799964832879 274.66665403423895 403.2199973028236 287.99998773748234 403.0199972972749C301.3333214407257 402.8199972917263 306.6666549220231 370.6199963983935 319.99998862526644 374.2199964982692C333.33332232850984 377.81999659814494 338.6666558098072 419.09999774338644 351.99998951305054 420.2999977766783C365.33332321629393 421.49999780997024 370.6666566975913 381.4799966996852 383.9999904008347 379.9799966580704C397.3333241040781 378.4799966164555 402.66665758537545 412.79999756860394 415.99999128861884 413.0999975769269C429.3333249918621 413.3999975852499 434.66665847315954 382.21999672021525 447.9999921764029 381.41999669802067C461.3333258796463 380.61999667582603 466.6666593609436 409.75999748426443 479.99999306418704 409.2599974703928C493.33332676743044 408.7599974565212 498.6666602487278 375.51999653433546 511.99999395197113 379.0199966314368C525.3333276552146 382.5199967285382 530.666661136512 425.85999793093083 543.9999948397553 426.0599979364795C557.3333285429986 426.2599979420281 569.3333288759177 389.5799969244056 575.9999957275394 379.9799966580704 " transform="rotate(48, 400, 400)"></path>
                                           <path d="M234.99998588562016 409.58124598453213C241.2499860590155 402.73749579466426 252.49998637112708 378.1374951121802 264.99998671791775 376.7312450731663C277.4999870647084 375.3249950341523 282.49998720342467 403.01874580246704 294.99998755021534 402.8312457972652C307.499987897006 402.6437457920633 312.4999880357223 372.4562449545639 324.999988382513 375.83124504819733C337.49998872930365 379.20624514183083 342.49998886801995 417.9062462154947 354.9999892148106 419.0312462467059C367.4999895616013 420.15624627791703 372.49998970031754 382.63749523702484 384.9999900471082 381.2312451980109C397.4999903938989 379.82499515899696 402.49999053261513 411.9999960516361 414.9999908794058 412.2812460594389C427.49999122619647 412.56249606724174 432.4999913649127 383.33124525627176 444.9999917117034 382.5812452354643C457.49999205849406 381.83124521465686 462.4999921972103 409.14999597256787 474.999992544001 408.6812459595632C487.4999928907917 408.21249594655853 492.49999302950795 377.04999508200945 504.9999933762987 380.33124517304196C517.4999937230893 383.61249526407454 522.4999938618056 424.2437463913176 534.9999942085963 424.43124639651944C547.4999945553868 424.6187464017213 558.7499948674986 390.2312454477002 564.9999950408939 381.2312451980109 " transform="rotate(45, 400, 400)"></path>
                                           <path d="M245.9999858093262 408.94250019408383C251.83331930449518 402.5550000168738 262.33331959579937 379.5949993798887 273.9999865861373 378.2824993434757C285.66665357647526 376.96999930706266 290.33332037261044 402.8175000241564 301.9999873629484 402.64250001930134C313.6666543532864 402.4675000144463 318.3333211494216 374.2924992327801 329.9999881397595 377.44249932017135C341.66665513009747 380.5924994075626 346.33332192623266 416.7125004096489 357.9999889165706 417.76250043877934C369.66665590690855 418.81250046790973 374.3333227030438 383.79499949641036 385.99998969338174 382.48249945999737C397.6666566837197 381.16999942358433 402.3333234798548 411.20000025671425 413.9999904701928 411.46250026399684C425.6666574605308 411.72500027127944 430.33332425666595 384.44249951437416 441.99999124700395 383.74249949495385C453.66665823734184 383.0424994755336 458.3333250334771 408.5400001829172 469.999992023815 408.10250017077954C481.66665901415297 407.6650001586418 486.33332581028816 378.5799993517293 497.99999280062616 381.642499436693C509.6666597909641 384.70499952165676 514.3333265870992 422.62750057375024 525.9999935774372 422.8025005786053C537.6666605677751 422.9775005834604 548.1666608590793 390.8824996930407 553.9999943542483 382.48249945999737 " transform="rotate(42, 400, 400)"></path>
                                           <path d="M256.99998573303225 408.303746774241C262.41665254997486 402.3724966096888 272.1666528204716 381.05249601820265 282.9999864543569 379.8337459843906C293.8333200882421 378.6149959505785 298.1666535417962 402.61624661645124 308.99998717568144 402.45374661194296C319.83332080956666 402.2912466074347 324.1666542631208 376.12874588160184 334.999987897006 379.05374596275084C345.8333215308913 381.97874604389983 350.1666549844454 415.5187469744086 360.99998861833063 416.49374700145825C371.8333222522159 417.46874702850795 376.16665570577 384.95249612640134 386.99998933965526 383.7337460925893C397.8333229735405 382.5149960587772 402.1666564270946 410.3999968323978 412.9999900609798 410.6437468391602C423.83332369486504 410.88749684592267 428.1666571484192 385.553746143082 438.9999907823044 384.9037461250489C449.83332441618967 384.2537461070158 454.16665786974374 407.92999676387194 464.999991503629 407.52374675260126C475.8333251375143 407.11749674133057 480.1666585910683 380.1099959920547 490.99999222495364 382.95374607094953C501.83332585883886 385.7974961498444 506.166659312393 421.0112471267884 516.9999929462782 421.1737471312967C527.8333265801634 421.33624713580497 537.5833268506601 391.5337463089866 542.9999936676028 383.7337460925893 " transform="rotate(39, 400, 400)"></path>
                                           <path d="M267.9999856567383 407.6650009837927C272.99998579545456 402.1900008318984 281.9999860451438 382.51000028591113 291.99998632257643 381.3850002547C301.9999866000089 380.2600002234889 305.99998671098194 402.4150008381406 315.9999869884145 402.2650008339791C325.99998726584704 402.11500082981763 329.99998737682006 377.9650001598181 339.99998765425255 380.66500023472486C349.9999879316851 383.3650003096316 353.9999880426581 414.3250011685628 363.99998832009067 415.2250011935317C373.9999885975232 416.12500121850064 377.9999887084962 386.11000038578686 387.9999889859287 384.98500035457573C397.9999892633613 383.86000032336455 401.9999893743343 409.6000010374759 411.99998965176684 409.82500104371815C421.9999899291994 410.0500010499604 425.9999900401724 386.6650004011844 435.9999903176049 386.06500038453845C445.99999059503745 385.46500036789246 449.99999070601046 407.3200009742213 459.999990983443 406.94500096381756C469.99999126087556 406.57000095341385 473.9999913718486 381.6400002617745 483.9999916492811 384.2650003346006C493.9999919267137 386.8900004074266 497.99999203768664 419.3950013092211 507.9999923151192 419.54500131338256C517.9999925925517 419.69500131754404 526.999992842241 392.18500055432713 531.9999929809572 384.98500035457573 " transform="rotate(36, 400, 400)"></path>
                                           <path d="M279.0000008392334 407.02624565660125C283.58333429972333 402.0074955173648 291.8333345286052 383.9674950168765 301.000001449585 382.93624498826625C310.1666683705648 381.90499495965605 313.8333351389567 402.21374552308686 323.0000020599366 402.0762455192721C332.16666898091637 401.9387455154574 335.83333574930833 379.80124490129117 345.00000267028815 382.2762449699557C354.166669591268 384.75124503862025 357.83333635965994 413.1312458259738 367.00000328063976 413.956245848862C376.1666702016196 414.7812458717502 379.8333369700115 387.2674951084292 389.0000038909913 386.236245079819C398.16667081197113 385.20499505120875 401.8333375803631 408.79999570581083 411.0000045013429 409.00624571153287C420.16667142232274 409.2124957172549 423.8333381907147 387.7762451225436 433.00000511169446 387.2262451072848C442.1666720326743 386.676245092026 445.83333880106625 406.70999564782744 455.00000572204607 406.3662456382907C464.1666726430259 406.022495628754 467.8333394114178 383.1699949947513 477.0000063323977 385.5762450615085C486.1666732533775 387.98249512826567 489.83334002176946 417.77874595491056 499.0000069427492 417.91624595872526C508.166673863729 418.05374596253995 516.4166740926108 392.8362452629245 521.0000075531008 386.236245079819 " transform="rotate(33, 400, 400)"></path>
                                           <path d="M290.00000076293946 406.3874979588043C294.16666754520304 401.82499783222573 301.66666775327747 385.42499737723637 310.00000131780456 384.48749735122703C318.33333488233166 383.54999732521776 321.6666683081425 402.0124978374276 330.0000018726696 401.8874978339597C338.33333543719675 401.7624978304918 341.6666688630076 381.6374972721588 350.0000024275347 383.8874973345811C358.3333359920618 386.1374973970034 361.66666941787264 411.9374981127794 370.0000029823998 412.6874981335868C378.3333365469269 413.43749815439423 381.66666997273774 388.4249974604661 390.00000353726483 387.4874974344568C398.3333371017919 386.5499974084475 401.66667052760283 407.9999980035403 410.0000040921299 408.1874980087422C418.333337656657 408.37499801394404 421.6666710824679 388.88749747329734 430.00000464699497 388.38749745942573C438.3333382115221 387.8874974455541 441.6666716373329 406.09999795082814 450.00000520186006 405.7874979421583C458.3333387663872 405.47499793348857 461.666672192198 384.69999735712247 470.00000575672516 386.8874974178109C478.3333393212523 389.0749974784992 481.6666727470631 416.16249822999464 490.0000063115902 416.28749823346254C498.3333398761173 416.41249823693045 505.8333400841917 393.48749760091636 510.00000686645524 387.4874974344568 " transform="rotate(30, 400, 400)"></path>
                                           <path d="M301.00000068664554 405.74874835365875C304.75000079068275 401.642498239738 311.5000009779497 386.8824978302476 319.00000118602406 386.0387478068392C326.5000013940985 385.19499778343084 329.5000014773283 401.8112482444197 337.00000168540265 401.6987482412986C344.5000018934771 401.58624823817746 347.5000019767068 383.47374773567776 355.00000218478124 385.49874779185785C362.50000239285566 387.52374784803794 365.5000024760854 410.7437484922363 373.00000268415977 411.418748510963C380.5000028922342 412.09374852968966 383.50000297546393 389.58249790515436 391.00000318353835 388.738747881746C398.5000033916127 387.8949978583376 401.5000034748425 407.19999839392113 409.00000368291694 407.3687483986028C416.5000038909913 407.5374984032845 419.5000039742211 389.9987479167025 427.00000418229547 389.54874790421803C434.5000043903699 389.0987478917336 437.50000447359963 405.48999834648015 445.00000468167406 405.20874833867737C452.5000048897485 404.9274983308746 455.5000049729782 386.2299978121451 463.00000518105264 388.1987478667646C470.50000538912707 390.16749792138415 473.5000054723568 414.54624859773 481.0000056804312 414.65874860085114C488.5000058885056 414.77124860397225 495.25000607577255 394.13874803155954 499.0000061798097 388.738747881746 " transform="rotate(27, 400, 400)"></path>
                                           <path d="M312.00000061035155 405.1099977948389C315.33333403616246 401.459997693576 321.3333342026219 388.3399973295845 328.0000010542436 387.5899973087771C334.6666679058653 386.8399972879696 337.333334646514 401.60999769773747 344.0000014981357 401.50999769496315C350.6666683497574 401.4099976921888 353.3333350904061 385.3099972455224 360.0000019420278 387.1099972954603C366.6666687936495 388.90999734539815 369.33333553429816 409.5499979180189 376.0000023859198 410.14999793466484C382.6666692375415 410.74999795131083 385.3333359781902 390.7399973961683 392.0000028298119 389.9899973753609C398.6666696814336 389.23999735455345 401.33333642208225 406.3999978306276 408.00000327370395 406.5499978347891C414.6666701253256 406.69999783895065 417.3333368659743 391.1099974064333 424.000003717596 390.709997395336C430.6666705692177 390.3099973842387 433.33333730986635 404.8799977884579 440.00000416148805 404.6299977815221C446.66667101310975 404.3799977745863 449.3333377537584 387.7599973134934 456.0000046053801 389.5099973620441C462.6666714570018 391.2599974105948 465.3333381976505 412.9299980117911 472.0000050492722 413.0299980145654C478.66667190089385 413.12999801733974 484.6666720673534 394.7899975085285 488.0000054931642 389.9899973753609 " transform="rotate(24, 400, 400)"></path>
                                           <path d="M323.0000005340576 404.47125009704195C325.9166672816421 401.2775000084369 331.1666674272942 389.79749968994435 337.0000009224632 389.14124967173785C342.83333441763216 388.4849996535313 345.1666678156997 401.4087500120782 351.0000013108687 401.32125000965067C356.8333348060377 401.23375000722314 359.16666820410535 387.14624961639004 365.0000016992743 388.7212496600857C370.8333351944433 390.2962497037813 373.16666859251086 408.35625020482445 379.00000208767983 408.88125021938964C384.8333355828488 409.4062502339549 387.1666689809164 391.8974997482052 393.0000024760854 391.2412497299987C398.83333597125437 390.5849997117922 401.16666936932194 405.6000001283571 407.00000286449097 405.7312501319984C412.83333635965994 405.8625001356397 415.1666697577275 392.2212497571871 421.0000032528965 391.8712497474769C426.83333674806545 391.52124973776677 429.1666701461331 404.2700000914586 435.00000364130204 404.05125008538977C440.833337136471 403.83250007932094 443.16667053453864 389.28999967586464 449.0000040297076 390.8212497183465C454.8333375248766 392.3524997608284 457.16667092294415 411.3137502868751 463.0000044181131 411.40125028930265C468.8333379132821 411.4887502917302 474.0833380589342 395.44124984652035 477.0000048065187 391.2412497299987 " transform="rotate(21, 400, 400)"></path>
                                           <path d="M334.0000004577637 403.8325004918963C336.5000005271218 401.0950004159492 341.00000065196645 391.25500014295557 346.00000079068275 390.69250012735C351.000000929399 390.13000011174444 353.0000009848855 401.2075004190703 358.0000011236018 401.13250041698956C363.00000126231805 401.0575004149088 365.00000131780456 388.982500079909 370.0000014565208 390.33250011736243C375.0000015952371 391.68250015481584 377.00000165072356 407.16250058428136 382.00000178943986 407.61250059676587C387.00000192815617 408.0625006092503 389.0000019836426 393.05500019289343 394.00000212235886 392.49250017728787C399.00000226107517 391.9300001616823 401.0000023165617 404.80000051873793 406.0000024552779 404.91250052185904C411.0000025939942 405.02500052498016 413.00000264948073 393.3325002005922 418.000002788197 393.0325001922692C423.0000029269132 392.73250018394623 425.0000029823998 403.66000048711066 430.00000312111604 403.4725004819088C435.0000032598323 403.2850004767069 437.00000331531885 390.82000013088725 442.0000034540351 392.1325001673003C447.00000359275134 393.44500020371333 449.00000364823785 409.6975006546105 454.00000378695415 409.77250065669125C459.0000039256704 409.84750065877205 463.50000405051503 396.0925002771636 466.00000411987315 392.49250017728787 " transform="rotate(18, 400, 400)"></path>
                                           <path d="M344.99999656677244 403.19375088675076C347.08332995790425 400.91250082346147 350.83333006194147 392.7125005959668 354.99999684420504 392.24375058296215C359.16666362646856 391.7750005699575 360.833330339374 401.0062508260624 364.99999712163753 400.94375082432845C369.1666639039011 400.8812508225945 370.8333306168065 390.818750543428 374.9999973990701 391.9437505746392C379.16666418133366 393.06875060585037 380.83333089423905 405.96875096373833 384.99999767650263 406.34375097414204C389.16666445876615 406.71875098454575 390.8333311716716 394.2125006375817 394.9999979539351 393.74375062457705C399.1666647361987 393.2750006115724 400.83333144910415 404.0000009091188 404.9999982313677 404.0937509117197C409.16666501363125 404.18750091432065 410.8333317265367 394.4437506439973 414.9999985088002 394.1937506370615C419.1666652910638 393.9437506301257 420.8333320039692 403.0500008827627 424.99999878623277 402.8937508784278C429.16666556849634 402.7375008740929 430.83333228140174 392.35000058590987 434.9999990636653 393.4437506162541C439.1666658459289 394.53750064659823 440.8333325588343 408.08125102234595 444.9999993410978 408.1437510240799C449.1666661233614 408.20625102581386 452.9166662273986 396.7437507078068 454.99999961853035 393.74375062457705 " transform="rotate(15, 400, 400)"></path>
                                           <path d="M355.9999964904785 402.55499937425657C357.66666320338396 400.7299993236252 360.6666632866137 394.16999914162943 363.99999671242455 393.79499913122567C367.3333301382354 393.41999912082196 368.66666350855974 400.8049993257059 371.9999969343706 400.75499932431876C375.33333036018144 400.70499932293154 376.6666637305058 392.6549990995984 379.9999971563166 393.5549991245673C383.3333305821275 394.4549991495362 384.6666639524518 404.7749994358466 387.9999973782626 405.0749994441696C391.3333308040735 405.37499945249255 392.66666417439785 395.3699991749213 395.99999760020864 394.9949991645176C399.33333102601955 394.6199991541139 400.6666643963439 403.19999939215097 403.9999978221547 403.2749993942317C407.33333124796553 403.34999939631246 408.6666646182899 395.5549991800538 411.9999980441007 395.35499917450517C415.33333146991157 395.1549991689565 416.6666648402359 402.4399993710661 419.99999826604676 402.3149993675982C423.3333316918576 402.1899993641303 424.66666506218195 393.87999913358385 427.9999984879928 394.75499915785923C431.33333191380365 395.62999918213455 432.666665284128 406.4649994827327 435.99999870993884 406.51499948411987C439.33333213574963 406.56499948550703 442.3333322189794 397.3949992311014 443.9999989318849 394.9949991645176 " transform="rotate(12, 400, 400)"></path>
                                           <path d="M366.9999964141846 401.9162488154367C368.2499964488636 400.54749877746315 370.499996511286 395.62749864096634 372.9999965806441 395.34624863316355C375.49999665000223 395.0649986253607 376.49999667774546 400.6037487790237 378.99999674710364 400.56624877798333C381.49999681646176 400.52874877694296 382.49999684420504 394.49124860944306 384.9999969135631 395.16624862816974C387.4999969829213 395.8412486468964 388.4999970106645 403.5812488616292 390.9999970800227 403.80624886787143C393.4999971493808 404.03124887411366 394.49999717712404 396.52749866593524 396.99999724648217 396.24624865813246C399.49999731584035 395.9649986503297 400.4999973435836 402.3999988288575 402.9999974129417 402.4562488304181C405.4999974822998 402.51249883197863 406.4999975100431 396.66624866978464 408.9999975794012 396.51624866562315C411.49999764875935 396.36624866146167 412.49999767650263 401.82999881304386 414.99999774586075 401.73624881044293C417.4999978152189 401.642498807842 418.49999784296216 395.40999863493215 420.9999979123203 396.0662486531387C423.4999979816784 396.7224986713452 424.4999980094217 404.8487488967938 426.9999980787798 404.88624889783415C429.49999814813793 404.9237488988745 431.74999821056025 398.0462487080703 432.99999824523934 396.24624865813246 " transform="rotate(9, 400, 400)"></path>
                                           <path d="M378.0000001525879 401.2774992102911C378.8333335090406 400.36499918497543 380.3333335506555 397.08499909397756 382.0000002635609 396.8974990887757C383.66666697646633 396.70999908357385 384.3333336616285 400.4024991860158 386.0000003745339 400.3774991853222C387.66666708743935 400.35249918462864 388.3333337726015 396.32749907296204 390.0000004855069 396.7774990854465C391.66666719841237 397.22749909793095 392.33333388357454 402.3874992410862 394.00000059647994 402.53749924524766C395.6666673093854 402.68749924940914 396.33333399454756 397.6849991106235 398.00000070745295 397.49749910542164C399.6666674203584 397.3099991002198 400.3333341055206 401.5999992192383 402.000000818426 401.6374992202787C403.6666675313314 401.67499922131907 404.33333421649354 397.7774991131897 406.000000929399 397.6774991104154C407.66666764230445 397.5774991076411 408.33333432746656 401.21999920869587 410.000001040372 401.1574992069619C411.66666775327747 401.09499920522796 412.3333344384396 396.93999908995477 414.00000115134503 397.37749910209243C415.6666678642505 397.8149991142301 416.3333345494126 403.2324992645292 418.00000126231805 403.2574992652228C419.66666797522345 403.2824992659164 421.16666801683834 398.6974991387135 422.00000137329107 397.49749910542164 " transform="rotate(6, 400, 400)"></path>
                                           <path d="M389.00000007629393 400.6387515124942C389.4166667545203 400.18250149983635 390.1666667753277 398.5425014543374 391.00000013178044 398.4487514517365C391.83333348823317 398.35500144913556 392.1666668308143 400.20125150035653 393.00000018726695 400.18875150000974C393.8333335437197 400.17625149966295 394.16666688630073 398.16375144382965 395.00000024275346 398.3887514500719C395.8333335992062 398.6137514563141 396.1666669417873 401.1937515278917 397.00000029823997 401.26875152997246C397.8333336546927 401.3437515320532 398.16666699727375 398.8425014626604 399.0000003537265 398.74875146005945C399.8333337101792 398.6550014574585 400.16666705276026 400.80000151696777 401.000000409213 400.81875151748795C401.8333337656657 400.8375015180082 402.16666710824677 398.8887514639435 403.0000004646995 398.83875146255633C403.8333338211522 398.78875146116917 404.1666671637333 400.61000151169657 405.000000520186 400.5787515108296C405.83333387663873 400.5475015099626 406.1666672192198 398.470001452326 407.0000005756725 398.68875145839485C407.83333393212524 398.9075014644637 408.1666672747063 401.61625153961324 409.000000631159 401.62875153996004C409.8333339876117 401.6412515403068 410.5833340084192 399.3487514767054 411.00000068664554 398.74875146005945 " transform="rotate(3, 400, 400)"></path>
                                      </g>
                                 </svg>
                            </div>
                       </div>
                  </div>
             </div>

             <div class="row">
                  <div class="col-xl-12">
                       <div class="card">
                            <div class="d-flex card-header justify-content-between align-items-center">
                                 <div>
                                      <h4 class="card-title">All Product List</h4>
                                 </div>
                                 <div class="dropdown">
                                      <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                     <th>Product Name & Type</th>
                                                     <th>Price</th>
                                                     <th>Discount</th>
                                                     <th>Code</th>
                                                     <th>Start Date</th>
                                                     <th>End Date</th>
                                                     <th>Status</th>
                                                     <th>Action</th>
                                                </tr>
                                           </thead>
                                           <tbody>
                                                <tr>
                                                     <td>
                                                          <div class="form-check">
                                                               <input type="checkbox" class="form-check-input" id="customCheck2">
                                                               <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                          </div>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex align-items-center gap-2">
                                                               <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-1.png" alt="" class="avatar-md">
                                                               </div>
                                                               <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">Black T-shirt</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Fashion</p>
                                                               </div>
                                                          </div>

                                                     </td>
                                                     <td>$80.00</td>
                                                     <td>$20.00</td>
                                                     <td>FASHION123</td>
                                                     <td>12 May 2023</td>
                                                     <td>12 Jun 2023</td>
                                                     <td>
                                                          <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-check-double"></i>Active</span>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex gap-2">
                                                               <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          </div>
                                                     </td>
                                                </tr>

                                                <tr>
                                                     <td>
                                                          <div class="form-check">
                                                               <input type="checkbox" class="form-check-input" id="customCheck2">
                                                               <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                          </div>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex align-items-center gap-2">
                                                               <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-2.png" alt="" class="avatar-md">
                                                               </div>
                                                               <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">Olive Green Leather Bag</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Hand Bag</p>
                                                               </div>
                                                          </div>

                                                     </td>
                                                     <td>$136.00</td>
                                                     <td>$37.00</td>
                                                     <td>SUMMER24</td>
                                                     <td>19 July 2023</td>
                                                     <td>23 Aug 2023</td>
                                                     <td>
                                                          <span class="badge text-danger bg-danger-subtle fs-12"><i class="bx bx-x"></i>Expired</span>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex gap-2">
                                                               <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          </div>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                          <div class="form-check">
                                                               <input type="checkbox" class="form-check-input" id="customCheck2">
                                                               <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                          </div>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex align-items-center gap-2">
                                                               <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-3.png" alt="" class="avatar-md">
                                                               </div>
                                                               <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">Women Golden Dress</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Fashion</p>
                                                               </div>
                                                          </div>

                                                     </td>
                                                     <td>$219.00</td>
                                                     <td>$20.00</td>
                                                     <td>FASHION123</td>
                                                     <td>24 Aug 2023</td>
                                                     <td>20 Sep 2023</td>
                                                     <td>
                                                          <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-check-double"></i>Active</span>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex gap-2">
                                                               <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          </div>
                                                     </td>
                                                </tr>

                                                <tr>
                                                     <td>
                                                          <div class="form-check">
                                                               <input type="checkbox" class="form-check-input" id="customCheck2">
                                                               <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                          </div>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex align-items-center gap-2">
                                                               <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-4.png" alt="" class="avatar-md">
                                                               </div>
                                                               <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">Gray Cap For Men</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Cap</p>
                                                               </div>
                                                          </div>

                                                     </td>
                                                     <td>$76.00</td>
                                                     <td>$12.00</td>
                                                     <td>CODE000</td>
                                                     <td>30 Dec 2023</td>
                                                     <td>17 Jan 2024</td>
                                                     <td>
                                                          <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-check-double"></i>Active</span>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex gap-2">
                                                               <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          </div>
                                                     </td>
                                                </tr>


                                                <tr>
                                                     <td>
                                                          <div class="form-check">
                                                               <input type="checkbox" class="form-check-input" id="customCheck2">
                                                               <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                          </div>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex align-items-center gap-2">
                                                               <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-5.png" alt="" class="avatar-md">
                                                               </div>
                                                               <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">Dark Green Cargo Pent</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Fashion</p>
                                                               </div>
                                                          </div>

                                                     </td>
                                                     <td>$110.00</td>
                                                     <td>$20.00</td>
                                                     <td>FASHION123</td>
                                                     <td>11 Jan 2024</td>
                                                     <td>15 Feb 2024</td>
                                                     <td>
                                                          <span class="badge text-danger bg-danger-subtle fs-12"><i class="bx bx-x"></i>Expired</span>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex gap-2">
                                                               <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          </div>
                                                     </td>
                                                </tr>


                                                <tr>
                                                     <td>
                                                          <div class="form-check">
                                                               <input type="checkbox" class="form-check-input" id="customCheck2">
                                                               <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                          </div>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex align-items-center gap-2">
                                                               <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-6.png" alt="" class="avatar-md">
                                                               </div>
                                                               <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">Orange Multi Color Headphone</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Electronics</p>
                                                               </div>
                                                          </div>

                                                     </td>
                                                     <td>$231.00</td>
                                                     <td>35%</td>
                                                     <td>HEADPHONE24</td>
                                                     <td>31 May 2023</td>
                                                     <td>23 Jun 2023</td>
                                                     <td>
                                                          <span class="badge text-danger bg-danger-subtle fs-12"><i class="bx bx-x"></i>Expired</span>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex gap-2">
                                                               <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          </div>
                                                     </td>
                                                </tr>


                                                <tr>
                                                     <td>
                                                          <div class="form-check">
                                                               <input type="checkbox" class="form-check-input" id="customCheck2">
                                                               <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                          </div>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex align-items-center gap-2">
                                                               <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-7.png" alt="" class="avatar-md">
                                                               </div>
                                                               <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">Kid's Yellow Shoes</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Foot Wares</p>
                                                               </div>
                                                          </div>

                                                     </td>
                                                     <td>$89.00</td>
                                                     <td>$19.00</td>
                                                     <td>KID'S24</td>
                                                     <td>16 May 2024</td>
                                                     <td>12 Jun 2024</td>
                                                     <td>
                                                          <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-check-double"></i>Active</span>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex gap-2">
                                                               <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          </div>
                                                     </td>
                                                </tr>

                                                <tr>
                                                     <td>
                                                          <div class="form-check">
                                                               <input type="checkbox" class="form-check-input" id="customCheck2">
                                                               <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                          </div>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex align-items-center gap-2">
                                                               <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-8.png" alt="" class="avatar-md">
                                                               </div>
                                                               <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">Men Dark Brown Wallet</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Wallet</p>
                                                               </div>
                                                          </div>

                                                     </td>
                                                     <td>$132.00</td>
                                                     <td>50%</td>
                                                     <td>BRAND24</td>
                                                     <td>25 Jan 2024</td>
                                                     <td>16 Feb 2024</td>
                                                     <td>
                                                          <span class="badge text-danger bg-danger-subtle fs-12"><i class="bx bx-x"></i>Expired</span>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex gap-2">
                                                               <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          </div>
                                                     </td>
                                                </tr>

                                                <tr>
                                                     <td>
                                                          <div class="form-check">
                                                               <input type="checkbox" class="form-check-input" id="customCheck2">
                                                               <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                          </div>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex align-items-center gap-2">
                                                               <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-9.png" alt="" class="avatar-md">
                                                               </div>
                                                               <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">Sky Blue Sunglass</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Sunglass</p>
                                                               </div>
                                                          </div>

                                                     </td>
                                                     <td>$77.00</td>
                                                     <td>$23.00</td>
                                                     <td>EYEWARE24</td>
                                                     <td>23 Feb 2024</td>
                                                     <td>24 March 2024</td>
                                                     <td>
                                                          <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-check-double"></i>Active</span>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex gap-2">
                                                               <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          </div>
                                                     </td>
                                                </tr>

                                                <tr>
                                                     <td>
                                                          <div class="form-check">
                                                               <input type="checkbox" class="form-check-input" id="customCheck2">
                                                               <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                          </div>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex align-items-center gap-2">
                                                               <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-10.png" alt="" class="avatar-md">
                                                               </div>
                                                               <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">Kid's Yellow T-shirt</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Fashion</p>
                                                               </div>
                                                          </div>

                                                     </td>
                                                     <td>$110.00</td>
                                                     <td>$35.00</td>
                                                     <td> KID'S24</td>
                                                     <td>14 Aug 2023</td>
                                                     <td>15 Sep 2023</td>
                                                     <td>
                                                          <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-check-double"></i>Active</span>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex gap-2">
                                                               <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          </div>
                                                     </td>
                                                </tr>

                                                <tr>
                                                     <td>
                                                          <div class="form-check">
                                                               <input type="checkbox" class="form-check-input" id="customCheck2">
                                                               <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                          </div>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex align-items-center gap-2">
                                                               <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-11.png" alt="" class="avatar-md">
                                                               </div>
                                                               <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">White Rubber Band Smart Watch </a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Electronics</p>
                                                               </div>
                                                          </div>

                                                     </td>
                                                     <td>$77.00</td>
                                                     <td>$14.00</td>
                                                     <td>WATCH2W1</td>
                                                     <td>27 March 2024</td>
                                                     <td>12 Apr 2024</td>
                                                     <td>
                                                          <span class="badge text-danger bg-danger-subtle fs-12"><i class="bx bx-x"></i>Expired</span>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex gap-2">
                                                               <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          </div>
                                                     </td>
                                                </tr>

                                                <tr>
                                                     <td>
                                                          <div class="form-check">
                                                               <input type="checkbox" class="form-check-input" id="customCheck2">
                                                               <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                          </div>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex align-items-center gap-2">
                                                               <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                    <img src="assets/images/product/p-12.png" alt="" class="avatar-md">
                                                               </div>
                                                               <div>
                                                                    <a href="#!" class="text-dark fw-medium fs-15">Men Brown Leather Shoes </a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>40 , 41 , 42 , 43 </p>
                                                               </div>
                                                          </div>

                                                     </td>
                                                     <td>$222.00</td>
                                                     <td>40%</td>
                                                     <td>FOOTWARE23</td>
                                                     <td>23 Dec 2023</td>
                                                     <td>22 Jan 2024</td>
                                                     <td>
                                                          <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-check-double"></i>Active</span>
                                                     </td>
                                                     <td>
                                                          <div class="d-flex gap-2">
                                                               <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                               <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          </div>
                                                     </td>
                                                </tr>


                                           </tbody>
                                      </table>
                                 </div>
                                 <!-- end table-responsive -->
                            </div>
                            <div class="card-footer border-top">
                                 <nav aria-label="Page navigation example">
                                      <ul class="pagination justify-content-end mb-0">
                                           <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                           <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                           <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                           <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                           <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                                      </ul>
                                 </nav>
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
                        <script>document.write(new Date().getFullYear())</script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a
                            href="" class="fw-bold footer-text" target="_blank">Techzaa</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ========== Footer End ========== -->

   </div>
    <!-- ==================================================== -->
    <!-- End Page Content -->

@endsection
