<div style="max-width: 200px;">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        @if (Auth::user())
            @if (Auth::user()['role'] == 'employeer')
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed p-0 py-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Jobs
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-0 bg-light">
                            <div class="card rounded-0">
                                <div class="card-body p-2">
                                    <a href="{{ env('APP_URL') }}/dashboard/post-a-job"
                                        class="text-decoration-none text-dark fw-500">Post a Job</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body p-2">
                                    <a href="{{ env('APP_URL') }}/dashboard/manage-job-post"
                                        class="text-decoration-none text-dark fw-500">Manage Job</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body p-2">
                                    <a href="{{ env('APP_URL') }}/dashboard/manage-applicants"
                                        class="text-decoration-none text-dark fw-500">Manage Applicants</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed p-0 py-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                            aria-controls="flush-collapseFive">
                            Companies
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-0">
                            <div class="card rounded-0">
                                <div class="card-body p-2">
                                    <a href="{{ env('APP_URL') }}/dashboard/add-company-details"
                                        class="text-decoration-none text-dark fw-500">Add Company Details</a>
                                </div>
                            </div>
                            <div class="card rounded-0">
                                <div class="card-body p-2">
                                    <a href="{{ env('APP_URL') }}/dashboard/manage-company-details"
                                        class="text-decoration-none text-dark fw-500">Manage Company Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @else
        <script>
            window.location = "{{ route('login') }}";
        </script>
        @endif
    </div>
</div>
