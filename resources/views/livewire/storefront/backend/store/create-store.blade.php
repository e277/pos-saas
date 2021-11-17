<div x-data="{ isSlide: 'form1' }"
     x-on:first-form.window="isSlide = 'form1'"
     class="flex items-center h-screen justify-center overflow-auto inset-0 ">

    <x-form wire:submit.prevent="createStore"
            grid="1" class="w-full h-full flex p-4 flex-col   ">

        <x-slot name="title">

            <h1 class="text-2xl pb-1 mt-4 text-gray-700 font-semibold"> Create Your Store </h1>

            <hr>

        </x-slot>

        <div class="py-3 mt-2 p-3 space-y-4 h-full -mx-3 overflow-y-auto whitespace-nowrap scroll-hidden">

            <div x-show="isSlide === 'form1'"
                 class="w-full grid grid-cols-3 gap-3 transition transform ">

                <div class="col-span-full ">

                    <h1 class="text-lg pb-1 text-gray-700 italic font-semibold">

                        Personalize Your Store

                    </h1>

                </div>

                <x-input.label label="Store Name">

                    <x-input.text wire:model="store.name"
                                  :error="$errors->first('store.name')"
                                  type="text"/>

                </x-input.label>

                <x-input.label label="Store Type">

                    <x-input.select wire:model="store.store_type_id"
                                    :error="$errors->first('store.store_type_id')"
                                    field="type" :option="$storeType"/>

                </x-input.label>

                <x-input.label label="Page Title">

                    <x-input.text wire:model="store.title"
                                  :error="$errors->first('store.title')"
                                  type="text"/>

                </x-input.label>

                <x-input.label label="Banner Message">

                    <x-input.text wire:model="store.banner_message"
                                  :error="$errors->first('store.banner_message')"
                                  type="text"/>

                </x-input.label>

                <x-input.label label="Store Color Theme">

                    <x-input.select field="Color" wire:model="store.theme"
                                    :error="$errors->first('store.theme')">

                        <option value="blue" class="capitalize">Blue</option>
                        <option value="red" class="capitalize">red</option>
                        <option value="yellow" class="capitalize">yellow</option>
                        <option value="orange" class="capitalize">orange</option>
                        <option value="green" class="capitalize">green</option>
                        <option value="gray" class="capitalize">gray</option>
                        <option value="indigo" class="capitalize">indigo</option>

                    </x-input.select>

                </x-input.label>

            </div>

            <div x-show="isSlide === 'form2'"
                 class="w-full grid grid-cols-3 gap-3 transform transition ">

                <div class="col-span-full">

                    <h1 class="text-lg pb-1 text-gray-700 italic font-semibold">

                        Contact and Store Details

                    </h1>

                </div>

                <x-input.label label="Contact Number">

                    <x-input.text wire:model="contact.contact_num"
                                  :error="$errors->first('contact.contact_num')"
                                  type="tel"/>

                </x-input.label>

                <x-input.label label="Contact Email">

                    <x-input.text wire:model="contact.contact_email"
                                  :error="$errors->first('contact.contact_email')"
                                  type="email"/>

                </x-input.label>

                <x-input.label label="Contact Location">

                    <x-input.textarea wire:model="contact.contact_location"
                                      :error="$errors->first('contact.contact_location')"
                                      type="text"/>

                </x-input.label>

                <x-input.label label="Slogan">

                    <x-input.textarea wire:model="store.slogan"
                                      :error="$errors->first('store.slogan')"/>

                </x-input.label>

                <x-input.label label="mission">

                    <x-input.textarea wire:model="store.mission"
                                      :error="$errors->first('store.mission')"/>

                </x-input.label>

                <x-input.label label="Description">

                    <x-input.textarea wire:model="store.desc"
                                      :error="$errors->first('store.desc')"/>

                </x-input.label>

            </div>

            <div x-show="isSlide === 'form3'"
                 class="w-full grid grid-cols-3 gap-3">

                <div class="col-span-full">

                    <h1 class="text-lg pb-1 text-gray-700 italic font-semibold">

                        Customize Your Page

                    </h1>

                </div>

                <div class=" h-52 w-64">

                    <x-input.label :label="false">

                        <div class="flex flex-col space-x-2 h-full w-full justify-center items-center">

                            <div class=" h-52 w-64 flex top-0 overflow-hidden bg-gray-100">

                                @if($upload)

                                    <img src="{{ $upload->temporaryUrl() }}"
                                         class="h-full w-full object-fill" alt="avatar">

                                @else

                                    <img src="{{ $store->logoUrl() }}" class="h-full w-full" alt="avatar">

                                @endif

                            </div>

                            <div x-data="{ focus: false }">

                                <x-input.text class="sr-only" id="file"
                                              @focus="focus = true" @blur="focus=false"
                                              type="file"
                                              wire:model="upload"/>

                                @if($errors->first('upload'))

                                    <span class="text-red-500 text-xs italic  m-1">

                                * {{ $errors->first('upload') }}

                            </span>

                                @endif

                            </div>

                        </div>

                    </x-input.label>

                </div>

                <div class="lg:col-span-2 md:col-span-1 col-span-1 overflow-y-scroll h-52 ">

                    <x-input.label label="Photo" for="bannerUpload">

                        <x-input.filepond wire:model="bannerUpload"
                                          multiple/>

                        <div>
                            @if($errors->first('bannerUpload'))

                                <span class="text-red-500 text-xs italic  m-1">

                                    * {{ $errors->first('bannerUpload') }}

                                </span>

                            @endif
                        </div>

                    </x-input.label>

                </div>

            </div>

        </div>

        <x-input.submit @click.prevent="isSlide = 'form2'"
                        x-show="isSlide === 'form1'"
                        class="bg-transparent hover:bg-gray-800 shadow-lg
                               text-black hover:text-white">

            Next

        </x-input.submit>

        <div class="flex justify-between -mt-10 w-full">

            <x-input.submit @click.prevent="isSlide = 'form1'"
                            x-show="isSlide === 'form2'"
                            class="bg-transparent hover:bg-gray-800 shadow-lg
                                   text-black hover:text-white">

                Back

            </x-input.submit>


            <x-input.submit @click.prevent="isSlide = 'form3'"
                            x-show="isSlide === 'form2'"
                            class="bg-transparent hover:bg-gray-800 shadow-lg
                                   text-black hover:text-white">

                Next

            </x-input.submit>

        </div>

        <div class="flex justify-between -mt-10 w-full">

            <x-input.submit @click.prevent="isSlide = 'form2'"
                            x-show="isSlide === 'form3'"
                            class="bg-transparent hover:bg-gray-800 shadow-lg
                                   text-black hover:text-white">

                Back

            </x-input.submit>


            <x-input.submit
                x-show="isSlide === 'form3'"
                class="bg-blue-600 hover:bg-blue-800
                        text-white hover:text-white">

                Submit

            </x-input.submit>

        </div>

    </x-form>

</div>
