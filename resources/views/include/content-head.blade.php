@hasSection('title')
    <div class="contentHead pt-4">
        <h1>@yield('title')</h1>
    </div>
@else
    <div class="contentHead pt-4 container-xxxl px-5">
        <h1>@yield('title2')</h1>
        <a href="{{url('medya')}}">Geri Dön</a>
    </div>
@endif