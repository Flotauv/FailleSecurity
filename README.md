# FailleSecurity Project 

## Généralité 

Le projet a pour vocation d'exploiter une faille pour sensibiliser les personnes aux attaques de cybersécurité. 
## British Airways et sa faille XSS
**Service compromis**. 

La faille que nous avons choisit est de type XSS et a touché British Airways en 2018. 
L’entreprise a subi une attaque Magecart sur sa page de paiement en ligne.  
Les attaquants ont réussi à injecter des lignes de code JavaScript dans une bibliothèque tierce (Modernizr) chargée par le site web de British Airways.  
Ce script captait les informations saisies dans le formulaire  que remplissait l’utilisateur (nom, adresse, numéro de carte...) au moment où il validait son paiement.  
Puis les envoyait vers un domaine contrôlé par les attaquants.  
L’attaque a duré environ 2 semaines, affectant plus de 380 000 clients.  
Ces données sensibles ont été exfiltrées sans interrompre la procédure de paiement normale, ce qui rendait l’attaque furtive.  
Ainsi, cette attaque est une compromission de l'intégrité du code puisque les attaquant ont rajouté des lignes de java et une compromissions des données car ce code leur permettait d'exporter des données sensibles d'utilisateurs vers leur propre domaine.

**Vulnérabilité expliquée (à arranger)**  
 Les attaques côté client exploitent la relation de confiance entre un utilisateur et les sites Web qu'il visite = attaque où la connexion au contenu malveillant est initiée à partir du client (généralement en étant incité à cliquer sur un lien malveillant dans un e-mail, un message instantané, ou autre : user interaction often needed), contrairement aux server-side attacks où le serveur initie l'attaque (par exemple SQL injection).

l'attaquant send un link ou autre
le client clique et initie la connection au serveur malicieux
le serveur send back le code malicieux
L'objectif étant de cibler les vulnérabilités de l'appareil client ou d'un ou plusieurs de ses logiciels (comprennent des logiciels de traitement de texte, lecteur PDF, des navigateurs Web, environnement Java, etc). Dans le but d’obtenir des informations sensibles (cookies, identifiants, numéro de CB, etc.) ou carrément de prendre le contrôle des postes de travail infectés.

Types de client-side attacks : cross-site scripting (xss), cross-site request forgery (csrf), content spoofing, session fixation, clickjacking

**Architecture et schéma de la faille**

!['Text'](images/schema-attack.jpeg)

**Comment se prémunir ?**

- Incorporer dans le code php la détection de balises **"script"**

```


```
**Quelles sont les bonnes pratiques à effectuer ?**

## Exploitation de la faille de sécurité (Démo)



