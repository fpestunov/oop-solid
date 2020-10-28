# Laravel Example

```php
// PasswordBroker.php

public function sendReminder(RemindableInterface $user) {
    echo $user->getReminderEmail();
}
public function sendReminder(User $user) {}

// User.php
class User extends Eloquent implements UserInterface, RemindableInterface {
    public function getReminderEmail() {
        return $this->email;
    }
}

// RemindableInterface.php
interface RemindableInterface {
    public function getReminderEmail();
}
```