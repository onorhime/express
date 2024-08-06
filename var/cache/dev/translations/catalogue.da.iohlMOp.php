<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('da', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'En fejl indtraf ved godkendelse.',
    'Authentication credentials could not be found.' => 'Loginoplysninger kunne ikke findes.',
    'Authentication request could not be processed due to a system problem.' => 'Godkendelsesanmodningen kunne ikke behandles på grund af en systemfejl.',
    'Invalid credentials.' => 'Ugyldige loginoplysninger.',
    'Cookie has already been used by someone else.' => 'Cookie er allerede blevet brugt af en anden.',
    'Not privileged to request the resource.' => 'Ingen adgang til at forespørge ressourcen.',
    'Invalid CSRF token.' => 'Ugyldig CSRF-token.',
    'No authentication provider found to support the authentication token.' => 'Ingen godkendelsesudbyder blev fundet til at understøtte godkendelsestoken.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen session er tilgængelig. Den er enten udløbet eller cookies er ikke aktiveret.',
    'No token could be found.' => 'Ingen token kunne findes.',
    'Username could not be found.' => 'Brugernavn kunne ikke findes.',
    'Account has expired.' => 'Brugerkonto er udløbet.',
    'Credentials have expired.' => 'Loginoplysninger er udløbet.',
    'Account is disabled.' => 'Brugerkonto er deaktiveret.',
    'Account is locked.' => 'Brugerkonto er låst.',
    'Too many failed login attempts, please try again later.' => 'For mange mislykkede loginforsøg. Prøv venligst igen senere.',
    'Invalid or expired login link.' => 'Ugyldigt eller udløbet login-link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'For mange mislykkede loginforsøg. Prøv venligst igen om %minutes% minut.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'For mange mislykkede loginforsøg, prøv igen om %minutes% minutter.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Forrige',
    'label_next' => 'Næste',
    'filter_searchword' => 'Søg...',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
  'flasher' => 
  array (
    'success' => 'Success',
    'error' => 'Error',
    'warning' => 'Warning',
    'info' => 'Info',
    'The resource was created' => 'The :resource was created',
    'The resource was updated' => 'The :resource was updated',
    'The resource was saved' => 'The :resource was saved',
    'The resource was deleted' => 'The :resource was deleted',
    'resource' => 'resource',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
    'filter_searchword' => 'Searchword...',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
