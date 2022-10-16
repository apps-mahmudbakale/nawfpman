<div>
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Users</h3>
          <a href="{{ route('app.users.create')}}" class="btn btn-primary ml-auto">Create User</a>
        </div>
        <div class="card-body border-bottom py-3">
          <div class="d-flex">
            <div class="text-muted">
              Show
              <div class="mx-2 d-inline-block">
                <input type="number" wire:model="perPage" class="form-control" value="8" size="3">
              </div>
              entries
            </div>
            <div class="ml-auto text-muted">
              Search:
              <div class="ml-2 d-inline-block">
                <input type="text" wire:model.debounce.300ms="search" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
              <tr>
                <th class="w-1"># <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="6 15 12 9 18 15" /></svg>
                </th>
                <th>Name <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="7 8 3 12 7 16" /><polyline points="17 8 21 12 17 16" /><line x1="14" y1="4" x2="10" y2="20" /></svg>
                </th>
                <th>Email<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="7 8 3 12 7 16" /><polyline points="17 8 21 12 17 16" /><line x1="14" y1="4" x2="10" y2="20" /></svg>
                </th>
                <th>Role <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="7 8 3 12 7 16" /><polyline points="17 8 21 12 17 16" /><line x1="14" y1="4" x2="10" y2="20" /></svg>
                </th>
                <th>Created AT <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="7 8 3 12 7 16" /><polyline points="17 8 21 12 17 16" /><line x1="14" y1="4" x2="10" y2="20" /></svg>
                </th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>
                      @foreach($user->roles as $key => $role)
                          <span class="badge rounded-pill bg-success">{{ $role->name }}</span>
                      @endforeach
                  </td>
                  <td>{{$user->created_at->diffForHumans()}}</td>
                <td class="text-right">
                  <span class="dropdown ml-1">
                    <button class="btn btn-white btn-sm dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="{{ route('app.users.show', $user->id)}}">
                        Show
                      </a>
                      <a class="dropdown-item" href="{{ route('app.users.edit', $user->id) }}">
                       Edit
                      </a>
                      <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('del#{{$user->id}}').submit();">
                        Delete
                       </a>
                    </div>
                  </span>
                  <form id="del#{{ $user->id }}" action="{{ route('app.users.destroy', $user->id) }}"
                    method="POST" onsubmit="return confirm('Are you sure');"
                    style="display: inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                </td>
              </tr>
              @endforeach
             
            </tbody>
          </table>
        </div>
        <div class="card-footer d-flex align-items-center">
          <p class="m-0 text-muted">Showing <span>{{$users->firstItem()}}</span> to <span>{{$users->lastItem()}}</span> of <span>{{$users->total()}}</span> entries</p>
          <ul class="pagination m-0 ml-auto">
            {{$users->links()}}
          </ul>
        </div>
      </div>
</div>
