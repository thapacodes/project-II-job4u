<section class="container pb-5">
    <form class="card" wire:submit.prevent="save">
        <div class="card-body p-lg-5">
            <div class="mb-3">
                @if (session()->has('page-message'))
                    <div class="alert alert-success rounded-0 alert-dismissible fade show mt-3" role="alert">
                        {{ session('page-message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <div class="row align-items-center my-5">
                <div class="col-12">
                    <h3 class="h3 text-danger fw-700">Tell Us About Your Company</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="company_name" class="form-label d-flex align-items-center">
                        <span class="me-2 fs-20 fw-600">Company Name</span>
                        <span class="badge bg-danger rounded-circle py-2"> </span>
                    </label>
                    <input type="text" wire:model="name" value="{{ $name }}"
                        class="form-control form-control-lg rounded-0 @error('name') is-invalid @enderror"
                        id="company_name" placeholder="Enter your company or organization's name.">
                    @error('name')
                        <div class="text-danger fs-15">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="company_hq" class="form-label d-flex align-items-center">
                        <span class="me-2 fs-20 fw-600">Company HQ</span>
                        <span class="badge bg-danger rounded-circle py-2"> </span>
                    </label>
                    <input type="text" wire:model="hq" value="{{ $hq }}" class="form-control form-control-lg rounded-0 @error('hq') is-invalid @enderror"
                        id="company_hq" placeholder="Where your company is officially headquartered.">
                    @error('hq')
                        <div class="text-danger fs-15">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="company_logo" class="form-label d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">Logo</span>
                    <span class="badge bg-danger rounded-circle py-2"> </span>
                </label>
                <input type="file" wire:model="logo" class="form-control form-control-lg rounded-0 @error('logo') is-invalid @enderror"
                    id="company_logo" placeholder="Your company logo will appear at the top of your listing.">
                @error('logo')
                    <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="company_website" class="form-label d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">Company's Website URL</span>
                    <span class="badge bg-danger rounded-circle py-2"> </span>
                </label>
                <input type="text" wire:model="company_url"
                    class="form-control form-control-lg rounded-0 @error('company_url') is-invalid @enderror"
                    id="company_website" placeholder="Example: https://kitwosd.com/">
                @error('company_url')
                    <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>
            <div wire:ignore class="mb-3">
                <label for="company_description" class="form-label d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">Company Description</span>
                    <span class="badge bg-danger rounded-circle py-2"> </span>
                </label>
                <textarea type="text" wire:model="company_description"
                    class="form-control form-control-lg rounded-0 @error('company_description') is-invalid @enderror"
                    id="company_description">
                    {{ $company_description }}
                </textarea>
                @error('company_description')
                    <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-danger btn-lg rounded-0">Update</button>
            </div>
        </div>
    </form>
</section>

@section('scripts')
    <script>
        function forPageDescription() {
            ClassicEditor
                .create(document.querySelector('#company_description'), {
                    toolbar: {
                        items: [
                            'alignment',
                            'bold',
                            'fontBackgroundColor',
                            'fontFamily',
                            'fontSize',
                            'fontColor',
                            'italic',
                            'bulletedList',
                            'numberedList',
                            '|',
                            'outdent',
                            'indent',
                            '|',
                            'specialCharacters',
                            'strikethrough',
                            'blockQuote',
                            'insertTable',
                            'mediaEmbed',
                            'undo',
                            'redo',
                            'imageUpload',
                            'imageInsert',
                            'link'
                        ]
                    },
                    language: 'en',
                    image: {
                        toolbar: [
                            'imageTextAlternative',
                            'imageStyle:inline',
                            'imageStyle:block',
                            'imageStyle:side',
                            'linkImage'
                        ]
                    },
                    table: {
                        contentToolbar: [
                            'tableColumn',
                            'tableRow',
                            'mergeTableCells',
                            'tableCellProperties',
                            'tableProperties'
                        ]
                    },
                    licenseKey: '',
                })
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        @this.set('company_description', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
                });
        }
        forPageDescription();
    </script>
@stop
