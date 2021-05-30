<div>
    @include('livewire.create')
    @include('livewire.update')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>

                @endif
                <div class="card mt-2">
                    <div class="card-header">
                        <h3>
                            All Customers
                            {{-- <button type="button" class="btn btn-success" >New</button> --}}
                            <button  data-toggle="modal" data-target="#customerCreateModal"
                                class="py-2 px-4 font-semibold rounded-sm shadow-md text-white bg-green-500 hover:bg-green-900">
                                New
                            </button>

                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <th>{{ $customer->firstname }}</th>
                                        <th>{{ $customer->lastname }}</th>
                                        <th>{{ $customer->email }}</th>
                                        <th>{{ $customer->phone }}</th>
                                        <th>
                                         
                                         

                                                <button
                                                data-toggle="modal" data-target="#customerUpdateModal"
                                                wire:click.prevent="edit({{ $customer->id }})"
                                                    class="bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                    type="button">
                                                    Edit
                                                </button>
                                            <button 
                                            wire:click.prevent="delete({{ $customer->id }})"
                                                class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                type="button">
                                                Delete
                                            </button>
                                        </th>


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
