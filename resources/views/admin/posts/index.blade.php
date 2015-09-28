@extends('admin.admin_template')
@section('title', 'Posts')
@section('content')
<div class="content">

<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Marcações</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Buscar post">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>#</th>
                      <th>Título</th>
                      <th>Autor</th>
                      <th>Data</th>
                      <th>Slug</th>
                      <th></th>
                    </tr>
                    @foreach($posts as $p)

                    <tr>
					            <td>{{ $p->id }}</td>
                      <td><a href="{!! route('admin.posts.show', [$p->id]) !!}">{{ $p->title }}</a></td>
                      <td>{{ $p->user->name }}</td>
                      <td>{{ $p->created_at->format('d/m/Y') }}</td>
                      <td>{{ $p->slug }}</td>
                      <td><a href="{!! route('admin.posts.destroy', [$p->id]) !!}" style="color:red"><b>DELETAR</b></a></td>
                    </tr>
                    @endforeach
                  </tbody></table>
                <center>  {!! $posts->render() !!} </center>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>

</div>
@stop
