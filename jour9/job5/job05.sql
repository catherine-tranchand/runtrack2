-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 24 nov. 2022 à 14:17
-- Version du serveur : 5.7.34
-- Version de PHP : 8.0.8


---une requête permettant de sélectionner le prenom, le nom et la date de naissance des étudiants de sexe féminin.-----

SELECT 'prenom', 'nom', 'naissance' FROM 'etudiants' WHERE sexe = 'feminin'; 