<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use App\Models\Doctor;
use Livewire\Component;

class Doctors extends Component
{

    public $doctorPatients = [];
    public $allDoctors = [];

    public function mount()
    {
        $this->allDoctors = Doctor::all();
        $this->doctorPatients =  [['doctor_id' => '', 'nickname' => '', 'phonenumber' => '', 'region' => '']];
    }

    public function addContact()
    {
        $this->doctorPatients[] = ['doctor_id' => '', 'nickname' => '', 'phonenumber' => '', 'region' => ''];
    }

    public function removeContact($index)
    {
        unset($this->doctorPatients[$index]);
        $this->doctorPatients = array_values($this->doctorPatients);
    }

    public function render()
    {
        info($this->doctorPatients);
        return view('livewire.doctors');
    }
    
}
