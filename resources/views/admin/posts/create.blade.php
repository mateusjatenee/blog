@extends('admin.admin_template')
@section('title', 'Criar post')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Criar post</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{!! route('admin.posts.create') !!}" method="POST">
                {!! csrf_field() !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Título</label>
                      <input type="email" class="form-control input-lg" id="exampleInputEmail1" placeholder="Título" name="title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Conteúdo (em markdown)</label>
                      <textarea class="form-control" rows="15" placeholder="Enter ..." name="content"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Foto (opcional)</label>
                      <input type="file" id="exampleInputFile" name="image">
                    </div>
                    <div class="form-group"><label>Data de publicacao</label><input type="text" class="form-control input-lg" placeholder="Data" name="date" value="{{ Carbon\Carbon::today()->format('Y-m-d') }}"></div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div>


		</div>
	</div>
</section>
@stop
