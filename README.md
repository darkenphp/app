# Darken

A PHP framework with a twist—think Nuxt.js and Astro had a PHP baby, but without the node_modules drama, npm meltdowns, or yarn tantrums. Composer? We’re cool with that; it’s the classy uncle we all respect. We’ve got components with slots (because who doesn’t love a good slot?), and every method, property, and class is IDE auto-completion-friendly—no guessing games here!

Auto-magic? Nope, we’re not wizards. Darken needs to compile while you work your magic or at least once before you hit deploy. Oh, and when you create a new project, you won’t be greeted by a junk drawer of files and folders—just the bare essentials, like a tidy minimalist's dream.

## Local Development

Follow these steps to set up and run the project locally:

1. **Install Dependencies:** Install the necessary dependencies using Composer:

```bash
composer install
```

2. **Start the Development Server:** Launch the development server with the following command:


```bash
composer dev
```

3. **Access the Application:** Once the server is running, open your browser and navigate to:

```
http://localhost:8009
```

The development server supports **hot reloading**, automatically compiling your changes as you modify the source files.

## Deploy Your Project App with a Single Click on Vercel

This project is ready to deploy with just one click on Vercel. Vercel will prompt you to clone the repository to your preferred Git provider and will automatically deploy the project. Once deployed, simply commit your changes and push them to your Git provider to update the deployment seamlessly. It's that easy!

<a href="https://vercel.com/new/clone?repository-url=https://github.com/darkenphp/app"><img src="https://vercel.com/button"></a>