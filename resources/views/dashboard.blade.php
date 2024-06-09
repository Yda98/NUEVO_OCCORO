<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight py-0">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4 lg:py-4">
        <div class="max-w-12xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg yda">
                <div class="p-4 sm:p-6 lg:p-8 text-gray-900">
                    {{ __("You're logged in!") }}
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, ut architecto animi dolorem magni veritatis suscipit itaque asperiores vitae, inventore unde eligendi minima natus sit doloremque minus? Exercitationem, iure voluptatibus.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    .yda {
        background-color: rgb(12, 235, 45);
        border-radius: 10px;
    }
</style>