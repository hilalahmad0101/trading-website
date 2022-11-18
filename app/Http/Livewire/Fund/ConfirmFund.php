<?php

namespace App\Http\Livewire\Fund;

use App\Models\Fund;
use Livewire\Component;
use Livewire\WithFileUploads;

class ConfirmFund extends Component
{

    public $edit_id;
    public $type;

    public $sender_name;
    public $sender_account_no;
    public $screenshot;
    public $data;

    use WithFileUploads;
    public function mount($id)
    {
        $this->edit_id = $id;
        $this->data = Fund::findOrFail($id);
        $this->type = $this->data->gate_way;
    }
    public function render()
    {

        return view('livewire.fund.confirm-fund')->layout('layout.app');
    }

    public function update()
    {

        $fund = Fund::findOrFail($this->edit_id);
        $filename = "";
        if ($this->screenshot) {
            $filename = $this->screenshot->store('payment', 'public');
        }

        $fund->sender_account_no = $this->sender_account_no;
        $fund->sender_name = $this->sender_name;
        $fund->screenshot = $filename;
        $fund->save();
        return redirect(route('fund'));
    }
}
