@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>
            </div>
            <div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Liste des gérants</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="products-table" class="table table-bordered table-striped">
                            <thead>

                            <tr>
                                <th>Nom</th>


                            </tr>
                            </thead>
                            <tbody>

                            @foreach($managers as $manager)

                                <tr>


                                    <td>{{ $manager->Product->name }}</td>

                                </tr>

                            @endforeach

                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
