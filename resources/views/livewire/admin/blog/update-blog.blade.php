<div>
    <x-slot name='title'>Post</x-slot>
    <div class="container-fluid">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="" class="btn btn-success">Back</a>
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
                                                <label for="">Enter title</label>
                                                <input type="text" wire:model.lazy='title' class="form-control"
                                                    id="">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="my-2">
                                                <label for="">Enter Description</label>
                                                <textarea wire:model.lazy='content' id="" cols="30" rows="10" class="form-control"></textarea>
                                                @error('content')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="my-2">
                                                <label for="">Upload File</label>
                                                <input type="file" wire:model='file' class="form-control"
                                                    id="">
                                                @error('file')
                                                    <span class="text-danger">{{ $message }}</span> <br>
                                                @enderror
                                                @if ($file)
                                                    <img src="{{ asset('storage') }}/{{ $old_file }}" width="48"
                                                        alt="">
                                                @else
                                                @endif
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
