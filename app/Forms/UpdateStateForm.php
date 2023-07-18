<?php

namespace App\Forms;

use App\Models\Country;
use ProtoneMedia\Splade\AbstractForm;
use ProtoneMedia\Splade\FormBuilder\Select;
use ProtoneMedia\Splade\FormBuilder\Submit;
use ProtoneMedia\Splade\FormBuilder\Text;
use ProtoneMedia\Splade\SpladeForm;

class UpdateStateForm extends AbstractForm
{
    public function configure(SpladeForm $form)
    {
        $form
            ->method('PUT')
            ->class('space-y-4');
    }

    public function fields(): array
    {
        return [
            Text::make('name')
                ->label(__('Nombre'))
                ->rules(['required', 'max:100', 'min:3']),
            Select::make('country_id')
                ->label(__('País'))
                ->options(Country::pluck('name', 'id')->toArray())
                ->rules(['required']),

            Submit::make()
                ->label(__('Modificar')),
        ];
    }
}
