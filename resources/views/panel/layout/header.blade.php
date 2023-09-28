<div>
    <header class="bg-cyan-400 p-4 text-emerald-950">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">Panel</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>

            </form>

            <nav class="mt-2">
                <a href="#" class="text-white mr-4">Home</a>
                <a href="#" class="text-white mr-4">About</a>
                <a href="#" class="text-white mr-4">Contact us</a>
            </nav>
        </div>
    </header>
</div>
