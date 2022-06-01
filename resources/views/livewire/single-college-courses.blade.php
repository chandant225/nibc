<div>
    {{-- @if ($courseData)
        @foreach ($courseData as $course)
            <button wire:click="filterCourse('{{ $course->degree_slug }}')">{{ $course->degree_slug }}</button>
        @endforeach

    @endif --}}

    <div>
        @if (!$courseData)
            <p style="margin-top:18px; font-size: 20px;">click above to see the colleges</p>
        @elseif(count($courseData) === 0)
            <p style="margin-top:18px; font-size: 20px;">No colleges available for this course</p>
        @elseif(count($courseData) >= 1)
            <div style="margin-top: 30px;" class="row">
                @foreach ($courseData as $course)
                    <div class="col-12">
                        <ul>
                            <li>
                                <div class="d-flex justify-content-start align-items-center w-75 shadow-sm rounded">
                                    <a href=""><img style="width: 10vw;height: 12vh;"
                                            src="/storage/{{ $course->image }}" alt="{{ $course->title }}" /></a>
                                    <h6 class="ms-4 mt-3"><a class="card-title text-center"
                                            href="">{{ $course->title . '-' . strtoupper($course->degree_slug) }}</a>
                                    </h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
