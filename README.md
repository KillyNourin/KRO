# KRO (KillyRinOris) - KorinTekno Product Catalog

<img width="3000" height="3000" alt="logo1" src="https://github.com/user-attachments/assets/203614db-1b6a-4645-8b35-7b58e158d794" />


Welcome to KRO, a web application project built to display a catalog of tech products, specializing in laptops. This application is designed with a clean, modern, and interactive interface using the Laravel framework.

## Wireframe

The Wireframes for this project were created in Figma. 

**[View The Wireframe on Figma](https://www.figma.com/design/zfEqevnPeX84wo98q9oOo4/E-commerce?m=auto&t=BHm7yRz1a61FKpl0-1)**

## Tech Stack

This project is built using a modern technology stack, including:

-   **Backend**:
    -   [PHP 8.2+](https://www.php.net/)
    -   [Laravel 11](https://laravel.com/)
-   **Frontend**:
    -   HTML5 (with Blade Template Engine)
    -   [Tailwind CSS](https://tailwindcss.com/)
    -   CSS3
    -   JavaScript
-   **Development & Build Tools**:
    -   [Vite.js](https://vitejs.dev/)
    -   [Composer](https://getcomposer.org/)
    -   [NPM](https://www.npmjs.com/)
-   **Libraries**:
    -   [AOS (Animate on Scroll)](https://michalsnik.github.io/aos/)
    -   [Swiper JS](https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js)

---

## Setup the Database

Here's how you can connect the **KorinTekno** database into the Laravel project:

1. **Download the database file**  
   👉 [Download file database korin](./database/korin.sql)  

2. **Import ke Database**  
   - Buka **phpMyAdmin** atau tool MySQL lainnya.
   - Buat database baru (misalnya: `korin`).
   - Import file `database.xml` ke dalam database tersebut.

3. **Konfigurasi `.env` Laravel**  
   Edit file `.env` di root project Laravel kamu sesuai dengan pengaturan database lokal:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=korin
   DB_USERNAME=root
   DB_PASSWORD=

---

## Project Structure

Here are some of the key files and directories in this project:

-   `public/`: Contains public assets like images, and compiled CSS/JS.
-   `resources/css/`: Source CSS files.
-   `resources/js/`: Source JavaScript files.
-   `resources/views/`: Contains all Blade templates (HTML views).
    -   `layouts/app.blade.php`: The main application layout.
-   `routes/web.php`: Defines the application's web routes.
-   `app/Http/Controllers/`: Contains the logic for handling user requests.

---

## Contributors

A huge thanks to all the people who have contributed:

<a href="https://github.com/KillyNourin">
  <img src="https://github.com/user-attachments/assets/50e58a30-d29c-4281-a37b-d372c0c57b9f\" width="70px;" alt="KillyNourin"/>
</a>

<a href="https://github.com/Rinshiryu">
  <img src="https://avatars.githubusercontent.com/u/178132388" width="70px;" alt="KillyNourin"/>
</a>

<a href="https://github.com/OrisKunzz">
  <img src="https://avatars.githubusercontent.com/u/220355458" width="70px;" alt="KillyNourin"/>
</a>

---


## License

[MIT License](LICENSE).
