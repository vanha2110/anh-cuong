@extends('user.layouts.app', ['current' => 'profile'])

@section('title', 'Profile')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Profile</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input disabled type="text" class="form-control" value="{{ $profile->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input disabled type="email" class="form-control" value="{{ $profile->email }}">
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('profile.edit', $profile->id) }}" class="btn btn-primary pull-right">Update Profile</a>
{{--                            <button type="submit" class="btn btn-primary pull-right">Update Profile</button>--}}
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
