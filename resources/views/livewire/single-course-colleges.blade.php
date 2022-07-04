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
           <div class="col-lg-4 col-md-6 col-12 course-area">
                        <div class="item">
                       <div class="single-course-inner shadow">
                        <div class="thumb"> 
                          <a  href="{{route('college_details',['country_slug'=> $college->country_slug,'slug'=> $college->slug])}}"> <img src="/storage/{{ $college->image }}" class="card-image" alt="{{$college->title}}" /></a>
                        </div>
                            <h5 class="px-3 py-3"><a class="card-title text-center" href="{{route('college_details',['country_slug'=> $college->country_slug,'slug'=> $college->slug])}}">{{$college->title}}</a></h5>
                        </div>     
                      </div>  
                    </div>
        @endforeach
        </div>
        @endif
    </div>
</div>
