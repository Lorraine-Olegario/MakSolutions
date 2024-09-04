<?php

namespace App\Filament\Resources\CompanyResource\Pages;

use App\Filament\Resources\CompanyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Validation\ValidationException;
use Filament\Notifications\Notification;

class CreateCompany extends CreateRecord
{
    protected static string $resource = CompanyResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (\App\Models\Company::query()->count() > 0) {
            Notification::make()
                ->title('Só pode existir uma empresa cadastrada.')
                ->danger()
                ->send();

            abort(redirect()->back());
        }

        return $data;
    }
}
