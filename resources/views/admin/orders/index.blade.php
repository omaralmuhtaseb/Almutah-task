@extends('admin.includes.main')
@section('content')
    <div class="container">
        <h3>Orders</h3>

        <form method="GET" action="{{ route('admin.orders.index') }}" class="mb-3">
            <div class="row">
                <div class="col-md-6">
                    <label for="filter">Filter:</label>
                    <select name="filter" id="filter" class="form-control">
                        <option value="" {{ request('filter') == '' ? 'selected' : '' }}>All Orders</option>
                        <option value="pending" {{ request('filter') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="cancelled" {{ request('filter') == 'cancelled' ? 'selected' : '' }}>Cancelled
                        </option>
                        <option value="delivered" {{ request('filter') == 'delivered' ? 'selected' : '' }}>Delivered
                        </option>
                    </select>
                </div>
                <div class="col-md-6 mt-4">
                    <button type="submit" class="btn btn-primary">Apply Filter</button>
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Reset Filter</a>
                </div>
            </div>
        </form>
        <div class="card mt-4">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->User->name}}</td>
                    <td>
                        <span class="badge badge-{{$order->status_badge }}">{{ ucfirst($order->status) }}</span>
                    </td>
                    <td>{{$order->created_at->diffForHumans()}}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
        <div class="col-md-6">
            {!! $orders->appends(request()->input())->links() !!}
        </div>
    </div>
    </div>
@endsection
