@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="box box-info">
					<div class="box-header with-border"><h3 class="box-title">エリア一覧</h3></div>
					<div class="table-responsive">
						<table class="table no-margin">
							<thead>
								<tr>
									<th>ID</th>
									<th>エリア名</th>
									<th>編集/削除</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($childAreas as $childArea)
									<tr>
										<td>{{ $childArea->id }}</td>
										<td><a href="{{ url('/areas', ['post_id' => $childArea->id]) }}" class="card-link">{{ $childArea->name }}</a></td>
										<td>
											<a href="{{ action('ChildAreasController@edit', ['id' => $childArea->id]) }}" class="btn btn-primary">編集</a>
				                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$childArea->id}}">削除</button>
				                            <!-- Modal -->
				                            <div class="modal fade" id="deleteModal{{$childArea->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
				                                <div class="modal-dialog" role="document">
				                                    <div class="modal-content">
				                                        <div class="modal-header">
				                                            <h5 class="modal-title" id="deleteModalLabel">削除</h5>
				                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                                                <span aria-hidden="true">&times;</span>
				                                            </button>
				                                        </div>
				                                        <div class="modal-body">
				                                            「{{ $childArea->name }}」を削除します。よろしいですか？
				                                        </div>
				                                        <div class="modal-footer">
				                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
				                                            {!! Form::open(['route' => ['child_areas.destroy',$childArea->id],'method'=>'delete']) !!}
				                                                <button type="submit" class="btn btn-danger">削除</button>
				                                            {!! Form::close() !!}
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				<div class="box box-solid">
					<div class="box-body text-center">
						<a href="{{ action('ChildAreasController@create', $areaId) }}" class="btn btn-success">
						新規追加
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection