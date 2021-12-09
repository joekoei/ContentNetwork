<div class="flex justify-between h-5">
    <div class="flex">
        <!-- Logo -->
        <div class="flex-shrink-0 flex items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Administration Panel
            </h2>
        </div>

        <!-- Navigation Links -->
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link class="pb-3" :href="route('admin')" :active="request()->routeIs('admin')">
                Landingspage
            </x-nav-link>
            <x-nav-link class="pb-3" :href="route('admin.users')" :active="request()->routeIs('admin.users')">
                Users
            </x-nav-link>
            <x-nav-link class="pb-3"  :href="route('admin.stats')" :active="request()->routeIs('admin.stats')">
                Stats about content network
            </x-nav-link>
        </div>
    </div>
</div>
