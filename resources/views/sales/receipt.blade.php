<div id="invoice-POS" style="margin-bottom: 20px">

    @php
        $settings = App\Models\Settings::find(1);
        $branch = App\Models\Branch::find(auth()->user()->branch_id);
    @endphp

    <center id="top">
        <div class="logo">
           
        </div>
        <div class="info">
            <h4>{{ @$settings->name }} - {{ auth()->user()->branch->name }} Branch</h4>
            <h5 style="text-decoration: underline;">Sales Receipt</h5>
        </div>
        <!--End Info-->
    </center>
    <em>Tranx ID:</em>  <em class="tran_id"></em>

    <div id="mid">
        <div class="info">
            <p>
                <strong>Address:</strong> {{ $branch->address }}<br/><br/>
                <strong>Phone:</strong> {{ $branch->phone }}<br/>
            </p>
        </div>
    </div>
    <!--End Invoice Mid-->

    <div id="bot">

        <div id="table">
            <table style="width: 100%">
                <thead>
                    <tr>
                        <th style="width: 10%">#</th>
                        <th style="text-align: left">Item</th>
                        <th>Qty</th>
                        <th>Amount</th>
                    </tr>
                </thead>

                <tbody id="receipt_body" style="width: 100%">

                </tbody>
            </table>
        </div>
        <!--End Table-->

        <div id="legalcopy">
            <p class="legal" style="text-align: center">*** Thank you! *** </p><br /><br />
            <p>.</p>
            <p>.</p>
        </div>

    </div>
    <!--End InvoiceBot-->
</div>
<!--End Invoice-->
