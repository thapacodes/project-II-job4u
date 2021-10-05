<div class="container mt-5">
    <h2 class="fw-700">{{ $category }}</h2>
            {{-- <h2>Job Category Name</h2> --}}
            @if (count($pageArray) > 0)
                <div class="row">
                    <!-- Display Searched Content Here! -->
                    @foreach ($pageArray as $page)
                        <div class="col-12 my-4">
                            <a class="card px-4 rounded-0 position-relative text-decoration-none text-black"
                                href="{{ env('APP_URL') }}/job/{{ $page->slug }}">
                                <div class="card-body">
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
                            </a>
                        </div>
                    @endforeach
                    <div class="col-12">
                        <div>
                            {{ $pageArray->links('components.general.pagination') }}
                        </div>
                    </div>
                </div>
            @else
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="m-0 fs-20 fw-500 text-dark">No result found</p>
                    </div>
                </div>
            @endif
            <div class="mt-5">
                <a href="{{ env('APP_URL') }}/job" class="btn btn-outline-danger rounded-0">More</a>
            </div>
</div>
