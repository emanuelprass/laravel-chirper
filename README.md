# Notes
---
## Create a new table
You can use this command to create a new table php artisan make:model -mrc `tableName`

This command will create three files for you:

- app/Models/`tableName`.php - The Eloquent model.
- database/migrations/timestamp_create_`tableName`_table.php - The database - migration that will create your database table.
- app/Http/Controller/`tableName`.php - The HTTP controller that will take incoming requests and return responses.
## Notification
Use this command to create notification
```
php artisan make:notification NewChirp
```

## Event
Event are a great way to decouple various aspect from you aplication, since a single even can have a multiple listener that don't depend on each other.
```
php artisan make:event ChirpCreated
```

## Create event listener
After dispatching an event then we'll listen for that event and send our notification

```
php artisan make:listener SendChirpCreatedNotifications --event=ChirpCreated
```