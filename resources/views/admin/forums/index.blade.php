@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="main-header">
                <h4>Forums</h4><br><br>
                <div>
                    <a href="{{ route('all_forums') }}" class="btn btn-primary waves-effect">Programmer un forum</a>
                </div>
            </div>
        </div>
    </div>
@endsection