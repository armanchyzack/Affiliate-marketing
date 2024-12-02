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
            <h1 class="text-center">Category</h1>
            <hr>
        </div>
            <div class="card-body">
                <h4>Edit Category</h4>
                <form class="row col-lg-5" method="POST" action="{{ route('category.update', $categories->slug) }}" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label class="form-label">Category Name</label>
                        <input type="text" name="category_name" class="form-control" value="{{ $categories->title }}">
                        <span class="text-danger">
                        @error('category_name')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category Slug</label>
                        <input type="text" name="category_slug" class="form-control" value="{{ $categories->slug }}">
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
                            <img src="{{ $categories->image_url }}" alt="{{ $categories->title }}">
                        </div>
                    </div>
            </div>
        <button type="submit" class="btn btn-warning col-lg-3">Update</button>
        </form>

        

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
