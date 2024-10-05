@extends('admin.include.adminBase')
@section('title', 'General Setting ||')

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
                                        f <a href="#!" class="fw-medium text-dark">UI/UX Figma Design</a>
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
                                        src="{{ asset('assets_admin/images/users/avatar-7.jpg') }}" alt="avatar-5"
                                        class="avatar-sm rounded-circle"></span>
                                <div class="ms-2">
                                    <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Alex Smith Attached Photos
                                    </h5>
                                    <div class="row g-2 mt-2">
                                        <div class="col-lg-4">
                                            <a href="#!">
                                                <img src="{{ asset('assets_admin/images/small/img-6.jpg') }}" alt=""
                                                    class="img-fluid rounded">
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#!">
                                                <img src="{{ asset('assets_admin/images/small/img-3.jpg') }}" alt=""
                                                    class="img-fluid rounded">
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#!">
                                                <img src="{{ asset('assets_admin/images/small/img-4.jpg') }}" alt=""
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
                                        src="{{ asset('assets_admin/images/users/avatar-6.jpg') }}" alt="avatar-5"
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
    <!-- Start right Content here -->
    <!-- ==================================================== -->
    <div class="page-content">

        <!-- Start Container Fluid -->
        <div class="container-xxl">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon
                                    icon="solar:settings-bold-duotone" class="text-primary fs-20"></iconify-icon>General
                                Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <livewire:admin.setting.meta-title />
                                <livewire:admin.setting.meta-tag />
                                <div class="col-lg-6">
                                    <form action="{{ route('settings.updateMetaLogo') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="meta-logo" class="form-label">Logo</label>
                                            <input name="meta_logo" type="file" class="form-control" id="meta-logo"
                                                accept="image/*">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" id="saveButton3"
                                                class="  btn btn-primary">save</button>
                                        </div>
                                    </form>
                                </div>


                                <livewire:admin.setting.meta-copyright/>
                                <livewire:admin.setting.meta-description />

                            </div>

                            {{-- js here for the submit button --}}
                            {{-- <script>
                                const inputFields = document.querySelectorAll('.form-control');
                                const saveButtons = [
                                    document.getElementById('saveButton1'),
                                    document.getElementById('saveButton2'),
                                    document.getElementById('saveButton3'),
                                    document.getElementById('saveButton4'),
                                    document.getElementById('saveButton5'),
                                    document.getElementById('saveButton6'),
                                ];

                                inputFields.forEach((input, index) => {
                                    const saveButton = saveButtons[index];

                                    input.addEventListener('focus', () => {
                                        saveButtons.forEach((btn) => btn.classList.add(''));

                                        saveButton.classList.remove('');
                                    });

                                    input.addEventListener('blur', () => {
                                        setTimeout(() => {
                                            saveButton.classList.add('');
                                        }, 200);
                                    });
                                });
                            </script> --}}
                            {{-- js ends here --}}

                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon
                                    icon="solar:shop-2-bold-duotone" class="text-primary fs-20"></iconify-icon>Store
                                Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form>
                                        <div class="mb-3">
                                            <label for="store-name" class="form-label">Store Name</label>
                                            <input type="text" id="store-name" class="form-control"
                                                placeholder="Enter name">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <form>
                                        <div class="mb-3">
                                            <label for="owner-name" class="form-label">Store Owner Full Name</label>
                                            <input type="text" id="owner-name" class="form-control"
                                                placeholder="Full name">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="schedule-number" class="form-label">Owner Phone number</label>
                                        <input type="number" id="schedule-number" name="schedule-number"
                                            class="form-control" placeholder="Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <form>
                                        <div class="mb-3">
                                            <label for="schedule-email" class="form-label">Owner Email</label>
                                            <input type="email" id="schedule-email" name="schedule-email"
                                                class="form-control" placeholder="Email">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Full Address</label>
                                        <textarea class="form-control bg-light-subtle" id="address" rows="3" placeholder="Type address"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <form>
                                        <div class="mb-3">
                                            <label for="your-zipcode" class="form-label">Zip-Code</label>
                                            <input type="number" id="your-zipcode" class="form-control"
                                                placeholder="zip-code">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-4">
                                    <form>
                                        <div class="mb-3">
                                            <label for="choices-city" class="form-label">City</label>
                                            <select class="form-control" id="choices-city" data-choices
                                                data-choices-groups data-placeholder="Select City" name="choices-city">
                                                <option value="">Choose a city</option>
                                                <optgroup label="UK">
                                                    <option value="London">London</option>
                                                    <option value="Manchester">Manchester</option>
                                                    <option value="Liverpool">Liverpool</option>
                                                </optgroup>
                                                <optgroup label="FR">
                                                    <option value="Paris">Paris</option>
                                                    <option value="Lyon">Lyon</option>
                                                    <option value="Marseille">Marseille</option>
                                                </optgroup>
                                                <optgroup label="DE" disabled>
                                                    <option value="Hamburg">Hamburg</option>
                                                    <option value="Munich">Munich</option>
                                                    <option value="Berlin">Berlin</option>
                                                </optgroup>
                                                <optgroup label="US">
                                                    <option value="New York">New York</option>
                                                    <option value="Washington" disabled>
                                                        Washington
                                                    </option>
                                                    <option value="Michigan">Michigan</option>
                                                </optgroup>
                                                <optgroup label="SP">
                                                    <option value="Madrid">Madrid</option>
                                                    <option value="Barcelona">Barcelona</option>
                                                    <option value="Malaga">Malaga</option>
                                                </optgroup>
                                                <optgroup label="CA">
                                                    <option value="Montreal">Montreal</option>
                                                    <option value="Toronto">Toronto</option>
                                                    <option value="Vancouver">Vancouver</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-4">
                                    <form>
                                        <label for="choices-country" class="form-label">Country</label>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon
                                    icon="solar:compass-bold-duotone"
                                    class="text-primary fs-20"></iconify-icon>Localization
                                Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form>
                                        <div class="mb-3">
                                            <label for="choices-country1" class="form-label">Country</label>
                                            <select class="form-control" id="choices-country1" data-choices
                                                data-choices-groups data-placeholder="Select Country"
                                                name="choices-country">
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
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <form>
                                        <div class="mb-3">
                                            <label for="choices-language" class="form-label">Language</label>
                                            <select class="form-control" id="choices-language" data-choices
                                                data-choices-groups data-placeholder="Select language"
                                                name="choices-language">
                                                <option value="">English</option>
                                                <optgroup label="">
                                                    <option value="">Russian</option>
                                                    <option value="Arabic">Arabic</option>
                                                    <option value="Spanish">Spanish</option>
                                                    <option value="Turkish">Turkish</option>
                                                    <option value="German">German</option>
                                                    <option value="Armenian">Armenian</option>
                                                    <option value="Italian">Italian</option>
                                                    <option value="Catalán">Catalán</option>
                                                    <option value="Hindi">Hindi</option>
                                                    <option value="Japanese">Japanese</option>
                                                    <option value="French">French</option>
                                                </optgroup>
                                            </select>

                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <form>
                                        <div class="mb-3">
                                            <label for="choices-currency" class="form-label">Currency</label>
                                            <select class="form-control" id="choices-currency" data-choices
                                                data-choices-groups data-placeholder="Select Currency"
                                                name="choices-currency">
                                                <option value="">Us Dollar</option>
                                                <optgroup label="">
                                                    <option value="">Pound</option>
                                                    <option value="Indian Rupee">Indian Rupee</option>
                                                    <option value="Euro">Euro</option>
                                                    <option value="Australian Dollar">Australian Dollar</option>
                                                    <option value="Japanese Yen">Japanese Yen</option>
                                                    <option value="Korean Won">Korean Won</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <form>
                                        <div class="mb-3">
                                            <label for="choices-length" class="form-label">Length Class</label>
                                            <select class="form-control" id="choices-length" data-choices
                                                data-choices-groups data-placeholder="Select Length"
                                                name="choices-length">
                                                <option value="">Centimeter</option>
                                                <optgroup label="">
                                                    <option value="">Millimeter</option>
                                                    <option value="Inch">Inch</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <form>
                                        <div class="">
                                            <label for="choices-weight" class="form-label">Weight Class</label>
                                            <select class="form-control" id="choices-weight" data-choices
                                                data-choices-groups data-placeholder="Select Weight"
                                                name="choices-weight">
                                                <option value="">Kilogram</option>
                                                <optgroup label="">
                                                    <option value="">Gram</option>
                                                    <option value="Pound">Pound</option>
                                                    <option value="Ounce">Ounce</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon
                                    icon="solar:box-bold-duotone" class="text-primary fs-20"></iconify-icon>Categories
                                Settings</h4>
                        </div>
                        <div class="card-body">
                            <p>Category Product Count </p>
                            <div class="d-flex gap-2 align-items-center mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        No
                                    </label>
                                </div>
                            </div>
                            <form>
                                <div class="mb-1 pb-1">
                                    <label for="items-par-page" class="form-label">Default Items Per Page</label>
                                    <input type="number" id="items-par-page" class="form-control" placeholder="000">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon
                                    icon="solar:chat-square-check-bold-duotone"
                                    class="text-primary fs-20"></iconify-icon>Reviews Settings</h4>
                        </div>
                        <div class="card-body">
                            <p>Allow Reviews </p>
                            <div class="d-flex gap-2 align-items-center mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault2"
                                        id="flexRadioDefault3" checked>
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault2"
                                        id="flexRadioDefault4">
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        No
                                    </label>
                                </div>
                            </div>
                            <p class="mt-3 pt-1">Allow Guest Reviews </p>
                            <div class="d-flex gap-2 align-items-center mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault3"
                                        id="flexRadioDefault5">
                                    <label class="form-check-label" for="flexRadioDefault5">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault3"
                                        id="flexRadioDefault6" checked>
                                    <label class="form-check-label" for="flexRadioDefault6">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon
                                    icon="solar:ticket-bold-duotone" class="text-primary fs-20"></iconify-icon>Vouchers
                                Settings</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="min-vouchers" class="form-label">Minimum Vouchers</label>
                                    <input type="number" id="min-vouchers" class="form-control" placeholder="000"
                                        value="1">
                                </div>
                            </form>
                            <form>
                                <div class="">
                                    <label for="mex-vouchers" class="form-label">Maximum Vouchers</label>
                                    <input type="number" id="mex-vouchers" class="form-control" placeholder="000"
                                        value="12">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon
                                    icon="solar:ticket-sale-bold-duotone" class="text-primary fs-20"></iconify-icon>Tax
                                Settings</h4>
                        </div>
                        <div class="card-body">
                            <p>Prices with Tax</p>
                            <div class="d-flex gap-2 align-items-center mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault4"
                                        id="flexRadioDefault7" checked>
                                    <label class="form-check-label" for="flexRadioDefault7">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault4"
                                        id="flexRadioDefault8">
                                    <label class="form-check-label" for="flexRadioDefault8">
                                        No
                                    </label>
                                </div>
                            </div>
                            <form>
                                <div class="mb-1 pb-1">
                                    <label for="items-tax" class="form-label">Default Tax Rate</label>
                                    <input type="text" id="items-tax" class="form-control" placeholder="000"
                                        value="18%">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon
                                    icon="solar:users-group-two-rounded-bold-duotone"
                                    class="text-primary fs-20"></iconify-icon>Customers Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-between g-3">
                                <div class="col-lg-2 border-end">
                                    <p>Customers Online</p>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault5"
                                                id="flexRadioDefault9" checked="">
                                            <label class="form-check-label" for="flexRadioDefault9">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault5"
                                                id="flexRadioDefault10">
                                            <label class="form-check-label" for="flexRadioDefault10">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 border-end">
                                    <p>Customers Activity</p>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault6"
                                                id="flexRadioDefault11" checked="">
                                            <label class="form-check-label" for="flexRadioDefault11">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault6"
                                                id="flexRadioDefault12">
                                            <label class="form-check-label" for="flexRadioDefault12">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 border-end">
                                    <p>Customer Searches</p>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault7"
                                                id="flexRadioDefault13" checked="">
                                            <label class="form-check-label" for="flexRadioDefault13">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault7"
                                                id="flexRadioDefault14">
                                            <label class="form-check-label" for="flexRadioDefault14">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 border-end">
                                    <p>Allow Guest Checkout</p>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault8"
                                                id="flexRadioDefault15">
                                            <label class="form-check-label" for="flexRadioDefault15">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault8"
                                                id="flexRadioDefault16" checked="">
                                            <label class="form-check-label" for="flexRadioDefault16">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <p>Login Display Price</p>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault9"
                                                id="flexRadioDefault17">
                                            <label class="form-check-label" for="flexRadioDefault17">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault9"
                                                id="flexRadioDefault18" checked="">
                                            <label class="form-check-label" for="flexRadioDefault18">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <form>
                                        <div class="">
                                            <label for="login-attempts" class="form-label">Max Login Attempts</label>
                                            <input type="text" id="login-attempts" class="form-control"
                                                placeholder="max" value="1 hour">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-end">
                <a href="#!" class="btn btn-danger">Cancel</a>
                <a href="#!" class="btn btn-success">Save Change</a>
            </div>
        </div>
        <!-- End Container Fluid -->

        <!-- ========== Footer Start ========== -->
        @include('admin.include.footer')
        <!-- ========== Footer End ========== -->

    </div>
    <!-- ==================================================== -->
    <!-- End Page Content -->
    <!-- ==================================================== -->


    </div>
    <!-- END Wrapper -->
@endsection
