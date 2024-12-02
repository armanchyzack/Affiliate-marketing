@extends('Backend.Layouts.back_end_layout')
@section('content')
<style>
    #preview-container img{
        height: 150px;
        width:
    }
</style>

    <div class="col-12">
        <div class="card">
            <div class="card-head">
                <h3 class="text-center">Sub-Category</h3>
                <hr>
            </div>
        </div>
    </div>

    <div class="card col-12">
        <div class="card-head">
            <h5 class="card-title text-center uppercase">Show all Sub-Category</h5>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($sub_categories as $key=>$sub_category)

                    <tr class="table-active">
                        <td>{{ ++$key }}</td>
                        <td>{{ $sub_category->title }}</td>

                        <td>
                            <div class="form-check form-switch">
                               @if ($sub_category->status == 0)

                               <a class="btn btn-primary" type="submit" href="{{ route('sub.category.status', $sub_category->id) }}" >Active</a>
                               @else
                               <a class="btn btn-danger" type="submit" href="{{ route('sub.category.status', $sub_category->id) }}" >Deactive</a>

                               @endif

                              </div>
                        </td>
                        <td>
                            <form action="{{ route('sub.category.delete', $sub_category->id) }}" method="POST">
                                <a href="{{ route('sub.category.edit',$sub_category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button  type="submit" class="btn btn-danger btn-sm ">Delete</button>
                            </form>
                        </td>


                    </tr>
                    @empty

                    <tr class="table-active">


                        <h1 class="text-center">No Category found</h1>
                    </tr>
                    @endforelse

                </tbody>
            </table>
            {{-- <span class="text-end">{{ $categories->links() }}</span> --}}
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
@push('customJs')
    <script>
        $("document").ready(function() {
                   setTimeout(function() {
                       $("div.alert").remove();
                   }, 2000);
                })
    </script>
@endpush
@endsection
