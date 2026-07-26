# Module 10A: User Authentication (auth-demo project)

A Laravel 12 application using the official **Livewire starter kit** to provide a complete
user authentication system (registration, login, logout, password reset, dashboard, and
settings). Built for SMC CS85, Module 10 Assignment 10A.

## Part D additions
- A custom /secret page protected by the auth middleware (routes/web.php + resources/views/secret.blade.php).
- A personalized greeting on the dashboard that prints the logged-in user's name (resources/views/dashboard.blade.php).

## Short-Answer Questions

**1. In your own words, what is the difference between authentication and authorization?**

- In short (inspired by the examples you gave): authentication is the ID check at the door & 
authorization is the wristband that says which rooms you can enter.

- **Authentication** answers *"Are you who you say you are?"* — it verifies a user's identity,
usually by checking an email and password at login. 

- **Authorization** answers *"Now that I know who you are, what are you allowed to do?"* — it decides which
actions or pages a already-identified user has access permissions to. 


**2. Why are passwords hashed instead of stored as plain text?**

- Simply put, passwords are hashed (scrambled result) because storing plain-text passwords is dangerous. 
    If stored as plain text, in the event the database is ever stolen, the attacker instantly has every user's real password. 
    Hashing runs the password through a *one-way scrambler* and *stores only the scrambled result*, which can't be reversed back into
    the original. At login, Laravel hashes what you typed and compares the two scrambles, so
    the real password is never saved anywhere. 

- This is also why a secure site can never email anyone their password as it simply doesn't have it.


**3. Which package registers the /login and /register routes, and which artisan command lets you see them?**

- **Laravel Fortify** registers the login, register, logout, and password-reset routes in
code (so there's no routes/auth.php file to open). You can list them all by running **php artisan route:list**.


**4. What does the auth middleware do, and what happens when a logged-out user hits a page protected by it?**

- The auth middleware is a *checkpoint* that runs *before* a request reaches a page. 
- Auth middleware checks whether the current user is logged in. 
- If they are logged in, the request passes through to the page without issue. 
- If they are **not** logged in, the middleware stops the request and redirects
them to the /login screen instead of showing the protected page.
