<?php

namespace App\Http\Livewire\Fund;

use App\Models\Fund as ModelsFund;
use Livewire\Component;
use Livewire\WithPagination;

class Fund extends Component
{
    use WithPagination;
    public function render()
    {
        $funds=ModelsFund::orderBy('created_at','DESC')->where('status','!=',0)->paginate(10);
        return view('livewire.fund.fund',compact('funds'))->layout('layout.app');
    }
}
    