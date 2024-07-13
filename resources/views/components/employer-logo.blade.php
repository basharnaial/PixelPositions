@props(['employer', 'width'=> 90])
{{--<img src="https://picsum.photos/seed/{{ rand(0,100) }}/{{ $width }}" class="rounded-xl" alt="">--}}
<img src="{{ asset($employer->logo) }}" class="rounded-xl" alt="" width="{{ $width }}">
