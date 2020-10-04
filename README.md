# Booking Calendar Front-End

Many customers have asked about the possibility of renting or booking products from the calendar. The project is a simple example of how you can select a day from the calendar and retrieve the free times of that day from an external source.

The front-end is made in [Svelte](https://svelte.dev/) and the current calendar is a modified version of the [svelte-dates](https://svelte.dev/repl/6116680a6c3e49d0908624105018efb7?version=3.12.1).

## Source

The back-end wants to know the product id and the picked date, and it returns the free hours for that product in json format. We are using [ProcessWire CMS](https://processwire.com/) for back-end, because this calendar is only a small part of the website.

## Directory paths

- **src**: all the Svelte files and components.
- **public**: JavaScript builds and static files.