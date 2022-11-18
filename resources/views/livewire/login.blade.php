<div>
    <x-slot name='title'>Login</x-slot>

    <!-- PAGE-BANNER -->
    <style>
        .page-banner {
            background-image: url(img/logo.jpeg);
        }
    </style>

    <!-- page banner -->
    <section class="page-banner">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE-BANNER -->
    <section class="login-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="login-box">
                        <form wire:submit.prevent='login' method="post">
                            @csrf
                            <div class="box mb-4">
                                <h4 class="golden-text">your email </h4>
                                <div class="input-group">
                                    <div class="img">
                                        <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/email2.png"
                                            alt="email img" />
                                    </div>
                                    <input type="text" wire:model.lazy="email" class="form-control"
                                        placeholder="Email " />
                                    @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="box mb-4">
                                <h4 class="golden-text">
                                    Your password <a href="https://al-safa-marwa.com/password/reset"
                                        class="golden-text">Forget password?</a>
                                </h4>
                                <div class="input-group">
                                    <div class="img">
                                        <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/padlock.png"
                                            alt="password img" />
                                    </div>
                                    <input type="password" wire:model.lazy="password" class="form-control"
                                        placeholder="Password" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 bottom">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                        id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remember me </label>
                                </div>
                                <span class="text-end">
                                    <p>
                                        New User? <a href="https://al-safa-marwa.com/register"
                                            class="golden-text">Register</a>
                                    </p>
                                </span>
                            </div>
                            <button class="gold-btn-block" type="submit">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
