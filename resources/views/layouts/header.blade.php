<header class="navbar navbar-expand-md navbar-light d-print-none">

  <div class="container-fluid">

    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-menu" type="button" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
      <a href="https://www.khn.cz" target="_blank">
        <img class="navbar-brand-image" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Spustí stránky Karvinské hornické nemocnice a.s. v nové záložce" src="{{ asset('img/logo.png') }}" href="https://www.khn.cz" alt="Logo Intranetu KHN a.s." target="_blank">
      </a>
    </h1>
    <form class="form-signin text-center" style="margin: 1px 1px 1px 1px;" action="https://nemocnice.zzsmsk.cz/Home/Login?returnurl=%2FUzavirky%2FPrehled" method="post"><input id="Username" class="form-control" name="Username" required="" type="hidden" value="uzavirky@khn.cz" placeholder="E-mail">
      <span class="field-validation-valid" data-valmsg-for="Username" data-valmsg-replace="true"></span> <input id="Password" class="form-control" name="Password" required="" type="hidden" value="Karvina6" placeholder="Heslo"> <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span><button class="btn btn-primary" type="submit">Přehled uzavírek zdravotnických zařízení</button><input name="__RequestVerificationToken" type="hidden" value="CfDJ8AooIJVF72ZHqAndSQrKnlIcZLtzp3j-w5AIpsvdCIAiK_DcTqneAxBLkpINCaBEs3AjNQOTtuI_BinTiJDjdVHupuWWKG3WE36DXzeoatEY3HDHRYa_PCyGKz4okSoVkkRh38DXO_wpUna6onv6h0w">
    </form>
    <span class="text-muted mx-3">
      Pohotovost IT tel. 724 022 598
    </span>
    <a class="text-muted mx-3" href="http://intranet2" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Spustí původní intranetové stránky v nové záložce" target="_blank">
      Původní intranetové stránky
    </a>

    <div class="nav-text">
      Je {{ \Carbon\Carbon::parse(now())->locale('cs')->dayName }}
      <span class="text-blue">{{ \Carbon\Carbon::parse(now())->format('j. n. Y') }}</span>
      a {{ $svatek[0] }}
    </div>
    <div class="navbar-nav order-md-last flex-row">
      <div class="nav-item d-none d-md-flex nav-item d-none d-md-flex">
        <div class="btn-list">
          @guest
          {{-- <a class="btn hover-shadow-sm" href="{{ route('register') }}" rel="noreferrer">
            <svg class="icon icon-tabler icon-tabler-login text-azure" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
              </path>
              <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
            </svg>
            <span class="d-inline d-sm-inline d-md-none d-lg-inline d-xl-inline btn-icon">{{ __('Register') }}</span>
          </a> --}}
          <a class="btn hover-shadow-sm" href="{{ route('login') }}" rel="noreferrer">
            <svg class="icon text-success px-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <rect x="5" y="11" width="14" height="10" rx="2">
              </rect>
              <circle cx="12" cy="16" r="1"></circle>
              <path d="M8 11v-5a4 4 0 0 1 8 0"></path>
            </svg>
            <span class="d-inline btn-icon d-sm-inline d-md-none d-lg-inline d-xl-inline">{{ __('Login') }}</span>
          </a>
          @endguest
        </div>
      </div>
      @auth
      {{-- User Dropdown --}}
      <div class="nav-item dropdown m-1">
        <a class="nav-link d-flex text-reset p-0" data-bs-toggle="dropdown" href="#" aria-label="Open user menu">
          <div class="d-none d-xl-block ps-1">
            <div>{{ Auth::user()->name ?? '' }}</div>
            <div class="small text-muted">{{ Auth::user()->personal_number ?? '' }}</div>
          </div>
          <span class="avatar avatar-sm ms-1" style="background-image: url(../../foto/{{ Auth::user()->personal_number . '.jpg' ?? 'no_image.png' }})"></span>
        </a>
        {{-- User Dropdown Menu --}}
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          {{-- <a class="dropdown-item" href="{{ route('user.profile') }}">
            <svg class="icon dropdown-item-icon text-azure" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
              <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
              <path d="M16 5l3 3"></path>
            </svg>
            {{ __('Profil') }}
          </a>
          <a class="dropdown-item" href="#">
            <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
              </path>
              <circle cx="12" cy="12" r="3"></circle>
            </svg>
            {{ __('Nastavení') }}
          </a>
          <div class="dropdown-divider"></div> --}}
          <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logout-modal" href="#">
            <svg class="icon dropdown-item-icon text-red" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
              <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
            </svg>
            {{ __('Logout') }}
          </a>
        </div>
        {{-- User Dropdown Menu End --}}
      </div>
      {{-- User Dropdown End --}}
    </div>
    @endauth
  </div>
</header>