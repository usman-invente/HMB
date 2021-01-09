@extends('layouts.app')
@section('content')
    <div class="container createcourse">

        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>

        @endif
        <form method="post" action="{{ route('edit.blog') }}"  name="demoform" id="demoform" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Blog Title</label>
                        <input type="text" class="form-control" name="title" value="{{$blog->title}}">
                        @error('title')
                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label>Blog Description</label>
                        <textarea class="form-control" id="summernote"
                            name="description">{{$blog->title}}</textarea>
                        @error('description')
                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Blog Thumbnail</label>
                                <input type="file" class="form-control" name="thumbnail">
                                @error('thumbnail')
                                    <div class="alert alert-danger validate-error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                          <div class="col-md-6">
                             <img src="{{asset($blog->thumbnail)}}" class="img-responsive">
                        </div>
                    </div>

                </div>



                <input type="hidden" name="blog_id" value="{{$blog->id}}">

                <div class="col-md-12">
                    <button type="submit"  id="crearecourse" class="btn btn-primary">
                        Update
                    </button>
                </div>



            </div>
        </form>

    </div>


@endsection
