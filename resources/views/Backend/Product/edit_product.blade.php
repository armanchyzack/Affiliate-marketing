@extends('Backend.Layouts.back_end_layout')
@section('content')
<style>
    #preview-container img{
        height: 205px;
        width: 305px;
    }
    #preview {
            display: inline-block;
            margin: 10px;
        }
        #preview img {
            width: 100px;
            height: 100px;
            margin-right: 10px;
        }


.upload {
  &__box {
    padding: 40px;
  }
  &__inputfile {
    width: .1px;
    height: .1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
  }

  &__btn {
    display: inline-block;
    font-weight: 600;
    color: #fff;
    text-align: center;
    min-width: 116px;
    padding: 5px;
    transition: all .3s ease;
    cursor: pointer;
    border: 2px solid;
    background-color: #4045ba;
    border-color: #4045ba;
    border-radius: 10px;
    line-height: 26px;
    font-size: 14px;

    &:hover {
      background-color: unset;
      color: #4045ba;
      transition: all .3s ease;
    }

    &-box {
      margin-bottom: 10px;
    }
  }

  &__img {
    &-wrap {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -10px;
    }

    &-box {
      width: 200px;
      padding: 0 10px;
      margin-bottom: 12px;
    }

    &-close {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 24px;
        z-index: 1;
        cursor: pointer;

        &:after {
          content: '\2716';
          font-size: 14px;
          color: white;
        }
      }
  }
}

.img-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  padding-bottom: 100%;
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
            <form method="POST" action="{{ route('product.update',$products->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $products->title }}">
                            <span class="text-danger">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Slug</label>
                            <input type="text" name="slug" class="form-control"value="{{ Str::slug( $products->slug ) }}">
                            <span class="text-danger">
                                @error('slug')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" aria-label="Default select example" name="category">
                                <option selected value="{{ $products->category_id }}">{{ $products->category->title }}</option>
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

                                   @foreach ( $products->category->subcategory  as $sub_cate)
                                <option selected value="{{ $products->sub_category_id }}">{{$sub_cate->title }}</option>
                                @endforeach


                                    </option>
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



                            <select class="form-select" aria-label="Default select example" name="status" hidden>
                                <option  selected >{{ $products->status = 0 }}</option>
                              </select>


                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Affiliate link</label>
                            <input type="text" name="affiliate_link" class="form-control" value="{{ $products->affiliate_link }}">
                            <span class="text-danger">
                                @error('affiliate_link')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Key-Word</label>
                            <input type="text" name="keyword" class="form-control" value="{{ $products->keyword }}">
                            <span class="text-danger">
                                @error('keyword')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="product_name" class="form-control" value="{{ $products->product_name }}">
                            <span class="text-danger">
                                @error('product_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Short Description</label>
                            <textarea class="form-control" name="short_desc">{{ $products->short_description }}</textarea>
                            <span class="text-danger">
                                @error('short_desc')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Meta Description</label>
                            <textarea class="form-control" name="meta_desc">{{ $products->meta_description }}</textarea>
                            <span class="text-danger">
                                @error('meta_desc')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" value="{{ $products->price }}">
                            <span class="text-danger">
                                @error('price')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Discount Price</label>
                            <input type="number" name="dis_price" class="form-control" value="{{ $products->discount_price }}">
                            <span class="text-danger">
                                @error('dis_price')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Discount Price Start Date</label>
                            <input type="date" name="dis_start_date" class="form-control" value="{{ $products->start_date }}">
                            <span class="text-danger">
                                @error('dis_start_date')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Discount Price End Date</label>
                            <input type="date" name="dis_end_date" class="form-control" value="{{ $products->end_date }}">
                            <span class="text-danger">
                                @error('dis_end_date')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label class="form-label">Long Description</label>
                            <textarea class="form-control" name="long_desc" id="tiny">{{ $products->description }}</textarea>
                            <span class="text-danger">
                                @error('long_desc')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label class="form-label">Curent Thumbnail Image</label>
                            <br>
                            <div class="mb-3 col-lg-3">
                                <div id="preview">
                                    <img style="width: 150px height:100px;" src="{{ $products->thumbnail_image_url }}" alt="{{ $products->image_alt_text }}">
                                </div>
                            </div>
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
                            <input type="text" name="image_alt_text" class="form-control" value="{{ $products->image_alt_text }}">
                            <span class="text-danger">
                                @error('image_alt_text')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-warning col-lg-2 mt-3 m-auto">Update</button>
                </form>
        </div>
    </div>
</div>
@push('customJs')
        <script>





















        //?   no relode slug genarate same to same as title

            // let title = $('input[name="title"]')
            // let slug = $('input[name="slug"]')
            // title.keyup(function(){
            //     let value=$(this).val().toLowerCase().split(' ').join('-')
            //     slug.val(value)
            // })


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
