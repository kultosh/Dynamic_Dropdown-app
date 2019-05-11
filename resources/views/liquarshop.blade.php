<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>
</head>
<body>
	<h1>Laravel Dynamic Drop Down</h1>
	<div>
		<span>Category:</span>
		<select class="category">
			<option value="0" disabled="true" selected="true">
				Select
			</option>
			@foreach($table as $category)
				<option value="{{$category->id}}">
					{{$category->name}}
				</option>
			@endforeach
		</select>

		<span>Subcategory</span>
		<select class="subcategory">
			<option value="0" disabled="true" selected="true">
				Subcategory:
			</option>
		</select>

		<span>Product</span>
		<select class="products">
			<option value="0" disabled="true" selected="true">
				Product:
			</option>
		</select>
	</div>
	

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('change','.category',function(){
				console.log('its change');

				var cat_id=$(this).val();

				var div=$(this).parent();

				var op="";

				var i;
				
				$.ajax({
					type:'get',
					url: '{!!URL::to('findliquars')!!}',
					data:{'id':cat_id},
					success:function(data){
						console.log('success');
						console.log(data);
						op+='<option value="0" selected disabled>choose subcategory</option>';
						for(i=0;i<data.length;i++){
							op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
						}
						div.find('.subcategory').html(" ");
						div.find('.subcategory').append(op);
					},
					error:function(){
						console.log('error');
					}
				})
			});

			$(document).on('change','.subcategory',function(){
				var prod_id=$(this).val();
				var div=$(this).parent();
				console.log(prod_id);
				var op="";
				var i;
				$.ajax({
					type:'get',
					url: '{!!URL::to('findliquarsproduct')!!}',
					data:{'id':prod_id},
					success:function(data){
						console.log('success');
						console.log(data);
						op+='<option value="0" selected disabled>choose product</option>';
						for(var i=0;i<data.length;i++){
							op+='<option value="'+data[i].id+'">'+data[i].brand+'</option>';
						}
						div.find('.products').html(" ");
						div.find('.products').append(op);
					},
					error:function(){
						console.log('error');
					}
				})
			});
		})
	</script>
</body>
</html>