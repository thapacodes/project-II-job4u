{{-- <section class="container mt-5">
    <a href="{{ env('APP_URL') }}/blog/slug" class="card text-decoration-none text-dark">
        <div class="card-body">
            <h3 class="h3">Managing Cross Cultural Remote Teams: Considerations Every Team Should Have</h3>
            <p class="m-0 my-3 fw-500">OCT 1 2021</p>
            <p class="m-0 text-ellipses">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint laudantium incidunt natus corporis consequuntur doloremque, sunt veniam ducimus asperiores ipsa quos eaque adipisci id quidem delectus autem harum. Itaque, sequi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint laudantium incidunt natus corporis consequuntur doloremque, sunt veniam ducimus asperiores ipsa quos eaque adipisci id quidem delectus autem harum. Itaque, sequi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint laudantium incidunt natus corporis consequuntur doloremque, sunt veniam ducimus asperiores ipsa quos eaque adipisci id quidem delectus autem harum. Itaque, sequi!
            </p>
        </div>
    </a>
</section> --}}

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="input-group input-group-lg">
                    <span class="input-group-text rounded-0 bg-transparent" id="search_page">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.5 11H11.71L11.43 10.73C12.41 9.59 13 8.11 13 6.5C13 2.91 10.09 0 6.5 0C2.91 0 0 2.91 0 6.5C0 10.09 2.91 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11V11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z"
                                fill="#222" />
                        </svg>

                    </span>
                    <input wire:model="search" type="text" class="form-control rounded-0 bg-transparent"
                        aria-label="Page search input" aria-describedby="search_page"
                        placeholder="Search for post titles . . .">
                </div>
            </div>
            <div class="col-lg-4">
                <label for="job_category" class="form-label d-flex align-items-center m-0 mt-3 fw-500">
                    Post Category
                </label>
                <select id="job_category" wire:model="category" class="form-control form-control-lg rounded-0">
                    <option value="">Select Job Category</option>
                    <option value="Day in a life">Day in a life</option>
                    <option value="Hiring">Hiring</option>
                    <option value="Job hunting">Job hunting</option>
                    <option value="Working">Working</option>
                    <option value="Job4u news">Job4u news</option>
                    <option value="Events">Events</option>
                    <option value="Reports">Reports</option>
                    <option value="Resources">Resources</option>
                    <option value="Design">Design</option>
                    <option value="Development">Development</option>
                    <option value="Tutorial">Tutorial</option>
                    <option value="Guide">Guide</option>
                    <option value="others">Others</option>
                </select>
            </div>
        </div>
        @if(count($pageArray) > 0)
        <div class="row mt-5">
            @foreach ($pageArray as $page)
                <div class="col-lg-4 col-md-6 my-3">
                    <a href="{{ env('APP_URL') }}/blog/{{ $page->slug }}" class="card text-decoration-none text-dark rounded-0">
                        <div class="card-body">
                            <h3 class="h3">{{ $page->title }}</h3>
                            <div class="d-flex align-items-center">
                                <p class="m-0 my-3 fw-500 me-3">{{ \Carbon\Carbon::parse($page->created_at)->format('M d Y') }}</p>
                                <p class="badge bg-danger">{{ $page->category }}</p>
                            </div>
                            <p class="m-0 text-ellipses">
                                {{ $page->description }}
                            </p>
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
        <div class="card mt-5">
            <div class="card-body">
                <p class="m-0 fs-20 fw-500 text-dark">No result found</p>
            </div>
        </div>
        @endif
    </div>
</section>
