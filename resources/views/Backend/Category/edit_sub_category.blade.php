@extends('Backend.Layouts.back_end_layout')
@section('content')
<div class="card-head">
    <h1 class="text-center">Edit Sub-Category</h1>
    <hr>
</div>
<form class="row col-12 container" method="POST" action="{{ route('sub.category.update',$sub_categories->id) }}" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <label class="form-label">Sub-Category Name</label>
        <input type="text" name="sub_category_name" class="form-control" value="{{ $sub_categories->title }}">
        <span class="text-danger">
        @error('sub_category_name')
            {{ $message }}
        @enderror
    </span>
    </div>
    <div class="mb-3">
        <label class="form-label">Sub-Category Slug</label>
        <input type="text" name="sub_category_slug" class="form-control" value="{{ $sub_categories->slug }}">
        <span class="text-danger">
            @error('sub_category_slug')
                {{ $message }}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <label class="form-label">Select a Parent Category</label>
        <select class="form-select" aria-label="Default select example" name="parent_category">
            @foreach ($categories as $category)
            <option value="{{$category->id }}">{{$category->title }}</option>
            @endforeach
          </select>
        <span class="text-danger">
            @error('parent_category')
                {{ $message }}
            @enderror
        </span>
    </div>



    <button type="submit" class="btn btn-warning w-full">Update</button>
</form>

@endsection
