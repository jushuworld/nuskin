<x-app-layout>
{{--    <x-slot name="header">--}}
{{--        <h2 class="h4 font-weight-bold">--}}
{{--            {{ __('Customers') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2>Customers</h2>
                        </div>
                    </div>
                </div>
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">#</th>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Phone Number</th>
                        <th class="th-sm">Address 1</th>
                        <th class="th-sm">Address 2</th>
                        <th class="th-sm">City</th>
                        <th class="th-sm">Zipcode</th>
                        <th class="th-sm">Quantity</th>
                        <th class="th-sm">deposit</th>
                        <th class="th-sm">Pay Method</th>
                        <th class="th-sm">Order Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ $user->address1 }}</td>
                            <td>{{ $user->address2 }}</td>
                            <td>{{ $user->city }}</td>
                            <td>{{ $user->zipcode }}</td>
                            <td>{{ $user->quantity }}</td>
                            <td>{{ $user->deposit }}</td>
                            <td>{{ $user->pay_method }}</td>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <div class="font-bold">total # of Customers: {{ count($users) }}</div>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
