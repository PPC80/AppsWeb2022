<x-layouts.admin title="Resturantes">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Restaurant Category</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rescategory.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $restaurantCategory->id }}
                        </div>
                        <div class="form-group">
                            <strong>Category:</strong>
                            {{ $restaurantCategory->category }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.admin>
