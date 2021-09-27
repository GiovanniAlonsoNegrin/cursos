@if(isset($addButtonEnabled))
    <div class="w-auto h-auto ml-0">
        @switch($addTheTag)
            @case('button')
                <button class="btn btn-primary ml-1"
                        :type="$addAttributes['type]"
                        :data-target="$addAttributes['data-target]">
                    Nuevo
                </button>
            @break
            @case('a')
                <a {!! $addAtributtes !!} class="flex-column h-auto align-items-center ml-1 px-4 h-auto btn btn-primary">
                    Nuevo
                </a>
            @break
        @endswitch
    </div>
@endif
