<x-app-layout>
  <div class="mt-20 mx-20">
    <div class="w-full text-center mb-10">
      <p class="uppercase text-3xl font-bold">Order Invoice</p>
    </div>
    <div class="w-full border p-10 rounded">
      <div class="mb-8">
        <div class="flex justify-between items-center">
          <p class="text-xl font-bold uppercase">Order Id #{{ $order->id }}</p>
          <p class="font-bold text-xl uppercase">Status: Unpaid</p>
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
            <p>Pending</p>
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
        <form action="">
          <button class="bg-[#EC2028] px-6 py-3 uppercase tracking-widest font-bold text-white rounded mr-8" type="submit">Cancel</button>
        </form>
        <a class="bg-base-gold px-6 py-3 uppercase tracking-widest font-bold text-white rounded" href="">Confirm
          Payment</a>
      </div>
    </div>
  </div>
</x-app-layout>
