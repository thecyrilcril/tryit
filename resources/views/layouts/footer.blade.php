<footer
    x-ref="footer"
    x-data="{
        async init() {
            await $nextTick(),
            this.footerHeight = $refs.footer.offsetHeight
        }
    }"
    class="text-gray-50 bg-gray-700 relative px-4 xl:px-0"
>
    <div class="max-w-7xl mx-auto py-7 font-light">
        © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
    </div>
</footer>
