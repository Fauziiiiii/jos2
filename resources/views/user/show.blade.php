<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Pengguna</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Nama User</th>
                <th>Username</th>
                <th>Email</th>
                <th>Outlet</th>
                <th>Role</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->outlet->nama}}</td>
                    <td>{{$item->role}}</td>
                    <td><label class="badge badge-success">Aktif</label></td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>