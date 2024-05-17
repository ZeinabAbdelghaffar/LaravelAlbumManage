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
   - **Index**: View a list of all albums.
   - ![list](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/d75721d6-0ae6-4704-ab10-ae5138a69405)
   - **Create**: Create a new album.
   - ![create](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/e316633e-a898-4644-877c-11a1eac97d36)
   - ![create](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/5d91cbde-2ddd-4f3e-a295-04634495ab3f)
   - **Show**: View details of a specific album.
   - ![show](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/1ffcb4e5-9072-4231-abd6-7445e3e8aef9)
   - **Edit**: Edit an existing album.
   - ![image](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/d981e0f1-268c-48a3-9f76-2ccf5d0b843f)
   - ![image](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/0e9fe0b1-0349-41ee-affa-8c92fa34359a)
   - ![image](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/6268c6ff-e8f6-4b5a-90d8-32c8b54700e1)
   - **Delete**: Delete an album.
   - ![image](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/d4c65121-ff79-460c-b94e-f495ec1604c1)
   - ![image](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/a47df2e6-9e9d-4ecd-9b97-49d639d7b989)
   - ![image](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/e6231efa-57af-4fcb-bbbb-fabcacebcc73)
   - ![image](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/4c47f8a6-4528-4c26-9cf4-5f1d5354104a)
   - ![image](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/fa9925f5-f714-4042-b4eb-0c833094fad5)
   - ![image](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/2f30a27d-7d5e-419c-a006-2f8492628a6a)
   - ![image](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/33c6294b-8fdb-422e-a774-db27a4d57cbc)

2. **Auth**
   - **Login**: User authentication login.
   - ![login](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/4707dffa-c955-46a3-a1de-e1e18dd61d13)
   - **Register**: User registration.
   - ![register](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/1943b354-b476-4ea1-92c5-3a093f90aa93)
   - **Verify**: Email verification.

3. **Layout**
   - **App Layout**: Contains the header and footer of the application.
   - ![header](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/0b2258d2-60a3-42e6-8fb2-ebff9a9b9f16)
   - ![footer](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/23438d7c-8500-4aa0-93af-e97325c80fa8)

4. **Vendor/Media-Library**
   - **Image**: Media library for storing images.
   - **PlaceholderSVG**: Placeholder SVG images.
   - **ResponsiveImage**: Responsive image handling.
   - **ResponsiveImageWithPlaceholder**: Responsive images with placeholders.

5. **Welcome**
   - **Home Page**: Landing page of the application.
   - ![home](https://github.com/ZeinabAbdelghaffar/LaravelAlbumManage/assets/87963230/f9d2f4b5-9870-420f-8cb3-43d0b2d10c7e)


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

<div class="row p-4">
    <div class="col-md-12">
        <h5 class="text-center mb-4">Developed by Zeinab Abdelghafar</h5>
    </div>
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
