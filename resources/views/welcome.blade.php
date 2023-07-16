@extends('layouts.auth')

@section('app')
  <div class="page">
    <!-- Navbar -->
    <header class="navbar navbar-expand-md d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-md-3 pe-0">
          <a href=".">
            <img src="{{ asset('static/l.svg') }}" alt="Tabler" class="navbar-brand-image" width="110" height="32">
          </a>
        </h1>
        <div class="navbar-nav order-md-last flex-row">
          <div class="d-none d-md-flex">
            <a href="?theme=dark" class="nav-link hide-theme-dark px-0" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable dark mode"
              data-bs-original-title="Enable dark mode">
              <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path>
              </svg>
            </a>
            <a href="?theme=light" class="nav-link hide-theme-light px-0" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable light mode"
              data-bs-original-title="Enable light mode">
              <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
              </svg>
            </a>
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                  <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                </svg>
                <span class="badge bg-red"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Last updates</h3>
                  </div>
                  <div class="list-group list-group-flush list-group-hoverable">
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                        <div class="col text-truncate">
                          <a href="#" class="text-body d-block">Example 1</a>
                          <div class="d-block text-muted text-truncate mt-n1">
                            Change deprecated html tags to text decoration classes (#29604)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24"
                              stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                        <div class="col text-truncate">
                          <a href="#" class="text-body d-block">Example 2</a>
                          <div class="d-block text-muted text-truncate mt-n1">
                            justify-content:between ⇒ justify-content:space-between (#29734)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions show">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24"
                              stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                        <div class="col text-truncate">
                          <a href="#" class="text-body d-block">Example 3</a>
                          <div class="d-block text-muted text-truncate mt-n1">
                            Update change-version.js (#29736)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24"
                              stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                        <div class="col text-truncate">
                          <a href="#" class="text-body d-block">Example 4</a>
                          <div class="d-block text-muted text-truncate mt-n1">
                            Regenerate package-lock.json (#29730)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24"
                              stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
              <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
              <div class="d-none d-xl-block ps-2">
                <div>Paweł Kuna</div>
                <div class="small text-muted mt-1">UI Designer</div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a href="#" class="dropdown-item">Status</a>
              <a href="./profile.html" class="dropdown-item">Profile</a>
              <a href="#" class="dropdown-item">Feedback</a>
              <div class="dropdown-divider"></div>
              <a href="./settings.html" class="dropdown-item">Settings</a>
              <a href="./sign-in.html" class="dropdown-item">Logout</a>
            </div>
          </div>
        </div>
        <div class="navbar-collapse collapse" id="navbar-menu">
          <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="./">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                      <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                      <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Home
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                  aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/package -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5"></path>
                      <path d="M12 12l8 -4.5"></path>
                      <path d="M12 12l0 9"></path>
                      <path d="M12 12l-8 -4.5"></path>
                      <path d="M16 5.25l-8 4.5"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Interface
                  </span>
                </a>
                <div class="dropdown-menu">
                  <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="./accordion.html">
                        Accordion
                      </a>
                      <a class="dropdown-item" href="./blank.html">
                        Blank page
                      </a>
                      <a class="dropdown-item" href="./badges.html">
                        Badges
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./buttons.html">
                        Buttons
                      </a>
                      <div class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#sidebar-cards" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                          aria-expanded="false">
                          Cards
                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                        </a>
                        <div class="dropdown-menu">
                          <a href="./cards.html" class="dropdown-item">
                            Sample cards
                          </a>
                          <a href="./card-actions.html" class="dropdown-item">
                            Card actions
                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                          </a>
                          <a href="./cards-masonry.html" class="dropdown-item">
                            Cards Masonry
                          </a>
                        </div>
                      </div>
                      <a class="dropdown-item" href="./colors.html">
                        Colors
                      </a>
                      <a class="dropdown-item" href="./datagrid.html">
                        Data grid
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./datatables.html">
                        Datatables
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./dropdowns.html">
                        Dropdowns
                      </a>
                      <a class="dropdown-item" href="./modals.html">
                        Modals
                      </a>
                      <a class="dropdown-item" href="./maps.html">
                        Maps
                      </a>
                      <a class="dropdown-item" href="./map-fullsize.html">
                        Map fullsize
                      </a>
                      <a class="dropdown-item" href="./maps-vector.html">
                        Vector maps
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./navigation.html">
                        Navigation
                      </a>
                      <a class="dropdown-item" href="./charts.html">
                        Charts
                      </a>
                      <a class="dropdown-item" href="./pagination.html">
                        <!-- Download SVG icon from http://tabler-icons.io/i/pie-chart -->
                        Pagination
                      </a>
                    </div>
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="./placeholder.html">
                        Placeholder
                      </a>
                      <a class="dropdown-item" href="./steps.html">
                        Steps
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./stars-rating.html">
                        Stars rating
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./tabs.html">
                        Tabs
                      </a>
                      <a class="dropdown-item" href="./tables.html">
                        Tables
                      </a>
                      <a class="dropdown-item" href="./carousel.html">
                        Carousel
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./lists.html">
                        Lists
                      </a>
                      <a class="dropdown-item" href="./typography.html">
                        Typography
                      </a>
                      <a class="dropdown-item" href="./offcanvas.html">
                        Offcanvas
                      </a>
                      <a class="dropdown-item" href="./markdown.html">
                        Markdown
                      </a>
                      <a class="dropdown-item" href="./dropzone.html">
                        Dropzone
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./lightbox.html">
                        Lightbox
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./tinymce.html">
                        TinyMCE
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./inline-player.html">
                        Inline player
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <div class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                          role="button" aria-expanded="false">
                          Authentication
                        </a>
                        <div class="dropdown-menu">
                          <a href="./sign-in.html" class="dropdown-item">
                            Sign in
                          </a>
                          <a href="./sign-in-link.html" class="dropdown-item">
                            Sign in link
                          </a>
                          <a href="./sign-in-illustration.html" class="dropdown-item">
                            Sign in with illustration
                          </a>
                          <a href="./sign-in-cover.html" class="dropdown-item">
                            Sign in with cover
                          </a>
                          <a href="./sign-up.html" class="dropdown-item">
                            Sign up
                          </a>
                          <a href="./forgot-password.html" class="dropdown-item">
                            Forgot password
                          </a>
                          <a href="./terms-of-service.html" class="dropdown-item">
                            Terms of service
                          </a>
                          <a href="./auth-lock.html" class="dropdown-item">
                            Lock screen
                          </a>
                        </div>
                      </div>
                      <div class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                          aria-expanded="false">
                          <!-- Download SVG icon from http://tabler-icons.io/i/file-minus -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline me-1" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                            <path d="M9 14l6 0"></path>
                          </svg>
                          Error pages
                        </a>
                        <div class="dropdown-menu">
                          <a href="./error-404.html" class="dropdown-item">
                            404 page
                          </a>
                          <a href="./error-500.html" class="dropdown-item">
                            500 page
                          </a>
                          <a href="./error-maintenance.html" class="dropdown-item">
                            Maintenance page
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./form-elements.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M9 11l3 3l8 -8"></path>
                      <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Forms
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                  aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Extra
                  </span>
                </a>
                <div class="dropdown-menu">
                  <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="./empty.html">
                        Empty page
                      </a>
                      <a class="dropdown-item" href="./cookie-banner.html">
                        Cookie banner
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./activity.html">
                        Activity
                      </a>
                      <a class="dropdown-item" href="./gallery.html">
                        Gallery
                      </a>
                      <a class="dropdown-item" href="./invoice.html">
                        Invoice
                      </a>
                      <a class="dropdown-item" href="./search-results.html">
                        Search results
                      </a>
                      <a class="dropdown-item" href="./pricing.html">
                        Pricing cards
                      </a>
                      <a class="dropdown-item" href="./pricing-table.html">
                        Pricing table
                      </a>
                      <a class="dropdown-item" href="./faq.html">
                        FAQ
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./users.html">
                        Users
                      </a>
                      <a class="dropdown-item" href="./license.html">
                        License
                      </a>
                    </div>
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="./logs.html">
                        Logs
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./music.html">
                        Music
                      </a>
                      <a class="dropdown-item" href="./photogrid.html">
                        Photogrid
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./tasks.html">
                        Tasks
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./uptime.html">
                        Uptime monitor
                      </a>
                      <a class="dropdown-item" href="./widgets.html">
                        Widgets
                      </a>
                      <a class="dropdown-item" href="./wizard.html">
                        Wizard
                      </a>
                      <a class="dropdown-item" href="./settings.html">
                        Settings
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./trial-ended.html">
                        Trial ended
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./job-listing.html">
                        Job listing
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./page-loader.html">
                        Page loader
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                  aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                      <path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                      <path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                      <path d="M14 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Layout
                  </span>
                </a>
                <div class="dropdown-menu">
                  <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="./layout-horizontal.html">
                        Horizontal
                      </a>
                      <a class="dropdown-item" href="./layout-boxed.html">
                        Boxed
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a class="dropdown-item" href="./layout-vertical.html">
                        Vertical
                      </a>
                      <a class="dropdown-item" href="./layout-vertical-transparent.html">
                        Vertical transparent
                      </a>
                      <a class="dropdown-item" href="./layout-vertical-right.html">
                        Right vertical
                      </a>
                      <a class="dropdown-item active" href="./layout-condensed.html">
                        Condensed
                      </a>
                      <a class="dropdown-item" href="./layout-combo.html">
                        Combined
                      </a>
                    </div>
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="./layout-navbar-dark.html">
                        Navbar dark
                      </a>
                      <a class="dropdown-item" href="./layout-navbar-sticky.html">
                        Navbar sticky
                      </a>
                      <a class="dropdown-item" href="./layout-navbar-overlap.html">
                        Navbar overlap
                      </a>
                      <a class="dropdown-item" href="./layout-rtl.html">
                        RTL mode
                      </a>
                      <a class="dropdown-item" href="./layout-fluid.html">
                        Fluid
                      </a>
                      <a class="dropdown-item" href="./layout-fluid-vertical.html">
                        Fluid vertical
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./icons.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7">
                      </path>
                      <path d="M10 10l.01 0"></path>
                      <path d="M14 10l.01 0"></path>
                      <path d="M10 14a3.5 3.5 0 0 0 4 0"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    4158 icons
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                  aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                      <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                      <path d="M15 15l3.35 3.35"></path>
                      <path d="M9 15l-3.35 3.35"></path>
                      <path d="M5.65 5.65l3.35 3.35"></path>
                      <path d="M18.35 5.65l-3.35 3.35"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Help
                  </span>
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="https://tabler.io/docs" target="_blank" rel="noopener">
                    Documentation
                  </a>
                  <a class="dropdown-item" href="./changelog.html">
                    Changelog
                  </a>
                  <a class="dropdown-item" href="https://github.com/tabler/tabler" target="_blank" rel="noopener">
                    Source code
                  </a>
                  <a class="dropdown-item text-pink" href="https://github.com/sponsors/codecalm" target="_blank" rel="noopener">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                    </svg>
                    Sponsor project!
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <div class="page-wrapper">
      <!-- Page header -->
      <div class="page-header d-print-none">
        <div class="container-xl">
          <div class="row g-2 align-items-center">
            <div class="col">
              <!-- Page pre-title -->
              <div class="page-pretitle">
                Overview
              </div>
              <h2 class="page-title">
                Condensed layout
              </h2>
            </div>
            <!-- Page title actions -->
            <div class="d-print-none col-auto ms-auto">
              <div class="btn-list">
                <span class="d-none d-sm-inline">
                  <a href="#" class="btn">
                    New view
                  </a>
                </span>
                <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 5l0 14"></path>
                    <path d="M5 12l14 0"></path>
                  </svg>
                  Create new report
                </a>
                <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report"
                  aria-label="Create new report">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 5l0 14"></path>
                    <path d="M5 12l14 0"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl">
          <div class="row row-deck row-cards">
            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="subheader">Sales</div>
                    <div class="lh-1 ms-auto">
                      <div class="dropdown">
                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7
                          days</a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item active" href="#">Last 7 days</a>
                          <a class="dropdown-item" href="#">Last 30 days</a>
                          <a class="dropdown-item" href="#">Last 3 months</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="h1 mb-3">75%</div>
                  <div class="d-flex mb-2">
                    <div>Conversion rate</div>
                    <div class="ms-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        7%
                        <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                          stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M3 17l6 -6l4 4l8 -8"></path>
                          <path d="M14 7l7 0l0 7"></path>
                        </svg>
                      </span>
                    </div>
                  </div>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                      aria-label="75% Complete">
                      <span class="visually-hidden">75% Complete</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="subheader">Revenue</div>
                    <div class="lh-1 ms-auto">
                      <div class="dropdown">
                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7
                          days</a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item active" href="#">Last 7 days</a>
                          <a class="dropdown-item" href="#">Last 30 days</a>
                          <a class="dropdown-item" href="#">Last 3 months</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-baseline">
                    <div class="h1 mb-0 me-2">$4,300</div>
                    <div class="me-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        8%
                        <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                          stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M3 17l6 -6l4 4l8 -8"></path>
                          <path d="M14 7l7 0l0 7"></path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
                <div id="chart-revenue-bg" class="chart-sm" style="min-height: 40px;">
                  <div id="apexchartsmsn8c2wn" class="apexcharts-canvas apexchartsmsn8c2wn apexcharts-theme-light" style="width: 308px; height: 40px;"><svg
                      id="SvgjsSvg1953" width="308" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                      xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                      transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;">
                      <foreignObject x="0" y="0" width="308" height="40">
                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 20px;"></div>
                      </foreignObject>
                      <rect id="SvgjsRect1958" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                      <g id="SvgjsG2021" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                      <g id="SvgjsG1955" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                        <defs id="SvgjsDefs1954">
                          <clipPath id="gridRectMaskmsn8c2wn">
                            <rect id="SvgjsRect1990" width="314" height="42" x="-3" y="-1" rx="0" ry="0"
                              opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                          </clipPath>
                          <clipPath id="forecastMaskmsn8c2wn"></clipPath>
                          <clipPath id="nonForecastMaskmsn8c2wn"></clipPath>
                          <clipPath id="gridRectMarkerMaskmsn8c2wn">
                            <rect id="SvgjsRect1991" width="312" height="44" x="-2" y="-2" rx="0" ry="0"
                              opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                          </clipPath>
                        </defs>
                        <line id="SvgjsLine1959" x1="0" y1="0" x2="0" y2="40" stroke="#b6b6b6" stroke-dasharray="3"
                          stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="40" fill="#b1b9c4"
                          filter="none" fill-opacity="0.9" stroke-width="1"></line>
                        <g id="SvgjsG1998" class="apexcharts-grid">
                          <g id="SvgjsG1999" class="apexcharts-gridlines-horizontal" style="display: none;">
                            <line id="SvgjsLine2002" x1="0" y1="0" x2="308" y2="0" stroke="#e0e0e0" stroke-dasharray="4"
                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                            <line id="SvgjsLine2003" x1="0" y1="8" x2="308" y2="8" stroke="#e0e0e0" stroke-dasharray="4"
                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                            <line id="SvgjsLine2004" x1="0" y1="16" x2="308" y2="16" stroke="#e0e0e0" stroke-dasharray="4"
                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                            <line id="SvgjsLine2005" x1="0" y1="24" x2="308" y2="24" stroke="#e0e0e0" stroke-dasharray="4"
                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                            <line id="SvgjsLine2006" x1="0" y1="32" x2="308" y2="32" stroke="#e0e0e0" stroke-dasharray="4"
                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                            <line id="SvgjsLine2007" x1="0" y1="40" x2="308" y2="40" stroke="#e0e0e0" stroke-dasharray="4"
                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                          </g>
                          <g id="SvgjsG2000" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                          <line id="SvgjsLine2009" x1="0" y1="40" x2="308" y2="40" stroke="transparent" stroke-dasharray="0"
                            stroke-linecap="butt"></line>
                          <line id="SvgjsLine2008" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0"
                            stroke-linecap="butt"></line>
                        </g>
                        <g id="SvgjsG1992" class="apexcharts-area-series apexcharts-plot-series">
                          <g id="SvgjsG1993" class="apexcharts-series" seriesName="Profits" data:longestSeries="true" rel="1" data:realIndex="0">
                            <path id="SvgjsPath1996"
                              d="M 0 40 L 0 25.2C 3.717241379310345 25.2 6.90344827586207 26 10.620689655172415 26C 14.337931034482759 26 17.524137931034485 22.4 21.24137931034483 22.4C 24.958620689655174 22.4 28.144827586206898 28.8 31.862068965517242 28.8C 35.57931034482759 28.8 38.765517241379314 25.6 42.48275862068966 25.6C 46.2 25.6 49.38620689655173 30.4 53.10344827586207 30.4C 56.820689655172416 30.4 60.00689655172414 14 63.724137931034484 14C 67.44137931034483 14 70.62758620689655 27.6 74.34482758620689 27.6C 78.06206896551724 27.6 81.24827586206897 25.2 84.96551724137932 25.2C 88.68275862068965 25.2 91.86896551724139 24.4 95.58620689655173 24.4C 99.30344827586207 24.4 102.4896551724138 15.2 106.20689655172414 15.2C 109.92413793103448 15.2 113.11034482758622 19.6 116.82758620689656 19.6C 120.54482758620689 19.6 123.73103448275863 26 127.44827586206897 26C 131.16551724137932 26 134.35172413793103 23.6 138.06896551724137 23.6C 141.7862068965517 23.6 144.97241379310344 26 148.68965517241378 26C 152.40689655172412 26 155.59310344827585 29.2 159.3103448275862 29.2C 163.02758620689656 29.2 166.21379310344827 2.799999999999997 169.93103448275863 2.799999999999997C 173.64827586206897 2.799999999999997 176.8344827586207 18.8 180.55172413793105 18.8C 184.26896551724138 18.8 187.45517241379312 15.600000000000001 191.17241379310346 15.600000000000001C 194.8896551724138 15.600000000000001 198.07586206896553 29.2 201.79310344827587 29.2C 205.5103448275862 29.2 208.69655172413795 18.4 212.41379310344828 18.4C 216.13103448275862 18.4 219.31724137931036 22.8 223.0344827586207 22.8C 226.75172413793103 22.8 229.93793103448277 32.4 233.6551724137931 32.4C 237.37241379310345 32.4 240.55862068965519 21.6 244.27586206896552 21.6C 247.99310344827586 21.6 251.1793103448276 24.4 254.89655172413794 24.4C 258.6137931034483 24.4 261.8 15.2 265.51724137931035 15.2C 269.2344827586207 15.2 272.4206896551724 19.6 276.13793103448273 19.6C 279.85517241379307 19.6 283.04137931034484 26 286.7586206896552 26C 290.4758620689655 26 293.6620689655172 23.6 297.37931034482756 23.6C 301.0965517241379 23.6 304.28275862068966 13.2 308 13.2C 308 13.2 308 13.2 308 40M 308 13.2z"
                              fill="rgba(32,107,196,0.16)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                              class="apexcharts-area" index="0" clip-path="url(#gridRectMaskmsn8c2wn)"
                              pathTo="M 0 40 L 0 25.2C 3.717241379310345 25.2 6.90344827586207 26 10.620689655172415 26C 14.337931034482759 26 17.524137931034485 22.4 21.24137931034483 22.4C 24.958620689655174 22.4 28.144827586206898 28.8 31.862068965517242 28.8C 35.57931034482759 28.8 38.765517241379314 25.6 42.48275862068966 25.6C 46.2 25.6 49.38620689655173 30.4 53.10344827586207 30.4C 56.820689655172416 30.4 60.00689655172414 14 63.724137931034484 14C 67.44137931034483 14 70.62758620689655 27.6 74.34482758620689 27.6C 78.06206896551724 27.6 81.24827586206897 25.2 84.96551724137932 25.2C 88.68275862068965 25.2 91.86896551724139 24.4 95.58620689655173 24.4C 99.30344827586207 24.4 102.4896551724138 15.2 106.20689655172414 15.2C 109.92413793103448 15.2 113.11034482758622 19.6 116.82758620689656 19.6C 120.54482758620689 19.6 123.73103448275863 26 127.44827586206897 26C 131.16551724137932 26 134.35172413793103 23.6 138.06896551724137 23.6C 141.7862068965517 23.6 144.97241379310344 26 148.68965517241378 26C 152.40689655172412 26 155.59310344827585 29.2 159.3103448275862 29.2C 163.02758620689656 29.2 166.21379310344827 2.799999999999997 169.93103448275863 2.799999999999997C 173.64827586206897 2.799999999999997 176.8344827586207 18.8 180.55172413793105 18.8C 184.26896551724138 18.8 187.45517241379312 15.600000000000001 191.17241379310346 15.600000000000001C 194.8896551724138 15.600000000000001 198.07586206896553 29.2 201.79310344827587 29.2C 205.5103448275862 29.2 208.69655172413795 18.4 212.41379310344828 18.4C 216.13103448275862 18.4 219.31724137931036 22.8 223.0344827586207 22.8C 226.75172413793103 22.8 229.93793103448277 32.4 233.6551724137931 32.4C 237.37241379310345 32.4 240.55862068965519 21.6 244.27586206896552 21.6C 247.99310344827586 21.6 251.1793103448276 24.4 254.89655172413794 24.4C 258.6137931034483 24.4 261.8 15.2 265.51724137931035 15.2C 269.2344827586207 15.2 272.4206896551724 19.6 276.13793103448273 19.6C 279.85517241379307 19.6 283.04137931034484 26 286.7586206896552 26C 290.4758620689655 26 293.6620689655172 23.6 297.37931034482756 23.6C 301.0965517241379 23.6 304.28275862068966 13.2 308 13.2C 308 13.2 308 13.2 308 40M 308 13.2z"
                              pathFrom="M -1 40 L -1 40 L 10.620689655172415 40 L 21.24137931034483 40 L 31.862068965517242 40 L 42.48275862068966 40 L 53.10344827586207 40 L 63.724137931034484 40 L 74.34482758620689 40 L 84.96551724137932 40 L 95.58620689655173 40 L 106.20689655172414 40 L 116.82758620689656 40 L 127.44827586206897 40 L 138.06896551724137 40 L 148.68965517241378 40 L 159.3103448275862 40 L 169.93103448275863 40 L 180.55172413793105 40 L 191.17241379310346 40 L 201.79310344827587 40 L 212.41379310344828 40 L 223.0344827586207 40 L 233.6551724137931 40 L 244.27586206896552 40 L 254.89655172413794 40 L 265.51724137931035 40 L 276.13793103448273 40 L 286.7586206896552 40 L 297.37931034482756 40 L 308 40">
                            </path>
                            <path id="SvgjsPath1997"
                              d="M 0 25.2C 3.717241379310345 25.2 6.90344827586207 26 10.620689655172415 26C 14.337931034482759 26 17.524137931034485 22.4 21.24137931034483 22.4C 24.958620689655174 22.4 28.144827586206898 28.8 31.862068965517242 28.8C 35.57931034482759 28.8 38.765517241379314 25.6 42.48275862068966 25.6C 46.2 25.6 49.38620689655173 30.4 53.10344827586207 30.4C 56.820689655172416 30.4 60.00689655172414 14 63.724137931034484 14C 67.44137931034483 14 70.62758620689655 27.6 74.34482758620689 27.6C 78.06206896551724 27.6 81.24827586206897 25.2 84.96551724137932 25.2C 88.68275862068965 25.2 91.86896551724139 24.4 95.58620689655173 24.4C 99.30344827586207 24.4 102.4896551724138 15.2 106.20689655172414 15.2C 109.92413793103448 15.2 113.11034482758622 19.6 116.82758620689656 19.6C 120.54482758620689 19.6 123.73103448275863 26 127.44827586206897 26C 131.16551724137932 26 134.35172413793103 23.6 138.06896551724137 23.6C 141.7862068965517 23.6 144.97241379310344 26 148.68965517241378 26C 152.40689655172412 26 155.59310344827585 29.2 159.3103448275862 29.2C 163.02758620689656 29.2 166.21379310344827 2.799999999999997 169.93103448275863 2.799999999999997C 173.64827586206897 2.799999999999997 176.8344827586207 18.8 180.55172413793105 18.8C 184.26896551724138 18.8 187.45517241379312 15.600000000000001 191.17241379310346 15.600000000000001C 194.8896551724138 15.600000000000001 198.07586206896553 29.2 201.79310344827587 29.2C 205.5103448275862 29.2 208.69655172413795 18.4 212.41379310344828 18.4C 216.13103448275862 18.4 219.31724137931036 22.8 223.0344827586207 22.8C 226.75172413793103 22.8 229.93793103448277 32.4 233.6551724137931 32.4C 237.37241379310345 32.4 240.55862068965519 21.6 244.27586206896552 21.6C 247.99310344827586 21.6 251.1793103448276 24.4 254.89655172413794 24.4C 258.6137931034483 24.4 261.8 15.2 265.51724137931035 15.2C 269.2344827586207 15.2 272.4206896551724 19.6 276.13793103448273 19.6C 279.85517241379307 19.6 283.04137931034484 26 286.7586206896552 26C 290.4758620689655 26 293.6620689655172 23.6 297.37931034482756 23.6C 301.0965517241379 23.6 304.28275862068966 13.2 308 13.2"
                              fill="none" fill-opacity="1" stroke="#206bc4" stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                              stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskmsn8c2wn)"
                              pathTo="M 0 25.2C 3.717241379310345 25.2 6.90344827586207 26 10.620689655172415 26C 14.337931034482759 26 17.524137931034485 22.4 21.24137931034483 22.4C 24.958620689655174 22.4 28.144827586206898 28.8 31.862068965517242 28.8C 35.57931034482759 28.8 38.765517241379314 25.6 42.48275862068966 25.6C 46.2 25.6 49.38620689655173 30.4 53.10344827586207 30.4C 56.820689655172416 30.4 60.00689655172414 14 63.724137931034484 14C 67.44137931034483 14 70.62758620689655 27.6 74.34482758620689 27.6C 78.06206896551724 27.6 81.24827586206897 25.2 84.96551724137932 25.2C 88.68275862068965 25.2 91.86896551724139 24.4 95.58620689655173 24.4C 99.30344827586207 24.4 102.4896551724138 15.2 106.20689655172414 15.2C 109.92413793103448 15.2 113.11034482758622 19.6 116.82758620689656 19.6C 120.54482758620689 19.6 123.73103448275863 26 127.44827586206897 26C 131.16551724137932 26 134.35172413793103 23.6 138.06896551724137 23.6C 141.7862068965517 23.6 144.97241379310344 26 148.68965517241378 26C 152.40689655172412 26 155.59310344827585 29.2 159.3103448275862 29.2C 163.02758620689656 29.2 166.21379310344827 2.799999999999997 169.93103448275863 2.799999999999997C 173.64827586206897 2.799999999999997 176.8344827586207 18.8 180.55172413793105 18.8C 184.26896551724138 18.8 187.45517241379312 15.600000000000001 191.17241379310346 15.600000000000001C 194.8896551724138 15.600000000000001 198.07586206896553 29.2 201.79310344827587 29.2C 205.5103448275862 29.2 208.69655172413795 18.4 212.41379310344828 18.4C 216.13103448275862 18.4 219.31724137931036 22.8 223.0344827586207 22.8C 226.75172413793103 22.8 229.93793103448277 32.4 233.6551724137931 32.4C 237.37241379310345 32.4 240.55862068965519 21.6 244.27586206896552 21.6C 247.99310344827586 21.6 251.1793103448276 24.4 254.89655172413794 24.4C 258.6137931034483 24.4 261.8 15.2 265.51724137931035 15.2C 269.2344827586207 15.2 272.4206896551724 19.6 276.13793103448273 19.6C 279.85517241379307 19.6 283.04137931034484 26 286.7586206896552 26C 290.4758620689655 26 293.6620689655172 23.6 297.37931034482756 23.6C 301.0965517241379 23.6 304.28275862068966 13.2 308 13.2"
                              pathFrom="M -1 40 L -1 40 L 10.620689655172415 40 L 21.24137931034483 40 L 31.862068965517242 40 L 42.48275862068966 40 L 53.10344827586207 40 L 63.724137931034484 40 L 74.34482758620689 40 L 84.96551724137932 40 L 95.58620689655173 40 L 106.20689655172414 40 L 116.82758620689656 40 L 127.44827586206897 40 L 138.06896551724137 40 L 148.68965517241378 40 L 159.3103448275862 40 L 169.93103448275863 40 L 180.55172413793105 40 L 191.17241379310346 40 L 201.79310344827587 40 L 212.41379310344828 40 L 223.0344827586207 40 L 233.6551724137931 40 L 244.27586206896552 40 L 254.89655172413794 40 L 265.51724137931035 40 L 276.13793103448273 40 L 286.7586206896552 40 L 297.37931034482756 40 L 308 40"
                              fill-rule="evenodd"></path>
                            <g id="SvgjsG1994" class="apexcharts-series-markers-wrap" data:realIndex="0">
                              <g class="apexcharts-series-markers">
                                <circle id="SvgjsCircle2025" r="0" cx="0" cy="0"
                                  class="apexcharts-marker w44eirrxt no-pointer-events" stroke="#ffffff" fill="#206bc4" fill-opacity="1" stroke-width="2"
                                  stroke-opacity="0.9" default-marker-size="0"></circle>
                              </g>
                            </g>
                          </g>
                          <g id="SvgjsG1995" class="apexcharts-datalabels" data:realIndex="0"></g>
                        </g>
                        <g id="SvgjsG2001" class="apexcharts-grid-borders" style="display: none;"></g>
                        <line id="SvgjsLine2010" x1="0" y1="0" x2="308" y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                          stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                        <line id="SvgjsLine2011" x1="0" y1="0" x2="308" y2="0" stroke-dasharray="0" stroke-width="0"
                          stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                        <g id="SvgjsG2012" class="apexcharts-xaxis" transform="translate(0, 0)">
                          <g id="SvgjsG2013" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                        </g>
                        <g id="SvgjsG2022" class="apexcharts-yaxis-annotations"></g>
                        <g id="SvgjsG2023" class="apexcharts-xaxis-annotations"></g>
                        <g id="SvgjsG2024" class="apexcharts-point-annotations"></g>
                      </g>
                    </svg>
                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                      <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
                      <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker"
                          style="background-color: rgb(32, 107, 196);"></span>
                        <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                          <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span
                              class="apexcharts-tooltip-text-y-value"></span></div>
                          <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span
                              class="apexcharts-tooltip-text-goals-value"></span></div>
                          <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span
                              class="apexcharts-tooltip-text-z-value"></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                      <div class="apexcharts-yaxistooltip-text"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="subheader">New clients</div>
                    <div class="lh-1 ms-auto">
                      <div class="dropdown">
                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7
                          days</a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item active" href="#">Last 7 days</a>
                          <a class="dropdown-item" href="#">Last 30 days</a>
                          <a class="dropdown-item" href="#">Last 3 months</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-baseline">
                    <div class="h1 mb-3 me-2">6,782</div>
                    <div class="me-auto">
                      <span class="text-yellow d-inline-flex align-items-center lh-1">
                        0%
                        <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                          stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M5 12l14 0"></path>
                        </svg>
                      </span>
                    </div>
                  </div>
                  <div id="chart-new-clients" class="chart-sm" style="min-height: 40px;">
                    <div id="apexchartss89qdgxz" class="apexcharts-canvas apexchartss89qdgxz apexcharts-theme-light" style="width: 260px; height: 40px;">
                      <svg id="SvgjsSvg2028" width="260" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                        transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;">
                        <foreignObject x="0" y="0" width="260" height="40">
                          <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 20px;"></div>
                        </foreignObject>
                        <rect id="SvgjsRect2033" width="0" height="0" x="0" y="0" rx="0" ry="0"
                          opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                        <g id="SvgjsG2098" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                        <g id="SvgjsG2030" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                          <defs id="SvgjsDefs2029">
                            <clipPath id="gridRectMasks89qdgxz">
                              <rect id="SvgjsRect2065" width="266" height="42" x="-3" y="-1" rx="0" ry="0"
                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                            </clipPath>
                            <clipPath id="forecastMasks89qdgxz"></clipPath>
                            <clipPath id="nonForecastMasks89qdgxz"></clipPath>
                            <clipPath id="gridRectMarkerMasks89qdgxz">
                              <rect id="SvgjsRect2066" width="264" height="44" x="-2" y="-2" rx="0" ry="0"
                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                            </clipPath>
                          </defs>
                          <line id="SvgjsLine2034" x1="0" y1="0" x2="0" y2="40" stroke="#b6b6b6" stroke-dasharray="3"
                            stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="40"
                            fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                          <g id="SvgjsG2076" class="apexcharts-grid">
                            <g id="SvgjsG2077" class="apexcharts-gridlines-horizontal" style="display: none;">
                              <line id="SvgjsLine2080" x1="0" y1="0" x2="260" y2="0" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2081" x1="0" y1="8" x2="260" y2="8" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2082" x1="0" y1="16" x2="260" y2="16" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2083" x1="0" y1="24" x2="260" y2="24" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2084" x1="0" y1="32" x2="260" y2="32" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2085" x1="0" y1="40" x2="260" y2="40" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                            </g>
                            <g id="SvgjsG2078" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                            <line id="SvgjsLine2087" x1="0" y1="40" x2="260" y2="40" stroke="transparent"
                              stroke-dasharray="0" stroke-linecap="butt"></line>
                            <line id="SvgjsLine2086" x1="0" y1="1" x2="0" y2="40" stroke="transparent"
                              stroke-dasharray="0" stroke-linecap="butt"></line>
                          </g>
                          <g id="SvgjsG2067" class="apexcharts-line-series apexcharts-plot-series">
                            <g id="SvgjsG2068" class="apexcharts-series" seriesName="May" data:longestSeries="true" rel="1" data:realIndex="0">
                              <path id="SvgjsPath2071"
                                d="M 0 25.2C 3.137931034482759 25.2 5.8275862068965525 26 8.965517241379311 26C 12.103448275862071 26 14.793103448275865 22.4 17.931034482758623 22.4C 21.06896551724138 22.4 23.758620689655174 28.8 26.896551724137932 28.8C 30.03448275862069 28.8 32.724137931034484 25.6 35.862068965517246 25.6C 39 25.6 41.689655172413794 30.4 44.827586206896555 30.4C 47.96551724137932 30.4 50.65517241379311 14 53.793103448275865 14C 56.931034482758626 14 59.62068965517242 27.6 62.75862068965518 27.6C 65.89655172413794 27.6 68.58620689655173 25.2 71.72413793103449 25.2C 74.86206896551725 25.2 77.55172413793103 24.4 80.6896551724138 24.4C 83.82758620689656 24.4 86.51724137931035 15.2 89.65517241379311 15.2C 92.79310344827587 15.2 95.48275862068967 19.6 98.62068965517243 19.6C 101.75862068965519 19.6 104.44827586206897 26 107.58620689655173 26C 110.72413793103449 26 113.41379310344828 23.6 116.55172413793105 23.6C 119.68965517241381 23.6 122.3793103448276 26 125.51724137931036 26C 128.6551724137931 26 131.34482758620692 29.2 134.48275862068968 29.2C 137.62068965517244 29.2 140.31034482758622 2.799999999999997 143.44827586206898 2.799999999999997C 146.58620689655174 2.799999999999997 149.27586206896552 18.8 152.41379310344828 18.8C 155.55172413793105 18.8 158.24137931034483 15.600000000000001 161.3793103448276 15.600000000000001C 164.51724137931035 15.600000000000001 167.20689655172416 29.2 170.34482758620692 29.2C 173.48275862068968 29.2 176.17241379310346 18.4 179.31034482758622 18.4C 182.44827586206898 18.4 185.13793103448276 22.8 188.27586206896552 22.8C 191.41379310344828 22.8 194.1034482758621 38.4 197.24137931034485 38.4C 200.37931034482762 38.4 203.0689655172414 21.6 206.20689655172416 21.6C 209.34482758620692 21.6 212.0344827586207 24.4 215.17241379310346 24.4C 218.31034482758622 24.4 221.00000000000003 15.2 224.1379310344828 15.2C 227.27586206896555 15.2 229.96551724137933 19.6 233.1034482758621 19.6C 236.24137931034485 19.6 238.93103448275863 26 242.0689655172414 26C 245.20689655172416 26 247.89655172413796 23.6 251.03448275862073 23.6C 254.17241379310346 23.6 256.86206896551727 13.2 260 13.2"
                                fill="none" fill-opacity="1" stroke="rgba(32,107,196,1)" stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMasks89qdgxz)"
                                pathTo="M 0 25.2C 3.137931034482759 25.2 5.8275862068965525 26 8.965517241379311 26C 12.103448275862071 26 14.793103448275865 22.4 17.931034482758623 22.4C 21.06896551724138 22.4 23.758620689655174 28.8 26.896551724137932 28.8C 30.03448275862069 28.8 32.724137931034484 25.6 35.862068965517246 25.6C 39 25.6 41.689655172413794 30.4 44.827586206896555 30.4C 47.96551724137932 30.4 50.65517241379311 14 53.793103448275865 14C 56.931034482758626 14 59.62068965517242 27.6 62.75862068965518 27.6C 65.89655172413794 27.6 68.58620689655173 25.2 71.72413793103449 25.2C 74.86206896551725 25.2 77.55172413793103 24.4 80.6896551724138 24.4C 83.82758620689656 24.4 86.51724137931035 15.2 89.65517241379311 15.2C 92.79310344827587 15.2 95.48275862068967 19.6 98.62068965517243 19.6C 101.75862068965519 19.6 104.44827586206897 26 107.58620689655173 26C 110.72413793103449 26 113.41379310344828 23.6 116.55172413793105 23.6C 119.68965517241381 23.6 122.3793103448276 26 125.51724137931036 26C 128.6551724137931 26 131.34482758620692 29.2 134.48275862068968 29.2C 137.62068965517244 29.2 140.31034482758622 2.799999999999997 143.44827586206898 2.799999999999997C 146.58620689655174 2.799999999999997 149.27586206896552 18.8 152.41379310344828 18.8C 155.55172413793105 18.8 158.24137931034483 15.600000000000001 161.3793103448276 15.600000000000001C 164.51724137931035 15.600000000000001 167.20689655172416 29.2 170.34482758620692 29.2C 173.48275862068968 29.2 176.17241379310346 18.4 179.31034482758622 18.4C 182.44827586206898 18.4 185.13793103448276 22.8 188.27586206896552 22.8C 191.41379310344828 22.8 194.1034482758621 38.4 197.24137931034485 38.4C 200.37931034482762 38.4 203.0689655172414 21.6 206.20689655172416 21.6C 209.34482758620692 21.6 212.0344827586207 24.4 215.17241379310346 24.4C 218.31034482758622 24.4 221.00000000000003 15.2 224.1379310344828 15.2C 227.27586206896555 15.2 229.96551724137933 19.6 233.1034482758621 19.6C 236.24137931034485 19.6 238.93103448275863 26 242.0689655172414 26C 245.20689655172416 26 247.89655172413796 23.6 251.03448275862073 23.6C 254.17241379310346 23.6 256.86206896551727 13.2 260 13.2"
                                pathFrom="M -1 40 L -1 40 L 8.965517241379311 40 L 17.931034482758623 40 L 26.896551724137932 40 L 35.862068965517246 40 L 44.827586206896555 40 L 53.793103448275865 40 L 62.75862068965518 40 L 71.72413793103449 40 L 80.6896551724138 40 L 89.65517241379311 40 L 98.62068965517243 40 L 107.58620689655173 40 L 116.55172413793105 40 L 125.51724137931036 40 L 134.48275862068968 40 L 143.44827586206898 40 L 152.41379310344828 40 L 161.3793103448276 40 L 170.34482758620692 40 L 179.31034482758622 40 L 188.27586206896552 40 L 197.24137931034485 40 L 206.20689655172416 40 L 215.17241379310346 40 L 224.1379310344828 40 L 233.1034482758621 40 L 242.0689655172414 40 L 251.03448275862073 40 L 260 40"
                                fill-rule="evenodd"></path>
                              <g id="SvgjsG2069" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                <g class="apexcharts-series-markers">
                                  <circle id="SvgjsCircle2102" r="0" cx="0" cy="0"
                                    class="apexcharts-marker w4enblpva no-pointer-events" stroke="#ffffff" fill="#206bc4" fill-opacity="1"
                                    stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                </g>
                              </g>
                            </g>
                            <g id="SvgjsG2072" class="apexcharts-series" seriesName="April" data:longestSeries="true" rel="2"
                              data:realIndex="1">
                              <path id="SvgjsPath2075"
                                d="M 0 2.799999999999997C 3.137931034482759 2.799999999999997 5.8275862068965525 18.4 8.965517241379311 18.4C 12.103448275862071 18.4 14.793103448275865 19.6 17.931034482758623 19.6C 21.06896551724138 19.6 23.758620689655174 30.4 26.896551724137932 30.4C 30.03448275862069 30.4 32.724137931034484 26 35.862068965517246 26C 39 26 41.689655172413794 26 44.827586206896555 26C 47.96551724137932 26 50.65517241379311 27.6 53.793103448275865 27.6C 56.931034482758626 27.6 59.62068965517242 13.2 62.75862068965518 13.2C 65.89655172413794 13.2 68.58620689655173 32.4 71.72413793103449 32.4C 74.86206896551725 32.4 77.55172413793103 22.8 80.6896551724138 22.8C 83.82758620689656 22.8 86.51724137931035 28.8 89.65517241379311 28.8C 92.79310344827587 28.8 95.48275862068967 25.6 98.62068965517243 25.6C 101.75862068965519 25.6 104.44827586206897 15.2 107.58620689655173 15.2C 110.72413793103449 15.2 113.41379310344828 15.600000000000001 116.55172413793105 15.600000000000001C 119.68965517241381 15.600000000000001 122.3793103448276 29.2 125.51724137931036 29.2C 128.6551724137931 29.2 131.34482758620692 24.4 134.48275862068968 24.4C 137.62068965517244 24.4 140.31034482758622 26 143.44827586206898 26C 146.58620689655174 26 149.27586206896552 23.6 152.41379310344828 23.6C 155.55172413793105 23.6 158.24137931034483 29.2 161.3793103448276 29.2C 164.51724137931035 29.2 167.20689655172416 26 170.34482758620692 26C 173.48275862068968 26 176.17241379310346 19.6 179.31034482758622 19.6C 182.44827586206898 19.6 185.13793103448276 21.6 188.27586206896552 21.6C 191.41379310344828 21.6 194.1034482758621 15.2 197.24137931034485 15.2C 200.37931034482762 15.2 203.0689655172414 25.2 206.20689655172416 25.2C 209.34482758620692 25.2 212.0344827586207 22.4 215.17241379310346 22.4C 218.31034482758622 22.4 221.00000000000003 18.8 224.1379310344828 18.8C 227.27586206896555 18.8 229.96551724137933 23.6 233.1034482758621 23.6C 236.24137931034485 23.6 238.93103448275863 14 242.0689655172414 14C 245.20689655172416 14 247.89655172413796 24.4 251.03448275862073 24.4C 254.17241379310346 24.4 256.86206896551727 25.2 260 25.2"
                                fill="none" fill-opacity="1" stroke="rgba(102,115,130,1)" stroke-opacity="1" stroke-linecap="round"
                                stroke-width="1" stroke-dasharray="3" class="apexcharts-line" index="1" clip-path="url(#gridRectMasks89qdgxz)"
                                pathTo="M 0 2.799999999999997C 3.137931034482759 2.799999999999997 5.8275862068965525 18.4 8.965517241379311 18.4C 12.103448275862071 18.4 14.793103448275865 19.6 17.931034482758623 19.6C 21.06896551724138 19.6 23.758620689655174 30.4 26.896551724137932 30.4C 30.03448275862069 30.4 32.724137931034484 26 35.862068965517246 26C 39 26 41.689655172413794 26 44.827586206896555 26C 47.96551724137932 26 50.65517241379311 27.6 53.793103448275865 27.6C 56.931034482758626 27.6 59.62068965517242 13.2 62.75862068965518 13.2C 65.89655172413794 13.2 68.58620689655173 32.4 71.72413793103449 32.4C 74.86206896551725 32.4 77.55172413793103 22.8 80.6896551724138 22.8C 83.82758620689656 22.8 86.51724137931035 28.8 89.65517241379311 28.8C 92.79310344827587 28.8 95.48275862068967 25.6 98.62068965517243 25.6C 101.75862068965519 25.6 104.44827586206897 15.2 107.58620689655173 15.2C 110.72413793103449 15.2 113.41379310344828 15.600000000000001 116.55172413793105 15.600000000000001C 119.68965517241381 15.600000000000001 122.3793103448276 29.2 125.51724137931036 29.2C 128.6551724137931 29.2 131.34482758620692 24.4 134.48275862068968 24.4C 137.62068965517244 24.4 140.31034482758622 26 143.44827586206898 26C 146.58620689655174 26 149.27586206896552 23.6 152.41379310344828 23.6C 155.55172413793105 23.6 158.24137931034483 29.2 161.3793103448276 29.2C 164.51724137931035 29.2 167.20689655172416 26 170.34482758620692 26C 173.48275862068968 26 176.17241379310346 19.6 179.31034482758622 19.6C 182.44827586206898 19.6 185.13793103448276 21.6 188.27586206896552 21.6C 191.41379310344828 21.6 194.1034482758621 15.2 197.24137931034485 15.2C 200.37931034482762 15.2 203.0689655172414 25.2 206.20689655172416 25.2C 209.34482758620692 25.2 212.0344827586207 22.4 215.17241379310346 22.4C 218.31034482758622 22.4 221.00000000000003 18.8 224.1379310344828 18.8C 227.27586206896555 18.8 229.96551724137933 23.6 233.1034482758621 23.6C 236.24137931034485 23.6 238.93103448275863 14 242.0689655172414 14C 245.20689655172416 14 247.89655172413796 24.4 251.03448275862073 24.4C 254.17241379310346 24.4 256.86206896551727 25.2 260 25.2"
                                pathFrom="M -1 40 L -1 40 L 8.965517241379311 40 L 17.931034482758623 40 L 26.896551724137932 40 L 35.862068965517246 40 L 44.827586206896555 40 L 53.793103448275865 40 L 62.75862068965518 40 L 71.72413793103449 40 L 80.6896551724138 40 L 89.65517241379311 40 L 98.62068965517243 40 L 107.58620689655173 40 L 116.55172413793105 40 L 125.51724137931036 40 L 134.48275862068968 40 L 143.44827586206898 40 L 152.41379310344828 40 L 161.3793103448276 40 L 170.34482758620692 40 L 179.31034482758622 40 L 188.27586206896552 40 L 197.24137931034485 40 L 206.20689655172416 40 L 215.17241379310346 40 L 224.1379310344828 40 L 233.1034482758621 40 L 242.0689655172414 40 L 251.03448275862073 40 L 260 40"
                                fill-rule="evenodd"></path>
                              <g id="SvgjsG2073" class="apexcharts-series-markers-wrap" data:realIndex="1">
                                <g class="apexcharts-series-markers">
                                  <circle id="SvgjsCircle2103" r="0" cx="0" cy="0"
                                    class="apexcharts-marker wytgdel7b no-pointer-events" stroke="#ffffff" fill="#667382" fill-opacity="1"
                                    stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                </g>
                              </g>
                            </g>
                            <g id="SvgjsG2070" class="apexcharts-datalabels" data:realIndex="0"></g>
                            <g id="SvgjsG2074" class="apexcharts-datalabels" data:realIndex="1"></g>
                          </g>
                          <g id="SvgjsG2079" class="apexcharts-grid-borders" style="display: none;"></g>
                          <line id="SvgjsLine2088" x1="0" y1="0" x2="260" y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                            stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                          <line id="SvgjsLine2089" x1="0" y1="0" x2="260" y2="0" stroke-dasharray="0" stroke-width="0"
                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                          <g id="SvgjsG2090" class="apexcharts-xaxis" transform="translate(0, 0)">
                            <g id="SvgjsG2091" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                          </g>
                          <g id="SvgjsG2099" class="apexcharts-yaxis-annotations"></g>
                          <g id="SvgjsG2100" class="apexcharts-xaxis-annotations"></g>
                          <g id="SvgjsG2101" class="apexcharts-point-annotations"></g>
                        </g>
                      </svg>
                      <div class="apexcharts-tooltip apexcharts-theme-dark">
                        <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker"
                            style="background-color: rgb(32, 107, 196);"></span>
                          <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span
                                class="apexcharts-tooltip-text-y-value"></span></div>
                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span
                                class="apexcharts-tooltip-text-goals-value"></span></div>
                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span
                                class="apexcharts-tooltip-text-z-value"></span></div>
                          </div>
                        </div>
                        <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker"
                            style="background-color: rgb(102, 115, 130);"></span>
                          <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span
                                class="apexcharts-tooltip-text-y-value"></span></div>
                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span
                                class="apexcharts-tooltip-text-goals-value"></span></div>
                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span
                                class="apexcharts-tooltip-text-z-value"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                        <div class="apexcharts-yaxistooltip-text"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="subheader">Active users</div>
                    <div class="lh-1 ms-auto">
                      <div class="dropdown">
                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7
                          days</a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item active" href="#">Last 7 days</a>
                          <a class="dropdown-item" href="#">Last 30 days</a>
                          <a class="dropdown-item" href="#">Last 3 months</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-baseline">
                    <div class="h1 mb-3 me-2">2,986</div>
                    <div class="me-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        4%
                        <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                          stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M3 17l6 -6l4 4l8 -8"></path>
                          <path d="M14 7l7 0l0 7"></path>
                        </svg>
                      </span>
                    </div>
                  </div>
                  <div id="chart-active-users" class="chart-sm" style="min-height: 40px;">
                    <div id="apexchartsk0pkkpcy" class="apexcharts-canvas apexchartsk0pkkpcy apexcharts-theme-light" style="width: 260px; height: 40px;">
                      <svg id="SvgjsSvg2104" width="260" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                        transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;">
                        <foreignObject x="0" y="0" width="260" height="40">
                          <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 20px;"></div>
                        </foreignObject>
                        <g id="SvgjsG2232" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                        <g id="SvgjsG2106" class="apexcharts-inner apexcharts-graphical" transform="translate(11.988505747126437, 0)">
                          <defs id="SvgjsDefs2105">
                            <linearGradient id="SvgjsLinearGradient2109" x1="0" y1="0" x2="0" y2="1">
                              <stop id="SvgjsStop2110" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                              <stop id="SvgjsStop2111" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                              <stop id="SvgjsStop2112" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                            </linearGradient>
                            <clipPath id="gridRectMaskk0pkkpcy">
                              <rect id="SvgjsRect2144" width="264" height="40" x="-9.988505747126437" y="0" rx="0"
                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                            </clipPath>
                            <clipPath id="forecastMaskk0pkkpcy"></clipPath>
                            <clipPath id="nonForecastMaskk0pkkpcy"></clipPath>
                            <clipPath id="gridRectMarkerMaskk0pkkpcy">
                              <rect id="SvgjsRect2145" width="248.02298850574712" height="44" x="-2" y="-2" rx="0"
                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                            </clipPath>
                          </defs>
                          <rect id="SvgjsRect2113" width="4.207292905271502" height="40" x="0" y="0" rx="0"
                            ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2109)"
                            class="apexcharts-xcrosshairs" y2="40" filter="none" fill-opacity="0.9"></rect>
                          <g id="SvgjsG2210" class="apexcharts-grid">
                            <g id="SvgjsG2211" class="apexcharts-gridlines-horizontal" style="display: none;">
                              <line id="SvgjsLine2214" x1="-7.988505747126437" y1="0" x2="252.01149425287355" y2="0" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2215" x1="-7.988505747126437" y1="8" x2="252.01149425287355" y2="8" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2216" x1="-7.988505747126437" y1="16" x2="252.01149425287355" y2="16" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2217" x1="-7.988505747126437" y1="24" x2="252.01149425287355" y2="24" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2218" x1="-7.988505747126437" y1="32" x2="252.01149425287355" y2="32" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2219" x1="-7.988505747126437" y1="40" x2="252.01149425287355" y2="40" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                            </g>
                            <g id="SvgjsG2212" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                            <line id="SvgjsLine2221" x1="0" y1="40" x2="244.02298850574712" y2="40" stroke="transparent"
                              stroke-dasharray="0" stroke-linecap="butt"></line>
                            <line id="SvgjsLine2220" x1="0" y1="1" x2="0" y2="40" stroke="transparent"
                              stroke-dasharray="0" stroke-linecap="butt"></line>
                          </g>
                          <g id="SvgjsG2146" class="apexcharts-bar-series apexcharts-plot-series">
                            <g id="SvgjsG2147" class="apexcharts-series" rel="1" seriesName="Profits" data:realIndex="0">
                              <path id="SvgjsPath2151"
                                d="M -2.103646452635751 40.001 L -2.103646452635751 25.201 L 2.103646452635751 25.201 L 2.103646452635751 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M -2.103646452635751 40.001 L -2.103646452635751 25.201 L 2.103646452635751 25.201 L 2.103646452635751 40.001 Z"
                                pathFrom="M -2.103646452635751 40.001 L -2.103646452635751 40.001 L 2.103646452635751 40.001 L 2.103646452635751 40.001 L 2.103646452635751 40.001 L 2.103646452635751 40.001 L 2.103646452635751 40.001 L -2.103646452635751 40.001 Z"
                                cy="25.2" cx="2.103646452635751" j="0" val="37" barHeight="14.8" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2153"
                                d="M 6.3109393579072535 40.001 L 6.3109393579072535 26.001 L 10.518232263178756 26.001 L 10.518232263178756 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 6.3109393579072535 40.001 L 6.3109393579072535 26.001 L 10.518232263178756 26.001 L 10.518232263178756 40.001 Z"
                                pathFrom="M 6.3109393579072535 40.001 L 6.3109393579072535 40.001 L 10.518232263178756 40.001 L 10.518232263178756 40.001 L 10.518232263178756 40.001 L 10.518232263178756 40.001 L 10.518232263178756 40.001 L 6.3109393579072535 40.001 Z"
                                cy="26" cx="10.518232263178756" j="1" val="35" barHeight="14" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2155"
                                d="M 14.725525168450257 40.001 L 14.725525168450257 22.401 L 18.93281807372176 22.401 L 18.93281807372176 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 14.725525168450257 40.001 L 14.725525168450257 22.401 L 18.93281807372176 22.401 L 18.93281807372176 40.001 Z"
                                pathFrom="M 14.725525168450257 40.001 L 14.725525168450257 40.001 L 18.93281807372176 40.001 L 18.93281807372176 40.001 L 18.93281807372176 40.001 L 18.93281807372176 40.001 L 18.93281807372176 40.001 L 14.725525168450257 40.001 Z"
                                cy="22.4" cx="18.93281807372176" j="2" val="44" barHeight="17.6" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2157"
                                d="M 23.14011097899326 40.001 L 23.14011097899326 28.801000000000002 L 27.34740388426476 28.801000000000002 L 27.34740388426476 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 23.14011097899326 40.001 L 23.14011097899326 28.801000000000002 L 27.34740388426476 28.801000000000002 L 27.34740388426476 40.001 Z"
                                pathFrom="M 23.14011097899326 40.001 L 23.14011097899326 40.001 L 27.34740388426476 40.001 L 27.34740388426476 40.001 L 27.34740388426476 40.001 L 27.34740388426476 40.001 L 27.34740388426476 40.001 L 23.14011097899326 40.001 Z"
                                cy="28.8" cx="27.34740388426476" j="3" val="28" barHeight="11.2" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2159"
                                d="M 31.554696789536266 40.001 L 31.554696789536266 25.601000000000003 L 35.76198969480777 25.601000000000003 L 35.76198969480777 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 31.554696789536266 40.001 L 31.554696789536266 25.601000000000003 L 35.76198969480777 25.601000000000003 L 35.76198969480777 40.001 Z"
                                pathFrom="M 31.554696789536266 40.001 L 31.554696789536266 40.001 L 35.76198969480777 40.001 L 35.76198969480777 40.001 L 35.76198969480777 40.001 L 35.76198969480777 40.001 L 35.76198969480777 40.001 L 31.554696789536266 40.001 Z"
                                cy="25.6" cx="35.76198969480777" j="4" val="36" barHeight="14.4" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2161"
                                d="M 39.96928260007927 40.001 L 39.96928260007927 30.401 L 44.17657550535077 30.401 L 44.17657550535077 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 39.96928260007927 40.001 L 39.96928260007927 30.401 L 44.17657550535077 30.401 L 44.17657550535077 40.001 Z"
                                pathFrom="M 39.96928260007927 40.001 L 39.96928260007927 40.001 L 44.17657550535077 40.001 L 44.17657550535077 40.001 L 44.17657550535077 40.001 L 44.17657550535077 40.001 L 44.17657550535077 40.001 L 39.96928260007927 40.001 Z"
                                cy="30.4" cx="44.17657550535077" j="5" val="24" barHeight="9.6" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2163"
                                d="M 48.38386841062227 40.001 L 48.38386841062227 14.001 L 52.59116131589377 14.001 L 52.59116131589377 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 48.38386841062227 40.001 L 48.38386841062227 14.001 L 52.59116131589377 14.001 L 52.59116131589377 40.001 Z"
                                pathFrom="M 48.38386841062227 40.001 L 48.38386841062227 40.001 L 52.59116131589377 40.001 L 52.59116131589377 40.001 L 52.59116131589377 40.001 L 52.59116131589377 40.001 L 52.59116131589377 40.001 L 48.38386841062227 40.001 Z"
                                cy="14" cx="52.59116131589377" j="6" val="65" barHeight="26" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2165"
                                d="M 56.79845422116528 40.001 L 56.79845422116528 27.601000000000003 L 61.00574712643678 27.601000000000003 L 61.00574712643678 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 56.79845422116528 40.001 L 56.79845422116528 27.601000000000003 L 61.00574712643678 27.601000000000003 L 61.00574712643678 40.001 Z"
                                pathFrom="M 56.79845422116528 40.001 L 56.79845422116528 40.001 L 61.00574712643678 40.001 L 61.00574712643678 40.001 L 61.00574712643678 40.001 L 61.00574712643678 40.001 L 61.00574712643678 40.001 L 56.79845422116528 40.001 Z"
                                cy="27.6" cx="61.00574712643678" j="7" val="31" barHeight="12.4" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2167"
                                d="M 65.21304003170827 40.001 L 65.21304003170827 25.201 L 69.42033293697978 25.201 L 69.42033293697978 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 65.21304003170827 40.001 L 65.21304003170827 25.201 L 69.42033293697978 25.201 L 69.42033293697978 40.001 Z"
                                pathFrom="M 65.21304003170827 40.001 L 65.21304003170827 40.001 L 69.42033293697978 40.001 L 69.42033293697978 40.001 L 69.42033293697978 40.001 L 69.42033293697978 40.001 L 69.42033293697978 40.001 L 65.21304003170827 40.001 Z"
                                cy="25.2" cx="69.42033293697978" j="8" val="37" barHeight="14.8" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2169"
                                d="M 73.62762584225128 40.001 L 73.62762584225128 24.401 L 77.83491874752278 24.401 L 77.83491874752278 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 73.62762584225128 40.001 L 73.62762584225128 24.401 L 77.83491874752278 24.401 L 77.83491874752278 40.001 Z"
                                pathFrom="M 73.62762584225128 40.001 L 73.62762584225128 40.001 L 77.83491874752278 40.001 L 77.83491874752278 40.001 L 77.83491874752278 40.001 L 77.83491874752278 40.001 L 77.83491874752278 40.001 L 73.62762584225128 40.001 Z"
                                cy="24.4" cx="77.83491874752278" j="9" val="39" barHeight="15.6" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2171"
                                d="M 82.04221165279428 40.001 L 82.04221165279428 15.200999999999999 L 86.24950455806578 15.200999999999999 L 86.24950455806578 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 82.04221165279428 40.001 L 82.04221165279428 15.200999999999999 L 86.24950455806578 15.200999999999999 L 86.24950455806578 40.001 Z"
                                pathFrom="M 82.04221165279428 40.001 L 82.04221165279428 40.001 L 86.24950455806578 40.001 L 86.24950455806578 40.001 L 86.24950455806578 40.001 L 86.24950455806578 40.001 L 86.24950455806578 40.001 L 82.04221165279428 40.001 Z"
                                cy="15.2" cx="86.24950455806578" j="10" val="62" barHeight="24.8" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2173"
                                d="M 90.45679746333728 40.001 L 90.45679746333728 19.601000000000003 L 94.66409036860878 19.601000000000003 L 94.66409036860878 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 90.45679746333728 40.001 L 90.45679746333728 19.601000000000003 L 94.66409036860878 19.601000000000003 L 94.66409036860878 40.001 Z"
                                pathFrom="M 90.45679746333728 40.001 L 90.45679746333728 40.001 L 94.66409036860878 40.001 L 94.66409036860878 40.001 L 94.66409036860878 40.001 L 94.66409036860878 40.001 L 94.66409036860878 40.001 L 90.45679746333728 40.001 Z"
                                cy="19.6" cx="94.66409036860878" j="11" val="51" barHeight="20.4" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2175"
                                d="M 98.87138327388028 40.001 L 98.87138327388028 26.001 L 103.07867617915178 26.001 L 103.07867617915178 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 98.87138327388028 40.001 L 98.87138327388028 26.001 L 103.07867617915178 26.001 L 103.07867617915178 40.001 Z"
                                pathFrom="M 98.87138327388028 40.001 L 98.87138327388028 40.001 L 103.07867617915178 40.001 L 103.07867617915178 40.001 L 103.07867617915178 40.001 L 103.07867617915178 40.001 L 103.07867617915178 40.001 L 98.87138327388028 40.001 Z"
                                cy="26" cx="103.07867617915178" j="12" val="35" barHeight="14" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2177"
                                d="M 107.2859690844233 40.001 L 107.2859690844233 23.601000000000003 L 111.4932619896948 23.601000000000003 L 111.4932619896948 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 107.2859690844233 40.001 L 107.2859690844233 23.601000000000003 L 111.4932619896948 23.601000000000003 L 111.4932619896948 40.001 Z"
                                pathFrom="M 107.2859690844233 40.001 L 107.2859690844233 40.001 L 111.4932619896948 40.001 L 111.4932619896948 40.001 L 111.4932619896948 40.001 L 111.4932619896948 40.001 L 111.4932619896948 40.001 L 107.2859690844233 40.001 Z"
                                cy="23.6" cx="111.4932619896948" j="13" val="41" barHeight="16.4" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2179"
                                d="M 115.7005548949663 40.001 L 115.7005548949663 26.001 L 119.9078478002378 26.001 L 119.9078478002378 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 115.7005548949663 40.001 L 115.7005548949663 26.001 L 119.9078478002378 26.001 L 119.9078478002378 40.001 Z"
                                pathFrom="M 115.7005548949663 40.001 L 115.7005548949663 40.001 L 119.9078478002378 40.001 L 119.9078478002378 40.001 L 119.9078478002378 40.001 L 119.9078478002378 40.001 L 119.9078478002378 40.001 L 115.7005548949663 40.001 Z"
                                cy="26" cx="119.9078478002378" j="14" val="35" barHeight="14" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2181"
                                d="M 124.1151407055093 40.001 L 124.1151407055093 29.201 L 128.32243361078082 29.201 L 128.32243361078082 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 124.1151407055093 40.001 L 124.1151407055093 29.201 L 128.32243361078082 29.201 L 128.32243361078082 40.001 Z"
                                pathFrom="M 124.1151407055093 40.001 L 124.1151407055093 40.001 L 128.32243361078082 40.001 L 128.32243361078082 40.001 L 128.32243361078082 40.001 L 128.32243361078082 40.001 L 128.32243361078082 40.001 L 124.1151407055093 40.001 Z"
                                cy="29.2" cx="128.32243361078082" j="15" val="27" barHeight="10.8" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2183"
                                d="M 132.5297265160523 40.001 L 132.5297265160523 2.800999999999997 L 136.73701942132382 2.800999999999997 L 136.73701942132382 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 132.5297265160523 40.001 L 132.5297265160523 2.800999999999997 L 136.73701942132382 2.800999999999997 L 136.73701942132382 40.001 Z"
                                pathFrom="M 132.5297265160523 40.001 L 132.5297265160523 40.001 L 136.73701942132382 40.001 L 136.73701942132382 40.001 L 136.73701942132382 40.001 L 136.73701942132382 40.001 L 136.73701942132382 40.001 L 132.5297265160523 40.001 Z"
                                cy="2.799999999999997" cx="136.73701942132382" j="16" val="93" barHeight="37.2"
                                barWidth="4.207292905271502"></path>
                              <path id="SvgjsPath2185"
                                d="M 140.9443123265953 40.001 L 140.9443123265953 18.801000000000002 L 145.15160523186682 18.801000000000002 L 145.15160523186682 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 140.9443123265953 40.001 L 140.9443123265953 18.801000000000002 L 145.15160523186682 18.801000000000002 L 145.15160523186682 40.001 Z"
                                pathFrom="M 140.9443123265953 40.001 L 140.9443123265953 40.001 L 145.15160523186682 40.001 L 145.15160523186682 40.001 L 145.15160523186682 40.001 L 145.15160523186682 40.001 L 145.15160523186682 40.001 L 140.9443123265953 40.001 Z"
                                cy="18.8" cx="145.15160523186682" j="17" val="53" barHeight="21.2" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2187"
                                d="M 149.3588981371383 40.001 L 149.3588981371383 15.601 L 153.56619104240983 15.601 L 153.56619104240983 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 149.3588981371383 40.001 L 149.3588981371383 15.601 L 153.56619104240983 15.601 L 153.56619104240983 40.001 Z"
                                pathFrom="M 149.3588981371383 40.001 L 149.3588981371383 40.001 L 153.56619104240983 40.001 L 153.56619104240983 40.001 L 153.56619104240983 40.001 L 153.56619104240983 40.001 L 153.56619104240983 40.001 L 149.3588981371383 40.001 Z"
                                cy="15.600000000000001" cx="153.56619104240983" j="18" val="61" barHeight="24.4"
                                barWidth="4.207292905271502"></path>
                              <path id="SvgjsPath2189"
                                d="M 157.7734839476813 40.001 L 157.7734839476813 29.201 L 161.98077685295283 29.201 L 161.98077685295283 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 157.7734839476813 40.001 L 157.7734839476813 29.201 L 161.98077685295283 29.201 L 161.98077685295283 40.001 Z"
                                pathFrom="M 157.7734839476813 40.001 L 157.7734839476813 40.001 L 161.98077685295283 40.001 L 161.98077685295283 40.001 L 161.98077685295283 40.001 L 161.98077685295283 40.001 L 161.98077685295283 40.001 L 157.7734839476813 40.001 Z"
                                cy="29.2" cx="161.98077685295283" j="19" val="27" barHeight="10.8" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2191"
                                d="M 166.18806975822432 40.001 L 166.18806975822432 18.401 L 170.39536266349583 18.401 L 170.39536266349583 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 166.18806975822432 40.001 L 166.18806975822432 18.401 L 170.39536266349583 18.401 L 170.39536266349583 40.001 Z"
                                pathFrom="M 166.18806975822432 40.001 L 166.18806975822432 40.001 L 170.39536266349583 40.001 L 170.39536266349583 40.001 L 170.39536266349583 40.001 L 170.39536266349583 40.001 L 170.39536266349583 40.001 L 166.18806975822432 40.001 Z"
                                cy="18.4" cx="170.39536266349583" j="20" val="54" barHeight="21.6" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2193"
                                d="M 174.60265556876732 40.001 L 174.60265556876732 22.801000000000002 L 178.80994847403883 22.801000000000002 L 178.80994847403883 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 174.60265556876732 40.001 L 174.60265556876732 22.801000000000002 L 178.80994847403883 22.801000000000002 L 178.80994847403883 40.001 Z"
                                pathFrom="M 174.60265556876732 40.001 L 174.60265556876732 40.001 L 178.80994847403883 40.001 L 178.80994847403883 40.001 L 178.80994847403883 40.001 L 178.80994847403883 40.001 L 178.80994847403883 40.001 L 174.60265556876732 40.001 Z"
                                cy="22.8" cx="178.80994847403883" j="21" val="43" barHeight="17.2" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2195"
                                d="M 183.01724137931032 40.001 L 183.01724137931032 32.400999999999996 L 187.22453428458184 32.400999999999996 L 187.22453428458184 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 183.01724137931032 40.001 L 183.01724137931032 32.400999999999996 L 187.22453428458184 32.400999999999996 L 187.22453428458184 40.001 Z"
                                pathFrom="M 183.01724137931032 40.001 L 183.01724137931032 40.001 L 187.22453428458184 40.001 L 187.22453428458184 40.001 L 187.22453428458184 40.001 L 187.22453428458184 40.001 L 187.22453428458184 40.001 L 183.01724137931032 40.001 Z"
                                cy="32.4" cx="187.22453428458184" j="22" val="19" barHeight="7.6" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2197"
                                d="M 191.43182718985332 40.001 L 191.43182718985332 21.601000000000003 L 195.63912009512484 21.601000000000003 L 195.63912009512484 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 191.43182718985332 40.001 L 191.43182718985332 21.601000000000003 L 195.63912009512484 21.601000000000003 L 195.63912009512484 40.001 Z"
                                pathFrom="M 191.43182718985332 40.001 L 191.43182718985332 40.001 L 195.63912009512484 40.001 L 195.63912009512484 40.001 L 195.63912009512484 40.001 L 195.63912009512484 40.001 L 195.63912009512484 40.001 L 191.43182718985332 40.001 Z"
                                cy="21.6" cx="195.63912009512484" j="23" val="46" barHeight="18.4" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2199"
                                d="M 199.84641300039632 40.001 L 199.84641300039632 24.401 L 204.05370590566784 24.401 L 204.05370590566784 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 199.84641300039632 40.001 L 199.84641300039632 24.401 L 204.05370590566784 24.401 L 204.05370590566784 40.001 Z"
                                pathFrom="M 199.84641300039632 40.001 L 199.84641300039632 40.001 L 204.05370590566784 40.001 L 204.05370590566784 40.001 L 204.05370590566784 40.001 L 204.05370590566784 40.001 L 204.05370590566784 40.001 L 199.84641300039632 40.001 Z"
                                cy="24.4" cx="204.05370590566784" j="24" val="39" barHeight="15.6" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2201"
                                d="M 208.26099881093933 40.001 L 208.26099881093933 15.200999999999999 L 212.46829171621084 15.200999999999999 L 212.46829171621084 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 208.26099881093933 40.001 L 208.26099881093933 15.200999999999999 L 212.46829171621084 15.200999999999999 L 212.46829171621084 40.001 Z"
                                pathFrom="M 208.26099881093933 40.001 L 208.26099881093933 40.001 L 212.46829171621084 40.001 L 212.46829171621084 40.001 L 212.46829171621084 40.001 L 212.46829171621084 40.001 L 212.46829171621084 40.001 L 208.26099881093933 40.001 Z"
                                cy="15.2" cx="212.46829171621084" j="25" val="62" barHeight="24.8" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2203"
                                d="M 216.67558462148236 40.001 L 216.67558462148236 19.601000000000003 L 220.88287752675387 19.601000000000003 L 220.88287752675387 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 216.67558462148236 40.001 L 216.67558462148236 19.601000000000003 L 220.88287752675387 19.601000000000003 L 220.88287752675387 40.001 Z"
                                pathFrom="M 216.67558462148236 40.001 L 216.67558462148236 40.001 L 220.88287752675387 40.001 L 220.88287752675387 40.001 L 220.88287752675387 40.001 L 220.88287752675387 40.001 L 220.88287752675387 40.001 L 216.67558462148236 40.001 Z"
                                cy="19.6" cx="220.88287752675387" j="26" val="51" barHeight="20.4" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2205"
                                d="M 225.09017043202536 40.001 L 225.09017043202536 26.001 L 229.29746333729688 26.001 L 229.29746333729688 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 225.09017043202536 40.001 L 225.09017043202536 26.001 L 229.29746333729688 26.001 L 229.29746333729688 40.001 Z"
                                pathFrom="M 225.09017043202536 40.001 L 225.09017043202536 40.001 L 229.29746333729688 40.001 L 229.29746333729688 40.001 L 229.29746333729688 40.001 L 229.29746333729688 40.001 L 229.29746333729688 40.001 L 225.09017043202536 40.001 Z"
                                cy="26" cx="229.29746333729688" j="27" val="35" barHeight="14" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2207"
                                d="M 233.50475624256836 40.001 L 233.50475624256836 23.601000000000003 L 237.71204914783988 23.601000000000003 L 237.71204914783988 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 233.50475624256836 40.001 L 233.50475624256836 23.601000000000003 L 237.71204914783988 23.601000000000003 L 237.71204914783988 40.001 Z"
                                pathFrom="M 233.50475624256836 40.001 L 233.50475624256836 40.001 L 237.71204914783988 40.001 L 237.71204914783988 40.001 L 237.71204914783988 40.001 L 237.71204914783988 40.001 L 237.71204914783988 40.001 L 233.50475624256836 40.001 Z"
                                cy="23.6" cx="237.71204914783988" j="28" val="41" barHeight="16.4" barWidth="4.207292905271502">
                              </path>
                              <path id="SvgjsPath2209"
                                d="M 241.91934205311136 40.001 L 241.91934205311136 13.200999999999999 L 246.12663495838288 13.200999999999999 L 246.12663495838288 40.001 Z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskk0pkkpcy)"
                                pathTo="M 241.91934205311136 40.001 L 241.91934205311136 13.200999999999999 L 246.12663495838288 13.200999999999999 L 246.12663495838288 40.001 Z"
                                pathFrom="M 241.91934205311136 40.001 L 241.91934205311136 40.001 L 246.12663495838288 40.001 L 246.12663495838288 40.001 L 246.12663495838288 40.001 L 246.12663495838288 40.001 L 246.12663495838288 40.001 L 241.91934205311136 40.001 Z"
                                cy="13.2" cx="246.12663495838288" j="29" val="67" barHeight="26.8" barWidth="4.207292905271502">
                              </path>
                              <g id="SvgjsG2149" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                <g id="SvgjsG2150" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2152" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2154" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2156" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2158" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2160" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2162" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2164" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2166" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2168" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2170" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2172" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2174" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2176" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2178" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2180" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2182" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2184" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2186" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2188" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2190" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2192" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2194" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2196" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2198" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2200" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2202" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2204" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2206" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                                <g id="SvgjsG2208" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMaskk0pkkpcy)">
                                </g>
                              </g>
                            </g>
                            <g id="SvgjsG2148" class="apexcharts-datalabels" data:realIndex="0"></g>
                          </g>
                          <g id="SvgjsG2213" class="apexcharts-grid-borders" style="display: none;"></g>
                          <line id="SvgjsLine2222" x1="-7.988505747126437" y1="0" x2="252.01149425287355" y2="0" stroke="#b6b6b6"
                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                          <line id="SvgjsLine2223" x1="-7.988505747126437" y1="0" x2="252.01149425287355" y2="0" stroke-dasharray="0"
                            stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                          <g id="SvgjsG2224" class="apexcharts-xaxis" transform="translate(0, 0)">
                            <g id="SvgjsG2225" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                          </g>
                          <g id="SvgjsG2233" class="apexcharts-yaxis-annotations"></g>
                          <g id="SvgjsG2234" class="apexcharts-xaxis-annotations"></g>
                          <g id="SvgjsG2235" class="apexcharts-point-annotations"></g>
                        </g>
                      </svg>
                      <div class="apexcharts-tooltip apexcharts-theme-dark">
                        <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker"
                            style="background-color: rgb(32, 107, 196);"></span>
                          <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span
                                class="apexcharts-tooltip-text-y-value"></span></div>
                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span
                                class="apexcharts-tooltip-text-goals-value"></span></div>
                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span
                                class="apexcharts-tooltip-text-z-value"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                        <div class="apexcharts-yaxistooltip-text"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="row row-cards">
                <div class="col-sm-6 col-lg-3">
                  <div class="card card-sm">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="bg-primary avatar text-white">
                            <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path>
                              <path d="M12 3v3m0 12v3"></path>
                            </svg>
                          </span>
                        </div>
                        <div class="col">
                          <div class="font-weight-medium">
                            132 Sales
                          </div>
                          <div class="text-muted">
                            12 waiting payments
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="card card-sm">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="bg-green avatar text-white">
                            <!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                              <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                              <path d="M17 17h-11v-14h-2"></path>
                              <path d="M6 5l14 1l-1 7h-13"></path>
                            </svg>
                          </span>
                        </div>
                        <div class="col">
                          <div class="font-weight-medium">
                            78 Orders
                          </div>
                          <div class="text-muted">
                            32 shipped
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="card card-sm">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="bg-twitter avatar text-white">
                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path
                                d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z">
                              </path>
                            </svg>
                          </span>
                        </div>
                        <div class="col">
                          <div class="font-weight-medium">
                            623 Shares
                          </div>
                          <div class="text-muted">
                            16 today
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="card card-sm">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="bg-facebook avatar text-white">
                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                            </svg>
                          </span>
                        </div>
                        <div class="col">
                          <div class="font-weight-medium">
                            132 Likes
                          </div>
                          <div class="text-muted">
                            21 today
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Traffic summary</h3>
                  <div id="chart-mentions" class="chart-lg" style="min-height: 240px;">
                    <div id="apexchartsnkp0kvwpf" class="apexcharts-canvas apexchartsnkp0kvwpf apexcharts-theme-light" style="width: 586px; height: 240px;">
                      <svg id="SvgjsSvg2236" width="586" height="240" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable"
                        xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;">
                        <foreignObject x="0" y="0" width="586" height="240">
                          <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 120px;"></div>
                        </foreignObject>
                        <g id="SvgjsG2528" class="apexcharts-yaxis" rel="0" transform="translate(18, 0)">
                          <g id="SvgjsG2529" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2531" font-family="inherit" x="4"
                              y="11.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f"
                              class="apexcharts-text apexcharts-yaxis-label" style="font-family: inherit;">
                              <tspan id="SvgjsTspan2532">100</tspan>
                              <title>100</title>
                            </text><text id="SvgjsText2534" font-family="inherit" x="4" y="51.7" text-anchor="end"
                              dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label"
                              style="font-family: inherit;">
                              <tspan id="SvgjsTspan2535">80</tspan>
                              <title>80</title>
                            </text><text id="SvgjsText2537" font-family="inherit" x="4" y="91.9" text-anchor="end"
                              dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label"
                              style="font-family: inherit;">
                              <tspan id="SvgjsTspan2538">60</tspan>
                              <title>60</title>
                            </text><text id="SvgjsText2540" font-family="inherit" x="4" y="132.10000000000002" text-anchor="end"
                              dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label"
                              style="font-family: inherit;">
                              <tspan id="SvgjsTspan2541">40</tspan>
                              <title>40</title>
                            </text><text id="SvgjsText2543" font-family="inherit" x="4" y="172.3" text-anchor="end"
                              dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label"
                              style="font-family: inherit;">
                              <tspan id="SvgjsTspan2544">20</tspan>
                              <title>20</title>
                            </text><text id="SvgjsText2546" font-family="inherit" x="4" y="212.5" text-anchor="end"
                              dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label"
                              style="font-family: inherit;">
                              <tspan id="SvgjsTspan2547">0</tspan>
                              <title>0</title>
                            </text></g>
                        </g>
                        <g id="SvgjsG2238" class="apexcharts-inner apexcharts-graphical" transform="translate(46.12962962962963, 10)">
                          <defs id="SvgjsDefs2237">
                            <linearGradient id="SvgjsLinearGradient2242" x1="0" y1="0" x2="0" y2="1">
                              <stop id="SvgjsStop2243" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                              <stop id="SvgjsStop2244" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                              <stop id="SvgjsStop2245" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                            </linearGradient>
                            <clipPath id="gridRectMasknkp0kvwpf">
                              <rect id="SvgjsRect2253" width="558.0000000000001" height="201" x="-12.12962962962963" y="0" rx="0"
                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                            </clipPath>
                            <clipPath id="forecastMasknkp0kvwpf"></clipPath>
                            <clipPath id="nonForecastMasknkp0kvwpf"></clipPath>
                            <clipPath id="gridRectMarkerMasknkp0kvwpf">
                              <rect id="SvgjsRect2254" width="537.7407407407408" height="205" x="-2" y="-2" rx="0"
                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                            </clipPath>
                          </defs>
                          <rect id="SvgjsRect2246" width="7.413065843621399" height="201" x="0" y="0" rx="0"
                            ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2242)"
                            class="apexcharts-xcrosshairs" y2="201" filter="none" fill-opacity="0.9"></rect>
                          <line id="SvgjsLine2492" x1="59.3045267489712" y1="202" x2="59.3045267489712" y2="208" stroke="#e0e0e0"
                            stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                          <line id="SvgjsLine2494" x1="163.08744855967075" y1="202" x2="163.08744855967075" y2="208" stroke="#e0e0e0"
                            stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                          <line id="SvgjsLine2496" x1="266.8703703703703" y1="202" x2="266.8703703703703" y2="208" stroke="#e0e0e0"
                            stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                          <line id="SvgjsLine2498" x1="385.4794238683129" y1="202" x2="385.4794238683129" y2="208" stroke="#e0e0e0"
                            stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                          <line id="SvgjsLine2500" x1="504.08847736625546" y1="202" x2="504.08847736625546" y2="208" stroke="#e0e0e0"
                            stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                          <g id="SvgjsG2487" class="apexcharts-grid">
                            <g id="SvgjsG2488" class="apexcharts-gridlines-horizontal">
                              <line id="SvgjsLine2502" x1="-10.12962962962963" y1="40.2" x2="543.8703703703704" y2="40.2" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2503" x1="-10.12962962962963" y1="80.4" x2="543.8703703703704" y2="80.4" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2504" x1="-10.12962962962963" y1="120.60000000000001" x2="543.8703703703704" y2="120.60000000000001"
                                stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2505" x1="-10.12962962962963" y1="160.8" x2="543.8703703703704" y2="160.8" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                            </g>
                            <g id="SvgjsG2489" class="apexcharts-gridlines-vertical">
                              <line id="SvgjsLine2491" x1="59.3045267489712" y1="0" x2="59.3045267489712" y2="201" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2493" x1="163.08744855967075" y1="0" x2="163.08744855967075" y2="201" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2495" x1="266.8703703703703" y1="0" x2="266.8703703703703" y2="201" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2497" x1="385.4794238683129" y1="0" x2="385.4794238683129" y2="201" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2499" x1="504.08847736625546" y1="0" x2="504.08847736625546" y2="201" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                            </g>
                            <line id="SvgjsLine2508" x1="0" y1="201" x2="533.7407407407408" y2="201" stroke="transparent"
                              stroke-dasharray="0" stroke-linecap="butt"></line>
                            <line id="SvgjsLine2507" x1="0" y1="1" x2="0" y2="201" stroke="transparent"
                              stroke-dasharray="0" stroke-linecap="butt"></line>
                          </g>
                          <g id="SvgjsG2255" class="apexcharts-bar-series apexcharts-plot-series">
                            <g id="SvgjsG2256" class="apexcharts-series" seriesName="Web" rel="1" data:realIndex="0">
                              <path id="SvgjsPath2260"
                                d="M -3.7065329218106995 201.001 L -3.7065329218106995 198.991 L 3.7065329218106995 198.991 L 3.7065329218106995 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M -3.7065329218106995 201.001 L -3.7065329218106995 198.991 L 3.7065329218106995 198.991 L 3.7065329218106995 201.001 z"
                                pathFrom="M -3.7065329218106995 201.001 L -3.7065329218106995 201.001 L 3.7065329218106995 201.001 L 3.7065329218106995 201.001 L 3.7065329218106995 201.001 L 3.7065329218106995 201.001 L 3.7065329218106995 201.001 L -3.7065329218106995 201.001 z"
                                cy="198.99" cx="3.706532921810699" j="0" val="1" barHeight="2.01" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2262"
                                d="M 11.119598765432098 201.001 L 11.119598765432098 201.001 L 18.532664609053498 201.001 L 18.532664609053498 201.001 z"
                                fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 11.119598765432098 201.001 L 11.119598765432098 201.001 L 18.532664609053498 201.001 L 18.532664609053498 201.001 z"
                                pathFrom="M 11.119598765432098 201.001 L 11.119598765432098 201.001 L 18.532664609053498 201.001 L 18.532664609053498 201.001 L 18.532664609053498 201.001 L 18.532664609053498 201.001 L 18.532664609053498 201.001 L 11.119598765432098 201.001 z"
                                cy="201" cx="18.532664609053494" j="1" val="0" barHeight="0" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2264"
                                d="M 25.945730452674898 201.001 L 25.945730452674898 201.001 L 33.3587962962963 201.001 L 33.3587962962963 201.001 z"
                                fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 25.945730452674898 201.001 L 25.945730452674898 201.001 L 33.3587962962963 201.001 L 33.3587962962963 201.001 z"
                                pathFrom="M 25.945730452674898 201.001 L 25.945730452674898 201.001 L 33.3587962962963 201.001 L 33.3587962962963 201.001 L 33.3587962962963 201.001 L 33.3587962962963 201.001 L 33.3587962962963 201.001 L 25.945730452674898 201.001 z"
                                cy="201" cx="33.35879629629629" j="2" val="0" barHeight="0" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2266"
                                d="M 40.7718621399177 201.001 L 40.7718621399177 201.001 L 48.1849279835391 201.001 L 48.1849279835391 201.001 z"
                                fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 40.7718621399177 201.001 L 40.7718621399177 201.001 L 48.1849279835391 201.001 L 48.1849279835391 201.001 z"
                                pathFrom="M 40.7718621399177 201.001 L 40.7718621399177 201.001 L 48.1849279835391 201.001 L 48.1849279835391 201.001 L 48.1849279835391 201.001 L 48.1849279835391 201.001 L 48.1849279835391 201.001 L 40.7718621399177 201.001 z"
                                cy="201" cx="48.1849279835391" j="3" val="0" barHeight="0" barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2268"
                                d="M 55.597993827160494 201.001 L 55.597993827160494 201.001 L 63.01105967078189 201.001 L 63.01105967078189 201.001 z"
                                fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 55.597993827160494 201.001 L 55.597993827160494 201.001 L 63.01105967078189 201.001 L 63.01105967078189 201.001 z"
                                pathFrom="M 55.597993827160494 201.001 L 55.597993827160494 201.001 L 63.01105967078189 201.001 L 63.01105967078189 201.001 L 63.01105967078189 201.001 L 63.01105967078189 201.001 L 63.01105967078189 201.001 L 55.597993827160494 201.001 z"
                                cy="201" cx="63.01105967078188" j="4" val="0" barHeight="0" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2270"
                                d="M 70.42412551440329 201.001 L 70.42412551440329 198.991 L 77.83719135802468 198.991 L 77.83719135802468 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 70.42412551440329 201.001 L 70.42412551440329 198.991 L 77.83719135802468 198.991 L 77.83719135802468 201.001 z"
                                pathFrom="M 70.42412551440329 201.001 L 70.42412551440329 201.001 L 77.83719135802468 201.001 L 77.83719135802468 201.001 L 77.83719135802468 201.001 L 77.83719135802468 201.001 L 77.83719135802468 201.001 L 70.42412551440329 201.001 z"
                                cy="198.99" cx="77.83719135802468" j="5" val="1" barHeight="2.01" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2272"
                                d="M 85.2502572016461 201.001 L 85.2502572016461 198.991 L 92.66332304526749 198.991 L 92.66332304526749 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 85.2502572016461 201.001 L 85.2502572016461 198.991 L 92.66332304526749 198.991 L 92.66332304526749 201.001 z"
                                pathFrom="M 85.2502572016461 201.001 L 85.2502572016461 201.001 L 92.66332304526749 201.001 L 92.66332304526749 201.001 L 92.66332304526749 201.001 L 92.66332304526749 201.001 L 92.66332304526749 201.001 L 85.2502572016461 201.001 z"
                                cy="198.99" cx="92.66332304526749" j="6" val="1" barHeight="2.01" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2274"
                                d="M 100.07638888888889 201.001 L 100.07638888888889 201.001 L 107.48945473251028 201.001 L 107.48945473251028 201.001 z"
                                fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 100.07638888888889 201.001 L 100.07638888888889 201.001 L 107.48945473251028 201.001 L 107.48945473251028 201.001 z"
                                pathFrom="M 100.07638888888889 201.001 L 100.07638888888889 201.001 L 107.48945473251028 201.001 L 107.48945473251028 201.001 L 107.48945473251028 201.001 L 107.48945473251028 201.001 L 107.48945473251028 201.001 L 100.07638888888889 201.001 z"
                                cy="201" cx="107.48945473251028" j="7" val="0" barHeight="0" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2276"
                                d="M 114.90252057613168 201.001 L 114.90252057613168 201.001 L 122.31558641975307 201.001 L 122.31558641975307 201.001 z"
                                fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 114.90252057613168 201.001 L 114.90252057613168 201.001 L 122.31558641975307 201.001 L 122.31558641975307 201.001 z"
                                pathFrom="M 114.90252057613168 201.001 L 114.90252057613168 201.001 L 122.31558641975307 201.001 L 122.31558641975307 201.001 L 122.31558641975307 201.001 L 122.31558641975307 201.001 L 122.31558641975307 201.001 L 114.90252057613168 201.001 z"
                                cy="201" cx="122.31558641975307" j="8" val="0" barHeight="0" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2278"
                                d="M 129.7286522633745 201.001 L 129.7286522633745 201.001 L 137.1417181069959 201.001 L 137.1417181069959 201.001 z"
                                fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 129.7286522633745 201.001 L 129.7286522633745 201.001 L 137.1417181069959 201.001 L 137.1417181069959 201.001 z"
                                pathFrom="M 129.7286522633745 201.001 L 129.7286522633745 201.001 L 137.1417181069959 201.001 L 137.1417181069959 201.001 L 137.1417181069959 201.001 L 137.1417181069959 201.001 L 137.1417181069959 201.001 L 129.7286522633745 201.001 z"
                                cy="201" cx="137.1417181069959" j="9" val="0" barHeight="0" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2280"
                                d="M 144.5547839506173 201.001 L 144.5547839506173 196.981 L 151.9678497942387 196.981 L 151.9678497942387 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 144.5547839506173 201.001 L 144.5547839506173 196.981 L 151.9678497942387 196.981 L 151.9678497942387 201.001 z"
                                pathFrom="M 144.5547839506173 201.001 L 144.5547839506173 201.001 L 151.9678497942387 201.001 L 151.9678497942387 201.001 L 151.9678497942387 201.001 L 151.9678497942387 201.001 L 151.9678497942387 201.001 L 144.5547839506173 201.001 z"
                                cy="196.98" cx="151.9678497942387" j="10" val="2" barHeight="4.02" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2282"
                                d="M 159.38091563786008 201.001 L 159.38091563786008 176.881 L 166.7939814814815 176.881 L 166.7939814814815 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 159.38091563786008 201.001 L 159.38091563786008 176.881 L 166.7939814814815 176.881 L 166.7939814814815 201.001 z"
                                pathFrom="M 159.38091563786008 201.001 L 159.38091563786008 201.001 L 166.7939814814815 201.001 L 166.7939814814815 201.001 L 166.7939814814815 201.001 L 166.7939814814815 201.001 L 166.7939814814815 201.001 L 159.38091563786008 201.001 z"
                                cy="176.88" cx="166.7939814814815" j="11" val="12" barHeight="24.12" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2284"
                                d="M 174.2070473251029 201.001 L 174.2070473251029 190.951 L 181.62011316872432 190.951 L 181.62011316872432 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 174.2070473251029 201.001 L 174.2070473251029 190.951 L 181.62011316872432 190.951 L 181.62011316872432 201.001 z"
                                pathFrom="M 174.2070473251029 201.001 L 174.2070473251029 201.001 L 181.62011316872432 201.001 L 181.62011316872432 201.001 L 181.62011316872432 201.001 L 181.62011316872432 201.001 L 181.62011316872432 201.001 L 174.2070473251029 201.001 z"
                                cy="190.95" cx="181.62011316872432" j="12" val="5" barHeight="10.049999999999999"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2286"
                                d="M 189.0331790123457 201.001 L 189.0331790123457 184.92100000000002 L 196.4462448559671 184.92100000000002 L 196.4462448559671 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 189.0331790123457 201.001 L 189.0331790123457 184.92100000000002 L 196.4462448559671 184.92100000000002 L 196.4462448559671 201.001 z"
                                pathFrom="M 189.0331790123457 201.001 L 189.0331790123457 201.001 L 196.4462448559671 201.001 L 196.4462448559671 201.001 L 196.4462448559671 201.001 L 196.4462448559671 201.001 L 196.4462448559671 201.001 L 189.0331790123457 201.001 z"
                                cy="184.92000000000002" cx="196.4462448559671" j="13" val="8" barHeight="16.08"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2288"
                                d="M 203.8593106995885 201.001 L 203.8593106995885 156.781 L 211.2723765432099 156.781 L 211.2723765432099 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 203.8593106995885 201.001 L 203.8593106995885 156.781 L 211.2723765432099 156.781 L 211.2723765432099 201.001 z"
                                pathFrom="M 203.8593106995885 201.001 L 203.8593106995885 201.001 L 211.2723765432099 201.001 L 211.2723765432099 201.001 L 211.2723765432099 201.001 L 211.2723765432099 201.001 L 211.2723765432099 201.001 L 203.8593106995885 201.001 z"
                                cy="156.78" cx="211.2723765432099" j="14" val="22" barHeight="44.22" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2290"
                                d="M 218.68544238683128 201.001 L 218.68544238683128 188.941 L 226.0985082304527 188.941 L 226.0985082304527 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 218.68544238683128 201.001 L 218.68544238683128 188.941 L 226.0985082304527 188.941 L 226.0985082304527 201.001 z"
                                pathFrom="M 218.68544238683128 201.001 L 218.68544238683128 201.001 L 226.0985082304527 201.001 L 226.0985082304527 201.001 L 226.0985082304527 201.001 L 226.0985082304527 201.001 L 226.0985082304527 201.001 L 218.68544238683128 201.001 z"
                                cy="188.94" cx="226.0985082304527" j="15" val="6" barHeight="12.06" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2292"
                                d="M 233.51157407407408 201.001 L 233.51157407407408 184.92100000000002 L 240.9246399176955 184.92100000000002 L 240.9246399176955 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 233.51157407407408 201.001 L 233.51157407407408 184.92100000000002 L 240.9246399176955 184.92100000000002 L 240.9246399176955 201.001 z"
                                pathFrom="M 233.51157407407408 201.001 L 233.51157407407408 201.001 L 240.9246399176955 201.001 L 240.9246399176955 201.001 L 240.9246399176955 201.001 L 240.9246399176955 201.001 L 240.9246399176955 201.001 L 233.51157407407408 201.001 z"
                                cy="184.92000000000002" cx="240.9246399176955" j="16" val="8" barHeight="16.08"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2294"
                                d="M 248.3377057613169 201.001 L 248.3377057613169 188.941 L 255.7507716049383 188.941 L 255.7507716049383 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 248.3377057613169 201.001 L 248.3377057613169 188.941 L 255.7507716049383 188.941 L 255.7507716049383 201.001 z"
                                pathFrom="M 248.3377057613169 201.001 L 248.3377057613169 201.001 L 255.7507716049383 201.001 L 255.7507716049383 201.001 L 255.7507716049383 201.001 L 255.7507716049383 201.001 L 255.7507716049383 201.001 L 248.3377057613169 201.001 z"
                                cy="188.94" cx="255.75077160493834" j="17" val="6" barHeight="12.06" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2296"
                                d="M 263.16383744855966 201.001 L 263.16383744855966 192.961 L 270.57690329218104 192.961 L 270.57690329218104 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 263.16383744855966 201.001 L 263.16383744855966 192.961 L 270.57690329218104 192.961 L 270.57690329218104 201.001 z"
                                pathFrom="M 263.16383744855966 201.001 L 263.16383744855966 201.001 L 270.57690329218104 201.001 L 270.57690329218104 201.001 L 270.57690329218104 201.001 L 270.57690329218104 201.001 L 270.57690329218104 201.001 L 263.16383744855966 201.001 z"
                                cy="192.96" cx="270.57690329218104" j="18" val="4" barHeight="8.04" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2298"
                                d="M 277.9899691358025 201.001 L 277.9899691358025 198.991 L 285.40303497942386 198.991 L 285.40303497942386 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 277.9899691358025 201.001 L 277.9899691358025 198.991 L 285.40303497942386 198.991 L 285.40303497942386 201.001 z"
                                pathFrom="M 277.9899691358025 201.001 L 277.9899691358025 201.001 L 285.40303497942386 201.001 L 285.40303497942386 201.001 L 285.40303497942386 201.001 L 285.40303497942386 201.001 L 285.40303497942386 201.001 L 277.9899691358025 201.001 z"
                                cy="198.99" cx="285.40303497942386" j="19" val="1" barHeight="2.01" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2300"
                                d="M 292.81610082304525 201.001 L 292.81610082304525 184.92100000000002 L 300.22916666666663 184.92100000000002 L 300.22916666666663 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 292.81610082304525 201.001 L 292.81610082304525 184.92100000000002 L 300.22916666666663 184.92100000000002 L 300.22916666666663 201.001 z"
                                pathFrom="M 292.81610082304525 201.001 L 292.81610082304525 201.001 L 300.22916666666663 201.001 L 300.22916666666663 201.001 L 300.22916666666663 201.001 L 300.22916666666663 201.001 L 300.22916666666663 201.001 L 292.81610082304525 201.001 z"
                                cy="184.92000000000002" cx="300.22916666666663" j="20" val="8" barHeight="16.08"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2302"
                                d="M 307.64223251028807 201.001 L 307.64223251028807 152.761 L 315.05529835390945 152.761 L 315.05529835390945 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 307.64223251028807 201.001 L 307.64223251028807 152.761 L 315.05529835390945 152.761 L 315.05529835390945 201.001 z"
                                pathFrom="M 307.64223251028807 201.001 L 307.64223251028807 201.001 L 315.05529835390945 201.001 L 315.05529835390945 201.001 L 315.05529835390945 201.001 L 315.05529835390945 201.001 L 315.05529835390945 201.001 L 307.64223251028807 201.001 z"
                                cy="152.76" cx="315.05529835390945" j="21" val="24" barHeight="48.24" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2304"
                                d="M 322.46836419753083 201.001 L 322.46836419753083 142.711 L 329.8814300411522 142.711 L 329.8814300411522 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 322.46836419753083 201.001 L 322.46836419753083 142.711 L 329.8814300411522 142.711 L 329.8814300411522 201.001 z"
                                pathFrom="M 322.46836419753083 201.001 L 322.46836419753083 201.001 L 329.8814300411522 201.001 L 329.8814300411522 201.001 L 329.8814300411522 201.001 L 329.8814300411522 201.001 L 329.8814300411522 201.001 L 322.46836419753083 201.001 z"
                                cy="142.71" cx="329.8814300411522" j="22" val="29" barHeight="58.29" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2306"
                                d="M 337.29449588477365 201.001 L 337.29449588477365 98.49100000000001 L 344.70756172839504 98.49100000000001 L 344.70756172839504 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 337.29449588477365 201.001 L 337.29449588477365 98.49100000000001 L 344.70756172839504 98.49100000000001 L 344.70756172839504 201.001 z"
                                pathFrom="M 337.29449588477365 201.001 L 337.29449588477365 201.001 L 344.70756172839504 201.001 L 344.70756172839504 201.001 L 344.70756172839504 201.001 L 344.70756172839504 201.001 L 344.70756172839504 201.001 L 337.29449588477365 201.001 z"
                                cy="98.49000000000001" cx="344.70756172839504" j="23" val="51" barHeight="102.50999999999999"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2308"
                                d="M 352.1206275720165 201.001 L 352.1206275720165 120.60100000000001 L 359.53369341563786 120.60100000000001 L 359.53369341563786 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 352.1206275720165 201.001 L 352.1206275720165 120.60100000000001 L 359.53369341563786 120.60100000000001 L 359.53369341563786 201.001 z"
                                pathFrom="M 352.1206275720165 201.001 L 352.1206275720165 201.001 L 359.53369341563786 201.001 L 359.53369341563786 201.001 L 359.53369341563786 201.001 L 359.53369341563786 201.001 L 359.53369341563786 201.001 L 352.1206275720165 201.001 z"
                                cy="120.60000000000001" cx="359.53369341563786" j="24" val="40" barHeight="80.39999999999999"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2310"
                                d="M 366.94675925925924 201.001 L 366.94675925925924 106.531 L 374.3598251028806 106.531 L 374.3598251028806 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 366.94675925925924 201.001 L 366.94675925925924 106.531 L 374.3598251028806 106.531 L 374.3598251028806 201.001 z"
                                pathFrom="M 366.94675925925924 201.001 L 366.94675925925924 201.001 L 374.3598251028806 201.001 L 374.3598251028806 201.001 L 374.3598251028806 201.001 L 374.3598251028806 201.001 L 374.3598251028806 201.001 L 366.94675925925924 201.001 z"
                                cy="106.53" cx="374.3598251028806" j="25" val="47" barHeight="94.47" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2312"
                                d="M 381.77289094650206 201.001 L 381.77289094650206 154.77100000000002 L 389.18595679012344 154.77100000000002 L 389.18595679012344 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 381.77289094650206 201.001 L 381.77289094650206 154.77100000000002 L 389.18595679012344 154.77100000000002 L 389.18595679012344 201.001 z"
                                pathFrom="M 381.77289094650206 201.001 L 381.77289094650206 201.001 L 389.18595679012344 201.001 L 389.18595679012344 201.001 L 389.18595679012344 201.001 L 389.18595679012344 201.001 L 389.18595679012344 201.001 L 381.77289094650206 201.001 z"
                                cy="154.77" cx="389.18595679012344" j="26" val="23" barHeight="46.23" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2314"
                                d="M 396.5990226337448 201.001 L 396.5990226337448 148.741 L 404.0120884773662 148.741 L 404.0120884773662 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 396.5990226337448 201.001 L 396.5990226337448 148.741 L 404.0120884773662 148.741 L 404.0120884773662 201.001 z"
                                pathFrom="M 396.5990226337448 201.001 L 396.5990226337448 201.001 L 404.0120884773662 201.001 L 404.0120884773662 201.001 L 404.0120884773662 201.001 L 404.0120884773662 201.001 L 404.0120884773662 201.001 L 396.5990226337448 201.001 z"
                                cy="148.74" cx="404.0120884773662" j="27" val="26" barHeight="52.26" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2316"
                                d="M 411.42515432098764 201.001 L 411.42515432098764 100.501 L 418.838220164609 100.501 L 418.838220164609 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 411.42515432098764 201.001 L 411.42515432098764 100.501 L 418.838220164609 100.501 L 418.838220164609 201.001 z"
                                pathFrom="M 411.42515432098764 201.001 L 411.42515432098764 201.001 L 418.838220164609 201.001 L 418.838220164609 201.001 L 418.838220164609 201.001 L 418.838220164609 201.001 L 418.838220164609 201.001 L 411.42515432098764 201.001 z"
                                cy="100.5" cx="418.838220164609" j="28" val="50" barHeight="100.5" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2318"
                                d="M 426.25128600823047 201.001 L 426.25128600823047 148.741 L 433.66435185185185 148.741 L 433.66435185185185 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 426.25128600823047 201.001 L 426.25128600823047 148.741 L 433.66435185185185 148.741 L 433.66435185185185 201.001 z"
                                pathFrom="M 426.25128600823047 201.001 L 426.25128600823047 201.001 L 433.66435185185185 201.001 L 433.66435185185185 201.001 L 433.66435185185185 201.001 L 433.66435185185185 201.001 L 433.66435185185185 201.001 L 426.25128600823047 201.001 z"
                                cy="148.74" cx="433.66435185185185" j="29" val="26" barHeight="52.26" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2320"
                                d="M 441.07741769547323 201.001 L 441.07741769547323 118.59100000000001 L 448.4904835390946 118.59100000000001 L 448.4904835390946 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 441.07741769547323 201.001 L 441.07741769547323 118.59100000000001 L 448.4904835390946 118.59100000000001 L 448.4904835390946 201.001 z"
                                pathFrom="M 441.07741769547323 201.001 L 441.07741769547323 201.001 L 448.4904835390946 201.001 L 448.4904835390946 201.001 L 448.4904835390946 201.001 L 448.4904835390946 201.001 L 448.4904835390946 201.001 L 441.07741769547323 201.001 z"
                                cy="118.59" cx="448.4904835390946" j="30" val="41" barHeight="82.41" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2322"
                                d="M 455.90354938271605 201.001 L 455.90354938271605 156.781 L 463.31661522633743 156.781 L 463.31661522633743 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 455.90354938271605 201.001 L 455.90354938271605 156.781 L 463.31661522633743 156.781 L 463.31661522633743 201.001 z"
                                pathFrom="M 455.90354938271605 201.001 L 455.90354938271605 201.001 L 463.31661522633743 201.001 L 463.31661522633743 201.001 L 463.31661522633743 201.001 L 463.31661522633743 201.001 L 463.31661522633743 201.001 L 455.90354938271605 201.001 z"
                                cy="156.78" cx="463.31661522633743" j="31" val="22" barHeight="44.22" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2324"
                                d="M 470.7296810699588 201.001 L 470.7296810699588 108.54100000000001 L 478.1427469135802 108.54100000000001 L 478.1427469135802 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 470.7296810699588 201.001 L 470.7296810699588 108.54100000000001 L 478.1427469135802 108.54100000000001 L 478.1427469135802 201.001 z"
                                pathFrom="M 470.7296810699588 201.001 L 470.7296810699588 201.001 L 478.1427469135802 201.001 L 478.1427469135802 201.001 L 478.1427469135802 201.001 L 478.1427469135802 201.001 L 478.1427469135802 201.001 L 470.7296810699588 201.001 z"
                                cy="108.54" cx="478.1427469135802" j="32" val="46" barHeight="92.46" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2326"
                                d="M 485.55581275720164 201.001 L 485.55581275720164 106.531 L 492.968878600823 106.531 L 492.968878600823 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 485.55581275720164 201.001 L 485.55581275720164 106.531 L 492.968878600823 106.531 L 492.968878600823 201.001 z"
                                pathFrom="M 485.55581275720164 201.001 L 485.55581275720164 201.001 L 492.968878600823 201.001 L 492.968878600823 201.001 L 492.968878600823 201.001 L 492.968878600823 201.001 L 492.968878600823 201.001 L 485.55581275720164 201.001 z"
                                cy="106.53" cx="492.968878600823" j="33" val="47" barHeight="94.47" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2328"
                                d="M 500.38194444444446 201.001 L 500.38194444444446 38.190999999999995 L 507.79501028806584 38.190999999999995 L 507.79501028806584 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 500.38194444444446 201.001 L 500.38194444444446 38.190999999999995 L 507.79501028806584 38.190999999999995 L 507.79501028806584 201.001 z"
                                pathFrom="M 500.38194444444446 201.001 L 500.38194444444446 201.001 L 507.79501028806584 201.001 L 507.79501028806584 201.001 L 507.79501028806584 201.001 L 507.79501028806584 201.001 L 507.79501028806584 201.001 L 500.38194444444446 201.001 z"
                                cy="38.19" cx="507.7950102880658" j="34" val="81" barHeight="162.81" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2330"
                                d="M 515.2080761316873 201.001 L 515.2080761316873 108.54100000000001 L 522.6211419753088 108.54100000000001 L 522.6211419753088 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 515.2080761316873 201.001 L 515.2080761316873 108.54100000000001 L 522.6211419753088 108.54100000000001 L 522.6211419753088 201.001 z"
                                pathFrom="M 515.2080761316873 201.001 L 515.2080761316873 201.001 L 522.6211419753088 201.001 L 522.6211419753088 201.001 L 522.6211419753088 201.001 L 522.6211419753088 201.001 L 522.6211419753088 201.001 L 515.2080761316873 201.001 z"
                                cy="108.54" cx="522.6211419753088" j="35" val="46" barHeight="92.46" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2332"
                                d="M 530.0342078189301 201.001 L 530.0342078189301 188.941 L 537.4472736625515 188.941 L 537.4472736625515 201.001 z"
                                fill="rgba(32,107,196,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 530.0342078189301 201.001 L 530.0342078189301 188.941 L 537.4472736625515 188.941 L 537.4472736625515 201.001 z"
                                pathFrom="M 530.0342078189301 201.001 L 530.0342078189301 201.001 L 537.4472736625515 201.001 L 537.4472736625515 201.001 L 537.4472736625515 201.001 L 537.4472736625515 201.001 L 537.4472736625515 201.001 L 530.0342078189301 201.001 z"
                                cy="188.94" cx="537.4472736625515" j="36" val="6" barHeight="12.06" barWidth="7.413065843621399">
                              </path>
                              <g id="SvgjsG2258" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                <g id="SvgjsG2259" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2261" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2263" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2265" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2267" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2269" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2271" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2273" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2275" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2277" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2279" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2281" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2283" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2285" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2287" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2289" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2291" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2293" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2295" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2297" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2299" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2301" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2303" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2305" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2307" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2309" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2311" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2313" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2315" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2317" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2319" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2321" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2323" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2325" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2327" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2329" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2331" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                              </g>
                            </g>
                            <g id="SvgjsG2333" class="apexcharts-series" seriesName="Social" rel="2" data:realIndex="1">
                              <path id="SvgjsPath2337"
                                d="M -3.7065329218106995 198.99200000000002 L -3.7065329218106995 194.972 L 3.7065329218106995 194.972 L 3.7065329218106995 198.99200000000002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M -3.7065329218106995 198.99200000000002 L -3.7065329218106995 194.972 L 3.7065329218106995 194.972 L 3.7065329218106995 198.99200000000002 z"
                                pathFrom="M -3.7065329218106995 198.99200000000002 L -3.7065329218106995 198.99200000000002 L 3.7065329218106995 198.99200000000002 L 3.7065329218106995 198.99200000000002 L 3.7065329218106995 198.99200000000002 L 3.7065329218106995 198.99200000000002 L 3.7065329218106995 198.99200000000002 L -3.7065329218106995 198.99200000000002 z"
                                cy="194.971" cx="3.706532921810699" j="0" val="2" barHeight="4.02" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2339"
                                d="M 11.119598765432098 201.002 L 11.119598765432098 190.952 L 18.532664609053498 190.952 L 18.532664609053498 201.002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 11.119598765432098 201.002 L 11.119598765432098 190.952 L 18.532664609053498 190.952 L 18.532664609053498 201.002 z"
                                pathFrom="M 11.119598765432098 201.002 L 11.119598765432098 201.002 L 18.532664609053498 201.002 L 18.532664609053498 201.002 L 18.532664609053498 201.002 L 18.532664609053498 201.002 L 18.532664609053498 201.002 L 11.119598765432098 201.002 z"
                                cy="190.951" cx="18.532664609053494" j="1" val="5" barHeight="10.049999999999999"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2341"
                                d="M 25.945730452674898 201.002 L 25.945730452674898 192.96200000000002 L 33.3587962962963 192.96200000000002 L 33.3587962962963 201.002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 25.945730452674898 201.002 L 25.945730452674898 192.96200000000002 L 33.3587962962963 192.96200000000002 L 33.3587962962963 201.002 z"
                                pathFrom="M 25.945730452674898 201.002 L 25.945730452674898 201.002 L 33.3587962962963 201.002 L 33.3587962962963 201.002 L 33.3587962962963 201.002 L 33.3587962962963 201.002 L 33.3587962962963 201.002 L 25.945730452674898 201.002 z"
                                cy="192.961" cx="33.35879629629629" j="2" val="4" barHeight="8.04" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2343"
                                d="M 40.7718621399177 201.002 L 40.7718621399177 194.972 L 48.1849279835391 194.972 L 48.1849279835391 201.002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 40.7718621399177 201.002 L 40.7718621399177 194.972 L 48.1849279835391 194.972 L 48.1849279835391 201.002 z"
                                pathFrom="M 40.7718621399177 201.002 L 40.7718621399177 201.002 L 48.1849279835391 201.002 L 48.1849279835391 201.002 L 48.1849279835391 201.002 L 48.1849279835391 201.002 L 48.1849279835391 201.002 L 40.7718621399177 201.002 z"
                                cy="194.971" cx="48.1849279835391" j="3" val="3" barHeight="6.03" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2345"
                                d="M 55.597993827160494 201.002 L 55.597993827160494 194.972 L 63.01105967078189 194.972 L 63.01105967078189 201.002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 55.597993827160494 201.002 L 55.597993827160494 194.972 L 63.01105967078189 194.972 L 63.01105967078189 201.002 z"
                                pathFrom="M 55.597993827160494 201.002 L 55.597993827160494 201.002 L 63.01105967078189 201.002 L 63.01105967078189 201.002 L 63.01105967078189 201.002 L 63.01105967078189 201.002 L 63.01105967078189 201.002 L 55.597993827160494 201.002 z"
                                cy="194.971" cx="63.01105967078188" j="4" val="3" barHeight="6.03" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2347"
                                d="M 70.42412551440329 198.99200000000002 L 70.42412551440329 196.98200000000003 L 77.83719135802468 196.98200000000003 L 77.83719135802468 198.99200000000002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 70.42412551440329 198.99200000000002 L 70.42412551440329 196.98200000000003 L 77.83719135802468 196.98200000000003 L 77.83719135802468 198.99200000000002 z"
                                pathFrom="M 70.42412551440329 198.99200000000002 L 70.42412551440329 198.99200000000002 L 77.83719135802468 198.99200000000002 L 77.83719135802468 198.99200000000002 L 77.83719135802468 198.99200000000002 L 77.83719135802468 198.99200000000002 L 77.83719135802468 198.99200000000002 L 70.42412551440329 198.99200000000002 z"
                                cy="196.98100000000002" cx="77.83719135802468" j="5" val="1" barHeight="2.01"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2349"
                                d="M 85.2502572016461 198.99200000000002 L 85.2502572016461 190.95200000000003 L 92.66332304526749 190.95200000000003 L 92.66332304526749 198.99200000000002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 85.2502572016461 198.99200000000002 L 85.2502572016461 190.95200000000003 L 92.66332304526749 190.95200000000003 L 92.66332304526749 198.99200000000002 z"
                                pathFrom="M 85.2502572016461 198.99200000000002 L 85.2502572016461 198.99200000000002 L 92.66332304526749 198.99200000000002 L 92.66332304526749 198.99200000000002 L 92.66332304526749 198.99200000000002 L 92.66332304526749 198.99200000000002 L 92.66332304526749 198.99200000000002 L 85.2502572016461 198.99200000000002 z"
                                cy="190.95100000000002" cx="92.66332304526749" j="6" val="4" barHeight="8.04"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2351"
                                d="M 100.07638888888889 201.002 L 100.07638888888889 186.93200000000002 L 107.48945473251028 186.93200000000002 L 107.48945473251028 201.002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 100.07638888888889 201.002 L 100.07638888888889 186.93200000000002 L 107.48945473251028 186.93200000000002 L 107.48945473251028 201.002 z"
                                pathFrom="M 100.07638888888889 201.002 L 100.07638888888889 201.002 L 107.48945473251028 201.002 L 107.48945473251028 201.002 L 107.48945473251028 201.002 L 107.48945473251028 201.002 L 107.48945473251028 201.002 L 100.07638888888889 201.002 z"
                                cy="186.931" cx="107.48945473251028" j="7" val="7" barHeight="14.07" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2353"
                                d="M 114.90252057613168 201.002 L 114.90252057613168 190.952 L 122.31558641975307 190.952 L 122.31558641975307 201.002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 114.90252057613168 201.002 L 114.90252057613168 190.952 L 122.31558641975307 190.952 L 122.31558641975307 201.002 z"
                                pathFrom="M 114.90252057613168 201.002 L 114.90252057613168 201.002 L 122.31558641975307 201.002 L 122.31558641975307 201.002 L 122.31558641975307 201.002 L 122.31558641975307 201.002 L 122.31558641975307 201.002 L 114.90252057613168 201.002 z"
                                cy="190.951" cx="122.31558641975307" j="8" val="5" barHeight="10.049999999999999"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2355"
                                d="M 129.7286522633745 201.002 L 129.7286522633745 198.99200000000002 L 137.1417181069959 198.99200000000002 L 137.1417181069959 201.002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 129.7286522633745 201.002 L 129.7286522633745 198.99200000000002 L 137.1417181069959 198.99200000000002 L 137.1417181069959 201.002 z"
                                pathFrom="M 129.7286522633745 201.002 L 129.7286522633745 201.002 L 137.1417181069959 201.002 L 137.1417181069959 201.002 L 137.1417181069959 201.002 L 137.1417181069959 201.002 L 137.1417181069959 201.002 L 129.7286522633745 201.002 z"
                                cy="198.991" cx="137.1417181069959" j="9" val="1" barHeight="2.01" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2357"
                                d="M 144.5547839506173 196.982 L 144.5547839506173 192.962 L 151.9678497942387 192.962 L 151.9678497942387 196.982 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 144.5547839506173 196.982 L 144.5547839506173 192.962 L 151.9678497942387 192.962 L 151.9678497942387 196.982 z"
                                pathFrom="M 144.5547839506173 196.982 L 144.5547839506173 196.982 L 151.9678497942387 196.982 L 151.9678497942387 196.982 L 151.9678497942387 196.982 L 151.9678497942387 196.982 L 151.9678497942387 196.982 L 144.5547839506173 196.982 z"
                                cy="192.96099999999998" cx="151.9678497942387" j="10" val="2" barHeight="4.02"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2359"
                                d="M 159.38091563786008 176.882 L 159.38091563786008 166.832 L 166.7939814814815 166.832 L 166.7939814814815 176.882 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 159.38091563786008 176.882 L 159.38091563786008 166.832 L 166.7939814814815 166.832 L 166.7939814814815 176.882 z"
                                pathFrom="M 159.38091563786008 176.882 L 159.38091563786008 176.882 L 166.7939814814815 176.882 L 166.7939814814815 176.882 L 166.7939814814815 176.882 L 166.7939814814815 176.882 L 166.7939814814815 176.882 L 159.38091563786008 176.882 z"
                                cy="166.831" cx="166.7939814814815" j="11" val="5" barHeight="10.049999999999999"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2361"
                                d="M 174.2070473251029 190.952 L 174.2070473251029 184.922 L 181.62011316872432 184.922 L 181.62011316872432 190.952 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 174.2070473251029 190.952 L 174.2070473251029 184.922 L 181.62011316872432 184.922 L 181.62011316872432 190.952 z"
                                pathFrom="M 174.2070473251029 190.952 L 174.2070473251029 190.952 L 181.62011316872432 190.952 L 181.62011316872432 190.952 L 181.62011316872432 190.952 L 181.62011316872432 190.952 L 181.62011316872432 190.952 L 174.2070473251029 190.952 z"
                                cy="184.921" cx="181.62011316872432" j="12" val="3" barHeight="6.03" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2363"
                                d="M 189.0331790123457 184.92200000000003 L 189.0331790123457 180.90200000000002 L 196.4462448559671 180.90200000000002 L 196.4462448559671 184.92200000000003 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 189.0331790123457 184.92200000000003 L 189.0331790123457 180.90200000000002 L 196.4462448559671 180.90200000000002 L 196.4462448559671 184.92200000000003 z"
                                pathFrom="M 189.0331790123457 184.92200000000003 L 189.0331790123457 184.92200000000003 L 196.4462448559671 184.92200000000003 L 196.4462448559671 184.92200000000003 L 196.4462448559671 184.92200000000003 L 196.4462448559671 184.92200000000003 L 196.4462448559671 184.92200000000003 L 189.0331790123457 184.92200000000003 z"
                                cy="180.901" cx="196.4462448559671" j="13" val="2" barHeight="4.02" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2365"
                                d="M 203.8593106995885 156.782 L 203.8593106995885 144.722 L 211.2723765432099 144.722 L 211.2723765432099 156.782 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 203.8593106995885 156.782 L 203.8593106995885 144.722 L 211.2723765432099 144.722 L 211.2723765432099 156.782 z"
                                pathFrom="M 203.8593106995885 156.782 L 203.8593106995885 156.782 L 211.2723765432099 156.782 L 211.2723765432099 156.782 L 211.2723765432099 156.782 L 211.2723765432099 156.782 L 211.2723765432099 156.782 L 203.8593106995885 156.782 z"
                                cy="144.721" cx="211.2723765432099" j="14" val="6" barHeight="12.06" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2367"
                                d="M 218.68544238683128 188.942 L 218.68544238683128 174.872 L 226.0985082304527 174.872 L 226.0985082304527 188.942 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 218.68544238683128 188.942 L 218.68544238683128 174.872 L 226.0985082304527 174.872 L 226.0985082304527 188.942 z"
                                pathFrom="M 218.68544238683128 188.942 L 218.68544238683128 188.942 L 226.0985082304527 188.942 L 226.0985082304527 188.942 L 226.0985082304527 188.942 L 226.0985082304527 188.942 L 226.0985082304527 188.942 L 218.68544238683128 188.942 z"
                                cy="174.871" cx="226.0985082304527" j="15" val="7" barHeight="14.07" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2369"
                                d="M 233.51157407407408 184.92200000000003 L 233.51157407407408 170.85200000000003 L 240.9246399176955 170.85200000000003 L 240.9246399176955 184.92200000000003 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 233.51157407407408 184.92200000000003 L 233.51157407407408 170.85200000000003 L 240.9246399176955 170.85200000000003 L 240.9246399176955 184.92200000000003 z"
                                pathFrom="M 233.51157407407408 184.92200000000003 L 233.51157407407408 184.92200000000003 L 240.9246399176955 184.92200000000003 L 240.9246399176955 184.92200000000003 L 240.9246399176955 184.92200000000003 L 240.9246399176955 184.92200000000003 L 240.9246399176955 184.92200000000003 L 233.51157407407408 184.92200000000003 z"
                                cy="170.85100000000003" cx="240.9246399176955" j="16" val="7" barHeight="14.07"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2371"
                                d="M 248.3377057613169 188.942 L 248.3377057613169 186.93200000000002 L 255.7507716049383 186.93200000000002 L 255.7507716049383 188.942 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 248.3377057613169 188.942 L 248.3377057613169 186.93200000000002 L 255.7507716049383 186.93200000000002 L 255.7507716049383 188.942 z"
                                pathFrom="M 248.3377057613169 188.942 L 248.3377057613169 188.942 L 255.7507716049383 188.942 L 255.7507716049383 188.942 L 255.7507716049383 188.942 L 255.7507716049383 188.942 L 255.7507716049383 188.942 L 248.3377057613169 188.942 z"
                                cy="186.931" cx="255.75077160493834" j="17" val="1" barHeight="2.01" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2373"
                                d="M 263.16383744855966 192.96200000000002 L 263.16383744855966 182.912 L 270.57690329218104 182.912 L 270.57690329218104 192.96200000000002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 263.16383744855966 192.96200000000002 L 263.16383744855966 182.912 L 270.57690329218104 182.912 L 270.57690329218104 192.96200000000002 z"
                                pathFrom="M 263.16383744855966 192.96200000000002 L 263.16383744855966 192.96200000000002 L 270.57690329218104 192.96200000000002 L 270.57690329218104 192.96200000000002 L 270.57690329218104 192.96200000000002 L 270.57690329218104 192.96200000000002 L 270.57690329218104 192.96200000000002 L 263.16383744855966 192.96200000000002 z"
                                cy="182.911" cx="270.57690329218104" j="18" val="5" barHeight="10.049999999999999"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2375"
                                d="M 277.9899691358025 198.99200000000002 L 277.9899691358025 188.942 L 285.40303497942386 188.942 L 285.40303497942386 198.99200000000002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 277.9899691358025 198.99200000000002 L 277.9899691358025 188.942 L 285.40303497942386 188.942 L 285.40303497942386 198.99200000000002 z"
                                pathFrom="M 277.9899691358025 198.99200000000002 L 277.9899691358025 198.99200000000002 L 285.40303497942386 198.99200000000002 L 285.40303497942386 198.99200000000002 L 285.40303497942386 198.99200000000002 L 285.40303497942386 198.99200000000002 L 285.40303497942386 198.99200000000002 L 277.9899691358025 198.99200000000002 z"
                                cy="188.941" cx="285.40303497942386" j="19" val="5" barHeight="10.049999999999999"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2377"
                                d="M 292.81610082304525 184.92200000000003 L 292.81610082304525 180.90200000000002 L 300.22916666666663 180.90200000000002 L 300.22916666666663 184.92200000000003 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 292.81610082304525 184.92200000000003 L 292.81610082304525 180.90200000000002 L 300.22916666666663 180.90200000000002 L 300.22916666666663 184.92200000000003 z"
                                pathFrom="M 292.81610082304525 184.92200000000003 L 292.81610082304525 184.92200000000003 L 300.22916666666663 184.92200000000003 L 300.22916666666663 184.92200000000003 L 300.22916666666663 184.92200000000003 L 300.22916666666663 184.92200000000003 L 300.22916666666663 184.92200000000003 L 292.81610082304525 184.92200000000003 z"
                                cy="180.901" cx="300.22916666666663" j="20" val="2" barHeight="4.02" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2379"
                                d="M 307.64223251028807 152.762 L 307.64223251028807 128.642 L 315.05529835390945 128.642 L 315.05529835390945 152.762 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 307.64223251028807 152.762 L 307.64223251028807 128.642 L 315.05529835390945 128.642 L 315.05529835390945 152.762 z"
                                pathFrom="M 307.64223251028807 152.762 L 307.64223251028807 152.762 L 315.05529835390945 152.762 L 315.05529835390945 152.762 L 315.05529835390945 152.762 L 315.05529835390945 152.762 L 315.05529835390945 152.762 L 307.64223251028807 152.762 z"
                                cy="128.641" cx="315.05529835390945" j="21" val="12" barHeight="24.12" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2381"
                                d="M 322.46836419753083 142.71200000000002 L 322.46836419753083 134.67200000000003 L 329.8814300411522 134.67200000000003 L 329.8814300411522 142.71200000000002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 322.46836419753083 142.71200000000002 L 322.46836419753083 134.67200000000003 L 329.8814300411522 134.67200000000003 L 329.8814300411522 142.71200000000002 z"
                                pathFrom="M 322.46836419753083 142.71200000000002 L 322.46836419753083 142.71200000000002 L 329.8814300411522 142.71200000000002 L 329.8814300411522 142.71200000000002 L 329.8814300411522 142.71200000000002 L 329.8814300411522 142.71200000000002 L 329.8814300411522 142.71200000000002 L 322.46836419753083 142.71200000000002 z"
                                cy="134.67100000000002" cx="329.8814300411522" j="22" val="4" barHeight="8.04"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2383"
                                d="M 337.29449588477365 98.49200000000002 L 337.29449588477365 86.43200000000002 L 344.70756172839504 86.43200000000002 L 344.70756172839504 98.49200000000002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 337.29449588477365 98.49200000000002 L 337.29449588477365 86.43200000000002 L 344.70756172839504 86.43200000000002 L 344.70756172839504 98.49200000000002 z"
                                pathFrom="M 337.29449588477365 98.49200000000002 L 337.29449588477365 98.49200000000002 L 344.70756172839504 98.49200000000002 L 344.70756172839504 98.49200000000002 L 344.70756172839504 98.49200000000002 L 344.70756172839504 98.49200000000002 L 344.70756172839504 98.49200000000002 L 337.29449588477365 98.49200000000002 z"
                                cy="86.43100000000001" cx="344.70756172839504" j="23" val="6" barHeight="12.06"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2385"
                                d="M 352.1206275720165 120.60200000000002 L 352.1206275720165 84.42200000000003 L 359.53369341563786 84.42200000000003 L 359.53369341563786 120.60200000000002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 352.1206275720165 120.60200000000002 L 352.1206275720165 84.42200000000003 L 359.53369341563786 84.42200000000003 L 359.53369341563786 120.60200000000002 z"
                                pathFrom="M 352.1206275720165 120.60200000000002 L 352.1206275720165 120.60200000000002 L 359.53369341563786 120.60200000000002 L 359.53369341563786 120.60200000000002 L 359.53369341563786 120.60200000000002 L 359.53369341563786 120.60200000000002 L 359.53369341563786 120.60200000000002 L 352.1206275720165 120.60200000000002 z"
                                cy="84.42100000000002" cx="359.53369341563786" j="24" val="18" barHeight="36.18"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2387"
                                d="M 366.94675925925924 106.53200000000001 L 366.94675925925924 100.50200000000001 L 374.3598251028806 100.50200000000001 L 374.3598251028806 106.53200000000001 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 366.94675925925924 106.53200000000001 L 366.94675925925924 100.50200000000001 L 374.3598251028806 100.50200000000001 L 374.3598251028806 106.53200000000001 z"
                                pathFrom="M 366.94675925925924 106.53200000000001 L 366.94675925925924 106.53200000000001 L 374.3598251028806 106.53200000000001 L 374.3598251028806 106.53200000000001 L 374.3598251028806 106.53200000000001 L 374.3598251028806 106.53200000000001 L 374.3598251028806 106.53200000000001 L 366.94675925925924 106.53200000000001 z"
                                cy="100.501" cx="374.3598251028806" j="25" val="3" barHeight="6.03" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2389"
                                d="M 381.77289094650206 154.77200000000002 L 381.77289094650206 144.722 L 389.18595679012344 144.722 L 389.18595679012344 154.77200000000002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 381.77289094650206 154.77200000000002 L 381.77289094650206 144.722 L 389.18595679012344 144.722 L 389.18595679012344 154.77200000000002 z"
                                pathFrom="M 381.77289094650206 154.77200000000002 L 381.77289094650206 154.77200000000002 L 389.18595679012344 154.77200000000002 L 389.18595679012344 154.77200000000002 L 389.18595679012344 154.77200000000002 L 389.18595679012344 154.77200000000002 L 389.18595679012344 154.77200000000002 L 381.77289094650206 154.77200000000002 z"
                                cy="144.721" cx="389.18595679012344" j="26" val="5" barHeight="10.049999999999999"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2391"
                                d="M 396.5990226337448 148.74200000000002 L 396.5990226337448 144.722 L 404.0120884773662 144.722 L 404.0120884773662 148.74200000000002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 396.5990226337448 148.74200000000002 L 396.5990226337448 144.722 L 404.0120884773662 144.722 L 404.0120884773662 148.74200000000002 z"
                                pathFrom="M 396.5990226337448 148.74200000000002 L 396.5990226337448 148.74200000000002 L 404.0120884773662 148.74200000000002 L 404.0120884773662 148.74200000000002 L 404.0120884773662 148.74200000000002 L 404.0120884773662 148.74200000000002 L 404.0120884773662 148.74200000000002 L 396.5990226337448 148.74200000000002 z"
                                cy="144.721" cx="404.0120884773662" j="27" val="2" barHeight="4.02" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2393"
                                d="M 411.42515432098764 100.50200000000001 L 411.42515432098764 74.37200000000001 L 418.838220164609 74.37200000000001 L 418.838220164609 100.50200000000001 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 411.42515432098764 100.50200000000001 L 411.42515432098764 74.37200000000001 L 418.838220164609 74.37200000000001 L 418.838220164609 100.50200000000001 z"
                                pathFrom="M 411.42515432098764 100.50200000000001 L 411.42515432098764 100.50200000000001 L 418.838220164609 100.50200000000001 L 418.838220164609 100.50200000000001 L 418.838220164609 100.50200000000001 L 418.838220164609 100.50200000000001 L 418.838220164609 100.50200000000001 L 411.42515432098764 100.50200000000001 z"
                                cy="74.37100000000001" cx="418.838220164609" j="28" val="13" barHeight="26.13"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2395"
                                d="M 426.25128600823047 148.74200000000002 L 426.25128600823047 118.59200000000001 L 433.66435185185185 118.59200000000001 L 433.66435185185185 148.74200000000002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 426.25128600823047 148.74200000000002 L 426.25128600823047 118.59200000000001 L 433.66435185185185 118.59200000000001 L 433.66435185185185 148.74200000000002 z"
                                pathFrom="M 426.25128600823047 148.74200000000002 L 426.25128600823047 148.74200000000002 L 433.66435185185185 148.74200000000002 L 433.66435185185185 148.74200000000002 L 433.66435185185185 148.74200000000002 L 433.66435185185185 148.74200000000002 L 433.66435185185185 148.74200000000002 L 426.25128600823047 148.74200000000002 z"
                                cy="118.59100000000001" cx="433.66435185185185" j="29" val="15" barHeight="30.15"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2397"
                                d="M 441.07741769547323 118.59200000000001 L 441.07741769547323 78.39200000000002 L 448.4904835390946 78.39200000000002 L 448.4904835390946 118.59200000000001 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 441.07741769547323 118.59200000000001 L 441.07741769547323 78.39200000000002 L 448.4904835390946 78.39200000000002 L 448.4904835390946 118.59200000000001 z"
                                pathFrom="M 441.07741769547323 118.59200000000001 L 441.07741769547323 118.59200000000001 L 448.4904835390946 118.59200000000001 L 448.4904835390946 118.59200000000001 L 448.4904835390946 118.59200000000001 L 448.4904835390946 118.59200000000001 L 448.4904835390946 118.59200000000001 L 441.07741769547323 118.59200000000001 z"
                                cy="78.39100000000002" cx="448.4904835390946" j="30" val="20" barHeight="40.199999999999996"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2399"
                                d="M 455.90354938271605 156.782 L 455.90354938271605 62.312000000000005 L 463.31661522633743 62.312000000000005 L 463.31661522633743 156.782 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 455.90354938271605 156.782 L 455.90354938271605 62.312000000000005 L 463.31661522633743 62.312000000000005 L 463.31661522633743 156.782 z"
                                pathFrom="M 455.90354938271605 156.782 L 455.90354938271605 156.782 L 463.31661522633743 156.782 L 463.31661522633743 156.782 L 463.31661522633743 156.782 L 463.31661522633743 156.782 L 463.31661522633743 156.782 L 455.90354938271605 156.782 z"
                                cy="62.31100000000001" cx="463.31661522633743" j="31" val="47" barHeight="94.47"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2401"
                                d="M 470.7296810699588 108.54200000000002 L 470.7296810699588 72.36200000000002 L 478.1427469135802 72.36200000000002 L 478.1427469135802 108.54200000000002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 470.7296810699588 108.54200000000002 L 470.7296810699588 72.36200000000002 L 478.1427469135802 72.36200000000002 L 478.1427469135802 108.54200000000002 z"
                                pathFrom="M 470.7296810699588 108.54200000000002 L 470.7296810699588 108.54200000000002 L 478.1427469135802 108.54200000000002 L 478.1427469135802 108.54200000000002 L 478.1427469135802 108.54200000000002 L 478.1427469135802 108.54200000000002 L 478.1427469135802 108.54200000000002 L 470.7296810699588 108.54200000000002 z"
                                cy="72.36100000000002" cx="478.1427469135802" j="32" val="18" barHeight="36.18"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2403"
                                d="M 485.55581275720164 106.53200000000001 L 485.55581275720164 76.382 L 492.968878600823 76.382 L 492.968878600823 106.53200000000001 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 485.55581275720164 106.53200000000001 L 485.55581275720164 76.382 L 492.968878600823 76.382 L 492.968878600823 106.53200000000001 z"
                                pathFrom="M 485.55581275720164 106.53200000000001 L 485.55581275720164 106.53200000000001 L 492.968878600823 106.53200000000001 L 492.968878600823 106.53200000000001 L 492.968878600823 106.53200000000001 L 492.968878600823 106.53200000000001 L 492.968878600823 106.53200000000001 L 485.55581275720164 106.53200000000001 z"
                                cy="76.381" cx="492.968878600823" j="33" val="15" barHeight="30.15" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2405"
                                d="M 500.38194444444446 38.19199999999999 L 500.38194444444446 16.081999999999997 L 507.79501028806584 16.081999999999997 L 507.79501028806584 38.19199999999999 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 500.38194444444446 38.19199999999999 L 500.38194444444446 16.081999999999997 L 507.79501028806584 16.081999999999997 L 507.79501028806584 38.19199999999999 z"
                                pathFrom="M 500.38194444444446 38.19199999999999 L 500.38194444444446 38.19199999999999 L 507.79501028806584 38.19199999999999 L 507.79501028806584 38.19199999999999 L 507.79501028806584 38.19199999999999 L 507.79501028806584 38.19199999999999 L 507.79501028806584 38.19199999999999 L 500.38194444444446 38.19199999999999 z"
                                cy="16.080999999999996" cx="507.7950102880658" j="34" val="11" barHeight="22.11"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2407"
                                d="M 515.2080761316873 108.54200000000002 L 515.2080761316873 88.44200000000002 L 522.6211419753088 88.44200000000002 L 522.6211419753088 108.54200000000002 z"
                                fill="rgba(32, 107, 196, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 515.2080761316873 108.54200000000002 L 515.2080761316873 88.44200000000002 L 522.6211419753088 88.44200000000002 L 522.6211419753088 108.54200000000002 z"
                                pathFrom="M 515.2080761316873 108.54200000000002 L 515.2080761316873 108.54200000000002 L 522.6211419753088 108.54200000000002 L 522.6211419753088 108.54200000000002 L 522.6211419753088 108.54200000000002 L 522.6211419753088 108.54200000000002 L 522.6211419753088 108.54200000000002 L 515.2080761316873 108.54200000000002 z"
                                cy="88.44100000000002" cx="522.6211419753088" j="35" val="10" barHeight="20.099999999999998"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2409"
                                d="M 530.0342078189301 188.942 L 530.0342078189301 188.942 L 537.4472736625515 188.942 L 537.4472736625515 188.942 z"
                                fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 530.0342078189301 188.942 L 530.0342078189301 188.942 L 537.4472736625515 188.942 L 537.4472736625515 188.942 z"
                                pathFrom="M 530.0342078189301 188.942 L 530.0342078189301 188.942 L 537.4472736625515 188.942 L 537.4472736625515 188.942 L 537.4472736625515 188.942 L 537.4472736625515 188.942 L 537.4472736625515 188.942 L 530.0342078189301 188.942 z"
                                cy="188.941" cx="537.4472736625515" j="36" val="0" barHeight="0" barWidth="7.413065843621399">
                              </path>
                              <g id="SvgjsG2335" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                <g id="SvgjsG2336" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2338" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2340" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2342" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2344" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2346" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2348" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2350" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2352" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2354" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2356" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2358" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2360" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2362" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2364" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2366" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2368" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2370" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2372" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2374" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2376" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2378" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2380" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2382" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2384" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2386" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2388" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2390" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2392" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2394" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2396" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2398" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2400" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2402" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2404" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2406" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2408" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                              </g>
                            </g>
                            <g id="SvgjsG2410" class="apexcharts-series" seriesName="Other" rel="3" data:realIndex="2">
                              <path id="SvgjsPath2414"
                                d="M -3.7065329218106995 194.973 L -3.7065329218106995 190.953 L 3.7065329218106995 190.953 L 3.7065329218106995 194.973 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M -3.7065329218106995 194.973 L -3.7065329218106995 190.953 L 3.7065329218106995 190.953 L 3.7065329218106995 194.973 z"
                                pathFrom="M -3.7065329218106995 194.973 L -3.7065329218106995 194.973 L 3.7065329218106995 194.973 L 3.7065329218106995 194.973 L 3.7065329218106995 194.973 L 3.7065329218106995 194.973 L 3.7065329218106995 194.973 L -3.7065329218106995 194.973 z"
                                cy="190.952" cx="3.706532921810699" j="0" val="2" barHeight="4.02" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2416"
                                d="M 11.119598765432098 190.953 L 11.119598765432098 172.863 L 18.532664609053498 172.863 L 18.532664609053498 190.953 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 11.119598765432098 190.953 L 11.119598765432098 172.863 L 18.532664609053498 172.863 L 18.532664609053498 190.953 z"
                                pathFrom="M 11.119598765432098 190.953 L 11.119598765432098 190.953 L 18.532664609053498 190.953 L 18.532664609053498 190.953 L 18.532664609053498 190.953 L 18.532664609053498 190.953 L 18.532664609053498 190.953 L 11.119598765432098 190.953 z"
                                cy="172.862" cx="18.532664609053494" j="1" val="9" barHeight="18.09" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2418"
                                d="M 25.945730452674898 192.96300000000002 L 25.945730452674898 190.95300000000003 L 33.3587962962963 190.95300000000003 L 33.3587962962963 192.96300000000002 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 25.945730452674898 192.96300000000002 L 25.945730452674898 190.95300000000003 L 33.3587962962963 190.95300000000003 L 33.3587962962963 192.96300000000002 z"
                                pathFrom="M 25.945730452674898 192.96300000000002 L 25.945730452674898 192.96300000000002 L 33.3587962962963 192.96300000000002 L 33.3587962962963 192.96300000000002 L 33.3587962962963 192.96300000000002 L 33.3587962962963 192.96300000000002 L 33.3587962962963 192.96300000000002 L 25.945730452674898 192.96300000000002 z"
                                cy="190.95200000000003" cx="33.35879629629629" j="2" val="1" barHeight="2.01"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2420"
                                d="M 40.7718621399177 194.973 L 40.7718621399177 180.90300000000002 L 48.1849279835391 180.90300000000002 L 48.1849279835391 194.973 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 40.7718621399177 194.973 L 40.7718621399177 180.90300000000002 L 48.1849279835391 180.90300000000002 L 48.1849279835391 194.973 z"
                                pathFrom="M 40.7718621399177 194.973 L 40.7718621399177 194.973 L 48.1849279835391 194.973 L 48.1849279835391 194.973 L 48.1849279835391 194.973 L 48.1849279835391 194.973 L 48.1849279835391 194.973 L 40.7718621399177 194.973 z"
                                cy="180.90200000000002" cx="48.1849279835391" j="3" val="7" barHeight="14.07"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2422"
                                d="M 55.597993827160494 194.973 L 55.597993827160494 178.893 L 63.01105967078189 178.893 L 63.01105967078189 194.973 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 55.597993827160494 194.973 L 55.597993827160494 178.893 L 63.01105967078189 178.893 L 63.01105967078189 194.973 z"
                                pathFrom="M 55.597993827160494 194.973 L 55.597993827160494 194.973 L 63.01105967078189 194.973 L 63.01105967078189 194.973 L 63.01105967078189 194.973 L 63.01105967078189 194.973 L 63.01105967078189 194.973 L 55.597993827160494 194.973 z"
                                cy="178.892" cx="63.01105967078188" j="4" val="8" barHeight="16.08" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2424"
                                d="M 70.42412551440329 196.98300000000003 L 70.42412551440329 190.95300000000003 L 77.83719135802468 190.95300000000003 L 77.83719135802468 196.98300000000003 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 70.42412551440329 196.98300000000003 L 70.42412551440329 190.95300000000003 L 77.83719135802468 190.95300000000003 L 77.83719135802468 196.98300000000003 z"
                                pathFrom="M 70.42412551440329 196.98300000000003 L 70.42412551440329 196.98300000000003 L 77.83719135802468 196.98300000000003 L 77.83719135802468 196.98300000000003 L 77.83719135802468 196.98300000000003 L 77.83719135802468 196.98300000000003 L 77.83719135802468 196.98300000000003 L 70.42412551440329 196.98300000000003 z"
                                cy="190.95200000000003" cx="77.83719135802468" j="5" val="3" barHeight="6.03"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2426"
                                d="M 85.2502572016461 190.95300000000003 L 85.2502572016461 178.89300000000003 L 92.66332304526749 178.89300000000003 L 92.66332304526749 190.95300000000003 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 85.2502572016461 190.95300000000003 L 85.2502572016461 178.89300000000003 L 92.66332304526749 178.89300000000003 L 92.66332304526749 190.95300000000003 z"
                                pathFrom="M 85.2502572016461 190.95300000000003 L 85.2502572016461 190.95300000000003 L 92.66332304526749 190.95300000000003 L 92.66332304526749 190.95300000000003 L 92.66332304526749 190.95300000000003 L 92.66332304526749 190.95300000000003 L 92.66332304526749 190.95300000000003 L 85.2502572016461 190.95300000000003 z"
                                cy="178.89200000000002" cx="92.66332304526749" j="6" val="6" barHeight="12.06"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2428"
                                d="M 100.07638888888889 186.93300000000002 L 100.07638888888889 176.883 L 107.48945473251028 176.883 L 107.48945473251028 186.93300000000002 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 100.07638888888889 186.93300000000002 L 100.07638888888889 176.883 L 107.48945473251028 176.883 L 107.48945473251028 186.93300000000002 z"
                                pathFrom="M 100.07638888888889 186.93300000000002 L 100.07638888888889 186.93300000000002 L 107.48945473251028 186.93300000000002 L 107.48945473251028 186.93300000000002 L 107.48945473251028 186.93300000000002 L 107.48945473251028 186.93300000000002 L 107.48945473251028 186.93300000000002 L 100.07638888888889 186.93300000000002 z"
                                cy="176.882" cx="107.48945473251028" j="7" val="5" barHeight="10.049999999999999"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2430"
                                d="M 114.90252057613168 190.953 L 114.90252057613168 180.903 L 122.31558641975307 180.903 L 122.31558641975307 190.953 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 114.90252057613168 190.953 L 114.90252057613168 180.903 L 122.31558641975307 180.903 L 122.31558641975307 190.953 z"
                                pathFrom="M 114.90252057613168 190.953 L 114.90252057613168 190.953 L 122.31558641975307 190.953 L 122.31558641975307 190.953 L 122.31558641975307 190.953 L 122.31558641975307 190.953 L 122.31558641975307 190.953 L 114.90252057613168 190.953 z"
                                cy="180.902" cx="122.31558641975307" j="8" val="5" barHeight="10.049999999999999"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2432"
                                d="M 129.7286522633745 198.99300000000002 L 129.7286522633745 190.95300000000003 L 137.1417181069959 190.95300000000003 L 137.1417181069959 198.99300000000002 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 129.7286522633745 198.99300000000002 L 129.7286522633745 190.95300000000003 L 137.1417181069959 190.95300000000003 L 137.1417181069959 198.99300000000002 z"
                                pathFrom="M 129.7286522633745 198.99300000000002 L 129.7286522633745 198.99300000000002 L 137.1417181069959 198.99300000000002 L 137.1417181069959 198.99300000000002 L 137.1417181069959 198.99300000000002 L 137.1417181069959 198.99300000000002 L 137.1417181069959 198.99300000000002 L 129.7286522633745 198.99300000000002 z"
                                cy="190.95200000000003" cx="137.1417181069959" j="9" val="4" barHeight="8.04"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2434"
                                d="M 144.5547839506173 192.963 L 144.5547839506173 180.903 L 151.9678497942387 180.903 L 151.9678497942387 192.963 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 144.5547839506173 192.963 L 144.5547839506173 180.903 L 151.9678497942387 180.903 L 151.9678497942387 192.963 z"
                                pathFrom="M 144.5547839506173 192.963 L 144.5547839506173 192.963 L 151.9678497942387 192.963 L 151.9678497942387 192.963 L 151.9678497942387 192.963 L 151.9678497942387 192.963 L 151.9678497942387 192.963 L 144.5547839506173 192.963 z"
                                cy="180.902" cx="151.9678497942387" j="10" val="6" barHeight="12.06" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2436"
                                d="M 159.38091563786008 166.833 L 159.38091563786008 158.793 L 166.7939814814815 158.793 L 166.7939814814815 166.833 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 159.38091563786008 166.833 L 159.38091563786008 158.793 L 166.7939814814815 158.793 L 166.7939814814815 166.833 z"
                                pathFrom="M 159.38091563786008 166.833 L 159.38091563786008 166.833 L 166.7939814814815 166.833 L 166.7939814814815 166.833 L 166.7939814814815 166.833 L 166.7939814814815 166.833 L 166.7939814814815 166.833 L 159.38091563786008 166.833 z"
                                cy="158.792" cx="166.7939814814815" j="11" val="4" barHeight="8.04" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2438"
                                d="M 174.2070473251029 184.923 L 174.2070473251029 182.913 L 181.62011316872432 182.913 L 181.62011316872432 184.923 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 174.2070473251029 184.923 L 174.2070473251029 182.913 L 181.62011316872432 182.913 L 181.62011316872432 184.923 z"
                                pathFrom="M 174.2070473251029 184.923 L 174.2070473251029 184.923 L 181.62011316872432 184.923 L 181.62011316872432 184.923 L 181.62011316872432 184.923 L 181.62011316872432 184.923 L 181.62011316872432 184.923 L 174.2070473251029 184.923 z"
                                cy="182.912" cx="181.62011316872432" j="12" val="1" barHeight="2.01" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2440"
                                d="M 189.0331790123457 180.90300000000002 L 189.0331790123457 162.81300000000002 L 196.4462448559671 162.81300000000002 L 196.4462448559671 180.90300000000002 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 189.0331790123457 180.90300000000002 L 189.0331790123457 162.81300000000002 L 196.4462448559671 162.81300000000002 L 196.4462448559671 180.90300000000002 z"
                                pathFrom="M 189.0331790123457 180.90300000000002 L 189.0331790123457 180.90300000000002 L 196.4462448559671 180.90300000000002 L 196.4462448559671 180.90300000000002 L 196.4462448559671 180.90300000000002 L 196.4462448559671 180.90300000000002 L 196.4462448559671 180.90300000000002 L 189.0331790123457 180.90300000000002 z"
                                cy="162.812" cx="196.4462448559671" j="13" val="9" barHeight="18.09" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2442"
                                d="M 203.8593106995885 144.723 L 203.8593106995885 138.693 L 211.2723765432099 138.693 L 211.2723765432099 144.723 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 203.8593106995885 144.723 L 203.8593106995885 138.693 L 211.2723765432099 138.693 L 211.2723765432099 144.723 z"
                                pathFrom="M 203.8593106995885 144.723 L 203.8593106995885 144.723 L 211.2723765432099 144.723 L 211.2723765432099 144.723 L 211.2723765432099 144.723 L 211.2723765432099 144.723 L 211.2723765432099 144.723 L 203.8593106995885 144.723 z"
                                cy="138.692" cx="211.2723765432099" j="14" val="3" barHeight="6.03" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2444"
                                d="M 218.68544238683128 174.87300000000002 L 218.68544238683128 162.81300000000002 L 226.0985082304527 162.81300000000002 L 226.0985082304527 174.87300000000002 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 218.68544238683128 174.87300000000002 L 218.68544238683128 162.81300000000002 L 226.0985082304527 162.81300000000002 L 226.0985082304527 174.87300000000002 z"
                                pathFrom="M 218.68544238683128 174.87300000000002 L 218.68544238683128 174.87300000000002 L 226.0985082304527 174.87300000000002 L 226.0985082304527 174.87300000000002 L 226.0985082304527 174.87300000000002 L 226.0985082304527 174.87300000000002 L 226.0985082304527 174.87300000000002 L 218.68544238683128 174.87300000000002 z"
                                cy="162.812" cx="226.0985082304527" j="15" val="6" barHeight="12.06" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2446"
                                d="M 233.51157407407408 170.85300000000004 L 233.51157407407408 156.78300000000004 L 240.9246399176955 156.78300000000004 L 240.9246399176955 170.85300000000004 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 233.51157407407408 170.85300000000004 L 233.51157407407408 156.78300000000004 L 240.9246399176955 156.78300000000004 L 240.9246399176955 170.85300000000004 z"
                                pathFrom="M 233.51157407407408 170.85300000000004 L 233.51157407407408 170.85300000000004 L 240.9246399176955 170.85300000000004 L 240.9246399176955 170.85300000000004 L 240.9246399176955 170.85300000000004 L 240.9246399176955 170.85300000000004 L 240.9246399176955 170.85300000000004 L 233.51157407407408 170.85300000000004 z"
                                cy="156.78200000000004" cx="240.9246399176955" j="16" val="7" barHeight="14.07"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2448"
                                d="M 248.3377057613169 186.93300000000002 L 248.3377057613169 176.883 L 255.7507716049383 176.883 L 255.7507716049383 186.93300000000002 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 248.3377057613169 186.93300000000002 L 248.3377057613169 176.883 L 255.7507716049383 176.883 L 255.7507716049383 186.93300000000002 z"
                                pathFrom="M 248.3377057613169 186.93300000000002 L 248.3377057613169 186.93300000000002 L 255.7507716049383 186.93300000000002 L 255.7507716049383 186.93300000000002 L 255.7507716049383 186.93300000000002 L 255.7507716049383 186.93300000000002 L 255.7507716049383 186.93300000000002 L 248.3377057613169 186.93300000000002 z"
                                cy="176.882" cx="255.75077160493834" j="17" val="5" barHeight="10.049999999999999"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2450"
                                d="M 263.16383744855966 182.913 L 263.16383744855966 178.893 L 270.57690329218104 178.893 L 270.57690329218104 182.913 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 263.16383744855966 182.913 L 263.16383744855966 178.893 L 270.57690329218104 178.893 L 270.57690329218104 182.913 z"
                                pathFrom="M 263.16383744855966 182.913 L 263.16383744855966 182.913 L 270.57690329218104 182.913 L 270.57690329218104 182.913 L 270.57690329218104 182.913 L 270.57690329218104 182.913 L 270.57690329218104 182.913 L 263.16383744855966 182.913 z"
                                cy="178.892" cx="270.57690329218104" j="18" val="2" barHeight="4.02" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2452"
                                d="M 277.9899691358025 188.943 L 277.9899691358025 172.86300000000003 L 285.40303497942386 172.86300000000003 L 285.40303497942386 188.943 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 277.9899691358025 188.943 L 277.9899691358025 172.86300000000003 L 285.40303497942386 172.86300000000003 L 285.40303497942386 188.943 z"
                                pathFrom="M 277.9899691358025 188.943 L 277.9899691358025 188.943 L 285.40303497942386 188.943 L 285.40303497942386 188.943 L 285.40303497942386 188.943 L 285.40303497942386 188.943 L 285.40303497942386 188.943 L 277.9899691358025 188.943 z"
                                cy="172.86200000000002" cx="285.40303497942386" j="19" val="8" barHeight="16.08"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2454"
                                d="M 292.81610082304525 180.90300000000002 L 292.81610082304525 172.86300000000003 L 300.22916666666663 172.86300000000003 L 300.22916666666663 180.90300000000002 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 292.81610082304525 180.90300000000002 L 292.81610082304525 172.86300000000003 L 300.22916666666663 172.86300000000003 L 300.22916666666663 180.90300000000002 z"
                                pathFrom="M 292.81610082304525 180.90300000000002 L 292.81610082304525 180.90300000000002 L 300.22916666666663 180.90300000000002 L 300.22916666666663 180.90300000000002 L 300.22916666666663 180.90300000000002 L 300.22916666666663 180.90300000000002 L 300.22916666666663 180.90300000000002 L 292.81610082304525 180.90300000000002 z"
                                cy="172.86200000000002" cx="300.22916666666663" j="20" val="4" barHeight="8.04"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2456"
                                d="M 307.64223251028807 128.643 L 307.64223251028807 110.553 L 315.05529835390945 110.553 L 315.05529835390945 128.643 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 307.64223251028807 128.643 L 307.64223251028807 110.553 L 315.05529835390945 110.553 L 315.05529835390945 128.643 z"
                                pathFrom="M 307.64223251028807 128.643 L 307.64223251028807 128.643 L 315.05529835390945 128.643 L 315.05529835390945 128.643 L 315.05529835390945 128.643 L 315.05529835390945 128.643 L 315.05529835390945 128.643 L 307.64223251028807 128.643 z"
                                cy="110.55199999999999" cx="315.05529835390945" j="21" val="9" barHeight="18.09"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2458"
                                d="M 322.46836419753083 134.67300000000003 L 322.46836419753083 132.66300000000004 L 329.8814300411522 132.66300000000004 L 329.8814300411522 134.67300000000003 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 322.46836419753083 134.67300000000003 L 322.46836419753083 132.66300000000004 L 329.8814300411522 132.66300000000004 L 329.8814300411522 134.67300000000003 z"
                                pathFrom="M 322.46836419753083 134.67300000000003 L 322.46836419753083 134.67300000000003 L 329.8814300411522 134.67300000000003 L 329.8814300411522 134.67300000000003 L 329.8814300411522 134.67300000000003 L 329.8814300411522 134.67300000000003 L 329.8814300411522 134.67300000000003 L 322.46836419753083 134.67300000000003 z"
                                cy="132.66200000000003" cx="329.8814300411522" j="22" val="1" barHeight="2.01"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2460"
                                d="M 337.29449588477365 86.43300000000002 L 337.29449588477365 82.41300000000003 L 344.70756172839504 82.41300000000003 L 344.70756172839504 86.43300000000002 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 337.29449588477365 86.43300000000002 L 337.29449588477365 82.41300000000003 L 344.70756172839504 82.41300000000003 L 344.70756172839504 86.43300000000002 z"
                                pathFrom="M 337.29449588477365 86.43300000000002 L 337.29449588477365 86.43300000000002 L 344.70756172839504 86.43300000000002 L 344.70756172839504 86.43300000000002 L 344.70756172839504 86.43300000000002 L 344.70756172839504 86.43300000000002 L 344.70756172839504 86.43300000000002 L 337.29449588477365 86.43300000000002 z"
                                cy="82.41200000000002" cx="344.70756172839504" j="23" val="2" barHeight="4.02"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2462"
                                d="M 352.1206275720165 84.42300000000003 L 352.1206275720165 72.36300000000003 L 359.53369341563786 72.36300000000003 L 359.53369341563786 84.42300000000003 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 352.1206275720165 84.42300000000003 L 352.1206275720165 72.36300000000003 L 359.53369341563786 72.36300000000003 L 359.53369341563786 84.42300000000003 z"
                                pathFrom="M 352.1206275720165 84.42300000000003 L 352.1206275720165 84.42300000000003 L 359.53369341563786 84.42300000000003 L 359.53369341563786 84.42300000000003 L 359.53369341563786 84.42300000000003 L 359.53369341563786 84.42300000000003 L 359.53369341563786 84.42300000000003 L 352.1206275720165 84.42300000000003 z"
                                cy="72.36200000000002" cx="359.53369341563786" j="24" val="6" barHeight="12.06"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2464"
                                d="M 366.94675925925924 100.50300000000001 L 366.94675925925924 86.43300000000002 L 374.3598251028806 86.43300000000002 L 374.3598251028806 100.50300000000001 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 366.94675925925924 100.50300000000001 L 366.94675925925924 86.43300000000002 L 374.3598251028806 86.43300000000002 L 374.3598251028806 100.50300000000001 z"
                                pathFrom="M 366.94675925925924 100.50300000000001 L 366.94675925925924 100.50300000000001 L 374.3598251028806 100.50300000000001 L 374.3598251028806 100.50300000000001 L 374.3598251028806 100.50300000000001 L 374.3598251028806 100.50300000000001 L 374.3598251028806 100.50300000000001 L 366.94675925925924 100.50300000000001 z"
                                cy="86.43200000000002" cx="374.3598251028806" j="25" val="7" barHeight="14.07"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2466"
                                d="M 381.77289094650206 144.723 L 381.77289094650206 134.673 L 389.18595679012344 134.673 L 389.18595679012344 144.723 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 381.77289094650206 144.723 L 381.77289094650206 134.673 L 389.18595679012344 134.673 L 389.18595679012344 144.723 z"
                                pathFrom="M 381.77289094650206 144.723 L 381.77289094650206 144.723 L 389.18595679012344 144.723 L 389.18595679012344 144.723 L 389.18595679012344 144.723 L 389.18595679012344 144.723 L 389.18595679012344 144.723 L 381.77289094650206 144.723 z"
                                cy="134.672" cx="389.18595679012344" j="26" val="5" barHeight="10.049999999999999"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2468"
                                d="M 396.5990226337448 144.723 L 396.5990226337448 142.71300000000002 L 404.0120884773662 142.71300000000002 L 404.0120884773662 144.723 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 396.5990226337448 144.723 L 396.5990226337448 142.71300000000002 L 404.0120884773662 142.71300000000002 L 404.0120884773662 144.723 z"
                                pathFrom="M 396.5990226337448 144.723 L 396.5990226337448 144.723 L 404.0120884773662 144.723 L 404.0120884773662 144.723 L 404.0120884773662 144.723 L 404.0120884773662 144.723 L 404.0120884773662 144.723 L 396.5990226337448 144.723 z"
                                cy="142.71200000000002" cx="404.0120884773662" j="27" val="1" barHeight="2.01"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2470"
                                d="M 411.42515432098764 74.37300000000002 L 411.42515432098764 58.29300000000001 L 418.838220164609 58.29300000000001 L 418.838220164609 74.37300000000002 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 411.42515432098764 74.37300000000002 L 411.42515432098764 58.29300000000001 L 418.838220164609 58.29300000000001 L 418.838220164609 74.37300000000002 z"
                                pathFrom="M 411.42515432098764 74.37300000000002 L 411.42515432098764 74.37300000000002 L 418.838220164609 74.37300000000002 L 418.838220164609 74.37300000000002 L 418.838220164609 74.37300000000002 L 418.838220164609 74.37300000000002 L 418.838220164609 74.37300000000002 L 411.42515432098764 74.37300000000002 z"
                                cy="58.292000000000016" cx="418.838220164609" j="28" val="8" barHeight="16.08"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2472"
                                d="M 426.25128600823047 118.59300000000002 L 426.25128600823047 112.56300000000002 L 433.66435185185185 112.56300000000002 L 433.66435185185185 118.59300000000002 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 426.25128600823047 118.59300000000002 L 426.25128600823047 112.56300000000002 L 433.66435185185185 112.56300000000002 L 433.66435185185185 118.59300000000002 z"
                                pathFrom="M 426.25128600823047 118.59300000000002 L 426.25128600823047 118.59300000000002 L 433.66435185185185 118.59300000000002 L 433.66435185185185 118.59300000000002 L 433.66435185185185 118.59300000000002 L 433.66435185185185 118.59300000000002 L 433.66435185185185 118.59300000000002 L 426.25128600823047 118.59300000000002 z"
                                cy="112.56200000000001" cx="433.66435185185185" j="29" val="3" barHeight="6.03"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2474"
                                d="M 441.07741769547323 78.39300000000003 L 441.07741769547323 74.37300000000003 L 448.4904835390946 74.37300000000003 L 448.4904835390946 78.39300000000003 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 441.07741769547323 78.39300000000003 L 441.07741769547323 74.37300000000003 L 448.4904835390946 74.37300000000003 L 448.4904835390946 78.39300000000003 z"
                                pathFrom="M 441.07741769547323 78.39300000000003 L 441.07741769547323 78.39300000000003 L 448.4904835390946 78.39300000000003 L 448.4904835390946 78.39300000000003 L 448.4904835390946 78.39300000000003 L 448.4904835390946 78.39300000000003 L 448.4904835390946 78.39300000000003 L 441.07741769547323 78.39300000000003 z"
                                cy="74.37200000000003" cx="448.4904835390946" j="30" val="2" barHeight="4.02"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2476"
                                d="M 455.90354938271605 62.313 L 455.90354938271605 56.283 L 463.31661522633743 56.283 L 463.31661522633743 62.313 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 455.90354938271605 62.313 L 455.90354938271605 56.283 L 463.31661522633743 56.283 L 463.31661522633743 62.313 z"
                                pathFrom="M 455.90354938271605 62.313 L 455.90354938271605 62.313 L 463.31661522633743 62.313 L 463.31661522633743 62.313 L 463.31661522633743 62.313 L 463.31661522633743 62.313 L 463.31661522633743 62.313 L 455.90354938271605 62.313 z"
                                cy="56.282000000000004" cx="463.31661522633743" j="31" val="3" barHeight="6.03"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2478"
                                d="M 470.7296810699588 72.36300000000003 L 470.7296810699588 64.32300000000004 L 478.1427469135802 64.32300000000004 L 478.1427469135802 72.36300000000003 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 470.7296810699588 72.36300000000003 L 470.7296810699588 64.32300000000004 L 478.1427469135802 64.32300000000004 L 478.1427469135802 72.36300000000003 z"
                                pathFrom="M 470.7296810699588 72.36300000000003 L 470.7296810699588 72.36300000000003 L 478.1427469135802 72.36300000000003 L 478.1427469135802 72.36300000000003 L 478.1427469135802 72.36300000000003 L 478.1427469135802 72.36300000000003 L 478.1427469135802 72.36300000000003 L 470.7296810699588 72.36300000000003 z"
                                cy="64.32200000000003" cx="478.1427469135802" j="32" val="4" barHeight="8.04"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2480"
                                d="M 485.55581275720164 76.38300000000001 L 485.55581275720164 58.293 L 492.968878600823 58.293 L 492.968878600823 76.38300000000001 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 485.55581275720164 76.38300000000001 L 485.55581275720164 58.293 L 492.968878600823 58.293 L 492.968878600823 76.38300000000001 z"
                                pathFrom="M 485.55581275720164 76.38300000000001 L 485.55581275720164 76.38300000000001 L 492.968878600823 76.38300000000001 L 492.968878600823 76.38300000000001 L 492.968878600823 76.38300000000001 L 492.968878600823 76.38300000000001 L 492.968878600823 76.38300000000001 L 485.55581275720164 76.38300000000001 z"
                                cy="58.292" cx="492.968878600823" j="33" val="9" barHeight="18.09" barWidth="7.413065843621399">
                              </path>
                              <path id="SvgjsPath2482"
                                d="M 500.38194444444446 16.083 L 500.38194444444446 2.012999999999997 L 507.79501028806584 2.012999999999997 L 507.79501028806584 16.083 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 500.38194444444446 16.083 L 500.38194444444446 2.012999999999997 L 507.79501028806584 2.012999999999997 L 507.79501028806584 16.083 z"
                                pathFrom="M 500.38194444444446 16.083 L 500.38194444444446 16.083 L 507.79501028806584 16.083 L 507.79501028806584 16.083 L 507.79501028806584 16.083 L 507.79501028806584 16.083 L 507.79501028806584 16.083 L 500.38194444444446 16.083 z"
                                cy="2.011999999999997" cx="507.7950102880658" j="34" val="7" barHeight="14.07"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2484"
                                d="M 515.2080761316873 88.44300000000003 L 515.2080761316873 86.43300000000002 L 522.6211419753088 86.43300000000002 L 522.6211419753088 88.44300000000003 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 515.2080761316873 88.44300000000003 L 515.2080761316873 86.43300000000002 L 522.6211419753088 86.43300000000002 L 522.6211419753088 88.44300000000003 z"
                                pathFrom="M 515.2080761316873 88.44300000000003 L 515.2080761316873 88.44300000000003 L 522.6211419753088 88.44300000000003 L 522.6211419753088 88.44300000000003 L 522.6211419753088 88.44300000000003 L 522.6211419753088 88.44300000000003 L 522.6211419753088 88.44300000000003 L 515.2080761316873 88.44300000000003 z"
                                cy="86.43200000000002" cx="522.6211419753088" j="35" val="1" barHeight="2.01"
                                barWidth="7.413065843621399"></path>
                              <path id="SvgjsPath2486"
                                d="M 530.0342078189301 188.943 L 530.0342078189301 176.883 L 537.4472736625515 176.883 L 537.4472736625515 188.943 z"
                                fill="rgba(47, 179, 68, 0.8)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknkp0kvwpf)"
                                pathTo="M 530.0342078189301 188.943 L 530.0342078189301 176.883 L 537.4472736625515 176.883 L 537.4472736625515 188.943 z"
                                pathFrom="M 530.0342078189301 188.943 L 530.0342078189301 188.943 L 537.4472736625515 188.943 L 537.4472736625515 188.943 L 537.4472736625515 188.943 L 537.4472736625515 188.943 L 537.4472736625515 188.943 L 530.0342078189301 188.943 z"
                                cy="176.882" cx="537.4472736625515" j="36" val="6" barHeight="12.06" barWidth="7.413065843621399">
                              </path>
                              <g id="SvgjsG2412" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                <g id="SvgjsG2413" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2415" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2417" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2419" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2421" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2423" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2425" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2427" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2429" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2431" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2433" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2435" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2437" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2439" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2441" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2443" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2445" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2447" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2449" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2451" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2453" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2455" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2457" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2459" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2461" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2463" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2465" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2467" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2469" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2471" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2473" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2475" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2477" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2479" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2481" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2483" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                                <g id="SvgjsG2485" className="apexcharts-bar-goals-groups" class="" clip-path="url(#gridRectMarkerMasknkp0kvwpf)">
                                </g>
                              </g>
                            </g>
                            <g id="SvgjsG2257" class="apexcharts-datalabels" data:realIndex="0"></g>
                            <g id="SvgjsG2334" class="apexcharts-datalabels" data:realIndex="1"></g>
                            <g id="SvgjsG2411" class="apexcharts-datalabels" data:realIndex="2"></g>
                          </g>
                          <g id="SvgjsG2490" class="apexcharts-grid-borders">
                            <line id="SvgjsLine2501" x1="-10.12962962962963" y1="0" x2="543.8703703703704" y2="0" stroke="#e0e0e0"
                              stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                            <line id="SvgjsLine2506" x1="-10.12962962962963" y1="201" x2="543.8703703703704" y2="201" stroke="#e0e0e0"
                              stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                          </g>
                          <line id="SvgjsLine2509" x1="-10.12962962962963" y1="0" x2="543.8703703703704" y2="0" stroke="#b6b6b6"
                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                          <line id="SvgjsLine2510" x1="-10.12962962962963" y1="0" x2="543.8703703703704" y2="0" stroke-dasharray="0"
                            stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                          <g id="SvgjsG2511" class="apexcharts-xaxis" transform="translate(0, 0)">
                            <g id="SvgjsG2512" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2514"
                                font-family="inherit" x="59.3045267489712" y="230" text-anchor="middle" dominant-baseline="auto"
                                font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label"
                                style="font-family: inherit;">
                                <tspan id="SvgjsTspan2515">24 Jun</tspan>
                                <title>24 Jun</title>
                              </text><text id="SvgjsText2517" font-family="inherit" x="163.08744855967075" y="230" text-anchor="middle"
                                dominant-baseline="auto" font-size="12px" font-weight="600" fill="#373d3f"
                                class="apexcharts-text apexcharts-xaxis-label" style="font-family: inherit;">
                                <tspan id="SvgjsTspan2518">Jul '20</tspan>
                                <title>Jul '20</title>
                              </text><text id="SvgjsText2520" font-family="inherit" x="266.8703703703703" y="230" text-anchor="middle"
                                dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f"
                                class="apexcharts-text apexcharts-xaxis-label" style="font-family: inherit;">
                                <tspan id="SvgjsTspan2521">08 Jul</tspan>
                                <title>08 Jul</title>
                              </text><text id="SvgjsText2523" font-family="inherit" x="385.4794238683129" y="230" text-anchor="middle"
                                dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f"
                                class="apexcharts-text apexcharts-xaxis-label" style="font-family: inherit;">
                                <tspan id="SvgjsTspan2524">16 Jul</tspan>
                                <title>16 Jul</title>
                              </text><text id="SvgjsText2526" font-family="inherit" x="504.08847736625546" y="230" text-anchor="middle"
                                dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f"
                                class="apexcharts-text apexcharts-xaxis-label" style="font-family: inherit;">
                                <tspan id="SvgjsTspan2527">24 Jul</tspan>
                                <title>24 Jul</title>
                              </text></g>
                          </g>
                          <g id="SvgjsG2548" class="apexcharts-yaxis-annotations"></g>
                          <g id="SvgjsG2549" class="apexcharts-xaxis-annotations"></g>
                          <g id="SvgjsG2550" class="apexcharts-point-annotations"></g>
                          <rect id="SvgjsRect2551" width="0" height="0" x="0" y="0" rx="0" ry="0"
                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                          <rect id="SvgjsRect2552" width="0" height="0" x="0" y="0" rx="0" ry="0"
                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect">
                          </rect>
                        </g>
                      </svg>
                      <div class="apexcharts-tooltip apexcharts-theme-dark">
                        <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker"
                            style="background-color: rgb(32, 107, 196);"></span>
                          <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span
                                class="apexcharts-tooltip-text-y-value"></span></div>
                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span
                                class="apexcharts-tooltip-text-goals-value"></span></div>
                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span
                                class="apexcharts-tooltip-text-z-value"></span></div>
                          </div>
                        </div>
                        <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker"
                            style="background-color: rgba(32, 107, 196, 0.8);"></span>
                          <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span
                                class="apexcharts-tooltip-text-y-value"></span></div>
                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span
                                class="apexcharts-tooltip-text-goals-value"></span></div>
                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span
                                class="apexcharts-tooltip-text-z-value"></span></div>
                          </div>
                        </div>
                        <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker"
                            style="background-color: rgba(47, 179, 68, 0.8);"></span>
                          <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span
                                class="apexcharts-tooltip-text-y-value"></span></div>
                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span
                                class="apexcharts-tooltip-text-goals-value"></span></div>
                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span
                                class="apexcharts-tooltip-text-z-value"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                        <div class="apexcharts-yaxistooltip-text"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Locations</h3>
                  <div class="ratio ratio-21x9">
                    <div>
                      <div id="map-world" class="w-100 h-100 jvm-container" style="background-color: transparent;"><svg width="586" height="251">
                          <defs></defs>
                          <g id="jvm-regions-group" transform="scale(0.5695402899409049) translate(64.44999620729465, 0)">
                            <path
                              d="M651.84,230.21l-0.6,-2.0l-1.36,-1.71l-2.31,-0.11l-0.41,0.48l0.2,0.94l-0.53,0.99l-0.72,-0.36l-0.68,0.35l-1.2,-0.36l-0.37,-2.0l-0.81,-1.86l0.39,-1.46l-0.22,-0.47l-1.14,-0.53l0.29,-0.5l1.48,-0.94l0.03,-0.65l-1.55,-1.22l0.55,-1.14l1.61,0.94l1.04,0.15l0.18,1.54l0.34,0.35l5.64,0.63l-0.84,1.64l-1.22,0.34l-0.77,1.51l0.07,0.47l1.37,1.37l0.67,-0.19l0.42,-1.39l1.21,3.84l-0.03,1.21l-0.33,-0.15l-0.4,0.28Z"
                              data-code="BD" fill="#fbfcfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M429.29,144.05l1.91,0.24l2.1,-0.63l2.63,1.99l-0.21,1.66l-0.69,0.4l-0.18,1.2l-1.66,-1.13l-1.39,0.15l-2.73,-2.7l-1.17,-0.18l-0.16,-0.52l1.54,-0.5Z"
                              data-code="BE" fill="#edf3fa" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M421.42,247.64l-0.11,0.95l0.34,1.16l1.4,1.71l0.07,1.1l0.32,0.37l2.55,0.51l-0.04,1.28l-0.38,0.53l-1.07,0.21l-0.72,1.18l-0.63,0.21l-3.22,-0.25l-0.94,0.39l-5.4,-0.05l-0.39,0.38l0.16,2.73l-1.23,-0.43l-1.17,0.1l-0.89,0.57l-2.27,-1.72l-0.13,-1.11l0.61,-0.96l0.02,-0.93l1.87,-1.98l0.44,-1.81l0.43,-0.39l1.28,0.26l1.05,-0.52l0.47,-0.73l1.84,-1.09l0.55,-0.83l2.2,-1.0l1.15,-0.3l0.72,0.45l1.13,-0.01Z"
                              data-code="BF" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M491.65,168.18l-0.86,0.88l-0.91,2.17l0.48,1.34l-1.6,-0.24l-2.55,0.95l-0.28,1.51l-1.8,0.22l-2.0,-1.0l-1.92,0.79l-1.42,-0.07l-0.15,-1.63l-1.05,-0.97l0.0,-0.8l1.2,-1.57l0.01,-0.56l-1.14,-1.23l-0.05,-0.94l0.88,0.97l0.88,-0.2l1.91,0.47l3.68,0.16l1.42,-0.81l2.72,-0.66l2.55,1.24Z"
                              data-code="BG" fill="#fdfeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M463.49,163.65l2.1,0.5l1.72,-0.03l1.52,0.68l-0.36,0.78l0.08,0.45l1.04,1.02l-0.25,0.98l-1.81,1.15l-0.38,1.38l-1.67,-0.87l-0.89,-1.2l-2.11,-1.83l-1.63,-2.22l0.23,-0.57l0.48,0.38l0.55,-0.06l0.43,-0.51l0.94,-0.06Z"
                              data-code="BA" fill="#feffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M707.48,273.58l0.68,-0.65l1.41,-0.91l-0.15,1.63l-0.81,-0.05l-0.61,0.58l-0.53,-0.6Z" data-code="BN" fill="#ffffff"
                              fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path
                              d="M263.83,340.69l-3.09,-0.23l-0.38,0.23l-0.7,1.52l-1.31,-1.53l-3.28,-0.64l-2.37,2.4l-1.31,0.26l-0.88,-3.26l-1.3,-2.86l0.74,-2.37l-0.13,-0.43l-1.2,-1.01l-0.37,-1.89l-1.08,-1.55l1.45,-2.56l-0.96,-2.33l0.47,-1.06l-0.34,-0.73l0.91,-1.32l0.16,-3.84l0.5,-1.18l-1.81,-3.41l2.46,0.07l0.8,-0.85l3.4,-1.91l2.66,-0.35l-0.19,1.38l0.3,1.07l-0.05,1.97l2.72,2.27l2.88,0.49l0.89,0.86l1.79,0.58l0.98,0.7l1.71,0.05l1.17,0.61l0.6,2.7l-0.7,0.54l0.96,2.99l0.37,0.28l4.3,0.1l-0.25,1.2l0.27,1.02l1.43,0.9l0.5,1.35l-0.41,1.86l-0.65,1.08l0.12,1.35l-2.69,-1.65l-2.4,-0.03l-4.36,0.76l-1.49,2.5l-0.11,1.52l-0.75,2.37Z"
                              data-code="BO" fill="#feffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M781.12,166.87l1.81,0.68l1.62,-0.97l0.39,2.42l-3.35,0.75l-2.23,2.88l-3.63,-1.9l-0.56,0.2l-1.26,3.05l-2.16,0.03l-0.29,-2.51l1.08,-2.03l2.45,-0.16l0.37,-0.33l1.25,-5.94l2.47,2.71l2.03,1.12ZM773.56,187.34l-0.91,2.22l0.37,1.52l-1.14,1.75l-3.02,1.26l-4.58,0.27l-3.34,3.01l-1.25,-0.8l-0.09,-1.9l-0.46,-0.38l-4.35,0.62l-3.0,1.32l-2.85,0.05l-0.37,0.27l0.13,0.44l2.32,1.89l-1.54,4.34l-1.26,0.9l-0.79,-0.7l0.56,-2.27l-0.21,-0.45l-1.47,-0.75l-0.74,-1.4l2.12,-0.84l1.26,-1.7l2.45,-1.42l1.83,-1.91l4.78,-0.81l2.6,0.57l0.44,-0.21l2.39,-4.66l1.29,1.06l0.5,0.01l5.1,-4.02l1.69,-3.73l-0.38,-3.4l0.9,-1.61l2.14,-0.44l1.23,3.72l-0.07,2.18l-2.23,2.84l-0.04,3.16ZM757.78,196.26l0.19,0.56l-1.01,1.21l-1.16,-0.68l-1.28,0.65l-0.69,1.45l-1.02,-0.5l0.01,-0.93l1.14,-1.38l1.57,0.14l0.85,-0.98l1.4,0.46Z"
                              data-code="JP" fill="#2e74c8" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M495.45,295.49l-1.08,-2.99l1.14,-0.11l0.64,-1.19l0.76,0.09l0.65,1.83l-2.1,2.36Z" data-code="BI" fill="#ffffff"
                              fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path
                              d="M429.57,255.75l-0.05,0.8l0.5,1.34l-0.42,0.86l0.17,0.79l-1.81,2.12l-0.57,1.76l-0.08,5.42l-1.41,0.2l-0.48,-1.36l0.11,-5.71l-0.52,-0.7l-0.2,-1.35l-1.48,-1.48l0.21,-0.9l0.89,-0.43l0.42,-0.92l1.27,-0.36l1.22,-1.34l0.61,-0.0l1.62,1.24Z"
                              data-code="BJ" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M650.32,213.86l0.84,0.71l-0.12,1.1l-3.76,-0.11l-1.57,0.4l-1.93,-0.87l1.48,-1.96l1.13,-0.57l1.63,0.57l1.33,0.08l0.99,0.65Z"
                              data-code="BT" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M228.38,239.28l-0.8,0.4l-2.26,-1.06l0.84,-0.23l2.14,0.3l1.17,0.56l-1.08,0.03Z" data-code="JM" fill="#feffff"
                              fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path
                              d="M483.92,330.07l2.27,4.01l2.83,2.86l0.96,0.31l0.78,2.43l2.13,0.61l1.02,0.76l-3.0,1.64l-2.32,2.02l-1.54,2.69l-1.52,0.45l-0.64,1.94l-1.34,0.52l-1.85,-0.12l-1.21,-0.74l-1.35,-0.3l-1.22,0.62l-0.75,1.37l-2.31,1.9l-1.4,0.21l-0.35,-0.59l0.16,-1.75l-1.48,-2.54l-0.62,-0.43l-0.0,-7.1l2.08,-0.08l0.39,-0.4l0.07,-8.9l5.19,-0.93l0.8,0.89l0.51,0.07l1.5,-0.95l2.21,-0.49Z"
                              data-code="BW" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M259.98,275.05l3.24,0.7l0.65,-0.53l4.55,-1.32l1.08,-1.06l-0.02,-0.63l0.55,-0.05l0.28,0.28l-0.26,0.87l0.22,0.48l0.73,0.32l0.4,0.81l-0.62,0.86l-0.4,2.13l0.82,2.56l1.69,1.43l1.43,0.2l3.17,-1.68l3.18,0.3l0.65,-0.75l-0.27,-0.92l1.9,-0.09l2.39,0.99l1.06,-0.61l0.84,0.78l1.2,-0.18l1.18,-1.06l0.84,-1.94l1.36,-2.11l0.37,-0.05l1.89,5.45l1.33,0.59l0.05,1.28l-1.77,1.94l0.02,0.56l1.02,0.87l4.07,0.36l0.08,2.16l0.66,0.29l1.74,-1.5l6.97,2.32l1.02,1.22l-0.35,1.18l0.49,0.5l2.81,-0.74l4.77,1.3l3.75,-0.08l3.57,2.0l3.29,2.86l1.93,0.72l2.12,0.12l0.71,0.62l1.21,4.51l-0.95,3.98l-4.72,5.06l-1.64,2.92l-1.72,2.05l-0.8,0.3l-0.72,2.03l0.18,4.75l-0.94,5.53l-0.81,1.13l-0.43,3.36l-2.55,3.5l-0.4,2.51l-1.86,1.04l-0.67,1.53l-2.54,0.01l-3.94,1.01l-1.83,1.2l-2.87,0.82l-3.03,2.19l-2.2,2.83l-0.36,2.0l0.4,1.58l-0.44,2.6l-0.51,1.2l-1.77,1.54l-2.75,4.78l-3.83,3.42l-1.24,2.74l-1.18,1.15l-0.36,-0.83l0.95,-1.14l0.01,-0.5l-1.52,-1.97l-4.56,-3.32l-1.03,-0.0l-2.38,-2.02l-0.81,-0.0l5.34,-5.45l3.77,-2.58l0.22,-2.46l-1.35,-1.81l-0.91,0.07l0.58,-2.33l0.01,-1.54l-1.11,-0.83l-1.75,0.3l-0.44,-3.11l-0.52,-0.95l-1.88,-0.88l-1.24,0.47l-2.17,-0.41l0.15,-3.21l-0.62,-1.34l0.66,-0.73l-0.22,-1.34l0.66,-1.13l0.44,-2.04l-0.61,-1.83l-1.4,-0.86l-0.2,-0.75l0.34,-1.39l-0.38,-0.5l-4.52,-0.1l-0.72,-2.22l0.59,-0.42l-0.03,-1.1l-0.5,-0.87l-0.32,-1.7l-1.45,-0.76l-1.63,-0.02l-1.05,-0.72l-1.6,-0.48l-1.13,-0.99l-2.69,-0.4l-2.47,-2.06l0.13,-4.35l-0.45,-0.45l-3.46,0.5l-3.44,1.94l-0.6,0.74l-2.9,-0.17l-1.47,0.42l-0.72,-0.18l0.15,-3.52l-0.63,-0.34l-1.94,1.41l-1.87,-0.06l-0.83,-1.18l-1.37,-0.26l0.21,-1.01l-1.35,-1.49l-0.88,-1.91l0.56,-0.6l-0.0,-0.81l1.29,-0.62l0.22,-0.43l-0.22,-1.19l0.61,-0.91l0.15,-0.99l2.65,-1.58l1.99,-0.47l0.42,-0.36l2.06,0.11l0.42,-0.33l1.19,-8.0l-0.41,-1.56l-1.1,-1.0l0.01,-1.33l1.91,-0.42l0.08,-0.96l-0.33,-0.43l-1.14,-0.2l-0.02,-0.83l4.47,0.05l0.82,-0.67l0.82,1.81l0.8,0.07l1.15,1.1l2.26,-0.05l0.71,-0.83l2.78,-0.96l0.48,-1.13l1.6,-0.64l0.24,-0.47l-0.48,-0.82l-1.83,-0.19l-0.36,-3.22Z"
                              data-code="BR" fill="#b0cbea" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M226.4,223.87l-0.48,-1.15l-0.84,-0.75l0.36,-1.11l0.95,1.95l0.01,1.06ZM225.56,216.43l-1.87,0.29l-0.04,-0.22l0.74,-0.14l1.17,0.06Z"
                              data-code="BS" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M493.84,128.32l0.29,0.7l0.49,0.23l1.19,-0.38l2.09,0.72l0.19,1.26l-0.45,1.24l1.57,2.26l0.89,0.59l0.17,0.81l1.58,0.56l0.4,0.5l-0.53,0.41l-1.87,-0.11l-0.73,0.38l-0.13,0.52l1.04,2.74l-1.91,0.26l-0.89,0.99l-0.11,1.18l-2.73,-0.04l-0.53,-0.62l-0.52,-0.08l-0.75,0.46l-0.91,-0.42l-1.92,-0.07l-2.75,-0.79l-2.6,-0.28l-2.0,0.07l-1.5,0.92l-0.67,0.07l-0.08,-1.22l-0.59,-1.19l1.36,-0.88l0.01,-1.35l-0.7,-1.41l-0.07,-1.0l2.16,-0.02l2.72,-1.3l0.75,-2.04l1.91,-1.04l0.2,-0.41l-0.19,-1.25l3.8,-1.78l2.3,0.77Z"
                              data-code="BY" fill="#fdfefe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M198.03,244.38l0.1,-4.49l0.69,-0.06l0.74,-1.3l0.34,0.28l-0.4,1.3l0.17,0.58l-0.34,2.25l-1.3,1.42Z" data-code="BZ"
                              fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element">
                            </path>
                            <path
                              d="M491.55,115.25l2.55,-1.85l-0.01,-0.65l-2.2,-1.5l7.32,-6.76l1.03,-2.11l-0.13,-0.49l-3.46,-2.52l0.86,-2.7l-2.11,-2.81l1.56,-3.67l-2.77,-4.52l2.15,-2.99l-0.08,-0.55l-3.65,-2.73l0.3,-2.54l1.81,-0.37l4.26,-1.77l2.42,-1.45l4.06,2.61l6.79,1.04l9.34,4.85l1.78,1.88l0.14,2.46l-2.55,2.02l-3.9,1.06l-11.07,-3.14l-2.06,0.53l-0.13,0.7l3.94,2.94l0.31,5.86l0.26,0.36l5.14,2.24l0.58,-0.29l0.32,-1.94l-1.35,-1.78l1.13,-1.09l6.13,2.42l2.11,-0.98l0.18,-0.56l-1.51,-2.67l5.41,-3.76l2.07,0.22l2.26,1.41l0.57,-0.16l1.46,-2.87l-0.05,-0.44l-1.92,-2.32l1.12,-2.32l-1.32,-2.27l5.87,1.16l1.04,1.75l-2.59,0.43l-0.33,0.4l0.02,2.36l2.46,1.83l3.87,-0.91l0.86,-2.8l13.69,-5.65l0.99,0.11l-1.92,2.06l0.23,0.67l3.11,0.45l2.0,-1.48l4.56,-0.12l3.64,-1.73l2.65,2.44l0.56,-0.01l2.85,-2.88l-0.01,-0.57l-2.35,-2.29l0.9,-1.01l7.14,1.3l3.41,1.36l9.05,4.97l0.51,-0.11l1.67,-2.27l-0.05,-0.53l-2.43,-2.21l-0.06,-0.78l-0.34,-0.36l-2.52,-0.36l0.64,-1.93l-1.32,-3.46l-0.06,-1.21l4.48,-4.06l1.69,-4.29l1.6,-0.81l6.23,1.18l0.44,2.21l-2.29,3.64l0.06,0.5l1.47,1.39l0.76,3.0l-0.56,6.03l2.69,2.82l-0.96,2.57l-4.86,5.95l0.23,0.64l2.86,0.61l0.42,-0.17l0.93,-1.4l2.64,-1.03l0.87,-2.24l2.09,-1.96l0.07,-0.5l-1.36,-2.28l1.09,-2.69l-0.32,-0.55l-2.47,-0.33l-0.5,-2.06l1.94,-4.38l-0.06,-0.42l-2.96,-3.4l4.12,-2.88l0.16,-0.4l-0.51,-2.93l0.54,-0.05l1.13,2.25l-0.96,4.35l0.27,0.47l2.68,0.84l0.5,-0.51l-1.02,-2.99l3.79,-1.66l5.01,-0.24l4.53,2.61l0.48,-0.06l0.07,-0.48l-2.18,-3.82l-0.23,-4.67l3.98,-0.9l5.97,0.21l5.49,-0.64l0.27,-0.65l-1.83,-2.31l2.56,-2.9l2.87,-0.17l4.8,-2.47l6.54,-0.67l1.03,-1.42l6.25,-0.45l2.32,1.11l5.53,-2.7l4.5,0.08l0.39,-0.28l0.66,-2.15l2.26,-2.12l5.69,-2.11l3.21,1.29l-2.46,0.94l-0.25,0.42l0.34,0.35l5.41,0.77l0.61,2.33l0.58,0.25l2.2,-1.22l7.13,0.07l5.51,2.47l1.79,1.72l-0.53,2.24l-9.16,4.15l-1.97,1.52l0.16,0.71l6.77,1.91l2.16,-0.78l1.13,2.74l0.67,0.11l1.01,-1.15l3.81,-0.73l7.7,0.77l0.54,1.99l0.36,0.29l10.47,0.71l0.43,-0.38l0.13,-3.23l4.87,0.78l3.95,-0.02l3.83,2.4l1.03,2.71l-1.35,1.79l0.02,0.5l3.15,3.64l4.07,1.96l0.53,-0.18l2.23,-4.47l3.95,1.93l4.16,-1.21l4.73,1.39l2.05,-1.26l3.94,0.62l0.43,-0.55l-1.68,-4.02l2.89,-1.8l22.31,3.03l2.16,2.75l6.55,3.51l10.29,-0.81l4.82,0.73l1.85,1.66l-0.29,3.08l0.25,0.41l3.08,1.26l3.56,-0.88l4.35,-0.11l4.8,0.87l4.57,-0.47l4.23,3.79l0.43,0.07l3.1,-1.4l0.16,-0.6l-1.88,-2.62l0.85,-1.52l7.71,1.21l5.22,-0.26l7.09,2.09l9.59,5.22l6.35,4.11l-0.2,2.38l1.88,1.41l0.6,-0.42l-0.48,-2.53l6.15,0.57l4.4,3.51l-1.97,1.43l-4.0,0.41l-0.36,0.39l-0.06,3.79l-0.74,0.62l-2.07,-0.11l-1.91,-1.39l-3.14,-1.11l-0.78,-1.85l-2.72,-0.68l-2.63,0.49l-1.04,-1.1l0.46,-1.31l-0.5,-0.51l-3.0,0.98l-0.22,0.58l0.99,1.7l-1.21,1.48l-3.04,1.68l-3.12,-0.28l-0.4,0.23l0.09,0.46l2.2,2.09l1.46,3.2l1.15,1.1l0.24,1.33l-0.42,0.67l-4.63,-0.77l-6.96,2.9l-2.19,0.44l-7.6,5.06l-0.84,1.45l-3.61,-2.37l-6.24,2.82l-0.94,-1.15l-0.53,-0.08l-2.28,1.52l-3.2,-0.49l-0.44,0.27l-0.78,2.37l-3.05,3.78l0.09,1.47l0.29,0.36l2.54,0.72l-0.29,4.53l-1.97,0.11l-0.35,0.26l-1.07,2.94l0.8,1.45l-3.91,1.58l-1.05,3.95l-3.48,0.77l-0.3,0.3l-0.72,3.29l-3.09,2.65l-0.7,-1.74l-2.44,-12.44l1.16,-4.71l2.04,-2.06l0.22,-1.64l3.8,-0.86l4.46,-4.61l4.28,-3.81l4.48,-3.01l2.17,-5.63l-0.42,-0.54l-3.04,0.33l-1.77,3.31l-5.86,3.86l-1.86,-4.25l-0.45,-0.23l-6.46,1.3l-6.47,6.44l-0.01,0.55l1.58,1.74l-8.24,1.17l0.15,-2.2l-0.34,-0.42l-3.89,-0.56l-3.25,1.81l-7.62,-0.62l-8.45,1.19l-17.71,15.41l0.22,0.7l3.74,0.41l1.36,2.17l2.43,0.76l1.88,-1.68l2.4,0.2l3.4,3.54l0.08,2.6l-1.95,3.42l-0.21,3.9l-1.1,5.06l-3.71,4.54l-0.87,2.21l-8.29,8.89l-3.19,1.7l-1.32,0.03l-1.45,-1.36l-0.49,-0.04l-2.27,1.5l0.41,-3.65l-0.59,-2.47l1.75,-0.89l2.91,0.53l0.42,-0.2l1.68,-3.03l0.87,-3.46l0.97,-1.18l1.32,-2.88l-0.45,-0.56l-4.14,0.95l-2.19,1.25l-3.41,-0.0l-1.06,-2.93l-2.97,-2.3l-4.28,-1.06l-1.75,-5.07l-2.66,-5.01l-2.29,-1.29l-3.75,-1.01l-3.44,0.08l-3.18,0.62l-2.24,1.77l0.05,0.66l1.18,0.69l0.02,1.43l-1.33,1.05l-2.26,3.51l-0.04,1.43l-3.16,1.84l-2.82,-1.16l-3.01,0.23l-1.35,-1.07l-1.5,-0.35l-3.9,2.31l-3.22,0.52l-2.27,0.79l-3.05,-0.51l-2.21,0.03l-1.48,-1.6l-2.6,-1.63l-2.63,-0.43l-5.46,1.01l-3.23,-1.25l-0.72,-2.57l-5.2,-1.24l-2.75,-1.36l-0.5,0.12l-2.59,3.45l0.84,2.1l-2.06,1.93l-3.41,-0.77l-2.42,-0.12l-1.83,-1.54l-2.53,-0.05l-2.42,-0.98l-3.86,1.57l-4.72,2.78l-3.3,0.75l-1.55,-1.92l-3.0,0.41l-1.11,-1.33l-1.62,-0.59l-1.31,-1.94l-1.38,-0.6l-3.7,0.79l-3.31,-1.83l-0.51,0.11l-0.99,1.29l-5.29,-8.05l-2.96,-2.48l0.65,-0.77l0.01,-0.51l-0.5,-0.11l-6.2,3.21l-1.84,0.15l0.15,-1.39l-0.26,-0.42l-3.22,-1.17l-2.46,0.7l-0.69,-3.16l-0.32,-0.31l-4.5,-0.75l-2.47,1.47l-6.19,1.27l-1.29,0.86l-9.51,1.3l-1.15,1.17l-0.03,0.53l1.47,1.9l-1.89,0.69l-0.22,0.56l0.31,0.6l-2.11,1.44l0.03,0.68l3.75,2.12l-0.39,0.98l-3.23,-0.13l-0.86,0.86l-3.09,-1.59l-3.97,0.07l-2.66,1.35l-8.32,-3.56l-4.07,0.06l-5.39,3.68l-0.39,2.0l-2.03,-1.5l-0.59,0.13l-2.0,3.59l0.57,0.93l-1.28,2.16l0.06,0.48l2.13,2.17l1.95,0.04l1.37,1.82l-0.23,1.46l0.25,0.43l0.83,0.33l-0.8,1.31l-2.49,0.62l-2.49,3.2l0.0,0.49l2.17,2.78l-0.15,2.18l2.5,3.24l-1.58,1.59l-0.7,-0.13l-1.63,-1.72l-2.29,-0.84l-0.94,-1.31l-2.34,-0.63l-1.48,0.4l-0.43,-0.47l-3.51,-1.48l-5.76,-1.01l-0.45,0.19l-2.89,-2.34l-2.9,-1.2l-1.53,-1.29l1.29,-0.43l2.08,-2.61l-0.05,-0.55l-0.89,-0.79l3.05,-1.06l0.27,-0.42l-0.07,-0.69l-0.49,-0.35l-1.73,0.39l0.04,-0.68l1.04,-0.72l2.66,-0.48l0.4,-1.32l-0.5,-1.6l0.92,-1.54l0.03,-1.17l-0.29,-0.37l-3.69,-1.06l-1.41,0.02l-1.42,-1.41l-2.19,0.38l-2.77,-1.01l-0.03,-0.59l-0.89,-1.43l-2.0,-0.32l-0.11,-0.54l0.49,-0.53l0.01,-0.53l-1.6,-1.9l-3.58,0.02l-0.88,0.73l-0.46,-0.07l-1.0,-2.79l2.22,-0.02l0.97,-0.74l0.07,-0.57l-0.9,-1.04l-1.35,-0.48l-0.11,-0.7l-0.95,-0.58l-1.38,-1.99l0.46,-0.98l-0.51,-1.96l-2.45,-0.84l-1.21,0.3l-0.46,-0.76l-2.46,-0.83l-0.72,-1.87l-0.21,-1.69l-0.99,-0.85l0.85,-1.17l-0.7,-3.21l1.66,-1.97l-0.16,-0.79ZM749.2,170.72l-0.6,0.4l-0.13,0.16l-0.01,-0.51l0.74,-0.05ZM874.85,67.94l-5.63,0.48l-0.26,-0.84l3.15,-1.89l1.94,0.01l3.19,1.16l-2.39,1.09ZM797.39,48.49l-2.0,1.36l-3.8,-0.42l-4.25,-1.8l0.35,-0.97l9.69,1.83ZM783.67,46.12l-1.63,3.09l-8.98,-0.13l-4.09,1.14l-4.54,-2.97l1.16,-3.01l3.05,-0.89l6.5,0.22l8.54,2.56ZM778.2,134.98l-0.56,-0.9l0.27,-0.12l0.29,1.01ZM778.34,135.48l0.94,3.53l-0.05,3.38l1.05,3.39l2.18,5.0l-2.89,-0.83l-0.49,0.26l-1.54,4.65l2.42,3.5l-0.04,1.13l-1.24,-1.24l-0.61,0.06l-1.09,1.61l-0.28,-1.61l0.27,-3.1l-0.28,-3.4l0.58,-2.47l0.11,-4.39l-1.46,-3.36l0.21,-4.32l2.15,-1.46l0.07,-0.34ZM771.95,56.61l1.76,-1.42l2.89,-0.42l3.28,1.71l0.14,0.6l-3.27,0.03l-4.81,-0.5ZM683.76,31.09l-13.01,1.93l4.03,-6.35l1.82,-0.56l1.73,0.34l5.99,2.98l-0.56,1.66ZM670.85,27.93l-5.08,0.64l-6.86,-1.57l-3.99,-2.05l-2.1,-4.16l-2.6,-0.87l5.72,-3.5l5.2,-1.28l4.69,2.85l5.59,5.4l-0.56,4.53ZM564.15,68.94l-0.64,0.17l-7.85,-0.57l-0.86,-2.04l-4.28,-1.17l-0.28,-1.94l2.27,-0.89l0.25,-0.39l-0.08,-2.38l4.81,-3.97l-0.15,-0.7l-1.47,-0.38l5.3,-3.81l0.15,-0.44l-0.58,-1.94l5.28,-2.51l8.21,-3.27l8.28,-0.96l4.35,-1.94l4.6,-0.64l1.36,1.61l-1.34,1.28l-16.43,4.94l-7.97,4.88l-7.74,9.63l0.66,4.14l4.16,3.27ZM548.81,18.48l-5.5,1.18l-0.58,1.02l-2.59,0.84l-2.13,-1.07l1.12,-1.42l-0.3,-0.65l-2.33,-0.07l1.68,-0.36l3.47,-0.06l0.42,1.29l0.66,0.16l1.38,-1.34l2.15,-0.88l2.94,1.01l-0.39,0.36ZM477.37,133.15l-4.08,0.05l-2.56,-0.32l0.33,-0.87l3.17,-1.03l3.24,0.96l-0.09,1.23Z"
                              data-code="RU" fill="#c6d9f0" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M497.0,288.25l0.71,1.01l-0.11,1.09l-1.63,0.03l-1.04,1.39l-0.83,-0.11l0.51,-1.2l0.08,-1.34l0.42,-0.41l0.7,0.14l1.19,-0.61Z"
                              data-code="RW" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M469.4,163.99l0.42,-0.5l-0.01,-0.52l-1.15,-1.63l1.43,-0.62l1.33,0.12l1.17,1.06l0.46,1.13l1.34,0.64l0.35,1.35l1.46,0.9l0.76,-0.29l0.2,0.69l-0.48,0.78l0.22,1.12l1.05,1.22l-0.77,0.8l-0.37,1.52l-1.21,0.08l0.24,-0.64l-0.39,-0.54l-2.08,-1.64l-0.9,0.05l-0.48,0.94l-2.12,-1.37l0.53,-1.6l-1.11,-1.37l0.51,-1.1l-0.41,-0.57Z"
                              data-code="RS" fill="#fefeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M486.93,129.3l0.17,1.12l-1.81,0.98l-0.72,2.02l-2.47,1.18l-2.1,-0.02l-0.73,-1.05l-1.06,-0.3l-0.09,-1.87l-3.56,-1.13l-0.43,-2.36l2.48,-0.94l4.12,0.22l2.25,-0.31l0.52,0.69l1.24,0.21l2.19,1.56Z"
                              data-code="LT" fill="#fefeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M436.08,149.45l-0.48,-0.07l0.3,-1.28l0.27,0.4l-0.09,0.96Z" data-code="LU" fill="#fdfefe" fill-opacity="1"
                              stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path
                              d="M399.36,265.97l0.18,1.54l-0.48,0.99l0.08,0.47l2.47,1.8l-0.33,2.8l-2.65,-1.13l-5.78,-4.61l0.58,-1.32l2.1,-2.33l0.86,-0.22l0.77,1.14l-0.14,0.85l0.59,0.87l1.0,0.14l0.76,-0.99Z"
                              data-code="LR" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M487.53,154.23l0.6,0.24l2.87,3.98l-0.17,2.69l0.45,1.42l1.32,0.81l1.35,-0.42l0.76,0.36l0.02,0.31l-0.83,0.45l-0.59,-0.22l-0.54,0.3l-0.62,3.3l-1.0,-0.22l-2.07,-1.13l-2.95,0.71l-1.25,0.76l-3.51,-0.15l-1.89,-0.47l-0.87,0.16l-0.82,-1.3l0.29,-0.26l-0.06,-0.64l-1.09,-0.34l-0.56,0.5l-1.05,-0.64l-0.39,-1.39l-1.36,-0.65l-0.35,-1.0l-0.83,-0.75l1.54,-0.54l2.66,-4.21l2.4,-1.24l2.96,0.34l1.48,0.73l0.79,-0.45l1.78,-0.3l0.75,-0.74l0.79,0.0Z"
                              data-code="RO" fill="#f9fbfd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M386.23,253.6l-0.29,0.84l0.15,0.6l-2.21,0.59l-0.86,0.96l-1.04,-0.83l-1.09,-0.23l-0.54,-1.06l-0.66,-0.49l2.41,-0.48l4.13,0.1Z"
                              data-code="GW" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M195.08,249.77l-2.48,-0.37l-1.03,-0.45l-1.14,-0.89l0.3,-0.99l-0.24,-0.68l0.96,-1.66l2.98,-0.01l0.4,-0.37l-0.19,-1.28l-1.67,-1.4l0.51,-0.4l0.0,-1.05l3.85,0.02l-0.21,4.53l0.4,0.43l1.46,0.38l-1.48,0.98l-0.35,0.7l0.12,0.57l-2.2,1.96Z"
                              data-code="GT" fill="#fdfeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M487.07,174.59l-0.59,1.43l-0.37,0.21l-2.84,-0.35l-3.03,0.77l-0.18,0.68l1.28,1.23l-0.61,0.23l-1.14,0.0l-1.2,-1.39l-0.63,0.03l-0.53,1.01l0.56,1.76l1.03,1.19l-0.56,0.38l-0.05,0.62l2.52,2.12l0.02,0.87l-1.78,-0.59l-0.48,0.56l0.5,1.0l-1.07,0.2l-0.3,0.53l0.75,2.01l-0.98,0.02l-1.84,-1.12l-1.37,-4.2l-2.21,-2.95l-0.11,-0.56l1.04,-1.28l0.2,-0.95l0.85,-0.66l0.03,-0.46l1.32,-0.21l1.01,-0.64l1.22,0.05l0.65,-0.56l2.26,-0.0l1.82,-0.75l1.85,1.0l2.28,-0.28l0.35,-0.39l0.01,-0.77l0.34,0.22ZM480.49,192.16l0.58,0.4l-0.68,-0.12l0.11,-0.28ZM482.52,192.82l2.51,0.06l0.24,0.32l-1.99,0.13l-0.77,-0.51Z"
                              data-code="GR" fill="#f3f7fc" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M448.79,279.62l0.02,2.22l-4.09,0.0l0.69,-2.27l3.38,0.05Z" data-code="GQ" fill="#feffff" fill-opacity="1"
                              stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path
                              d="M277.42,270.07l-0.32,1.83l-1.32,0.57l-0.23,0.46l-0.28,2.0l1.11,1.82l0.83,0.19l0.32,1.25l1.13,1.62l-1.21,-0.19l-1.08,0.71l-1.77,0.5l-0.44,0.46l-0.86,-0.09l-1.32,-1.01l-0.77,-2.27l0.36,-1.9l0.68,-1.23l-0.57,-1.17l-0.74,-0.43l0.12,-1.16l-0.9,-0.69l-1.1,0.09l-1.31,-1.48l0.53,-0.72l-0.04,-0.84l1.99,-0.86l0.05,-0.59l-0.71,-0.78l0.14,-0.57l1.66,-1.24l1.36,0.77l1.41,1.49l0.06,1.15l0.37,0.38l0.8,0.05l2.06,1.86Z"
                              data-code="GY" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M521.71,168.93l5.29,0.89l4.07,2.01l1.41,-0.44l2.07,0.56l0.68,1.1l1.07,0.55l-0.12,0.59l0.98,1.29l-1.01,-0.13l-1.81,-0.83l-0.94,0.47l-3.23,0.43l-2.29,-1.39l-2.33,0.05l0.21,-0.97l-0.76,-2.26l-1.45,-1.12l-1.43,-0.39l-0.41,-0.42Z"
                              data-code="GE" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M412.61,118.72l-2.19,3.22l-0.0,0.45l5.13,-0.3l-0.53,2.37l-2.2,3.12l0.29,0.63l2.37,0.21l2.33,4.3l1.76,0.69l2.2,5.12l2.94,0.77l-0.23,1.62l-1.15,0.88l-0.1,0.52l0.82,1.42l-1.86,1.43l-3.3,-0.02l-4.12,0.87l-1.04,-0.58l-0.47,0.06l-1.51,1.41l-2.12,-0.34l-1.86,1.18l-0.6,-0.29l3.19,-3.0l2.16,-0.69l0.28,-0.41l-0.34,-0.36l-3.73,-0.53l-0.4,-0.76l2.2,-0.87l0.17,-0.61l-1.26,-1.67l0.36,-1.7l3.38,0.28l0.43,-0.33l0.37,-1.99l-1.79,-2.49l-3.11,-0.72l-0.38,-0.59l0.79,-1.35l-0.04,-0.46l-0.82,-0.97l-0.61,0.01l-0.68,0.84l-0.1,-2.34l-1.23,-1.88l0.85,-3.47l1.77,-2.68l1.85,0.26l2.17,-0.22ZM406.26,132.86l-1.01,1.77l-1.57,-0.59l-1.16,0.01l0.37,-1.54l-0.39,-1.39l1.45,-0.1l2.3,1.84Z"
                              data-code="GB" fill="#a7c5e8" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M453.24,279.52l-0.08,0.98l0.7,1.29l2.36,0.24l-0.98,2.63l1.18,1.79l0.25,1.78l-0.29,1.52l-0.6,0.93l-1.84,-0.09l-1.23,-1.11l-0.66,0.23l-0.15,0.84l-1.42,0.26l-1.02,0.7l-0.11,0.52l0.77,1.35l-1.34,0.97l-3.94,-4.3l-1.44,-2.45l0.06,-0.6l0.54,-0.81l1.05,-3.46l4.17,-0.07l0.4,-0.4l-0.02,-2.66l2.39,0.21l1.25,-0.27Z"
                              data-code="GA" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M391.8,254.11l0.47,0.8l1.11,-0.32l0.98,0.7l1.07,0.2l2.26,-1.22l0.64,0.44l1.13,1.56l-0.48,1.4l0.8,0.3l-0.08,0.48l0.46,0.68l-0.35,1.36l1.05,2.61l-1.0,0.69l0.03,1.41l-0.72,-0.06l-1.08,1.0l-0.24,-0.27l0.07,-1.11l-1.05,-1.54l-1.79,0.21l-0.35,-2.01l-1.6,-2.18l-2.0,-0.0l-1.31,0.54l-1.95,2.18l-1.86,-2.19l-1.2,-0.78l-0.3,-1.11l-0.8,-0.85l0.65,-0.72l0.81,-0.03l1.64,-0.8l0.23,-1.87l2.67,0.64l0.89,-0.3l1.21,0.15Z"
                              data-code="GN" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M379.31,251.39l0.1,-0.35l2.43,-0.07l0.74,-0.61l0.51,-0.03l0.77,0.49l-1.03,-0.3l-1.87,0.9l-1.65,-0.04ZM384.03,250.91l0.91,0.05l0.75,-0.24l-0.59,0.31l-1.08,-0.13Z"
                              data-code="GM" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M353.02,1.2l14.69,4.67l-3.68,1.89l-22.97,0.86l-0.36,0.27l0.12,0.43l1.55,1.18l8.79,-0.66l7.48,2.07l4.86,-1.77l1.66,1.73l-2.53,3.19l-0.01,0.48l0.46,0.15l6.35,-2.2l12.06,-2.31l7.24,1.13l1.09,1.99l-9.79,4.01l-1.44,1.32l-7.87,0.98l-0.35,0.41l0.38,0.38l5.07,0.24l-2.53,3.58l-2.07,3.81l0.08,6.05l2.57,3.11l-3.22,0.2l-4.12,1.66l-0.05,0.72l4.45,2.65l0.51,3.75l-2.3,0.4l-0.25,0.64l2.79,3.69l-4.82,0.31l-0.36,0.29l0.16,0.44l2.62,1.8l-0.59,1.22l-3.3,0.7l-3.45,0.01l-0.29,0.68l3.03,3.12l0.02,1.34l-4.4,-1.73l-1.72,1.35l0.15,0.66l3.31,1.15l3.13,2.71l0.81,3.16l-3.85,0.75l-4.89,-4.26l-0.47,-0.03l-0.17,0.44l0.79,2.86l-2.71,2.21l-0.13,0.44l0.37,0.27l8.73,0.34l-12.32,6.64l-7.24,1.48l-2.94,0.08l-2.69,1.75l-3.43,4.41l-5.24,2.84l-1.73,0.18l-7.12,2.1l-2.15,2.52l-0.13,2.99l-1.19,2.45l-4.01,3.09l-0.14,0.44l0.97,2.9l-2.28,6.48l-3.1,0.2l-3.83,-3.07l-4.86,-0.02l-2.25,-1.93l-1.7,-3.79l-4.3,-4.84l-1.21,-2.49l-0.44,-3.8l-3.32,-3.63l0.84,-2.86l-1.56,-1.7l2.28,-4.6l3.83,-1.74l1.03,-1.96l0.52,-3.47l-0.59,-0.41l-4.17,2.21l-2.07,0.58l-2.72,-1.28l-0.15,-2.71l0.85,-2.09l2.01,-0.06l5.06,1.2l0.46,-0.23l-0.14,-0.49l-6.54,-4.47l-2.67,0.55l-1.58,-0.86l2.56,-4.01l-0.03,-0.48l-1.5,-1.74l-4.98,-8.5l-3.13,-1.96l0.03,-1.88l-0.24,-0.37l-6.85,-3.02l-5.36,-0.38l-12.7,0.58l-2.78,-1.57l-3.66,-2.77l5.73,-1.45l5.0,-0.28l0.38,-0.38l-0.35,-0.41l-10.67,-1.38l-5.3,-2.06l0.25,-1.54l18.41,-5.26l1.22,-2.27l-0.25,-0.55l-6.14,-1.86l1.68,-1.77l8.55,-4.03l3.59,-0.63l0.3,-0.54l-0.88,-2.27l5.47,-1.47l7.65,-0.95l7.55,-0.05l3.04,1.85l6.48,-3.27l5.81,2.22l3.56,0.5l5.16,1.94l0.5,-0.21l-0.17,-0.52l-5.71,-3.13l0.28,-2.13l8.12,-3.6l8.7,0.28l3.35,-2.34l8.71,-0.6l19.93,0.8Z"
                              data-code="GL" fill="#f6f8fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M540.81,207.91l0.37,0.86l-0.17,0.76l0.6,1.53l-0.95,0.04l-0.82,-1.28l-1.57,-0.18l1.31,-1.88l1.22,0.17Z" data-code="KW"
                              fill="#fafcfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element">
                            </path>
                            <path
                              d="M420.53,257.51l-0.01,0.72l0.96,1.2l0.24,3.73l0.59,0.95l-0.51,2.1l0.19,1.41l1.02,2.21l-6.97,2.84l-1.8,-0.57l0.04,-0.89l-1.02,-2.04l0.61,-2.65l1.07,-2.32l-0.96,-6.47l5.01,0.07l0.94,-0.39l0.61,0.11Z"
                              data-code="GH" fill="#feffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M568.09,230.93l-0.91,1.67l-1.22,0.04l-0.6,0.76l-0.41,1.51l0.27,1.58l-1.16,0.05l-1.56,0.97l-0.76,1.74l-1.62,0.05l-0.98,0.65l-0.17,1.15l-0.89,0.52l-1.49,-0.18l-2.4,0.94l-2.47,-5.4l7.35,-2.71l1.67,-5.23l-1.12,-2.09l0.05,-0.83l0.67,-1.0l0.07,-1.05l0.9,-0.42l-0.05,-2.07l0.7,-0.01l1.0,1.62l1.51,1.08l3.3,0.84l1.73,2.29l0.81,0.37l-1.23,2.35l-0.99,0.79Z"
                              data-code="OM" fill="#fdfefe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M531.15,258.94l1.51,0.12l5.13,-0.95l5.3,-1.48l-0.01,4.4l-2.67,3.39l-1.85,0.01l-8.04,-2.94l-2.55,-3.17l1.12,-1.71l2.04,2.34Z"
                              data-code="_2" fill="#f6f8fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M472.77,172.64l-1.08,-1.29l0.96,-0.77l0.29,-0.83l1.98,1.64l-0.36,0.67l-1.79,0.58Z" data-code="_1" fill="#f6f8fb"
                              fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path d="M504.91,192.87l0.34,0.01l0.27,-0.07l-0.29,0.26l-0.31,-0.2Z" data-code="_0" fill="#f6f8fb" fill-opacity="1"
                              stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path
                              d="M518.64,201.38l-5.14,1.56l-0.19,0.65l2.16,2.39l-0.89,1.14l-1.71,0.34l-1.71,1.8l-2.34,-0.37l1.21,-4.32l0.56,-4.07l2.8,0.94l4.46,-2.71l0.79,2.66Z"
                              data-code="JO" fill="#fefeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M455.59,162.84l1.09,0.07l-0.82,0.94l-0.27,-1.01ZM456.96,162.92l0.62,-0.41l1.73,0.45l0.42,-0.4l-0.01,-0.59l0.86,-0.52l0.2,-1.05l1.63,-0.68l2.57,1.68l2.07,0.6l0.87,-0.31l1.05,1.57l-0.52,0.63l-1.05,-0.56l-1.68,0.04l-2.1,-0.5l-1.29,0.06l-0.57,0.49l-0.59,-0.47l-0.62,0.16l-0.46,1.7l1.79,2.42l2.79,2.75l-1.18,-0.87l-2.21,-0.87l-1.67,-1.78l0.13,-0.63l-1.05,-1.19l-0.32,-1.27l-1.42,-0.43Z"
                              data-code="HR" fill="#fdfdfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M237.05,238.38l-1.16,0.43l-0.91,-0.55l0.05,-0.2l2.02,0.31ZM237.53,238.43l1.06,0.12l-0.05,0.01l-1.01,-0.12ZM239.25,238.45l0.79,-0.51l0.06,-0.62l-1.02,-1.0l0.02,-0.82l-0.3,-0.4l-0.93,-0.32l3.16,0.45l0.02,1.84l-0.48,0.34l-0.08,0.58l0.54,0.72l-1.78,-0.26Z"
                              data-code="HT" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M462.08,157.89l0.65,-1.59l-0.09,-0.44l0.64,-0.0l0.39,-0.34l0.1,-0.69l1.75,0.87l2.32,-0.37l0.43,-0.66l3.49,-0.78l0.69,-0.78l0.57,-0.14l2.57,0.93l0.67,-0.23l1.03,0.65l0.08,0.37l-1.42,0.71l-2.59,4.14l-1.8,0.53l-1.68,-0.1l-2.74,1.23l-1.85,-0.54l-2.54,-1.66l-0.66,-1.1Z"
                              data-code="HU" fill="#fafcfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M199.6,249.52l-1.7,-1.21l0.06,-0.94l3.04,-2.14l2.37,0.28l1.27,-0.09l1.1,-0.52l1.3,0.28l1.14,-0.25l1.38,0.37l2.23,1.37l-2.36,0.93l-1.23,-0.39l-0.88,1.3l-1.28,0.99l-0.98,-0.22l-0.42,0.52l-0.96,0.05l-0.36,0.41l0.04,0.88l-0.52,0.6l-0.3,0.04l-0.3,-0.55l-0.66,-0.31l0.11,-0.67l-0.48,-0.65l-0.87,-0.26l-0.73,0.2Z"
                              data-code="HN" fill="#feffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M256.17,238.73l-0.26,0.27l-2.83,0.05l-0.07,-0.55l1.95,-0.1l1.22,0.33Z" data-code="PR" fill="#f6f8fb" fill-opacity="1"
                              stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path d="M509.21,203.07l0.1,-0.06l-0.02,0.03l-0.09,0.03ZM509.36,202.91l-0.02,-0.63l-0.33,-0.16l0.31,-1.09l0.24,0.1l-0.2,1.78Z"
                              data-code="PS" fill="#f6f8fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M401.84,187.38l-0.64,0.47l-1.13,-0.35l-0.91,0.17l0.28,-1.78l-0.24,-1.78l-1.25,-0.56l-0.45,-0.84l0.17,-1.66l1.01,-1.18l0.69,-2.92l-0.04,-1.39l-0.59,-1.9l1.3,-0.85l0.84,1.35l3.1,-0.3l0.46,0.99l-1.05,0.94l-0.03,2.16l-0.41,0.57l-0.08,1.1l-0.79,0.18l-0.26,0.59l0.91,1.6l-0.63,1.75l0.76,1.09l-1.1,1.52l0.07,1.05Z"
                              data-code="PT" fill="#f6f9fd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M274.9,336.12l0.74,1.52l-0.16,3.45l0.32,0.41l2.64,0.5l1.11,-0.47l1.4,0.59l0.36,0.6l0.53,3.42l1.27,0.4l0.98,-0.38l0.51,0.27l-0.0,1.18l-1.21,5.32l-2.09,1.9l-1.8,0.4l-4.71,-0.98l2.2,-3.63l-0.32,-1.5l-2.78,-1.28l-3.03,-1.94l-2.07,-0.44l-4.34,-4.06l0.91,-2.9l0.08,-1.42l1.07,-2.04l4.13,-0.72l2.18,0.03l2.05,1.17l0.03,0.59Z"
                              data-code="PY" fill="#feffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M213.8,263.68l0.26,-1.52l-0.36,-0.26l-0.01,-0.49l0.44,-0.1l0.93,1.4l1.26,0.03l0.77,0.49l1.38,-0.23l2.51,-1.11l0.86,-0.72l3.45,0.85l1.4,1.18l0.41,1.74l-0.21,0.34l-0.53,-0.12l-0.47,0.29l-0.16,0.6l-0.68,-1.28l0.45,-0.49l-0.19,-0.66l-0.47,-0.13l-0.54,-0.84l-1.5,-0.75l-1.1,0.16l-0.75,0.99l-1.62,0.84l-0.18,0.96l0.85,0.97l-0.58,0.45l-0.69,0.08l-0.34,-1.18l-1.27,0.03l-0.71,-1.05l-2.59,-0.46Z"
                              data-code="PA" fill="#fefeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M808.58,298.86l2.54,2.56l-0.13,0.26l-0.33,0.12l-0.87,-0.78l-1.22,-2.16ZM801.41,293.04l0.5,0.29l0.26,0.27l-0.49,-0.35l-0.27,-0.21ZM803.17,294.58l0.59,0.5l0.08,1.06l-0.29,-0.91l-0.38,-0.65ZM796.68,298.41l0.52,0.75l1.43,-0.19l2.27,-1.81l-0.01,-1.43l1.12,0.16l-0.04,1.1l-0.7,1.28l-1.12,0.18l-0.62,0.79l-2.46,1.11l-1.17,-0.0l-3.08,-1.25l3.41,0.0l0.45,-0.68ZM789.15,303.55l2.31,1.8l1.59,2.61l1.34,0.13l-0.06,0.66l0.31,0.43l1.06,0.24l0.06,0.65l2.25,1.05l-1.22,0.13l-0.72,-0.63l-4.56,-0.65l-3.22,-2.87l-1.49,-2.34l-3.27,-1.1l-2.38,0.72l-1.59,0.86l-0.2,0.42l0.27,1.55l-1.55,0.68l-1.36,-0.4l-2.21,-0.09l-0.08,-15.41l8.39,2.93l2.95,2.4l0.6,1.64l4.02,1.49l0.31,0.68l-1.76,0.21l-0.33,0.52l0.55,1.68Z"
                              data-code="PG" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M244.96,295.21l-1.26,-0.07l-0.57,0.42l-1.93,0.45l-2.98,1.75l-0.36,1.36l-0.58,0.8l0.12,1.37l-1.24,0.59l-0.22,1.22l-0.62,0.84l1.04,2.27l1.28,1.44l-0.41,0.84l0.32,0.57l1.48,0.13l1.16,1.37l2.21,0.07l1.63,-1.08l-0.13,3.02l0.3,0.4l1.14,0.29l1.31,-0.34l1.9,3.59l-0.48,0.85l-0.17,3.85l-0.94,1.59l0.35,0.75l-0.47,1.07l0.98,1.97l-2.1,3.82l-0.98,0.5l-2.17,-1.28l-0.39,-1.16l-4.95,-2.58l-4.46,-2.79l-1.84,-1.51l-0.91,-1.84l0.3,-0.96l-2.11,-3.33l-4.82,-9.68l-1.04,-1.2l-0.87,-1.94l-3.4,-2.48l0.58,-1.18l-1.13,-2.23l0.66,-1.49l1.45,-1.15l-0.6,0.98l0.07,0.92l0.47,0.36l1.74,0.03l0.97,1.17l0.54,0.07l1.42,-1.03l0.6,-1.84l1.42,-2.02l3.04,-1.04l2.73,-2.62l0.86,-1.74l-0.1,-1.87l1.44,1.02l0.9,1.25l1.06,0.59l1.7,2.73l1.86,0.31l1.45,-0.61l0.96,0.39l1.36,-0.19l1.45,0.89l-1.4,2.21l0.31,0.61l0.59,0.05l0.47,0.5Z"
                              data-code="PE" fill="#f9fbfd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M615.09,192.34l-1.83,1.81l-2.6,0.39l-3.73,-0.68l-1.58,1.33l-0.09,0.42l1.77,4.39l1.7,1.23l-1.69,1.27l-0.12,2.14l-2.33,2.64l-1.6,2.8l-2.46,2.67l-3.03,-0.07l-2.76,2.83l0.05,0.6l1.5,1.11l0.26,1.9l1.44,1.5l0.37,1.68l-5.01,-0.01l-1.78,1.7l-1.42,-0.52l-0.76,-1.87l-2.27,-2.15l-11.61,0.86l0.71,-2.34l3.43,-1.32l0.25,-0.44l-0.21,-1.24l-1.2,-0.65l-0.28,-2.46l-2.29,-1.14l-1.28,-1.94l2.82,0.94l2.62,-0.38l1.42,0.33l0.76,-0.56l1.71,0.19l3.25,-1.14l0.27,-0.36l0.08,-2.19l1.18,-1.32l1.68,0.0l0.58,-0.82l1.6,-0.3l1.19,0.16l0.98,-0.78l0.02,-1.88l0.93,-1.47l1.48,-0.66l0.19,-0.55l-0.66,-1.25l2.04,-0.11l0.69,-1.01l-0.02,-1.16l1.11,-1.06l-0.17,-1.78l-0.49,-1.03l1.15,-0.98l5.42,-0.91l2.6,-0.82l1.6,1.16l0.97,2.34l3.45,0.97Z"
                              data-code="PK" fill="#f8fbfd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M737.01,263.84l0.39,2.97l-0.44,1.18l-0.55,-1.53l-0.67,-0.14l-1.17,1.28l0.65,2.09l-0.42,0.69l-2.48,-1.23l-0.57,-1.49l0.65,-1.03l-0.1,-0.54l-1.59,-1.19l-0.56,0.08l-0.65,0.87l-1.23,0.0l-1.58,0.97l0.83,-1.8l2.56,-1.42l0.65,0.84l0.45,0.13l1.9,-0.69l0.56,-1.11l1.5,-0.06l0.38,-0.43l-0.09,-1.19l1.21,0.71l0.36,2.02ZM733.59,256.58l0.05,0.75l0.08,0.26l-0.8,-0.42l-0.18,-0.71l0.85,0.12ZM734.08,256.1l-0.12,-1.12l-1.0,-1.27l1.36,0.03l0.53,0.73l0.51,2.04l-1.27,-0.4ZM733.76,257.68l0.38,0.98l-0.32,0.15l-0.07,-1.13ZM724.65,238.43l1.46,0.7l0.72,-0.31l-0.32,1.17l0.79,1.71l-0.57,1.84l-1.53,1.04l-0.39,2.25l0.56,2.04l1.63,0.57l1.16,-0.27l2.71,1.23l-0.19,1.08l0.76,0.84l-0.08,0.36l-1.4,-0.9l-0.88,-1.27l-0.66,0.0l-0.38,0.55l-1.6,-1.31l-2.15,0.36l-0.87,-0.39l0.07,-0.61l0.66,-0.55l-0.01,-0.62l-0.75,-0.59l-0.72,0.44l-0.74,-0.87l-0.39,-2.49l0.32,0.27l0.66,-0.28l0.26,-3.97l0.7,-2.02l1.14,0.0ZM731.03,258.87l-0.88,0.85l-1.19,1.94l-1.05,-1.19l0.93,-1.1l0.32,-1.47l0.52,-0.06l-0.27,1.15l0.22,0.45l0.49,-0.12l1.0,-1.32l-0.08,0.85ZM726.83,255.78l0.83,0.38l1.17,-0.0l-0.02,0.48l-2.0,1.4l0.03,-2.26ZM724.81,252.09l-0.38,1.27l-1.42,-1.95l1.2,0.05l0.6,0.63ZM716.55,261.82l1.1,-0.95l0.03,-0.03l-0.28,0.36l-0.85,0.61ZM719.22,259.06l0.04,-0.06l0.8,-1.53l0.16,0.75l-1.0,0.84Z"
                              data-code="PH" fill="#f8fafd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M468.44,149.42l-1.11,-1.54l-1.86,-0.33l-0.48,-1.05l-1.72,-0.37l-0.65,0.69l-0.72,-0.36l0.11,-0.61l-0.33,-0.46l-1.75,-0.27l-1.04,-0.93l-0.94,-1.94l0.16,-1.22l-0.62,-1.8l-0.78,-1.07l0.57,-1.04l-0.48,-1.43l1.41,-0.83l6.91,-2.71l2.14,0.5l0.52,0.91l5.51,0.44l4.55,-0.05l1.07,0.31l0.48,0.84l0.15,1.58l0.65,1.2l-0.01,0.99l-1.27,0.58l-0.19,0.54l0.73,1.48l0.08,1.55l1.2,2.76l-0.17,0.58l-1.23,0.44l-2.27,2.72l0.18,0.95l-1.97,-1.03l-1.98,0.4l-1.36,-0.28l-1.24,0.58l-1.07,-0.97l-1.16,0.24Z"
                              data-code="PL" fill="#eef4fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M481.47,313.3l0.39,0.31l2.52,0.14l0.99,1.17l2.01,0.35l1.4,-0.64l0.69,1.17l1.78,0.33l1.84,2.35l2.23,0.18l0.4,-0.43l-0.21,-2.74l-0.62,-0.3l-0.48,0.32l-1.98,-1.17l0.72,-5.29l-0.51,-1.18l0.57,-1.3l3.68,-0.62l0.26,0.63l1.21,0.63l0.9,-0.22l2.16,0.67l1.33,0.71l1.07,1.02l0.56,1.87l-0.88,2.7l0.43,2.09l-0.73,0.87l-0.76,2.37l0.59,0.68l-6.6,1.83l-0.29,0.44l0.19,1.45l-1.68,0.35l-1.43,1.02l-0.38,0.87l-0.87,0.26l-3.48,3.69l-4.16,-0.53l-1.52,-1.0l-1.77,-0.13l-1.83,0.52l-3.04,-3.4l0.11,-7.59l4.82,0.03l0.39,-0.49l-0.18,-0.76l0.33,-0.83l-0.4,-1.36l0.24,-1.05Z"
                              data-code="ZM" fill="#feffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M384.42,230.28l0.25,-0.79l1.06,-1.29l0.8,-3.51l3.38,-2.78l0.7,-1.81l0.06,4.84l-1.98,0.2l-0.94,1.59l0.39,3.56l-3.7,-0.01ZM392.01,218.1l0.7,-1.8l1.77,-0.24l2.09,0.34l0.95,-0.62l1.28,-0.07l-0.0,2.51l-6.79,-0.12Z"
                              data-code="EH" fill="#f6f8fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M485.71,115.04l2.64,0.6l2.56,0.11l-1.6,1.91l0.61,3.54l-0.81,0.87l-1.78,-0.01l-3.22,-1.76l-1.8,0.45l0.21,-1.53l-0.58,-0.41l-0.69,0.34l-1.26,-1.03l-0.17,-1.63l2.83,-0.92l3.05,-0.52Z"
                              data-code="EE" fill="#feffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M492.06,205.03l1.46,0.42l2.95,-1.64l2.04,-0.21l1.53,0.3l0.59,1.19l0.69,0.04l0.41,-0.64l1.81,0.58l1.95,0.16l1.04,-0.51l1.42,4.08l-2.03,4.54l-1.66,-1.77l-1.76,-3.85l-0.64,-0.12l-0.36,0.67l1.04,2.88l3.44,6.95l1.78,3.04l2.03,2.65l-0.36,0.53l0.23,2.01l2.7,2.19l-28.41,0.0l0.0,-18.96l-0.73,-2.2l0.59,-1.56l-0.32,-1.26l0.68,-0.99l3.06,-0.04l4.82,1.52Z"
                              data-code="EG" fill="#f7f9fd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M467.14,373.21l-0.13,-1.96l-0.68,-1.56l0.7,-0.68l-0.13,-2.33l-4.56,-8.19l0.77,-0.86l0.6,0.45l0.69,1.31l2.83,0.72l1.5,-0.26l2.24,-1.39l0.19,-9.55l1.35,2.3l-0.21,1.5l0.61,1.2l0.4,0.19l1.79,-0.27l2.6,-2.07l0.69,-1.32l0.96,-0.48l2.19,1.04l2.04,0.13l1.77,-0.65l0.85,-2.12l1.38,-0.33l1.59,-2.76l2.15,-1.89l3.41,-1.87l2.0,0.45l1.02,-0.28l0.99,0.2l1.75,5.29l-0.38,3.25l-0.81,-0.23l-1.0,0.46l-0.87,1.68l-0.05,1.16l1.97,1.84l1.47,-0.29l0.69,-1.18l1.09,0.01l-0.76,3.69l-0.58,1.09l-2.2,1.79l-3.17,4.76l-2.8,2.83l-3.57,2.88l-2.53,1.05l-1.22,0.14l-0.51,0.7l-1.18,-0.32l-1.39,0.5l-2.59,-0.52l-1.61,0.33l-1.18,-0.11l-2.55,1.1l-2.1,0.44l-1.6,1.07l-0.85,0.05l-0.93,-0.89l-0.93,-0.15l-0.97,-1.13l-0.25,0.05ZM491.45,364.19l0.62,-0.93l1.48,-0.59l1.18,-2.19l-0.07,-0.49l-1.99,-1.69l-1.66,0.56l-1.43,1.14l-1.34,1.73l0.02,0.51l1.88,2.11l1.31,-0.16Z"
                              data-code="ZA" fill="#f1f6fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M231.86,285.53l0.29,1.59l-0.69,1.45l-2.61,2.51l-3.13,1.11l-1.53,2.18l-0.49,1.68l-1.0,0.73l-1.02,-1.11l-1.78,-0.16l0.67,-1.15l-0.24,-0.86l1.25,-2.13l-0.54,-1.09l-0.67,-0.08l-0.72,0.87l-0.87,-0.64l0.35,-0.69l-0.36,-1.96l0.81,-0.51l0.45,-1.51l0.92,-1.57l-0.07,-0.97l2.65,-1.33l2.75,1.35l0.77,1.05l2.12,0.35l0.76,-0.32l1.96,1.21Z"
                              data-code="EC" fill="#fdfdfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M470.32,171.8l0.74,0.03l0.92,0.89l-0.17,1.95l0.36,1.28l1.01,0.82l-1.82,2.83l-0.19,-0.61l-1.25,-0.89l-0.18,-1.2l0.53,-2.82l-0.54,-1.47l0.6,-0.83Z"
                              data-code="AL" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M461.55,300.03l1.26,3.15l1.94,2.36l2.47,-0.53l1.25,0.32l0.44,-0.18l0.93,-1.92l1.31,-0.08l0.41,-0.44l0.47,-0.0l-0.1,0.41l0.39,0.49l2.65,-0.02l0.03,1.19l0.48,1.01l-0.34,1.52l0.18,1.55l0.83,1.04l-0.13,2.85l0.54,0.39l3.96,-0.41l-0.1,1.79l0.39,1.05l-0.24,1.43l-4.7,-0.03l-0.4,0.39l-0.12,8.13l2.92,3.49l-3.83,0.88l-5.89,-0.36l-1.88,-1.24l-10.47,0.22l-1.3,-1.01l-1.85,-0.16l-2.4,0.77l-0.15,-1.06l0.33,-2.16l1.0,-3.45l1.35,-3.2l2.24,-2.8l0.33,-2.06l-0.13,-1.53l-0.8,-1.08l-1.21,-2.87l0.87,-1.62l-1.27,-4.12l-1.17,-1.53l2.47,-0.63l7.03,0.03ZM451.71,298.87l-0.47,-1.25l1.25,-1.11l0.32,0.3l-0.99,1.03l-0.12,1.03Z"
                              data-code="AO" fill="#fcfdfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M552.8,172.89l0.46,-1.27l-0.48,-1.05l-2.96,-1.19l-1.06,-2.58l-1.37,-0.87l-0.03,-0.3l1.95,0.23l0.45,-0.38l0.08,-1.96l1.75,-0.41l2.1,0.45l0.48,-0.33l0.45,-3.04l-0.45,-2.09l-0.41,-0.31l-2.42,0.15l-2.36,-0.73l-2.87,1.37l-2.17,0.61l-0.85,-0.34l0.13,-1.61l-1.6,-2.12l-2.02,-0.08l-1.78,-1.82l1.29,-2.18l-0.57,-0.95l1.62,-2.91l2.21,1.63l0.63,-0.27l0.29,-2.22l4.92,-3.43l3.71,-0.08l8.4,3.6l2.92,-1.36l3.77,-0.06l3.11,1.66l0.51,-0.11l0.6,-0.81l3.31,0.13l0.39,-0.25l0.63,-1.57l-0.17,-0.5l-3.5,-1.98l1.87,-1.27l-0.13,-1.03l1.98,-0.72l0.18,-0.62l-1.59,-2.06l0.81,-0.82l9.23,-1.18l1.33,-0.88l6.18,-1.26l2.26,-1.42l4.08,0.68l0.73,3.33l0.51,0.3l2.48,-0.8l2.79,1.02l-0.17,1.56l0.43,0.44l2.55,-0.24l4.89,-2.53l0.03,0.32l3.15,2.61l5.56,8.47l0.65,0.02l1.12,-1.46l3.15,1.74l3.76,-0.78l1.15,0.49l1.14,1.8l1.84,0.76l0.99,1.29l3.35,-0.25l1.02,1.52l-1.6,1.81l-1.93,0.28l-0.34,0.38l-0.11,3.05l-1.13,1.16l-4.75,-1.0l-0.46,0.27l-1.76,5.47l-1.1,0.59l-4.91,1.23l-0.27,0.54l2.1,4.97l-1.37,0.63l-0.23,0.41l0.13,1.13l-0.88,-0.25l-1.42,-1.13l-7.89,-0.4l-0.92,0.31l-3.73,-1.22l-1.42,0.63l-0.53,1.66l-3.72,-0.94l-1.85,0.43l-0.76,1.4l-4.65,2.62l-1.13,2.08l-0.44,0.01l-0.92,-1.4l-2.87,-0.09l-0.45,-2.14l-0.38,-0.32l-0.8,-0.01l0.0,-2.96l-3.0,-2.22l-7.31,0.58l-2.35,-2.68l-6.71,-3.69l-6.45,1.83l-0.29,0.39l0.1,10.85l-0.7,0.08l-1.62,-2.17l-1.83,-0.96l-3.11,0.59l-0.64,0.51Z"
                              data-code="KZ" fill="#fafcfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M516.04,247.79l1.1,0.84l1.63,-0.45l0.68,0.47l1.63,0.03l2.01,0.94l1.73,1.66l1.64,2.07l-1.52,2.04l0.16,1.72l0.39,0.38l2.05,0.0l-0.36,1.03l2.86,3.58l8.32,3.08l1.31,0.02l-6.32,6.75l-3.1,0.11l-2.36,1.77l-1.47,0.04l-0.86,0.79l-1.38,-0.0l-1.32,-0.81l-2.29,1.05l-0.76,0.98l-3.29,-0.41l-3.07,-2.07l-1.8,-0.07l-0.62,-0.6l0.0,-1.24l-0.28,-0.38l-1.15,-0.37l-1.4,-2.59l-1.19,-0.68l-0.47,-1.0l-1.27,-1.23l-1.16,-0.22l0.43,-0.72l1.45,-0.28l0.41,-0.95l-0.03,-2.21l0.68,-2.44l1.05,-0.63l1.43,-3.06l1.57,-1.37l1.02,-2.51l0.35,-1.88l2.52,0.46l0.44,-0.24l0.58,-1.43Z"
                              data-code="ET" fill="#fefeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M498.91,341.09l-1.11,-0.22l-0.92,0.28l-2.09,-0.44l-1.5,-1.11l-1.89,-0.43l-0.62,-1.4l-0.01,-0.84l-0.3,-0.38l-0.97,-0.25l-2.71,-2.74l-1.92,-3.32l3.83,0.45l3.73,-3.82l1.08,-0.44l0.26,-0.77l1.25,-0.9l1.41,-0.26l0.5,0.89l1.99,-0.05l1.72,1.17l1.11,0.17l1.05,0.66l0.01,2.99l-0.59,3.76l0.38,0.86l-0.23,1.23l-0.39,0.35l-0.63,1.81l-2.43,2.75Z"
                              data-code="ZW" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M416.0,169.21l1.07,1.17l4.61,1.38l1.06,-0.57l2.6,1.26l2.71,-0.3l0.09,1.12l-2.14,1.8l-3.11,0.61l-0.31,0.31l-0.2,0.89l-1.54,1.69l-0.97,2.4l0.84,1.74l-1.32,1.27l-0.48,1.68l-1.88,0.65l-1.66,2.07l-5.36,-0.01l-1.79,1.08l-0.89,0.98l-0.88,-0.17l-0.79,-0.82l-0.68,-1.59l-2.37,-0.63l-0.11,-0.5l1.21,-1.82l-0.77,-1.13l0.61,-1.68l-0.76,-1.62l0.87,-0.49l0.09,-1.25l0.42,-0.6l0.03,-2.11l0.99,-0.69l0.13,-0.5l-1.03,-1.73l-1.46,-0.11l-0.61,0.38l-1.06,0.0l-0.52,-1.23l-0.53,-0.21l-1.32,0.67l-0.01,-1.49l-0.75,-0.96l3.03,-1.88l2.99,0.53l3.32,-0.02l2.63,0.51l6.01,-0.06Z"
                              data-code="ES" fill="#cadcf1" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M520.38,246.23l3.42,2.43l3.5,3.77l0.84,0.54l-0.95,-0.01l-3.51,-3.89l-2.33,-1.15l-1.73,-0.07l-0.91,-0.51l-1.26,0.51l-1.34,-1.02l-0.61,0.17l-0.66,1.61l-2.35,-0.43l-0.17,-0.67l1.29,-5.29l0.61,-0.61l1.95,-0.53l0.87,-1.01l1.17,2.41l0.68,2.33l1.49,1.43Z"
                              data-code="ER" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M468.91,172.53l-1.22,-1.02l0.47,-1.81l0.89,-0.72l2.26,1.51l-0.5,0.57l-0.75,-0.27l-1.14,1.73Z" data-code="ME"
                              fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element">
                            </path>
                            <path
                              d="M488.41,153.73l1.4,-0.27l1.72,0.93l1.07,0.15l0.85,0.65l-0.14,0.84l0.96,0.85l1.12,2.47l-1.15,-0.07l-0.66,-0.41l-0.52,0.25l-0.09,0.86l-1.08,1.89l-0.27,-0.86l0.25,-1.34l-0.16,-1.6l-3.29,-4.34Z"
                              data-code="MD" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M545.91,319.14l0.4,3.03l0.62,1.21l-0.21,1.02l-0.57,-0.8l-0.69,-0.01l-0.47,0.76l0.41,2.12l-0.18,0.87l-0.73,0.78l-0.15,2.14l-4.71,15.2l-1.06,2.88l-3.92,1.64l-3.12,-1.49l-0.6,-1.21l-0.19,-2.4l-0.86,-2.05l-0.21,-1.77l0.38,-1.62l1.21,-0.75l0.01,-0.76l1.19,-2.04l0.23,-1.66l-1.06,-2.99l-0.19,-2.21l0.81,-1.33l0.32,-1.46l4.63,-1.22l3.44,-3.0l0.85,-1.4l-0.08,-0.7l0.78,-0.04l1.38,-1.77l0.13,-1.64l0.45,-0.61l1.16,1.69l0.59,1.6Z"
                              data-code="MG" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M378.78,230.02l0.06,-0.59l0.92,-0.73l0.82,-1.37l-0.09,-1.04l0.79,-1.7l1.31,-1.58l0.96,-0.59l0.66,-1.55l0.09,-1.47l0.81,-1.48l1.72,-1.07l1.55,-2.69l1.16,-0.96l2.44,-0.39l1.94,-1.82l1.31,-0.78l2.09,-2.28l-0.51,-3.65l1.24,-3.7l1.5,-1.75l4.46,-2.57l2.37,-4.47l1.44,0.01l1.68,1.21l2.32,-0.19l3.47,0.65l0.8,1.54l0.16,1.71l0.86,2.96l0.56,0.59l-0.26,0.61l-3.05,0.44l-1.26,1.05l-1.33,0.22l-0.33,0.37l-0.09,1.78l-2.68,1.0l-1.07,1.42l-4.47,1.13l-4.04,2.01l-0.54,4.64l-1.15,0.06l-0.92,0.61l-1.96,-0.35l-2.42,0.54l-0.74,1.9l-0.86,0.4l-1.14,3.26l-3.53,3.01l-0.8,3.55l-0.96,1.1l-0.29,0.82l-4.95,0.18Z"
                              data-code="MA" fill="#fbfdfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M598.64,172.75l-1.63,1.52l0.06,0.64l1.85,1.12l1.97,-0.64l2.21,1.17l-2.52,1.68l-2.59,-0.22l-0.18,-0.41l0.46,-1.23l-0.45,-0.53l-3.35,0.69l-2.1,3.51l-1.87,-0.12l-1.03,1.51l0.22,0.55l1.64,0.62l0.46,1.83l-1.19,2.49l-2.66,-0.53l0.05,-1.36l-0.26,-0.39l-3.3,-1.23l-2.56,-1.4l-4.4,-3.34l-1.34,-3.14l-1.08,-0.6l-2.58,0.13l-0.69,-0.44l-0.47,-2.52l-3.37,-1.6l-0.43,0.05l-2.07,1.72l-2.1,1.01l-0.21,0.47l0.28,1.01l-1.91,0.03l-0.09,-10.5l5.99,-1.7l6.19,3.54l2.71,2.84l7.05,-0.67l2.71,2.01l-0.17,2.81l0.39,0.42l0.9,0.02l0.44,2.14l0.38,0.32l2.94,0.09l0.95,1.42l1.28,-0.24l1.05,-2.04l4.43,-2.5Z"
                              data-code="UZ" fill="#fefeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M673.9,230.21l-1.97,1.57l-0.57,0.96l-1.4,0.6l-1.36,1.05l-1.99,0.36l-1.08,2.66l-0.91,0.4l-0.19,0.55l1.21,2.27l2.52,3.43l-0.79,1.91l-0.74,0.41l-0.17,0.52l0.65,1.37l1.61,1.95l0.25,2.58l0.9,2.13l-1.92,3.57l0.68,-2.25l-0.81,-1.74l0.19,-2.65l-1.05,-1.53l-1.24,-6.17l-1.12,-2.26l-0.6,-0.13l-4.34,3.02l-2.39,-0.65l0.77,-2.84l-0.52,-2.61l-1.91,-2.96l0.25,-0.75l-0.29,-0.51l-1.33,-0.3l-1.61,-1.93l-0.1,-1.3l0.82,-0.24l0.04,-1.64l1.02,-0.52l0.21,-0.45l-0.23,-0.95l0.54,-0.96l0.08,-2.22l1.46,0.45l0.47,-0.2l1.12,-2.19l0.16,-1.35l1.33,-2.16l-0.0,-1.52l2.89,-1.66l1.63,0.44l0.5,-0.44l-0.17,-1.4l0.64,-0.36l0.08,-1.04l0.77,-0.11l0.71,1.35l1.06,0.69l-0.03,3.86l-2.38,2.37l-0.3,3.15l0.46,0.43l2.28,-0.38l0.51,2.08l1.47,0.67l-0.6,1.8l0.19,0.48l2.97,1.48l1.64,-0.55l0.02,0.32Z"
                              data-code="MM" fill="#fefeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M392.61,254.08l-0.19,-2.37l-0.99,-0.87l-0.44,-1.3l-0.09,-1.28l0.81,-0.58l0.35,-1.24l2.37,0.65l1.31,-0.47l0.86,0.15l0.66,-0.56l9.83,-0.04l0.38,-0.28l0.56,-1.8l-0.44,-0.65l-2.35,-21.95l3.27,-0.04l16.7,11.38l0.74,1.31l2.5,1.09l0.02,1.38l0.44,0.39l2.34,-0.21l0.01,5.38l-1.28,1.61l-0.26,1.49l-5.31,0.57l-1.07,0.92l-2.9,0.1l-0.86,-0.48l-1.38,0.36l-2.4,1.08l-0.6,0.87l-1.85,1.09l-0.43,0.7l-0.79,0.39l-1.44,-0.21l-0.81,0.84l-0.34,1.64l-1.91,2.02l-0.06,1.03l-0.67,1.22l0.13,1.16l-0.97,0.39l-0.23,-0.64l-0.52,-0.24l-1.35,0.4l-0.34,0.55l-2.69,-0.28l-0.37,-0.35l-0.02,-0.9l-0.65,-0.35l0.45,-0.64l-0.03,-0.53l-2.12,-2.44l-0.76,-0.01l-2.0,1.16l-0.78,-0.15l-0.8,-0.67l-1.21,0.23Z"
                              data-code="ML" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M676.61,146.48l3.81,1.68l5.67,-1.0l2.37,0.41l2.34,1.5l1.79,1.75l2.29,-0.03l3.12,0.52l2.47,-0.81l3.41,-0.59l3.53,-2.21l1.25,0.29l1.53,1.13l2.27,-0.21l-2.66,5.01l0.64,1.68l0.47,0.21l1.32,-0.38l2.38,0.48l2.02,-1.11l1.76,0.89l2.06,2.02l-0.13,0.53l-1.72,-0.29l-3.77,0.46l-1.88,0.99l-1.76,1.99l-3.71,1.17l-2.45,1.6l-3.83,-0.87l-0.41,0.17l-1.31,1.99l1.04,2.24l-1.52,0.9l-1.74,1.57l-2.79,1.02l-3.78,0.13l-4.05,1.05l-2.77,1.52l-1.16,-0.85l-2.94,0.0l-3.62,-1.79l-2.58,-0.49l-3.4,0.41l-5.12,-0.67l-2.63,0.06l-1.31,-1.6l-1.4,-3.0l-1.48,-0.33l-3.13,-1.94l-6.16,-0.93l-0.71,-1.06l0.86,-3.82l-1.93,-2.71l-3.5,-1.18l-1.95,-1.58l-0.5,-1.72l2.34,-0.52l4.75,-2.8l3.62,-1.47l2.18,0.97l2.46,0.05l1.81,1.53l2.46,0.12l3.95,0.71l2.43,-2.28l0.08,-0.48l-0.9,-1.72l2.24,-2.98l2.62,1.27l4.94,1.17l0.43,2.24Z"
                              data-code="MN" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M472.8,173.98l0.49,-0.71l3.57,-0.71l1.0,0.77l0.13,1.45l-0.65,0.53l-1.15,-0.05l-1.12,0.67l-1.39,0.22l-0.79,-0.55l-0.29,-1.03l0.19,-0.6Z"
                              data-code="MK" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M505.5,309.31l0.85,1.95l0.15,2.86l-0.69,1.65l0.71,1.8l0.06,1.28l0.49,0.64l0.07,1.06l0.4,0.55l0.8,-0.23l0.55,0.61l0.69,-0.21l0.34,0.6l0.19,2.94l-1.04,0.62l-0.54,1.25l-1.11,-1.08l-0.16,-1.56l0.51,-1.31l-0.32,-1.3l-0.99,-0.65l-0.82,0.12l-2.36,-1.64l0.63,-1.96l0.82,-1.18l-0.46,-2.01l0.9,-2.86l-0.94,-2.51l0.96,0.18l0.29,0.4Z"
                              data-code="MW" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M407.36,220.66l-2.58,0.03l-0.39,0.44l2.42,22.56l0.36,0.43l-0.39,1.24l-9.75,0.04l-0.56,0.53l-0.91,-0.11l-1.27,0.45l-1.61,-0.66l-0.97,0.03l-0.36,0.29l-0.38,1.35l-0.42,0.23l-2.93,-3.4l-2.96,-1.52l-1.62,-0.03l-1.27,0.54l-1.12,-0.2l-0.65,0.4l-0.08,-0.49l0.68,-1.29l0.31,-2.43l-0.57,-3.91l0.23,-1.21l-0.69,-1.5l-1.15,-1.02l0.25,-0.39l9.58,0.02l0.4,-0.45l-0.46,-3.68l0.47,-1.04l2.12,-0.21l0.36,-0.4l-0.08,-6.4l7.81,0.13l0.41,-0.4l0.01,-3.31l7.76,5.35Z"
                              data-code="MR" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M498.55,276.32l0.7,-0.46l1.65,0.5l1.96,-0.57l1.7,0.01l1.45,-0.98l0.91,1.33l1.33,3.95l-2.57,4.03l-1.46,-0.4l-2.54,0.91l-1.37,1.61l-0.01,0.81l-2.42,-0.01l-2.26,1.01l-0.17,-1.59l0.58,-1.04l0.14,-1.94l1.37,-2.28l1.78,-1.58l-0.17,-0.65l-0.72,-0.24l0.13,-2.43Z"
                              data-code="UG" fill="#feffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M717.47,273.46l-1.39,0.65l-2.12,-0.41l-2.88,-0.0l-0.38,0.28l-0.84,2.75l-0.99,0.96l-1.21,3.29l-1.73,0.45l-2.45,-0.68l-1.39,0.31l-1.33,1.15l-1.59,-0.14l-1.41,0.44l-1.44,-1.19l-0.18,-0.73l1.34,0.53l1.93,-0.47l0.75,-2.22l4.02,-1.03l2.75,-3.21l0.82,0.94l0.64,-0.05l0.4,-0.65l0.96,0.06l0.42,-0.36l0.24,-2.68l1.81,-1.64l1.21,-1.86l0.63,-0.01l1.07,1.05l0.34,1.28l3.44,1.35l-0.06,0.35l-1.37,0.1l-0.35,0.54l0.32,0.88ZM673.68,269.59l0.17,1.09l0.47,0.33l1.65,-0.3l0.87,-0.94l1.61,1.52l0.98,1.56l-0.12,2.81l0.41,2.29l0.95,0.9l0.88,2.44l-1.27,0.12l-5.1,-3.67l-0.34,-1.29l-1.37,-1.59l-0.33,-1.97l-0.88,-1.4l0.25,-1.68l-0.46,-1.05l1.63,0.84Z"
                              data-code="MY" fill="#f7f9fd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M133.12,200.41l0.2,0.47l9.63,3.33l6.96,-0.02l0.4,-0.4l0.0,-0.74l3.77,0.0l3.55,2.93l1.39,2.83l1.52,1.04l2.08,0.82l0.47,-0.14l1.46,-2.0l1.73,-0.04l1.59,0.98l2.05,3.35l1.47,1.56l1.26,3.14l2.18,1.02l2.26,0.58l-1.18,3.72l-0.42,5.04l1.79,4.89l1.62,1.89l0.61,1.52l1.2,1.42l2.55,0.66l1.37,1.1l7.54,-1.89l1.86,-1.3l1.14,-4.3l4.1,-1.21l3.57,-0.11l0.32,0.3l-0.06,0.94l-1.26,1.45l-0.67,1.71l0.38,0.7l-0.72,2.27l-0.49,-0.3l-1.0,0.08l-1.0,1.39l-0.47,-0.11l-0.53,0.47l-4.26,-0.02l-0.4,0.4l-0.0,1.06l-1.1,0.26l0.1,0.44l1.82,1.44l0.56,0.91l-3.19,0.21l-1.21,2.09l0.24,0.72l-0.2,0.44l-2.24,-2.18l-1.45,-0.93l-2.22,-0.69l-1.52,0.22l-3.07,1.16l-10.55,-3.85l-2.86,-1.96l-3.78,-0.92l-1.08,-1.19l-2.62,-1.43l-1.18,-1.54l-0.38,-0.81l0.66,-0.63l-0.18,-0.53l0.52,-0.76l0.01,-0.91l-2.0,-3.82l-2.21,-2.63l-2.53,-2.09l-1.19,-1.62l-2.2,-1.17l-0.3,-0.43l0.34,-1.48l-0.21,-0.45l-1.23,-0.6l-1.36,-1.2l-0.59,-1.78l-1.54,-0.47l-2.44,-2.55l-0.16,-0.9l-1.33,-2.03l-0.84,-1.99l-0.16,-1.33l-1.81,-1.1l-0.97,0.05l-1.31,-0.7l-0.57,0.22l-0.4,1.12l0.72,3.77l3.51,3.89l0.28,0.78l0.53,0.26l0.41,1.43l1.33,1.73l1.58,1.41l0.8,2.39l1.43,2.41l0.13,1.32l0.37,0.36l1.04,0.08l1.67,2.28l-0.85,0.76l-0.66,-1.51l-1.68,-1.54l-2.91,-1.87l0.06,-1.82l-0.54,-1.68l-2.91,-2.03l-0.55,0.09l-1.95,-1.1l-0.88,-0.94l0.68,-0.08l0.93,-1.01l0.08,-1.78l-1.93,-1.94l-1.46,-0.77l-3.75,-7.56l4.88,-0.42Z"
                              data-code="MX" fill="#d8e5f5" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M839.04,322.8l0.22,1.14l-0.44,0.03l-0.2,-1.45l0.42,0.27Z" data-code="VU" fill="#ffffff" fill-opacity="1"
                              stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path
                              d="M444.48,172.62l-0.64,1.78l-0.58,-0.31l-0.49,-1.72l0.4,-0.89l1.0,-0.72l0.3,1.85ZM429.64,147.1l1.78,1.58l1.46,-0.13l2.1,1.42l1.35,0.27l1.23,0.83l3.04,0.5l-1.03,1.85l-0.3,2.12l-0.41,0.32l-0.95,-0.24l-0.5,0.43l0.06,0.61l-1.81,1.92l-0.04,1.42l0.55,0.38l0.88,-0.36l0.61,0.97l-0.03,1.0l0.57,0.91l-0.75,1.09l0.65,2.39l1.27,0.57l-0.18,0.82l-2.01,1.53l-4.77,-0.8l-3.82,1.0l-0.53,1.85l-2.49,0.34l-2.71,-1.31l-1.16,0.57l-4.31,-1.29l-0.72,-0.86l1.19,-1.78l0.39,-6.45l-2.58,-3.3l-1.9,-1.66l-3.72,-1.23l-0.19,-1.72l2.81,-0.61l4.12,0.81l0.47,-0.48l-0.6,-2.77l1.94,0.95l5.83,-2.54l0.92,-2.74l1.6,-0.49l0.24,0.78l1.36,0.33l1.05,1.19ZM289.01,278.39l-0.81,0.8l-0.78,0.12l-0.5,-0.66l-0.56,-0.1l-0.91,0.6l-0.46,-0.22l1.09,-2.96l-0.96,-1.77l-0.17,-1.49l1.07,-1.77l2.32,0.75l2.51,2.01l0.3,0.74l-2.14,3.96Z"
                              data-code="FR" fill="#9cbde5" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M492.17,76.39l-0.23,3.5l3.52,2.63l-2.08,2.88l-0.02,0.44l2.8,4.56l-1.59,3.31l2.16,3.24l-0.94,2.39l0.14,0.47l3.44,2.51l-0.77,1.62l-7.52,6.95l-4.5,0.31l-4.38,1.37l-3.8,0.74l-1.44,-1.96l-2.17,-1.11l0.5,-3.66l-1.16,-3.33l1.09,-2.08l2.21,-2.42l5.67,-4.32l1.64,-0.83l0.21,-0.42l-0.46,-2.02l-3.38,-1.89l-0.75,-1.43l-0.22,-6.74l-6.79,-4.8l0.8,-0.62l2.54,2.12l3.46,-0.12l3.0,0.96l2.51,-2.11l1.17,-3.08l3.55,-1.38l2.76,1.53l-0.95,2.79Z"
                              data-code="FI" fill="#f6f9fd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M871.53,326.34l-2.8,1.05l-0.08,-0.23l2.97,-1.21l-0.1,0.39ZM867.58,329.25l0.43,0.37l-0.27,0.88l-1.24,0.28l-1.04,-0.24l-0.14,-0.66l0.63,-0.58l0.92,0.26l0.7,-0.31Z"
                              data-code="FJ" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M274.36,425.85l1.44,1.08l-0.47,0.73l-3.0,0.89l-0.96,-1.0l-0.52,-0.05l-1.83,1.29l-0.73,-0.88l2.46,-1.64l1.93,0.76l1.67,-1.19Z"
                              data-code="FK" fill="#f6f8fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M202.33,252.67l0.81,-0.18l1.03,-1.02l-0.04,-0.88l0.68,-0.0l0.63,-0.54l0.97,0.22l1.53,-1.26l0.58,-0.99l1.17,0.34l2.41,-0.94l0.13,1.32l-0.81,1.94l0.1,2.74l-0.36,0.37l-0.11,1.75l-0.47,0.81l0.18,1.14l-1.73,-0.85l-0.71,0.27l-1.47,-0.6l-0.52,0.16l-4.01,-3.81Z"
                              data-code="NI" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M430.31,143.39l0.6,-0.5l2.13,-4.8l3.2,-1.33l1.74,0.08l0.33,0.8l-0.59,2.92l-0.5,0.99l-1.26,0.0l-0.4,0.45l0.33,2.7l-2.2,-1.78l-2.62,0.58l-0.75,-0.11Z"
                              data-code="NL" fill="#e1ebf7" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M491.44,67.41l6.8,2.89l-2.29,0.86l-0.15,0.65l2.33,2.38l-4.98,1.79l0.84,-2.45l-0.18,-0.48l-3.55,-1.8l-3.89,1.52l-1.42,3.38l-2.12,1.72l-2.64,-1.0l-3.11,0.21l-2.66,-2.22l-0.5,-0.01l-1.41,1.1l-1.44,0.17l-0.35,0.35l-0.32,2.47l-4.32,-0.64l-0.44,0.29l-0.58,2.11l-2.45,0.2l-4.15,7.68l-3.88,5.76l0.78,1.62l-0.64,1.16l-2.24,-0.06l-0.38,0.24l-1.66,3.89l0.15,5.17l1.57,2.04l-0.78,4.16l-2.02,2.48l-0.85,1.63l-1.3,-1.75l-0.58,-0.07l-4.87,4.19l-3.1,0.79l-3.16,-1.7l-0.85,-3.77l-0.77,-8.55l2.14,-2.31l6.55,-3.27l5.02,-4.17l10.63,-13.84l10.98,-8.7l5.35,-1.91l4.34,0.12l3.69,-3.64l4.49,0.19l4.37,-0.89ZM484.55,20.04l4.26,1.75l-3.1,2.55l-7.1,0.65l-7.08,-0.9l-0.37,-1.31l-0.37,-0.29l-3.44,-0.1l-2.08,-2.0l6.87,-1.44l3.9,1.31l2.39,-1.64l6.13,1.4ZM481.69,33.93l-4.45,1.74l-3.54,-0.99l1.12,-0.9l0.05,-0.58l-1.06,-1.22l4.22,-0.89l1.09,1.97l2.57,0.87ZM466.44,24.04l7.43,3.77l-5.41,1.86l-1.58,4.08l-2.26,1.2l-1.12,4.11l-2.61,0.18l-4.79,-2.86l1.84,-1.54l-0.1,-0.68l-3.69,-1.53l-4.77,-4.51l-1.73,-3.89l6.11,-1.82l1.54,1.92l3.57,-0.08l1.2,-1.96l3.32,-0.18l3.05,1.92Z"
                              data-code="NO" fill="#eff4fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M474.26,330.66l-0.97,0.04l-0.38,0.4l-0.07,8.9l-2.09,0.08l-0.39,0.4l-0.0,17.42l-1.98,1.23l-1.17,0.17l-2.44,-0.66l-0.48,-1.13l-0.99,-0.74l-0.54,0.05l-0.9,1.01l-1.53,-1.68l-0.93,-1.88l-1.99,-8.56l-0.06,-3.12l-0.33,-1.52l-2.3,-3.34l-1.91,-4.83l-1.96,-2.43l-0.12,-1.57l2.33,-0.79l1.43,0.07l1.81,1.13l10.23,-0.25l1.84,1.23l5.87,0.35ZM474.66,330.64l6.51,-1.6l1.9,0.39l-1.69,0.4l-1.31,0.83l-1.12,-0.94l-4.29,0.92Z"
                              data-code="NA" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M838.78,341.24l-0.33,0.22l-2.9,-1.75l-3.26,-3.37l1.65,0.83l4.85,4.07Z" data-code="NC" fill="#f6f8fb" fill-opacity="1"
                              stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path
                              d="M454.75,226.53l1.33,1.37l0.48,0.07l1.27,-0.7l0.53,3.52l0.94,0.83l0.17,0.92l0.81,0.69l-0.44,0.95l-0.96,5.26l-0.13,3.22l-3.04,2.31l-1.22,3.57l1.02,1.24l-0.0,1.46l0.39,0.4l1.13,0.04l-0.9,1.25l-1.47,-2.42l-0.86,-0.29l-2.09,1.37l-1.74,-0.67l-1.45,-0.17l-0.85,0.35l-1.36,-0.07l-1.64,1.09l-1.06,0.05l-2.94,-1.28l-1.44,0.59l-1.01,-0.03l-0.97,-0.94l-2.7,-0.98l-2.69,0.3l-0.87,0.64l-0.47,1.6l-0.75,1.16l-0.12,1.53l-1.57,-1.1l-1.31,0.24l0.03,-0.81l-0.32,-0.41l-2.59,-0.52l-0.15,-1.16l-1.35,-1.6l-0.29,-1.0l0.13,-0.84l1.29,-0.08l1.08,-0.92l3.31,-0.22l2.22,-0.41l0.32,-0.34l0.2,-1.47l1.39,-1.88l-0.01,-5.66l3.36,-1.12l7.24,-5.12l8.42,-4.92l3.69,1.06Z"
                              data-code="NE" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M456.32,253.89l0.64,0.65l-0.28,1.04l-2.11,2.01l-2.03,5.18l-1.37,1.16l-1.15,3.18l-1.33,0.66l-1.46,-0.97l-1.21,0.16l-1.38,1.36l-0.91,0.24l-1.79,4.06l-2.33,0.81l-1.11,-0.07l-0.86,0.5l-1.71,-0.05l-1.19,-1.39l-0.89,-1.89l-1.77,-1.66l-3.95,-0.08l0.07,-5.21l0.42,-1.43l1.95,-2.3l-0.14,-0.91l0.43,-1.18l-0.53,-1.41l0.25,-2.92l0.72,-1.07l0.32,-1.34l0.46,-0.39l2.47,-0.28l2.34,0.89l1.15,1.02l1.28,0.04l1.22,-0.58l3.03,1.27l1.49,-0.14l1.36,-1.0l1.33,0.07l0.82,-0.35l3.45,0.8l1.82,-1.32l1.84,2.67l0.66,0.16Z"
                              data-code="NG" fill="#f7fafd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M857.8,379.65l1.86,3.12l0.44,0.18l0.3,-0.38l0.03,-1.23l0.38,0.27l0.57,2.31l2.02,0.94l1.81,0.27l1.57,-1.06l0.7,0.18l-1.15,3.59l-1.98,0.11l-0.74,1.2l0.2,1.11l-2.42,3.98l-1.49,0.92l-1.04,-0.85l1.21,-2.05l-0.81,-2.01l-2.63,-1.25l0.04,-0.57l1.82,-1.19l0.43,-2.34l-0.16,-2.03l-0.95,-1.82l-0.06,-0.72l-3.11,-3.64l-0.79,-1.52l1.56,1.45l1.76,0.66l0.65,2.34ZM853.83,393.59l0.57,1.24l0.59,0.16l1.42,-0.97l0.46,0.79l0.0,1.03l-2.47,3.48l-1.26,1.2l-0.06,0.5l0.55,0.87l-1.41,0.07l-2.33,1.38l-2.03,5.02l-3.02,2.16l-2.06,-0.06l-1.71,-1.04l-2.47,-0.2l-0.27,-0.73l1.22,-2.1l3.05,-2.94l1.62,-0.59l4.02,-2.82l1.57,-1.67l1.07,-2.16l0.88,-0.7l0.48,-1.75l1.24,-0.97l0.35,0.79Z"
                              data-code="NZ" fill="#fafbfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M641.14,213.62l0.01,3.19l-1.74,0.04l-4.8,-0.86l-1.58,-1.39l-3.37,-0.34l-7.65,-3.7l0.8,-2.09l2.33,-1.7l1.77,0.75l2.49,1.76l1.38,0.41l0.99,1.35l1.9,0.52l1.99,1.17l5.49,0.9Z"
                              data-code="NP" fill="#feffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M407.4,259.27l0.86,0.42l0.56,0.9l1.13,0.53l1.19,-0.61l0.97,-0.08l1.42,0.54l0.6,3.24l-1.03,2.08l-0.65,2.84l1.06,2.33l-0.06,0.53l-2.54,-0.47l-1.66,0.03l-3.06,0.46l-4.11,1.6l0.32,-3.06l-1.18,-1.31l-1.32,-0.66l0.42,-0.85l-0.2,-1.4l0.5,-0.67l0.01,-1.59l0.84,-0.32l0.26,-0.5l-1.15,-3.01l0.12,-0.5l0.51,-0.25l0.66,0.31l1.93,0.02l0.67,-0.71l0.71,-0.14l0.25,0.69l0.57,0.22l1.4,-0.61Z"
                              data-code="CI" fill="#fefeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M444.62,156.35l-0.29,0.87l0.18,0.53l1.13,0.58l1.0,0.1l-0.1,0.65l-0.79,0.38l-1.72,-0.37l-0.45,0.23l-0.45,1.04l-0.75,0.06l-0.84,-0.4l-1.32,1.0l-0.96,0.12l-0.88,-0.55l-0.81,-1.3l-0.49,-0.16l-0.63,0.26l0.02,-0.65l1.71,-1.66l0.1,-0.56l0.93,0.08l0.58,-0.46l1.99,0.02l0.66,-0.61l2.19,0.79Z"
                              data-code="CH" fill="#ebf2fa" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M242.07,254.93l-1.7,0.59l-0.59,1.18l-1.7,1.69l-0.38,1.93l-0.67,1.43l0.31,0.57l1.03,0.13l0.25,0.9l0.57,0.64l-0.04,2.34l1.64,1.42l3.16,-0.24l1.26,0.28l1.67,2.06l0.41,0.13l4.09,-0.39l0.45,0.22l-0.92,1.95l-0.2,1.8l0.52,1.83l0.75,1.05l-1.12,1.1l0.07,0.63l0.84,0.51l0.74,1.29l-0.39,-0.45l-0.59,-0.01l-0.71,0.74l-4.71,-0.05l-0.4,0.41l0.03,1.57l0.33,0.39l1.11,0.2l-1.68,0.4l-0.29,0.38l-0.01,1.82l1.16,1.14l0.34,1.25l-1.05,7.05l-1.04,-0.87l1.26,-1.99l-0.13,-0.56l-2.18,-1.23l-1.38,0.2l-1.14,-0.38l-1.27,0.61l-1.55,-0.26l-1.38,-2.46l-1.23,-0.75l-0.85,-1.2l-1.67,-1.19l-0.86,0.13l-2.11,-1.32l-1.01,0.31l-1.8,-0.29l-0.52,-0.91l-3.09,-1.68l0.77,-0.52l-0.1,-1.12l0.41,-0.64l1.34,-0.32l2.0,-2.88l-0.11,-0.57l-0.66,-0.43l0.39,-1.38l-0.52,-2.1l0.49,-0.83l-0.4,-2.13l-0.97,-1.35l0.17,-0.66l0.86,-0.08l0.47,-0.75l-0.46,-1.63l1.41,-0.07l1.8,-1.69l0.93,-0.24l0.3,-0.38l0.45,-2.76l1.22,-1.0l1.44,-0.04l0.45,-0.5l1.91,0.12l2.93,-1.84l1.15,-1.14l0.91,0.46l-0.25,0.45Z"
                              data-code="CO" fill="#f4f8fc" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M740.23,148.97l4.57,1.3l2.8,2.17l0.98,2.9l0.38,0.27l3.8,0.0l2.32,-1.28l3.29,-0.75l-0.96,2.09l-1.02,1.28l-0.85,3.4l-1.52,2.73l-2.76,-0.5l-2.4,1.13l-0.21,0.45l0.64,2.57l-0.32,3.2l-0.94,0.06l-0.37,0.89l-0.91,-1.01l-0.64,0.07l-0.92,1.57l-3.73,1.25l-0.26,0.48l0.26,1.06l-1.5,-0.08l-1.09,-0.86l-0.56,0.06l-1.67,2.06l-2.7,1.56l-2.03,1.88l-3.4,0.83l-1.93,1.4l-1.15,0.34l0.33,-0.7l-0.41,-0.89l1.79,-1.79l0.02,-0.54l-1.32,-1.56l-0.48,-0.1l-2.24,1.09l-2.83,2.06l-1.51,1.83l-2.28,0.13l-1.55,1.49l-0.04,0.5l1.32,1.97l2.0,0.58l0.31,1.35l1.98,0.84l3.0,-1.96l2.0,1.02l1.49,0.11l0.22,0.83l-3.37,0.86l-1.12,1.48l-2.5,1.52l-1.29,1.99l0.14,0.56l2.57,1.48l0.97,2.7l3.17,4.63l-0.03,1.66l-1.35,0.65l-0.2,0.51l0.6,1.47l1.4,0.91l-0.89,3.82l-1.43,0.38l-3.85,6.44l-2.27,3.11l-6.78,4.57l-2.73,0.29l-1.45,1.04l-0.62,-0.61l-0.55,-0.01l-1.36,1.25l-3.39,1.27l-2.61,0.4l-1.1,2.79l-0.81,0.09l-0.49,-1.42l0.5,-0.85l-0.25,-0.59l-3.36,-0.84l-1.3,0.4l-2.31,-0.62l-0.94,-0.84l0.33,-1.28l-0.3,-0.49l-2.19,-0.46l-1.13,-0.93l-0.47,-0.02l-2.06,1.36l-4.29,0.28l-2.76,1.05l-0.28,0.43l0.32,2.53l-0.59,-0.03l-0.19,-1.34l-0.55,-0.34l-1.68,0.7l-2.46,-1.23l0.62,-1.87l-0.26,-0.51l-1.37,-0.44l-0.54,-2.22l-0.45,-0.3l-2.13,0.35l0.24,-2.48l2.39,-2.4l0.03,-4.31l-1.19,-0.92l-0.78,-1.49l-0.41,-0.21l-1.41,0.19l-1.98,-0.3l0.46,-1.07l-1.17,-1.7l-0.55,-0.11l-1.63,1.05l-2.25,-0.57l-2.89,1.73l-2.25,1.98l-1.75,0.29l-1.17,-0.71l-3.31,-0.65l-1.48,0.79l-1.04,1.27l-0.12,-1.17l-0.54,-0.34l-1.44,0.54l-5.55,-0.86l-1.98,-1.16l-1.89,-0.54l-0.99,-1.35l-1.34,-0.37l-2.55,-1.79l-2.01,-0.84l-1.21,0.56l-5.57,-3.45l-0.53,-2.31l1.19,0.25l0.48,-0.37l0.08,-1.42l-0.98,-1.56l0.15,-2.44l-2.69,-3.32l-4.12,-1.23l-0.67,-2.0l-1.92,-1.48l-0.38,-0.7l-0.51,-3.01l-1.52,-0.66l-0.7,0.13l-0.48,-2.05l0.55,-0.51l-0.09,-0.82l2.03,-1.19l1.6,-0.54l2.56,0.38l0.42,-0.22l0.85,-1.7l3.0,-0.33l1.1,-1.26l4.05,-1.77l0.39,-0.91l-0.17,-1.44l1.45,-0.67l0.2,-0.52l-2.07,-4.9l4.51,-1.12l1.37,-0.73l1.89,-5.51l4.98,0.86l1.51,-1.7l0.11,-2.87l1.99,-0.38l1.83,-2.06l0.49,-0.13l0.68,2.08l2.23,1.77l3.44,1.16l1.55,2.29l-0.92,3.49l0.96,1.67l6.54,1.13l2.95,1.87l1.47,0.35l1.06,2.62l1.53,1.91l3.05,0.08l5.14,0.67l3.37,-0.41l2.36,0.43l3.65,1.8l3.06,0.04l1.45,0.88l2.87,-1.59l3.95,-1.02l3.83,-0.14l3.06,-1.14l1.77,-1.6l1.72,-1.01l0.17,-0.49l-1.1,-2.05l1.02,-1.54l4.02,0.8l2.45,-1.61l3.76,-1.19l1.96,-2.13l1.63,-0.83l3.51,-0.4l1.92,0.34l0.46,-0.3l0.17,-1.5l-2.27,-2.22l-2.11,-1.09l-2.18,1.11l-2.32,-0.47l-1.29,0.32l-0.4,-0.82l2.73,-5.16l3.02,1.06l3.53,-2.06l0.18,-1.68l2.16,-3.35l1.49,-1.35l-0.03,-1.85l-1.07,-0.85l1.54,-1.26l2.98,-0.59l3.23,-0.09l3.64,0.99l2.04,1.16l3.29,6.71l0.92,3.19ZM696.92,237.31l-1.87,1.08l-1.63,-0.64l-0.06,-1.79l1.03,-0.98l2.58,-0.69l1.16,0.05l0.3,0.54l-0.98,1.06l-0.53,1.37Z"
                              data-code="CN" fill="#206bc4" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M457.92,257.49l1.05,1.91l-1.4,0.16l-1.05,-0.23l-0.45,0.22l-0.54,1.19l0.08,0.45l1.48,1.47l1.05,0.45l1.01,2.46l-1.52,2.99l-0.68,0.68l-0.13,3.69l2.38,3.84l1.09,0.8l0.24,2.48l-3.67,-1.14l-11.27,-0.13l0.23,-1.79l-0.98,-1.66l-1.19,-0.54l-0.44,-0.97l-0.6,-0.42l1.71,-4.27l0.75,-0.13l1.38,-1.36l0.65,-0.03l1.71,0.99l1.93,-1.12l1.14,-3.18l1.38,-1.17l2.0,-5.14l2.17,-2.13l0.3,-1.64l-0.86,-0.88l0.03,-0.33l0.94,1.28l0.07,3.22Z"
                              data-code="CM" fill="#fefeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M246.5,429.18l-3.14,1.83l-0.57,3.16l-0.64,0.05l-2.68,-1.06l-2.82,-2.33l-3.04,-1.89l-0.69,-1.85l0.63,-2.14l-1.21,-2.11l-0.31,-5.37l1.01,-2.91l2.57,-2.38l-0.18,-0.68l-3.16,-0.77l2.05,-2.47l0.77,-4.65l2.32,0.9l0.54,-0.29l1.31,-6.31l-0.22,-0.44l-1.68,-0.8l-0.56,0.28l-0.7,3.36l-0.81,-0.22l1.56,-9.41l1.15,-2.24l-0.71,-2.82l-0.18,-2.84l1.01,-0.33l3.26,-9.14l1.07,-4.22l-0.56,-4.21l0.74,-2.34l-0.29,-3.27l1.46,-3.34l2.04,-16.59l-0.66,-7.76l1.03,-0.53l0.54,-0.9l0.79,1.14l0.32,1.78l1.25,1.16l-0.69,2.55l1.33,2.9l0.97,3.59l0.46,0.29l1.5,-0.3l0.11,0.23l-0.76,2.44l-2.57,1.23l-0.23,0.37l0.08,4.33l-0.46,0.77l0.56,1.21l-1.58,1.51l-1.68,2.62l-0.89,2.47l0.2,2.7l-1.48,2.73l1.12,5.09l0.64,0.61l-0.01,2.29l-1.38,2.68l0.01,2.4l-1.89,2.04l0.02,2.75l0.69,2.57l-1.43,1.13l-1.26,5.68l0.39,3.51l-0.97,0.89l0.58,3.5l1.02,1.14l-0.65,1.02l0.15,0.57l1.0,0.53l0.16,0.69l-1.03,0.85l0.26,1.75l-0.89,4.03l-1.31,2.66l0.24,1.75l-0.71,1.83l-1.99,1.7l0.3,3.67l0.88,1.19l1.58,0.01l0.01,2.21l1.04,1.95l5.98,0.63ZM248.69,430.79l0.0,7.33l0.4,0.4l3.52,0.05l-0.44,0.75l-1.94,0.98l-2.49,-0.37l-1.88,-1.06l-2.55,-0.49l-5.59,-3.71l-2.38,-2.63l4.1,2.48l3.32,1.23l0.45,-0.12l1.29,-1.57l0.83,-2.32l2.05,-1.24l1.31,0.29Z"
                              data-code="CL" fill="#f7fafd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M280.06,145.6l-1.67,2.88l0.07,0.49l0.5,0.04l1.46,-0.98l1.0,0.42l-0.56,0.72l0.17,0.62l2.22,0.89l1.35,-0.71l1.95,0.78l-0.66,2.01l0.5,0.51l1.32,-0.42l0.98,3.17l-0.91,2.41l-0.8,0.08l-1.23,-0.45l0.47,-2.25l-0.89,-0.83l-0.48,0.06l-2.78,2.63l-0.34,-0.02l1.02,-0.85l-0.14,-0.69l-2.4,-0.77l-7.4,0.08l-0.17,-0.41l1.3,-0.94l0.02,-0.64l-0.73,-0.58l1.85,-1.74l2.57,-5.16l1.47,-1.79l1.99,-1.05l0.46,0.06l-1.53,2.45ZM68.32,74.16l4.13,0.95l4.02,2.14l2.61,0.4l2.47,-1.89l2.88,-1.31l3.85,0.48l3.71,-1.94l3.82,-1.04l1.56,1.68l0.49,0.08l1.87,-1.04l0.65,-1.98l1.24,0.35l4.16,3.94l0.54,0.01l2.75,-2.49l0.26,2.59l0.49,0.35l3.08,-0.73l1.04,-1.27l2.73,0.23l3.83,1.86l5.86,1.61l3.47,0.75l2.44,-0.26l2.73,1.78l-2.98,1.81l-0.19,0.41l0.31,0.32l4.53,0.92l6.87,-0.5l2.0,-0.69l2.49,2.39l0.53,0.02l2.72,-2.16l-0.02,-0.64l-2.16,-1.54l1.15,-1.06l4.83,-0.61l1.84,0.95l2.48,2.31l3.01,-0.23l4.55,1.92l3.85,-0.67l3.61,0.1l0.41,-0.44l-0.25,-2.36l1.79,-0.61l3.49,1.32l-0.01,3.77l0.31,0.39l0.45,-0.22l1.48,-3.16l1.74,0.1l0.41,-0.3l1.13,-4.37l-2.78,-3.11l-2.8,-1.74l0.19,-4.64l2.71,-3.07l2.98,0.67l2.41,1.95l3.19,4.8l-1.99,1.97l0.21,0.68l4.33,0.84l-0.01,4.15l0.25,0.37l0.44,-0.09l3.07,-3.15l2.54,2.39l-0.61,3.33l2.42,2.88l0.61,0.0l2.61,-3.08l1.88,-3.82l0.17,-4.58l6.72,0.94l3.13,2.04l0.13,1.82l-1.76,2.19l-0.01,0.49l1.66,2.16l-0.26,1.71l-4.68,2.8l-3.28,0.61l-2.47,-1.2l-0.55,0.23l-0.73,2.04l-2.38,3.43l-0.74,1.77l-2.74,2.57l-3.44,0.25l-2.21,1.78l-0.28,2.53l-2.82,0.55l-3.12,3.22l-2.72,4.31l-1.03,3.17l-0.14,4.31l0.33,0.41l3.44,0.57l2.24,5.95l0.45,0.23l3.4,-0.69l4.52,1.51l2.43,1.31l1.91,1.73l3.1,0.96l2.62,1.46l6.6,0.54l-0.35,2.74l0.81,3.53l1.81,3.78l3.83,3.3l0.45,0.04l2.1,-1.28l1.37,-3.69l-1.31,-5.38l-1.45,-1.58l3.57,-1.47l2.84,-2.46l1.52,-2.8l-0.25,-2.55l-1.7,-3.07l-2.85,-2.61l2.8,-3.95l-1.08,-3.37l-0.79,-5.67l1.36,-0.7l6.76,1.41l2.12,-0.96l5.12,3.36l1.05,1.61l4.08,0.26l-0.06,2.87l0.83,4.7l0.3,0.32l2.16,0.54l1.73,2.06l0.5,0.09l3.63,-2.03l2.52,-4.19l1.26,-1.32l7.6,11.72l-0.92,2.04l0.16,0.51l3.3,1.97l2.22,1.98l4.1,0.98l1.43,0.99l0.95,2.79l2.1,0.68l0.84,1.08l0.17,3.45l-3.37,2.26l-4.22,1.24l-3.06,2.63l-4.06,0.51l-5.35,-0.69l-6.39,0.2l-2.3,2.41l-3.26,1.51l-6.47,7.15l-0.06,0.48l0.44,0.19l2.13,-0.52l4.17,-4.24l5.12,-2.62l3.52,-0.3l1.69,1.21l-2.12,2.21l0.81,3.47l1.02,2.61l3.47,1.6l4.14,-0.45l2.15,-2.8l0.26,1.48l1.14,0.8l-2.56,1.69l-5.5,1.82l-2.54,1.27l-2.74,2.15l-1.4,-0.16l-0.07,-2.01l4.14,-2.44l0.18,-0.45l-0.39,-0.29l-6.63,0.45l-1.39,-1.49l-0.14,-4.43l-1.11,-0.91l-1.82,0.39l-0.66,-0.66l-0.6,0.03l-1.91,2.39l-0.82,2.52l-0.8,1.27l-1.67,0.56l-0.46,0.76l-8.31,0.07l-1.21,0.62l-2.35,1.97l-0.71,-0.14l-1.37,0.96l-1.12,-0.48l-4.74,1.26l-0.9,1.17l0.21,0.62l1.73,0.3l-1.81,0.31l-1.85,0.81l-2.11,-0.13l-2.95,1.78l-0.69,-0.09l1.39,-2.1l1.73,-1.21l0.1,-2.29l1.16,-1.99l0.49,0.53l2.03,0.42l1.2,-1.16l0.02,-0.47l-2.66,-3.51l-2.28,-0.61l-5.64,-0.71l-0.4,-0.57l-0.79,0.13l0.2,-0.41l-0.22,-0.55l-0.68,-0.26l0.19,-1.26l-0.78,-0.73l0.31,-0.64l-0.29,-0.57l-2.6,-0.44l-0.75,-1.63l-0.94,-0.66l-4.31,-0.65l-1.13,1.19l-1.48,0.59l-0.85,1.06l-2.83,-0.76l-2.09,0.39l-2.39,-0.97l-4.24,-0.7l-0.57,-0.4l-0.41,-1.63l-0.4,-0.3l-0.85,0.02l-0.39,0.4l-0.01,0.85l-69.13,-0.01l-6.51,-4.52l-4.5,-1.38l-1.26,-2.66l0.33,-1.93l-0.23,-0.43l-3.01,-1.35l-0.55,-2.77l-2.89,-2.38l-0.04,-1.45l1.39,-1.83l-0.28,-2.55l-4.16,-2.2l-4.07,-6.6l-4.02,-3.22l-1.3,-1.88l-0.5,-0.13l-2.51,1.21l-2.23,1.87l-3.85,-3.88l-2.44,-1.04l-2.22,-0.13l0.03,-37.49ZM260.37,148.65l3.04,0.76l2.26,1.2l-3.78,-0.95l-1.53,-1.01ZM249.4,3.81l6.68,0.49l5.32,0.79l4.26,1.57l-0.07,1.1l-5.85,2.53l-6.02,1.21l-2.39,1.39l-0.18,0.45l0.39,0.29l4.01,-0.02l-4.65,2.82l-4.2,1.74l-4.19,4.59l-5.03,0.92l-1.67,1.15l-7.47,0.59l-0.37,0.37l0.32,0.42l2.41,0.49l-0.81,0.47l-0.12,0.59l1.83,2.41l-2.02,1.59l-3.81,1.51l-1.32,2.16l-3.38,1.53l-0.22,0.48l0.35,1.19l0.4,0.29l3.88,-0.18l0.03,0.61l-6.33,2.95l-6.41,-1.4l-7.43,0.79l-3.72,-0.62l-4.4,-0.25l-0.23,-1.83l4.29,-1.11l0.28,-0.51l-1.1,-3.45l1.0,-0.25l6.58,2.28l0.47,-0.16l-0.05,-0.49l-3.41,-3.45l-3.58,-0.98l1.48,-1.55l4.34,-1.29l0.97,-2.19l-0.16,-0.48l-3.42,-2.13l-0.81,-2.26l6.2,0.22l2.24,0.58l3.91,-2.1l0.2,-0.43l-0.35,-0.32l-5.64,-0.67l-8.73,0.36l-4.26,-1.9l-2.12,-2.4l-2.78,-1.66l-0.41,-1.52l3.31,-1.03l2.93,-0.2l4.91,-0.99l3.7,-2.27l2.87,0.3l2.62,1.67l0.56,-0.14l1.82,-3.2l3.13,-0.94l4.44,-0.69l7.53,-0.26l1.48,0.67l7.19,-1.06l10.8,0.79ZM203.85,57.54l0.01,0.42l1.97,2.97l0.68,-0.02l2.24,-3.72l5.95,-1.86l4.01,4.64l-0.35,2.91l0.5,0.43l4.95,-1.36l2.32,-1.8l5.31,2.28l3.27,2.11l0.3,1.84l0.48,0.33l4.42,-0.99l2.64,2.87l5.97,1.77l2.06,1.72l2.11,3.71l-4.19,1.86l-0.01,0.73l5.9,2.83l3.94,0.94l3.78,3.95l3.46,0.25l-0.63,2.37l-4.11,4.47l-2.76,-1.56l-3.9,-3.94l-3.59,0.41l-0.33,0.34l-0.19,2.72l2.63,2.38l3.42,1.89l0.94,0.97l1.55,3.75l-0.7,2.29l-2.74,-0.92l-6.25,-3.15l-0.51,0.13l0.05,0.52l6.07,5.69l0.18,0.59l-6.09,-1.39l-5.31,-2.24l-2.63,-1.66l0.6,-0.77l-0.12,-0.6l-7.39,-4.01l-0.59,0.37l0.03,0.79l-6.73,0.6l-1.69,-1.1l1.36,-2.46l4.51,-0.07l5.15,-0.52l0.31,-0.6l-0.74,-1.3l0.78,-1.84l3.21,-4.05l-0.67,-2.35l-1.11,-1.6l-3.84,-2.1l-4.35,-1.28l0.91,-0.63l0.06,-0.61l-2.65,-2.75l-2.34,-0.36l-1.89,-1.46l-0.53,0.03l-1.24,1.23l-4.36,0.55l-9.04,-0.99l-9.26,-1.98l-1.6,-1.22l2.22,-1.77l0.13,-0.44l-0.38,-0.27l-3.22,-0.02l-0.72,-4.25l1.83,-4.04l2.42,-1.85l5.5,-1.1l-1.39,2.35ZM261.19,159.33l2.07,0.61l1.44,-0.04l-1.15,0.63l-2.94,-1.23l-0.4,-0.68l0.36,-0.37l0.61,1.07ZM230.83,84.39l-2.37,0.18l-0.49,-1.63l0.93,-2.09l1.94,-0.51l1.62,0.99l0.02,1.52l-1.66,1.54ZM229.43,58.25l0.11,0.65l-4.87,-0.21l-2.72,0.62l-3.1,-2.57l0.08,-1.26l0.86,-0.23l5.57,0.51l4.08,2.5ZM222.0,105.02l-0.72,1.49l-0.63,-0.19l-0.48,-0.84l0.81,-0.99l0.65,0.05l0.37,0.46ZM183.74,38.32l2.9,1.7l4.79,-0.01l1.84,1.46l-0.49,1.68l0.23,0.48l2.82,1.14l1.76,1.26l7.01,0.65l4.1,-1.1l5.03,-0.43l3.93,0.35l2.48,1.77l0.46,1.7l-1.3,1.1l-3.56,1.01l-3.23,-0.59l-7.17,0.76l-5.09,0.09l-3.99,-0.6l-6.42,-1.54l-0.79,-2.51l-0.3,-2.49l-2.64,-2.5l-5.32,-0.72l-2.52,-1.4l0.68,-1.57l4.78,0.31ZM207.38,91.35l0.4,1.56l0.56,0.26l1.06,-0.52l1.32,0.96l5.42,2.57l0.2,1.68l0.46,0.35l1.68,-0.28l1.15,0.85l-1.55,0.87l-3.61,-0.88l-1.32,-1.69l-0.57,-0.06l-2.45,2.1l-3.12,1.79l-0.7,-1.87l-0.42,-0.26l-2.16,0.24l1.39,-1.39l0.32,-3.14l0.76,-3.35l1.18,0.22ZM215.49,102.6l-2.67,1.95l-1.4,-0.07l-0.3,-0.58l1.53,-1.48l2.84,0.18ZM202.7,24.12l2.53,1.59l-2.87,1.4l-4.53,4.05l-4.25,0.38l-5.03,-0.68l-2.45,-2.04l0.03,-1.62l1.82,-1.37l0.14,-0.45l-0.38,-0.27l-4.45,0.04l-2.59,-1.76l-1.41,-2.29l1.57,-2.32l1.62,-1.66l2.44,-0.39l0.25,-0.65l-0.6,-0.74l4.86,-0.25l3.24,3.11l8.16,2.3l1.9,3.61ZM187.47,59.2l-2.76,3.49l-2.38,-0.15l-1.44,-3.84l0.04,-2.2l1.19,-1.88l2.3,-1.23l5.07,0.17l4.11,1.02l-3.24,3.72l-2.88,0.89ZM186.07,48.79l-1.08,1.53l-3.34,-0.34l-2.56,-1.1l1.03,-1.75l3.25,-1.23l1.95,1.58l0.75,1.3ZM185.71,35.32l-5.3,-0.2l-0.32,-0.71l4.31,0.07l1.3,0.84ZM180.68,32.48l-3.34,1.0l-1.79,-1.1l-0.98,-1.87l-0.15,-1.73l4.1,0.53l2.67,1.7l-0.51,1.47ZM180.9,76.31l-1.1,1.08l-3.13,-1.23l-2.12,0.43l-2.71,-1.57l1.72,-1.09l1.55,-1.72l3.81,1.9l1.98,2.2ZM169.74,54.87l2.96,0.97l4.17,-0.57l0.41,0.88l-2.14,2.11l0.09,0.64l3.55,1.92l-0.4,3.72l-3.79,1.65l-2.17,-0.35l-1.72,-1.74l-6.02,-3.5l0.03,-0.85l4.68,0.54l0.4,-0.21l-0.05,-0.45l-2.48,-2.81l2.46,-1.95ZM174.45,40.74l1.37,1.73l0.07,2.44l-1.05,3.45l-3.79,0.47l-2.32,-0.69l0.05,-2.64l-0.44,-0.41l-3.68,0.35l-0.12,-3.1l2.45,0.1l3.67,-1.73l3.41,0.29l0.37,-0.26ZM170.05,31.55l0.67,1.56l-3.33,-0.49l-4.22,-1.77l-4.35,-0.16l1.4,-0.94l-0.06,-0.7l-2.81,-1.23l-0.12,-1.39l4.39,0.68l6.62,1.98l1.81,2.47ZM134.5,58.13l-1.02,1.82l0.45,0.58l5.4,-1.39l3.33,2.29l0.49,-0.03l2.6,-2.23l1.94,1.32l2.0,4.5l0.7,0.06l1.3,-2.29l-1.63,-4.46l1.69,-0.54l2.31,0.71l2.65,1.81l2.49,7.92l8.48,4.27l-0.19,1.35l-3.79,0.33l-0.26,0.67l1.4,1.49l-0.58,1.1l-4.23,-0.64l-4.43,-1.19l-3.0,0.28l-4.66,1.47l-10.52,1.04l-1.43,-2.02l-3.42,-1.2l-2.21,0.43l-2.51,-2.86l4.84,-1.05l3.6,0.19l3.27,-0.78l0.31,-0.39l-0.31,-0.39l-4.84,-1.06l-8.79,0.27l-0.85,-1.07l5.26,-1.66l0.27,-0.45l-0.4,-0.34l-3.8,0.06l-3.81,-1.06l1.81,-3.01l1.66,-1.79l6.48,-2.81l1.97,0.71ZM158.7,56.61l-1.7,2.44l-3.2,-2.75l0.37,-0.3l3.11,-0.18l1.42,0.79ZM149.61,42.73l1.01,1.89l0.5,0.18l2.14,-0.82l2.23,0.19l0.36,2.04l-1.33,2.09l-8.28,0.76l-6.35,2.15l-3.41,0.1l-0.19,-0.96l4.9,-2.08l0.23,-0.46l-0.41,-0.31l-11.25,0.59l-2.89,-0.74l3.04,-4.44l2.14,-1.32l6.81,1.69l4.58,3.06l4.37,0.39l0.36,-0.63l-3.36,-4.6l1.85,-1.53l2.18,0.51l0.77,2.26ZM144.76,34.41l-4.36,1.44l-3.0,-1.4l1.46,-1.24l3.47,-0.52l2.96,0.71l-0.52,1.01ZM145.13,29.83l-1.9,0.66l-3.67,-0.0l2.27,-1.61l3.3,0.95ZM118.92,65.79l-6.03,2.02l-1.33,-1.9l-5.38,-2.28l2.59,-5.05l2.16,-3.14l-0.02,-0.48l-1.97,-2.41l7.64,-0.7l3.6,1.02l6.3,0.27l4.42,2.95l-2.53,0.98l-6.24,3.43l-3.1,3.28l-0.11,2.01ZM129.54,35.53l-0.28,3.37l-1.72,1.62l-2.33,0.28l-4.61,2.19l-3.86,0.76l-2.64,-0.87l3.72,-3.4l5.01,-3.34l3.72,0.07l3.0,-0.67ZM111.09,152.69l-0.67,0.24l-3.85,-1.37l-0.83,-1.17l-2.12,-1.07l-0.66,-1.02l-2.4,-0.55l-0.74,-1.71l6.02,1.45l2.0,2.55l2.52,1.39l0.73,1.27ZM87.8,134.64l0.89,0.29l1.86,-0.21l-0.65,3.34l1.69,2.33l-1.31,-1.33l-0.99,-1.62l-1.17,-0.98l-0.33,-1.82Z"
                              data-code="CA" fill="#c2d7ef" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M466.72,276.48l-0.1,1.03l-1.25,2.97l-0.19,3.62l-0.46,1.78l-0.23,0.63l-1.61,1.19l-1.21,1.39l-1.09,2.43l0.04,2.09l-3.25,3.24l-0.5,-0.24l-0.5,-0.83l-1.36,-0.02l-0.98,0.89l-1.68,-0.99l-1.54,1.24l-1.52,-1.96l1.57,-1.14l0.11,-0.52l-0.77,-1.35l2.1,-0.66l0.39,-0.73l1.05,0.82l2.21,0.11l1.12,-1.37l0.37,-1.81l-0.27,-2.09l-1.13,-1.5l1.0,-2.69l-0.13,-0.45l-0.92,-0.58l-1.6,0.17l-0.51,-0.94l0.1,-0.61l2.75,0.09l3.97,1.24l0.51,-0.33l0.17,-1.28l1.24,-2.21l1.28,-1.14l2.76,0.49Z"
                              data-code="CG" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M461.16,278.2l-0.26,-1.19l-1.09,-0.77l-0.84,-1.17l-0.29,-1.0l-1.04,-1.15l0.08,-3.43l0.58,-0.49l1.16,-2.35l1.85,-0.17l0.61,-0.62l0.97,0.58l3.15,-0.96l2.48,-1.92l0.02,-0.96l2.81,0.02l2.36,-1.17l1.93,-2.85l1.16,-0.93l1.11,-0.3l0.27,0.86l1.34,1.47l-0.39,2.01l0.3,1.01l4.01,2.75l0.17,0.93l2.63,2.31l0.6,1.44l2.08,1.4l-3.84,-0.21l-1.94,0.88l-1.23,-0.49l-2.67,1.2l-1.29,-0.18l-0.51,0.36l-0.6,1.22l-3.35,-0.65l-1.57,-0.91l-2.42,-0.83l-1.45,0.91l-0.97,1.27l-0.26,1.56l-3.22,-0.43l-1.49,1.33l-0.94,1.62Z"
                              data-code="CF" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M487.01,272.38l2.34,-0.14l1.35,1.84l1.34,0.45l0.86,-0.39l1.21,0.12l1.07,-0.41l0.54,0.89l2.04,1.54l-0.14,2.72l0.7,0.54l-1.38,1.13l-1.53,2.54l-0.17,2.05l-0.59,1.08l-0.02,1.72l-0.72,0.84l-0.66,3.01l0.63,1.32l-0.44,4.26l0.64,1.47l-0.37,1.22l0.86,1.8l1.53,1.41l0.3,1.26l0.44,0.5l-4.08,0.75l-0.92,1.81l0.51,1.34l-0.74,5.43l0.17,0.38l2.45,1.46l0.54,-0.1l0.12,1.62l-1.28,-0.01l-1.85,-2.35l-1.94,-0.45l-0.48,-1.13l-0.55,-0.2l-1.41,0.74l-1.71,-0.3l-1.01,-1.18l-2.49,-0.19l-0.44,-0.77l-1.98,-0.21l-2.88,0.36l0.11,-2.41l-0.85,-1.13l-0.16,-1.36l0.32,-1.73l-0.46,-0.89l-0.04,-1.49l-0.4,-0.39l-2.53,0.02l0.1,-0.41l-0.39,-0.49l-1.28,0.01l-0.43,0.45l-1.62,0.32l-0.83,1.79l-1.09,-0.28l-2.4,0.52l-1.37,-1.91l-1.3,-3.3l-0.38,-0.27l-7.39,-0.03l-2.46,0.42l0.5,-0.45l0.37,-1.47l0.66,-0.38l0.92,0.08l0.73,-0.82l0.87,0.02l0.31,0.68l1.4,0.36l3.59,-3.63l0.01,-2.23l1.02,-2.29l2.69,-2.39l0.43,-0.99l0.49,-1.96l0.17,-3.51l1.25,-2.95l0.36,-3.14l0.86,-1.13l1.1,-0.66l3.57,1.73l3.65,0.73l0.46,-0.21l0.8,-1.46l1.24,0.19l2.61,-1.17l0.81,0.44l1.04,-0.03l0.59,-0.66l0.7,-0.16l1.81,0.25Z"
                              data-code="CD" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M458.46,144.88l1.22,1.01l1.47,0.23l0.13,0.93l1.36,0.68l0.54,-0.2l0.24,-0.55l1.15,0.25l0.53,1.09l1.68,0.18l0.6,0.84l-1.04,0.73l-0.96,1.28l-1.6,0.17l-0.55,0.56l-1.04,-0.46l-1.05,0.15l-2.12,-0.96l-1.05,0.34l-1.2,1.12l-1.56,-0.87l-2.57,-2.1l-0.53,-1.88l4.7,-2.52l0.71,0.26l0.9,-0.28Z"
                              data-code="CZ" fill="#f7fafd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M504.36,193.47l0.43,0.28l-1.28,0.57l-0.92,-0.28l-0.24,-0.46l2.01,-0.13Z" data-code="CY" fill="#fefeff"
                              fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path
                              d="M211.34,258.05l0.48,0.99l1.6,1.6l-0.54,0.45l0.29,1.42l-0.25,1.19l-1.09,-0.59l-0.05,-1.25l-2.46,-1.42l-0.28,-0.77l-0.66,-0.45l-0.45,-0.0l-0.11,1.04l-1.32,-0.95l0.31,-1.3l-0.36,-0.6l0.31,-0.27l1.42,0.58l1.29,-0.14l0.56,0.56l0.74,0.17l0.55,-0.27Z"
                              data-code="CR" fill="#fefeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M221.21,227.25l1.27,1.02l2.19,-0.28l4.43,3.33l2.08,0.43l-0.1,0.38l0.36,0.5l1.75,0.1l1.48,0.84l-3.11,0.51l-4.15,-0.03l0.77,-0.67l-0.04,-0.64l-1.2,-0.74l-1.49,-0.16l-0.7,-0.61l-0.56,-1.4l-0.4,-0.25l-1.34,0.1l-2.2,-0.66l-0.88,-0.58l-3.18,-0.4l-0.27,-0.16l0.58,-0.74l-0.36,-0.29l-2.72,-0.05l-1.7,1.29l-0.91,0.03l-0.61,0.69l-1.01,0.22l1.11,-1.29l1.01,-0.52l3.69,-1.01l3.98,0.21l2.21,0.84Z"
                              data-code="CU" fill="#f6f8fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M500.35,351.36l0.5,2.04l-0.38,0.89l-1.05,0.21l-1.23,-1.2l-0.02,-0.64l0.83,-1.57l1.34,0.27Z" data-code="SZ"
                              fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element">
                            </path>
                            <path
                              d="M511.0,199.79l0.05,-1.33l0.54,-1.36l1.28,-0.99l0.13,-0.45l-0.41,-1.11l-1.14,-0.36l-0.19,-1.74l0.52,-1.0l1.29,-1.21l0.2,-1.18l0.59,0.23l2.62,-0.76l1.36,0.52l2.06,-0.01l2.95,-1.08l3.25,-0.26l-0.67,0.94l-1.28,0.66l-0.21,0.4l0.23,2.01l-0.88,3.19l-10.15,5.73l-2.15,-0.85Z"
                              data-code="SY" fill="#fdfdfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M621.35,172.32l-3.87,1.69l-0.96,1.18l-3.04,0.34l-1.13,1.86l-2.36,-0.35l-1.99,0.63l-2.39,1.4l0.06,0.95l-0.4,0.37l-4.52,0.43l-3.02,-0.93l-2.37,0.17l0.11,-0.79l2.32,0.42l1.13,-0.88l1.99,0.2l3.21,-2.14l-0.03,-0.69l-2.97,-1.57l-1.94,0.65l-1.22,-0.74l1.71,-1.58l-0.12,-0.67l-0.36,-0.15l0.32,-0.77l1.36,-0.35l4.02,1.02l0.49,-0.3l0.35,-1.59l1.09,-0.48l3.42,1.22l1.11,-0.31l7.64,0.39l1.16,1.0l1.23,0.39Z"
                              data-code="KG" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M506.26,284.69l1.87,-2.56l0.93,-2.15l-1.38,-4.08l-1.06,-1.6l2.82,-2.75l0.79,0.26l0.12,1.41l0.86,0.83l1.9,0.11l3.28,2.13l3.57,0.44l1.05,-1.12l1.96,-0.9l0.82,0.68l1.16,0.09l-1.78,2.45l0.03,9.12l1.3,1.94l-1.37,0.78l-0.67,1.03l-1.08,0.46l-0.34,1.67l-0.81,1.07l-0.45,1.55l-0.68,0.56l-3.2,-2.23l-0.35,-1.58l-8.86,-4.98l0.14,-1.6l-0.57,-1.04Z"
                              data-code="KE" fill="#fefeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M481.71,263.34l1.07,-0.72l1.2,-3.18l1.36,-0.26l1.61,1.99l0.87,0.34l1.1,-0.41l1.5,0.07l0.57,0.53l2.49,0.0l0.44,-0.63l1.07,-0.4l0.45,-0.84l0.59,-0.33l1.9,1.33l1.6,-0.2l2.83,-3.33l-0.32,-2.21l1.59,-0.52l-0.24,1.6l0.3,1.83l1.35,1.18l0.2,1.87l0.35,0.41l0.02,1.53l-0.23,0.47l-1.42,0.25l-0.85,1.44l0.3,0.6l1.4,0.16l1.11,1.08l0.59,1.13l1.03,0.53l1.28,2.36l-4.41,3.98l-1.74,0.01l-1.89,0.55l-1.47,-0.52l-1.15,0.57l-2.96,-2.62l-1.3,0.49l-1.06,-0.15l-0.79,0.39l-0.82,-0.22l-1.8,-2.7l-1.91,-1.1l-0.66,-1.5l-2.62,-2.32l-0.18,-0.94l-2.37,-1.6Z"
                              data-code="SS" fill="#f6f8fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M283.12,270.19l2.1,0.53l-1.08,1.95l0.2,1.72l0.93,1.49l-0.59,2.03l-0.43,0.71l-1.12,-0.42l-1.32,0.22l-0.93,-0.2l-0.46,0.26l-0.25,0.73l0.33,0.7l-0.89,-0.13l-1.39,-1.97l-0.31,-1.34l-0.97,-0.31l-0.89,-1.47l0.35,-1.61l1.45,-0.82l0.33,-1.87l2.61,0.44l0.57,-0.47l1.75,-0.16Z"
                              data-code="SR" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M689.52,249.39l0.49,1.45l-0.28,2.74l-4.0,1.86l-0.16,0.6l0.68,0.95l-2.06,0.17l-2.05,0.97l-1.82,-0.32l-2.12,-3.7l-0.55,-2.85l1.4,-1.85l3.02,-0.45l2.23,0.35l2.01,0.98l0.51,-0.14l0.95,-1.48l1.74,0.74Z"
                              data-code="KH" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M195.8,250.13l1.4,-1.19l2.24,1.45l0.98,-0.27l0.44,0.2l-0.27,1.05l-1.14,-0.03l-3.64,-1.21Z" data-code="SV"
                              fill="#fefeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element">
                            </path>
                            <path
                              d="M476.82,151.17l-1.14,1.9l-2.73,-0.92l-0.82,0.2l-0.74,0.8l-3.46,0.73l-0.47,0.69l-1.76,0.33l-1.88,-1.0l-0.18,-0.81l0.38,-0.75l1.87,-0.32l1.74,-1.89l0.83,0.16l0.79,-0.34l1.51,1.04l1.34,-0.63l1.25,0.3l1.65,-0.42l1.81,0.95Z"
                              data-code="SK" fill="#fcfdfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M737.51,185.84l0.98,-0.1l0.87,-1.17l2.69,-0.32l0.33,-0.29l1.76,2.79l0.58,1.76l0.02,3.12l-0.8,1.32l-2.21,0.55l-1.93,1.13l-1.8,0.19l-0.2,-1.1l0.43,-2.28l-0.95,-2.56l1.43,-0.37l0.23,-0.62l-1.43,-2.06Z"
                              data-code="KR" fill="#d9e6f5" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M456.18,162.07l-0.51,-1.32l0.18,-1.05l1.69,0.2l1.42,-0.71l2.09,-0.07l0.62,-0.51l0.21,0.47l-1.61,0.67l-0.44,1.34l-0.66,0.24l-0.26,0.82l-1.22,-0.49l-0.84,0.46l-0.69,-0.04Z"
                              data-code="SI" fill="#fdfeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M736.77,185.16l-0.92,-0.42l-0.88,0.62l-1.21,-0.88l0.96,-1.15l0.59,-2.59l-0.46,-0.74l-2.09,-0.77l1.64,-1.52l2.72,-1.58l1.58,-1.91l1.11,0.78l2.17,0.11l0.41,-0.5l-0.3,-1.22l3.52,-1.18l0.94,-1.4l0.98,1.08l-2.19,2.18l0.01,2.14l-1.06,0.54l-1.41,1.4l-1.7,0.52l-1.25,1.09l-0.14,1.98l0.94,0.45l1.15,1.04l-0.13,0.26l-2.6,0.29l-1.13,1.29l-1.22,0.08Z"
                              data-code="KP" fill="#f6f8fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M525.13,288.48l-1.13,-1.57l-0.03,-8.86l2.66,-3.38l1.67,-0.13l2.13,-1.69l3.41,-0.23l7.08,-7.55l2.91,-3.69l0.08,-4.82l2.98,-0.67l1.24,-0.86l0.45,-0.0l-0.2,3.0l-1.21,3.62l-2.73,5.97l-2.13,3.65l-5.03,6.16l-8.56,6.4l-2.78,3.08l-0.8,1.56Z"
                              data-code="SO" fill="#f6f8fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M390.09,248.21l0.12,1.55l0.49,1.46l0.96,0.82l0.05,1.28l-1.26,-0.19l-0.75,0.33l-1.84,-0.61l-5.84,-0.13l-2.54,0.51l-0.22,-1.03l1.77,0.04l2.01,-0.91l1.03,0.48l1.09,0.04l1.29,-0.62l0.14,-0.58l-0.51,-0.74l-1.81,0.25l-1.13,-0.63l-0.79,0.04l-0.72,0.61l-2.31,0.06l-0.92,-1.77l-0.81,-0.64l0.64,-0.35l2.46,-3.74l1.04,0.19l1.38,-0.56l1.19,-0.02l2.72,1.37l3.03,3.48Z"
                              data-code="SN" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M394.46,264.11l-1.73,1.98l-0.58,1.33l-2.07,-1.06l-1.22,-1.26l-0.65,-2.39l1.16,-0.96l0.67,-1.17l1.21,-0.52l1.66,0.0l1.03,1.64l0.52,2.41Z"
                              data-code="SL" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M826.69,311.6l-0.61,0.09l-0.2,-0.33l0.37,0.15l0.44,0.09ZM824.18,307.38l-0.26,-0.3l-0.31,-0.91l0.03,0.0l0.54,1.21ZM823.04,309.33l-1.66,-0.22l-0.2,-0.52l1.16,0.28l0.69,0.46ZM819.28,304.68l1.14,0.65l0.02,0.03l-0.81,-0.44l-0.35,-0.23Z"
                              data-code="SB" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M537.53,210.34l2.0,0.24l0.9,1.32l1.49,-0.06l0.87,2.08l1.29,0.76l0.51,0.99l1.56,1.03l-0.1,1.9l0.32,0.9l1.58,2.47l0.76,0.53l0.7,-0.04l1.68,4.23l7.53,1.33l0.51,-0.29l0.77,1.25l-1.55,4.87l-7.29,2.52l-7.3,1.03l-2.34,1.17l-1.88,2.74l-0.76,0.28l-0.82,-0.78l-0.91,0.12l-2.88,-0.51l-3.51,0.25l-0.86,-0.56l-0.57,0.15l-0.66,1.27l0.16,1.11l-0.43,0.32l-0.93,-1.4l-0.33,-1.16l-1.23,-0.88l-1.27,-2.06l-0.78,-2.22l-1.73,-1.79l-1.14,-0.48l-1.54,-2.31l-0.21,-3.41l-1.44,-2.93l-1.27,-1.16l-1.33,-0.57l-1.31,-3.37l-0.77,-0.67l-0.97,-1.97l-2.8,-4.03l-1.06,-0.17l0.37,-1.96l0.2,-0.72l2.74,0.3l1.08,-0.84l0.6,-0.94l1.74,-0.35l0.65,-1.03l0.71,-0.4l0.1,-0.62l-2.06,-2.28l4.39,-1.22l0.48,-0.37l2.77,0.69l3.66,1.9l7.03,5.5l4.87,0.3Z"
                              data-code="SA" fill="#eef4fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M480.22,89.3l-4.03,1.17l-2.43,2.86l0.26,2.57l-8.77,6.64l-1.78,5.79l1.78,2.68l2.22,1.96l-2.07,3.77l-2.72,1.13l-0.95,6.04l-1.29,3.01l-2.74,-0.31l-0.4,0.22l-1.31,2.59l-2.34,0.13l-0.75,-3.09l-2.08,-4.03l-1.83,-4.96l1.0,-1.93l2.14,-2.7l0.83,-4.45l-1.6,-2.17l-0.15,-4.94l1.48,-3.39l2.58,-0.15l0.87,-1.59l-0.78,-1.57l3.76,-5.59l4.04,-7.48l2.17,0.01l0.39,-0.29l0.57,-2.07l4.37,0.64l0.46,-0.34l0.33,-2.56l1.1,-0.13l6.94,4.87l0.06,6.32l0.66,1.36Z"
                              data-code="SE" fill="#eef4fa" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M505.98,259.4l-0.34,-0.77l-1.17,-0.9l-0.26,-1.61l0.29,-1.81l-0.34,-0.46l-1.16,-0.17l-0.54,0.59l-1.23,0.11l-0.28,0.65l0.53,0.65l0.17,1.22l-2.44,3.0l-0.96,0.19l-2.39,-1.4l-0.95,0.52l-0.38,0.78l-1.11,0.41l-0.29,0.5l-1.94,0.0l-0.54,-0.52l-1.81,-0.09l-0.95,0.4l-2.45,-2.35l-2.07,0.54l-0.73,1.26l-0.6,2.1l-1.25,0.58l-0.75,-0.62l0.27,-2.65l-1.48,-1.78l-0.22,-1.48l-0.92,-0.96l-0.02,-1.29l-0.57,-1.16l-0.68,-0.16l0.69,-1.29l-0.18,-1.14l0.65,-0.62l0.03,-0.55l-0.36,-0.41l1.55,-2.97l1.91,0.16l0.43,-0.4l-0.1,-10.94l2.49,-0.01l0.4,-0.4l-0.0,-4.82l29.02,0.0l0.64,2.04l-0.49,0.66l0.36,2.69l0.93,3.16l2.12,1.55l-0.89,1.04l-1.72,0.39l-0.98,0.9l-1.43,5.65l0.24,1.15l-0.38,2.06l-0.96,2.38l-1.53,1.31l-1.32,2.91l-1.22,0.86l-0.37,1.34Z"
                              data-code="SD" fill="#fcfdfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M241.8,239.2l0.05,-0.65l-0.46,-0.73l0.42,-0.44l0.19,-1.0l-0.09,-1.53l1.66,0.01l1.99,0.63l0.33,0.67l1.28,0.19l0.33,0.76l1.0,0.08l0.8,0.62l-0.45,0.51l-1.13,-0.47l-1.88,-0.01l-1.27,0.59l-0.75,-0.55l-1.01,0.54l-0.79,1.4l-0.23,-0.61Z"
                              data-code="DO" fill="#fdfefe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M528.43,256.18l-0.45,0.66l-0.58,-0.25l-1.51,0.13l-0.18,-1.01l1.45,-1.95l0.83,0.17l0.77,-0.44l0.2,1.0l-1.2,0.51l-0.06,0.7l0.73,0.47Z"
                              data-code="DJ" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M452.28,129.07l-1.19,2.24l-2.13,-1.6l-0.23,-0.95l2.98,-0.95l0.57,1.26ZM447.74,126.31l-0.26,0.57l-0.88,-0.07l-1.8,2.53l0.48,1.69l-1.09,0.36l-1.61,-0.39l-0.89,-1.69l-0.07,-3.43l0.96,-1.73l2.02,-0.2l1.09,-1.07l1.33,-0.67l-0.05,1.06l-0.73,1.41l0.3,1.0l1.2,0.64Z"
                              data-code="DK" fill="#f3f7fc" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M453.14,155.55l-0.55,-0.36l-1.2,-0.1l-1.87,0.57l-2.13,-0.13l-0.56,0.63l-0.86,-0.6l-0.96,0.09l-2.57,-0.93l-0.85,0.67l-1.47,-0.02l0.24,-1.75l1.23,-2.14l-0.28,-0.59l-3.52,-0.58l-0.92,-0.66l0.12,-1.2l-0.48,-0.88l0.27,-2.17l-0.37,-3.03l1.41,-0.22l0.63,-1.26l0.66,-3.19l-0.41,-1.18l0.26,-0.39l1.66,-0.15l0.33,0.54l0.62,0.07l1.7,-1.69l-0.54,-3.02l1.37,0.33l1.31,-0.37l0.31,1.18l2.25,0.71l-0.02,0.92l0.5,0.4l2.55,-0.65l1.34,-0.87l2.57,1.24l1.06,0.98l0.48,1.44l-0.57,0.74l-0.0,0.48l0.87,1.15l0.57,1.64l-0.14,1.29l0.82,1.7l-1.5,-0.07l-0.56,0.57l-4.47,2.15l-0.22,0.54l0.68,2.26l2.58,2.16l-0.66,1.11l-0.79,0.36l-0.23,0.43l0.32,1.87Z"
                              data-code="DE" fill="#7faadd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M528.27,246.72l0.26,-0.42l-0.22,-1.01l0.19,-1.5l0.92,-0.69l-0.07,-1.35l0.39,-0.75l1.01,0.47l3.34,-0.27l3.76,0.41l0.95,0.81l1.36,-0.58l1.74,-2.62l2.18,-1.09l6.86,-0.94l2.48,5.41l-1.64,0.76l-0.56,1.9l-6.23,2.16l-2.29,1.8l-1.93,0.05l-1.41,1.02l-4.24,0.74l-1.72,1.49l-3.28,0.19l-0.52,-1.18l0.02,-1.51l-1.34,-3.29Z"
                              data-code="YE" fill="#fefeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M462.89,152.8l0.04,2.25l-1.07,0.0l-0.33,0.63l0.36,0.51l-1.04,2.13l-2.02,0.07l-1.33,0.7l-5.29,-0.99l-0.47,-0.93l-0.44,-0.21l-2.47,0.55l-0.42,0.51l-3.18,-0.81l0.43,-0.91l1.12,0.78l0.6,-0.17l0.25,-0.58l1.93,0.12l1.86,-0.56l1.0,0.08l0.68,0.57l0.62,-0.15l0.26,-0.77l-0.3,-1.78l0.8,-0.44l0.68,-1.15l1.52,0.85l0.47,-0.06l1.34,-1.25l0.64,-0.17l1.81,0.92l1.28,-0.11l0.7,0.37Z"
                              data-code="AT" fill="#f1f6fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M441.46,188.44l-0.32,1.07l0.39,2.64l-0.54,2.16l-1.58,1.82l0.37,2.39l1.91,1.55l0.18,0.8l1.42,1.03l1.84,7.23l0.12,1.16l-0.57,5.0l0.2,1.51l-0.87,0.99l-0.02,0.51l1.41,1.86l0.14,1.2l0.89,1.48l0.5,0.16l0.98,-0.41l1.73,1.08l0.82,1.23l-8.22,4.81l-7.23,5.11l-3.43,1.13l-2.3,0.21l-0.28,-1.59l-2.56,-1.09l-0.67,-1.25l-26.12,-17.86l0.01,-3.47l3.77,-1.88l2.44,-0.41l2.12,-0.75l1.08,-1.42l2.81,-1.05l0.35,-2.08l1.33,-0.29l1.04,-0.94l3.47,-0.69l0.46,-1.08l-0.1,-0.45l-0.58,-0.52l-0.82,-2.81l-0.19,-1.83l-0.78,-1.49l2.03,-1.31l2.63,-0.48l1.7,-1.22l2.31,-0.84l8.24,-0.73l1.49,0.38l2.28,-1.1l2.46,-0.02l0.92,0.6l1.35,-0.05Z"
                              data-code="DZ" fill="#f9fbfd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M892.72,99.2l1.31,0.53l1.41,-0.37l1.89,0.98l1.89,0.42l-1.32,0.58l-2.9,-1.53l-2.08,0.22l-0.26,-0.15l0.07,-0.67ZM183.22,150.47l0.37,1.47l1.12,0.85l4.23,0.7l2.39,0.98l2.17,-0.38l1.85,0.5l-1.55,0.65l-3.49,2.61l-0.16,0.77l0.5,0.39l2.33,-0.61l1.77,1.02l5.15,-2.4l-0.31,0.65l0.25,0.56l1.36,0.38l1.71,1.16l4.7,-0.88l0.67,0.85l1.31,0.21l0.58,0.58l-1.34,0.17l-2.18,-0.32l-3.6,0.89l-2.71,3.25l0.35,0.9l0.59,-0.0l0.55,-0.6l-1.36,4.65l0.29,3.09l0.67,1.58l0.61,0.45l1.77,-0.44l1.6,-1.96l0.14,-2.21l-0.82,-1.96l0.11,-1.13l1.19,-2.37l0.44,-0.33l0.48,0.75l0.4,-0.29l0.4,-1.37l0.6,-0.47l0.24,-0.8l1.69,0.49l1.65,1.08l-0.03,2.37l-1.27,1.13l-0.0,1.13l0.87,0.36l1.66,-1.29l0.5,0.17l0.5,2.6l-2.49,3.75l0.17,0.61l1.54,0.62l1.48,0.17l1.92,-0.44l4.72,-2.15l2.16,-1.8l-0.05,-1.24l0.75,-0.22l3.92,0.36l2.12,-1.05l0.21,-0.4l-0.28,-1.48l3.27,-2.4l8.32,-0.02l0.56,-0.82l1.9,-0.77l0.93,-1.51l0.74,-2.37l1.58,-1.98l0.92,0.62l1.47,-0.47l0.8,0.66l-0.0,4.09l1.96,2.6l-2.34,1.31l-5.37,2.09l-1.83,2.72l0.02,1.79l0.83,1.59l0.54,0.23l-6.19,0.94l-2.2,0.89l-0.23,0.48l0.45,0.29l2.99,-0.46l-2.19,0.56l-1.13,0.0l-0.15,-0.32l-0.48,0.08l-0.76,0.82l0.22,0.67l0.32,0.06l-0.41,1.62l-1.27,1.58l-1.48,-1.07l-0.49,-0.04l-0.16,0.46l0.52,1.58l0.61,0.59l0.03,0.79l-0.95,1.38l-1.21,-1.22l-0.27,-2.27l-0.35,-0.35l-0.42,0.25l-0.48,1.27l0.33,1.41l-0.97,-0.27l-0.48,0.24l0.18,0.5l1.52,0.83l0.1,2.52l0.79,0.51l0.52,3.42l-1.42,1.88l-2.47,0.8l-1.71,1.66l-1.31,0.25l-1.27,1.03l-0.43,0.99l-2.69,1.78l-2.64,3.03l-0.45,2.12l0.45,2.08l0.85,2.38l1.09,1.9l0.04,1.2l1.16,3.06l-0.18,2.69l-0.55,1.43l-0.47,0.21l-0.89,-0.23l-0.49,-1.18l-0.87,-0.56l-2.75,-5.16l0.48,-1.68l-0.72,-1.78l-2.01,-2.38l-1.12,-0.53l-2.72,1.18l-1.47,-1.35l-1.57,-0.68l-2.99,0.31l-2.17,-0.3l-2.0,0.19l-1.15,0.46l-0.19,0.58l0.39,0.63l0.14,1.34l-0.84,-0.2l-0.84,0.46l-1.58,-0.07l-2.08,-1.44l-2.09,0.33l-1.91,-0.62l-3.73,0.84l-2.39,2.07l-2.54,1.22l-1.45,1.41l-0.61,1.38l0.34,3.71l-0.29,0.02l-3.5,-1.33l-1.25,-3.11l-1.44,-1.5l-2.24,-3.56l-1.76,-1.09l-2.27,-0.01l-1.71,2.07l-1.76,-0.69l-1.16,-0.74l-1.52,-2.98l-3.93,-3.16l-4.34,-0.0l-0.4,0.4l-0.0,0.74l-6.5,0.02l-9.02,-3.14l-0.34,-0.71l-5.7,0.49l-0.43,-1.29l-1.62,-1.61l-1.14,-0.38l-0.55,-0.88l-1.28,-0.13l-1.01,-0.77l-2.22,-0.27l-0.43,-0.3l-0.36,-1.58l-2.4,-2.83l-2.01,-3.85l-0.06,-0.9l-2.92,-3.26l-0.33,-2.29l-1.3,-1.66l0.52,-2.37l-0.09,-2.57l-0.78,-2.3l0.95,-2.82l0.61,-5.68l-0.47,-4.27l-1.46,-4.08l3.19,0.79l1.26,2.83l0.69,0.08l0.69,-1.14l-1.1,-4.79l68.76,-0.0l0.4,-0.4l0.14,-0.86ZM32.44,67.52l1.73,1.97l0.55,0.05l0.99,-0.79l3.65,0.24l-0.09,0.62l0.32,0.45l3.83,0.77l2.61,-0.43l5.19,1.4l4.84,0.43l1.89,0.57l3.42,-0.7l6.14,1.87l-0.03,38.06l0.38,0.4l2.39,0.11l2.31,0.98l3.9,3.99l0.55,0.04l2.4,-2.03l2.16,-1.04l1.2,1.71l3.95,3.14l4.09,6.63l4.2,2.29l0.06,1.83l-1.02,1.23l-1.16,-1.08l-2.04,-1.03l-0.67,-2.89l-3.28,-3.03l-1.65,-3.57l-6.35,-0.32l-2.82,-1.01l-5.26,-3.85l-6.77,-2.04l-3.53,0.3l-4.81,-1.69l-3.25,-1.63l-2.78,0.8l-0.28,0.46l0.44,2.21l-3.91,0.96l-2.26,1.27l-2.3,0.65l-0.27,-1.65l1.05,-3.42l2.49,-1.09l0.16,-0.6l-0.69,-0.96l-0.55,-0.1l-3.19,2.12l-1.78,2.56l-3.55,2.61l-0.04,0.61l1.56,1.52l-2.07,2.29l-5.11,2.57l-0.77,1.66l-3.76,1.77l-0.92,1.73l-2.69,1.38l-1.81,-0.22l-6.95,3.32l-3.97,0.91l4.85,-2.5l2.59,-1.86l3.26,-0.52l1.19,-1.4l3.42,-2.1l2.59,-2.27l0.42,-2.68l1.23,-2.1l-0.04,-0.46l-0.45,-0.11l-2.68,1.03l-0.63,-0.49l-0.53,0.03l-1.05,1.04l-1.36,-1.54l-0.66,0.08l-0.32,0.62l-0.58,-1.14l-0.56,-0.16l-2.41,1.42l-1.07,-0.0l-0.17,-1.75l0.3,-1.71l-1.61,-1.33l-3.41,0.59l-1.96,-1.63l-1.57,-0.84l-0.15,-2.21l-1.7,-1.43l0.82,-1.88l1.99,-2.12l0.88,-1.92l1.71,-0.24l2.04,0.51l1.87,-1.77l1.91,0.25l1.91,-1.23l0.17,-0.43l-0.47,-1.82l-1.07,-0.7l1.39,-1.17l0.12,-0.45l-0.39,-0.26l-1.65,0.07l-2.66,0.88l-0.75,0.78l-1.92,-0.8l-3.46,0.44l-3.44,-0.91l-1.06,-1.61l-2.65,-1.99l2.91,-1.43l5.5,-2.0l1.52,0.0l-0.26,1.62l0.41,0.46l5.29,-0.16l0.3,-0.65l-2.03,-2.59l-3.14,-1.68l-1.79,-2.12l-2.4,-1.83l-3.09,-1.24l1.04,-1.69l4.23,-0.14l3.36,-2.07l0.73,-2.27l2.39,-1.99l2.42,-0.52l4.65,-1.97l2.46,0.23l3.71,-2.35l3.5,0.89ZM37.6,123.41l-2.25,1.23l-0.95,-0.69l-0.29,-1.24l3.21,-1.63l1.42,0.21l0.67,0.7l-1.8,1.42ZM31.06,234.03l0.98,0.47l0.74,0.87l-1.77,1.07l-0.44,-1.53l0.49,-0.89ZM29.34,232.07l0.18,0.05l0.08,0.05l-0.16,0.03l-0.11,-0.14ZM25.16,230.17l0.05,-0.03l0.18,0.22l-0.13,-0.01l-0.1,-0.18ZM5.89,113.26l-1.08,0.41l-2.21,-1.12l1.53,-0.4l1.62,0.28l0.14,0.83Z"
                              data-code="US" fill="#4c88d0" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M489.16,122.85l0.96,0.66l0.22,1.65l0.68,1.76l-3.65,1.7l-2.23,-1.58l-1.29,-0.26l-0.68,-0.77l-2.42,0.34l-4.16,-0.23l-2.47,0.9l0.06,-1.98l1.13,-2.06l1.95,-1.02l2.12,2.58l2.01,-0.07l0.38,-0.33l0.44,-2.52l1.76,-0.53l3.06,1.7l2.15,0.07Z"
                              data-code="LV" fill="#fefeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M286.85,372.74l-0.92,1.5l-2.59,1.44l-1.69,-0.52l-1.42,0.26l-2.39,-1.19l-1.52,0.08l-1.27,-1.3l0.16,-1.5l0.56,-0.79l-0.02,-2.73l1.21,-4.74l1.19,-0.21l2.37,2.0l1.08,0.03l4.36,3.17l1.22,1.6l-0.96,1.5l0.61,1.4Z"
                              data-code="UY" fill="#fdfeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M510.37,198.01l-0.88,0.51l1.82,-3.54l0.62,0.08l0.22,0.61l-1.13,0.88l-0.65,1.47Z" data-code="LB" fill="#fdfeff"
                              fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path
                              d="M689.54,248.53l-1.76,-0.74l-0.49,0.15l-0.94,1.46l-1.32,-0.64l0.62,-0.98l0.11,-2.17l-2.04,-2.42l-0.25,-2.65l-1.9,-2.1l-2.15,-0.31l-0.78,0.91l-1.12,0.06l-1.05,-0.4l-2.06,1.2l-0.04,-1.59l0.61,-2.68l-0.36,-0.49l-1.35,-0.1l-0.11,-1.23l-0.96,-0.88l1.96,-1.89l0.39,0.36l1.33,0.07l0.42,-0.45l-0.34,-2.66l0.7,-0.21l1.28,1.81l1.11,2.35l0.36,0.23l2.82,0.02l0.71,1.67l-1.39,0.65l-0.72,0.93l0.13,0.6l2.91,1.51l3.6,5.25l1.88,1.78l0.56,1.62l-0.35,1.96Z"
                              data-code="LA" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M724.01,226.68l-0.74,1.48l-0.9,-1.52l-0.25,-1.74l1.38,-2.44l1.73,-1.74l0.64,0.44l-1.85,5.52Z" data-code="TW"
                              fill="#eef4fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element">
                            </path>
                            <path d="M266.64,259.32l0.28,-1.16l1.13,-0.22l-0.06,1.2l-1.35,0.18Z" data-code="TT" fill="#fefeff" fill-opacity="1"
                              stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path
                              d="M513.21,175.47l3.64,1.17l3.05,-0.44l2.1,0.26l3.11,-1.56l2.46,-0.13l2.19,1.33l0.33,0.82l-0.22,1.33l0.25,0.44l2.28,1.13l-1.17,0.57l-0.21,0.45l0.75,3.2l-0.41,1.16l1.13,1.92l-0.55,0.22l-0.9,-0.67l-2.91,-0.37l-1.24,0.46l-4.23,0.41l-2.81,1.05l-1.91,0.01l-1.52,-0.53l-2.58,0.75l-0.66,-0.45l-0.62,0.3l-0.12,1.45l-0.89,0.84l-0.47,-0.67l0.79,-1.3l-0.41,-0.2l-1.43,0.23l-2.0,-0.63l-2.02,1.65l-3.51,0.3l-2.13,-1.53l-2.7,-0.1l-0.86,1.24l-1.38,0.27l-2.29,-1.44l-2.71,-0.01l-1.37,-2.65l-1.68,-1.52l1.07,-1.99l-0.09,-0.49l-1.27,-1.12l2.37,-2.41l3.7,-0.11l1.28,-2.24l4.49,0.37l3.21,-1.97l2.81,-0.82l3.99,-0.06l4.29,2.07ZM488.79,176.72l-1.72,1.31l-0.5,-0.88l1.37,-2.57l-0.7,-0.85l1.7,-0.63l1.8,0.34l0.46,1.17l1.76,0.78l-2.87,0.32l-1.3,1.01Z"
                              data-code="TR" fill="#e3ecf8" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M624.16,268.99l-1.82,0.48l-0.99,-1.67l-0.42,-3.46l0.95,-3.43l1.21,0.98l2.26,4.19l-0.34,2.33l-0.85,0.58Z" data-code="LK"
                              fill="#fdfeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element">
                            </path>
                            <path
                              d="M448.1,188.24l-1.0,1.27l-0.02,1.32l0.84,0.88l-0.28,2.09l-1.53,1.32l-0.12,0.42l0.48,1.54l1.42,0.32l0.53,1.11l0.9,0.52l-0.11,1.67l-3.54,2.64l-0.1,2.38l-0.58,0.3l-0.96,-4.45l-1.54,-1.25l-0.16,-0.78l-1.92,-1.56l-0.18,-1.76l1.51,-1.62l0.59,-2.34l-0.38,-2.78l0.42,-1.21l2.45,-1.05l1.29,0.26l-0.06,1.11l0.58,0.38l1.47,-0.73Z"
                              data-code="TN" fill="#fdfeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M734.55,307.93l-0.1,-0.97l4.5,-0.86l-2.82,1.28l-1.59,0.55Z" data-code="TL" fill="#ffffff" fill-opacity="1"
                              stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path
                              d="M553.03,173.76l-0.04,0.34l-0.09,-0.22l0.13,-0.12ZM555.87,172.66l0.45,-0.1l1.48,0.74l2.06,2.43l4.07,-0.18l0.38,-0.51l-0.32,-1.19l1.92,-0.94l1.91,-1.59l2.94,1.39l0.43,2.47l1.19,0.67l2.58,-0.13l0.62,0.4l1.32,3.12l4.54,3.44l2.67,1.45l3.06,1.14l-0.04,1.05l-1.33,-0.75l-0.59,0.19l-0.32,0.84l-2.2,0.81l-0.46,2.13l-1.21,0.74l-1.91,0.42l-0.73,1.33l-1.56,0.31l-2.22,-0.94l-0.2,-2.17l-0.38,-0.36l-1.73,-0.09l-2.76,-2.46l-2.14,-0.4l-2.84,-1.48l-1.78,-0.27l-1.24,0.53l-1.57,-0.08l-2.0,1.69l-1.7,0.43l-0.36,-1.58l0.36,-2.98l-0.22,-0.4l-1.65,-0.84l0.54,-1.69l-0.34,-0.52l-1.22,-0.13l0.36,-1.64l2.22,0.59l2.2,-0.95l0.12,-0.65l-1.77,-1.74l-0.66,-1.57Z"
                              data-code="TM" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M597.75,178.82l-2.54,-0.44l-0.47,0.34l-0.24,1.7l0.43,0.45l2.64,-0.22l3.18,0.95l4.39,-0.41l0.56,2.37l0.52,0.29l0.67,-0.24l1.11,0.49l0.21,2.13l-3.76,-0.21l-1.8,1.32l-1.76,0.74l-0.61,-0.58l0.21,-2.23l-0.64,-0.49l-0.07,-0.93l-1.36,-0.66l-0.45,0.07l-1.08,1.01l-0.55,1.48l-1.31,-0.05l-0.95,1.16l-0.9,-0.35l-1.86,0.74l1.26,-2.83l-0.54,-2.17l-1.67,-0.82l0.33,-0.66l2.18,-0.04l1.19,-1.63l0.76,-1.79l2.43,-0.5l-0.26,1.0l0.73,1.05Z"
                              data-code="TJ" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M491.06,363.48l-0.49,0.15l-1.49,-1.67l1.1,-1.43l2.19,-1.44l1.51,1.27l-0.98,1.82l-1.23,0.38l-0.62,0.93Z" data-code="LS"
                              fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element">
                            </path>
                            <path
                              d="M670.27,255.86l-1.41,3.87l0.15,2.0l0.38,0.36l1.38,0.07l0.9,2.04l0.55,2.34l1.4,1.44l1.61,0.38l0.96,0.97l-0.5,0.64l-1.1,0.2l-0.34,-1.18l-2.04,-1.1l-0.63,0.23l-0.63,-0.62l-0.48,-1.3l-2.56,-2.63l-0.73,0.41l0.95,-3.89l2.16,-4.22ZM670.67,254.77l-0.92,-2.18l-0.26,-2.61l-2.14,-3.06l0.71,-0.49l0.89,-2.59l-3.61,-5.45l0.87,-0.51l1.05,-2.58l1.74,-0.18l2.6,-1.59l0.76,0.56l0.13,1.39l0.37,0.36l1.23,0.09l-0.51,2.28l0.05,2.42l0.6,0.34l2.43,-1.42l0.77,0.39l1.47,-0.07l0.71,-0.88l1.48,0.14l1.71,1.88l0.25,2.65l1.92,2.11l-0.1,1.89l-0.61,0.86l-2.22,-0.33l-3.5,0.64l-1.6,2.12l0.36,2.58l-1.51,-0.79l-1.84,-0.01l0.28,-1.52l-0.4,-0.47l-2.21,0.01l-0.4,0.37l-0.19,2.74l-0.34,0.93Z"
                              data-code="TH" fill="#f3f7fc" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M596.68,420.38l-3.2,0.18l-0.05,-1.26l0.39,-1.41l1.3,0.78l2.08,0.35l-0.52,1.36Z" data-code="TF" fill="#f6f8fb"
                              fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path
                              d="M422.7,257.63l-0.09,1.23l1.53,1.52l0.08,1.09l0.5,0.65l-0.11,5.62l0.49,1.47l-1.31,0.35l-1.02,-2.13l-0.18,-1.12l0.53,-2.19l-0.63,-1.16l-0.22,-3.68l-1.01,-1.4l0.07,-0.28l1.37,0.03Z"
                              data-code="TG" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M480.25,235.49l0.12,9.57l-2.1,0.05l-1.14,1.89l-0.69,1.63l0.34,0.73l-0.66,0.91l0.24,0.89l-0.86,1.95l0.45,0.5l0.6,-0.1l0.34,0.64l0.03,1.38l0.9,1.04l-1.45,0.43l-1.27,1.03l-1.83,2.76l-2.16,1.07l-2.31,-0.15l-0.86,0.25l-0.26,0.49l0.17,0.61l-2.11,1.68l-2.85,0.87l-1.09,-0.57l-0.73,0.66l-1.12,0.1l-1.1,-3.12l-1.25,-0.64l-1.22,-1.22l0.29,-0.64l3.01,0.04l0.35,-0.6l-1.3,-2.2l-0.08,-3.31l-0.97,-1.66l0.22,-1.04l-0.38,-0.48l-1.22,-0.04l0.0,-1.25l-0.98,-1.07l0.96,-3.01l3.25,-2.65l0.13,-3.33l0.95,-5.18l0.52,-1.07l-0.1,-0.48l-0.91,-0.78l-0.2,-0.96l-0.8,-0.58l-0.55,-3.65l2.1,-1.2l19.57,9.83Z"
                              data-code="TD" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M483.48,203.15l-0.75,1.1l0.29,1.39l-0.6,1.83l0.73,2.14l0.0,24.12l-2.48,0.01l-0.41,0.85l-19.41,-9.76l-4.41,2.28l-1.37,-1.33l-3.82,-1.1l-1.14,-1.65l-1.98,-1.23l-1.22,0.32l-0.66,-1.11l-0.17,-1.26l-1.28,-1.69l0.87,-1.19l-0.07,-4.34l0.43,-2.27l-0.86,-3.45l1.13,-0.76l0.22,-1.16l-0.2,-1.03l3.48,-2.61l0.29,-1.94l2.45,0.8l1.18,-0.21l1.98,0.44l3.15,1.18l1.37,2.54l5.72,1.67l2.64,1.35l1.61,-0.72l1.29,-1.34l-0.44,-2.34l0.66,-1.13l1.67,-1.21l1.57,-0.35l3.14,0.53l1.08,1.28l3.99,0.78l0.36,0.54Z"
                              data-code="LY" fill="#fcfdfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M550.76,223.97l1.88,-0.4l3.84,0.02l4.78,-4.75l0.19,0.36l0.26,1.58l-0.81,0.01l-0.39,0.35l-0.08,2.04l-0.81,0.63l-0.01,0.96l-0.66,0.99l-0.39,1.41l-7.08,-1.25l-0.7,-1.96Z"
                              data-code="AE" fill="#f6f9fd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M240.68,256.69l0.53,0.75l-0.02,1.06l-1.07,1.78l0.95,2.0l0.42,0.22l1.4,-0.44l0.56,-1.83l-0.77,-1.17l-0.1,-1.47l2.82,-0.93l0.26,-0.49l-0.28,-0.96l0.3,-0.28l0.66,1.31l1.96,0.26l1.4,1.22l0.08,0.68l0.39,0.35l4.81,-0.22l1.49,1.11l1.92,0.31l1.67,-0.84l0.22,-0.6l3.44,-0.14l-0.17,0.55l0.86,1.19l2.19,0.35l1.67,1.1l0.37,1.86l0.41,0.32l1.55,0.17l-1.66,1.35l-0.22,0.92l0.65,0.97l-1.67,0.54l-0.3,0.4l0.04,0.99l-0.56,0.57l-0.01,0.55l1.85,2.27l-0.66,0.69l-4.47,1.29l-0.72,0.54l-3.69,-0.9l-0.71,0.27l-0.02,0.7l0.91,0.53l-0.08,1.54l0.35,1.58l0.35,0.31l1.66,0.17l-1.3,0.52l-0.48,1.13l-2.68,0.91l-0.6,0.77l-1.57,0.13l-1.17,-1.13l-0.8,-2.52l-1.25,-1.26l1.02,-1.23l-1.29,-2.95l0.18,-1.62l1.0,-2.21l-0.2,-0.49l-1.14,-0.46l-4.02,0.36l-1.82,-2.1l-1.57,-0.33l-2.99,0.22l-1.06,-0.97l0.25,-1.23l-0.2,-1.01l-0.59,-0.69l-0.29,-1.06l-1.08,-0.39l0.78,-2.79l1.9,-2.11Z"
                              data-code="VE" fill="#f4f8fc" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M600.7,188.88l-1.57,1.3l-0.1,0.48l0.8,2.31l-1.09,1.04l-0.03,1.27l-0.48,0.71l-2.16,-0.08l-0.37,0.59l0.78,1.48l-1.38,0.69l-1.06,1.69l0.06,1.7l-0.65,0.52l-0.91,-0.21l-1.91,0.36l-0.48,0.77l-1.88,0.13l-1.4,1.56l-0.18,2.32l-2.91,1.02l-1.65,-0.23l-0.71,0.55l-1.41,-0.3l-2.41,0.39l-3.52,-1.17l1.96,-2.35l-0.21,-1.78l-0.3,-0.34l-1.63,-0.4l-0.19,-1.58l-0.75,-2.03l0.95,-1.36l-0.19,-0.6l-0.73,-0.28l1.47,-4.8l2.14,0.9l2.12,-0.36l0.74,-1.34l1.77,-0.39l1.54,-0.92l0.63,-2.31l1.87,-0.5l0.49,-0.81l0.94,0.56l2.13,0.11l2.55,0.92l1.95,-0.83l0.65,0.43l0.56,-0.13l0.69,-1.12l1.57,-0.08l0.72,-1.66l0.79,-0.74l0.8,0.39l-0.17,0.56l0.71,0.58l-0.08,2.39l1.11,0.95ZM601.37,188.71l1.73,-0.71l1.43,-1.18l4.03,0.35l-2.23,0.74l-4.95,0.8Z"
                              data-code="AF" fill="#feffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M530.82,187.47l0.79,0.66l1.26,-0.28l1.46,3.08l1.63,0.94l0.14,1.23l-1.22,1.05l-0.53,2.52l1.73,2.67l3.12,1.62l1.15,1.88l-0.38,1.85l0.39,0.48l0.41,-0.0l0.02,1.07l0.76,0.94l-2.47,-0.1l-1.71,2.44l-4.31,-0.2l-7.02,-5.48l-3.73,-1.94l-2.88,-0.73l-0.85,-2.87l5.45,-3.02l0.95,-3.43l-0.19,-1.96l1.27,-0.7l1.22,-1.7l0.87,-0.36l2.69,0.34Z"
                              data-code="IQ" fill="#fcfdfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M384.14,88.06l-0.37,2.61l2.54,2.51l-2.9,2.75l-9.19,3.4l-9.25,-1.66l1.7,-1.22l-0.1,-0.7l-4.05,-1.47l2.96,-0.53l0.33,-0.43l-0.11,-1.2l-0.33,-0.36l-4.67,-0.85l1.28,-2.04l3.45,-0.56l3.77,2.72l0.44,0.02l3.64,-2.16l3.3,1.08l3.98,-2.16l3.58,0.26Z"
                              data-code="IS" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M533.43,187.16l-1.27,-2.15l0.42,-0.98l-0.71,-3.04l1.03,-0.5l0.33,0.83l1.26,1.35l2.05,0.51l1.11,-0.16l2.89,-2.11l0.62,-0.14l0.39,0.46l-0.72,1.2l0.06,0.49l1.56,1.53l0.65,0.04l0.67,1.81l2.56,0.83l1.87,1.48l3.69,0.49l3.91,-0.76l0.47,-0.73l2.17,-0.6l1.66,-1.54l1.51,0.08l1.18,-0.53l1.59,0.24l2.83,1.48l1.88,0.3l2.77,2.47l1.77,0.18l0.18,1.99l-1.68,5.49l0.24,0.5l0.61,0.23l-0.82,1.48l0.8,2.18l0.19,1.71l0.3,0.34l1.63,0.4l0.15,1.32l-2.15,2.35l-0.01,0.53l2.21,3.03l2.34,1.24l0.06,2.14l1.24,0.72l0.11,0.69l-3.31,1.27l-1.08,3.03l-9.68,-1.68l-0.99,-3.05l-1.43,-0.73l-2.17,0.46l-2.47,1.26l-2.83,-0.82l-2.46,-2.02l-2.41,-0.8l-3.42,-6.06l-0.48,-0.2l-1.18,0.39l-1.44,-0.82l-0.5,0.08l-0.65,0.74l-0.97,-1.01l-0.02,-1.31l-0.71,-0.39l0.26,-1.81l-1.29,-2.11l-3.13,-1.63l-1.58,-2.43l0.5,-1.9l1.31,-1.26l-0.19,-1.66l-1.74,-1.1l-1.57,-3.3Z"
                              data-code="IR" fill="#f2f6fc" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M536.99,182.33l-0.28,0.03l-1.23,-2.13l-0.93,0.01l-0.62,-0.66l-0.69,-0.07l-0.96,-0.81l-1.56,-0.62l0.19,-1.12l-0.26,-0.79l2.72,-0.36l1.09,1.01l-0.17,0.92l1.02,0.78l-0.47,0.62l0.08,0.56l2.04,1.23l0.04,1.4Z"
                              data-code="AM" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M451.59,158.63l3.48,0.94l-0.21,1.17l0.3,0.83l-1.49,-0.24l-2.04,1.1l-0.21,0.39l0.13,1.45l-0.25,1.12l0.82,1.57l2.39,1.63l1.31,2.54l2.79,2.43l2.05,0.08l0.21,0.23l-0.39,0.33l0.09,0.67l4.05,1.97l2.17,1.76l-0.16,0.36l-1.17,-1.08l-2.18,-0.49l-0.44,0.2l-1.05,1.91l0.14,0.54l1.57,0.95l-0.19,0.98l-1.06,0.33l-1.25,2.34l-0.37,0.08l0.0,-0.33l1.0,-2.45l-1.73,-3.17l-1.12,-0.51l-0.88,-1.33l-1.51,-0.51l-1.27,-1.25l-1.75,-0.18l-4.12,-3.21l-1.62,-1.65l-1.03,-3.19l-3.53,-1.36l-1.3,0.51l-1.69,1.41l0.16,-0.72l-0.28,-0.47l-1.14,-0.33l-0.53,-1.96l0.72,-0.78l0.04,-0.48l-0.65,-1.17l0.8,0.39l1.4,-0.23l1.11,-0.84l0.52,0.35l1.19,-0.1l0.75,-1.2l1.53,0.33l1.36,-0.56l0.35,-1.14l1.08,0.32l0.68,-0.64l1.98,-0.44l0.42,0.82ZM459.19,184.75l-0.65,1.65l0.32,1.05l-0.31,0.89l-1.5,-0.85l-4.5,-1.67l0.19,-0.82l2.67,0.23l3.78,-0.48ZM443.93,176.05l1.18,1.66l-0.3,3.32l-1.06,-0.01l-0.77,0.73l-0.53,-0.44l-0.1,-3.37l-0.39,-1.22l1.04,0.01l0.92,-0.68Z"
                              data-code="IT" fill="#b0cbea" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M690.56,230.25l-2.7,1.82l-2.09,2.46l-0.63,1.95l4.31,6.45l2.32,1.65l1.43,1.94l1.11,4.59l-0.32,4.24l-1.93,1.54l-2.84,1.61l-2.11,2.15l-2.73,2.06l-0.59,-1.05l0.63,-1.53l-0.13,-0.47l-1.34,-1.04l1.51,-0.71l2.55,-0.18l0.3,-0.63l-0.82,-1.14l4.0,-2.07l0.31,-3.05l-0.57,-1.77l0.42,-2.66l-0.73,-1.97l-1.86,-1.76l-3.63,-5.29l-2.72,-1.46l0.36,-0.47l1.5,-0.64l0.21,-0.52l-0.97,-2.27l-0.37,-0.24l-2.83,-0.02l-2.24,-3.9l0.83,-0.4l4.39,-0.29l2.06,-1.31l1.15,0.89l1.88,0.4l-0.17,1.51l1.35,1.16l1.67,0.45Z"
                              data-code="VN" fill="#fbfcfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M249.29,428.93l-2.33,-0.52l-5.83,-0.43l-0.89,-1.66l0.05,-2.37l-0.45,-0.4l-1.43,0.18l-0.67,-0.91l-0.2,-3.13l1.88,-1.47l0.79,-2.04l-0.25,-1.7l1.3,-2.68l0.91,-4.15l-0.22,-1.69l0.85,-0.45l0.2,-0.44l-0.27,-1.16l-0.98,-0.68l0.59,-0.92l-0.05,-0.5l-1.04,-1.07l-0.52,-3.1l0.97,-0.86l-0.42,-3.58l1.2,-5.43l1.38,-0.98l0.16,-0.43l-0.75,-2.79l-0.01,-2.43l1.78,-1.75l0.06,-2.57l1.43,-2.85l0.01,-2.58l-0.69,-0.74l-1.09,-4.52l1.47,-2.7l-0.18,-2.79l0.85,-2.35l1.59,-2.46l1.73,-1.64l0.05,-0.52l-0.6,-0.84l0.44,-0.85l-0.07,-4.19l2.7,-1.44l0.86,-2.75l-0.21,-0.71l1.76,-2.01l2.9,0.57l1.38,1.78l0.68,-0.08l0.87,-1.87l2.39,0.09l4.95,4.77l2.17,0.49l3.0,1.92l2.47,1.0l0.25,0.82l-2.37,3.93l0.23,0.59l5.39,1.16l2.12,-0.44l2.45,-2.16l0.5,-2.38l0.76,-0.31l0.98,1.2l-0.04,1.8l-3.67,2.51l-2.85,2.66l-3.43,3.88l-1.3,5.07l0.01,2.72l-0.54,0.73l-0.36,3.28l3.14,2.64l-0.16,2.11l1.4,1.11l-0.1,1.09l-2.29,3.52l-3.55,1.49l-4.92,0.6l-2.71,-0.29l-0.43,0.51l0.5,1.65l-0.49,2.1l0.38,1.42l-1.19,0.83l-2.36,0.38l-2.3,-1.04l-1.38,0.83l0.41,3.64l1.69,0.91l1.4,-0.71l0.36,0.76l-2.04,0.86l-2.01,1.89l-0.97,4.63l-2.34,0.1l-2.09,1.78l-0.61,2.75l2.46,2.31l2.17,0.63l-0.7,2.32l-2.83,1.73l-1.73,3.86l-2.17,1.22l-1.16,1.67l0.75,3.76l1.04,1.28ZM256.71,438.88l-2.0,0.15l-1.4,-1.22l-3.82,-0.1l-0.0,-5.83l1.6,3.05l3.26,2.07l3.08,0.78l-0.71,1.1Z"
                              data-code="AR" fill="#f1f6fb" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M705.8,353.26l0.26,0.04l0.17,-0.47l-0.48,-1.42l0.92,1.11l0.45,0.15l0.27,-0.39l-0.1,-1.56l-1.98,-3.63l1.09,-3.31l-0.24,-1.57l0.34,-0.62l0.38,1.06l0.43,-0.19l0.99,-1.7l1.91,-0.83l1.29,-1.15l1.81,-0.91l0.96,-0.17l0.92,0.26l1.92,-0.95l1.47,-0.28l1.03,-0.8l1.43,0.04l2.78,-0.84l1.36,-1.15l0.71,-1.45l1.41,-1.26l0.3,-2.58l1.27,-1.59l0.78,1.65l0.54,0.19l1.07,-0.51l0.15,-0.6l-0.73,-1.0l0.45,-0.71l0.78,0.39l0.58,-0.3l0.28,-1.82l1.87,-2.14l1.12,-0.39l0.28,-0.58l0.62,0.17l0.53,-0.73l1.87,-0.57l1.65,1.05l1.35,1.48l3.39,0.38l0.43,-0.54l-0.46,-1.23l1.05,-1.79l1.04,-0.61l0.14,-0.55l-0.25,-0.41l0.88,-1.17l1.31,-0.77l1.3,0.27l2.1,-0.48l0.31,-0.4l-0.05,-1.3l-0.92,-0.77l1.48,0.56l1.41,1.07l2.11,0.65l0.81,-0.2l1.4,0.7l1.69,-0.66l0.8,0.19l0.64,-0.33l0.71,0.77l-1.33,1.94l-0.71,0.07l-0.35,0.51l0.24,0.86l-1.52,2.35l0.12,1.05l2.15,1.65l1.97,0.85l3.04,2.36l1.97,0.65l0.55,0.88l2.72,0.85l1.84,-1.1l2.07,-5.97l-0.42,-3.59l0.3,-1.73l0.47,-0.87l-0.31,-0.68l1.09,-3.28l0.46,-0.47l0.4,0.71l0.16,1.51l0.65,0.52l0.16,1.04l0.85,1.21l0.12,2.38l0.9,2.0l0.57,0.18l1.3,-0.78l1.69,1.7l-0.2,1.08l0.53,2.2l0.39,1.3l0.68,0.48l0.6,1.95l-0.19,1.48l0.81,1.76l6.01,3.69l-0.11,0.76l1.38,1.58l0.95,2.77l0.58,0.22l0.72,-0.41l0.8,0.9l0.61,0.01l0.46,2.41l4.81,4.71l0.66,2.02l-0.07,3.31l1.14,2.2l-0.13,2.24l-1.1,3.68l0.03,1.64l-0.47,1.89l-1.05,2.4l-1.9,1.47l-1.72,3.51l-2.38,6.09l-0.24,2.82l-1.14,0.8l-2.85,0.15l-2.31,1.19l-2.51,2.25l-3.09,-1.57l0.3,-1.15l-0.54,-0.47l-1.5,0.63l-2.01,1.94l-7.12,-2.18l-1.48,-1.63l-1.14,-3.74l-1.45,-1.26l-1.81,-0.26l0.56,-1.18l-0.61,-2.1l-0.72,-0.1l-1.14,1.82l-0.9,0.21l0.63,-0.82l0.36,-1.55l0.92,-1.31l-0.13,-2.34l-0.7,-0.22l-2.0,2.34l-1.51,0.93l-0.94,2.01l-1.35,-0.81l-0.02,-1.52l-1.57,-2.04l-1.09,-0.88l0.24,-0.33l-0.14,-0.59l-3.21,-1.69l-1.83,-0.12l-2.54,-1.35l-4.58,0.28l-6.02,1.9l-2.53,-0.13l-2.62,1.41l-2.13,0.63l-1.49,2.6l-3.49,0.31l-2.29,-0.5l-3.48,0.43l-1.6,1.47l-0.81,-0.04l-2.37,1.63l-3.26,-0.1l-3.72,-2.21l0.04,-1.05l1.19,-0.46l0.49,-0.89l0.21,-2.97l-0.28,-1.64l-1.34,-2.86l-0.38,-1.47l0.05,-1.72l-0.95,-1.7l-0.18,-0.97l-1.01,-0.99l-0.29,-1.98l-1.13,-1.75ZM784.92,393.44l2.65,1.02l3.23,-0.96l1.09,0.14l0.15,3.06l-0.85,1.13l-0.17,1.63l-0.87,-0.24l-1.57,1.91l-1.68,-0.18l-1.4,-2.36l-0.37,-2.04l-1.39,-2.51l0.04,-0.8l1.15,0.18Z"
                              data-code="AU" fill="#d0e0f2" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M507.76,203.05l0.4,-0.78l0.18,0.4l-0.33,1.03l0.52,0.44l0.68,-0.22l-0.86,3.6l-1.16,-3.32l0.59,-0.74l-0.03,-0.41ZM508.73,200.34l0.37,-1.02l0.64,0.0l0.52,-0.51l-0.49,1.53l-0.56,-0.24l-0.48,0.23Z"
                              data-code="IL" fill="#f7fafd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M623.34,207.03l-1.24,1.04l-0.97,2.55l0.22,0.51l8.04,3.87l3.42,0.37l1.57,1.38l4.92,0.88l2.18,-0.04l0.38,-0.3l0.29,-1.24l-0.32,-1.64l0.14,-0.87l0.82,-0.31l0.45,2.48l2.28,1.02l1.77,-0.38l4.14,0.1l0.38,-0.36l0.18,-1.66l-0.5,-0.65l1.37,-0.29l2.25,-1.99l2.7,-1.62l1.93,0.62l1.8,-0.98l0.79,1.14l-0.68,0.91l0.26,0.63l2.42,0.36l0.09,0.47l-0.83,0.75l0.13,1.07l-1.52,-0.29l-3.24,1.86l-0.13,1.78l-1.32,2.14l-0.18,1.39l-0.93,1.82l-1.64,-0.5l-0.52,0.37l-0.09,2.63l-0.56,1.11l0.19,0.81l-0.53,0.27l-1.18,-3.73l-1.08,-0.27l-0.38,0.31l-0.24,1.0l-0.66,-0.66l0.54,-1.06l1.22,-0.34l1.15,-2.25l-0.24,-0.56l-1.57,-0.47l-4.34,-0.28l-0.18,-1.56l-0.35,-0.35l-1.11,-0.12l-1.91,-1.12l-0.56,0.17l-0.88,1.82l0.11,0.49l1.36,1.07l-1.09,0.69l-0.69,1.11l0.18,0.56l1.24,0.57l-0.32,1.54l0.85,1.94l0.36,2.01l-0.22,0.59l-4.58,0.52l-0.33,0.42l0.13,1.8l-1.17,1.36l-3.65,1.81l-2.79,3.03l-4.32,3.28l-0.18,1.27l-4.65,1.79l-0.77,2.16l0.64,5.3l-1.06,2.49l-0.01,3.94l-1.24,0.28l-1.14,1.93l0.39,0.84l-1.68,0.53l-1.04,1.83l-0.65,0.47l-2.06,-2.05l-2.1,-6.02l-2.2,-3.64l-1.05,-4.75l-2.29,-3.57l-1.76,-8.2l0.01,-3.11l-0.49,-2.53l-0.55,-0.29l-3.53,1.52l-1.53,-0.27l-2.86,-2.77l0.85,-0.67l0.08,-0.55l-0.74,-1.03l-2.67,-2.06l1.24,-1.32l5.34,0.01l0.39,-0.49l-0.5,-2.29l-1.42,-1.46l-0.27,-1.93l-1.43,-1.2l2.31,-2.37l3.05,0.06l2.62,-2.85l1.6,-2.81l2.4,-2.73l0.07,-2.04l1.97,-1.48l-0.02,-0.65l-1.93,-1.31l-0.82,-1.78l-0.8,-2.21l0.9,-0.89l3.59,0.65l2.92,-0.42l2.33,-2.19l2.31,2.85l-0.24,2.13l0.99,1.59l-0.05,0.82l-1.34,-0.28l-0.47,0.48l0.7,3.06l2.62,1.99l2.99,1.65Z"
                              data-code="IN" fill="#c7daf0" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M495.56,296.42l2.8,-3.12l-0.02,-0.81l-0.64,-1.3l0.68,-0.52l0.14,-1.47l-0.76,-1.25l0.31,-0.11l2.26,0.03l-0.51,2.76l0.76,1.3l0.5,0.12l1.05,-0.53l1.19,-0.12l0.61,0.24l1.43,-0.62l0.1,-0.67l-0.71,-0.62l1.57,-1.7l8.65,4.86l0.32,1.53l3.34,2.33l-1.05,2.8l0.13,1.61l1.63,1.12l-0.6,1.76l-0.01,2.33l1.89,4.03l0.57,0.43l-1.46,1.08l-2.61,0.94l-1.43,-0.04l-1.06,0.77l-2.29,0.36l-2.87,-0.68l-0.83,0.07l-0.63,-0.75l-0.31,-2.78l-1.32,-1.35l-3.25,-0.77l-3.96,-1.58l-1.18,-2.41l-0.32,-1.75l-1.76,-1.49l0.42,-1.05l-0.44,-0.89l0.08,-0.96l-0.46,-0.58l0.06,-0.56Z"
                              data-code="TZ" fill="#fefeff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M539.29,175.73l1.33,0.32l1.94,-1.8l2.3,3.34l1.43,0.43l-1.26,0.15l-0.35,0.32l-0.8,3.14l-0.99,0.96l0.05,1.11l-1.26,-1.13l0.7,-1.18l-0.04,-0.47l-0.74,-0.86l-1.48,0.15l-2.34,1.71l-0.03,-1.27l-2.03,-1.35l0.47,-0.62l-0.08,-0.56l-1.03,-0.79l0.29,-0.43l-0.14,-0.58l-1.13,-0.86l1.89,0.68l1.69,0.06l0.37,-0.87l-0.81,-1.37l0.42,0.06l1.63,1.72ZM533.78,180.57l0.61,0.46l0.69,-0.0l0.59,1.15l-0.68,-0.15l-1.21,-1.45Z"
                              data-code="AZ" fill="#fdfefe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M405.08,135.42l0.35,2.06l-1.75,2.78l-4.22,1.88l-2.84,-0.4l1.73,-3.0l-1.18,-3.53l4.6,-3.74l0.32,1.15l-0.49,1.74l0.4,0.51l1.47,-0.04l1.6,0.6Z"
                              data-code="IE" fill="#f7fafd" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M756.47,287.89l0.69,4.01l2.79,1.78l0.51,-0.1l2.04,-2.59l2.71,-1.43l2.05,-0.0l3.9,1.73l2.46,0.45l0.08,15.12l-1.75,-1.54l-2.54,-0.51l-0.88,0.71l-2.32,0.06l0.69,-1.33l1.45,-0.64l0.23,-0.46l-0.65,-2.74l-1.24,-2.21l-5.04,-2.29l-2.09,-0.23l-3.68,-2.27l-0.55,0.13l-0.65,1.07l-0.52,0.12l-0.55,-1.89l-1.21,-0.78l1.84,-0.62l1.72,0.05l0.39,-0.52l-0.21,-0.66l-0.38,-0.28l-3.45,-0.0l-1.13,-1.48l-2.1,-0.43l-0.52,-0.6l2.69,-0.48l1.28,-0.78l3.66,0.94l0.3,0.71ZM757.91,300.34l-0.62,0.82l-0.1,-0.8l0.59,-1.12l0.13,1.1ZM747.38,292.98l0.34,0.72l-1.22,-0.57l-4.68,-0.1l0.27,-0.62l2.78,-0.09l2.52,0.67ZM741.05,285.25l-0.67,-2.88l0.64,-2.01l0.41,0.86l1.21,0.18l0.16,0.7l-0.1,1.68l-0.84,-0.16l-0.46,0.3l-0.34,1.34ZM739.05,293.5l-0.5,0.44l-1.34,-0.36l-0.17,-0.37l1.73,-0.08l0.27,0.36ZM721.45,284.51l-0.19,1.97l2.24,2.23l0.54,0.02l1.27,-1.07l2.75,-0.5l-0.9,1.21l-2.11,0.93l-0.16,0.6l2.22,3.01l-0.3,1.07l1.36,1.74l-2.26,0.85l-0.28,-0.31l0.12,-1.19l-1.64,-1.34l0.17,-2.23l-0.56,-0.39l-1.67,0.76l-0.23,0.39l0.3,6.17l-1.1,0.25l-0.69,-0.47l0.64,-2.21l-0.39,-2.42l-0.39,-0.34l-0.8,-0.01l-0.58,-1.29l0.98,-1.6l0.35,-1.96l1.32,-3.87ZM728.59,296.27l0.38,0.49l-0.02,1.28l-0.88,0.49l-0.53,-0.47l1.04,-1.79ZM729.04,286.98l0.27,-0.05l-0.02,0.13l-0.24,-0.08ZM721.68,284.05l0.16,-0.32l1.89,-1.65l1.83,0.68l3.16,0.35l2.94,-0.1l2.39,-1.66l-1.73,2.13l-1.66,0.43l-2.41,-0.48l-4.17,0.13l-2.39,0.51ZM730.55,310.47l1.11,-1.93l2.03,-0.82l0.08,0.62l-1.45,1.67l-1.77,0.46ZM728.12,305.88l-0.1,0.38l-3.46,0.66l-2.91,-0.27l-0.0,-0.25l1.54,-0.41l1.66,0.73l1.67,-0.19l1.61,-0.65ZM722.9,310.24l-0.64,0.03l-2.26,-1.2l1.11,-0.24l1.78,1.41ZM716.26,305.77l0.88,0.51l1.28,-0.17l0.2,0.35l-4.65,0.73l0.39,-0.67l1.15,-0.02l0.75,-0.73ZM711.66,293.84l-0.38,-0.16l-2.54,1.01l-1.12,-1.44l-1.69,-0.13l-1.16,-0.75l-3.04,0.77l-1.1,-1.15l-3.31,-0.11l-0.35,-3.05l-1.35,-0.95l-1.11,-1.98l-0.33,-2.06l0.27,-2.14l0.9,-1.01l0.37,1.15l2.09,1.49l1.53,-0.48l1.82,0.08l1.38,-1.19l1.0,-0.18l2.28,0.67l2.26,-0.53l1.52,-3.64l1.01,-0.99l0.78,-2.57l4.1,0.3l-1.11,1.77l0.02,0.46l1.7,2.2l-0.23,1.39l2.07,1.71l-2.33,0.42l-0.88,1.9l0.1,2.05l-2.4,1.9l-0.06,2.45l-0.7,2.79ZM692.58,302.03l0.35,0.26l4.8,0.25l0.78,-0.97l4.17,1.09l1.13,1.68l3.69,0.45l2.13,1.04l-1.8,0.6l-2.77,-0.99l-4.8,-0.12l-5.24,-1.41l-1.84,-0.25l-1.11,0.3l-4.26,-0.97l-0.7,-1.14l-1.59,-0.13l1.18,-1.65l2.74,0.13l2.87,1.13l0.26,0.68ZM685.53,299.17l-2.22,0.04l-2.06,-2.03l-3.15,-2.01l-2.93,-3.51l-3.11,-5.33l-2.2,-2.12l-1.64,-4.06l-2.32,-1.69l-1.27,-2.07l-1.96,-1.5l-2.51,-2.65l-0.11,-0.66l4.81,0.53l2.15,2.38l3.31,2.74l2.35,2.66l2.7,0.17l1.95,1.59l1.54,2.17l1.59,0.95l-0.84,1.71l0.15,0.52l1.44,0.87l0.79,0.1l0.4,1.58l0.87,1.4l1.96,0.39l1.0,1.31l-0.6,3.01l-0.09,3.5Z"
                              data-code="ID" fill="#e4edf8" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path
                              d="M492.5,162.44l1.28,-2.49l1.82,0.19l0.66,-0.23l0.09,-0.71l-0.25,-0.75l-0.79,-0.72l-0.33,-1.21l-0.86,-0.62l-0.02,-1.19l-1.13,-0.86l-1.15,-0.19l-2.04,-1.0l-1.66,0.32l-0.66,0.47l-0.92,-0.0l-0.84,0.78l-2.48,0.7l-1.18,-0.71l-3.07,-0.36l-0.89,0.43l-0.24,-0.55l-1.11,-0.7l0.35,-0.93l1.26,-1.02l-0.54,-1.23l2.04,-2.43l1.4,-0.62l0.25,-1.19l-1.04,-2.39l0.83,-0.13l1.28,-0.84l1.8,-0.07l2.47,0.26l2.86,0.81l1.88,0.06l0.86,0.44l1.04,-0.41l0.77,0.66l2.18,-0.15l0.92,0.3l0.52,-0.34l0.15,-1.53l0.56,-0.54l2.85,-0.05l0.84,-0.72l3.04,-0.18l1.23,1.46l-0.48,0.77l0.21,1.03l0.36,0.32l1.8,0.14l0.93,2.08l3.18,1.15l1.94,-0.45l1.67,1.49l1.4,-0.03l3.35,0.96l0.02,0.54l-0.96,1.59l0.47,1.97l-0.26,0.7l-2.36,0.28l-1.29,0.89l-0.23,1.38l-1.83,0.27l-1.58,0.97l-2.41,0.21l-2.16,1.17l-0.21,0.38l0.34,2.26l1.23,0.75l2.13,-0.08l-0.14,0.31l-2.65,0.53l-3.23,1.69l-0.87,-0.39l0.42,-1.1l-0.25,-0.52l-2.21,-0.73l2.35,-1.06l0.12,-0.65l-0.93,-0.82l-3.62,-0.74l-0.13,-0.89l-0.46,-0.34l-2.61,0.59l-0.91,1.69l-1.71,2.04l-0.86,-0.4l-1.62,0.27Z"
                              data-code="UA" fill="#fafbfe" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                            <path d="M549.33,221.64l-0.76,-0.23l-0.14,-1.64l0.84,-1.29l0.47,0.52l0.04,1.34l-0.45,1.3Z" data-code="QA" fill="#fafcfe"
                              fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd" class="jvm-region jvm-element"></path>
                            <path
                              d="M508.58,318.75l-0.34,-2.57l0.51,-2.05l3.55,0.63l2.5,-0.38l1.02,-0.76l1.49,0.01l2.74,-0.98l1.66,-1.2l0.5,9.24l0.41,1.23l-0.68,1.67l-0.93,1.71l-1.5,1.5l-5.16,2.28l-2.78,2.73l-1.02,0.53l-1.71,1.8l-0.98,0.57l-0.35,2.41l1.16,1.94l0.49,2.17l0.43,0.31l-0.06,2.06l-0.39,1.17l0.5,0.72l-0.25,0.73l-0.92,0.83l-5.12,2.39l-1.22,1.36l0.21,1.13l0.58,0.39l-0.11,0.72l-1.22,-0.01l-0.73,-2.97l0.42,-3.09l-1.78,-5.37l2.49,-2.81l0.69,-1.89l0.44,-0.43l0.28,-1.53l-0.39,-0.93l0.59,-3.65l-0.01,-3.26l-1.49,-1.16l-1.2,-0.22l-1.74,-1.17l-1.92,0.01l-0.29,-2.08l7.06,-1.96l1.28,1.09l0.89,-0.1l0.67,0.44l0.1,0.73l-0.51,1.29l0.19,1.81l1.75,1.83l0.65,-0.13l0.71,-1.65l1.17,-0.86l-0.26,-3.47l-1.05,-1.85l-1.04,-0.94Z"
                              data-code="MZ" fill="#ffffff" fill-opacity="1" stroke="#dadfe5" stroke-width="2" fill-rule="evenodd"
                              class="jvm-region jvm-element"></path>
                          </g>
                          <g id="jvm-regions-labels-group"></g>
                          <g id="jvm-lines-group"></g>
                          <g id="jvm-markers-group"></g>
                          <g id="jvm-markers-labels-group"></g>
                        </svg></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row row-cards">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <p class="mb-3">Using Storage <strong>6854.45 MB </strong>of 8 GB</p>
                      <div class="progress progress-separated mb-3">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 44%" aria-label="Regular"></div>
                        <div class="progress-bar bg-info" role="progressbar" style="width: 19%" aria-label="System"></div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 9%" aria-label="Shared"></div>
                      </div>
                      <div class="row">
                        <div class="d-flex align-items-center col-auto pe-2">
                          <span class="legend bg-primary me-2"></span>
                          <span>Regular</span>
                          <span class="d-none d-md-inline d-lg-none d-xxl-inline text-muted ms-2">915MB</span>
                        </div>
                        <div class="d-flex align-items-center col-auto px-2">
                          <span class="legend bg-info me-2"></span>
                          <span>System</span>
                          <span class="d-none d-md-inline d-lg-none d-xxl-inline text-muted ms-2">415MB</span>
                        </div>
                        <div class="d-flex align-items-center col-auto px-2">
                          <span class="legend bg-success me-2"></span>
                          <span>Shared</span>
                          <span class="d-none d-md-inline d-lg-none d-xxl-inline text-muted ms-2">201MB</span>
                        </div>
                        <div class="d-flex align-items-center col-auto ps-2">
                          <span class="legend me-2"></span>
                          <span>Free</span>
                          <span class="d-none d-md-inline d-lg-none d-xxl-inline text-muted ms-2">612MB</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card" style="height: 28rem">
                    <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                      <div class="divide-y">
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar">JL</span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Jeffie Lewzey</strong> commented on your <strong>"I'm not a witch."</strong> post.
                              </div>
                              <div class="text-muted">yesterday</div>
                            </div>
                            <div class="align-self-center col-auto">
                              <div class="badge bg-primary"></div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar" style="background-image: url(./static/avatars/002m.jpg)"></span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                It's <strong>Mallory Hulme</strong>'s birthday. Wish him well!
                              </div>
                              <div class="text-muted">2 days ago</div>
                            </div>
                            <div class="align-self-center col-auto">
                              <div class="badge bg-primary"></div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar" style="background-image: url(./static/avatars/003m.jpg)"></span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Dunn Slane</strong> posted <strong>"Well, what do you want?"</strong>.
                              </div>
                              <div class="text-muted">today</div>
                            </div>
                            <div class="align-self-center col-auto">
                              <div class="badge bg-primary"></div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar" style="background-image: url(./static/avatars/000f.jpg)"></span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Emmy Levet</strong> created a new project <strong>Morning alarm clock</strong>.
                              </div>
                              <div class="text-muted">4 days ago</div>
                            </div>
                            <div class="align-self-center col-auto">
                              <div class="badge bg-primary"></div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar" style="background-image: url(./static/avatars/001f.jpg)"></span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Maryjo Lebarree</strong> liked your photo.
                              </div>
                              <div class="text-muted">2 days ago</div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar">EP</span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Egan Poetz</strong> registered new client as <strong>Trilia</strong>.
                              </div>
                              <div class="text-muted">yesterday</div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar" style="background-image: url(./static/avatars/002f.jpg)"></span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Kellie Skingley</strong> closed a new deal on project <strong>Pen Pineapple Apple Pen</strong>.
                              </div>
                              <div class="text-muted">2 days ago</div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar" style="background-image: url(./static/avatars/003f.jpg)"></span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Christabel Charlwood</strong> created a new project for <strong>Wikibox</strong>.
                              </div>
                              <div class="text-muted">4 days ago</div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar">HS</span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Haskel Shelper</strong> change status of <strong>Tabler Icons</strong> from <strong>open</strong> to
                                <strong>closed</strong>.
                              </div>
                              <div class="text-muted">today</div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar" style="background-image: url(./static/avatars/006m.jpg)"></span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Lorry Mion</strong> liked <strong>Tabler UI Kit</strong>.
                              </div>
                              <div class="text-muted">yesterday</div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar" style="background-image: url(./static/avatars/004f.jpg)"></span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Leesa Beaty</strong> posted new video.
                              </div>
                              <div class="text-muted">2 days ago</div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar" style="background-image: url(./static/avatars/007m.jpg)"></span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Perren Keemar</strong> and 3 others followed you.
                              </div>
                              <div class="text-muted">2 days ago</div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar">SA</span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Sunny Airey</strong> upload 3 new photos to category <strong>Inspirations</strong>.
                              </div>
                              <div class="text-muted">2 days ago</div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar" style="background-image: url(./static/avatars/009m.jpg)"></span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Geoffry Flaunders</strong> made a <strong>$10</strong> donation.
                              </div>
                              <div class="text-muted">2 days ago</div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar" style="background-image: url(./static/avatars/010m.jpg)"></span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Thatcher Keel</strong> created a profile.
                              </div>
                              <div class="text-muted">3 days ago</div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar" style="background-image: url(./static/avatars/005f.jpg)"></span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Dyann Escala</strong> hosted the event <strong>Tabler UI Birthday</strong>.
                              </div>
                              <div class="text-muted">4 days ago</div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar" style="background-image: url(./static/avatars/006f.jpg)"></span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Avivah Mugleston</strong> mentioned you on <strong>Best of 2020</strong>.
                              </div>
                              <div class="text-muted">2 days ago</div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-auto">
                              <span class="avatar">AA</span>
                            </div>
                            <div class="col">
                              <div class="text-truncate">
                                <strong>Arlie Armstead</strong> sent a Review Request to <strong>Amanda Blake</strong>.
                              </div>
                              <div class="text-muted">2 days ago</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="card-title">Development activity</div>
                </div>
                <div class="position-relative">
                  <div class="position-absolute w-75 left-0 top-0 mt-1 px-3">
                    <div class="row g-2">
                      <div class="col-auto">
                        <div class="chart-sparkline chart-sparkline-square" id="sparkline-activity" style="min-height: 41px;">
                          <div id="apexcharts375rdnaz" class="apexcharts-canvas apexcharts375rdnaz apexcharts-theme-light"
                            style="width: 40px; height: 41px;"><svg id="SvgjsSvg2553" width="40" height="41" xmlns="http://www.w3.org/2000/svg"
                              version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                              xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;">
                              <foreignObject x="0" y="0" width="40" height="41">
                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div>
                              </foreignObject>
                              <g id="SvgjsG2555" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                <defs id="SvgjsDefs2554">
                                  <clipPath id="gridRectMask375rdnaz">
                                    <rect id="SvgjsRect2556" width="46" height="42" x="-3" y="-1" rx="0"
                                      ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                  </clipPath>
                                  <clipPath id="forecastMask375rdnaz"></clipPath>
                                  <clipPath id="nonForecastMask375rdnaz"></clipPath>
                                  <clipPath id="gridRectMarkerMask375rdnaz">
                                    <rect id="SvgjsRect2557" width="44" height="44" x="-2" y="-2" rx="0"
                                      ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                  </clipPath>
                                </defs>
                                <g id="SvgjsG2558" class="apexcharts-radialbar">
                                  <g id="SvgjsG2559">
                                    <g id="SvgjsG2560" class="apexcharts-tracks">
                                      <g id="SvgjsG2561" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                        <path id="apexcharts-radialbarTrack-0"
                                          d="M 20 4.146341463414631 A 15.85365853658537 15.85365853658537 0 1 1 19.99723301461454 4.1463417048796565"
                                          fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt"
                                          stroke-width="2.3658536585365857" stroke-dasharray="0" class="apexcharts-radialbar-area"
                                          data:pathOrig="M 20 4.146341463414631 A 15.85365853658537 15.85365853658537 0 1 1 19.99723301461454 4.1463417048796565">
                                        </path>
                                      </g>
                                    </g>
                                    <g id="SvgjsG2563">
                                      <g id="SvgjsG2565" class="apexcharts-series apexcharts-radial-series" seriesName="series-1" rel="1"
                                        data:realIndex="0">
                                        <path id="SvgjsPath2566"
                                          d="M 20 4.146341463414631 A 15.85365853658537 15.85365853658537 0 0 1 32.82587917911502 29.31854668268555"
                                          fill="none" fill-opacity="0.85" stroke="rgba(32,107,196,0.85)" stroke-opacity="1" stroke-linecap="butt"
                                          stroke-width="2.439024390243903" stroke-dasharray="0"
                                          class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="126" data:value="35" index="0"
                                          j="0"
                                          data:pathOrig="M 20 4.146341463414631 A 15.85365853658537 15.85365853658537 0 0 1 32.82587917911502 29.31854668268555">
                                        </path>
                                      </g>
                                      <circle id="SvgjsCircle2564" r="14.670731707317076" cx="20" cy="20"
                                        class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                    </g>
                                  </g>
                                </g>
                                <line id="SvgjsLine2567" x1="0" y1="0" x2="40" y2="0" stroke="#b6b6b6"
                                  stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine2568" x1="0" y1="0" x2="40" y2="0" stroke-dasharray="0"
                                  stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                              </g>
                            </svg></div>
                        </div>
                      </div>
                      <div class="col">
                        <div>Today's Earning: $4,262.40</div>
                        <div class="text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline text-green" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 17l6 -6l4 4l8 -8"></path>
                            <path d="M14 7l7 0l0 7"></path>
                          </svg>
                          +5% more than yesterday
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="chart-development-activity" style="min-height: 192px;">
                    <div id="apexchartseegzv4n6" class="apexcharts-canvas apexchartseegzv4n6 apexcharts-theme-light" style="width: 634px; height: 192px;">
                      <svg id="SvgjsSvg2570" width="634" height="192" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                        transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;">
                        <foreignObject x="0" y="0" width="634" height="192">
                          <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 96px;"></div>
                        </foreignObject>
                        <rect id="SvgjsRect2575" width="0" height="0" x="0" y="0" rx="0" ry="0"
                          opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                        <g id="SvgjsG2643" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                        <g id="SvgjsG2572" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                          <defs id="SvgjsDefs2571">
                            <clipPath id="gridRectMaskeegzv4n6">
                              <rect id="SvgjsRect2607" width="640" height="194" x="-3" y="-1" rx="0" ry="0"
                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                            </clipPath>
                            <clipPath id="forecastMaskeegzv4n6"></clipPath>
                            <clipPath id="nonForecastMaskeegzv4n6"></clipPath>
                            <clipPath id="gridRectMarkerMaskeegzv4n6">
                              <rect id="SvgjsRect2608" width="638" height="196" x="-2" y="-2" rx="0" ry="0"
                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                            </clipPath>
                          </defs>
                          <line id="SvgjsLine2576" x1="0" y1="0" x2="0" y2="192" stroke="#b6b6b6" stroke-dasharray="3"
                            stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="192"
                            fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                          <g id="SvgjsG2615" class="apexcharts-grid">
                            <g id="SvgjsG2616" class="apexcharts-gridlines-horizontal" style="display: none;">
                              <line id="SvgjsLine2619" x1="0" y1="0" x2="634" y2="0" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2620" x1="0" y1="48" x2="634" y2="48" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2621" x1="0" y1="96" x2="634" y2="96" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2622" x1="0" y1="144" x2="634" y2="144" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                              <line id="SvgjsLine2623" x1="0" y1="192" x2="634" y2="192" stroke="#e0e0e0"
                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                            </g>
                            <g id="SvgjsG2617" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                            <line id="SvgjsLine2625" x1="0" y1="192" x2="634" y2="192" stroke="transparent"
                              stroke-dasharray="0" stroke-linecap="butt"></line>
                            <line id="SvgjsLine2624" x1="0" y1="1" x2="0" y2="192" stroke="transparent"
                              stroke-dasharray="0" stroke-linecap="butt"></line>
                          </g>
                          <g id="SvgjsG2609" class="apexcharts-area-series apexcharts-plot-series">
                            <g id="SvgjsG2610" class="apexcharts-series" seriesName="Purchases" data:longestSeries="true" rel="1"
                              data:realIndex="0">
                              <path id="SvgjsPath2613"
                                d="M 0 192 L 0 184.8C 7.651724137931034 184.8 14.210344827586209 180 21.862068965517242 180C 29.513793103448275 180 36.07241379310345 182.4 43.724137931034484 182.4C 51.37586206896552 182.4 57.934482758620696 177.6 65.58620689655173 177.6C 73.23793103448276 177.6 79.79655172413794 175.2 87.44827586206897 175.2C 95.1 175.2 101.65862068965518 180 109.3103448275862 180C 116.96206896551725 180 123.52068965517242 177.6 131.17241379310346 177.6C 138.8241379310345 177.6 145.38275862068966 172.8 153.0344827586207 172.8C 160.68620689655174 172.8 167.2448275862069 134.4 174.89655172413794 134.4C 182.54827586206898 134.4 189.10689655172413 175.2 196.75862068965517 175.2C 204.41034482758621 175.2 210.96896551724137 163.2 218.6206896551724 163.2C 226.27241379310345 163.2 232.8310344827586 180 240.48275862068965 180C 248.1344827586207 180 254.69310344827588 177.6 262.3448275862069 177.6C 269.99655172413793 177.6 276.5551724137931 184.8 284.2068965517241 184.8C 291.8586206896552 184.8 298.4172413793103 172.8 306.0689655172414 172.8C 313.7206896551724 172.8 320.2793103448276 182.4 327.9310344827586 182.4C 335.5827586206897 182.4 342.1413793103448 158.4 349.7931034482759 158.4C 357.4448275862069 158.4 364.00344827586207 120 371.6551724137931 120C 379.30689655172415 120 385.8655172413793 151.2 393.51724137931035 151.2C 401.16896551724136 151.2 407.72758620689655 146.4 415.37931034482756 146.4C 423.0310344827586 146.4 429.58965517241376 156 437.2413793103448 156C 444.89310344827584 156 451.451724137931 158.4 459.10344827586204 158.4C 466.7551724137931 158.4 473.31379310344823 132 480.9655172413793 132C 488.61724137931037 132 495.1758620689655 115.2 502.82758620689657 115.2C 510.47931034482764 115.2 517.0379310344828 96 524.6896551724138 96C 532.3413793103449 96 538.9 60 546.551724137931 60C 554.2034482758621 60 560.7620689655172 48 568.4137931034483 48C 576.0655172413793 48 582.6241379310344 76.80000000000001 590.2758620689655 76.80000000000001C 597.9275862068965 76.80000000000001 604.4862068965517 67.2 612.1379310344828 67.2C 619.7896551724139 67.2 626.3482758620689 24 634 24C 634 24 634 24 634 192M 634 24z"
                                fill="rgba(32,107,196,0.16)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskeegzv4n6)"
                                pathTo="M 0 192 L 0 184.8C 7.651724137931034 184.8 14.210344827586209 180 21.862068965517242 180C 29.513793103448275 180 36.07241379310345 182.4 43.724137931034484 182.4C 51.37586206896552 182.4 57.934482758620696 177.6 65.58620689655173 177.6C 73.23793103448276 177.6 79.79655172413794 175.2 87.44827586206897 175.2C 95.1 175.2 101.65862068965518 180 109.3103448275862 180C 116.96206896551725 180 123.52068965517242 177.6 131.17241379310346 177.6C 138.8241379310345 177.6 145.38275862068966 172.8 153.0344827586207 172.8C 160.68620689655174 172.8 167.2448275862069 134.4 174.89655172413794 134.4C 182.54827586206898 134.4 189.10689655172413 175.2 196.75862068965517 175.2C 204.41034482758621 175.2 210.96896551724137 163.2 218.6206896551724 163.2C 226.27241379310345 163.2 232.8310344827586 180 240.48275862068965 180C 248.1344827586207 180 254.69310344827588 177.6 262.3448275862069 177.6C 269.99655172413793 177.6 276.5551724137931 184.8 284.2068965517241 184.8C 291.8586206896552 184.8 298.4172413793103 172.8 306.0689655172414 172.8C 313.7206896551724 172.8 320.2793103448276 182.4 327.9310344827586 182.4C 335.5827586206897 182.4 342.1413793103448 158.4 349.7931034482759 158.4C 357.4448275862069 158.4 364.00344827586207 120 371.6551724137931 120C 379.30689655172415 120 385.8655172413793 151.2 393.51724137931035 151.2C 401.16896551724136 151.2 407.72758620689655 146.4 415.37931034482756 146.4C 423.0310344827586 146.4 429.58965517241376 156 437.2413793103448 156C 444.89310344827584 156 451.451724137931 158.4 459.10344827586204 158.4C 466.7551724137931 158.4 473.31379310344823 132 480.9655172413793 132C 488.61724137931037 132 495.1758620689655 115.2 502.82758620689657 115.2C 510.47931034482764 115.2 517.0379310344828 96 524.6896551724138 96C 532.3413793103449 96 538.9 60 546.551724137931 60C 554.2034482758621 60 560.7620689655172 48 568.4137931034483 48C 576.0655172413793 48 582.6241379310344 76.80000000000001 590.2758620689655 76.80000000000001C 597.9275862068965 76.80000000000001 604.4862068965517 67.2 612.1379310344828 67.2C 619.7896551724139 67.2 626.3482758620689 24 634 24C 634 24 634 24 634 192M 634 24z"
                                pathFrom="M -1 192 L -1 192 L 21.862068965517242 192 L 43.724137931034484 192 L 65.58620689655173 192 L 87.44827586206897 192 L 109.3103448275862 192 L 131.17241379310346 192 L 153.0344827586207 192 L 174.89655172413794 192 L 196.75862068965517 192 L 218.6206896551724 192 L 240.48275862068965 192 L 262.3448275862069 192 L 284.2068965517241 192 L 306.0689655172414 192 L 327.9310344827586 192 L 349.7931034482759 192 L 371.6551724137931 192 L 393.51724137931035 192 L 415.37931034482756 192 L 437.2413793103448 192 L 459.10344827586204 192 L 480.9655172413793 192 L 502.82758620689657 192 L 524.6896551724138 192 L 546.551724137931 192 L 568.4137931034483 192 L 590.2758620689655 192 L 612.1379310344828 192 L 634 192">
                              </path>
                              <path id="SvgjsPath2614"
                                d="M 0 184.8C 7.651724137931034 184.8 14.210344827586209 180 21.862068965517242 180C 29.513793103448275 180 36.07241379310345 182.4 43.724137931034484 182.4C 51.37586206896552 182.4 57.934482758620696 177.6 65.58620689655173 177.6C 73.23793103448276 177.6 79.79655172413794 175.2 87.44827586206897 175.2C 95.1 175.2 101.65862068965518 180 109.3103448275862 180C 116.96206896551725 180 123.52068965517242 177.6 131.17241379310346 177.6C 138.8241379310345 177.6 145.38275862068966 172.8 153.0344827586207 172.8C 160.68620689655174 172.8 167.2448275862069 134.4 174.89655172413794 134.4C 182.54827586206898 134.4 189.10689655172413 175.2 196.75862068965517 175.2C 204.41034482758621 175.2 210.96896551724137 163.2 218.6206896551724 163.2C 226.27241379310345 163.2 232.8310344827586 180 240.48275862068965 180C 248.1344827586207 180 254.69310344827588 177.6 262.3448275862069 177.6C 269.99655172413793 177.6 276.5551724137931 184.8 284.2068965517241 184.8C 291.8586206896552 184.8 298.4172413793103 172.8 306.0689655172414 172.8C 313.7206896551724 172.8 320.2793103448276 182.4 327.9310344827586 182.4C 335.5827586206897 182.4 342.1413793103448 158.4 349.7931034482759 158.4C 357.4448275862069 158.4 364.00344827586207 120 371.6551724137931 120C 379.30689655172415 120 385.8655172413793 151.2 393.51724137931035 151.2C 401.16896551724136 151.2 407.72758620689655 146.4 415.37931034482756 146.4C 423.0310344827586 146.4 429.58965517241376 156 437.2413793103448 156C 444.89310344827584 156 451.451724137931 158.4 459.10344827586204 158.4C 466.7551724137931 158.4 473.31379310344823 132 480.9655172413793 132C 488.61724137931037 132 495.1758620689655 115.2 502.82758620689657 115.2C 510.47931034482764 115.2 517.0379310344828 96 524.6896551724138 96C 532.3413793103449 96 538.9 60 546.551724137931 60C 554.2034482758621 60 560.7620689655172 48 568.4137931034483 48C 576.0655172413793 48 582.6241379310344 76.80000000000001 590.2758620689655 76.80000000000001C 597.9275862068965 76.80000000000001 604.4862068965517 67.2 612.1379310344828 67.2C 619.7896551724139 67.2 626.3482758620689 24 634 24"
                                fill="none" fill-opacity="1" stroke="#206bc4" stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskeegzv4n6)"
                                pathTo="M 0 184.8C 7.651724137931034 184.8 14.210344827586209 180 21.862068965517242 180C 29.513793103448275 180 36.07241379310345 182.4 43.724137931034484 182.4C 51.37586206896552 182.4 57.934482758620696 177.6 65.58620689655173 177.6C 73.23793103448276 177.6 79.79655172413794 175.2 87.44827586206897 175.2C 95.1 175.2 101.65862068965518 180 109.3103448275862 180C 116.96206896551725 180 123.52068965517242 177.6 131.17241379310346 177.6C 138.8241379310345 177.6 145.38275862068966 172.8 153.0344827586207 172.8C 160.68620689655174 172.8 167.2448275862069 134.4 174.89655172413794 134.4C 182.54827586206898 134.4 189.10689655172413 175.2 196.75862068965517 175.2C 204.41034482758621 175.2 210.96896551724137 163.2 218.6206896551724 163.2C 226.27241379310345 163.2 232.8310344827586 180 240.48275862068965 180C 248.1344827586207 180 254.69310344827588 177.6 262.3448275862069 177.6C 269.99655172413793 177.6 276.5551724137931 184.8 284.2068965517241 184.8C 291.8586206896552 184.8 298.4172413793103 172.8 306.0689655172414 172.8C 313.7206896551724 172.8 320.2793103448276 182.4 327.9310344827586 182.4C 335.5827586206897 182.4 342.1413793103448 158.4 349.7931034482759 158.4C 357.4448275862069 158.4 364.00344827586207 120 371.6551724137931 120C 379.30689655172415 120 385.8655172413793 151.2 393.51724137931035 151.2C 401.16896551724136 151.2 407.72758620689655 146.4 415.37931034482756 146.4C 423.0310344827586 146.4 429.58965517241376 156 437.2413793103448 156C 444.89310344827584 156 451.451724137931 158.4 459.10344827586204 158.4C 466.7551724137931 158.4 473.31379310344823 132 480.9655172413793 132C 488.61724137931037 132 495.1758620689655 115.2 502.82758620689657 115.2C 510.47931034482764 115.2 517.0379310344828 96 524.6896551724138 96C 532.3413793103449 96 538.9 60 546.551724137931 60C 554.2034482758621 60 560.7620689655172 48 568.4137931034483 48C 576.0655172413793 48 582.6241379310344 76.80000000000001 590.2758620689655 76.80000000000001C 597.9275862068965 76.80000000000001 604.4862068965517 67.2 612.1379310344828 67.2C 619.7896551724139 67.2 626.3482758620689 24 634 24"
                                pathFrom="M -1 192 L -1 192 L 21.862068965517242 192 L 43.724137931034484 192 L 65.58620689655173 192 L 87.44827586206897 192 L 109.3103448275862 192 L 131.17241379310346 192 L 153.0344827586207 192 L 174.89655172413794 192 L 196.75862068965517 192 L 218.6206896551724 192 L 240.48275862068965 192 L 262.3448275862069 192 L 284.2068965517241 192 L 306.0689655172414 192 L 327.9310344827586 192 L 349.7931034482759 192 L 371.6551724137931 192 L 393.51724137931035 192 L 415.37931034482756 192 L 437.2413793103448 192 L 459.10344827586204 192 L 480.9655172413793 192 L 502.82758620689657 192 L 524.6896551724138 192 L 546.551724137931 192 L 568.4137931034483 192 L 590.2758620689655 192 L 612.1379310344828 192 L 634 192"
                                fill-rule="evenodd"></path>
                              <g id="SvgjsG2611" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                <g class="apexcharts-series-markers">
                                  <circle id="SvgjsCircle2647" r="0" cx="0" cy="0"
                                    class="apexcharts-marker wq386xmev no-pointer-events" stroke="#ffffff" fill="#206bc4" fill-opacity="1"
                                    stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                </g>
                              </g>
                            </g>
                            <g id="SvgjsG2612" class="apexcharts-datalabels" data:realIndex="0"></g>
                          </g>
                          <g id="SvgjsG2618" class="apexcharts-grid-borders" style="display: none;"></g>
                          <line id="SvgjsLine2626" x1="0" y1="0" x2="634" y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                            stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                          <line id="SvgjsLine2627" x1="0" y1="0" x2="634" y2="0" stroke-dasharray="0" stroke-width="0"
                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                          <g id="SvgjsG2628" class="apexcharts-xaxis" transform="translate(0, 0)">
                            <g id="SvgjsG2629" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                          </g>
                          <g id="SvgjsG2644" class="apexcharts-yaxis-annotations"></g>
                          <g id="SvgjsG2645" class="apexcharts-xaxis-annotations"></g>
                          <g id="SvgjsG2646" class="apexcharts-point-annotations"></g>
                        </g>
                      </svg>
                      <div class="apexcharts-tooltip apexcharts-theme-dark">
                        <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker"
                            style="background-color: rgb(32, 107, 196);"></span>
                          <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span
                                class="apexcharts-tooltip-text-y-value"></span></div>
                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span
                                class="apexcharts-tooltip-text-goals-value"></span></div>
                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span
                                class="apexcharts-tooltip-text-z-value"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                        <div class="apexcharts-yaxistooltip-text"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-table table-responsive">
                  <table class="table-vcenter table">
                    <thead>
                      <tr>
                        <th>User</th>
                        <th>Commit</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="w-1">
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                        </td>
                        <td class="td-truncate">
                          <div class="text-truncate">
                            Fix dart Sass compatibility (#29755)
                          </div>
                        </td>
                        <td class="text-nowrap text-muted">28 Nov 2019</td>
                      </tr>
                      <tr>
                        <td class="w-1">
                          <span class="avatar avatar-sm">JL</span>
                        </td>
                        <td class="td-truncate">
                          <div class="text-truncate">
                            Change deprecated html tags to text decoration classes (#29604)
                          </div>
                        </td>
                        <td class="text-nowrap text-muted">27 Nov 2019</td>
                      </tr>
                      <tr>
                        <td class="w-1">
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/002m.jpg)"></span>
                        </td>
                        <td class="td-truncate">
                          <div class="text-truncate">
                            justify-content:between ⇒ justify-content:space-between (#29734)
                          </div>
                        </td>
                        <td class="text-nowrap text-muted">26 Nov 2019</td>
                      </tr>
                      <tr>
                        <td class="w-1">
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003m.jpg)"></span>
                        </td>
                        <td class="td-truncate">
                          <div class="text-truncate">
                            Update change-version.js (#29736)
                          </div>
                        </td>
                        <td class="text-nowrap text-muted">26 Nov 2019</td>
                      </tr>
                      <tr>
                        <td class="w-1">
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000f.jpg)"></span>
                        </td>
                        <td class="td-truncate">
                          <div class="text-truncate">
                            Regenerate package-lock.json (#29730)
                          </div>
                        </td>
                        <td class="text-nowrap text-muted">25 Nov 2019</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-md">
                <div class="card-stamp card-stamp-lg">
                  <div class="card-stamp-icon bg-primary">
                    <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7">
                      </path>
                      <path d="M10 10l.01 0"></path>
                      <path d="M14 10l.01 0"></path>
                      <path d="M10 14a3.5 3.5 0 0 0 4 0"></path>
                    </svg>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-10">
                      <h3 class="h1">Tabler Icons</h3>
                      <div class="markdown text-muted">
                        All icons come from the Tabler Icons set and are MIT-licensed. Visit
                        <a href="https://tabler-icons.io" target="_blank" rel="noopener">tabler-icons.io</a>,
                        download any of the 4158 icons in SVG, PNG or&nbsp;React and use them in your favourite design tools.
                      </div>
                      <div class="mt-3">
                        <a href="https://tabler-icons.io" class="btn btn-primary" target="_blank" rel="noopener">Download icons</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Most Visited Pages</h3>
                </div>
                <div class="card-table table-responsive">
                  <table class="table-vcenter table">
                    <thead>
                      <tr>
                        <th>Page name</th>
                        <th>Visitors</th>
                        <th>Unique</th>
                        <th colspan="2">Bounce rate</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          /
                          <a href="#" class="ms-1" aria-label="Open website">
                            <!-- Download SVG icon from http://tabler-icons.io/i/link -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M9 15l6 -6"></path>
                              <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"></path>
                              <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"></path>
                            </svg>
                          </a>
                        </td>
                        <td class="text-muted">4,896</td>
                        <td class="text-muted">3,654</td>
                        <td class="text-muted">82.54%</td>
                        <td class="w-1 text-end">
                          <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-1" style="min-height: 24px;">
                            <div id="apexchartsw251l347" class="apexcharts-canvas apexchartsw251l347 apexcharts-theme-light"
                              style="width: 64px; height: 24px;"><svg id="SvgjsSvg2648" width="64" height="24" xmlns="http://www.w3.org/2000/svg"
                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;">
                                <foreignObject x="0" y="0" width="64" height="24">
                                  <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 12px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect2652" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG2685" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                <g id="SvgjsG2650" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                  <defs id="SvgjsDefs2649">
                                    <clipPath id="gridRectMaskw251l347">
                                      <rect id="SvgjsRect2654" width="70" height="26" x="-3" y="-1" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskw251l347"></clipPath>
                                    <clipPath id="nonForecastMaskw251l347"></clipPath>
                                    <clipPath id="gridRectMarkerMaskw251l347">
                                      <rect id="SvgjsRect2655" width="68" height="28" x="-2" y="-2" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                  </defs>
                                  <line id="SvgjsLine2653" x1="0" y1="0" x2="0" y2="24" stroke="#b6b6b6"
                                    stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                    width="1" height="24" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                  <g id="SvgjsG2661" class="apexcharts-grid">
                                    <g id="SvgjsG2662" class="apexcharts-gridlines-horizontal" style="display: none;">
                                      <line id="SvgjsLine2665" x1="0" y1="0" x2="64" y2="0" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2666" x1="0" y1="6" x2="64" y2="6" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2667" x1="0" y1="12" x2="64" y2="12" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2668" x1="0" y1="18" x2="64" y2="18" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2669" x1="0" y1="24" x2="64" y2="24" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG2663" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine2671" x1="0" y1="24" x2="64" y2="24" stroke="transparent"
                                      stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine2670" x1="0" y1="1" x2="0" y2="24" stroke="transparent"
                                      stroke-dasharray="0" stroke-linecap="butt"></line>
                                  </g>
                                  <g id="SvgjsG2656" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG2657" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1"
                                      data:realIndex="0">
                                      <path id="SvgjsPath2660" d="M 0 7 L 8 0 L 16 4 L 24 14 L 32 19 L 40 23 L 48 20 L 56 6 L 64 11" fill="none"
                                        fill-opacity="1" stroke="rgba(32,107,196,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                        stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskw251l347)"
                                        pathTo="M 0 7 L 8 0 L 16 4 L 24 14 L 32 19 L 40 23 L 48 20 L 56 6 L 64 11"
                                        pathFrom="M -1 24 L -1 24 L 8 24 L 16 24 L 24 24 L 32 24 L 40 24 L 48 24 L 56 24 L 64 24" fill-rule="evenodd"></path>
                                      <g id="SvgjsG2658" class="apexcharts-series-markers-wrap" data:realIndex="0"></g>
                                    </g>
                                    <g id="SvgjsG2659" class="apexcharts-datalabels" data:realIndex="0"></g>
                                  </g>
                                  <g id="SvgjsG2664" class="apexcharts-grid-borders" style="display: none;"></g>
                                  <line id="SvgjsLine2672" x1="0" y1="0" x2="64" y2="0" stroke="#b6b6b6"
                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                  <line id="SvgjsLine2673" x1="0" y1="0" x2="64" y2="0" stroke-dasharray="0"
                                    stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                  <g id="SvgjsG2674" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG2675" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                  </g>
                                  <g id="SvgjsG2686" class="apexcharts-yaxis-annotations"></g>
                                  <g id="SvgjsG2687" class="apexcharts-xaxis-annotations"></g>
                                  <g id="SvgjsG2688" class="apexcharts-point-annotations"></g>
                                </g>
                              </svg></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          /form-elements.html
                          <a href="#" class="ms-1" aria-label="Open website">
                            <!-- Download SVG icon from http://tabler-icons.io/i/link -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M9 15l6 -6"></path>
                              <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"></path>
                              <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"></path>
                            </svg>
                          </a>
                        </td>
                        <td class="text-muted">3,652</td>
                        <td class="text-muted">3,215</td>
                        <td class="text-muted">76.29%</td>
                        <td class="w-1 text-end">
                          <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-2" style="min-height: 24px;">
                            <div id="apexchartsb795fvpnf" class="apexcharts-canvas apexchartsb795fvpnf apexcharts-theme-light"
                              style="width: 64px; height: 24px;"><svg id="SvgjsSvg2689" width="64" height="24" xmlns="http://www.w3.org/2000/svg"
                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;">
                                <foreignObject x="0" y="0" width="64" height="24">
                                  <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 12px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect2693" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG2727" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                <g id="SvgjsG2691" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                  <defs id="SvgjsDefs2690">
                                    <clipPath id="gridRectMaskb795fvpnf">
                                      <rect id="SvgjsRect2695" width="70" height="26" x="-3" y="-1" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskb795fvpnf"></clipPath>
                                    <clipPath id="nonForecastMaskb795fvpnf"></clipPath>
                                    <clipPath id="gridRectMarkerMaskb795fvpnf">
                                      <rect id="SvgjsRect2696" width="68" height="28" x="-2" y="-2" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                  </defs>
                                  <line id="SvgjsLine2694" x1="0" y1="0" x2="0" y2="24" stroke="#b6b6b6"
                                    stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                    width="1" height="24" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                  <g id="SvgjsG2702" class="apexcharts-grid">
                                    <g id="SvgjsG2703" class="apexcharts-gridlines-horizontal" style="display: none;">
                                      <line id="SvgjsLine2706" x1="0" y1="0" x2="64" y2="0" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2707" x1="0" y1="4.8" x2="64" y2="4.8" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2708" x1="0" y1="9.6" x2="64" y2="9.6" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2709" x1="0" y1="14.399999999999999" x2="64" y2="14.399999999999999"
                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2710" x1="0" y1="19.2" x2="64" y2="19.2" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2711" x1="0" y1="24" x2="64" y2="24" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG2704" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine2713" x1="0" y1="24" x2="64" y2="24" stroke="transparent"
                                      stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine2712" x1="0" y1="1" x2="0" y2="24" stroke="transparent"
                                      stroke-dasharray="0" stroke-linecap="butt"></line>
                                  </g>
                                  <g id="SvgjsG2697" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG2698" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1"
                                      data:realIndex="0">
                                      <path id="SvgjsPath2701"
                                        d="M 0 11.520000000000001 L 8 13.440000000000001 L 16 5.760000000000002 L 24 2.8800000000000026 L 32 12.48 L 40 17.28 L 48 10.56 L 56 21.12 L 64 3.84"
                                        fill="none" fill-opacity="1" stroke="rgba(32,107,196,0.85)" stroke-opacity="1" stroke-linecap="round"
                                        stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0"
                                        clip-path="url(#gridRectMaskb795fvpnf)"
                                        pathTo="M 0 11.520000000000001 L 8 13.440000000000001 L 16 5.760000000000002 L 24 2.8800000000000026 L 32 12.48 L 40 17.28 L 48 10.56 L 56 21.12 L 64 3.84"
                                        pathFrom="M -1 24 L -1 24 L 8 24 L 16 24 L 24 24 L 32 24 L 40 24 L 48 24 L 56 24 L 64 24" fill-rule="evenodd"></path>
                                      <g id="SvgjsG2699" class="apexcharts-series-markers-wrap" data:realIndex="0"></g>
                                    </g>
                                    <g id="SvgjsG2700" class="apexcharts-datalabels" data:realIndex="0"></g>
                                  </g>
                                  <g id="SvgjsG2705" class="apexcharts-grid-borders" style="display: none;"></g>
                                  <line id="SvgjsLine2714" x1="0" y1="0" x2="64" y2="0" stroke="#b6b6b6"
                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                  <line id="SvgjsLine2715" x1="0" y1="0" x2="64" y2="0" stroke-dasharray="0"
                                    stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                  <g id="SvgjsG2716" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG2717" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                  </g>
                                  <g id="SvgjsG2728" class="apexcharts-yaxis-annotations"></g>
                                  <g id="SvgjsG2729" class="apexcharts-xaxis-annotations"></g>
                                  <g id="SvgjsG2730" class="apexcharts-point-annotations"></g>
                                </g>
                              </svg></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          /index.html
                          <a href="#" class="ms-1" aria-label="Open website">
                            <!-- Download SVG icon from http://tabler-icons.io/i/link -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M9 15l6 -6"></path>
                              <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"></path>
                              <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"></path>
                            </svg>
                          </a>
                        </td>
                        <td class="text-muted">3,256</td>
                        <td class="text-muted">2,865</td>
                        <td class="text-muted">72.65%</td>
                        <td class="w-1 text-end">
                          <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-3" style="min-height: 24px;">
                            <div id="apexchartsr9jmbz39" class="apexcharts-canvas apexchartsr9jmbz39 apexcharts-theme-light"
                              style="width: 64px; height: 24px;"><svg id="SvgjsSvg2731" width="64" height="24" xmlns="http://www.w3.org/2000/svg"
                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;">
                                <foreignObject x="0" y="0" width="64" height="24">
                                  <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 12px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect2735" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG2769" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                <g id="SvgjsG2733" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                  <defs id="SvgjsDefs2732">
                                    <clipPath id="gridRectMaskr9jmbz39">
                                      <rect id="SvgjsRect2737" width="70" height="26" x="-3" y="-1" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskr9jmbz39"></clipPath>
                                    <clipPath id="nonForecastMaskr9jmbz39"></clipPath>
                                    <clipPath id="gridRectMarkerMaskr9jmbz39">
                                      <rect id="SvgjsRect2738" width="68" height="28" x="-2" y="-2" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                  </defs>
                                  <line id="SvgjsLine2736" x1="0" y1="0" x2="0" y2="24" stroke="#b6b6b6"
                                    stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                    width="1" height="24" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                  <g id="SvgjsG2744" class="apexcharts-grid">
                                    <g id="SvgjsG2745" class="apexcharts-gridlines-horizontal" style="display: none;">
                                      <line id="SvgjsLine2748" x1="0" y1="0" x2="64" y2="0" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2749" x1="0" y1="4.8" x2="64" y2="4.8" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2750" x1="0" y1="9.6" x2="64" y2="9.6" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2751" x1="0" y1="14.399999999999999" x2="64" y2="14.399999999999999"
                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2752" x1="0" y1="19.2" x2="64" y2="19.2" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2753" x1="0" y1="24" x2="64" y2="24" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG2746" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine2755" x1="0" y1="24" x2="64" y2="24" stroke="transparent"
                                      stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine2754" x1="0" y1="1" x2="0" y2="24" stroke="transparent"
                                      stroke-dasharray="0" stroke-linecap="butt"></line>
                                  </g>
                                  <g id="SvgjsG2739" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG2740" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1"
                                      data:realIndex="0">
                                      <path id="SvgjsPath2743"
                                        d="M 0 14.4 L 8 11.520000000000001 L 16 14.4 L 24 20.16 L 32 7.68 L 40 21.12 L 48 1.9200000000000017 L 56 2.8800000000000026 L 64 5.760000000000002"
                                        fill="none" fill-opacity="1" stroke="rgba(32,107,196,0.85)" stroke-opacity="1" stroke-linecap="round"
                                        stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0"
                                        clip-path="url(#gridRectMaskr9jmbz39)"
                                        pathTo="M 0 14.4 L 8 11.520000000000001 L 16 14.4 L 24 20.16 L 32 7.68 L 40 21.12 L 48 1.9200000000000017 L 56 2.8800000000000026 L 64 5.760000000000002"
                                        pathFrom="M -1 24 L -1 24 L 8 24 L 16 24 L 24 24 L 32 24 L 40 24 L 48 24 L 56 24 L 64 24" fill-rule="evenodd"></path>
                                      <g id="SvgjsG2741" class="apexcharts-series-markers-wrap" data:realIndex="0"></g>
                                    </g>
                                    <g id="SvgjsG2742" class="apexcharts-datalabels" data:realIndex="0"></g>
                                  </g>
                                  <g id="SvgjsG2747" class="apexcharts-grid-borders" style="display: none;"></g>
                                  <line id="SvgjsLine2756" x1="0" y1="0" x2="64" y2="0" stroke="#b6b6b6"
                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                  <line id="SvgjsLine2757" x1="0" y1="0" x2="64" y2="0" stroke-dasharray="0"
                                    stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                  <g id="SvgjsG2758" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG2759" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                  </g>
                                  <g id="SvgjsG2770" class="apexcharts-yaxis-annotations"></g>
                                  <g id="SvgjsG2771" class="apexcharts-xaxis-annotations"></g>
                                  <g id="SvgjsG2772" class="apexcharts-point-annotations"></g>
                                </g>
                              </svg></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          /icons.html
                          <a href="#" class="ms-1" aria-label="Open website">
                            <!-- Download SVG icon from http://tabler-icons.io/i/link -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M9 15l6 -6"></path>
                              <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"></path>
                              <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"></path>
                            </svg>
                          </a>
                        </td>
                        <td class="text-muted">986</td>
                        <td class="text-muted">865</td>
                        <td class="text-muted">44.89%</td>
                        <td class="w-1 text-end">
                          <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-4" style="min-height: 24px;">
                            <div id="apexcharts8ccp698l" class="apexcharts-canvas apexcharts8ccp698l apexcharts-theme-light"
                              style="width: 64px; height: 24px;"><svg id="SvgjsSvg2773" width="64" height="24" xmlns="http://www.w3.org/2000/svg"
                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;">
                                <foreignObject x="0" y="0" width="64" height="24">
                                  <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 12px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect2777" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG2810" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                <g id="SvgjsG2775" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                  <defs id="SvgjsDefs2774">
                                    <clipPath id="gridRectMask8ccp698l">
                                      <rect id="SvgjsRect2779" width="70" height="26" x="-3" y="-1" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMask8ccp698l"></clipPath>
                                    <clipPath id="nonForecastMask8ccp698l"></clipPath>
                                    <clipPath id="gridRectMarkerMask8ccp698l">
                                      <rect id="SvgjsRect2780" width="68" height="28" x="-2" y="-2" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                  </defs>
                                  <line id="SvgjsLine2778" x1="0" y1="0" x2="0" y2="24" stroke="#b6b6b6"
                                    stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                    width="1" height="24" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                  <g id="SvgjsG2786" class="apexcharts-grid">
                                    <g id="SvgjsG2787" class="apexcharts-gridlines-horizontal" style="display: none;">
                                      <line id="SvgjsLine2790" x1="0" y1="0" x2="64" y2="0" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2791" x1="0" y1="6" x2="64" y2="6" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2792" x1="0" y1="12" x2="64" y2="12" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2793" x1="0" y1="18" x2="64" y2="18" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2794" x1="0" y1="24" x2="64" y2="24" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG2788" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine2796" x1="0" y1="24" x2="64" y2="24" stroke="transparent"
                                      stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine2795" x1="0" y1="1" x2="0" y2="24" stroke="transparent"
                                      stroke-dasharray="0" stroke-linecap="butt"></line>
                                  </g>
                                  <g id="SvgjsG2781" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG2782" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1"
                                      data:realIndex="0">
                                      <path id="SvgjsPath2785" d="M 0 21 L 8 7.5 L 16 10.5 L 24 10.5 L 32 22.5 L 40 19.5 L 48 4.5 L 56 0 L 64 1.5"
                                        fill="none" fill-opacity="1" stroke="rgba(32,107,196,0.85)" stroke-opacity="1" stroke-linecap="round"
                                        stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0"
                                        clip-path="url(#gridRectMask8ccp698l)"
                                        pathTo="M 0 21 L 8 7.5 L 16 10.5 L 24 10.5 L 32 22.5 L 40 19.5 L 48 4.5 L 56 0 L 64 1.5"
                                        pathFrom="M -1 30 L -1 30 L 8 30 L 16 30 L 24 30 L 32 30 L 40 30 L 48 30 L 56 30 L 64 30" fill-rule="evenodd"></path>
                                      <g id="SvgjsG2783" class="apexcharts-series-markers-wrap" data:realIndex="0"></g>
                                    </g>
                                    <g id="SvgjsG2784" class="apexcharts-datalabels" data:realIndex="0"></g>
                                  </g>
                                  <g id="SvgjsG2789" class="apexcharts-grid-borders" style="display: none;"></g>
                                  <line id="SvgjsLine2797" x1="0" y1="0" x2="64" y2="0" stroke="#b6b6b6"
                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                  <line id="SvgjsLine2798" x1="0" y1="0" x2="64" y2="0" stroke-dasharray="0"
                                    stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                  <g id="SvgjsG2799" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG2800" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                  </g>
                                  <g id="SvgjsG2811" class="apexcharts-yaxis-annotations"></g>
                                  <g id="SvgjsG2812" class="apexcharts-xaxis-annotations"></g>
                                  <g id="SvgjsG2813" class="apexcharts-point-annotations"></g>
                                </g>
                              </svg></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          /docs/
                          <a href="#" class="ms-1" aria-label="Open website">
                            <!-- Download SVG icon from http://tabler-icons.io/i/link -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M9 15l6 -6"></path>
                              <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"></path>
                              <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"></path>
                            </svg>
                          </a>
                        </td>
                        <td class="text-muted">912</td>
                        <td class="text-muted">822</td>
                        <td class="text-muted">41.12%</td>
                        <td class="w-1 text-end">
                          <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-5" style="min-height: 24px;">
                            <div id="apexcharts8im7f5s5h" class="apexcharts-canvas apexcharts8im7f5s5h apexcharts-theme-light"
                              style="width: 64px; height: 24px;"><svg id="SvgjsSvg2814" width="64" height="24" xmlns="http://www.w3.org/2000/svg"
                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;">
                                <foreignObject x="0" y="0" width="64" height="24">
                                  <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 12px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect2819" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG2854" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                <g id="SvgjsG2816" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                  <defs id="SvgjsDefs2815">
                                    <clipPath id="gridRectMask8im7f5s5h">
                                      <rect id="SvgjsRect2821" width="70" height="26" x="-3" y="-1" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMask8im7f5s5h"></clipPath>
                                    <clipPath id="nonForecastMask8im7f5s5h"></clipPath>
                                    <clipPath id="gridRectMarkerMask8im7f5s5h">
                                      <rect id="SvgjsRect2822" width="68" height="28" x="-2" y="-2" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                  </defs>
                                  <line id="SvgjsLine2820" x1="0" y1="0" x2="0" y2="24" stroke="#b6b6b6"
                                    stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                    width="1" height="24" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                  <g id="SvgjsG2828" class="apexcharts-grid">
                                    <g id="SvgjsG2829" class="apexcharts-gridlines-horizontal" style="display: none;">
                                      <line id="SvgjsLine2832" x1="0" y1="0" x2="64" y2="0" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2833" x1="0" y1="4.8" x2="64" y2="4.8" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2834" x1="0" y1="9.6" x2="64" y2="9.6" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2835" x1="0" y1="14.399999999999999" x2="64" y2="14.399999999999999"
                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2836" x1="0" y1="19.2" x2="64" y2="19.2" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2837" x1="0" y1="24" x2="64" y2="24" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG2830" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine2839" x1="0" y1="24" x2="64" y2="24" stroke="transparent"
                                      stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine2838" x1="0" y1="1" x2="0" y2="24" stroke="transparent"
                                      stroke-dasharray="0" stroke-linecap="butt"></line>
                                  </g>
                                  <g id="SvgjsG2823" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG2824" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1"
                                      data:realIndex="0">
                                      <path id="SvgjsPath2827"
                                        d="M 0 22.08 L 7.111111111111111 13.440000000000001 L 14.222222222222221 9.600000000000001 L 21.333333333333332 10.56 L 28.444444444444443 3.84 L 35.55555555555556 4.800000000000001 L 42.666666666666664 16.32 L 49.77777777777778 1.9200000000000017 L 56.888888888888886 6.720000000000002 L 64 10.56"
                                        fill="none" fill-opacity="1" stroke="rgba(32,107,196,0.85)" stroke-opacity="1" stroke-linecap="round"
                                        stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0"
                                        clip-path="url(#gridRectMask8im7f5s5h)"
                                        pathTo="M 0 22.08 L 7.111111111111111 13.440000000000001 L 14.222222222222221 9.600000000000001 L 21.333333333333332 10.56 L 28.444444444444443 3.84 L 35.55555555555556 4.800000000000001 L 42.666666666666664 16.32 L 49.77777777777778 1.9200000000000017 L 56.888888888888886 6.720000000000002 L 64 10.56"
                                        pathFrom="M -1 24 L -1 24 L 7.111111111111111 24 L 14.222222222222221 24 L 21.333333333333332 24 L 28.444444444444443 24 L 35.55555555555556 24 L 42.666666666666664 24 L 49.77777777777778 24 L 56.888888888888886 24 L 64 24"
                                        fill-rule="evenodd"></path>
                                      <g id="SvgjsG2825" class="apexcharts-series-markers-wrap" data:realIndex="0"></g>
                                    </g>
                                    <g id="SvgjsG2826" class="apexcharts-datalabels" data:realIndex="0"></g>
                                  </g>
                                  <g id="SvgjsG2831" class="apexcharts-grid-borders" style="display: none;"></g>
                                  <line id="SvgjsLine2840" x1="0" y1="0" x2="64" y2="0" stroke="#b6b6b6"
                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                  <line id="SvgjsLine2841" x1="0" y1="0" x2="64" y2="0" stroke-dasharray="0"
                                    stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                  <g id="SvgjsG2842" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG2843" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                  </g>
                                  <g id="SvgjsG2855" class="apexcharts-yaxis-annotations"></g>
                                  <g id="SvgjsG2856" class="apexcharts-xaxis-annotations"></g>
                                  <g id="SvgjsG2857" class="apexcharts-point-annotations"></g>
                                </g>
                              </svg></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          /accordion.html
                          <a href="#" class="ms-1" aria-label="Open website">
                            <!-- Download SVG icon from http://tabler-icons.io/i/link -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M9 15l6 -6"></path>
                              <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"></path>
                              <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"></path>
                            </svg>
                          </a>
                        </td>
                        <td class="text-muted">855</td>
                        <td class="text-muted">798</td>
                        <td class="text-muted">32.65%</td>
                        <td class="w-1 text-end">
                          <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-6" style="min-height: 24px;">
                            <div id="apexcharts5ec9piis" class="apexcharts-canvas apexcharts5ec9piis apexcharts-theme-light"
                              style="width: 64px; height: 24px;"><svg id="SvgjsSvg2858" width="64" height="24" xmlns="http://www.w3.org/2000/svg"
                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;">
                                <foreignObject x="0" y="0" width="64" height="24">
                                  <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 12px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect2863" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG2898" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                <g id="SvgjsG2860" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                  <defs id="SvgjsDefs2859">
                                    <clipPath id="gridRectMask5ec9piis">
                                      <rect id="SvgjsRect2865" width="70" height="26" x="-3" y="-1" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMask5ec9piis"></clipPath>
                                    <clipPath id="nonForecastMask5ec9piis"></clipPath>
                                    <clipPath id="gridRectMarkerMask5ec9piis">
                                      <rect id="SvgjsRect2866" width="68" height="28" x="-2" y="-2" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                  </defs>
                                  <line id="SvgjsLine2864" x1="0" y1="0" x2="0" y2="24" stroke="#b6b6b6"
                                    stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                    width="1" height="24" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                  <g id="SvgjsG2872" class="apexcharts-grid">
                                    <g id="SvgjsG2873" class="apexcharts-gridlines-horizontal" style="display: none;">
                                      <line id="SvgjsLine2876" x1="0" y1="0" x2="64" y2="0" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2877" x1="0" y1="4.8" x2="64" y2="4.8" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2878" x1="0" y1="9.6" x2="64" y2="9.6" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2879" x1="0" y1="14.399999999999999" x2="64" y2="14.399999999999999"
                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2880" x1="0" y1="19.2" x2="64" y2="19.2" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                      <line id="SvgjsLine2881" x1="0" y1="24" x2="64" y2="24" stroke="#e0e0e0"
                                        stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG2874" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine2883" x1="0" y1="24" x2="64" y2="24" stroke="transparent"
                                      stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine2882" x1="0" y1="1" x2="0" y2="24" stroke="transparent"
                                      stroke-dasharray="0" stroke-linecap="butt"></line>
                                  </g>
                                  <g id="SvgjsG2867" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG2868" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1"
                                      data:realIndex="0">
                                      <path id="SvgjsPath2871"
                                        d="M 0 2.8800000000000026 L 7.111111111111111 12.48 L 14.222222222222221 17.28 L 21.333333333333332 10.56 L 28.444444444444443 21.12 L 35.55555555555556 3.84 L 42.666666666666664 16.32 L 49.77777777777778 1.9200000000000017 L 56.888888888888886 6.720000000000002 L 64 10.56"
                                        fill="none" fill-opacity="1" stroke="rgba(32,107,196,0.85)" stroke-opacity="1" stroke-linecap="round"
                                        stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0"
                                        clip-path="url(#gridRectMask5ec9piis)"
                                        pathTo="M 0 2.8800000000000026 L 7.111111111111111 12.48 L 14.222222222222221 17.28 L 21.333333333333332 10.56 L 28.444444444444443 21.12 L 35.55555555555556 3.84 L 42.666666666666664 16.32 L 49.77777777777778 1.9200000000000017 L 56.888888888888886 6.720000000000002 L 64 10.56"
                                        pathFrom="M -1 24 L -1 24 L 7.111111111111111 24 L 14.222222222222221 24 L 21.333333333333332 24 L 28.444444444444443 24 L 35.55555555555556 24 L 42.666666666666664 24 L 49.77777777777778 24 L 56.888888888888886 24 L 64 24"
                                        fill-rule="evenodd"></path>
                                      <g id="SvgjsG2869" class="apexcharts-series-markers-wrap" data:realIndex="0"></g>
                                    </g>
                                    <g id="SvgjsG2870" class="apexcharts-datalabels" data:realIndex="0"></g>
                                  </g>
                                  <g id="SvgjsG2875" class="apexcharts-grid-borders" style="display: none;"></g>
                                  <line id="SvgjsLine2884" x1="0" y1="0" x2="64" y2="0" stroke="#b6b6b6"
                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                  <line id="SvgjsLine2885" x1="0" y1="0" x2="64" y2="0" stroke-dasharray="0"
                                    stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                  <g id="SvgjsG2886" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG2887" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g>
                                  </g>
                                  <g id="SvgjsG2899" class="apexcharts-yaxis-annotations"></g>
                                  <g id="SvgjsG2900" class="apexcharts-xaxis-annotations"></g>
                                  <g id="SvgjsG2901" class="apexcharts-point-annotations"></g>
                                </g>
                              </svg></div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <a href="https://github.com/sponsors/codecalm" class="card card-sponsor" target="_blank" rel="noopener"
                style="background-image: url(./static/sponsor-banner-homepage.svg)" aria-label="Sponsor Tabler!">
                <div class="card-body"></div>
              </a>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Social Media Traffic</h3>
                </div>
                <table class="card-table table-vcenter table">
                  <thead>
                    <tr>
                      <th>Network</th>
                      <th colspan="2">Visitors</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Instagram</td>
                      <td>3,550</td>
                      <td class="w-50">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Twitter</td>
                      <td>1,798</td>
                      <td class="w-50">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-primary" style="width: 35.96%"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Facebook</td>
                      <td>1,245</td>
                      <td class="w-50">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-primary" style="width: 24.9%"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>TikTok</td>
                      <td>986</td>
                      <td class="w-50">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-primary" style="width: 19.72%"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Pinterest</td>
                      <td>854</td>
                      <td class="w-50">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-primary" style="width: 17.08%"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>VK</td>
                      <td>650</td>
                      <td class="w-50">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-primary" style="width: 13.0%"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Pinterest</td>
                      <td>420</td>
                      <td class="w-50">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-primary" style="width: 8.4%"></div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-12 col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Tasks</h3>
                </div>
                <div class="table-responsive">
                  <table class="card-table table-vcenter table">
                    <tbody>
                      <tr>
                        <td class="w-1 pe-0">
                          <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
                        </td>
                        <td class="w-100">
                          <a href="#" class="text-reset">Extend the data model.</a>
                        </td>
                        <td class="text-nowrap text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                            <path d="M16 3v4"></path>
                            <path d="M8 3v4"></path>
                            <path d="M4 11h16"></path>
                            <path d="M11 15h1"></path>
                            <path d="M12 15v3"></path>
                          </svg>
                          August 04, 2021
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-muted">
                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                            2/7
                          </a>
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-muted">
                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M8 9h8"></path>
                              <path d="M8 13h6"></path>
                              <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path>
                            </svg>
                            3
                          </a>
                        </td>
                        <td>
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                        </td>
                      </tr>
                      <tr>
                        <td class="w-1 pe-0">
                          <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
                        </td>
                        <td class="w-100">
                          <a href="#" class="text-reset">Verify the event flow.</a>
                        </td>
                        <td class="text-nowrap text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                            <path d="M16 3v4"></path>
                            <path d="M8 3v4"></path>
                            <path d="M4 11h16"></path>
                            <path d="M11 15h1"></path>
                            <path d="M12 15v3"></path>
                          </svg>
                          January 03, 2019
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-muted">
                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                            3/10
                          </a>
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-muted">
                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M8 9h8"></path>
                              <path d="M8 13h6"></path>
                              <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path>
                            </svg>
                            6
                          </a>
                        </td>
                        <td>
                          <span class="avatar avatar-sm">JL</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="w-1 pe-0">
                          <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
                        </td>
                        <td class="w-100">
                          <a href="#" class="text-reset">Database backup and maintenance</a>
                        </td>
                        <td class="text-nowrap text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                            <path d="M16 3v4"></path>
                            <path d="M8 3v4"></path>
                            <path d="M4 11h16"></path>
                            <path d="M11 15h1"></path>
                            <path d="M12 15v3"></path>
                          </svg>
                          December 28, 2018
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-muted">
                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                            0/6
                          </a>
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-muted">
                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M8 9h8"></path>
                              <path d="M8 13h6"></path>
                              <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path>
                            </svg>
                            1
                          </a>
                        </td>
                        <td>
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/002m.jpg)"></span>
                        </td>
                      </tr>
                      <tr>
                        <td class="w-1 pe-0">
                          <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
                        </td>
                        <td class="w-100">
                          <a href="#" class="text-reset">Identify the implementation team.</a>
                        </td>
                        <td class="text-nowrap text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                            <path d="M16 3v4"></path>
                            <path d="M8 3v4"></path>
                            <path d="M4 11h16"></path>
                            <path d="M11 15h1"></path>
                            <path d="M12 15v3"></path>
                          </svg>
                          November 07, 2020
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-muted">
                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                            6/10
                          </a>
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-muted">
                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M8 9h8"></path>
                              <path d="M8 13h6"></path>
                              <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path>
                            </svg>
                            12
                          </a>
                        </td>
                        <td>
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003m.jpg)"></span>
                        </td>
                      </tr>
                      <tr>
                        <td class="w-1 pe-0">
                          <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
                        </td>
                        <td class="w-100">
                          <a href="#" class="text-reset">Define users and workflow</a>
                        </td>
                        <td class="text-nowrap text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                            <path d="M16 3v4"></path>
                            <path d="M8 3v4"></path>
                            <path d="M4 11h16"></path>
                            <path d="M11 15h1"></path>
                            <path d="M12 15v3"></path>
                          </svg>
                          November 23, 2021
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-muted">
                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                            3/7
                          </a>
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-muted">
                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M8 9h8"></path>
                              <path d="M8 13h6"></path>
                              <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path>
                            </svg>
                            5
                          </a>
                        </td>
                        <td>
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000f.jpg)"></span>
                        </td>
                      </tr>
                      <tr>
                        <td class="w-1 pe-0">
                          <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
                        </td>
                        <td class="w-100">
                          <a href="#" class="text-reset">Check Pull Requests</a>
                        </td>
                        <td class="text-nowrap text-muted">
                          <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                            <path d="M16 3v4"></path>
                            <path d="M8 3v4"></path>
                            <path d="M4 11h16"></path>
                            <path d="M11 15h1"></path>
                            <path d="M12 15v3"></path>
                          </svg>
                          January 14, 2021
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-muted">
                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                            2/9
                          </a>
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-muted">
                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M8 9h8"></path>
                              <path d="M8 13h6"></path>
                              <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path>
                            </svg>
                            3
                          </a>
                        </td>
                        <td>
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/001f.jpg)"></span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Invoices</h3>
                </div>
                <div class="card-body border-bottom py-3">
                  <div class="d-flex">
                    <div class="text-muted">
                      Show
                      <div class="d-inline-block mx-2">
                        <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
                      </div>
                      entries
                    </div>
                    <div class="text-muted ms-auto">
                      Search:
                      <div class="d-inline-block ms-2">
                        <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="card-table table-vcenter text-nowrap datatable table">
                    <thead>
                      <tr>
                        <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                        <th class="w-1">No.
                          <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M6 15l6 -6l6 6"></path>
                          </svg>
                        </th>
                        <th>Invoice Subject</th>
                        <th>Client</th>
                        <th>VAT No.</th>
                        <th>Created</th>
                        <th>Status</th>
                        <th>Price</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                        <td><span class="text-muted">001401</span></td>
                        <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a></td>
                        <td>
                          <span class="flag flag-country-us"></span>
                          Carlson Limited
                        </td>
                        <td>
                          87956621
                        </td>
                        <td>
                          15 Dec 2017
                        </td>
                        <td>
                          <span class="badge bg-success me-1"></span> Paid
                        </td>
                        <td>$887</td>
                        <td class="text-end">
                          <span class="dropdown">
                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">
                                Action
                              </a>
                              <a class="dropdown-item" href="#">
                                Another action
                              </a>
                            </div>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                        <td><span class="text-muted">001402</span></td>
                        <td><a href="invoice.html" class="text-reset" tabindex="-1">UX Wireframes</a></td>
                        <td>
                          <span class="flag flag-country-gb"></span>
                          Adobe
                        </td>
                        <td>
                          87956421
                        </td>
                        <td>
                          12 Apr 2017
                        </td>
                        <td>
                          <span class="badge bg-warning me-1"></span> Pending
                        </td>
                        <td>$1200</td>
                        <td class="text-end">
                          <span class="dropdown">
                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">
                                Action
                              </a>
                              <a class="dropdown-item" href="#">
                                Another action
                              </a>
                            </div>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                        <td><span class="text-muted">001403</span></td>
                        <td><a href="invoice.html" class="text-reset" tabindex="-1">New Dashboard</a></td>
                        <td>
                          <span class="flag flag-country-de"></span>
                          Bluewolf
                        </td>
                        <td>
                          87952621
                        </td>
                        <td>
                          23 Oct 2017
                        </td>
                        <td>
                          <span class="badge bg-warning me-1"></span> Pending
                        </td>
                        <td>$534</td>
                        <td class="text-end">
                          <span class="dropdown">
                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">
                                Action
                              </a>
                              <a class="dropdown-item" href="#">
                                Another action
                              </a>
                            </div>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                        <td><span class="text-muted">001404</span></td>
                        <td><a href="invoice.html" class="text-reset" tabindex="-1">Landing Page</a></td>
                        <td>
                          <span class="flag flag-country-br"></span>
                          Salesforce
                        </td>
                        <td>
                          87953421
                        </td>
                        <td>
                          2 Sep 2017
                        </td>
                        <td>
                          <span class="badge bg-secondary me-1"></span> Due in 2 Weeks
                        </td>
                        <td>$1500</td>
                        <td class="text-end">
                          <span class="dropdown">
                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">
                                Action
                              </a>
                              <a class="dropdown-item" href="#">
                                Another action
                              </a>
                            </div>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                        <td><span class="text-muted">001405</span></td>
                        <td><a href="invoice.html" class="text-reset" tabindex="-1">Marketing Templates</a></td>
                        <td>
                          <span class="flag flag-country-pl"></span>
                          Printic
                        </td>
                        <td>
                          87956621
                        </td>
                        <td>
                          29 Jan 2018
                        </td>
                        <td>
                          <span class="badge bg-danger me-1"></span> Paid Today
                        </td>
                        <td>$648</td>
                        <td class="text-end">
                          <span class="dropdown">
                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">
                                Action
                              </a>
                              <a class="dropdown-item" href="#">
                                Another action
                              </a>
                            </div>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                        <td><span class="text-muted">001406</span></td>
                        <td><a href="invoice.html" class="text-reset" tabindex="-1">Sales Presentation</a></td>
                        <td>
                          <span class="flag flag-country-br"></span>
                          Tabdaq
                        </td>
                        <td>
                          87956621
                        </td>
                        <td>
                          4 Feb 2018
                        </td>
                        <td>
                          <span class="badge bg-secondary me-1"></span> Due in 3 Weeks
                        </td>
                        <td>$300</td>
                        <td class="text-end">
                          <span class="dropdown">
                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">
                                Action
                              </a>
                              <a class="dropdown-item" href="#">
                                Another action
                              </a>
                            </div>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                        <td><span class="text-muted">001407</span></td>
                        <td><a href="invoice.html" class="text-reset" tabindex="-1">Logo &amp; Print</a></td>
                        <td>
                          <span class="flag flag-country-us"></span>
                          Apple
                        </td>
                        <td>
                          87956621
                        </td>
                        <td>
                          22 Mar 2018
                        </td>
                        <td>
                          <span class="badge bg-success me-1"></span> Paid Today
                        </td>
                        <td>$2500</td>
                        <td class="text-end">
                          <span class="dropdown">
                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">
                                Action
                              </a>
                              <a class="dropdown-item" href="#">
                                Another action
                              </a>
                            </div>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                        <td><span class="text-muted">001408</span></td>
                        <td><a href="invoice.html" class="text-reset" tabindex="-1">Icons</a></td>
                        <td>
                          <span class="flag flag-country-pl"></span>
                          Tookapic
                        </td>
                        <td>
                          87956621
                        </td>
                        <td>
                          13 May 2018
                        </td>
                        <td>
                          <span class="badge bg-success me-1"></span> Paid Today
                        </td>
                        <td>$940</td>
                        <td class="text-end">
                          <span class="dropdown">
                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">
                                Action
                              </a>
                              <a class="dropdown-item" href="#">
                                Another action
                              </a>
                            </div>
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                  <p class="text-muted m-0">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                  <ul class="pagination m-0 ms-auto">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                          stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M15 6l-6 6l6 6"></path>
                        </svg>
                        prev
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">
                        next
                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                          stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M9 6l6 6l-6 6"></path>
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-transparent d-print-none">
        <div class="container-xl">
          <div class="row align-items-center flex-row-reverse text-center">
            <div class="col-lg-auto ms-lg-auto">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank" class="link-secondary" rel="noopener">Documentation</a>
                </li>
                <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source
                    code</a></li>
                <li class="list-inline-item">
                  <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24"
                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                    </svg>
                    Sponsor
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-12 col-lg-auto mt-lg-0 mt-3">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item">
                  Copyright © 2023
                  <a href="." class="link-secondary">Tabler</a>.
                  All rights reserved.
                </li>
                <li class="list-inline-item">
                  <a href="./changelog.html" class="link-secondary" rel="noopener">
                    v1.0.0-beta19
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection
