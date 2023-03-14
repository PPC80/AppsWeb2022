<x-layouts.admin title="Resturantes">
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Food Category</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('foodcategory.update', $foodCategory->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('food-category.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.admin>
