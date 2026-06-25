# 🎓 Web4All — Internship Search Platform

Web project built as part of the CPI A2 program at CESI (2025-2026).

Web4All is a full-stack web application that helps students find internship offers,
allows promotion supervisors to monitor their students, and gives administrators
complete control over the platform.

---

## 📋 Table of Contents

- [Project Overview](#-project-overview)
- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [Architecture](#-architecture)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Running the Project](#-running-the-project)
- [Tests](#-tests)
- [Team](#-team)

---

## 🌐 Project Overview

Web4All centralizes internship offers to connect CESI students with companies.
The platform provides three distinct access levels:

| Role | Description |
|------|-------------|
| 👑 Administrator | Full access to all features |
| 🧑‍🏫 Promotion Supervisor | Manages their students and monitors applications |
| 🎓 Student | Browses offers, submits applications, manages wish-list |

---

## 📸 Screenshots

| | |
|---|---|
| ![Home page](public/assets/images/hero-image.jpg) | ![Internship offers](public/assets/images/offres.jpg) |
| *Home page* | *Internship offer listings* |
| ![Companies](public/assets/images/entreprises-transparentes.jpg) | ![Application tracking](public/assets/images/suivi-candidature.jpg) |
| *Company profiles* | *Application tracking* |

---

## ✨ Features

### Internship Offer Management
- Multi-criteria search (company, skills, salary, date)
- Create, edit, and delete offers
- Wish-list system (save favorite offers)
- Statistics dashboard (key indicators carousel)

### Company Management
- Search and display company profiles
- Create, edit, and delete companies
- Student ratings for companies

### Application Management
- Submit applications with CV and cover letter
- Students can track their own applications
- Supervisors can view their students' applications

### Account Management
- Secure authentication (login / logout)
- Full CRUD for student and supervisor accounts
- Editable user profile

### General
- Pagination on all listings
- Responsive design with burger menu (mobile-first)
- SEO: meta tags, sitemap.xml, robots.txt, clean URLs
- Legal notices compliant with French regulations
- Form validation both client-side (JS) and server-side (PHP)

---

## 🛠 Tech Stack

| Component | Technology |
|-----------|------------|
| Server | Apache |
| Backend | PHP 8+ (OOP, PSR-4, PSR-12) |
| Template Engine | [Twig 3.x](https://twig.symfony.com/) |
| Frontend | HTML5 / CSS3 / JavaScript |
| Icons | [Bootstrap Icons](https://icons.getbootstrap.com/) |
| Database | MySQL / MariaDB / PostgreSQL |
| Env Config | [phpdotenv](https://github.com/vlucas/phpdotenv) |
| Unit Tests | [PHPUnit 13](https://phpunit.de/) |
| PHP Dependencies | Composer |
| JS Dependencies | npm |

---

## 🏗 Architecture

The project follows the **MVC pattern** (Model-View-Controller):

projet-web-4-all/
├── config/
│ └── routes.php # All route definitions
├── public/ # Public entry point (Apache DocumentRoot)
│ ├── index.php # Front controller
│ ├── assets/
│ │ ├── css/style.css
│ │ ├── images/
│ │ └── audio/
│ ├── js/ # JS scripts (form validation)
│ ├── sitemap.xml
│ └── robots.txt
├── src/
│ ├── Core/
│ │ ├── Controller.php # Base controller
│ │ └── Router.php # Routing system
│ ├── Controllers/ # Business controllers
│ ├── Models/ # Models (database access)
│ ├── Database.php # PDO connection
│ ├── Pagination.php
│ └── tests/ # PHPUnit tests
├── templates/ # Twig views
│ ├── base.twig.html # Main layout
│ ├── components/ # Reusable components (navbar, ...)
│ └── pages/ # Application pages
├── .env.example # Configuration template
├── composer.json
└── package.json

---

### Available Routes

| URL | Feature |
|-----|---------|
| `/accueil` | Home page |
| `/annonces` | Internship offer listings |
| `/detail-annonce` | Offer detail page |
| `/entreprises` | Company listings |
| `/detail-entreprise` | Company profile |
| `/favoris` | Student wish-list |
| `/postuler` | Application form |
| `/mes-candidatures` | Student's applications |
| `/mes-eleves` | Supervisor's students |
| `/login` | Login page |
| `/compte` | User profile |
| `/mentions-legales` | Legal notices |

---

## ⚙️ Installation

### Prerequisites

- PHP >= 8.0
- Composer
- Node.js & npm
- Apache with `mod_rewrite` enabled
- MySQL / MariaDB / PostgreSQL

### Steps

**1. Clone the repository**
```bash
git clone https://github.com/<your-username>/<repo-name>.git
cd <repo-name>
```

**2. Install PHP dependencies**
```bash
composer install
```

**3. Install JavaScript dependencies**
```bash
npm install
```

**4. Set up the environment**
```bash
cp .env.example .env
```
Then edit `.env` with your settings (see [Configuration](#-configuration) below).

**5. Import the database**

Create your database and import the SQL schema.

**6. Configure Apache**

The Apache `DocumentRoot` must point to the `public/` folder. Example vhost:

```apacheconf
<VirtualHost *:80>
    ServerName web4all.local
    DocumentRoot /var/www/projet-web-4-all/public

    <Directory /var/www/projet-web-4-all/public>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

---

## 🔧 Configuration

Copy `.env.example` to `.env` and fill in your variables:

```env
DB_HOST=127.0.0.1
DB_PORT=3306
DB_NAME=web4all
DB_USER=root
DB_PASSWORD=your_password
```

---

## 🚀 Running the Project

With Apache configured and the database imported, navigate to:


http://web4all.local/accueil


Or use PHP's built-in server for a quick test:

```bash
php -S localhost:8000 -t public
```

---

## 🧪 Tests

Unit tests are written with PHPUnit and cover the company rating controller (`RateCompanyController`).

```bash
./vendor/bin/phpunit src/tests/
```

---

## 👥 Team

Built by a team of 4 — Group 5, CPI A2 CESI (2025-2026):

| Name | Email |
|------|-------|
| Nicolas DIEMUNSCH | [nicolas.diemunsch@viacesi.fr](mailto:nicolas.diemunsch@viacesi.fr) |
| Pierre LAMBERT | [pierre.lambert@viacesi.fr](mailto:pierre.lambert@viacesi.fr) |
| Charles GULLY | [charles.gully@viacesi.fr](mailto:charles.gully@viacesi.fr) |
| Romain BECHE | [romain.beche@viacesi.fr](mailto:romain.beche@viacesi.fr) |

---

## 📄 License

Academic project — all rights reserved © Group 5 CESI 2025-2026.
