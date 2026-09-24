@props(['name', 'label', 'required' => false])
<div>
    <label for="{{ $name }}" class="font-semibold text-slate-900">{{ $label }} @if($required)<span aria-hidden="true">*</span>@endif</label>
    {{ $slot }}
    @error($name)<p id="{{ $name }}-error" class="field-error">{{ $message }}</p>@enderror
</div>
