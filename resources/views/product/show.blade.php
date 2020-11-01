<section class="content">
    <div class="row">

        <!-- left column -->
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Détails product</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <strong><i class="fa fa-pencil margin-r-5"></i> Nom</strong>

                    <p class="text-muted">
                        {{ $manager->name}}
                    </p>

                    <hr>

                    <strong><i class="fa fa-map-o margin-r-5"></i> category</strong>

                    <p class="text-muted">
                        {{ $manager->category->name }}
                    </p>

                    <hr>


                </div>
                <!-- /.box-body -->
            </div>

        </div>
    </div>
</section>
