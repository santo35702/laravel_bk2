@if ($errors->any())
    <div {{ $attributes }}>
        {{-- <h4 class="alert-heading font-medium">{{ __('Whoops! Something went wrong.') }}</h4> --}}
        <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

        {{-- <hr> --}}
        <ul class="mt-3 list-disc list-inside text-sm text-red-600 nav">
            @foreach ($errors->all() as $error)
                <li class="mb-0"><i class="fas fa-arrow-right"></i> {{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
