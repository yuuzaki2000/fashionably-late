<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class Modal extends Component
{

    public $contacts;
    public $contact;


    public function mount($id){
        $this->contacts = Contact::all();
        $this->contact = Contact::find($id);
    }

    public function delUser($id){
        /* $this->contacts = $this->contacts->filter(function($value, $key) use ($id){
            return $value['id'] != $id;
        });  */
        Contact::find($id)->delete();
        return redirect('/admin');
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
