<div>
    <x-slot name='title'>Add Fund</x-slot>
    <style>
        .mymodel {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999999;
            display: flex;
            justify-content: center;
            background-color: #000000a1;
            align-items: center;
            height: 100vh;
            width: 100%;
        }
        .hide{
            display: none;
        }

        .show{
            display: flex;
        }
        #model-content{
            width: 316%;
            background-color: black;
            border: 2px solid #aa771c;
            border-radius: 11px;
            color:white;
            margin-left:-162px;
        }
    </style>
    <section class="payment-gateway mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-text-full">
                        <h2>Add Fund</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img class="img-fluid gateway"
                            src="https://income-gap.com/assets/uploads/gateway/61d16f5313ee41641115475.jpg"
                            alt="Bank Transfer">
                        <button type="button" data-id="1000" data-name="Bank Transfer" data-currency="PKR"
                            data-gateway="bank-transfer" data-min_amount="1" data-max_amount="100000" wire:click='showModel("Bank Transfer")'
                            data-percent_charge="5" data-fix_charge="2" class="gold-btn addFund" data-bs-toggle="modal"
                            data-bs-target="#addFundModal">Pay Now </button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img class="img-fluid gateway"
                            src="https://income-gap.com/assets/uploads/gateway/635f8e3de598f1667206717.jpeg"
                            alt="Easypaisa">
                        <button type="button" data-id="1001" data-name="Easypaisa" data-currency="PKR"
                            data-gateway="easypaisa" data-min_amount="1" data-max_amount="10000" data-percent_charge="5"
                            data-fix_charge="2" class="gold-btn addFund" data-bs-toggle="modal"
                            data-bs-target="#addFundModal" wire:click='showModel("Easypaisa")'>Pay Now </button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img class="img-fluid gateway"
                            src="https://income-gap.com/assets/uploads/gateway/635f8ef2a439d1667206898.jpeg"
                            alt="Jazzcash">
                        <button type="button" data-id="1002" data-name="Jazzcash" data-currency="PKR"
                            data-gateway="jazzcash" data-min_amount="1" data-max_amount="10000" data-percent_charge="5"
                            data-fix_charge="2" class="gold-btn addFund" data-bs-toggle="modal"
                            data-bs-target="#addFundModal" wire:click='showModel("Jazzcash")'>Pay Now </button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img class="img-fluid gateway"
                            src="https://income-gap.com/assets/uploads/gateway/635f9063581fa1667207267.png"
                            alt="Tron (TRC20)">
                        <button type="button" data-id="1003" data-name="Tron (TRC20)" data-currency="USD"
                            data-gateway="tron-trc20" data-min_amount="1" data-max_amount="10000"
                            data-percent_charge="5" data-fix_charge="2" class="gold-btn addFund" data-bs-toggle="modal"
                            data-bs-target="#addFundModal" wire:click='showModel("Tron (TRC20)")'>Pay Now </button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img class="img-fluid gateway"
                            src="https://income-gap.com/assets/uploads/gateway/635f912d077e21667207469.jpeg"
                            alt="BTC (Bitcoin)">
                        <button type="button" data-id="1004" data-name="BTC (Bitcoin)" data-currency="USD"
                            data-gateway="btc-bitcoin" data-min_amount="1" data-max_amount="10000"
                            data-percent_charge="5" data-fix_charge="2" class="gold-btn addFund" data-bs-toggle="modal"
                            data-bs-target="#addFundModal" wire:click='showModel("BTC (Bitcoin)")'>Pay Now </button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img class="img-fluid gateway"
                            src="https://income-gap.com/assets/uploads/gateway/5f64d522d8bea.jpg" alt="Perfect Money">
                        <button type="button" data-id="4" data-name="Perfect Money" data-currency="USD"
                            data-gateway="perfectmoney" data-min_amount="5" data-max_amount="100000"
                            data-percent_charge="5" data-fix_charge="2" class="gold-btn addFund"
                            data-bs-toggle="modal" data-bs-target="#addFundModal" wire:click='showModel("Perfectmoney")'>Pay Now </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if ($showModal == true)
        
    <div class="mymodel">
        <div class="modal-dialog" role="document">
            <div class="modal-content form-block" id="model-content">
                <div class="modal-header">
                    <h4 class="modal-title method-name golden-text">{{ $title }} - PKR</h4>
                    <button type="button" data-bs-dismiss="modal" wire:click='hideModal' class="btn-close" aria-label="Close">
                        <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/cross.png"
                            alt="modal dismiss">
                    </button>
                </div>

                <div class="modal-body " wire:ignore.self>
                    <div class="payment-form {{ $detail == true ? 'd-none':'' }}">
                        <p class="golden-text depositLimit lebelFont">Transaction Limit: 1 - 100000 $</p>
                        <p class="golden-text depositCharge lebelFont">Charge: 2 $ + 5 % </p>
                        <input type="hidden" class="gateway" name="gateway" value="PKR">
                        <div class="form-group mb-30 mt-3">
                            <div class="box">
                                <h5 class="text-white">Amount</h5>
                                <div class="input-group">
                                    <input type="text" wire:model.lazy='amount' class="amount form-control" name="amount">
                                    <button class="gold-btn show-currency">USD</button>
                                </div>
                            </div>
                            <pre class="text-danger errors"></pre>
                        </div>
                    </div>
                    @if ($detail == true)
                        
                    <div class="payment-info text-center">
                        <ul class="list-group text-center">
                            <li class="list-group-item bg-transparent list-text customborder">
                                <img src="https://al-safa-marwa.com/assets/uploads/gateway/61d16f5313ee41641115475.jpg"
                                    style="max-width:100px; max-height:100px; margin:0 auto;">
                            </li>
                            <li class="list-group-item bg-transparent list-text customborder">
                                Amount:
                                <strong>{{ $data->amount }} $ </strong>
                            </li>
                            <li class="list-group-item bg-transparent list-text customborder">Charge:
                                <strong>{{ $data->charge }} $</strong>
                            </li>
                            <li class="list-group-item bg-transparent list-text customborder">
                                Payable: <strong> {{ $data->payable }} $</strong>
                            </li>
                            <li class="list-group-item bg-transparent text-white list-text customborder">
                                Conversion Rate: <strong>1 USD = 250 PKR</strong>
                            </li>
                            <li class="list-group-item bg-transparent list-text customborder">
                                <strong>In PKR: {{ number_format($data->total_pkr) }}</strong>
                            </li>
                            <li class="list-group-item bg-transparent">
                                <a href="{{ route('confirm-fund', ['id'=>$last_id]) }}"
                                    class="btn gold-btn addFund">Pay Now</a>
                            </li>
                        </ul>
                    </div>
                    @endif

                </div>
                <div class="modal-footer border-top-0 ">
                    @if ($detail == false)
                    <button type="button" wire:click='nextStep' class="btn gold-btn checkCalc">Next</button>
                    @endif
                </div>

            </div>
        </div>
    </div>
    @endif

</div>
