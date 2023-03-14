<x-layouts.admin title="Resturantes">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Food</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('food.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Food Id:</strong>
                            {{ $food->food_id }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id Fk:</strong>
                            {{ $food->category_id_fk }}
                        </div>
                        <div class="form-group">
                            <strong>Food Name:</strong>
                            {{ $food->food_name }}
                        </div>
                        <div class="form-group">
                            <strong>Cost:</strong>
                            {{ $food->cost }}
                        </div>
                        <div class="form-group">
                            <strong>Time:</strong>
                            {{ $food->time }}
                        </div>
                        <div class="form-group">
                            <strong>Visibility:</strong>
                            {{ $food->visibility }}
                        </div>
                        <div class="form-group">
                            <strong>Ruc Fk:</strong>
                            {{ $food->ruc_fk }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.admin>
