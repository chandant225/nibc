<!-- search section start -->
<div
class="search-area pt-2 pd-bottom-60 mb-3"
style="background-color: #314c7d"
>
<div class="section-title text-center mt-5">
  <h2 class="title text-white">
    Search your preferred country and courses
  </h2>
</div>
<div class="search-boxes container">
  <form method="POST" action="{{route('search_college')}}" class="">
    @csrf
    <select name="country" class="js-example-basic-single">
      <option selected>Country Select</option>
      @if(count($countries) === 0)
      <option>No country avaliable</option>
      @endif
       @foreach($countries as $country)
       <option selected>{{$country->title}}</option>
       @endforeach
    </select>
    <select name="course" class="js-example-basic-single">
      <option selected>Course Select</option>
      @if(count($courses) === 0)
      <option>No courses avaliable</option>
      @endif
       @foreach($courses as $course)
       <option selected>{{$course->title}}</option>
       @endforeach
    
    </select>
    <select name="college" class="js-example-basic-single">
      <option selected>University Select</option>
      <option value="1">No universities avaliable</option>
    </select>
    <button type="submit" class="right-side-btn">
      <i class="fa fa-search"></i>
    </button>
  </form>
</div>
</div>
<!-- search section end -->