# symfony_lucky_number
Reading the docs, making a symfony page

Note to self:
It occurs to me that there are similarities between Symfony and Flask.
As an aspiring pythonista, also working on an open-source Flask CRM project, I jumped into a project using PHP and Symfony rather blindly. At my beginner level, it was, needless to say, confusing.

Symfony is a full-stack framework with broad features and conventions.
Flask is a lightweight micro-framework with a minimalistic approach, allowing more flexibility and controll.

What do they have in common?

Routing: They map URLs to specific functions. Controllers define routes and handle HTTP requests with structure. In Symfony, a 'Route annotation' goes directly above the controller*. In Flask, a 'Route decorator' goes directly above the view function.

Templating: They have templating engines (twig and Jinja2) to separate the presentation logic from the application code.

Middleware: Both allow implementation of logging, authentication, and more. In flask, these are decorators.

ORM integration: Object Relational mapping libraries. Symfony uses doctrine, and Flask uses SQLalchemy. Developpers can interact with the databases in an object oriented way. This means using object and classes that represent tables and records, mapping tables to classes and rows to objects. It can be done without writing raw SQL statements explicitly. It's an ORM library of sorts.


*since PHP 8. Before that run 'composer require annotations'
