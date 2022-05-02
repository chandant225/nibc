@extends('layouts.app')



@section('content')

<div>
    @if($search_results->IsEmpty())

      <p>sorry we couldn't find ant data you are looking for</p>
    @elseif($search_results->IsNotEmpty())
    <div class="grid grid-cols-3 gap-4">
       @foreach($search_results as $data)
        <div class="shadow"> 
            <img src="/storage/{{$data->image}}" class="object-cover" alt="" />
            <p>{{$data->title}}</p>
        </div>     

       @endforeach
    </div>
    @endif
</div>

@endsection