@extends('admin.include.adminBase')
@section('title', 'General Setting ||')

@section('content')

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
                                <livewire:admin.setting.meta-copyright />

                            </div>

                            <div class="row">

                                <livewire:admin.setting.meta-description />
                                <livewire:admin.setting.meta-logo />

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <livewire:admin.setting.seller-setting.add-seller/>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon
                                icon="solar:compass-bold-duotone" class="text-primary fs-20"></iconify-icon>Localization
                            Settings</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form>
                                    <div class="mb-3">
                                        <label for="choices-country1" class="form-label">Country</label>
                                        <select class="form-control" id="choices-country1" data-choices
                                            data-choices-groups data-placeholder="Select Country" name="choices-country">
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
                                        <select class="form-control" id="choices-length" data-choices data-choices-groups
                                            data-placeholder="Select Length" name="choices-length">
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
                                        <select class="form-control" id="choices-weight" data-choices data-choices-groups
                                            data-placeholder="Select Weight" name="choices-weight">
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
                        <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon icon="solar:box-bold-duotone"
                                class="text-primary fs-20"></iconify-icon>Categories
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
                                        <input type="text" id="login-attempts" class="form-control" placeholder="max"
                                            value="1 hour">
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

   
   
    

  
@endsection
