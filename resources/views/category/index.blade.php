<div class="box">
    <div class="box-header">
        <h3 class="box-title">Liste des category</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <table id="products-table" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>name</th>


                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($computer as $manager)
                <tr>
                    <td>{{ $manager->name }}</td>
                    <td>
                        <a href="{{ route('category.show', $manager->id) }}" class="btn btn-primary">Afficher</a>
                        <a href="{{ route('category.edit', $manager->id) }}" class="btn btn-warning">Modifier</a>
                        <a href="{{ route('category.delete', $manager->id) }}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>

            @endforeach

            </tbody>
            <tfoot>
            </tfoot>
        </table>

    </div>
</div>
