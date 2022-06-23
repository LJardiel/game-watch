<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-negro border border-transparent rounded-md font-semibold text-md text-white tracking-widest hover:bg-negrito active:bg-gray-900 focus:outline-none focus:border-blanco focus:ring ring-negrito disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
