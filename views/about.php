<?php
session_start();

$title = "Association";

?>

<div id="app" class="assoc">
    <div class="assoc__container">
        <h1>L'association</h1>
        <h3>A propos</h3>
        <p>Cette association a pour but de créer un réseau entre les anciens et nouveaux étudiants de la formation du Diplôme Universitaire Technologique des Métiers du Multimédia et de l’Internet de Toulon afin de créer des opportunités professionnelles pour ces anciens et nouveaux étudiants et de promouvoir la formation de l’Université de Toulon.</p>
        <div id="googleMap"></div>
        <h3>Nous contacter</h3>
        <div class="assoc__socials">
            <a href="https://www.facebook.com/alumnimmitln/">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/alumnimmitln/">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/alumni-mmi-toulon/about/">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="mailto:alumni.mmi.tln@gmail.com"><i class="fas fa-at"></i></a>
        </div>
    </div>
</div>
<script>
    var map;

    function initMap() {
        let myLatLng = {
            lat: 43.121370,
            lng: 5.940140
        }
        map = new google.maps.Map(document.getElementById('googleMap'), {
            center: myLatLng,
            zoom: 15,
            zoomControl: true,
            mapTypeControl: false,
            scaleControl: true,
            streetViewControl: true,
            rotateControl: false,
            fullscreenControl: false
        });
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'IUT de Toulon'
        });

    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR0Xqbsyh718z5wCrkqeG42AhxP6l4JVc&callback=initMap" async defer></script>