@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><i class="fas fa-user-alt"></i> Client </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a style="float: right"  class="btn btn-primary"  href="{{ route('Entreprise.client.create') }}"> Ajouter </a>&nbsp;
                        &nbsp;
                        &nbsp;
                        <a style="float: right"  class="btn btn-danger"  href="{{ route('index') }}"> Retourner  </a>&nbsp;&nbsp;

                        <a style="float: left"  class="btn btn-primary"  href="#"> Total Clients </a>&nbsp;&nbsp;



                        <table class="table table-bordered text-center">
                            <thead>
                            <tr>
                                <th scope="col">id </th>
                                <th scope="col">nom </th>
                                <th scope="col">nom de l'entreprise </th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">created_at</th>
                                <th colspan="2">ACTIONS </th>
                            </tr>
                            </thead>
                            <tbody>

                           {{-- @foreach($employees  as $employee)
                                --}}{{--          <img src="/img/{{$produit->client->photo}}" alt="im" style="width: 50px;height: 50px;"class="img-fluid mx-auto">--}}{{--
                                <tr>
                                    <td>{{ $employee->id }} </td>
                                    <td>{{ $employee->nom }} </td>
                                    <td>{{ $employee->email }} </td>
                                    <td>{{ $employee->sex }}</td>
                                    <td>{{ $employee->created_at }}</td>
                                    <td>
                                        <a href="{{ route('Entreprise.Employeer.edit', $employee->id) }}" class="btn btn-warning" >Modifier </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('Entreprise.Employeer.destroy',$employee->id) }}" method="post">.
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach--}}

                            </tbody>
                        </table>


             {{--           <footer class="card-footer">
                            {{  $employees->links() }}
                        </footer>


                        @section('css')
                            <style>
                                .card-footer {
                                    justify-content: center;
                                    align-items: center;
                                    padding: 0.4em;
                                }
                            </style>
                        @endsection--}}




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
