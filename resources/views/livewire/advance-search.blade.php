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
                        placeholder="Search for Job titles . . .">
                </div>
            </div>
            <div class="col-lg-4">
                <label for="job_category" class="form-label d-flex align-items-center m-0 mt-3 fw-500">
                    Job Category
                </label>
                <select id="job_category" wire:model="category" class="form-control form-control-lg rounded-0">
                    <option value="">Select Job Category</option>
                    <option value="design">Design</option>
                    <option value="full-stack-programming">Full Stack Programming</option>
                    <option value="front-end-programming">Front End Programming</option>
                    <option value="back-end-programming">Back End Programming</option>
                    <option value="game-dev">Game Dev</option>
                    <option value="app-dev">App Dev</option>
                    <option value="customer-support">Customer Support</option>
                    <option value="devops-and-sysadmin">Devops and Sysadmin</option>
                    <option value="sales-and-marketing">Sales and Marketing</option>
                    <option value="management-and-finance">Management and Finance</option>
                    <option value="product">Product</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <div class="col-lg-4">
                <label for="job_type" class="form-label d-flex align-items-center m-0 mt-3 fw-500">
                    Job Type
                </label>
                <select id="job_type" wire:model="type" class="form-control form-control-lg rounded-0">
                    <option value="">Select Job Type</option>
                    <option value="Full-Time">Full-Time</option>
                    <option value="Part-Time">Part Time</option>
                    <option value="Contract">Contract</option>
                    <option value="Internship">Internship</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <div class="col-lg-4">
                <label for="fully_remote" class="form-label d-flex align-items-center m-0 mt-3 fw-500">
                    Fully Remote
                </label>
                <select id="fully_remote" wire:model="fully_remote" class="form-control form-control-lg rounded-0">
                    <option value="">choose</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            {{-- <div class="col-lg-4">
                <label for="work_region" class="form-label d-flex align-items-center m-0 mt-3 fw-500">
                    Work Region
                </label>
                <select id="work_region" wire:model="work_region" class="form-control form-control-lg rounded-0">
                    <option value="">Select Work Region</option>
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Pokhara">Pokhara</option>
                    <option value="Lalitpur">Lalitpur</option>
                    <option value="Bhaktapur">Bhaktapur</option>
                    <option value="Biratnagar">Biratnagar</option>
                    <option value="Birgunj">Birgunj</option>
                    <option value="Bharatpur">Bharatpur</option>
                    <option value="Hetauda">Hetauda</option>
                    <option value="Dharan">Dharan</option>
                    <option value="Butwal">Butwal</option>
                    <option value="Dhangadi">Dhangadi</option>
                    <option value="Nepalgunj">Nepalgunj</option>
                    <option value="Itahari">Itahari</option>
                    <option value="Kirtipur">Kirtipur</option>
                    <option value="Tulsipur">Tulsipur</option>
                    <option value="Bhimdatta">Bhimdatta</option>
                    <option value="Siddharthanagar">Siddharthanagar</option>
                    <option value="Birendranagar">Birendranagar</option>
                    <option value="Madhyapur Thimi">Madhyapur Thimi</option>
                    <option value="Dhankuta">Dhankuta</option>
                    <option value="Banepa">Banepa</option>
                    <option value="Rajbiraj">Rajbiraj</option>
                    <option value="Lahan">Lahan</option>
                    <option value="Inaruwa">Inaruwa</option>
                    <option value="Tansen">Tansen</option>
                    <option value="Damak">Damak</option>
                    <option value="Bhadrapur">Bhadrapur</option>
                    <option value="Other">Other ( Do not specify )</option>
                </select>
            </div> --}}
        </div>
        <div>
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
        </div>
    </div>
</section>
