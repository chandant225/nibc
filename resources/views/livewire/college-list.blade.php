<div>
      
    @foreach($countries as $country)
     <button style="font-size: 20px;padding: 4px 24px;margin-left:5px;" wire:click="filtercollege('{{$country->slug}}')" class="tab-btn {{$active ==$country->slug ? 'activee' : ''}}">{{$country->title}}</button>
 
    @endforeach
         @if($filtered_colleges)
        <div class="row py-3" id="college-home">
        @foreach($filtered_colleges as $college)
             <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="item">
                  <div class="single-course-inner shadow">
                    <div class="thumb">
                      <a href="{{route('college_details',['country_slug'=> $college->country_slug,'slug'=> $college->slug])}}"><img src="/storage/{{$college->image}}" alt="{{$college->title}}" class="card-image" /></a>
                    </div>
                  <h5 class="ms-4 mt-3"><a class="card-title" href="{{route('college_details',['country_slug'=> $college->country_slug,'slug'=> $college->slug])}}">{{$college->title}}</a></h5>
                 <div class="text-right p-3">
                     <a href="{{route('college_details',['country_slug'=> $college->country_slug,'slug'=> $college->slug])}}"><button class="readmore-text border-btn">view details</button></a>
                  </div>
             </div>
             </div>
             </div>
        @endforeach
        </div>
        @endif

        <center>
          <button class="loadmore-btn"><span>Loadmore </span></button>
        </center>
</div>

  <script>
        var divItems = $('#college-home > div').length;
        if(divItems > 3){
        var e = $('#college-home > div').slice(3).slideUp();
        $('.loadmore-btn').on('click', function () {
            $('#college-home > div').slice(0,6).slideDown();
            $(this).hide();
        });
    }
    if(divItems < 4){
        $('.loadmore-btn').hide();
    }
    </script>




