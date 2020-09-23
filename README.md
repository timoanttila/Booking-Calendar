# Booking Calendar

Many customers have asked about the possibility of renting or booking products from the calendar. The project is a simple example of how you can select a day from the calendar and retrieve the free times of that day from an external source.

I would be grateful if the community would like to be involved in the development of the calendar and its features.

The current calendar (frontend) is a modified version of the [svelte-calendarize](https://svelte.dev/repl/cb4d121decc54cc98e312d5b83c96df7?version=3.26.0).

## Frontend

The frontend is made in [Svelte](https://svelte.dev/).

### Directory paths

- src: all the Svelte files and components.
- public: JavaScript builds and static files.

## Backend

The backend written in PHP uses an [SQLite](https://www.sqlite.org/index.html) database to store data.

### Directory paths

- app: classes for namespace.
- db: data stored in SQLite.
- web: public files.

### Important commands

[Composer](https://getcomposer.org/) is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.

**./composer.phar update**
Generating vendor folders, resolving all dependencies and writing the exact versions into composer.lock.

**./composer.phar dump-autoload -o**
Generating optimized autoload files.