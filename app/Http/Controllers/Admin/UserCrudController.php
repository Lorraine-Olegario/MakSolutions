<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup(): void
    {
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');
    }

    protected function setupListOperation(): void
    {
        CRUD::column('name');
        CRUD::column('email');
    }

//    protected function setupShowOperation(): void
//    {
//        CRUD::column('name');
//        CRUD::column('email');
//    }


    protected function setupCreateOperation(): void
    {
        CRUD::field('name')->validationRules('required|min:5');
        CRUD::field('email')->validationRules('required|email|unique:users,email');
        CRUD::field('password')->validationRules('required');

        User::creating(static function ($entry) {
            $entry->password = Hash::make($entry->password);
        });
    }

    protected function setupUpdateOperation(): void
    {
        CRUD::field('name')->validationRules('required|min:5');
        CRUD::field('email')->validationRules('required|email|unique:users,email,'.CRUD::getCurrentEntryId());
        CRUD::field('password')->hint('Type a password to change it.');

        User::updating(static function ($entry) {
            if (request('password') === null) {
                $entry->password = $entry->getOriginal('password');
            } else {
                $entry->password = Hash::make(request('password'));
            }
        });
    }
}
