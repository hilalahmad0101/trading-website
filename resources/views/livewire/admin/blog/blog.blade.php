<div>
    <x-slot name='title'>Post</x-slot>
    <div class="container-fluid">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Posts ( 4 )</h4>
                        <a href="" class="btn btn-success">New</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered dataTable" id="dataTable" width="100%"
                                            cellspacing="0" role="grid" aria-describedby="dataTable_info"
                                            style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                  <th>#</th>
                                                  <th>Title</th>
                                                  <th>Image</th>
                                                  <th>Date and Time</th>
                                                  <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($posts as $post)
                                                <tr class="odd">
                                                    <td class="sorting_1">{{ $post->id }}</td>
                                                    <td>{{ $post->title }}</td>
                                                    <td><img src="{{ asset('storage') }}/{{ $post->image }}" width="48" alt=""></td>
                                                    <td>{{ date('Y-m-d H:i:s A' , strtotime($post->created_at)) }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.update.blog', ['id'=>$post->id]) }}" class="btn btn-sm btn-success">Edit</a>
                                                        <a href="" wire:click.prevent='delete({{ $post->id }})' class="btn btn-sm btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                @empty
                                                    <tr>
                                                        Record not found
                                                    </tr>
                                                @endforelse
                                               
                                            </tbody>
                                        </table>
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
