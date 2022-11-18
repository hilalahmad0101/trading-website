<div>
    <x-slot name='title'>Confirm Fund</x-slot>
    @if ($type == 'Bank Transfer')
        <section class="transaction-history mt-5 pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="header-text-full">
                            <h2>Pay with Bank Transfer</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card secbg br-4">
                            <div class="card-body bg-dark">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h3 class="title text-center">Please follow the instruction below</h3>
                                        <p class="text-center mt-2 ">You have requested to deposit <b
                                                class="text--base">{{ $data->amount }}
                                                USD</b> , Please pay
                                            <b class="text--base">{{ $data->total_pkr }} PKR</b> for successful payment
                                        </p>

                                        <p class="mt-2 ">
                                        </p>
                                        <div>Please send Money to United Bank Limited (UBL) Pakistan</div>
                                        <div>Title: Shamraiz Kayani&nbsp;</div>
                                        <div>Account No: 1442-245242034</div>
                                        <div>IBAN:&nbsp;PK04UNIL0109000245242034</div>
                                        <div>Your Al-Safa-Marwa account will be Credit within 1-24 hours</div>
                                        <p></p>


                                        <form wire:submit.prevent='update'
                                            class="form-row  preview-form">
                                            <input type="hidden" name="_token"
                                                value="CjncztYJGhGBjnv87L7wE23dNS948SsGqbhb2AWP">
                                            <div class="col-md-12 mt-2">
                                                <label>Payment Receipt Screenshot </label>

                                                <div class="form-group">
                                                    <div class="fileinput fileinput-new " data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail withdraw-thumbnail"
                                                            data-trigger="fileinput">
                                                         @if ($screenshot)
                                                                <img class="w-150px" src="{{ $screenshot->temporaryUrl() }}"
                                                                alt="...">
                                                         @endif
                                                        </div>
                                                        <div class="img-input-div">
                                                            <span class="btn btn-success btn-file">
                                                                <input type="file" wire:model='screenshot'
                                                                    wire:model='screenshot' class="form-control"
                                                                    name="PaymentReceiptScreenshot" accept="image/*">
                                                            </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12 ">
                                                <div class=" form-group">
                                                    <button type="submit" class="gold-btn w-100 mt-3">
                                                        <span>Confirm Now</span>
                                                    </button>

                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif


    @if ($type == 'Easypaisa')
        <section class="transaction-history mt-5 pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="header-text-full">
                            <h2>Pay with Easypaisa</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card secbg br-4">
                            <div class="card-body bg-dark">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h3 class="title text-center">Please follow the instruction below</h3>
                                        <p class="text-center mt-2 ">You have requested to deposit <b
                                                class="text--base">{{ $data->amount }}
                                                USD</b> , Please pay
                                            <b class="text--base">{{ $data->total_pkr }} PKR</b> for successful payment
                                        </p>

                                        <p class="mt-2 ">
                                        </p>
                                        <p>Please send Money to Easypaisa account <font color="#000000"
                                                style="background-color: rgb(255, 255, 0);">0313-5538746</font>
                                        </p>
                                        <p>Title:<font color="#000000" style="background-color: rgb(255, 255, 0);">
                                                Shamraiz Kayani</font>
                                        </p>
                                        <p><br></p>
                                        <p>Your Al-Safa-Marwa account will be Credit within 1-24 hours</p>
                                        <p></p>


                                        <form wire:submit.prevent='update'
                                            class="form-row  preview-form">
                                            <input type="hidden" name="_token"
                                                value="CjncztYJGhGBjnv87L7wE23dNS948SsGqbhb2AWP">
                                            <div class="col-md-12 mt-2">
                                                <div class="form-group  ">
                                                    <label>Sender Account No <span class="text--danger">*</span>
                                                    </label>
                                                    <input type="text" wire:model.lazy="sender_account_no"
                                                        class="form-control bg-transparent" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <div class="form-group  ">
                                                    <label>Sender Name <span class="text--danger">*</span> </label>
                                                    <input type="text" wire:model.lazy="sender_name"
                                                        class="form-control bg-transparent" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <label>Payment Receipt Screenshot <span class="text--danger">*</span>
                                                </label>

                                                <div class="form-group">
                                                    <div class="fileinput fileinput-new " data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail withdraw-thumbnail"
                                                            data-trigger="fileinput">
                                                         @if ($screenshot)
                                                                <img class="w-150px" src="{{ $screenshot->temporaryUrl() }}"
                                                                alt="...">
                                                         @endif
                                                        </div>
                                                        <div class="img-input-div">
                                                            <span class="btn btn-success btn-file">
                                                                <input type="file" wire:model='screenshot'
                                                                    class="form-control"
                                                                    name="PaymentReceiptScreenshot" accept="image/*"
                                                                    required="">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12 ">
                                                <div class=" form-group">
                                                    <button type="submit" class="gold-btn w-100 mt-3">
                                                        <span>Confirm Now</span>
                                                    </button>

                                                </div>
                                            </div>

                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($type == 'Jazzcash')
        <section class="transaction-history mt-5 pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="header-text-full">
                            <h2>Pay with Easypaisa</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card secbg br-4">
                            <div class="card-body bg-dark">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h3 class="title text-center">Please follow the instruction below</h3>
                                        <p class="text-center mt-2 ">You have requested to deposit <b
                                                class="text--base">{{ $data->amount }}
                                                USD</b> , Please pay
                                            <b class="text--base">{{ $data->total_pkr }} PKR</b> for successful payment
                                        </p>

                                        <p class="mt-2 ">
                                        </p>
                                        <p>Please send Money to Easypaisa account <font color="#000000"
                                                style="background-color: rgb(255, 255, 0);">0313-5538746</font>
                                        </p>
                                        <p>Title:<font color="#000000" style="background-color: rgb(255, 255, 0);">
                                                Shamraiz Kayani</font>
                                        </p>
                                        <p><br></p>
                                        <p>Your Al-Safa-Marwa account will be Credit within 1-24 hours</p>
                                        <p></p>


                                        <form wire:submit.prevent='update'
                                            class="form-row  preview-form">
                                            <input type="hidden" name="_token"
                                                value="CjncztYJGhGBjnv87L7wE23dNS948SsGqbhb2AWP">
                                            <div class="col-md-12 mt-2">
                                                <div class="form-group  ">
                                                    <label>Sender Account No <span class="text--danger">*</span>
                                                    </label>
                                                    <input type="text" wire:model.lazy="sender_account_no"
                                                        class="form-control bg-transparent" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <div class="form-group  ">
                                                    <label>Sender Name <span class="text--danger">*</span> </label>
                                                    <input type="text" wire:model.lazy="sender_name"
                                                        class="form-control bg-transparent" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <label>Payment Receipt Screenshot <span class="text--danger">*</span>
                                                </label>

                                                <div class="form-group">
                                                    <div class="fileinput fileinput-new " data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail withdraw-thumbnail"
                                                            data-trigger="fileinput">
                                                           @if ($screenshot)
                                                                <img class="w-150px"
                                                                src="{{ $screenshot->temporaryUrl() }}"
                                                                alt="...">
                                                           @endif
                                                        </div>
                                                        <div class="img-input-div">
                                                            <span class="btn btn-success btn-file">
                                                                <input type="file" wire:model='screenshot'
                                                                    class="form-control"
                                                                    name="PaymentReceiptScreenshot" accept="image/*"
                                                                    required="">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12 ">
                                                <div class=" form-group">
                                                    <button type="submit" class="gold-btn w-100 mt-3">
                                                        <span>Confirm Now</span>
                                                    </button>

                                                </div>
                                            </div>

                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if ($type == 'Tron (TRC20)')
        <section class="transaction-history mt-5 pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="header-text-full">
                            <h2>Pay with Tron (TRC20)</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card secbg br-4">
                            <div class="card-body bg-dark">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h3 class="title text-center">Please follow the instruction below</h3>
                                        <p class="text-center mt-2 ">You have requested to deposit <b
                                                class="text--base">{{ $data->amount }}
                                                USD</b> , Please pay
                                            <b class="text--base">{{ $data->charge }} USD</b> for successful payment
                                        </p>

                                        <p class="mt-2 ">
                                        </p>
                                        <p><br></p>
                                        <p>
                                            <font color="#000000">Send Money to Tron (TRC20) address&nbsp;</font>
                                        </p>
                                        <p>
                                            <font color="#000000"><br></font>
                                        </p>
                                        <p>
                                            <font color="#000000"><br></font>
                                        </p>
                                        <p>
                                            <font color="#000000"><br></font>
                                        </p>
                                        <p>
                                            <font color="#000000" style="background-color: rgb(255, 255, 0);"></font>
                                        </p>
                                        <p>
                                            <font color="#000000" style="background-color: rgb(255, 255, 0);">
                                                TSJUE6YUqrTRNrBCA6tJCRnAtDaXPZp23D</font>
                                        </p>
                                        <p></p>


                                        <form wire:submit.prevent='update'
                                            class="form-row  preview-form">
                                            <input type="hidden" name="_token"
                                                value="CjncztYJGhGBjnv87L7wE23dNS948SsGqbhb2AWP">
                                            <div class="col-md-12 mt-2">
                                                <label>Payment Receipt Screenshot <span class="text--danger">*</span>
                                                </label>

                                                <div class="form-group">
                                                    <div class="fileinput fileinput-new " data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail withdraw-thumbnail"
                                                            data-trigger="fileinput">
                                                           @if ($screenshot)
                                                                <img class="w-150px"
                                                                src="{{ $screenshot->temporaryUrl() }}"
                                                                alt="...">
                                                           @endif
                                                        </div>
                                                        <div class="img-input-div">
                                                            <span class="btn btn-success btn-file">
                                                                <span class="fileinput-new "> Select Payment Receipt
                                                                    Screenshot</span>
                                                                <input type="file" class="form-control"
                                                                    wire:model='screenshot' accept="image/*"
                                                                    required="">
                                                            </span>
                                                            <a href="#" class="btn btn-danger fileinput-exists"
                                                                data-dismiss="fileinput"> Remove</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12 ">
                                                <div class=" form-group">
                                                    <button type="submit" class="gold-btn w-100 mt-3">
                                                        <span>Confirm Now</span>
                                                    </button>

                                                </div>
                                            </div>

                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($type == 'BTC (Bitcoin)')
        <div class="container-fluid" style="margin-top: 100px">
            <div class="row">
                <div class="col">
                    <div class="header-text-full">
                        <h2>Pay with {{ $type }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card secbg br-4">
                        <div class="card-body bg-dark">
                            <div class="row ">
                                <div class="col-md-12">
                                    <h3 class="title text-center">Please follow the instruction below</h3>
                                    <p class="text-center mt-2 ">You have requested to deposit <b
                                            class="text--base">{{ $data->amount }}
                                            USD</b> , Please pay
                                        <b class="text--base">{{ $data->charge }} USD</b> for successful payment
                                    </p>

                                    <p class="mt-2 ">
                                    </p>
                                    <p>Please send Money to BTC Address</p>
                                    <p><br></p>
                                    <p>
                                        <font color="#000000" style="background-color: rgb(255, 255, 0);">
                                            bc1qzlsflev8mhvhtydpv2laqkm0gunfzwfngt3p38</font>
                                    </p>
                                    <p></p>


                                    <form wire:submit.prevent='update'
                                        class="form-row  preview-form">
                                        <input type="hidden" name="_token"
                                            value="CjncztYJGhGBjnv87L7wE23dNS948SsGqbhb2AWP">
                                        <div class="col-md-12 mt-2">
                                            <label>Payment Receipt Screenshot <span class="text--danger">*</span>
                                            </label>

                                            <div class="form-group">
                                                <div class="fileinput fileinput-new " data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail withdraw-thumbnail"
                                                        data-trigger="fileinput">
                                                      @if ($screenshot)
                                                      <img class="w-150px" src="{{ $screenshot->temporaryUrl() }}"
                                                      alt="...">
                                                      @endif
                                                    </div>
                                                    <div class="img-input-div">
                                                        <span class="btn btn-success btn-file">
                                                            <input type="file" accept="image/*"
                                                                wire:model='screenshot' class="form-control"
                                                                required="">
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12 ">
                                            <div class=" form-group">
                                                <button type="submit" class="gold-btn w-100 mt-3">
                                                    <span>Confirm Now</span>
                                                </button>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($type == 'Perfectmoney')
    @endif


</div>
