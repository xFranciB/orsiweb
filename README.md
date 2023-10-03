# Oratori Scanzorosciate Insieme (orsiweb)
Sito ufficiale degli Oratori Scanzorosciate Insieme (or.s.i.)

## Informazioni
Applicazione web che permette di visualizzare informazioni sugli oratori di Scanzorosciate, tra cui orari, contatti e avvisi pubblicati dallo staff. Offre anche un servizio per visualizzare e iscriversi a eventi promossi dagli oratori tra cui il Cregrest e il catechismo.

## Indice
- [Tecnologie utilizzate](#tecnologie-utilizzate)
- [Installazione ambiente di sviluppo](#installazione-ambiente-di-sviluppo)
    - [Prerequisiti](#prerequisiti)
    - [Configurazione di PHP](#configurazione-di-php)
        - [Estensioni](#estensioni)
        - [Dipendenze](#dipendenze)
    - [Configurazione variabili d'ambiente](#configurazione-variabili-dambiente)
        - [Connessione al database](#connessione-al-database)
    - [Avvio applicazione](#avvio-applicazione)
- [Altre risorse](#altre-risorse)

## Tecnologie utilizzate
- PHP 8
- TypeScript
- Sass
- MariaDB

## Installazione ambiente di sviluppo
Attenzione! Queste istruzioni sono scritte per un ambiente GNU/Linux, è comunque possibile installare un ambiente di sviluppo anche su altri sistemi operativi replicando i passaggi, anche se non interamente uguali.
### Prerequisiti
Assicurati di avere i seguenti pacchetti installati sul tuo computer:<br>
`php8` `composer` `typescript` `sass` `mariadb`

### Configurazione di PHP
#### Estensioni
L'applicazione richiede che le seguenti estensioni di PHP siano abilitate:<br>
`curl` `mysqli`

Per verificare quelle installate e installate si possono eseguire questi comandi:
```bash
ls /usr/lib/php/modules | grep mysqli # Per verificare se `mysqli` è scaricata (non necessariamente abilitata).
                                      # /usr/lib/php/modules è la cartella di installazione di default
php -m | grep mysqli # Per verificare se `mysqli` è abilitata
```

In caso non fossero abilitate:<br>
Per installarle è necessario prima scaricarle (sui *package manager* di GNU/Linux solitamente si chiamano `php-<estensione>`):
```bash
apt install php-mysqli # Debian
yum install php-mysqli # Red Hat
dnf install php-mysqli # Fedora
```
Poi è necessario abilitarle. Per farlo si deve localizzare il file `php.ini` caricato con il comando `php --ini`, poi bisogna decommentare le estensioni desiderate:
```bash
# /etc/php/php.ini

extension=mysqli
```
Se il server web è acceso riavvialo e dovrebbero funzionare.
#### Dipendenze
Per installare le dipendenze di PHP è necessario eseguire:
```bash
cd src
composer update
```

### Configurazione variabili d'ambiente
La repository del progetto include un file `.env.example`, che contiene la struttura del file `.env` che l'applicazione usa. Questa è una lista delle variabili e il loro utilizzo:<br>
#### Connessione al database
* `DB_HOSTNAME`: Indirizzo del server del database
* `DB_USERNAME`: Username dell'account con cui effettuare l'accesso al database
* `DB_PASSWORD`: Password dell'account con cui effettuare l'accesso al database
* `DB_DATABASE`: Nome del database da utilizzare

### Avvio applicazione
L'applicazione è composta da diversi componenti da avviare:<br>
<sub>Le porte 3000 e 8000 sono arbitrarie, e usate rispettivamente per il frontend e il backend durante lo sviluppo dell'applicazione.</sub>
1. Server frontend:
    ```bash
    cd src/frontend
    php -S localhost:3000
    ```
2. Server backend:
    ```bash
    cd src/backend
    php -S localhost:8000 index.php
    ```
3. Server TypeScript:
    ```bash
    cd src
    tsc --watch
    ```
4. Server SASS:
    ```bash
    cd src
    ./sass.sh
    ```
    <sub>Potrebbe essere necessario eseguire `chmod u+x sass.sh` prima di poter eseguire il comando.</sub>

## Altre risorse
- [Specifica dei Requisiti Software](docs/SRS.md)
