@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

            {{--                  <span class="h4 d-block font-weight-normal mb-2">
               <h6>    Nombre Total d'Employes est  :    {{  $emp}} </h6>
                 </span>


                        <p>Employés</p>
--}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
