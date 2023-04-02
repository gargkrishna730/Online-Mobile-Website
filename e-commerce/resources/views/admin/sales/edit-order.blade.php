@extends('layouts.admin')
@section('style')
@endsection
@section('content')
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Edit Order
                        </h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="../../../index-2.html" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">eCommerce</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Sales</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Filter menu-->
                        <div class="m-0">
                            <!--begin::Menu toggle-->
                            <a href="#"
                                class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <span class="svg-icon svg-icon-6 svg-icon-muted me-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg')}}">
                                        <path
                                            d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Filter
                            </a>
                            <!--end::Menu toggle-->
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                id="kt_menu_6308d9058a472">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">
                                        Filter Options
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" data-kt-select2="true"
                                                data-placeholder="Select option"
                                                data-dropdown-parent="#kt_menu_6308d9058a472" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">
                                                    In Process
                                                </option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                    checked="checked" />
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                name="notifications" checked="checked" />
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true">
                                            Reset
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">
                                            Apply
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                        </div>
                        <!--end::Filter menu-->
                        <!--begin::Secondary button-->
                        <!--end::Secondary button-->
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_create_app">Create</a>
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Form-->
                    <form id="kt_ecommerce_edit_order_form" class="form d-flex flex-column flex-lg-row"
                        action="{{ route('update.order', $order->id) }}" method="POST">
                        @csrf
                        @method('POST')
                        <!--begin::Aside column-->
                        <div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10">
                            <!--begin::Order details-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Order Details</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="d-flex flex-column gap-10">
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Order ID</label>
                                            <!--end::Label-->
                                            <!--begin::Auto-generated ID-->
                                            <div class="fw-bold fs-3">#{{ $order->id }}</div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Payment Method</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <select class="form-select mb-2" data-control="select2"
                                                data-hide-search="true" data-placeholder="Select an option"
                                                name="payment_method" id="kt_ecommerce_edit_order_payment">
                                                <option></option>
                                                <option value="UPI"
                                                    {{ $order->payment->method == 'UPI' ? 'selected' : '' }}>
                                                    UPI
                                                </option>
                                                <option value="CARD"
                                                    {{ $order->payment->method == 'CARD' ? 'selected' : '' }}>
                                                    Credit / Debit / ATM Card
                                                </option>
                                                <option value="NETBANK"
                                                    {{ $order->payment->method == 'NETBANK' ? 'selected' : '' }}>
                                                    Net Banking
                                                </option>
                                                <option value="COD"
                                                    {{ $order->payment->method == 'COD' ? 'selected' : '' }}>
                                                    Cash on Delivery
                                                </option>
                                            </select>
                                            <!--end::Select2-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                                Set the Payment method of the order to
                                                process.
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Payment Status</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <select class="form-select mb-2" data-control="select2"
                                                data-hide-search="false" data-placeholder="Select an option"
                                                name="payment_status" id="payment_status">
                                                <option></option>
                                                <option value="PENDING"
                                                    {{ $order->payment->status == 'PENDING' ? 'selected' : '' }}>
                                                    PENDING
                                                </option>
                                                <option value="PROCESSED"
                                                    {{ $order->payment->status == 'PROCESSED' ? 'selected' : '' }}>
                                                    PROCESSED
                                                </option>
                                                <option value="COMPLETED"
                                                    {{ $order->payment->status == 'COMPLETED' ? 'selected' : '' }}>
                                                    COMPLETED
                                                </option>
                                            </select>
                                            <!--end::Select2-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                                Set the Payment Status of the order to
                                                process.
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Shipping Status</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <select class="form-select mb-2" data-control="select2"
                                                data-hide-search="true" data-placeholder="Select an option"
                                                name="shipping_status" id="kt_ecommerce_edit_order_shipping">
                                                <option></option>
                                                <option value="C"
                                                    {{ $order->shipping->status == 'C' ? 'selected' : '' }}>
                                                    Confirmed
                                                </option>
                                                <option value="S"
                                                    {{ $order->shipping->status == 'S' ? 'selected' : '' }}>
                                                    Shipped
                                                </option>
                                            </select>
                                            <!--end::Select2-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                                Set the Shipping Status of the order to
                                                process.
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Delivery Status</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <select class="form-select mb-2" data-control="select2"
                                                data-hide-search="true" data-placeholder="Select an option"
                                                name="delivery_status" id="delivery_status">
                                                <option></option>
                                                <option value="NS"
                                                    {{ $order->delivery->status == 'NS' ? 'selected' : '' }}>
                                                    Not Shipped
                                                </option>
                                                <option value="ND"
                                                    {{ $order->delivery->status == 'ND' ? 'selected' : '' }}>
                                                    Not Delivered
                                                </option>
                                                <option value="OD"
                                                    {{ $order->delivery->status == 'OD' ? 'selected' : '' }}>
                                                    Out For Delivery
                                                </option>
                                                <option value="DL"
                                                    {{ $order->delivery->status == 'DL' ? 'selected' : '' }}>
                                                    Delivered
                                                </option>
                                                <option value="C"
                                                    {{ $order->delivery->status == 'C' ? 'selected' : '' }}>
                                                    Cancelled
                                                </option>
                                            </select>
                                            <!--end::Select2-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                                Set the date of the order to
                                                process.
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Delivery Date</label>
                                            <!--end::Label-->
                                            <!--begin::Editor-->
                                            <input id="delivery_date" name="delivery_date" placeholder="Select a date"
                                                class="form-control mb-2" type="date" value="{{ $order->delivery->date }}" />
                                            <!--end::Editor-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                                Set the date of the delivery
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Order details-->
                        </div>
                        <!--end::Aside column-->
                        <!--begin::Main column-->
                        <div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
                            <!--begin::Order details-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Select Products</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="d-flex flex-column gap-10">
                                        <!--begin::Input group-->
                                        <div>
                                            <!--begin::Label-->
                                            <label class="form-label">Add products to this order</label>
                                            <!--end::Label-->
                                            <!--begin::Selected products-->
                                            <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 border border-dashed rounded pt-3 pb-1 px-2 mb-5 mh-300px overflow-scroll"
                                                id="kt_ecommerce_edit_order_selected_products">
                                                <!--begin::Empty message-->
                                                <!--end::Empty message-->
                                                @foreach ($order->orderdetails as $value)
                                                    <div class="col my-2" data-kt-ecommerce-edit-order-filter="product">
                                                        <div
                                                            class="d-flex align-items-center border border-dashed rounded p-3 bg-white">
                                                            <!--begin::Thumbnail-->
                                                            <a href="../catalog/edit-product.html"
                                                                class="symbol symbol-50px">
                                                                <span class="symbol-label"
                                                                    style="
                                                        background-image: url({{ asset($value->product->gallery) }});
                                                    "></span>
                                                            </a>
                                                            <!--end::Thumbnail-->
                                                            <div class="ms-5">
                                                                <!--begin::Title-->
                                                                <a href="../catalog/edit-product.html"
                                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $value->product->name }}</a>
                                                                <!--end::Title-->
                                                                <!--begin::Price-->
                                                                <div class="fw-semibold fs-7">
                                                                    Price: ₹
                                                                    <span
                                                                        data-kt-ecommerce-edit-order-filter="price">{{ $value->product->price }}</span>
                                                                </div>
                                                                <!--end::Price-->
                                                                <!--begin::SKU-->
                                                                <div class="text-muted fs-7">
                                                                    Product ID: {{ $value->product->id }}
                                                                </div>
                                                                <!--end::SKU-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                            <!--begin::Selected products-->
                                            <!--begin::Total price-->
                                            <div class="fw-bold fs-4">
                                                Total Cost: ₹
                                                <span id="kt_ecommerce_edit_order_total_price">{{ $order->total }}</span>
                                            </div>
                                            <!--end::Total price-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Separator-->
                                        {{-- <div class="separator"></div> --}}
                                        <!--end::Separator-->
                                    </div>
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Order details-->
                            <!--begin::Order details-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Delivery Details</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Billing address-->
                                    <div class="d-flex flex-column gap-5 gap-md-7">
                                        <!--begin::Title-->
                                        <div class="fs-3 fw-bold mb-n2">
                                            Billing Address
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column flex-md-row gap-5">
                                            <div class="fv-row flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="required form-label">Street</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" name="street" placeholder="Street"
                                                    value="{{ $order->delivery->address->street }}" />

                                                <!--end::Input-->
                                            </div>
                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="form-label">Locality</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" name="locality" placeholder="Locality"
                                                    value="{{ $order->delivery->address->locality }}" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column flex-md-row gap-5">
                                            <div class="flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="form-label">City</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select class="form-select mb-2" data-control="select2"
                                                    data-hide-search="false" data-placeholder="Select an option"
                                                    name="city" id="city">
                                                    <option></option>
                                                    @foreach ($cities as $city)
                                                        <option value="{{ $city->id }}"
                                                            {{ $order->delivery->address->city_id == $city->id ? 'selected' : '' }}>
                                                            {{ $city->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <div class="fv-row flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="required form-label">Pincode</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control" name="pincode" placeholder=""
                                                    value="{{ $order->delivery->address->pincode }}" />
                                                <!--end::Input-->
                                            </div>
                                            <div class="fv-row flex-row-fluid">
                                                <!--begin::Label-->
                                                <label class="required form-label">State</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select class="form-select mb-2" data-control="select2"
                                                    data-hide-search="false" data-placeholder="Select an option"
                                                    name="state" id="state">
                                                    <option></option>
                                                    @foreach ($states as $state)
                                                        <option value="{{ $state->id }}"
                                                            {{ $order->delivery->address->state_id == $state->id ? 'selected' : '' }}>
                                                            {{ $state->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Country</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <select class="form-select" data-placeholder="Select an option"
                                                id="kt_ecommerce_edit_order_billing_country" name="country" readonly>
                                                <option></option>
                                                <option value="AU"
                                                    data-kt-select2-country="{{ asset('assets/media/flags/australia.svg') }}"
                                                    selected="selected">
                                                    Australia
                                                </option>
                                                <option value="BR"
                                                    data-kt-select2-country="{{ asset('assets/media/flags/brazil.svg') }}">
                                                    Brazil
                                                </option>
                                                <option value="FR"
                                                    data-kt-select2-country="{{ asset('assets/media/flags/france.svg') }}">
                                                    France
                                                </option>
                                                <option value="GE"
                                                    data-kt-select2-country="{{ asset('assets/media/flags/germany.svg') }}">
                                                    Germany
                                                </option>
                                                <option value="IN"
                                                    data-kt-select2-country="{{ asset('assets/media/flags/india.svg') }}" selected>
                                                    India
                                                </option>

                                                <option value="ES"
                                                    data-kt-select2-country="{{ asset('assets/media/flags/spain.svg') }}">
                                                    Spain
                                                </option>
                                                <option value="SE"
                                                    data-kt-select2-country="{{ asset('assets/media/flags/sweden.svg') }}">
                                                    Sweden
                                                </option>
                                                <option value="TR"
                                                    data-kt-select2-country="{{ asset('assets/media/flags/turkey.svg') }}">
                                                    Turkey
                                                </option>
                                                <option value="UK"
                                                    data-kt-select2-country="{{ asset('assets/media/flags/united-kingdom.svg') }}">
                                                    United Kingdom
                                                </option>
                                                <option value="US"
                                                    data-kt-select2-country="{{ asset('assets/media/flags/united-states.svg') }}">
                                                    United States
                                                </option>
                                            </select>
                                            <!--end::Select2-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Billing address-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Order details-->
                            <div class="d-flex justify-content-end">
                                <!--begin::Button-->
                                <a href="../catalog/products.html" id="kt_ecommerce_edit_order_cancel"
                                    class="btn btn-light me-5">Cancel</a>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" id="kt_ecommerce_edit_order_submit" class="btn btn-primary">
                                    <span class="indicator-label">Save Changes</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                        </div>
                        <!--end::Main column-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2022&copy;</span>
                    <a href="https://keenthemes.com/" target="_blank"
                        class="text-gray-800 text-hover-primary">Keenthemes</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item">
                        <a href="https://keenthemes.com/" target="_blank" class="menu-link px-2">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://devs.keenthemes.com/" target="_blank" class="menu-link px-2">Support</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                    </li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end:::Main-->
@endsection
@section('js')
    <script>
        "use strict";
        var KTAppEcommerceSalesSaveOrder = (function() {
            var e, t;
            return {
                init: function() {
                    (() => {
                        $("#delivery_date").flatpickr({
                            altInput: !0,
                            altFormat: "d F, Y",
                            dateFormat: "Y-m-d",
                        });
                        const r = (e) => {
                            if (!e.id) return e.text;
                            var t = document.createElement("span"),
                                r = "";
                            return (
                                (r +=
                                    '<img src="' +
                                    e.element.getAttribute("data-kt-select2-country") +
                                    '" class="rounded-circle h-20px me-2" alt="image"/>'),
                                (r += e.text),
                                (t.innerHTML = r),
                                $(t)
                            );
                        };
                        $("#kt_ecommerce_edit_order_billing_country").select2({
                            placeholder: "Select a country",
                            minimumResultsForSearch: 1 / 0,
                            templateSelection: r,
                            templateResult: r,
                        });
                    })(),
                    document
                        .addEventListener("keyup", function(e) {
                            t.search(e.target.value).draw();
                        }),
                        (() => {
                            let e;
                            const t = document.getElementById(
                                    "kt_ecommerce_edit_order_form"
                                ),
                                r = document.getElementById(
                                    "kt_ecommerce_edit_order_submit"
                                );
                            (e = FormValidation.formValidation(t, {
                                fields: {

                                },
                                plugins: {
                                    trigger: new FormValidation.plugins.Trigger(),
                                    bootstrap: new FormValidation.plugins.Bootstrap5({
                                        rowSelector: ".fv-row",
                                        eleInvalidClass: "",
                                        eleValidClass: "",
                                    }),
                                },
                            })),
                            r.addEventListener("click", (o) => {
                                o.preventDefault(),
                                    e &&
                                    e.validate().then(function(e) {
                                        console.log("validated!"),
                                            "Valid" == e ?
                                            (r.setAttribute(
                                                    "data-kt-indicator",
                                                    "on"
                                                ),
                                                (r.disabled = !0),
                                                setTimeout(function() {
                                                    r.removeAttribute(
                                                            "data-kt-indicator"
                                                        ),
                                                        Swal.fire({
                                                            text: "Form has been successfully submitted!",
                                                            icon: "success",
                                                            buttonsStyling:
                                                                !1,
                                                            confirmButtonText: "Ok, got it!",
                                                            customClass: {
                                                                confirmButton: "btn btn-primary",
                                                            },
                                                        }).then(function(e) {
                                                            $("#kt_ecommerce_edit_order_form").submit();
                                                        });
                                                }, 2e3)) :
                                            Swal.fire({
                                                html: "Sorry, looks like there are some errors detected, please try again.",
                                                icon: "error",
                                                buttonsStyling: !1,
                                                confirmButtonText: "Ok, got it!",
                                                customClass: {
                                                    confirmButton: "btn btn-primary",
                                                },
                                            });
                                    });
                            });
                        })();
                },
            };
        })();
        KTUtil.onDOMContentLoaded(function() {
            KTAppEcommerceSalesSaveOrder.init();
        });
    </script>
@endsection
