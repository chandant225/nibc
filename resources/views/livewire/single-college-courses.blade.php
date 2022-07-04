<div>
    {{-- @if ($courseData)
        @foreach ($courseData as $course)
            <button wire:click="filterCourse('{{ $course->degree_slug }}')">{{ $course->degree_slug }}</button>
        @endforeach

    @endif --}}

    <div>
        @if (!$courseData)
            <p style="margin-top:18px; font-size: 20px;">No courses available for this college</p>
        @elseif(count($courseData) === 0)
            <p style="margin-top:18px; font-size: 20px;">No courses available for this college</p>
        @elseif(count($courseData) >= 1)
            <div style="margin-top: 30px;" class="row">
                @foreach ($courseData as $course)
                    <!--<div class="col-12">-->
                    <!--    <ul>-->
                    <!--        <li>-->
                    <!--            <div class="d-flex justify-content-start align-items-center w-75 shadow-sm rounded">-->
                    <!--                <a href="{{ route('course.show', ['slug' => $course->slug]) }}"><img-->
                    <!--                        style="width: 10vw;height: 12vh;" src="/storage/{{ $course->image }}"-->
                    <!--                        alt="{{ $course->title }}" /></a>-->
                    <!--                <h6 class="ms-4 mt-3"><a class="card-title text-center"-->
                    <!--                        href="{{ route('course.show', ['slug' => $course->slug]) }}">{{ $course->title }}</a>-->
                    <!--                </h6>-->
                    <!--            </div>-->
                    <!--        </li>-->
                    <!--    </ul>-->
                    <!--</div>-->
                    <div class="col-lg-4 col-md-6 col-12 course-area">
                        <div class="item">
                       <div class="single-course-inner shadow">
                        <div class="thumb"> 
                          <a  href="{{ route('course.show', ['slug' => $course->slug]) }}"> <img src="/storage/{{ $course->image }}" class="card-image" alt="{{$course->title}}" /></a>
                        </div>
                            <h5 class="ps-3 py-3"><a class="card-title" href="{{ route('course.show', ['slug' => $course->slug]) }}">{{$course->title}}</a></h5>
                        </div>     
                      </div>  
                    </div>  
                @endforeach
            </div>
        @endif
    </div>
</div>
