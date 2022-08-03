@extends('Admin')

@section('content')

    <div id="top" class="sa-app__body">
        <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
            <div class="container container--max--xl">
                <form id="FormId" method="POST" action="{{route('store.category')}}">
                    @csrf
                <div class="py-5">
                    <div class="row g-4 align-items-center">
                        <div class="col">

                            <h1 class="h3 m-0">Create Category</h1>
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
                                        <label for="form-category/name" class="form-label">Name</label>
                                        <input type="text" name="category_name" class="form-control" id="form-category/name"/>

                                        <input type="hidden" name="type" value="{{app('request')->input('type')}}">
                                    </div>

{{--                                    <div class="mb-4">--}}
{{--                                        <label for="form-category/slug" class="form-label">Slug</label>--}}
{{--                                        <div class="input-group input-group--sa-slug">--}}
{{--                                            <span class="input-group-text" id="form-category/slug-addon">https://example.com/catalog/</span>--}}
{{--                                            <input--}}
{{--                                                type="text"--}}
{{--                                                class="form-control"--}}
{{--                                                id="form-category/slug"--}}
{{--                                                aria-describedby="form-category/slug-addon form-category/slug-help"--}}
{{--                                                value="hand-tools"--}}
{{--                                            />--}}
{{--                                              </div>--}}
{{--                                        <div id="form-category/slug-help" class="form-text">--}}
{{--                                            Unique human-readable category identifier. No longer than 255 characters.--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


                                    <div class="mb-4">
                                        <label for="form-category/description" class="form-label">Description</label>
                                        <input type="hidden" name="body"/>
{{--                                        <textarea id="editor" style="height:auto;" name="description" class="form-control" rows="8">--}}

{{--                                       </textarea>--}}

                                        <textarea name="description">

                                        </textarea>





                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection
