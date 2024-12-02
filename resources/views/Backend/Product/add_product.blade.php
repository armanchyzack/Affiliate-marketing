@extends('Backend.Layouts.back_end_layout')
@section('content')
<style>
    #preview-container img{
        height: 205px;
        width: 305px;
    }
</style>
<div class="card">
    <div class="card-head">
        <h1 class="text-center">Product</h1>
        <hr>
    </div>
    <div class="row">
        <div class="card-body col-12">
            <h4>Add Product</h4>
            <form class="" method="POST" action="{{ route('product.add') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control">
                            <span class="text-danger">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Slug</label>
                            <input type="text" name="slug" class="form-control">
                            <span class="text-danger">
                                @error('slug')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" aria-label="Default select example" name="category">
                                <option selected disabled>Open this select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id }}">{{ Str::ucfirst($category->title ) }}</option>
                                @endforeach
                              </select>

                            <span class="text-danger">
                            @error('category')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Sub-Category</label>
                            <select class="form-select" aria-label="Default select example" name="sub_category">
                                <option selected disabled>Open this select Category</option>
                                {{-- @foreach ($categories as $category)
                                <option value="{{$category->id }}">{{$category->title }}</option>
                                @endforeach --}}
                              </select>
                            <span class="text-danger">
                            @error('sub_category')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option selected disabled>Open this select Status</option>
                                <option value= "1" >Active</option>
                                <option value= "0" >Deactive</option>

                              </select>
                            <span class="text-danger">
                            @error('sub_category')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Affiliate link</label>
                            <input type="text" name="affiliate_link" class="form-control">
                            <span class="text-danger">
                                @error('affiliate_link')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Key-Word</label>
                            <input type="text" name="keyword" class="form-control">
                            <span class="text-danger">
                                @error('keyword')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="product_name" class="form-control">
                            <span class="text-danger">
                                @error('product_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Short Description</label>
                            <textarea class="form-control" name="short_desc"></textarea>
                            <span class="text-danger">
                                @error('short_desc')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Meta Description</label>
                            <textarea class="form-control" name="meta_desc"></textarea>
                            <span class="text-danger">
                                @error('meta_desc')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Price</label>
                            <input type="number" name="price" class="form-control">
                            <span class="text-danger">
                                @error('price')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Discount Price</label>
                            <input type="number" name="dis_price" class="form-control">
                            <span class="text-danger">
                                @error('dis_price')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Discount Price Start Date</label>
                            <input type="date" name="dis_start_date" class="form-control">
                            <span class="text-danger">
                                @error('dis_start_date')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Discount Price End Date</label>
                            <input type="date" name="dis_end_date" class="form-control">
                            <span class="text-danger">
                                @error('dis_end_date')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label class="form-label">Long Description</label>
                            <textarea class="form-control" name="long_desc" id="tiny"></textarea>
                            <span class="text-danger">
                                @error('long_desc')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Thumbnail Image</label>
                            <br>
                            <input type="file" class="from-control" name="thumbnail_image" id="file-input">
                            <span class="text-danger">
                                @error('thumbnail_image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <div id="preview-container">
                            </div>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Thumbnail Image ALT Text.</label>
                            <input type="text" name="image_alt_text" class="form-control">
                            <span class="text-danger">
                                @error('image_alt_text')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Gallary Image</label>
                            <br>
                            <input type="file" multiple class="from-control" name="gallary_image[]" id="file-input">
                            <span class="text-danger">
                                @error('gallary_image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary col-lg-2 mt-3 m-auto">Upload</button>
                </form>
        </div>
    </div>
</div>
@push('customJs')
        <script>
           tinymce.init({
    selector: 'textarea#tiny',
    plugins:[
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media',
        'table', 'emoticons', 'template', 'codesample'
    ],
    toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright alignjustify |' +
    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
    'forecolor backcolor emoticons',
    menu: {
        favs: {title: 'menu', items: 'code visualaid | searchreplace | emoticons'}
    },
    menubar: 'favs file edit view insert format tools table',
    content_style: 'body{font-family:Helvetica,Arial,sans-serif; font-size:16px}'
});

  // Prevent Bootstrap dialog from blocking focusin
document.addEventListener('focusin', (e) => {
  if (e.target.closest(".tox-tinymce, .tox-tinymce-aux, .moxman-window, .tam-assetmanager-root") !== null) {
    e.stopImmediatePropagation();
  }
});




        //?   no relode slug genarate same to same as title

            let title = $('input[name="title"]')
            let slug = $('input[name="slug"]')
            title.keyup(function(){
                let value=$(this).val().toLowerCase().split(' ').join('-')
                slug.val(value)
            })


        // category select no relode child sub category show

        let categorySelect = $('select[name="category"]')
            let subCategory = $('select[name="sub_category"]')
        categorySelect.on('change', function(){
            let id = $(this).val()
            rawUrl = `{{ route('product.fetch.subcategory', ':id') }}`;


            let newUrl = rawUrl.replace(':id',id)
            console.log(newUrl);






            $.ajax({
                url: newUrl,
                dataType : "json",
                type: "GET",
                success: function(response){
                    let options =[];
                    response.map(element => {
                        let option = `<option value="${element.id}" >${element.title}</option>`
                        options.push(option)
                    })

                    subCategory.html('')
                    subCategory.html(options)
                }

            })

        })























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
