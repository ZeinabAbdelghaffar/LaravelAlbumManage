<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Table of Contents

- [Laravel Album Manager](#laravel-album-manager)
  - [Features](#features)
  - [Technologies Used](#technologies-used)
  - [Getting Started](#getting-started)
  - [Project Structure](#project-structure)
    - [Albums](#albums)
    - [Auth](#auth)
    - [Layout](#layout)
    - [Vendor/Media-Library](#vendormedia-library)
    - [Welcome](#welcome)
  - [Contributing](#contributing)
  - [Code of Conduct](#code-of-conduct)
  - [Security Vulnerabilities](#security-vulnerabilities)
  - [License](#license)

## Laravel Album Manager

Laravel Album Manager is a web application for managing albums and their associated pictures. It leverages Laravel, a web application framework with expressive, elegant syntax, providing an enjoyable and creative experience for developers.

### Features

- Users can create, edit, and delete albums.
- Each album contains a name and one or more pictures.
- Pictures within albums have individual names.
- Deleting an empty album is supported.
- Deleting a non-empty album offers options to either delete all pictures within the album or move them to another album.

### Technologies Used

- Laravel PHP Framework
- jQuery
- Dropzone.js
- Filepond.js
- Laravel MediaLibrary

### Getting Started

To get started with Laravel Album Manager, follow these steps:

1. Clone this repository.
2. Install dependencies by running `composer install` and `npm install`.
3. Set up your environment variables by renaming `.env.example` to `.env` and configuring it accordingly.
4. Run migrations and seed the database with `php artisan migrate --seed`.
5. Serve the application using `php artisan serve`.

### Project Structure

1. **Albums**
   - **Create**: Create a new album.
   - **Edit**: Edit an existing album.
   - **Show**: View details of a specific album.
   - **Delete**: Delete an album.
   - **Index**: View a list of all albums.

2. **Auth**
   - **Login**: User authentication login.
   - **Register**: User registration.
   - **Verify**: Email verification.

3. **Layout**
   - **App Layout**: Contains the header and footer of the application.

4. **Vendor/Media-Library**
   - **Image**: Media library for storing images.
   - **PlaceholderSVG**: Placeholder SVG images.
   - **ResponsiveImage**: Responsive image handling.
   - **ResponsiveImageWithPlaceholder**: Responsive images with placeholders.

5. **Welcome**
   - **Home Page**: Landing page of the application.

### Contributing

Contributions to Laravel Album Manager are welcome! Please review the contribution guide in the [repository](CONTRIBUTING.md).

### Code of Conduct

Please review and abide by the [Code of Conduct](CODE_OF_CONDUCT.md) to ensure a welcoming community for everyone.

### Security Vulnerabilities

If you discover a security vulnerability within Laravel Album Manager, please send an email to [maintainer@example.com](mailto:maintainer@example.com). All security vulnerabilities will be promptly addressed.

### License

Laravel Album Manager is open-source software licensed under the [MIT license](LICENSE).

---

Developed as a coding assessment task by Zeinab Abdelghafar.

<div class="container p-4">
    <h5 class="text-center mb-4">Developed by Zeinab Abdelghafar</h5>
    <div class="row">
        <div class="col-md-3 text-center mb-3">
            <p>&#128241; Phone:</p>
            <p><a href="tel:+201289939695" class="text-dark">+201289939695</a></p>
        </div>
        <div class="col-md-3 text-center mb-3">
            <p>&#128231; Email:</p>
            <p><a href="mailto:zeinanabdo88@gmail.com" class="text-dark">zeinanabdo88@gmail.com</a></p>
        </div>
        <div class="col-md-3 text-center mb-3">
            <p>&#127760; LinkedIn:</p>
            <p><a href="https://www.linkedin.com/in/zeinab-abdelghaffar/" target="_blank" class="text-dark">Zeinab Abdelghafar</a></p>
        </div>
        <div class="col-md-3 text-center mb-3">
            <p>&#128193; GitHub:</p>
            <p><a href="https://github.com/ZeinabAbdelghaffar" target="_blank" class="text-dark">ZeinabAbdelghaffar</a></p>
        </div>
    </div>
</div>
