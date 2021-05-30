<div>
    @include('livewire.create')
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
                            All Customers Details
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#customerCreateModal">New</button>
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <th>{{ $customer->firstname }}</th>
                                        <th>{{ $customer->lastname }}</th>
                                        <th>{{ $customer->email }}</th>
                                        <th>{{ $customer->phone }}</th>
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
