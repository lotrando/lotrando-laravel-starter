{{-- Logout Modal --}}
<div class="modal fade" id="logout-modal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content shadow-lg">
      <div class="modal-status bg-danger"></div>
      <div class="card-stamp">
        <div class="card-stamp-icon bg-red text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock-down" width="24" height="24" viewBox="0 0 24 24"
            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12.5 21h-5.5a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10a2 2 0 0 1 1.74 1.015"></path>
            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
            <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
            <path d="M19 16v6"></path>
            <path d="M22 19l-3 3l-3 -3"></path>
          </svg>
        </div>
      </div>
      <div class="modal-body py-4 text-center">
        <h3>{{ __('Are you sure?') }}</h3>
        <div class="text-muted">{{ __('Do you really want to logout?') }}</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><a class="btn w-100" data-bs-dismiss="modal" href="#">
                {{ __('Close') }}
              </a></div>
            <div class="col">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-danger w-100" data-bs-dismiss="modal" type="submit" type="button"> {{ __('Logout') }}</button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
{{-- End of Logout Modal --}}
