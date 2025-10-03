<a {{ $attributes->class([
    'rounded-md px-3 py-2 text-sm font-medium',
    'bg-gray-900 dark:bg-gray-950/50 text-white' => $attributes->get('active'),
    'text-gray-300 hover:bg-white/5 hover:text-white' => ! $attributes->get('active'),
]) }}>
{{ $slot }}
</a>
