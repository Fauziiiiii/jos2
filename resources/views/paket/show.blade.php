<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Paket Laundry</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Jenis Paket</th>
                <th>Nama Paket</th>
                <th>Harga</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->jenis}}</td>
                    <td>{{$item->nama_paket}}</td>
                    <td>Rp. {{number_format($item->harga, 0, ',', '.')}},00</td>
                    <td><label class="badge badge-success">Aktif</label></td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>