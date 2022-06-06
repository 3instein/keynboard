<x-app-layout>
  <div class="mt-20 mx-60">
    <div class="w-full text-center mb-10">
      <p class="uppercase text-3xl font-bold">Order Invoice</p>
    </div>
    <div class="w-full border p-10 rounded">
      <div class="mb-8">
        <div class="flex justify-between items-center">
          <p class="text-xl font-bold uppercase">Order Id #{{ $order->id }}</p>
          <p class="font-bold text-xl uppercase">Status: {{ $order->payment_status }}</p>
        </div>
      </div>

      {{-- customer information --}}
      <div class="mb-8 grid grid-cols-5">
        <div class="col-span-2">
          <div class="mb-2">
            <p class="font-bold">Customer Information</p>
          </div>
          <div>
            <p>{{ $order->user->name }}</p>
          </div>
          <div>
            <p>{{ $order->user->phone }}</p>
          </div>
          <div>
            <p>{{ $order->user->email }}</p>
          </div>
          <div>
            <p>{{ $order->user->address }}</p>
          </div>
        </div>
        <div class="col-span-2">
          <div class="mb-2">
            <p class="font-bold">Payment</p>
          </div>
          <div class="flex items-center">
            <div class="w-fit rounded">
              <div>
                <img class="w-24 h-auto border rounded mb-2" src="/images/logo-bca.png" alt="logo-bca">
                <p>0882129169<br />A/n Reynaldi Kindarto</p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="mb-2">
            <p class="font-bold">Delivery Status</p>
          </div>
          <div>
            <p class="uppercase">{{ $order->delivery_status }}</p>
          </div>
        </div>
      </div>

      {{-- product --}}
      <div>
        <div class="grid grid-cols-5">

          {{-- item --}}
          <div class="col-span-3">
            <div class="border border-b border-t-0 border-r-0 border-l-0 pb-2 mb-4">
              <p class="font-bold">Item</p>
            </div>
            <div>
              <div class="mb-2">
                <p class="font-bold">Layout</p>
                <p>{{ $order->build->layout->name }}</p>
              </div>
              <div class="mb-2">
                <p class="font-bold">Top Case</p>
                <p>{{ $order->build->top_case->name }}</p>
              </div>
              <div class="mb-2">
                <p class="font-bold">Bottom Case</p>
                <p>{{ $order->build->bottom_case->name }}</p>
              </div>
              <div class="mb-2">
                <p class="font-bold">Plate</p>
                <p>{{ $order->build->plate->name }}</p>
              </div>
              <div class="mb-2">
                <p class="font-bold">PCB</p>
                <p>{{ $order->build->pcb->name }}</p>
              </div>
            </div>
          </div>

          {{-- quantity --}}
          <div>
            <div class="border border-b border-t-0 border-r-0 border-l-0 pb-2 mb-4">
              <p class="font-bold">Quantity</p>
            </div>
            <div>
              <p class="opacity-0">A</p>
              <p>1</p>
            </div>
            <div>
              <p class="opacity-0">A</p>
              <p>1</p>
            </div>
            <div>
              <p class="opacity-0">A</p>
              <p>1</p>
            </div>
            <div>
              <p class="opacity-0">A</p>
              <p>1</p>
            </div>
            <div>
              <p class="opacity-0">A</p>
              <p>1</p>
            </div>
          </div>

          {{-- price --}}
          <div>
            <div class="border border-b border-t-0 border-r-0 border-l-0 pb-2 mb-4">
              <p class="font-bold">Price</p>
            </div>
            <div>
              <p class="opacity-0">A</p>
              <p>Free</p>
            </div>
            <div>
              <p class="opacity-0">A</p>
              <p>Rp. {{ number_format($order->build->top_case->price, 0, ',', '.') }}</p>
            </div>
            <div>
              <p class="opacity-0">A</p>
              <p>Rp. {{ number_format($order->build->bottom_case->price, 0, ',', '.') }}</p>
            </div>
            <div>
              <p class="opacity-0">A</p>
              <p>Rp. {{ number_format($order->build->plate->price, 0, ',', '.') }}</p>
            </div>
            <div>
              <p class="opacity-0">A</p>
              <p>Rp. {{ number_format($order->build->pcb->price, 0, ',', '.') }}</p>
            </div>
          </div>
        </div>
        <hr class="my-4" />
        <div class="grid grid-cols-5">
          <div class="col-span-4 text-right">
            <div class="mr-20">
              <p class="font-bold mb-2">Subtotal</p>
              <p class="font-bold">Shipping</p>
            </div>
          </div>
          <div>
            <p class="mb-2">Rp.
              {{ number_format($order->build->top_case->price + $order->build->bottom_case->price + $order->build->plate->price + $order->build->pcb->price, 0, ',', '.') }}
            </p>
            <p>
              Free
            </p>
          </div>
        </div>
        <hr class="my-4" />
        <div class="grid grid-cols-5">
          <div class="col-span-4 text-right">
            <div class="mr-20">
              <p class="font-bold mb-2">Total</p>
            </div>
          </div>
          <div>
            <p class="mb-2 font-bold">Rp.
              {{ number_format($order->build->top_case->price + $order->build->bottom_case->price + $order->build->plate->price + $order->build->pcb->price, 0, ',', '.') }}
            </p>
          </div>
        </div>
      </div>
      <div class="text-right mt-8 flex justify-end items-center">
        <button class="bg-red-600 px-6 py-3 uppercase tracking-widest font-bold text-white rounded mr-8"
          id="cancel-payment">Cancel</button>
        <a class="bg-base-gold px-6 py-3 uppercase tracking-widest font-bold text-white rounded"
          href="https://wa.me/+6282335905925?text=Saya%20ingin%20mengkonfirmasi%20pembayaran%20dengan%20Invoice%20ID:%20%23{{ $order->id }}"
          target="_blank">Confirm
          Payment</a>
      </div>
    </div>
  </div>

  {{-- modal cancel confirmation --}}
  <div class="relative z-10 modal hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity z-10"></div>
    <div class="fixed z-10 inset-0 overflow-y-auto">
      <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
        <div
          class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
              <div
                class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
              </div>
              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Cancel order</h3>
                <div class="mt-2">
                  <p class="text-sm text-gray-500">Are you sure you want to cancel your order? All of your order data
                    will be permanently removed. This action cannot be undone.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <form action="{{ route('order.destroy', $order) }}" method="POST">
              @csrf
              @method('delete')
              <button
                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-white font-medium hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"
                type="submit">Cancel
                Order</button>
            </form>
            <button type="button" id="cancel-btn"
              class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Back</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const navbar = document.querySelector('.navbar');
    const cancelPayment = document.getElementById('cancel-payment');
    const modal = document.querySelector('.modal');
    const cancelBtn = document.getElementById('cancel-btn');

    cancelPayment.addEventListener('click', function(e) {
      modal.classList.remove('hidden');
      navbar.classList.add('hidden');
    });

    cancelBtn.addEventListener('click', function(e) {
      modal.classList.add('hidden');
      navbar.classList.remove('hidden');
    });
  </script>
</x-app-layout>
