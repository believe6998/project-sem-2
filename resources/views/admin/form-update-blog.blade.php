@extends('admin.layout.master')
@section('content')
    <div class="container">
        <form action="{{route('blog.update',$blog->id)}}" enctype="multipart/form-data" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-sm-5 input-blog">

                    <div class="form-group">
                        <label class="row" for="thumnail">thumnail</label>

                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input multiple type="file" id="inputGroupFile01" name="thumbnail[]">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="row" for="category">category</label>
                        <input class="col-12 form-control" type="text" value="{{$blog->category}}" name="category">
                    </div>
                    <div class="form-group">
                        <label class="row" for="title">title</label>
                        <input class="col-12 form-control" type="text" value="{{$blog->title}}" name="title">
                    </div>
                    <div class="form-group">
                        <label class="row" for="detail">detail</label>
                        <input class="col-12 form-control" type="text" value="{{$blog->detail}}" name="detail">
                    </div>

                </div>
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="contentcheck">content</label>
                        <textarea value="{{$blog->content}}" contenteditable="true" name="contentcheck"
                                  class="  form-control rounded-0"
                                  id="ckeditor1"
                                  rows="10"></textarea>
                    </div>

                </div>
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
    </script>


@endsection

