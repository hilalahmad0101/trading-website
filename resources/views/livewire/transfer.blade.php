<div>
    <x-slot name='title'>Transfer</x-slot>
    <section class="transaction-history profile-setting mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-text-full">
                        <h2>Balance Transfer</h2>
                    </div>
                </div>
            </div>

            <div class="edit-area">
                <form wire:submit.prevent='save'>
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label for="email" class="golden-text">Receiver Email Address</label>
                            <input type="email" class="form-control" id="email" wire:model.lazy="email"
                                value="" placeholder="Receiver Email Address">

                            @error('email')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-4">
                            <label for="amount" class="golden-text">Amount</label>
                            <input type="text" id="amount" class="form-control" wire:model.lazy="amount"
                                value="" placeholder="Enter Amount"
                                onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')">
                            @error('amount')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-4">
                            <label for="" class="golden-text">Select Wallet</label>
                            <select class="form-select" wire:model="wallet_type" id="wallet_type"
                                aria-label="Default select example">
                                <option value="" selected="" disabled="" class="text-white bg-dark">Select
                                    Wallet</option>
                                <option value="balance" class="text-white bg-dark">Main balance</option>
                                <option value="interest_balance" class="text-white bg-dark">Interest Balance</option>
                            </select>
                            @error('wallet_type')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-4">
                            <label for="password" class="golden-text">Enter Password</label>
                            <input type="password" id="password" class="form-control" wire:model.lazy="password"
                                value="" placeholder="Your Password">
                            @error('password')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <button type="submit" class="gold-btn">Submit</button>
                </form>
            </div>

        </div>
    </section>
</div>
