@extends('Backend.Layouts.back_end_layout')
@section('content')
<style>
    #preview-container img{
        height: 150px;
        width:
    }
</style>
    <div class="card">
        <div class="card-head">
            <h1 class="text-center">Category & Sub Category</h1>
            <hr>
        </div>
        <div class="row">
            <div class="card-body col-lg-6">
                <h4>Add Category</h4>
                <form class="" method="POST" action="{{ route('category.add') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <input type="text" name="category_name" class="form-control">
                            <span class="text-danger">
                            @error('category_name')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category Slug</label>
                            <input type="text" name="category_slug" class="form-control">
                            <span class="text-danger">
                                @error('category_slug')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label class="form-label">Category Image</label>
                            <br>
                            <input type="file" class="from-control" name="category_image" id="file-input">
                            <span class="text-danger">
                                @error('category_image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <div id="preview-container">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary col-lg-6">Upload</button>
                    </form>
            </div>
            <div class="card-body col-lg-6">
                <h4>Add Sub Category</h4>
                <form method="POST" action="{{ route('sub.category.add') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Sub Category Name</label>
                            <input type="text" name="sub_category_name" class="form-control">
                            <span class="text-danger">
                            @error('sub_category_name')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sub Category Slug</label>
                            <input type="text" name="sub_category_slug" class="form-control">
                            <span class="text-danger">
                                @error('sub_category_slug')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <div id="preview-container">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select a Parent Category</label>
                            <select class="form-select" aria-label="Default select example" name="parent_category">
                                <option selected disabled>Open this select Category</option>
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
                        <button type="submit" class="btn btn-primary col-lg-6">Upload</button>
                    </form>
            </div>

        </div>

    </div>
    </div>
   <div class="col-4 float-end card-header">
        @if (session()->has('success'))
        <div class="alert alert-success mt-3" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('name'))
        <div class="alert alert-warning mt-3" role="alert">
            {{ session('name') }}
        </div>
    @endif
    @if (session()->has('deletesuccess'))
        <div class="alert alert-danger mt-3" role="alert">
            {{ session('deletesuccess') }}
    </div>
@endif
   </div>
    @push('customJs')
        <script>
            // let title = $('input[name="category_name"]');
            // let slug = $('input(name="category_alug")');

            // title.keyup(function(){
            //     let value = $(this).val().toLowerCase().split(' ').join('-'),
            //     slug.val(value)
            // })

            $("document").ready(function() {
                setTimeout(function() {
                    $("div.alert").remove();
                }, 2000);
        })

            // image preview

            $(document).ready(function() {
                $("#file-input").on("change", function() {
                    var files = $(this)[0].files;
                    $("#preview-container").empty();
                    if (files.length > 0) {
                        for (var i = 0; i < files.length; i++) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                $("<div class='preview'><img src='" + e.target.result +
                                    "'><button class='delete'>Delete</button></div>").appendTo(
                                    "#preview-container");
                            };
                            reader.readAsDataURL(files[i]);
                        }
                    }
                });


                $("#preview-container").on("click", ".delete", function() {
                    $(this).parent(".preview").remove();
                    $("#file-input").val(""); // Clear input value if needed
                });
            });
        </script>
    @endpush
@endsection
