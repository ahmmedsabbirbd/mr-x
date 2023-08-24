@extends('layouts.app1')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3 id="TotalContactMessage">0</h3>

                  <p>Contact Message</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
<script>
    getTotalContactMessageData();
    async function getTotalContactMessageData() {
        let url = 'admin/contactpage/totalContactMessage';
        try {
            // document.getElementById('loading-div').classList.remove('d-none');
            // document.getElementById('content-div').classList.add('d-none');
            let res = await axios.get(url);
            // document.getElementById('loading-div').classList.add('d-none');
            // document.getElementById('content-div').classList.remove('d-none');
            console.log(res.data)
            let TotalContactMessage = res.data["data"];
            // document.getElementById('TotalContactMessage').value = TotalContactMessage;

        } catch (error) {
            alert(error)
        }
    }
</script>
