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
                            Edit Product
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
                            <li class="breadcrumb-item text-muted">Catalog</li>
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
                                id="kt_menu_6308d9021115b">
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
                                                data-dropdown-parent="#kt_menu_6308d9021115b" data-allow-clear="true">
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
                    <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"
                        enctype="multipart/form-data" method="POST" action="{{ route('product.update', $product->id) }}">
                        @csrf
                        @method('Put')
                        <!--begin::Aside column-->
                        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                            <!--begin::Thumbnail settings-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Thumbnail</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body text-center pt-0">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                        data-kt-image-input="true">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-150px h-150px"
                                            style="
                                        background-image: url({{ asset($product->gallery) }});
                                      ">
                                        </div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            title="Change avatar">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="avatar_remove" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                            title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                            title="Remove avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">
                                        Set the product thumbnail image. Only *.png, *.jpg
                                        and *.jpeg image files are accepted
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Thumbnail settings-->
                            <!--begin::Status-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Status</h2>
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <div class="rounded-circle bg-success w-15px h-15px"
                                            id="kt_ecommerce_add_product_status"></div>
                                    </div>
                                    <!--begin::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Select2-->
                                    <select class="form-select mb-2" name="status" data-control="select2"
                                        data-hide-search="true" data-placeholder="Select an option"
                                        id="kt_ecommerce_add_product_status_select">
                                        <option></option>
                                        @foreach ($status as $status)
                                            <option value="{{ $status->slug }}"
                                                {{ $product->status == $status->slug ? 'selected' : '' }}>
                                                {{ $status->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <!--end::Select2-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">
                                        Set the product status.
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Datepicker-->
                                    <div class="d-none mt-10">
                                        <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select
                                            publishing date and time</label>
                                        <input class="form-control" id="kt_ecommerce_add_product_status_datepicker"
                                            placeholder="Pick date & time" />
                                    </div>
                                    <!--end::Datepicker-->
                                </div>
                                <!--end::Card body-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Inventory</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <!--begin::Button-->
                                    <!--end::Button-->
                                    <!--begin::Input group-->
                                    <!--begin::Label-->
                                    <label class="form-label d-block required">Quantity</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="stock" class="form-control mb-2"
                                        placeholder="On Stock" value="{{ $product->stock }}" required />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">
                                        Enter the product quantity.
                                    </div>
                                    <!--end::Description-->
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Status-->
                            <!--begin::Template settings-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Product Category</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Select store template-->
                                    <label for="kt_ecommerce_add_product_store_template" class="form-label">Select a
                                        product Category</label>
                                    <!--end::Select store template-->
                                    <!--begin::Select2-->
                                    <select class="form-select mb-2" name="category_id" data-control="select2"
                                        data-hide-search="true" data-placeholder="Select an option"
                                        id="kt_ecommerce_add_product_store_template">
                                        <option></option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                            </option>
                                        @endforeach
                                    </select>
                                    <!--end::Select2-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">
                                        Assign a template from your current theme to define
                                        how a single product is displayed.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Template settings-->
                            <!--begin::Category & tags-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Product Details</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <!--begin::Label-->
                                    <label class="form-label">Related Categories</label>
                                    <!--end::Label-->
                                    <!--begin::Select2-->
                                    <select class="form-select mb-2" name="related[]" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                                        <option></option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->slug }}"
                                                @if ($product->related) {{ in_array($category->slug, json_decode($product->related)) ? 'selected' : '' }} @endif>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <!--end::Select2-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7 mb-7">
                                        Add related category to a product.
                                    </div>
                                    <!--end::Description-->
                                    <!--end::Input group-->
                                    <!--begin::Button-->
                                    <a href="{{ route('category.create') }}" class="btn btn-light-primary btn-sm mb-10">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11" y="18" width="12"
                                                    height="2" rx="1" transform="rotate(-90 11 18)"
                                                    fill="currentColor" />
                                                <rect x="6" y="11" width="12" height="2"
                                                    rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Create new category
                                    </a>
                                    <!--end::Button-->
                                    <!--begin::Input group-->
                                    <!--begin::Label-->
                                    <label class="form-label d-block">Tags</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input id="kt_ecommerce_add_product_tags" name="tags" class="form-control mb-2"
                                        value="{{ $product->tags }}" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">
                                        Add tags to a product.
                                    </div>
                                    <!--end::Description-->
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Category & tags-->

                        </div>
                        <!--end::Aside column-->
                        <!--begin::Main column-->
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                            <!--begin:::Tabs-->
                            {{-- <ul
                                class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                                <!--begin:::Tab item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                        href="#kt_ecommerce_add_product_general">General</a>
                                </li>
                                <!--end:::Tab item-->
                                <!--begin:::Tab item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                        href="#kt_ecommerce_add_product_advanced">Advanced</a>
                                </li>
                                <!--end:::Tab item-->
                            </ul> --}}
                            <!--end:::Tabs-->
                            <!--begin::Tab content-->
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>General</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Product Name</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="product_name" class="form-control mb-2"
                                                placeholder="Product name" value="{{ $product->name }}" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                                A product name is required and recommended
                                                to be unique.
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div>
                                            <!--begin::Label-->
                                            <label class="form-label">Description</label>
                                            <!--end::Label-->
                                            <!--begin::Editor-->
                                            <div id="kt_ecommerce_add_product_description"
                                                name="kt_ecommerce_add_product_description" class="min-h-200px mb-2">
                                                {!! $product->description !!}
                                            </div>
                                            <!--end::Editor-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                                Set a description to the product for better
                                                visibility.
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->
                                <!--begin::Media-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Media</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-2">
                                            <!--begin::Dropzone-->
                                            <div class="dropzone" id="kt_ecommerce_add_product_media">
                                                <!--begin::Message-->
                                                <div class="dz-message needsclick">
                                                    <!--begin::Icon-->
                                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">
                                                            Drop files here or click to upload.
                                                        </h3>
                                                        <span class="fs-7 fw-semibold text-gray-400">Upload up to
                                                            10 files</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                            </div>
                                            <!--end::Dropzone-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">
                                            Set the product media gallery.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Media-->
                                <!--begin::Pricing-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Pricing</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Base Price</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="price" class="form-control mb-2"
                                                placeholder="Product price" value="{{ $product->price }}" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                                Set the product price.
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2">Discount Type
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Select a discount type that will be applied to this product"></i></label>
                                            <!--End::Label-->
                                            <!--begin::Row-->
                                            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                                data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                                <!--begin::Col-->
                                                <div class="col">
                                                    <!--begin::Option-->
                                                    <label
                                                        class="btn btn-outline btn-outline-dashed d-flex btn-active-light-primary text-start p-6 {{ $product->discount == '' ? 'active' : '' }}"
                                                        data-kt-button="true">
                                                        <!--begin::Radio-->
                                                        <span
                                                            class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="discount_option" value="1"
                                                                {{ $product->discount == '' ? 'checked' : '' }} />
                                                        </span>
                                                        <!--end::Radio-->
                                                        <!--begin::Info-->
                                                        <span class="ms-5">
                                                            <span class="fs-4 fw-bold text-gray-800 d-block">No
                                                                Discount</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col">
                                                    <!--begin::Option-->
                                                    <label
                                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 {{ $product->discount == '' ? '' : 'active' }}"
                                                        data-kt-button="true">
                                                        <!--begin::Radio-->
                                                        <span
                                                            class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="discount_option" value="2"
                                                                {{ $product->discount == '' ? '' : 'checked' }} />
                                                        </span>
                                                        <!--end::Radio-->
                                                        <!--begin::Info-->
                                                        <span class="ms-5">
                                                            <span class="fs-4 fw-bold text-gray-800 d-block">Percentage
                                                                %</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                {{-- <div class="col">
                                                    <!--begin::Option-->
                                                    <label
                                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                        data-kt-button="true">
                                                        <!--begin::Radio-->
                                                        <span
                                                            class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="discount_option" value="3" />
                                                        </span>
                                                        <!--end::Radio-->
                                                        <!--begin::Info-->
                                                        <span class="ms-5">
                                                            <span class="fs-4 fw-bold text-gray-800 d-block">Fixed
                                                                Price</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div> --}}
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row " id="kt_ecommerce_add_product_discount_percentage">
                                            <!--begin::Label-->
                                            <label class="form-label">Set Discount Percentage</label>
                                            <!--end::Label-->
                                            <!--begin::Slider-->
                                            <div class="d-flex flex-column text-center mb-5">
                                                <div class="d-flex align-items-start justify-content-center mb-7">
                                                    <span class="fw-bold fs-3x"
                                                        id="kt_ecommerce_add_product_discount_label">0</span>
                                                    <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                                </div>
                                                <div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm"></div>
                                            </div>
                                            <!--end::Slider-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                                Set a percentage discount to be applied on this product.
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        {{-- <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                            <!--begin::Label-->
                                            <label class="form-label">Fixed Discounted Price</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="dicsounted_price" class="form-control mb-2"
                                                placeholder="Discounted price" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                                Set the discounted product price. The
                                                product will be reduced at the determined
                                                fixed price
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group--> --}}
                                        <!--begin::Tax-->
                                        <!--end:Tax-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Pricing-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Variations</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                            <!--begin::Label-->
                                            <label class="form-label">Add Product Variations</label>
                                            <!--end::Label-->
                                            <!--begin::Repeater-->
                                            <div id="kt_ecommerce_add_product_options">
                                                <!--begin::Form group-->
                                                <div class="form-group">
                                                    <div data-repeater-list="kt_ecommerce_add_product_options"
                                                        class="d-flex flex-column gap-3">
                                                        <div data-repeater-item=""
                                                            class="form-group d-flex flex-wrap align-items-center gap-5">
                                                            <!--begin::Select2-->
                                                            <div class="w-100 w-md-200px">
                                                                <select class="form-select" name="product_option"
                                                                    data-placeholder="Select a variation"
                                                                    data-kt-ecommerce-catalog-add-product="product_option">
                                                                    <option></option>
                                                                    <option value="color">
                                                                        Color
                                                                    </option>
                                                                    <option value="size">Size</option>
                                                                    <option value="material">
                                                                        Material
                                                                    </option>
                                                                    <option value="style">
                                                                        Style
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <!--end::Select2-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control mw-100 w-200px"
                                                                name="product_option_value" placeholder="Variation" />
                                                            <!--end::Input-->
                                                            <button type="button" data-repeater-delete=""
                                                                class="btn btn-sm btn-icon btn-light-danger">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                                                                <span class="svg-icon svg-icon-1">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.5" x="7.05025"
                                                                            y="15.5356" width="12" height="2"
                                                                            rx="1"
                                                                            transform="rotate(-45 7.05025 15.5356)"
                                                                            fill="currentColor" />
                                                                        <rect x="8.46447" y="7.05029"
                                                                            width="12" height="2" rx="1"
                                                                            transform="rotate(45 8.46447 7.05029)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Form group-->
                                                <!--begin::Form group-->
                                                <div class="form-group mt-5">
                                                    <button type="button" data-repeater-create=""
                                                        class="btn btn-sm btn-light-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="11" y="18"
                                                                    width="12" height="2" rx="1"
                                                                    transform="rotate(-90 11 18)" fill="currentColor" />
                                                                <rect x="6" y="11" width="12"
                                                                    height="2" rx="1" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Add another
                                                        variation
                                                    </button>
                                                </div>
                                                <!--end::Form group-->
                                            </div>
                                            <!--end::Repeater-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <div id="description"></div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <!--begin::Button-->
                                <a href="products.html" id="kt_ecommerce_add_product_cancel"
                                    class="btn btn-light me-5">Cancel</a>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
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
    {{-- <h1>{!! json_encode($product->media) !!}</h1> --}}
