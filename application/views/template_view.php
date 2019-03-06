<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1255" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Content Form Test</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
		<script type="text/javascript">
		// return a random integer between 0 and number
		function random(number) {
			
			return Math.floor( Math.random()*(number+1) );
		};
		
		// show random quote
		$(document).ready(function() { 
			var quotes = $('.quote');
			quotes.hide();
			
			var qlen = quotes.length; 
			$( '.quote:eq(' + random(qlen-1) + ')' ).show(); 

			$("#button").click(function(e){
					    e.preventDefault();
					    $.ajax({
					        url: '/main/clockin/',
					        type: 'POST',
					        dataType: 'json',
					        data: {
					            name: $('#name').val(),      
					            role:$('#role').val()
					        },
					        success:function(response){
					        	
					        	$("#error_name").text(response.name);
					        	
					        }
					   });
					});

			
		});
		
		/* for (var i = 0; i < 5; i++) {
			  var btn = document.createElement('button');
			  btn.appendChild(document.createTextNode('Button ' + i));
			  btn.addEventListener('click', function(){ console.log(i); });
			  document.body.appendChild(btn);
			} */
		console.log(typeof(null));
		var a = b =3;
		

		var foo = {n: 1};
		var bar = foo;
		foo.x = foo = {n: 2};
		/* console.log(foo);
		console.log(bar);
		console.log(foo.x); */

		const add = (a) => {
			  let sum = a;
			  const func = (b) => {
			    if (b) {
			      sum += b;
			      return func;
			    } else {
			      return sum;
			    }
			  };
			  return func;
			};
			add(2)(3)(); // 5;


			function foo1()
			{
			  return {
			      bar1: "hello"
			  };
			}

			function foo2()
			{
			  return
			  {
			      bar1: "hello"
			  };
			}

			for(var i=0; i<5;i++){
				 setTimeout(function(){console.log(i)}, 0);
				}

			console.log("fgfgfgfg");
			/* console.log("foo1 returns:");
			console.log(foo1());
			console.log("foo2 returns:");
			console.log(foo2()); */

		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">home - content form</a></li>
						
						
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3></h3>
						<p align="justify" class="quote">
						
						</p>
						<p align="justify" class="quote"><!-- &copy; Vitaly Swipe -->
					
						</p>
						<p align="justify" class="quote">
						</p>
						<p align="justify" class="quote"><!-- &copy; Vitaly Swipe -->
						</p>
						<p align="justify" class="quote">
					
						</p>
					</div>
					<div class="side-box">
						<h3>Navigation</h3>
						<ul class="list">
							<li class="first "><a href="/">home - content form</a></li>
							
							
						</ul>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
						
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				
				<div id="page-bottom-content">
					
				</div>
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			
		</div>
	</body>
</html>