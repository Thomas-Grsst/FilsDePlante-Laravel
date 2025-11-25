<main class="max-w-7xl mx-auto p-6 space-y-16">
        <!-- Contact Grid -->
        <div class="grid md:grid-cols-2 gap-12">

            
            <!-- Informations de contact -->
            <div class="space-y-6 p-4 rounded-lg">
                <x-title>Restons en contact</x-title>
                <p class="text-gray-500">N'hésitez pas à nous contacter pour toute question concernant les plantes, votre potager ou nos guides. Notre équipe de passionnés se fera un plaisir de vous répondre.</p>

                <div class="space-y-4 shadow-2xl p-4 rounded-lg">
                    <!-- Adresse -->
                    <div class="flex items-start space-x-4 bg-white border-b border-solid border-gray-300 p-4">
                        <div class="text-green-700 bg-green-200 text-2xl flex items-center justify-center w-[50px] h-[50px] rounded-full">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">Notre adresse</h3>
                            <p>Basilique Notre-Dame de Fourvière, 8 Pl. de Fourvière,<br>69005 Lyon, France</p>
                        </div>
                    </div>

                    <!-- Téléphone -->
                    <div class="flex items-start space-x-4 bg-white border-b border-solid border-gray-300 p-4">
                        <div class="text-green-700 bg-green-200 text-2xl flex items-center justify-center w-[50px] h-[50px] rounded-full">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">Téléphone</h3>
                            <p>+33 1 23 45 67 89</p>
                            <small class="text-gray-500">Lun-Ven: 9h-18h</small>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start space-x-4 bg-white border-b border-solid border-gray-300 p-4">
                        <div class="text-green-700 bg-green-200 text-2xl flex items-center justify-center w-[50px] h-[50px] rounded-full">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">Email</h3>
                            <p>contact@filsdeplante.fr</p>
                            <small class="text-gray-500">Réponse sous 24h</small>
                        </div>
                    </div>

                    <!-- Réseaux sociaux -->
                    <div class="flex items-start space-x-4 bg-white p-4">
                        <div class="text-green-700 bg-green-200 text-2xl flex items-center justify-center w-[50px] h-[50px] rounded-full">
                            <i class="fas fa-share-alt"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">Réseaux sociaux</h3>
                            <div class="flex space-x-3 mt-2 text-gray-600">
                                <a href="#" class="hover:text-green-700"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="hover:text-green-700"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="hover:text-green-700"><i class="fab fa-pinterest"></i></a>
                                <a href="#" class="hover:text-green-700"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de contact -->
            <div class="space-y-6 shadow-2xl p-4 rounded-lg">
                <x-title>Envoyez-nous un message</x-title>
                <form class="space-y-4" id="contactForm">
                    <div>
                        <label for="name" class="block font-medium text-gray-700">Nom complet *</label>
                        <input type="text" id="name" name="name" required class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                        <span class="text-red-500 text-sm" id="nameError"></span>
                    </div>

                    <div>
                        <label for="email" class="block font-medium text-gray-700">Adresse email *</label>
                        <input type="email" id="email" name="email" required class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                        <span class="text-red-500 text-sm" id="emailError"></span>
                    </div>

                    <div>
                        <label for="subject" class="block font-medium text-gray-700">Sujet *</label>
                        <select id="subject" name="subject" required class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                            <option value="">Choisissez un sujet</option>
                            <option value="question">Question sur les plantes</option>
                            <option value="ajout">Ajouter une plante</option>
                            <option value="potager">Conseil potager</option>
                            <option value="technical">Problème technique</option>
                            <option value="partnership">Partenariat</option>
                            <option value="other">Autre</option>
                        </select>
                        <span class="text-red-500 text-sm" id="subjectError"></span>
                    </div>

                    <div>
                        <label for="message" class="block font-medium text-gray-700">Message *</label>
                        <textarea id="message" name="message" rows="5" required class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500"></textarea>
                        <span class="text-red-500 text-sm" id="messageError"></span>
                    </div>

                    <button type="submit" class="mt-30 w-full bg-accent text-white py-3 rounded-lg hover:bg-amber-600 transition flex items-center justify-center space-x-2">
                        <i class="fas fa-paper-plane"></i>
                        <span>Envoyer le message</span>
                    </button>
                </form>

                <div id="formSuccess" class="hidden mt-4 p-4 bg-green-50 border border-green-200 rounded-lg text-green-700">
                    <i class="fas fa-check-circle"></i>
                    <h3 class="font-semibold">Message envoyé avec succès !</h3>
                    <p>Merci de nous avoir contactés. Nous vous répondrons dans les plus brefs délais.</p>
                </div>
            </div>
        </div>

        <!-- Carte -->
        <div class="space-y-4">
            <x-title>Nous trouver</x-title>
            <div class="w-full h-96">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.781379071577!2d4.822357176887648!3d45.76218897108015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDXCsDQ1JzQzLjkiTiA0wrA0OScyMi4xIkU!5e0!3m2!1sfr!2sfr!4v1712345678901!5m2!1sfr!2sfr" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                    title="Carte localisation Fils de Plante">
                </iframe>
            </div>
        </div>

        <!-- FAQ -->
        <div class="space-y-4">
            <h2 class="text-3xl font-bold text-green-700">Questions fréquentes</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-green-50 p-4 rounded-lg">
                    <h3 class="font-semibold"><i class="fas fa-seedling"></i> Comment créer mon premier potager ?</h3>
                    <p>Nous recommandons de commencer par une petite surface, de bien préparer le sol et de choisir des plantes adaptées à votre région et à la saison.</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <h3 class="font-semibold"><i class="fas fa-leaf"></i> Quelle est la meilleure période pour planter ?</h3>
                    <p>Cela dépend des plantes. En général, le printemps est idéal pour la plupart des végétaux, mais certains se plantent à l'automne.</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <h3 class="font-semibold"><i class="fas fa-book"></i> Où trouver vos guides complets ?</h3>
                    <p>Tous nos guides sont disponibles dans la section "Guides" de notre site. Ils sont classés par thématique et par niveau de difficulté.</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <h3 class="font-semibold"><i class="fas fa-truck"></i> Livrez-vous des plantes ?</h3>
                    <p>Nous ne vendons pas directement de plantes, mais nous pouvons vous orienter vers nos pépiniéristes partenaires selon votre région.</p>
                </div>
            </div>
        </div>
    </main>