<x-app-layout>
    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="block mb-6 pl-2">
                        <a href="{{ route('purchases.create') }}"
                           class="items-center text-white  py-1 px-4 w-auto bg-gray-500 hover:bg-gray-700 rounded-full active:shadow-lg mouse shadow transition ease-in duration-200 focus:outline-none bg-blue-500 hover:bg-blue-700">
                            <i class="fas fa-shopping-cart"></i>
                            Registrar Egreso
                        </a>
                    </div>
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-10">
                                <x-success-message></x-success-message>
                                <div class=" shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full table-auto divide-y divide-gray-200">
                                        <thead class="bg-gray-100">
                                        <tr>
                                            <th scope="col"
                                                class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                N°
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Fecha
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Detalle
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Ruc
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Autorización
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Proveedor
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Clasificación
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Cantidad
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Costo Unitario
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Costo total
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                IVA
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Total
                                            </th>
                                            <th scope="col"
                                                class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Orden
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($purchase_details as $purchase_detail)
                                            <tr>
                                                <td class=" px-4 py-2 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm text-center leading-5 text-gray-500">
                                                        {{$purchase_detail->purchase->id}}
                                                    </div>
                                                </td>
                                                <td class=" px-4 py-2 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm text-center leading-5 text-gray-500">
                                                        {{$purchase_detail->purchase->date}}
                                                    </div>
                                                </td>
                                                <td class=" px-4 py-2 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm text-left leading-5 text-gray-500">
                                                        {{$purchase_detail->detail->detail}}
                                                    </div>
                                                </td>
                                                <td class=" px-4 py-2 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm text-center leading-5 text-gray-500">
                                                        {{$purchase_detail->purchase->supplier->ruc}}
                                                    </div>
                                                </td>
                                                <td class=" px-4 py-2 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm text-center leading-5 text-gray-500">
                                                        {{$purchase_detail->purchase->authorization}}
                                                    </div>
                                                </td>
                                                <td class=" px-4 py-2 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm text-center leading-5 text-gray-500">
                                                        {{$purchase_detail->purchase->supplier->name}}
                                                    </div>
                                                </td>
                                                <td class=" px-4 py-2 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm text-center leading-5 text-gray-500">
                                                        {{$purchase_detail->detail->classification->name}}
                                                    </div>
                                                </td>
                                                <td class=" px-4 py-2 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm text-center leading-5 text-gray-500">
                                                        {{$purchase_detail->quantity}}</div>
                                                </td>
                                                <td class=" px-4 py-2 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm text-center leading-5 text-gray-500">
                                                        $ {{$purchase_detail->detail->unit_value}}
                                                        {{--                                                            $ {{$purchase_detail->unit_value}}--}}
                                                    </div>
                                                </td>
                                                <td class=" px-4 py-2 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm text-center leading-5 text-gray-500">
                                                        $ {{$purchase_detail->total_value}}
                                                    </div>
                                                </td>
                                                <td class=" px-4 py-2 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm text-center leading-5 text-gray-500">
                                                        {{$purchase_detail->tax->name}}
                                                    </div>
                                                </td>
                                                <td class=" px-4 py-2 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm text-center leading-5 text-gray-500">
                                                        $ {{$purchase_detail->total}}
                                                    </div>
                                                </td>
                                                <td class=" px-4 py-2 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm text-center leading-5 text-gray-500">
                                                        {{$purchase_detail->purchase->order->id}}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-4">
                                    {{ $purchase_details->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
