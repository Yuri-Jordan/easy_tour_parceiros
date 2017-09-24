@extends('layout.masterLayout')
@section('conteudo')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Listar Pontos Turísticos</h3>
        </div>
      </div>

      <div class="clearfix"></div>

<br />

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Informações do Ponto</h2>
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
                <tbody>
                  <tr>
                    <td>#</td>
                    <td>
                      <a>Fortaleza dos Reis Magos</a></td>
                    <td>
                      <ul class="list-inline">
                        <li>O Forte dos Reis Magos é uma edificação militar histórica localizada na cidade de Natal. </li>
                        <li></li>
                        <li></li>
                        <li></li>
                      </ul>
                    </td>
                    <td>
                      <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                      <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Deletar </a>
                    </td>
                  </tr>
                  <tr>
                    <td>#</td>
                    <td>
                    <a>Fundação Capitania das Artes</a></td>
                    <td>
                      <ul class="list-inline">
                        <li>Seu prédio foi sede do Governo do Estado, da Escola de Aprendizes de Marinheiro e da Capitania dos Portos.</li>
                        <li></li>
                    </ul></td>
                    <td>
                      <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                      <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Deletar </a>
                    </td>
                  </tr>
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
@endsection
