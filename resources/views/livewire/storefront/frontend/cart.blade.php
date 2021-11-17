<div>
  <style>
    
    .card-common {
      align-self: center;
      cursor: pointer;
      box-shadow: -10px 0 30px -10px hsla(0, 0%, 0%, 0.45);
      transition: all .15s linear;
      transform: rotateY(5deg);
    }

    /* clicked elements in dof-container dodge left to fully reveal themselves */
    .reveal:active {
      padding-right: 6em;
      transform: rotateZ(0deg);
      box-shadow: none;
    }

    /* Blur Controls */

    .blur-container{
      display: flex;
      flex-direction: column;
      position: fixed;
      top: 1em;
      right: 1em;
      box-shadow: 0 0 20px 0 hsla(0, 0%, 0%, 0.66);
      z-index: 2;
    }

    .controls-header {
      color: white;
      font-size: 15px;
      background: hsl(2, 49%, 56%);
      padding: 5px;
      margin: 0;
    }

    .controls {
      display: flex;
      flex-direction: row;
      height: 40px;
    }

    .control-button {
      width: 50px;
      font-size: 30px;
      line-height: 40px;
      background: hsl(216, 14%, 24%);
      border: none;
      cursor: pointer;
      color: white;
      margin: 0;
      padding: 0;
    }

    .blur-button:hover {
      background: hsl(216, 14%, 44%);
    }

    .indicator {
      background: hsl(219, 15%, 15%);
      width: 80px;
      color: white;
      font-size: 20px;
      text-align: center;
      line-height: 40px;
    }

    /* Card controller */

    .quantity-container {
      display: flex;
      flex-direction: column;
      box-shadow: 0 0 20px 0 hsla(0, 0%, 0%, 0.66);
      z-index: 2;
    }

  </style>
  <div style="background-image: url('img/tree.png')">
    <div class="flex justify-center my-6">
        <div class="flex bg-white shadow-lg flex-col bg-white w-full p-8 text-gray-800 pin-r pin-y md:w-4/5 lg:w-4/5">
          <div class="flex-1">
            <table class="w-full text-sm lg:text-base" cellspacing="0">
              <thead>
                <tr class="h-12 uppercase">
                  <th class="hidden md:table-cell"></th>
                  <th class="text-left">Product</th>
                  <th class="lg:text-right text-left pl-5 lg:pl-0">
                    <span class="lg:hidden" title="Quantity">Qtd</span>
                    <span class="hidden lg:inline">Quantity</span>
                  </th>
                  <th class="text-right">Total price</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($cart->getCartItem() as $item)  
                  <tr>
                    <td class="hidden pb-4 md:table-cell">
                      <a href="#">
                        <img src="https://limg.app/i/Calm-Cormorant-Catholic-Pinball-Blaster-yM4oub.jpeg" class="w-20 rounded" alt="Thumbnail">
                      </a>
                    </td>
                    <td>
                      <a href="#">
                        <p class="mb-2 md:ml-4">{{$item->product->name}}</p>
                          <button wire:click="removeItem({{$item->id}})" class="text-gray-700 md:ml-4">
                            <small >(Remove item)</small>
                          </button>
                      </a>
                    </td>
                    <td class="justify-center md:justify-end md:flex mt-6">
                      <div class="w-20 h-10">
                        <div class="relative flex flex-row w-full h-8">
                          <div class="quantity-container">
                            <div class="controls">
                              <button class="control-button" wire:click="decreaseQuantity({{$item->id}})">-</button>
                              <div id="quantity-level" class="indicator">{{$item->qty}}</div>
                              <button class="control-button" wire:click="increaseQuantity({{$item->id}})">+</button>
                            </div>
                          </div>
                      </div>
                    </td>
                    <td class="text-right">
                      <span class="text-sm lg:text-base font-medium">
                        $@php
                            if ($item->product->sale_price == 0) {
                                $sale ='';
                                echo $item->qty * $item->product->price;
                            } else {
                                echo $sale = $item->qty * $item->product->sale_price;
                            }
                        @endphp
                      </span>
                      @if (!empty($sale))
                        <span class="text-sm lg:text-base font-medium" style="color:red;text-decoration: line-through;">
                          ${{$item->qty * $item->product->price}}
                        </span>
                      @endif
                    </td>
                  </tr> 
                @endforeach
                {{$cart->setSubtotal()}}
              </tbody>
            </table>
            <br>
            <br>
            <div class="flex items-center w-1/2 ml-80 h-13 pl-3 bg-white bg-gray-100 border rounded-full">
                <input wire:model="coupon" type="coupon" id="coupon" placeholder="Apply coupon" 
                        class="w-full bg-gray-100 outline-none appearance-none focus:outline-none active:outline-none"/>
                  <button wire:click="applyCoupon()" type="submit" class="text-sm flex items-center px-3 py-1 text-white bg-gray-800 rounded-full outline-none md:px-4 hover:bg-gray-700 focus:outline-none active:outline-none">
                    <svg aria-hidden="true" data-prefix="fas" data-icon="gift" class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M32 448c0 17.7 14.3 32 32 32h160V320H32v128zm256 32h160c17.7 0 32-14.3 32-32V320H288v160zm192-320h-42.1c6.2-12.1 10.1-25.5 10.1-40 0-48.5-39.5-88-88-88-41.6 0-68.5 21.3-103 68.3-34.5-47-61.4-68.3-103-68.3-48.5 0-88 39.5-88 88 0 14.5 3.8 27.9 10.1 40H32c-17.7 0-32 14.3-32 32v80c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16v-80c0-17.7-14.3-32-32-32zm-326.1 0c-22.1 0-40-17.9-40-40s17.9-40 40-40c19.9 0 34.6 3.3 86.1 80h-86.1zm206.1 0h-86.1c51.4-76.5 65.7-80 86.1-80 22.1 0 40 17.9 40 40s-17.9 40-40 40z"/></svg>
                    <span class="font-medium">Apply coupon</span>
                  </button>
              </div>
              @error('coupon') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="bg-yellow-300 shadow-lg  py-8 px-6 -mx-2 lg:flex">
        <div>
          <div class="p-4 bg-gray-100 rounded-full">
            <h1 class="ml-2 font-bold uppercase">Order Details</h1>
          </div>
          <div class="p-4">
            <p class="mb-6 italic">Shipping and additionnal costs are calculated based on values you have entered</p>
              <div class="flex justify-between border-b">
                <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                  Subtotal
                </div>
                <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                  ${{$cart->getSubtotal()}}
                </div>
              </div>
                <div class="flex justify-between pt-4 border-b">
                  <div class="flex lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-gray-800">
                    
                      <button wire:click="removeCoupon()" type="submit" class="mr-2 mt-1 lg:mt-2">
                        <svg aria-hidden="true" data-prefix="far" data-icon="trash-alt" class="w-4 text-red-600 hover:text-red-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M268 416h24a12 12 0 0012-12V188a12 12 0 00-12-12h-24a12 12 0 00-12 12v216a12 12 0 0012 12zM432 80h-82.41l-34-56.7A48 48 0 00274.41 0H173.59a48 48 0 00-41.16 23.3L98.41 80H16A16 16 0 000 96v16a16 16 0 0016 16h16v336a48 48 0 0048 48h288a48 48 0 0048-48V128h16a16 16 0 0016-16V96a16 16 0 00-16-16zM171.84 50.91A6 6 0 01177 48h94a6 6 0 015.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0012-12V188a12 12 0 00-12-12h-24a12 12 0 00-12 12v216a12 12 0 0012 12z"/></svg>
                      </button>
                    Coupon "{{$coupon}}"
                  </div>
                  <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-green-700">
                    {{$cart->getAfterDiscount()}}
                  </div>
                </div>
                <div class="flex justify-between pt-4 border-b">
                  <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                    Total
                  </div>
                  <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                    ${{$cart->getTotal()}}
                  </div>
                </div>
              <a href="#">
                <button class="flex justify-center w-full px-10 py-3 mt-6 font-medium text-white uppercase bg-gray-800 rounded-full shadow item-center hover:bg-gray-700 focus:shadow-outline focus:outline-none">
                  <svg aria-hidden="true" data-prefix="far" data-icon="credit-card" class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M527.9 32H48.1C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48.1 48h479.8c26.6 0 48.1-21.5 48.1-48V80c0-26.5-21.5-48-48.1-48zM54.1 80h467.8c3.3 0 6 2.7 6 6v42H48.1V86c0-3.3 2.7-6 6-6zm467.8 352H54.1c-3.3 0-6-2.7-6-6V256h479.8v170c0 3.3-2.7 6-6 6zM192 332v40c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12zm192 0v40c0 6.6-5.4 12-12 12H236c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12z"/></svg>
                  <span class="ml-2 mt-5px">Procceed to checkout</span>
                </button>
              </a>
          </div>
        </div>
      </div>
    </div>
</div>
</div>