<!-- payments.index.blade.php -->

        @extends('layouts.app')

        @section('content')
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Payment Transactions</div>

                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- @foreach ($transactions ?? '' as $transaction)
                                            <tr>
                                                <td>{{ $transaction['id'] }}</td>
                                                <td>{{ $transaction['amount'] }}</td>
                                                <td>{{ $transaction['status'] }}</td>
                                                <td>{{ $transaction['date'] }}</td>
                                            </tr>
                                        @endforeach -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
