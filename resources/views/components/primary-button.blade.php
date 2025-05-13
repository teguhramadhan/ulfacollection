<button
  {{
    $attributes->merge([
      'type' => 'submit',
      'class' => 'w-full md:w-auto items-center px-4 py-2 bg-primary border border-transparent font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary/80 focus:bg-primary/80 active:bg-primary/80 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1 transition ease-in-out duration-150 py-4'
    ])
  }}
>
  {{ $slot }}
</button>
