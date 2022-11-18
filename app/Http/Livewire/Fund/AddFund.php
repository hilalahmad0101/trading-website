<?php

namespace App\Http\Livewire\Fund;

use App\Models\Fund;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;


class AddFund extends Component
{
    public $title;
    public $showModal=false;
    public $detail=false;
    public $amount;
    public $last_id;
    public $data;

    public function mount()
    {
       
    }
    public function render()
    {
        if($this->last_id){
            $this->data=Fund::findOrFail($this->last_id);
        }
        return view('livewire.fund.add-fund')->layout('layout.app');
    }

    public function showModel($title)
    {
        $this->title=$title;
        $this->showModal=true;
    }

    public function hideModal()
    {
        $this->title="";
        $this->showModal=false;
    }


    public function nextStep()
    {
        $fund=new Fund();
        $charge=($this->amount * 0.05)+2;
        $payable=$this->amount+$charge;
        $total_pkr=$payable * 250;
        $fund->user_id=Auth::user()->id;
        $fund->amount=$this->amount;
        $fund->gate_way=$this->title;
        $fund->charge=$charge;
        $fund->payable=$payable;
        $fund->total_pkr=$total_pkr;
        $fund->transaction_id=Str::uuid();
        $fund->save();
        $this->last_id=$fund->id;
        $this->detail=true;
    }
}
