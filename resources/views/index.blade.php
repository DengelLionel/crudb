<div>
<h2 class="font-bold text-red-500">Lista store</h2>

<!-- component -->
<section class="antialiased bg-gray-100 text-gray-600 h-screen px-4">
    <div class="flex flex-col justify-center h-full">
        <!-- Table -->
        <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">Canciones</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">name</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Presentation</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Puv</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Puc</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Number</div>
                                </th>

                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            @foreach($stores as $item)
                            <tr>
                               
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$item->name}}</div>
                                </td>
                              
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                     
                                        <div class="font-medium text-gray-800">{{$item->presentation}}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">{{$item->puv}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">{{$item->puc}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">{{$item->number}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                <form action="{{route('store.destroy',$item->id)}}" method="POST">
                                        @csrf
                                         @method('delete')
                                    
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded" type="submit">Eliminar playlist</button>
                                        </form>
                                        <a href="{{route('store.edit',['stored'=>$item->id])}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</a>
                                </td>
                                <td>

                                </td>
                                <td>
                                   
                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
   
