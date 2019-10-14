@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">data</div>

                <div class="card-body">
                	<a href="{!! route('kategori_artikel.create') !!}" class="btn btn-dark">Tambah Data</a>
                    <table border='1'>
						<tr>
							<td>id</td>
							<td>nama</td>
							<td>users_id</td>
							<td>created_at</td>
							<td>updated_at</td>
						</tr>

@foreach($kategoriArtikel as $item)

						<tr>
							<td>{!! $item->id !!}</td>
							<td>{!! $item->nama !!}</td>
							<td>{!! $item->users_id !!}</td>
							<td>{!! $item->created_at !!}</td>
							<td>{!! $item->updated_at !!}</td>
							<td><a href="{!! route('kategori_artikel.show',[$item->id]) !!}" class="btn btn-dark">Lihat</a></td>
							<td><a href="{!! route('kategori_artikel.edit',[$item->id]) !!}" class="btn btn-primary">edit</a></td>
							<td>
							{!! Form::open(['route' => ['kategori_artikel.destroy',$item->id], 'method' => 'delete']); !!}
				            {!! Form::submit('Hapus',['class'=>'btn btn-danger']); !!}
				            {!! Form::close() !!}
				        </td>
					</tr>

@endforeach

</table>
                </div>
            </div>
        </div>
    </div>