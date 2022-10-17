<header class="navbar navbar-expand-md navbar-light">
  <div class="container-xl">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="{{route('app.dashboard')}}" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
      <img src="{{asset('nawfpman.png')}}" alt="NAWFPMAN" class="navbar-brand-image">
    </a>
    <div class="navbar-nav flex-row order-md-last">
      <div class="nav-item dropdown d-none d-md-flex mr-3">
        <a href="#" class="nav-link px-0" data-toggle="dropdown" tabindex="-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
          <span class="badge bg-red"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
          <div class="card">
            <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
            </div>
          </div>
        </div>
      </div>
      <div class="nav-item dropdown">
        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-toggle="dropdown">
          <span class="avatar" style="background-image: url(./static/avatars/000m.jpg)"></span>
          <div class="d-none d-xl-block pl-2">
            <div>Paweł Kuna</div>
            <div class="mt-1 small text-muted">UI Designer</div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><circle cx="12" cy="12" r="3" /></svg>
            Action
          </a>
          <a class="dropdown-item" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg>
            Another action
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
            Separated link</a>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="navbar-expand-md">
  <div class="collapse navbar-collapse" id="navbar-menu">
    <div class="navbar navbar-light">
      <div class="container-xl">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('app.dashboard')}}" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
              </span>
              <span class="nav-link-title">
                Dashboard
              </span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-toggle="dropdown" role="button" aria-expanded="false" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3"></path></svg>
              </span>
              <span class="nav-link-title">
                Authentication
              </span>
            </a>
            <ul class="dropdown-menu">
              <li >
                <a class="dropdown-item" href="{{route('app.users.index')}}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><circle cx="12" cy="7" r="4"></circle><path d="M5.5 21v-2a4 4 0 0 1 4 -4h5a4 4 0 0 1 4 4v2"></path></svg>
                  </span>
                  Users
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="{{route('app.roles.index')}}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="5" y="11" width="14" height="10" rx="2"></rect><circle cx="12" cy="16" r="1"></circle><path d="M8 11v-4a4 4 0 0 1 8 0v4"></path></svg>
                  </span>
                  Roles
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('app.members.index')}}" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><circle cx="7" cy="5" r="2"></circle><path d="M5 22v-5l-1-1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5"></path><circle cx="17" cy="5" r="2"></circle><path d="M15 22v-4h-2l2 -6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1l2 6h-2v4"></path></svg>
              </span>
              <span class="nav-link-title">
                Members
              </span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-toggle="dropdown" role="button" aria-expanded="false" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" /></svg>
              </span>
              <span class="nav-link-title">
                Extra
              </span>
            </a>
            <ul class="dropdown-menu">
              <li >
                <a class="dropdown-item" href="./invoice.html" >
                  Invoice
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./blog.html" >
                  Blog cards
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./snippets.html" >
                  Snippets
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./search-results.html" >
                  Search results
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./pricing.html" >
                  Pricing cards
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./users.html" >
                  Users
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./gallery.html" >
                  Gallery
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./profile.html" >
                  Profile
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./music.html" >
                  Music
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="false" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><rect x="4" y="4" width="6" height="5" rx="2" /><rect x="4" y="13" width="6" height="7" rx="2" /><rect x="14" y="4" width="6" height="7" rx="2" /><rect x="14" y="15" width="6" height="5" rx="2" /></svg>
              </span>
              <span class="nav-link-title">
                Layout
              </span>
            </a>
            <ul class="dropdown-menu">
              <li >
                <a class="dropdown-item" href="./layout-horizontal.html" >
                  Horizontal
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./layout-vertical.html" >
                  Vertical
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./layout-vertical-right.html" >
                  Right vertical
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./layout-condensed.html" >
                  Condensed
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./layout-condensed-dark.html" >
                  Condensed dark
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./layout-combo.html" >
                  Combined
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./layout-navbar-dark.html" >
                  Navbar dark
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./layout-dark.html" >
                  Dark mode
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./layout-fluid.html" >
                  Fluid
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./layout-fluid-vertical.html" >
                  Fluid vertical
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-docs" data-toggle="dropdown" role="button" aria-expanded="false" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="14 3 14 8 19 8" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="9" y1="9" x2="10" y2="9" /><line x1="9" y1="13" x2="15" y2="13" /><line x1="9" y1="17" x2="15" y2="17" /></svg>
              </span>
              <span class="nav-link-title">
                Docs
              </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-columns  dropdown-menu-columns-3">
              <li >
                <a class="dropdown-item" href="./docs/index.html" >
                  Introduction
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/alerts.html" >
                  Alerts
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/autosize.html" >
                  Autosize
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/avatars.html" >
                  Avatars
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/badges.html" >
                  Badges
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/breadcrumb.html" >
                  Breadcrumb
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/buttons.html" >
                  Buttons
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/cards.html" >
                  Cards
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/carousel.html" >
                  Carousel
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/colors.html" >
                  Colors
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/countup.html" >
                  Countup
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/cursors.html" >
                  Cursors
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/charts.html" >
                  Charts
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/dropdowns.html" >
                  Dropdowns
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/divider.html" >
                  Divider
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/empty.html" >
                  Empty states
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/flags.html" >
                  Flags
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/form-elements.html" >
                  Form elements
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/form-helpers.html" >
                  Form helpers
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/input-mask.html" >
                  Form input mask
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/modals.html" >
                  Modals
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/progress.html" >
                  Progress
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/payments.html" >
                  Payments
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/range-slider.html" >
                  Range slider
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/ribbons.html" >
                  Ribbons
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/spinners.html" >
                  Spinners
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/steps.html" >
                  Steps
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/tables.html" >
                  Tables
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/tabs.html" >
                  Tabs
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/timelines.html" >
                  Timelines
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/toasts.html" >
                  Toasts
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/tooltips.html" >
                  Tooltips
                </a>
              </li>
              <li >
                <a class="dropdown-item" href="./docs/typography.html" >
                  Typography
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
          <form action="." method="get">
            <div class="input-icon">
              <span class="input-icon-addon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
              </span>
              <input type="text" class="form-control" placeholder="Search…">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>