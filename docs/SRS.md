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
  - [Diagrammi dei casi d'uso](#diagrammi-dei-casi-duso)
  - [User stories](#user-stories)
- [Requisiti non funzionali](#requisiti-non-funzionali)
  - [Obiettivi](#obiettivi-1)
- [Requisiti di dominio](#requisiti-di-dominio)
- [Organizzazione del lavoro](#organizzazione-del-lavoro)

## Introduzione
### Scopo
Lo scopo di questa applicazione è quello di fornire agli utenti uno strumento per rimanere aggiornati sulle attività all'interno degli Oratori di Scanzorosciate.

### Acronimi e abbreviazioni
1. **or.s.i.**: Oratori Scanzorosciate Insieme

## Requisiti funzionali

### Account utenti
Gli utenti con un account potranno effettuare operazioni sul sito in base ai loro **ruoli**. I ruoli sono assegnabili dagli amministratori, e possono ad esempio concedere il permesso di pubblicare avvisi, modificare orari, ma potrebbero anche limitare l'iscrizione ad alcuni eventi.

### Obiettivi
L'applicazione si porrà i seguenti obiettivi:

1. **Visualizzazione informazioni**: L'applicazione permetterà agli utenti di visualizzare informazioni riguardanti gli or.s.i., tra cui:

    1. **Avvisi**: Gli avvisi sono dei post pubblicati dallo staff dell'applicazione, e saranno visibili a tutti gli utenti, anche non registrati. Avranno le seguenti caratteristiche:

        1. **Programmazione**: La pubblicazione degli avvisi sarà programmabile dallo staff.
        2. **Newsletter**: Sarà presente una newsletter opzionale per gli utenti interessati, che invierà un'email a tutti gli iscritti ogni volta che verrà pubblicato un nuovo avviso.
        3. **Allegati**: Sarà possibile caricare allegati, i tipi supportati saranno: immagini, video e documenti DOC, DOCX e PDF.
        4. **Ricerca**: Gli utenti saranno in grado di cercare facilmente tra gli avvisi, usando una barra di ricerca apposita oppure applicando filtri mediante dei *tag* (etichette degli avvisi) assegnati dallo staff.
        5. **Supporto per Markdown**: Lo staff potrà creare avvisi utilizzando il linguaggio di formattazione Markdown.
        6. **Avvisi fissati**: Lo staff potrà fissare un avviso per una determinata quantità di tempo (anche illimitata).
        7. **Personalizzazione**: L'applicazione offrirà allo staff alcuni stili predefiniti di avvisi da poter pubblicare, per ad esempio comunicare informazioni differenti (es. avviso generico o aggiornamento al sito).

    2. **Orari**: La sezione orari dell'applicazione conterrà informazioni riguardanti gli orari degli or.s.i. Potranno ad esempio esserci gli orari di apertura/chiusura degli oratori, oppure di altri servizi, come le messe. Lo staff sarà in grado di apportare modifiche direttamente dal sito.
    3. **Moduli**: Lo staff avrà la possibilità di caricare documenti DOC, DOCX e PDF affinché gli utenti possano visualizzarli e scaricarli.
    4. **Sezione "I nostri oratori"**: Gli utenti potranno visualizzare informazioni sui vari oratori di Scanzorosciate, tra cui contatti e indirizzi.

2. **Prenotazione merchandise**: Gli utenti potranno facilmente prenotare *merchandise* venduto dagli or.s.i., il sito **non** si occuperà della vendita e della gestione del pagamento, ma solo della prenotazione, e avrà lo scopo di fungere come storico per facilitare il lavoro dello staff.

3. **Eventi**: L'applicazione consentirà agli utenti di visualizzare e di iscriversi a eventi promossi dagli or.s.i., come il Cregrest e il catechismo. Per iscriversi sarà necessario far parte di una **famiglia**:

   1. **Famiglia**: Un utente normale del sito potrà iscriversi agli eventi dopo aver fornito altre informazioni relative a sé stesso (come codice fiscale e altre a scelta dello staff) per poter creare una famiglia. Una famiglia è composta da due tipi di entità:

      1. **Adulto**: Che potrà iscriversi a eventi e registrare i propri ragazzi minorenni per gestire le loro iscrizioni.
      2. **Bambino**: Che sarà gestito dalle entità "Adulto" della propria famiglia. Al raggiungimento di una determinata età (come i 18 anni) potrà essere promosso a un account normale.

   2. **Gestione per amministratori**: Gli amministratori potranno facilmente visualizzare informazioni relative agli eventi creati, e avranno anche la possibilità di:

      1. **Creare documenti DOCX personalizzati**: Lo staff potrà caricare un *template* di un file DOCX che verrà compilato automaticamente al momento dell'iscrizione di un utente a un evento. Questo documento potrà essere utilizzato sia come modulo di riepilogo dell'iscrizione, ma anche come modulo da consegnare in segreteria per poterla concludere.
      2. **Gestione degli utenti**: Lo staff potrà vedere rapidamente tutti gli utenti iscritti a un particolare evento in una tabella, in cui saranno disponibili filtri e opzioni per esportarla in formato CSV o XLSX.

4. **Dashboard per amministratori**: Lo staff potrà facilmente effettuare operazioni al sito attraverso una dashboard:

    1. **Impostazioni globali**: Ad esempio, limitare l'iscrizione agli utenti, bloccare l'accesso al sito per manutenzione ecc.
    2. **Informazioni sugli utenti**: Gli amministratori potranno visualizzare informazioni relative agli utenti, tra cui verificare la loro iscrizione alla newsletter.
    3. **Gestore dei ruoli**: Gli account con il ruolo di amministratore potranno assegnare ruoli agli altri utenti, permettendo o limitando certe azioni sull'applicazione.
    4. **Invio email**: Lo staff potrà mandare email personalizzate a un determinato gruppo di utenti.

5. **Manuale utente**: L'applicazione avrà una sezione dedicata alla documentazione che potrà essere sfogliata dagli utenti se necessario. Gli amministratori avranno accesso a più pagine che tratteranno di questioni legate alla gestione del sito.

### Diagrammi dei casi d'uso
Di seguito sono riportati diversi diagrammi dei casi d'uso per rappresentare meglio i requisiti funzionali descritti qui sopra.<br>
(I diagrammi potrebbero essere difficili da vedere utilizzando un tema scuro, in questo caso è consigliato visualizzarli separatamente)

#### Avvisi
![diagramma-avvisi](https://yuml.me/diagram/scruffy/usecase/[Amministratore]%5E[Utente],[Utente]-(Lettura%20avvisi),(Lettura%20avvisi)%3C(Ricerca%20avvisi),(Lettura%20avvisi)%3C(Newsletter),(Newsletter)%3E(Invio%20email),[Servizi%20email]-(Invio%20email),[Amministratore]-(Creazione%20avvisi),(Creazione%20avvisi)%3C(Stili%20predefiniti),(Creazione%20avvisi)%3C(Fissazione%20per%20una%20determinata%20quantit%C3%A0%20di%20tempo),(Creazione%20avvisi)%3C(Caricamento%20allegati%20DOC%20DOCX%20e%20PDF),(Caricamento%20allegati%20DOC%20DOCX%20e%20PDF)%3E(Motore%20di%20conversione%20da%20DOC%20a%20DOCX%20e%20da%20DOCX%20a%20PDF%20con%20LibreOffice),(Creazione%20avvisi)%3C(Programmazione))

#### Orari
![diagramma-orari](https://yuml.me/diagram/scruffy/usecase/[Amministratore]%5E[Utente],[Utente]-(Lettura%20orari),[Amministratore]-(Modifica%20orari))

#### Moduli
![diagramma-moduli](https://yuml.me/diagram/scruffy/usecase/[Amministratore]%5E[Utente],[Utente]-(Visualizzazione%20e%20download%20moduli),[Amministratore]-(Creazione%20moduli),(Visualizzazione%20e%20download%20moduli)%3C(Visualizzatore%20immagini%20video%20e%20documenti%20DOC%20DOCX%20e%20PDF),(Creazione%20moduli)%3E(Caricamento%20allegati%20DOC%20DOCX%20e%20PDF),(Caricamento%20allegati%20DOC%20DOCX%20e%20PDF)%3E(Motore%20di%20conversione%20da%20DOC%20a%20DOCX%20e%20da%20DOCX%20a%20PDF%20con%20LibreOffice))

#### Merchandise
![diagramma-merchandise](https://yuml.me/diagram/scruffy/usecase/[Amministratore]%5E[Utente],[Utente]-(Prenotazione%20merchandise),[Amministratore]-(Gestione%20merchandise),(Prenotazione%20merchandise)%3E(Invio%20email),[Servizi%20email]-(Invio%20email),(Gestione%20merchandise)%3E(Aggiunta%20nuovo%20merchandise),(Gestione%20merchandise)%3E(Gestione%20prenotazioni))

#### Eventi
![diagramma-eventi](https://yuml.me/diagram/scruffy/usecase/[Utente%20Adulto]-(Iscrizione%20a%20eventi),[Utente%20Adulto]-(Gestione%20eventi%20dei%20propri%20bambini),(Gestione%20eventi%20dei%20propri%20bambini)%3E(Iscrizione%20a%20eventi),[Amministratore]-(Creazione%20eventi),(Creazione%20eventi)%3C(Creazione%20documenti%20DOCX%20da%20template),(Iscrizione%20a%20eventi)%3C(Creazione%20documenti%20DOCX%20da%20template),[Amministratore]-(Gestione%20utenti%20e%20iscrizioni),(Gestione%20utenti%20e%20iscrizioni)%3C(Invio%20email),(Iscrizione%20a%20eventi)%3E(Invio%20email),[Servizi%20email]-(Invio%20email))

#### Gestione amministratori
![diagramma-admin](https://yuml.me/diagram/scruffy/usecase/[Amministratore]-(Impostazioni%20globali),(Impostazioni%20globali)%3E(Limitazione%20iscrizioni),(Impostazioni%20globali)%3E(Limitazione%20accesso%20per%20manutenzione),[Amministratore]-(Gestione%20utenti),(Gestione%20utenti)%3E(Verifica%20iscrizioni%20alla%20newsletter),(Gestione%20utenti)%3E(Invio%20email%20a%20determinati%20utenti),(Gestore%20dei%20ruoli)%3C(Invio%20email%20a%20determinati%20utenti),(Gestione%20utenti)%3E(Gestore%20dei%20ruoli),(Gestore%20dei%20ruoli)-(note:%20Gestione%20permessi%20degli%20utenti%7Bbg:beige%7D),[Servizi%20email]-(Invio%20email%20a%20determinati%20utenti))

### User stories
Di seguito sono riportate diverse user stories prese dai requisiti funzionali indicati sopra.<br>
Presentiamo abbastanza user stories per due sprint di un'ipotetica azienda che utilizza il modello Agile Scrum. Ogni sprint è di tre settimane e supponiamo un singolo dipendente per la stima delle ore.
- Come utente, voglio essere in grado di leggere gli avvisi in modo da rimanere aggiornato con gli oratori
- Come amministratore, voglio essere in grado di caricare avvisi in modo da poterli mostrare agli utenti dell'applicazione
- Come amministratore, voglio essere in grado di caricare allegati e personalizzare lo stile degli avvisi in modo da poter comunicare più effettivamente con gli utenti.

## Requisiti non funzionali
### Obiettivi
L'applicazione si porrà i seguenti obiettivi:

1. **Facilità d'utilizzo**: L'interfaccia utente dell'applicazione verrà sviluppata per essere facile da usare per utenti di tutte le età e competenza informatica.
1. **Design responsive per la compatibilità dei dispositivi**: L'applicazione sarà sviluppata per funzionare correttamente su tutti i browser più diffusi, con particolare attenzione per i più utilizzati, tra cui Google Chrome, Mozilla Firefox e le loro varianti per cellulari.
2. **Sicurezza**: L'applicazione utilizzerà algoritmi di crittografia avanzati per il salvataggio delle password:
    1. **SHA256 lato client**: Maggiore sicurezza contro attacchi sniffing
    2. **BCRYPT (con costo alto[^1]) + salt[^2]**: Maggiore sicurezza contro bruteforce (BCRYPT è, per design, piuttosto lento)
    3. **HMAC + pepper[^3]**: Maggiore sicurezza in caso di accesso non autorizzato SOLO al database contenente le password

Verrà utilizzata un'autenticazione basata su token, e sarà disponibile anche l'autenticazione a due fattori (2FA) per gli utenti interessati.

5. **Search Engine Optimization (SEO)**: L'applicazione s'integrerà con i motori di ricerca più utilizzati per rendere il sito più visibile e più rilevante nei risultati.
6. **Documentazione tecnica**: L'applicazione sarà dotata di un'esaustiva documentazione tecnica per rendere facile la manutenzione da parte di eventuali manutentori futuri.

## Requisiti di dominio
L'applicazione sarà sviluppata per funzionare su un ambiente GNU/Linux con un server Apache2 dotato di preprocessore PHP8 e di database MySQL o MariaDB.

## Organizzazione del lavoro
Il carico del lavoro del progetto è diviso in questo modo:
1. **Sito or.s.i.**<br>
    1.1. **Sviluppo frontend** 60%<br>
    &emsp; 1.1.1. **Progettazione design** 10%<br>
    &emsp; 1.1.2. **Progettazione API per comunicazione con backend** 10%<br>
    &emsp; 1.1.3. **Progettazione scheletro (funzioni base, modal, gestione errori ecc)** 20%<br>
    &emsp; 1.1.3. **Sezione informazionale (avvisi, orari, contatti ecc)** 30%<br>
    &emsp; 1.1.4. **Sezione eventi** 30%<br>
  1.2. **Sviluppo backend** 25%<br>
    &emsp; 1.2.1. **Progettazione scheletro (routing, collegamento al database ecc)** 50%<br>
    &emsp; 1.2.2. **Creazione degli endpoint dell'API** 20%<br>
    &emsp; 1.2.3. **Implementazione del sistema di conversione allegati** 30%<br>
  1.3. **Collaudo** 10%<br>
    &emsp; 1.3.1. **Collaudo API backend** 30%<br>
    &emsp; 1.3.2. **Collaudo frontend e dell'esperienza utente** 70%<br>
  1.4. **Marketing su social network** 5%<br>

[^1]: Con "costo" si intende la complessità computazionale necessaria per calcolare l'hash della password e serve per avere maggiore protezione. Il costo minimo raccomandato è di 10.
[^2]: Il salt è una stringa generata casualmente per ogni password diversa, che viene aggiunta all'hash finale della password.
[^3]: Il pepper è una stringa generata casualmente una volta e accessibile globalmente all'interno dell'applicazione.
