@props([
    'type' => 'date',
    'date' => '',
    'label' => ''
])
@php
    if(!$date) {
        if($type === 'date') {
            $date = date("Y-m-d");
        } else {
            $date = date('Y-m');
        }
    }
@endphp
<input type="{{ $type }}" value="{{ $date }}" id="{{ $label }}">
