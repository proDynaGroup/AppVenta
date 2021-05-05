@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-sm text-black-600']) }}>{{ $message }}</p>
@enderror
