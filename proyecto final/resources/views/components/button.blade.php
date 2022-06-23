<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-negro  border-b-4 border-b-black border-t-4 border-t-negrito hover:bg-negrito hover:border-b-negro hover:border-t-gray-500 shadow-xl font-semibold text-md text-white tracking-widest active:border-negrito disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
