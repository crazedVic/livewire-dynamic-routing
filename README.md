## About Laravel

In this project we attempt to keep routing completely dynamic and handled by livewire instead of routes/web.php.

- Every model has a core view that handles contextual menus
- Full support for morph relationships
- Trying to keep everything very generic where possible

## The problem

Let's say we have a firm that has an employee that has a note that has a document that has notes:  
`/firm/2/employee/3/note/5/document/8/notes`

Also we want to support specific subviews, like uploading a document in the above scenario to a note.  
`/firm/2/employee/3/note/5/documents/upload`

We also need to make sure that firms actually have employees, that employees have notes and that notes can have documents.   And this may vary based on the hierarchy itself.  

We also need to ensure that if a model does indeed have child models, that the one we are trying to load, say Employee 3, actually belongs to Firm 2.

So we have to check the hierarchy on every route.

This is built off the basic laravel 8 project with livewire.
