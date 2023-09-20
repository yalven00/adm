@extends('layouts.app')

@section('content')
    <div class="container-fluid">
            <div class="card mt-5">

        <div class="card-header">

            <h2>Ships Listing</h2>

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


                            <th width="280px">Edit</th>

                        </tr>

                       @if (empty($ships))

                       No any ships available

                       @else

                        @foreach ($ships as $ship)

                        <tr>
                            <td>{{ $ship->id}}</td>
                            <td>{{ $ship->title }}</td>
                            <td>{!!html_entity_decode(\Str::limit($ship->description, 150))!!}</td>
                            <td>{{ $ship->ordering }}</td>
                            <td>{{ $ship->state }}</td>
                            <td>

                             <a class="btn btn-primary" href="{{ route('ships.edit',$ship->id) }}">Edit</a>




                            </td>

                        </tr>

                        @endforeach

                    </table>



                    {!! $ships->links() !!}

                  @endif

                </div>

            </div>

        </div>

    </div>
    </div>
@endsection
