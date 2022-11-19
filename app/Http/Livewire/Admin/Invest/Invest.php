<?php

namespace App\Http\Livewire\Admin\Invest;

use App\Models\Invest as ModelsInvest;
use Livewire\Component;

class Invest extends Component
{
    public function render()
    {
        $invests = ModelsInvest::latest()->get();
        return view('livewire.admin.invest.invest')->layout('layout.admin-app');
    }

    public function delete($id)
    {
        $result = ModelsInvest::findOrFail($id)->delete();
        if ($result) {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'message' => 'Invest Delete Successfully'
            ]);
        }
    }
}
