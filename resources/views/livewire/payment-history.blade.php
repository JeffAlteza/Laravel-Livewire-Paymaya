

<div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <!-- center card title -->

                        <h3 class="card-title text-center">PAYMENT HISTORY</h3>
                    </div>

                    <div class="card-body">
                    <div class="col-md-3 ">
                            <input type="text" placeholder="Search" class="form-control " wire:model="search">
                    </div>
                    <table id="PH_table" class="table">
    <thead>
        <tr>
            <th>Transaction Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Amount</th>
            <th>Payment For</th>
            <th>Payment Method</th>
            <th>Paymaya Ref. No.</th>
            <th>Status</th>
            <th>Payment Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $history)
        <tr>
            <td>{{ $history->transaction_id }}</td>
            <td>{{ $history->fullname }}</td>
            <td>{{ $history->email }}</td>
            <td>{{ $history->amount }}</td>
            <td>{{ $history->payment_for }}</td>
            <td>{{ $history->payment_method }}</td>
            <td>{{ $history->paymaya_ref_no }}</td>
            <td>{{ $history->status }}</td>
            <td>{{ $history->date_of_trans}}</td>

        </tr>
        @endforeach
    </tbody>
</table>

                    </div>
    </div>
        <div class="mt-3">
             {{$data->links()}}
        </div>
    </div>
    </div>
    </div>
</section>

</div>


