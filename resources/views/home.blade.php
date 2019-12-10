@extends('layouts.app')

@section('content')
<div class="container">
		<div class="wrapper">
			<div class="main">
				<div class="menu">
					    
						<div class="upper_content2">
							<div class="label_brown"></div>
								<h3 class="ore">新規記事の書き込み</h3>
									<div class="square">
										<div class="minus_two">
											ー
										</div>
										<div class="plus_two ">
											＋
										</div>
									</div>
						</div>
					
						<div class="lower_content_two">
							<p class="next_write">次の項目を入力し、「書き込む」ボタンをクリックしてください。</p>
                            <form action="/eiken" method="post">
							{{csrf_field()}}
					<div class="form">
						<label class="name">お名前</label><input type="text" class="name_space" name="name" title="必須です" required>
					</div>

					<div class="form">
						<label class="category">取得級</label><input type="text" class="category_space" name="category" title="必須です" required>
					</div>
					  
					<div class="form">
						<label class="message">メッセージ</label><input type="text" class="message_space" name="message" title="必須です" required >
					</div>
					   	 <input type="submit" value="書き込む" class="btn-flat-border" >
				</form>
						</div>		

				    <div class="upper_content3">
						<div class="label_green"></div>
							<h3 class="mido">記事の削除(管理者専用)</h3>
								<div class="square">
									<div class="minus_three ">
										ー
									</div>
									<div class="plus_three ">
										＋
									</div>
								</div>
					</div>

				    	<div class="lower_content_three">
							<p class="next_delete">次の項目を入力し、「削除」ボタンをクリックしてください。</p>
                            <form action="{{ route('article_remove')}}" method="post">
					{{csrf_field()}}
				    <div class="form">
						<label class="id">記事のID</label><input type="text" pattern="^[0-9]+$" class="id_space" name="id" title="半角数字で入力してください" required >
				   	</div>
						<input type="submit" value="削除" class="btn-flat-border">
				</form> 
				    	</div>
				</div>   
	
				<h2>記事一覧</h2>
				
			    <div class="article">
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
			    </div>
			    	
			</div>   
			 
		</div>	       
</div>
@endsection
