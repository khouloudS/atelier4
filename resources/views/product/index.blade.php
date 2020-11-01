@extends('layouts.app')

@section('content')
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

                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($managers as $manager)

                <tr>
                    <td>{{ $manager->name }}</td>

                    <td>{{ $manager->category->name }}</td>
                    <td>
                        <a href="{{ route('product.show', $manager->id) }}" class="btn btn-primary">Afficher</a>

                    </td>
                </tr>

            @endforeach

            </tbody>
            <tfoot>

            </tfoot>
        </table>

    </div>
</div>
@endsection