@endsection
@section('js')
    <script>
        //alert("Hello");
        var uploadedDocumentMap = {};
        "use strict";
        var KTAppEcommerceSaveProduct = (function() {
            const e = () => {
                    $("#kt_ecommerce_add_product_options").repeater({
                        initEmpty: !1,
                        defaultValues: {
                            "text-input": "foo"
                        },
                        show: function() {
                            $(this).slideDown(), t();
                        },
                        hide: function(e) {
                            $(this).slideUp(e);
                        },
                    });
                },
                t = () => {
                    document
                        .querySelectorAll(
                            '[data-kt-ecommerce-catalog-add-product="product_option"]'
                        )
                        .forEach((e) => {
                            $(e).hasClass("select2-hidden-accessible") ||
                                $(e).select2({
                                    minimumResultsForSearch: -1
                                });
                        });
                };
            return {
                init: function() {
                    var o, a;
                    ["#kt_ecommerce_add_product_description"].forEach((e) => {
                            let t = document.querySelector(e);
                            t &&
                                (t = new Quill(e, {
                                    modules: {
                                        toolbar: [
                                            [{
                                                header: [1, 2, !1]
                                            }],
                                            ["bold", "italic", "underline"],
                                            ["image", "code-block"],
                                        ],
                                    },
                                    placeholder: "Type your text here...",
                                    theme: "snow",
                                }));
                        }),
                        [
                            "#kt_ecommerce_add_product_category",
                            "#kt_ecommerce_add_product_tags",
                        ].forEach((e) => {
                            const t = document.querySelector(e);
                            t &&
                                new Tagify(t, {
                                    whitelist: [
                                        "new",
                                        "trending",
                                        "sale",
                                        "discounted",
                                        "selling fast",
                                        "last 10",
                                    ],
                                    dropdown: {
                                        maxItems: 20,
                                        classname: "tagify__inline__suggestions",
                                        enabled: 0,
                                        closeOnSelect: !1,
                                    },
                                });
                        }),
                        (o = document.querySelector(
                            "#kt_ecommerce_add_product_discount_slider"
                        )),
                        (a = document.querySelector(
                            "#kt_ecommerce_add_product_discount_label"
                        )),
                        noUiSlider.create(o, {
                            start: [{{ $product->discount }}],
                            connect: !0,
                            range: {
                                min: 1,
                                max: 100
                            },
                        }),
                        o.noUiSlider.on("update", function(e, t) {
                            (a.innerHTML = Math.round(e[t])),
                            t && (a.innerHTML = Math.round(e[t]));
                        }),
                        e(),
                        new Dropzone("#kt_ecommerce_add_product_media", {
                            method: "post",
                            url: window.location.origin + "/admin/catalog/product/upload",
                            paramName: "file",
                            maxFiles: 10,
                            maxFilesize: 10,
                            addRemoveLinks: !0,
                            accept: function(e, t) {
                                "wow.jpg" == e.name ? t("Naha, you don't.") : t();
                            },
                            headers: {
                                'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                            },
                            success: function(file, response) {
                                //alert(file);
                                $("#description").append(
                                    '<input type="hidden" name="media[]" value="' + response.name +
                                    '">'
                                );
                                uploadedDocumentMap[file.name] = response.name
                            },
                            removedfile: function(file) {
                                //console.log(file.upload.filename);
                                // alert(JSON.parse(JSON.stringify(file)));
                                //console.log(JSON.parse(JSON.stringify(file)))
                                file.previewElement.remove()
                                var name = ''
                                if (typeof file.file_name !== 'undefined') {
                                    name = file.file_name
                                } else {
                                    name = uploadedDocumentMap[file.name]
                                }
                                $('form').find('input[name="media[]"][value="' + name + '"]')
                                    .remove()
                                $.ajax({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                    },
                                    type: 'POST',
                                    url: '{{ route('product.remove') }}',
                                    data: {
                                        filename: name
                                    },
                                    success: function(data) {
                                        console.log("File has been successfully removed!!");
                                        console.log(data);
                                    },
                                    error: function(e) {
                                        console.log(e);
                                    }
                                });
                            },
                            init: function() {
                                @if (isset($product) && $product->media)
                                @endif
                            }
                        }),
                        t(),
                        (() => {
                            const e = document.getElementById(
                                    "kt_ecommerce_add_product_status"
                                ),
                                t = document.getElementById(
                                    "kt_ecommerce_add_product_status_select"
                                ),
                                o = ["bg-success", "bg-warning", "bg-danger"];
                            $(t).on("change", function(t) {
                                switch (t.target.value) {
                                    case "published":
                                        e.classList.remove(...o),
                                            e.classList.add("bg-success"),
                                            c();
                                        break;
                                    case "scheduled":
                                        e.classList.remove(...o),
                                            e.classList.add("bg-warning"),
                                            d();
                                        break;
                                    case "inactive":
                                        e.classList.remove(...o),
                                            e.classList.add("bg-danger"),
                                            c();
                                        break;
                                    case "draft":
                                        e.classList.remove(...o),
                                            e.classList.add("bg-primary"),
                                            c();
                                }
                            });
                            const a = document.getElementById(
                                "kt_ecommerce_add_product_status_datepicker"
                            );
                            $("#kt_ecommerce_add_product_status_datepicker").flatpickr({
                                enableTime: !0,
                                dateFormat: "Y-m-d H:i",
                            });
                            const d = () => {
                                    a.parentNode.classList.remove("d-none");
                                },
                                c = () => {
                                    a.parentNode.classList.add("d-none");
                                };
                        })(),
                        (() => {
                            const e = document.querySelectorAll(
                                    '[name="method"][type="radio"]'
                                ),
                                t = document.querySelector(
                                    '[data-kt-ecommerce-catalog-add-category="auto-options"]'
                                );
                            e.forEach((e) => {
                                e.addEventListener("change", (e) => {
                                    "1" === e.target.value ?
                                        t.classList.remove("d-none") :
                                        t.classList.add("d-none");
                                });
                            });
                        })(),
                        (() => {
                            const e = document.querySelectorAll(
                                    'input[name="discount_option"]'
                                ),
                                t = document.getElementById(
                                    "kt_ecommerce_add_product_discount_percentage"
                                );
                            e.forEach((e) => {
                                e.addEventListener("change", (e) => {
                                    switch (e.target.value) {
                                        case "2":
                                            t.classList.remove("d-none")
                                            break;
                                        case "3":
                                            t.classList.add("d-none")
                                            break;
                                        default:
                                            t.classList.add("d-none");
                                    }
                                });
                            });
                        })(),
                        // (() => {
                        //     const e = document.getElementById(
                        //             "kt_ecommerce_add_product_shipping_checkbox"
                        //         ),
                        //         t = document.getElementById(
                        //             "kt_ecommerce_add_product_shipping"
                        //         );
                        //     e.addEventListener("change", (e) => {
                        //         e.target.checked
                        //             ? t.classList.remove("d-none")
                        //             : t.classList.add("d-none");
                        //     });
                        // })(),
                        (() => {
                            let e;
                            const t = document.getElementById(
                                    "kt_ecommerce_add_product_form"
                                ),
                                o = document.getElementById(
                                    "kt_ecommerce_add_product_submit"
                                );
                            (e = FormValidation.formValidation(t, {
                                fields: {
                                    product_name: {
                                        validators: {
                                            notEmpty: {
                                                message: "Product name is required",
                                            },
                                        },
                                    },
                                    price: {
                                        validators: {
                                            notEmpty: {
                                                message: "Product base price is required",
                                            },
                                        },
                                    },
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
                            o.addEventListener("click", (a) => {
                                a.preventDefault(),
                                    e &&
                                    e.validate().then(function(e) {
                                        console.log("validated!"),
                                            "Valid" == e ?
                                            (o.setAttribute(
                                                    "data-kt-indicator",
                                                    "on"
                                                ),
                                                (o.disabled = !0),
                                                setTimeout(function() {
                                                    o.removeAttribute(
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
                                                            $(
                                                                "#description"
                                                            ).append(
                                                                "<textarea name='description' style='display:none'>" +
                                                                $(
                                                                    ".ql-editor"
                                                                ).html() +
                                                                "</textarea>"
                                                            );
                                                            $(
                                                                "#description"
                                                            ).append(
                                                                "<input name='discount' type='hidden' value=" +
                                                                $(
                                                                    "#kt_ecommerce_add_product_discount_label"
                                                                ).html() +
                                                                ">"
                                                            );
                                                            // $("#kt_ecommerce_add_product_form")
                                                            //     .validate();
                                                            $("#kt_ecommerce_add_product_form")
                                                                .submit();
                                                        });
                                                }, 2e3)) :
                                            Swal.fire({
                                                html: "Sorry, looks like there are some errors detected, please try again. <br/><br/>Please note that there may be errors in the Form",
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
            KTAppEcommerceSaveProduct.init();
        });
    </script>
@endsection
