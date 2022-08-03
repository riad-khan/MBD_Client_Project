@extends('Admin')

@section('content')
    <div id="top" class="sa-app__body">
        <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
            <div class="container container--max--xl">
                <form  method="POST" action="{{route('store.brand')}}"enctype="multipart/form-data">
                    @csrf
                    <div class="py-5">
                        <div class="row g-4 align-items-center">
                            <div class="col">

                                <h1 class="h3 m-0">Create  Brand</h1>
                            </div>
                            <div class="col-auto d-flex">

                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>





                    <div class="sa-entity-layout" data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}'>
                        <div class="sa-entity-layout__body">
                            <div class="sa-entity-layout__main">
                                <div class="card">
                                    <div class="card-body p-5">
                                        <div class="mb-5"><h2 class="mb-0 fs-exact-18">Basic information</h2></div>
                                        <div class="mb-4">
                                            <label for="form-category/name" class="form-label">Brand Name</label>
                                            <input type="text" class="form-control" name="brand_name" id="form-category/name"  />
                                            <input type="hidden" name="type" value="{{app('request')->input('type')}}">
                                        </div>

                                        <div class="mb-4">
                                            <label for="form-category/description" class="form-label">Brand Description</label>
                                            <textarea name="description">

                                        </textarea>
                                        </div>

                                        <input type="file" name="images" class="form-control" id="formFile-1">
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
