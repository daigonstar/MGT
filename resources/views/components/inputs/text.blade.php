@props(['error'])

@php
    $classes = ($error ?? false)
        ? 'form-control border border-danger border-3'
        : 'form-control';
@endphp

<input {!! $attributes->merge(['class' => $classes]) !!}>