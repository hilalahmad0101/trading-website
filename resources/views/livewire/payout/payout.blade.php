<div>
    <x-slot name='title'>Payout</x-slot>
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

        .hide {
            display: none;
        }

        .show {
            display: flex;
        }

        #model-content {
            width: 316%;
            background-color: black;
            border: 2px solid #aa771c;
            border-radius: 11px;
            color: white;
            margin-left: -162px;
        }
    </style>
    <section class="payment-gateway mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-text-full">
                        <h2>Payout Money</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img class="img-fluid gateway"
                            src="https://al-safa-marwa.com/assets/uploads/withdraw/6064181b137c91617172507.jpg"
                            alt="Bank Transfer">
                        <button type="button" data-id="2" data-name="Bank Transfer" data-min_amount="5"
                            data-max_amount="25" data-percent_charge="5" data-fix_charge="2" class="gold-btn addFund"
                            data-bs-toggle="modal" wire:click='showModel("Bank Transfer")'
                            data-bs-target="#addFundModal">PAYOUT NOW </button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img class="img-fluid gateway"
                            src="https://al-safa-marwa.com/assets/uploads/withdraw/635f96cd3809c1667208909.jpeg"
                            alt="Jazzcash">
                        <button type="button" data-id="3" data-name="Jazzcash" data-min_amount="5"
                            data-max_amount="25" data-percent_charge="5" data-fix_charge="2" class="gold-btn addFund"
                            data-bs-toggle="modal" wire:click='showModel("Jazzcash")'
                            data-bs-target="#addFundModal">PAYOUT NOW </button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img class="img-fluid gateway"
                            src="https://al-safa-marwa.com/assets/uploads/withdraw/635f97ca887b21667209162.jpeg"
                            alt="Easypaisa">
                        <button type="button" data-id="4" data-name="Easypaisa" data-min_amount="5"
                            data-max_amount="25" data-percent_charge="5" data-fix_charge="2" class="gold-btn addFund"
                            data-bs-toggle="modal" wire:click='showModel("Easypaisa")'
                            data-bs-target="#addFundModal">PAYOUT NOW </button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img class="img-fluid gateway"
                            src="https://al-safa-marwa.com/assets/uploads/withdraw/635f9858623c51667209304.jpeg"
                            alt="BTC (Bitcoin)">
                        <button type="button" data-id="5" data-name="BTC (Bitcoin)" data-min_amount="10"
                            data-max_amount="25" data-percent_charge="5" data-fix_charge="2" class="gold-btn addFund"
                            data-bs-toggle="modal" wire:click='showModel("BTC (Bitcoin)")'
                            data-bs-target="#addFundModal">PAYOUT NOW </button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img class="img-fluid gateway"
                            src="https://al-safa-marwa.com/assets/uploads/withdraw/635f98fd59cb51667209469.png"
                            alt="Tron (TRC20)">
                        <button type="button" data-id="6" data-name="Tron (TRC20)" data-min_amount="10"
                            data-max_amount="25" data-percent_charge="5" data-fix_charge="2" class="gold-btn addFund"
                            data-bs-toggle="modal" wire:click='showModel("Tron (TRC20)")'
                            data-bs-target="#addFundModal">PAYOUT NOW </button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img class="img-fluid gateway"
                            src="https://al-safa-marwa.com/assets/uploads/withdraw/635f998c7411d1667209612.jpg"
                            alt="Perfect Money">
                        <button type="button" data-id="7" data-name="Perfect Money" data-min_amount="10"
                            data-max_amount="25" data-percent_charge="5" data-fix_charge="2" class="gold-btn addFund"
                            data-bs-toggle="modal" wire:click='showModel("Perfect Money")'
                            data-bs-target="#addFundModal">PAYOUT NOW </button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img class="img-fluid gateway"
                            src="https://al-safa-marwa.com/assets/uploads/withdraw/63722c86dcfc21668426886.jpg"
                            alt="Donation">
                        <button type="button" data-id="8" data-name="Donation" data-min_amount="1"
                            data-max_amount="10000" data-percent_charge="0" data-fix_charge="0"
                            class="gold-btn addFund" data-bs-toggle="modal('Donation')" wire:click='showModel'
                            data-bs-target="#addFundModal">PAYOUT NOW
                        </button>
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
                        <button type="button" data-bs-dismiss="modal" wire:click='hideModal' class="btn-close"
                            aria-label="Close">
                            <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/cross.png"
                                alt="modal dismiss">
                        </button>
                    </div>
                    @if (session()->has('error'))
                        <span class="text-danger">
                            {{ session('error') }}
                        </span>
                    @endif
                    <div class="modal-body " wire:ignore.self>
                        <div class="payment-form {{ $detail == true ? 'd-none' : '' }}">
                            <p class="golden-text depositLimit lebelFont">Transaction Limit: 1 - 100000 $</p>
                            <p class="golden-text depositCharge lebelFont">Charge: 2 $ + 5 % </p>
                            <input type="hidden" class="gateway" name="gateway" value="PKR">
                            <div class="form-group mb-30 mt-3">
                                <div class="box">
                                    <div class="form-group my-3">
                                        <h5 class="mb-2 golden-text d-block modal_text_level">Select wallet</h5>
                                        <select class="form-control" wire:model="wallet_type">
                                            <option value="">Select Wallet Type</option>
                                            <option value="balance" class="bg-dark text-white">Deposit Balance - $5
                                            </option>
                                            <option value="interest_balance" class="bg-dark text-white">Interest
                                                Balance -$0</option>
                                        </select>
                                        @error('wallet_type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <h5 class="text-white">Amount</h5>
                                    <div class="input-group">
                                        <input type="text" wire:model.lazy='amount' class="amount form-control"
                                            name="amount">
                                        <button class="gold-btn show-currency">USD</button>
                                    </div>
                                    @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
                                        <a href="{{ route('confirm-fund', ['id' => $last_id]) }}"
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
