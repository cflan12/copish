<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/Copishboutique-master/grav-admin/user/plugins/login/languages.yaml',
    'modified' => 1463775708,
    'data' => [
        'en' => [
            'PLUGIN_LOGIN' => [
                'USERNAME' => 'Username',
                'PASSWORD' => 'Password',
                'ACCESS_DENIED' => 'Access denied...',
                'LOGIN_FAILED' => 'Login failed...',
                'LOGIN_SUCCESSFUL' => 'You have been successfully logged in.',
                'BTN_LOGIN' => 'Login',
                'BTN_LOGOUT' => 'Logout',
                'BTN_FORGOT' => 'Forgot',
                'BTN_REGISTER' => 'Register',
                'SESSION' => '&ldquo;Remember Me&rdquo;-Session',
                'REMEMBER_ME' => 'Remember Me',
                'REMEMBER_ME_HELP' => 'Sets a persistent cookie on your browser to allow persistent-login authentication between sessions.',
                'REMEMBER_ME_STOLEN_COOKIE' => 'Someone else has used your login information to access this page! All sessions were logged out. Please log in with your credentials and check your data.',
                'OAUTH_LOGIN' => 'Sign in with %s',
                'OAUTH_SIGNIN' => 'Sign in with your username and password',
                'OAUTH_CONNECT_MESSAGE' => 'Connect with a social network',
                'OAUTH_CONNECT_MESSAGE_EXTRA' => 'other social networks',
                'OAUTH_PROVIDER_NOT_SUPPORTED' => 'OAuth provider "%s" is not supported',
                'OR' => 'or',
                'BUILTIN_CSS' => 'Use built in CSS',
                'BUILTIN_CSS_HELP' => 'Include the CSS provided by the admin plugin',
                'ROUTE' => 'Login path',
                'ROUTE_HELP' => 'Custom route to a custom login page that your theme provides',
                'ROUTE_REGISTER' => 'Registration path',
                'ROUTE_REGISTER_HELP' => 'Route to the registration page. Set this if you want to use the built-in registration page. Leave it empty if you have your own registration form',
                'OAUTH_SECTION' => 'OAuth',
                'OAUTH_ENABLE' => 'Enable OAuth',
                'OAUTH_USER_AUTOCREATE' => 'Auto-create user account',
                'OAUTH_ACCESS' => 'OAuth user access rights',
                'OAUTH_PROVIDER_SECTION' => 'OAuth providers',
                'OAUTH_PROVIDER_FACEBOOK' => 'Enable Facebook OAuth',
                'OAUTH_PROVIDER_GOOGLE' => 'Enable Google OAuth',
                'OAUTH_PROVIDER_GITHUB' => 'Enable GitHub OAuth',
                'OAUTH_PROVIDER_TWITTER' => 'Enable Twitter OAuth',
                'OAUTH_CLIENT_ID' => 'Client ID',
                'OAUTH_CLIENT_SECRET' => 'Client secret',
                'FACEBOOK' => 'Facebook',
                'GOOGLE' => 'Google',
                'GITHUB' => 'GitHub',
                'TWITTER' => 'Twitter',
                'USERNAME_NOT_VALID' => 'Username should be between 3 and 16 characters, including lowercase letters, numbers, underscores, and hyphens. Uppercase letters, spaces, and special characters are not allowed',
                'USERNAME_NOT_AVAILABLE' => 'Username %s already exists, please pick another username',
                'PASSWORD_NOT_VALID' => 'Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters',
                'PASSWORDS_DO_NOT_MATCH' => 'Passwords do not match. Double-check you entered the same password twice',
                'EMAIL_NOT_CONFIGURED' => 'Email not configured',
                'USER_NEEDS_EMAIL_FIELD' => 'The user needs an email field',
                'EMAIL_SENDING_FAILURE' => 'An error occurred while sending the email',
                'ACTIVATION_EMAIL_SUBJECT' => 'Activate your account on %s',
                'ACTIVATION_EMAIL_BODY' => 'Hi %s, click %s to activate your account on %s',
                'WELCOME_EMAIL_SUBJECT' => 'Welcome to %s',
                'WELCOME_EMAIL_BODY' => 'Hi %s, welcome to %s!',
                'NOTIFICATION_EMAIL_SUBJECT' => 'New user on %s',
                'NOTIFICATION_EMAIL_BODY' => 'Hi, a new user registered on %s. Username: %s, email: %s',
                'EMAIL_FOOTER' => 'GetGrav.org',
                'ACTIVATION_LINK_EXPIRED' => 'Activation link expired',
                'USER_ACTIVATED_SUCCESSFULLY' => 'User activated successfully',
                'INVALID_REQUEST' => 'Invalid request',
                'USER_REGISTRATION' => 'User Registration',
                'USER_REGISTRATION_ENABLED_HELP' => 'Enable the user registration',
                'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Validate double entered password',
                'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Validate and compare two different fields for the passwords, named `password1` and `password2`. Enable this if you have two password fields in the registration form',
                'SET_USER_DISABLED' => 'Set the user as disabled',
                'SET_USER_DISABLED_HELP' => 'Best used along with the `Send activation email` email. Adds the user to Grav, but sets it as disabled',
                'LOGIN_AFTER_REGISTRATION' => 'Login the user after registration',
                'LOGIN_AFTER_REGISTRATION_HELP' => 'Immediately login the user after the registration. If email activation is required, the user will be logged in immediately after activating the account',
                'SEND_ACTIVATION_EMAIL' => 'Send activation email',
                'SEND_ACTIVATION_EMAIL_HELP' => 'Sends an email to the user to activate his account. Enable the `Set the user as disabled` option when using this feature, so the user will be set as disabled and an email will be sent to activate the account',
                'SEND_NOTIFICATION_EMAIL' => 'Send notification email',
                'SEND_NOTIFICATION_EMAIL_HELP' => 'Notifies the site admin that a new user has registered. The email will be sent to the `To` field in the Email Plugin configuration',
                'SEND_WELCOME_EMAIL' => 'Send welcome email',
                'SEND_WELCOME_EMAIL_HELP' => 'Sends an email to the newly registered user',
                'DEFAULT_VALUES' => 'Default values',
                'DEFAULT_VALUES_HELP' => 'List of field names and values associated, that will be added to the user profile (yaml file) by default, without being configurable by the user. Separate multiple values with a comma, with no spaces between the values',
                'ADDITIONAL_PARAM_KEY' => 'Parameter',
                'ADDITIONAL_PARAM_VALUE' => 'Value',
                'REGISTRATION_FIELDS' => 'Registration fields',
                'REGISTRATION_FIELDS_HELP' => 'Add the fields that will be added to the user yaml file. Fields not listed here will not be added even if present in the registration form',
                'REGISTRATION_FIELD_KEY' => 'Field name',
                'REDIRECT_AFTER_LOGIN' => 'Redirect after login',
                'REDIRECT_AFTER_LOGIN_HELP' => 'Custom route to redirect after login',
                'REDIRECT_AFTER_REGISTRATION' => 'Redirect after registration',
                'REDIRECT_AFTER_REGISTRATION_HELP' => 'Custom route to redirect after the registration',
                'OPTIONS' => 'Options',
                'EMAIL_VALIDATION_MESSAGE' => 'Must be a valid email address',
                'PASSWORD_VALIDATION_MESSAGE' => 'Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters'
            ]
        ],
        'fr' => [
            'PLUGIN_LOGIN' => [
                'USERNAME' => 'Nom d\'utilisateur',
                'PASSWORD' => 'Mot de passe',
                'ACCESS_DENIED' => 'Accès refusé...',
                'LOGIN_FAILED' => 'Échec de la connexion...',
                'LOGIN_SUCCESSFUL' => 'Vous vous êtes connecté avec succès.',
                'BTN_LOGIN' => 'Connexion',
                'BTN_LOGOUT' => 'Déconnexion',
                'BTN_FORGOT' => 'Mot de passe oublié',
                'BTN_REGISTER' => 'S\'enregister',
                'SESSION' => '&ldquo;Se souvenir de moi&rdquo; - Session',
                'REMEMBER_ME' => 'Se souvenir de moi',
                'REMEMBER_ME_HELP' => 'Définit un cookie sur votre navigateur pour permettant l\'authentification par connexion persistante entre les sessions.',
                'REMEMBER_ME_STOLEN_COOKIE' => 'Quelqu\'un d\'autre a utilisé vos informations de connexion pour accéder à cette page ! Toutes les sessions ont été déconnectées. Veuillez vous connecter avec vos identifiants et vérifier vos données.',
                'OAUTH_LOGIN' => 'Se connecter avec %s',
                'OAUTH_SIGNIN' => 'Se connecter avec votre identifiant et mot de passe',
                'OAUTH_CONNECT_MESSAGE' => 'Se connecter avec un réseau social',
                'OAUTH_CONNECT_MESSAGE_EXTRA' => 'd\'autres réseaux sociaux',
                'OAUTH_PROVIDER_NOT_SUPPORTED' => 'Le fournisseur OAuth "%s" n\'est pas pris en charge',
                'OR' => 'ou',
                'BUILTIN_CSS' => 'Utiliser les CSS intégrés',
                'BUILTIN_CSS_HELP' => 'Utiliser les CSS fournis dans le plugin d\'administration',
                'ROUTE' => 'Chemin de connexion',
                'ROUTE_HELP' => 'Chemin personnalisé vers une page de connexion personnalisée proposée par votre thème',
                'ROUTE_REGISTER' => 'Chemin vers l\'inscription',
                'ROUTE_REGISTER_HELP' => 'Chemin vers la page d\'inscription. A définir si vous souhaitez utiliser la page d\'inscription intégrée. Laisser vide si vous disposez de votre propre formulaire d\'inscription.',
                'OAUTH_SECTION' => 'OAuth',
                'OAUTH_ENABLE' => 'Activer OAuth',
                'OAUTH_USER_AUTOCREATE' => 'Création automatique d\'un compte utilisateur',
                'OAUTH_ACCESS' => 'Droits d\'accès OAuth de l\'utilisateur',
                'OAUTH_PROVIDER_SECTION' => 'Fournisseurs OAuth',
                'OAUTH_PROVIDER_FACEBOOK' => 'OAuth Facebook activé',
                'OAUTH_PROVIDER_GOOGLE' => 'OAuth Google activé',
                'OAUTH_PROVIDER_GITHUB' => 'OAuth GitHub activé',
                'OAUTH_PROVIDER_TWITTER' => 'OAuth Twitter activé',
                'OAUTH_CLIENT_ID' => 'ID Client',
                'OAUTH_CLIENT_SECRET' => 'Secret client',
                'FACEBOOK' => 'Facebook',
                'GOOGLE' => 'Google',
                'GITHUB' => 'GitHub',
                'TWITTER' => 'Twitter',
                'USERNAME_NOT_VALID' => 'Le nom d\'utilisateur doit comporter entre 3 et 16 caractères et peut être composé de lettres minuscules, de chiffres et de tirets de soulignement (underscores) et des traits d\'union. Les lettres majuscules, les espaces et les caractères spéciaux ne sont pas autorisés.',
                'USERNAME_NOT_AVAILABLE' => 'Le nom d\'utilisateur %s existe déjà, veuillez en choisir un autre.',
                'PASSWORD_NOT_VALID' => 'Le mot de passe doit-être composé d\'au moins un chiffre, une majuscule et une minuscule, et au moins 8 caractères',
                'PASSWORDS_DO_NOT_MATCH' => 'Les mots de passe sont différents. Réessayez de saisir le même mot de passe deux fois.',
                'EMAIL_NOT_CONFIGURED' => 'L\'e-mail n\'est pas configuré',
                'USER_NEEDS_EMAIL_FIELD' => 'L\'utilisateur a besoin d\'un champ pour e-mail',
                'EMAIL_SENDING_FAILURE' => 'Une erreur est survenue lors de l\'envoi de l\'e-mail.',
                'ACTIVATION_EMAIL_SUBJECT' => 'Activer votre compte sur %s',
                'ACTIVATION_EMAIL_BODY' => 'Bonjour %s, cliquez sur %s pour activer votre compte sur %s',
                'WELCOME_EMAIL_SUBJECT' => 'Bienvenue sur %s',
                'WELCOME_EMAIL_BODY' => 'Bonjour %s, bienvenue sur %s!',
                'NOTIFICATION_EMAIL_SUBJECT' => 'Nouvel utilisateur sur %s',
                'NOTIFICATION_EMAIL_BODY' => 'Bonjour, un nouvel utilisateur s\'est inscrit sur %s. Nom d\'utilisateur : %s, e-mail : %s',
                'EMAIL_FOOTER' => 'GetGrav.org',
                'ACTIVATION_LINK_EXPIRED' => 'Le lien d\'activation a expiré',
                'USER_ACTIVATED_SUCCESSFULLY' => 'Utilisateur activé avec succès',
                'INVALID_REQUEST' => 'Requête invalide',
                'USER_REGISTRATION' => 'Inscription de l\'utilisateur',
                'USER_REGISTRATION_ENABLED_HELP' => 'Activer l\'inscription des utilisateurs',
                'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Validate double entered password',
                'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Validate and compare two different fields for the passwords, named `password1` and `password2`. Enable this if you have two password fields in the registration form',
                'SET_USER_DISABLED' => 'Définir l\'utilisateur comme désactivé',
                'SET_USER_DISABLED_HELP' => 'Best used along with the `Send activation email` email. Adds the user to Grav, but sets it as disabled',
                'LOGIN_AFTER_REGISTRATION' => 'Connecte l\'utilisateur après son inscription',
                'LOGIN_AFTER_REGISTRATION_HELP' => 'Identifier immédiatement l\'utilisateur après l\'inscription. Si l\'email d\'activation est demandé, l\'utilisateur sera connecté immédiatement après l\'activation du compte',
                'SEND_ACTIVATION_EMAIL' => 'Envoyer un e-mail d\'activation',
                'SEND_ACTIVATION_EMAIL_HELP' => 'Sends an email to the user to activate his account. Enable the `Set the user as disabled` option when using this feature, so the user will be set as disabled and an email will be sent to activate the account',
                'SEND_NOTIFICATION_EMAIL' => 'Envoyer un e-mail de notification',
                'SEND_NOTIFICATION_EMAIL_HELP' => 'Notifies the site admin that a new user has registered. The email will be sent to the `To` field in the Email Plugin configuration',
                'SEND_WELCOME_EMAIL' => 'Envoyer un e-mail de bienvenue',
                'SEND_WELCOME_EMAIL_HELP' => 'Envoyer un e-mail à un nouvel utilisateur enregistré.',
                'DEFAULT_VALUES' => 'Valeurs par défaut',
                'DEFAULT_VALUES_HELP' => 'Liste des noms et valeurs associés pour les champs. Ils seront ajoutés au profil utilisateur par défaut (fichier yaml), sans pouvoir être configurables par l\'utilisateur. Séparez les différentes valeurs par une virgule, sans espaces entre les valeurs.',
                'ADDITIONAL_PARAM_KEY' => 'Paramètre',
                'ADDITIONAL_PARAM_VALUE' => 'Valeur',
                'REGISTRATION_FIELDS' => 'Champs d\'inscription',
                'REGISTRATION_FIELDS_HELP' => 'Ajouter les champs qui seront ajoutés au fichier yaml de l\'utilisateur. Les champs non listés ne seront pas ajoutés même s\'ils sont présent sur le formulaire d\'inscription',
                'REGISTRATION_FIELD_KEY' => 'Nom du champ',
                'REDIRECT_AFTER_LOGIN' => 'Redirection après connexion',
                'REDIRECT_AFTER_LOGIN_HELP' => 'Chemin personnalisé de redirection après la connexion',
                'REDIRECT_AFTER_REGISTRATION' => 'Redirection après inscription',
                'REDIRECT_AFTER_REGISTRATION_HELP' => 'Chemin personnalisé de redirection après l\'inscription',
                'OPTIONS' => 'Options',
                'EMAIL_VALIDATION_MESSAGE' => 'Doit-être une adresse e-mail valide',
                'PASSWORD_VALIDATION_MESSAGE' => 'Le mot de passe doit-être composé d\'au moins un chiffre, une majuscule et une minuscule, et au moins 8 caractères'
            ]
        ],
        'hr' => [
            'PLUGIN_LOGIN' => [
                'ACCESS_DENIED' => 'Pristup odbijen...',
                'LOGIN_FAILED' => 'Prijava nije uspjela...',
                'BTN_LOGIN' => 'Prijava',
                'BTN_LOGOUT' => 'Odjava',
                'BTN_FORGOT' => 'Zaboravih',
                'BTN_REGISTER' => 'Registriraj',
                'REMEMBER_ME' => 'Zapamti me',
                'OAUTH_LOGIN' => 'Prijavi se sa %s',
                'OAUTH_SIGNIN' => 'Prijavi se sa svojim korisničkim imenom i lozinkom',
                'OAUTH_CONNECT_MESSAGE' => 'Poveži se preko socijalnih mreža',
                'OAUTH_CONNECT_MESSAGE_EXTRA' => 'druge socijalne mreže',
                'OAUTH_PROVIDER_NOT_SUPPORTED' => 'OAuth provider "%s" nije podržan',
                'OR' => 'ili',
                'BUILTIN_CSS' => 'Koristi ugrađeni CSS',
                'BUILTIN_CSS_HELP' => 'Uključi CSS koji dolazi sa admin pluginom',
                'ROUTE' => 'Putanja prijave',
                'ROUTE_REGISTER' => 'Putanja registracije',
                'USERNAME_NOT_VALID' => 'Korisničko ime bi trebalo biti između 3 i 16 znakova, uključujući mala slova, brojeve, _, i crtice. VELIKA SLOVA, razmaci, i posebni znakovi nisu dopušteni',
                'USERNAME_NOT_AVAILABLE' => 'Korisničko ime %s već postoji, odaberi neko drugo',
                'PASSWORD_NOT_VALID' => 'Lozinka mora sadržavati bar jedan broj i jedno veliko i malo slovo, i bar još 8 ili više znakova',
                'PASSWORDS_DO_NOT_MATCH' => 'Lozinke se ne slažu. Poonovo provjeri da li si unio istu lozinku dva puta',
                'EMAIL_NOT_CONFIGURED' => 'Email nije konfiguriran',
                'USER_NEEDS_EMAIL_FIELD' => 'Korisnik treba email polje',
                'EMAIL_SENDING_FAILURE' => 'Došlo je do greške pri slanju emaila',
                'EMAIL_FOOTER' => 'GetGrav.org',
                'ACTIVATION_LINK_EXPIRED' => 'Aktivacijski link je istekao',
                'USER_ACTIVATED_SUCCESSFULLY' => 'Korisnik je uspješno aktiviran',
                'INVALID_REQUEST' => 'Nevaljani zahtjev',
                'USER_REGISTRATION' => 'Registracija korisnika',
                'USER_REGISTRATION_ENABLED_HELP' => 'Omogući registraciju korisnika',
                'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Validiraj duplo unesenu lozinku',
                'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Validiraj i usporedi dva različčita polja za lozinke, imenovana `lozinka1` i `lozinka2`. Omogući ovo ako imaš dva polja za lozinke u formularu registracije',
                'LOGIN_AFTER_REGISTRATION' => 'Ulogiraj korisnika nakon reegistracije',
                'LOGIN_AFTER_REGISTRATION_HELP' => 'Ulogiraj korisnika odmah nakon registracije. Ako je potrebna email aktivacija, korisnik će biti ulogiran odmah nakon aktiviranja računa',
                'SEND_ACTIVATION_EMAIL' => 'Pošalji aktivacijski email',
                'SEND_ACTIVATION_EMAIL_HELP' => 'Šalje email korisniku da aktivira svoja račun.',
                'SEND_NOTIFICATION_EMAIL' => 'Pošalji email obavijest',
                'SEND_NOTIFICATION_EMAIL_HELP' => 'Obavještava administratora da se novi korisnik registrirao. Email će biti poslan na `To` polje u Email Plugin konfiguraciji',
                'SEND_WELCOME_EMAIL' => 'Pošalji email dobrodošlice',
                'SEND_WELCOME_EMAIL_HELP' => 'Šalje email novoregistriranom korisniku',
                'DEFAULT_VALUES' => 'Određene vrijednosti',
                'DEFAULT_VALUES_HELP' => 'List of field names and values associated, that will be added to the user profile (yaml file) by default, without being configurable by the user. Separate multiple values with a comma, with no spaces between the values',
                'ADDITIONAL_PARAM_KEY' => 'Parametar',
                'ADDITIONAL_PARAM_VALUE' => 'Vrijednost',
                'REGISTRATION_FIELDS' => 'Registracijska polja',
                'REGISTRATION_FIELDS_HELP' => 'Add the fields that will be added to the user yaml file. Fields not listed here will not be added even if present in the registration form',
                'REGISTRATION_FIELD_KEY' => 'Ime polja',
                'OPTIONS' => 'Opcije'
            ]
        ],
        'hu' => [
            'PLUGIN_LOGIN' => [
                'ACCESS_DENIED' => 'Hozzáférés megtagadva...',
                'LOGIN_FAILED' => 'Sikertelen belépés...',
                'LOGIN_SUCCESSFUL' => 'Sikeresen beléptél.',
                'BTN_LOGIN' => 'Belépés',
                'BTN_LOGOUT' => 'Kilépés',
                'BTN_FORGOT' => 'Elfelejtettem',
                'BTN_REGISTER' => 'Regisztráció',
                'SESSION' => 'Munkamenet Megjegyzése',
                'REMEMBER_ME' => 'Jegyezz Meg',
                'REMEMBER_ME_HELP' => 'Elhelyezünk egy hosszú lejáratú sütit a böngésződben, hogy belépve maradhass két munkamenet között.',
                'REMEMBER_ME_STOLEN_COOKIE' => 'Valaki a belépési adataid felhasználásával látogatta meg ezt az oldalt! Minden munkamenetet kiléptettünk. Kérlek, jelentkezz be ismét és ellenőrizd az adataidat.',
                'OAUTH_LOGIN' => 'Belépés %s használatával',
                'OAUTH_SIGNIN' => 'Belépés felhasználóneved és jelszavad megadásával',
                'OAUTH_CONNECT_MESSAGE' => 'Összekapcsolás egy közösségi oldallal',
                'OAUTH_CONNECT_MESSAGE_EXTRA' => 'más közösségi oldalak',
                'OAUTH_PROVIDER_NOT_SUPPORTED' => 'A(z) "%s" OAuth szolgáltató nem használható',
                'OR' => 'vagy',
                'BUILTIN_CSS' => 'Beépített CSS használata',
                'BUILTIN_CSS_HELP' => 'Az admin plugin által biztosított CSS beillesztése',
                'ROUTE' => 'Belépés útvonala',
                'ROUTE_HELP' => 'Egyedi útvonal egy egyedi belépő oldalhoz, melyet az aktuális téma biztosít',
                'ROUTE_REGISTER' => 'Regisztráció útvonala',
                'ROUTE_REGISTER_HELP' => 'A regisztrációs oldal elérési útja. Akkor állítsd be, ha a beépített regisztrációs oldalt szeretnéd használni',
                'OAUTH_SECTION' => 'OAuth',
                'OAUTH_ENABLE' => 'OAuth engedélyezése',
                'OAUTH_USER_AUTOCREATE' => 'Felhasználói fiók automatikus létrehozása',
                'OAUTH_ACCESS' => 'OAuth felhasználók jogai',
                'OAUTH_PROVIDER_SECTION' => 'OAuth szolgáltatók',
                'OAUTH_PROVIDER_FACEBOOK' => 'Facebook OAuth Enegdélyezése',
                'OAUTH_PROVIDER_GOOGLE' => 'Google OAuth Engedélyezése',
                'OAUTH_PROVIDER_GITHUB' => 'GitHub OAuth Engedélyezése',
                'OAUTH_PROVIDER_TWITTER' => 'Twitter OAuth Engeédlyezése',
                'OAUTH_CLIENT_ID' => 'Client ID',
                'OAUTH_CLIENT_SECRET' => 'Client secret',
                'FACEBOOK' => 'Facebook',
                'GOOGLE' => 'Google',
                'GITHUB' => 'GitHub',
                'TWITTER' => 'Twitter',
                'USERNAME_NOT_VALID' => 'A felhasználónév 3-16 karakter hosszú legyen, tartalmazhat kisbetűket, számokat, aláhúzást és kötőjelet. Nagybetűk, szóköz és speciális karakterek használata nem megengedett',
                'USERNAME_NOT_AVAILABLE' => '%s nevű felhasználó már létezik, kérlek válassz más felhasználónevet',
                'PASSWORD_NOT_VALID' => 'A jelszónak tartalmaznia kell legalább egy számot, egy kisbetűt és egy nagybetűt, valamint legalább 8 karakter hosszú kell, hogy legyen',
                'PASSWORDS_DO_NOT_MATCH' => 'A két jelszó nem egyezik meg. Győzödj meg róla, hogy azonos legyen a kettő'
            ]
        ]
    ]
];
