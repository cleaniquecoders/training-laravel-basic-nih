

### Visual Studio Code Extensions

- PHP Intelephese
- Blockman
- Laravel Blade Snippet
- Laravel Blade Formatter
- Tailwind CSS IntelliSense

### Browser

- Install Chrome
- Install Fake Filler Extension

### Artisan Command

```bash
php artisan make:controller UserController -r -m User
php artisan migrate:fresh --seed
php artisan db:seed
```

### Handling Form

- [ ] route, controller to handle update / store form submission
- [ ] input
- [ ] form with action, method, @csrf & @method  - if want to use for update / delete
- [ ] validation + error message


A user has many submissions
A user can create submissions



### Model

 - [x] User
 - [ ] Submission

 ### Migration

 - [x] User
 - [x] Submission
    - [x] id, user_id, title

 ### Factory

- [x] User
- [ ] Submission


### Relationships

- [x] Define Foreign Key in Migration
- [x] Define Relationship in Model
   - [x] Has Many
   - [x] Belongs To
- [x] Query Relationship
   - [x] Eager Load - \App\Models\User::with('submissions)->first();`
   - [x] Lazy Load - `$submission->load('user')`


### Notifications

- [x] create notification class - `php artisan make:notification WelcomeNotification`
- [x] publish notifications table
   - [x] `php artisan notification:table && php artisan migrate`
- [x] set notification for `via()`
   - [x] `['database', `mail`]
- [x] Install mailhog for local mail server - https://github.com/mailhog/MailHog/releases
- [x] Notify user
- [x] Create notification with markdown - `php artisan make:notification DefaultNotification --markdown=notifications.default`
   - [x] This will create blade file as well under `resources/views/notifications/default.blade.php`

```php
$user = \App\Models\User::first();
$user->notify(
   new \App\Notifications\WelcomeNotification($user)
);
```
