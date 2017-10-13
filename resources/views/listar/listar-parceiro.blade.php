@extends('layout.masterLayout')
@section('styles')
  <link href="{{asset('asset/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('conteudo')



  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Users <small>Some examples to get you started</small></h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">


        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Fixed Header Example <small>Users</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <p class="text-muted font-13 m-b-30">
                This example shows FixedHeader being styling by the Bootstrap CSS framework.
              </p>
              <table id="datatable-fixed-header" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- /page content -->
  @endsection
  @section('pos-scripts')
    <script src="{{asset('asset/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('asset/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('asset/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('asset/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('asset/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('asset../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('asset/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('asset/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('asset/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('asset/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('asset/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('asset/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('asset/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

    <script>
      $('#datatable-fixed-header').DataTable( {
          "processing": true,
          "serverside": true,
          "ajax": 'http://localhost/easyTourAPI/public/api/parceirosAdmin',

          "columns": [
              { data: "nome_fantasia" },
              { data: "responsavel" },
              { data: "descricao" },
              { data: "cnpj" },
              { data: "created_at" },
              { data: "updated_at" },
          ],
      } );

      function enviar(id){

        $.ajax({
          url: 'https://easy-tour-parceiros-api.herokuapp.com/api/parceiros/'+id,
          type: 'POST',
          data: {
                  nome_fantasia:document.getElementById('nome_fantasia'+id).value,
                  descricao:document.getElementById('descricao'+id).value,
                },
          contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
          success: function (data, textStatus, xhr) {
             console.log(data);
          },
          error: function (xhr, textStatus, errorThrown) {
              console.log('Error in Operation');
          }
        });
      }

      function editar(id) {

        $("#"+id+"").slideToggle();

      }
      function excluir(id) {

        $.ajax({
          url: 'https://easy-tour-parceiros-api.herokuapp.com/api/parceiros/'+id,
          type: 'DELETE',
          dataType: 'json',
          success: function (data, textStatus, xhr) {
             console.log(data);
          },
          error: function (xhr, textStatus, errorThrown) {
              console.log('Error in Operation');
          }
        });
      }

      function cancelarEdicao(id){
        $("#"+id+"").slideToggle();
      }


    </script>



  @endsection
