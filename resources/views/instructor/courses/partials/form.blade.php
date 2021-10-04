<div class="mb-4">
    {!! Form::label('title', 'Título del curso:') !!}
    {!! Form::text('title', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('title') ? 'border-red-600' : ''), 'required']) !!}

    @error('title')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('slug', 'Slug del curso:') !!}
    {!! Form::text('slug', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('slug') ? 'border-red-600' : ''), 'required']) !!}

    @error('slug')
    <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('subtitle', 'Subtítulo del curso:') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('subtitle') ? 'border-red-600' : ''), 'required']) !!}

    @error('subtitle')
    <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('description', 'Descripción del curso:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('description') ? 'border-red-600' : '')]) !!}

    @error('description')
    <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror
</div>

<div class="grid grid-cols-3 gap-4">
    <div>
        {!! Form::label('category_id', 'Categoría:') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-input block w-full mt-1', 'required']) !!}
    </div>

    <div>
        {!! Form::label('level_id', 'Niveles:') !!}
        {!! Form::select('level_id', $levels, null, ['class' => 'form-input block w-full mt-1', 'required']) !!}
    </div>

    <div>
        {!! Form::label('price_id', 'Precio:') !!}
        {!! Form::select('price_id', $prices, null, ['class' => 'form-input block w-full mt-1', 'required']) !!}
    </div>
</div>

<h1 class="text-2xl font-bold mt-8 mb-2">Imagen del curso</h1>
<div class="grid grid-cols-2 gap-4">
    <firgure>
        @isset($course->image)
            <img id="picture" class="w-full h-90 object-cover object-center rounded" src="{{ Storage::url($course->image->url) }}" alt="img">
        @else
            <img id="picture" class="w-full h-90 object-cover object-center rounded" src="{{ asset('img/courses/defaultCourseImage.jpg') }}" alt="img">
        @endisset
    </firgure>

    <div>
        <p class="mb-2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ipsa laudantium
            possimus vero? A cupiditate dignissimos distinctio doloribus eaque explicabo fuga
            illum, laudantium nesciunt officia quae quidem quos rerum sequi.
        </p>

        {!! Form::file('file', ['class' => 'form-input w-full' . ($errors->has('file') ? 'border-red-600' : ''), 'id' => 'file', 'accept' => 'image/*']) !!}

        @error('file')
            <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror

    </div>
</div>
