@extends('layouts.kenteiapp')

@section('content')

				<form action="/eiken" method="post">
							{{csrf_field()}}
					<div class="form">
						<label class="namae">お名前</label><input type="text" class="name" name="name" title="必須です" required>
					</div>

					<div class="form">
						<label class="category">取得級</label><input type="text" class="category" name="category" title="必須です" required>
					</div>
					  
					<div class="form">
						<label class="message">メッセージ</label><input type="text" class="message2" name="message" title="必須です" required >
					</div>
					   	 <input type="submit" value="書き込む" class="btn-flat-border" >
				</form>
@endsection

@section('hairetu')

					<table>
					<thead>
  						<tr class="item">
    						<th>ID</th>
    						<th>お名前</th>
    						<th>級</th>
    						<th>メッセージ</th>
    					</tr>
					</thead>
					<tbody>	  
						@foreach($items as $item)
						<tr>
							<td>{{$item->id}}</td>
							<td>{{$item->name}}</td>
							<td>{{$item->category}}</td>
							<td>{{$item->message}}</td>
						</tr>
						@endforeach
					</tbody>	
					</table>          

@endsection

@section('distinguish')
                <form action="{{ route('article_remove')}}" method="post">
					{{csrf_field()}}
				    <div class="form">
						<label class="id">記事のID</label><input type="text" pattern="^[0-9]+$" class="id2" name="id" title="半角数字で入力してください" required >
				   	</div>
						<input type="submit" value="削除" class="btn-flat-border">
				</form> 

@endsection

