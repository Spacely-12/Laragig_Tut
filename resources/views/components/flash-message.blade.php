{{-- @if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
        <p>
            {{session('message')}}
        </p>
    </div>   
@endif --}}


@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

{{-- {{ session('message') }} --}}