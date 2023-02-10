<p align="center">
   <a href="https://github.com/Zoltw/curcumo">
     <img alt="Curcumo" src="public/img/logoBackgroundrm.svg"/>
   </a>
 </p>
<br/>
    <div align="center">
        <a>
            <img align="center" width="50px" padding="5px" src="https://pics.freeicons.io/uploads/icons/png/8804286661557996995-512.png" />
            <img align="center" width="50px" padding="5px" src="https://pics.freeicons.io/uploads/icons/png/632690741557997006-512.png" />
            <img align="center" width="55px" padding="5px" src="https://pics.freeicons.io/uploads/icons/png/2765419221551942634-512.png" />
            <img align="center" width="50px" padding="5px" src="https://pics.freeicons.io/uploads/icons/png/21088442871540553614-512.png" />
            <img align="center" width="50px" padding="5px" src="https://cdn-icons-png.flaticon.com/512/5969/5969059.png" />
        </a>
    </div>
<br/>

## 1. Setting up environment

### Requirements
- [Docker](https://docs.docker.com/get-docker/)

### Setup

1. Make sure that you have `Docker` installed and running.
2. Clone the repository
```bash
git clone https://github.com/Zoltw/curcumo.git
```
3. Create an .env file, which includes database connection details.
```bash
DB_NAME=''
DB_USER=''
DB_PASSWORD=''
```
4. Start docker containers in root directory
```bash
docker compose up
```
5. Open `http://localhost:8080` in your browser.

## 2. Some screenshots

<p float="center">
    <img src="public/img/screenshots/landing-page.png" alt=""/>
    <img src="public/img/screenshots/signup-page.png" alt=""/>
    <img src="public/img/screenshots/choose-preferences.png" alt=""/>
    <img src="public/img/screenshots/plan-page.png" alt=""/>
    <img src="public/img/screenshots/list-page.png" alt=""/>
    <img src="public/img/screenshots/cook-page.png" alt=""/>
</p>
<p float="center">
    <img src="public/img/screenshots/landingpage-mobile.png" alt=""/>
    <img src="public/img/screenshots/login-mobile.png" alt=""/>
    <img src="public/img/screenshots/preferences-mobile.png" alt=""/>
    <img src="public/img/screenshots/plan-mobile.png" alt=""/>
    <img src="public/img/screenshots/list-mobile.png" alt=""/>
    <img src="public/img/screenshots/cook-mobile.png" alt=""/>
</p>

## 3. ERD Diagram

<p float="center">
    <img src="db/ERD.png" alt=""/>
</p>