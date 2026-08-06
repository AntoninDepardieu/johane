intégration-vidéo : La technique : lecteur Plyr + vidéo HLS .m3u8 en segments + URLs signées/expirantes, au lieu d’un fichier .mp4 direct.

lancer le serveur php : cd /Users/antonindepardieu/Desktop/site-johane/htdocs
php -S localhost:8000 -t public_html

pour le changement automatique (dans un autre terminal) : 
cd /Users/antonindepardieu/Desktop/site-johane/htdocs
browser-sync start --proxy "localhost:8000" --files "public_html/**/*.php, public_html/**/**/*.css, public_html/**/**/**/*.css, public_html/**/**/*.js, includes/*.php, public_html/**/**/*.css"


ARBORESCENCE DOSSIER : 

htdocs/
├── public_html/
│   ├── index.php
│   ├── book.php
│   ├── about.php
│   ├── contact.php
│   │
│   ├── la-louve.php
│   ├── climaventure.php
│   ├── zomb.php
│   │
│   ├── api/
│   │   └── covers.php
│   │
│   ├── assets/
│   │   ├── css/
│   │   │   └── style.css
│   │   │
│   │   ├── js/
│   │   │   └── main.js
│   │   │
│   │   ├── img/
│   │   │   ├── projects/
│   │   │   ├── icons/
│   │   │   ├── logos/
│   │   │   └── portraits/
│   │   │
│   │   ├── videos/
│   │   │   ├── 480p/
│   │   │   └── 1080p/
│   │   │
│   │   ├── fonts/
│   │   └── docs/
│   │       └── CV-Antonin-Depardieu.pdf
│   │
│   └── .htaccess
│
├── includes/
│   ├── head.php
│   ├── navbar.php
│   └── footer.php
│
├── tools/
│   ├── reorder-cells.php
│   ├── cells-source.txt
│   └── cells-reordered.txt
│
└── README.md