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
                            Invoice</h1>
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
                            <li class="breadcrumb-item text-muted">Invoice Manager</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">View Invoices</li>
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
                                        xmlns="http://www.w3.org/2000/svg">
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
                                id="kt_menu_6308d9188aacf">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
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
                                                data-dropdown-parent="#kt_menu_6308d9188aacf" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
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
                                            data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary"
                                            data-kt-menu-dismiss="true">Apply</button>
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
                    <!-- begin::Invoice 3-->
                    <div class="card">
                        <!-- begin::Body-->
                        <div class="card-body py-20">
                            <!-- begin::Wrapper-->
                            <div class="mw-lg-950px mx-auto w-100">
                                <!-- begin::Header-->
                                <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                                    <h4 class="fw-bolder text-gray-800 fs-2qx pe-5 pb-7">INVOICE</h4>
                                    <!--end::Logo-->
                                    <div class="text-sm-end">
                                        <!--begin::Logo-->
                                        <a href="#" class="d-block mw-150px ms-sm-auto">
                                            <img alt="Logo"
                                                src="{{asset("assets/logo/rectlogo.png")}}"
                                                class="w-100" />
                                        </a>
                                        <!--end::Logo-->
                                        <!--begin::Text-->
                                        <div class="text-sm-end fw-semibold fs-4 text-muted mt-7">
                                            <div>Marines, Fort. Mumbai</div>
                                            <div>Maharashtra 400037</div>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="pb-12">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column gap-7 gap-md-10">
                                        <!--begin::Message-->
                                        <div class="fw-bold fs-2">Dear
                                            {{ $order->user->address->fname . ' ' . $order->user->address->lname }}
                                            <span class="fs-6">({{ $order->user->email }})</span>,
                                            <br />
                                            <span class="text-muted fs-5">Here are your order details. We thank you for
                                                your purchase.</span>
                                        </div>
                                        <!--begin::Message-->
                                        <!--begin::Separator-->
                                        <div class="separator"></div>
                                        <!--begin::Separator-->
                                        <!--begin::Order details-->
                                        <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Order ID</span>
                                                <span class="fs-5">#{{ $order->id }}</span>
                                            </div>
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Date</span>
                                                <span class="fs-5">{{ $order->created_at->format('d M,Y') }}</span>
                                            </div>
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Invoice ID</span>
                                                <span class="fs-5">#INV-{{ $order->invoice->id }}</span>
                                            </div>
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Shipment ID</span>
                                                <span class="fs-5">#SHP-{{ $order->shipping->id }}</span>
                                            </div>
                                        </div>
                                        <!--end::Order details-->
                                        <!--begin::Billing & shipping-->
                                        <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Billing Address</span>
                                                <span
                                                    class="fs-6">{{ $order->delivery->address->street . ' ' . $order->delivery->address->locality }},
                                                    <br />{{ $order->delivery->address->city->name . ' ' . $order->delivery->address->pincode }},
                                                    <br />{{ $order->delivery->address->state->name }},
                                                    <br />{{ $order->delivery->address->country->name }}.</span>
                                            </div>
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Billing Address</span>
                                                <span
                                                    class="fs-6">{{ $order->delivery->address->street . ' ' . $order->delivery->address->locality }},
                                                    <br />{{ $order->delivery->address->city->name . ' ' . $order->delivery->address->pincode }},
                                                    <br />{{ $order->delivery->address->state->name }},
                                                    <br />{{ $order->delivery->address->country->name }}.</span>
                                            </div>
                                        </div>
                                        <!--end::Billing & shipping-->
                                        <!--begin:Order summary-->
                                        <div class="d-flex justify-content-between flex-column">
                                            <!--begin::Table-->
                                            <div class="table-responsive border-bottom mb-9">
                                                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr
                                                            class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                            <th class="min-w-175px">
                                                                Product
                                                            </th>
                                                            <th class="min-w-100px text-end">
                                                                ID
                                                            </th>
                                                            <th class="min-w-70px text-end">
                                                                Qty
                                                            </th>
                                                            <th class="min-w-100px text-end">
                                                                Unit Price
                                                            </th>
                                                            <th class="min-w-100px text-end">
                                                                Total
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody class="fw-semibold text-gray-600">
                                                        <!--begin::Products-->
                                                        @foreach ($order->orderdetails as $value)
                                                            <tr>
                                                                <!--begin::Product-->
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Thumbnail-->
                                                                        <a href="../catalog/edit-product.html"
                                                                            class="symbol symbol-50px">
                                                                            <span class="symbol-label"
                                                                                style="
                                                                            background-image: url({{ asset($value->product->gallery) }});
                                                                        "></span>
                                                                        </a>
                                                                        <!--end::Thumbnail-->
                                                                        <!--begin::Title-->
                                                                        <div class="ms-5">
                                                                            <a href="../catalog/edit-product.html"
                                                                                class="fw-bold text-gray-600 text-hover-primary">{{ $value->product->name }}</a>
                                                                            <div class="fs-7 text-muted">
                                                                                Delivery
                                                                                Date:
                                                                                {{ $order->delivery->date }}
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                </td>
                                                                <!--end::Product-->
                                                                <!--begin::SKU-->
                                                                <td class="text-end">
                                                                    {{ $value->product->id }}
                                                                </td>
                                                                <!--end::SKU-->
                                                                <!--begin::Quantity-->
                                                                <td class="text-end">
                                                                    {{ $value->quantity }}
                                                                </td>
                                                                <!--end::Quantity-->
                                                                <!--begin::Price-->
                                                                <td class="text-end">
                                                                    ₹ {{ $value->product->price }}
                                                                </td>
                                                                <!--end::Price-->
                                                                <!--begin::Total-->
                                                                <td class="text-end">
                                                                    ₹ {{ $value->price * $value->quantity }}
                                                                </td>
                                                                <!--end::Total-->
                                                                @php
                                                                    static $subtotal = 0;
                                                                    $subtotal += $value->price * $value->quantity;
                                                                @endphp
                                                            </tr>
                                                        @endforeach
                                                        <!--end::Products-->
                                                        <!--begin::Subtotal-->
                                                        <tr>
                                                            <td colspan="4" class="text-end">
                                                                Subtotal
                                                            </td>
                                                            <td class="text-end">
                                                                ₹ {{ $subtotal }}
                                                            </td>
                                                        </tr>
                                                        <!--end::Subtotal-->

                                                        <tr>
                                                            <td colspan="4" class="text-end">
                                                                Shipping Rate
                                                            </td>
                                                            <td class="text-end">
                                                                {{ $subtotal >= 500 ? 'Free' : '₹40' }}
                                                            </td>
                                                        </tr>
                                                        <!--end::Shipping-->
                                                        <!--begin::Grand total-->
                                                        <tr>
                                                            <td colspan="4" class="fs-3 text-dark text-end">
                                                                Grand Total
                                                            </td>
                                                            <td class="text-dark fs-3 fw-bolder text-end">
                                                                {{-- ₹{{ $subtotal >= 500 ? $subtotal : $subtotal + 40 }} --}}
                                                                ₹ {{ $order->total }}
                                                            </td>
                                                        </tr>
                                                        <!--end::Grand total-->
                                                    </tbody>
                                                    <!--end::Table head-->
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end:Order summary-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Body-->
                                <!-- begin::Footer-->
                                <div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
                                    <!-- begin::Actions-->
                                    <div class="my-1 me-5">
                                        <!-- begin::Pint-->
                                        <button type="button" class="btn btn-success my-1 me-12"
                                            onclick="window.print();">Print Invoice</button>
                                        <!-- end::Pint-->
                                        <!-- begin::Download-->
                                        <button type="button" class="btn btn-light-success my-1">Download</button>
                                        <!-- end::Download-->
                                    </div>
                                    <!-- end::Actions-->
                                    <!-- begin::Action-->

                                    <!-- end::Action-->
                                </div>
                                <!-- end::Footer-->
                            </div>
                            <!-- end::Wrapper-->
                        </div>
                        <!-- end::Body-->
                    </div>
                    <!-- end::Invoice 1-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        {{-- <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2022&copy;</span>
                    <a href="https://keenthemes.com/" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
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
        </div> --}}
        <!--end::Footer-->
    </div>
    <!--end:::Main-->
@endsection
@section('js')
@endsection
