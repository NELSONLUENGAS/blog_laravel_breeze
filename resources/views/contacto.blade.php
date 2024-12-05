<x-blog-layout meta-title="Contacto | [Contact]" meta-description="The contact page">
    <section class=" px-4 py-8">
        <h1 class="text-4xl font-bold text-center mb-8 text-gray-800 dark:text-gray-200">Contacto</h1>

        <div class="max-w-2xl mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8">
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-6">
                Si tienes alguna pregunta o inquietud, por favor no dudes en ponerte en contacto con nosotros.
                Estaremos
                encantados de ayudarte.
            </p>

            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-gray-800 dark:text-gray-200 font-semibold">Nombre</label>
                    <input type="text" id="name" name="name" required
                        class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" />
                </div>

                <div>
                    <label for="email" class="block text-gray-800 dark:text-gray-200 font-semibold">Correo
                        Electrónico</label>
                    <input type="email" id="email" name="email" required
                        class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" />
                </div>

                <div>
                    <label for="message" class="block text-gray-800 dark:text-gray-200 font-semibold">Mensaje</label>
                    <textarea id="message" name="message" rows="5" required
                        class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"></textarea>
                </div>

                <div class="flex justify-center">
                    <button type="submit"
                        class="w-full bg-lime-500 text-white font-semibold py-3 rounded-lg hover:bg-lime-600 transition-colors duration-300">
                        Enviar Mensaje
                    </button>
                </div>
            </form>
        </div>

    </section>
</x-blog-layout>
