@if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('id')))
    <x-livewire-tables::table.cell>
        {{ $row->id }}
    </x-livewire-tables::table.cell>
@endif

@if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('name')))
    <x-livewire-tables::table.cell>
        {{ $row->name }}
    </x-livewire-tables::table.cell>
@endif

@if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('email')))
    <x-livewire-tables::table.cell>
        {{ $row->email }}
    </x-livewire-tables::table.cell>
@endif

@if (!$columnSelect || ($columnSelect && $this->isColumnSelectEnabled('acciones')))
    <x-livewire-tables::table.cell>
        <div>
            <a href="{{ route('admin.users.edit', $row) }}" class="text-primary ml-1"><i class="fas fa-user-tag fa-lg"></i></i></a>
            <a href="#" class="text-danger ml-1"><i class="fas fa-trash-alt fa-lg"></i></a>
        </div>
    </x-livewire-tables::table.cell>
@endif




