<html>
        <head>
        <title>英検なんでも掲示板</title> 
               
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
  </script>
                <script src="{{ asset('js/app.js') }}" defer></script>
		<link href="css/eiken.css" rel="stylesheet" type="text/css">
                
	</head>
	<body>
	
		<header>
			
			<h1>英検なんでも掲示板</h1>
		</header>
		<div class="wrapper">
			<div class="main">
			
			  <noscript>
			  	<p class="mukou">JavaScriptを有効にしてください</p>
			  </noscript>
			  
			    <h2 class="board">掲示板のメニュー</h2>	
				     <div class="menu">
					    
						<div class="upper_content2">
						<div class="label2"></div>
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
						<p class="next2">次の項目を入力し、「書き込む」ボタンをクリックしてください。</p>
						@yield('content')
						</div>		

				    <div class="upper_content3">
						<div class="label3"></div>
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
						<p class="next3">次の項目を入力し、「削除」ボタンをクリックしてください。</p>
				       
				         @yield('distinguish')
				    
				    </div>
				</div>   
	
				<h2>記事一覧</h2>
				</p>

			    <div class="article">
			    	@yield('hairetu')
			    </div>
			    	
			 </div>   
			 
		</div>	    
  	<footer>
  		&copy; 2019 evryday study　All Rights Reserved.
  	</footer>
          </body>
</html>
