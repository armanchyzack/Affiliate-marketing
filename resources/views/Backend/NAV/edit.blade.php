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
            <h1 class="text-center">Edit Meta Tags</h1>
            <hr>
        </div>
            <div class="card-body">
                <form class="row" method="POST" action="{{ route('navbar.update', $navs->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label class="form-label">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{ $navs->title }}">
                        <span class="text-muted">Keep it between 50-60 characters.</span>
                        <span class="text-danger">
                        @error('meta_title')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Meta Description</label>
                        <textarea type="text" name="meta_desc" class="form-control" >{{ $navs->desc }}</textarea>
                        <span class="text-muted">Keep it around 150-160 characters.</span>
                        <span class="text-danger">
                        @error('meta_desc')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Meta Keywords</label>
                        <input type="text" name="meta_keyword" class="form-control" value="{{ $navs->keyword }}">
                        <span class="text-muted">Don’t overuse or "stuff" keywords here, as this practice is considered outdated.</span>
                        <span class="text-danger">
                        @error('meta_keyword')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label class="form-label">Logo</label>
                        <br>
                        <input type="file" class="from-control" name="logo" id="file-input">
                        <span class="text-danger">
                            @error('logo')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3 col-lg-9">
                        <div id="preview-container">
                            <img src="{{ $navs->logo_url }}" alt="{{ $navs->logo }}">
                        </div>
                    </div>
            </div>
        <button type="submit" class="btn btn-warning col-lg-3">UPdate</button>
        </form>



    </div>

    <div class="col-4 float-end card-header">
        @if (session()->has('success'))
        <div class="alert alert-success mt-3" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('warning'))
        <div class="alert alert-warning mt-3" role="alert">
            {{ session('warning') }}
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
