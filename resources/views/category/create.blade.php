<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Nouvelle categorie</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ route('category.store') }}">

                    {{ csrf_field() }}

                    <div class="box-body">

                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="name">
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Confirmer</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
    </div>
</section>
