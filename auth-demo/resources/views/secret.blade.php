<x-layouts::app :title="__('Members Only')">
    <div class="flex h-full w-full flex-1 flex-col items-center justify-center gap-4 text-center">
        <h1 class="text-3xl font-bold">Members only girlypop!</h1>
        <p class="text-neutral-600 dark:text-neutral-400">
            If you can see this page, you're logged in. Log out and visit
            <code>/secret</code> again — the <code>auth</code> middleware will bounce you to <code>/login</code>.
        </p>
    </div>
</x-layouts::app>
