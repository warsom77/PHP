<?php

function nonActiveAccount(string $email) {
    global $students;
    global $instructors;

    if (!empty($students)) {
        foreach ($students as &$student) {
            if ($student["email"] == $email) {
                $student['status'] = 'nonactive';
                echo 'Akun telah dinonaktifkan.' . PHP_EOL;
                return;
            }
        }
    }

    foreach ($instructors as &$instructor) {
        if ($instructor["email"] == $email) {
            $instructor['status'] = 'nonactive';
            echo 'Akun telah dinonaktifkan.' . PHP_EOL;
            return;
        }
    }
}