<div>
    <x-slot name='title'>Profile Setting</x-slot>
    <section class="profile-setting mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-text-full">
                        <h2>Profile Settings</h2>
                    </div>
                </div>
            </div>

            <div class="row" wire:ignore.self>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="upload-img">
                        <form wire:submit.prevent='updateProfile("image")'> @csrf
                            <div class="img-box">
                                <input accept="image/*" wire:model="image" type="file" id="image">
                                <span class="select-file">Choose image</span>
                                @if ($image)
                                    <img id="frame" src="{{ $image->temporaryUrl() }}" alt="preview user image">
                                @else
                                    <img id="frame"
                                        src="{{ $old_image ? asset('storage') . '/' . $old_image : 'https://al-safa-marwa.com/assets/admin/images/default.png' }}"
                                        alt="preview user image">
                                @endif

                            </div>
                            <h3 class="golden-text">{{ $firstname }} {{ $lastname }}</h3>
                            <p>Joined At {{ date('d , M Y H:i:s A', strtotime(Auth::user()->created_at)) }}</p>
                            <button class="gold-btn">Image Update</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="edit-area">
                        <div class="profile-navigator">
                            <button tab-id="tab1" wire:click='showTab("profile")' class="golden-text tab {{ $profile ? 'active':'' }}">
                                Profile Information </button>
                            <button tab-id="tab2" wire:click='showTab("password")' class="golden-text tab {{ $password ? 'active':'' }}">
                                Password Setting </button>
                        </div>
@if ($profile)
    
                        <div id="tab1" class="content {{ $profile ? 'active':'' }}">
                            <form wire:submit.prevent='updateProfile("data")'>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="firstname" class="golden-text">First Name</label>
                                        <input type="text" class="form-control" wire:model.lazy="firstname"
                                            id="firstname">
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label for="lastname" class="golden-text">Last Name</label>
                                        <input type="text" id="lastname" wire:model.lazy="lastname"
                                            class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label for="username" class="golden-text">Username</label>
                                        <input type="text" id="username" wire:model.lazy="username"
                                            class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label for="email" class="golden-text">Email Address</label>
                                        <input type="email" id="email" wire:model.lazy="email" readonly=""
                                            class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label for="phone" class="golden-text">Phone Number</label>
                                        <input type="text" wire:model.lazy="phone" readonly=""
                                            class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label for="language_id" class="golden-text">Preferred language</label>
                                        <select class="form-select" wire:model.lazy="lang" id="language_id"
                                            aria-label="Default select example">
                                            <option value="" disabled="">Select Language</option>
                                            <option value="1" selected="">
                                                English </option>
                                            <option value="17">
                                                Hindi </option>
                                            <option value="18">
                                                Spanish </option>
                                            <option value="20">
                                                Urdu </option>
                                            <option value="21">
                                                Arabic </option>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-4">
                                        <label for="address" class="golden-text">Address</label>
                                        <textarea class="form-control" id="address" wire:model.lazy="address" cols="30" rows="3"></textarea>
                                    </div>

                                </div>
                                <button type="submit" class="gold-btn">Update User</button>
                            </form>
                        </div>
                        @endif
@if ($password)
    
                        <div id="tab2" class="content {{ $password ?'active':'' }}" >
                            <form wire:submit.prevent='changePassword'>
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="current_password" class="golden-text">Current Password</label>
                                        <input type="password" id="current_password" wire:model.lazy="old_password"
                                            autocomplete="off" class="form-control"
                                            placeholder="Enter Current Password">
                                            @error('old_password')
                                            <span style="color:red">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label for="password" class="golden-text">New Password</label>
                                        <input type="password" id="password" wire:model.lazy="new_password" autocomplete="off"
                                            class="form-control" placeholder="Enter New Password">
                                            @error('new_password')
                                            <span style="color:red">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12 mb-4">
                                        <label for="password_confirmation" class="golden-text">Confirm
                                            Password</label>
                                        <input type="password" id="password_confirmation"
                                            wire:model.lazy="confirm_password" autocomplete="off" class="form-control"
                                            placeholder="Confirm Password">
                                            @error('confirm_password')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                    </div>
                                </div>
                                <button type="submit" class="gold-btn">
                                    Update Password </button>
                            </form>
                        </div>
                        @endif

                        {{-- <div id="tab3" class="content">
                            <form method="post" action="https://al-safa-marwa.com/user/verificationSubmit"
                                enctype="multipart/form-data">
                                <input type="hidden" name="_token"
                                    value="SfmQz39FtESJRiwutjtkcva1oLsLAHOkrPFwWXpO">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group input-group">
                                        <label class="form-label d-block w-100 golden-text"
                                            for="identity_type">Identity Type</label>
                                        <select name="identity_type" id="identity_type" class="form-control d-block">
                                            <option class="text-white bg-dark" value="" selected=""
                                                disabled="">Select Type</option>
                                            <option class="text-white bg-dark" value="driving-license">Driving License
                                            </option>
                                            <option class="text-white bg-dark" value="passport">Passport</option>
                                            <option class="text-white bg-dark" value="national-id">National ID
                                            </option>
                                        </select>
                                    </div>
                                </div>

                            </form>
                        </div> --}}

                        <div id="tab4" class="content">
                            <form method="post" action="https://al-safa-marwa.com/user/addressVerification"
                                enctype="multipart/form-data">
                                <input type="hidden" name="_token"
                                    value="SfmQz39FtESJRiwutjtkcva1oLsLAHOkrPFwWXpO">
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label golden-text">Address Proof <span
                                                class="text-danger">*</span> </label><br>

                                        <div class="fileinput fileinput-new " data-provides="fileinput">
                                            <div class="fileinput-new thumbnail " data-trigger="fileinput">
                                                <img class="w-150px "
                                                    src="https://al-safa-marwa.com/assets/admin/images/default.png"
                                                    alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail wh-200-150 ">
                                            </div>

                                            <div class="img-input-div">
                                                <span class="btn btn-success btn-file">
                                                    <span class="fileinput-new "> Select Image </span>
                                                    <span class="fileinput-exists"> Change</span>
                                                    <input type="file" name="addressProof" value=""
                                                        accept="image/*">
                                                </span>
                                                <a href="#" class="btn btn-danger fileinput-exists"
                                                    data-dismiss="fileinput"> Remove</a>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <button type="submit" class="gold-btn">
                                    Submit </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
