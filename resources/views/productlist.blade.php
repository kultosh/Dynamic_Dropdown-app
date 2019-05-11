<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>
</head>
<body>
	<h1>Laravel Dynamic Drop Down</h1>
	<span>Product Category:</span>
	<select class="productcategory" id="prod_cat_id">
		<option value="0" disabled="true" selected="true">
			Select
		</option>
		@foreach($prod as $cat)
			<option value="{{$cat->id}}">
				{{$cat->product_cat_name}}
			</option>
		@endforeach
	</select>

	<span>Product Name:</span>
	<select class="productname">
		<option value="0" disabled="true" selected="true">
			Product Name:
		</option>
	</select>

	<span>Product Name:</span>
	<select class="protitle">
		<option value="0" disabled="true" selected="true">
			Product Name:
		</option>
	</select>

	<span>Product Price:</span>
	<input type="text" name="prod_price" class="prod_price">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('change','.productcategory',function(){
				console.log('its change');

				var cat_id=$(this).val();

				var div=$(this).parent();

				var op="";
				
				$.ajax({
					type:'get',
					url: '{!!URL::to('findProductName')!!}',
					data:{'id':cat_id},
					success:function(data){
						console.log('success');
						console.log(data);
						op+='<option value="0" selected disabled>choose product</option>';
						for(var i=0;i<data.length;i++){
							op+='<option value="'+data[i].id+'">'+data[i].productname+'</option>';
						}
						div.find('.productname').html(" ");
						div.find('.productname').append(op);
					},
					error:function(){
						console.log('error');
					}
				})
			});

			$(document).on('change','.productname',function(){
				var prod_id=$(this).val();
				var a=$(this).parent();
				console.log(prod_id);
				var op="";
				$.ajax({
					type:'get',
					url: '{!!URL::to('findPrice')!!}',
					data:{'id':prod_id},
					dataType:'json',
					success:function(data){
						a.find('.prod_price').val(data.price);
					},
					error:function(){
						console.log('error');
					}
				})
			})

			$(document).on('change','.productname',function(){
				var author_id=$(this).val();
				var book=$(this).parent();
				var op="";
				$.ajax({
					type:'get',
					url: '{!!URL::to('findAuthor')!!}',
					data:{'id':author_id},
					success:function(data){
						console.log('success');
						console.log(data);
						op+='<option value="0" selected disabled>choose title</option>';
						for(var i=0;i<data.length;i++){
							op+='<option value="'+data[i].id+'">'+data[i].protitle+'</option>';
						}
						book.find('.protitle').html(" ");
						book.find('.protitle').append(op);
					},
					error:function(){
						console.log('error');
					}
				})
			})
		})
	</script>
</body>
</html>