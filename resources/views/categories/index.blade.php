@extends('layouts.app')

@section('content')
    <div class="container-fluid">
            <div class="card mt-5">

        <div class="card-header">

            <h2>Categories Listing</h2>

        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-lg-12 mt-1 mr-1">

                    <div class="float-right">



                    </div>

                </div>

            </div>

            <div class="row mt-2">

                <div class="col-lg-12">

                 @if ($message = Session::get('success'))

                        <div class="alert alert-success">

                            <p>{{ $message }}</p>

                        </div>

                    @endif

                </div>

                <div class="col-lg-12">

                    <table class="table table-bordered">

                        <tr>

                            <th>No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Ordering</th>
                            <th>State</th>
                            <th>Vendor Code</th>
                            <th width="280px">Edit</th>

                        </tr>

                       @if (empty($categories))

                       No any categories available
                       @else

                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id}}</td>
                            <td>{{ $category->title }}</td>
                            <td>{!!html_entity_decode(\Str::limit($category->description, 150))!!}</td>
                            <td>{{ $category->ordering }}</td>
                            <td>{{ $category->state }}</td>
                             <td>{{ $category->vendor_code }}</td>
                            <td>
                             <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $categories->links() !!}
                  @endif

                </div>

            </div>

        </div>

    </div>
    </div>
@endsection
