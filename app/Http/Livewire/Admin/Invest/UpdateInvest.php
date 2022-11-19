<?php

namespace App\Http\Livewire\Admin\Invest;

use App\Models\Invest;
use Livewire\Component;

class UpdateInvest extends Component
{
    public $package_name,$price_range,$monthly_invest,$invest_period,$_id;
    public function mount($id)
    {
        $invest = Invest::findOrFail($id);
        $this->_id = $id;
        $this->package_name = $invest->package_name;
        $this->price_range = $invest->price_range;
        $this->monthly_invest = $invest->monthly_invest;
        $this->invest_period = $invest->invest_period;
    }
    public function render()
    {
        return view('livewire.admin.invest.update-invest')->layout('layout.admin-app');
    }

    public function save()
    {
        $validation=$this->validate([
            'package_name'=>'required',
            'price_range'=>'required',
            'monthly_invest'=>'required',
            'invest_period'=>'required',
        ]);
      $result=Invest::updateOrCreate($validation,['id'=>$this->_id]);
      if($result){
        $this->dispatchBrowserEvent('alert',
        [
            'type'=>'success',
            'message'=>'Invest Update Successfully'
        ]);
      }
    }
}
