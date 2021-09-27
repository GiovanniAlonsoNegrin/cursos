<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class AdminUserTable extends DataTableComponent
{
    public bool $columnSelect = true;

    public bool $addButtonEnabled = true;
    public $addTheTag       = 'button';
    public $addAttributtes = [
        'type'        => 'button',
        'data-target' => '#'
    ];

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable(),
            Column::make('Nombre', 'name')
                ->sortable(),
            Column::make('Email', 'email')
                ->sortable(),
            Column::make('Acciones')
        ];
    }

    public function query(): Builder
    {
        $query = User::query()
            ->when($this->getFilter('search'), fn ($query, $term) => $query
                ->where('id', 'like', '%'.$term.'%')
                ->orWhere('name', 'like', '%'.$term.'%')
                ->orWhere('email', 'like', '%'.$term.'%'));

        return $query;
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.admin_user_table';
    }

    public function userDelete()
    {
        return User::delete();
    }

}
