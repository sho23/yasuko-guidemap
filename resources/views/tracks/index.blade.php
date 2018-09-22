@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="box box-info">
					<div class="box-header with-border"><h3 class="box-title">Latest Orders</h3></div>
					<div class="nav-tabs-custom cs-box">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">JR</a></li>
							<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">メトロ</a></li>
							<li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">その他私鉄</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1">
								<div class="box-body">
									<div class="table-responsive">
										<table class="table no-margin">
											<thead>
												<tr>
													<th>ID</th>
													<th>路線名</th>
													<th>公開</th>
													<th>編集/削除</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($tracks as $track)
													@if(strpos($track->name, 'ＪＲ') !== false)
														<tr>
															<td>{{ $track->id }}</td>
															<td><a href="{{ url('/stations', ['post_id' => $track->id]) }}" class="card-link">{{ $track->name }}</a></td>
															<td>{{ $track->publish_flag ? '公開' : '非公開' }}</td>
															<td>
																<a href="{{ url('/stations', ['post_id' => $track->id]) }}" class="btn btn-primary">編集</a>
																<a href="{{ url('/stations', ['post_id' => $track->id]) }}" class="btn btn-danger">削除</a>
															</td>
														</tr>
													@endif
												@endforeach
					                		</tbody>
					                	</table>
					                </div>
								</div>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_2">
								<div class="box-body">
									<div class="table-responsive">
										<table class="table no-margin">
											<thead>
												<tr>
													<th>ID</th>
													<th>路線名</th>
													<th>公開</th>
													<th>編集/削除</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($tracks as $track)
													@if(strpos($track->name, 'メトロ') !== false)
														<tr>
															<td>{{ $track->id }}</td>
															<td><a href="{{ url('/stations', ['post_id' => $track->id]) }}" class="card-link">{{ $track->name }}</a></td>
															<td>{{ $track->publish_flag ? '公開' : '非公開' }}</td>
															<td>
																<a href="{{ url('/stations', ['post_id' => $track->id]) }}" class="btn btn-primary">編集</a>
																<a href="{{ url('/stations', ['post_id' => $track->id]) }}" class="btn btn-danger">削除</a>
															</td>
														</tr>
													@endif
												@endforeach
							        		</tbody>
							        	</table>
							        </div>
								</div>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_3">
								<div class="box-body">
									<div class="table-responsive">
										<table class="table no-margin">
											<thead>
												<tr>
													<th>ID</th>
													<th>路線名</th>
													<th>公開</th>
													<th>編集/削除</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($tracks as $track)
													@if(strpos($track->name, 'メトロ') === false && strpos($track->name, 'ＪＲ') === false)
														<tr>
															<td>{{ $track->id }}</td>
															<td><a href="{{ url('/stations', ['post_id' => $track->id]) }}" class="card-link">{{ $track->name }}</a></td>
															<td>{{ $track->publish_flag ? '公開' : '非公開' }}</td>
															<td>
																<a href="{{ url('/stations', ['post_id' => $track->id]) }}" class="btn btn-primary">編集</a>
																<a href="{{ url('/stations', ['post_id' => $track->id]) }}" class="btn btn-danger">削除</a>
															</td>
														</tr>
													@endif
												@endforeach
					                		</tbody>
					                	</table>
					                </div>
								</div>
							</div>
							<!-- /.tab-pane -->
						</div>
					<!-- /.tab-content -->
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection