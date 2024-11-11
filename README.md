# Quote of the Day Project

## Overview
The **Quote of the Day** project is a simple web application built with **Laravel** and **HTML** that fetches a motivational quote from an external API and displays it on a webpage. The quote is shown alongside the author's name and a placeholder image.

### Features
- Displays a quote with the author’s name.
- Fetches a quote using an API.
- Handles errors gracefully when the quote cannot be retrieved.
- The page is styled using **Bootstrap** for a clean and responsive design.
- A background image is set for the page to enhance the user experience.

## Technologies Used
- **Laravel** (Backend)
- **HTML/CSS** (Frontend)
- **Bootstrap 4** (For responsive design)
- **API Integration** (For fetching the quote)

## Project Structure

- **HTML File** (`quote.blade.php`):
  This file contains the structure of the quote page, which uses Bootstrap for layout and styling.

- **Laravel Controller** (`QuoteController.php`):
  The controller handles the fetching of the quote from an external API, processes the response, and passes it to the Blade view.

---

## HTML Code (Frontend)

This is the HTML code that displays the quote of the day on the webpage:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote of the Day</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    {{-- Custom CSS file --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body style='background: url("{{ asset('img/bg.jpg') }}"); background-size: cover; background-repeat: no-repeat'>
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">

        <h1 class="display-4">Quote of the Day</h1>
        <div class="col-md-8 text-center bg-primary quote-container text-white font-weight-bold mx-2">
            @if(isset($quote) && isset($author))
                <blockquote class="blockquote">
                   <q class="mb-4 font-italic">
                       {{ $quote }}
                   </q>
                    <footer class="blockquote-footer font-weight-bold text-white mt-5">{{ $author }}</footer>
                    <img src="https://loremflickr.com/320/240/user" alt="" class="profile mt-3">
                </blockquote>
            @elseif(isset($error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @else
                <p class="text-muted">Loading...</p>
            @endif
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies (optional for interactive components) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
