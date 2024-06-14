<div
    role="alert"
    {{ $attributes->merge(['class' => 'relative w-full rounded-lg border px-2.5 py-3 sm:p-4 [&>svg~*]:pl-10 [&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-2 sm:[&>svg]:top-4 [&>svg]:text-foreground bg-background text-foreground'])}}>
    <x-lucide-info class="w-7 h-7 fill-success stroke-white" />
    <h5 class="text-sm sm:text-base mt-0.5 mb-2.5 underline font-medium leading-none tracking-tight">Info</h5>
    <div class="text-sm [&_p]:leading-relaxed">
        {{ $slot }}
    </div>
</div>
