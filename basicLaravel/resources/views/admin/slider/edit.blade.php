@extends('admin.admin_master')

@section('admin')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Slider</h2>
        </div>
    </div>
    <div class="card-body">
                        <form action="{{ url('slider/update/'.$slider->id)  }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image" value="{{ $slider->image }}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Update Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $slider->title }}">

                                @error('title')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Update Description</label>
                                <br>
                                 <textarea name="description" id="contentInfo" class="w-full border-2" rows="5" cols="100">{{ $slider->description }}</textarea>
                                @error('description')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Update Image</label>
                                <input type="file" name="image" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $slider->image }}">

                                @error('image')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                                    -->
                            </div>
                            <div class="form-group">
                                <img src="{{ asset($slider->image) }}" style="width:400px; height:200px;">

                            </div>
                            <button type="submit" class="btn btn-primary">Update Slider</button>
                        </form>
                    </div>
</div>

@endsection