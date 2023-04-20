# Portfolio

This repository contains the code of my own portfolio, using Laravel and Tailwind CSS. 
**Warning: This is still a Work in Progress!** 
So, obviously, this README.md is not done yet since I have some things to develop first before mentionning them in here. 

## Installation

If you'd like to launch it on your own computer, follow these steps: 

Clone this repository:
```bash
git clone https://github.com/gollumeo/laravel-portfolio.git
```

Generate a key: 
```bash
php artisan key:generate
```

Go to the file `.env.example` and change the following lines, using your own informations: 
```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Finally, launch your own development server! 

```bash
php artisan serve
```

And 

```bash
npm run dev
```

All set! I hope you'll enjoy it and that my code will help you with creating your own Laravel portfolio!

*PS: don't forget to keep your terminals open, otherwise the server will stop.*
