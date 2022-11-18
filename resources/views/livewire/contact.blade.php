<div>
    <x-slot name='title'>Contact</x-slot>

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
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE-BANNER -->

    <!-- CONTACT -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="header-text-full mb-5">
                        <h2>GET IN TOUCH</h2>
                        <p>Let's Ask Your Questions</p>
                    </div>
                    <div class="box mb-5">
                        <div class="img">
                            <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/location2.png"
                                alt="location image" />
                        </div>
                        <div class="text">
                            <h4 class="golden-text">Our Location</h4>
                            <p>More than 180+ Countries working</p>
                        </div>
                    </div>
                    <div class="box mb-5">
                        <div class="img">
                            <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/email2.png"
                                alt="email image" />
                        </div>
                        <div class="text">
                            <h4 class="golden-text">email address</h4>
                            <p>info@income-gap.com</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="img">
                            <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/phone2.png"
                                alt="phone image" />
                        </div>
                        <div class="text">
                            <h4 class="golden-text">company number</h4>
                            <p>https://wa.me/message/A3MIF4TCCXTUA1</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="contact-box">
                        <form wire:submit.prevent='sendMessage'>
                            @csrf
                            <div>
                                <h4 class="golden-text">Full name</h4>
                                <div class="input-group mb-4">
                                    <div class="img">
                                        <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/edit.png"
                                            alt="edit img" />
                                    </div>
                                    <input type="text" wire:model.lazy="fullname" value="" class="form-control"
                                        placeholder="Full Name" />
                                        @error('fullname')
                                            <span style="color:red;">{{ $message }}</span>
                                        @enderror
                                </div>
                            </div>
                            <div>
                                <h4 class="golden-text">your email</h4>
                                <div class="input-group mb-4">
                                    <div class="img">
                                        <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/email2.png"
                                            alt="edit img" />
                                    </div>
                                    <input type="email" wire:model.lazy="email" value="" class="form-control"
                                        placeholder="Email Address"" />
                                        @error('email')
                                        <span style="color:red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <h4 class="golden-text">Subject</h4>
                                <div class="input-group mb-4">
                                    <div class="img">
                                        <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/email2.png"
                                            alt="edit img" />
                                    </div>
                                    <input type="text" wire:model.lazy="subject" value="" class="form-control"
                                        placeholder="Subject" />
                                        @error('subject')
                                        <span style="color:red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <h4 class="golden-text">your message</h4>
                                <div class="input-group mb-4">
                                    <div class="img">
                                        <img src="https://al-safa-marwa.com/assets/themes/deepblack/img/icon/edit.png"
                                            alt="" />
                                    </div>
                                    <textarea class="form-control" wire:model.lazy="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    @error('message')
                                    <span style="color:red;">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <button type="submit" class="gold-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /CONTACT -->

</div>
