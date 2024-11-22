<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Component;

class UserMain extends Component
{
    public $isOpen=false;
    public $search,$active=true;
    public UserForm $form;
    public ?User $user;

    public function render()
    {
        $users=User::where('name','LIKE','%'.$this->search.'%')->paginate();
        return view('livewire.admin.user-main',compact('users'));
    }


    public function confirmSimple($user): void{
        $this->dialog()->confirm([
            'title'=> '¿Seguro que deseas eliminar el registro?',
            'icon'=> 'error',
            'method'=> 'destroy',
            'params'=> $user
        ]);
    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['user']);
        $this->resetValidation();
    }

    public function edit(User $user){
        // dd($member);
        $this->user=$user;
        $this->form->fill($user);
        $this->isOpen=true;
        $this->resetValidation();
    }

    public function destroy(User $user){

        //$member->delete();
        $user->update(['active'=>false]);
        //return redirect()->route('members');
        $this->notification()->send([
            'icon' => 'info',
            'title' => 'El miembro paso al grupo inactivos',
        ]);
    }

    public function store(){
        $this->validate();
        if(!isset($this->user->id)){
            User::create($this->form->all());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Registro creado...',
            ]);
        }else{
            $this->user->update($this->form->all());
            $this->notification()->send([
                'icon' => 'success',
                'title' => 'Registro actualizado...',
            ]);
        }
        $this->reset(['isOpen']);
    }


    public function renovate(User $user){
        $user->update(['active'=>true]);
        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Se restauró al miembro al grupo activos',
        ]);
    }

    public function updatingSearch(){
        $this->resetPage();
    }

}