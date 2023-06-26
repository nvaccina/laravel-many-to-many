# Laravel Boolfolio - One to many

Continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo e aggiungiamo una nuova entità **Technology**. <br>
Questa entità rappresenta le tecnologie utilizzate ed è in relazione **many to many** con i progetti.<br>
I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:<br>
- creare la migration per la tabella `technologies`<br>
- creare il model `Technology`<br>
- creare la migration per la tabella pivot `project_technology`<br>
- aggiungere ai model Technology e Project i metodi per definire la relazione many to many<br>
- visualizzare nella pagina di dettaglio di un progetto le tecnologie utilizzate, se presenti<br>
- permettere all’utente di associare le tecnologie nella pagina di creazione e modifica di un progetto<br>
- gestire il salvataggio dell’associazione progetto-tecnologie con opportune regole di validazione<br>
Bonus 1:<br>
creare il seeder per il model Technology e per la tabella pivot.<br>
Bonus 2:<br>
aggiungere le operazioni CRUD per il model Technology, in modo da gestire le tecnologie utilizzate nei progetti direttamente dal pannello di amministrazione.<br>

# Steps
- Creare la Technology Model, Migration & Seeder;
- Creare la migration e il seeder per la pivot work_technology

