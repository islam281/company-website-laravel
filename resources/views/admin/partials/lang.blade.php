@php

$locale= LaravelLocalization::getCurrentLocale()=="ar" ? 'en':'ar';

@endphp
<li class="nav-item">
<a class="nav-link text-muted my-2" href="{{ LaravelLocalization::getLocalizedURL($locale) }}" id="langSwitcher" >
    {{Str::upper( $locale) }}
</a>
</li>
