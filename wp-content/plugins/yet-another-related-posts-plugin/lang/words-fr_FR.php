<?php

$overusedwords = array('', 'a', 'abandonner', 'abattre', 'abord', 'aborder', 'abri', 'absence', 'absolu', 'absolument', 'accent', 'accepter', 'accompagner', 'accomplir', 'accord', 'accorder', 'accrocher', 'accueillir', 'accuser', 'acheter', 'achever', 'acte', 'action', 'admettre', 'adresser', 'affaire', 'affirmer', 'afin', 'agent', 'agir', 'agiter', 'ah', 'ai', 'aide', 'aider', 'aile', 'ailleurs', 'aimer', 'ainsi', 'air', 'ajouter', 'aller', 'allumer', 'alors', 'amener', 'ami', 'amour', 'amuser', 'an', 'ancien', 'anglais', 'angoisse', 'animal', 'animer', 'annoncer', 'année', 'apercevoir', 'apparaître', 'apparence', 'appartement', 'appartenir', 'appel', 'appeler', 'apporter', 'apprendre', 'approcher', 'approuver', 'appuyer', 'après', 'arbre', 'argent', 'arme', 'armer', 'armée', 'arracher', 'arriver', 'arrivée', 'arrière', 'arrêter', 'art', 'article', 'as', 'aspect', 'asseoir', 'assez', 'assister', 'assurer', 'attacher', 'attaquer', 'atteindre', 'attendre', 'attente', 'attention', 'attirer', 'attitude', 'au', 'aucun', 'aujourd\'hui', 'aujourd’hui', 'auparavant', 'auprès', 'auquel', 'aussi', 'aussitôt', 'autant', 'auteur', 'autorité', 'autour', 'autre', 'autrefois', 'autrement', 'autres', 'aux', 'auxquelles', 'auxquels', 'avance', 'avancer', 'avant', 'avec', 'avenir', 'aventure', 'avis', 'avoir', 'avouer', 'baisser', 'banc', 'bande', 'barbe', 'bas', 'bataille', 'battre', 'beau', 'beaucoup', 'beauté', 'beaux', 'besoin', 'bien', 'bientôt', 'billet', 'blanc', 'bleu', 'blond', 'boire', 'bois', 'bon', 'bonheur', 'bons', 'bord', 'bouche', 'bout', 'branche', 'bras', 'briller', 'briser', 'bruit', 'brusquement', 'brûler', 'bureau', 'but', 'bête', 'cabinet', 'cacher', 'calme', 'calmer', 'camarade', 'campagne', 'capable', 'car', 'caractère', 'caresser', 'carte', 'cas', 'casser', 'cause', 'causer', 'ce', 'ceci', 'cela', 'celui', 'cent', 'centre', 'cependant', 'cercle', 'certain', 'certainement', 'certes', 'cerveau', 'ces', 'cesse', 'cesser', 'cet', 'cette', 'chacun', 'chair', 'chaise', 'chaleur', 'chambre', 'champ', 'chance', 'changement', 'changer', 'chant', 'chanter', 'chaque', 'charge', 'charger', 'chasse', 'chasser', 'chat', 'chaud', 'chaîne', 'chef', 'chemin', 'chemise', 'cher', 'chercher', 'cheval', 'cheveu', 'chez', 'chien', 'chiffre', 'choisir', 'choix', 'chose', 'chute', 'ci', 'ciel', 'cinq', 'cinquante', 'circonstance', 'clair', 'claire', 'classe', 'clef', 'coin', 'colline', 'colon', 'colère', 'combat', 'combien', 'commander', 'comme', 'commencement', 'commencer', 'comment', 'commun', 'compagnie', 'compagnon', 'complet', 'complètement', 'composer', 'comprendre', 'compte', 'compter', 'conclure', 'condamner', 'condition', 'conduire', 'confiance', 'confier', 'confondre', 'connaissance', 'connaître', 'conscience', 'conseil', 'consentir', 'considérer', 'construire', 'consulter', 'contenir', 'content', 'contenter', 'continuer', 'contraire', 'contre', 'convenir', 'conversation', 'corde', 'corps', 'cou', 'couche', 'coucher', 'couler', 'couleur', 'coup', 'couper', 'cour', 'courage', 'courant', 'courir', 'cours', 'course', 'court', 'couvrir', 'coûter', 'craindre', 'crainte', 'creuser', 'cri', 'crier', 'crise', 'croire', 'croiser', 'croix', 'cruel', 'créer', 'cuisine', 'curieux', 'curiosité', 'céder', 'côte', 'côté', 'cœur', 'd\'un', 'd\'une', 'dame', 'danger', 'dangereux', 'dans', 'danser', 'davantage', 'de', 'debout', 'dedans', 'dehors', 'delà', 'demain', 'demande', 'demander', 'demeurer', 'demi', 'dent', 'depuis', 'dernier', 'derrière', 'des', 'descendre', 'desquelles', 'desquels', 'dessiner', 'dessous', 'dessus', 'deux', 'devant', 'devenir', 'deviner', 'devoir', 'dieu', 'difficile', 'différent', 'digne', 'dimanche', 'dire', 'direction', 'diriger', 'discours', 'discussion', 'discuter', 'disparaître', 'disposer', 'distance', 'distinguer', 'divers', 'dix', 'docteur', 'doigt', 'dominer', 'donc', 'donner', 'dont', 'dormir', 'dos', 'double', 'doucement', 'douceur', 'douleur', 'doute', 'douter', 'doux', 'douze', 'drame', 'dresser', 'droit', 'droite', 'drôle', 'du', 'duquel', 'dur', 'durant', 'durer', 'dès', 'début', 'déchirer', 'décider', 'déclarer', 'découvrir', 'décrire', 'défaut', 'défendre', 'dégager', 'déjà', 'départ', 'dépasser', 'déposer', 'désert', 'désespoir', 'désigner', 'désir', 'désirer', 'désormais', 'détacher', 'détail', 'détourner', 'détruire', 'd’un', 'd’une', 'eau', 'eaux', 'effacer', 'effet', 'effort', 'eh', 'elle', 'elles', 'embrasser', 'emmener', 'emparer', 'empire', 'employer', 'emporter', 'empêcher', 'en', 'encore', 'endormir', 'endroit', 'enfance', 'enfant', 'enfermer', 'enfin', 'enfoncer', 'engager', 'enlever', 'ennemi', 'ensemble', 'ensuite', 'entendre', 'entier', 'entourer', 'entraîner', 'entre', 'entrer', 'entretenir', 'entrée', 'envelopper', 'envie', 'environ', 'envoyer', 'erreur', 'escalier', 'espace', 'espoir', 'esprit', 'espèce', 'espérer', 'essayer', 'essuyer', 'est', 'et', 'etc', 'euh', 'eux', 'examiner', 'excepté', 'exemple', 'exiger', 'existence', 'exister', 'explication', 'expliquer', 'exposer', 'expression', 'exprimer', 'expérience', 'extraordinaire', 'extrême', 'exécuter', 'face', 'facile', 'faible', 'faim', 'faire', 'fais', 'fait', 'falloir', 'famille', 'fatigue', 'fatiguer', 'faute', 'fauteuil', 'faux', 'faveur', 'façon', 'femme', 'fenêtre', 'fer', 'ferme', 'fermer', 'feu', 'feuille', 'fidèle', 'fier', 'figure', 'figurer', 'fil', 'fille', 'fils', 'fin', 'fine', 'finir', 'fixe', 'fixer', 'flamme', 'fleur', 'flot', 'foi', 'fois', 'folie', 'fonction', 'fond', 'fonder', 'force', 'forcer', 'forme', 'former', 'fort', 'fortune', 'forêt', 'fou', 'foule', 'frais', 'franc', 'franchir', 'français', 'françois', 'frapper', 'froid', 'front', 'fruit', 'frère', 'fuir', 'fumer', 'fumée', 'fusil', 'fête', 'gagner', 'garde', 'garder', 'garçon', 'gauche', 'genou', 'genre', 'gens', 'geste', 'glace', 'glisser', 'gloire', 'goutte', 'gouvernement', 'goût', 'grain', 'grand', 'grandir', 'grave', 'gris', 'gros', 'groupe', 'grâce', 'gré', 'guerre', 'guider', 'guère', 'général', 'habiller', 'habitant', 'habiter', 'habitude', 'haine', 'hasard', 'haut', 'haute', 'hauteur', 'haïr', 'hein', 'herbe', 'heure', 'heureux', 'heurter', 'hier', 'histoire', 'hiver', 'homme', 'honneur', 'honte', 'horizon', 'hormis', 'hors', 'huit', 'humain', 'humide', 'hésiter', 'hôtel', 'ici', 'idée', 'ignorer', 'il', 'illusion', 'ils', 'image', 'imaginer', 'immense', 'immobile', 'immédiatement', 'importance', 'important', 'importer', 'imposer', 'impossible', 'impression', 'incapable', 'inconnu', 'indiquer', 'inquiéter', 'inquiétude', 'inspirer', 'installer', 'instant', 'instinct', 'instrument', 'intelligence', 'intention', 'interroger', 'interrompre', 'intéresser', 'intérieur', 'intérêt', 'inutile', 'inventer', 'inviter', 'jamais', 'jambe', 'jardin', 'jaune', 'je', 'jeter', 'jeu', 'jeune', 'jeunesse', 'joie', 'joindre', 'joli', 'joue', 'jouer', 'jour', 'journal', 'journée', 'juge', 'juger', 'juif', 'jusqu\'au', 'jusqu\'aux', 'jusqu\'à', 'jusque', 'jusqu’au', 'jusqu’aux', 'jusqu’à', 'juste', 'justice', 'l\'un', 'l\'une', 'la', 'laquelle', 'large', 'larme', 'le', 'lendemain', 'lentement', 'lequel', 'les', 'lesquelles', 'lesquels', 'lettre', 'leur', 'leurs', 'lever', 'leçon', 'liberté', 'libre', 'lien', 'lier', 'lieu', 'ligne', 'lire', 'lisser', 'lit', 'livre', 'livrer', 'loi', 'loin', 'long', 'longtemps', 'lors', 'lorsque', 'loup', 'lourd', 'lueur', 'lui', 'lumière', 'lune', 'lutte', 'lutter', 'là', 'lèvre', 'léger', 'l’un', 'l’une', 'ma', 'machine', 'madame', 'magnifique', 'main', 'maintenant', 'maintenir', 'mais', 'maison', 'mal', 'malade', 'maladie', 'malgré', 'malheur', 'manche', 'manger', 'manier', 'manquer', 'marchand', 'marche', 'marcher', 'marché', 'mari', 'mariage', 'marier', 'marquer', 'masse', 'matin', 'matière', 'mauvais', 'maître', 'me', 'meilleur', 'meilleure', 'meilleures', 'meilleurs', 'membre', 'menacer', 'mener', 'mensonge', 'mentir', 'mer', 'mes', 'mesure', 'mettre', 'midi', 'mien', 'miens', 'mieux', 'milieu', 'militaire', 'mille', 'million', 'mince', 'mine', 'ministre', 'minute', 'miser', 'mode', 'moi', 'moindre', 'moins', 'mois', 'moitié', 'moment', 'mon', 'monde', 'monsieur', 'montagne', 'monter', 'montrer', 'morceau', 'mort', 'mot', 'mourir', 'mouvement', 'moyen', 'muet', 'mur', 'musique', 'médecin', 'mémoire', 'mériter', 'métier', 'mêler', 'même', 'naissance', 'nation', 'nature', 'naturel', 'naturellement', 'naître', 'ne', 'nerveux', 'neuf', 'nez', 'ni', 'noir', 'noire', 'nom', 'nombre', 'nombreux', 'nommer', 'non', 'nord', 'nos', 'note', 'notre', 'nourrir', 'nous', 'nouveau', 'noyer', 'nu', 'nuage', 'nuit', 'nul', 'nécessaire', 'nôtre', 'nôtres', 'objet', 'obliger', 'observer', 'obtenir', 'obéir', 'occasion', 'occuper', 'odeur', 'oeil', 'officier', 'offrir', 'oh', 'oiseau', 'ombre', 'on', 'oncle', 'or', 'ordre', 'oreille', 'oser', 'ou', 'oublier', 'ouh', 'oui', 'ouvert', 'ouvrage', 'ouvrir', 'où', 'page', 'pain', 'paix', 'palais', 'papa', 'papier', 'paquet', 'par', 'paraître', 'parce', 'parcourir', 'pareil', 'parent', 'parer', 'parfait', 'parfaitement', 'parfois', 'parler', 'parmi', 'parole', 'part', 'partager', 'parti', 'particulier', 'partie', 'partir', 'partout', 'parvenir', 'pas', 'passage', 'passer', 'passion', 'passé', 'patron', 'paupière', 'pauvre', 'payer', 'pays', 'paysage', 'paysan', 'peau', 'peine', 'pencher', 'pendant', 'pendre', 'penser', 'pensée', 'perdre', 'perdu', 'permettre', 'personnage', 'personne', 'perte', 'peser', 'petit', 'peu', 'peuple', 'peur', 'phrase', 'pied', 'pierre', 'piquer', 'pire', 'pires', 'pitié', 'pièce', 'place', 'placer', 'plaindre', 'plaine', 'plaire', 'plaisir', 'plan', 'planche', 'plante', 'plein', 'pleurer', 'plier', 'plonger', 'pluie', 'plus', 'plusieurs', 'plutôt', 'poche', 'poids', 'point', 'pointe', 'poitrine', 'police', 'politique', 'pont', 'port', 'porte', 'porter', 'portier', 'poser', 'position', 'possible', 'posséder', 'poste', 'pour', 'pourquoi', 'poursuivre', 'pourtant', 'pousser', 'poussière', 'pouvoir', 'poète', 'poésie', 'premier', 'prendre', 'presque', 'presser', 'preuve', 'prier', 'prince', 'principe', 'printemps', 'prison', 'prix', 'prière', 'probablement', 'problème', 'prochain', 'produire', 'professeur', 'profiter', 'profond', 'profondément', 'projet', 'promener', 'promettre', 'prononcer', 'propos', 'proposer', 'propre', 'protéger', 'prouver', 'près', 'précieux', 'précipiter', 'précis', 'précéder', 'préférer', 'préparer', 'présence', 'présent', 'présenter', 'président', 'prétendre', 'prévenir', 'prévoir', 'prêt', 'prêter', 'public', 'puis', 'puisque', 'puissance', 'puissant', 'pur', 'père', 'pénétrer', 'qualité', 'quand', 'quant', 'quarante', 'quart', 'quartier', 'quatre', 'que', 'quel', 'quelle', 'quelles', 'quelqu\'un', 'quelque', 'quelqu’un', 'quels', 'question', 'queue', 'qui', 'quinze', 'quitter', 'quoi', 'quoique', 'race', 'raconter', 'rage', 'raison', 'ramasser', 'ramener', 'rang', 'rapide', 'rapidement', 'rappeler', 'rapport', 'rapporter', 'rare', 'rassurer', 'rayon', 'recevoir', 'recherche', 'recommencer', 'reconnaître', 'recueillir', 'reculer', 'redevenir', 'refuser', 'regard', 'regarder', 'regretter', 'rejeter', 'rejoindre', 'relation', 'relever', 'religion', 'remarquer', 'remercier', 'remettre', 'remonter', 'remplacer', 'remplir', 'rencontre', 'rencontrer', 'rendre', 'renoncer', 'rentrer', 'renverser', 'repas', 'reposer', 'repousser', 'reprendre', 'reproche', 'représenter', 'respect', 'respecter', 'respirer', 'ressembler', 'reste', 'rester', 'retenir', 'retirer', 'retomber', 'retour', 'retourner', 'retrouver', 'revenir', 'revoir', 'riche', 'rideau', 'rien', 'rire', 'risquer', 'robe', 'roche', 'rocher', 'roi', 'roman', 'rompre', 'rond', 'rose', 'rouge', 'rouler', 'route', 'rue', 'ruine', 'règle', 'réalité', 'réclamer', 'réduire', 'réel', 'réflexion', 'réfléchir', 'régulier', 'répandre', 'répondre', 'réponse', 'répéter', 'réserver', 'résistance', 'résister', 'résoudre', 'résultat', 'réunir', 'réussir', 'réveiller', 'révolution', 'révéler', 'rêve', 'rêver', 'rôle', 'sa', 'sable', 'sac', 'saint', 'saisir', 'saison', 'salle', 'saluer', 'salut', 'sang', 'sans', 'santé', 'satisfaire', 'sauf', 'sauter', 'sauvage', 'sauver', 'savoir', 'science', 'scène', 'se', 'sec', 'second', 'seconde', 'secours', 'secret', 'secrétaire', 'seigneur', 'sein', 'selon', 'semaine', 'semblable', 'sembler', 'semer', 'sens', 'sentier', 'sentiment', 'sentir', 'sept', 'serrer', 'service', 'servir', 'ses', 'seuil', 'seul', 'seulement', 'si', 'sien', 'siens', 'signe', 'signer', 'signifier', 'silence', 'silencieux', 'simple', 'simplement', 'situation', 'six', 'siècle', 'siège', 'social', 'société', 'soi', 'soin', 'soir', 'soirée', 'soit', 'sol', 'soldat', 'soleil', 'solitude', 'sombre', 'somme', 'sommeil', 'sommet', 'son', 'songer', 'sonner', 'sorte', 'sortir', 'sou', 'souci', 'soudain', 'souffler', 'souffrance', 'souffrir', 'souhaiter', 'soulever', 'soumettre', 'source', 'sourd', 'sourire', 'sous', 'soutenir', 'souvenir', 'souvent', 'spectacle', 'subir', 'succès', 'sueur', 'suffire', 'suite', 'suivant', 'suivre', 'sujet', 'supporter', 'supposer', 'supérieur', 'sur', 'surprendre', 'surtout', 'surveiller', 'système', 'séparer', 'sérieux', 'sûr', 'ta', 'table', 'tache', 'taille', 'taire', 'tandis', 'tant', 'tantôt', 'tapis', 'tard', 'te', 'tel', 'telle', 'tellement', 'telles', 'tels', 'temps', 'tempête', 'tendre', 'tenir', 'tenter', 'terme', 'terminer', 'terrain', 'terre', 'terreur', 'terrible', 'tes', 'théâtre', 'tien', 'tiens', 'tirer', 'titre', 'toi', 'toile', 'toit', 'tombe', 'tomber', 'ton', 'toucher', 'toujours', 'tour', 'tourner', 'tous', 'tout', 'toute', 'trace', 'tracer', 'train', 'trait', 'traiter', 'tranquille', 'transformer', 'travail', 'travailler', 'travers', 'traverser', 'traîner', 'trembler', 'trente', 'triste', 'trois', 'troisième', 'tromper', 'trop', 'trou', 'troubler', 'trouver', 'très', 'trésor', 'tu', 'tuer', 'type', 'tâche', 'témoin', 'tête', 'tôt', 'un', 'une', 'unique', 'usage', 'user', 'va', 'vague', 'vaincre', 'vais', 'valeur', 'valoir', 'vas', 'vaste', 'veille', 'veiller', 'vendre', 'venir', 'vent', 'ventre', 'verre', 'vers', 'verser', 'vert', 'victime', 'vide', 'vie', 'vieil', 'vieillard', 'viens', 'vient', 'vieux', 'vif', 'village', 'ville', 'vin', 'vingt', 'violence', 'violent', 'visage', 'visible', 'vision', 'visite', 'visiter', 'vite', 'vivant', 'vivre', 'voici', 'voie', 'voile', 'voilà', 'voir', 'voisin', 'voiture', 'voix', 'vol', 'voler', 'volonté', 'vos', 'votre', 'vouloir', 'vous', 'voyage', 'voyager', 'vrai', 'vraiment', 'vue', 'véritable', 'vérité', 'vêtement', 'vêtir', 'vôtre', 'vôtres', 'y', 'yeux', 'à', 'âge', 'âgé', 'âme', 'ça', 'écarter', 'échapper', 'éclairer', 'éclat', 'éclater', 'école', 'écouter', 'écraser', 'écrire', 'égal', 'également', 'élever', 'éloigner', 'élément', 'émotion', 'énergie', 'énorme', 'épais', 'épaule', 'époque', 'épreuve', 'éprouver', 'établir', 'étage', 'étaler', 'état', 'éteindre', 'étendre', 'étendue', 'éternel', 'étoile', 'étonner', 'étouffer', 'étrange', 'étranger', 'étroit', 'étude', 'étudier', 'été', 'évidemment', 'éviter', 'événement', 'être', 'île', 'œuvre',);