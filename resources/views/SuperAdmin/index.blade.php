@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('includes.profile_sidbar')
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard Entreprise
                        <a style="float: right"  class="btn btn-primary"  href="{{ route('Entreprise.create') }}"> Ajouter unn nouvaux Entreprise </a>&nbsp;
                        &nbsp;
                    </div>
                    {{--              <div>         &nbsp;
                          <a style="float: right"  class="btn btn-danger"  href="#"> Retourner  </a>&nbsp;&nbsp;</div>--}}

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
                            <div class="row">

                                <div class="col-3">
                                    <a style="float: right"  class="btn btn-primary"  href="{{ route('employee') }}"> Employeer </a>&nbsp;
                                </div>
                                <div class="col-3">
                                    <a style="float: right"  class="btn btn-primary"  href="{{ route('project') }}"> Projet </a>&nbsp;
                                </div>
                                <div class="col-3">
                                    <a style="float: right"  class="btn btn-primary"   href="{{ route('tache.index') }}"> Taches </a>&nbsp;
                                </div>
                                <div class="col-3">
                                    <a style="float: right"  class="btn btn-primary"  href="#"> Client </a>
                                    &nbsp;
                                </div>
                            </div>


                            {{--   <a style="float: right"  class="btn btn"  href="{{ route('adminindex') }}"> Home </a>--}}
                        </div>

                        <table class="table table-bordered text-center">
                            <thead>
                            <tr>
                                <th scope="col">id </th>
                                <th scope="col">nom </th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">created_at</th>
                                <th colspan="2">ACTIONS </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users  as $user)
                                {{--          <img src="/img/{{$produit->client->photo}}" alt="im" style="width: 50px;height: 50px;"class="img-fluid mx-auto">--}}
                                <tr>
                                    <td>{{ $user->id }} </td>
                                    <td>{{ $user->name }} </td>
                                    <td>{{ $user->email }} </td>
                                    <td>{{ $user->created_at }}</td>
                                    {{--  <td>
                                          <a href="{{ route('Entreprise.Employeer.edit', $employee->id) }}" class="btn btn-warning" >Modifier </a>
                                      </td>
                                      <td>
                                          <form action="{{ route('Entreprise.Employeer.destroy',$employee->id) }}" method="post">.
                                              @csrf
                                              @method('DELETE')
                                              <button class="btn btn-danger">Supprimer</button>
                                          </form>
                                      </td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
