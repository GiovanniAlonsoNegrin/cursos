<div>
    @if(isset($showFilters) && $showFilters === true)
        @if ($showFilters && count($this->getFiltersWithoutSearch()))
            <div class="mb-3">
                <small>@lang('Applied Filters'):</small>

                @foreach($filters as $key => $value)
                    @if ($key !== 'search' && strlen($value))
                        <span
                            wire:key="filter-pill-{{ $key }}"
                            class="badge badge-pill badge-info d-inline-flex align-items-center"
                        >
                            {{ $filterNames[$key] ?? collect($this->columns())->pluck('text', 'column')->get($key, ucwords(strtr($key, ['_' => ' ', '-' => ' ']))) }}:
                            @if(isset($customFilters[$key]) && method_exists($customFilters[$key], 'options'))
                                {{ $customFilters[$key]->options()[$value] ?? $value }}
                            @else
                                {{ ucwords(strtr($value, ['_' => ' ', '-' => ' '])) }}
                            @endif

                            <a
                                href="#"
                                wire:click.prevent="removeFilter('{{ $key }}')"
                                class="text-white ml-2"
                            >
                                <span class="sr-only">@lang('Remove filter option')</span>
                                <svg style="width:.5em;height:.5em" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                                    <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7" />
                                </svg>
                            </a>
                        </span>
                    @endif
                @endforeach

                <a
                    href="#"
                    wire:click.prevent="resetFilters"
                    class="badge badge-pill badge-light"
                >
                    @lang('Clear')
                </a>
            </div>
        @endif
    @endif
</div>
