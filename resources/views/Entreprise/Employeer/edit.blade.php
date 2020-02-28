@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">



            <div class="col-md-9">
                <div class="card">
                    <header class="card-header">
                        <p>modifier </p>
                        <a class="btn btn-primary" style="float: right" href="{{ route('index') }}"> Back</a>
                    </header>

                  @if (session('status'))
                         <div class="alert alert-success" role="alert">
                             {{ session('status') }}
                         </div>
                     @endif
                    {{--        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br />
                            @endif--}}

                    <form  method="POST" action="{{ route('Entreprise.Employeer.update', $employee->id ) }}">
                        @csrf

                        @method('PATCH')

                        <div class="form-group">
                            <label for="nom"> <strong>nom  </strong></label>
                            <input type="text" class="form-control"  id="nom" name="nom" required  value="{{ $employee->nom}}">
                        </div>
                        <div class="form-group">
                            <label for="email"> <strong>email</strong></label>
                            <input type="email" class="form-control"  id="email" name="email" required  value="{{ $employee->email}}">
                        </div>

                        <select class="form-control" name="sex"  id="sex"  required>
                            <option value="">Choose....</option>
                            <option value="homme" @if (old('sex') == 'homme') selected="selected" @endif>homme</option>
                            <option value="femme" @if (old('sex') == 'femme') selected="selected" @endif>femme</option>
                        </select>
                        <div class="form-group">
                            <label for="created_at"><strong>Joining Date</strong></label>
                            <input type="date"  class="form-control"  id="created_at" name="created_at"  required value="{{ $employee->created_at}}">
                        </div>

                        <button class="btn btn-lg btn-primary" type="submit" > save</button>
                        <a href="{{ route('index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
