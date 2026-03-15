<?php

use Livewire\Component;

new class extends Component {
    public $form;

    public function mount()
    {
        $this->form = new PostForm();
    }

    public function submit()
    {
        $this->form->submit();
    }
};
?>

<div>
    <form wire:submit="submit">
        <input type="text" wire:model="form.title">
        <input type="text" wire:model="form.body">
        <button type="submit">Submit</button>
    </form>
</div>
