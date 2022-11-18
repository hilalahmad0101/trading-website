<div>
    <x-slot name='title'>Transaction</x-slot>
    <section class="transaction-history mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-text-full">
                        <h2>Transaction</h2>
                    </div>
                </div>
            </div>

            <form action="https://al-safa-marwa.com/user/transaction-search" method="get">
                <div class="row select-transaction">
                    <div class="col-md-6 col-lg-4">
                        <div class="input-group mb-4">
                            <div class="img">
                                <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/edit.png"
                                    alt="edit img">
                            </div>
                            <input type="text" name="transaction_id" value="" class="form-control"
                                placeholder="Search for Transaction ID">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="input-group mb-4">
                            <div class="img">
                                <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/edit.png"
                                    alt="edit img">
                            </div>
                            <input type="text" name="remark" value="" class="form-control"
                                placeholder="Remark">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="input-group mb-4">
                            <div class="img">
                                <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/chevron.png"
                                    alt="chevron img">
                            </div>
                            <input type="text" class="form-control hasDatepicker" name="datetrx" id="datepicker"
                                placeholder="Select a date" autocomplete="off" readonly="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <button type="submit" class="gold-btn search-btn mb-4">
                            Search </button>
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col">
                    <div class="table-parent table-responsive">
                        <table class="table table-striped mb-5">
                            <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Transaction ID</th>
                                    <th>Amount</th>
                                    <th>Remarks</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2QWES2COVJT2</td>
                                    <td>
                                        <span class="fontBold text-success">+5 USD</span>
                                    </td>
                                    <td>You got $5 joining bonus.</td>
                                    <td>09 Nov 2022 08:13 AM</td>
                                </tr>
                            </tbody>
                        </table>

                        <nav id="pagination">
                        </nav>


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
