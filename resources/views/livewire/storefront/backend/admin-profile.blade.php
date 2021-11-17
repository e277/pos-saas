<div>
    <div class="grid grid-cols-1 p-10 sm:grid-cols-2  lg:grid-cols-2 gap-6">
        <x-input.label label="Name">
            <x-input.text wire:model="name" class="h-12" placeholder="Name"/>
        </x-input.label>

        <x-input.label label="Email">
            <x-input.text wire:model="email" class="h-12" placeholder="Email" disabled readonly/>
        </x-input.label>

    </div>

    <div>
        <div class="px-5 flex justify-center">
            <button
                wire:click="changePass"
                type="button"
                class="inline-flex items-center justify-center w-10/12 px-5 py-3 text-white bg-black rounded-lg "
            >
                <span class="font-medium"> Change Password </span>

            </button>
        </div>

        <div class="px-5" x-data="{changePasswordCheck:false}" x-on:change-password-check-open.window="changePasswordCheck = true" x-on:change-password-check-close.window="changePasswordCheck = false">
            <div
                x-show="changePasswordCheck"
                x-transition.enter.origin.bottom.duration.300ms
                class="grid grid-cols-1 p-5 sm:grid-cols-2 lg:grid-cols-1 gap-6">

                <x-input.label label="Current Password">
                    <x-input.text type="password" wire:model="passwordCheck" class="h-12"/>
                </x-input.label>

                <div class="px-5 flex justify-center">
                    <button
                        wire:click="changePassCheck"
                        type="button"
                        class="inline-flex items-center justify-center w-5/12 px-5 py-3 text-white bg-green-500 rounded-lg "
                    >
                        <span class="font-medium"> Change Password </span>

                    </button>
                </div>
            </div>
        </div>

        <div class="px-5" x-data="{ changePassword:false }" x-on:change-password-view-open.window="changePassword = true">
            <div x-show="changePassword"
                 x-transition.enter.origin.bottom.duration.300ms
                 class="grid grid-cols-1 p-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-2 gap-6">
                <x-input.label label="Password">
                    <x-input.text class="h-12"/>
                </x-input.label>

                <x-input.label label="Verify Password">
                    <x-input.text class="h-12"/>
                </x-input.label>
            </div>
        </div>

    </div>

</div>
