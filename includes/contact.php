
<div class="contact-1 py-4 md:py-12">
    <div class="container mx-auto px-4">
        <div class="xl:flex -mx-4">
            <div class="xl:w-10/12 xl:mx-auto px-4">

                <div class="xl:w-3/4 mb-4">
                    <h1 class="text-3xl text-medium mb-4">Ensemble aidons l'homme à se restaurer</h1>
                    <p class="text-xl mb-2">Les Banques Alimentaires, premier réseau d'aide alimentaire en France depuis plus de 35 ans.</p>
                    <p>Appelez-nous au : <a href="tel:05 56 43 10 63" class="orange border-b border-transparent hover:border-yellow-600 transition-colors duration-300">+33 5 56 43 10 63</a></p>
                </div>

                <div class="md:flex md:-mx-4 mt-4 md:mt-10">
                        <div class="md:w-2/3 md:px-4">
                            <form method="POST" class="contact-form" action="contact">
                                <div class="sm:flex sm:flex-wrap -mx-3">
                                    <div class="sm:w-1/2 px-3 mb-6">
                                        <input type="text" placeholder="Nom" required="" name="nom" class="border-2 rounded px-3 py-1 w-full focus:border-yellow-400 input">
                                    </div>
                                    <div class="sm:w-1/2 px-3 mb-6">
                                        <input type="text" placeholder="Prenom" required="" name="prenom" class="border-2 rounded px-3 py-1 w-full focus:border-yellow-400 input">
                                    </div>
                                    <div class="sm:w-1/2 px-3 mb-6">
                                        <input type="email" placeholder="E-mail" required="" name="email" class="border-2 rounded px-3 py-1 w-full focus:border-yellow-400 input">
                                    </div>
                                    <div class="sm:w-1/2 px-3 mb-6">
                                        <input type="tel" placeholder="N° de téléphone (optionnel)" name="phone" class="border-2 rounded px-3 py-1 w-full focus:border-yellow-400 input">
                                    </div>
                                    <div class="sm:w-full px-3">
                                        <textarea name="message" id="message" required="" cols="30" rows="4" placeholder="Votre message ..." class="border-2 rounded px-3 py-1 w-full focus:border-indigo-400 input"></textarea>
                                    </div>
                                </div>
                                <div class="text-right mt-4 md:mt-12">
                                    <div class="flex justify-center px-6 pt-0 pb-4 font-medium text-2xl rounded orange"> <?php getMessage(); ?> </div>
                                    <button type="submit"
                                            type="text"
                                            class="border-2 border-yellow-600 rounded px-6 py-2 orange hover:bg-yellow-600 hover:text-white transition-colors duration-300">
                                        Envoyer
                                        <i class="fas fa-chevron-right ml-2 text-sm"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                    <div class="md:w-1/3 md:px-4 mt-10 md:mt-0">
                        <div class="bg-yellow-100 rounded py-4 px-6">
                            <h5 class="text-xl font-medium mb-3">Aide</h5>
                            <p class="text-gray-700 mb-4">Besoin d'aide ou des questions ? N'hesitez pas à nous contacter directement par <a href="mailto:ba330@banquealimentaire.org" class="orange border-b border-transparent hover:border-yellow-600 inline-block">email</a> ou appelez-nous au <a href="tel:05 56 43 10 63" class="orange border-b border-transparent hover:border-yellow-600 inline-block">+33 5 56 43 10 63</a></p>
                            <p class="text-gray-700">Vous pouvez aller sur <a href="<?= DOMAIN ?>/a-propos" class="orange border-b border-transparent hover:border-yellow-600 inline-block">À propos</a> pour plus d'information à propos du fonctionnement de la banque alimentaire.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

