<div>
    <x-slot name='title'>Payout History</x-slot>
    <section class="transaction-history mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-text-full">
                        <h2>Payout Log</h2>
                    </div>
                </div>
            </div>

            <form action="https://al-safa-marwa.com/user/payout-history-search" method="get">
                <div class="row select-transaction">
                    <div class="col-md-6 col-lg-4">
                        <div class="input-group mb-4">
                            <div class="img">
                                <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/edit.png"
                                    alt="edit img">
                            </div>
                            <input type="text" name="name" value="" class="form-control"
                                placeholder="Type Here">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="input-group mb-4">
                            <div class="img">
                                <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/chevron.png"
                                    alt="chevron img">
                            </div>
                            <select name="status" class="form-select" id="salutation"
                                aria-label="Default select example" style="display: none;">
                                <option value="">All Payment</option>
                                <option value="1">Pending Payment</option>
                                <option value="2">Complete Payment</option>
                                <option value="3">Rejected Payment</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="input-group mb-4">
                            <div class="img">
                                <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/chevron.png"
                                    alt="chevron img">
                            </div>
                            <input type="text" class="form-control hasDatepicker" name="date_time" id="datepicker"
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
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">Gateway</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Charge</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td colspan="100%">No Data Found!</td>
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
