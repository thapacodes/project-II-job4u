<div>
    <h3 class="fw-600">Relate Jobs</h3>
    <div class="row mt-3">
        @foreach ($pageArray as $page)
            <div class="col-12 my-4">
                <a class="card rounded-0 position-relative text-decoration-none text-black"
                    href="{{ env('APP_URL') }}/job/{{ $page->slug }}">
                    <div class="card-body px-4">
                        <div class="row align-items-center">
                            <div class="col-lg-3" style="width:130px;">
                                <img class="border border-secondary border-2 rounded-circle"
                                    style="width:100px; height: 100px; object-fit: cover"
                                    src="{{ $page->logo }}" alt="company logo" />
                            </div>
                            @php
                                $companyName = \App\Models\Company::where('uploaded_by', $page->uploaded_by)->first();
                            @endphp

                            <div class="col-lg-5 mt-3 mt-lg-0">
                                @if ($companyName == null)
                                @else
                                    <p class="m-0">Deep Consulting Solutions</p>
                                @endif
                                <h3 class="my-3">{{ $page->title }}</h3>
                                <p class="m-0 text-ellipses">{{ $page->description }}</p>
                                <div class="mt-2">
                                    @if($page->work_region == null)
                                    <p class="m-0">Work place ( Not specified )</p>
                                    @else
                                    <p class="m-0 badge rounded-pill bg-danger" title="work region">{{ $page->work_region }}</p>
                                    @endif

                                    @if($page->fully_remote == 'no')
                                    <p class="m-0 badge rounded-pill bg-danger">Not Remote</p>
                                    @else
                                    <p class="m-0 badge rounded-pill bg-success" title="work region">Fully Remote</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-2 mt-3 mt-lg-0">
                                <p class="m-0 fw-500 fs-10 text-danger">Job Category</p>
                                <p class="m-0 fw-500 fs-20">
                                    {{ $page->category }}
                                </p>
                            </div>
                            <div class="col-lg-2 mt-3 mt-lg-0">
                                <p class="m-0 fw-500 fs-10 text-danger">Job Type</p>
                                <p class="m-0 fw-500 fs-20">
                                    {{ $page->type }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer px-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="m-0">Posted at : <strong>{{ \Carbon\Carbon::parse($page->created_at)->format('d M Y') }}</strong></p>
                            </div>
                            <div class="col-lg-3">
                                <p class="m-0">Education : <strong>{{ $page->education_level }}</strong></p>
                            </div>
                            <div class="col-lg-3">
                                <p class="m-0">Experience : <strong>{{ $page->experience_level }}</strong></p>
                            </div>
                            <div class="col-lg-3">
                                <p class="m-0">Salary Estimate :<br/> <strong>Rs. {{ $page->salary }}</strong></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <a href="{{ env('APP_URL') }}/search" class="text-danger text-decoration-none fw-500 fs-15">Go back to Jobs</a>
</div>
