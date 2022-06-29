

            
            <div class="row" style="margin-top: 20px;">
            <div class="col-lg-12 grid-margin stretch-card">
                          <div class="card">
            
                            <div class="card-body">
                              <h4 class="card-title">Data Buku</h4>
                              
                              <div class="table-responsive">
                                <table class="table table-striped" id="table">
                                  <thead>
                                    <tr>
                                      <th>
                                        Judul
                                      </th>
                                      <th>
                                        ISBN
                                      </th>
                                      <th>
                                        Pengarang
                                      </th>
                                      <th>
                                        Penerbit
                                      </th>
                                      <th>
                                        Tahun Terbit
                                      </th>
                                      <th>
                                        Jumlah Buku
                                      </th>
                                      <th>
                                        Deskripsi
                                      </th>
                                      <th>
                                        Lokasi
                                      </th>
                                      <th>
                                        Cover
                                      </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($buku as $data)
                                    <tr>
                                      <td class="py-1">
                              
            
                                        {{$data->judul}}
                                      </td>
                                      <td>
                                        <a href="{{route('buku.show', $data->id)}}">
                                        {{$data->isbn}}
                                        </a>
                                      
                                        
                                     
                                      </td>
                                      <td>
                                        {{$data->pengarang}}
                                      </td>
                                      <td>
                                        {{$data->penerbit}}
                                      </td>
                                      <td>
                                        {{$data->tahun_terbit}}
                                      </td>
                                      <td>
                                        {{$data->jumlah_buku}}
                                      </td>
                                      <td>
                                        {{$data->deskripsi}}
                                      </td>
                                      <td>
                                      @if($data->lokasi == 'Rak 1')
                                        Rak 1
                                      @elseif($data->lokasi == 'Rak 2')
                                        Rak 2
                                      @else
                                        Rak 3
                                      @endif
                                      </td>
                                      <td>
                                        {{$data->cover}}
                                      </td>
                                      <td>
            
                                      
                            
                                      </div>
                                    </div>
                                      </td>
                                    </tr>
                                  @endforeach
                                  </tbody>
                                </table>
                              </div>
                           {{--  {!! $datas->links() !!} --}}
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      
@endsection
              