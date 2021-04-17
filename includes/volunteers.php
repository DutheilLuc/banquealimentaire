<?php $allPartners = getAllPartners(); ?>
<div class="relative">
    <img src="https://www.banquealimentaire.org/sites/default/files/styles/title_banner/public/2018-08/header%20tous%20ensemble%20gilets%20orange%20banques%20alimentaires.jpg?itok=EqglWQkj" class="absolute inset-0 object-cover w-full h-full" alt="" />
    <div class="relative bg-gray-900 bg-opacity-75">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col items-center justify-between xl:flex-row">
                <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                        La force du bénévolat : <br class="hidden md:block" />
                    </h2>
                    <p class="max-w-xl mb-4 text-base text-gray-400 md:text-lg">
                        Les Banques Alimentaires bénéficient du temps indispensable des femmes et des hommes, bénévoles à plus de 90% des effectifs. Ils effectuent de nombreuses tâches au quotidien : accueil des associations, tri, ramasse…  Au total, plus de 6.800 bénévoles donnent de leur temps.
                    </p>
                </div>
                <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                    <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
                        <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                            Devenez bénévoles !
                        </h3>
                        <form action="benevoles" method="post">
                            <div class="mb-1 sm:mb-2">
                                <label for="partner" class="inline-block mb-1 font-medium">Choisir un partenaire</label>
                                <select class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline" name="partner" id="partner">
                                    <?php foreach($allPartners as $partner) {
                                    ?> <option value=" <?= $partner['id'] ?> "> <?= $partner['name'] ?> </option> <?php
                                    } ?>
                                </select>
                            </div>
                            <div class="mb-1 sm:mb-2">
                                <label for="firstname" class="inline-block mb-1 font-medium">Nom</label>
                                <input
                                    placeholder="ex: Dupont"
                                    required=""
                                    type="text"
                                    class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                    id="firstname"
                                    name="firstname"
                                />
                            </div>
                            <div class="mb-1 sm:mb-2">
                                <label for="lastname" class="inline-block mb-1 font-medium">Prenom</label>
                                <input
                                    placeholder="ex: Jean"
                                    required=""
                                    type="text"
                                    class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                    id="lastname"
                                    name="lastname"
                                />
                            </div>
                            <div class="mb-1 sm:mb-2">
                                <label for="phone" class="inline-block mb-1 font-medium">Téléphone (optionnel)</label>
                                <input
                                        placeholder="+33 5 67 89 12 34"
                                        type="tel"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="phone"
                                        name="phone"
                                />
                            </div>
                            <div class="mb-1 sm:mb-2">
                                <label for="email" class="inline-block mb-1 font-medium">E-mail</label>
                                <input
                                    placeholder="jeandupont@exemple.com"
                                    required=""
                                    type="email"
                                    class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                    id="email"
                                    name="email"
                                />
                            </div>
                            <div class="flex justify-center px-6 pt-0 pb-4 font-medium text-2xl rounded orange"> <?php getVolunteers(); ?> </div>
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
<script>
    var json = <?= json_encode(getAllPartners()); ?>
</script>
