@extends('template.template')

@include('template.navigation')

@section('content')

<main id="page_lycee">
    <h2>Histoire du lyc&eacute;e</h2>
<p>Le lyc&eacute;e Turgot est situ&eacute; dans le
3&egrave;me arrondissement.</p>
<p>Anciennement Ecole Turgot, cr&eacute;ee en 1836 par le
Comit&eacute; Central de l'Instruction Primaire, est d'abord
install&eacute;e dans les locaux de l'ancien couvent des filles de
la Madeleine, devenu prison des Madelonnettes, l'Ecole municipale
primaire sup&eacute;rieure Turgot est reconstruitre et agrandie
&agrave; partir de 1867.
Sous l'influence du Pr&eacute;fet Haussmann, il d&eacute;cide
que sa fa&ccedil;ade principale donnera sur la rue de Turbigo,
ouverte entre 1865 et 1866.</p>
<p>L'&eacute;cole occupe alors 4500 m&sup2; et conserve
sa cour initiale &agrave; colonnes qui donne sur l'actuelle rue du
Vertbois.</p>
<p>Entre les deux guerres, une extension permet l'ajout de deux
&eacute;tages. En 1943, l'&eacute;tablissement devient
Coll&egrave;ge Turgot, puis en 1954, lyc&eacute;e d'Etat
Turgot. En cette m&ecirc;me ann&eacute;e 54, une nouvelle
op&eacute;ration de surr&eacute;l&eacute;vation du
lyc&eacute;e permet de doubler sa capacit&eacute; d'accueil.</p>

<h2>Le programme pedagogique</h2>
    {{ HTML::image('assets/img/formation.jpg', 'programme') }}
</main>
@stop
@include('template.aside')