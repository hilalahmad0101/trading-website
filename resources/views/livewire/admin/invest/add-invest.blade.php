<div>
    <x-slot name='title'>Add Invest</x-slot>
    <div class="container-fluid">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('admin.invest') }}" class="btn btn-success">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class=" dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form wire:submit.prevent='save'>
                                            @csrf
                                            <div class="my-2">
                                                <label for="">Enter packag name</label>
                                                <input type="text" wire:model.lazy='package_name'
                                                    class="form-control" id="">
                                                @error('package_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="my-2">
                                                <label for="">Enter Price range</label>
                                                <input type="text" wire:model.lazy='price_range' class="form-control"
                                                    id="">
                                                @error('price_range')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="my-2">
                                                <label for="">Enter Monthly Invest</label>
                                                <input type="text" wire:model.lazy='monthly_invest'
                                                    class="form-control" id="">
                                                @error('monthly_invest')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="my-2">
                                                <label for="">Enter Invest Period</label>
                                                <input type="text" wire:model.lazy='invest_period'
                                                    class="form-control" id="">
                                                @error('invest_period')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <button type="submit">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
