@foreach ($cardReferences as $referans)
<div class="pb-2 pb-md-0">
    <a href="{{$referans['url']}}" class="text-center pt-2">
        <img class="img-fluid" src="{{$referans['image']}}" alt="{{$referans['alt']}}">
    </a>
</div>
@endforeach