<div>
    <x-slot name='title'>Raferral Bounes</x-slot>
    <section class="transaction-history mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-text-full">
                        <h2>Referral Bonus</h2>
                    </div>
                </div>
            </div>

            <form action="https://al-safa-marwa.com/user/referral-bonus-search" method="get">
                <div class="row select-transaction">
                    <div class="col-md-6 col-lg-4">
                        <div class="input-group mb-4">
                            <div class="img">
                                <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/edit.png"
                                    alt="edit img">
                            </div>
                            <input type="text" name="search_user" value="" class="form-control"
                                placeholder="Search User">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="input-group mb-4">
                            <div class="img">
                                <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/chevron.png"
                                    alt="chevron img">
                            </div>
                            <input type="text" class="form-control hasDatepicker" name="datetrx" id="datepicker"
                                placeholder="Select a date" autocomplete="off" readonly="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
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
                                    <th>Bonus From</th>
                                    <th>Amount</th>
                                    <th>Remarks</th>
                                    <th>Time</th>
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
