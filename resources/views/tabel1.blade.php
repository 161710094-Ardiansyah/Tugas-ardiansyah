@extends('layout.custom1')
@section('konten')
<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Nama
						</th>
						<th>
							Kelas
						</th>
						<th>
							Alamat
						</th>
					</tr>
				</thead>
				<tbody>
					@php $no=1; @endphp
					@foreach($a as $tab)
					<tr>
						<td>
							{{$no++}}
						</td>
						<td>
							{{$tab->Nama}}
						</td>
						<td>
							{{$tab->Kelas}}
						</td>
						<td>
							{{$tab->Alamat}}
						</td>
					</tr>
					@endforeach
					
				</tbody>
			</table> 
			<button type="button" class="btn btn-default">
				Default
			</button>
			@endsection