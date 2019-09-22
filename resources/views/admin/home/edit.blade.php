@extends('admin.layout.master')
@section('content')
    <div class="container">
        <form action="{{route('home.update',$home->id)}}" enctype="multipart/form-data" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-sm-5 input-blog">

                    <div class="form-group">
                        <label class="row" for="image">Image</label>

                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input multiple type="file" id="inputGroupFile01" value="{{$home->image}}"
                                       name="image[]">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="row" for="title">Title</label>
                        <input class="col-12 form-control" type="text" value="{{$home->title}}" name="title">
                    </div>
                    <div class="form-group">
                        <label class="row" for="title">Description</label>
                        <input class="col-12 form-control" type="text" value="{{$home->description}}" name="description">
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="contentcheck">content</label>
                        <textarea value="" name="contentcheck"
                                  class="  form-control rounded-0"
                                  id="ckeditor1"
                                  rows="10"></textarea>
                    </div>

                </div>
                <input type="hidden" value="{{$home->content}}" id="hidden">
                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script>
        CKEDITOR.replace('contentcheck');
        $('#ckeditor1').val($('#hidden').val())
    </script>
@endsection