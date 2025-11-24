<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Filament\Auth\Pages\Register;
use Filament\Forms\Components\TextInput;
use Filament\Support\Components\Component;
use Illuminate\Support\Facades\Auth;

class RegisterCustom extends Register
{
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getNameFormComponent(),
                $this->getUserNameFormComponent(),
                $this->getEmailFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
            ]);
    }

    protected function getUserNameFormComponent(): Component
    {
        return TextInput::make('username')
            ->label(__('Username'))
            ->required()
            ->maxLength(255)
            ->autofocus();
    }
}
