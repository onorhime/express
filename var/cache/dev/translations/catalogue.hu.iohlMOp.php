<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hu', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Hitelesítési hiba lépett fel.',
    'Authentication credentials could not be found.' => 'Nem találhatók hitelesítési információk.',
    'Authentication request could not be processed due to a system problem.' => 'A hitelesítési kérést rendszerhiba miatt nem lehet feldolgozni.',
    'Invalid credentials.' => 'Érvénytelen hitelesítési információk.',
    'Cookie has already been used by someone else.' => 'Ezt a sütit valaki más már felhasználta.',
    'Not privileged to request the resource.' => 'Nem rendelkezik az erőforrás eléréséhez szükséges jogosultsággal.',
    'Invalid CSRF token.' => 'Érvénytelen CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Nem található a hitelesítési tokent támogató hitelesítési szolgáltatás.',
    'No session available, it either timed out or cookies are not enabled.' => 'Munkamenet nem áll rendelkezésre, túllépte az időkeretet vagy a sütik le vannak tiltva.',
    'No token could be found.' => 'Nem található token.',
    'Username could not be found.' => 'A felhasználónév nem található.',
    'Account has expired.' => 'A fiók lejárt.',
    'Credentials have expired.' => 'A hitelesítési információk lejártak.',
    'Account is disabled.' => 'Felfüggesztett fiók.',
    'Account is locked.' => 'Zárolt fiók.',
    'Too many failed login attempts, please try again later.' => 'Túl sok sikertelen bejelentkezési kísérlet, kérjük próbálja újra később.',
    'Invalid or expired login link.' => 'Érvénytelen vagy lejárt bejelentkezési link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Túl sok sikertelen bejelentkezési kísérlet, kérjük próbálja újra %minutes% perc múlva.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Túl sok sikertelen bejelentkezési kísérlet, kérjük, próbálja újra %minutes% perc múlva.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Előző',
    'label_next' => 'Következő',
    'filter_searchword' => 'Keresés...',
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
