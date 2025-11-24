<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlantCare;
use App\Models\Plant;

class PlantCareSeeder extends Seeder
{
    public function run(): void
    {
        // Récupérer les plantes pour avoir leurs IDs
        $laitue = Plant::where('name', 'Laitue')->first();
        $epinard = Plant::where('name', 'Épinard')->first();
        $blette = Plant::where('name', 'Blette')->first();
        $roquette = Plant::where('name', 'Roquette')->first();
        $chou = Plant::where('name', 'Chou')->first();
        $endive = Plant::where('name', 'Endive')->first();
        $mache = Plant::where('name', 'Mâche')->first();
        $carotte = Plant::where('name', 'Carotte')->first();
        $radis = Plant::where('name', 'Radis')->first();
        $navet = Plant::where('name', 'Navet')->first();
        $betterave = Plant::where('name', 'Betterave')->first();
        $panais = Plant::where('name', 'Panais')->first();
        $celeriRave = Plant::where('name', 'Céleri-rave')->first();
        $pommeDeTerre = Plant::where('name', 'Pomme de terre')->first();
        $topinambour = Plant::where('name', 'Topinambour')->first();
        $haricotVert = Plant::where('name', 'Haricot vert')->first();
        $pois = Plant::where('name', 'Pois')->first();
        $feve = Plant::where('name', 'Fève')->first();
        $tomate = Plant::where('name', 'Tomate')->first();
        $poivron = Plant::where('name', 'Poivron')->first();
        $aubergine = Plant::where('name', 'Aubergine')->first();
        $courgette = Plant::where('name', 'Courgette')->first();
        $courge = Plant::where('name', 'Courge')->first();
        $concombre = Plant::where('name', 'Concombre')->first();
        $cornichon = Plant::where('name', 'Cornichon')->first();
        $melon = Plant::where('name', 'Melon')->first();
        $pasteque = Plant::where('name', 'Pastèque')->first();
        $oignon = Plant::where('name', 'Oignon')->first();
        $ail = Plant::where('name', 'Ail')->first();
        $echalote = Plant::where('name', 'Échalote')->first();
        $poireau = Plant::where('name', 'Poireau')->first();
        $ciboule = Plant::where('name', 'Ciboule')->first();
        $persil = Plant::where('name', 'Persil')->first();
        $basilic = Plant::where('name', 'Basilic')->first();
        $thym = Plant::where('name', 'Thym')->first();
        $romarin = Plant::where('name', 'Romarin')->first();
        $origan = Plant::where('name', 'Origan')->first();
        $sauge = Plant::where('name', 'Sauge')->first();
        $menthe = Plant::where('name', 'Menthe')->first();
        $ciboulette = Plant::where('name', 'Ciboulette')->first();
        $coriandre = Plant::where('name', 'Coriandre')->first();
        $estragon = Plant::where('name', 'Estragon')->first();
        $aneth = Plant::where('name', 'Aneth')->first();
        $fraise = Plant::where('name', 'Fraise')->first();
        $framboisier = Plant::where('name', 'Framboisier')->first();
        $cassis = Plant::where('name', 'Cassis')->first();
        $groseillier = Plant::where('name', 'Groseillier')->first();
        $murier = Plant::where('name', 'Mûrier')->first();
        $myrtillier = Plant::where('name', 'Myrtillier')->first();
        $pommier = Plant::where('name', 'Pommier')->first();
        $poirier = Plant::where('name', 'Poirier')->first();
        $prunier = Plant::where('name', 'Prunier')->first();
        $cerisier = Plant::where('name', 'Cerisier')->first();
        $abricotier = Plant::where('name', 'Abricotier')->first();
        $pecher = Plant::where('name', 'Pêcher')->first();
        $noyer = Plant::where('name', 'Noyer')->first();
        $noisetier = Plant::where('name', 'Noisetier')->first();

        // Vérifier que la laitue existe avant de créer les soins
        if ($laitue) {
            PlantCare::create([
                'plant_id' => $laitue->id,
                'plantation' => 'Février à Septembre',
                'recolte' => 'Avril à Novembre',
                'exposition' => 'Mi-ombre',
                'arrosage' => 'Régulier pour garder la terre fraîche',
                'entretien' => 'Protéger des limaces, récolter le matin',
                'conseil' => 'Planter en escalier pour avoir des récoltes étalées'
            ]);
        }

        if ($chou) {
            PlantCare::create([
                'plant_id' => $chou->id,
                'plantation' => 'Mars à Juillet selon les variétés',
                'recolte' => 'Mai à Décembre selon les variétés',
                'exposition' => 'Soleil',
                'arrosage' => 'Régulier surtout après la plantation',
                'entretien' => 'Butter les plants, protéger des parasites',
                'conseil' => 'Planter des œillets d\'Inde à proximité pour éloigner les papillons',
            ]);
        }

        if ($epinard) {
            PlantCare::create([
                'plant_id' => $epinard->id,
                'plantation' => 'Mars à Septembre',
                'recolte' => 'Avril à Octobre',
                'exposition' => 'Mi-ombre',
                'arrosage' => 'Régulier pour garder le sol frais',
                'entretien' => 'Éclaircir après la levée',
                'conseil' => 'Semer en lignes espacées de 30 cm',
            ]);
        }

        if ($blette) {
            PlantCare::create([
                'plant_id' => $blette->id,
                'plantation' => 'Mars à Juin',
                'recolte' => 'Juin à Octobre',
                'exposition' => 'Soleil ou mi-ombre',
                'arrosage' => 'Régulier pour des côtes tendres',
                'entretien' => 'Éclaircir après la levée, binage régulier',
                'conseil' => 'Récolter les côtes extérieures en premier pour favoriser la croissance des jeunes feuilles',
            ]);
        }

        if ($roquette) {
            PlantCare::create([
                'plant_id' => $roquette->id,
                'plantation' => 'Mars à Septembre',
                'recolte' => 'Avril à Octobre',
                'exposition' => 'Soleil ou mi-ombre',
                'arrosage' => 'Régulier pour garder le sol frais',
                'entretien' => 'Éclaircir après la levée',
                'conseil' => 'Semer en lignes espacées de 20 cm',
            ]);
        }

        if ($endive) {
            PlantCare::create([
                'plant_id' => $endive->id,
                'plantation' => 'Mai à Juin (racines)',
                'recolte' => 'Octobre à Mars (forçage)',
                'exposition' => 'Soleil pour les racines, obscurité pour le forçage',
                'arrosage' => 'Modéré pour les racines',
                'entretien' => 'Arracher les racines, les forcer à l\'obscurité',
                'conseil' => 'Forcer les racines progressivement pour une production étalée',
            ]);
        }

        if ($mache) {
            PlantCare::create([
                'plant_id' => $mache->id,
                'plantation' => 'Juillet à Septembre',
                'recolte' => 'Octobre à Mars',
                'exposition' => 'Mi-ombre',
                'arrosage' => 'Régulier à la plantation puis modéré',
                'entretien' => 'Éclaircir après la levée',
                'conseil' => 'Pailler pour protéger du froid en hiver',
            ]);
        }

        if ($carotte) {
            PlantCare::create([
                'plant_id' => $carotte->id,
                'plantation' => 'Février à Juillet',
                'recolte' => 'Mai à Novembre',
                'exposition' => 'Mi-ombre à ensoleillée',
                'arrosage' => 'Régulier mais modéré',
                'entretien' => 'Éclaircir après la levée, sol meuble et sans cailloux',
                'conseil' => 'Semer avec des radis pour marquer les rangs et maximiser l\'espace',
            ]);
        }

        if ($radis) {
            PlantCare::create([
                'plant_id' => $radis->id,
                'plantation' => 'Février à Septembre',
                'recolte' => 'Mars à Octobre',
                'exposition' => 'Mi-ombre à ensoleillée',
                'arrosage' => 'Régulier pour une croissance rapide',
                'entretien' => 'Éclaircir après levée, récolter rapidement',
                'conseil' => 'Semer tous les 15 jours pour une récolte continue',
            ]);
        }

        if ($navet) {
            PlantCare::create([
                'plant_id' => $navet->id,
                'plantation' => 'Mars à Mai (printemps), Juillet à Août (automne)',
                'recolte' => 'Mai à Juillet (primeur), Septembre à Novembre (conservation)',
                'exposition' => 'Soleil ou mi-ombre',
                'arrosage' => 'Régulier sans excès',
                'entretien' => 'Éclaircir après la levée, binage régulier',
                'conseil' => 'Récolter jeunes pour une saveur plus douce',
            ]);
        }

        if ($betterave) {
            PlantCare::create([
                'plant_id' => $betterave->id,
                'plantation' => 'Avril à Juin',
                'recolte' => 'Juillet à Octobre',
                'exposition' => 'Soleil',
                'arrosage' => 'Régulier surtout en période sèche',
                'entretien' => 'Éclaircir après la levée, binage régulier',
                'conseil' => 'Semer en lignes espacées de 30 cm',
            ]);
        }

        if ($panais) {
            PlantCare::create([
                'plant_id' => $panais->id,
                'plantation' => 'Février à Avril',
                'recolte' => 'Octobre à Mars',
                'exposition' => 'Soleil ou mi-ombre',
                'arrosage' => 'Modéré',
                'entretien' => 'Éclaircir après la levée, binage régulier',
                'conseil' => 'Laisser en terre jusqu\'aux premières gelées pour plus de saveur',
            ]);
        }

        if ($celeriRave) {
            PlantCare::create([
                'plant_id' => $celeriRave->id,
                'plantation' => 'Avril à Mai',
                'recolte' => 'Octobre à Novembre',
                'exposition' => 'Soleil',
                'arrosage' => 'Régulier et abondant',
                'entretien' => 'Butter légèrement, supprimer les feuilles basses',
                'conseil' => 'Planter dans un sol profond et riche en humus',
            ]);
        }

        if ($pommeDeTerre) {
            PlantCare::create([
                'plant_id' => $pommeDeTerre->id,
                'plantation' => 'Mars à Mai selon les régions',
                'recolte' => 'Juin à Septembre selon les variétés',
                'exposition' => 'Soleil',
                'arrosage' => 'Modéré, surtout après la floraison',
                'entretien' => 'Butter les plants, surveiller le mildiou',
                'conseil' => 'Planter dans un sol léger et bien drainé',
            ]);
        }

        if ($topinambour) {
            PlantCare::create([
                'plant_id' => $topinambour->id,
                'plantation' => 'Février à Avril',
                'recolte' => 'Octobre à Mars',
                'exposition' => 'Soleil ou mi-ombre',
                'arrosage' => 'Modéré',
                'entretien' => 'Butter les plants, contenir son expansion',
                'conseil' => 'Récolter au besoin tout l\'hiver',
            ]);
        }

        if ($haricotVert) {
            PlantCare::create([
                'plant_id' => $haricotVert->id,
                'plantation' => 'Avril à Juillet',
                'recolte' => 'Juin à Octobre',
                'exposition' => 'Soleil ou mi-ombre',
                'arrosage' => 'Régulier sans mouiller le feuillage',
                'entretien' => 'Butter les plants, récolter régulièrement',
                'conseil' => 'Semer en plusieurs fois pour étaler la récolte',
            ]);
        }

        if ($pois) {
            PlantCare::create([
                'plant_id' => $pois->id,
                'plantation' => 'Février à Avril',
                'recolte' => 'Mai à Juillet',
                'exposition' => 'Soleil ou mi-ombre',
                'arrosage' => 'Régulier surtout à la floraison',
                'entretien' => 'Tuteurer les variétés à rames',
                'conseil' => 'Semer précocement en sol bien drainé',
            ]);
        }

        if ($feve) {
            PlantCare::create([
                'plant_id' => $feve->id,
                'plantation' => 'Octobre à Novembre (automne), Février à Mars (printemps)',
                'recolte' => 'Mai à Juillet',
                'exposition' => 'Soleil',
                'arrosage' => 'Modéré',
                'entretien' => 'Butter les plants, pincer l\'extrémité',
                'conseil' => 'Planter en automne pour une récolte précoce',
            ]);
        }

        if ($tomate) {
            PlantCare::create([
                'plant_id' => $tomate->id,
                'plantation' => 'Mars à Mai',
                'recolte' => 'Juin à Octobre',
                'exposition' => 'Plein soleil',
                'arrosage' => 'Régulier sans mouiller les feuilles',
                'entretien' => 'Tuteurer les plants, pailler le sol, supprimer les gourmands',
                'conseil' => 'Planter des œillets d\'Inde à proximité pour éloigner les parasites',
            ]);
        }

        if ($poivron) {
            PlantCare::create([
                'plant_id' => $poivron->id,
                'plantation' => 'Mars à Mai',
                'recolte' => 'Juillet à Octobre',
                'exposition' => 'Plein soleil',
                'arrosage' => 'Régulier mais modéré',
                'entretien' => 'Tuteurer si nécessaire, pincer la tige principale',
                'conseil' => 'Planter en serre ou sous abri dans les régions fraîches',
            ]);
        }

        if ($aubergine) {
            PlantCare::create([
                'plant_id' => $aubergine->id,
                'plantation' => 'Avril à Mai',
                'recolte' => 'Juillet à Septembre',
                'exposition' => 'Plein soleil',
                'arrosage' => 'Régulier mais sans excès',
                'entretien' => 'Tuteurer les plants, pincer la tige principale',
                'conseil' => 'Planter dans un sol riche et bien drainé',
            ]);
        }

        if ($courgette) {
            PlantCare::create([
                'plant_id' => $courgette->id,
                'plantation' => 'Avril à Juin',
                'recolte' => 'Juin à Octobre',
                'exposition' => 'Plein soleil',
                'arrosage' => 'Abondant et régulier',
                'entretien' => 'Planter en sol riche, récolter jeunes pour favoriser la production',
                'conseil' => 'Récolter régulièrement pour stimuler la production de nouvelles courgettes',
            ]);
        }

        if ($courge) {
            PlantCare::create([
                'plant_id' => $courge->id,
                'plantation' => 'Avril à Mai',
                'recolte' => 'Septembre à Novembre',
                'exposition' => 'Plein soleil',
                'arrosage' => 'Abondant surtout en période de croissance',
                'entretien' => 'Pailler le sol, guider les tiges si nécessaire',
                'conseil' => 'Récolter avant les premières gelées et laisser sécher au soleil quelques jours',
            ]);
        }

        if ($concombre) {
            PlantCare::create([
                'plant_id' => $concombre->id,
                'plantation' => 'Avril à Juin',
                'recolte' => 'Juin à Septembre',
                'exposition' => 'Plein soleil',
                'arrosage' => 'Abondant et régulier',
                'entretien' => 'Palisser les plants pour économiser de l\'espace',
                'conseil' => 'Récolter jeunes pour éviter l\'amertume',
            ]);
        }

        if ($cornichon) {
            PlantCare::create([
                'plant_id' => $cornichon->id,
                'plantation' => 'Avril à Juin',
                'recolte' => 'Juin à Septembre',
                'exposition' => 'Plein soleil',
                'arrosage' => 'Régulier',
                'entretien' => 'Palisser les plants, récolter très fréquemment',
                'conseil' => 'Récolter tous les 2-3 jours pour avoir des cornichons fermes',
            ]);
        }

        if ($melon) {
            PlantCare::create([
                'plant_id' => $melon->id,
                'plantation' => 'Avril à Mai (sous abri), Mai à Juin (pleine terre)',
                'recolte' => 'Juillet à Septembre',
                'exposition' => 'Plein soleil et chaleur',
                'arrosage' => 'Modéré mais régulier',
                'entretien' => 'Pincer les tiges, protéger du froid',
                'conseil' => 'Planter sur une petite butte pour un meilleur drainage',
            ]);
        }

        if ($pasteque) {
            PlantCare::create([
                'plant_id' => $pasteque->id,
                'plantation' => 'Avril à Mai (sous abri), Mai à Juin (pleine terre)',
                'recolte' => 'Juillet à Septembre',
                'exposition' => 'Plein soleil et chaleur',
                'arrosage' => 'Abondant pendant la croissance des fruits',
                'entretien' => 'Pailler généreusement, espacer les plants',
                'conseil' => 'Tapoter le fruit : un son creux indique la maturité',
            ]);
        }

        if ($oignon) {
            PlantCare::create([
                'plant_id' => $oignon->id,
                'plantation' => 'Février à Avril (printemps), Août à Septembre (automne)',
                'recolte' => 'Juin à Juillet (primeur), Juillet à Août (conservation)',
                'exposition' => 'Soleil',
                'arrosage' => 'Modéré, arrêter 3 semaines avant la récolte',
                'entretien' => 'Binage régulier, buttage léger',
                'conseil' => 'Planter en sol drainant pour éviter le pourrissement',
            ]);
        }

        if ($ail) {
            PlantCare::create([
                'plant_id' => $ail->id,
                'plantation' => 'Octobre à Décembre (ail blanc), Février à Mars (ail rose)',
                'recolte' => 'Juin à Juillet',
                'exposition' => 'Soleil',
                'arrosage' => 'Très modéré',
                'entretien' => 'Désherbage soigneux',
                'conseil' => 'Planter les gousses la pointe vers le haut',
            ]);
        }

        if ($echalote) {
            PlantCare::create([
                'plant_id' => $echalote->id,
                'plantation' => 'Février à Mars (printemps), Octobre à Novembre (automne)',
                'recolte' => 'Juin à Juillet',
                'exposition' => 'Soleil',
                'arrosage' => 'Modéré',
                'entretien' => 'Binage régulier',
                'conseil' => 'Planter en sol léger et bien drainé',
            ]);
        }

        if ($poireau) {
            PlantCare::create([
                'plant_id' => $poireau->id,
                'plantation' => 'Février à Avril (été), Juin à Juillet (hiver)',
                'recolte' => 'Mai à Décembre selon la variété',
                'exposition' => 'Soleil ou mi-ombre',
                'arrosage' => 'Régulier pour maintenir le sol frais',
                'entretien' => 'Butter les plants pour blanchir les fûts',
                'conseil' => 'Planter après les pommes de terre pour profiter d\'un sol ameubli',
            ]);
        }

        if ($ciboule) {
            PlantCare::create([
                'plant_id' => $ciboule->id,
                'plantation' => 'Mars à Septembre',
                'recolte' => 'Toute l\'année (feuilles), Juin à Juillet (bulbes)',
                'exposition' => 'Soleil ou mi-ombre',
                'arrosage' => 'Régulier',
                'entretien' => 'Diviser les touffes tous les 2-3 ans',
                'conseil' => 'Couper les feuilles au besoin sans épuiser la plante',
            ]);
        }

        if ($persil) {
            PlantCare::create([
                'plant_id' => $persil->id,
                'plantation' => 'Février à Septembre',
                'recolte' => 'Toute l\'année',
                'exposition' => 'Mi-ombre',
                'arrosage' => 'Régulier pour garder le sol frais',
                'entretien' => 'Couper régulièrement pour favoriser de nouvelles pousses',
                'conseil' => 'Semer en place car n\'aime pas le repiquage',
            ]);
        }

        if ($basilic) {
            PlantCare::create([
                'plant_id' => $basilic->id,
                'plantation' => 'Avril à Juin',
                'recolte' => 'Mai à Octobre',
                'exposition' => 'Soleil (mais pas brûlant)',
                'arrosage' => 'Régulier mais sans excès',
                'entretien' => 'Pincer les extrémités pour favoriser la ramification, couper les fleurs',
                'conseil' => 'Planter près des tomates pour améliorer leur saveur et repousser les insectes',
            ]);
        }

        if ($thym) {
            PlantCare::create([
                'plant_id' => $thym->id,
                'plantation' => 'Mars à Juin',
                'recolte' => 'Toute l\'année',
                'exposition' => 'Plein soleil',
                'arrosage' => 'Très modéré (plante méditerranéenne)',
                'entretien' => 'Tailler légèrement après la floraison',
                'conseil' => 'Planter en sol drainant, même caillouteux',
            ]);
        }

        if ($romarin) {
            PlantCare::create([
                'plant_id' => $romarin->id,
                'plantation' => 'Mars à Juin',
                'recolte' => 'Toute l\'année',
                'exposition' => 'Plein soleil',
                'arrosage' => 'Très modéré',
                'entretien' => 'Tailler légèrement après la floraison',
                'conseil' => 'Excellent en bordure ou en pot dans les régions froides',
            ]);
        }

        if ($origan) {
            PlantCare::create([
                'plant_id' => $origan->id,
                'plantation' => 'Mars à Juin',
                'recolte' => 'Juin à Septembre',
                'exposition' => 'Plein soleil',
                'arrosage' => 'Modéré',
                'entretien' => 'Rabattre après la floraison',
                'conseil' => 'Sécher les tiges fleuries pour conserver l\'arôme',
            ]);
        }

        if ($sauge) {
            PlantCare::create([
                'plant_id' => $sauge->id,
                'plantation' => 'Mars à Juin',
                'recolte' => 'Toute l\'année',
                'exposition' => 'Plein soleil',
                'arrosage' => 'Modéré',
                'entretien' => 'Tailler au printemps pour favoriser de nouvelles pousses',
                'conseil' => 'Protéger du froid en hiver dans les régions froides',
            ]);
        }

        if ($menthe) {
            PlantCare::create([
                'plant_id' => $menthe->id,
                'plantation' => 'Mars à Octobre',
                'recolte' => 'Avril à Octobre',
                'exposition' => 'Mi-ombre',
                'arrosage' => 'Abondant',
                'entretien' => 'Contenir son expansion (plante très envahissante)',
                'conseil' => 'Cultiver en pot pour éviter qu\'elle n\'envahisse tout le jardin',
            ]);
        }

        if ($ciboulette) {
            PlantCare::create([
                'plant_id' => $ciboulette->id,
                'plantation' => 'Mars à Juin',
                'recolte' => 'Avril à Octobre',
                'exposition' => 'Soleil ou mi-ombre',
                'arrosage' => 'Régulier',
                'entretien' => 'Diviser les touffes tous les 2-3 ans',
                'conseil' => 'Couper régulièrement pour favoriser de nouvelles pousses',
            ]);
        }

        if ($coriandre) {
            PlantCare::create([
                'plant_id' => $coriandre->id,
                'plantation' => 'Avril à Juillet',
                'recolte' => 'Mai à Septembre',
                'exposition' => 'Mi-ombre',
                'arrosage' => 'Régulier',
                'entretien' => 'Semer en place car n\'aime pas le repiquage',
                'conseil' => 'Semer toutes les 3 semaines pour une récolte continue',
            ]);
        }

        if ($estragon) {
            PlantCare::create([
                'plant_id' => $estragon->id,
                'plantation' => 'Mars à Mai',
                'recolte' => 'Mai à Octobre',
                'exposition' => 'Soleil',
                'arrosage' => 'Modéré',
                'entretien' => 'Protéger du froid en hiver',
                'conseil' => 'Préférer l\'estragon français (plus aromatique) à l\'estragon russe',
            ]);
        }

        if ($aneth) {
            PlantCare::create([
                'plant_id' => $aneth->id,
                'plantation' => 'Avril à Juillet',
                'recolte' => 'Juin à Septembre',
                'exposition' => 'Soleil',
                'arrosage' => 'Modéré',
                'entretien' => 'Semer en place',
                'conseil' => 'Planter près des choux pour éloigner les parasites',
            ]);
        }

        if ($fraise) {
            PlantCare::create([
                'plant_id' => $fraise->id,
                'plantation' => 'Août à Octobre (meilleure période), Mars à Avril',
                'recolte' => 'Mai à Juillet selon les variétés',
                'exposition' => 'Soleil ou mi-ombre',
                'arrosage' => 'Régulier sans mouiller les fruits',
                'entretien' => 'Pailler avec du straw, supprimer les stolons en excès',
                'conseil' => 'Renouveler les plants tous les 3 ans pour maintenir une bonne production',
            ]);
        }

        if ($framboisier) {
            PlantCare::create([
                'plant_id' => $framboisier->id,
                'plantation' => 'Octobre à Mars',
                'recolte' => 'Juin à Septembre selon les variétés',
                'exposition' => 'Soleil ou mi-ombre',
                'arrosage' => 'Modéré',
                'entretien' => 'Tailler les cannes ayant fructifié',
                'conseil' => 'Palisser les tiges pour faciliter la récolte',
            ]);
        }

        if ($cassis) {
            PlantCare::create([
                'plant_id' => $cassis->id,
                'plantation' => 'Octobre à Mars',
                'recolte' => 'Juillet',
                'exposition' => 'Soleil ou mi-ombre',
                'arrosage' => 'Modéré',
                'entretien' => 'Tailler après la récolte',
                'conseil' => 'Planter plusieurs variétés pour une meilleure pollinisation',
            ]);
        }

        if ($groseillier) {
            PlantCare::create([
                'plant_id' => $groseillier->id,
                'plantation' => 'Octobre à Mars',
                'recolte' => 'Juin à Juillet',
                'exposition' => 'Mi-ombre',
                'arrosage' => 'Modéré',
                'entretien' => 'Tailler après la récolte',
                'conseil' => 'Protéger les fruits des oiseaux avec un filet',
            ]);
        }

        if ($murier) {
            PlantCare::create([
                'plant_id' => $murier->id,
                'plantation' => 'Octobre à Mars',
                'recolte' => 'Août à Septembre',
                'exposition' => 'Soleil',
                'arrosage' => 'Modéré',
                'entretien' => 'Tailler les tiges ayant fructifié',
                'conseil' => 'Palisser les tiges pour faciliter la récolte',
            ]);
        }

        if ($myrtillier) {
            PlantCare::create([
                'plant_id' => $myrtillier->id,
                'plantation' => 'Octobre à Mars',
                'recolte' => 'Juillet à Août',
                'exposition' => 'Mi-ombre',
                'arrosage' => 'Maintenir le sol frais',
                'entretien' => 'Tailler légèrement après la récolte',
                'conseil' => 'Planter en sol acide (terre de bruyère)',
            ]);
        }

        if ($pommier) {
            PlantCare::create([
                'plant_id' => $pommier->id,
                'plantation' => 'Octobre à Mars',
                'recolte' => 'Juillet à Octobre selon les variétés',
                'exposition' => 'Soleil',
                'arrosage' => 'Modéré, surtout les premières années',
                'entretien' => 'Taille de formation puis taille fruitière',
                'conseil' => 'Planter plusieurs variétés compatibles pour une bonne pollinisation',
            ]);
        }

        if ($poirier) {
            PlantCare::create([
                'plant_id' => $poirier->id,
                'plantation' => 'Octobre à Mars',
                'recolte' => 'Juillet à Octobre selon les variétés',
                'exposition' => 'Soleil',
                'arrosage' => 'Modéré, surtout les premières années',
                'entretien' => 'Taille de formation puis taille fruitière',
                'conseil' => 'Choisir des variétés résistantes au feu bactérien',
            ]);
        }

        if ($prunier) {
            PlantCare::create([
                'plant_id' => $prunier->id,
                'plantation' => 'Octobre à Mars',
                'recolte' => 'Juillet à Septembre selon les variétés',
                'exposition' => 'Soleil',
                'arrosage' => 'Modéré',
                'entretien' => 'Taille légère après la récolte',
                'conseil' => 'Récolter les fruits à maturité pour une meilleure saveur',
            ]);
        }

        if ($cerisier) {
            PlantCare::create([
                'plant_id' => $cerisier->id,
                'plantation' => 'Octobre à Mars',
                'recolte' => 'Mai à Juillet selon les variétés',
                'exposition' => 'Soleil',
                'arrosage' => 'Modéré',
                'entretien' => 'Taille légère si nécessaire',
                'conseil' => 'Protéger les fruits des oiseaux avec des filets',
            ]);
        }

        if ($abricotier) {
            PlantCare::create([
                'plant_id' => $abricotier->id,
                'plantation' => 'Octobre à Mars',
                'recolte' => 'Juin à Août selon les variétés',
                'exposition' => 'Soleil et chaleur',
                'arrosage' => 'Modéré, résistant à la sécheresse une fois installé',
                'entretien' => 'Taille de formation puis taille légère',
                'conseil' => 'Planter en situation abritée dans les régions froides',
            ]);
        }

        if ($pecher) {
            PlantCare::create([
                'plant_id' => $pecher->id,
                'plantation' => 'Octobre à Mars',
                'recolte' => 'Juillet à Septembre',
                'exposition' => 'Soleil et chaleur',
                'arrosage' => 'Modéré',
                'entretien' => 'Taille annuelle importante',
                'conseil' => 'Traiter préventivement contre la cloque du pêcher',
            ]);
        }

        if ($noyer) {
            PlantCare::create([
                'plant_id' => $noyer->id,
                'plantation' => 'Octobre à Mars',
                'recolte' => 'Septembre à Octobre',
                'exposition' => 'Soleil',
                'arrosage' => 'Modéré les premières années',
                'entretien' => 'Taille légère si nécessaire',
                'conseil' => 'Planter loin du potager (substances allélopathiques)',
            ]);
        }

        if ($noisetier) {
            PlantCare::create([
                'plant_id' => $noisetier->id,
                'plantation' => 'Octobre à Mars',
                'recolte' => 'Août à Septembre',
                'exposition' => 'Soleil ou mi-ombre',
                'arrosage' => 'Modéré',
                'entretien' => 'Tailler pour aérer le centre de l\'arbuste',
                'conseil' => 'Planter plusieurs variétés pour une bonne pollinisation',
            ]);
        }
    }
}