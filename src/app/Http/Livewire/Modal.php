<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class Modal extends Component
{

    public $contacts;

    public function mount(){
        $this->contacts = Contact::all();
    }

    public function delUser($id){
        $this->contacts = $this->contacts->filter(function($value, $key) use ($id){
            return $value['id'] != $id;
        });
        Contact::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
