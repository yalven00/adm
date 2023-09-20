@extends('layouts.app')

@section('content')
    <div class="card mt-5">

        <div class="card-header">

            <h2>Edit Ship</h2>

        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-lg-12 mt-1 mr-1">

                    <div class="float-right">

                        <a class="btn btn-primary" href="{{ route('ships.index') }}"> Back</a>

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



                    <form action="{{ route('ships.update') }}" method="POST">
                        @csrf
                         <div class="row">
                          <input name="form_id" type="hidden" value="{{$ship->id}}">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="mb-6">
                          <label class="block">
                          <span class="text-gray-700">Select Category</span>
                          <select name="category_id" class="block w-full mt-1 rounded-md">
                         @foreach ($categories as $category)
                         <option @selected($category->id)
                         value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                       </select>
                       </label>
                        </div>
           
                    </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="mb-6">
                          <label class="block">
                          <span class="text-gray-700">Select image:</span>
                          <select name="photo_id" class="block w-full mt-1 rounded-md">
                          @foreach ($photos as $photo)
                           <option value="{{ $photo->id }}">
                          {{$photo->title }}</option>
                           @endforeach 
                       </select>
                       </label>
                       <br>
                        @foreach ($photos as $photo)
                         <img id="preview_img" src="{{$photo->url}}" alt="{{ $photo->title }}" width="200" class="img img-thumbnail" height="150"/>
                         
                         <p class="text">{{ $photo->title }}</p>
                         @endforeach  
                        </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Title:</strong>
                                    <input type="text" name="title" value="{{$ship->title}}" class="form-control" placeholder="Title">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Description:</strong>
                                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $ship->description }}</textarea>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Ordering:</strong>
                                    <input type="text" name="ordering" value="{{ $ship->ordering }}" class="form-control" placeholder="Ordering">
                                </div>
                                   <div class="col-xs-12 col-sm-12 col-md-12">

                                <div class="form-group">
                                    <strong>State:</strong>
                                    <input type="text" name="state" value="{{ $ship->state }}" class="form-control" placeholder="State">
                                </div>

                                     <div class="form-group">
                                    <strong>Spec:</strong>
                                    <textarea class="form-control" style="height:150px" name="spec" placeholder="Spec">{{ $ship->spec }}</textarea>                                
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