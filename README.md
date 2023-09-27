# Oratori Scanzorosciate Insieme (orsiweb)
Sito ufficiale degli Oratori Scanzorosciate Insieme (or.s.i.)

## Informazioni
Applicazione web che permette di visualizzare informazioni sugli oratori di Scanzorosciate, tra cui orari, contatti e avvisi pubblicati dallo staff. Offre anche un servizio per visualizzare e iscriversi a eventi promossi dagli oratori tra cui il Cregrest e il catechismo.

## Roadmap
- [ ] Generale
    - [ ] Account utenti
      - [ ] Login/Registrazione
      - [ ] Autenticazione a due fattori
      - [ ] Ruoli
    - [ ] Impostazioni per admin
- [ ] Sito Principale
  - [ ] Pagina Avvisi
  - [ ] Pagina Orari
  - [ ] Pagina Merch (?)
  - [ ] Pagina Contatti
- [ ] ~~Sito Eventi~~ (da definire)
- [ ] ~~Sito Documentazione~~ (da definire)

## Tecnologie utilizzate
- PHP 8
- TypeScript
- Sass
- MariaDB

## Installazione ambiente di sviluppo
### Prerequisiti
Assicurati di avere i seguenti pacchetti installati sul tuo computer:<br>
`php8` `composer` `typescript` `sass` `mariadb`

Installa poi le dipendenze di PHP con il comando:
```bash
cd src
composer update
```

### Configurazione variabili d'ambiente
La repository del progetto include un file `.env.example`, che contiene la struttura del file `.env` che l'applicazione usa. Questa è una lista delle variabili e il loro utilizzo:<br>
<!-- TODO -->

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