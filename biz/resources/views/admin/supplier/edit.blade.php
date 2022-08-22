@extends('admin.layouts.master')
@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Suppliers</h5>
                    <span>Update supplier</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Supplier</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-10">
        @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Update supllier</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{route('supplier.update',[$user->id] ) }}"method="post"
                    enctype="multipart/form-data">@csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="supplier name"
                                value="{{$user->name }}">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control"
                                placeholder="email"value="{{$user->email }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Education</label>
                            <input type="text" name="education" class="form-control"
                                placeholder="education"value="{{ $user->education }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control"
                                placeholder="supplier address"value="{{ $user->address}}">
                        </div>
                        <div class="col-lg-6">
                            <label for="">Specialization</label>
                            <select name="department" class="form-control">
                           @foreach ( ['Tshirtprinting','Design','Assistant','Advertising'] as $department)
                            <option value="{{$department}}" @if ($user->department==$department)selected
                                @endif>{{$department}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Phone no.</label>
                            <input type="text" name="phone_number" class="form-control"value="{{$user->
                            phone_number}}">
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group col-xs-6">
                                    <input type="file" name="image"class="form-control file-upload-info"
                                        placeholder="Upload Image">
                                    <span class="input-group-append">
                                    </span>
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{--{{ $message }}--}}</strong>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <label>Role</label>
                    <select name="role_id" class="form-control">
                        <option value="">Please select role</option>
                        @foreach (App\Role::where('name','!=','client')->get() as $role)
                     <option value="{{ $role->id }}" @if($user->role_id==$role->id)
                                selected @endif>{{$role->name}}

                            </option>
                        @endforeach
                    </select>

                    <div class="form-group">
                        <label for="exampleTextarea1">About</label>
                        <textarea class="form-control" id="
                        exampleTextarea1"
                            rows="4"name="description"placeholder="About Me">
                        {{$user->description}}
                    </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>

                </form>
            </div>
        </div>
    </div>
@endsection
