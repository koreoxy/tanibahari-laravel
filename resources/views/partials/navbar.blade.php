
{{-- NAVBAR TEST --}}
<div class="navbar bg-emerald-700 flex">
    <div class="flex flex-row">
        <h1 class="text-white font-bold text-lg p-4">Tanibahari</h1>
        <div class="text-gray-400 font-bold text-lg p-4 px-2">
            <a class="px-2 {{ ($title === "Home") ? 'text-white' : '' }}" href="/">Home</a>
            <a class="px-2 {{ ($title === "About") ? 'text-white' : '' }}" href="/about">About</a>
            <a class="px-2 {{ ($title === "Product") ? 'text-white' : '' }}"" href="/product">product</a>
        </div>
    </div>
</div>