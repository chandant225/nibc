<div>
    @foreach($data as $val)
      <button wire:click="filtercollege('{{$val}}')" class="courses_college_btn">{{$val}}</button>
    @endforeach

    <div>
        @if(!$colleges)
           <p  style="margin-top:18px; font-size: 20px;">click above to see the colleges</p>
        @elseif(count($colleges) === 0)
            <p style="margin-top:18px; font-size: 20px;">No colleges available for this course</p>
        @elseif(count($colleges) >= 1)
        <div style="margin-top: 30px;" class="row">
        @foreach($colleges as $college)
           <div class="col-12">
             <ul>
                 <li>
                    <div class="d-flex justify-content-start align-items-center w-50 shadow-sm rounded">
                      <a href="{{route('college_details',['country_slug'=> $college->country_slug,'slug'=> $college->slug])}}"><img style="width: 10vw;height: 12vh;" src="/storage/{{$college->image}}" alt="{{$college->title}}" /></a>
                      <h6 class="ms-4 mt-3"><a class="card-title text-center" href="{{route('college_details',['country_slug'=> $college->country_slug,'slug'=> $college->slug])}}">{{$college->title}}</a></h6>
                    </div>
                </li>
             </ul>
           </div>
        @endforeach
        </div>
        @endif
    </div>
</div>
