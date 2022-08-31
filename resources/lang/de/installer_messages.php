<?php 

return [
    'title' => 'Laravel Installer',
    'next' => 'Nächster Schritt',
    'back' => 'Bisherige',
    'finish' => 'Installieren',
    'forms' => [
        'errorTitle' => 'Folgende Fehler sind aufgetreten:',
    ],
    'welcome' => [
        'templateTitle' => 'Herzlich willkommen',
        'title' => 'Laravel Installer',
        'message' => 'Einfacher Installations- und Einrichtungsassistent.',
        'next' => 'Überprüfen Sie die Anforderungen',
    ],
    'requirements' => [
        'templateTitle' => 'Schritt 1 | Serveranforderungen',
        'title' => 'Serveranforderungen',
        'next' => 'Überprüfen Sie die Berechtigungen',
    ],
    'permissions' => [
        'templateTitle' => 'Schritt 2 | Berechtigungen',
        'title' => 'Berechtigungen',
        'next' => 'Umgebung konfigurieren',
    ],
    'environment' => [
        'menu' => [
            'templateTitle' => 'Schritt 3 | Umgebungseinstellungen',
            'title' => 'Umgebungseinstellungen',
            'desc' => 'Bitte wählen Sie aus, wie Sie die Datei apps <code> .env </ code> konfigurieren möchten.',
            'wizard-button' => 'Formularassistent einrichten',
            'classic-button' => 'Klassischer Texteditor',
        ],
        'wizard' => [
            'templateTitle' => 'Schritt 3 | Umgebungseinstellungen | Geführter Assistent',
            'title' => 'Geführter <code> .env </ code> Assistent',
            'tabs' => [
                'environment' => 'Umgebung',
                'database' => 'Datenbank',
                'application' => 'Anwendung',
            ],
            'form' => [
                'name_required' => 'Ein Umgebungsname ist erforderlich.',
                'app_name_label' => 'App Name',
                'app_name_placeholder' => 'App Name',
                'app_environment_label' => 'App-Umgebung',
                'app_environment_label_local' => 'Lokal',
                'app_environment_label_developement' => 'Entwicklung',
                'app_environment_label_qa' => 'Qa',
                'app_environment_label_production' => 'Produktion',
                'app_environment_label_other' => 'Andere',
                'app_environment_placeholder_other' => 'Betreten Sie Ihre Umgebung ...',
                'app_debug_label' => 'App-Debug',
                'app_debug_label_true' => 'Wahr',
                'app_debug_label_false' => 'Falsch',
                'app_log_level_label' => 'App-Protokollstufe',
                'app_log_level_label_debug' => 'debuggen',
                'app_log_level_label_info' => 'die Info',
                'app_log_level_label_notice' => 'beachten',
                'app_log_level_label_warning' => 'Warnung',
                'app_log_level_label_error' => 'Error',
                'app_log_level_label_critical' => 'kritisch',
                'app_log_level_label_alert' => 'aufmerksam',
                'app_log_level_label_emergency' => 'Notfall',
                'app_url_label' => 'App URL',
                'app_url_placeholder' => 'App URL',
                'db_connection_failed' => 'Verbindung mit der Datenbank fehlgeschlagen.',
                'db_connection_label' => 'Datenbankverbindung',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Datenbankhost',
                'db_host_placeholder' => 'Datenbankhost',
                'db_port_label' => 'Datenbankport',
                'db_port_placeholder' => 'Datenbankport',
                'db_name_label' => 'Name der Datenbank',
                'db_name_placeholder' => 'Name der Datenbank',
                'db_username_label' => 'Datenbankbenutzername',
                'db_username_placeholder' => 'Datenbankbenutzername',
                'db_password_label' => 'Datenbankkennwort',
                'db_password_placeholder' => 'Datenbankkennwort',
                'app_tabs' => [
                    'more_info' => 'Mehr Info',
                    'broadcasting_title' => '',
                    'broadcasting_label' => 'Broadcast-Treiber',
                    'broadcasting_placeholder' => 'Broadcast-Treiber',
                    'cache_label' => 'Cache-Treiber',
                    'cache_placeholder' => 'Cache-Treiber',
                    'session_label' => 'Sitzungstreiber',
                    'session_placeholder' => 'Sitzungstreiber',
                    'queue_label' => 'Warteschlangentreiber',
                    'queue_placeholder' => 'Warteschlangentreiber',
                    'redis_label' => 'Redis Fahrer',
                    'redis_host' => 'Redis Host',
                    'redis_password' => 'Redis Passwort',
                    'redis_port' => 'Redis Port',
                    'mail_label' => 'Mail',
                    'mail_driver_label' => 'Mail-Treiber',
                    'mail_driver_placeholder' => 'Mail-Treiber',
                    'mail_host_label' => 'Mail Host',
                    'mail_host_placeholder' => 'Mail Host',
                    'mail_port_label' => 'Mail Port',
                    'mail_port_placeholder' => 'Mail Port',
                    'mail_username_label' => 'Mail-Benutzername',
                    'mail_username_placeholder' => 'Mail-Benutzername',
                    'mail_password_label' => 'Mail-Passwort',
                    'mail_password_placeholder' => 'Mail-Passwort',
                    'mail_encryption_label' => 'Mail-Verschlüsselung',
                    'mail_encryption_placeholder' => 'Mail-Verschlüsselung',
                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'Pusher App Id',
                    'pusher_app_id_palceholder' => 'Pusher App Id',
                    'pusher_app_key_label' => 'Pusher App Key',
                    'pusher_app_key_palceholder' => 'Pusher App Key',
                    'pusher_app_secret_label' => 'Pusher App Geheimnis',
                    'pusher_app_secret_palceholder' => 'Pusher App Geheimnis',
                ],
                'buttons' => [
                    'setup_database' => 'Datenbank einrichten',
                    'setup_application' => 'Anwendung einrichten',
                    'install' => 'Installieren',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Schritt 3 | Umgebungseinstellungen | Klassischer Editor',
            'title' => 'Klassischer Umgebungseditor',
            'save' => 'Speichern Sie .env',
            'back' => 'Verwenden Sie den Formularassistenten',
            'install' => 'Speichern und installieren',
        ],
        'success' => 'Ihre .env-Dateieinstellungen wurden gespeichert.',
        'errors' => 'Die .env-Datei kann nicht gespeichert werden. Bitte erstellen Sie sie manuell.',
    ],
    'install' => 'Installieren',
    'installed' => [
        'success_log_message' => 'Laravel Installer erfolgreich installiert',
    ],
    'final' => [
        'title' => 'Installation abgeschlossen',
        'templateTitle' => 'Installation abgeschlossen',
        'finished' => 'Anwendung wurde erfolgreich installiert.',
        'migration' => '',
        'console' => 'Ausgabe der Anwendungskonsole:',
        'log' => 'Installationsprotokolleintrag:',
        'env' => 'Endgültige .env-Datei:',
        'exit' => 'Klicken Sie hier, um zu beenden',
    ],
    'updater' => [
        'title' => 'Laravel Updater',
        'welcome' => [
            'title' => 'Willkommen beim Updater',
            'message' => 'Willkommen beim Update-Assistenten.',
        ],
        'overview' => [
            'title' => 'Überblick',
            'message' => 'Es gibt 1 Update. | Es gibt: Nummernupdates.',
            'install_updates' => 'Installiere Updates',
        ],
        'final' => [
            'title' => 'Fertig',
            'finished' => 'Die Datenbank der Anwendung wurde erfolgreich aktualisiert.',
            'exit' => 'Klicken Sie hier, um zu beenden',
        ],
        'log' => [
            'success_message' => 'Laravel Installer erfolgreich aktualisiert auf',
        ],
    ],
];