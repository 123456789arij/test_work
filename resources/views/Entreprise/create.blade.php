@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('includes.profile_sidbar')
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard Entreprise </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <br>
                        <br>
                        <div class="container">

                            &nbsp;
                            {{--   <a style="float: right"  class="btn btn"  href="{{ route('adminindex') }}"> Home </a>--}}
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
