<?php

use App\Http\Livewire\AboutUs;
use App\Http\Livewire\Admin\Auth\Login as AuthLogin;
use App\Http\Livewire\Admin\Blog\AddBlog;
use App\Http\Livewire\Admin\Blog\Blog as BlogBlog;
use App\Http\Livewire\Admin\Blog\UpdateBlog;
use App\Http\Livewire\Admin\Dashboard as AdminDashboard;
use App\Http\Livewire\Admin\Faq\AddFaq;
use App\Http\Livewire\Admin\Faq\Faq as FaqFaq;
use App\Http\Livewire\Admin\Faq\UpdateFaq;
use App\Http\Livewire\Admin\Invest\AddInvest;
use App\Http\Livewire\Admin\Invest\Invest;
use App\Http\Livewire\Admin\Invest\UpdateInvest;
use App\Http\Livewire\Blog;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Faq;
use App\Http\Livewire\Fund\AddFund;
use App\Http\Livewire\Fund\ConfirmFund;
use App\Http\Livewire\Fund\Fund;
use App\Http\Livewire\Home;
use App\Http\Livewire\Invest\InvestHistory;
use App\Http\Livewire\Login;
use App\Http\Livewire\Payout\Payout;
use App\Http\Livewire\Payout\PayoutHistory;
use App\Http\Livewire\Plan;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Raferral\Raferral;
use App\Http\Livewire\Raferral\RaferralBounes;
use App\Http\Livewire\Register;
use App\Http\Livewire\Transaction;
use App\Http\Livewire\Transfer;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');

Route::get('/plan', Plan::class)->name('plan');
Route::get('/about-us', AboutUs::class)->name('about-us');
Route::get('/blog', Blog::class)->name('blog');
Route::get('/faq', Faq::class)->name('faq');
Route::get('/contact-us', Contact::class)->name('contact-us');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});


Route::middleware(['auth'])->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('dashboard');
        Route::get('/fund', Fund::class)->name('fund');
        Route::get('/invest-history', InvestHistory::class)->name('invest-history');
        Route::get('/add-fund', AddFund::class)->name('add-fund');
        Route::get('/fund/confirm-fund/{id}', ConfirmFund::class)->name('confirm-fund');
        Route::get('/payout', Payout::class)->name('payout');
        Route::get('/payout-history', PayoutHistory::class)->name('payout-history');
        Route::get('/transfer', Transfer::class)->name('money-transfer');
        Route::get('/transaction', Transaction::class)->name('transaction');
        Route::get('/referral', Raferral::class)->name('referral');
        Route::get('/referral-bounes', RaferralBounes::class)->name('referral-bonus');
        Route::get('/profile', Profile::class)->name('profile');
    });
});



// Admin routes


Route::prefix('admin')->group(function () {
    Route::get('/login', AuthLogin::class)->name('admin.login');
});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('/post', BlogBlog::class)->name('admin.post');
    Route::get('/add/post', AddBlog::class)->name('admin.add.blog');
    Route::get('/update/post/{id}', UpdateBlog::class)->name('admin.update.blog');


    // faq
    Route::get('/faq', FaqFaq::class)->name('admin.faq');
    Route::get('/add/faq', AddFaq::class)->name('admin.add.faq');
    Route::get('/update/faq/{id}', UpdateFaq::class)->name('admin.update.faq');

    // Invest
    Route::get('/invest', Invest::class)->name('admin.invest');
    Route::get('/add/invest', AddInvest::class)->name('admin.add.invest');
    Route::get('/update/invest/{id}', UpdateInvest::class)->name('admin.update.invest');
});
