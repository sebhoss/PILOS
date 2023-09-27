<?php

return [
    'application' => [
        'attendance' => [
            'enabled_title'          => 'Autoriser la journalisation de la présence des participants aux réunions',
            'retention_period_title' => 'Nombre de jours de conservation de la journalisation des présences',
        ],
        'attendance_and_statistics_title' => 'Fréquentation et statistiques',
        'banner'                          => [
            'background'         => 'Couleur de fond de la bannière',
            'banner_title'       => 'Titre',
            'color'              => 'Couleur du texte de la bannière',
            'enabled'            => 'Voir',
            'icon'               => 'Icône',
            'icon_description'   => 'La classe CSS de Fontawesome-Icon (ex: `fa-solid fa-door-open`). L\'icône ne sera visible que si un titre est fourni.',
            'link'               => 'Lien à afficher après le message',
            'link_style'         => 'Style de lien',
            'link_target'        => 'Cible du lien',
            'link_text'          => 'Texte du lien',
            'message'            => 'Message',
            'select_link_style'  => 'Choisir le style du lien',
            'select_link_target' => 'Choisir la cible du lien',
            'title'              => 'Bannière pour les messages',
        ],
        'bbb' => [
            'logo' => [
                'alt'          => 'Aperçu du logo',
                'hint'         => 'https://domaine.fr/chemin/logo.svg',
                'select_file'  => 'Sélectionner le fichier de logo',
                'title'        => 'Logo',
                'upload_title' => 'Télécharger le logo (max. 500 Ko)',
                'url_title'    => 'URL du logo',
            ],
            'style' => [
                'title' => 'Fichier de styles CSS',
            ],
            'title' => 'Personnalisations de BigBlueButton',
        ],
        'default_presentation' => 'Présentation par défaut',
        'default_timezone'     => 'Fuseau horaire par défaut',
        'favicon'              => [
            'alt'          => 'Aperçu du favicon',
            'hint'         => 'https://domaine.fr/chemin/favicon.ico',
            'select_file'  => 'Sélectionner le fichier favicon',
            'title'        => 'Favicon',
            'upload_title' => 'Télécharger le favicon (max. 500 Ko, Format: .ico)',
            'url_title'    => 'URL du fichier favicon',
        ],
        'help_url' => [
            'description' => 'Le bouton d\'aide s\'affichera que si une page d\'aide y est associée.',
            'title'       => 'URL de la page d\'aide',
        ],
        'legal_notice_url' => [
            'description' => 'Le lien des mentions légales ne s\'affichera que si une URL y est associée.',
            'title'       => 'URL des mentions légales',
        ],
        'logo' => [
            'alt'          => 'Aperçu du logo',
            'hint'         => 'https://domaine.fr/chemin/logo.svg',
            'select_file'  => 'Sélectionner le logo',
            'title'        => 'Logo',
            'upload_title' => 'Télécharger le logo (max. 500 Ko)',
            'url_title'    => 'URL du logo',
        ],
        'name' => [
            'description' => 'Changer le titre du site',
            'title'       => 'Nom de l\'application',
        ],
        'never'                          => 'Jamais',
        'one_day'                        => '1 jour (24 heures)',
        'one_month'                      => '1 mois (30 jours)',
        'one_week'                       => '1 semaine (7 jours)',
        'one_year'                       => '1 an (365 jours)',
        'own_rooms_pagination_page_size' => [
            'description' => 'Limites de pagination pour les salles personnelles',
            'title'       => 'Taille de la pagination pour les salles personnelles',
        ],
        'pagination_page_size' => [
            'description' => 'Limite la taille de la pagination pour la pagination des tables de données',
            'title'       => 'Taille de la pagination',
        ],
        'password_change_allowed' => 'Donnez aux utilisateurs locaux la possibilité de modifier leur mot de passe',
        'privacy_policy_url'      => [
            'description' => 'Le lien vers la page de la politique de confidentialité ne sera affiché que si une URL lui est assignée.',
            'title'       => 'URL vers la politique de confidentialité',
        ],
        'room_auto_delete' => [
            'deadline_period' => [
                'description' => 'Délai entre l\'envoi de l\'email d\'information et la suppression',
                'title'       => 'Date limite de suppression',
            ],
            'enabled' => [
                'title' => 'Supprimer automatiquement les salles inutilisées',
            ],
            'inactive_period' => [
                'description' => 'Salles où la dernière réunion dépasse la période d\'inactivité',
                'title'       => 'Période jusqu\'à ce que les salles inactives soient supprimées',
            ],
            'never_used_period' => [
                'description' => 'Salles créées avant la période d\'inactivté mais qui n\'ont jamais été utilisées',
                'title'       => 'Période jusqu\'à ce que les salles jamais utilisées soient supprimées',
            ],
        ],
        'room_limit' => [
            'description' => 'Limite le nombre de salles qu\'un utilisateur peut avoir. Ce paramètre ne s\'applique pas aux administrateurs.        Entrez la valeur -1 pour un nombre illimité de salles',
            'title'       => 'Nombre de salles par utilisateur',
        ],
        'room_token_expiration' => [
            'description' => 'Période depuis la dernière utilisation, après laquelle les liens de salle personnalisés sont automatiquement supprimés.',
            'title'       => 'Délai d\'expiration des liens de salle personnalisés',
        ],
        'six_month'  => '6 mois (180 jours)',
        'statistics' => [
            'meetings' => [
                'enabled_title'          => 'Journalisation de l\'utilisation des réunions',
                'retention_period_title' => 'Durée de conservation de la journalisation des réunions en jours',
            ],
            'servers' => [
                'enabled_title'          => 'Journaliser l\'utilisation du serveur',
                'retention_period_title' => 'Durée de conservation de la journalisation d\'usage du serveur',
            ],
        ],
        'three_month'      => '3 mois (90 jours)',
        'tile_description' => 'Paramètres systèmes tels que le logo, la bannière de maintenance et la pagination des pages.',
        'title'            => 'Application',
        'two_weeks'        => '2 semaines (14 jours)',
        'two_years'        => '2 ans (730 jours)',
        'unlimited'        => 'Illimité',
        'user_settings'    => 'Paramètres utilisateur',
    ],
    'home_button'          => 'Retour à l\'aperçu',
    'overview'             => 'Aperçu',
    'overview_description' => 'Ici, vous pouvez gérer les paramètres de l\'application. Veuillez sélectionner l\'un des éléments de menu à gauche pour ajuster les paramètres.',
    'roles'                => [
        'default' => 'Par défaut',
        'delete'  => [
            'confirm' => 'Voulez-vous vraiment supprimer le rôle :name?',
            'item'    => 'Supprimer le rôle :id',
            'title'   => 'Supprimer le rôle ?',
        ],
        'edit'                        => 'Modifier le rôle :name',
        'has_included_permission'     => 'La permission ":name" a été explicitement sélectionnée ou est incluse dans une autre permission sélectionnée.',
        'has_not_included_permission' => 'La permission ":name" n\'a pas été explicitement sélectionnée et n\'est pas incluse dans une autre permission sélectionnée.',
        'new'                         => 'Créer un nouveau rôle',
        'no_options'                  => 'Aucune permission trouvée !',
        'nodata'                      => 'Aucun rôle trouvé !',
        'permission_explicit'         => 'Explicite',
        'permission_included'         => 'Inclus',
        'permission_included_help'    => 'Autorisations sélectionnées et autorisations incluses dans les autorisations sélectionnées.',
        'permission_name'             => 'Nom des permissions',
        'permissions'                 => 'Permissions',
        'room_limit'                  => [
            'custom'     => 'Total personnalisé',
            'default'    => 'Valeur par défaut (:value)',
            'help_modal' => [
                'examples'       => 'Exemples',
                'info'           => 'La limite de salle d\'un utilisateur dépend de la limite associé au rôle auquel appartient un utilisateur.',
                'note'           => 'X: L\'utilisateur n\'est pas membre de ce rôle',
                'role_a'         => 'Rôle A',
                'role_b'         => 'Rôle B',
                'system_default' => 'Valeur par défaut',
            ],
            'unlimited' => 'Illimité',
        ],
        'select_roles'     => 'Merci de choisir au moins un rôle',
        'tile_description' => 'Les rôles attribuent des autorisations, organisent les utilisateurs et définissent le nombre maximum de salles par utilisateur.',
        'view'             => 'Informations détaillées pour le rôle :name',
    ],
    'room_types' => [
        'allow_listing'             => 'Recherche de salle autorisée',
        'allow_listing_description' => 'Dans les paramètres, les salles peuvent être rendues visibles pour les recherches.',
        'color'                     => 'Couleur de l\'icône',
        'custom_color'              => 'Couleur personnalisée',
        'delete'                    => [
            'confirm'          => 'Voulez-vous vraiment supprimer le type de salle :name?',
            'item'             => 'Supprimer le type de salle :id',
            'no_replacement'   => '-- Aucun remplacement --',
            'replacement'      => 'Type de salle en remplacement',
            'replacement_info' => 'Si des salles sont associées à ce type de salle, vous devez sélectionner un type de salle en remplacement.',
            'title'            => 'Supprimer ce type de salle ?',
        ],
        'edit'                    => 'Modifier le type de salle :name',
        'icon'                    => 'Icône',
        'new'                     => 'Créer un nouveau type de salle',
        'no_data'                 => 'Aucun type de salle trouvé!',
        'preview'                 => 'Aperçu',
        'restrict'                => 'Restreindre l\'utilisation',
        'restrict_description'    => 'L\'utilisation de ce type de salle et des serveurs correspondants sera limitée aux rôles sélectionnés.',
        'select_roles'            => 'Selection des rôles',
        'select_server_pool'      => 'Selection du groupe de serveurs',
        'server_pool_description' => 'Les serveurs de ce groupe seront utilisés pour l\'équilibrage de charge',
        'short'                   => 'Texte de l\'icône',
        'tile_description'        => 'Les types de salle permettent d\'organiser les salles, en y associant un groupe de serveur ainsi qu\'un icône pour une reconnaisance visuelle rapide.',
        'view'                    => 'Informations détaillées sur le type de salle :name',
    ],
    'server_pools' => [
        'delete' => [
            'confirm' => 'Voulez-vous vraiment supprimer le groupe de serveurs :name?',
            'failed'  => 'Le groupe de serveurs ne peut pas être supprimé car les types de salles suivants l\'utilisent toujours:',
            'item'    => 'Supprimer le groupe de serveur :name',
            'title'   => 'Supprimer le groupe de serveur ?',
        ],
        'edit'             => 'Modifier le groupe de serveur :name',
        'new'              => 'Créer un nouveau groupe de serveur',
        'no_data'          => 'Aucun groupe de serveur trouvé !',
        'no_data_filtered' => 'Aucun groupe de serveur trouvé avec ces filtres sélectionnés !',
        'remove_server'    => 'Supprimer le serveur',
        'select_servers'   => 'Selection du serveur',
        'server_count'     => 'Nombre de serveurs',
        'tile_description' => 'Pour l\'équilibrage de charge, plusieurs serveurs sont regroupés et attribués à chaque salle via le type de salle.',
        'view'             => 'Informations détaillées sur le groupe de serveurs :name',
    ],
    'servers' => [
        'base_url'      => 'URL de l\'API',
        'current_usage' => 'Utilisation actuelle',
        'delete'        => [
            'confirm' => 'Voulez-vous vraiment supprimer le serveur :name?',
            'item'    => 'Supprimer le serveur :name',
            'title'   => 'Supprimer le serveur ?',
        ],
        'disabled'             => 'Désactivé',
        'disabled_description' => 'Les réunions en cours ne seront pas arrêtées si le serveur est désactivé, mais aucune nouvelle réunion n\'utilisera ce serveur',
        'edit'                 => 'Modifier le serveur :name',
        'flash'                => [
            'panic' => [
                'description' => ':total réunions trouvées et :success ont été correctement arrêtées.',
                'title'       => 'Le serveur a été désactivé.',
            ],
        ],
        'hide_salt'           => 'Masquer le texte en clair',
        'meeting_count'       => 'Réunions',
        'meeting_description' => 'Toutes les réunions sur le serveur BigBlueButton',
        'new'                 => 'Ajouter un serveur',
        'no_data'             => 'Aucun serveur trouvé !',
        'no_data_filtered'    => 'Aucun serveur trouvé avec ces filtres sélectionnés !',
        'offline'             => 'Hors ligne',
        'offline_reason'      => [
            'connection' => 'Aucune connexion n\'a pu être établie avec le serveur.',
            'salt'       => 'Une connexion au serveur a pu être établie, mais le secret de l\'API n\'est pas valide.',
        ],
        'online'                  => 'En ligne',
        'own_meeting_count'       => 'Réunions personnelles',
        'own_meeting_description' => 'Réunions gérées par ce système',
        'panic'                   => 'Désactiver et nettoyer',
        'panic_description'       => 'Seules les réunions gérées par ce système sont arrêtées !',
        'panic_server'            => 'Désactiver le serveur et mettre fin à toutes les réunions',
        'participant_count'       => 'Participants',
        'reload'                  => 'Recalculer l\'utilisation',
        'salt'                    => 'Secret pour l\'API',
        'show_salt'               => 'Afficher le texte en clair',
        'status'                  => 'Statut',
        'strength'                => 'Puissance du serveur',
        'strength_description'    => 'Facteur d\'équilibrage de charge, plus le facteur est élevé, plus le serveur peut gérer de participants et de réunions',
        'test_connection'         => 'Test de connexion',
        'tile_description'        => 'Les serveurs fournissent l\'infrastructure BBB pour les réunions.',
        'unknown'                 => 'Inconnu',
        'usage_info'              => 'L\'utilisation (réunions, participants, vidéos) contient également des réunions qui sont gérées par d\'autres systèmes.',
        'version'                 => 'Version',
        'video_count'             => 'Vidéos',
        'view'                    => 'Informations détaillées du serveur :name',
    ],
    'title' => 'Paramètres',
    'users' => [
        'authenticator' => [
            'shibboleth' => 'Shibboleth',
            'ldap'       => 'LDAP',
            'local'      => 'Interne',
            'title'      => 'Type d\'identification',
        ],
        'base_data' => 'Données de base',
        'bbb'       => 'BigBlueButton',
        'delete'    => [
            'confirm' => 'Voulez-vous vraiment supprimer l\'utilisateur :firstname :lastname?',
            'item'    => 'Supprimer l\'utilisateur :firstname :lastname',
            'title'   => 'Supprimer l\'utilisateur ?',
        ],
        'edit'                          => 'Modifier l\'utilisateur :firstname :lastname',
        'email'                         => 'E-mail',
        'generate_password'             => 'Générer le mot de passe',
        'generate_password_description' => 'Un mot de passe généré sera défini et un e-mail avec un lien de réinitialisation sera envoyé à l\'utilisateur. L\'utilisateur sera automatiquement supprimé s\'il ne change pas son mot de passe dans le temps imparti.',
        'hide_password'                 => 'Masquer le mot de passe',
        'image'                         => [
            'crop'         => 'Recadrer la photo de profil',
            'delete'       => 'Supprimer la photo',
            'invalid_mime' => 'Ce format de fichier n\'est pas pris en charge. Veuillez sélectionner un fichier jpg ou png.',
            'save'         => 'Confirmer',
            'title'        => 'Photo de profil',
            'undo_delete'  => 'Annuler la suppression',
            'upload'       => 'Télécharger une nouvelle photo',
        ],
        'new'                    => 'Créer un nouvel utilisateur',
        'no_data'                => 'Aucun utilisateur trouvé !',
        'no_data_filtered'       => 'Aucun utilisateur trouvé avec ces filtres sélectionnés !',
        'other_settings'         => 'Autre paramètres',
        'password_reset_success' => 'L\'e-mail de réinitialisation du mot de passe a été envoyé avec succès à :mail!',
        'remove_role'            => 'Supprimer le rôle',
        'reset_password'         => [
            'confirm' => 'Voulez-vous vraiment réinitialiser le mot de passe de :firstname :lastname?',
            'item'    => 'Réinitialiser le mot de passe pour l\'utilisateur:firstname :lastname',
            'title'   => 'Réinitialiser le mot de passe pour l\'utilisateur ?',
        ],
        'role_filter'           => 'Sélectionnez le rôle pour le filtrage',
        'roles_and_permissions' => 'Rôles et permissions',
        'show_password'         => 'Afficher le mot de passe',
        'skip_check_audio'      => 'Désactiver le test audio d\'écho',
        'tile_description'      => 'Les utilisateurs peuvent se connecter au système et utiliser différentes fonctionnalités selon leur rôle.',
        'timezone'              => 'Fuseau horaire',
        'user_locale'           => 'Langue',
        'view'                  => 'Informations détaillées pour l\'utilisateur :firstname :lastname',
    ],
];
