<div class="relative">
    <img src="assets/media/img/partners" class="absolute inset-0 object-cover w-full h-full" alt="" />
    <div class="relative bg-gray-900 bg-opacity-75">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col items-center justify-between xl:flex-row">
                <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                        The quick, brown fox <br class="hidden md:block" />
                        jumps over a <span class="text-teal-accent-400">lazy dog</span>
                    </h2>
                    <p class="max-w-xl mb-4 text-base text-gray-400 md:text-lg">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.
                    </p>
                </div>
                <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                    <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
                        <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                            Devenez partenaire !
                        </h3>
                        <form method="post" action="partenaires">
                            <div class="mb-1 sm:mb-2">
                                <label for="name" class="inline-block mb-1 font-medium">Nom de l'organisation</label>
                                <input
                                        placeholder="ex: Croix rouge, Secour populaire ..."
                                        required= ""
                                        required minlength="3"
                                        type="text"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="name"
                                        name="name"
                                />
                            </div>
                            <div class="mb-1 sm:mb-2">
                                <label for="city" class="inline-block mb-1 font-medium">Ville</label>
                                <input
                                        placeholder="ex: Bordeaux"
                                        required=""
                                        type="text"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="city"
                                        name="city"
                                />
                            </div>
                            <div class="mb-1 sm:mb-2">
                                <label for="address" class="inline-block mb-1 font-medium">Adresse</label>
                                <input
                                        placeholder="ex: 8 rue Dupont"
                                        required=""
                                        type="text"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="address"
                                        name="address"
                                />
                            </div>
                            <div class="mb-1 sm:mb-2">
                                <label for="siret" class="inline-block mb-1 font-medium">Siret</label>
                                <input
                                        placeholder="ex: 362 521 879 00034"
                                        required=""
                                        type="text"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="siret"
                                        name="siret"
                                />
                            </div>
                            <div class="mb-1 sm:mb-2">
                                <label for="phone" class="inline-block mb-1 font-medium">Téléphone</label>
                                <input
                                        placeholder="ex: +33 5 67 89 12 34"
                                        required= ""
                                        type="text"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="phone"
                                        name="phone"
                                />
                            </div>
                            <div class="mb-1 sm:mb-2">
                                <label for="email" class="inline-block mb-1 font-medium">E-mail</label>
                                <input
                                        placeholder="jeandupont@exemple.com"
                                        required= ""
                                        type="email"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="email"
                                        name="email"
                                />
                            </div>
                            <div class="flex justify-center px-6 pt-0 pb-4 font-medium text-2xl rounded orange"> <?php getPartners(); ?> </div>
                            <div class="mt-4 mb-2 sm:mb-4">
                                <button type="submit"
                                        class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide transition duration-200 rounded hover:shadow-md bg-white border-2 border-yellow-600 hover:text-white hover:bg-yellow-600 focus:shadow-outline focus:outline-none">
                                    Soumettre le formulaire
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
