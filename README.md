Ceci est mon theme wordpress "from scratch" afin de valider mon ecf chez Popschool.

Réalisation Février 2019.


## Installation

1. Téléchargez le fichier zip du repository
2. Copiez le dossier `themes_ecf` dans le dossier `wp-content/themes` de votre projet Wordpress
3. Dans l'admin de Wordpress, activez le thème dans la section « Apparence > Thèmes »

## Utilisation

Avant toute utilisation, vous devez au moins :

- changer le nom du template (le nom du dossier et le nom dans le fichier `style.css`)
- changer le nom du site, le logo et le favicon dans le fichier `header.php`
- vérifier que les liens dans le fichier `footer.php` sont corrects
- dans le fichier `page.php`, ajouter votre contenu entre la balise getHeader et getFooter.
- pour les images utiliser juste avant votre chemin `<img src="<?= get_stylesheet_directory_uri(); ?>/img/test-intro-img.jpg" alt="#">`, et mettre votre image dans le dossier `img`
- ajouter le chemin de votre fichier dans le fichier `function.php`
- pour le js, ajouter votre code dans le fichier `js/main.js` ou juste l'ajouter dans `function.php`





