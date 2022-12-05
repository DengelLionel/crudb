<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Modificar </title>
</head>
<body>
<form action="{{route('store.update',['stored'=>$stored->id])}}" enctype="multipart/form-data" method="POST" class="space-y-6">
                {{method_field('PUT')}}
				@csrf
				

						<!-- component -->
<div class="flex min-h-[50px]  bg-gray-100 font-sans">
    <div>
  <label for="dropzone-file" class="mx-auto cursor-pointer flex w-full max-w-lg flex-col items-center rounded-xl border-2 border-dashed border-blue-400 bg-white p-6 text-center">
    

    <h2 class="mt-4 text-xl font-medium text-gray-700 tracking-wide">name</h2>

  <input placeholder="escribe name" type="text" value="{{$stored->name}}" name="name">
  <input placeholder="escribe presentation" value="{{$stored->presentation}}" type="text" name="presentation">
  <input placeholder="escribe puv" value="{{$stored->puv}}" type="text" name="puv">
  <input placeholder="escribe puc" value="{{$stored->puc}}" type="text" name="puc">
  <input placeholder="escribe number"  type="number" name="number">
  </div>
  
</div>
					</div> <!-- FINALIZA IMAGEN -->


					<div class="flex items-center justify-between">

						
					</div>
					<div>
						<button type="submit" class="w-full flex justify-center bg-blue-800  hover:bg-blue-700 text-gray-100 p-3  rounded-lg tracking-wide font-semibold  cursor-pointer transition ease-in duration-500">
                Modificar
              </button>
					</div>
					
</form>
</body>
</html>

