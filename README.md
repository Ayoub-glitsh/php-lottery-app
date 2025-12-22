# 🎱 Loterie Interactive - Application PHP

  

*Une application web de simulation de loterie avec interface simple et résultats en temps réel, développée en PHP natif sans frameworks.

  

## ✨ Fonctionnalités

  

- **🎯 Sélection intuitive** : Interface conviviale pour choisir vos numéros

- **🎲 Tirage aléatoire** : Génération automatique de numéros gagnants

- **📊 Résultats instantanés** : Vérification immédiate des correspondances

- **📱 Responsive design** : Fonctionne sur tous les appareils

- **🔄 Architecture modulaire** : Code organisé et maintenable

  

\## 🛠️ Technologies

  

\- \*\*PHP 7.4+\*\* - Backend natif sans frameworks

\- \*\*HTML5\*\* - Structure sémantique

\- \*\*CSS3\*\* - Styles modernes

\- \*\*JavaScript\*\* - Interactions client (optionnel)

  

\## 📁 Structure du Projet

  

lottery-php/

├── index.php # Point d'entrée principal

├── includes/

│ ├── header.php # En-tête HTML

│ ├── footer.php # Pied de page

│ ├── form.php # Formulaire de sélection

│ ├── functions.php # Logique métier

│ └── styles.css # Feuille de style

└── README.md

  

bash

Copier le code

  

\## 🚀 Installation Rapide

  

\### 1. Cloner le projet

\`\`\`bash

git clone https://github.com/votre-username/lottery-php.git

cd lottery-php

2\. Lancer le serveur local

bash

Copier le code

php -S localhost:8000

3\. Ouvrir dans le navigateur

arduino

Copier le code

http://localhost:8000

🎮 Comment Jouer

Sélectionnez vos numéros via l'interface

  

Cliquez sur le bouton "Vérifier"

  

Consultez le tirage aléatoire généré

  

Découvrez si vous avez gagné

  

🔧 Configuration

Variables personnalisables (dans includes/functions.php) :

php

Copier le code

// Nombre de numéros à choisir

const NUM\_CHOICES = 6;

  

// Plage des numéros (ex: 1 à 49)

const MIN\_NUMBER = 1;

const MAX\_NUMBER = 49;

  

// Règles de gain

$winningRules = \[

    '6\_correct' => 'Jackpot!',

    '5\_correct' => 'Second prix',

    // ...

\];

📦 Dépendances

Aucune dépendance externe requise

  

PHP 7.4 ou supérieur

  

Serveur web (Apache, Nginx) ou PHP CLI

  

Navigateur web moderne

  

🐛 Dépannage

Problème : "Page blanche"

php

Copier le code

ini\_set('display\_errors', 1);

error\_reporting(E\_ALL);

Problème : "Fichiers includes non trouvés"

Vérifiez les chemins relatifs dans index.php

  

Problème : "Formulaire ne fonctionne pas"

La méthode POST est utilisée

  

PHP est correctement installé

  

Aucune erreur de syntaxe dans le code

  

🚀 Déploiement

Sur un hébergement mutualisé

Téléversez tous les fichiers via FTP

  

Accédez à votre domaine

  

Sur VPS / Serveur dédié

bash

Copier le code

scp -r lottery-php/ user@server:/var/www/html/

chmod -R 755 /var/www/html/lottery-php

🤝 Contribution

Les contributions sont bienvenues !

  

Fork le projet

  

Crée une branche : git checkout -b feature/nouvelle-fonctionnalite

  

Commit : git commit -m "Ajout de..."

  

Push : git push origin feature/nouvelle-fonctionnalite

  

Ouvre une Pull Request

  

📄 Licence

Ce projet est sous licence MIT – voir le fichier LICENSE.

  

👨‍💻 Auteur

Développé avec ❤️ par Ayoub Aguezar pour l’apprentissage de PHP.

  

⭐ Fonctionnalités à Venir (Roadmap)

 Système de comptes utilisateurs

  

 Historique des tirages

  

 Statistiques de gains

  

 Interface administrateur

  

 API REST pour mobile

  

🔗 Liens Utiles

Documentation PHP

  

Guide de contribution

  

Code de conduite

  

💡 Conseil :

Cette application est idéale pour :

  

Apprendre les bases du PHP web

  

Comprendre le traitement des formulaires

  

Expérimenter avec les sessions PHP

  

Créer des projets éducatifs

  

⭐ N’oubliez pas de star le repo si le projet vous a été utile !
