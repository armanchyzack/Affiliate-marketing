@extends('Backend.Layouts.back_end_layout')
@section('content')
<style>
    .searchResult{
        position: absolute;
        top: 110%;
        left: 0;
        width: 100%;
        z-index: 22;
    }
    .searchResult ul{
        width: 100%;
        display: block;
        list-style: none;
        background-color: #ddd;
        padding: 0px 1px;
        margin: 0;

    }
    .searchResult ul li a{
        color: black;
        padding: 5px 15px;
        display: block;
        border-bottom: 1px solid #ccc;
    }
    .searchResult ul li a:hover {
  background-color: #ccb8b8;
}
</style>
<form class="mt-3 d-flex position-relative mb-3">
    <input class="form-control me-2 searchbar" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
    <div class="searchResult">
        <ul>
            <li><a href="#" class="nav-link">lights</a></li>

        </ul>
    </div>
</form>
<div class="card mt-3">
    <div class="card-head">
        <h1 class="text-center">All Product</h1>
        <hr>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table-responsive table table-hover  ">

                <thead class="">
                    <tr>
                        <th widtth="5%" class="text-start">#</th>
                        <th class="text-center">Image</th>
                        <th class="text-left order_header employee_name_sort " data-column_class="employee_name_sort" data-sorting_column="employee_name">Product Name</th>
                        <th class="text-left order_header">Title</th>
                        <th class="text-left order_header"> Category </th>
                        <th class="text-left order_header"> Sub-Category </th>
                        <th class="5%"> status </th>
                        <th width="5%" class="text-center">Edit</th>
                        <th width="5%" class="text-right">Delete</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($products as $key=>$product)
                    {{ dd($car->categories) }}
                    <tr>
                        <td width="5%" class="text-start">{{ ++$key }}</td>
                        <td class="text-center"><img src="{{$product->thumbnail_image_url}}" width="30" height="30" alt="{{ $product->image_alt_text }}"></td>
                        <td class="text-left">{{ $product->product_name }}</td>
                        <td class="text-left">{{ $product->title }}</td>
                        <td class="text-left">{{ $product->category->title }}</td>
                        {{-- sub category access this way cuse of chaild --}}
                        <td class="text-left"> @foreach ($product->category->subcategory as $sub)
                                {{ $sub->title }}
                        @endforeach</td>
                        <td class="text-center w-full">

                            @if ($product->status == 0)

                            <a href="{{ route('product.status', $product->id) }}" class="btn-sm"><i class='fas fa-toggle-on' style='font-size:1.3rem; color:rgb(233, 21, 21)'></i></a>
                                       @else
                                       <a href="{{ route('product.status', $product->id) }}" class="btn-sm"><i class='fas fa-toggle-off' style='font-size:1.3rem; color:rgb(107, 175, 43)'></i></a>
                                    @endif



                        </td>
                        <td class="text-center parent_class" id="expanded_employee" data-id=""> <a href="{{ route('product.edit', $product->id) }}"><i class='fas fa-edit' style='font-size:1rem'></i></a></td>
                        <td class="text-right deleteBtn">
                            <button class="btn btn-sm" onclick="confirmDelete({{ $product->id }})">
                                <i class='fas fa-trash' style='font-size:1rem;color:red'></i>
                            </button>
                            <a href="#"  class="btn btn-sm deleteBtn"></a>
                            <form action="{{ route('product.delete', $product->id) }}" id="delete-form-{{ $product->id }}" method="POST">
                                @csrf
                                @method("DELETE")

                            </form>

                        </td>
                    </tr>
                    @empty

                    <tr class="danger employee_details child_row" style="display: none">
                        <td width= "100%">no product</td>
                    </tr>
                    @endforelse


                </tbody>
            </table>
            {{-- <span class="text-end">{{ $products->links() }}</span> --}}
        </div>
    </div>
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
@if (session()->has('deletesuccess'))
    <div class="alert alert-danger mt-3" role="alert">
        {{ session('deletesuccess') }}
</div>
@endif

@push('customJs')
    <script>





























function confirmDelete(productId) {
    Swal.fire({
        title: 'Are you sure?',
        text: "This action will delete the product and its images!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Perform form submission to delete product
            document.getElementById(`delete-form-${productId}`).submit();
        }
    })
}






        $("document").ready(function() {
                   setTimeout(function() {
                       $("div.alert").remove();
                   }, 2000);
                })
    </script>
@endpush
@endsection
