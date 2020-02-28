@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
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
                    <div class="row">
                       <div class="col-3">
                        <a style="float: right"  class="btn btn-primary"  href="{{ route('employee') }}"> Employeer </a>&nbsp;
                          </div>
            <div class="col-3">
                            <a style="float: right"  class="btn btn-primary"  href="{{ route('project') }}"> Projet </a>&nbsp;
                        </div>
                        <div class="col-3">
                            <a style="float: right"  class="btn btn-primary"  href="#"> Taches </a>&nbsp;
                        </div>
                        <div class="col-3">
                            <a style="float: right"  class="btn btn-primary"  href="{{ route('client.index') }}"> Client </a>&nbsp;
                        </div>
                                    </div>
                               &nbsp;
                                 {{--   <a style="float: right"  class="btn btn"  href="{{ route('adminindex') }}"> Home </a>--}}
                                </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
