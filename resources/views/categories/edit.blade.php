@extends('layouts.app')

@section('content')
    <div class="card mt-5">
    <div class="card-header">
    <h2>Edit Category</h2>
    </div>

    <div class="card-body">
    <div class="row">
                <div class="col-lg-12 mt-1 mr-1">

                    <div class="float-right">

                        <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>

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

                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <strong>Whoops!</strong> There were some problems with your input.<br><br>

                            <ul>

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <form action="{{ route('categories.update') }}" method="POST">
                        @csrf
                         <div class="row">
                        <input name="form_id" type="hidden" value="{{$category->id}}">
                       </div>
                       <br>
                       <p>Image Link:</p>
                        <input type="text" name="photos" value="{{ $category->photos }}" class="form-control" placeholder="Photos">
                        </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Title:</strong>
                                    <input type="text" name="title" value="{{$category->title}}" class="form-control" placeholder="Title">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Description:</strong>
                                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $category->description }}</textarea>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Ordering:</strong>
                                    <input type="text" name="ordering" value="{{ $category->ordering }}" class="form-control" placeholder="Ordering">
                                </div>
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                  <div class="form-group">
                                    <strong>Vendor Code:</strong>
                                    <input type="text" name="vendor_code" value="{{ $category->vendor_code}}" class="form-control" placeholder="vendor code">
                                </div>
                               
                                <div class="form-group">
                                    <strong>State:</strong>
                                    <input type="text" name="state" value="{{ $category->state }}" class="form-control" placeholder="State">
                                </div>
                                 <div class="form-group">
                                <strong>Ship ID:</strong>
                                  <input type="text" name="ship_id" value="{{ $category->ship_id}}" class="form-control" placeholder="Ship ID">                               
                                </div>
                            </div>
                          
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                              <button type="submit" class="btn btn-success">Submit</button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection