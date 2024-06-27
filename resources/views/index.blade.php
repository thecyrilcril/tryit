<x-guest-layout>
    <div class="w-full lg:max-w-7xl px-4 xl:px-0 mt-6 py-6 mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-[40%_60%] items-center min-h-[70vh]">
            <div>
                <h1 class="font-black font-heading text-gray-700 text-4xl mb-3">Build Apps Quickly</h1>
                <p class="font-light text-xl">Get started with kit's opinionated defaults.</p>
            </div>
            <x-kit.carousel>
                <x-kit.carousel-item @mouseenter="vibrate = true" @mouseleave="vibrate = false" x-data="{ vibrate: false}"
                    class="rounded-2xl shadow-md bg-white py-12 px-8 w-[374px]"
                >
                    <div class="rounded-xl ring-2 ring-purple-100 p-8 inline-block mb-8 bg-white">
                        <div :class="{'animate-vibrate': vibrate}">
                            <x-icons.secure-payments class="text-purple-600 w-16 h-16" />
                        </div>
                    </div>
                    <h5 class="font-bold font-heading text-2xl lg:text-2xl text-gray-800 mb-3">Payment Gateways</h5>
                    <div class="font-light text-lg">
                        <p class="leading-7">Swappable Payments Gateways</p>
                        <ul class="list-inside list-disc">
                            <li>Flutterwave.</li>
                            <li>Kriptup.</li>
                            <li>Monnify.</li>
                            <li>Paystack.</li>
                        </ul>
                    </div>
                </x-kit.carousel-item>
                <x-kit.carousel-item @mouseenter="vibrate = true" @mouseleave="vibrate = false" x-data="{ vibrate: false}"
                    class="rounded-2xl shadow-md bg-white py-12 px-8 w-[374px]"
                >
                    <div class="rounded-xl ring-2 ring-purple-100 p-8 inline-block mb-8 bg-white">
                        <div :class="{'animate-vibrate': vibrate}">
                            <x-icons.medal class="text-purple-600 w-16 h-16" />
                        </div>
                    </div>
                    <h5 class="font-bold font-heading text-2xl lg:text-2xl text-gray-800 mb-3">Custom Animations</h5>
                    <div class="font-light text-lg">
                        <p class="leading-7">Custom TailwindCss animations</p>
                        <ul class="list-inside list-disc">
                            <li><code>animate-bounce-y</code></li>
                            <li><code>animate-vibrate</code></li>
                        </ul>
                    </div>
                </x-kit.carousel-item>
                <x-kit.carousel-item @mouseenter="vibrate = true" @mouseleave="vibrate = false" x-data="{ vibrate: false}"
                    class="rounded-2xl shadow-md bg-white py-12 px-8 w-[374px]"
                >
                    <div class="rounded-xl ring-2 ring-purple-100 p-8 inline-block mb-8 bg-white">
                        <div :class="{'animate-vibrate': vibrate}">
                            <x-icons.wallet class="text-purple-600 w-16 h-16" />
                        </div>
                    </div>
                    <h5 class="font-bold font-heading text-2xl lg:text-2xl text-gray-800 mb-3">User Wallets</h5>
                    <div class="font-light text-lg">
                        <p class="leading-7">Wallets powered by:</p>
                        <ul class="list-inside list-disc">
                            <li>Flutterwave.</li>
                            <li>Paystack</li>
                            <li>Monnify(soon)</li>
                            <li>+ more providers</li>
                        </ul>
                    </div>
                </x-kit.carousel-item>
            </x-kit.carousel>
        </div>
    </div>
    <x-kit.faqs />
    <div class="w-full lg:max-w-7xl px-4 xl:px-0 mt-6 py-6 mx-auto">
        <p class="font-light">
            Lorem ipsum dolor sit amet consectetur adipisicing, elit. Autem expedita temporibus molestiae dolorum a veniam nam eius neque! Accusamus obcaecati culpa omnis suscipit, ipsa, sunt possimus odit temporibus beatae unde hic aliquid quam eius rem iste autem ipsam voluptatum, voluptates. Aliquam, ab rerum. Minus animi obcaecati cum similique quisquam quibusdam repellat atque ut, dolore nisi culpa consequuntur. Veritatis tempora dolore sit odio ipsam ut amet repellat suscipit magni cum harum, sed nam nostrum repellendus quasi impedit est quidem soluta expedita, itaque consequuntur quam minima. Repudiandae rem provident tempora officiis, earum atque. Neque, officiis! Dolorum, eos. Omnis tempora ipsa praesentium quo doloribus necessitatibus ipsum laborum. Ex omnis quas rerum iure, numquam, consequuntur, commodi libero assumenda ea totam ducimus soluta, blanditiis vitae sint. Fuga quasi perspiciatis odit atque itaque dicta minus recusandae cupiditate doloribus nisi aliquam porro quae veniam, accusantium aut quidem enim magnam inventore neque asperiores magni ullam officiis. Maiores architecto sed similique libero, natus delectus quaerat fugiat quia rerum ipsa illo repellendus laboriosam ut fuga veritatis eligendi praesentium quam. Similique dolore illo, vero consequuntur numquam sed temporibus ipsam, quidem beatae veritatis velit nulla voluptates, obcaecati nam voluptas nostrum dolor suscipit. Nesciunt consequatur reprehenderit fugit delectus quibusdam aperiam iste fuga, necessitatibus dolor nihil dolorem deserunt voluptas aut fugiat odit explicabo ut unde? Voluptas harum animi itaque enim nostrum saepe, sint debitis quod optio expedita exercitationem veniam excepturi quia fugit, nesciunt temporibus est reiciendis ad recusandae tempora dolorem dignissimos reprehenderit perferendis sequi repudiandae! Soluta, tenetur tempore, sed consequatur quam in facere error nisi reprehenderit quaerat odio harum sequi est voluptate odit veniam, obcaecati. Nam, maiores? Commodi facere sed rem qui laudantium quod ratione hic, placeat tempore incidunt corporis at. Recusandae, excepturi libero voluptatem mollitia cumque illo id provident ipsam, eum ducimus nam debitis quos sapiente incidunt. Incidunt at nostrum obcaecati facere odit labore deleniti inventore consequuntur suscipit qui ducimus adipisci aliquam deserunt, hic architecto error atque cum soluta provident sit! Repudiandae vel molestiae fugit quo eaque aliquid nam, esse sequi, dolor exercitationem quis voluptatibus in similique aperiam, repellat alias velit nesciunt. Unde in inventore, eius consequatur enim blanditiis pariatur labore vitae neque aut voluptate, iste quod accusamus fugit ea veniam animi veritatis dolor ad velit non maiores, molestias. Voluptatem quas eum nihil.
        </p>
    </div>
</x-guest-layout>
