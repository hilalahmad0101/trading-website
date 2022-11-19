<?php

namespace App\Http\Livewire\Admin\Invest;

use App\Models\Invest;
use Livewire\Component;

class AddInvest extends Component
{
    public $package_name,$price_range,$monthly_invest,$invest_period;
    public function render()
    {
        return view('livewire.admin.invest.add-invest')->layout('layout.admin-app');
    }

    public function save()
    {
        $validation=$this->validate([
            
            'package_name'=>'required',
            'price_range'=>'required',
            'monthly_invest'=>'required',
            'invest_period'=>'required',
        ]);
      $result=Invest::create($validation);
      if($result){
        $this->dispatchBrowserEvent('alert',
        [
            'type'=>'success',
            'message'=>'Invest Add Successfully'
        ]);
      }
    }
}
