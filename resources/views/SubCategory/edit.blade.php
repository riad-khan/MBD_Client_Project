@extends('Admin')

@section('content')
    <div id="top" class="sa-app__body">
        <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
            <div class="container container--max--xl">
                <form  method="POST" action="{{url('/admin/update-sub_category/'.$category->subcategory_id)}}">
                    @csrf
                    <div class="py-5">
                        <div class="row g-4 align-items-center">
                            <div class="col">

                                <h1 class="h3 m-0">Edit  Sub-Category</h1>
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
                                            <input type="text" class="form-control" name="subcategory_name" value="{{$category->subcategory_name}}" id="form-category/name"  />
                                        </div>

                                        <div class="mb-4">
                                            <label for="form-category/description" class="form-label">Description</label>
                                            <textarea name="description">
                                                {{$category->description}}
                                        </textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="sa-entity-layout__sidebar">

                                <div class="card w-100 mt-5">
                                    <div class="card-body p-5">
                                        <div class="mb-5"><h2 class="mb-0 fs-exact-18">Parent category</h2></div>
                                        <select class="sa-select2 form-select" name="category_id">
                                            <option>Select one Parent Category</option>
                                            @foreach($parent_Category as $parent)
                                                <option value="{{$parent->category_id}}" >{{$parent->category_name}}</option>
                                            @endforeach

                                        </select>
                                        <div class="form-text">Select a category that will be the parent of the current one.</div>
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
