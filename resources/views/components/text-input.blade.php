@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-luxury-navy/50 border-luxury-gold/20 text-gray-200 focus:border-luxury-gold focus:ring-luxury-gold rounded-md shadow-sm placeholder-gray-500']) }}>
