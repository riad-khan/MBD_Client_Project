@extends('Admin')

@section('content')
    <div id="top" class="sa-app__body">
        <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
            <div class="container product-container">
                <div class="py-5">
                    <div class="row g-4 align-items-center">
                        <div class="col">
                            <nav class="mb-2" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-sa-simple">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="app-products-list.html">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                                </ol>
                            </nav>
                            <h1 class="h3 m-0">Edit Product</h1>
                        </div>
                        <div class="col-auto d-flex">
                            <a href="#" class="btn btn-secondary me-3">Duplicate</a>
                            <a href="#" class="btn btn-primary">Save</a>
                        </div>
                    </div>
                </div>

                {{--                Form started--}}

                <form action="{{route('store.drafts')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="sa-entity-layout" data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}'>
                        <div class="sa-entity-layout__body">
                            <div class="sa-entity-layout__main">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="mb-5"><h2 class="mb-0 fs-exact-18">Basic information</h2></div>
                                        <div class="mb-4">
                                            <label for="form-product/name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="form-product/name" name="name" />
                                        </div>

                                        <div class="mb-4">
                                            <label for="form-product/description" class="form-label">Description</label>
                                            <textarea name="description">

                                        </textarea>
                                        </div>

                                    </div>
                                </div>

                                <div class="card mt-5">
                                    <div class="card-body p-4 pt-4">
                                        <div class="mb-5 border-bottom pb-3">
                                            <h2 class="mb-0 fs-exact-18">Product Data</h2>
                                        </div>
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button
                                                    class="nav-link active"
                                                    id="general-tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#general-tab-content"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="general-tab-content"
                                                    aria-selected="true"
                                                >
                                                    General
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button
                                                    class="nav-link"
                                                    id="features-tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#features-tab-content"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="features-tab-content"
                                                    aria-selected="true"
                                                >
                                                    Features
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button
                                                    class="nav-link"
                                                    id="gallery-tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#gallery-tab-content"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="gallery-tab-content"
                                                    aria-selected="true"
                                                >
                                                    Gallery
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button
                                                    class="nav-link"
                                                    id="videos-tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#videos-tab-content"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="videos-tab-content"
                                                    aria-selected="true"
                                                >
                                                    Videos
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button
                                                    class="nav-link"
                                                    id="ratings-tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#ratings-tab-content"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="ratings-tab-content"
                                                    aria-selected="true"
                                                >
                                                    Ratings
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button
                                                    class="nav-link"
                                                    id="specifications-tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#specifications-tab-content"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="specifications-tab-content"
                                                    aria-selected="true"
                                                >
                                                    Specifications
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button
                                                    class="nav-link"
                                                    id="filters-tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#filters-tab-content"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="filters-tab-content"
                                                    aria-selected="true"
                                                >
                                                    Filters
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button
                                                    class="nav-link"
                                                    id="offers-tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#offers-tab-content"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="offers-tab-content"
                                                    aria-selected="true"
                                                >
                                                    Offers
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button
                                                    class="nav-link"
                                                    id="faq-tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#faq-tab-content"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="faq-tab-content"
                                                    aria-selected="true"
                                                >
                                                    FAQ
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-4">
                                            <div class="tab-pane fade show active" id="general-tab-content" role="tabpanel" aria-labelledby="general-tab">
                                                <ul class="specs-wrapper list-group">
                                                    <li class="product-specs list-group-item p-3">
                                                        {{--                                                    <form class="row g-4">--}}
                                                        <div class="col-md-6">
                                                            <label for="price" class="form-label col-form-label-sm">Price</label
                                                            >
                                                            <div class="foot">
                                                                <span class="price-symbol">৳</span>
                                                                <input type="text" class="form-control form-control-sm" id="price" placeholder="0"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="oldPrice" class="form-label col-form-label-sm">Old Price</label
                                                            >
                                                            <div class="foot">
                                                                <span class="price-symbol">৳</span>
                                                                <input type="text" class="form-control form-control-sm" id="oldPrice" placeholder="0"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="unofficialPrice" class="form-label col-form-label-sm">Unofficial Price</label
                                                            >
                                                            <div class="foot">
                                                                <span class="price-symbol">৳</span>
                                                                <input type="text" class="form-control form-control-sm" id="unofficialPrice" placeholder="0"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="expectedPrice" class="form-label col-form-label-sm">Expected Price</label
                                                            >
                                                            <div class="foot">
                                                                <span class="price-symbol">৳</span>
                                                                <input type="text" class="form-control form-control-sm" id="expectedPrice" placeholder="0"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="releaseDate" class="form-label col-form-label-sm">Release Date</label
                                                            ><input
                                                                type="text"
                                                                class="form-control col-form-label-sm datepicker-here"
                                                                data-auto-close="true"
                                                                data-language="en"
                                                                aria-label="releaseDatePicker"
                                                                id="releaseDate"
                                                                value="22-07-2021"
                                                            />
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="availability" class="form-label col-form-label-sm">Availability</label
                                                            >
                                                            <select class="form-select form-select-sm" id="availability">
                                                                <option selected="" value="In Stock">In Stock</option>
                                                                <option value="Out of Stock">Out of Stock</option>
                                                                <option value="Uncoming">Uncoming</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="website" class="form-label col-form-label-sm">Official Website</label
                                                            ><input type="text" class="form-control form-control-sm" id="website" />
                                                        </div>
                                                        {{--                                                    </form>--}}
                                                    </li>
                                                    <li class="product-specs list-group-item mt-5 p-3">
                                                        <form id="variant" class="row g-4">
                                                            <div class="col-md-5 drag-wrapper">
                                                                <i class="fas fa-bars"></i>
                                                                <div class="inner-group">
                                                                    <label for="addProduct" class="form-label col-form-label-sm">Add Product</label
                                                                    >
                                                                    <select class="form-select form-select-sm" id="addProduct">
                                                                        <option selected="" value="YouTube">YouTube</option>
                                                                        <option value="Vimeo">Vimeo</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <label for="variant" class="form-label col-form-label-sm">Variant</label
                                                                >
                                                                <div class="add-btn-wrapper">
                                                                    <input type="text" class="form-control form-control-sm" id="variant"/>
                                                                    <button id="add_variant" type="button" class="btn btn-success btn-sm">
                                                                        <i class="fas fa-plus fa-sm"></i>
                                                                        Add Variant
                                                                    </button>
                                                                </div>
                                                            </div>



                                                        </form>
                                                        <button type="button" class="sa-close col-form-label-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="features-tab-content" role="tabpanel" aria-labelledby="features-tab">
                                                <ul class="specs-wrapper list-group">
                                                    <li class="product-specs list-group-item p-3">
                                                        <div class="row g-4 align-items-center">
                                                            <div class="col-md-4">
                                                                <label for="os" class="feature-item col-form-label-sm">
                                                                    <i class="fab fa-android fa-lg"></i>
                                                                    <span class="feature-text">OS</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="input-group input-group-sm">
                                                                    <select name="platform" class="form-select w-25">
                                                                        <option selected="">Platform</option>
                                                                        <option value="Android">Android</option>
                                                                        <option value="iOS">iOS</option>
                                                                        <option value="HongmanOS">HongmanOS</option>
                                                                        <option value="Windows Phone">Windows Phone</option>
                                                                    </select>
                                                                    <input
                                                                        type="text"
                                                                        class="form-control w-75"
                                                                        id="os"
                                                                        name="os"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                        <div class="row g-4 align-items-center">
                                                            <div class="col-md-4">
                                                                <label for="frontCamera" class="feature-item col-form-label-sm">
                                                                    <i class="fas fa-camera-retro fa-lg"></i>
                                                                    <span class="feature-text">Front Camera</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="front_camera" class="form-control form-control-sm" id="frontCamera"/>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                        <div class="row g-4 align-items-center">
                                                            <div class="col-md-4">
                                                                <label for="mainCamera" class="feature-item col-form-label-sm">
                                                                    <i class="fas fa-camera fa-lg"></i>
                                                                    <span class="feature-text">Main Camera</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="main_camera" class="form-control form-control-sm" id="mainCamera"/>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                        <div class="row g-4 align-items-center">
                                                            <div class="col-md-4">
                                                                <label for="display" class="feature-item col-form-label-sm">
                                                                    <i class="fas fa-mobile-alt fa-lg"></i>
                                                                    <span class="feature-text">Display</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="display" class="form-control form-control-sm" id="display"/>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                        <div class="row g-4 align-items-center">
                                                            <div class="col-md-4">
                                                                <label for="battery" class="feature-item col-form-label-sm">
                                                                    <i class="fas fa-battery-three-quarters fa-lg"></i>
                                                                    <span class="feature-text">Battery</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="battery" class="form-control form-control-sm" id="battery"/>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                        <div class="row g-4 align-items-center">
                                                            <div class="col-md-4">
                                                                <label for="ram" class="feature-item col-form-label-sm">
                                                                    <i class="fas fa-memory fa-lg"></i>
                                                                    <span class="feature-text">RAM</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="ram" class="form-control form-control-sm" id="ram"/>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                        <div class="row g-4 align-items-center">
                                                            <div class="col-md-4">
                                                                <label for="storage" class="feature-item col-form-label-sm">
                                                                    <i class="fas fa-sd-card fa-lg"></i>
                                                                    <span class="feature-text">Storage</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="storage" class="form-control form-control-sm" id="storage"/>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                        <div class="row g-4 align-items-center">
                                                            <div class="col-md-4">
                                                                <div class="input-group input-group-sm">
                                                                    <div class="input-group-text">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="form-check-input mt-0"
                                                                            aria-label="Checkbox for following text input"
                                                                            value=""
                                                                        />
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Fingerprint sensor" value="Fingerprint sensor"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="input-group input-group-sm">
                                                                    <div class="input-group-text">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="form-check-input mt-0"
                                                                            aria-label="Checkbox for following text input"
                                                                            value=""
                                                                        />
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Wireless charging" value="Wireless charging"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="input-group input-group-sm">
                                                                    <div class="input-group-text">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="form-check-input mt-0"
                                                                            aria-label="Checkbox for following text input"
                                                                            value=""
                                                                        />
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Water proof, IP69" value="Water proof, IP69"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="input-group input-group-sm">
                                                                    <div class="input-group-text">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="form-check-input mt-0"
                                                                            aria-label="Checkbox for following text input"
                                                                            value=""
                                                                        />
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Wireless connection" value="Wireless connection"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="input-group input-group-sm">
                                                                    <div class="input-group-text">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="form-check-input mt-0"
                                                                            aria-label="Checkbox for following text input"
                                                                            value=""
                                                                        />
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Gorilla glass 5" value="Gorilla glass 5"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="input-group input-group-sm">
                                                                    <div class="input-group-text">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="form-check-input mt-0"
                                                                            aria-label="Checkbox for following text input"
                                                                            value=""
                                                                        />
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Bluetooth" value="Bluetooth"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="gallery-tab-content" role="tabpanel" aria-labelledby="gallery-tab">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul class="nav nav2 flex-md-column nav-tabs" role="tablist" aria-orientation="vertical">
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link active"
                                                                    id="product-img-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#product-img-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="product-img-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    Product Images
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link"
                                                                    id="colors-img-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#colors-img-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="colors-img-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    Mobile Colors
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link"
                                                                    id="ui-ss-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#ui-ss-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="ui-ss-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    UI Screenshots
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link"
                                                                    id="camera-ui-sample-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#camera-ui-sample-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="camera-ui-sample-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    Camera UI & Samples
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade show active" id="product-img-tab-content"
                                                                 role="tabpanel"
                                                                 aria-labelledby="product-img-tab">
                                                                <ul class="gallery-images list-group">
                                                                    <li class="list-group-item">
                                                                        <img src="./images/products/samsung10.png" alt="Product" class="img-fluid">
                                                                        <button type="button" class="sa-close col-form-label-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <img src="./images/products/samsung10.png" alt="Product" class="img-fluid">
                                                                        <button type="button" class="sa-close col-form-label-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <img src="./images/products/samsung10.png" alt="Product" class="img-fluid">
                                                                        <button type="button" class="sa-close col-form-label-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <img src="./images/products/samsung10.png" alt="Product" class="img-fluid">
                                                                        <button type="button" class="sa-close col-form-label-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </li>
                                                                </ul>
                                                                <div class="add-btn-wrapper mt-5">
                                                                    <a href="app-file-manager.html" role="button" class="btn btn-success btn-sm">
                                                                        <i class="far fa-images fa-sm"></i>
                                                                        Add images
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="colors-img-tab-content"
                                                                 role="tabpanel"
                                                                 aria-labelledby="colors-img-tab">
                                                                <ul class="gallery-images list-group">
                                                                    <li class="list-group-item">
                                                                        <img src="./images/products/samsung10.png" alt="Product" class="img-fluid">
                                                                        <button type="button" class="sa-close col-form-label-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <img src="./images/products/samsung10.png" alt="Product" class="img-fluid">
                                                                        <button type="button" class="sa-close col-form-label-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <img src="./images/products/samsung10.png" alt="Product" class="img-fluid">
                                                                        <button type="button" class="sa-close col-form-label-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </li>
                                                                </ul>
                                                                <div class="add-btn-wrapper mt-5">
                                                                    <a href="app-file-manager.html" role="button" class="btn btn-success btn-sm">
                                                                        <i class="far fa-images fa-sm"></i>
                                                                        Add images
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="ui-ss-tab-content"
                                                                 role="tabpanel"
                                                                 aria-labelledby="ui-ss-tab">
                                                                <ul class="gallery-images list-group">
                                                                    <li class="list-group-item">
                                                                        <img src="./images/products/samsung10.png" alt="Product" class="img-fluid">
                                                                        <button type="button" class="sa-close col-form-label-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <img src="./images/products/samsung10.png" alt="Product" class="img-fluid">
                                                                        <button type="button" class="sa-close col-form-label-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </li>
                                                                </ul>
                                                                <div class="add-btn-wrapper mt-5">
                                                                    <a href="app-file-manager.html" role="button" class="btn btn-success btn-sm">
                                                                        <i class="far fa-images fa-sm"></i>
                                                                        Add images
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="camera-ui-sample-tab-content"
                                                                 role="tabpanel"
                                                                 aria-labelledby="camera-ui-sample-tab">
                                                                <ul class="gallery-images list-group">
                                                                    <li class="list-group-item">
                                                                        <img src="./images/products/samsung10.png" alt="Product" class="img-fluid">
                                                                        <button type="button" class="sa-close col-form-label-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </li>
                                                                </ul>
                                                                <div class="add-btn-wrapper mt-5">
                                                                    <a href="app-file-manager.html" role="button" class="btn btn-success btn-sm">
                                                                        <i class="far fa-images fa-sm"></i>
                                                                        Add images
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="videos-tab-content" role="tabpanel" aria-labelledby="videos-tab">
                                                <ul class="specs-wrapper list-group">
                                                    <li class="product-specs list-group-item mb-5 p-3">
                                                        <form class="row g-4">
                                                            <div class="col-md-6 drag-wrapper">
                                                                <i class="fas fa-bars"></i>
                                                                <div class="inner-group">
                                                                    <label for="addProduct" class="form-label col-form-label-sm">Video Host</label
                                                                    >
                                                                    <select class="form-select form-select-sm" id="addProduct">
                                                                        <option selected="" value="https://youtube.com">YouTube</option>
                                                                        <option value="https://vimeo.com">Vimeo</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="variant" class="form-label col-form-label-sm">Video ID</label
                                                                >
                                                                <input type="text" class="form-control form-control-sm" id="variant"/>
                                                            </div>
                                                        </form>
                                                        <button type="button" class="sa-close col-form-label-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </li>
                                                </ul>

                                                <div class="add-btn-wrapper">
                                                    <button type="button" class="btn btn-success btn-sm">
                                                        <i class="fas fa-plus fa-sm"></i>
                                                        Add Video
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="ratings-tab-content" role="tabpanel" aria-labelledby="ratings-tab">
                                                <ul class="specs-wrapper list-group">
                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                        <form class="row g-4 align-items-center">
                                                            <div class="col-md-6">
                                                                <label class="form-check">
                                                                    <input type="checkbox" class="form-check-input" />
                                                                    <span class="form-check-label">
                                                                                                            Do not show rating
                                                                                                        </span
                                                                                                        ></label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="overall-rating-group">
                                                                    <span class="out-of">Overall rating</span>
                                                                    <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg sa-symbol--style--warning">
                                                                        <div class="sa-symbol__text">3.5</div>
                                                                    </div>
                                                                    <span class="out-of">/ 5</span>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </li>
                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                        <form class="row g-4 align-items-center">
                                                            <div class="col-md-4">
                                                                <label for="designRating" class="col-form-label-sm">
                                                                    Design
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="input-group rating-group input-group-sm">
                                                                    <input
                                                                        type="range"
                                                                        type="range" class="form-range" id="designRange" min="0" max="5" step="0.1" value="3.5"
                                                                    /><span class="input-group-text" id="designRatingScore">3.5</span
                                                                    >
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </li>
                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                        <form class="row g-4 align-items-center">
                                                            <div class="col-md-4">
                                                                <label for="displayRating" class="col-form-label-sm">
                                                                    Display
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="input-group rating-group input-group-sm">
                                                                    <input
                                                                        type="range"
                                                                        type="range" class="form-range" id="displayRating" min="0" max="5" step="0.1" value="3.5"
                                                                    /><span class="input-group-text" id="displayRatingScore">3.5</span
                                                                    >
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </li>
                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                        <form class="row g-4 align-items-center">
                                                            <div class="col-md-4">
                                                                <label for="performanceRating" class="col-form-label-sm">
                                                                    Performance
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="input-group rating-group input-group-sm">
                                                                    <input
                                                                        type="range"
                                                                        type="range" class="form-range" id="performanceRating" min="0" max="5" step="0.1" value="3.5"
                                                                    /><span class="input-group-text" id="performanceRatingScore">3.5</span
                                                                    >
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </li>
                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                        <form class="row g-4 align-items-center">
                                                            <div class="col-md-4">
                                                                <label for="batteryRating" class="col-form-label-sm">
                                                                    Battery
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="input-group rating-group input-group-sm">
                                                                    <input
                                                                        type="range"
                                                                        type="range" class="form-range" id="batteryRating" min="0" max="5" step="0.1" value="3.5"
                                                                    /><span class="input-group-text" id="batteryRatingScore">3.5</span
                                                                    >
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="specifications-tab-content" role="tabpanel" aria-labelledby="specifications-tab">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul class="nav nav2 flex-md-column nav-tabs" role="tablist" aria-orientation="vertical">
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link active"
                                                                    id="general-attr-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#general-attr-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="general-attr-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    General
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link"
                                                                    id="hardsoft-attr-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#hardsoft-attr-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="hardsoft-attr-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    Hardware & Software
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link"
                                                                    id="display-attr-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#display-attr-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="display-attr-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    Display
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link"
                                                                    id="design-attr-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#design-attr-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="design-attr-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    Design
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link"
                                                                    id="cameras-attr-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#cameras-attr-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="cameras-attr-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    Cameras
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link"
                                                                    id="selfie-cam-attr-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#selfie-cam-attr-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="selfie-cam-attr-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    Selfie Camera
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link"
                                                                    id="battery-attr-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#battery-attr-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="battery-attr-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    Battery
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link"
                                                                    id="memory-attr-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#memory-attr-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="memory-attr-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    Memory
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link"
                                                                    id="network-attr-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#network-attr-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="network-attr-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    Network & Connectivity
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link"
                                                                    id="multimedia-attr-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#multimedia-attr-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="multimedia-attr-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    Multimedia
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link"
                                                                    id="sensores-sec-attr-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#sensores-sec-attr-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="sensores-sec-attr-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    Sensors & security
                                                                </button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button
                                                                    class="nav-link"
                                                                    id="more-attr-tab"
                                                                    data-bs-toggle="tab"
                                                                    data-bs-target="#more-attr-tab-content"
                                                                    type="button"
                                                                    role="tab"
                                                                    aria-controls="more-attr-tab-content"
                                                                    aria-selected="true"
                                                                >
                                                                    More
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade show active" id="general-attr-tab-content"
                                                                 role="tabpanel"
                                                                 aria-labelledby="general-attr-tab">
                                                                <ul class="specs-wrapper list-group">
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="brandGeneralAttr" class="col-form-label-sm">
                                                                                    Brand
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <select class="form-select form-select-sm" id="brandGeneralAttr">
                                                                                    <option selected="">iPhone</option>
                                                                                    <option>Xiaomi</option>
                                                                                    <option>Samsung</option>
                                                                                    <option>Nokia</option>
                                                                                </select>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="deviceTypeGeneralAttr" class="col-form-label-sm">
                                                                                    Device Type
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="deviceTypeGeneralAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="modelGeneralAttr" class="col-form-label-sm">
                                                                                    Model
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="modelGeneralAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="releaseGeneralAttr" class="col-form-label-sm">
                                                                                    Release Date
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="releaseGeneralAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="statusGeneralAttr" class="col-form-label-sm">
                                                                                    Status
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="statusGeneralAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="hardsoft-attr-tab-content"
                                                                 role="tabpanel"
                                                                 aria-labelledby="hardsoft-attr-tab">
                                                                <ul class="specs-wrapper list-group">
                                                                    <li class="product-specs list-group-item p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="osHardwareAttr"class="col-form-label-sm">
                                                                                    Operating System
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="osHardwareAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="osHardwareAttr"class="col-form-label-sm">
                                                                                    OS Version
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="osHardwareAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="uiHardwareAttr"class="col-form-label-sm">
                                                                                    User Interface
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="uiHardwareAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="chipsetHardwareAttr"class="col-form-label-sm">
                                                                                    Chipset
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="chipsetHardwareAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="cpuHardwareAttr"class="col-form-label-sm">
                                                                                    CPU
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="cpuHardwareAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="coresHardwareAttr"class="col-form-label-sm">
                                                                                    CPU Cores
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="coresHardwareAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="architectureHardwareAttr"class="col-form-label-sm">
                                                                                    Architecture
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="architectureHardwareAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="fabricationHardwareAttr"class="col-form-label-sm">
                                                                                    Fabrication
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="fabricationHardwareAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="gpuHardwareAttr"class="col-form-label-sm">
                                                                                    GPU
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="gpuHardwareAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="display-attr-tab-content"
                                                                 role="tabpanel"
                                                                 aria-labelledby="display-attr-tab">
                                                                <ul class="specs-wrapper list-group">
                                                                    <li class="product-specs list-group-item p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="typeDisplayAttr" class="col-form-label-sm">
                                                                                    Display Type
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="typeDisplayAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="ssDisplayAttr" class="col-form-label-sm">
                                                                                    Screen Size
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="ssDisplayAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="resolutionDisplayAttr" class="col-form-label-sm">
                                                                                    Resulation
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="resolutionDisplayAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="ratioDisplayAttr" class="col-form-label-sm">
                                                                                    Aspect Ratio
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="buildGeneralAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="pixelDisplayAttr" class="col-form-label-sm">
                                                                                    Pixel Density
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="pixelDisplayAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="screenBodyDisplayAttr" class="col-form-label-sm">
                                                                                    Screen to Body Ratio
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="buildGeneralAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="screenProtectionDisplayAttr" class="col-form-label-sm">
                                                                                    Screen Protection
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input align-self-start"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="screenProtectionDisplayAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <textarea class="form-control form-control-sm" rows="2"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="bezellessDisplayAttr" class="col-form-label-sm">
                                                                                    Bezel-less Display
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="bezellessDisplayAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="bezellessDisplayAttr"
                                                                                        aria-describedby="Bezel-less Display"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="touchScreenDisplayAttr" class="col-form-label-sm">
                                                                                    Touch Screen
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input align-self-start"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="touchScreenDisplayAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <textarea class="form-control form-control-sm" rows="2"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="brightnessDisplayAttr" class="col-form-label-sm">
                                                                                    Brightness
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="brightnessDisplayAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="hdrDisplayAttr" class="col-form-label-sm">
                                                                                    HDR 10 / HDR + support
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="hdrDisplayAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="hdrDisplayAttr"
                                                                                        aria-describedby="HDR 10 / HDR + support"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="refreshDisplayAttr" class="col-form-label-sm">
                                                                                    Refresh Rate
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="refreshDisplayAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="notchDisplayAttr" class="col-form-label-sm">
                                                                                    Notch
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="notchDisplayAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="notchDisplayAttr"
                                                                                        aria-describedby="Notch"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="featuresDisplayAttr" class="col-form-label-sm">
                                                                                    Features
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="featuresDisplayAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="design-attr-tab-content"
                                                                 role="tabpanel" aria-labelledby="display-attr-tab">
                                                                <ul class="specs-wrapper list-group">
                                                                    <li class="product-specs list-group-item p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="heightDesignAttr" class="col-form-label-sm">
                                                                                    Height
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="heightDesignAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="widthDesignAttr" class="col-form-label-sm">
                                                                                    Width
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="widthDesignAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="thicknessDesignAttr" class="col-form-label-sm">
                                                                                    Thickness
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="thicknessDesignAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="weightDesignAttr" class="col-form-label-sm">
                                                                                    Weight
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="weightDesignAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="buildDesignAttr" class="col-form-label-sm">
                                                                                    Build
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="buildDesignAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="colorsDesignAttr" class="col-form-label-sm">
                                                                                    Colors
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="colorsDesignAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="waterproofDisignAttr" class="col-form-label-sm">
                                                                                    Waterproof
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="waterproofDisignAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="waterproofDisignAttr"
                                                                                        aria-describedby="Waterproof"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="ipRatingDesignAttr" class="col-form-label-sm">
                                                                                    IP Rating
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="ipRatingDesignAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="ruggednessDisplayAttr" class="col-form-label-sm">
                                                                                    Ruggedness
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="ruggednessDisplayAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="ruggednessDisplayAttr"
                                                                                        aria-describedby="Ruggedness"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="cameras-attr-tab-content"
                                                                 role="tabpanel"
                                                                 aria-labelledby="cameras-attr-tab">
                                                                <ul class="specs-wrapper list-group">
                                                                    <li class="product-specs list-group-item p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="setupCamerasAttr" class="col-form-label-sm">
                                                                                    Camera Setup
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="setupCamerasAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="resolutionCamerasAttr" class="col-form-label-sm">
                                                                                    Resolution
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="resolutionCamerasAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="sensorCamerasAttr" class="col-form-label-sm">
                                                                                    Sensor
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="sensorCamerasAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="autofocusCamerasAttr" class="col-form-label-sm">
                                                                                    Autofocus
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="autofocusCamerasAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="autofocusCamerasAttr"
                                                                                        aria-describedby="Autofocus"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="oisCamerasAttr" class="col-form-label-sm">
                                                                                    OIS
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="oisCamerasAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="oisCamerasAttr"
                                                                                        aria-describedby="OIS"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="flashCamerasAttr" class="col-form-label-sm">
                                                                                    Flash
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="flashCamerasAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="flashCamerasAttr"
                                                                                        aria-describedby="Flash"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="imgResCamerasAttr" class="col-form-label-sm">
                                                                                    Image Resolution
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="imgResCamerasAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="settingsCamerasAttr" class="col-form-label-sm">
                                                                                    Settings
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="settingsCamerasAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="zoomCamerasAttr" class="col-form-label-sm">
                                                                                    Zoom
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="zoomCamerasAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="shootingModesCamerasAttr" class="col-form-label-sm">
                                                                                    Shooting Modes
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="shootingModesCamerasAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="apertureCamerasAttr" class="col-form-label-sm">
                                                                                    Aperture
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="apertureCamerasAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="cameraFeaturesCamerasAttr" class="col-form-label-sm">
                                                                                    Camera Features
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="cameraFeaturesCamerasAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="videoRecordCamerasAttr" class="col-form-label-sm">
                                                                                    Video Recording
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="videoRecordCamerasAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="videofpsCamerasAttr" class="col-form-label-sm">
                                                                                    Video FPS
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="videofpsCamerasAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="imgStableCamerasAttr" class="col-form-label-sm">
                                                                                    Image Stabilization
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="imgStableCamerasAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="imgStableCamerasAttr"
                                                                                        aria-describedby="Image Stabilization"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="selfie-cam-attr-tab-content"
                                                                 role="tabpanel"
                                                                 aria-labelledby="selfie-cam-attr-tab">
                                                                <ul class="specs-wrapper list-group">
                                                                    <li class="product-specs list-group-item p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="setupSelfiAttr" class="col-form-label-sm">
                                                                                    Camera Setup
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="setupSelfiAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="resolutaionSelfiAttr"class="col-form-label-sm">
                                                                                    Resolution
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="resolutaionSelfiAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="sensorSelfiAttr" class="col-form-label-sm">
                                                                                    Sensor
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="sensorSelfiAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="flashSelfiAttr"class="col-form-label-sm">
                                                                                    Flash
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="flashSelfiAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="flashSelfiAttr"
                                                                                        aria-describedby="Flash"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="caremaFeaturesSelfiAttr"class="col-form-label-sm">
                                                                                    Camera Features
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="caremaFeaturesSelfiAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="imgStableSelfiAttr" class="col-form-label-sm">
                                                                                    Image Stabilization
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="imgStableSelfiAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="imgStableSelfiAttr"
                                                                                        aria-describedby="Image Stabilization"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="videoRecordSelfiAttr" class="col-form-label-sm">
                                                                                    Video Recording
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="videoRecordSelfiAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="videofpsSelfiAttr" class="col-form-label-sm">
                                                                                    Video FPS
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="videofpsSelfiAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4 align-items-center">
                                                                            <div class="col-md-4">
                                                                                <label for="apertureSelfiAttr" class="col-form-label-sm">
                                                                                    Aperture
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="apertureSelfiAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="battery-attr-tab-content"
                                                                 role="tabpanel"
                                                                 aria-labelledby="battery-attr-tab">
                                                                <ul class="specs-wrapper list-group">
                                                                    <li class="product-specs list-group-item p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="typeBatteryAttr"class="col-form-label-sm">
                                                                                    Battery type
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="typeBatteryAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="capacityBatteryAttr"class="col-form-label-sm">
                                                                                    Capacity
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="capacityBatteryAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="wirelessChargeBatteryAttr" class="col-form-label-sm">
                                                                                    Wireless Charging
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="wirelessChargeBatteryAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="wirelessChargeBatteryAttr"
                                                                                        aria-describedby="Wireless Charging"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="quickChargeBatteryAttr" class="col-form-label-sm">
                                                                                    Quick Charging
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="quickChargeBatteryAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="quickChargeBatteryAttr"
                                                                                        aria-describedby="Quick Charging"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="reverseChargeBatteryAttr" class="col-form-label-sm">
                                                                                    Reverse Charging
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="reverseChargeBatteryAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="reverseChargeBatteryAttr"
                                                                                        aria-describedby="Reverse Charging"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="palcementBatteryAttr" class="col-form-label-sm">
                                                                                    Placement
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="palcementBatteryAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="standbyBatteryAttr" class="col-form-label-sm">
                                                                                    Standby
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="standbyBatteryAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="talkTimeBatteryAttr" class="col-form-label-sm">
                                                                                    Talk Time
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="talkTimeBatteryAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="musicPlayBatteryAttr" class="col-form-label-sm">
                                                                                    Music Play
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="musicPlayBatteryAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="usbTypeBatteryAttr" class="col-form-label-sm">
                                                                                    USB Type-C
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="usbTypeBatteryAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="usbTypeBatteryAttr"
                                                                                        aria-describedby="USB Type-C"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="memory-attr-tab-content"
                                                                 role="tabpanel"
                                                                 aria-labelledby="memory-attr-tab">
                                                                <ul class="specs-wrapper list-group">
                                                                    <li class="product-specs list-group-item p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="internalMemoryAttr"class="col-form-label-sm">
                                                                                    Internal Storage
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="internalMemoryAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="storageMemoryAttr"class="col-form-label-sm">
                                                                                    Storage Type
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="storageMemoryAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="expandMemoryAttr" class="col-form-label-sm">
                                                                                    Expandable Memory
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="expandMemoryAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="expandMemoryAttr"
                                                                                        aria-describedby="Expandable Memory"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="usbOTGMemoryAttr" class="col-form-label-sm">
                                                                                    USB OTG
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="usbOTGMemoryAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="usbOTGMemoryAttr"
                                                                                        aria-describedby="USB OTG"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="ramMemoryAttr"class="col-form-label-sm">
                                                                                    RAM
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="ramMemoryAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="virtualRAMMemoryAttr" class="col-form-label-sm">
                                                                                    Virtual RAM
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="virtualRAMMemoryAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="virtualRAMMemoryAttr"
                                                                                        aria-describedby="Virtual RAM"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="ramTypeMemoryAttr"class="col-form-label-sm">
                                                                                    RAM Type
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="ramTypeMemoryAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="network-attr-tab-content"
                                                                 role="tabpanel"
                                                                 aria-labelledby="network-attr-tab">
                                                                <ul class="specs-wrapper list-group">
                                                                    <li class="product-specs list-group-item p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="netNetworkAttr"class="col-form-label-sm">
                                                                                    Network
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="netNetworkAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="simSlotNetworkAttr"class="col-form-label-sm">
                                                                                    SIM Slot
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="simSlotNetworkAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="simSideNetworkAttr"class="col-form-label-sm">
                                                                                    SIM Side
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="simSideNetworkAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-6">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value=""
                                                                                        />
                                                                                    </div>
                                                                                    <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Gorilla glass 5" value="EDGE"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value=""
                                                                                        />
                                                                                    </div>
                                                                                    <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Gorilla glass 5" value="GPRS"/>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="volteNetworkAttr" class="col-form-label-sm">
                                                                                    VoLTE
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="volteNetworkAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="volteNetworkAttr"
                                                                                        aria-describedby="VoLTE"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="speedNetworkAttr"class="col-form-label-sm">
                                                                                    Speed
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="speedNetworkAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="wlanNetworkAttr"class="col-form-label-sm">
                                                                                    WLAN
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="wlanNetworkAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="bluetoothNetworkAttr" class="col-form-label-sm">
                                                                                    Bluetooth
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="bluetoothNetworkAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="bluetoothNetworkAttr"
                                                                                        aria-describedby="Bluetooth"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="gpsNetworkAttr"class="col-form-label-sm">
                                                                                    GPS
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="gpsNetworkAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="infraredNetworkAttr" class="col-form-label-sm">
                                                                                    Infrared
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="infraredNetworkAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="infraredNetworkAttr"
                                                                                        aria-describedby="Infrared"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="hotspotNetworkAttr" class="col-form-label-sm">
                                                                                    Wi-fi Hotspot
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="hotspotNetworkAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="hotspotNetworkAttr"
                                                                                        aria-describedby="Wi-fi Hotspot"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="nfcNetworkAttr" class="col-form-label-sm">
                                                                                    NFC
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="nfcNetworkAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="nfcNetworkAttr"
                                                                                        aria-describedby="NFC"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="usbNetworkAttr"class="col-form-label-sm">
                                                                                    USB
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="usbNetworkAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="multimedia-attr-tab-content"
                                                                 role="tabpanel"
                                                                 aria-labelledby="multimedia-attr-tab">
                                                                <ul class="specs-wrapper list-group">
                                                                    <li class="product-specs list-group-item p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="fmMediaAttr" class="col-form-label-sm">
                                                                                    FM Radio
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="fmMediaAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="fmMediaAttr"
                                                                                        aria-describedby="FM Radio"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="speakerMediaAttr" class="col-form-label-sm">
                                                                                    Loudspeaker
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="speakerMediaAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="speakerMediaAttr"
                                                                                        aria-describedby="Loudspeaker"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="alertMediaAttr"class="col-form-label-sm">
                                                                                    Alert Types
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="alertMediaAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="audioMediaAttr"class="col-form-label-sm">
                                                                                    Audio Features
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="audioMediaAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="videoMediaAttr"class="col-form-label-sm">
                                                                                    Video
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="videoMediaAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="docMediaAttr"class="col-form-label-sm">
                                                                                    Document Reader
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="docMediaAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="sensores-sec-attr-tab-content"
                                                                 role="tabpanel"
                                                                 aria-labelledby="sensores-sec-attr-tab">
                                                                <ul class="specs-wrapper list-group">
                                                                    <li class="product-specs list-group-item p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="lightSecurityAttr" class="col-form-label-sm">
                                                                                    Light Sensor
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="lightSecurityAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="lightSecurityAttr"
                                                                                        aria-describedby="Light Sensor"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="fingerSensorSecurityAttr" class="col-form-label-sm">
                                                                                    Fingerprint Sensor
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="fingerSensorSecurityAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="fingerSensorSecurityAttr"
                                                                                        aria-describedby="Fingerprint Sensor"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="fingerpositionSecurityAttr"class="col-form-label-sm">
                                                                                    Finger Sensor Position
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="fingerpositionSecurityAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="fingerTypeSecurityAttr"class="col-form-label-sm">
                                                                                    Finger Sensor Type
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="fingerTypeSecurityAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="faceSecurityAttr" class="col-form-label-sm">
                                                                                    Face Unlock
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-group-sm">
                                                                                    <div class="input-group-text">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="form-check-input mt-0"
                                                                                            aria-label="Checkbox for following text input"
                                                                                            value="" id="faceSecurityAttr"
                                                                                        />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        aria-label="faceSecurityAttr"
                                                                                        aria-describedby="Face Unlock"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane fade" id="more-attr-tab-content"
                                                                 role="tabpanel"
                                                                 aria-labelledby="more-attr-tab">
                                                                <ul class="specs-wrapper list-group">
                                                                    <li class="product-specs list-group-item p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="madeMoreAttr"class="col-form-label-sm">
                                                                                    Made By
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control form-control-sm" id="madeMoreAttr"/>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="product-specs list-group-item mt-3 p-3">
                                                                        <form class="row g-4">
                                                                            <div class="col-md-4">
                                                                                <label for="madeMoreAttr"class="col-form-label-sm">
                                                                                    Features
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <textarea class="form-control form-control-sm" rows="2" id="madeMoreAttr"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="filters-tab-content" role="tabpanel" aria-labelledby="filters-tab">
                                                <ul class="specs-wrapper list-group">
                                                    <li class="product-specs list-group-item p-3">
                                                        <label for="price-filter" class="form-label col-form-label-sm">Price</label>
                                                        <select multiple="" class="sa-select2 form-select form-select-sm" id="price-filter">
                                                            <option selected="">5,001 - 10,000 Tk</option>
                                                            <option>10,001 - 15,000 Tk</option>
                                                            <option>15,001 - 20,000 Tk</option>
                                                            <option>20,001 - 25,000 Tk</option>
                                                        </select>
                                                    </li>
                                                    <li class="product-specs list-group-item p-3">
                                                        <label for="battery-filter" class="form-label col-form-label-sm">Battery</label>
                                                        <select multiple="" class="sa-select2 form-select form-select-sm" id="battery-filter">
                                                            <option selected="">1,001 - 1,500 mAh</option>
                                                            <option>1,501 - 2,000 mAh</option>
                                                            <option>2,001 - 2,500 mAh</option>
                                                            <option>2,501 - 3,000 mAh</option>
                                                        </select>
                                                    </li>
                                                    <li class="product-specs list-group-item p-3">
                                                        <label for="camera-filter" class="form-label col-form-label-sm">Camera</label>
                                                        <select multiple="" class="sa-select2 form-select form-select-sm" id="camera-filter">
                                                            <option selected="">1MP</option>
                                                            <option>2MP</option>
                                                            <option>5MP</option>
                                                            <option>8MP</option>
                                                            <option>10MP</option>
                                                            <option>12MP</option>
                                                            <option>13MP</option>
                                                            <option>16MP</option>
                                                        </select>
                                                    </li>
                                                    <li class="product-specs list-group-item p-3">
                                                        <label for="chipset-filter" class="form-label col-form-label-sm">Chipset Type</label>
                                                        <select multiple="" class="sa-select2 form-select form-select-sm" id="chipset-filter">
                                                            <option selected="">Bionic</option>
                                                            <option>Exynos</option>
                                                            <option>MediaTek</option>
                                                            <option>Qualcomm</option>
                                                            <option>Others</option>
                                                        </select>
                                                    </li>
                                                    <li class="product-specs list-group-item p-3">
                                                        <label for="connectivity-filter" class="form-label col-form-label-sm">Connectivity</label>
                                                        <select multiple="" class="sa-select2 form-select form-select-sm" id="connectivity-filter">
                                                            <option selected="">Bluetooth</option>
                                                            <option>FM Radio</option>
                                                            <option>GPS</option>
                                                            <option>Infrared</option>
                                                            <option>NFC</option>
                                                            <option>USB Type-C</option>
                                                        </select>
                                                    </li>
                                                    <li class="product-specs list-group-item p-3">
                                                        <label for="display-filter" class="form-label col-form-label-sm">Display</label>
                                                        <select multiple="" class="sa-select2 form-select form-select-sm" id="display-filter">
                                                            <option selected="">4.1 inches</option>
                                                            <option>4.8 inches</option>
                                                            <option>5.0 inches</option>
                                                            <option>5.2 inches</option>
                                                            <option>5.6 inches</option>
                                                            <option>12MP</option>
                                                            <option>13MP</option>
                                                            <option>16MP</option>
                                                        </select>
                                                    </li>
                                                    <li class="product-specs list-group-item p-3">
                                                        <label for="network-filter" class="form-label col-form-label-sm">Network</label>
                                                        <select multiple="" class="sa-select2 form-select form-select-sm" id="network-filter">
                                                            <option selected="">EDGE</option>
                                                            <option>3G</option>
                                                            <option>4G - LTE</option>
                                                            <option>5G</option>
                                                        </select>
                                                    </li>
                                                    <li class="product-specs list-group-item p-3">
                                                        <label for="ram-filter" class="form-label col-form-label-sm">RAM</label>
                                                        <select multiple="" class="sa-select2 form-select form-select-sm" id="ram-filter">
                                                            <option selected="">1GB</option>
                                                            <option>2GB</option>
                                                            <option>3GB</option>
                                                            <option>4GB</option>
                                                            <option>6GB</option>
                                                            <option>8GB</option>
                                                            <option>12Gb</option>
                                                        </select>
                                                    </li>
                                                    <li class="product-specs list-group-item p-3">
                                                        <label for="sim-filter" class="form-label col-form-label-sm">SIM</label>
                                                        <select multiple="" class="sa-select2 form-select form-select-sm" id="sim-filter">
                                                            <option selected="">single</option>
                                                            <option>duel</option>
                                                        </select>
                                                    </li>
                                                    <li class="product-specs list-group-item p-3">
                                                        <label for="storage-filter" class="form-label col-form-label-sm">Storage</label>
                                                        <select multiple="" class="sa-select2 form-select form-select-sm" id="storage-filter">
                                                            <option selected="">32GB</option>
                                                            <option>64GB</option>
                                                            <option>128GB</option>
                                                            <option>256Gb</option>
                                                        </select>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="offers-tab-content" role="tabpanel" aria-labelledby="offers-tab">
                                                <ul class="specs-wrapper list-group">
                                                    <li class="product-specs list-group-item mb-5 p-3">
                                                        <i class="fas fa-bars"></i>
                                                        <form class="row g-4">
                                                            <div class="col-md-6">
                                                                <label for="storeOffer" class="form-label col-form-label-sm">Store</label>
                                                                <input type="text" class="form-control form-control-sm" id="storeOffer"/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="priceOffer" class="form-label col-form-label-sm">Offer Price</label>
                                                                <input type="text" class="form-control form-control-sm" id="priceOffer"/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="titleOffer" class="form-label col-form-label-sm">Offer Title</label>
                                                                <input type="text" class="form-control form-control-sm" id="titleOffer"/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="urlOffer" class="form-label col-form-label-sm">Offer URL</label>
                                                                <input type="text" class="form-control form-control-sm" id="urlOffer"/>
                                                            </div>
                                                        </form>
                                                        <button type="button" class="sa-close col-form-label-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </li>
                                                </ul>

                                                <div class="add-btn-wrapper">
                                                    <button type="button" class="btn btn-success btn-sm">
                                                        <i class="fas fa-plus fa-sm"></i>
                                                        Add Offer
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="faq-tab-content" role="tabpanel" aria-labelledby="faq-tab">
                                                <ul class="specs-wrapper list-group">
                                                    <li class="product-specs list-group-item mb-5 p-3">
                                                        <form class="row g-4">
                                                            <div class="col-md-1">
                                                                <label for="quesfaq" class="form-label col-form-label-sm">Question:</label>
                                                            </div>
                                                            <div class="col-md-11">
                                                                <input type="text" class="form-control form-control-sm" id="quesfaq"/>
                                                            </div>
                                                        </form>

                                                        <div class="ansfaq">
                                                            <label for="ansfaq" class="form-label col-form-label-sm">Answer:</label>
                                                            <textarea class="sa-quill-control form-control" id="ansfaq" rows="8"></textarea>
                                                        </div>

                                                        <button type="button" class="sa-close col-form-label-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </li>
                                                </ul>

                                                <div class="add-btn-wrapper">
                                                    <button type="button" class="btn btn-success btn-sm">
                                                        <i class="fas fa-plus fa-sm"></i>
                                                        Add Question
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mt-5">
                                    <div class="card-body p-4">
                                        <div class="mb-5"><h2 class="mb-0 fs-exact-18">Images</h2></div>
                                    </div>
                                    <div class="mt-n5">
                                        <div class="sa-divider"></div>
                                        <div class="table-responsive">
                                            <table class="sa-table">
                                                <thead>
                                                <tr>
                                                    <th class="w-min">Image</th>
                                                    <th class="min-w-10x">Alt text</th>
                                                    <th class="w-min">Order</th>
                                                    <th class="w-min"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                                            <img src="images/products/product-16-1-40x40.jpg" width="40" height="40" alt="" />
                                                        </div>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" /></td>
                                                    <td><input type="number" class="form-control form-control-sm w-4x" value="0" /></td>
                                                    <td>
                                                        <button
                                                            class="btn btn-sa-muted btn-sm mx-n3"
                                                            type="button"
                                                            aria-label="Delete image"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            title="Delete image"
                                                        >
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="12"
                                                                height="12"
                                                                viewBox="0 0 12 12"
                                                                fill="currentColor"
                                                            >
                                                                <path
                                                                    d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4 C11.2,9.8,11.2,10.4,10.8,10.8z"
                                                                ></path>
                                                            </svg>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                                            <img src="images/products/product-16-2-40x40.jpg" width="40" height="40" alt="" />
                                                        </div>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" /></td>
                                                    <td><input type="number" class="form-control form-control-sm w-4x" value="1" /></td>
                                                    <td>
                                                        <button
                                                            class="btn btn-sa-muted btn-sm mx-n3"
                                                            type="button"
                                                            aria-label="Delete image"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            title="Delete image"
                                                        >
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="12"
                                                                height="12"
                                                                viewBox="0 0 12 12"
                                                                fill="currentColor"
                                                            >
                                                                <path
                                                                    d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4 C11.2,9.8,11.2,10.4,10.8,10.8z"
                                                                ></path>
                                                            </svg>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                                            <img src="images/products/product-16-3-40x40.jpg" width="40" height="40" alt="" />
                                                        </div>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" /></td>
                                                    <td><input type="number" class="form-control form-control-sm w-4x" value="2" /></td>
                                                    <td>
                                                        <button
                                                            class="btn btn-sa-muted btn-sm mx-n3"
                                                            type="button"
                                                            aria-label="Delete image"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            title="Delete image"
                                                        >
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="12"
                                                                height="12"
                                                                viewBox="0 0 12 12"
                                                                fill="currentColor"
                                                            >
                                                                <path
                                                                    d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4 C11.2,9.8,11.2,10.4,10.8,10.8z"
                                                                ></path>
                                                            </svg>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                                            <img src="images/products/product-16-4-40x40.jpg" width="40" height="40" alt="" />
                                                        </div>
                                                    </td>
                                                    <td><input type="text" class="form-control form-control-sm" /></td>
                                                    <td><input type="number" class="form-control form-control-sm w-4x" value="3" /></td>
                                                    <td>
                                                        <button
                                                            class="btn btn-sa-muted btn-sm mx-n3"
                                                            type="button"
                                                            aria-label="Delete image"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            title="Delete image"
                                                        >
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="12"
                                                                height="12"
                                                                viewBox="0 0 12 12"
                                                                fill="currentColor"
                                                            >
                                                                <path
                                                                    d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4 C11.2,9.8,11.2,10.4,10.8,10.8z"
                                                                ></path>
                                                            </svg>
                                                        </button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="sa-divider"></div>
                                        <div class="px-5 py-4 my-2"><a href="#">Upload new image</a></div>
                                    </div>
                                </div>
                                <div class="card mt-5">
                                    <div class="card-body p-4">
                                        <div class="mb-5">
                                            <h2 class="mb-0 fs-exact-18">Search engine optimization</h2>
                                            <div class="mt-3 text-muted">
                                                Provide information that will help improve the snippet and bring your product to the top of search
                                                engines.
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label for="form-product/seo-title" class="form-label">Page title</label>
                                            <input type="text" class="form-control" id="form-product/seo-title" />
                                        </div>
                                        <div>
                                            <label for="form-product/seo-description" class="form-label">Meta description</label>
                                            <textarea id="form-product/seo-description" class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sa-entity-layout__sidebar">

                                <div class="card w-100">
                                    <div class="card-body p-4">
                                        <div class="mb-5 border-bottom pb-3">
                                            <h2 class="mb-0 fs-exact-18">Publish</h2>
                                        </div>
                                        <div class="mb-4 btns">
                                            <button type="submit" class="btn btn-outline-info">Save Draft</button>
                                            <button type="button" class="btn btn-outline-info">Preview</button>
                                        </div>
                                        <div class="status-content mb-5">
                                            <div class="status">
                                                <div class="status-main">
                                                    <i class="fas fa-key"></i>
                                                    <div class="status-text">
                                                        Status:
                                                        <strong>Draft</strong>
                                                        <a class="text-edit"
                                                           data-bs-toggle="collapse"
                                                           href="#postStatus"
                                                           role="button"
                                                           aria-expanded="false"
                                                           aria-controls="postStatus">Edit</a>
                                                    </div>
                                                </div>
                                                <div class="sa-collapse">
                                                    <div class="sa-collapse__body collapse" id="postStatus">
                                                        <div class="sa-collapse__content">
                                                            <div class="row mb-3">
                                                                <div class="col-6">
                                                                    <select class="form-select form-select-sm">
                                                                        <option selected="">Publish</option>
                                                                        <option>Draft</option>
                                                                        <option>Pending Preview</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-6">
                                                                    <button class="btn btn-sm btn-secondary me-3"
                                                                            data-bs-toggle="collapse"
                                                                            href="#postStatus"
                                                                            type="button"
                                                                            aria-expanded="false"
                                                                            aria-controls="postStatus">
                                                                        OK
                                                                    </button>
                                                                    <a class="text-edit"
                                                                       data-bs-toggle="collapse"
                                                                       href="#postStatus"
                                                                       role="button"
                                                                       aria-expanded="false"
                                                                       aria-controls="postStatus">
                                                                        Cancel
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="status">
                                                <div class="status-main">
                                                    <i class="fas fa-eye"></i>
                                                    <div class="status-text">
                                                        Visibility:
                                                        <strong>Public</strong>
                                                        <a class="text-edit"
                                                           data-bs-toggle="collapse"
                                                           href="#postVisibility"
                                                           role="button"
                                                           aria-expanded="false"
                                                           aria-controls="postVisibility">Edit</a>
                                                    </div>
                                                </div>
                                                <div class="sa-collapse">
                                                    <div class="sa-collapse__body collapse" id="postVisibility">
                                                        <div class="sa-collapse__content">
                                                            <form>
                                                                <label class="form-check">
                                                                    <input type="radio" class="form-check-input" name="visibility" />
                                                                    <span class="form-check-label">Public</span>
                                                                </label>
                                                                <label class="form-check">
                                                                    <input type="radio" class="form-check-input" name="visibility" />
                                                                    <span class="form-check-label">Password Protect</span>
                                                                </label>
                                                                <label class="form-check">
                                                                    <input type="radio" class="form-check-input" name="visibility" />
                                                                    <span class="form-check-label">Private</span>
                                                                </label>
                                                            </form>
                                                            <div class="my-3">
                                                                <button class="btn btn-sm btn-secondary me-3" data-bs-toggle="collapse" href="#postVisibility" type="button" aria-expanded="false" aria-controls="postVisibility">
                                                                    OK
                                                                </button>
                                                                <a class="text-edit" data-bs-toggle="collapse" href="#postVisibility" role="button" aria-expanded="false" aria-controls="postVisibility">
                                                                    Cancel
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="status">
                                                <div class="status-main">
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <div class="status-text">
                                                        Publish:
                                                        <strong>Immediately</strong>
                                                        <a class="text-edit"
                                                           data-bs-toggle="collapse"
                                                           href="#postState"
                                                           role="button"
                                                           aria-expanded="false"
                                                           aria-controls="postState">Edit</a>
                                                    </div>
                                                </div>
                                                <div class="sa-collapse">
                                                    <div class="sa-collapse__body collapse" id="postState">
                                                        <div class="sa-collapse__content">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <input type="text" class="form-control form-control-sm datepicker-here" data-auto-close="true" data-language="en" aria-label="Datepicker"/>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="timePicker d-flex">
                                                                        <input type="text" class="form-control form-control-sm" name="timeHours" id="timeHours">
                                                                        <span class="colon mx-1">:</span>
                                                                        <input type="text" class="form-control form-control-sm" name="timeMinutes" id="timeMinutes">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-3">
                                                                <button class="btn btn-sm btn-secondary me-3" data-bs-toggle="collapse" href="#postState" type="button" aria-expanded="false" aria-controls="postState">
                                                                    OK
                                                                </button>
                                                                <a class="text-edit" data-bs-toggle="collapse" href="#postState" role="button" aria-expanded="false" aria-controls="postState">
                                                                    Cancel
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="foot text-end border-top pt-4">
                                            <button type="button" class="btn btn-info">Publish</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card w-100 mt-5">
                                    <div class="card-body p-4">
                                        <div class="mb-5 border-bottom pb-3">
                                            <h2 class="mb-0 fs-exact-18">Brands</h2>
                                        </div>
                                        <div>
                                            <select name="brands" class="form-select mt-3">


                                                @foreach($brands as $brand)
                                                    <option value=" {{$brand->brand_id}}">
                                                        {{$brand->brand_name}}
                                                    </option>

                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card w-100 mt-5">
                                    <div class="card-body p-4">
                                        <div class="mb-5"><h2 class="mb-0 fs-exact-18">Categories</h2></div>
                                        <select name="categories" class="sa-select2 form-select" >
                                            @foreach($categories as $category)
                                                <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="mt-4 mb-n2"><a href="#">Add new category</a></div>
                                    </div>
                                </div>

                                <input type="hidden" name="type" value="{{app('request')->input('type')}}">

                            </div>
                        </div>
                    </div>

                </form>

                {{--                Form Part ends here--}}
            </div>
        </div>
    </div>

@endsection
