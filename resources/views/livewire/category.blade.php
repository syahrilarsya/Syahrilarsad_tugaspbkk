 <div class="row">
 <div class="col-12">
            <div class="card">
              <div class="card-header">
                <span href="" class="btn btn-sm btn-primary">Tambah</span>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th width="10%">No</th>
                      <th>Category</th>
                      <th width="15%">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($category as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->nama}}</td>
                      <td>
                        <div class="btn-group">
                            <span href="" class="btn btn-sm btn-primary mr-2">Edit</span>
                            <span href="" class="btn btn-sm btn-danger">Hapus</span>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="card-footer clearfix">
                {{ $category->links() }}
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
 </div>