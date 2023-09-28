# Specifica dei Requisiti Software (SRS)

Questo documento ha lo scopo di fornire una panoramica delle specifiche dei requisiti di sistema per l'applicazione web degli Oratori di Scanzorosciate.

## orsiweb
Rimani aggiornato sugli Oratori di Scanzorosciate (or.s.i.), ora anche online. Visualizza annunci, orari e iscriviti agli eventi all'interno del tuo oratorio con pochi semplici click.

## Indice
- [Introduzione](#introduzione)
  - [Scopo](#scopo)
  - [Acronimi e abbreviazioni](#acronimi-e-abbreviazioni)
- [Requisiti funzionali](#requisiti-funzionali)
  - [Account utenti](#account-utenti)
  - [Obiettivi](#obiettivi)
- [Requisiti non funzionali](#requisiti-non-funzionali)
  - [Obiettivi](#obiettivi-1)
- [Requisiti di dominio](#requisiti-di-dominio)

## Introduzione
### Scopo
Lo scopo di questa applicazione è quello di fornire agli utenti uno strumento per rimanere aggiornati sulle attività all'interno degli Oratori di Scanzorosciate.

### Acronimi e abbreviazioni
1. **or.s.i.**: Oratori Scanzorosciate Insieme

## Requisiti funzionali

### Account utenti
Gli utenti con un account potranno svolgere operazioni sul sito in base ai loro **ruoli**. I ruoli sono assegnabili dagli amministratori, e possono ad esempio concedere il permesso di pubblicare avvisi, modificare orari, ma anche limitare l'iscrizione ad alcuni eventi.

### Obiettivi
L'applicazione si porrà i seguenti obiettivi:

1. **Visualizzazione informazioni**: L'applicazione renderà facile agli utenti visualizzare informazioni riguardanti gli or.s.i., tra cui:

    1. **Avvisi**: Gli avvisi sono dei post pubblicati dallo staff dell'applicazione, e saranno visibili a tutti gli utenti, anche non registrati. Avranno le seguenti specifiche:

        1. **Programmazione**: Gli avvisi saranno programmabili dallo staff.
        2. **Newsletter**: Sarà presente una newsletter opzionale per gli utenti interessati.
        3. **Allegati**: Sarà possibile caricare allegati, i tipi supportati saranno: immagini, video, documenti DOC e DOCX e file PDF.
        4. **Ricerca**: Gli utenti saranno in grado di cercare facilmente tra gli avvisi, usando una barra di ricerca oppure dei *tag* preimpostati dallo staff.
        5. **Supporto per Markdown**: Lo staff potrà creare avvisi utilizzando markdown.
        6. **Avvisi fissati**: Lo staff potrà fissare un avviso per una determinata quantità di tempo (anche illimitato)
        7. **Personalizzazione**: L'applicazione offrirà allo staff alcuni stili predefiniti di avvisi da poter pubblicare, per comunicare informazioni differenti (es. avviso generico o aggiornamento al sito).

    2. **Orari**: La sezione orari del sito conterrà informazioni riguardante agli orari di apertura/chiusura degli Oratori, oppure di altri servizi offerti da essi, tra cui messe. Lo staff sarà in grado di apportare modifiche.
    3. **Moduli**: Lo staff avrà la possibilità di caricare documenti DOC, DOCX e PDF per gli utenti da visualizzare e da scaricare.
    4. **"I nostri oratori"**: Gli utenti potranno facilmente vedere informazioni sui vari oratori di Scanzorosciate, tra cui contatti e indirizzi.

2. **Prenotazione merchandise**: Gli utenti potranno facilmente prenotare *merchandise* venduto dagli or.s.i., il sito **non** si preoccuperà della vendita e della gestione del pagamento, ma servirà soltanto come storico delle vendite per facilitare il lavoro dello staff.

3. **Eventi**: L'applicazione consentirà agli utenti di visualizzare e di iscriversi a eventi promossi dagli or.s.i., come il Cregrest e il catechismo. Per iscriversi sarà necessario far parte di una **famiglia**:

   1. **Famiglia**: Un utente normale del sito potrà iscriversi agli eventi dopo aver fornito altre informazioni relative a sé stesso (come codice fiscale e altre a scelta dello staff) per poter creare una famiglia. Una famiglia sarà composta da due tipi di entità:

      1. **Genitori/Tutori legali**: Che potrà iscriversi a eventi e gestire le iscrizioni propri ragazzi minorenni.
      2. **Adulto**: Che potrà iscriversi normalmente a qualsiasi evento

   2. **Gestione per amministratori**: Gli amministratori potranno facilmente visualizzare informazioni relative agli eventi creati, e avranno anche la possibilità di:

      1. **Creare documenti DOCX personalizzati**: Lo staff potrà caricare un *template* di un file DOCX che verrà compilato automaticamente al momento dell'iscrizione dell'utente. Questo documento può servire sia come conferma d'iscrizione, ma anche come modulo da consegnare in segreteria per concludere l'iscrizione.
      2. **Gestione degli utenti**: Lo staff potrà vedere rapidamente tutti gli utenti iscritti a un particolare evento in una tabella, in cui saranno disponibili filtri e opzioni per esportarla in formato CSV o XLSX.

4. **Dashboard per amministratori**: Lo staff potrà facilmente effettuare operazioni al sito attraverso una dashboard:

    1. **Impostazioni globali**: Ad esempio, limitare l'iscrizione agli utenti, bloccare l'accesso al sito per manutenzione ecc.
    2. **Informazioni sugli utenti**: Gli amministratori potranno visualizzare informazioni relative agli utenti, tra cui verificare la loro iscrizione alla newsletter.
    3. **Gestore dei ruoli**: Gli account con il ruolo di amministratore potranno assegnare ruoli agli altri utenti, permettendo o limitando certe azioni sull'applicazione.
    4. **Invio email**: Lo staff potrà mandare email personalizzate a un determinato gruppo di utenti.

5. **Manuale utente**: L'applicazione avrà una sezione dedicata alla documentazione, che potrà essere sfogliata dagli utenti se confusi. Gli amministratori avranno accesso a più pagine che parleranno di questioni relative alla gestione del sito.

## Requisiti non funzionali
### Obiettivi
L'applicazione si porrà come obiettivo fondamentale la facilità di utilizzo degli utenti. Dovra anche implementare le seguenti caratteristiche:

1. **Facilità d'accesso**: L'applicazione sarà sviluppata per tutti i browser più diffusi, con particolare attenzione per i più utilizzati, tra cui Google Chrome, Mozilla Firefox e le loro varianti per cellulari.
2. **Motore Markdown**: L'applicazione sarà dotata di un motore Markdown e di sanificazione dell'HTML, che sarà disponibile negli avvisi e nella descrizione degli eventi creati dallo staff.
3. **Visualizzatore immagini/video/documenti**: L'applicazione sarà fornita di un visualizzatore di immagini, video e documenti DOC, DOCX e PDF.
4. **Sicurezza**: L'applicazione utilizzerà token per l'autenticazione degli utenti. Consentirà anche l'utilizzo dell'autenticazione a due fattori (2FA).
5. **Search Engine Optimization (SEO)**: L'applicazione s'integrerà con i motori di ricerca più utilizzati per rendere il sito più visibile e più rilevante nei risultati.
6. **Documentazione tecnica**: L'applicazione sarà dotata di un'esaustiva documentazione tecnica e del codice per rendere facile la manutenzione da parte di eventuali manutentori futuri.

## Requisiti di dominio
L'applicazione sarà sviluppata per funzionare su un ambiente GNU/Linux con un server Apache dotato di preprocessore PHP e di database MySQL o MariaDB.
