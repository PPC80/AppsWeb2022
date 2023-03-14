<x-layouts.admin title="Resturantes">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Food') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('food.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id</th>
										<th>Category Id Fk</th>
										<th>Food Name</th>
										<th>Cost</th>
										<th>Time</th>
                                        <th>Ruc</th>
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($food as $food)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $food->food_id }}</td>
											<td>{{ $food->foodCategory->category }}</td>
											<td>{{ $food->food_name }}</td>
											<td>{{ $food->cost }}</td>
											<td>{{ $food->time }} minutos </td>
                                            <td>{{ $food->ruc_fk}}</td>
											

                                            <td>
                                                <form action="{{ route('food.destroy',$food->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('food.show',$food->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('food.edit',$food->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-layouts.admin>
