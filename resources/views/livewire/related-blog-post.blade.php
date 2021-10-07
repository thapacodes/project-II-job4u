<div>
    <h3 class="fw-600">Relate Post</h3>
    <div class="row mt-5">
        @foreach ($pageArray as $page)
            <div class="col-lg-3 col-lg-6 mb-4">
                <div class="card rounded-0">
                    <div class="card-body">
                        <h4>{{ $page->title }}</h4>
                        <p class="m-0">{{ \Carbon\Carbon::parse($page->created_at)->format('M d Y') }}</p>
                        <p class="m-0 text-ellipses">
                            {{ $page->description }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
