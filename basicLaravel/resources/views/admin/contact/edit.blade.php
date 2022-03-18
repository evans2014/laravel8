@extends('admin.admin_master')

@section('admin')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden  sm:rounded-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header"> Edit Category </div>
                            <div class="card-body">
                                <form action="{{ url('update/contact/'.$contact->id)  }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Contact email</label>
                                        <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $contact->email }}">

                                        @error('address')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Contact phone</label>
                                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $contact->phone }}">

                                        @error('phone')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Address</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            name="address">
                                        {{ $contact->address }}
                                        </textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection