# Ambiente LAMP con Docker Compose per GitHub Codespaces

Questo repository contiene un ambiente di sviluppo LAMP (Linux, Apache, MySQL, PHP) completo, orchestrato con Docker Compose e ottimizzato per GitHub Codespaces.

## Come usarlo su GitHub Codespaces

1. **Crea un nuovo repository** su GitHub e carica questi file.
2. **Apri il repository in Codespaces**: dal pulsante "Code" → "Codespaces" → "Create codespace on main".
3. Codespaces avvierà automaticamente i container definiti in `.devcontainer/docker-compose.yml`.
4. Una volta avviato, i servizi saranno accessibili tramite le porte:
   - **Web server (Apache + PHP)**: porta `80` (apri il browser integrato su `localhost:80`)
   - **phpMyAdmin**: porta `8080`
   - **MySQL**: porta `3306` (solo connessioni interne)

## Credenziali di default

- **MySQL root**: `rootpassword`
- **Database**: `lamp_db`
- **Utente MySQL**: `lamp_user` / `lamp_password`
- **phpMyAdmin**: usa `lamp_user` o `root` con le password sopra.

## Personalizzazione

- Aggiungi i tuoi file PHP nella cartella `web/`.
- Modifica le variabili d'ambiente in `.devcontainer/docker-compose.yml` per cambiare database o credenziali.
- Per installare estensioni PHP aggiuntive, modifica il `Dockerfile` nella cartella `web/`.

## Comandi utili (da terminale nel container)

```bash
# Connettersi a MySQL
mysql -h db -u lamp_user -p

# Riavviare Apache
sudo service apache2 restart

# Visualizzare i log di Apache
sudo tail -f /var/log/apache2/error.log
