## About This Project

In this project we attempt to keep routing completely dynamic and handled by livewire instead of routes/web.php.

- Every model has a core view that handles contextual menus
- Full support for morph relationships
- Trying to keep everything very generic where possible

## Project Notes

- Let's say we have a firm that has an employee that has a note that has a document that has notes:  
`/firm/2/employee/3/note/5/document/8/notes`

- Also we want to support specific subviews, like uploading a document in the above scenario to a note.  
`/firm/2/employee/3/note/5/documents/upload`

- We also need to make sure that firms actually have employees, that employees have notes and that notes can have documents.   And this may vary based on the hierarchy itself.  

- We also need to ensure that if a model does indeed have child models, that the one we are trying to load, say Employee 3, actually belongs to Firm 2.

- So we have to check the hierarchy on every route, not only from a design perspective (can Model x have many Model y) but also from a data perspective, does Note 5 actually belong to Employee 3.

- The advantage we hope to achieve here is that whatever record we are looking at, we always have context all the way up the hierarchy.  We have very reusable code and code files live in a logical location.

- Security is another concern, which can also be handled fairly easily within our livewire router, as we can walk up the hierarchy and check policies along the way to make sure the current user has the right to be there.

- This is the only entry, and it directs all traffic to our custom router.  
`
Route::get('/{any?}', Routes::class)->where('any', '.*')->name('home');
`  
  
- We can still support traditional routes where the possible routes do require endless flexibility.  
`Route::get('/config', Config\Home::class)->name('config-home');
`  

## The different route combination possibilities are virtually endless, using a traditional router file is an option but can get quite huge.  This is an attempt to subvert that.  See how we do.

*This is built off the basic laravel 8 project with livewire.*
