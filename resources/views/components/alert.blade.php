<div>
    <!-- Well begun is half done. - Aristotle -->
{{--    @if ($errors->any() ?? false)--}}
{{--        @foreach($errors->all() as $error)--}}
{{--            <div clas="bg-red-500 color-white p-2 mb-4">{{ $error }}</div>--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--    @if ($messages->any() ?? false)--}}
{{--        @foreach($messages->all() as $message)--}}
{{--            <div clas="bg-blue-500 color-white p-2 mb-4">{{ $message }}</div>--}}
{{--        @endforeach--}}
{{--    @endif--}}
    <div
    {{ $attributes->merge(['class'=>'rounded my-2 p-2 shadow-black/25 shadow ' . $type]) }}>
    {{ $message }}!
</div>
</div>
