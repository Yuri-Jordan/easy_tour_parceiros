@extends('layout.masterLayout')
@section('conteudo')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Listar Parceiros</h3>
        </div>
      </div>

      <div class="clearfix"></div>

<br />

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Informações do Parceiro</h2>
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


              <!-- start project list -->
              <table class="table table-striped projects">
                <thead>
                  <tr>
                    <th style="width: 1%">#</th>
                    <th style="width: 20%">Nome</th>
                    <th>Descrição</th>
                    <th style="width: 20%">Ações</th>
                  </tr>
                </thead>
                <tbody id='parceiros'>

                </tbody>
              </table>
              <!-- end project list -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
  @section('pos-scripts')
    <script>

        $(document).ready(function () {

          $.ajax({
                   url: 'https://easy-tour-parceiros-api.herokuapp.com/api/parceiros',
                   type: 'GET',
                   dataType: 'json',
                   success: function (data, textStatus, xhr) {
                     console.log(data);
                      var parceiros = '';
                      $.each(data, function (key, value) {

                        parceiros += '<tr>';
                          parceiros += '<td>#</td>';
                          parceiros += "<td width='77%'>"+value.nome_fantasia+"</td>";
                          parceiros += "<td width='77%'><a>"+value.descricao+"</a></td>";
                          parceiros += "<td>";
                            parceiros += "<a href='#' class='btn btn-info btn-xs' onclick='editar("+value.id+")'><i class='fa fa-pencil'></i> Editar </a>";
                            parceiros += "<a href='#' class='btn btn-danger btn-xs' onclick='excluir("+value.id+")'><i class='fa fa-trash-o'></i> Deletar </a>";
                          parceiros += "</td>";
                        parceiros += '</tr>';




                        parceiros += '<tr style="display:none" id = "'+value.id+'">';
                          parceiros += '<form class="form-horizontal form-label-left" novalidate id="form'+value.id+'" action="https://easy-tour-parceiros-api.herokuapp.com/api/parceiros/'+value.id+'" method="put">';
                            parceiros += '<td>'+value.id+'</td>';
                            parceiros += "<td width='77%'><input class='form-control col-md-7 col-xs-12' data-validate-length-range='2' data-validate-words='1' name='nome_fantasia' value='"+value.nome_fantasia+"' type='text'></td>";
                            parceiros += "<td  width='77%'><input class='form-control col-md-7 col-xs-12' data-validate-length-range='2' data-validate-words='1' name='descricao' value='"+value.descricao+"' type='text'></td>";
                            parceiros += "<td>";
                              parceiros += "<button type='submit' value='Enviar' onclick='enviar("+value.id+")'>Enviar</button>";
                              parceiros += "<a href='#' class='btn btn btn-xs' onclick='cancelarEdicao("+value.id+")'><i class='fa fa-trash-o'></i> Cancelar </a>";
                            parceiros += "</td>";
                          parceiros += '</form>';
                        parceiros += '</tr>';

                      });
                      $('#parceiros').append(parceiros);
                   },
                   error: function (xhr, textStatus, errorThrown) {
                       console.log('Error in Operation');
                   }
              });
        });

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

        function enviar(id){
          $("#form"+id+"").submit();
        }


    </script>
  @endsection
@endsection
