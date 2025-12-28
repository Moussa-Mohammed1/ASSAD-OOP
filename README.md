# 🦁 ASSAD v2 – CAN 2025

## 📖 Présentation du projet

À l’occasion de la Coupe d’Afrique des Nations **CAN 2025**, organisée au Maroc, le Zoo virtuel **ASSAD** a pour objectif de promouvoir la faune africaine, en mettant en avant le **Lion de l’Atlas**, à travers une plateforme web interactive destinée aux supporters et aux familles.

Ce projet est une **refonte complète** d’une version précédente développée en PHP procédural.  
Il adopte désormais une **architecture PHP orientée objet (POO)** avec une base de données relationnelle gérée via **PDO**.

---

## 🎯 Objectifs

- Mettre en œuvre les principes de la **Programmation Orientée Objet**
- Concevoir une application web dynamique et sécurisée
- Gérer des rôles utilisateurs distincts (Visiteur, Guide, Administrateur)
- Exploiter une base de données SQL via **PDO**
- Appliquer les bonnes pratiques de validation et de structuration du code

---

## 🧩 Fonctionnalités principales

### 🔐 Authentification & Utilisateurs
- Inscription et connexion sécurisées
- Choix du rôle : Visiteur ou Guide
- Activation / désactivation des comptes par l’administrateur
- Validation obligatoire des comptes Guide avant accès aux fonctionnalités

---

### 🧭 Visites guidées (Guide)
- Création, modification et annulation de visites guidées
- Paramètres : titre, description, date, heure, durée, prix, langue, capacité
- Ajout de plusieurs étapes ordonnées à une visite
- Consultation des réservations (visiteurs, nombre de personnes, dates)

---

### 🌍 Animaux & Habitats (Visiteur)
- Consultation de la fiche spéciale **“Asaad – Lion de l’Atlas”**
- Liste de tous les animaux avec :
  - image, nom, espèce, pays d’origine
- Filtrage par habitat ou pays africain

---

### 📅 Réservations & Avis (Visiteur connecté)
- Consultation des visites guidées disponibles
- Réservation d’une visite avec nombre de participants
- Recherche de visites guidées
- Ajout de commentaires et de notes après une visite effectuée

---

### 🛠️ Administration
- CRUD complet des :
  - Animaux
  - Habitats
- Tableau de statistiques :
  - Nombre total de visiteurs (par pays)
  - Nombre total d’animaux
  - Animaux les plus consultés
  - Visites guidées les plus réservées

---

## 🧠 Conception UML

### 📊 Diagrammes réalisés
- Diagramme de cas d’utilisation (Use Case)
- Diagramme de classes UML

### 🧱 Classes principales
- `Animal`
- `Habitat`
- `Utilisateur`
- `VisiteGuidee`
- `EtapeVisite`
- `Reservation`
- `Commentaire`

Chaque classe contient :
- Attributs privés
- Méthodes CRUD
- Gestion des relations entre entités

---

## 🧮 Technologies utilisées

- **PHP 8+ (POO)**
- **PDO**
- **MySQL**
- **HTML5 / CSS3**
- **JavaScript**
- UML (conception)

---

## 🔒 Sécurité & Validation

- Hashage des mots de passe
- Validation serveur des formulaires
- Regex pour emails, mots de passe et champs texte
- Protection contre les injections SQL via PDO

---

## 🧑‍🎓 Référentiel de compétences

**[2023] Développeur Web et Web Mobile**

- Programmation orientée objet
- Bases de données relationnelles
- Conception UML
- Développement Back-End sécurisé
- Organisation et structuration d’un projet web

---

## ✨ Auteur

Projet réalisé dans un cadre pédagogique  
Zoo Virtuel ASSAD – CAN 2025 🦁
