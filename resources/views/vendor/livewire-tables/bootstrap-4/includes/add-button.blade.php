@if(isset($addButtonEnabled) && $addButtonEnabled === true)
    <div class="w-auto h-auto ml-0">
        @switch($addTheTag)
            @case('button')
                <button type="{{ $addAttributes['type'] }}"
                          data-target="{{ $addAttributes['data-target'] }}">
                    {{ $ContentButton }}
                </button>
            @break
            @case('a')
                <a class="flex-column h-auto align-items-center ml-1 px-4 h-auto btn btn-primary"
                   href="{{ $addAttributes['href'] ? route($addAttributes['href']) : 'javascript:void(0)' }}">
                    {{ $contentA }}
                </a>
            @break
        @endswitch
    </div>
@endif
