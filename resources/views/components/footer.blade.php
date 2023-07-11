<div class="footer mt-5 ">&copy;
    <div class="row">
        <div class="col">
            <span id="year">
                @auth
                    @if (Auth::user()->is_revisor)
                        {{__('ui.Lavori_gia')}}
                    @else
                        <a href="{{ route('revisor.form') }}">{{ __('ui.revisorfoot') }}</a>
                    @endif
                @else
                    <a href="{{ route('revisor.form') }}">{{ __('ui.revisorfoot') }}</a>
                @endauth
            </span>
        </div>
    </div>

    <div class="row">
        <div class="col-12 " >
            <ul class="horizontal-list m-2">
                <li>
                    <x-_locale lang="it" nation='it' />
                </li>
                <li>
                    <x-_locale lang="es" nation='es' />
                </li>
                <li>
                    <x-_locale lang="en" nation='gb' />
                </li>
            </ul>
        </div>
    </div>
</div>
