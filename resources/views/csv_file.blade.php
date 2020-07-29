
  <div class="container">    
     <br />
     <h3 align="center">Import Export Data in CSV File</h3>
     <br />
     <div class="panel panel-default">
          <div class="panel-heading">
           <h3 class="panel-title">Import Export Data in CSV File</h3>
          </div>
          <div class="panel-body">
           <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" accept=".csv">
                  <br>
                  <button class="btn btn-success">Import User Data</button>
                  <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                  <a class="btn btn-primary" href="{{ route('download') }}">Sample csv file download product</a>
           </form>
              @yield('csv_data')
          </div>
      </div>
  </div>
 
