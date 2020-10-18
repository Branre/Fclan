@extends('Admin.layout')

@section('header')

 <h1>
        Clanes Creados
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Clan</li>
      </ol>

@stop
@section('content')
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="clans-table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Extracto</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($clans as $clan )
                      <tr>
                        <td>{{ $clan->id }}</td>
                        <td>{{ $clan->titulo }}</td>
                        <td>{{ $clan->descripcion }}</td>
                        <td>
                        <a href ="{{ route('admin.clan.edit', $clan->id) }}" class='btn btn-xs btn-info'><i class="fa fa-pencil"></i></a>
                        <a href ="#" class='btn btn-xs btn-danger'><i class="fa fa-times"></i></a>
                        </td>
                      </tr>
                      
                    @endforeach
                </tbody>
                <tfoot>

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@stop